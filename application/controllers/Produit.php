<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produit extends CI_Controller {

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
	public function infoProduit($idProduit)
	{
		//Ne charge ce fichier /Librairie UNIQUEMENT POUR CETTE PAGE
		//Il est charge de maniere automatique dans config autoload
		//$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->helper('form');

//Aller chercher les infos du model
		$this->load->model("Produit_model");
		$this->load->model("Commentaire_model");

//Appel de la method "findProduitById" dans le model
		$produit=$this->Produit_model->findProduitById($idProduit);

		//var_dump($produit); OK

//Pour les regles custom, regarder en bas de 
	// http://www.codeigniter.com/user_guide/libraries/form_validation.html

//Parametrer les regles ET les messages d'erreurs de saisie dans le
	// formulaire

		var_dump($_POST);
		$this->form_validation->set_rules('auteur', 'NOM', 
			'required', array('required'=>'Vous devez 
				entrer un nom pour valider le formulaire.'));


		$this->form_validation->set_rules('commentaire', 'COMMENTAIRE', 'required', array('required'=>'Vous devez 
				entrer un commentaire pour valider le formulaire.'));

		$this->form_validation->set_rules('note', 'NOTE', 
			'required|less_than[6]|greater_than[0]', array('required' 
				=> 'Vous devez entrer un nom pour valider le 
				formulaire.', 'less_than[6]' => 'Vous 
		 	devez rentrer une note inferieur ou egale à 5', 
		 	'greater_than[0]' => 'Vous devez rentrer une note
		 	 superieur ou egale à 0'));

//Parametrer les messages d'erreurs
		
		if ($this->form_validation->run() == TRUE)
        {
            $data = array(
				'auteur' => $this->input->post('auteur'),
				'contenu' => $this->input->post('commentaire'),
				'note' => $this->input->post('note'),
				'produit_idproduit' => $idProduit,
				'dateCommentaire' => date('Y-m-d H:i:s')
			);

			$this->Commentaire_model->form_insert($data);

            die("Formulaire valide");
        }


		
//Chargement de la vue
		$this->load->view('produit/infoProduit', ['leproduit'=>$produit, 'idProduit'=>$idProduit]);

		
	}

}