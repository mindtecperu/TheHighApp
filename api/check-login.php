<?php
header('Content-Type: application/json');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//include_once 'controlador.php';
    require_once('config/mysql.php');
   
    $db  = new dbConnect();
    $dbh = $db->conectardb();
   

if(isset($_POST['login']) && isset($_POST['clave'])){ 
//echo "entro al login y clave";  

        //$cx = new controlador();
        $login=$_POST['login'];
        $pass=md5($_POST['clave']);
        $csql="select * from usuario where upper(login)=upper('$login')";
        $stmt = $dbh->prepare($csql);
        $stmt->execute();
        $rx = $stmt->fetchAll(PDO::FETCH_ASSOC);

   // var_dump($rx);
      //  echo $rx[0]['IDAREA'];
      //  echo $pass;
    
        if(count($rx)==1){
            if ($rx[0]['estado']=='1') {
                if ($rx[0]['id_perfil']==3) {
                    echo "{\"acceso\":\"nopermiso\"}";
                }else{
                    if($rx[0]['password']==$pass){
                        session_start();
                        $_SESSION['IDUSUARIO']=$rx[0]['id_usuario'];
                        $_SESSION['login']=$rx[0]['login'];
                        $_SESSION['nombreus']=$rx[0]['nombres'];
                        $_SESSION['apellidous']=$rx[0]['apellidos'];
                        $_SESSION['perfil']=$rx[0]['id_perfil'];
                        //$_SESSION['emailus']=$rx[0]['email'];
                        $_SESSION['type']="usuario";
                        
                        // Guardamos el ultimo login
                        $csql="update usuario set last_login=CURRENT_TIMESTAMP where id_usuario = :id_usuario";
                        $stmt = $dbh->prepare($csql);
                        $stmt->bindParam(':id_usuario', $rx[0]['id_usuario'], PDO::PARAM_INT);
                        $stmt->execute();
                        //$rx1 = $stmt->fetch(PDO::FETCH_ASSOC);

                                            
                        echo "{\"acceso\":\"true\",\"url\":\"admin\"}";
                    }
                
                    else{
                        echo "{\"acceso\":\"clave\"}";
                    }
                }
            }else{
                echo "{\"acceso\":\"inactivo\"}";
            }
            
        }else{
            echo "{\"acceso\":\"usuario\"}";
        }            
}else{
    echo "{\"acceso\":\"false\"}";
}
?>