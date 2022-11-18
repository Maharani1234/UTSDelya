-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2022 at 08:20 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tabel_baju`
--

-- --------------------------------------------------------

--
-- Table structure for table `baju`
--

CREATE TABLE `baju` (
  `id_baju` int(5) NOT NULL,
  `nama_baju` varchar(20) NOT NULL,
  `harga` char(15) NOT NULL,
  `bahan` varchar(20) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `ukuran` varchar(19) NOT NULL,
  `stok_baju` int(19) NOT NULL,
  `warna` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baju`
--

INSERT INTO `baju` (`id_baju`, `nama_baju`, `harga`, `bahan`, `tanggal_masuk`, `ukuran`, `stok_baju`, `warna`) VALUES
(11990, 'Tunik', 'Rp 96.000', 'Kain Lyca', '2022-11-09', 'M', 12, 'Marron'),
(43565, 'Kemeja', 'Rp 88.000', 'Katun', '2022-11-01', 'L', 13, 'Hitam'),
(90736, 'Gamis ', 'Rp 150.000', 'Krayon ', '2022-10-03', 'XL', 13, 'Cream'),
(98247, 'Kaos Lengan Pendek', 'Rp 40.000', 'Denim', '2022-09-06', 'S', 21, 'Hitam'),
(98543, 'Kaos Panjang', 'Rp 45.000', 'Katun', '2022-11-14', 'L', 21, 'Coklat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baju`
--
ALTER TABLE `baju`
  ADD PRIMARY KEY (`id_baju`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
