<?php namespace cinema\Http\Controllers;

class PruebaController extends Controller {

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return "Hola desde Controlador";
	}

	public function nombre($nombre)
	{
		return "Hola mi nombre es: ".$nombre;
	}

}