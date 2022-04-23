-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 03:34 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `npm` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `npm`, `email`, `jurusan`, `gambar`) VALUES
(1, 'dwisusanto', '202210044', 'dwi.susanto784@gmail.com', 'sistem', '617574b4e5be6.jpg'),
(2, 'intanPermatasari', '202210011', 'intanPermatasari@gmail.com', 'teknik informatika', 'intan.jpg'),
(3, 'dwi3', '3', '3@gmai.com', 'sistem informasi', 'dwi.jpg'),
(4, 'dwi4', '4', '4@gmail.com', 'sistem inforamsi', 'intan.jpg'),
(5, 'dwi5', '5', '5@gmail.com', 'sistem informasi', 'dwi.jpg'),
(14, 'adsf', 'asdfsdfa', 'asdf@sf', 'asdf', '6174e045781e3.jpg'),
(15, '123213', 'dwi6', 'adsf@erwr', 'sistem informasi', '618d365a7e152.jpg'),
(16, '123213', 'dwi8', 'adf@dsfsdf', 'asdfsdf', '618d3cdcb6191.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'dwi', '$2y$10$cLaMuIv7C21hDSomMOQfX.HhuTpncEbJlq6yln09InyBk7qcoSUnS'),
(2, 'admin', '$2y$10$Fw.6kxfZchq4KmjLvWe8KOoSmy9G0BoiAA356dlHQf1oCoZrTF3/O'),
(3, '', '$2y$10$aeuPeEV/lMmCauwPOkh02ux8/g3EmqElOZGdQUjomvJY88oFoNNQm'),
(4, 'asdf', '$2y$10$NWMIbZtZIVBiWs9UrP6RH.8aaiJhZjA.iCQwtBhuqtPRm.223udBG'),
(5, 'asdfg', '$2y$10$baOP0w.9oYEHAPglLkWH3.A3Zuzy/rhzM/pod8Kp20AVMs4NQJbFy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
