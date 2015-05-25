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
	require(__DIR__ . '/routes/pagina.php');

// Dashboard
	require(__DIR__ . '/routes/dashboard.php');
	
//Blog
	require(__DIR__ . '/routes/blog.php');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
