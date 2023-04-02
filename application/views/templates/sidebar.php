<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/backend/') ?>logo.png">
  <title>Sisfolah - <?= $title?></title>
  <link href="<?= base_url('assets/backend/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('assets/backend/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('assets/backend/') ?>css/ruang-admin.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/backend/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/backend/') ?>sweetalert2/package/dist/sweetalert2.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<?php $nama = $this->session->userdata('nama');
  $user = $this->db->get_where('user', ['username' => $nama])->row_array();
  $namanya = $user['nama'];
  $level = $user['level'];
  $id = $user['id'];
  ?>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="<?= base_url('assets/backend/') ?>logo.png">
        </div>
        <div class="sidebar-brand-text mx-3">S I S F O L A H</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item <?php if ($title == 'Dashboard') { echo "active"; } else { echo ""; }; ?>">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>DASHBOARD</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        MAIN MENU
      </div>
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-user-tie"></i>
          <span>DATA GURU</span></a>
      </li>
      <li class="nav-item <?php if ($title == 'Master Data') { echo "active"; } else { echo ""; }; ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-list"></i>
          <span>MASTER DATA</span>
        </a>
        <div id="collapseTable" class="collapse <?php if ($title == 'Mata Pelajaran') { echo "show"; } else { echo ""; }; ?>" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">MASTER DATA</h6>
            <a class="collapse-item" href="simple-tables.html">MATA PELAJARAN</a>
            <a class="collapse-item <?php if ($title == 'Jam Pelajaran') { echo "active"; } else { echo ""; }; ?>" href="datatables.html">JAM PELAJARAN</a>
            <a class="collapse-item" href="simple-tables.html">KELAS & SEMESTER</a>

          </div>
        </div>
      </li>
      <li class="nav-item <?php if ($title == 'Penjadwalan') { echo "active"; } else { echo ""; }; ?>">
        <a class="nav-link " href="ui-colors.html">
          <i class="fas fa-fw fa-calendar"></i>
          <span>PENJADWALAN</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        SETTINGS
      </div>
      
      <li class="nav-item <?php if ($title == 'Users') { echo "active"; } else { echo ""; }; ?>">
        <a class="nav-link" href="<?= base_url('users') ?>">
          <i class="fas fa-fw fa-cogs"></i>
          <span>AKUN</span>
        </a>
      </li>
      <hr class="sidebar-divider">
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto"> 
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="modal"
                  data-target="#change-pass" id="btn-pass" data-id="<?= $id; ?>">
                  <i class="fas fa-unlock fa-fw"></i>
              </a>
            </li>         
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="modal" data-target="#logout">
                <i class="fas fa-power-off fa-fw"></i>
              </a>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="<?= base_url('assets/backend/') ?>logo.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">
                    <?= $namanya ?>
                </span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->