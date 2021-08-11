<?php

namespace App\Models;

use CodeIgniter\Model;
use Error;

class MMilitar extends Model{
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

    function agregarMilitar($grado,$nombre,$cedula,$componente,$situacion,
    $causa,$fecha_evento,$lugar,$estado,$ascenso_postmortem,$numeroresolucion,
    $fecha_resolucion,$lineablanca,$vivienda,$vehiculo,$bienestar,$ente,$otros){
		$militar="INSERT INTO `militar` (`grado`,`nombre`,`cedula`,`componente`,`situacion`)
      VALUES ('$grado','$nombre','$cedula','$componente','$situacion')";
		$this->db->query($militar);
      $evento="INSERT INTO `evento` (`causa`,`fecha_evento`,`lugar`,`estado`,`ascenso_postmortem`,`numero_resolucion`,`fecha_resolucion`, `cedulamilitar`)
      VALUES ('$causa','$fecha_evento','$lugar','$estado','$ascenso_postmortem,','$numeroresolucion','$fecha_resolucion', '$cedula')";
		$this->db->query($evento);
      $necesidades="INSERT INTO `necesidades` (`linea_blanca`,`vivienda`,`vehiculo`,`bienestar`,`ente`,`otros`,`cedulamilitar`)
      VALUES ('$lineablanca','$vivienda','$vehiculo','$bienestar','$ente','$otros', '$cedula')";
		$this->db->query($necesidades);
	}

   function insertarFamiliares($parentesco,$nombre,$cedula,$edad,$cedulamilitar){
		$fam ="INSERT INTO `familiares` (`parentesco`, `nombres`,`cedula`, `edad`, `cedulamilitar`)VALUES ('$parentesco','$nombre','$cedula','$edad', '$cedulamilitar')";
		$rs = $this->db->query($fam);
      print_r($rs);
      return $rs->getResult();

	}

   public function listarCasos(){ 
      $lst = $this->db->query("SELECT * FROM militar M 
                              INNER JOIN evento E ON M.cedula = E.cedulamilitar
                              INNER JOIN necesidades N ON M.cedula = N.cedulamilitar");
      return $lst->getResult();
   }

  function actualizarMilitar($grado,$nombre,$cedula,$componente,$situacion,
      $causa,$fechaevento,$lugar,$estado,$ascenso,$numeroresolucion,
      $fecha_resolucion,$lineablanca,$vivienda,$vehiculo,$bienestar,$ente,$otros){
      $militar="UPDATE `militar` SET `grado`='$grado', `nombre`='$nombre', `cedula`='$cedula', `componente`='$componente', `situacion`='$situacion' WHERE `cedula`='$cedula'";
		$this->db->query($militar);
      $evento="UPDATE `evento` SET `causa`='$causa', `fecha_evento`='$fechaevento', `lugar`='$lugar', `estado`='$estado', `ascenso_postmortem`='$ascenso', `numero_resolucion`='$numeroresolucion', `fecha_resolucion`='$fecha_resolucion' WHERE `cedulamilitar`='$cedula'";
		$this->db->query($evento);
      $necesidades="UPDATE `necesidades` SET `linea_blanca`='$lineablanca', `vivienda`='$vivienda', `vehiculo`='$vehiculo', `bienestar`='$bienestar', `ente`='$ente', `otros`='$otros' WHERE `cedulamilitar`='$cedula'";
		$this->db->query($necesidades);
	}

    public function eliminarCasos($id){ 
      $mil="DELETE FROM `militar` WHERE `cedula`='$id' ";
		$this->db->query($mil);
      $mil="DELETE FROM `evento` WHERE `cedulamilitar`='$id' ";
		$this->db->query($mil);
      $mil="DELETE FROM `beneficios` WHERE `cedulamilitar`='$id' ";
		$this->db->query($mil);
      $mil="DELETE FROM `familiares` WHERE `cedulamilitar`='$id' ";
		$this->db->query($mil);
      $mil="DELETE FROM `necesidades` WHERE `cedulamilitar`='$id' ";
		$this->db->query($mil);
   }  
}