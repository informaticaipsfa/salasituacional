<?php

namespace App\Models;

use CodeIgniter\Model;
use Error;

class MNecesidades extends Model{
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

   public function listarNecesidades(){ 
      $lst = $this->db->query("SELECT * FROM necesidades");
      return $lst->getResult();
  }

}