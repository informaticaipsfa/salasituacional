<?php namespace App\Controllers;

class Necesidades extends BaseController{
	
	/**
	 * Funcion para cargar la vista principal
	 */

	public function listarNecesidades(){
		header('Content-Type: application/json');
		$lst =  new \App\Models\MNecesidades();
		$respuesta = $lst->listarNecesidades();
		echo json_encode($respuesta);
	}
}
