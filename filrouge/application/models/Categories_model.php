<?php


/**
 * 
 */
class Categories_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}

	public function get_categories_data() {
		$this->db->select('*')
			     ->order_by('categorie.CAT_ID', 'ASC')
			     ->join('categorie', 'categorie.CAT_ID = produits.CAT_ID');
						  
		$query = $this->db->get('categorie');
		return $query->result();
	}
}