<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Path extends CI_Controller {

	public function index() {

    $this->templates->display('pages/accueil');
  }

  /*
  * Il est possible de passez des fonctions en guise d'argument
  */
  public function assistance() { 
    $this->templates->display('pages/assistance');
     function service() {$this->templates->display('pages/assistance');}
     function aide() {$this->templates->display('pages/assistance');}
     function propos() {$this->templates->display('pages/assistance');}
  }
}