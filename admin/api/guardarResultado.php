<?php
require_once('../../api/config/mysql.php');

	$db  = new dbConnect();
	$dbh = $db->conectardb();

	$rspta = json_decode(file_get_contents("php://input"));

	$re = $rspta->re;
	$estado=1;
	
	// verificando que el nombre del resultado ingresado no exista

	$q = "SELECT 1 as resultado from resultado where lower(nombre_resultado)=lower(:nombre_resultado)";
	
	$stmt = $dbh->prepare($q);
	$stmt->bindParam(':nombre_resultado', $re->nombre_resultado, PDO::PARAM_STR);
	$stmt->execute();

	$r = $stmt->fetch(PDO::FETCH_ASSOC);

	if(isset($r['resultado'])){
		$mensaje =array('Error' => 'Error: El nombre del resultado ingresado ya existe.');
	}
	else{
		$q = "INSERT INTO resultado (nombre_resultado, observacion, recomendacion, id_color, estado, created_at)
     	values (:nombre_resultado, :observacion, :recomendacion, :id_color, :estado, CURRENT_TIMESTAMP)";
	
		$stmt = $dbh->prepare($q);
		$stmt->bindParam(':nombre_resultado', $re->nombre_resultado, PDO::PARAM_STR);
		$stmt->bindParam(':observacion', $re->observacion, PDO::PARAM_STR);
		$stmt->bindParam(':recomendacion', $re->recomendacion, PDO::PARAM_STR);
		$stmt->bindParam(':id_color', $re->id_color, PDO::PARAM_INT);
		$stmt->bindParam(':estado', $estado, PDO::PARAM_STR);
		
		$r = $stmt->execute();
		$lastId = $dbh->lastInsertId();

		$mensaje =array('Success' => 'Resultado creado exitosamente.');
	}

	echo json_encode($mensaje);
 ?>
  

