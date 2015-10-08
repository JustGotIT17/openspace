var app = angular.module('HomeModule', [
		'DialogMiddleWare'
	]);

app.controller('SignupController', ['$scope', '$http', '$mdDialog', 'DialogFactory', function($scope, $http, $mdDialog, DialogFactory){
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
				if(data.error[0] === "true") {
					$scope.errors = data;
					DialogFactory.showAlert('Registration failed', 'Please fill out the form correctly.');
				}

				
			})
	}
}]);

app.controller('SigninController', ['$scope', '$http', function($scope, $http){
	$scope.submit = function() {
		$scope.data = {
			username : $scope.uname,
			password : $scope.password,
		};

		$http.post('/signin', $scope.data)
			.success(function(data) {
				console.log(data);
			})
	}
}]);