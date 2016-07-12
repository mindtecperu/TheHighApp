<?php
require_once('../../api/config/mysql.php');

	$db  = new dbConnect();
	$dbh = $db->conectardb();

	$rspta = json_decode(file_get_contents("php://input"));

	$etiqueta = $rspta->etiqueta->etiqueta;
	$id_parametro = $rspta->id;
	$estado=1;
	
	// verificando que el nombre de la opcion ingresada no exista
	$q = "SELECT 1 as resultado from maestro where lower(etiqueta)=lower(:etiqueta) and id_parametro=:id_parametro";
	
	$stmt = $dbh->prepare($q);
	$stmt->bindParam(':etiqueta', $etiqueta, PDO::PARAM_STR);
	$stmt->bindParam(':id_parametro', $id_parametro, PDO::PARAM_STR);
	$stmt->execute();

	$r = $stmt->fetch(PDO::FETCH_ASSOC);

	if(isset($r['resultado'])){
		$mensaje =array('Error' => 'Error: El nombre de la etiqueta ingresada ya existe.');
	}
	else{
		$q = "INSERT INTO maestro (id_parametro, etiqueta, estado)
     	values (:id_parametro, :etiqueta, :estado)";
	
		$stmt = $dbh->prepare($q);
		$stmt->bindParam(':etiqueta', $etiqueta, PDO::PARAM_STR);
		$stmt->bindParam(':id_parametro', $id_parametro, PDO::PARAM_STR);
		$stmt->bindParam(':estado', $estado, PDO::PARAM_STR);
		
		$r = $stmt->execute();
		$lastId = $dbh->lastInsertId();

		$mensaje =array('Success' => 'Opción creada exitosamente.', 'id' => $lastId);
	}

	echo json_encode($mensaje);
?>