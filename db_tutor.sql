-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 03, 2019 at 01:45 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_keranjang`
--

INSERT INTO `tb_keranjang` (`id`, `id_user`, `id_barang`, `jumlah`, `status`) VALUES
(3, 4, 1, 1, 0),
(4, 4, 2, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id`, `nama`, `harga`, `keterangan`, `id_kategori`) VALUES
(1, 'TAS SELEMPANG WAIST BAG PRIA WANITA SLING BAG SUPREME FILA COWOK CEWEK', 38000, 'BERI REVIEW BINTANG 5 (* * * * *) . DAPAT CASHBACK LANGSUNG DI ORDERAN BERIKUTNYA .\r\n(Cukup kirim screenshoot review kamu dan konfirmasikan ke admin chat kami)\r\n\r\n[ NEW ARRIVAL FROM HEYLOOK COLLECTION ]\r\n\r\nCode : WAISTBAG ROYAL\r\nMaterial : D300 PREMIUM\r\nSpesifikasi Produk :\r\n? Original Product Heylook\r\n? Resleting original Heylook\r\n? Model Terbaru, terdapat 1 kantung utama dan 2 kantung medium\r\n? Bagian dalam dilapisi oleh furing dan terdapat slot untuk menaruh gadget\r\n? Cocok untuk digunakan saat travelling, jalan-jalan dan dibawa berkendara motor\r\n? Jahitan kuat dan rapih\r\n? Nyaman dipakai\r\nSize :\r\nP x L x T = 44 cm x 15 cm x 17 cm\r\nPanjang Tali Selempang maks. 83 cm\r\nStock warna yang ready :\r\n- WAISTBAG ROYAL FULL BLACK\r\n- WAISTBAG ROYAL FULL NAVY\r\n- WAISTBAG ROYAL NAVY BROWN\r\n- WAISTBAG ROYAL NAVY KHAKI\r\n- WAISTBAG ROYAL NAVY MOCCA\r\n- WAISTBAG ROYAL NAVY RED\r\n- WAISTBAG ROYAL NAVY MAROON\r\n- WAISTBAG ROYAL BLACK GREY\r\n- WAISTBAG ROYAL BLACK BROWN\r\n- WAISTBAG ROYAL MAROON GREY\r\n*) Untuk warna bahan tidak selalu sama 100% dengan gambar karena efek cahaya dan tergantung stock bahan di pasaran.\r\n\r\n>> HARAP CANTUMKAN KETERANGAN ORDER SEBELUM TRANSAKSI AGAR TIDAK DIKRIM RANDOM\r\nCONTOH : WAISTBAG ROYAL FULL NAVY\r\n\r\nNOTE :\r\n• Stock barang di varian selalu ready. Jika tidak ada di varian, maka stock barang tersebut kosong.\r\n• Pesanan yang telah diverifikasi Tokopedia pada Hari Senin-Jum’at sebelum jam 17.00 WIB dan Hari Sabtu sebelum jam 15.00 WIB akan dikirimkan di hari yang sama, jika lebih dari itu akan di proses sehari setelahnya.\r\n• Minggu kami off pengiriman, jika sudah transfer dan order, barang akan dikirim di Hari Senin.\r\n• Resi muncul H+1 pengiriman.\r\n• Jika stock barang yang di varian kosong, maka akan kami konfirmasi terlebih dahulu di hari yang sama. Jika tidak ada respon atau jawaban, maka akan kami kirim random.\r\n\r\nHAPPY SHOPPING ^.^ ', 2),
(2, 'SPEAKER HARMAN KARDON ONYX 3 ORIGINAL IMS', 1700000, '1.Barang dijamin original IMS garansi resmi hasil bundling dr pembelian hp samsung.\r\n2.Free kabel aux eksklusif (bonus?) ', 1),
(4, 'JAKET BOMBER PRIA ORIGINAL MOTOR JEANS LEVIS ANIME SWEATER HOODIE - GREY BLACK, L', 90000, 'BERI REVIEW BINTANG 5 (* * * * *) . DAPAT CASHBACK LANGSUNG DI ORDERAN BERIKUTNYA .\r\n(Cukup kirim screenshoot review kamu dan konfirmasikan ke admin chat kami)"\r\n\r\nKAMI SUPPLIER DAN PRODUSEN SENDIRI\r\nKAPAN LAGI ORDER BARANG ECER, TAPI PAKAI HARGA GROSIR?\r\nSILAHKAN ORDER SEBELUM KEHABISAN!!!\r\n\r\nCode: BOMBER FLEECE\r\nMaterial : Bahan Fleece\r\n? Model Terbaru\r\n? Bahan Super Duper Good Quality\r\n? Pas Untuk Bepergian atau Berkendara Motor\r\n? Dilengkapi Resleting Penutup Jaket\r\n? Bahan adem dan nyaman saat dipakai\r\n? Terdapat 2 kantung di bagian samping\r\nSize : All Size L fit to XL (P 69 cm, L 54 cm)\r\n\r\nStock warna yang ready :\r\n- BOMBER FLEECE BLACK GREY\r\n- BOMBER FLEECE GREY BLACK\r\n*) Untuk warna bahan tidak selalu sama 100% dengan gambar karena efek cahaya dan tergantung pada stock bahan di pasaran.\r\n\r\n>> HARAP CANTUMKAN KETERANGAN ORDER SEBELUM TRANSAKSI AGAR TIDAK DIKRIM RANDOM<<\r\nCONTOH : - BOMBER FLEECE BLACK GREY\r\n\r\nWARNING:\r\nFoto produk adalah copyright dari toko kami. Penggunaan Poto secara komersil tanpa seizin kami akan kami proses secara hukum. Untuk reseller mohon chat sebelum share Poto ini.\r\n\r\nNOTE :\r\n• Stock barang di varian selalu ready. Jika tidak ada di varian, maka stock barang tersebut kosong.\r\n• Pesanan yang telah diverifikasi Tokopedia pada Hari Senin-Jum’at sebelum jam 17.00 WIB dan Hari Sabtu sebelum jam 15.00 WIB akan dikirimkan di hari yang sama, jika lebih dari itu akan di proses sehari setelahnya.\r\n• Minggu kami off pengiriman, jika sudah transfer dan order, barang akan dikirim di Hari Senin.\r\n• Resi muncul H+1 pengiriman.\r\n• Jika stock barang yang di varian kosong, maka akan kami konfirmasi terlebih dahulu di hari yang sama. Jika tidak ada respon atau jawaban, maka akan kami kirim random.\r\n\r\nMENERIMA ORDERAN DAN PEMESANAN CUSTOM DALAM JUMLAH BESAR (MINIMAL 50 PCS).\r\nUNTUK INFORMASI LEBIH LANJUT SILAHKAN HUBUNGI ADMIN CHAT KAMI\r\n\r\nHAPPY SHOPPING ^.^ ', 2),
(5, 'JBL GO - Hitam', 799000, 'Please choose the colors as the variants show.\r\n\r\nDevice Compatibility\r\nBluetoothYes\r\nGeneral Specifications\r\nWeight (kg)130 g\r\nBluetooth version4.1\r\nSupport:A2DP V1.2, AVRCP V1.4, HFP V1.6, HSP V1.2Yes\r\nAudio Specifications\r\nTransducer1 x 40mm\r\nOutput power3.0W\r\nFrequency response180Hz – 20kHz\r\nSignal-to-noise ratio?80dB\r\nDimensions\r\nDimensions (H x W x D)68.3 x 82.7 x 30.8 (mm)\r\nWeight130g\r\nBattery\r\nBattery typeLithium-ion polymer (3.7V, 600mAh)\r\nBattery charge time1.5 hours\r\nMusic playing timeup to 5 hours (varies by volume level and audio content) ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk_kategori`
--

CREATE TABLE `tb_produk_kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk_kategori`
--

INSERT INTO `tb_produk_kategori` (`id`, `nama`) VALUES
(1, 'Elektronik'),
(2, 'Fashion');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` varchar(1) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `paypal_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `email`, `tgl_lahir`, `gender`, `alamat`, `kota`, `telp`, `paypal_id`) VALUES
(1, 'safriansah', '81dc9bdb52d04dc20036dbd8313ed055', 'safriansah.if@gmail.com', '1997-04-03', 'L', 'jalan kaki lah', 'surabaya', '085333333333', '018249182938129');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_produk_kategori`
--
ALTER TABLE `tb_produk_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_produk_kategori`
--
ALTER TABLE `tb_produk_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
