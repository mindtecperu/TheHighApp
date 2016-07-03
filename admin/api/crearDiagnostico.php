<?php
require_once('../../api/config/mysql.php');

$db  = new dbConnect();
$dbh = $db->conectardb();

$rspta = json_decode(file_get_contents("php://input"));

$diagnostico = $rspta->diagnostico->descripcion;
$parametros = $rspta->parametros;
$error = 0;
// Agregando diagnóstico
$q = "INSERT INTO diagnostico (descripcion, estado)
 	values (:diagnostico, 1)";

$stmt = $dbh->prepare($q);
$stmt->bindParam(':diagnostico', $diagnostico, PDO::PARAM_STR);

$r = $stmt->execute();
$id_diagnostico = $dbh->lastInsertId();

if($id_diagnostico){
	// Agregando parametros
	foreach ($parametros as $key => $value) {
		$q = "INSERT INTO parametros_diagnostico (id_diagnostico, id_parametro, id_operacion, valor)
		 	values (:id_diagnostico, :id_parametro, :id_operacion, :valor)";

		$stmt = $dbh->prepare($q);
		$stmt->bindParam(':id_diagnostico', $id_diagnostico, PDO::PARAM_INT);
		$stmt->bindParam(':id_parametro', $value->id_parametro, PDO::PARAM_INT);
		$stmt->bindParam(':id_operacion', $value->id_operacion, PDO::PARAM_INT);
		$stmt->bindParam(':valor', $value->valor, PDO::PARAM_STR);

		$r = $stmt->execute();
		if(!$r) $error=1;
	}
}

if($error == 0) $resultado = array('success' => 'true');
else $resultado = array('error' => 'Se encontró un error al tratar de crear nuevo diagnóstico.');

//var_dump($r);
echo json_encode($resultado);

?>
  

