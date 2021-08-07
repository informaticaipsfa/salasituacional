<?= $this->extend('templates/admin_template') ?>
<?= $this->section('content')?>
<section class="content">
  <div class="card shadow">
    <div class="card-body">
      <div class="toolbar">
        <form class="form">
          <div class="form-row">
            <div class="form-group col-auto">
              <label for="search" class="sr-only">Buscar</label>
              <input type="text" class="form-control" id="search1" value="" placeholder="Buscar">
            </div>
          </div>
        </form>
      </div>
      <!-- table -->
      <table class="table table-borderless text-center" id="tbCasos">
        <thead class="thead-dark">
          <tr>
            <th>ID</th>
            <th>GRADO/JERARQUÍA</th>
            <th>NOMBRES</th>
            <th>CÉDULA</th>
            <th>COMPONENTE</th>
            <th>SITUACIÓN</th>
            <th>ACCIÓN</th>
          </tr>
        </thead>
      </table>
      <nav aria-label="Table Paging" class="mb-0 text-muted">
        <ul class="pagination justify-content-center mb-0">
          <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
        </ul>
      </nav>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
