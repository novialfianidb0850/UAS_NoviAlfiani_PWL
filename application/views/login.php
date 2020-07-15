<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Website</b>DATA CORONA</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
   <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand text-white" href="#">DATA CORONA JEPARA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link text-white" href="<?php echo base_url('index.php/dashboard/home');?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?php echo base_url('index.php/dashboard/home');?>">Kembali</a>
        </li>
      </ul>
    </div>
  </nav>    
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <?= $this->session->flashdata('message'); ?>

      <form class="user" method="post" action="<?php echo base_url('index.php/login');?>">
        <div class="form-group">
          <input type="email" id="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." value="<?php echo set_value('email');?>">
          <?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>
        </div>
        <div class="form-group">
          <input type="password" id="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
          <?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
        </div>
        <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
      </form>
      <hr>
      <div class="text-center">
        <a class="small" href="forgot-password.html">Forgot Password?</a>
      </div>
      <div class="text-center">
        <a class="small" href="<?php echo base_url('index.php/login/registration');?>">Create an Account!</a>
      </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<!-- jQuery -->
<script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
</body>
</html>