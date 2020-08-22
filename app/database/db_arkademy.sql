-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2020 at 03:07 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arkademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `keterangan`, `harga`, `jumlah`) VALUES
(11, 'ASUS ROG Zephyrus Duo 15', 'ROG Zephyrus Duo 15 adalah laptop gaming andalan dari Asus yang menampilkan chip 10-generasi Intel Intel, RTX Super GPU Nvidia, dan mengintegrasikan keyboard RGB-backlit per-key dan layar sekunder ROG ScreenPad Plus.', 95000000, 50),
(12, 'Lenovo Legion 5 15', 'Legion 5 15 didukung AMD Ryzen, NVIDIA GeForce GTX, layar FHD 15,6\" 120Hz atau 144Hz, design didukung Coldfront 2.0 yang mampu mendinginkan dan menghilangkan panas lewat termal 2 saluran, keyboard TrueStrike untuk mendukung bermain game.', 15500000, 12),
(13, 'ASUS VivoBook Ultra A412', 'ASUS VivoBook Ultra A412 layar bebas-bezel NanoEdge 14\", dimensi ringkas dan berat sangat ringan, dibekali NumberPad dengan mengetuk touchpad khusu untuk mengubahnya menjadi keypad numerik LED,Keyboard backlit, sensor sidik jari.', 6300000, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE_produk` (`nama_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
