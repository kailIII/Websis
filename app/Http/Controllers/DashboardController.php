<?php namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Suscripcion;

class DashboardController extends Controller {


	public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
	{

		$suscripciones = Suscripcion::all();

		return view('dashboard.index', compact('suscripciones'));
	}

}