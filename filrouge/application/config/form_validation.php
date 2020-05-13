<?php

/*
*	teste unitaire

*	Contact/inscription

*	<imp>	A rajoutée sur champs email rules => is_unique[table.champs]
*	<imp>	# -- semble passée dans champs email(soucie d'injection permanente)
*	<op>	Problème de translate pour la régle alpha_numeric_spaces

*	Produits/create/update
*	<imp>	# -- passe, a rectifiez
*	Info:

*	Chaque tableau multidimentionel est associer a un path, ce path c'est controller/method référent aux class
*	Une librairy externe a CI a étais installé, elle traduits chaques erreurs de champs en français, inutile d'utiliser
*	Set_message('')

*/

defined('BASEPATH') or exit('No direct script access allowed');

$config = array(
	'contact/inscription' => array(
		array(
			'field' => 'name',
			'label' => 'nom',
			'rules' => 'required|min_length[3]|max_length[15]|alpha_numeric_spaces|trim'
		),

		array(
			'field' => 'username',
			'label' => 'prénom',
			'rules' => 'required|min_length[3]|max_length[15]|alpha_numeric_spaces|trim'
		),

		array(
			'field' => 'city',
			'label' => 'ville',
			'rules' => 'required|min_length[3]|max_length[15]|alpha_numeric_spaces|trim'
		),

		array(
			'field' => 'street',
			'label' => 'adresse',
			'rules' => 'required|min_length[6]|max_length[50]|alpha_numeric_spaces|trim'
		),

		array(
			'field' => 'zipcode',
			'label' => 'code postal',
			'rules' => 'required|min_length[6]|max_length[9]|alpha_numeric_spaces|trim'
		),

		array(
			'field' => 'cell',
			'label' => 'numéro de téléphone',
			'rules' => 'required|min_length[6]|max_length[9]|alpha_numeric|is_natural|trim'
		),

		array(
			'field' => 'email',
			'label' => 'email',
			'rules' => 'required|min_length[6]|max_length[50]|trim|valid_email'
		),

		array(
			'field' => 'password',
			'label' => 'mot de passe',
			'rules' => 'min_length[3]|max_length[15]|required'
		),

		array(
			'field' => 'comfirm_password',
			'label' => 'comfirmation mot de passe',
			'rules' => 'min_length[3]|max_length[15]|required|matches[password]'
		)
	),

	'produits/create_produits','produits/modifiez_produits' => array(
		array(
			'field' => 'pro_lib',
			'label' => 'libelle',
			'rules' => 'required|min_length[3]|max_length[50]|alpha_numeric_spaces|trim'
		),

		array(
			'field' => 'pro_ref',
			'label' => 'référence',
			'rules' => 'required|min_length[3]|max_length[7]|alpha_numeric_spaces|trim|is_unique[produits.PRO_REF]'
		),

		array(
			'field' => 'pro_prix',
			'label' => 'prix',
			'rules' => 'required|min_length[1]|max_length[7]|decimal|trim'
		),

		array(
			'field' => 'pro_stock',
			'label' => 'stock',
			'rules' => 'required|min_length[1]|max_length[3]|alpha_numeric|integer|trim'
		),

		array(
			'field' => 'pro_desc',
			'label' => 'description',
			'rules' => 'required|min_length[8]|max_length[999]|alpha_numeric_spaces|trim'
		)
	)


);