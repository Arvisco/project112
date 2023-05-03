-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 03, 2023 at 10:47 PM
-- Server version: 10.11.2-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xxx`
--

-- --------------------------------------------------------

--
-- Table structure for table `xxx`
--

CREATE TABLE `xxx` (
  `id` int(11) NOT NULL,
  `pemprov` varchar(100) NOT NULL,
  `modis` bigint(200) NOT NULL,
  `modiz` varchar(20) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `kepemilikan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `xxx`
--

INSERT INTO `xxx` (`id`, `pemprov`, `modis`, `modiz`, `jumlah`, `kepemilikan`) VALUES
(1, 'Provinsi Sulsel', 722436000000, '000', '72243600000000', '33.11'),
(2, 'Kab. Luwu Timur', 129999000000, '000', '12999900000000', '5.96'),
(3, 'Kab. Wajo', 92049000000, '500000000000', '9704900000000', '4.45'),
(4, 'Kota Makassar', 91184000000, '000', '9118400000000', '4.18'),
(5, 'Kab. Soppeng', 88849000000, '000', '8884900000000', '4.07'),
(6, 'Kab. Bone', 80439000000, '000', '8043900000000', '3.69'),
(7, 'Kab. Enrekang', 73542000000, '0.00', '7354200000000', '3.37'),
(8, 'Kab. Pangkep', 71306000000, '0.00', '7130600000000', '3.27'),
(9, 'Kab. Selayar', 63349000000, '0.00', '6334900000000', '2.90'),
(10, 'Kab. Pinrang', 58300000000, '0.00', '5830000000000 ', '2.67'),
(11, 'Kab. Maros', 57374000000, '0.00', '5737400000000', '2.63'),
(12, 'Kab. Barru', 54859000000, '0.00', '5485900000000', '2.51'),
(13, 'Kab. Takalar', 53230000000, '0.00', '5323000000000', '2.44'),
(14, 'Kota Pare-pare', 48930000000, '0.00', '4893000000000', '2.24'),
(15, 'Provinsi Sulbar', 44769000000, '0.00', '4476900000000', '2.05'),
(16, 'Kab. Tana Toraja', 37578000000, '300000000000', '4057800000000', '1.86'),
(17, 'Kab. Jeneponto', 38597000000, '100000000000', '3959700000000', '1.82'),
(18, 'Kota Palopo', 34626000000, '0.00', '3462600000000', '1.59'),
(19, 'Kab. Bantaeng', 34129000000, '0.00', '3412900000000', '1.56'),
(20, 'Kab. Luwu', 32805000000, '0.00', '3280500000000', '1.50'),
(21, 'Kab. Sidrap', 31475000000, '0.00', '3147500000000', '1.44'),
(22, 'Kab. Gowa', 25142000000, '500000000000', '3014200000000', '1.38'),
(23, 'Kab. Sinjai', 28696000000, '0.00', '2869600000000 ', '1.32'),
(24, 'Kab. Toraja Utara', 24996000000, '150000000000 ', '2649600000000', '1.21'),
(25, 'Kab. Mamuju', 23407000000, '0.00', '2340700000000', '1.07'),
(26, 'Kab. Polman', 21413000000, '0.00', '2141300000000', '0.98'),
(27, 'Kab. Bulukumba', 20420000000, '0.00', '2042000000000', '0.94'),
(28, 'Kab. Majene', 18236000000, '0.00', '1823600000000', '0.84'),
(29, 'Kab. Mamasa', 18219000000, '0.00', '1821900000000', '0.84'),
(30, 'Kab. Mamuju Utara', 17395000000, '0.00', '1739500000000', '0.80'),
(31, 'Kab. Luwu Utara', 17047000000, '0.00', '1704700000000', '0.78'),
(32, 'Koperasi PT. Bank Sulselbar', 4800000000, '397100000000', '877100000000', '0.40'),
(33, 'Kab. Mamuju Tengah', 3000000000, '0.00', '300000000000', '0.13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `xxx`
--
ALTER TABLE `xxx`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `xxx`
--
ALTER TABLE `xxx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
