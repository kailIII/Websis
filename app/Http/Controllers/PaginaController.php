<?php namespace App\Http\Controllers;

use Request;
use Illuminate\Http\Response;
use App\Suscripcion;
use Mail;

class PaginaController extends Controller {

	public function __construct()
	{
		// $this->middleware('auth');
	}

	public function index()
	{
		return view('pagina.home.index');
	}

	public function suscripcion()
	{
		try {
			$data = Request::all();

			$sucripcion = new Suscripcion;

	        if($sucripcion->guardar($data)){

	            return (new Response($data, 201))->header('Content-Type', 'application/json');

	        }

			return (new Response($sucripcion->errores->all(), 202))->header('Content-Type', 'application/json');

		} catch (Exception $e) {
			return (new Response($e, 202))->header('Content-Type', 'application/json');
		}

	}

	public function email()
	{
		try {
			$data = Request::all();
			
			if ( $this->mailWebsis('msj', $data) )
 				return (new Response($data, 201))->header('Content-Type', 'application/json');

 			return (new Response(["No se pudo enviar el mensaje."], 202))->header('Content-Type', 'application/json');

		} catch (Exception $e) {
			return (new Response($e, 202))->header('Content-Type', 'application/json');
		}
	}

	private function mailWebsis($template, $data)
    {
        try {

	        Mail::send('emails.'. $template, array('data' => $data),function($message) use ($data) {

	            $message->to('tic.websis@gmail.com', 'Websis')->subject('Mensaje');

	        });

	        return true;

        } catch (Exception $e) {

        	return false;

        }

    }

}
