var app = angular.module('DialogMiddleWare', []);

app.factory('DialogFactory', ['$mdDialog', 
	function($mdDialog){
		return {
			showAlert : function(title, message) {
				var alert = $mdDialog.alert()
					.title(title)
					.content(message)
					.ok('Close');

				$mdDialog.show(alert);
			}
		}
	}
])