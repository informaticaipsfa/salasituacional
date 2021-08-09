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
	public function actualizarFamiliares(){
		header('Content-Type: application/json');
		$ced = $_POST['ced'];
		$parentesco = $_POST['parentesco'];
		$nombres = $_POST['nombres'];
		$cedula = $_POST['cedula'];
		$edad = $_POST['edad'];
		$porcentaje_pension = $_POST['porcentaje_pension'];
		$fam = new \App\Models\MFamiliares();
		$fam->actualizarFamiliares($ced,$parentesco,$nombres,$cedula,$edad,$porcentaje_pension);
		echo json_encode(array("statusCode"=>200));
		}
}
