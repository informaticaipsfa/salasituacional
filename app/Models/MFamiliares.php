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

}