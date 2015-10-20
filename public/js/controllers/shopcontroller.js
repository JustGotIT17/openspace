'use strict';
var app = angular.module('ShopModule', []);

app.controller('ShopController', ['$scope', 'qService', function($scope, qService){
	qService.get('/api/cities').then(function(res){
		$scope.cities = res;
	});
	
	qService.get('/api/provinces').then(function(res){
		$scope.provinces = res;
	});
	
}]);