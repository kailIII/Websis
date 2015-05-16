<?php namespace App\Http\Controllers;

class ServiciosController extends Controller {

	public function __construct()
	{
		// $this->middleware('auth');
	}

	public function index()
	{
		return view('pagina.servicios.index');
	}

	public function desarrollo()
	{
		return view('pagina.servicios.desarrollo');
	}

	public function multimedia()
	{
		return view('pagina.servicios.multimedia');
	}

	public function soporte()
	{
		return view('pagina.servicios.soporte');
	}

}