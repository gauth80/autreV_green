<?php
defined('BASEPATH') or exit('No direct script access allowed');

$config = array(
	'path/inscription' => array(
		array(
			'field' => 'name',
			'rules' => array(
				'required',
				'min_length[3]',
				'max_length[15]')
		),
		array(
			'field' => 'username',
			'rules' => array(
				'required',
				'min_length[3]',
				'max_length[15]')
		),
		array(
			'field' => 'city',
			'rules' => array(
				'min_length[3]',
				'max_length[15]',
				'required')
		),
		array(
			'field' => 'mail',
			'rules' => array(
				'valid_email',
				'required')
		),
		array(
			'field' => 'password',
			'rules' => array(
				'min_length[3]',
				'max_length[15]',
				'required')
		),
		array(
			'field' => 'comfirm_password',
			'rules' => array(
				'min_length[3]',
				'max_length[15]',
				'required',
				'matches[password]')
		
		
		)));