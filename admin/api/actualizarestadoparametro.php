<?php
require_once('../../api/config/mysql.php');

	$db  = new dbConnect();
	$dbh = $db->conectardb();

	$rspta = json_decode(file_get_contents("php://input"));
	$error=0;

	$id_parametro = $rspta->id;
	$estado = $rspta->estado;
	if($estado==0)
	{
      $estado=1;
	}
	else
	{ 
		$estado=0;

		// verificando que el parametro a deshabilitar no esté en ningun diagnóstico activo
		$q = "SELECT 1 as resultado FROM parametros_diagnostico pg
			INNER JOIN diagnostico dg on pg.id_diagnostico = dg.id_diagnostico
			WHERE pg.id_parametro=:id_parametro and dg.estado=1";
		
		$stmt = $dbh->prepare($q);
		$stmt->bindParam(':id_parametro', $id_parametro, PDO::PARAM_INT);
		$stmt->execute();

		$r = $stmt->fetch(PDO::FETCH_ASSOC);

		if(isset($r['resultado'])){
			$error=1;
			$mensaje =array('Error' => 'Error: No puede inhabilitar un parametro que se encuentra en un diagnostico activo.');
		}
	}

	if($error == 0){
		$q="UPDATE parametro 
				set estado=:estado
				where id_parametro=:id_parametro";
		
		$stmt = $dbh->prepare($q);
		$stmt->bindParam(':id_parametro',  $id_parametro, PDO::PARAM_INT);
		$stmt->bindParam(':estado',  $estado, PDO::PARAM_STR);
		
		$stmt->execute();

		$mensaje =array('success' => 'Cambio de estado satisfactorio.');
	}

	//var_dump($r);
	echo json_encode($mensaje);

 ?>
  

