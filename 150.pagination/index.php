<?php 
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
}
require 'function.php';
  echo "<h1>.</h1>";
  echo "<h1>.</h1>";
    // jumlah data
    
    $jumlahDataPerHalaman = 5;
    $jumlahData = query("SELECT COUNT(id) FROM mahasiswa")[0]['COUNT(id)'];
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = (isset($_GET["halaman"]))? $_GET["halaman"] : 1;
    $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;
    $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id LIMIT $awalData, $jumlahDataPerHalaman");
    $previous = $halamanAktif - 1;
    $next = $halamanAktif + 1;
    if (isset($_POST["cari"])) {
      $jumlahData = count(cari($_POST["keyword"]));
      $mahasiswa = cari2($_POST["keyword"], $awalData, $jumlahDataPerHalaman);
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
    </style>
  </head>
  <body>
    <div class="container">
    <!-- navbar -->
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
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
            <form class="d-flex" method="POST">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
              <button class="btn btn-outline-success" type="submit" name="cari">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </div>
    <h1>.</h1>
    <div class="container">
    <h1 class="mt-3">Daftar Mahasiswa</h1>
    <!-- body -->
    <a href="tambah.php"><button type="button" class="btn btn-dark mx-3 my-3">tambah data</button></a>
    <!-- table -->
    <table class="table table-secondary table-hover table-bordered border-success">
  <thead>
    <tr class="table-dark">
  <th scope="col">No</th>
      <th scope="col">Gambar</th>
      <th scope="col">Npm</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>
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
      <td class="nowrap"><a href="ubah.php?id=<?= $row['id'];?>">ubah</a> | <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('yakin?')">hapus</a></td>
    </tr>
    <?php $i++;?>
    <?php endforeach;?>
  </tbody>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <!-- previous -->
    <li class="page-item <?= ($halamanAktif < 2) ? 'disabled' : '' ;?>">
      <a class="page-link" href="?halaman=<?= $previous?>" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <!-- angka -->
    <?php for ($i=0; $i < $jumlahHalaman; $i++) :?>
      <?php if( $i+1 == $halamanAktif):?>
        <li class="page-item active"><a class="page-link" href="?halaman=<?= $i+1;?>"><?= $i+1;?></a></li>
      <?php else:?>
        <li class="page-item"><a class="page-link" href="?halaman=<?= $i+1;?>"><?= $i+1;?></a></li>
      <?php endif;?>
    <?php endfor;?>
    <!-- next -->
    <?php if (isset($_POST["cari"])):?>
      <li class="page-item <?= ($halamanAktif > $jumlahHalaman-1) ? 'disabled' : '' ;?>">
        <a class="page-link" href="?halaman=<?= $next?>">Next2</a>
        <?php $_SESSION["cari"] = true;$_SESSION["keyword"] = $_POST["keyword"]; ?>
      </li>
    <?php else:?>
      <li class="page-item <?= ($halamanAktif > $jumlahHalaman-1) ? 'disabled' : '' ;?>">
        <a class="page-link" href="?halaman=<?= $next?>">Next</a>
      </li>
    <?php endif;?>
  </ul>
</nav>
</div>
</div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>