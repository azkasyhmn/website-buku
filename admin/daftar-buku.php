<?php

include '../Koneksi.php';
$koneksi = new Koneksi();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/simple-sidebar.css">
    <link rel="stylesheet" href="../style.css">
    <title>Daftar Buku</title>
    <style>
      body {
        font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
      }
    </style>
</head>
<body>
    <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-dark border-right text-white" id="sidebar-wrapper">
      <div class="sidebar-heading">MyBlog </div>
      <div class="list-group list-group-flush bg-dark text-white">
        <a href="<?='dashboard.php';?>" class="list-group-item list-group-item-action bg-info text-white active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="<?= 'daftar-buku.php';?>" class="list-group-item list-group-item-action bg-dark text-white"><i class="fas fa-newspaper"></i> Daftar Buku</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark text-white"><i class="fas fa-address-card"></i> About</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark text-white"><i class="fas fa-wrench"></i> Layanan</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark text-white"><i class="fas fa-id-card-alt"></i> Kontak</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-default" id="menu-toggle"><i class="fas fa-bars"></i> </button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i> Admin
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#"><i class="fas fa-edit"></i> Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h2 class="mt-4 mb-4"><i class="fas fa-tachometer-alt"></i> Daftar Buku</h2>
      </div>

    <div class="pl-5">
      <p><a href="create.php" class="btn btn-dark">Tambah Buku</a></p>
    </div>

      <section class="products pt-4">
        <h2>List Buku</h2>
        <?php include '../components/buku-set.php'; ?>
      </section>
    
</body>
</html>