angular.module('contatooh')


.controller('MateriaPrimaController', function($scope, HttpService) {

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

   
 
})

.service('HttpService', function($http) {
 return {
   getMps: function() {
     // $http returns a promise, which has a then function, which also returns a promise.
     return $http.get('http://127.0.0.1/apis/mp.json')
       .then(function(response) {
         // In the response, resp.data contains the result. Check the console to see all of the data returned.
         console.log('Get', response);
         return response.data;
      });
   },
   insereMps: function(uga) {
     // $http returns a promise, which has a then function, which also returns a promise.
     return $http.post('http://localhost:3000/insere', uga)
       .then(function(response) {
         // In the response, resp.data contains the result. Check the console to see all of the data returned.
         console.log('Inseriu Produto', response);
         return response.data;
      });
   },

	removeMps: function(prod){
     return $http.delete('http://localhost:3000/remove/' + prod.codigo)
      .then(function(response) {
         // In the response, resp.data contains the result. Check the console to see all of the data returned.
         console.log('Produto removido', response);
         return response.data;
      }
      )
  }



   
 };
});
