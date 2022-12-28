-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2022 at 04:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `analisa_hasil`
--

CREATE TABLE `analisa_hasil` (
  `id` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` char(15) NOT NULL,
  `umur` varchar(3) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kd_penyakit` char(4) DEFAULT NULL,
  `tanggal` datetime NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `analisa_hasil`
--

INSERT INTO `analisa_hasil` (`id`, `nama`, `jk`, `umur`, `alamat`, `kd_penyakit`, `tanggal`, `email`) VALUES
(1, 'M. Oki Mualimin', 'Laki-laki', '29', 'Cilincing', 'P005', '2022-11-30 23:25:27', ''),
(2, 'Pasien 2', 'Wanita', '26', 'Cilincing', 'P001', '2022-12-02 19:44:53', ''),
(3, 'Pasien 2', 'Wanita', '26', 'Cilincing', 'P005', '2022-12-02 19:44:53', ''),
(4, 'Coba 1', 'Laki-laki', '30', 'Cilincing', 'P002', '2022-12-02 19:46:49', ''),
(5, 'Coba 1', 'Laki-laki', '30', 'Cilincing', 'P003', '2022-12-02 19:46:49', ''),
(6, 'Coba 1', 'Laki-laki', '30', 'Cilincing', 'P004', '2022-12-02 19:46:49', ''),
(7, 'M. Oki Mualimin', 'Wanita', '45', 'Lebaksiu', 'P005', '2022-12-10 07:45:12', '');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `kd_gejala` char(4) NOT NULL,
  `nama_gejala` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`kd_gejala`, `nama_gejala`) VALUES
('G001', 'Sering Buang Air Kecil'),
('G002', 'Gampang Haus'),
('G003', 'Cepat Lapar'),
('G004', 'Berat Badan Turun Drastis'),
('G005', 'Kulit Kering'),
('G006', 'Luka Susah Sembuh'),
('G007', 'Gangguan Penglihatan'),
('G008', 'Kesemutan'),
('G009', 'Sesak Napas'),
('G010', 'Lemas'),
('G011', 'Nyeri Dada'),
('G012', 'Keringat Dingin'),
('G014', 'Terasa Tertekan Dibagian Dada'),
('G015', 'Batuk Lebih Dari 2 Minggu'),
('G016', 'Sputum (Batuk Berdahak)'),
('G017', 'Kadang Disertai Mengi'),
('G018', 'Susah Tidur'),
('G019', 'Mudah Lelah'),
('G020', 'Depresi'),
('G021', 'Sakit Kepala'),
('G022', 'Rasa Mual Atau Muntah'),
('G023', 'Merasa Cemas/gelisah'),
('G024', 'Mimisan'),
('G025', 'Detak Jantung Tak Beraturan'),
('G026', 'Mudah Marah'),
('G029', 'Lemah Pada Otot-otot Wajah'),
('G030', 'Kesulitan Mengangkat Kedua Tangan'),
('G031', 'Kesulitan Berbicara'),
('G032', 'Kebas Pada Setengah Badan'),
('G033', 'Tremor/gemeteran'),
('G034', 'Sulit Menelan');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `kd_penyakit` char(4) NOT NULL,
  `nama_penyakit` varchar(50) DEFAULT NULL,
  `definisi` text DEFAULT NULL,
  `solusi` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`kd_penyakit`, `nama_penyakit`, `definisi`, `solusi`) VALUES
('P001', 'Hipertensi', 'Hipertensi adalah salah satu jenis Penyakit kelainan jantung dan pembuluh darah yg ditandai dengan peningkatan tekanan darah(darah tinggi). Kondisi saat tekanan darah berada pada nilai 130/80 mmHg atau lebih. Kondisi ini dapat menjadi berbahaya, karena jantung dipaksa memompa darah lebih keras ke seluruh tubuh, hingga bisa mengakibatkan timbulnya berbagai penyakit, seperti gagal ginjal, stroke, dan gagal jantung.', '1) Membatasi asupan garam, perbanyak sayur; \r\n2) Perbanyak olahraga kardio seperti berjalan rutin atau olahraga jalan cepat; \r\n3) Perbanyak mengkonsumsi kentang untuk mengontrol tekanan darah; \r\n4) Melakukan terapi relaksasi untuk mengelola stress, seperti yoga/meditas; \r\n5) Mengurangi asupan kabohidrat dan gula; \r\n6) Berhenti minum alkohol dan merokok; \r\n'),
('P002', 'Jantung Koroner', 'Jantung Koroner merupakan gangguan fungsi jantung akibat otot jantung kekurangan darah dikarenakan penyumbatan atau penyempitan pada pembuluh darah koroner akibat kerusakan dinding pembuluh darah (aterosklerosis). ', '1) Katerisasi jantung; \r\n2) Pemasangan ring jantung; \r\n3) Dilakukan bypass dengan menggunakan cangkok pembuluh darah baru dari organ tubuh kita; \r\n4) Memeriksa kesehatan secara rutin; \r\n5) Diet dengan gizi seimbang; \r\n6) Hindari asap rokok, alkohol; \r\n7) Istirahat dengan cukup, tidur 7-8 jam sehari; \r\n'),
('P003', 'Diabetes Militus', 'Diabetes melitus atau penyakit kencing manis adalah suatu penyakit kronis ketika kadar gula darah (glukosa) di dalam tubuh terlampau tinggi dan berada di atas normal. ', '1) Menjaga pola hidup sehat; \r\n2) Mengurangi makanan tinggi karbohidrat dan lemak; \r\n3) Perbanyak makanan tinggi serat; \r\n4) Meningkatkan aktivitas fisik dengan bberolahraga teratur 30–45 menit sehari sebanyak 3-5 kali per minggu; \r\n5) Menurunkan berat badan; \r\n'),
('P004', 'Paru Ekstruktif Kronik', 'Penyakit Paru Obstruksi Kronik atau sering disingkat PPOK merupakan suatu istilah yang sering digunakan untuk sekelompok penyakit paru-paru yang berlangsung lama.  Penyakit ini menghalangi aliran udara sehingga menyebabkan penderita mengalami kesulitan dalam bernafas.', '1) Berhenti merokok secara aktif maupun pasif; \r\n2) Memakai alat pelindung diri, contoh masker; \r\n3) Mengkonsumsi makanan bergizi; \r\n4) Pemeriksaan fisik secara rutin; \r\n'),
('P005', 'Stroke', 'Stoke merupakan kondisi yang terjadi ketika pasokan darah ke otak mengalami gangguan atau berkurang akibat penyumbatan (stroke iskemik) atau pecahnya pembuluh darah (stroke hemoragik). Tanpa pasokan darah, otak tidak akan mendapatkan asupan oksigen dan nutrisi, sehingga sel-sel pada sebagian area otak akan mati. Kondisi ini menyebabkan bagian tubuh yang dikendalikan oleh area otak yang rusak tidak dapat berfungsi dengan baik.', '1) Menjaga pola makan; \r\n2) Rutin berolahraga;\r\n3) Berhenti dan hindari rokok dan minuman beralkohol; \r\n4) Segera periksa ke dokter; \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `relasi`
--

CREATE TABLE `relasi` (
  `id_relasi` int(4) NOT NULL,
  `kd_gejala` char(4) NOT NULL,
  `kd_penyakit` char(4) NOT NULL,
  `bobot` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relasi`
--

INSERT INTO `relasi` (`id_relasi`, `kd_gejala`, `kd_penyakit`, `bobot`) VALUES
(1, 'G021', 'P001', 1),
(2, 'G007', 'P001', 1),
(3, 'G011', 'P001', 1),
(4, 'G022', 'P001', 1),
(5, 'G023', 'P001', 1),
(6, 'G019', 'P001', 1),
(7, 'G024', 'P001', 1),
(8, 'G025', 'P001', 1),
(9, 'G001', 'P001', 1),
(10, 'G026', 'P001', 1),
(11, 'G001', 'P003', 1),
(12, 'G009', 'P002', 1),
(13, 'G010', 'P002', 1),
(14, 'G011', 'P002', 1),
(15, 'G012', 'P002', 1),
(16, 'G022', 'P002', 1),
(17, 'G014', 'P002', 1),
(18, 'G002', 'P003', 1),
(19, 'G003', 'P003', 1),
(20, 'G004', 'P003', 1),
(21, 'G005', 'P003', 1),
(22, 'G006', 'P003', 1),
(23, 'G007', 'P003', 1),
(24, 'G008', 'P003', 1),
(25, 'G009', 'P004', 1),
(26, 'G015', 'P004', 1),
(27, 'G016', 'P004', 1),
(28, 'G017', 'P004', 1),
(29, 'G010', 'P004', 1),
(30, 'G018', 'P004', 1),
(31, 'G019', 'P004', 1),
(32, 'G020', 'P004', 1),
(33, 'G004', 'P004', 1),
(34, 'G029', 'P005', 1),
(35, 'G030', 'P005', 1),
(36, 'G031', 'P005', 1),
(37, 'G008', 'P005', 1),
(38, 'G032', 'P005', 1),
(39, 'G033', 'P005', 1),
(40, 'G022', 'P005', 1),
(41, 'G021', 'P005', 1),
(42, 'G034', 'P005', 1),
(43, 'G007', 'P005', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_gejala`
--

CREATE TABLE `tmp_gejala` (
  `id_temp_gjl` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `tmpkd_gejala` char(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_pasien`
--

CREATE TABLE `tmp_pasien` (
  `id` int(4) NOT NULL,
  `id_user` int(5) NOT NULL,
  `jk` char(10) NOT NULL,
  `umur` varchar(3) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role` int(2) NOT NULL,
  `foto` varchar(40) DEFAULT NULL,
  `dibuat` timestamp NULL DEFAULT NULL,
  `diubah` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_lengkap`, `email`, `no_hp`, `password`, `role`, `foto`, `dibuat`, `diubah`) VALUES
(8, 'Admin', 'admin@gmail.com', '081563916752', '$2y$10$ke0.y4qcjGJ5WEa.vxxFdOr7XZUO41TwMhjTjnsQaLGK4aJr3BvEe', 0, 'Foto_User221121-6a62f90543.png', '2022-10-15 05:24:55', '2022-11-21 05:41:41'),
(9, 'M. Oki Mualimin', 'pasien1@gmail.com', '085226351703', '$2y$10$Ne8wIMZwO9OzMSHXfldRUe0g7g.nQQW6M8uStwdPDg/OI4aorxG8a', 1, 'Foto_User221105-611603f6bc.png', '2022-10-15 05:25:33', '2022-11-23 03:54:17'),
(11, 'Pasien 2', 'pasien2@gmail.com', '123', '$2y$10$IAjZEmL8MvInrsHqwTXB8u1/zPb4fnRMulOyfB8Trxr.7orSIdwkG', 1, NULL, '2022-11-01 06:02:21', '2022-11-28 14:07:11'),
(16, 'Metamorfosa', 'agus@gmail.com', '8979156600', '$2y$10$sv6Jq6IHEJlbmoOJ/hPO1edEd8iLU6DXzRsYfCSKytyqU076fVqKu', 1, NULL, '2022-11-30 02:31:16', NULL),
(17, 'Coba 1', 'cobaca@gmail.com', '989898', '$2y$10$Dn0e2A6PInmKaZI4MmE13OHJZ9mvGm3P0y38gvBXKKDFGx4AjM.ri', 1, NULL, '2022-11-30 03:10:23', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analisa_hasil`
--
ALTER TABLE `analisa_hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kd_gejala`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`kd_penyakit`);

--
-- Indexes for table `relasi`
--
ALTER TABLE `relasi`
  ADD PRIMARY KEY (`id_relasi`);

--
-- Indexes for table `tmp_gejala`
--
ALTER TABLE `tmp_gejala`
  ADD PRIMARY KEY (`id_temp_gjl`);

--
-- Indexes for table `tmp_pasien`
--
ALTER TABLE `tmp_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analisa_hasil`
--
ALTER TABLE `analisa_hasil`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `relasi`
--
ALTER TABLE `relasi`
  MODIFY `id_relasi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tmp_gejala`
--
ALTER TABLE `tmp_gejala`
  MODIFY `id_temp_gjl` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tmp_pasien`
--
ALTER TABLE `tmp_pasien`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
