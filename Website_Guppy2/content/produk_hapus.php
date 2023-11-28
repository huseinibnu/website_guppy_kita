<?php
if (!defined('INDEX')) die("");

// Assuming you have a proper database connection ($con) using PDO
$imageFilename = $_GET['foto'];

// Check if the file exists and delete it
$imagePath = "images/$imageFilename";
if (file_exists($imagePath)) {
    unlink($imagePath);
}

// Use prepared statements to prevent SQL injection
$query = "DELETE FROM produk WHERE id_produk = :id";
$stmt = $con->prepare($query);
$stmt->bindParam(':id', $_GET['id']);

if ($stmt->execute()) {
    echo 'Data berhasil dihapus!';
    echo "<meta http-equiv='refresh' content='1;url=?hal=dashboard_content'>";
} else {
    echo 'Tidak dapat menghapus data!<br/>';
    echo $stmt->errorInfo()[2]; // Display the PDO error message
}
?>
