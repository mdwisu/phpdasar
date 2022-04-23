<?php 
$mahasiswa = [
    ["dwi", "202210044", "sistem informasi","dwisusanto@gmail.com"],
    ["susanto", "202210044", "sistem informasi","dwisusanto@gmail.com"],
    ["muhammad", "202210044", "sistem informasi","dwisusanto@gmail.com"]];

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
    <?php foreach ($mahasiswa as $key) :?>
    <ul>
        
        <li><?= $key[0];?></li>
        <li><?= $key[1];?></li>
        <li><?= $key[2];?></li>
        <li><?= $key[3];?></li>
        <li>2022</li>

    </ul>
    <?php endforeach;?>
</body>
</html>