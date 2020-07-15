<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a href=""><h1 class="m-0 text-dark"><i class="nav-icon fas fa-file-alt"> DATA BARANG </i></h1></a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <section class="content">

        <?php echo $this->session->flashdata('message'); ?>

        <button class="btn btn-primary mb-2 " data-toggle="modal" data-target="#myModalAdd"><i class="fa fa-plus"></i> Tambah Data </button>    

        <a class="btn btn-danger text-white mb-2" href="<?php echo base_url('index.php/distributor/cetak/') ?>"><i class="fa fa-print"></i> Print</a>     

        <div class="dropdown inline float-sm-right">
          <button class="btn btn-warning text-white ml-2 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-download"></i> Export
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="<?php echo base_url('index.php/distributor/cetak/') ?>"><i class="fa fa-print"></i> Print</a>
            <a class="dropdown-item" href="<?php echo base_url('index.php/distributor/pdf/') ?>"><i class="fa fa-file-pdf"></i> PDF</a>
            <a class="dropdown-item" href="<?php echo base_url('index.php/distributor/excel/') ?>"><i class="fa fa-file-excel"></i> EXCEL</a>
          </div> 
        </div>
    </section>
<body> 
  <div class="container">
    <table id="mytable" class="table table-bordered table-striped mt-2" cellspacing="0" width="100%"> 