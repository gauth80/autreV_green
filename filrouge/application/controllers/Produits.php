<?php
/*
*   TODO
*   <imp> delete aussi l'image lors d'un delete produits, egalement lors d'un update
*   <imp> & <op> Responsive a faire
*   <op> Faire un helper upload image et le charger dans les deux methodes
*   <op> Appliquez la transition des tables en Jquery ou Js
*   <op> Image de substitue en cas d'echec d'upload
*/


defined('BASEPATH') or exit('No direct script access allowed');

class Produits extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Produits_model')
			       ->helper(array('inflector','form','file'))
			       ->library('form_validation');
	}


	public function index() {
		$data['data'] = $this->produits_model->get_produits_for_client();
        $this->templates->display('produits/index', $data);
    }


	public function create_produits() {

		if($this->input->post('create_pro')) {
			
			if($this->form_validation->run() == FALSE) {
                //retribution des data
                $data['data'] = $this->produits_model->get_produits_for_personnal();
                $data['cat_exist'] = $this->produits_model->get_categories_data();
                $this->templates->display('administration/index', $data);
            } else {
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
                    $pro_img = 'noimage.jpg';
                    redirect('administration/index');

                } else {
    
                    $data = array('upload_data' => $this->upload->data());
                    $pro_img = substr($this->upload->data('file_ext'), 1);
                    $this->produits_model->insert_produits($pro_img, $slug);
                    redirect('administration/index');
                }
            }
		}
	}


    public function modifiez_produits() {

        if($this->input->post('modifiez_pro')) {
       
            if($this->form_validation->run() == FALSE) {

                $data['data'] = $this->produits_model->get_produits_for_personnal();
                $data['cat_exist'] = $this->produits_model->get_categories_data();
                $this->templates->display('administration/index', $data);
            } else {
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
                    $pro_img = 'noimage.jpg';
                    redirect('administration/index');

                } else {

                    $data = array('upload_data' => $this->upload->data());
                    $pro_img = substr($this->upload->data('file_ext'), 1);
                    $this->produits_model->update_produits($pro_img, $slug);
                    redirect('administration/index');
                }
            }
        }
    }


    public function delete_produits() {
        if($this->input->post('delete_pro')) {
            $id = $this->input->post('pro_exist');
            $this->produits_model->delete_produits($id);      
            redirect('administration/index');
        }
    }
		
  	
}