<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Sistema de Registro de Casos</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="http://192.168.12.240/salasituacional/public/css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="http://192.168.12.240/salasituacional/public/css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="http://192.168.12.240/salasituacional/public/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="http://192.168.12.240/salasituacional/public/css/app-light.css" id="lightTheme" disabled>
    <link rel="stylesheet" href="http://192.168.12.240/salasituacional/public/css/app-dark.css" id="darkTheme">
    <script type="text/javascript" src="http://192.168.12.240/salasituacional/public/plugins/jquery.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>

<body class="vertical">
    <div class="wrapper">
      <nav class="topnav navbar navbar-light">
        <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
          <i class="fe fe-menu navbar-toggler-icon"></i>
        </button>
        <form class="form-inline mr-auto searchform text-muted">
          <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
        </form>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="dark">
              <i class="fe fe-sun fe-16"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" onclick="Util.CerrarSesion()">
              <i class="fe fe-sun fe-16"></i>
            </a>
          </li>
        </ul>
      </nav>
      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
          <!-- nav bar -->
          <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="<?= base_url(); ?>/principal">
                <img src="http://192.168.12.240/salasituacional/public/img/logo.png" alt="..." class="avatar-img rounded-circle">
            </a>
          </div>
        
          <p class="text-muted nav-heading mt-4 mb-1">
            <span>Apps</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2" id="_menulateral">
            <li class="nav-item w-100">
              <a class="nav-link" href="http://192.168.12.240/salasituacional/principal"">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">Principal</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link collapsed">
                <i class="fe fe-user-plus fe-16"></i>
                <span class="ml-3 item-text">Registrar Caso</span><span class="sr-only">(current)</span>
              </a>
              <ul class="list-unstyled pl-4 w-100 collapse" id="dashboard">
                <li class="nav-item active">
                  <a class="nav-link pl-3" href="http://192.168.12.240/salasituacional/militar/registrarmilitar"><span class="ml-1 item-text">Fallecido Acto de Servicio</span></a>
                </li>
              </ul>
              <ul class="list-unstyled pl-4 w-100 collapse" id="dashboard">
                <li class="nav-item active">
                  <a class="nav-link pl-3" href="http://192.168.12.240/salasituacional/militar/registrarmilitar"><span class="ml-1 item-text">Fallecido Fuera de Acto de Servicio</span></a>
                </li>
              </ul>
              <ul class="list-unstyled pl-4 w-100 collapse" id="dashboard">
                <li class="nav-item active">
                  <a class="nav-link pl-3" href="http://192.168.12.240/salasituacional/militar/registrarmilitar"><span class="ml-1 item-text">Secuestrado</span></a>
                </li>
              </ul>
              <ul class="list-unstyled pl-4 w-100 collapse" id="dashboard">
                <li class="nav-item active">
                  <a class="nav-link pl-3" href="http://192.168.12.240/salasituacional/militar/registrarmilitar"><span class="ml-1 item-text">Desaparecido</span></a>
                </li>
              </ul>
              <ul class="list-unstyled pl-4 w-100 collapse" id="dashboard">
                <li class="nav-item active">
                  <a class="nav-link pl-3" href="http://192.168.12.240/salasituacional/militar/registrarmilitar"><span class="ml-1 item-text">Herido</span></a>
                </li>
              </ul>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="http://192.168.12.240/salasituacional/consultar/bandeja"">
                <i class="fe fe-search fe-16"></i>
                <span class="ml-3 item-text">Consultar Caso</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="http://192.168.12.240/salasituacional"">
                <i class="fe fe-file fe-16"></i>
                <span class="ml-3 item-text">Reportes</span>
              </a>
            </li>
          </ul>
        </nav>
      </aside>
      
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12" id="cuerpo">
              
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
        <section class="content">
        <?php $this->renderSection('content')?>
        </section>
      </main> <!-- main -->
    </div> <!-- .wrapper -->
    
    <script src="<?php echo base_url()?>/public/plugins/popper.min.js"></script>
    <script src="<?php echo base_url()?>/public/plugins/moment.min.js"></script>
    <script src="<?php echo base_url()?>/public/plugins/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>/public/plugins/simplebar.min.js"></script>
    <script src='<?php echo base_url()?>/public/plugins/daterangepicker.js'></script>
    <script src='<?php echo base_url()?>/public/plugins/jquery.stickOnScroll.js'></script>
    <script src="<?php echo base_url()?>/public/plugins/tinycolor-min.js"></script>
    <script src="<?php echo base_url()?>/public/plugins/config.js"></script>
    <script src="<?php echo base_url()?>/public/plugins/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
      <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];

        function gtag()
        {
          dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
      </script> -->
    
    <script>
    let _API = `<?php echo base_url()?>`
    </script>

    <script src="<?php echo base_url()?>/public/js/consultar.js"></script>
    <script src="<?php echo base_url()?>/public/js/casos.js"></script>
    
    <!-- <script src="<?php echo base_url()?>/public/js/taquillas.js"></script>
    <script src="<?php echo base_url()?>/public/js/bandeja.js"></script>
    <script src="<?php echo base_url()?>/public/js/oficinas.js"></script>
    <script src="<?php echo base_url()?>/public/js/sucursales.js"></script>
    <script src="<?php echo base_url()?>/public/js/solicitar.js"></script> -->
  </body>