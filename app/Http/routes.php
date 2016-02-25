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


//Rutas

Route::get('prueba', function() {
    return "Hola desde Routes.php";
});

//Pasar valor por get
Route::get('nombre/{nombre}', function($nombre) {
    return "Mi nombre es: ".$nombre;
});

//Pasar valor por default si no se especifica alguno
Route::get('nombre/{nombre?}', function($nombre = "Especifica un nombre") {
    return "Mi nombre es: ".$nombre;
});


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
