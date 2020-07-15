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
<body class="hold-transition register-page">
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
          <a class="nav-link text-white" href="<?php echo base_url('index.php/dashboard/login');?>">Kembali</a>
        </li>
      </ul>
    </div>
  </nav>  
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Website</b>DATA CORONA</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form class="user" method="post" action="<?php echo base_url('index.php/login/registration'); ?>">
        <div class="form-group row">
          <div class="col-sm-12 mb-3 mb-sm-0">
            <input type="text" id="nama" name="nama" class="form-control form-control-user" id="exampleFirstName" placeholder="Full Name" value="<?= set_value('nama'); ?>">
            <?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
          </div>
        </div>
        <div class="form-group">
          <input type="email" id="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" value="<?= set_value('email'); ?>">
          <?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>
        </div>
        <div class="form-group row">
          <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="password" id="password1" name="password1" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
            <?= form_error('password1','<small class="text-danger pl-3">','</small>'); ?>
          </div>
          <div class="col-sm-6">
            <input type="password" id="password2" name="password2" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-user btn-block">Register Account</button>
      </form>
      <hr>
      <div class="text-center">
        <a class="small" href="forgot-password.html">Forgot Password?</a>
      </div>
      <div class="text-center">
        <a class="small" href="index.php/login">Already have an account? Login!</a>
      </div>

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
<!-- jQuery -->
<script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
</body>
</html>

