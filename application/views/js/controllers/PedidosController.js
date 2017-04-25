angular.module('contatooh')

.controller('PedidosController', function($scope, $httpService){
		
$scope.filtro = '';


$scope.mpse = HttpService.getMps()
   .then(function(response) {
       $scope.mps = response;   
    });
//$scope.mps = [{nome:'Tecido',um:'kg',estoque:3}];

$scope.inserirMp = function(){
	console.log($scope.mp);
	HttpService.insereMps($scope.prod)
   .then(function(response) {
       $scope.mps = response;
       alert("Inserção com sucesso");
       
    });	
} 

$scope.consulta = function(){
    HttpService.getMps()
   .then(function(response) {
       $scope.mps = response;   
    });
 }

$scope.deleteItem = function(item){
  var resposta = confirm("Confirma a exclusão deste elemento?");
  if (resposta == true){
        HttpService.removeMps(item)
        .then(function (response){
                  alert("Remoção com sucesso");
                });
  }
}

});