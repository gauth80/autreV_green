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

	
	/*public function recup_produit($pro_slug = NULL) {
		if($pro_slug !== NULL) {
			$query = $this->db->get_where('produits', array(
				'pro_slug' => $pro_slug,
				'pro_desc' => $this->load->produit('pro_desc'),
				'pro_price' => $this->load->produit('pro_price'),
				'pro_stock' => $this->load->produit('pro_stock'),
				'pro_ext' => $this->load->produit('pro_ext'),
				'pro_hydrate' => $this->load->produit('pro_hydrate'),
				'pro_alt' => $this->load->produit('pro_alt'),
				'pro_title' => $this->load->produit('pro_title')
			));
			return $query->result_array();
		}*/
	
}