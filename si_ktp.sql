-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 04:45 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_ktp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_ktp`
--

CREATE TABLE `tb_ktp` (
  `Id` int(11) NOT NULL,
  `Nama_Provinsi` varchar(255) NOT NULL,
  `Nama_Kab` varchar(255) NOT NULL,
  `Nik` varchar(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Tempat_Lahir` varchar(255) NOT NULL,
  `Tgl_Lahir` date NOT NULL,
  `Jk` varchar(20) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Agama` varchar(100) NOT NULL,
  `Status_Perkawinan` varchar(100) NOT NULL,
  `Pekerjaan` varchar(255) NOT NULL,
  `Parent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ktp`
--

INSERT INTO `tb_ktp` (`Id`, `Nama_Provinsi`, `Nama_Kab`, `Nik`, `Nama`, `Tempat_Lahir`, `Tgl_Lahir`, `Jk`, `Alamat`, `Agama`, `Status_Perkawinan`, `Pekerjaan`, `Parent`) VALUES
(2, 'Sumatera Utara', 'Medan', '0010100', 'Lofty Razani', 'Sawit Seberang', '1996-09-01', 'Laki-Laki', 'Medan', 'ISLAM', 'Belum Kawin', 'It', '3'),
(3, 'Sumatera Utara', 'Medan', '0010100', 'Suraji Hariyadi', 'Medan', '1995-12-06', 'Laki-Laki', 'Jalan Doktor Mansyur', 'ISLAM', 'Belum Kawin', 'Administrator', '4'),
(5, 'Sumatera Utara', 'Medan', '0010100', 'Dina', 'Medan', '1984-12-04', 'Perempuan', '-', 'ISLAM', 'Belum Kawin', '-', '5');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `Id` int(11) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Nama` varchar(200) NOT NULL,
  `Tgl_Daftar` date NOT NULL,
  `Role` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`Id`, `Username`, `Password`, `Nama`, `Tgl_Daftar`, `Role`) VALUES
(1, 'super@gmail.com', '$2y$10$DAP.1dQUbPTCfnI.LlAj7uEA07I2B29v74KRBKfrYLoAV7rEfOenm', 'Super Admin', '2020-12-29', 'Admin'),
(3, 'lofty.raz@gmail.com', '$2y$10$sYCUhRWkM68sHUPcrabFS.hH3OvckewVRsHXG8Fn6D7XenuhMS0kG', 'Lofty Razani', '2020-12-29', 'User'),
(4, 'suraji@gmail.com', '$2y$10$tk9UqQ/ZYHQvCfMNyY44NuYUhNIBu0ETv7EHQD3imSE/oTDaVnx72', 'Suraji', '2020-12-30', 'User'),
(5, 'dina@gmail.com', '$2y$10$Lv/adlEqISoHM09PW61fQew63VCpjtZr8pCUr3OqCgW/Z1BmEhiQa', 'Dina', '2020-12-30', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_ktp`
--
ALTER TABLE `tb_ktp`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_ktp`
--
ALTER TABLE `tb_ktp`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
