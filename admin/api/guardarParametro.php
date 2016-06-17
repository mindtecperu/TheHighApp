<?php
require_once('../../api/config/mysql.php');

	$db  = new dbConnect();
	$dbh = $db->conectardb();

	$rspta = json_decode(file_get_contents("php://input"));

	$pa = $rspta->pa;
	$estado=1;
	
	// verificando que el nombre del parámetro ingresado no exista

	$q = "SELECT 1 as resultado from parametro where lower(nombre_parametro)=lower(:nombre_parametro)";
	
	$stmt = $dbh->prepare($q);
	$stmt->bindParam(':nombre_parametro', $pa->nombre_parametro, PDO::PARAM_STR);
	$stmt->execute();

	$r = $stmt->fetch(PDO::FETCH_ASSOC);

	if(isset($r['resultado'])){
		$mensaje =array('Error' => 'Error: El nombre del parámetro ingresado ya existe.');
	}
	else{
		$q = "INSERT INTO parametro (nombre_parametro, id_tipo_dato, estado, created_at)
     	values (:nombre_parametro, :id_tipo_dato, :estado, CURRENT_TIMESTAMP)";
	
		$stmt = $dbh->prepare($q);
		$stmt->bindParam(':nombre_parametro', $pa->nombre_parametro, PDO::PARAM_STR);
		$stmt->bindParam(':id_tipo_dato', $pa->id_tipo_dato, PDO::PARAM_STR);
		$stmt->bindParam(':estado', $estado, PDO::PARAM_STR);
		
		$r = $stmt->execute();
		$lastId = $dbh->lastInsertId();

		$mensaje =array('Success' => 'Parámetro creado exitosamente.');
	}

	echo json_encode($mensaje);
 ?>
  

