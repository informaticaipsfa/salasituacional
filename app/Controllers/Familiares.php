<?php namespace App\Controllers;

class Familiares extends BaseController{
	
	/**
	 * Funcion para cargar la vista principal
	 */

	public function listarFamiliares(){
		header('Content-Type: application/json');
		$lst =  new \App\Models\MFamiliares();
		$respuesta = $lst->listarFamiliares($_POST['ced']);
		echo json_encode($respuesta);
	}
}
