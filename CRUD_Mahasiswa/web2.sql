-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 05:52 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `tempat_tanggal_lahir` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `tempat_tanggal_lahir`, `alamat`, `semester`, `prodi`, `foto`) VALUES
(1, 'Andika Panji Perkasa', '17090142', 'Batam, 03 April 1999', 'Jl. Mataram, Tegal Barat, Jawa Tengah', '5', 'Teknik Informatika', 'Andika2.png'),
(2, 'Tri Inayatul', '17090001', 'Tegal, 12 Agustus 1998', 'Tegal', '5', 'Teknik Informatika', 'b.png'),
(3, 'Abit', '17090091', 'Brebes, 09 Januari 1999', 'Brebes', '5', 'Teknik Informatika', 'c.png'),
(4, 'Tiara Arista Hasanah', '17090010', 'Brebes, 20 Juni 2019 ', 'Brebes', '5', 'Teknik Informatika', 'tiara.jpg'),
(5, 'Rivaldo Willy Ramadhani', '17090118', 'Tegal, 05 Juli 1999', 'Tegal', '5', 'Teknik Informatika', 'rivaldo.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
