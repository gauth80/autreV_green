<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produits extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Produits_model')
			       ->helper(array('inflector','form'))
			       ->library('form_validation');

	}

	public function index() {
		//sub - option - ne sert pas dans ce context
		$produits = new Produits_model;

		$data['data']= $this->produits_model->get_produits();

	
    $this->templates->display('produits/index', $data);
  }

	public function create_produits() {


		if($this->input->post('create_pro')) {
			
			//$this->form_validation->run();
	  		$config['upload_path'] = './assets/img/produits/listes/';
	        $config['allowed_types'] = 'jpg|png';
	        $config['max_size'] = '800000'; 
	        $config['max_width'] = '2000';
	        $config['max_height'] = '2000';
	        $slug = url_title($this->input->post('pro_lib'), '_', true);
			$config['file_name'] = $slug;

            $this->load->library('upload', $config);
			$this->upload->initialize($config);

                if(!$this->upload->do_upload($pro_img = 'img', $slug)) {
                    $errors = array('error' => $this->upload->display_errors());
                    //$url_error = './assets/img/produits/listes/';
                    $pro_img = 'noimage.jpg';
                    redirect('produits/index');

                } else {
					
                    $data = array('upload_data' => $this->upload->data());
            		$pro_img = substr($this->upload->data('file_ext'), 1);
					$this->produits_model->insert_produits($pro_img, $slug);
                    redirect('administration/index');
                }

		}

	}
  	
}