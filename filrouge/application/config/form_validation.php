<?php
defined('BASEPATH') or exit('No direct script access allowed');

$config = array(
	'contact/inscription' => array(
		array(
			'field' => 'name',
			'label' => 'nom',
			'rules' => array(
				'required',
				'min_length[3]',
				'max_length[15]')
		),
		array(
			'field' => 'username',
			'label' => 'prénom',
			'rules' => array(
				'required',
				'min_length[3]',
				'max_length[15]')
		),
		array(
			'field' => 'city',
			'label' => 'ville',
			'rules' => array(
				'min_length[3]',
				'max_length[15]',
				'required')
		),
		array(
			'field' => 'email',
			'label' => 'email',
			'rules' => array(
				'valid_email',
				'required')
		),
		array(
			'field' => 'password',
			'label' => 'mot de passe',
			'rules' => array(
				'min_length[3]',
				'max_length[15]',
				'required')
		),
		array(
			'field' => 'comfirm_password',
			'label' => 'comfirmation mot de passe',
			'rules' => array(
				'min_length[3]',
				'max_length[15]',
				'required',
				'matches[password]'))
	));

	 $config = array(
	'produits/create_produits' => array(
		array(
			'field' => 'pro_lib',
			'label' => 'libelle',
			'rules' => array(
				'required',
				'min_length[3]',
				'max_length[15]')
		)
	));


