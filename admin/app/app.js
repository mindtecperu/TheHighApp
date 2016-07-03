(function(){

'use strict';

var app = angular.module('intelectaApp', [
  'ngRoute',
  'ngAnimate',
  'datatables',
  'datatables.bootstrap',
  'datatables.buttons',
  'ui.bootstrap',
  'Alertify',
  'Controllers']);

    app.config(['$routeProvider', function($routeProvider){
      $routeProvider.
        when('/', {
          templateUrl: 'views/usuarios.html',
          caseInsensitiveMatch: true,
          controller: 'usuarioController'
        })
          .when('/usuario', {
          templateUrl: 'views/usuarios.html',
          caseInsensitiveMatch: true,
          controller: 'usuarioController'
        })
          .when('/nuevo_usuario', {
          templateUrl: 'views/nuevo_usuario.html',
          caseInsensitiveMatch: true,
          controller: 'nuevoUsuarioController'
        })
          .when('/editar_usuario/:id', {
          templateUrl: 'views/editar_usuario.html',
          caseInsensitiveMatch: true,
          controller: 'editarUsuarioController'
        })
          .when('/cambioContrasena', {
          templateUrl: 'views/cambioContrasena.html',
          caseInsensitiveMatch: true,
          controller: 'cambioContrasenaController'
        })
          .when('/parametro', {
          templateUrl: 'views/parametros.html',
          caseInsensitiveMatch: true,
          controller: 'parametroController'
        })
          .when('/nuevo_parametro', {
          templateUrl: 'views/nuevo_parametro.html',
          caseInsensitiveMatch: true,
          controller: 'nuevoParametroController'
        })
          .when('/editar_parametro/:id', {
          templateUrl: 'views/editar_parametro.html',
          caseInsensitiveMatch: true,
          controller: 'editarParametroController'
        })
          .when('/resultado', {
          templateUrl: 'views/resultados.html',
          caseInsensitiveMatch: true,
          controller: 'resultadoController'
        })
          .when('/nuevo_resultado', {
          templateUrl: 'views/nuevo_resultado.html',
          caseInsensitiveMatch: true,
          controller: 'nuevoResultadoController'
        })
          .when('/editar_resultado/:id', {
          templateUrl: 'views/editar_resultado.html',
          caseInsensitiveMatch: true,
          controller: 'editarResultadoController'
        })
          .when('/diagnosticos', {
          templateUrl: 'views/diagnosticos.html',
          caseInsensitiveMatch: true,
          controller: 'diagnosticosController'
        })
          .when('/nuevo_diagnostico', {
          templateUrl: 'views/nuevo_diagnostico.html',
          caseInsensitiveMatch: true,
          controller: 'nuevoDiagnosticoController'
        })
          .when('/calcular', {
          templateUrl: 'views/calcular.html',
          caseInsensitiveMatch: true,
          controller: 'calcularController'
        })
        .otherwise({
          redirectTo: '/'
        });

      }])
})();