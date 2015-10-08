var app = angular.module('StarterApp', [
	'ngMaterial', 
	'ui.router',
	'HomeModule'
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
		.state("signin", {
			url : '/signin',
			templateUrl : 'templates/signin.html'
		})
	$urlRouterProvider.otherwise('/');
})
