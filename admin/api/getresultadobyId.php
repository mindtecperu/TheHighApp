<?php
require_once('../../api/config/mysql.php');

	$db  = new dbConnect();
	$dbh = $db->conectardb();

	$rspta = json_decode(file_get_contents("php://input"));
	$id = $rspta->id;
	$respuesta = array();

	$q = "SELECT *
     from resultado where id_resultado=:id_resultado";
	
	$stmt = $dbh->prepare($q);
	$stmt->bindParam(':id_resultado', $id, PDO::PARAM_STR);
	$stmt->execute();
	$r = $stmt->fetch(PDO::FETCH_ASSOC);

	array_push($respuesta, $r);

	//var_dump($r);
	echo json_encode($respuesta);

 ?>
