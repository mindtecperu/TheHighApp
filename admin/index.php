<?php
  session_start();
   if(isset($_SESSION['login'])){
       // echo "entro";
       // echo "string"; "acceso correcto".$_SESSION['login'];
        if($_SESSION['perfil'] !=1 &&  $_SESSION['perfil'] !=2){
            header('location:../index.php');
        }
    }else{
      //  echo "salio";
      header('location:../');
       //break;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>The High APP</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="/vendor/datatables/media/css/datatables.bootstrap.min.css">-->
    <link rel="stylesheet" href="../vendor/angular-datatables-master/src/plugins/bootstrap/datatables.bootstrap.css">
    
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
    <!-- bower:css -->
    <link rel="stylesheet" href="../vendor/alertify/ng-alertify.css">
    <!-- endbuild -->
    <!-- DataTables CSS buttons -->
    <link rel="stylesheet" href="../vendor/angular-datatables-master/vendor/datatables-buttons/css/buttons.dataTables.css">

</head>
<body ng-app="intelectaApp" ng-cloak>
  <main>
    <!-- wrapper -->
     <div id="wrapper">

        <!-- Navigation style="background: #226695;" -->  
        <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
            <div class="container topnav"  ng-controller="navbarcontroller">
                <!-- Brand and toggle get grouped for better mobile display -->

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--a class="navbar-brand" href="#/">
                    <img alt="Brand"  height="100%" src="../img/logo-06.png">
                    </a-->
                    <a class="navbar-brand" href="#/">
                        <span style="color:#565656; font-size: 35px">INS</span>
                        <span style="color:#565656; font-size: 15px"> The High APP</span>
                    </a>
                </div>
            
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav navbar-collapse navbar-ex1-collapse">
                   
                    <li class="dropdown">
                        <a href="/#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> Usuarios <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#/usuario"><i class="fa fa-fw fa-users"></i> Lista Usuarios</a></li>
                                <li ng-show="Perfil.perfil==1"><a href="#/nuevo_usuario" ><i class="fa fa-fw fa-user-plus"></i> Nuevo Usuario</a></li>
                            </ul>
                    </li>

                    <li class="dropdown">
                        <a href="/#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cubes"></i> Parámetros<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#/parametro"><i class="fa fa-fw fa fa-cubes"></i> Parámetros de diagnóstico</a></li>
                                <li ng-show="Perfil.perfil==1"><a href="#/nuevo_parametro" ><i class="fa fa-fw fa fa-cube"></i> Nuevo parámetro de diagnóstico</a></li>
                            </ul>
                    </li>

                    <li class="dropdown">
                        <a href="/#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-calculator"></i> Resultados<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#/resultado"><i class="fa fa-fw fa fa-calculator"></i> Resultado de diagnóstico</a></li>
                                <li ng-show="Perfil.perfil==1"><a href="#/nuevo_resultado" ><i class="fa fa-fw fa-plus"></i> Nuevo resultado de diagnóstico</a></li>
                            </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a href="/#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['nombreus']." ".$_SESSION['apellidous'];?><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href=""><i class="fa fa-fw fa fa-print"></i> Reporte</a></li>
                                <li><a href="#/cambioContrasena"><i class="fa fa-fw fa-lock"></i> Cambiar contraseña</a></li>
                                <li class="divider"></li>
                                <li ng-click="logout()"><a><i class="fa fa-fw fa-power-off"></i> Salir</a></li>
                            </ul>
                    </li>
                </ul>
            </div>
        <!-- /.container -->
         </nav>


        <div id="page-wrapper">
            <div class="ng-view"></div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
    </main>

    <script src="../vendor/jquery-2.1.4.min.js"></script>
    <!-- angular -->
    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/media/js/jquery.dataTables.min.js"></script>

    <script src="../vendor/angular/1.3.15/angular.min.js"></script>

    <script src="../vendor/angular/1.3.15/angular-animate.min.js"></script>
    <script src="../vendor/angular/1.3.15/angular-resource.min.js"></script>
    <script src="../vendor/angular/1.3.15/angular-route.min.js"></script>
    <script src='../vendor/angular/1.3.15/i18n/angular-locale_es-pe.js'></script>

    <!-- DataTables JavaScript -->
    
    <script src="../vendor/bootstrap/bootstrap.min.js"></script>
    <script src="../vendor/angular-bootstrap/ui-bootstrap-tpls-0.14.0.js"></script>
    
    <script src="../vendor/angular-datatables-master/src/plugins/bootstrap/angular-datatables.bootstrap.js"></script>
    <script src="../vendor/angular-datatables-master/src/plugins/bootstrap/angular-datatables.bootstrap.options.js"></script>
    <script src="../vendor/angular-datatables-master/src/plugins/bootstrap/angular-datatables.bootstrap.tabletools.js"></script>
    <script src="../vendor/angular-datatables-master/src/plugins/bootstrap/angular-datatables.bootstrap.colvis.js"></script>
    <!-- -->
    <script src="../vendor/angular-datatables-master/dist/angular-datatables.min.js"></script>
    <script src="../vendor/datatables/media/js/dataTables.bootstrap.min.js"></script>

    <script src="../vendor/angular-datatables-master/vendor/datatables-buttons/js/dataTables.buttons.js"></script>
    <script src="../vendor/angular-datatables-master/dist/plugins/buttons/angular-datatables.buttons.min.js"></script>

    <script src="../vendor/angular-datatables-master/vendor/datatables-buttons/js/buttons.colVis.js"></script>
    <script src="../vendor/angular-datatables-master/vendor/datatables-buttons/js/buttons.print.js"></script>
    <script src="../vendor/angular-datatables-master/vendor/datatables-buttons/js/buttons.html5.js"></script>
    <script src="../vendor/angular-datatables-master/vendor/datatables-buttons/js/buttons.flash.js"></script>

    <!-- Alertify -->
    <script src="../vendor/alertify/ng-alertify.js"></script>
    <!-- endbuild -->

    <script src="app/controllers.js"></script>
    <script src="app/app.js"></script>


</body>
</html>
