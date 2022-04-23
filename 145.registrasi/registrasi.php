<?php 
require 'function.php';
if (isset($_POST['register'])) {

    if (registrasi($_POST) > 0) {
        echo "<script>alert('user baru berhasil ditambahkan');</script>";
    } else{
        mysqli_error($conn);
    }

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
  </head>
  <body>
    <div class="container">
    <h1>Halaman registrasi</h1>
    <form action="" method="POST">
        <div class="mb-3">
        <label for="username" class="form-label">username :</label>
        <input type="text" name="username" id="username" class="form-control">
        </div>
        <div class="mb-3">
        <label for="password" class="form-label">password :</label>
        <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="mb-3">
        <label for="password2" class="form-label">konfirmasi password :</label>
        <input type="password" name="password2" id="password2" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark" name="register">Register!</button>
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