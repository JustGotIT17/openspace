'use strict';

var app = angular.module('StarterApp', [
	'ui.router',
	'lumx',
	'HomeModule',
	'UserMiddleWare',
	'DialogMiddleWare',
	'ApplicationModule'
]);

app.config(function($stateProvider, $urlRouterProvider){

	$stateProvider
		.state("home", {
			url : '/',
			templateUrl : 'templates/home.html',
		})
		.state("dashboard", {
			url : '/dashboard',
			abstract: true,
			templateUrl: 'templates/dashboard/dashboard.html',
			controller : 'DashboardController',
		})
		.state("dashboard.home", {
			url : '/home',
			views : {
				'dashboard' : {
					templateUrl : 'templates/dashboard/home.html'
				}
			}
			
		})
		.state("dashboard.shop", {
			url : '/shop',
			views : {
				'dashboard' : {
					templateUrl : 'templates/dashboard/shop.html',
					controller : 'ShopController'
				}
			}
		})
		.state("dashboard.products", {
			url : '/products',
			views : {
				'dashboard' : {
					templateUrl : 'templates/dashboard/products.html'
				}
			}
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
			templateUrl : 'templates/signup.html',
			controller : 'SignupController'
		})
		.state("signin", {
			url : '/signin',
			templateUrl : 'templates/signin.html',
			controller : 'SigninController'
		})
		.state("signout", {
			url : '/signout',
			controller : 'SignoutController'
		})
	$urlRouterProvider.otherwise('/');
});

