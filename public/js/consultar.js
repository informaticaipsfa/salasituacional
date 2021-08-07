/**
 * @description Solicitar permite hacer la busqueda del solicitante del turno y generar el ticket de dicha solicitud
 * @author maikol_echenique@hotmail.com
 * @date  
 * @version 1.0.0 ES11
 **/

/**
 * Variables Globales
 */
let lstMilitar = {};
let cedula = '';



 class Solicitar{
    

    constructor(){
        this.cedula = ''
    }
    
    
    obtener(){
        this.cedula = $("#txtCedula").val()
    }
}

/**
 * Permite realizar la busqueda de los datos de identidad asociados al solicitante
 */ 
function buscarCedula(){
    cedula = $("#txtCedula").val();
    if (cedula != undefined) {
        $("#txtCedula").val(cedula);
    }
    if ($("#txtCedula").val() == '') {
        alert("Debe introducir una cédula");
        return false;
    }
    $.ajax({
        url: _API + '/militar/wsmilitar/' + cedula,
        type: 'GET',
        dataType: 'json',
        beforeSend: function() {
            //Mostrar el loading
            $("#loading").show();
        },
        success: function(datos){
            //console.log(datos);
            lstMilitar = datos;
            registrar()

            $("#loading").hide();
            console.log("Done");
            return datos;   
        },
    })
}


function registrar(){
    var datos = JSON.stringify(lstMilitar);
    sessionStorage.setItem('militar', datos)
    location.href =_API + '/registrar';
    
 
}


    

    