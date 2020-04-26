<?php

if(isset($_POST['pro_price']) && !empty($_POST['pro_price'])) {

	$erreur = '';

    $input = trim($_POST['pro_price']);
    if(empty($input)) {
        $erreur = "Veuillez entrée un prix";
    } else {
        $pro_price = $input;
    }

    if(empty($erreur)) {
    	require_once('database.php');

    	$db->beginTransaction();
		
		$query = "UPDATE produits SET pro_price=:pro_price WHERE pro_id=:pro_id";

		if($stm = $db->prepare($query)) {
            $stm->bindParam(":pro_price", $param_price, PDO::PARAM_FLOAT);
            $stm->bindParam(":pro_id", $param_id, PDO::PARAM_INT);

            $param_price = $pro_price;
            $param_id = $pro_id;


            if($stm->execute()) {
            	$db->commit();
                header('location: autre.php');
                exit();
            } else {

                $db->rollBack();
                $erreur = "Une erreur est survenue";
            }

		}
		unset($stm);
    }
    unset($db)
}
