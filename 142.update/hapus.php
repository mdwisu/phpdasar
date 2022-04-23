<?php 
require 'function.php';

$id = $_GET['id'];
echo ((hapus($id) > 0 ? 1 : 0) ? '<script>alert("data berhasil dihapus");location.href = "index.php";</script>' : '<script>alert("data gagal dihapus");location.href = "index.php";</script>'.mysqli_error($conn));
?>