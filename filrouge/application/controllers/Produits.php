<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produits extends CI_Controller {

	public function index() {

    $this->templates->display('produits/index');
  }

}