angular.module('contatooh')

.controller('ProdutosController', function($scope, $http){


$scope.filtro = '';


$scope.produto = HttpService.getProduto()
   .then(function(response) {
       $scope.Produto = response;   
    });

});

.service('HttpService', function($http) {
 return {
   getMps: function() {
     // $http returns a promise, which has a then function, which also returns a promise.
     return $http.get('http://127.0.0.1/apis/produto.json')
       .then(function(response) {
         // In the response, resp.data contains the result. Check the console to see all of the data returned.
         console.log('Get', response);
         return response.data;
      });
   }
   
 };
});
