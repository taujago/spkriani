-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2019 at 07:53 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=268 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `gejala`, `kode`) VALUES
(217, 'Demam berulang-ulang selama 3-5 hari', 'G001'),
(218, 'Demam timbul-hilang', 'G002'),
(219, 'Pembengkakan kelenjar getah bening', 'G003'),
(220, 'Radang saluran kelenjar getah bening', 'G004'),
(221, 'Pembesaran tungkai', 'G005'),
(222, 'Pembesaran buah zakar', 'G006'),
(223, 'Pembesaran buah dada ', 'G007'),
(224, 'Panas dan sakit', 'G008'),
(225, 'Ketiak tampak kemerah-merahan', 'G009'),
(226, 'Menggigil dan berkeringat', 'G010'),
(227, 'Sakit kepala', 'G011'),
(228, 'Muntah', 'G012'),
(229, 'Mual', 'G013'),
(230, 'Nyeri otot', 'G014'),
(231, 'Demam tinggi mendadak 2-7 hari ', 'G015'),
(232, 'Manifestasi pendarahan (hidung, gusi, kulit)', 'G016'),
(233, 'Pembesaran hati (hepatomegali)', 'G017'),
(234, 'Syok', 'G018'),
(235, 'Tekanan darah menurun', 'G019'),
(236, 'Ruam (bercak merah pada kulit)', 'G020'),
(237, 'Nyeri seluruh tubuh', 'G021'),
(238, 'Menggigil ', 'G022'),
(239, 'Tidak nafsu makan', 'G023'),
(240, 'Mata merah', 'G024'),
(241, 'Kejang demam untuk anak-anak', 'G025'),
(242, 'Nyeri sendi', 'G026'),
(243, 'Kelumpuhan sementara (susah berjalan)', 'G027'),
(244, 'Fotofobia', 'G028'),
(245, 'Pegal-pegal dan gilu', 'G029'),
(246, 'Rasa sakit pada tulang-tulang', 'G030'),
(247, 'Muka kemerahan', 'G031'),
(248, 'Ikterus', 'G032'),
(249, 'Urine berwarna gelap', 'G033'),
(250, 'Produksi urin berkurang', 'G034'),
(251, 'Diare', 'G035'),
(252, 'Denyut nadi melambat', 'G036'),
(253, 'Gangguan berbicara dan berjalan', 'G037'),
(254, 'Perubahan status mental', 'G038'),
(255, 'Iritabilitas pada anak', 'G039'),
(256, 'Peningkanan tekanan intrakrarial', 'G040'),
(257, 'Gangguan sistem motorik', 'G041'),
(258, 'Batuk', 'G042'),
(259, 'Sakit mata', 'G043'),
(260, 'Flu', 'G044'),
(261, 'Lumpu', 'G045'),
(262, 'Koma', 'G046'),
(263, 'Gatal-gatal', 'G047'),
(264, 'Demam berhari-hari', 'G048'),
(265, 'Panas Tinggi secara tiba-tiba', 'G049'),
(266, 'Nyeri punggung', 'G050'),
(267, 'Sakit kepala hebat', 'G051');

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
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`id`, `tanggal`, `user_id`, `penyakit_id`) VALUES
(44, '2019-05-30', 1, 4),
(45, '2019-06-10', 12, 0),
(46, '2019-06-10', 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan_detail`
--

CREATE TABLE IF NOT EXISTS `pemeriksaan_detail` (
  `id` int(11) NOT NULL,
  `pemeriksaan_id` int(11) NOT NULL,
  `gejala_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=192 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeriksaan_detail`
--

INSERT INTO `pemeriksaan_detail` (`id`, `pemeriksaan_id`, `gejala_id`) VALUES
(184, 44, 149),
(185, 44, 123),
(186, 45, 220),
(187, 45, 221),
(188, 45, 222),
(189, 46, 220),
(190, 46, 221),
(191, 46, 222);

-- --------------------------------------------------------

--
-- Table structure for table `pengetahuan`
--

CREATE TABLE IF NOT EXISTS `pengetahuan` (
  `id` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=374 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengetahuan`
--

INSERT INTO `pengetahuan` (`id`, `id_penyakit`, `id_gejala`) VALUES
(373, 59, 217),
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
(59, 'P1', 'Chikungunya', 'Penangnagn 1 ', 'Pencegahan ', 'sharinggan.jpg'),
(60, 'P2', 'Demam Berdarah Dengue (DBD)', 'faf', 'fdfds', '32fe1ba3-d8bd-4c99-8415-9dc69587fdf83.jpg'),
(61, 'P3', 'Kaki Gajah', '', '', ''),
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
-- Table structure for table `referensi`
--

CREATE TABLE IF NOT EXISTS `referensi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` float NOT NULL,
  `jk` char(2) NOT NULL,
  `penyakit_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referensi`
--

INSERT INTO `referensi` (`id`, `nama`, `umur`, `jk`, `penyakit_id`) VALUES
(4, 'Budi', 34, 'L', 1),
(5, 'Herman', 30, 'L', 2);

-- --------------------------------------------------------

--
-- Table structure for table `referensi_detail`
--

CREATE TABLE IF NOT EXISTS `referensi_detail` (
  `id` int(11) NOT NULL,
  `gejala_id` int(11) NOT NULL,
  `referensi_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referensi_detail`
--

INSERT INTO `referensi_detail` (`id`, `gejala_id`, `referensi_id`) VALUES
(9, 133, 5),
(10, 134, 5),
(11, 122, 5),
(12, 150, 5),
(13, 124, 5),
(18, 122, 4),
(19, 141, 4),
(20, 123, 4);

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
-- Indexes for table `referensi`
--
ALTER TABLE `referensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referensi_detail`
--
ALTER TABLE `referensi_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=268;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `pemeriksaan_detail`
--
ALTER TABLE `pemeriksaan_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=192;
--
-- AUTO_INCREMENT for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=374;
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
-- AUTO_INCREMENT for table `referensi`
--
ALTER TABLE `referensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `referensi_detail`
--
ALTER TABLE `referensi_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
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
