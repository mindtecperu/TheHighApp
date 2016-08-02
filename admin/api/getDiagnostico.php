<?php
require_once('../../api/config/mysql.php');

	$db  = new dbConnect();
	$dbh = $db->conectardb();

	$respuesta = array();


	// Trayendo los diagnosticos de tabla diagnostico
	$q = "SELECT id_diagnostico, descripcion, estado
    from diagnostico";
	
	$stmt = $dbh->prepare($q);
	$stmt->execute();
	$r = $stmt->fetchAll(PDO::FETCH_ASSOC);

	array_push($respuesta, $r);
	
	// Trayendo los parametros de los diagnosticos de tabla parametros_diagnostico
	$q = "SELECT dg.id_diagnostico, dg.descripcion, dg.estado, pg.id_parametros_diagnostico, pg.id_parametro, pg.id_operacion, pg.valor, pa.nombre_parametro, op.operacion, op.signo, pa.id_tipo_dato, pg.formula, (select etiqueta from maestro where id_parametro=pg.id_parametro and id_maestro=pg.valor) as etiqueta
	    from diagnostico dg
	    inner join parametros_diagnostico pg on dg.id_diagnostico = pg.id_diagnostico
	    left join parametro pa on pa.id_parametro=pg.id_parametro
	    inner join operacion op on pg.id_operacion=op.id_operacion
	    order by  pg.id_diagnostico, pg.id_parametros_diagnostico";
	
	$stmt = $dbh->prepare($q);
	$stmt->execute();
	$r = $stmt->fetchAll(PDO::FETCH_ASSOC);

	array_push($respuesta, $r);

	// Trayendo las formulas de los diagnosticos de la tabla formula_diagnostico
	$q = "SELECT fd.id_diagnostico, fd.id_parametros_diagnostico, fd.id_parametro, fd.multiplicador, pa.nombre_parametro
		FROM formula_diagnostico fd
		inner join parametro pa on pa.id_parametro=fd.id_parametro";
	
	$stmt = $dbh->prepare($q);
	$stmt->execute();
	$r = $stmt->fetchAll(PDO::FETCH_ASSOC);

	array_push($respuesta, $r);

	echo json_encode($respuesta);

 ?>