<?php

namespace App\Models;

use CodeIgniter\Model;
use Error;

class MEventos extends Model{
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

   public function listarEventos(){ 
      $lst = $this->db->query("SELECT * FROM evento");
      return $lst->getResult();
  }

}