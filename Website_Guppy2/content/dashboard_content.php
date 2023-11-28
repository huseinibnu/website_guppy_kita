<body>
    <!-- container -->
    <div class="container">
     <!-- info panel -->
     <div class="row justify-content-center">
      <div class="col-lg-10 info-panel">
        <div class="row">
            <div class="col-lg">
                <img src="img\image2.jpg " alt="Pengiriman Cepat" class="float-left">
                <h4>Pengiriman Cepat</h4>
                <p>Pesanan anda akan dikirim dalam 1x24 jam.</p>
            </div>
            <div class="col-lg">
                <img src="img\image1.png" alt="24 Hours" class="float-left">
                <h4>24 Hours</h4>
                <p>Kami menerima pesanan selama 24 jam.</p>
            </div>
            <div class="col-lg">
                <img src="img\image3.jpg" alt="Terpercaya" class="float-left">
                <h4>Terpercaya</h4>
                <p>Produk guppy dan pakan yang kami sediakan dapat diandalkan.</p>
            </div>
        </div>
      </div>
     </div>
    </div>
    <!-- akhir info panel -->
    <!-- akhir container -->


    <!-- Carousel -->
    <div id="carousel">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/guppy1.png" class="d-block w-100" alt="Guppy Full Red Albino">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="font-weight-bold">Guppy Full Red Albino</h5>
                    <p class="font-weight-bold">Rp. 300.000</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="img/guppy2.jpg" class="d-block w-100" alt="Guppy Blue Moscow Albino">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="font-weight-bold">Guppy Blue Moscow Albino</h5>
                    <p class="font-weight-bold">Rp. 150.000 - 300.000</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="img/guppy3.jpg" class="d-block w-100" alt="Guppy Black Moscow">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="font-weight-bold">Guppy Black Moscow</h5>
                    <p class="font-weight-bold">Rp. 150.000 - 300.000</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="img/guppy4.jpeg" class="d-block w-100" alt="Guppy Tuxedo Koi">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="font-weight-bold">Guppy Tuxedo Koi</h5>
                    <p class="font-weight-bold">Rp. 200.000</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                <div class="nav-icon">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </div>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                <div class="nav-icon">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </div>
            </button>
        </div>
    </div>
    <!-- Akhir Carousel -->

    <!-- Card -->
    <div id="foods">
        <div class="judul-card">
            <h1 class="display-4 text-center font-weight-normal">Produk terbaik di Guppy Kita</h1>
        </div>
        <a href="?hal=produk_tambah" class="btn btn-primary tombol-detail">Tambah</a>
        <div class="row row-cols-1 row-cols-md-2">
            <?php
            $query = "SELECT * FROM produk";
            $result = $con->query($query);

            while ($data = $result->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <div class="col mb-4">
                <div class="card">
                    <img src="images/<?php echo $data['foto']; ?>" class="card-img-top" alt="JBL Novo Artemio">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data['nama_produk']; ?></h5>
                        <p class="card-text"><?php echo $data['keterangan']; ?></p>
                        <a class="btn btn-primary tombol-detail" href="?hal=produk_edit&id=<?php echo $data['id_produk']; ?>">Edit</a>
                        <a class="btn btn-primary tombol-detail"
                            href="?hal=produk_hapus&id=<?php echo $data['id_produk']; ?>&foto=<?php echo $data['foto']; ?>">Hapus</a>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>

    </div>
    <!-- Akhir Card -->


    <!-- Testimonial -->
    <br><br><br><br>
    <div id="testimony">
        <section class="testimonial">
            <div class="judul-card">
                <h1 class="display-4 text-center font-weight-normal">Testimony</h1>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h5>" Rasanya tenang saat pulang kerja melihat guppy saya berenang dengan lincah di aquarium. "</h5>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8 justify-content-center d-flex">
                    <figure class="figure">
                        <img src="img/people1.jpg" class="figure-img img-fluid rounded-circle" alt="Adit">
                    </figure>
                    <figure class="figure">
                        <img src="img/people2.jpg" class="figure-img img-fluid rounded-circle utama" alt="Cantika Febiola">
                        <figcaption class="figure-caption">
                        <h5>Cantika Febiola</h5>
                        <p>CEO Warung Kita</p>
                        </figcaption>
                    </figure>
                    <figure class="figure">
                        <img src="img/people3.jpg" class="figure-img img-fluid rounded-circle" alt="jarwo">
                    </figure>
                </div>
            </div>
        </section>
    </div>
    <!-- Akhir Testimonial -->

    <!-- Footer -->
    <div class="row footer">
        <div class="col text-center">
        <p>2022 All Rights Reserved by Guppy Kita</p>
        </div>
    </div>
    <!-- Akhir Footer -->
</body>