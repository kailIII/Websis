<?php namespace App\Http\Controllers;

class BlogController extends Controller {

	public function __construct()
	{
		// $this->middleware('auth');
	}


	public function index()
	{
		return view('blog.home.index');
	}

	public function nosotros()
	{
		return view('blog.nosotros.index');
	}

	public function post($id)
	{
		// return $id;
		return view('blog.post.index');
	}

	public function contactos()
	{
		return view('blog.contactos.index');
	}

}