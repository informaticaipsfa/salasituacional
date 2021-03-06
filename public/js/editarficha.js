/**
 * @description Editar refiere a los militares con situaciones especiales
 * @author maikol_echenique@hotmail.com
 * @date  
 * @version 1.0.0 ES11
 **/

let omillocal = {};
let ofamlocal = {};
let cdl = '';
let lstBeneficios = {};


 
 class Editar{

     constructor(){
         
     }
     
     
     obtener(){
         
     }

     obtenerDatos(omillocal){
        
        $("#txtGrado").val(omillocal.grado);
        $("#txtNombre").val(omillocal.nombre);
        $("#txtCedula").val(omillocal.cedula);
        $("#txtComponente").val(omillocal.componente);
        $("#cmbSituacion").val(omillocal.situacion);
        $("#txtCausa").val(omillocal.causa);
        $("#txtFecha").val(omillocal.fecha_evento);
        $("#txtLugar").val(omillocal.lugar);
        $("#txtEstado").val(omillocal.estado);
        $("#txtAscenso").val(omillocal.ascenso_postmortem);
        $("#txtResolucion").val(omillocal.numero_resolucion);
        $("#txtFechaResolucion").val(omillocal.fecha_resolucion);
        $("#cmbParentesco").val(omillocal.parentesco);
        $("#cmbLinea").val(omillocal.linea_blanca);
        $("#cmbVivienda").val(omillocal.vivienda);
        $("#cmbVehiculo").val(omillocal.vehiculo);
        $("#cmbBienestar").val(omillocal.bienestar);
        $("#txtEnte").val(omillocal.ente);
        $("#txtOtros").val(omillocal.otros);
        $("#foto").attr("src",`https://192.168.12.247/sssifanb/afiliacion/temp/${omillocal.cedula}/foto.jpg`);
        }



        actualizarMilitar(){
               var grado = $("#txtGrado").val();
               var nombre = $("#txtNombre").val();
               var cedula = $("#txtCedula").val();
               var componente = $("#txtComponente").val();
               var situacion = $("#cmbSituacion").val();
               var causa = $("#txtCausa").val();
               var fechaevento = $("#txtFecha").val();
               var lugar = $("#txtLugar").val();
               var estado = $("#txtEstado").val();
               var ascenso = $("#txtAscenso").val();
               var numeroresolucion = $("#txtResolucion").val();
               var fecharesolucion = $("#txtFechaResolucion").val();
               var lineablanca = $("#cmbLinea").val();
               var vivienda = $("#cmbVivienda").val();
               var vehiculo = $("#cmbVehiculo").val();
               var bienestar = $("#cmbBienestar").val();
               var ente = $("#txtEnte").val();
               var otros = $("#txtOtros").val();
                $.ajax({
                        url:  _API + "/militar/actualizarMilitar",
                        dataType: "json",
                        type: "POST",
                        data: {
                                grado: grado,
                                nombre: nombre,
                                cedula: cedula,
                                componente: componente,
                                situacion: situacion,
                                causa: causa,
                                fechaevento: fechaevento,
                                lugar: lugar,
                                estado: estado,
                                ascenso: ascenso,
                                numeroresolucion: numeroresolucion,
                                fecharesolucion: fecharesolucion,
                                lineablanca: lineablanca,
                                vivienda: vivienda,
                                vehiculo: vehiculo,
                                bienestar: bienestar,
                                ente: ente,
                                otros: otros
                        },
                        cache: false,
                        success: function(dataResult){
                                //console.log(dataResult)
                                //var dataResult = JSON.parse(dataResult);
                                if(dataResult.statusCode==200){
                                        alert('Registro actualizado satisfactoriamente !');
                                        window.location.href = 'http://localhost/registroMilitares/consultar/bandeja';					
                                }
                                else if(dataResult.statusCode==201){
                                        alert("Ha ocurrido un error !");
                                }
                                
                                }
                });
        }
}

function imprimirFamiliares(){
        var cadena = ''
        var i=0;
        var cedula = $("#txtCedula").val();
        lstBeneficios.forEach(e=>{
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

// function imprimirBeneficios(){
//         var cadena = ''
//         var i=0;
//         var cedula = $("#txtCedula").val();
//         ofamlocal.forEach(e=>{
//         i++;
//         if ( e.cedulamilitar == cedula){
//                 cadena += `<tr>
//                 <td>${e.parentesco}</td>
//                 <td>${e.pension}</td>
//                 <td>${e.pagounico}</td>
//                 <td>${e.mensual}</td>
//                 <td>${e.fideicomiso}</td>
//                 <td>${e.monto}</td>
//                 </tr>`
//                 }

//         });
//         return cadena;
// }


let edt = new Editar();

$(function(){
        var millocal = sessionStorage.getItem('militarlocal');
        omillocal = JSON.parse(millocal);
        // var famlocal = sessionStorage.getItem('familiarlocal');
        // ofamlocal = JSON.parse(famlocal);
        edt.obtenerDatos(omillocal);
        // edt.listarEditarBeneficios();
        // edt.listarFamiliares();
        
})


function ImprimirFicha() {
        var html = `<div class="card text-center" id="ticket">
                <table border>
                <tr>
                        <tr>
                                <td colspan="6" class="centrado">FICHA DEL MILITAR</td>
                        </tr>
                        <tr>
                                <td rowspan="5"><img class="img" src="https://192.168.12.247/sssifanb/afiliacion/temp/${omillocal.cedula}/foto.jpg"></td>
                                <td colspan="1"><b>GRADO/JERARQU??A</b></td>
                                <td colspan="4">${omillocal.grado}</td>
                        </tr>

                        <tr>
                                <td colspan="1"><b>NOMBRES Y APELLIDOS</b></td>
                                <td colspan="4">${omillocal.nombre}</td>
                        </tr>

                        <tr>
                                <td colspan="1"><b>N?? DE C??DULA</b></td>
                                <td colspan="4">V-${omillocal.cedula}</td>
                        </tr>
                        
                        <tr>
                                <td colspan="1"><b>COMPONENTE</b></td>
                                <td colspan="4">${omillocal.componente}</td>
                        </tr>

                        <tr>
                                <td colspan="1"><b>SITUACI??N</b></td>
                                <td colspan="4">${omillocal.situacion}</td>
                        </tr>
                </tr>
                <tr>
                        <tr>
                                <td colspan="6" class="centrado">EVENTO</td>
                        </tr>
                        <tr>
                                <td><b>CAUSA</b></td>
                                <td colspan="2">${omillocal.causa}</td>
                                <td><b>FECHA</b></td>
                                <td colspan="2">${omillocal.fecha_evento}</td>
                        </tr>

                        <tr>
                                <td><b>LUGAR</b></td>
                                <td colspan="2">${omillocal.nombre}</td>
                                <td><b>ESTADO</b></td>
                                <td colspan="2">${omillocal.estado}</td>
                        </tr>

                        <tr>
                                <td><b>ASCENSO POST-MORTEM</b></td>
                                <td>${omillocal.ascenso_postmortem}</td>
                                <td><b>N?? DE RESOLUCI??N</b></td>
                                <td>${omillocal.numero_resolucion}</td>
                                <td><b>FECHA DE RESOLUCI??N</b></td>
                                <td>${omillocal.fecha_resolucion}</td>
                        </tr>
                        
                </tr>
                
                <tr>
                        <tr>
                                <td colspan="6" class="centrado">FAMILIARES CALIFICADOS</td>
                        </tr>

                        <tr>
                                <th>PARENTESCO</th>
                                <th colspan="2">NOMBRES Y APELLIDOS</th>
                                <th>C??DULA</th>
                                <th>EDAD</th>
                                <th>% DE PENSI??N</th>
                        </tr>
                        
                        ${imprimirFamiliares()}
                        
                </tr>
                <tr>
                        <tr>
                                <td colspan="6" class="centrado">BENEFICIOS DE LEY</td>
                        </tr>

                        <tr>
                                <th>PARENTESCO</th>
                                <th>PENSI??N</th>
                                <th>PAGO ??NICO</th>
                                <th>MENSUAL</th>
                                <th>FIDEICOMISO</th>
                                <th>MONTO</th>
                        </tr>

                        ${imprimirBeneficios()}
                        
                </tr>
                <tr>
                        <tr>
                                <td colspan="6" class="centrado">NECESIDADES</td>
                        </tr>
                        <tr>
                                <td><b>LINEA BLANCA</b></td>
                                <td colspan="2">${omillocal.linea_blanca}</td>
                                <td><b>VIVENDA</b></td>
                                <td colspan="2">${omillocal.vivienda}</td>
                        </tr>

                        <tr>
                                <td><b>VEHICULO</b></td>
                                <td colspan="2">${omillocal.vehiculo}</td>
                                <td><b>BIENESTAR</b></td>
                                <td colspan="2">${omillocal.bienestar}</td>
                        </tr>

                        <tr>
                                <td><b>ENTE</b></td>
                                <td colspan="2">${omillocal.ente}</td>
                                <td><b>OTROS</b></td>
                                <td colspan="2">${omillocal.otros}</td>
                        </tr>
                        
                </tr>

                </table>

        </div>`;
        var ventana = window.open("", "_blank");
        ventana.document.write(html + `<div style="background: none" id='btn'></div>`);
        ventana.document.head.innerHTML = `<style>
            * {
        text-align: center;
                font-size: 12px;
                font-family: 'Times New Roman';
                }
        
        .body {
                width: 100px;
                max-width: 100px;
                }
        
        .footer {
                font-style: italic;
                width: 100px;
                max-width: 100px;
                word-break: break-all;
                }
        
        .header {
                width: 100px;
                max-width: 100px;
                word-break: break-all;
                }
        
        .centrado {
                text-align: center;
                font-size: 15px;
                background: red;
                color: #FDFEFE;
                }
        
        .ticket {
                width: 100px;
                max-width: 100px;
                }
        .img {
                width: 145px;
                height: 170px;
                }
        
        
                </style>??`;
                
        //ventana.print()
        //ventana.close()
        //CargarUrl('cuerpo', 'public/inc/solicitar/solicitar');  
    }



        //     for (var i = 0; i < 2; i++) {
        //         console.log( $("#txtParentesco"+i).val());
        //       }




        

 
    