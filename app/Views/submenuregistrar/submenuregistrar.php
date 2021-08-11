<?php $this->extend('templates/admin_template') ?>
<?php $this->section('content')?>
<section class="content">
  <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-4 py-3">
          <a href="<?php echo base_url()?>/militar/registrarmilitar" style="text-decoration:none">
            <div class="card shadow bg-success text-black align-items-center">
              <div class="card-body">
                <span class="h3 mb-0 text-white">FALLECIDO A.S</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-4 py-3">
          <a href="<?php echo base_url()?>/militar/registrarmilitar" style="text-decoration:none">
            <div class="card shadow bg-warning text-black align-items-center">
              <div class="card-body">
                <span class="h3 mb-0 text-white">FALLECIDO F.A.S</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-4 py-3">
          <a href="<?php echo base_url()?>/militar/registrarmilitar" style="text-decoration:none">
            <div class="card shadow bg-danger text-black align-items-center">
              <div class="card-body">
                <span class="h3 mb-0 text-white">SECUESTRADO</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-4 py-3">
          <a href="<?php echo base_url()?>/militar/registrarmilitar" style="text-decoration:none">
            <div class="card shadow bg-primary text-black align-items-center">
              <div class="card-body">
                <span class="h3 mb-0 text-white">DESAPARECIDO</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-4 py-3">
          <a href="<?php echo base_url()?>/militar/registrarmilitar" style="text-decoration:none">
            <div class="card shadow bg-info text-black align-items-center">
              <div class="card-body">
                <span class="h3 mb-0 text-white">HERIDO</span>
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
<?php $this->endSection() ?>
