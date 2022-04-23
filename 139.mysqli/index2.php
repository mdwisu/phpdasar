<?php 
// koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'phpdasar');
// ambil data dari table mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
if (!$result) {
  echo mysqli_error($conn);
}
// ambil data mahasiswa dari object result (fecth)
// mysqli_fetch_row() numerik(0,1,2,3)
// mysqli_fetch_assoc() menampilkan array associative
// mysqli_fetch_array() mengembalikan keduanya
// mysqli_fetch_object() objek pake '->'

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
  </head>
  <body>
    <div class="container">
    <h1>Daftar Mahasiswa</h1>
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
    <?php while( $row = mysqli_fetch_assoc($result)) :?>
    <tr>
      <th scope="row"><?= $i;?></th>
      <td><img src="../img/<?= $row["gambar"];?>" class="profil"></td>
      <td><?= $row["npm"];?></td>
      <td><?= $row["nama"];?></td>
      <td><?= $row["email"];?></td>
      <td><?= $row["jurusan"];?></td>
      <td class="nowrap"><a href="ubah.php">ubah</a> | <a href="hapus.php">hapus</a></td>
    </tr>
    <?php $i++;?>
    <?php endwhile;?>
  </tbody>
</table>
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