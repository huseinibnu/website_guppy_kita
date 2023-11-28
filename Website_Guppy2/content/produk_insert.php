<?php
if (!defined('INDEX')) die("");

$foto = $_FILES['foto']['name'];
$lokasi = $_FILES['foto']['tmp_name'];
$tipefile = $_FILES['foto']['type'];
$ukuranfile = $_FILES['foto']['size'];

$error = "";
if ($foto == "") {
    // Use prepared statements to prevent SQL injection
    $query = "INSERT INTO produk (nama_produk, link, keterangan) VALUES (:nama, :link, :keterangan)";
    $stmt = $con->prepare($query);
    $stmt->bindParam(':nama', $_POST['nama']);
    $stmt->bindParam(':link', $_POST['link']);
    $stmt->bindParam(':keterangan', $_POST['keterangan']);
    $stmt->execute();
} else {
    if ($tipefile != "image/jpeg" and $tipefile != "image/jpg" and $tipefile != "image/png") {
        $error = "Tipe File Tidak Didukung!";
    } else if ($ukuranfile >= 1000000) {
        $error = 'Ukuran file terlalu besar (lebih dari 1MB)!';
    } else {
        move_uploaded_file($lokasi, "images/" . $foto);
        // Use prepared statements to prevent SQL injection
        $query = "INSERT INTO produk (foto, nama_produk, keterangan) VALUES (:foto, :nama, :keterangan)";
        $stmt = $con->prepare($query);
        $stmt->bindParam(':foto', $foto);
        $stmt->bindParam(':nama', $_POST['nama']);
        $stmt->bindParam(':keterangan', $_POST['keterangan']);
        $stmt->execute();
    }
}

if ($error != "") {
    echo $error;
    echo "<meta http-equiv='refresh' content='2;url=?hal=produk_tambah'>";
} else if ($query) {
    echo 'Data berhasil disimpan';
    echo "<meta http-equiv='refresh' content='1;url=?hal=dashboard_content'>";
} else {
    echo 'Tidak dapat menyimpan data!<br/>';
    echo $stmt->errorInfo()[2]; // Display the PDO error message
}
?>
