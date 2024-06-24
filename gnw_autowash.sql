-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 24, 2024 at 12:31 PM
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
  `alamat` varchar(50) NOT NULL,
  `nomor_plat` varchar(10) NOT NULL,
  `type_mobil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `no_hp`, `alamat`, `nomor_plat`, `type_mobil`) VALUES
(24, 'Elsa', '081222111222', 'Pucakwangi', 'K 445 QQ', 'SUV'),
(27, 'Karin', '081999777888', 'Ngagel', 'K 121 UY', 'Jazz'),
(28, 'Sinta', '089787767787', 'Pati', 'K 111 KL', 'Sedan'),
(29, 'Yudha', '089111222333', 'Dukuhseti', 'K 123 OP', 'Pickup'),
(31, 'Usman', '089789878987', 'Tayu', 'K 123 TT', 'MPV'),
(34, 'Rian', '089789111222', 'Kajen', 'K 876 FA', 'Pickup'),
(35, 'Yulia', '087777666555', 'Gunugwungkal', 'K 456 YU', 'SUV'),
(36, 'Toni', '08777766999', 'Dukuhseti', 'K 888 AA', 'Innova'),
(37, 'Omar', '089111222333', 'Kejen', 'K 251 YY', 'Innova'),
(38, 'Zahra', '089777666555', 'Solo', 'K 254 AS', 'Jazz'),
(39, 'Hamdan', '081222000111', 'Winong', 'K 232 QQ', 'MPV'),
(40, 'Degi', '0856287873787', 'bandung', 'D3GIMA', 'Innova'),
(41, 'jajang', '08973648477', 'bali', 'D648H', 'Sedan');

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
(22, '2022-09-05/1', 21, 5, '2022-09-05', '13:16:00', 45000, 'Lunas'),
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
(42, '2022-09-05/14', 39, 5, '2022-09-05', '15:00:00', 45000, 'Dalam Pengerjaan'),
(43, '2024-06-23/1', 40, 2, '2024-06-23', '14:32:00', 35000, 'Pendaftaran'),
(44, '2024-06-23/2', 41, 5, '2024-06-23', '14:41:00', 45000, 'Lunas');

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
(2, 'erdiman', 'erdiman@gmail.com', 'sangat puas', 90, 90, 90);

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
  `nama_pencuci` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pendaftaran`, `no_nota`, `tanggal`, `bayar`, `kembali`, `total`, `status`, `id_user`, `nama_pencuci`) VALUES
(17, 22, 'C002', '2022-09-05', 50000, 5000, 45000, 'Lunas', 1, 'Agos'),
(18, 28, 'C003', '2022-09-05', 100000, 55000, 45000, 'Lunas', 1, 'Agos'),
(19, 27, 'C004', '2022-09-05', 100000, 55000, 45000, 'Lunas', 1, 'Dedi'),
(20, 25, 'C005', '2022-09-05', 50000, 5000, 45000, 'Lunas', 1, 'Dedi'),
(21, 24, 'C006', '2022-09-05', 50000, 15000, 35000, 'Lunas', 1, 'Agos'),
(22, 31, 'C007', '2022-09-05', 100000, 55000, 45000, 'Lunas', 1, 'Dedi'),
(23, 32, 'C008', '2022-09-05', 50000, 15000, 35000, 'Lunas', 1, 'Agos'),
(24, 37, 'C009', '2022-09-05', 50000, 15000, 35000, 'Lunas', 1, 'Dedi'),
(25, 34, 'C010', '2022-09-05', 100000, 55000, 45000, 'Lunas', 1, 'Agos'),
(27, 38, 'C011', '2022-09-05', 50000, 5000, 45000, 'Lunas', 1, 'Agos'),
(28, 40, 'C012', '2024-06-22', 50000, 5000, 45000, 'Lunas', 1, 'john'),
(29, 44, 'C013', '2024-06-23', 50000, 5000, 45000, 'Lunas', 1, 'aa');

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
  `id_user` int NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `hp` varchar(25) NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `alamat`, `hp`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'Jl. Bangau Sakti', '081111222333', 1),
(2, 'degi', '21232f297a57a5a743894a0e4a801fc3', 'degi', 'bandung', '081222112223', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

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
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

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
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `jenis_cucian`
--
ALTER TABLE `jenis_cucian`
  MODIFY `id_jenis_cucian` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `type_mobil`
--
ALTER TABLE `type_mobil`
  MODIFY `id_type_mobil` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
