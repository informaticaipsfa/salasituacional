<?php

namespace App\Models;

use CodeIgniter\Model;
use Error;

class MBeneficios extends Model{
    protected $db;
/**
 * Conexión a la base de datos
 */
    public function __constructor(){
       $this->db = \Config\Database::connect();
    }

/**
 *  Permite agregar un nuevo beneficiario
 */
    public function insertarBeneficios($parentesco,$pension,$pago_unico,$mensual,$fideicomiso, $monto, $cedula){
      $beneficios="INSERT INTO `beneficios` (`parentesco`,`pension`,`pago_unico`,`mensual`,`fideicomiso`,`monto`, `cedulamilitar`)
      VALUES ('$parentesco','$pension','$pago_unico','$mensual','$fideicomiso','$monto', '$cedula')";
      $this->db->query($beneficios);
      // print_r($rs);
      // return $rs->getResult();

    }


   public function listarBeneficios($ced){ 
      $lst = $this->db->query("SELECT * FROM beneficios WHERE cedulamilitar='$ced'");
      return $lst->getResult();
  }

   public function listarBeneficiosEditar($cdl){ 
   $lst = $this->db->query("SELECT * FROM beneficios WHERE cedulamilitar='$cdl'");
   return $lst->getResult();
   }

}