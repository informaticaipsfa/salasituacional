<?php

namespace App\Models;

use CodeIgniter\Model;

class MSecurity extends Model{

    var $jwt;

    var $id;

    var $rs;

    var $url;

    /**
     * Conexión a los origines de datos
     */
    public function __constructor(){
        
    }

    /**
	 * @access public
	 * @param string jwt
     * @return int estatus
	 */
	 public function validar(){
		 // sudo sestatus -b | grep httpd_can_network_connect
		 // sudo setsebool -P httpd_can_network_connect 1
		 // sudo setsebool -P httpd_unified 1
		$atuho = 'Authorization: Bearer ' . $this->jwt;

		/* API URL */
		$url = $this->url;
		/* Init cURL resource */
		$ch = curl_init($url);

		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',
			$atuho,
		));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  false);

		$result = curl_exec($ch);
		$obj = json_decode($result);

	
		return $obj->tipo;
		curl_close($ch);
	}

}
