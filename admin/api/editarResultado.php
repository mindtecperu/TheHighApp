<?php
require_once('../../api/config/mysql.php');

	$db  = new dbConnect();
	$dbh = $db->conectardb();

	$rspta = json_decode(file_get_contents("php://input"));

	$re = $rspta->re;	

	$q="UPDATE resultado 
		set nombre_resultado=:nombre_resultado, observacion=:observacion, recomendacion=:recomendacion, id_color=:id_color
		where id_resultado=:id_resultado";

	$stmt = $dbh->prepare($q);
	$stmt->bindParam(':id_resultado',  	    $re->id_resultado, PDO::PARAM_INT);
	$stmt->bindParam(':nombre_resultado',  	$re->nombre_resultado, PDO::PARAM_STR);
	$stmt->bindParam(':observacion',  		$re->observacion, PDO::PARAM_STR);
	$stmt->bindParam(':recomendacion',  	$re->recomendacion, PDO::PARAM_STR);
	$stmt->bindParam(':id_color',  			$re->id_color, PDO::PARAM_INT);
	
	$r = $stmt->execute();

	//var_dump($r);
	echo json_encode($r);

 ?>
  

