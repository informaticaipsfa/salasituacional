<?= $this->extend('templates/admin_template') ?>
<?= $this->section('content')?>
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
   <div class="row justify-content-md-center">
      <div class="col-lg-6">
        <div class="card shadow mb-2">
            <div class="card-header py-3 text-center">
              <div class="col-lg-12 col-4 py-3">
                <div class="card shadow text-white">
                    <div class="card-body bg-primary">
                      <div class="row align-items-center">
                        <div class="col pr-0">
                          <span class="h3 mb-0 text-white">INGRESAR NÚMERO DE CÉDULA</span>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="card-body"></div>
            <div class="input-group input-group-md mb-4 px-4">
              <input class="form-control form-control-navbar" type="text" maxlength="8" id="txtCedula" onkeypress="return soloNumeros(event);">
              <div class="input-group-append">
                <button class="btn btn-navbar bg-primary text-white" type="button" id="btnBuscar" onclick="buscarCedula();">Buscar</button>
              </div>
            </div>
              <div class="d-flex justify-content-center">
                <h2 id="loading" style="display:none" class="spinner-border text-primary"></h2>
              </div>
            </div>
          </div>
          
        </div>
      <!-- ./col -->
    </div> 
    </div>
    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
</section>
<script>
function soloNumeros(e){
	var key = window.Event ? e.which : e.keyCode
	return (key >= 48 && key <= 57)
}
</script>
<?= $this->endSection() ?>
