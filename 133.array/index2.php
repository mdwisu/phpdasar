<?php 
    // perulangan array
    // for foreach

    $angka = [1,2,3,4,5,6,7];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            line-height: 50px;
            text-align: center;
            float: left;
            margin: 3px;
        }
        .clear{clear: both;}
    </style>
</head>
<body>

    <?php for ($i=0; $i < count($angka); $i++):?>
    <div class="kotak"><?= $angka[$i];?></div>
    <?php endfor;?>

    <div class="clear"></div>

    <?php foreach ($angka as $key) :?>
        <div class="kotak"><?= $key;?></div>
    <?php endforeach;?>

</body>
</html>