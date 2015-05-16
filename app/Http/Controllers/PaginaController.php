<?php namespace App\Http\Controllers;

class PaginaController extends Controller {

	public function __construct()
	{
		// $this->middleware('auth');
	}

	public function index()
	{
		return view('pagina.home.index');
	}

}
