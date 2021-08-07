<?php namespace App\Controllers;

class Registrar extends BaseController{
	
	/**
	 * Funcion para cargar la vista principal
	 */
	public function index()
	{
		return view('registrar/registrar');
	}
	
	public function editarficha()
	{
		return view('registrar/editarficha');
	}


	public function agregarMilitar(){
			
		$mil =  new \App\Models\MMilitar();
		$grado = $_POST['grado'];
		$nombre = $_POST['nombre'];
		$cedula = $_POST['cedula'];
		$componente = $_POST['componente'];
		$situacion = $_POST['situacion'];
		$causa = $_POST['causa'];
		$fecha_evento = $_POST['fechaevento'];
		$lugar = $_POST['lugar'];
		$estado = $_POST['estado'];
		$ascenso_postmortem = $_POST['ascensopostmortem'];
		$numeroresolucion = $_POST['numeroresolucion'];
		$fecha_resolucion = $_POST['fecharesolucion'];
		$lineablanca = $_POST['lineablanca'];
		$vivienda = $_POST['vivienda'];
		$vehiculo = $_POST['vehiculo'];
		$bienestar = $_POST['bienestar'];
		$ente = $_POST['ente'];
		$otros = $_POST['otros'];
		$mil->agregarMilitar($grado,$nombre,$cedula,$componente,$situacion,
		$causa,$fecha_evento,$lugar,$estado,$ascenso_postmortem,$numeroresolucion,$fecha_resolucion,
		$lineablanca,$vivienda,$vehiculo,$bienestar,$ente,$otros);	
		echo json_encode(array("statusCode"=>200));
	
	}
	public function insertarFamiliares(){
			
		$fam =  new \App\Models\MMilitar();
		$parentesco = $_POST['parentesco'];
		$nombre = $_POST['nombre'];
		$cedula = $_POST['cedula'];
		$edad = $_POST['edad'];
		$cedulamilitar = $_POST['cedulamilitar'];
		$fam->insertarFamiliares($parentesco,$nombre,$cedula,$edad,$cedulamilitar);	
		echo json_encode(array("statusCode"=>200));
	
	}
}
