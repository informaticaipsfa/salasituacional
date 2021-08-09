/**
 * @description Casos refiere a los militares con situaciones especiales
 * @author maikol_echenique@hotmail.com
 * @date  
 * @version 1.0.0 ES11
 **/
 
let lstFamiliares = {}
let ced = ''
 
 
class Familiares{
     
 
    constructor(){
         
    }
     
     
    obtener(){
         
    }
 
    listarFamiliares(ced){
        var ced = $("#txtCedula").val();
        $.ajax({
                url: _API + '/familiares/listarFamiliares',
                dataType: 'json',
                method: 'POST',
                data: {
                        ced: ced,
                },
                success: function(datos){
                        lstFamiliares = datos;
                        console.log(lstFamiliares);
                        var i=0;
                        lstFamiliares.forEach(e => {
                        i++;
                        $("#tbFamiliaresEditar").append(`<tr>
                        <td><input type="text" class="form-control" size=5" id="txtParentescoFamiliar${i}" value="${e.parentesco}"></td>
                        <td><input type="text" class="form-control" id="txtNombreFamiliar${i}" value="${e.nombres}"></td>
                        <td><input type="text" class="form-control" size="5" id="txtCedulafamiliar${i}" value="${e.cedula}"></td>
                        <td><input type="text" class="form-control" size="5" id="txtEdadFamiliar${i}" value="${e.edad}"></td>
                        <td><input type="text" class="form-control" size="5" id="txtIdFamiliar${i}" value="${e.id}"></td>
                        </tr>`)

                        });
                }
        });
    }


    actualizarFamiliares(ced){
        for (var i = 1; i <= lstFamiliares.length; i++) {
            ced = $("#txtCedula").val();
            var parentesco = $("#txtParentescoFamiliar" + i).val();
            var nombres = $("#txtNombreFamiliar" + i).val();
            var cedula = $("#txtCedulafamiliar" + i).val();
            var edad = $("#txtEdadFamiliar" + i).val();
            var porcentaje_pension = $("#txtIdFamiliar" + i).val();

            $.ajax({
                     url:  _API + "/familiares/actualizarFamiliares",
                     dataType: "json",
                     type: "POST",
                     data: {
                        parentesco: parentesco,
                        nombres: nombres,
                        cedula: cedula,
                        edad: edad,
                        porcentaje_pension: porcentaje_pension,
                        ced: ced
                     },
                     cache: false,
                     success: function(dataResult){
                             //console.log(dataResult)
                             //var dataResult = JSON.parse(dataResult);
                             if(dataResult.statusCode==200){
                                     console.log('Familiares actualizados satisfactoriamente !');					
                             }
                             else if(dataResult.statusCode==201){
                                console.log("Ha ocurrido un error !");
                             }
                             
                             }
            });
        }
    }
 
}

let fam = new Familiares();

$(function(){
    fam.listarFamiliares();
    //fam.editarFamiliares();
})

function imprimirFamiliares(){
    var cadena = ''
    var i=0;
    var cedula = $("#txtCedula").val();
    lstFamiliares.forEach(e=>{
    i++;
    if ( e.cedulamilitar == cedula){
            cadena += `<tr>
            <td>${e.parentesco}</td>
            <td colspan="2">${e.nombres}</td>
            <td>${e.cedula}</td>
            <td>${e.edad}</td>
            <td>${e.id}</td>
            </tr>`
            }

    });
    return cadena;
}