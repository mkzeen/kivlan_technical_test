-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 10:29 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technical_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `dokter_id` int(11) NOT NULL,
  `poli_id` int(11) NOT NULL,
  `jadwal_hari_id` int(11) NOT NULL,
  `jam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `dokter_id`, `poli_id`, `jadwal_hari_id`, `jam`) VALUES
(3, 2, 2, 4, '09:00 - 10:00'),
(10, 4, 4, 5, '08:00 - 09:00'),
(11, 5, 5, 4, '11:00 - 12:00'),
(14, 1, 1, 1, '11:00 - 12:00'),
(16, 1, 1, 6, '11:00 - 12:00'),
(17, 2, 1, 3, '10:00 - 12:00'),
(18, 3, 3, 3, '09:00 - 10:00'),
(19, 2, 1, 2, '11:00 - 12:00');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_hari`
--

CREATE TABLE `jadwal_hari` (
  `id_jadwal` int(11) NOT NULL,
  `nama_hari` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_hari`
--

INSERT INTO `jadwal_hari` (`id_jadwal`, `nama_hari`) VALUES
(1, 'SENIN'),
(2, 'SELASA'),
(3, 'RABU'),
(4, 'KAMIS'),
(5, 'JUMAT'),
(6, 'SABTU'),
(7, 'MINGGU');

-- --------------------------------------------------------

--
-- Table structure for table `master_dokter`
--

CREATE TABLE `master_dokter` (
  `pegawai_id` int(11) NOT NULL,
  `pegawai_nomor` varchar(255) DEFAULT NULL,
  `pegawai_nama` varchar(255) DEFAULT NULL,
  `pegawai_jenis_kelamin` char(255) DEFAULT NULL COMMENT 'L=laki-laki , P=perempuan',
  `pegawai_sip` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_dokter`
--

INSERT INTO `master_dokter` (`pegawai_id`, `pegawai_nomor`, `pegawai_nama`, `pegawai_jenis_kelamin`, `pegawai_sip`) VALUES
(1, '0001', 'Dr Nagita silvana', 'P', '12345678912345'),
(2, '0002', 'Dr Tiger Wang', 'L', '98765432199999'),
(3, '0003', 'Dr Muslim Irham', 'L', '43214321678967'),
(4, '0004', 'Dr Coki Hotaliha', 'L', '65489032155590'),
(5, '0005', 'Dr Luna Miya', 'P', '43522004213455');

-- --------------------------------------------------------

--
-- Table structure for table `master_unit`
--

CREATE TABLE `master_unit` (
  `unit_id` int(11) NOT NULL,
  `unit_kode` varchar(255) DEFAULT NULL,
  `unit_nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_unit`
--

INSERT INTO `master_unit` (`unit_id`, `unit_kode`, `unit_nama`) VALUES
(1, 'MAT', 'POLI MATA'),
(2, 'JTG', 'POLI JANTUNG'),
(3, 'GJL', 'POLI GINJAL'),
(4, 'GIGI', 'POLI GIGI'),
(5, 'KAND', 'POLI KANDUNGAN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `dokter_id` (`dokter_id`,`poli_id`,`jadwal_hari_id`),
  ADD KEY `poli_id` (`poli_id`),
  ADD KEY `jadwal_hari_id` (`jadwal_hari_id`);

--
-- Indexes for table `jadwal_hari`
--
ALTER TABLE `jadwal_hari`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `master_dokter`
--
ALTER TABLE `master_dokter`
  ADD PRIMARY KEY (`pegawai_id`);

--
-- Indexes for table `master_unit`
--
ALTER TABLE `master_unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `jadwal_hari`
--
ALTER TABLE `jadwal_hari`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `master_dokter`
--
ALTER TABLE `master_dokter`
  MODIFY `pegawai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `master_unit`
--
ALTER TABLE `master_unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`dokter_id`) REFERENCES `master_dokter` (`pegawai_id`),
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`poli_id`) REFERENCES `master_unit` (`unit_id`),
  ADD CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`jadwal_hari_id`) REFERENCES `jadwal_hari` (`id_jadwal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
