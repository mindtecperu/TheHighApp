<?php
require_once('../../api/config/mysql.php');

	$db  = new dbConnect();
	$dbh = $db->conectardb();

	$rspta = json_decode(file_get_contents("php://input"));

	$nus = $rspta->nus;
	$datos = $rspta->datosPersonales;
	$password=md5($nus->password);
	$estado=1;
	
	// verificando que el código ingresado no exista

	$q = "SELECT 1 as resultado from usuario where lower(login)=lower(:codigo_usuario)";
	
	$stmt = $dbh->prepare($q);
	$stmt->bindParam(':codigo_usuario',  $nus->codigo_usuario, PDO::PARAM_STR);
	$stmt->execute();

	$r = $stmt->fetch(PDO::FETCH_ASSOC);

	if(isset($r['resultado'])){
		$mensaje =array('Error' => 'Error: El codigo ingresado ya existe.');
	}
	else{
		$q = "INSERT INTO usuario (login, nombres, apellidos, password, dni, estado, id_perfil, created_at)
     	values (:codigo_usuario, :nombres, :apellidos, :password, :dni, :estado, :id_perfil, CURRENT_TIMESTAMP)";
	
		$stmt = $dbh->prepare($q);
		$stmt->bindParam(':codigo_usuario',  $nus->codigo_usuario, PDO::PARAM_STR);
		$stmt->bindParam(':nombres',  $nus->nombres, PDO::PARAM_STR);
		$stmt->bindParam(':apellidos',  $nus->apellidos, PDO::PARAM_STR);
		$stmt->bindParam(':password',  $password, PDO::PARAM_STR);
		$stmt->bindParam(':dni',  $nus->dni, PDO::PARAM_STR);
		$stmt->bindParam(':estado',  $estado, PDO::PARAM_STR);
		$stmt->bindParam(':id_perfil',  $nus->nombre_perfil, PDO::PARAM_STR);
		
		$r = $stmt->execute();
		$lastId = $dbh->lastInsertId();

		$mensaje =array('Success' => 'Usuario creado exitosamente.');

		foreach ($datos as $key => $value) {
			if($value->dato !=""){

				$q = "INSERT INTO datos_personales (id_usuario, tipo, dato)
		     	values (:id_usuario, :tipo, :dato)";
			
				$stmt = $dbh->prepare($q);
				$stmt->bindParam(':id_usuario',  $lastId, PDO::PARAM_STR);
				$stmt->bindParam(':tipo',  $value->tipo, PDO::PARAM_STR);
				$stmt->bindParam(':dato',  $value->dato, PDO::PARAM_STR);
				
				$r = $stmt->execute();
			}
		}
	}

	echo json_encode($mensaje);
 ?>
  

