-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2024 at 03:49 PM
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
-- Database: `carrent-app`
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
  `id_pengemudi` varchar(10) NOT NULL,
  `nik` int(20) NOT NULL,
  `nama_pengemudi` varchar(20) NOT NULL,
  `jenis_kelamin` enum('Laki- Laki','Perempuan','','') NOT NULL,
  `nomor_telp` int(20) NOT NULL,
  `harga` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` varchar(15) NOT NULL,
  `nama_pengguna` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`) VALUES
('admintes123', 'admin', 'admin', 'admin');

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
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`id_penyewa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
