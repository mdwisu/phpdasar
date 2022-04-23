<?php 

// koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'phpdasar');

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    // Untuk kueri SQL, ikat parameter (seperti halnya PDO) atau gunakan fungsi pelolosan asli driver untuk variabel kueri (seperti mysql_real_escape_string())
    // Gunakan strip_tags() untuk memfilter HTML yang tidak diinginkan
    // Fungsi trim() menghapus spasi dan karakter standar lainnya dari kedua sisi string.
    // Fungsi stripslashes() menghilangkan garis miring terbalik
    // Fungsi htmlspecialchars() mengonversi beberapa karakter yang telah ditentukan sebelumnya menjadi entitas HTML.
    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

      // query insert
    $query = "INSERT INTO mahasiswa values (NULL, '$npm', '$nama', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    $sql = "DELETE FROM mahasiswa WHERE id=$id";
    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    // Untuk kueri SQL, ikat parameter (seperti halnya PDO) atau gunakan fungsi pelolosan asli driver untuk variabel kueri (seperti mysql_real_escape_string())
    // Gunakan strip_tags() untuk memfilter HTML yang tidak diinginkan
    // Fungsi trim() menghapus spasi dan karakter standar lainnya dari kedua sisi string.
    // Fungsi stripslashes() menghilangkan garis miring terbalik
    // Fungsi htmlspecialchars() mengonversi beberapa karakter yang telah ditentukan sebelumnya menjadi entitas HTML.
    $id = $data["id"];
    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

      // query insert
    $query = "UPDATE mahasiswa SET npm = '$npm', nama = '$nama', email = '$email', jurusan = '$jurusan', gambar = '$gambar' WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>