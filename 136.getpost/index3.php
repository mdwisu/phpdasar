<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['nama'])){
            echo "<h1>hallo selamat datang ", $_POST['nama'],"</h1>";
        }
    ?>
    <form action="" method="post">
        masukan nama :
        <input type="text" name="nama">
        <button type="submit" name="submit">kirim</button>
    </form>
</body>
</html>