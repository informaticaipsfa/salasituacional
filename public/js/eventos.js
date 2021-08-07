/**
 * @description Casos refiere a los militares con situaciones especiales
 * @author maikol_echenique@hotmail.com
 * @date  
 * @version 1.0.0 ES11
 **/
 
 
 
 
 class Eventos{
     
 
    constructor(){
         
    }
     
     
    obtener(){
         
    }
 
    listar(){
        $.ajax({
            url: _API + '/eventos/listarEventos',
            dataType: 'json',
            method: 'GET',
            success: function(datos){
               console.log(datos);
                //console.log(datos)
                
            }
        });
    };
 
 
}