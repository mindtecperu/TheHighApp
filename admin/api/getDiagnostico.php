<?php
require_once('../../api/config/mysql.php');

	$db  = new dbConnect();
	$dbh = $db->conectardb();

	$respuesta = array();

	$q = "SELECT id_diagnostico, descripcion, estado
    from diagnostico";
	
	$stmt = $dbh->prepare($q);
	$stmt->execute();
	$r = $stmt->fetchAll(PDO::FETCH_ASSOC);

	array_push($respuesta, $r);

	$q = "SELECT dg.id_diagnostico, dg.descripcion, dg.estado, pg.id_parametros_diagnostico, pg.id_parametro, pg.id_operacion, pg.valor, pa.nombre_parametro, op.operacion, op.signo
    from diagnostico dg
    inner join parametros_diagnostico pg on dg.id_diagnostico = pg.id_diagnostico
    inner join parametro pa on pa.id_parametro=pg.id_parametro
    inner join operacion op on pg.id_operacion=op.id_operacion";
	
	$stmt = $dbh->prepare($q);
	$stmt->execute();
	$r = $stmt->fetchAll(PDO::FETCH_ASSOC);


	array_push($respuesta, $r);

	echo json_encode($respuesta);



	
 ?>