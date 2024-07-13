-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 13, 2024 at 09:13 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gnw_autowash`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nomor_plat` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `type_mobil` varchar(30) NOT NULL,
  `id_user` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `no_hp`, `alamat`, `nomor_plat`, `type_mobil`, `id_user`) VALUES
(24, 'Elsa', '081222111222', 'Pucakwangi', 'K 445 QQ', 'SUV', NULL),
(27, 'Karin', '081999777888', 'Ngagel', 'K 121 UY', 'Jazz', NULL),
(28, 'Sinta', '089787767787', 'Pati', 'K 111 KL', 'Sedan', NULL),
(29, 'Yudha', '089111222333', 'Dukuhseti', 'K 123 OP', 'Pickup', NULL),
(31, 'Usman', '089789878987', 'Tayu', 'K 123 TT', 'MPV', NULL),
(34, 'Rian', '089789111222', 'Kajen', 'K 876 FA', 'Pickup', NULL),
(35, 'Yulia', '087777666555', 'Gunugwungkal', 'K 456 YU', 'SUV', NULL),
(36, 'Toni', '08777766999', 'Dukuhseti', 'K 888 AA', 'Innova', NULL),
(37, 'Omar', '089111222333', 'Kejen', 'K 251 YY', 'Innova', NULL),
(38, 'Zahra', '089777666555', 'Solo', 'K 254 AS', 'Jazz', NULL),
(39, 'Hamdan', '081222000111', 'Winong', 'K 232 QQ', 'MPV', NULL),
(40, 'Degi', '0856287873787', 'bandung', 'D3GIMA', 'Innova', NULL),
(41, 'jajang', '08973648477', 'bali', 'D648H', 'Sedan', NULL),
(42, 'putri', '21323', 'bandung', 'Z1234MA', 'Off Road', 7),
(43, 'putri', '5123', 'bandung', 'Z1234MA', 'MPV', 7),
(44, 'putri', '08938944', 'bandung', 'Z1234MA', 'Sedan', 7),
(45, 'aa', '089', 'fgfdg', 'gdfg', 'Pilih Type Mobil', 7),
(46, 'xcvxcv', '4353', 'sdfsd', 'cxvcx', 'Pilih Type Mobil', 7),
(47, 'xcvxcv', '4353', 'sdfsd', 'cxvcx', 'Pilih Type Mobil', 7),
(48, 'aa', '9898', 'jhkjk', 'dfg', 'Pilih Type Mobil', 7),
(49, 'aa', '9898', 'jhkjk', 'dfg', 'Pilih Type Mobil', 7),
(50, 'degi', '0877364878', 'bandung', 'Z 123 MA', 'Innova', 7),
(51, 'degi', '0877364878', 'garut', 'Z 123 MA', 'SUV', 7),
(52, '', '', '', 'D123HJ', 'Avanza', 7),
(53, '', '', '', 'D123HJ', 'Jazz', 7),
(54, '', '', '', 'D123HJ3', 'Sedan', 7),
(55, '', '', '', 'D123HJ3', 'MPV', 7);

-- --------------------------------------------------------

--
-- Table structure for table `jam_operasional`
--

CREATE TABLE `jam_operasional` (
  `id_jam` bigint NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jam_operasional`
--

INSERT INTO `jam_operasional` (`id_jam`, `jam`) VALUES
(1, '08:00:00'),
(2, '09:00:00'),
(3, '10:00:00'),
(4, '11:00:00'),
(5, '12:00:00'),
(6, '13:00:00'),
(7, '14:00:00'),
(8, '15:00:00'),
(9, '16:00:00'),
(10, '17:00:00'),
(11, '18:00:00'),
(12, '19:00:00'),
(13, '20:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_cucian`
--

CREATE TABLE `jenis_cucian` (
  `id_jenis_cucian` int NOT NULL,
  `jenis_cucian` varchar(50) NOT NULL,
  `biaya` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_cucian`
--

INSERT INTO `jenis_cucian` (`id_jenis_cucian`, `jenis_cucian`, `biaya`) VALUES
(2, 'Cucian Body', 35000),
(5, 'Cucian Menyeluruh', 45000);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int NOT NULL,
  `no_antrian` varchar(20) NOT NULL,
  `id_customer` int NOT NULL,
  `id_jenis_cucian` int NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `jam_pendaftaran` time NOT NULL,
  `total_biaya` int NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `no_antrian`, `id_customer`, `id_jenis_cucian`, `tgl_pendaftaran`, `jam_pendaftaran`, `total_biaya`, `status`) VALUES
(22, '2022-09-05/1', 21, 5, '2022-09-07', '13:16:00', 45000, 'Lunas'),
(24, '2022-09-05/3', 23, 2, '2022-09-05', '13:21:00', 35000, 'Lunas'),
(25, '2022-09-05/4', 24, 5, '2022-09-05', '13:24:00', 45000, 'Lunas'),
(27, '2022-09-05/6', 26, 5, '2022-09-05', '13:26:00', 45000, 'Lunas'),
(28, '2022-09-05/7', 27, 5, '2022-09-05', '13:50:00', 45000, 'Lunas'),
(31, '2022-09-05/6', 28, 5, '2022-09-05', '13:40:00', 45000, 'Lunas'),
(32, '2022-09-05/7', 29, 2, '2022-09-05', '13:43:00', 35000, 'Lunas'),
(34, '2022-09-05/9', 31, 5, '2022-09-05', '13:55:00', 45000, 'Lunas'),
(37, '2022-09-05/12', 34, 2, '2022-09-05', '14:10:00', 35000, 'Lunas'),
(38, '2022-09-05/10', 35, 5, '2022-09-05', '14:30:00', 45000, 'Lunas'),
(39, '2022-09-05/11', 36, 5, '2022-09-05', '14:35:00', 0, 'Batal'),
(40, '2022-09-05/12', 37, 5, '2022-09-05', '14:47:00', 45000, 'Lunas'),
(41, '2022-09-05/13', 38, 5, '2022-09-05', '14:50:00', 45000, 'Batal'),
(42, '2022-09-05/14', 39, 5, '2022-09-05', '15:00:00', 45000, 'Lunas'),
(43, '2024-06-23/1', 40, 2, '2024-06-23', '14:32:00', 35000, 'Lunas'),
(44, '2024-06-23/2', 41, 5, '2024-06-23', '14:41:00', 45000, 'Lunas'),
(45, '2024-06-30/1', 43, 2, '2024-06-30', '08:00:00', 35000, 'Lunas'),
(46, '2024-06-30/2', 44, 5, '2024-06-30', '10:00:00', 45000, 'Lunas'),
(48, '2024-07-06/1', 51, 5, '2024-07-08', '17:00:00', 45000, 'Lunas'),
(49, '2024-07-10/1', 52, 5, '2024-07-10', '15:00:00', 45000, 'Lunas'),
(50, '2024-07-10/2', 53, 2, '2024-07-10', '15:00:00', 35000, 'Pendaftaran'),
(51, '2024-07-10/3', 54, 2, '2024-07-10', '16:00:00', 35000, 'Pendaftaran'),
(52, '2024-07-10/4', 55, 5, '2024-07-10', '18:00:00', 45000, 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id_promo` bigint NOT NULL,
  `judul` text,
  `promo` text,
  `start` date DEFAULT NULL,
  `end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id_promo`, `judul`, `promo`, `start`, `end`) VALUES
(1, 'promo spesial wash', ' promo pencucian 10x gratis 1x ', '2024-07-13', '2024-07-31'),
(2, 'promo promoan', 'Gratis minuman sepuasnya ', '2024-07-12', '2024-07-13'),
(3, 'promo testing', 'promo umroh', '2024-07-20', '2024-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id_saran` int NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` varchar(150) NOT NULL,
  `kebersihan` int NOT NULL,
  `keramahan` int NOT NULL,
  `ketelitian` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id_saran`, `nama`, `email`, `pesan`, `kebersihan`, `keramahan`, `ketelitian`) VALUES
(1, 'Adit', 'aditwijaya@gmail.com', 'Pelayanannya sangat baik dan memuaskan', 90, 80, 90),
(2, 'erdiman', 'erdiman@gmail.com', 'sangat puas', 90, 90, 90),
(3, 'degi', 'degi@gmail.com', 'bagus sekali ya ges ya', 100, 100, 100),
(4, 'putri', 'put@gmail.com', 'alhamdulillah', 50, 50, 50);

-- --------------------------------------------------------

--
-- Table structure for table `status_operasional`
--

CREATE TABLE `status_operasional` (
  `id` int NOT NULL,
  `status` varchar(20) NOT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int NOT NULL,
  `id_pendaftaran` int NOT NULL,
  `no_nota` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `bayar` int NOT NULL,
  `kembali` int NOT NULL,
  `total` int NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_user` tinyint(1) NOT NULL,
  `nama_pencuci` varchar(50) NOT NULL,
  `bukti` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pendaftaran`, `no_nota`, `tanggal`, `bayar`, `kembali`, `total`, `status`, `id_user`, `nama_pencuci`, `bukti`) VALUES
(17, 22, 'C002', '2022-09-05', 50000, 5000, 45000, 'Lunas', 1, 'Agos', NULL),
(18, 28, 'C003', '2022-09-05', 100000, 55000, 45000, 'Lunas', 1, 'Agos', NULL),
(19, 27, 'C004', '2022-09-05', 100000, 55000, 45000, 'Lunas', 1, 'Dedi', NULL),
(20, 25, 'C005', '2022-09-05', 50000, 5000, 45000, 'Lunas', 1, 'Dedi', NULL),
(21, 24, 'C006', '2022-09-05', 50000, 15000, 35000, 'Lunas', 1, 'Agos', NULL),
(22, 31, 'C007', '2022-09-05', 100000, 55000, 45000, 'Lunas', 1, 'Dedi', NULL),
(23, 32, 'C008', '2022-09-05', 50000, 15000, 35000, 'Lunas', 1, 'Agos', NULL),
(24, 37, 'C009', '2022-09-05', 50000, 15000, 35000, 'Lunas', 1, 'Dedi', NULL),
(25, 34, 'C010', '2022-09-05', 100000, 55000, 45000, 'Lunas', 1, 'Agos', NULL),
(27, 38, 'C011', '2022-09-05', 50000, 5000, 45000, 'Lunas', 1, 'Agos', NULL),
(28, 40, 'C012', '2024-06-22', 50000, 5000, 45000, 'Lunas', 1, 'john', NULL),
(29, 44, 'C013', '2024-06-23', 50000, 5000, 45000, 'Lunas', 1, 'aa', NULL),
(30, 45, 'C014', '2024-06-30', 50000, 15000, 35000, 'Lunas', 7, 'asep', NULL),
(31, 48, 'C015', '2024-07-06', 45000, 0, 45000, 'Lunas', 1, 'a', NULL),
(34, 48, 'C016', '2024-07-06', 45000, 0, 45000, 'Lunas', 1, 'agus', NULL),
(35, 46, 'C017', '2024-07-06', 45000, 0, 45000, 'Lunas', 1, 'agus', NULL),
(36, 48, 'C018', '2024-07-06', 45000, 0, 45000, 'Lunas', 1, 'a', NULL),
(37, 48, 'C019', '2024-07-06', 45000, 0, 45000, 'Lunas', 1, 'agus', NULL),
(38, 46, 'C020', '2024-07-06', 45000, 0, 45000, 'Lunas', 1, '1', '../bukti/C020_305854618_814484516406993_94701150179247827_n.jpg'),
(39, 52, 'C021', '2024-07-13', 500000, 455000, 45000, 'Lunas', 1, 'dedi', '../bukti/C021_306886756_651142899598751_2740471317585836194_n.jpg'),
(40, 48, 'C022', '2024-07-13', 500000, 455000, 45000, 'Lunas', 1, 'dedi', '../bukti/C022_2.webp'),
(41, 48, 'C023', '2024-07-13', 500000, 455000, 45000, 'Lunas', 1, 'dedi', '../bukti/C023_313194582_202773882172086_1569670259883093644_n.jpg'),
(42, 49, 'C024', '2024-07-13', 500000, 455000, 45000, 'Lunas', 1, 'qqq', '../bukti/C024_loginbg (2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `type_mobil`
--

CREATE TABLE `type_mobil` (
  `id_type_mobil` int NOT NULL,
  `type_mobil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_mobil`
--

INSERT INTO `type_mobil` (`id_type_mobil`, `type_mobil`) VALUES
(1, 'Avanza'),
(2, 'Innova'),
(4, 'Jazz'),
(5, 'SUV'),
(6, 'MPV'),
(7, 'Sedan'),
(8, 'Off Road'),
(9, 'Pickup'),
(10, 'Sports Car');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` bigint UNSIGNED NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `hp` varchar(25) NOT NULL,
  `status` int NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `alamat`, `hp`, `status`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'Jl. Bangau Sakti', '081111222333', 1, ''),
(2, 'degi', '21232f297a57a5a743894a0e4a801fc3', 'degi', 'bandung', '081222112223', 1, ''),
(7, 'putri@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'putri', NULL, '123', 1, 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `jam_operasional`
--
ALTER TABLE `jam_operasional`
  ADD PRIMARY KEY (`id_jam`);

--
-- Indexes for table `jenis_cucian`
--
ALTER TABLE `jenis_cucian`
  ADD PRIMARY KEY (`id_jenis_cucian`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `status_operasional`
--
ALTER TABLE `status_operasional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `type_mobil`
--
ALTER TABLE `type_mobil`
  ADD PRIMARY KEY (`id_type_mobil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `jam_operasional`
--
ALTER TABLE `jam_operasional`
  MODIFY `id_jam` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jenis_cucian`
--
ALTER TABLE `jenis_cucian`
  MODIFY `id_jenis_cucian` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id_promo` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status_operasional`
--
ALTER TABLE `status_operasional`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `type_mobil`
--
ALTER TABLE `type_mobil`
  MODIFY `id_type_mobil` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
