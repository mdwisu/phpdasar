<?php 
// cek apakah tidak ada data di $_GET
if( !isset($_GET['nama']) || 
    !isset($_GET['npm']) ||
    !isset($_GET['email']) ||
    !isset($_GET['jurusan']) ||
    !isset($_GET['gambar'])) {
    // redirect
    header("Location: index.php");
    die();
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><img src="../<?= $_GET["gambar"]?>" alt=""></li>
        <li><?= $_GET["nama"];?></li>
        <li><?= $_GET["npm"];?></li>
        <li><?= $_GET["email"];?></li>
        <li><?= $_GET["jurusan"];?></li>
    </ul>

    <a href="index.php">kembali</a>
</body>
</html>