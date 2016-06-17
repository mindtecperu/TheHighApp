<?php
require_once('../../api/config/mysql.php');

	$db  = new dbConnect();
	$dbh = $db->conectardb();

	$rspta = json_decode(file_get_contents("php://input"));

	$us = $rspta->usuario;
	$password = md5($us->password_nuevo);
	$actual = $us->password;
	$actual_puesto = md5($us->password_actual);

	if($actual==$actual_puesto){
		$q="UPDATE usuario 
			set password=:password
			where id_usuario=:id_usuario";

		$stmt = $dbh->prepare($q);
		$stmt->bindParam(':password', $password, PDO::PARAM_STR);
		$stmt->bindParam(':id_usuario', $us->id_usuario, PDO::PARAM_INT);
		
		$r = $stmt->execute();

		$resultado = array('Success' => 'true');
		
	}else{
		$resultado = array('Error' => 'false');
	}

	echo json_encode($resultado);

 ?>