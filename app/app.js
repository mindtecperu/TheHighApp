angular.module('main',[])
.controller('ControllerLogin',['$scope','$http',function($scope,$http){
    this.postForm = function(){
        var encodedString = 'login='+encodeURIComponent(this.inputData.login)+"&clave="+encodeURIComponent(this.inputData.clave);        
        //console.log(encodedString);
        $http(
              {
                  method: 'POST',
                  url: 'api/check-login.php',
                  data: encodedString,
                  headers: {'Content-Type':'application/x-www-form-urlencoded'}
              }              
            )
            .success(function(data,status,headers,config){
                //console.log(data);                
                if(data.acceso === 'true'){
                  window.location.href = data.url;
                }else if(data.acceso === 'false'){
                  $scope.errorMsg = 'Login incorrecto';
                }else if(data.acceso === 'usuario'){
                  $scope.errorMsg = 'Usuario incorrecto';
                }else if(data.acceso === 'inactivo'){
                  $scope.errorMsg = 'Usuario inactivo';
                }else if(data.acceso === 'nopermiso'){
                  $scope.errorMsg = 'Usuario para movil';
                }else{
                  $scope.errorMsg = 'Clave incorrecta';
                }
            })
            .error(function(data,status,headers,config){
                console.log(status);
                $scope.errorMsg = 'No se pudo enviar la solicitud';
            })
    };
}]);

