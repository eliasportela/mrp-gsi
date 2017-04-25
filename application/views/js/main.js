angular.module('contatooh', ['ngRoute'])

.config(function($routeProvider){
	$routeProvider.when('/home',{
		templateUrl: 'partials/home.html'
	});

	$routeProvider.when('/materia-prima',{
		templateUrl: 'partials/materia-prima.html',
		controller: 'MateriaPrimaController'
	});
	
	$routeProvider.when('/clientes',{
		templateUrl: 'partials/clientes.html',
		controller: 'ClientesController'
	});
	
	$routeProvider.when('/produtos',{
		templateUrl: 'partials/produtos.html',
		controller: 'ProdutosController'
	});
	
	$routeProvider.when('/pedidos',{
		templateUrl: 'partials/pedidos.html',
		controller: 'PedidosController'
	});
	
	/*
	$routeProvider.when('/contatos/:contatoId',{
		templateUrl: 'partials/contato.html',
		controller: 'ContatoController'
	});
	*/
	$routeProvider.otherwise({redirectTo: '/home'});
});