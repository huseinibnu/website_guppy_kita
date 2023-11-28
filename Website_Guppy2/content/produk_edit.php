<?php
if (!defined('INDEX')) die("");

// Assuming you have a proper database connection ($con) using PDO
$query = "SELECT * FROM produk WHERE id_produk = :id";
$stmt = $con->prepare($query);
$stmt->bindParam(':id', $_GET['id']);
$stmt->execute();

$data = $stmt->fetch(PDO::FETCH_ASSOC);
?>


<div class="container">
    <h2 class="judul">Edit Produk</h2>
    <form method="post" action="?hal=produk_update" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $data['id_produk']; ?>">
        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" id="foto" name="foto">
            <img src="images/<?php echo $data['foto']; ?>" width="150">
        </div>

        <div class="form-group">
            <label for="nama">Nama</label>
            <div class="input"><input type="text" name="nama" id="nama" value="<?php echo $data['nama_produk']; ?>"></div>
        </div>

        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <div class="input">
                <textarea style="width: 100%;" rows="5" id="keterangan"
                    name="keterangan"><?php echo $data['keterangan']; ?></textarea>
            </div>
        </div>

        <div class="form-group">
            <input type="submit" value="Simpan" class="btn btn-primary tombol-detail">
            <input type="reset" value="Batal" class="btn btn-primary tombol-detail">
        </div>
    </form>
</div>