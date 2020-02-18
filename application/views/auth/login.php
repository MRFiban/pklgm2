<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand ml-5" href="#">
    <img src="<?= base_url('assets/images/logo_warna.png'); ?>" width="100" height="60" class="d-inline-block align-top rounded-circle" alt="">GLOBAL MEKAR MANDIRI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-lg-3">


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto pr-lg-0 p-3">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url() ?>home"><i class="fa fa-home">HOME&nbsp;</i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">PROFILE&nbsp;</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              PRODUCT
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Electrical</a>
              <a class="dropdown-item" href="#">Mechanical</a>
              <div class="#"></div>
              <a class="dropdown-item" href="#">Informasi Tehnologi</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ABOUT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </ul>
      </div>
</nav>
<br>
<br>
<div class="container">
  <!-- Outer Row -->

  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="cols">
            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                </div>

                <?= $this->session->flashdata('message'); ?>

                <form class="user" method="post" action="<?= base_url('auth/login'); ?>">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="Password" name="password" placeholder="Password">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">
                    Login
                  </button>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
                </div>
                <div class="text-center">
                  <a class="small" href="<?= base_url(); ?>auth/registration"> Create an Account!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>