<?php namespace App\Controllers;

session_start();
class Login extends BaseController{
	
	protected $url = 'https://localhost:2286/v1/api/wusuario/validar';

	public function __constructor(){
		helper('url');
	}
	/**
	 * 
	 * @access public
	 * @param string jwt
	 */
	public function sslindex(){

		if(isset($_GET['jwt'])){
			$securityToken = new \App\Models\MSecurity();
			$securityToken->jwt = $_GET['jwt'];
			$securityToken->url = $this->url;
			
			if ( $securityToken->validar() == 1){
				$_SESSION['jwt'] = $securityToken->jwt;
				return redirect()->to("/principal/index");
			};
		}else{
			return redirect()->to("https://192.168.12.240:2286/app/");
		}
	}

	
}