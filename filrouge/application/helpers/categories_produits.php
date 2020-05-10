<?php  

function categories_produits() {

    $ci=& get_instance();
    $ci->load->database(); 

    $sql = 'SELECT CAT_ID, PRO_ID, CAT_LIBELLE FROM categorie LEFT OUTER JOIN produits ON categorie.CAT_ID = produits.PRO_ID'; 
    $query = $ci->db->query($sql);
    $row = $query->result();

    
}