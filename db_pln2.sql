-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 10:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pln2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_golongan`
--

CREATE TABLE `tb_golongan` (
  `gol_id` tinyint(3) NOT NULL,
  `gol_kode` varchar(10) DEFAULT NULL,
  `gol_nama` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_golongan`
--

INSERT INTO `tb_golongan` (`gol_id`, `gol_kode`, `gol_nama`, `created_at`, `updated_at`) VALUES
(4, 'GL001', 'Pemerintah', '2023-11-27 12:34:12', NULL),
(5, 'GL002', 'Rumah Tangga', '2023-11-27 12:42:01', NULL),
(9, 'GL003', 'Industri dan Bisnis', '2023-11-27 17:41:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `pel_id` int(11) NOT NULL,
  `pel_id_gol` tinyint(3) DEFAULT NULL,
  `pel_no` varchar(20) DEFAULT NULL,
  `pel_nama` varchar(50) DEFAULT NULL,
  `pel_alamat` text DEFAULT NULL,
  `pel_hp` varchar(20) DEFAULT NULL,
  `pel_ktp` varchar(50) DEFAULT NULL,
  `pel_seri` varchar(50) DEFAULT NULL,
  `pel_meteran` int(11) DEFAULT NULL,
  `pel_aktif` enum('Y','N') DEFAULT NULL,
  `pel_id_user` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`pel_id`, `pel_id_gol`, `pel_no`, `pel_nama`, `pel_alamat`, `pel_hp`, `pel_ktp`, `pel_seri`, `pel_meteran`, `pel_aktif`, `pel_id_user`, `created_at`, `updated_at`) VALUES
(12, 4, 'PL006', 'Mulia', 'Tembung', '08998766559', '1207324563737', '03216511850626583', 2147483647, 'Y', NULL, '2023-11-27 16:15:35', NULL),
(13, 4, 'PL007', 'Muliaaaa', 'Batang Jambu', '089987665465', '1207324561236547', '17658165823184529', 2147483647, 'Y', NULL, '2023-11-27 16:16:01', NULL),
(18, 4, 'PL009', 'Muliana', 'Pantai Labu', '089987665445', '1207321509010001', '18036967458431725', 2147483647, 'N', 1, '2023-11-27 17:43:58', NULL),
(19, 4, 'PL010', 'Rahma', 'Tembung', '085676876543', '1207326501020002', '56773700535537064', 2147483647, 'N', 1, '2023-11-27 17:45:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_nama` varchar(100) DEFAULT NULL,
  `user_alamat` text DEFAULT NULL,
  `user_hp` varchar(25) DEFAULT NULL,
  `user_pos` varchar(25) DEFAULT NULL,
  `user_role` tinyint(2) DEFAULT NULL,
  `user_aktif` tinyint(2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `user_email`, `user_password`, `user_nama`, `user_alamat`, `user_hp`, `user_pos`, `user_role`, `user_aktif`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'admin', 'Admin', 'Medan', '089189667811', '20225', 1, 1, '2023-11-26 15:13:04', '2023-11-26 22:13:57'),
(9, 'hakimstp25@gmail.com', 'hakim', 'Abdul Hakim', 'Batang Kuis', '08566525945', '20553', 1, 0, '2023-11-27 11:45:26', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  ADD PRIMARY KEY (`gol_id`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`pel_id`),
  ADD KEY `pel_id_user` (`pel_id_user`),
  ADD KEY `pel_id_gol` (`pel_id_gol`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  MODIFY `gol_id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `pel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD CONSTRAINT `tb_pelanggan_ibfk_1` FOREIGN KEY (`pel_id_user`) REFERENCES `tb_users` (`user_id`),
  ADD CONSTRAINT `tb_pelanggan_ibfk_2` FOREIGN KEY (`pel_id_gol`) REFERENCES `tb_golongan` (`gol_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
