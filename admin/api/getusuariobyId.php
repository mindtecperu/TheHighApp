<?php
require_once('../../api/config/mysql.php');

	$db  = new dbConnect();
	$dbh = $db->conectardb();

	$rspta = json_decode(file_get_contents("php://input"));
	$id = $rspta->id;
	$respuesta = array();

	$q = "SELECT *
     from usuario where id_usuario=:id_usuario";
	
	$stmt = $dbh->prepare($q);
	$stmt->bindParam(':id_usuario', $id, PDO::PARAM_STR);
	$stmt->execute();
	$r = $stmt->fetch(PDO::FETCH_ASSOC);

	array_push($respuesta, $r);

	// Obteniendo los datos personales de los consultores
	$q = "SELECT *, 'true' as borrar
		FROM datos_personales where id_usuario=:id_usuario";
	
	$stmt = $dbh->prepare($q);
	$stmt->bindParam(':id_usuario', $id, PDO::PARAM_STR);
	$stmt->execute();
	$r = $stmt->fetchAll(PDO::FETCH_ASSOC);

	array_push($respuesta, $r);


	//var_dump($r);
	echo json_encode($respuesta);

 ?>
