-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07 Mei 2018 pada 18.02
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `penulis`, `isi`) VALUES
(4, 'lorem ipsum adalah', 'Abdullah faqih', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse auctor turpis sed ipsum euismod, sollicitudin bibendum erat porttitor. Vestibulum viverra maximus urna, vitae commodo purus tincidunt in. Suspendisse dignissim libero a blandit ultrices. Suspendisse vitae euismod orci, et auctor sapien. Curabitur ultrices nisi imperdiet nisi suscipit, non consequat magna lacinia. Donec consectetur pretium ligula, sit amet lobortis orci pretium eu. Nulla quis leo at ante finibus tristique. In id vestibulum ligula. Integer egestas vitae turpis semper vulputate.\r\n\r\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla ac vestibulum eros. Integer malesuada nec sem eu fermentum. Duis pulvinar placerat aliquam. Vestibulum tristique at eros vel scelerisque. Quisque vel ultrices eros. Phasellus et bibendum risus, non vehicula nisl. Donec sit amet quam arcu. ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `ID` int(9) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`ID`, `Nama`, `Email`, `Password`) VALUES
(1, 'Abdullah Faqih', 'abdullahfaqih@gmail.com', 'faqih'),
(2, 'Gaiska Artama Putra', 'Gaiska@gmail.com', 'gaiska'),
(3, 'Mahardika Arya', 'mahardika@gmail.com', 'dika'),
(4, 'Wasi Aspirawan', 'wasi@gmail.com', 'wasi'),
(7, 'Awang Afri', 'awang@gmail.com', 'awang'),
(9, 'Latif Purwa', 'latif@gmail.com', 'latif'),
(22, 'a', 'a', 'a'),
(26, 'alan', 'alan1234@gmail.com', 'alan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
