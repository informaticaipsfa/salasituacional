/**
 * @description Utilidades del Sistema
 * @author maikol_echenique@hotmail.com
 * @date  
 * @version 1.0.0 ES11
 **/

 class Utilidad{
    constructor(){
     
    }
  
   /**
   * Función para aceptar solo numeros 
   */
    SoloNumero(event,elemento,monto) {
      var key = event.keyCode || event.which;
      var tecla = String.fromCharCode(key).toLowerCase();
      var numeros = "0123456789";
      var especiales = [8, 37, 39, 13, 9];
      if(monto == true) especiales.push(46);
      if(key == 46){
          if(elemento.value.indexOf(".") != -1 || elemento.value == ""){
              return false;
          }
      }
  
      var tecla_especial = false
      for (var i in especiales) {
          if (key == especiales[i]) {
              tecla_especial = true;
              break;
          }
      }
  
      if (numeros.indexOf(tecla) == -1 && !tecla_especial) {
          return false;
      }
      return true;
    }
  
  
  }
  