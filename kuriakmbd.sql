-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 Apr 2018 pada 11.02
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuriakmbd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(150) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `deskripsi_barang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_barang`, `jumlah_barang`, `deskripsi_barang`) VALUES
(4, 'SOLAHART S 302 SL SOLAR WATER HEATER', 33531200, 10, 'Solahart Seri L dengan sistem direct heating, sampai saat ini masih diproduksi di Australia dan dieksport ke banyak negara di dunia. Dan merupakan seri yang tetap populer dipakai oleh konsumen di Indonesia. Sistem kerja pemanasan air pada Solahart Direct Heating: System yaitu air baku dipanaskan secara langsung di collector oleh sinar matahari dan disimpan didalam tangki. Sistem kerja ini disebut Thermosiphon.\r\n\r\nKeunggulan: \r\n1. DESIGN ANGGUN “STYLISH SLIMLINE”\r\nBentuk manis dan anggun dengan warna Silver pada tangki dan collector merupakan ciri Solahart Seri L yang memberi kesan exclusive diatas atap. Kulit tangki dari alumunium marine grade dengan tekstur kulit jeruk yang tidak menyilaukan mata, dan tidak dipantulkan kembali ke ozon\r\n2. AIR PANAS TERSEDIA SEPANJANG TAHUN, 24 JAM SETIAP HARI\r\nWalaupun kondisi matahari tidak bersinar dengan optimum (+- 3-4 jam perhari), air panas tersedia setiap saat dengan adanya backup electric Booster Heater yang bekerja secara otomatic ataupun manual dan bekerja secara efisien.\r\n3. PROTEKSI SUPERIOR\r\nTangki penyimpan air panas dilapisi dengan 2 lapis enamel yang tahan karat, dikombinasikan dengan magnesium anode yang berfungsi menghindari terjadinya pergerakan di tangki penyimpan air panas dan di alur collector.\r\n4. ISOLASI TANGKI DENGAN KEPADATAN YANG TINGGI\r\nUntuk menghindari terjadinya pengurangan panas air di dalam tangki, tangki diisolasi dengan polyurethane foam yang diinjeksi dengan tekanan 2000 psi setebal 5 cm sehingga mempunyai kepadatan yang tinggi dan tahan benturan.\r\n5. ISOLASI COLLECTOR\r\nUntuk menahan panas di dalam collector diisolasi dengan glass wool setebal 55 mm yang dikombinasikan dengan aluminium foil.\r\n6. KOTAK COLLECTOR\r\nTampak indah dan kokoh terbuat dari aluminium kualitas premium tahan terhadap karat dan cuaca yang sangat ekstrem.\r\n7. PERFORMA COLLECTOR\r\nDengan pengalaman dan kualitas R & D yang dimiliki Solahart maka tercipta collector berkemampuan menyerap energi panas matahari yang tinggi seluas 2 m2 dipadu dengan kaca collector tempered tebal 5 mm dan double seal yang menjamin kekedapan collector tersebut sehingga tidak terjadi pengembunan di dalam collector.\r\n8. SAFETY VALVE (tidak tampak)\r\nsemua Solahart seri L dilengkapi dengan valve pengaman pada jalur air dingin masuk dan air panas keluar untuk memberi kenyamanan dan keamanan pada pemakaianya.\r\n\r\nSpesifikasi:\r\n- Weight : 438 kg\r\n- Length : 2.53 m\r\n- Height : 0.51 m\r\n- Width : 2.47 m\r\n- 2 Collectors\r\n- For 8 People\r\n- Garansi 1 tahun spareparts. 5 tahun tanki dan panel collector\r\n'),
(5, 'WASSER PC-255EA POMPA AIR SUMUR DALAM', 1511000, 10, 'Wasser PC255EA  merupakan Pompa air Wasser tipe sumur dalam atau dikenal juga sebagai pompa air Jet Pump, memberikan solusi untuk penghisapan air dari sumber air yang dalam disertai dengan daya dorong yang kuat.\r\n\r\nPompa JetPump Wasser PC255EA digerakkan oleh motor yang tangguh dan komponen pompa yang berkualitas,  Pompa JetPump Wasser PC255EA dengan kapasitas besar yang mampu menghasilkan kekuatan hisap dan pancar yang optimal.\r\n\r\nPompa JetPump Wasser PC255EA telah memenuhi standar SNI sehingga aman bagi pengguna serta handal digunakan untuk jangka waktu yang lama.\r\n\r\nKeunggulan:\r\n\r\n- Tahan bocor\r\n- Tahan panas\r\n- Tangguh walaupun sedang dibebani muatan penuh\r\n- Dapat dioperasikan secara manual dan otomatis\r\n- Shaft terbuat dari Stainless Steel berkualitas\r\n- Suara halus\r\n- Tahan karat dengan sistem pengecetan electro painting\r\n- Dilengkapi thermal protector\r\n- Impeller & casing liner terbuat dari bahan kuningan\r\n- Kinerja pompa lebih stabil\r\n- Aliran air besar\r\n- Cukup 1 pompa untuk 1 rumah\r\n- Low voltage, hemat listrik\r\n- Otomatis\r\n- 24 jam nonstop setiap hari dengan daya dorong optimal\r\n- Garansi motor 12 bulan\r\n\r\nSpesifikasi:\r\n\r\n- Daya Output Listrik : 250 Watt\r\n- Daya Input Start : 500 Watt\r\n- Daya Hisap : 30 meter (15 m permukaan air)\r\n- Daya Dorong : 30 meter (max)\r\n- Total Head : 60 meter\r\n- Debit Air : 75 Liter / menit\r\n- Inlet : 1 1/4\r\n- Outlet : 1 inch\r\n- Otomatis : Ya\r\n- Berat: 27 kg'),
(6, 'SANYO PH 130 B POMPA SUMUR DANGKAL', 1126800, 10, 'Keterangan Produk :\r\nDaya Output Listrik : 125 Watt\r\n    Daya Input Start : 308 Watt\r\n    Daya Hisap : 9 Meter (max)\r\n    Daya Dorong : 16 meter (efektif)\r\n    Total Head : 25 meter\r\n    Debit Air : 30 liter/menit (max)\r\n    Inlet : 3/4 inch\r\n    Outlet : 3/4 inch\r\n    Otomatis : Ya\r\n\r\n\r\nKeunggulan Produk :\r\nSanyo PH 130 B merupakan pompa sumur dangkal model tabung bawah yang cocok untuk digunakan di rumah tangga, suaranya halus tidak bising\r\n\r\nSpesifikasi :\r\n\r\n\r\nPanjang : 28cm\r\n\r\nLebar  : 28cm\r\n\r\nTinggi : 42cm'),
(7, 'Zehn Tangga Telescopic AT380H 12 Step', 1615000, 10, 'Tangga Telescopic adalah tangga yang dapat dipanjangkan dengan cara ditarik dan ditekan untuk dipendekan. Ukuranya yang hemat tempat dan juga ringkas dapat mempermudah pemakaianya. Tangga ini bisa digunakan di rumah, kantor, gedung, tempat proyek, dan lokasi lainnya.\r\n\r\nSpesifikasi:\r\n\r\n    - Tinggi Vertical Maks : 380 cm\r\n    - Tinggi Posisi Segitiga: 190\r\n    - Jumlah Anak Tangga : 12\r\n    - Ukuran Lipat : 66 cm\r\n    - Jarak Anak Tangga : 30 cm\r\n    - Kapasitas Berat Maks : 150 Kg\r\n    - Berat : 13,6 Kg\r\n    - Ketebalan Aluminium : 1.5mm\r\n\r\nKeunggulan:\r\n\r\n    - Lebih ringan dibanding tangga konvensional\r\n    - Multifungsi dapat dijadikan bentuk segitiga dan lurus vertical\r\n    - Dapat digunakan pada dua permukaan yang tingginya beda\r\n    - Tidak makan tempat\r\n    - Mudah untuk dikecil dan ditinggikan\r\n    - Kuat\r\n    - Kualitas bagus'),
(8, 'PANASONIC FV-25RUN5 WALL EXHAUST FAN', 384800, 10, 'Ventilating fan menjaga sirkulasi udara yang baik di dalam ruangan. Mengalirkan udara AC ke seluruh ruangan sehingga\r\nmeningkatkan kenyamanan di dalam ruangan walaupun cuaca di luar ruangan sedang gerah.\r\nPanasonic Wall Mount Ventilating dapat mengalirkan udara dari dalam ke luar ruangan dan dari luar ke dalam ruangan.\r\n\r\nSpesifikasi\r\nWatt Keluar : 29-38 W\r\nWatt Masuk : 22-27 W\r\nHembusan Udara Keluar : 14 CMM\r\nHembusan Udara Masuk : 11 CMM\r\nVolt  : 220 V, 50 Hz\r\nDiameter baling-baling : 25 cm (10\")\r\n\r\nKeunggulan\r\n- Motor kuat dilengkapi Thermal Fuse\r\n- Suara motor & baling-baling halus\r\n- Instalasi dan perawatan mudah\r\n- Cocok digunakan di kamar mandi dan ruang keluarga\r\n'),
(9, 'MASTERTILE 15 GREY 1KG/BAG', 8300, 100, 'Pengisi nat keramik Bubuk halus berwarna, bila dicampur dengan air, akan menghasilkan pasta\r\nyang mudah diaplikasikan untuk pengisi nat keramik.\r\n\r\nPENGGUNAAN:\r\n• Nat keramik, granit, marmer dan mosaik\r\n• Kolam renang dan kamar mandi\r\n\r\nKEMASAN :  1 kg\r\nKONSUMSI :  Untuk keramik ukuran 150 x 150 mm, 4 m²/ sak'),
(10, 'TIDY A0401 4\" WHITE DL BULAT KAKI 2 (E27)', 28700, 100, 'TIDY Downlight panel series adalah rumah lampu yang dipasang di dalam platfom. Kegunaan Downlight adalah untuk memberikan pencahayaan yang optimal pada area yang berada di bawah lampu.\r\nSelain itu juga memberikan kesan indah pada ruangan rumah anda.\r\n\r\nSpesifikasi:\r\n-Dimensi: 14.5 x 14.5 x 16\r\n-Downlight: 4 Inc\r\n-Frame : Putih\r\n\r\n\r\nKeunggulan Produk:\r\n- Penerangan menjadi lebih terfokus dan terang\r\n- Design Elegan dengan Plat berlapis Crome dengan kualitas baik\r\n- Pemasangan yang mudah\r\n- Tidak mudah karat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambarbarang`
--

CREATE TABLE `gambarbarang` (
  `id_gambar` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `slug` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambarbarang`
--

INSERT INTO `gambarbarang` (`id_gambar`, `id_barang`, `slug`) VALUES
(15, 4, '15.jpg'),
(16, 5, '16.jpeg'),
(17, 6, '17.jpg'),
(18, 7, '18.jpg'),
(19, 8, '19.jpg'),
(20, 9, '20.jpg'),
(21, 10, '21.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambarhunian`
--

CREATE TABLE `gambarhunian` (
  `id_gambarhunian` int(11) NOT NULL,
  `id_hunian` int(11) NOT NULL,
  `slug` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambarhunian`
--

INSERT INTO `gambarhunian` (`id_gambarhunian`, `id_hunian`, `slug`) VALUES
(6, 4, '6.jpg'),
(7, 4, '7.jpg'),
(8, 5, '8.jpg'),
(9, 5, '9.jpg'),
(10, 5, '10.jpg'),
(11, 6, '11.jpg'),
(12, 6, '12.jpg'),
(13, 6, '13.jpg'),
(14, 7, '14.jpg'),
(15, 7, '15.jpg'),
(16, 8, '16.jpg'),
(17, 8, '17.jpg'),
(18, 9, '18.jpg'),
(19, 9, '19.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hunian`
--

CREATE TABLE `hunian` (
  `id_hunian` int(11) NOT NULL,
  `nama_hunian` varchar(200) NOT NULL,
  `status_hunian` int(11) NOT NULL,
  `deskripsi` text,
  `harga_hunian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hunian`
--

INSERT INTO `hunian` (`id_hunian`, `nama_hunian`, `status_hunian`, `deskripsi`, `harga_hunian`) VALUES
(4, 'ciwastra perumahan de Marrakesh', 1, 'Sertifikat Hak Milik\r\n\r\nKamar tidur: 2\r\nKamar mandi: 1\r\nGarasi: 1\r\nLuas tanah: 90m2\r\nLuas bangunan: 50m2\r\nBerapa lantai? 1\r\nListrik: 2200 watt\r\nGenset: 1\r\nSumber air: Bor\r\nApakah mobil masuk? Ya\r\nBebas banjir? Ya\r\n', 20000000),
(5, 'rumah baru semifurnish di Antapani Bandung', 1, 'Sertifikat Hak Milik\r\n\r\nKamar tidur: 2\r\nKamar mandi: 2\r\nKamar pembantu: 1\r\nGarasi: 2 Carport\r\nLuas tanah: 189\r\nLuas bangunan: 250\r\nBerapa lantai? 2\r\nBangunan menghadap: Selatan\r\nListrik: 3500 watt\r\nSumber air: Artesis\r\nPemanas air: Ada\r\nApakah mobil masuk? ya\r\nBebas banjir? Ya\r\n', 120000000),
(6, 'Cigadung Komplek Dosen Unpad Dekat ITB', 1, 'Sertifikat Hak Milik\r\n\r\nKamar tidur: 3\r\nKamar mandi: 2\r\nGarasi: 1 mobil\r\nLuas tanah: 200 m2\r\nLuas bangunan: 150 m2\r\nBerapa lantai? 1 Lantai\r\nBangunan menghadap: Timur laut\r\nListrik: 1300 watt\r\nSumber air: Jetpump\r\nApakah mobil masuk? 2 Mobil\r\nBebas banjir? Sangat Bebas \r\n', 45000000),
(7, 'RUMAH SIAP HUNI KAWASAN PASTEUR', 2, 'Sertifikat Hak Milik\r\n\r\nKamar tidur: 4\r\nKamar mandi: 3\r\nLuas tanah: 160 m2\r\nLuas bangunan: 200 m2\r\nBerapa lantai? 2\r\nBangunan menghadap: Utara\r\nBerapa line telepon? 1\r\nListrik: 2200 watt\r\nSumber air: Jetpump\r\nAC: Ya\r\nSambungan Internet: Ya\r\nApakah mobil masuk? Ya\r\nBebas banjir? Ya\r\n', 90000000),
(8, 'Rumah 2 LT siap huni \"SATURNUS\"', 1, 'Kamar tidur: 5\r\nKamar mandi: 3\r\nKamar pembantu: 1\r\nGarasi: 1 CRPT\r\nLuas tanah: 144 m2 (9x16)\r\nLuas bangunan: 220 m2\r\nBerapa lantai? 2\r\nBangunan menghadap: Utara\r\nListrik: 1300 watt\r\nSumber air: PAM\r\nApakah mobil masuk? YA\r\nBebas banjir? YA\r\n', 30000000),
(9, 'dikontrakkan rumah dekat kota bandung – cikutra', 1, 'Kamar tidur: 3\r\nKamar mandi: 2\r\nKamar pembantu: 1\r\nGarasi: 1\r\nLuas tanah: 140\r\nLuas bangunan: 100\r\nBerapa lantai? 1\r\nBangunan menghadap: Selatan\r\nBerapa line telepon? 1\r\nListrik: 1300 watt\r\nSumber air: sumur bor perumahan\r\nPemanas air: ada\r\nApakah mobil masuk? masuk mobil\r\nBebas banjir? bebas banjir\r\n', 30000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah_keranjang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id`, `id_user`, `id_barang`, `jumlah_keranjang`) VALUES
(1, 2, 4, 0),
(2, 2, 4, 0),
(3, 2, 4, 0),
(4, 2, 4, 0),
(5, 2, 4, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesananhunian`
--

CREATE TABLE `pesananhunian` (
  `id_pesananhunian` int(11) NOT NULL,
  `id_hunian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesananhunian`
--

INSERT INTO `pesananhunian` (`id_pesananhunian`, `id_hunian`, `id_user`) VALUES
(0, 7, 2),
(0, 7, 2),
(0, 7, 2),
(0, 7, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanuser`
--

CREATE TABLE `pesanuser` (
  `id_pesan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanuser`
--

INSERT INTO `pesanuser` (`id_pesan`, `id_user`, `pesan`) VALUES
(1, 2, 'Terima kasih, websitenya sangat bermanfaat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username_user` varchar(100) NOT NULL,
  `password_user` varchar(100) NOT NULL,
  `level_user` tinyint(1) NOT NULL,
  `status_user` tinyint(1) NOT NULL,
  `email_user` varchar(100) DEFAULT NULL,
  `gambaruser` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username_user`, `password_user`, `level_user`, `status_user`, `email_user`, `gambaruser`) VALUES
(2, 'hafidz', 'admin', 1, 1, 'hafidzilkhairi00@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `gambarbarang`
--
ALTER TABLE `gambarbarang`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `gambarbarang_ibfk_1` (`id_barang`);

--
-- Indexes for table `gambarhunian`
--
ALTER TABLE `gambarhunian`
  ADD PRIMARY KEY (`id_gambarhunian`),
  ADD KEY `id_hunian` (`id_hunian`);

--
-- Indexes for table `hunian`
--
ALTER TABLE `hunian`
  ADD PRIMARY KEY (`id_hunian`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keranjang_ibfk_1` (`id_user`),
  ADD KEY `keranjang_ibfk_2` (`id_barang`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pesananhunian`
--
ALTER TABLE `pesananhunian`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_hunian` (`id_hunian`);

--
-- Indexes for table `pesanuser`
--
ALTER TABLE `pesanuser`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gambarbarang`
--
ALTER TABLE `gambarbarang`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `gambarhunian`
--
ALTER TABLE `gambarhunian`
  MODIFY `id_gambarhunian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `hunian`
--
ALTER TABLE `hunian`
  MODIFY `id_hunian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanuser`
--
ALTER TABLE `pesanuser`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gambarbarang`
--
ALTER TABLE `gambarbarang`
  ADD CONSTRAINT `gambarbarang_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `gambarhunian`
--
ALTER TABLE `gambarhunian`
  ADD CONSTRAINT `gambarhunian_ibfk_1` FOREIGN KEY (`id_hunian`) REFERENCES `hunian` (`id_hunian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesananhunian`
--
ALTER TABLE `pesananhunian`
  ADD CONSTRAINT `pesananhunian_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesananhunian_ibfk_2` FOREIGN KEY (`id_hunian`) REFERENCES `hunian` (`id_hunian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesanuser`
--
ALTER TABLE `pesanuser`
  ADD CONSTRAINT `pesanuser_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
