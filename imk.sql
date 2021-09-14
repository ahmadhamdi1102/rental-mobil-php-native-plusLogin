-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2017 at 04:51 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imk`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `identitas` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `kontak` int(20) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `merk` varchar(50) DEFAULT NULL,
  `layanan` varchar(30) DEFAULT NULL,
  `tgl_mulai` varchar(12) DEFAULT NULL,
  `jam_mulai` varchar(6) DEFAULT NULL,
  `tgl_selesai` varchar(12) DEFAULT NULL,
  `jam_selesai` varchar(6) DEFAULT NULL,
  `tujuan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`identitas`, `nama`, `email`, `password`, `kontak`, `alamat`, `merk`, `layanan`, `tgl_mulai`, `jam_mulai`, `tgl_selesai`, `jam_selesai`, `tujuan`) VALUES
('123123123', 'hamdi', 'hami@jhgf', NULL, 8475, 'anfjkhadf', 'HONDA MOBILIO', 'Supir Perusahaan', '', '', '', '', 'sdjkfadf'),
('12345', 'asdf', 'werrqt', NULL, 98989, 'afakdjfklda', 'TOYOTA AVANZA', 'Supir Perusahaan', '11/12/2018', '15:00', '13/12/2018', '16:00', 'Wfakdjfasdf'),
('123456', 'ahmad', 'werrqt', NULL, 98989, 'Cianjur KOta', 'HONDA MOBILIO', 'Supir Perusahaan', '11/12/2018', '15:00', '13/12/2018', '16:00', 'djsfhsfd'),
('384782', 'ahmad hamdi', 'ahmadhamdi112@yahoo.com', NULL, 809384934, 'Cipanas\r\nPuncak \r\nCianjur', 'TOYOTA CAMRY', 'Tanpa Supir', '11/12/2018', '12:00', '12/12/2018', '13:00', 'jalan-Jalan ka tempat wisata Cipunjur'),
('9w4985934', 'ajdkfljalkdf', 'adjhfjadhf', NULL, 897342, 'ajkdfadf', 'TOYOTA CAMRY', 'Supir Perusahaan', '', '', '', '', 'adkjfadsf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`identitas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
