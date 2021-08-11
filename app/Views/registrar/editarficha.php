<?= $this->extend('templates/admin_template') ?>
<?= $this->section('content')?>
<section class="esb">
    <form role="form" id="Registro">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                      <strong class="card-title">Datos Básicos del Militar</strong>
                    </div>
                    <table>
                        <td>
                            <div class="col-md-12 mb-3">
                            <div class="row">
                                    <div id="content" class="col-lg-12">
                                        <form method="post" action="#" enctype="multipart/form-data">
                                            <div class="card" style="width: 140px;">
                                                <img class="card-img-top" id="foto">
                                            </div>
                                        </form>
                                    </div>
                                </div>                  
                            </div>
                        </td>
                        <td>
                            <div class="card-body">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Grado/Jerarquia</label>
                                            <input type="text" class="form-control" id="txtGrado" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Nombres y Apellidos</label>
                                            <input type="text" class="form-control" id="txtNombre" onkeyup="javascript:this.value=this.value.toUpperCase();" >
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label>N° de Cédula</label>
                                            <input type="text" class="form-control" id="txtCedula" maxlength="8" onkeypress="return soloNumeros(event)">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Componente</label>
                                            <input type="text" class="form-control" id="txtComponente" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                        <div class="form-group col-md-4">
                                        <label>Situación</label>
                                        <select class="form-control" id="cmbSituacion">
                                            <option>SELECCIONE</option>
                                            <option>FALLECIDO ACTO DE SERVICIO</option>
                                            <option>FALLECIDO FUERA DE ACTO DE SERVICIO</option>
                                            <option>SECUESTRADO</option>
                                            <option>DESAPARECIDO</option>
                                            <option>HERIDO</option>
                                        </select>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </td> 
                    </table>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body">
                      <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="pills-evento-tab" data-toggle="pill" href="#pills-evento" role="tab" aria-controls="pills-evento" aria-selected="false">Evento</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="pills-familiares-tab" data-toggle="pill" href="#pills-familiares" role="tab" aria-controls="pills-familiares" aria-selected="false">Familiares Calificados</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="pills-beneficios-tab" data-toggle="pill" href="#pills-beneficios" role="tab" aria-controls="pills-beneficios" aria-selected="false">Beneficios de Ley</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="pills-necesidades-tab" data-toggle="pill" href="#pills-necesidades" role="tab" aria-controls="pills-necesidades" aria-selected="false">Necesidades</a>
                        </li>
                      </ul>
                      <div class="tab-content mb-1" id="pills-tabContent">
                        <div class="tab-pane fade active show" id="pills-evento" role="tabpanel" aria-labelledby="pills-evento-tab"> 
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Causa</label>
                                        <input type="text" class="form-control" id="txtCausa" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Fecha de Evento</label>
                                        <input type="text" class="form-control" id="txtFecha" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Lugar</label>
                                        <input type="text" class="form-control" id="txtLugar" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Estado</label>
                                        <input type="text" class="form-control" id="txtEstado" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Ascenso Post-Mortem</label>
                                        <input type="text" class="form-control" id="txtAscenso" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>N° de Resolución</label>
                                        <input type="text" class="form-control" id="txtResolucion" onkeypress="return soloNumeros(event)">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Fecha Resolucion</label>
                                        <input type="text" class="form-control" id="txtFechaResolucion">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-familiares" role="tabpanel" aria-labelledby="pills-familiares-tab">
                            <div class="col-md-12">
                                <div class="card shadow mb-3">
                                    <div class="card-body text-center">
                                        <table class="table table-hover text-center" id="tbFamiliaresEditar">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>PARENTESCO</th>
                                                    <th>NOMBRES Y APELLIDOS</th>
                                                    <th>CÉDULA</th>
                                                    <th>EDAD</th>
                                                    <th>% DE PENSIÓN</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-beneficios" role="tabpanel" aria-labelledby="pills-beneficios-tab">
                            <form>
                                <div class="form-row">
                                    <!-- <div class="form-group col-md-4">
                                        <label>Parentesco</label>
                                        <select class="form-control" id="cmbParentesco">
                                            <option>SELECCIONE</option>
                                            <option>PADRE</option>
                                            <option>MADRE</option>
                                            <option>ESPOSA</option>
                                            <option>HIJO</option>
                                            <option>HIJO</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Pensión</label>
                                        <select class="form-control" id="cmbPension">
                                            <option>SELECCIONE</option>
                                            <option>ACTIVA</option>
                                            <option>INACTIVA</option>
                                            <option>EN PROCESO</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Pago Único</label>
                                        <input type="text" class="form-control" id="txtPago" onkeypress="return soloNumeros(event)">
                                    </div> -->
                                </div>
                                <div class="form-row">
                                    <!-- <div class="form-group col-md-4">
                                        <label>Mensual</label>
                                        <input type="text" class="form-control" id="txtMensual" onkeypress="return soloNumeros(event)">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Fideicomiso</label>
                                        <select class="form-control" id="cmbFideicomiso">
                                            <option>SELECCIONE</option>
                                            <option>PAGADA</option>
                                            <option>PENDIENTE</option>
                                            <option>EN PROCESO</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Monto</label>
                                        <input type="text" class="form-control" id="txtMonto" onkeypress="return soloNumeros(event)">
                                    </div> -->
                                    <div class="form-group col-md-12">
                                        <table class="table table-hover text-center" id="tbBeneficiosEditar">   
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>PARENTESCO</th>
                                                    <th>PENSIÓN</th>
                                                    <th>PAGO ÚNICO</th>
                                                    <th>MENSUAL</th>
                                                    <th>FIDEICOMISO</th>
                                                    <th>MONTO</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-necesidades" role="tabpanel" aria-labelledby="pills-necesidades-tab">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Linea Blanca</label>
                                        <select class="form-control" id="cmbLinea">
                                            <option>SELECCIONE</option>
                                            <option>TELEVISOR</option>
                                            <option>NEVERA</option>
                                            <option>AIRE ACONDICIONADO</option>
                                            <option>COCINA</option>
                                            <option>LAVADORA</option>
                                            <option>SECADORA</option>
                                            <option>TELEFONO CELULAR</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Vivienda</label>
                                        <select class="form-control" id="cmbVivienda">
                                            <option selected="">SELECCIONE</option>
                                            <option value="REPARACIÓN DE VIVIENDA">REPARACIÓN DE VIVIENDA</option>
                                            <option value="ADQUISICIÓN DE VIVIENDA">ADQUISICIÓN DE VIVIENDA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Vehículo</label>
                                        <select class="form-control" id="cmbVehiculo">
                                            <option selected="">SELECCIONE</option>
                                            <option value="REPARACIÓN DE VEHÍCULO">REPARACIÓN DE VEHÍCULO</option>
                                            <option value="ADQUISICIÓN DE VEHÍCULO">ADQUISICIÓN DE VEHÍCULO</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Bienestar Social</label>
                                        <select class="form-control" id="cmbBienestar">
                                            <option selected="">SELECCIONE</option>
                                            <option value="MEDICINAS">MEDICINAS</option>
                                            <option value="TRATAMIENTO PROLONGADO">TRATAMIENTO PROLONGADO</option>
                                            <option value="INSUMOS MÉDICOS">INSUMOS MÉDICOS</option>
                                            <option value="CONSULTA MÉDICA">CONSULTA MÉDICA</option>
                                            <option value="CONSULTA ODONTOLÓGICA">CONSULTA ODONTOLÓGICA</option>
                                            <option value="CARNET">CARNET</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Ente</label>
                                        <input type="text" class="form-control" id="txtEnte">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Otros</label>
                                        <input type="text" class="form-control" id="txtOtros">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <button type="button" class="btn btn-primary" id="btnGuardar" onclick="edt.actualizarMilitar();fam.actualizarFamiliares();">Guardar</button>
                        <button type="button" class="btn btn-primary float-right" id="btnIMprimir" onclick="ImprimirFicha();">Imprimir Ficha</button>
                    </div>
                </div>   
            </div> 
        </div> 
    </form>
</section>
<script src="<?php echo base_url()?>/public/js/editarficha.js"></script>
<script src="<?php echo base_url()?>/public/js/familiares.js"></script>
<script src="<?php echo base_url()?>/public/js/beneficios.js"></script>

<script>
function soloNumeros(e){
	var key = window.Event ? e.which : e.keyCode
	return (key >= 48 && key <= 57)
}
</script>

<?= $this->endSection() ?>