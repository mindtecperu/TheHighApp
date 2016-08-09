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

	$q = "SELECT dg.id_diagnostico, dg.descripcion, dg.estado, pg.id_parametros_diagnostico, pg.id_parametro, pg.id_operacion, pg.valor, pa.nombre_parametro, op.operacion, op.signo, pg.formula
    from diagnostico dg
    inner join parametros_diagnostico pg on dg.id_diagnostico = pg.id_diagnostico
    left join parametro pa on pa.id_parametro=pg.id_parametro
    inner join operacion op on pg.id_operacion=op.id_operacion
    order by dg.id_diagnostico";
	
	$stmt = $dbh->prepare($q);
	$stmt->execute();
	$r = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$diagnostico = null;
	$calculo = 1;

	foreach ($r as $key => $value) {
		//var_dump($value);
		// Verificando si se sigue calculando un mismo disagnóstico
		if($diagnostico == $value['id_diagnostico']){
			
			$diagnostico = $value['id_diagnostico'];
			$id_parametro = $value['id_parametro'];
			$signo = $value['signo'];
			$valor = intval($value['valor']);
			$formula = $value['formula'];
			$id_parametros_diagnostico = $value['id_parametros_diagnostico'];

			// Si solo se evalua un parámetro
			//echo "\ndiag: $diagnostico - formula: $formula - \n";
			if($formula == 0){
				$indice = array_search($id_parametro, array_column($parametro, 'id_parametro'));
				//echo "\ndiag: $diagnostico $indice \n";
				if(isset($parametro[$indice]['valor'])){
					$ingreso = intval($parametro[$indice]['valor']);
					//echo $value['nombre_parametro']." - ".intval($parametro[$indice]['valor'])." ".$signo." ".$valor." ";
					if(eval("if($ingreso $signo $valor) return true; else return false;")) $calculo=$calculo*1;
					else $calculo=$calculo*0;
				} else $calculo=$calculo*0;
				//echo " (calculo: ".$calculo.") \n";
			}
			// Si se evalua una fórmula
			else{
				$q = "SELECT id_formula_diagnostico, id_diagnostico, id_parametros_diagnostico, id_parametro, multiplicador
					FROM formula_diagnostico
					WHERE id_parametros_diagnostico=:id_parametros_diagnostico";
					
					$stmt = $dbh->prepare($q);
					$stmt->bindParam(':id_parametros_diagnostico',  $id_parametros_diagnostico, PDO::PARAM_INT);
					$stmt->execute();
					$r2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
					$evaluacion = "";
				// Recorriendo todos los parámetros de la fórmula
				foreach ($r2 as $key2 => $value2){
					$id_parametro2 = $value2['id_parametro'];
					$multiplicador = $value2['multiplicador'];

					$indice = array_search($id_parametro2, array_column($parametro, 'id_parametro'));
					if(isset($parametro[$indice]['valor'])){
						$evaluacion .= "+".floatval($parametro[$indice]['valor'])."*(".floatval($multiplicador).")";
					}
					else $calculo=$calculo*0;

				}
				if($evaluacion != ""){
					//var_dump("$evaluacion $signo $valor");
					if(eval("if($evaluacion $signo $valor) return true; else return false;")) $calculo=$calculo*1;
					else $calculo=$calculo*0;
				}
			}
		}
		// En caso sea un nuevo diagnóstico
		else{

			if($diagnostico != null){
				if($calculo == 1) array_push($resultado , array( 'id' => $diagnostico));
			}

			$calculo=1;
			$diagnostico = $value['id_diagnostico'];
			$id_parametro = $value['id_parametro'];
			$signo = $value['signo'];
			$valor = intval($value['valor']);
			$formula = $value['formula'];
			$id_parametros_diagnostico = $value['id_parametros_diagnostico'];

			//echo "\ndiag: $diagnostico - formula: $formula - \n";
			if($formula == 0){
				$indice = array_search($id_parametro, array_column($parametro, 'id_parametro'));
				//echo "\ndiag: $diagnostico $indice \n";
				if(isset($parametro[$indice]['valor'])){
					$ingreso = intval($parametro[$indice]['valor']);
					//echo $value['nombre_parametro']." - ".intval($parametro[$indice]['valor'])." ".$signo." ".$valor." ";
					if(eval("if($ingreso $signo $valor) return true; else return false;")) $calculo=$calculo*1;
					else $calculo=$calculo*0;
				} else $calculo=$calculo*0;
				//echo " (calculo: ".$calculo.") \n";
			}
			// Si se evalua una fórmula
			else{
				$q = "SELECT id_formula_diagnostico, id_diagnostico, id_parametros_diagnostico, id_parametro, multiplicador
					FROM formula_diagnostico
					WHERE id_parametros_diagnostico=:id_parametros_diagnostico";
					
					$stmt = $dbh->prepare($q);
					$stmt->bindParam(':id_parametros_diagnostico',  $id_parametros_diagnostico, PDO::PARAM_INT);
					$stmt->execute();
					$r2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
					$evaluacion = "";
				// Recorriendo todos los parámetros de la fórmula
				foreach ($r2 as $key2 => $value2){
					$id_parametro2 = $value2['id_parametro'];
					$multiplicador = $value2['multiplicador'];

					$indice = array_search($id_parametro2, array_column($parametro, 'id_parametro'));
					if(isset($parametro[$indice]['valor'])){
						$evaluacion .= "+".floatval($parametro[$indice]['valor'])."*(".floatval($multiplicador).")";
					}
					else $calculo=$calculo*0;

				}
				if($evaluacion != ""){
					//var_dump("$evaluacion $signo $valor");
					if(eval("if($evaluacion $signo $valor) return true; else return false;")) $calculo=$calculo*1;
					else $calculo=$calculo*0;
				}
			}
		}
	}
	if($diagnostico != null){
		if($calculo == 1) array_push($resultado , array( 'id' => $diagnostico));
	}

	echo json_encode($resultado);

 ?>
