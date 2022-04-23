<?php 
    // $mahasiswa = [
    //     ["dwi susanto", "202210055", "dwisusanto@fmail.com","sistem informasi"],
    //     ["dwi susanto", "202210055", "dwisusanto@fmail.com","sistem informasi"],
    //     ["dwi susanto", "202210055", "dwisusanto@fmail.com","sistem informasi"],
    // ];
    // array assosiative
    $mahasiswa = [
        [
            "nama" => "dwisusanto", 
            "npm" => "202210044",
            "email" => "dwiwsusanto@gmai.cm",
            "jurusan" => "sistem informasi",
            "gambar"  => "profil.jpg"
        ],
        [
            "nama" => "dwisusanto",
            "npm" => "202210044",
            "email" => "dwiwsusanto@gmai.cm",
            "jurusan" => "sistem informasi",
            "gambar"  => "profil.jpg"
        ],
        [
            "nama" => "dwisusanto",
            "npm" => "202210044",
            "email" => "dwiwsusanto@gmai.cm",
            "jurusan" => "sistem informasi",
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
    <style>
        img{
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>
<body>

    <h1>daftar mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) :?>
    <ul>
        <li><img src="../<?= $mhs["gambar"];?>"></li>
        <li><?= $mhs["nama"];?></li>
        <li><?= $mhs["npm"];?></li>
        <li><?= $mhs["jurusan"];?></li>
        <li><?= $mhs["email"];?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>