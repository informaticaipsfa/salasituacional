/**
 * @description Casos refiere a los militares con situaciones especiales
 * @author maikol_echenique@hotmail.com
 * @date  
 * @version 1.0.0 ES11
 **/
 
let lstFamiliares = {}
 
 
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


    editarFamiliares(){
                for (var i = 0; i <= lstFamiliares.length; i++) {
                console.log( $("#txtParentescoFamiliar"+i).val());
                console.log( $("#txtNombreFamiliar"+i).val());
                console.log( $("#txtCedulafamiliar"+i).val());
                console.log( $("#txtEdadFamiliar"+i).val());
                console.log( $("#txtIdFamiliar"+i).val());
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

let fam = new Familiares();

$(function(){
    fam.listarFamiliares();
    fam.editarFamiliares();
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

// function actualizarFamiliares(cedula){
//     LstFamiliares.forEach(e => {
//         console.log(e)

//         // console.log(e.cedula, " cedula ", cedula);
//         // if ( e.cedulamilitar == cedula){
//         //     familiarObj = e;
//         // }

//         // $("#tbFamiliaresEditar").append(`<tr>
//         // <td><input type="text" class="form-control" size=5" id="txtParentesco" value="${e.parentesco}"></td>
//         // <td><input type="text" class="form-control" id="txtNombreFamiliar" value="${e.nombre}"></td>
//         // <td><input type="text" class="form-control" size="5" id="txtCedulafamiliar" value="${e.cedula}"></td>
//         // <td><input type="text" class="form-control" size="5" id="txtEdadFamiliar" value="${e.edad}"></td>
//         // <td><input type="text" class="form-control" size="5" id="txtIdFamiliar" value="${e.id}"></td>
//         // </tr>`)

//     });
//     var datos = JSON.stringify(familiarObj);
//     sessionStorage.setItem('familiares', datos);