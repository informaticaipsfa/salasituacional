<?php namespace App\Controllers;

class Militar extends BaseController{
	
	/**
	 * Funcion para cargar la vista principal
	 */
	public function registrarmilitar()
	{
		return view('militar/registrarmilitar');
	}

	public function consultarmilitar()
	{
		return view('militar/consultarmilitar');
	}

	/**
	 * Obtener ID 
	 * @access public
	 * @return json
 	*/
	 public function wsmilitar($id ){
		/* API URL */
		$url = 'https://app.ipsfa.gob.ve/ipsfa/api/militar/crud/' . $id;
		/* Init cURL resource */
		$ch = curl_init($url);

		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Content-Type:application/json',
			'Authorization: Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJVc3VhcmlvIjp7ImlkIjoiNjBiOGY2MGU0MjJjMzUwYWFlNWJlMTFkIiwiY2VkdWxhIjoicmVnaXN0cm8iLCJub21icmUiOiJyZWdpc3RybyIsInVzdWFyaW8iOiJyZWdpc3RybyIsImNvcnJlbyI6IiIsImZlY2hhY3JlYWNpb24iOiIwMDAxLTAxLTAxVDAwOjAwOjAwWiIsImVzdGF0dXMiOjAsInN1Y3Vyc2FsIjoiY2FyYWNhcyIsIlJvbGVzIjp7ImRlc2NyaXBjaW9uIjoiIn0sIlBlcmZpbCI6eyJkZXNjcmlwY2lvbiI6ImNvbnN1bHRhIiwiTWVudSI6W3sidXJsIjoic3RhcnRlci5odG1sIiwianMiOiJ1c3VhcmlvIiwiaWNvbm8iOiJmYSBmYS1zZWFyY2giLCJub21icmUiOiJEYXRvcyJ9XX0sIkZpcm1hRGlnaXRhbCI6eyJkaXJlY2Npb25pcCI6IjEwLiouKi4qIiwidGllbXBvIjoiMDAwMS0wMS0wMVQwMDowMDowMFoifSwiZGlyZWNjaW9uIjoiICIsImNhcmdvIjoiYW5hbGlzdGEifSwiUm9sIjp7ImRlc2NyaXBjaW9uIjoiIn0sImV4cCI6MTYzODI4NjU3NSwiaXNzIjoiQ29uZXhpb24gQnVzIEVtcHJlc2FyaWFsIn0.RFKJrIZ-5sl2FlMJLirr415k9tNjrkM2jrqPfow1Snf7Aiw6XfwOqfSkah7PqDgjEdv5_-44fsHzj9RHNonFJQmIMv0I3ALXUHHJeBxwm1xZm-PwAUC-aiyWywvDfOLjGBRsTE7wcqJfEzeEDNpuKfpb4W5GCRZB4NP6BSnM59k',
		));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		echo $result;
		curl_close($ch);
	}

	/**
	 * Actualizar
	 * @access public
     * @param string cedula
	 */
	public function actualizarMilitar(){
		header('Content-Type: application/json');
		$grado = $_POST['grado'];
		$nombre = $_POST['nombre'];
		$cedula = $_POST['cedula'];
		$componente = $_POST['componente'];
		$situacion = $_POST['situacion'];
		$causa = $_POST['causa'];
		$fechaevento = $_POST['fechaevento'];
		$lugar = $_POST['lugar'];
		$estado = $_POST['estado'];
		$ascenso = $_POST['ascenso'];
		$numeroresolucion = $_POST['numeroresolucion'];
		$fecharesolucion = $_POST['fecharesolucion'];
		$lineablanca = $_POST['lineablanca'];
		$vivienda = $_POST['vivienda'];
		$vehiculo = $_POST['vehiculo'];
		$bienestar = $_POST['bienestar'];
		$ente = $_POST['ente'];
		$otros = $_POST['otros'];
		$emil = new \App\Models\MMilitar();
		$emil->actualizarMilitar($grado,$nombre,$cedula,$componente,$situacion,
		$causa,$fechaevento,$lugar,$estado,$ascenso,$numeroresolucion,$fecharesolucion,
		$lineablanca,$vivienda,$vehiculo,$bienestar,$ente,$otros);
		echo json_encode(array("statusCode"=>200));
		}

}
