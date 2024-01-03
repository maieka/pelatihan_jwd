-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2022 at 07:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `no_pemesanan` int(11) NOT NULL,
  `nama_pemesanan` varchar(50) NOT NULL,
  `identitas_pemesanan` int(20) NOT NULL,
  `no_hp pemesanan` varchar(20) NOT NULL,
  `pemesanan_tempat_wisata` varchar(15) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `pemesanan_pengunjung_dewasa` varchar(20) NOT NULL,
  `pemesanan_pengunjung_anak` varchar(20) NOT NULL,
  `harga_pemesanan` int(20) NOT NULL,
  `total_pemesanan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`no_pemesanan`, `nama_pemesanan`, `identitas_pemesanan`, `no_hp pemesanan`, `pemesanan_tempat_wisata`, `tgl_pemesanan`, `pemesanan_pengunjung_dewasa`, `pemesanan_pengunjung_anak`, `harga_pemesanan`, `total_pemesanan`) VALUES
(4, 'Maieka', 2147483647, '1234567890', 'SariAter', '2022-09-25', '2', '3', 25000, 70000),
(5, 'Maieka', 2147483647, '081384166485', 'SariAter', '2022-09-25', '2', '3', 25000, 70000),
(6, 'Maieka', 2147483647, '1234567890', 'Kebun Raya Bogo', '2022-09-25', '2', '3', 16000, 62000),
(7, 'Maieka', 2147483647, '1234567890', 'Kota Tua', '2022-09-25', '2', '3', 30000, 150000),
(8, 'Maieka', 2147483647, '081384166485', 'SariAter', '2022-09-25', '2', '3', 25000, 70000),
(9, 'Maieka', 2147483647, '081384166485', 'SariAter', '2022-09-25', '2', '3', 25000, 70000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`no_pemesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `no_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
