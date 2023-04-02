<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/backend/') ?>logo.png">
  <title>Sisfolah - Authentification</title>
  <link href="<?= base_url('assets/backend/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('assets/backend/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('assets/backend/') ?>css/ruang-admin.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/backend/') ?>sweetalert2/package/dist/sweetalert2.min.css">


</head>
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
<body class="bg-gradient-login bg-primary">
  <!-- Login Content -->
  <div class="container-login ">
    <div class="row justify-content-center">
      <div class="col-xl-4 col-lg-10 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <img src="<?= base_url('assets/backend/') ?>logo.png" alt="" width="130"> <br><br>
                    <h1 class="h4 text-gray-900 mb-3 font-weight-bold">HALAMAN LOGIN</h1>
                  </div>
                  <form class="user" action="<?php echo base_url('verification'); ?>" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control"
                        placeholder="Username" name="username" required autofocus autocomplete="username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="current-password" required>
                    </div>
                    <hr>
                    <div class="form-group">
                      <input type="submit" class="btn btn-block btn-primary" value="L O G I N">
                    </div>
                  </form>
                  <div class="text-center font-weight-bold small text-secondary">
                    Jalan Sekolah
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="<?= base_url('assets/backend/') ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/backend/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/backend/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= base_url('assets/backend/') ?>js/ruang-admin.min.js"></script>
  <script src="<?= base_url('assets/backend/'); ?>sweetalert2/package/dist/sweetalert2.all.js"></script>
   <script type="text/javascript">
      const dataflash = $('.flash-data').data('flashdata');
      if (dataflash) {
         Swal.fire({
            title: 'Error',
            text: dataflash,
            confirmButtonColor: '#311b92',
            icon: 'error'
         });
      }
   </script>
</body>

</html>