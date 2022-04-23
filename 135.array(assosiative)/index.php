<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            margin: 3px;
            line-height: 30px;
            float: left;
            transition: 0.5s;
        }
        .kotak:hover{
            transform: rotate(360deg);
        }
        .clear{clear: both;}
    </style>
</head>
<body>

    <?php 
    $angka = [[1,2,3],[4,5,6],[7,8,9]];
    ?>
    <?php foreach ($angka as $key) :?>
        <?php foreach($key as $a) :?>
            <div class="kotak"><?= $a;?></div> 
        <?php endforeach;?>
        <div class="clear"></div>
    <?php endforeach;?>
</body>
</html>