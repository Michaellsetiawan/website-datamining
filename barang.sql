-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2022 at 10:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mining`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `januari` int(10) DEFAULT NULL,
  `februari` int(10) DEFAULT NULL,
  `maret` int(10) DEFAULT NULL,
  `april` int(10) DEFAULT NULL,
  `mei` int(10) DEFAULT NULL,
  `juni` int(10) DEFAULT NULL,
  `juli` int(10) DEFAULT NULL,
  `agustus` int(10) DEFAULT NULL,
  `september` int(10) DEFAULT NULL,
  `oktober` int(10) DEFAULT NULL,
  `november` int(10) DEFAULT NULL,
  `desember` int(10) DEFAULT NULL,
  `cluster` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `cluster`) VALUES
(131, 'Lampu Bohlam Blub 3 w', 11, 8, 11, 7, 5, 3, 4, 3, 2, 5, 3, 4, 'C2'),
(132, 'Lampu Bohlam Blub 5 w', 9, 9, 11, 5, 4, 4, 3, 2, 4, 3, 4, 5, 'C2'),
(133, 'Lampu Bohlam Blub 7 w', 16, 13, 13, 4, 5, 3, 5, 4, 6, 3, 7, 4, 'C3'),
(134, 'Lampu Bohlam Blub 9 w', 17, 19, 14, 5, 3, 7, 3, 5, 7, 9, 4, 5, 'C3'),
(135, 'Lampu Bohlam Blub 11 w', 11, 11, 23, 6, 6, 5, 5, 3, 4, 7, 6, 4, 'C3'),
(136, 'Lampu Bohlam Blub 15 w', 21, 12, 19, 7, 8, 3, 6, 3, 5, 7, 4, 2, 'C3'),
(137, 'Lampu Bohlam Blub 18 w', 21, 11, 7, 6, 5, 4, 6, 6, 4, 5, 8, 9, 'C3'),
(138, 'Lampu Bohlam Blub 23 w', 17, 21, 11, 8, 11, 6, 7, 2, 6, 5, 3, 4, 'C3'),
(139, 'Lampu Kapsul Blub 20 w', 14, 8, 13, 4, 5, 7, 3, 4, 7, 3, 4, 7, 'C3'),
(140, 'Lampu Kapsul Blub 30 w', 11, 11, 15, 6, 3, 5, 4, 3, 6, 9, 4, 7, 'C3'),
(141, 'Lampu Kapsul Blub 40 w', 7, 5, 9, 5, 2, 7, 5, 4, 6, 3, 5, 4, 'C2'),
(142, 'Lampu Kapsul Blub 50 w', 5, 3, 7, 4, 2, 3, 3, 6, 2, 4, 3, 2, 'C1'),
(143, 'Lampu Stick Blub 5 w', 4, 7, 9, 7, 1, 4, 2, 3, 2, 5, 3, 4, 'C2'),
(144, 'Lampu Stick Blub 7 w', 11, 8, 7, 8, 2, 3, 4, 3, 5, 2, 5, 2, 'C2'),
(145, 'Lampu Stick Blub 9 w', 13, 11, 8, 3, 4, 6, 4, 2, 4, 1, 2, 4, 'C2'),
(146, 'Lampu Stick Blub 12 w', 9, 12, 15, 5, 2, 5, 5, 5, 2, 2, 1, 4, 'C2'),
(147, 'Lampu Stick Blub 15 w', 21, 14, 12, 8, 5, 5, 6, 5, 4, 6, 4, 8, 'C3'),
(148, 'Lampu TL 18 w', 6, 9, 11, 2, 3, 2, 2, 4, 1, 4, 1, 5, 'C2'),
(149, 'Lampu TL 38 w', 11, 16, 12, 4, 2, 3, 5, 5, 2, 2, 5, 3, 'C3'),
(150, 'Lampu TL 40 w', 15, 12, 13, 5, 4, 6, 5, 7, 8, 6, 8, 7, 'C3'),
(151, 'Kabel Ties 2.5', 9, 14, 7, 2, 2, 3, 2, 5, 7, 2, 3, 6, 'C2'),
(152, 'Kabel Ties 3.6', 5, 12, 9, 3, 4, 2, 3, 7, 8, 2, 4, 4, 'C2'),
(153, 'Kabel Ties 4.8', 12, 8, 8, 3, 2, 1, 1, 5, 7, 3, 6, 1, 'C2'),
(154, 'TV Antenna AIO -235', 5, 3, 5, 1, 1, 1, 1, 1, 2, 1, 2, 1, 'C1'),
(155, 'TV Antenna TYS', 4, 2, 2, 1, 1, 1, 1, 1, 1, 2, 1, 1, 'C1'),
(156, 'Kabel Listrik NYY', 11, 7, 9, 4, 4, 6, 3, 3, 3, 4, 5, 3, 'C2'),
(157, 'Kabel Listrik NYA', 14, 11, 12, 6, 2, 3, 2, 2, 5, 5, 3, 2, 'C3'),
(158, 'Kabel Listrik NYM', 12, 15, 14, 6, 5, 4, 6, 5, 8, 6, 7, 9, 'C3'),
(159, 'Steker kotak 1 lubang', 7, 3, 6, 3, 2, 3, 4, 1, 2, 4, 3, 2, 'C1'),
(160, 'Steker kotak 2 lubang', 11, 5, 4, 2, 4, 4, 2, 1, 1, 2, 3, 1, 'C1'),
(161, 'Steker kotak 3 lubang', 14, 11, 7, 2, 3, 2, 5, 2, 2, 3, 3, 5, 'C2'),
(162, 'Steker kotak 4 lubang', 12, 11, 9, 1, 1, 2, 3, 3, 4, 4, 3, 2, 'C2'),
(163, 'Colokan listrik 2 lubang 2 m', 9, 8, 7, 1, 2, 3, 5, 3, 2, 3, 4, 1, 'C2'),
(164, 'Colokan listrik 3 lubang 2 m', 4, 7, 5, 2, 2, 1, 2, 1, 3, 2, 2, 4, 'C1'),
(165, 'Colokan listrik 4 lubang 2 m', 3, 11, 6, 1, 3, 4, 5, 4, 1, 4, 2, 5, 'C2'),
(166, 'Colokan listrik 5 lubang 2 m', 12, 9, 6, 1, 4, 2, 3, 3, 4, 1, 2, 6, 'C2'),
(167, 'Colokan listrik 6 lubang 2 m', 8, 7, 4, 1, 2, 3, 4, 5, 2, 1, 4, 2, 'C1'),
(168, 'Kabel roll 3 lubang 5 m', 11, 4, 5, 2, 2, 3, 3, 3, 3, 3, 4, 4, 'C1'),
(169, 'Kabel roll 3 lubang 9 m', 7, 7, 3, 1, 4, 2, 3, 3, 1, 4, 3, 5, 'C1'),
(170, 'Kabel roll 3 lubang 12 m', 15, 9, 6, 2, 3, 2, 2, 1, 1, 3, 2, 3, 'C2'),
(171, 'Kabel roll 4 lubang 5 m', 8, 5, 1, 3, 2, 3, 3, 2, 1, 2, 3, 4, 'C1'),
(172, 'Kabel roll 4 lubang 9 m', 9, 6, 3, 2, 1, 5, 1, 5, 2, 3, 1, 5, 'C1'),
(173, 'Kabel roll 4 lubang 12 m', 5, 3, 5, 1, 4, 2, 2, 2, 2, 4, 2, 3, 'C1'),
(174, 'Saklar 1 lampu ', 6, 8, 7, 1, 3, 2, 2, 3, 3, 5, 4, 7, 'C2'),
(175, 'Saklar 2 lampu ', 12, 7, 6, 1, 2, 1, 3, 2, 2, 4, 2, 6, 'C2'),
(176, 'Kunci L', 8, 6, 6, 2, 3, 2, 1, 1, 4, 5, 3, 3, 'C1'),
(177, 'Obeng kembang', 6, 9, 5, 1, 1, 2, 5, 4, 1, 3, 1, 5, 'C1'),
(178, 'Obeng min', 13, 7, 8, 1, 2, 1, 3, 1, 3, 2, 4, 6, 'C2'),
(179, 'Kabel HDMI', 6, 5, 2, 1, 2, 2, 1, 2, 5, 4, 2, 2, 'C1'),
(180, 'Kabel LAN', 7, 3, 3, 1, 1, 1, 1, 3, 4, 3, 1, 1, 'C1'),
(181, 'Fitting Plafon', 8, 7, 6, 3, 1, 3, 2, 1, 5, 2, 2, 5, 'C1'),
(182, 'Fitting Gantung', 7, 11, 5, 4, 2, 2, 1, 1, 2, 2, 4, 3, 'C2'),
(183, 'Fitting colok saklar on/off', 9, 8, 3, 3, 3, 4, 3, 5, 3, 4, 3, 5, 'C1'),
(184, 'Double Tape', 5, 3, 7, 1, 1, 2, 3, 1, 4, 3, 2, 2, 'C1'),
(185, 'Solatip', 4, 6, 8, 2, 1, 3, 2, 2, 3, 2, 4, 6, 'C1'),
(186, 'Kabel Klip', 6, 5, 11, 1, 2, 2, 1, 4, 2, 1, 2, 4, 'C1'),
(187, 'Cutter', 4, 3, 2, 1, 1, 1, 2, 2, 1, 1, 2, 1, 'C1'),
(188, 'isi Cutter', 12, 8, 7, 4, 2, 3, 3, 3, 4, 4, 5, 2, 'C2'),
(189, 'Gunting', 5, 3, 6, 1, 1, 1, 1, 2, 2, 2, 1, 2, 'C1'),
(190, 'testpen', 8, 6, 7, 3, 2, 3, 2, 1, 4, 3, 2, 4, 'C1'),
(191, 'Tongkat Lampu', 2, 1, 2, 1, 1, 2, 1, 1, 2, 2, 3, 1, 'C1'),
(192, 'Black tape', 3, 2, 5, 1, 1, 1, 1, 2, 1, 1, 2, 1, 'C1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
