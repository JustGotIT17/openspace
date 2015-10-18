var app = angular.module('UserMiddleWare', []);

app.factory('UserFactory', [
	'$http', '$q', 'qService',
	function($http, $q, qService) {

		var self = this;

		self.getCurrentUser = function() {
			return qService.get('/session/user');
		}

		self.isAuthenticated = function() {
			return _authenticated != null || _authenticated != undefined;
		}

		return self;
	}
]);

