-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2024 at 08:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrent`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` varchar(15) NOT NULL,
  `Nomor-Polisi` varchar(15) NOT NULL,
  `Jenis` varchar(20) NOT NULL,
  `Warna` varchar(15) NOT NULL,
  `Kapasitas` int(2) NOT NULL,
  `Transmisi` enum('Transmisi Manual','Transmisi Otomatis','','') NOT NULL,
  `Harga` bigint(30) NOT NULL,
  `Bahan Bakar` enum('Bahan Bakar Solar','Bahan Bakar Bensin','Mobil Elektrik','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `Nomor-Polisi`, `Jenis`, `Warna`, `Kapasitas`, `Transmisi`, `Harga`, `Bahan Bakar`) VALUES
('avz001', 'D4444TES', 'Toyota Avanza', 'Hitam', 8, 'Transmisi Manual', 400, 'Bahan Bakar Bensin'),
('avz002', 'D4443TES', 'Toyota Avanza', 'Biru', 8, 'Transmisi Otomatis', 400, '');

-- --------------------------------------------------------

--
-- Table structure for table `pengemudi`
--

CREATE TABLE `pengemudi` (
  `id_pengemudi` int(5) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_pengemudi` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `nomor_telp` varchar(20) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengemudi`
--

INSERT INTO `pengemudi` (`id_pengemudi`, `nik`, `nama_pengemudi`, `jenis_kelamin`, `nomor_telp`, `harga`) VALUES
(4, '22304022003	', 'tes pengemudi 4', 'Laki- Laki', '22304022003	', '200000'),
(5, '22304011205', 'tes pengemudi 5', 'Laki- Laki', '22304011205', '250000'),
(6, '22304022007', 'tes pengemudi 9', 'Perempuan', '22304022007', '250000'),
(7, '22304022008', 'tes pengemudi 8', 'Perempuan', '22304022008', '500000'),
(8, '2203040171', 'tes pengemudi 11', 'Laki- Laki', '2203040171', '225000'),
(9, '22030401701', 'tes pengemudi 12', 'Perempuan', '22030401701', '225000'),
(10, '22030401711', 'tes pengemudi 13', 'Laki- Laki', '22030401711', '250000'),
(26, '22304022003', 'tes pengemudi 4', 'Laki- Laki', '22304022003', '200000 '),
(27, '22304022003', 'tes pengemudi 4', 'Perempuan', '22304022003', '200000');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `usernamelogin` varchar(15) NOT NULL,
  `level_pengguna` varchar(20) NOT NULL,
  `nama_pengguna` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`usernamelogin`, `level_pengguna`, `nama_pengguna`, `password`) VALUES
('admintes123', 'admin', 'admin tes', 'admin'),
('admintes5', 'admin', 'Nama Admin', 'passwordadmin'),
('operatortes123', 'operator', 'nama operator', 'passwordoperator');

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
--

CREATE TABLE `penyewa` (
  `id_penyewa` varchar(15) NOT NULL,
  `nik_penyewa` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jenis_kelamin` enum('Laki- Laki','Perempuan','','') NOT NULL,
  `nomor_telp` int(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `pengemudi`
--
ALTER TABLE `pengemudi`
  ADD PRIMARY KEY (`id_pengemudi`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`usernamelogin`);

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`id_penyewa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengemudi`
--
ALTER TABLE `pengemudi`
  MODIFY `id_pengemudi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
