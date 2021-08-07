<?php namespace App\Controllers;

class Principal extends BaseController{
	
	/**
	 * Funcion para cargar la vista principal
	 */
	public function index()
	{
		return view('principal/index');
	}



}
