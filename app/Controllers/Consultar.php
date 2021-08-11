<?php namespace App\Controllers;

class Consultar extends BaseController{
	
	/**
	 * Funcion para cargar la vista principal
	 */
	public function militar()
	{
		return view('consultar/militar');
	}

	public function bandeja()
	{
		return view('consultar/bandeja');
	}

	public function listarCasos(){
		header('Content-Type: application/json');
		$lst =  new \App\Models\MMilitar();
		$respuesta = $lst->listarCasos();
		echo json_encode($respuesta);
	}

	public function eliminarCasos(){
		header('Content-Type: application/json');
		$id = $_POST['id'];
		$lst =  new \App\Models\MMilitar();
		$respuesta = $lst->eliminarCasos($id);
		echo json_encode($respuesta);
	}
}
