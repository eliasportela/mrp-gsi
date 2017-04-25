angular.module('contatooh')

.controller('ClientesController', function($scope, $http){
		$scope.clientes = [
			{
				nome: 'Elias Portela'
			},
			{
				nome: 'Mahezer Carvalho'
			}
		];
		
		$scope.filtro = '';

		$scope.incrementa = function(){
			console.log('2');
			$scope.total++;
		};

		/*
		$http.get('/contatos')
		.success(function(data){
			$scope.contatos = data;
		})
		.error(function(statusText) {
			console.log("NOT HAVE BEEN POSSIBLE GET THE LIST");
			console.log(statusText);
		});
		*/		
});