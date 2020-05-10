<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class Administration extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Produits_model');
	}
	
	public function index() {
		$data['data'] = $this->produits_model->get_produits_for_personnal();
		$this->templates->display('administration/index', $data);
	}
}
