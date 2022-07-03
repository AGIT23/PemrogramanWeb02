-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220528.cc1733a80d
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 08:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbelen`
--
CREATE DATABASE IF NOT EXISTS `dbelen` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbelen`;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nidn` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pendidikan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nidn`, `nama`, `gender`, `tmp_lahir`, `tgl_lahir`, `pendidikan`) VALUES
(5, 8911, 'Bambang S.T', 'Laki-Laki', 'Semarang', '1980-02-04', 'Teknik Sipil'),
(6, 8221, 'Sunarya S.Kom', 'Laki-Laki', 'Bandung', '1994-06-09', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `ipk` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `gender`, `tmp_lahir`, `tgl_lahir`, `ipk`) VALUES
(1, 121236, 'Fahrizal', 'Laki-Laki', 'Jakarta', '2002-02-04', '3.7'),
(2, 121289, 'Ilma', 'Perempuan', 'Bandung', '2001-02-12', '3.89');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `sks` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `Dosen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `nama`, `sks`, `kode`, `Dosen`) VALUES
(2, 'Dasar-Dasar Pemrograman', 3, 'MK002', 'Sunarya S.Kom'),
(3, 'Basi Data', 4, 'MK003', 'Sunarya S.Kom'),
(4, 'Pemrogramn WEB', 4, 'MK004', 'Sutritno S.Kom');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



