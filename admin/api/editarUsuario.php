<?php
require_once('../../api/config/mysql.php');

	$db  = new dbConnect();
	$dbh = $db->conectardb();

	$rspta = json_decode(file_get_contents("php://input"));

	$us = $rspta->us;	
	$datos = $rspta->datosPersonales;


	$id_usuario=$us->id_usuario;
	$codigo_usuario=$us->login;
	$nombres=$us->nombres;
	$apellidos=$us->apellidos;
	$id_perfil=$us->id_perfil;

	$q="UPDATE usuario 
		set login=:codigo_usuario, nombres=:nombres, apellidos=:apellidos, dni=:dni, id_perfil=:id_perfil
		where id_usuario=:id_usuario";

	$stmt = $dbh->prepare($q);
	$stmt->bindParam(':id_usuario',  	    $id_usuario, PDO::PARAM_STR);
	$stmt->bindParam(':codigo_usuario',  	$codigo_usuario, PDO::PARAM_STR);
	$stmt->bindParam(':nombres',  			$nombres, PDO::PARAM_STR);
	$stmt->bindParam(':apellidos',  		$apellidos, PDO::PARAM_STR);
	$stmt->bindParam(':dni',  				$us->dni, PDO::PARAM_STR);
	$stmt->bindParam(':id_perfil',  		$id_perfil, PDO::PARAM_STR);
	
	$r = $stmt->execute();

	if($r){

		$q="DELETE from datos_personales
			where id_usuario=:id_usuario";

		$stmt = $dbh->prepare($q);
		$stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_STR);
		
		$r = $stmt->execute();

		foreach ($datos as $key => $value) {
		
			if($value->dato !=""){
				$q = "INSERT INTO datos_personales (id_usuario, tipo, dato)
		     	values (:id_usuario, :tipo, :dato)";
			
				$stmt = $dbh->prepare($q);
				$stmt->bindParam(':id_usuario',  $id_usuario, PDO::PARAM_STR);
				$stmt->bindParam(':tipo',  $value->tipo, PDO::PARAM_STR);
				$stmt->bindParam(':dato',  $value->dato, PDO::PARAM_STR);
				
				$r = $stmt->execute();
			}

		}
	}

	//var_dump($r);
	echo json_encode($r);

 ?>
  

