/**
 * @description Registrar permite realizar el registro de los casos de militares y sus situaciones
 * @author maikol_echenique@hotmail.com
 * @date  
 * @version 1.0.0 ES11
 **/


 let ced = '';
 let lstBeneficios = {};



 class Registrar{
    

    constructor(){
        this.grado = ''
        this.nombre = ''
        this.cedula = ''
        this.componente = ''
        this.situacion = ''
        this.causa = ''
        this.fechaevento = ''
        this.lugar = ''
        this.estado = ''
        this.ascensopostmortem = ''
        this.resolucion = ''
        this.fecharesolucion = ''
        this.parentesco = ''
        this.pension = ''
        this.pagounico = ''
        this.mensual = ''
        this.fideicomiso = ''
        this.monto = ''
        this.lineablanca = ''
        this.vivienda = ''
        this.vehiculo = ''
        this.bienestar = ''
        this.ente = ''
        this.otros = ''
    }
    
    
    obtener(){
        this.grado = $("#txtGrado").val();
        this.nombre = $("#txtNombre").val();
        this.cedula = $("txtCedula").val();
        this.componente = $("txtComponente").val();
        this.situacion = $("#cmbSituacion option:selected").val();
        this.causa = $("txtCausa").val();
        this.fechaevento = $("txtFechaEvento").val();
        this.lugar = $("txtLugar").val();
        this.estado = $("txtEstado").val();
        this.ascensopostmortem = $("txtAscenso").val();
        this.numeroresolucion = $("txtResolucion").val();
        this.fecharesolucion = $("txtFechaResolucion").val();
        this.parentesco = $("#cmbParentesco option:selected").val();
        this.pension = $("#cmbPension option:selected").val();
        this.pagounico = $("txtPago").val()
        this.mensual = $("txtMensual").val()
        this.fideicomiso = $("#cmbFideicomiso option:selected").val();
        this.monto = $("txtMonto").val();
        this.lineablanca = $("#cmbLineaBlanca option:selected").val();
        this.vivienda = $("#cmbVivienda option:selected").val();
        this.vehiculo = $("#cmbVehiculo option:selected").val();
        this.bienestar = $("#cmbBienestar option:selected").val();
        this.ente = $("txtEnte").val();
        this.otros = $("txtOtros").val();
        return this;

    }
    insertar(){
        var mil = sessionStorage.getItem('militar');
        var omil = JSON.parse(mil);
        var grado = $("#txtGrado").val();
        var nombre = $("#txtNombre").val();
        var cedula = $("#txtCedula").val();
        var componente = $("#txtComponente").val();
        var situacion = $("#cmbSituacion option:selected").val();
        var causa = $("#txtCausa").val();
        var fechaevento = $("#txtFecha").val();
        var lugar = $("#txtLugar").val();
        var estado = $("#txtEstado").val();
        var ascensopostmortem = $("#txtAscenso").val();
        var numeroresolucion = $("#txtResolucion").val();
        var fecharesolucion = $("#txtFechaResolucion").val();
        var lineablanca = $("#cmbLinea option:selected").val();
        var vivienda = $("#cmbVivienda option:selected").val();
        var vehiculo = $("#cmbVehiculo option:selected").val();
        var bienestar = $("#cmbBienestar option:selected").val();
        var ente = $("#txtEnte").val();
        var otros = $("#txtOtros").val();
        $.ajax({
            url:  _API + "/registrar/agregarMilitar",
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
                ascensopostmortem: ascensopostmortem,
                numeroresolucion: numeroresolucion,
                fecharesolucion: fecharesolucion,
                parentesco: parentesco,
                pension: pension,
                pagounico: pagounico,
                mensual: mensual,
                fideicomiso: fideicomiso,
                monto: monto,
                lineablanca: lineablanca,
                vivienda: vivienda,
                vehiculo: vehiculo,
                bienestar: bienestar,
                ente: ente,
                otros: otros,
            },
            cache: false,
            success: function(dataResult){
                console.log(dataResult);
                var dataResult = JSON.parse(dataResult);
                if(dataResult.statusCode==200){
                    reg.insertarFamiliares(omil);
                    alert('Registro realizado satisfactoriamente !');
                    localStorage.removeItem(mil);
                    window.location.href = 'http://localhost/registroMilitares/militar/registrarmilitar';	
                    			
                }
                else if(dataResult.statusCode==201){
                    alert("Ha ocurrido un error !");
                }
                    
            },
            error: function(err){
                //console.error(err)
            },statusCode: {
                500: function(dt) {
                    // var json = JSON.parse(dt.responseText)
                    // var message = ("La Cédula insertada ya se encuentra registrada");
                    // console.error(json.message)
                  alert("La Cédula insertada ya se encuentra registrada");
                }
              }
        });
        
    }


    datosbasicos(omil){
        
        $("#txtGrado").val(omil.Grado.descripcion);
        $("#txtNombre").val(omil.Persona.DatoBasico.nombreprimero+' '+omil.Persona.DatoBasico.nombresegundo+' '+omil.Persona.DatoBasico.apellidoprimero+' '+omil.Persona.DatoBasico.apellidosegundo);
        $("#txtCedula").val(omil.Persona.DatoBasico.cedula);
        $("#txtComponente").val(omil.Componente.descripcion);
    }

    familiares(omil){
        var i=0;
        omil.Familiar.forEach(e=>{
        var parentesco = ConvertirParentesco(e.parentesco, e.Persona.DatoBasico.sexo);
        var fecha = ConvertirFechaHumana(e.Persona.DatoBasico.fechanacimiento);
        var edad = CalcularEdad(fecha);
        i++;
            
        $("#tbFamiliares").append(`<tr>
        <td><input type="text" class="form-control" size=5" id="txtParentesco${i}" value="${parentesco}"></td>
        <td><input type="text" class="form-control" id="txtNombreFamiliar${i}" value="${e.Persona.DatoBasico.nombreprimero+' '+omil.Persona.DatoBasico.nombresegundo+' '+omil.Persona.DatoBasico.apellidoprimero+' '+omil.Persona.DatoBasico.apellidosegundo}"></td>
        <td><input type="text" class="form-control" size="5" id="txtCedulafamiliar${i}" value="${e.Persona.DatoBasico.cedula}"></td>
        <td><input type="text" class="form-control" size="5" id="txtEdadFamiliar${i}" value="${edad}"></td>
        <td><input type="text" class="form-control" size="5" id="txtIdFamiliar${i}" value="${e.id}"></td>
        </tr>`)
        })
    }

    insertarFamiliares(omil){
            var i = 0;
            omil.Familiar.forEach(e=>{
            i++;
                var parentesco = $("#txtParentesco" + i).val();
                parentesco = ConvertirParentesco(e.parentesco, e.Persona.DatoBasico.sexo);
                var fecha = $("#txtNombreFamiliar" + i).val();
                fecha = ConvertirFechaHumana(e.Persona.DatoBasico.fechanacimiento);
                var edad = $("#txtCedulafamiliar" + i).val();
                edad = CalcularEdad(fecha);
                var nombre = $("#txtEdadFamiliar" + i).val();
                nombre = (e.Persona.DatoBasico.nombreprimero+' '+omil.Persona.DatoBasico.nombresegundo+' '+omil.Persona.DatoBasico.apellidoprimero+' '+omil.Persona.DatoBasico.apellidosegundo);
                var cedula = $("#txtIdFamiliar" + i).val();
                cedula = (e.Persona.DatoBasico.cedula);
                var cedulamilitar = $("#txtCedula").val();

            $.ajax({
                url:  _API + "/registrar/insertarFamiliares",
                type: "POST",
                data: {
                    parentesco: parentesco,
                    nombre: nombre,
                    cedula: cedula,
                    edad: edad,
                    cedulamilitar: cedulamilitar,
                },
                cache: false,
                success: function(dataResult){
                    var dataResult = JSON.parse(dataResult);    
                },
                error: function(err){
                    console.error(err)
                },statusCode: {
                    500: function(dt) {
                        console.error(dt)
                    }
                  }
            });
        })
    }

    listarBeneficios(ced){
        ced = $("#txtCedula").val();
        $.ajax({
            url: _API + '/beneficios/listarBeneficios',
            dataType: 'json',
            method: 'POST',
            data: {
                ced: ced,
            },
            success: function(datos){
                lstBeneficios = datos;
                console.log(lstBeneficios);
                lstBeneficios.forEach(e => {
                    $('#tbBeneficios').append(`<TR><TD>${e.parentesco}</TD><TD>${e.pension}</TD><TD>${e.pago_unico}</TD><TD>${e.mensual}</TD><TD>${e.fideicomiso}</TD><TD>${e.monto}</TD></TR>`);
                    
                });
            }
        });
    };

    insertarBeneficios(){
        
            var parentesco = $("#cmbParentesco option:selected").val();
            var pension = $("#cmbPension option:selected").val();
            var pagounico = $("#txtPago").val();
            var mensual = $("#txtMensual").val();
            var fideicomiso = $("#cmbFideicomiso option:selected").val();
            var monto = $("#txtMonto").val();
            var cedulamilitar = $("#txtCedula").val();
            if(parentesco!="" && pension!="" && pagounico!="" && mensual!="" && fideicomiso!="" && monto!=""){
                $("#guardar").attr("disabled", "disabled");
                    $.ajax({
                        url:  _API + "/beneficios/insertarBeneficios",
                        type: "POST",
                        data: {
                            parentesco: parentesco,
                            pension: pension,
                            pagounico: pagounico,
                            mensual: mensual,
                            fideicomiso: fideicomiso,
                            monto: monto,
                            cedulamilitar: cedulamilitar
                        },
                        cache: false,
                        success: function(dataResult){
                            var dataResult = JSON.parse(dataResult); 
                            $('#tbBeneficios').append(`<TR><TD>${parentesco}</TD><TD>${pension}</TD><TD>${pagounico}</TD><TD>${mensual}</TD><TD>${fideicomiso}</TD><TD>${monto}</TD></TR>`);  
                        },
                        error: function(err){
                            console.error(err)
                        },statusCode: {
                            500: function(dt) {
                                console.error(dt)
                            }
                        }
                    })
                }
                else{
                    alert('Por favor llenar todos los campos');
                }
    }
}

let reg = new Registrar();
$(function(){
        var mil = sessionStorage.getItem('militar');
        var omil = JSON.parse(mil);
    reg.datosbasicos(omil);
    reg.familiares(omil);
    reg.listarBeneficios();
    
})

    function ConvertirParentesco(cad,sexo){
        var parent = "";
        switch(cad) {
            case "PD":
                parent =(sexo=="F")?"MADRE":"PADRE";
                break;
            case "HJ":
                parent = (sexo=="F")?"HIJA":"HIJO";
                break;
            case "EA":
                parent = (sexo=="F")?"ESPOSA":"ESPOSO";
                break;
            case "VI":
              parent = (sexo=="F")?"VIUDA":"VIUDO";
              break;
            case "HO":
              parent = (sexo=="F")?"HERMANA":"HERMANO";
              break;
            default:
                parent = "";
                break;
        }
        return parent;
    }

    function CalcularEdad(fecha) {
        var FechaActual = new Date(Date.now());
        var AnnoA = parseInt(FechaActual.getFullYear());
        var MesA = parseInt(FechaActual.getMonth()) + 1;
        var DiaA = parseInt(FechaActual.getDate());

        var f = fecha.split("/");

        var AnoN = parseInt(f[2]);
        var MesN = parseInt(f[1]);
        var DiaM = parseInt(f[0]);

        var Ano = AnnoA - AnoN;

        var Mes = MesA - MesN;
        var Dia = DiaA - DiaM;
        if (Dia < 0) {
            Dia = 0;
            Mes++;
        }
        if (Mes <= 0) {
            Ano--;
        } else {
            Ano;
        }

        return Ano;
    }

    function ConvertirFechaHumana(f) {
        var ISODate = new Date(f).toISOString();
        var fe = ISODate.substr(0, 10);
        var fa = fe.split("-");
        if (fa[0] != "0001") {
            return fa[2] + "/" + fa[1] + "/" + fa[0];
        } else {
            return "";
        }
        //return fa[2] + "/" + fa[1] + "/" + fa[0];
    }

   
    


