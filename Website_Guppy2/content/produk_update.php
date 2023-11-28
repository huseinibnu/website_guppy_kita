<?php 
if (!defined('INDEX')) die("");

$foto = $_FILES['foto']['name'];
$lokasi = $_FILES['foto']['tmp_name'];
$tipefile = $_FILES['foto']['type'];
$ukuranfile = $_FILES['foto']['size'];

$error = "";

if ($foto == "") {
    // Use prepared statements to prevent SQL injection
    $query = "UPDATE produk SET 
        nama_produk = :nama,
        keterangan = :keterangan
        WHERE id_produk = :id";
    $stmt = $con->prepare($query);
    $stmt->bindParam(':nama', $_POST['nama']);
    $stmt->bindParam(':keterangan', $_POST['keterangan']);
    $stmt->bindParam(':id', $_POST['id']);
    $stmt->execute();
} else {
    if ($tipefile != "image/jpeg" && $tipefile != "image/jpg" && $tipefile != "image/png") {
        $error = "Tipe file tidak didukung!";
    } else if ($ukuranfile > 1000000) {
        $error = 'Ukuran file terlalu besar (lebih dari 1MB)!';
    } else {
        $query = "SELECT * FROM produk WHERE id_produk = :id";
        $stmt = $con->prepare($query);
        $stmt->bindParam(':id', $_POST['id']);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if (file_exists("images/" . $data['foto'])) {
            unlink("images/" . $data['foto']);
        }

        move_uploaded_file($lokasi, "images/" . $foto);

        // Use prepared statements to prevent SQL injection
        $query = "UPDATE produk SET 
            foto = :foto,
            nama_produk = :nama,
            keterangan = :keterangan
            WHERE id_produk = :id";
        $stmt = $con->prepare($query);
        $stmt->bindParam(':foto', $foto);
        $stmt->bindParam(':nama', $_POST['nama']);
        $stmt->bindParam(':keterangan', $_POST['keterangan']);
        $stmt->bindParam(':id', $_POST['id']);
        $stmt->execute();
    }
}

if ($error != "") {
    echo $error;
    echo "<meta http-equiv='refresh' content='2;url=?hal=produk_edit&id=$_POST[id]'>";
} else {
    echo "Data berhasil disimpan!";
    echo "<meta http-equiv='refresh' content='2;url=?hal=dashboard_content'>";
}
?>
