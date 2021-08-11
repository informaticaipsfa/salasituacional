<?= $this->extend('templates/admin_template') ?>
<?= $this->section('content')?>
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
      <div class="row">
       <div class="col-lg-4 col-4 py-3">
          <a href="<?php echo base_url()?>/submenuregistrar" style="text-decoration:none">
            <div class="card shadow bg-success text-black align-items-center">
              <div class="card-body">
                <span class="h3 mb-0 text-white">REGISTRAR CASO</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-4 py-3">
          <a href="<?php echo base_url()?>/consultar/bandeja" style="text-decoration:none">
            <div class="card shadow bg-danger text-black align-items-center">
              <div class="card-body">
                <span class="h3 mb-0 text-white">CONSULTAR CASO</span>
              </div>
            </div>
          </a>
        </div>
          <!-- ./col -->
        <div class="col-lg-4 col-4 py-3">
          <a href="<?php echo base_url()?>/" style="text-decoration:none">
            <div class="card shadow bg-primary text-black align-items-center">
              <div class="card-body">
                <span class="h3 mb-0 text-white">REPORTES</span>
              </div>
            </div>
          </a>
        </div>
          <!-- ./col -->
      </div> 
    </div>
        <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
</section>
<?= $this->endSection() ?>
