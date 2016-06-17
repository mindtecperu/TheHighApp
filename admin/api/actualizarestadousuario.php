<?php
require_once('../../api/config/mysql.php');

	$db  = new dbConnect();
	$dbh = $db->conectardb();

	$rspta = json_decode(file_get_contents("php://input"));

		$id_usuario = $rspta->id;
		$estado = $rspta->estado;
		if($estado==0)
		{
          $estado=1;
		}
		else
			{ $estado=0;
			}
		$q="UPDATE usuario 
			set estado=:estado
			where id_usuario=:id_usuario";


	
	$stmt = $dbh->prepare($q);
	$stmt->bindParam(':id_usuario',  $id_usuario, PDO::PARAM_STR);
	$stmt->bindParam(':estado',  $estado, PDO::PARAM_STR);
	
	$r = $stmt->execute();

	//var_dump($r);
	echo json_encode($r);

 ?>
  

