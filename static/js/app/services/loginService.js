'use strict';

app.factory("loginService", ['$http','$location','sessionService','$rootScope',function($http, $location, sessionService, $rootScope){
	
	return {
		
		login : function(user){
			
			var $result = $http.post(BASE_URL+'api/usuarios/logar', user);
			
			$result.then(function(msg){
				
				var uid = msg.data;
				console.log(uid);
				
				if(uid){
					sessionService.set('uid',uid);
					$rootScope.template = true;
					$location.path('/');
				}
				
			});
			
		},
		logout : function(){
			sessionService.destroy('uid');
		},
		isLogged : function(){
			return sessionService.get('uid');
		}		
	}
}]);