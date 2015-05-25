<?php namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Suscripcion;

class DashboardController extends Controller {


	public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
	{
		$suscripciones = Suscripcion::count();

		$data['suscripciones'] = $suscripciones;

		return view('dashboard.views.index', compact('data'));
	}

	public function suscripciones()
	{

		$suscripciones = Suscripcion::all();

		return view('dashboard.views.suscripciones', compact('suscripciones'));

	}

}