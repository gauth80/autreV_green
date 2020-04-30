<?php

/**
 * 	like ne peu fonctionnée sans or_like, l'idéal serais de trouver une condition, si
	le contenue de like est vide alors afficher stock vide par exemple
 */
class Produits_model extends CI_Model {

	public function get_produits() {
		if(!empty($this->input->get(''))) {
			//$uri_dash = underscore()
			$this->db->like(
				'PRO_LIBELLE',
				'PRO_REF',
				'PRO_PRIX_ACHAT',
				'PRO_PHOTO',
				'PRO_DESCRIPTION',
				 $this->input->get(''))
					 ->or_like('PRO_STOCK_PHYSIQUE', $this->input->get(''));
		}

		$query = $this->db->get('produits');
		return $query->result();
	}

	
}