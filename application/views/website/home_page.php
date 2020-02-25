<html>

<head>
  <title>GreenTech Company</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/fontawesome/svgs/'); ?>brands">
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">


  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand ml-1" href="#" style="font-family: montserrat;">
      <img src="<?= base_url('#'); ?>" width="#" height="#" class="d-inline-block align-top rounded-circle" alt="">GLOBAL MEKAR MANDIRI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto pr-lg-3">


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto pr-lg-0 p-3">
            <li class="nav-item active">
              <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true">HOME&nbsp;</i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa fa-user" aria-hidden="true">PROFIL&nbsp;</i></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa fa-address-card" aria-hidden="true">&nbsp;&nbsp;ABOUT&nbsp;&nbsp;</i></a>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cart-plus" aria-hidden="true">
                  PRODUCT</i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Electrical</a>
                <a class="dropdown-item" href="#">Mechanical</a>
                <div class="#"></div>
                <a class="dropdown-item" href="#">Informasi Tehnologi</a>
              </div>
            </li>

            <a class="nav-link" href="<?php echo base_url() ?>auth/login"><i class="fa fa-sign-in" aria-hidden="true">
                &nbsp;&nbsp;&nbsp;LOGIN&nbsp;&nbsp;&nbsp;</i></button></a>
            </li>
          </ul>
        </div>
  </nav>

  <!-- CAROSEL CODING -->
  <div class="img.resize">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo base_url() ?>assets/images/it.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Firsslidet label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url() ?>assets/images/yamami.jpg" electrical class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url() ?>assets/images/electrical1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    <div class="text text-center" style="font-family: montserrat;">
      <br><br><br>
      <h4> SOFTWARE DEVELOPMENT • GREENTECH COMPANY • WEB DEVELOPMENT </h4>
      <h1 align="center"><u>
          <CENTER> CREATIVE & EXPERIENCED </CENTER>
        </u></h1>
      <h3> PT.GLOBAL MEKAR MANDIRI </h3>
    </div>

    <!-- jumbotron -->
    <br><br><br><br><br><br>
    <div class="row">
      <div class="col-sm-6">
        <div class="card-group">
          <div class="card-body">
            <h5 class="card-title">VISI</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card-group">
          <div class="card-body">
            <h5 class="card-title">MISI</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- FOOTER -->
    <div class="footer-copyright text-center py-3 navbar-light bg-dark">
      <font color="black" face="montsserat">© 2020 Copyright |
        <a href="#">
          <font color="black" face="montsserat">TriMousquetaire.inc
        </a>
    </div>
    <!-- footer -->
    <!--  javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>