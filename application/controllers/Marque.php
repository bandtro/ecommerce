<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marque extends CI_Controller {

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
	
	public function toutesMarques(){

		//Aller chercher les infos du model
		$this->load->model("Marque_model");

//Appel de la method "findProduitById" dans le model
		$allMarques=$this->Marque_model->getAllMarques();

		//var_dump($produit); OK
		
//Chargement de la vue
		$this->load->view('marque/toutesMarques', ['toutesLesMarques'=>$allMarques]);
	}

}