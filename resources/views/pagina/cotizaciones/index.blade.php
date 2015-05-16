<!DOCTYPE html>
<html lang="en" class="no-js" ng-app="App">
	
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Websis - Cotización</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="" />

		<link rel="shortcut icon" href="favicon.ico">
		
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/cotizacion.css') }}" rel="stylesheet">

		<script src="{{ asset('js/modernizr.js') }}"></script>
		<script src="{{ asset('js/angular.min.js') }}"></script>
	</head>
	
	<body ng-controller="CotizacionCtrl">
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 menu"></div>

				<div class="col-xs-12 header">
					<h2><a href="{{ route('home') }}"><i class="fa fa-angle-left"></i> Volver</a></h2>
				</div>

			</div>

			<div class="row fs-form-wrap" id="fs-form-wrap">			
				<div class="col-sm-12">
					
					@include('pagina.cotizaciones.formulario')

				</div>
			</div>
		</div>

		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/classie.js') }}"></script>
		<script src="{{ asset('js/cotizacion.js') }}"></script>

		<script>

			angular.module('App', [])

			.controller('CotizacionCtrl', ['$scope', function ($scope) {

				$scope.contizacion = {};

				console.log('ready');

				$scope.Ok = function(contizacion){
					if (!form.$invalid) {
						console.log(contizacion);

						window.location = '/';
					}
				};
				


			}]);

		</script>
	</body>
</html>