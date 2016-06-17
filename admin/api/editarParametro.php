<?php
require_once('../../api/config/mysql.php');

	$db  = new dbConnect();
	$dbh = $db->conectardb();

	$rspta = json_decode(file_get_contents("php://input"));

	$pa = $rspta->pa;	

	$q="UPDATE parametro 
		set nombre_parametro=:nombre_parametro, id_tipo_dato=:id_tipo_dato
		where id_parametro=:id_parametro";

	$stmt = $dbh->prepare($q);
	$stmt->bindParam(':id_parametro',  	    $pa->id_parametro, PDO::PARAM_STR);
	$stmt->bindParam(':nombre_parametro',  	$pa->nombre_parametro, PDO::PARAM_STR);
	$stmt->bindParam(':id_tipo_dato',  		$pa->id_tipo_dato, PDO::PARAM_STR);
	
	$r = $stmt->execute();

	//var_dump($r);
	echo json_encode($r);

 ?>
  

