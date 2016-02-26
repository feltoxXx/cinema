<?php namespace cinema\Http\Controllers;

use cinema\Http\Requests;
use cinema\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UsuarioController extends Controller {

	
	public function index()
	{
		//
	}

	public function create()
	{
		return view('usuario.create');
	}

	public function store(Request $request)
	{

		\cinema\User::create([
			'name' => $request['name'],
			'email' => $request['email'],
			'password' => bcrypt($request['password']),
			]);
		return "Usuario Registrado";
	}

	public function show($id)
	{
		//
	}

	public function edit($id)
	{
		//
	}

	public function update($id)
	{
		//
	}

	public function destroy($id)
	{
		//
	}

}
