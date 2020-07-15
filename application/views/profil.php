<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a href=""><h1 class="m-0 text-dark"><i class="nav-icon fas fa-file-alt"> DATA ADMIN</i></h1></a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Admin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
<body>
  <div class="content">
    <div class="container-fluid mt-4 ml-4">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?= base_url('assets/images/default.jpg')?>" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-tittle"><?= $user['nama'];?></h3>
                        <p class="card-text"><?= $user['email'];?></p>
                        <p class="card-text"><small class="text-muted"><i class="fas fa-user mr-2"></i>
                            Admin Sejak <?= date('d F Y' , $user['date_created']); ?></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</div>
</div>