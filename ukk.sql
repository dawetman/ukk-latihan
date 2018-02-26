-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2018 at 07:43 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`) VALUES
(1, 'admin', 'da146e60619d5e8252c3c67597a566eb', 'admin@mail.com'),
(2, 'vont', '25ff86f1474bedf8aa79f5f49ae3d93e', 'vont@mail.com'),
(3, 'gilang', 'gilang', 'asdas');

-- --------------------------------------------------------

--
-- Table structure for table `bandara`
--

CREATE TABLE `bandara` (
  `id_bandara` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bandara`
--

INSERT INTO `bandara` (`id_bandara`, `name`, `city`) VALUES
('DPS', 'Ngurah Rai', 'Bali'),
('HLP', 'Halim Perdanakusuma', 'Jakarta'),
('JOG', 'Adisutjipto', 'Yogyakarta'),
('SRG', 'Achmad Yani', 'Semarang');

-- --------------------------------------------------------

--
-- Table structure for table `maskapai`
--

CREATE TABLE `maskapai` (
  `id_maskapai` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id_pesawat` varchar(10) NOT NULL,
  `class` text NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maskapai`
--

INSERT INTO `maskapai` (`id_maskapai`, `name`, `id_pesawat`, `class`, `logo`) VALUES
('AIRASIAEXEC', 'Air Asia', 'PK-LEH', 'Executive', 'airasia.png'),
('AIRASIAREG', 'Air Asia', 'PK-LEH', 'Regular', 'airasia.png'),
('CITILINKEXEC', 'Citilink', 'PK-GPF', 'Executive', 'citilink.png'),
('CITILINKREG', 'Citilink', 'PK-GPF', 'Regular', 'citilink.png'),
('GARUDAEXEC', 'Garuda Indonesia', 'PK-GFZ', 'Executive', 'garudaindonesia.png'),
('GARUDAREG', 'Garuda Indonesia', 'PK-GFZ', 'Regular', 'garudaindonesia.png'),
('LIONEXC', 'Lion Air', 'PK-LOQ', 'Executive', 'lionair.png'),
('LIONREG', 'Lion Air', 'PK-LOQ', 'Regular', 'lionair.png');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_card` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name_f` varchar(30) NOT NULL,
  `name_b` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `alias` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `id_user`, `id_card`, `email`, `name_f`, `name_b`, `phone`, `gender`, `address`, `city`, `country`, `zip`, `alias`) VALUES
(1, 0, '000123123', 'andimuhammad@mail.com', 'Andi', 'Muhammad', '08000123', 'Laki-Laki', 'Jl. Jend. Sudirman No. 20', 'Purwokerto', 'Indonesia', '53123', 'Andi'),
(2, 0, '000234', 'lianamargaretha@mail.com', 'Liana', 'Margaretha', '08000234', 'Perempuan', 'Jl. Mawar Hitam No. 6', 'Jakarta', 'Indonesia', '53234', 'Liana');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `name`, `email`, `subject`, `message`) VALUES
(2, 'Liana Margaretha', 'lianamargaretha@mail.com', 'Komplain Booking', 'Ini kenapa booking gak jadi-jadi ya.'),
(4, 'Andi Muhammad', 'andimuhammad@mail.com', 'Komplain Search', 'Kok searchnya belom jadi ya?');

-- --------------------------------------------------------

--
-- Table structure for table `pesawat`
--

CREATE TABLE `pesawat` (
  `id_pesawat` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesawat`
--

INSERT INTO `pesawat` (`id_pesawat`, `name`, `detail`) VALUES
('PK-GFZ', 'Boeing 737-86N(WL)', 'Garuda Indonesia'),
('PK-GPF', 'Airbus A330-341', 'Citilink'),
('PK-LEH', 'Airbus A330-343', 'Air Asia'),
('PK-LOQ', 'Boeing 737-8GP(WL)', 'Lion Air');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(10) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `seat` varchar(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_pelanggan` int(10) NOT NULL,
  `id_rute` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
  `id_rute` varchar(30) NOT NULL,
  `id_maskapai` varchar(20) NOT NULL,
  `id_route_from` varchar(10) NOT NULL,
  `id_route_to` varchar(10) NOT NULL,
  `departure` time NOT NULL,
  `arrival` time NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`id_rute`, `id_maskapai`, `id_route_from`, `id_route_to`, `departure`, `arrival`, `price`) VALUES
('AIRASIAEXEC-JOG-HLP-01', 'AIRASIAEXEC', 'JOG', 'HLP', '04:00:00', '07:00:00', '500000'),
('AIRASIAREG-JOG-SRG-01', 'AIRASIAREG', 'JOG', 'SRG', '08:00:00', '09:15:00', '350000'),
('CITILINKREG-SRG-HLP-01', 'CITILINKREG', 'SRG', 'HLP', '22:00:00', '00:45:00', '350000'),
('GARUDAEXEC-DPS-JOG-01', 'GARUDAEXEC', 'DPS', 'JOG', '01:00:00', '03:00:00', '700000'),
('GARUDAREG-', 'GARUDAREG', 'SRG', 'JOG', '11:30:00', '12:45:00', '450000'),
('LIONEXEC-HLP-DPS-01', 'LIONEXEC', 'DPS', 'DPS', '16:00:00', '19:00:00', '1200000'),
('LIONREG-HLP-DPS-01', 'LIONREG', 'HLP', 'DPS', '08:00:00', '11:00:00', '800000'),
('LIONREG-HLP-JOG-01', 'LIONREG', 'HLP', 'JOG', '07:00:00', '08:00:00', '400000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`) VALUES
(1, 'andimuhammad', '6eba861739f6c5d6a34deb39e44baacf', 'andimuhammad@mail.com'),
(2, 'lianamargaretha', 'fcb93f0690755e2196198407b7aa2007', 'lianamargaretha@mail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bandara`
--
ALTER TABLE `bandara`
  ADD PRIMARY KEY (`id_bandara`);

--
-- Indexes for table `maskapai`
--
ALTER TABLE `maskapai`
  ADD PRIMARY KEY (`id_maskapai`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD UNIQUE KEY `id_card` (`id_card`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `pesawat`
--
ALTER TABLE `pesawat`
  ADD PRIMARY KEY (`id_pesawat`) USING BTREE;

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id_rute`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
