<?php namespace App\Controllers;

class Eventos extends BaseController{
	
	/**
	 * Funcion para cargar la vista principal
	 */

	public function listarEventos(){
		header('Content-Type: application/json');
		$lst =  new \App\Models\MEventos();
		$respuesta = $lst->listarEventos();
		echo json_encode($respuesta);
	}
}
