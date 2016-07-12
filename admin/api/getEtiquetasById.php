<?php
require_once('../../api/config/mysql.php');

	$db  = new dbConnect();
	$dbh = $db->conectardb();

	$rspta = json_decode(file_get_contents("php://input"));
	$id = $rspta->id;
	$respuesta = array();

	$q = "SELECT *
     from maestro where id_parametro=:id_parametro";
	
	$stmt = $dbh->prepare($q);
	$stmt->bindParam(':id_parametro', $id, PDO::PARAM_STR);
	$stmt->execute();
	$r = $stmt->fetchAll(PDO::FETCH_ASSOC);

	//var_dump($r);
	echo json_encode($r);

 ?>
