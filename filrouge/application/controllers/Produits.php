<?php
defined ('BASEPATH') OR exit ('No direct script access allowed') ;

/**
 * 
 */
class Produits extends CI_Controller {
	public $_Produits;

	public function __construct() {
		parent::__construct();
		$this->load->model('Produits_model');

		// une secu en plus
		$this->_Produits = new Produits_model;
	}

	public function aff() {
		$data['produits'] = $this->produits->recup_produit();

	  	$this->load->view('layouts/header')
        $this->templates->display('produits/aff', $data)
        $this->load->view('layouts/footer');

	}
	
}