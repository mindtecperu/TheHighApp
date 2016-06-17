<?php
require_once('../../api/config/mysql.php');

	$db  = new dbConnect();
	$dbh = $db->conectardb();

	$q = "SELECT 
	us.*,
	pe.nombre_perfil
    from usuario us
    inner join perfil pe on us.id_perfil=pe.id_perfil";
	
	$stmt = $dbh->prepare($q);
	$stmt->execute();
	$r = $stmt->fetchAll(PDO::FETCH_ASSOC);

	//var_dump($r);
	echo json_encode($r);

 ?>