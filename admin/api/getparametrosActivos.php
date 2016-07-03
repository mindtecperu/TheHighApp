<?php
require_once('../../api/config/mysql.php');

	$db  = new dbConnect();
	$dbh = $db->conectardb();

	$q = "SELECT 
	pa.*,
	td.nombre_tipo
    from parametro pa
    inner join tipo_dato td on pa.id_tipo_dato=td.id_tipo_dato
    WHERE estado=1";
	
	$stmt = $dbh->prepare($q);
	$stmt->execute();
	$r = $stmt->fetchAll(PDO::FETCH_ASSOC);

	//var_dump($r);
	echo json_encode($r);

 ?>