<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller {

  public function inscription() {
  	$this->load->helper("form")
  			       ->library("form_validation");

  	if($this->form_validation->run()) {
  		$this->index();
  	} else {
      $this->templates->display('contact/inscription');
  	}
  }

}