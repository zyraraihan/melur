-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2017 at 05:45 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iks`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_pengguna` varchar(122) NOT NULL,
  `kata_laluan` varchar(8) NOT NULL,
  `sah_kata_laluan` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `anugerah`
--

CREATE TABLE `anugerah` (
  `id` int(11) NOT NULL,
  `tahun_terima` varchar(4) NOT NULL,
  `jenis_anugerah` varchar(255) NOT NULL,
  `agensi_pemberi_anugerah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anugerah`
--

INSERT INTO `anugerah` (`id`, `tahun_terima`, `jenis_anugerah`, `agensi_pemberi_anugerah`) VALUES
(1, '2222', 's', 'd'),
(2, '2222', '2', ''),
(3, '2222', '2', ''),
(4, '2333', '2', ''),
(5, '9', 'j', 'k'),
(6, '9', 'j', 'k'),
(7, '3434', '9999', 's'),
(8, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bantuan`
--

CREATE TABLE `bantuan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tahun_terima` varchar(4) NOT NULL,
  `jenis_bantuan` varchar(255) NOT NULL,
  `nilai_bantuan` double NOT NULL,
  `agensi_pemberi_bantuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bantuan`
--

INSERT INTO `bantuan` (`id`, `user_id`, `tahun_terima`, `jenis_bantuan`, `nilai_bantuan`, `agensi_pemberi_bantuan`) VALUES
(1, 0, '1111', 'qwewqe', 123123, 'qwewqe'),
(2, 0, '', 'f', 0, 'f'),
(3, 0, '', 'f', 0, 'f'),
(4, 0, '5', 'T', 0, 'T'),
(5, 0, '5', 'T', 0, 'T'),
(6, 0, '7777', 'hh', 7, 'uu');

-- --------------------------------------------------------

--
-- Table structure for table `pekerja`
--

CREATE TABLE `pekerja` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mahir` int(11) NOT NULL,
  `separuh_mahir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerja`
--

INSERT INTO `pekerja` (`id`, `user_id`, `mahir`, `separuh_mahir`) VALUES
(1, 0, 2, 1),
(2, 0, 1, 1),
(3, 0, 12, 21);

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `pencapaian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id`, `user_id`, `tahun`, `pencapaian`) VALUES
(1, 0, '', ''),
(2, 0, '', ''),
(3, 0, '9999', 'qqq'),
(4, 0, '2222', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kluster` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `tarikh_operasi` date NOT NULL,
  `pasaran_sedia_ada` varchar(255) NOT NULL,
  `jualan_tahunan` varchar(255) NOT NULL,
  `sijil_kualiti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kluster`, `jenis`, `tarikh_operasi`, `pasaran_sedia_ada`, `jualan_tahunan`, `sijil_kualiti`) VALUES
(1, 'qwe', 'wqe', '2017-09-06', 'qwe', '', 'qwe'),
(2, 'Makanan Kering kot', 'Keropok Lekor', '2017-12-31', 'Ontah la nak', '2017', 'MS123-GiTido'),
(3, 'r', 'r', '2017-09-14', 'r', 'r', ''),
(4, 'r', 'r', '2017-09-14', 'r', 'r', ''),
(5, 'j', 'j', '2017-09-06', 'j', 'j', 'j'),
(6, 'f', 'f', '2017-10-16', 'f', 'f', 'f'),
(7, 'f', 'f', '2017-10-16', 'f', 'f', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_penuh` varchar(255) NOT NULL,
  `ic` varchar(14) NOT NULL,
  `password` varchar(8) NOT NULL,
  `jantina` varchar(9) NOT NULL,
  `nama_syarikat` varchar(255) NOT NULL,
  `no_pendaftaran_syarikat` varchar(20) NOT NULL,
  `tarikh_luput_pendaftaran` date NOT NULL,
  `alamat_surat_menyurat` varchar(255) NOT NULL,
  `poskod` varchar(20) NOT NULL,
  `daerah` varchar(255) NOT NULL,
  `negeri` varchar(255) NOT NULL,
  `dun` varchar(255) NOT NULL,
  `parlimen` varchar(255) NOT NULL,
  `no_telefon` varchar(12) NOT NULL,
  `no_faks` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_penuh`, `ic`, `password`, `jantina`, `nama_syarikat`, `no_pendaftaran_syarikat`, `tarikh_luput_pendaftaran`, `alamat_surat_menyurat`, `poskod`, `daerah`, `negeri`, `dun`, `parlimen`, `no_telefon`, `no_faks`, `email`) VALUES
(1, 'Sharin', '900103055383', '1', 'Lelaki', 'lalalala', 'lalala111', '2017-09-22', 'lalaland', '11111', 'lala', 'ne', 'qa', 'ww', '123123123', '67567567', 'lala@gmail.com'),
(2, 'Sharin', '900103055382', '', 'Lelaki', 'lalalala', 'lalala111', '2017-09-22', 'lalaland', '11111', 'lala', 'ne', 'qa', 'ww', '123123123', '67567567', 'lala@lala.com'),
(3, 'Ssddd', '940382-08-4527', '', 'PEREMPUAN', 'dccr', '323dc', '2017-09-29', 'dcc', '34432', 'dscdvf', 'fvfvf', 'fdsdd', 'ddd', '019-0394829', '07-4444444', 'frrr'),
(4, 'hhh', '0123456789', 't', 'Lelaki', 't', 't', '2017-09-03', 't', 't', 't', 't', 't', 't', 't', 'h', 'h'),
(5, 'sd', 'd', '', 'male', 'd', '', '0000-00-00', 'd', 'f', 'd', 'f', '', 'd', '', '', 'anfrsh@gmail.com'),
(6, 'fff', 'f', '', 'male', 'f', '', '0000-00-00', 'f', 'f', 'f', 'f', '', 'f', '', '', 'anfrsh@gmail.com'),
(7, 'wqe', 'ewq', 'azira222', 'male', 'qwe', 'qwe', '2017-09-06', 'wqe', 'wqe', 'qwe', 'wqe', 'qwe', 'asdsadqwe', 'wqeqwe', 'sadsad', 'anfrsh@gmail.com'),
(8, 'sxsx', '970621055176', 'azira222', 'male', 'sa', 'sxx', '2017-09-08', 'xs', 'sx', 'sa', 'x', 'sa', 'xs', 'sa', 'sx', 'anfrsh@gmail.com'),
(9, '111', '111', 'azira222', 'male', '111', '111', '2017-10-25', '111', '111', '111', '111', '111', '111', '111', '0199299199', '111@111.111'),
(10, '111', '111', 'azira222', 'male', '111', '111', '2017-10-25', '111', '111', '111', '111', '111', '111', '111', '0199299199', '111@111.111'),
(11, 'mm', 'm', 'mmmmmmmm', 'male', 'm', 'm', '2017-10-13', 'm', 'm', 'm', 'm', 'm', 'm', 'm', '0199299199', 'a@dd'),
(12, '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(13, '.', 'f', 'azira222', 'male', 'g', '.', '2017-10-31', '.', 'j', 'o', 'o', '8', 'l', 'y', '0199299199', 'a@dd'),
(14, '', '', 'azira222', 'male', '', '', '0000-00-00', '', '', '', '', '', '', '', '0199299199', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anugerah`
--
ALTER TABLE `anugerah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bantuan`
--
ALTER TABLE `bantuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pekerja`
--
ALTER TABLE `pekerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `anugerah`
--
ALTER TABLE `anugerah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `bantuan`
--
ALTER TABLE `bantuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pekerja`
--
ALTER TABLE `pekerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
