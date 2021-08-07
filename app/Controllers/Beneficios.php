<?php namespace App\Controllers;

class Beneficios extends BaseController{
	
	/**
	 * Funcion para cargar la vista principal
	 */

	public function insertarBeneficios(){
			
		$ben =  new \App\Models\MBeneficios();
		$parentesco = $_POST['parentesco'];
		$pension = $_POST['pension'];
		$pagounico = $_POST['pagounico'];
		$mensual = $_POST['mensual'];
		$fideicomiso = $_POST['fideicomiso'];
		$monto = $_POST['monto'];
		$cedulamilitar = $_POST['cedulamilitar'];
		$ben->insertarBeneficios($parentesco,$pension,$pagounico,$mensual,$fideicomiso,$monto,$cedulamilitar);	
		echo json_encode(array("statusCode"=>200));
	
	}
	
	 public function listarBeneficios(){
		header('Content-Type: application/json');
		$lst =  new \App\Models\MBeneficios();
		$respuesta = $lst->listarBeneficios($_POST['ced']);
		echo json_encode($respuesta);
	}

	public function listarBeneficiosEditar(){
		header('Content-Type: application/json');
		$lst =  new \App\Models\MBeneficios();
		$respuesta = $lst->listarBeneficiosEditar($_POST['cdl']);
		echo json_encode($respuesta);
	}
}
