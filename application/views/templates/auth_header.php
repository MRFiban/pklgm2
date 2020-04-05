<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>
    GreenTech Company
  </title>



  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri&display=swap" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/creative.css">

</head>

<body background="<?= base_url(); ?>assets/img/green.jpg">
  <!-- navbar permanen -->

  <nav class=" navbar navbar-expand-lg navbar-dark bg-dark" id="pagetop">
    <img class="rounded-circle" src="<?= base_url('assets/img/logo_warna.png'); ?>" width="135" height="75"> 
      </img>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto pr-lg-3">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto pr-lg-0 p-3">
           
            <!-- QUERY MENU -->
            <?php 
            $role_id = $this->session->userdata('role_id');
            $queryMenu = "SELECT `user_menu`.`id`, `menu`
                            FROM `user_menu` JOIN `user_access_menu` 
                              ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                           WHERE `user_access_menu`.`role_id` = 4
                        ORDER BY `user_access_menu`.`menu_id` ASC
                        ";
            $menu = $this->db->query($queryMenu)->result_array();  
            ?>


            <!-- LOOPING MENU -->
            <?php foreach($menu as $m) : ?>
            <li class=" nav-item  text-dark">
                <?= $m['menu']; ?>
            </li>

            <!-- SIAPKAN SUB-MENU SESUAI MENU -->
            <?php 
            $menuId = $m['id'];
            $querySubMenu = "SELECT *
                               FROM `user_sub_menu` JOIN `user_menu`
                                 ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                              WHERE `user_sub_menu`.`menu_id` = $menuId
                                AND `user_sub_menu`.`is_active` = 1
                            ";
            $subMenu = $this->db->query($querySubMenu)->result_array();
            ?>

            <?php foreach($subMenu as $sm) : ?>

            <!-- Bantuan Visual Menu -->
            <?php if ($title == $sm['title']) : ?>
            <li class="nav-item active">
                <?php else : ?>
            <li class="nav-item">
                <?php endif; ?>

                <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                    <i class="<?= $sm['icon']; ?>"></i>
                    <span><?= $sm['title']; ?></span></a>
            </li>    
            <?php endforeach; ?>
            
            <?php endforeach; ?>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Product
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= base_url('Product/electrical'); ?>">Electrical</a>
                <a class="dropdown-item" href="<?= base_url('Product/mechanical'); ?>">Mechanical</a>
                <a class="dropdown-item" href="<?= base_url('Product/it_consult'); ?>">IT Consult</a>
              </div>
            </li>

          </ul>
        </div>
  </nav>