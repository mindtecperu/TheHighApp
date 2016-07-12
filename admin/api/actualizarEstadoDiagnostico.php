<?php
require_once('../../api/config/mysql.php');

	$db  = new dbConnect();
	$dbh = $db->conectardb();

	$rspta = json_decode(file_get_contents("php://input"));

	$id_diagnostico = $rspta->id;
	$estado = $rspta->estado;
	if($estado==0)
	{
      $estado=1;
	}
	else
	{ 
		$estado=0;
	}

	$q="UPDATE diagnostico 
		set estado=:estado
		where id_diagnostico=:id_diagnostico";
	
	$stmt = $dbh->prepare($q);
	$stmt->bindParam(':id_diagnostico',  $id_diagnostico, PDO::PARAM_INT);
	$stmt->bindParam(':estado',  $estado, PDO::PARAM_STR);
	
	$r = $stmt->execute();

	//var_dump($r);
	echo json_encode($r);

 ?>
  

