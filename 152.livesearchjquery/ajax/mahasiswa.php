<?php 
require '../function.php';
$keyword = $_GET["keyword"];
$mahasiswa = cari($keyword);
?>

<table id="tabel" class="table table-secondary table-hover table-bordered border-success">
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
        <?php foreach ($mahasiswa as $row ) :?>
        <tr>
          <th scope="row"><?= $i;?></th>
          <td><img src="../img/<?= $row["gambar"];?>" class="profil"></td>
          <td><?= $row["npm"];?></td>
          <td><?= $row["nama"];?></td>
          <td><?= $row["email"];?></td>
          <td><?= $row["jurusan"];?></td>
          <td class="nowrap"><a href="ubah.php?id=<?= $row['id'];?>">ubah</a> | <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('yakin?')">hapus</a></td>
        </tr>
        <?php $i++;?>
        <?php endforeach;?>
      </tbody>
    </table>