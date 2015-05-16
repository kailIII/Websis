<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Websis - Inicio</title>

    <link rel="shortcut icon" href="favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

</head>

<body>
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Correo</th>
						</tr>
					</thead>
					<tbody>
						@foreach($suscripciones as $suscripcion)
						<tr>
							<td>{{$suscripcion->correo}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
    <!-- JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>

</html>





