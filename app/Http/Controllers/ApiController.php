<?php namespace App\Http\Controllers; 

use Request;
use Illuminate\Http\Response;
use App\Suscripcion;

class ApiController extends Controller {

	public function __construct()
	{
		// $this->middleware('auth');
	}

	public function postSuscripcion()
	{
		try {
			// Mail::send(view, data, callback)
			$data = Request::all();

			$sucripcion = new Suscripcion;

	        if($sucripcion->guardar($data)){

	            // $this->mail('emails.usuario_creado', $usuario, $pass);

	            return (new Response($data, 201))->header('Content-Type', 'application/json');
	        }

	        
	        // $errores = [];
	        // foreach ($sucripcion->errores->all() as $error) {
	        //     $errores .= "<br>" . $error;
	        // }

			return (new Response($sucripcion->errores->all(), 202))->header('Content-Type', 'application/json');

		} catch (Exception $e) {
			return (new Response($e, 202))->header('Content-Type', 'application/json');
		}
	}

	public function postEmail()
	{
		try {
			$data = Request::all();
			// Mail::send(view, data, callback)

			// $sucripcion = new Suscripcion;

	  //       if($sucripcion->guardar($data)){

	  //           return (new Response($data, 201))->header('Content-Type', 'application/json');
	  //       }

			return (new Response($data, 202))->header('Content-Type', 'application/json');

		} catch (Exception $e) {
			return (new Response($e, 202))->header('Content-Type', 'application/json');
		}
	}

}