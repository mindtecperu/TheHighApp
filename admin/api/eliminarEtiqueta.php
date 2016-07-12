<?php
require_once('../../api/config/mysql.php');

	$db  = new dbConnect();
	$dbh = $db->conectardb();

	$rspta = json_decode(file_get_contents("php://input"));

	$id_maestro = $rspta->id_maestro;
	$id_parametro = $rspta->id_parametro;
	
	// verificando que el maestro a borrar no exista en un diagnóstico
	$q = "SELECT 1 as resultado from parametros_diagnostico where id_parametro=:id_parametro and valor=:valor";
	
	$stmt = $dbh->prepare($q);
	$stmt->bindParam(':id_parametro', $id_parametro, PDO::PARAM_INT);
	$stmt->bindParam(':valor', $id_maestro, PDO::PARAM_INT);
	$stmt->execute();

	$r = $stmt->fetch(PDO::FETCH_ASSOC);

	if(isset($r['resultado'])){
		$mensaje =array('Error' => 'Error: La opción que desea borrar está siendo usada en un diagnóstico existente. Pruebe inhabilitando la opción en lugar de eliminarla.');
	}
	else{
		$q = "DELETE FROM maestro where id_maestro=:id_maestro";
	
		$stmt = $dbh->prepare($q);
		$stmt->bindParam(':id_maestro', $id_maestro, PDO::PARAM_INT);
		
		$r = $stmt->execute();

		$mensaje =array('Success' => 'Opción eliminada exitosamente.');
	}

	echo json_encode($mensaje);
?>