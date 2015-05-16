angular.module('Websis', [])

.controller('TecnologiasCtrl', ['$scope', function ($scope) {
	
	$scope.logos = 	[
					{url: 'http://www.w3schools.com/html', img: 'html'},
					{url: 'http://www.w3schools.com/js', img: 'js'},
					{url: 'http://www.w3schools.com/css', img: 'css'},
					{url: 'http://laravel.com', img: 'laravel'},
					{url: 'https://angularjs.org', img: 'angular'},
					{url: 'http://getbootstrap.com', img: 'bootstrap'},
					{url: 'https://github.com', img: 'github'},
					{url: 'http://ionicframework.com', img: 'ionic'},
					{url: 'https://www.mysql.com', img: 'mysql'},
					// {url: 'https://nodejs.org', img: 'node'},
					{url: 'http://www.sublimetext.com', img: 'sublime'},
					{url: 'http://gruntjs.com', img: 'grunt'},
					{url: 'https://cordova.apache.org', img: 'cordova'}
					];

}])

.controller('SuscripcionCtrl', ['$scope', '$http', function ($scope, $http) {
	
	$scope.submit = function(){
		if($scope.correo){
			var suscripcion = {};
			suscripcion.correo = $scope.correo;
			// console.log(suscripcion);

			$http.post('http://localhost:8000/api/suscripcion', suscripcion).
			  success(function(data, status) {
			    console.log(status);
			    if (status == 201) {
			    	$scope.suscrito = true;
				}else{
				    $scope.errores = data;
				}
			  }).
			  error(function(data, status) {
			    console.log(status);
			    $scope.errores = ["La suscripción no se realizo, intente más tarde."];
			  });
		}
	}

}])

.controller('EmailCtrl', ['$scope', '$http', function ($scope, $http) {
	
	$scope.correo = {};

	$scope.submit = function(correo){
		if(correo){

			console.log(correo);

			$http.post('http://localhost:8000/api/email', correo).
			  success(function(data, status) {
			    console.log(status);
			    if (status == 201) {
			    	$scope.correo = {};
			    	$('#email').modal('hide')
				}else{
				    $scope.errores = data;
				}
			  }).
			  error(function(data, status) {
			    console.log(status);
			    $scope.errores = ["El correo no se envio, intente más tarde."];
			  });
		}
	}

}])
;