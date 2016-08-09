<?php
require_once('../../api/config/mysql.php');

	$db  = new dbConnect();
	$dbh = $db->conectardb();
	$respuesta = array();

	$q = "SELECT * 
		FROM reporte";
	
	$stmt = $dbh->prepare($q);
	$stmt->execute();
	$r = $stmt->fetchAll(PDO::FETCH_ASSOC);

	array_push($respuesta, $r);

	$q = "SELECT rp.id_reporte, rp.id_parametro, rp.valorInt, rp.valorStr, pa.nombre_parametro, pa.abreviatura, pa.unidad, pa.id_tipo_dato
		FROM reporte_parametros rp
		INNER JOIN parametro pa on rp.id_parametro=pa.id_parametro";
	
	$stmt = $dbh->prepare($q);
	$stmt->execute();
	$r = $stmt->fetchAll(PDO::FETCH_ASSOC);

	array_push($respuesta, $r);

	echo json_encode($respuesta);

 ?>