'use strict';
var app = angular.module('DialogMiddleWare', []);

app.factory('DialogFactory', [ 'LxNotificationService', 
	function(LxNotificationService){
		return {
			showInfo : function(title, message) {
				LxNotificationService.info(title, message);
			},
			showError : function(title, message) {
				LxNotificationService.error(title, message);
			},
			showAlert : function(title, message) {
				LxNotificationService.alert(title, message);
			}
		}
	}
])