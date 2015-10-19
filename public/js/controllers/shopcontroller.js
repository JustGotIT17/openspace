'use strict';
var app = angular.module('ShopModule', []);

app.controller('ShopController', ['$scope', 'qService', function($scope, qService){
	qService.get('/api/cities').then(function(res){
		$scope.cities = res;
	});
	
	qService.get('/api/provinces').then(function(res){
		$scope.provinces = res;
	});
	/*
	$scope.cities = [
		{
		mun_city_psgc: "012801000",
		verbose_name: "Adams",
		region_psgc: "010000000",
		province_psgc: "012800000"
		},
		{
		mun_city_psgc: "012802000",
		verbose_name: "Bacarra",
		region_psgc: "010000000",
		province_psgc: "012800000"
		},
		{
		mun_city_psgc: "012803000",
		verbose_name: "Badoc",
		region_psgc: "010000000",
		province_psgc: "012800000"
		},
		{
		mun_city_psgc: "012804000",
		verbose_name: "Bangui",
		region_psgc: "010000000",
		province_psgc: "012800000"
		},
		{
		mun_city_psgc: "012805000",
		verbose_name: "City of Batac",
		region_psgc: "010000000",
		province_psgc: "012800000"
		},
		{
		mun_city_psgc: "012806000",
		verbose_name: "Burgos",
		region_psgc: "010000000",
		province_psgc: "012800000"
	}];
	*/
}]);