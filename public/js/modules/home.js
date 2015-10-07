var app = angular.module('HomeModule', []);

app.controller('SignupController', ['$scope', '$http', function($scope, $http){
	
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
				console.log(data);
			})
	}
}]);
