-- Table structure for table `produk`
CREATE TABLE IF NOT EXISTS "produk" (
  "id_produk" serial PRIMARY KEY,
  "foto" varchar(100) NOT NULL,
  "nama_produk" varchar(150) NOT NULL,
  "keterangan" text NOT NULL
);

-- Dumping data for table `produk`
INSERT INTO "produk" ("id_produk", "foto", "nama_produk", "keterangan") VALUES
(20, 'pakan3.jpg', 'JBL Novo Artemio', 'Dibekukan dengan lembut untuk mempertahankan nilai nutrisi penuh dari makanan hidup, Meningkatkan pertumbuhan melalui kandungan protein yang tinggi dan lemak yang berharga dengan omega 3 dan omega 6. Untuk ikan ukuran 3 - 20 CM.'),
(21, 'pakan4.jpg', 'Hikari Neopros Guppy Food', 'Tepung ikan, tepung kuning telur, tepung krill, pati, Ikamiru, ragi bir, Pengemulsi, minyak ikan, tepung gluten, alfalfa pekat, rumput laut, ekstrak krill, Ikaoiru, Tepung cacing sutra, bubuk rumput laut, asam amino (metionin) Namakin-zai , karotenoid, Yahudi, Vitamin (kolin klorida, E, C, inositol, B5, B2, A, B1, B6, B3, K, asam folat, D3, biotin), Mineral (P, Fe, Mg, Zn, Mn, Co, Cu, I, Se)'),
(22, 'pakan1.jpg', 'Tetra Guppy Mini Flakes', 'Tetra Guppy Mini Flakes Telah Dikembangkan Secara Khusus Untuk Kebutuhan Nutrisi Ikan Guppy Dan Karper Gigi Hidup Lainnya Seperti Platy, Mollies Dan Swordtails.'),
(23, 'pakan2.jpg', 'Hikari Fancy Guppy', 'Diet Ilmiah Harian Untuk Semua Jenis Ikan Guppy Dan Ikan Tropis Berukuran Kecil Butiran Kaya Protein Semi-Mengambang Yang Dikembangkan Sebagai Hasil Penelitian Ekstensif Tentang Kebiasaan Berbagai Jenis Ikan Guppy.'),
(24, 'pakan5.jpg', 'Ocean Free Super Guppy', 'Pakan ikan absolut untuk ikan guppy eksotis, meningkatkan bentuk ikan dan perkembangan sirip, mengintensifkan warna alami, tidak akan mengaburkan air, menambahkan zat penguat kekebalan khusus.'),
(25, 'pakan6.jpg', 'Sanyu Guppy Pellets', 'Makanan ikan berkualitas tinggi untuk ikan guppy, cocok untuk ikan kecil (panjang 3 - 10cm) juga, meningkatkan warna ikan Guppy, astaxanthin alami akan meningkatkan warna guppy yang cemerlang, mengandung enzim pencernaan yang meningkatkan laju pertumbuhan dan sistem kekebalan tubuh Guppy.'),
(26, 'pakan7.jpg', 'Daphnia Magna', 'Walaupun namanya terdengar keren, Daphnia Magna merupakan jenis kutu air yang berasal dari Amerika. Mereka banyak dikembangkan peternak Indonesia sebagai pakan ikan. Daphnia Magna mengandung protein rendah lemak dan air. Kalau mau ikan guppymu cepat besar segera pesan ini.'),
(27, 'pakan8.jpg', 'Cacing Sutra', 'Cacing sutra memiliki kandungan gizi yang cukup tinggi dengan protein (57%), lemak (13,3%), serat kasar (2,04%), kadar abu (3,6%) dan air (87,7%) dimana kandungan gizi tersebut sangat dibutuhkan oleh benih ikan untuk proses pertumbuhan.'),
(28, 'pompa air.jpg', 'Boyu Pompa Air Aquarium 34 Watt', 'Boyu Pompa Akuarium 34 Watt adalah pompa berefesiensi tinggi dan hemat energi. Pompa ini terbuat dari material berkualitas yang tahan lama dan bisa digunakan di air tawar atau air laut. '),
(29, 'aerator.jpg', 'Amara Aquarium Air Pump', 'Paket aerator + selang & air stone ( pompa udara aquarium / air pump ). Paket Lengkap Sistem Aerasi untuk melengkapi produk Kit Hidroponik.  Pemula System Wick atau Sumbu 1, agar tanaman tumbuh lebih optimal.');

-- Table structure for table `user`
CREATE TABLE IF NOT EXISTS "user" (
  "id" serial PRIMARY KEY,
  "nama_lengkap" varchar(255) NOT NULL,
  "username" varchar(255) NOT NULL,
  "password" varchar(255) NOT NULL
);

-- Dumping data for table `user`
INSERT INTO "user" ("id", "nama_lengkap", "username", "password") VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');
