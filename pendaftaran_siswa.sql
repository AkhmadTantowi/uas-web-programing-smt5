-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 06, 2019 at 06:16 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_masuk`
--

CREATE TABLE `data_masuk` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telpon` varchar(15) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `alamat_sekolah` varchar(100) NOT NULL,
  `tahun_lulus` varchar(10) NOT NULL,
  `no_daftar` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` varchar(15) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_masuk`
--

INSERT INTO `data_masuk` (`id`, `jurusan`, `nama`, `alamat`, `email`, `telpon`, `nama_sekolah`, `alamat_sekolah`, `tahun_lulus`, `no_daftar`, `password`, `tempat_lahir`, `tanggal_lahir`, `agama`, `gender`) VALUES
(19, 'Elektronik', 'Muhamad Abdul Muiz', 'Randudongkal', 'muiz@mail.id', '08923131312', 'MTs Ihsaniyah', 'Banyumudal', '2019', '06112019125140', '90954499', '', '', '', ''),
(20, 'TKJ', 'Dani', 'Tegal', 'dani@mail.com', '08318391120', 'SMP Tegal', 'tegal', '2019', '06112019125835', '80889494', '', '', '', ''),
(22, 'TKR', 'Ahmad Tantowi', 'Dukuhwaru', 'owi@anton.com', '08923131212', 'MTs Ihsaniyah', 'Moga', '2019', '06112019133013', '16318729', '', '', '', ''),
(24, 'TKJ', 'Anton', 'Jatibarang', 'anton@mail.com', '089321312312', 'SMP 2 Jatibarang', 'Jatibarang', '2019', '06112019152445', '83442454', 'Pemalang', '1990-11-11', 'Islam', 'Laki-laki'),
(25, 'TKR', 'Mailon', 'Slawi', 'adbul@mail.me', '08318391120', 'MTs Ihsaniyah', 'Moga', '2019', '06112019180911', '58795550', NULL, NULL, NULL, NULL),
(26, 'TKJ', 'Muhamad Abdul Muiz', 'Tegal', 'test@test.com', '08318391120', 'SMP Tegal', 'tegal', '2019', '06112019181156', '65985701', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_masuk`
--
ALTER TABLE `data_masuk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ux_email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ux_username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_masuk`
--
ALTER TABLE `data_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
