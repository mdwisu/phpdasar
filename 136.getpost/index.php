<?php 
// $x = 10;
// function tampilx()
// {
//     global $x;
//     echo $x;
// }
// tampilx();

// SUPERGLOBAL merupakan assosiative
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV

// var_dump($_GET["nama"]);
// var_dump($_GET["nrp"]);
$mahasiswa = [
    [
        "nama" => "dwi", 
        "npm" => "1",
        "email" => "1@gmail.com",
        "jurusan" => "sistem informasi",
        "gambar"  => "profil.jpg"
    ],
    [
        "nama" => "dwi2",
        "npm" => "2",
        "email" => "2@gmail.com",
        "jurusan" => "sistem informasi2",
        "gambar"  => "profil.jpg"
    ],
    [
        "nama" => "dwi3",
        "npm" => "3",
        "email" => "3@gmail.com",
        "jurusan" => "sistem informasi3",
        "gambar"  => "profil.jpg"
    ]
];
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
    <h1>daftar mahasiswa</h1>
    <ul>
    <?php foreach ($mahasiswa as $mhs ) :?>
            <li><a href="index2.php?nama=<?= $mhs["nama"]?>&npm=<?= $mhs["npm"];?>&email=<?= $mhs["email"];?>&jurusan=<?= $mhs["jurusan"];?>&gambar=<?= $mhs["gambar"];?>"><?= $mhs["nama"];?></a></li>
    <?php endforeach;?>
    </ul>
</body>
</html>