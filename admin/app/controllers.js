/**
 * List Controller
 * @version v1.0.0 - 2016-02-08 * @link http://www.mindtec.pe
 * @author MindTec <contacto@mindtec.pe>
 * @license MIT License, http://www.opensource.org/licenses/MIT
 */
(function(){
  'use strict';

angular.module('Controllers', ['datatables', 'datatables.bootstrap', 'datatables.buttons', 'ui.bootstrap', 'ngAnimate', 'Alertify'])

.run(function(DTDefaultOptions) {
    DTDefaultOptions.setLanguageSource('../vendor/datatables/Spanish.json');
})

  .filter('filterActivo', function(){
    return function(id){
      if(id==0){
        return "Inactivo";
      }
      else{
        return "Activo";
      }
    };
  })

  .filter('filterColor', function(){
    return function(id){
      if(id=='green'){
        return "Verde";
      }
      else if(id=='blue'){
        return "Azul";
      }else if(id=='red'){
        return "Rojo";
      }
    };
  })

.directive('stringToNumber', function() {
  return {
    require: 'ngModel',
    link: function(scope, element, attrs, ngModel) {
      ngModel.$parsers.push(function(value) {
        return '' + value;
      });
      ngModel.$formatters.push(function(value) {
        return parseFloat(value, 10);
      });
    }
  };
})

// Lista de  Usuarios
.controller('usuarioController',['$rootScope', '$scope', '$location', 'DTOptionsBuilder', 'DTColumnDefBuilder', '$http', 'Alertify', function ($rootScope, $scope, $location, DTOptionsBuilder, DTColumnDefBuilder, $http, Alertify) {

    $scope.dtOptions = DTOptionsBuilder.newOptions()
        .withPaginationType('full_numbers')
        .withDisplayLength(10)
        .withBootstrap()
        .withButtons([
            'colvis',
            'copy',
            {
                extend: "excel",
                filename:  "Listado_usuarios",
                title:"Listado usuarios High APP",
                CharSet: "utf8",
                exportData: { decodeEntities: true }
            },
        ]);

    $scope.dtColumnDefs = [
        DTColumnDefBuilder.newColumnDef(0),
        DTColumnDefBuilder.newColumnDef(1),
        DTColumnDefBuilder.newColumnDef(2)
    ];

    $scope.getUsuario= function(){
       $http.post('api/getusuario.php' )
                .success(function(data) {
                  console.log(data);
                  $scope.Usuarios=data;
                })
                .error(function(data) {
                  console.log('Error: ' + data);
                  });
    };

    $scope.getPerfil=function(){
      $http.post('api/getPerfilUsuario.php')
      .success(function(data) {
        console.log(data);
        $rootScope.Perfil = data;
      })
      .error(function(data) {
        console.log('Error: ' + data);
      });
    };

    $scope.getPerfiles= function(){
      $http.post('api/getPerfiles.php' )
      .success(function(data) {
        console.log(data);
        $scope.perfiles=data;
      })
      .error(function(data) {
        console.log('Error: ' + data);
      });
    };

    $scope.getPerfiles();
    $scope.getUsuario();
    $scope.getPerfil();
     
    $scope.cambiarEstadoUsuario=function(index, codigo, estado){
         console.log(index);
         console.log(estado);
          $http.post('api/actualizarestadousuario.php',{id:codigo, estado:estado})
              .success(function(data) {
                $scope.Usuarios[index].estado=!estado;
                 Alertify.success('Estado modificado exitosamente.');
                //$scope.Usuarios=data;
              })
              .error(function(data) {
                console.log('Error: ' + data);
                Alertify.error('Error al tratar de cambiar el estado.');
              });
    }
}]) // /#Lista de  Usuarios

  

// Controlador Nuevo Usuario
.controller('nuevoUsuarioController',['$scope', '$http', '$location', '$filter', 'Alertify', function ($scope, $http, $location, $filter, Alertify) {
      
      $scope.getPerfiles= function(){
        $http.post('api/getPerfiles.php' )
          .success(function(data) {
            console.log(data);
            $scope.perfiles=data;
          })
          .error(function(data) {
            console.log('Error: ' + data);
          });
      };

      $scope.guardarUsuario=function(nus){
        console.log(nus);
        $http.post('api/guardarUsuario.php',{nus:nus, datosPersonales:$scope.datosPersonales})
          .success(function(data) {
            if(data.Success){
                console.log(data);
                $location.url("/usuario")
                Alertify.success("Usuario creado exitosamente.");
            }else if(data.Error){
                console.log(data);
                $location.url("/usuario")
            }
          })
          .error(function(data) {
            console.log('Error: ' + data);
          });
      };

    $scope.datosPersonales = [{'tipo': '1', 'dato': '', 'borrar': false}, {'tipo': '2', 'dato': '', 'borrar': false}, {'tipo': '3', 'dato': '', 'borrar': false}];

    $scope.addDato = function(tipo) {
      $scope.datosPersonales.push({'tipo': tipo, 'dato': '', 'borrar': true});
      console.log($scope.datosPersonales);
    };

    $scope.delDato = function(index) {
      $scope.datosPersonales.splice($scope.datosPersonales.indexOf(index),1);
      console.log($scope.datosPersonales);
    };
    
    $scope.getPerfiles();

  }])

// Controlador Editar Usuario
.controller('editarUsuarioController',['$scope', '$location', '$http', '$routeParams', 'Alertify' , function ($scope, $location, $http, $routeParams, Alertify) {
      $scope.id=$routeParams.id;
      console.log($scope.id);
      
      $scope.getPerfiles= function(){
        $http.post('api/getPerfiles.php' )
          .success(function(data) {
            console.log(data);
            $scope.perfiles=data;
          })
          .error(function(data) {
            console.log('Error: ' + data);
          });
      };



      $scope.getUsuario=function(){
          $http.post('api/getusuariobyId.php',{id:$scope.id} )
          .success(function(data) {
            console.log(data);
            $scope.us=data[0];
            $scope.datosPersonales=data[1];
            $scope.datosPersonales.push({'tipo': '1', 'dato': '', 'borrar': false});
            $scope.datosPersonales.push({'tipo': '2', 'dato': '', 'borrar': false});
            $scope.datosPersonales.push({'tipo': '3', 'dato': '', 'borrar': false});

            console.log($scope.datosPersonales);
          })
          .error(function(data) {
            console.log('Error: ' + data);
      });

      $scope.addDato = function(tipo) {
        $scope.datosPersonales.push({'tipo': tipo, 'dato': '', 'borrar': true});
        console.log($scope.datosPersonales);
      };

      $scope.delDato = function(index) {
        $scope.datosPersonales.splice($scope.datosPersonales.indexOf(index),1);
        console.log($scope.datosPersonales);
      };

      };

      $scope.editarUsuario=function(us){
        $http.post('api/editarUsuario.php',{us:us, datosPersonales:$scope.datosPersonales})
          .success(function(data) {
            console.log(data);
  
            $location.url("/usuario")
            Alertify.success('Información de usuario guardada exitosamente.');
           // $scope.getUsuario();
            //$scope.ShowNuevoUsuario=false;
            //$scope.ShowSelectUsuario=false;
              
            //$scope.Usuarios=data;
          })
          .error(function(data) {
            console.log('Error: ' + data);
            Alertify.success('Se encontró un error al tratar de guardar la información del usuario.');
            });
      };
    
    $scope.getPerfiles();
    $scope.getUsuario();

  }])
  // /#Controlador Editar Usuario

// Lista de Parámetros
.controller('parametroController',['$scope', '$location', 'DTOptionsBuilder', 'DTColumnDefBuilder', '$http', 'Alertify', function ($scope, $location, DTOptionsBuilder, DTColumnDefBuilder, $http, Alertify) {

    $scope.dtOptions = DTOptionsBuilder.newOptions()
        .withPaginationType('full_numbers')
        .withDisplayLength(10)
        .withBootstrap()
        .withButtons([
            'colvis',
            'copy',
            {
                extend: "excel",
                filename:  "Lista_parametros",
                title:"Listado parámetros High APP",
                CharSet: "utf8",
                exportData: { decodeEntities: true }
            },
        ]);

    $scope.dtColumnDefs = [
        DTColumnDefBuilder.newColumnDef(0),
        DTColumnDefBuilder.newColumnDef(1),
        DTColumnDefBuilder.newColumnDef(2)
    ];

    $scope.getParametro= function(){
      $http.post('api/getparametro.php' )
      .success(function(data) {
        console.log(data);
        $scope.Parametros=data;
      })
      .error(function(data) {
        console.log('Error: ' + data);
      });
    };

    $scope.getParametro();
     
    $scope.cambiarEstadoParametro=function(index, codigo, estado){
      $http.post('api/actualizarestadoparametro.php',{id:codigo, estado:estado})
      .success(function(data) {
        $scope.Parametros[index].estado=!estado;
         Alertify.success('Estado modificado exitosamente.');
      })
      .error(function(data) {
        Alertify.error('Error al tratar de cambiar el estado.');
      });
    }
}]) // /#Lista de Parametros  

// Controlador Nuevo Parametro
.controller('nuevoParametroController',['$scope', '$http', '$location', '$filter', 'Alertify', function ($scope, $http, $location, $filter, Alertify) {
      
      $scope.getTipoDato= function(){
        $http.post('api/getTipoDato.php' )
          .success(function(data) {
            console.log(data);
            $scope.tipoDatos=data;
          })
          .error(function(data) {
            console.log('Error: ' + data);
          });
      };

      $scope.guardarParametro=function(pa){
        console.log(pa);
        $http.post('api/guardarParametro.php',{pa:pa})
          .success(function(data) {
            if(data.Success){
                console.log(data);
                $location.url("/parametro")
                Alertify.success("Parámetro creado exitosamente.");
            }else if(data.Error){
                console.log(data);
                Alertify.error(data.Error);
                $location.url("/parametro")
            }
          })
          .error(function(data) {
            console.log('Error: ' + data);
          });
      };
    
    $scope.getTipoDato();

  }])

// Controlador Editar Parametro
.controller('editarParametroController',['$scope', '$location', '$http', '$routeParams', 'Alertify' , function ($scope, $location, $http, $routeParams, Alertify) {
      $scope.id=$routeParams.id;
      console.log($scope.id);
      
      $scope.getTipoDato= function(){
        $http.post('api/getTipoDato.php' )
          .success(function(data) {
            console.log(data);
            $scope.tipoDatos=data;
          })
          .error(function(data) {
            console.log('Error: ' + data);
          });
      };

      $scope.getParametro=function(){
          $http.post('api/getparametrobyId.php',{id:$scope.id} )
          .success(function(data) {
            console.log(data);
            $scope.pa=data[0];
          })
          .error(function(data) {
            console.log('Error: ' + data);
          });

      };

      $scope.editarParametro=function(pa){
        $http.post('api/editarParametro.php',{pa:pa})
          .success(function(data) {
            console.log(data);
  
            $location.url("/parametro")
            Alertify.success('Información del parámetro guardado exitosamente.');
          })
          .error(function(data) {
            console.log('Error: ' + data);
            Alertify.success('Se encontró un error al tratar de guardar la información del parámetro.');
            });
      };
    
    $scope.getTipoDato();
    $scope.getParametro();

  }])
  // /#Controlador Editar Parametro

  // Lista de Resultados
.controller('resultadoController',['$scope', '$location', 'DTOptionsBuilder', 'DTColumnDefBuilder', '$http', 'Alertify', function ($scope, $location, DTOptionsBuilder, DTColumnDefBuilder, $http, Alertify) {

    $scope.dtOptions = DTOptionsBuilder.newOptions()
        .withPaginationType('full_numbers')
        .withDisplayLength(10)
        .withBootstrap()
        .withButtons([
            'colvis',
            'copy',
            {
                extend: "excel",
                filename:  "Listado_resultados",
                title:"Listado resultados High APP",
                CharSet: "utf8",
                exportData: { decodeEntities: true }
            },
        ]);

    $scope.dtColumnDefs = [
        DTColumnDefBuilder.newColumnDef(0),
        DTColumnDefBuilder.newColumnDef(1),
        DTColumnDefBuilder.newColumnDef(2)
    ];

    $scope.getResultado= function(){
       $http.post('api/getresultado.php' )
        .success(function(data) {
          console.log(data);
          $scope.Resultados=data;
        })
        .error(function(data) {
          console.log('Error: ' + data);
        });
    };

    $scope.getResultado();
     
    $scope.cambiarEstadoResultado=function(index, codigo, estado){
      $http.post('api/actualizarestadoresultado.php',{id:codigo, estado:estado})
      .success(function(data) {
        $scope.Resultados[index].estado=!estado;
         Alertify.success('Estado modificado exitosamente.');
        //$scope.Usuarios=data;
      })
      .error(function(data) {
        console.log('Error: ' + data);
        Alertify.error('Error al tratar de cambiar el estado.');
      });
    }
}]) // /#Lista de Resultados

  

// Controlador Nuevo Resultado
.controller('nuevoResultadoController',['$scope', '$http', '$location', '$filter', 'Alertify', function ($scope, $http, $location, $filter, Alertify) {
      
      $scope.getColor= function(){
        $http.post('api/getColor.php' )
          .success(function(data) {
            console.log(data);
            $scope.colores=data;
          })
          .error(function(data) {
            console.log('Error: ' + data);
          });
      };

      $scope.guardarResultado=function(re){
        console.log(re);
        $http.post('api/guardarResultado.php',{re:re})
          .success(function(data) {
            if(data.Success){
                console.log(data);
                $location.url("/resultado")
                Alertify.success("Resultado creado exitosamente.");
            }else if(data.Error){
                console.log(data);
                Alertify.error(data.Error);
                $location.url("/resultado")
            }
          })
          .error(function(data) {
            console.log('Error: ' + data);
          });
      };
    
    $scope.getColor();

  }])
  // #Controlador Nuevo Resultado

// Controlador Editar Resultado
.controller('editarResultadoController',['$scope', '$location', '$http', '$routeParams', 'Alertify' , function ($scope, $location, $http, $routeParams, Alertify) {
      $scope.id=$routeParams.id;
      console.log($scope.id);
      
      $scope.getColor= function(){
        $http.post('api/getColor.php' )
          .success(function(data) {
            console.log(data);
            $scope.colores=data;
          })
          .error(function(data) {
            console.log('Error: ' + data);
          });
      };

      $scope.getResultado=function(){
          $http.post('api/getresultadobyId.php',{id:$scope.id} )
          .success(function(data) {
            console.log(data);
            $scope.re=data[0];
          })
          .error(function(data) {
            console.log('Error: ' + data);
          });

      };

      $scope.editarResultado=function(re){
        $http.post('api/editarResultado.php',{re:re})
          .success(function(data) {
            console.log(data);
  
            $location.url("/resultado")
            Alertify.success('Información del resultado guardado exitosamente.');
          })
          .error(function(data) {
            console.log('Error: ' + data);
            Alertify.success('Se encontró un error al tratar de guardar la información del resultado.');
            });
      };
    
    $scope.getColor();
    $scope.getResultado();

  }])
  // /#Controlador Editar Resultado

  // Logout
  .controller('navbarcontroller',['$scope', '$location', '$http', function ($scope, $location, $http) {
        $scope.logout=function(){
          console.log("adios :(");
              $http.post('../api/logout.php' )
                .success(function(data) {
                  console.log(data);
                  location.reload();
                })
                .error(function(data) {
                  console.log('Error: ' + data);
                  });
        };

    }])

  // Cambio Contraseña
.controller('cambioContrasenaController',['$scope', '$location', 'DTOptionsBuilder', 'DTColumnDefBuilder', '$http', 'Alertify', function ($scope, $location, DTOptionsBuilder, DTColumnDefBuilder, $http, Alertify) {
  $scope.getCargarUsuario=function(){
    $http.post('api/cargarUsuario.php' )
    .success(function(data) {
      console.log(data);
      $scope.usuario=data;
    })
    .error(function(data) {
      console.log('Error: ' + data);
    });
  };

  $scope.cambiarClave=function(){
    if($scope.usuario.password_nuevo==$scope.usuario.password_nuevo_r){
      $http.post('api/editarClaveUsuario.php', {usuario: $scope.usuario} )
      .success(function(data) {
        console.log(data);
        if(data.Success){
          $scope.getCargarUsuario();
          $scope.usuario.password_actual="";
          $scope.usuario.password_nuevo="";
          $scope.usuario.password_nuevo_r="";
          Alertify.success('Contraseña cambiada exitosamente');
          $location.url('/#');
        }else if(data.Error){
          Alertify.error('Su contraseña actual es incorrecta');
        }
      })
      .error(function(data) {
        console.log('Error: ' + data);
      });
    }else{
      Alertify.error('Las contraseñas son diferentes');
    }
  };

  $scope.igualClave=function(){
    if($scope.usuario.password_nuevo!=undefined && $scope.usuario.password_nuevo_r!=undefined){
      if($scope.usuario.password_nuevo==$scope.usuario.password_nuevo_r){
        $scope.usuario.iguales=true;
      }else{
        $scope.usuario.iguales=false;
      }
    }
  };

  $scope.getCargarUsuario();
    
}]) // /#Cambio Contraseña

})();
