<?php 
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
}
require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ");

// tombol cari di klik
if (isset($_POST["cari"])) {
  $mahasiswa = cari($_POST["keyword"]);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
    <style>
      body{
        height: 5000px;
        margin: 0;
      }
      .loader{
        width: 40px;
        display: none;
      }

      @media print{
        .print{
          display: none;
        }
      }

    </style>
  </head>
  <body>
    <div class="container">
    <!-- navbar -->
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark print">
        <div class="container-fluid">
          <a class="navbar-brand print" href="#">
            <img src="../bootstrap/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Bootstrap
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <a class="nav-link link-danger" aria-current="page" href="logout.php">Logout</a>
            <!-- search -->
            <form class="d-flex" method="POST">
              <input class="form-control me-2 search" type="search" placeholder="Search" aria-label="Search" name="keyword" id="keyword">
              <button class="btn btn-outline-success" type="submit" name="cari" id="tombol-cari">Search</button>

              <img src="img/loader.gif" id="loader" class="loader">
            </form>
          </div>
        </div>
      </nav>
    </div>
    <h1 class="print">.</h1>
    <div class="container">
    <h1 class="mt-3">Daftar Mahasiswa</h1>
    <!-- body -->
    <a href="tambah.php" class="print"><button type="button" class="btn btn-dark mx-3 my-3">tambah data</button></a>
    <a onclick="window.print()" class="print"><button type="button" class="btn btn-dark mx-3 my-3">Cetak</button></a>
    <!-- table -->
    <table id="container" class="table table-secondary table-hover table-bordered border-success">
      <thead>
        <tr class="table-dark">
      <th scope="col">No</th>
          <th scope="col">Gambar</th>
          <th scope="col">Npm</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Jurusan</th>
          <th scope="col" class="print">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $i=1?>
        <?php foreach ($mahasiswa as $row ) :?>
        <tr>
          <th scope="row"><?= $i;?></th>
          <td><img src="../img/<?= $row["gambar"];?>" class="profil"></td>
          <td><?= $row["npm"];?></td>
          <td><?= $row["nama"];?></td>
          <td><?= $row["email"];?></td>
          <td><?= $row["jurusan"];?></td>
          <td class="nowrap print"><a href="ubah.php?id=<?= $row['id'];?>">ubah</a> | <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('yakin?')">hapus</a></td>
        </tr>
        <?php $i++;?>
        <?php endforeach;?>
      </tbody>
    </table>
</div>
</div>




    <!-- Optional JavaScript; choose one of the two! -->
    <script src="js/jquery-3.6.0.min.js"></script>  
    <script src="js/script.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>