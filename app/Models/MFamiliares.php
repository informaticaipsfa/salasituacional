<?php

namespace App\Models;

use CodeIgniter\Model;
use Error;

class MFamiliares extends Model{
    protected $db;
/**
 * Conexión a la base de datos
 */
    public function __constructor(){
       $this->db = \Config\Database::connect();
    }

/**
 *  Permite agregar un nuevo registro
 */

   public function listarFamiliares($ced){ 
      $lst = $this->db->query("SELECT * FROM familiares WHERE cedulamilitar='$ced'");
      return $lst->getResult();
  }
  public function actualizarFamiliares($ced,$parentesco,$nombres,$cedula,$edad,$porcentaje_pension){ 
    // $act = $this->db->query("UPDATE familiares SET parentesco='$parentesco', nombres='$nombres', cedula='$cedula', edad='$edad', porcentaje_pension='$porcentaje_pension' WHERE cedula='$cedula' AND cedulamilitar='$ced'");
    // return $act->getResult();
    $act="UPDATE `familiares` SET `parentesco`='$parentesco', `nombres`='$nombres', `cedula`='$cedula', `edad`='$edad', `porcentaje_pension`='$porcentaje_pension' WHERE `cedula`='$cedula' AND cedulamilitar='$ced'";
		$this->db->query($act);
    
}

}