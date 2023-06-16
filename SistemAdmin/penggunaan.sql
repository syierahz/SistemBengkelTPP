-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 03:46 AM
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
-- Database: `penggunaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL,
  `access` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `password`, `access`) VALUES
(3, 'ALI BIN ABU', '0303', 'admin'),
(11, 'NUR INSYIRAH BINTI ZAHARI', '1234', 'admin'),
(12, 'ROSNIDAINI BINTI SHUDIN', '1235', 'admin'),
(67, 'NUR INSYIRAH BINTI ZAHARI 03', '0303', ''),
(90, 'ALIF DANIEL', '1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `info_pengunaan`
--

CREATE TABLE `info_pengunaan` (
  `ndp` int(10) NOT NULL,
  `tarikh` date NOT NULL DEFAULT current_timestamp(),
  `sem` int(1) NOT NULL,
  `waktu_penggunaan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_pengunaan`
--

INSERT INTO `info_pengunaan` (`ndp`, `tarikh`, `sem`, `waktu_penggunaan`) VALUES
(23221027, '2022-12-19', 1, '2022-12-18 21:25:13'),
(23221084, '2022-12-19', 1, '2022-12-19 04:31:41'),
(23221092, '2022-12-19', 1, '2022-12-18 21:27:04'),
(23221157, '2022-12-19', 3, '2022-12-19 03:46:17');

-- --------------------------------------------------------

--
-- Table structure for table `masuk`
--

CREATE TABLE `masuk` (
  `ndp` int(10) NOT NULL,
  `waktu_penggunaan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masuk`
--

INSERT INTO `masuk` (`ndp`, `waktu_penggunaan`) VALUES
(23221027, '2022-12-19 04:23:47'),
(23221084, '2022-12-19 03:24:17'),
(23221092, '2022-12-18 21:27:55'),
(23221102, '2022-12-19 04:33:17'),
(23221157, '2022-12-19 04:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE `murid` (
  `nama` varchar(50) NOT NULL,
  `ndp` int(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `no_tel` int(15) NOT NULL,
  `id_history` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`nama`, `ndp`, `password`, `no_tel`, `id_history`) VALUES
('NUR ALIA ATIRAH BINTI AZIZ', 23221027, '0120', 1110582755, '1'),
('AINA ATIKAH BINTI AZHAR', 23221084, '0121', 1162704093, '9'),
('NUR ATHIRAH BINTI SUHAIRI', 23221092, '0124', 147134620, '2'),
('AINA NAJWA BINTI AMRAN', 23221102, '1213', 19979810, '44'),
('ALLYSSA BNT ABDULAH', 23221157, '1235', 196448279, '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_pengunaan`
--
ALTER TABLE `info_pengunaan`
  ADD PRIMARY KEY (`ndp`);

--
-- Indexes for table `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`ndp`);

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`ndp`),
  ADD KEY `nama` (`nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
