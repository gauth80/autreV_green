<?php

defined('BASEPATH') or exit('No direct script access allowed');
/*
 * 	sert a instancier la vue de base
 *
*/

class Path extends CI_Controller {

	public function index() {
  	$this->load->view('layouts/header')
      			   ->view('pages/accueil')
      			   ->view('layouts/footer');
  }

  public function inscription() {
  	$this->load->helper("form")
  			       ->library("form_validation");

  	if($this->form_validation->run()) {
  		$this->index();
  	} else {
  	  $this->load->view('layouts/header')
    			 		   ->view('pages/inscription')
    	           ->view('layouts/footer');
  	}
  }
}