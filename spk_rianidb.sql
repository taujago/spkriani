-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2019 at 01:23 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spk_rianidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE IF NOT EXISTS `gejala` (
  `id` int(11) NOT NULL,
  `gejala` varchar(255) NOT NULL,
  `kode` varchar(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=321 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `gejala`, `kode`) VALUES
(269, 'Demam mendadak', 'G001'),
(270, 'Menggigil', 'G002'),
(271, 'Muka kemerahan', 'G003'),
(272, 'Mual', 'G004'),
(273, 'Muntah', 'G005'),
(274, 'Nyeri punggung', 'G006'),
(275, 'Sakit kepala', 'G007'),
(276, 'Fotofobia', 'G008'),
(277, 'Bercak merah pada kulit', 'G009'),
(278, 'Nyeri sendi', 'G010'),
(279, 'Panas tinggi secara tiba-tiba', 'G011'),
(280, 'Tidak nafsu makan', 'G012'),
(281, 'Badan lemas', 'G013'),
(282, 'Gangguan abdomen', 'G014'),
(283, 'Nyeri seluruh tubuh', 'G015'),
(284, 'Pendarahan pada kulit, gusi, dan hidung ', 'G016'),
(285, 'Kejang', 'G017'),
(286, 'Batuk', 'G018'),
(287, 'Syndrom shock dengue', 'G019'),
(288, 'tekanan darah menurun', 'G020'),
(289, 'Demam tinggi', 'G021'),
(290, 'Radang saluran getah bening', 'G022'),
(291, 'Demam selama beberapa hari', 'G023'),
(292, 'Menggigil dan berkeringat', 'G024'),
(293, 'Nyeri otot', 'G025'),
(294, 'Pembengkakakan kelenjar getah bening', 'G026'),
(295, 'Ketiak tampak kemerahan', 'G027'),
(296, 'Pembesaran tungkai', 'G028'),
(297, 'Pembesaran buah dada (pada wanita)', 'G029'),
(298, 'Pembesaran buah zakar (pada pria)', 'G030'),
(299, 'Mata merah', 'G031'),
(300, 'Urine warna gelap', 'G032'),
(301, 'Produksi urine berkurang', 'G033'),
(302, 'Diare pada anak', 'G034'),
(303, 'Denyut nadi melambat', 'G035'),
(304, 'Gangguan berbicara dan berjalan', 'G036'),
(305, 'Kejang 75% pada anak', 'G037'),
(306, 'Perubahan status mental', 'G038'),
(307, 'Gangguan sistem motorik', 'G039'),
(308, 'Iritabilitas pada anak', 'G040'),
(309, 'Sakit mata', 'G041'),
(310, 'Flu', 'G042'),
(311, 'Lumpuh', 'G043'),
(312, 'Koma', 'G044'),
(313, 'demam ringan timbul hilang', 'G045'),
(314, 'Mengantuk', 'G046'),
(315, 'Mengigau (delirium)', 'G047'),
(316, 'Tidak enak badan', 'G048'),
(317, 'Lelah disertai menggigil dan demam', 'G049'),
(318, 'Sakit kepala hebat', 'G050'),
(319, 'Anemia', 'G051'),
(320, 'Gatal-gatal', 'G052');

-- --------------------------------------------------------

--
-- Table structure for table `kemiripan`
--

CREATE TABLE IF NOT EXISTS `kemiripan` (
  `id` int(11) NOT NULL,
  `gejala_id_1` int(11) NOT NULL,
  `gejala_id_2` int(11) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kemiripan`
--

INSERT INTO `kemiripan` (`id`, `gejala_id_1`, `gejala_id_2`, `bobot`) VALUES
(1, 121, 121, 1),
(2, 121, 136, 0.5),
(3, 121, 125, 0.75),
(4, 125, 125, 1),
(5, 125, 136, 0.25),
(6, 125, 121, 0.75),
(7, 136, 136, 1),
(8, 136, 125, 0.25),
(9, 136, 121, 0.5),
(10, 122, 122, 1),
(11, 122, 149, 0.5),
(12, 149, 149, 1),
(13, 149, 122, 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE IF NOT EXISTS `konsultasi` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `waktu` datetime NOT NULL,
  `pesan` text NOT NULL,
  `pemeriksaan_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id`, `user_id`, `waktu`, `pesan`, `pemeriksaan_id`) VALUES
(2, 11, '2019-05-29 12:57:09', 'saya bingung dok. kenapa kok sakit sekali di mata saya ', 36),
(3, 11, '2019-05-29 12:59:34', 'saya tidak tau do. kenap tiba tiba kepala saya bengkak dan bernanah ', 36),
(4, 11, '2019-05-29 12:59:49', 'saya tidak tau do. kenap tiba tiba kepala saya bengkak dan bernanah ', 36),
(6, 1, '2019-05-29 01:05:19', 'hmm.. sebaiknya anda melakukan ini dan itu ', 0),
(7, 1, '2019-05-29 01:06:47', 'helo helo ', 0),
(8, 1, '2019-05-29 01:08:23', 'helo halo ', 0),
(9, 1, '2019-05-29 01:10:47', 'coba lagi ahh', 0),
(10, 1, '2019-05-29 01:11:48', 'mbalala', 36),
(11, 1, '2019-05-29 01:12:09', 'mbalala', 36),
(12, 9, '2019-05-29 01:14:13', 'saya harap anda tidak sungkan sungkan ', 37),
(13, 9, '2019-05-29 01:29:11', 'oke. teirma kasih karena telah berbelanja di toko kami ', 37),
(14, 1, '2019-05-29 01:29:43', 'kenapa anda bisa seperti itu ? ', 37),
(15, 9, '2019-05-29 01:31:08', 'saya sudah pesan ke mereka supaya jangan dikucek matanya. ', 37),
(16, 1, '2019-05-29 01:31:36', 'saya kira anda tidak akan dipermasalahkan oleh mereka. baiklah kalo begit ', 37);

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE IF NOT EXISTS `pemeriksaan` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `penyakit_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`id`, `tanggal`, `user_id`, `penyakit_id`) VALUES
(49, '2019-06-10', 1, 59),
(50, '2019-06-10', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan_detail`
--

CREATE TABLE IF NOT EXISTS `pemeriksaan_detail` (
  `id` int(11) NOT NULL,
  `pemeriksaan_id` int(11) NOT NULL,
  `gejala_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=219 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeriksaan_detail`
--

INSERT INTO `pemeriksaan_detail` (`id`, `pemeriksaan_id`, `gejala_id`) VALUES
(206, 49, 269),
(207, 49, 270),
(208, 49, 271),
(209, 49, 272),
(210, 49, 273),
(211, 49, 274),
(212, 49, 275),
(213, 49, 276),
(214, 49, 277),
(215, 49, 278),
(216, 50, 271),
(217, 50, 291),
(218, 50, 298);

-- --------------------------------------------------------

--
-- Table structure for table `pengetahuan`
--

CREATE TABLE IF NOT EXISTS `pengetahuan` (
  `id` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=404 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengetahuan`
--

INSERT INTO `pengetahuan` (`id`, `id_penyakit`, `id_gejala`) VALUES
(394, 59, 269),
(395, 59, 270),
(396, 59, 271),
(397, 59, 272),
(398, 59, 273),
(399, 59, 274),
(400, 59, 275),
(401, 59, 276),
(402, 59, 277),
(403, 59, 278),
(365, 62, 217),
(366, 63, 217);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `level` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `jk` varchar(2) NOT NULL,
  `umur` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `level`, `nama`, `hp`, `alamat`, `jk`, `umur`) VALUES
(1, 'admin', '0cc175b9c0f1b6a831c399e269772661', 1, 'Aministrator', '08132945559', 'Jl. kenair no. 343', 'L', 0),
(7, 'budi', '0cc175b9c0f1b6a831c399e269772661', 0, 'Firmansyah', '0813280800', 'jl. kenari no. 34', 'L', 20),
(8, 'bejo', '7fc56270e7a70fa81a5935b72eacbe29', 0, 'Bejo sandix', '0813243595', 'Jl. keramat jadixxx', 'P', 40),
(9, 'heri', '0cc175b9c0f1b6a831c399e269772661', 0, 'Heru hendriyadi', '45838538r3985', 'Jl. undru no. 4', 'P', 40),
(10, 'heru', '0cc175b9c0f1b6a831c399e269772661', 0, 'Heru hendriyadi', '083848583', 'Jl. kenari no. 345', 'L', 3),
(11, 'eko', '0cc175b9c0f1b6a831c399e269772661', 0, 'Eko kurniawan', '03895935893', 'Jl. kenari no. 335', 'L', 25),
(12, 'naruto', '0cc175b9c0f1b6a831c399e269772661', 0, 'Firmansyah', '08132485858', 'JL. lingkar utara no 345', 'L', 23);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE IF NOT EXISTS `penyakit` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `penyakit` varchar(255) NOT NULL,
  `penanganan` text NOT NULL,
  `pencegahan` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `kode`, `penyakit`, `penanganan`, `pencegahan`, `gambar`) VALUES
(59, 'P1', 'Chikungunya', 'Penangnagn 1 ', 'Pencegahan ', 'sharinggan1.jpg'),
(60, 'P2', 'Demam Berdarah Dengue (DBD)', 'faf', 'fdfds', '32fe1ba3-d8bd-4c99-8415-9dc69587fdf83.jpg'),
(61, 'P3', 'Kaki Gajah', '', '', 'bencanaalam.jpg'),
(62, 'P4', 'Demam Kuning', '', '', ''),
(63, 'P5', 'Radang Otak', '', '', ''),
(64, 'P6', 'Virus West Nile', '', '', ''),
(65, 'P7', 'Virus Zika', '', '', ''),
(66, 'P8', 'Malaria Tertiana', '', '', ''),
(67, 'P9', 'Malaria Quartana', '', '', ''),
(68, 'P10', 'Malaria Tropica', '', '', ''),
(71, '2424', 'asdfaddsaf', 'fsdafdsadfd', 'fsafsda', ''),
(72, '342', 'fafd', 'fad', 'fdafd', 'logo-lantas-baru12.png');

-- --------------------------------------------------------

--
-- Table structure for table `tmp`
--

CREATE TABLE IF NOT EXISTS `tmp` (
  `id_penyakit` int(11) NOT NULL,
  `skor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp`
--

INSERT INTO `tmp` (`id_penyakit`, `skor`) VALUES
(1, 0.0666667),
(53, 0.0666667),
(54, 0.0666667),
(55, 0.0666667),
(56, 0.0666667),
(57, 0.0666667),
(58, 0.0666667),
(2, 0.0666667),
(4, 0.0666667),
(5, 0.0666667),
(6, 0.0666667),
(44, 0.0666667),
(50, 0.0666667),
(51, 0.0666667),
(52, 0.0666667);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kemiripan`
--
ALTER TABLE `kemiripan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemeriksaan_detail`
--
ALTER TABLE `pemeriksaan_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pemeriksaan` (`pemeriksaan_id`);

--
-- Indexes for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_penyakit` (`id_penyakit`,`id_gejala`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=321;
--
-- AUTO_INCREMENT for table `kemiripan`
--
ALTER TABLE `kemiripan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `pemeriksaan_detail`
--
ALTER TABLE `pemeriksaan_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=219;
--
-- AUTO_INCREMENT for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=404;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=73;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemeriksaan_detail`
--
ALTER TABLE `pemeriksaan_detail`
  ADD CONSTRAINT `fk_pemeriksaan` FOREIGN KEY (`pemeriksaan_id`) REFERENCES `pemeriksaan` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
