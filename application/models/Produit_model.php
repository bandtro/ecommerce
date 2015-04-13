<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produit_model extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function findLimit($nb=5){

		//$requette=$this->db->get("produit", $nb);
		//var_dump($requette->result("Produit"));

		$sql="SELECT * FROM produit LIMIT ?";
		$query=$this->db->query($sql, [$nb]);

		return $query->result("Produit_model");

		die("class Produit");

	}

	public function findProduitById($produitId){

		$sql="SELECT * FROM produit WHERE idproduit=?";
		$query=$this->db->query($sql, [$produitId]);


		return $query->unbuffered_row("Produit_model");

	}



	public function displayImage(){
		return base_url()."assets/img/".$this->img;
	}

	public function goToProduit(){
		return site_url('Produit/infoProduit')."/".$this->idproduit;

	}

}