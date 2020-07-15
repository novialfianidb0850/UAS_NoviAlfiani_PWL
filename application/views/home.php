<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


  <style type="text/css">
    
    .jumbotron{
      background-image: url("<?php echo base_url() ?>assets/dist/img/slide1.jpeg");
      background-size: cover;
      height: 770px;
      text-align: center;
      margin-top: -120px;
    }
    .jumbotron .display-4{
      color: white;
      margin-top: 200px;
    }
    .jumbotron p{
      color: white;
      font-size: 25px;
    }
    .jumbotron hr{
      border-color: #F05F40;
      width: 70px;
      border-width: 3px;
    }
    .jumbotron .btn{
      background-color: #F05F40;
      border: none;
      border-radius:25px;
      padding-right: 25px;
      padding-left: 25px;
      margin-top: 40px;
    }
    .carousel-item{
      height: 670px;
    }
    .carousel-item img{
      margin-top: -120px;
    }
    .carousel-item .display-4{
      margin-top: -440px;
    }
    .carousel-item hr{
      border-color: #F05F40;
      width: 70px;
      border-width: 3px;
    }
    .carousel-item .btn{
      background-color: #F05F40;
      border: none;
      border-radius:25px;
      padding-right: 25px;
      padding-left: 25px;
      margin-top: 40px;
    }    

  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
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
        <a class="nav-link text-white" href="<?php echo base_url('index.php/dashboard/home');?>">Features</a>
      </li>
    </ul>
  </div>
</nav>
<!--<div class="jumbotron">
    <div class="container">
      <h1 class="display-4"><br><span><strong>EXPLORE YOURSELF WITH BOOK<span></h1>
      <hr class="my-4">
      <p class="lead">Toko Buku Novi Alfiani</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">MASUK</a>
    </div>
</div>-->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url() ?>assets/dist/img/slide1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h1 class="display-4"><br><strong></strong></h1><br><br><br><br><br><br><br>
        <a class="btn btn-primary btn-lg" href="<?php echo base_url('index.php/login/')?>" role="button">LOGIN</a>
        <a class="btn btn-primary btn-lg ml-4" href="<?php echo base_url('index.php/login/guest')?>" role="button">GUEST </a>
        <p class="lead mt-2">181240000850 - Novi Alfiani</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url() ?>assets/dist/img/slide2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h1 class="display-4"><br><strong></strong></h1>
        <hr class="my-4">
        <p class="lead">181240000850 - Novi Alfiani</p>
        <a class="btn btn-primary btn-lg" href="<?php echo base_url('index.php/login/')?>" role="button">MASUK</a>
        <a class="btn btn-primary btn-lg ml-4" href="<?php echo base_url('index.php/login/guest/')?>" role="button">GUEST </a>
      </div>      
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url() ?>assets/dist/img/slide3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h1 class="display-4"><br><strong></strong></h1>
        <hr class="my-4">
        <p class="lead">181240000850 - Novi Alfiani</p>
        <a class="btn btn-primary btn-lg" href="<?php echo base_url('index.php/login/')?>" role="button">MASUK</a>
        <a class="btn btn-primary btn-lg ml-4" href="<?php echo base_url('index.php/login/guest/')?>" role="button">GUEST </a>
      </div>      
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() ?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url() ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
</body>
</html>