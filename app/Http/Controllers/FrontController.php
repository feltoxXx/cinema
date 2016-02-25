<?php namespace cinema\Http\Controllers;

use cinema\Http\Requests;
use cinema\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FrontController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function contacto()
	{
		return view('contacto');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function reviews()
	{
		return view('reviews');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function admin()
	{
		return view('admin.index');
	}

	

}
