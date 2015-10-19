'use strict';
var app = angular.module('HomeModule', [
		'DashboardModule',
		'ShopModule'
	]);

app.controller('HomeController', ['$scope', 'UserFactory', function($scope, UserFactory){
	UserFactory.getCurrentUser().then(function(res){
		$scope.user = res
	});
}]);

app.controller('SignupController', ['$scope', '$http', 'DialogFactory', 'RoutingFactory', function($scope, $http, DialogFactory, RoutingFactory){
	//
	$scope.submit = function() {
		$scope.data = {
			firstname : $scope.fname,
			lastname : $scope.lname,
			username : $scope.uname,
			email : $scope.email,		
			password : $scope.password,
			cpassword : $scope.cpassword,
			csrf : $scope.csrf
		};
		$http.post('/signup', $scope.data)
			.success(function(data) {
				if('error' in data && data.error[0] === "true") {
					$scope.errors = data;
					DialogFactory.showError('Registration failed', 'Please fill out the form correctly.');
				} else{
					$scope.errors = null;
					DialogFactory.showInfo('Registration successful', 'Please wait.');
					RoutingFactory.redirect('/');
				}				
			});
	}
}]);

app.controller('SigninController', ['$scope', '$http', 'DialogFactory', 'RoutingFactory', function($scope, $http, DialogFactory, RoutingFactory){
	$scope.submit = function() {
		$scope.data = {
			username : $scope.uname,
			password : $scope.password
		};

		$http.post('session/signin', $scope.data)
			.success(function(data) {
				console.log(data);
				if('error' in data && data.error[0] === "true") {
					$scope.errors = data;
					DialogFactory.showError('Login failed', 'Credentials invalid.');
				} else{
					$scope.errors = null;
					DialogFactory.showInfo('Login successful', 'Please wait.');
					RoutingFactory.redirect('/');
				}
			});
	}
}]);

app.controller('SignoutController', ['$http', 'DialogFactory', 'RoutingFactory', function($http, DialogFactory, RoutingFactory){
	$http.get('session/signout').success(function(data){
		DialogFactory.showInfo('You have been signed out.');
		RoutingFactory.redirect('/');
	});
}]);