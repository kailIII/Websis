<?php namespace App\Http\Controllers;

class CotizacionesController extends Controller {


	public function __construct()
	{
		// $this->middleware('auth');
	}


	public function index()
	{
		return view('pagina.cotizaciones.index');
	}

}