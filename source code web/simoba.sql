-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2022 at 04:58 PM
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
-- Database: `simoba`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_grafik`
--

CREATE TABLE `tb_grafik` (
  `id` int(11) NOT NULL,
  `jarak` int(11) NOT NULL,
  `flow` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_grafik`
--

INSERT INTO `tb_grafik` (`id`, `jarak`, `flow`, `tanggal`) VALUES
(1, 0, 0, '2022-09-02'),
(2, 0, 200, '2022-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sensor`
--

CREATE TABLE `tb_sensor` (
  `id` int(11) NOT NULL,
  `banjir` int(11) NOT NULL,
  `flow` decimal(10,2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sensor`
--

INSERT INTO `tb_sensor` (`id`, `banjir`, `flow`, `date`) VALUES
(4251, 0, '0.00', '2022-09-06 11:49:32'),
(4252, 161, '0.00', '2022-09-06 07:01:08'),
(4253, 164, '0.00', '2022-09-06 07:01:13'),
(4254, 69, '4.39', '2022-09-06 07:01:19'),
(4255, 162, '5.86', '2022-09-06 07:01:25'),
(4256, 69, '0.00', '2022-09-06 07:01:30'),
(4257, 6, '0.00', '2022-09-06 07:01:44'),
(4258, 4, '0.00', '2022-09-06 07:01:49'),
(4259, 68, '0.00', '2022-09-06 07:01:55'),
(4260, 164, '0.00', '2022-09-06 07:02:01'),
(4261, 160, '0.00', '2022-09-06 07:02:06'),
(4262, 162, '0.00', '2022-09-06 07:02:12'),
(4263, 70, '0.00', '2022-09-06 07:02:18'),
(4264, 161, '0.00', '2022-09-06 07:02:23'),
(4265, 70, '0.00', '2022-09-06 07:02:29'),
(4266, 161, '0.00', '2022-09-06 07:02:35'),
(4267, 161, '0.00', '2022-09-06 07:02:40'),
(4268, 162, '0.00', '2022-09-06 07:02:46'),
(4269, 68, '0.00', '2022-09-06 07:02:52'),
(4270, 161, '0.00', '2022-09-06 07:02:57'),
(4271, 162, '0.00', '2022-09-06 07:03:03'),
(4272, 162, '0.00', '2022-09-06 07:03:09'),
(4273, 68, '0.00', '2022-09-06 07:03:15'),
(4274, 161, '0.00', '2022-09-06 07:03:20'),
(4275, 165, '0.00', '2022-09-06 07:03:26'),
(4276, 8, '0.00', '2022-09-06 07:03:31'),
(4277, 6, '0.00', '2022-09-06 07:03:36'),
(4278, 7, '0.00', '2022-09-06 07:03:41'),
(4279, 6, '0.00', '2022-09-06 07:03:47'),
(4280, 4, '0.00', '2022-09-06 07:03:53'),
(4281, 68, '0.00', '2022-09-06 07:03:58'),
(4282, 162, '0.00', '2022-09-06 07:04:07'),
(4283, 68, '0.00', '2022-09-06 07:04:13'),
(4284, 70, '0.00', '2022-09-06 07:04:18'),
(4285, 161, '0.00', '2022-09-06 07:04:24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `password`, `status`) VALUES
(40, 'admin', 'admin123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_grafik`
--
ALTER TABLE `tb_grafik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sensor`
--
ALTER TABLE `tb_sensor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_grafik`
--
ALTER TABLE `tb_grafik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_sensor`
--
ALTER TABLE `tb_sensor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4286;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
