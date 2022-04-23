<?php 
require 'function.php';

// ambil data di url
$id = $_GET["id"];

// query berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// cek apakah tombol sudah di tekan atau belum
if ( isset($_POST["submit"]) ) {
    // cek apakah data berhasil di ubah atau tidak
    // ternary
    echo ((ubah($_POST) > 0 ? 1 : 0) ? '<script>alert("data berhasil diubah");location.href = "index.php";</script>' : '<script>alert("data gagal diubah");location.href = "index.php";</script>'.mysqli_error($conn));

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
    <title>ubah</title>
</head>
<body>
<div class="container">
<h1>ubah Mahasiswa</h1>
<form method="POST" action="" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $mhs["id"];?>">
    <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"];?>">
    <div class="mb-3">
        <label for="npm" class="form-label">npm</label>
        <input type="text" class="form-control" id="npm" name="npm" required value="<?= $mhs["npm"];?>">
    </div>
     <div class="mb-3">
        <label for="nama" class="form-label">nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required value="<?= $mhs["nama"];?>">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required value="<?= $mhs["email"];?>">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="jurusan" class="form-label">jurusan</label>
        <input type="text" class="form-control" id="jurusan" name="jurusan" required value="<?= $mhs["jurusan"];?>">
    </div>
        <div class="mb-3">
        <label for="formFile" class="form-label">Gambar:</label>
        <img class="profil"src="../img/<?= $mhs['gambar'];?>">
        <input class="form-control" type="file" id="formFile" name="gambar">
    </div>
        <button type="submit" class="btn btn-dark" name="submit">ubah data</button>
</form>
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