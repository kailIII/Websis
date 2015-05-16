<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Pagina
	Route::get('/', ['as' => 'home', 'uses' => 'PaginaController@index']);

//Cotizacion
	Route::get('cotizacion', ['as' => 'cotizacion', 'uses' => 'CotizacionesController@index']);

//Servicios
	Route::get('servicios', ['as' => 'servicios', 'uses' => 'ServiciosController@index']);
	Route::get('servicios/desarrollo', ['as' => 'desarrollo', 'uses' => 'ServiciosController@desarrollo']);
	Route::get('servicios/multimedia', ['as' => 'multimedia', 'uses' => 'ServiciosController@multimedia']);
	Route::get('servicios/soporte', ['as' => 'soporte', 'uses' => 'ServiciosController@soporte']);

//Blog
	Route::get('blog', ['as' => 'blog', 'uses' => 'BlogController@index']);

	Route::get('blog/nosotros', ['as' => 'nosotros', 'uses' => 'BlogController@nosotros']);

	Route::get('blog/post/{id}', ['as' => 'post', 'uses' => 'BlogController@post']);

	Route::get('blog/contactos', ['as' => 'contactos', 'uses' => 'BlogController@contactos']);

// Api
	Route::controller('api', 'ApiController');

// Suscripciones
	Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'dashboardController@index']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
