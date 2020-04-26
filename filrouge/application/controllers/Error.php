<?php

	/**
	 * Ctrl Error 404
		A s'couupé plus tard
	 */
	class Error extends CI_Controller {
		function error404() {



			$this->load->view('layouts/header')
					   ->view('errors/error404')
					   ->view('layouts/footer');
		}
	}