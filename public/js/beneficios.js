/**
 * @description Beneficios refiere a los militares con situaciones especiales
 * @author maikol_echenique@hotmail.com
 * @date  
 * @version 1.0.0 ES11
 **/
 
 
 
 
 class Beneficios{
     
 
    constructor(){
         
    }
     
     
    obtener(){
         
    }
 
    // listar(){
    //     $.ajax({
    //         url: _API + '/beneficios/listarBeneficios',
    //         dataType: 'json',
    //         method: 'GET',
    //         success: function(datos){
    //            console.log(datos);
    //             //console.log(datos)
                
    //         }
    //     });
    // };

    listarEditarBeneficios(cdl){
        var cdl = $("#txtCedula").val();
        $.ajax({
            url: _API + '/beneficios/listarBeneficiosEditar',
            dataType: 'json',
            method: 'POST',
            data: {
                cdl: cdl,
            },
            success: function(datos){
                lstBeneficios = datos;
                console.log(lstBeneficios);
                var i=0;
                lstBeneficios.forEach(e => {
                i++;
                    $('#tbBeneficiosEditar').append(`<TR>
                    <TD><input type="text" class="form-control" size=5" id="txtParentescoB${i}" value="${e.parentesco}"</TD>
                    <TD><input type="text" class="form-control" size=5" id="txtPensionB${i}" value="${e.pension}"</TD>
                    <TD><input type="text" class="form-control" size=5" id="txtPagoUnicoB${i}" value="${e.pago_unico}"</TD>
                    <TD><input type="text" class="form-control" size=5" id="txtMensualB${i}" value="${e.mensual}"</TD>
                    <TD><input type="text" class="form-control" size=5" id="txtFideicomisoB${i}" value="${e.fideicomiso}"</TD>
                    <TD><input type="text" class="form-control" size=5" id="txtMontoB${i}" value="${e.monto}"</TD></TR>`);
                    
                });
            }
        });
    }

    editarBeneficios(){
        for (var i = 0; i <= lstBeneficios.length; i++) {
        console.log( $("#txtParentescoB"+i).val());
        console.log( $("#txtPensionB"+i).val());
        console.log( $("#txtPagoUnicoB"+i).val());
        console.log( $("#txtMensualB"+i).val());
        console.log( $("#txtFideicomisoB"+i).val());
        console.log( $("#txtMontoB"+i).val());
        }
        
    //  $.ajax({
    //          url:  _API + "/militar/actualizarMilitar",
    //          dataType: "json",
    //          type: "POST",
    //          data: {
                     
    //          },
    //          cache: false,
    //          success: function(dataResult){
    //                  //console.log(dataResult)
    //                  //var dataResult = JSON.parse(dataResult);
    //                  if(dataResult.statusCode==200){
    //                          console.log('Familiares actualizados satisfactoriamente !');					
    //                  }
    //                  else if(dataResult.statusCode==201){
    //                     console.log("Ha ocurrido un error !");
    //                  }
                     
    //                  }
    //  });
}
 
}

function imprimirBeneficios(){
    var cadena = ''
    var i=0;
    var cedula = $("#txtCedula").val();
    lstBeneficios.forEach(e=>{
    i++;
    if ( e.cedulamilitar == cedula){
            cadena += `<tr>
            <td>${e.parentesco}</td>
            <td>${e.pension}</td>
            <td>${e.pago_unico}</td>
            <td>${e.mensual}</td>
            <td>${e.fideicomiso}</td>
            <td>${e.monto}</td>
            </tr>`
            }

   });
   return cadena;
}

let bnf = new Beneficios();

$(function(){
    bnf.listarEditarBeneficios();
    bnf.editarBeneficios();
})