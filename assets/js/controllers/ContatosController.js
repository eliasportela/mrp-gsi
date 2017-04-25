angular.module('contatooh').controller('ContatosController',
	function($scope, $http){
		$scope.contatos = [];
		
		$scope.total = 0;
		
		$scope.filtro = '';

		$scope.incrementa = function(){
			$scope.total++;
		};

		$http.get('/contatos')
		.success(function(data){
			$scope.contatos = data;
		})
		.error(function(statusText) {
			console.log("NOT HAVE BEEN POSSIBLE GET THE LIST");
			console.log(statusText);
		});		
});