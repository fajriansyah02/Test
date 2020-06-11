-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 08:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bismillah`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tgl_lahir` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `tgl_lahir`) VALUES
(12, 'anji', 'anji@gmail.com', 'gwganteng02', '2020-06-02'),
(8, 'badu', 'badu@gmail.com', '12345', ''),
(14, 'budi', 'budi@gmail.com', '12345', '2020-06-03'),
(6, 'afif', 'fajriaburame@yahoo.com', 'tete', '2020-06-15'),
(3, 'fajri', 'fajriansyahputra2@gmail.com', 'gwganteng', '2020-06-17'),
(24, 'gege', 'gege@gmail.com', '12345', '2017-03-15'),
(23, 'haha', 'haha@gmail.com', '12345', '2020-06-02'),
(17, 'nana', 'nana@gmail.com', '12345', '2020-06-01'),
(19, 'nene', 'nene@gmail.com', '12345', '2020-06-02'),
(15, 'nini', 'nini@gmail.com', '12345', '2020-06-02'),
(10, 'nisa', 'nisa@gmail.com', '827ccb0eea8a706c4c34', '2020-06-10'),
(11, 'tifa', 'tifa@gmail.com', '83fbf2f6f7df5f5c205d', '2020-06-03'),
(5, 'yori', 'yrizkiakbar@gmail.com', 'terelaye', '2020-06-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
