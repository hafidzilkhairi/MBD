<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Kuriak Plan | Bangunan, Perumahan, dan juga Bahan Bangunan</title>

  <!-- Bootstrap core CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="<?php echo $this->config->base_url(); ?>css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Kuriak Plan</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo $this->config->base_url(); ?>">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $this->config->base_url(); ?>aboutus">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $this->config->base_url(); ?>contactus">Contact</a>
          </li>
          <?php 
            if(isset($_SESSION['userId'])){
              ?>
              <li>
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php $this->db->where('id_user',$_SESSION['userId']); echo $this->db->get('user','username_user')->result_array()[0]['username_user'];?>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Keranjang<sup><?php $this->db->where('id_user',$_SESSION['userId']); echo $this->db->get('keranjang','count(*)')->num_rows(); ?></sup></a>
                  <a class="dropdown-item" href="#">Pesanan Hunian<sup><?php $this->db->where('id_user',$_SESSION['userId']); echo $this->db->get('pesananhunian','count(*)')->num_rows(); ?></sup></a>
                  <a class="dropdown-item" href="<?php echo $this->config->base_url(); ?>logout">Logout</a>
                </div>
              </div>
              </li>
              <?php
            }
          ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Kuriak</h1>
        <div class="list-group">
          <a href="<?php echo $this->config->base_url();?>home" class="list-group-item">Rumah</a>
          <a href="<?php echo $this->config->base_url();?>bahanbangunan" class="list-group-item">Bahan Bangunan</a>
          <a href="<?php echo $this->config->base_url();?>kontrakkan" class="list-group-item">Kontrakkan</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">