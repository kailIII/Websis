<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dash/css/AdminLTE.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

  </head>
  <body class="login-page">

  	<div class="login-box">
	    <div class="login-logo">
	      	<a href="{{ route('home') }}"><img src="/img/logotipo.svg" alt="Logo" width="200"></a>
	      	<hr>
	    </div>
	    <div class="login-box-body">

    	@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
      	
      	<form role="form" method="POST" action="/auth/login">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			
			<div class="form-group form-group-lg has-feedback">
			  	<input type="email" class="form-control" name="email" value="{{ old('email') }}">
			  	<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>

			<div class="form-group form-group-lg has-feedback">
			  	<input type="password" class="form-control" name="password">
			  	<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>

		  	<div class="form-group form-group-lg text-center">    
		    	<div class="checkbox">
		      		<label>
		        		<input type="checkbox" name="remember"> Recordarme
		      		</label>
		    	</div>                        
		  	</div>
			<div class="form-group form-group-lg">
				<button type="submit" class="btn btn-primary btn-block btn-lg btn-flat">Entrar</button>
			</div>
		</form>

			{{-- <a href="/password/email">I forgot my password</a><br> --}}
			{{-- <a href="register.html" class="text-center">Register a new membership</a> --}}
		</div>
    </div>
    
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

  </body>
</html>
