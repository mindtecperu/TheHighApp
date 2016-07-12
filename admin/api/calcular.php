<?php
	require_once('../../api/config/mysql.php');

	require_once('array_column.php');

	$db  = new dbConnect();
	$dbh = $db->conectardb();

	session_start();

	$parametro = $_POST["params"];
	$resultado = array();

	//var_dump($_POST);
	//var_dump(array_search(3, array_column($parametro, 'id_parametro')));

	$q = "SELECT dg.id_diagnostico, dg.descripcion, dg.estado, pg.id_parametros_diagnostico, pg.id_parametro, pg.id_operacion, pg.valor, pa.nombre_parametro, op.operacion, op.signo
    from diagnostico dg
    inner join parametros_diagnostico pg on dg.id_diagnostico = pg.id_diagnostico
    inner join parametro pa on pa.id_parametro=pg.id_parametro
    inner join operacion op on pg.id_operacion=op.id_operacion
    order by dg.id_diagnostico";
	
	$stmt = $dbh->prepare($q);
	$stmt->execute();
	$r = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$diagnostico = null;
	$calculo = 1;

	foreach ($r as $key => $value) {
			
		if($diagnostico == $value['id_diagnostico']){
			
			$diagnostico = $value['id_diagnostico'];
			$id_parametro = $value['id_parametro'];
			$signo = $value['signo'];
			$valor = $value['valor'];
			$indice = array_search($id_parametro, array_column($parametro, 'id_parametro'));
			//echo "\ndiag: $diagnostico \n";
			if(isset($parametro[$indice]['valor'])){
				$ingreso = intval($parametro[$indice]['valor']);
				//echo $value['nombre_parametro']." - ".$parametro[$id_parametro]." ".$signo." ".$valor." ";
				if(eval("if($ingreso $signo $valor) return true; else return false;")) $calculo=$calculo*1;
				else $calculo=$calculo*0;
			} else $calculo=$calculo*0;
			//echo " (calculo: ".$calculo.") \n";
		}
		else{
			if($diagnostico != null){
				if($calculo == 1) array_push($resultado , array( 'id' => $diagnostico));
			}

			$calculo=1;
			$diagnostico = $value['id_diagnostico'];
			$id_parametro = $value['id_parametro'];
			$signo = $value['signo'];
			$valor = $value['valor'];
			$indice = array_search($id_parametro, array_column($parametro, 'id_parametro'));
			//echo "\ndiag: $diagnostico \n";
			if(isset($parametro[$indice]['valor'])){
				$ingreso = intval($parametro[$indice]['valor']);
				//echo $value['nombre_parametro']." - ".$parametro[$id_parametro]." ".$signo." ".$valor." ";
				if(eval("if($ingreso $signo $valor) return true; else return false;")) $calculo=$calculo*1;
				else $calculo=$calculo*0;
			} else $calculo=$calculo*0;
			//echo " (calculo: ".$calculo.") \n";
		}
	}
	if($diagnostico != null){
		if($calculo == 1) array_push($resultado , array( 'id' => $diagnostico));
	}

	echo json_encode($resultado);

 ?>
