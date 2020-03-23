-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2020 at 10:15 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orari-lokal-yogyakarta`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `year` year(4) DEFAULT NULL,
  `purchase` int(11) DEFAULT NULL,
  `sale` int(11) DEFAULT NULL,
  `profit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `year`, `purchase`, `sale`, `profit`) VALUES
(1, 2013, 2000, 3000, 1000),
(2, 2014, 4500, 5000, 500),
(3, 2015, 3000, 4500, 1500),
(4, 2016, 2000, 3000, 1000),
(5, 2017, 2000, 4000, 2000),
(6, 2018, 2200, 3000, 800),
(7, 2019, 5000, 7000, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `barang_id` int(11) NOT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `merk` varchar(30) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`barang_id`, `nama_barang`, `merk`, `stok`) VALUES
(1, 'Aqua 1', 'Aqua', 20),
(2, 'Aqua 2', 'Aqua', 10),
(3, 'Aqua 3', 'Aqua', 30),
(4, 'Aqua 4', 'Aqua', 40),
(5, 'Aqua 5', 'Aqua', 5),
(6, 'Wardah 1', 'Wardah', 10),
(7, 'Wardah 2', 'Wardah', 20),
(8, 'Wardah 3', 'Wardah', 10),
(9, 'Wardah 4', 'Wardah', 50),
(10, 'Inez 1', 'Inez', 10),
(11, 'Inez 2', 'Inez', 30),
(12, 'VIva 1', 'Viva', 30),
(13, 'Coca-Cola 1', 'Coca-cola', 10),
(14, 'Coca-Cola 2', 'Coca-cola', 10),
(15, 'Coca-Cola 3', 'Coca-cola', 30);

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id` int(11) NOT NULL,
  `callsign` varchar(50) NOT NULL,
  `checkin` varchar(500) NOT NULL,
  `kategori` int(11) DEFAULT NULL,
  `counter` int(9) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `status` enum('active','inactive','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id`, `callsign`, `checkin`, `kategori`, `counter`, `file`, `status`) VALUES
(1, 'dadas', '22/22/2222', 2, 8, '508235701.pdf', 'active'),
(2, 'qwerty', '22/22/2222', 1, 3, 'xu2010.pdf', 'active'),
(3, 'zxcvbnm', '22/22/2222', 3, 19, 'mirwan2018_2.pdf', 'active'),
(4, 'yuiop', '22/22/2222', 4, 11, 'users1.pdf', 'active'),
(6, 'zczzbm', '22/22/2222', 4, 1, 'keyboard-shortcuts-windows2.pdf', 'active'),
(7, 'qwerty', '2020-03-23', 3, 1, 'Manajemen_Strategik___Dampak_Covid-19.pdf', 'active'),
(8, 'qwerty', '2020-03-23', 2, 1, 'Manajemen_Strategik___Dampak_Covid-191.pdf', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `identitas_web`
--

CREATE TABLE `identitas_web` (
  `id_identitas` int(11) NOT NULL,
  `nama_web` varchar(255) NOT NULL,
  `meta_deskripsi` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `copyright` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas_web`
--

INSERT INTO `identitas_web` (`id_identitas`, `nama_web`, `meta_deskripsi`, `meta_keyword`, `copyright`, `logo`) VALUES
(1, 'Nikah Framework', 'Aplikasi untuk  ngumpulin mahar', 'aplikasi nafkah', 'KokNgoding?', './uploads/13fcbd8ec34c8bc78c1fef1e3f37eb1b.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` enum('active','inactive','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `status`) VALUES
(1, 'HF 40 M - Phone', 'active'),
(2, 'Hf 40 M - CW', 'active'),
(3, 'Hf 40 M - FT 8', 'active'),
(4, 'VHF 2 M', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `landing`
--

CREATE TABLE `landing` (
  `id` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `tentang` varchar(500) NOT NULL,
  `visi` varchar(500) NOT NULL,
  `misi` varchar(500) NOT NULL,
  `juknsi` varchar(100) NOT NULL,
  `izin` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telpon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `landing`
--

INSERT INTO `landing` (`id`, `nama_perusahaan`, `deskripsi`, `tentang`, `visi`, `misi`, `juknsi`, `izin`, `alamat`, `email`, `telpon`) VALUES
(1, 'ORARI LOKAL KOTA YOGYAKARTA', 'SPECIAL CALL HUT KOTA YOGYAKARTA KE 263 TAHUN 2019\r\n8G263YOG\r\nORARI LOKAL KOTA YOGYAKARTA\r\nFREKUENSI:\r\nHF 40 M - Phone : Frekuensi 7.155 Mhz\r\nHF 40 M - CW : Frekuensi 7.010 - 7.025 Mhz\r\nHF 40 M - FT 8 : Frekuensi 7.074 Mhz\r\nVHF 2 M : Frekuensi 145.500 Mhz\r\nPERTUKARAN REPORT:\r\nPhone: Callsign + report signal + Ucapan “Selamat HUT Kota Yogyakarta Ke – 263” CW / FT8: Callsign + Rst\r\nSERTIFIKAT DAPAT DIUNDUH DISINI', 'SPECIAL CALL HUT KOTA YOGYAKARTA KE 263 TAHUN 2019\r\n8G263YOG\r\nORARI LOKAL KOTA YOGYAKARTA\r\nFREKUENSI:\r\nHF 40 M - Phone : Frekuensi 7.155 Mhz\r\nHF 40 M - CW : Frekuensi 7.010 - 7.025 Mhz\r\nHF 40 M - FT 8 : Frekuensi 7.074 Mhz\r\nVHF 2 M : Frekuensi 145.500 Mhz\r\n', 'Menjadi role model pertanian terpadu berorientasi ekspor nomor satu di Jawa Barat pada tahun 2025 Memenuhi 5% kebutuhan pupuk organik untuk sektor perkebunan di seluruh Asia Tenggara', 'Meningkatkan produktivitas lahan pertanian menggunakan sistem pertanian terintegrasi Melakukan riset dan inovasi berkelanjutan untuk menghasilkan pupuk organik yang sesuai dengan daerah tropis Melakukan scale-up sistem produksi pupuk organik secara bertahap hingga memenuhi kuota ekspor', '50823570.pdf', 'users.pdf', 'Yogyakarta', 'admin@orarilokalyogyakarta.com', '083148263597');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(1, '::1', 'nuris.akbar@gmail.com', 1584941998);

-- --------------------------------------------------------

--
-- Table structure for table `log_aktivitas`
--

CREATE TABLE `log_aktivitas` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `aktivitas` varchar(250) DEFAULT NULL,
  `time` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_aktivitas`
--

INSERT INTO `log_aktivitas` (`id`, `id_user`, `aktivitas`, `time`) VALUES
(32, 1, 'Admin telah mengunduh data pada  format pdf', '20-02-2015 15:30:37'),
(33, 1, 'Admin telah menambah data pada menu', '08-03-2020 05:29:12'),
(34, 1, 'Admin telah menambah data pada menu', '08-03-2020 05:30:11'),
(35, 1, 'Admin telah mengubah data pada menu', '08-03-2020 05:30:22'),
(36, 1, 'Admin telah menambah data pada menu', '08-03-2020 05:31:24'),
(37, 1, 'Admin telah menambah data pada menu', '18-03-2020 07:33:12'),
(38, 1, 'Admin telah menambah data pada landing', '18-03-2020 08:20:35'),
(39, 1, 'Admin telah menambah data pada download', '18-03-2020 09:26:33'),
(40, 1, 'Admin telah mengubah data pada landing', '18-03-2020 17:04:47'),
(41, 1, 'Admin telah mengubah data pada landing', '18-03-2020 17:21:34'),
(42, 1, 'Admin telah mengubah data pada landing', '18-03-2020 17:27:58'),
(43, 1, 'Admin telah mengubah data pada landing', '18-03-2020 17:30:04'),
(44, 1, 'Admin telah mengubah data pada landing', '18-03-2020 17:30:15'),
(45, 1, 'Admin telah mengubah data pada landing', '18-03-2020 17:31:10'),
(46, 1, 'Admin telah mengubah data pada landing', '18-03-2020 17:31:21'),
(47, 1, 'Admin telah mengubah data pada landing', '18-03-2020 17:31:40'),
(48, 1, 'Admin telah mengubah data pada landing', '18-03-2020 17:32:21'),
(49, 1, 'Admin telah mengubah data pada landing', '18-03-2020 17:32:48'),
(50, 1, 'Admin telah mengubah data pada landing', '18-03-2020 17:33:12'),
(51, 1, 'Admin telah mengubah data pada landing', '18-03-2020 17:34:24'),
(52, 1, 'Admin telah mengubah data pada landing', '18-03-2020 17:37:44'),
(53, 1, 'Admin telah mengubah data pada landing', '18-03-2020 18:12:23'),
(54, 1, 'Admin telah mengubah data pada landing', '18-03-2020 18:19:36'),
(55, 1, 'Admin telah mengubah data pada landing', '18-03-2020 18:20:09'),
(56, 1, 'Admin telah mengubah data pada landing', '18-03-2020 18:21:05'),
(57, 1, 'Admin telah mengubah data pada landing', '18-03-2020 18:22:35'),
(58, 1, 'Admin telah mengubah data pada landing', '18-03-2020 18:24:01'),
(59, 1, 'Admin telah mengubah data pada landing', '18-03-2020 18:33:04'),
(60, 1, 'Admin telah mengubah data pada landing', '18-03-2020 18:41:01'),
(61, 1, 'Admin telah menambah data pada download', '18-03-2020 19:30:20'),
(62, 1, 'Admin telah menambah data pada menu', '18-03-2020 19:40:27'),
(63, 1, 'Admin telah menambah data pada kategori', '18-03-2020 19:41:13'),
(64, 1, 'Admin telah menambah data pada kategori', '18-03-2020 19:41:41'),
(65, 1, 'Admin telah menambah data pada kategori', '18-03-2020 19:42:04'),
(66, 1, 'Admin telah menambah data pada kategori', '18-03-2020 19:42:28'),
(67, 1, 'Admin telah mengubah data pada download', '18-03-2020 19:44:32'),
(68, 1, 'Admin telah mengubah data pada download', '18-03-2020 19:44:37'),
(69, 1, 'Admin telah menghapus data pada groups', '18-03-2020 19:46:35'),
(70, 1, 'Admin telah mengubah data pada landing', '18-03-2020 19:49:58'),
(71, 1, 'Admin telah mengubah data pada landing', '18-03-2020 19:53:16'),
(72, 1, 'Admin telah mengubah data pada landing', '18-03-2020 19:54:57'),
(73, 1, 'Admin telah mengubah data pada landing', '18-03-2020 19:58:48'),
(74, 1, 'Admin telah mengubah data pada landing', '18-03-2020 20:01:02'),
(75, 1, 'Admin telah mengubah data pada landing', '18-03-2020 20:02:13'),
(76, 1, 'Admin telah mengubah data pada landing', '19-03-2020 00:56:04'),
(77, 1, 'Admin telah mengubah data pada landing', '19-03-2020 17:43:54'),
(78, 1, 'Admin telah mengubah data pada landing', '19-03-2020 17:58:59'),
(79, 1, 'Admin telah mengubah data pada landing', '19-03-2020 18:00:34'),
(80, 1, 'Admin telah mengubah data pada landing', '19-03-2020 18:00:48'),
(81, 1, 'Admin telah mengubah data pada landing', '19-03-2020 18:00:57'),
(82, 1, 'Admin telah mengubah data pada landing', '19-03-2020 18:01:15'),
(83, 1, 'Admin telah mengubah data pada landing', '19-03-2020 18:01:33'),
(84, 1, 'Admin telah mengubah data pada landing', '19-03-2020 18:06:49'),
(85, 1, 'Admin telah menghapus data pada menu', '19-03-2020 18:09:27'),
(86, 1, 'Admin telah menambah data pada menu', '19-03-2020 18:15:13'),
(87, 1, 'Admin telah menambah data pada tanggal_kegiatan', '19-03-2020 18:16:09'),
(88, 1, 'Admin telah menambah data pada waktu_kegiatan', '19-03-2020 18:16:58'),
(89, 1, 'Admin telah mengubah data pada waktu_kegiatan', '19-03-2020 18:17:43'),
(90, 1, 'Admin telah menambah data pada download', '19-03-2020 18:18:30'),
(91, 1, 'Admin telah menambah data pada download', '19-03-2020 18:18:43'),
(92, 1, 'Admin telah menambah data pada waktu_kegiatan', '19-03-2020 18:41:53'),
(93, 1, 'Admin telah mengubah data pada waktu_kegiatan', '19-03-2020 19:05:17'),
(94, 1, 'Admin telah mengubah data pada waktu_kegiatan', '19-03-2020 19:05:26'),
(95, 1, 'Admin telah mengubah data pada waktu_kegiatan', '19-03-2020 19:05:45'),
(96, 1, 'Admin telah mengubah data pada waktu_kegiatan', '19-03-2020 19:06:23'),
(97, 1, 'Admin telah mengubah data pada waktu_kegiatan', '19-03-2020 19:06:29'),
(98, 1, 'Admin telah mengubah data pada waktu_kegiatan', '19-03-2020 19:06:37'),
(99, 1, 'Admin telah mengubah data pada waktu_kegiatan', '19-03-2020 19:07:11'),
(100, 1, 'Admin telah mengubah data pada waktu_kegiatan', '19-03-2020 19:07:17'),
(101, 1, 'Admin telah menambah data pada download', '19-03-2020 19:18:00'),
(102, 1, 'Admin telah menambah data pada download', '19-03-2020 19:21:00'),
(103, 1, 'Admin telah menghapus data pada download', '19-03-2020 19:22:30'),
(104, 1, 'Admin telah mengubah data pada download', '19-03-2020 19:22:38'),
(105, 1, 'Admin telah mengubah data pada download', '19-03-2020 19:22:51'),
(106, 1, 'Admin telah mengubah data pada download', '19-03-2020 19:23:04'),
(107, 1, 'Admin telah mengubah data pada download', '19-03-2020 19:23:20'),
(108, 1, 'Admin telah mengubah data pada download', '19-03-2020 19:24:10'),
(109, 1, 'Admin telah menambah data pada download', '23-03-2020 09:05:28'),
(110, 1, 'Admin telah menambah data pada download', '23-03-2020 09:05:54');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `parent_menu` int(11) DEFAULT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `controller_link` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `urut_menu` int(11) NOT NULL,
  `menu_grup_user` varchar(30) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `parent_menu`, `nama_menu`, `controller_link`, `icon`, `slug`, `urut_menu`, `menu_grup_user`, `is_active`) VALUES
(1, 0, 'Download', 'Download', 'fa-download', 'Download', 1, '1', 1),
(2, 0, 'Tanggal Kegiatan', 'Tanggal_kegiatan', 'fa-deaf', 'Tanggal_kegiatan', 2, '1', 1),
(3, 0, 'Waktu Kegiatan', 'Waktu_kegiatan', 'fa-times', 'Waktu_kegiatan', 3, '1', 1),
(4, 0, 'Landing', 'Landing', 'fa-adn', 'Landing', 4, '1', 1),
(6, 0, 'Kategori', 'Kategori', 'fa-bold', 'Kategori', 5, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tanggal_kegiatan`
--

CREATE TABLE `tanggal_kegiatan` (
  `id` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `status` enum('active','inactive','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanggal_kegiatan`
--

INSERT INTO `tanggal_kegiatan` (`id`, `hari`, `tanggal`, `status`) VALUES
(1, 'Senin', '21-21-2121', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `foto`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$08$mZPaYks57MijwQIbpiXn0e5ugdDn8QTDaY0.jay3axX/dJGhcv7sG', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1584950689, 1, 'Admin', 'istrator', 'AMIKOM', '083148263597', '83494197_1126442191081340_9075778049823211520_n.jpg'),
(2, '::1', 'ilham@gmail.com', '$2y$08$PCNWlcbbbrhZKOn.4nnqx.HHbZ0F9gJc/DPZesz/rT8bNEdedpSSi', NULL, 'ilham@gmail.com', NULL, NULL, NULL, NULL, 1579385996, 1579507586, 1, 'ilham', 'naufal', 'kokngoding', '083148263597', NULL),
(3, '::1', 'satria@ulfa.com', '$2y$08$UFgtqXipPdVYIgU8ZSDPF.WOtwcEbdgzbpoVTKkpGije0PAl7nyQ.', NULL, 'satria@ulfa.com', NULL, NULL, NULL, NULL, 1579452488, 1579503959, 1, 'satria', 'purnama', 'koktani', '02381381238', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(17, 1, 1),
(14, 2, 2),
(16, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `waktu_kegiatan`
--

CREATE TABLE `waktu_kegiatan` (
  `id` int(11) NOT NULL,
  `id_tanggal` int(11) NOT NULL,
  `mulai` varchar(5) NOT NULL,
  `selesai` varchar(5) NOT NULL,
  `detail` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waktu_kegiatan`
--

INSERT INTO `waktu_kegiatan` (`id`, `id_tanggal`, `mulai`, `selesai`, `detail`) VALUES
(1, 2, '15:00', '22:00', '08:00 - 15:00 UTC HF 40 M - Phone'),
(2, 1, '15:00', '22:00', '08:00 - 15:00 UTC HF 40 M - Phone');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`barang_id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identitas_web`
--
ALTER TABLE `identitas_web`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landing`
--
ALTER TABLE `landing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_aktivitas`
--
ALTER TABLE `log_aktivitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanggal_kegiatan`
--
ALTER TABLE `tanggal_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indexes for table `waktu_kegiatan`
--
ALTER TABLE `waktu_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `barang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `identitas_web`
--
ALTER TABLE `identitas_web`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log_aktivitas`
--
ALTER TABLE `log_aktivitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tanggal_kegiatan`
--
ALTER TABLE `tanggal_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `waktu_kegiatan`
--
ALTER TABLE `waktu_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
