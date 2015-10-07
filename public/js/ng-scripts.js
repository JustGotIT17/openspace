var app = angular.module('StarterApp', [
		'ngMaterial', 
		'ui.router'
	]);

app.config(function($stateProvider, $urlRouterProvider){
	$stateProvider
		.state("home", {
			url : '/',
			templateUrl : 'templates/home.html'
		})
		.state("services", {
			url : '/services',
			templateUrl : 'templates/services.html'
		})
		.state("about", {
			url : '/about',
			templateUrl : 'templates/about.html'
		})
		.state("signup", {
			url : '/signup',
			templateUrl : 'templates/signup.html'
		})

	$urlRouterProvider.otherwise('/');
})


app.controller('AppCtrl', ['$scope', function($scope){
	
}]);
