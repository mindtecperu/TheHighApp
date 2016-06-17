<?php
session_start();

$resultado = array();

$resultado['id_usuario'] = isset($_SESSION['IDUSUARIO'])?$_SESSION['IDUSUARIO']:null;

if($resultado['id_usuario']!=null){
	$resultado['login'] = $_SESSION['login'];
	$resultado['nombres'] = $_SESSION['nombreus'];
	$resultado['apellidos'] = $_SESSION['apellidous'];
	$resultado['perfil'] = $_SESSION['perfil'];
	$resultado['tipo'] = $_SESSION['type'];
}

echo json_encode($resultado);

 ?>

  




