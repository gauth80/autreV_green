<?php

/**
 * 	Pour ne pas trop s'y perdre, se qui est en Maj fais partie de la bdd
 */
class Produits_model extends CI_Model {

	public function get_produits() {

		$this->db->having('PRO_STOCK_PHYSIQUE != 0')
				 ->order_by('PRO_REF', 'ASC');
						  
		$query = $this->db->get('produits');
		return $query->result();
	}
	
	/*data => input*/
	public function insert_produits() {
		$data = array(
			'PRO_LIBELLE' => 'pro_lib',
			'PRO_REF' => 'pro_ref',
			'PRO_DESCRIPTION' => 'pro_desc',
			'PRO_PRIX_ACHAT' => 'pro_prix',
			'PRO_PHOTO' => 'pro_img',
			'PRO_STOCK_PHYSIQUE' => 'pro_stock'
			//'CAT_LIBELLE'
		);
		$query = $this->db->set($data)->get_compiled_insert('produits');
	}

	
}