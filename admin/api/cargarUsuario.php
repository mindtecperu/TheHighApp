<?php
require_once('../../api/config/mysql.php');

	$db  = new dbConnect();
	$dbh = $db->conectardb();

	session_start();

	$rspta = json_decode(file_get_contents("php://input"));

	$id_usuario = isset($_SESSION['IDUSUARIO'])?$_SESSION['IDUSUARIO']:NULL;

	$q = "SELECT *
     from usuario where id_usuario=:id_usuario";
	
	$stmt = $dbh->prepare($q);
	$stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
	$stmt->execute();
	$r = $stmt->fetch(PDO::FETCH_ASSOC);

	//var_dump($r);
	echo json_encode($r);

 ?>
