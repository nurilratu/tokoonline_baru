-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2018 at 07:25 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`) VALUES
(7, 'admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(5) NOT NULL,
  `kategori_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `kuantitas_barang` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `kategori_barang`, `nama_barang`, `kuantitas_barang`, `keterangan`, `harga_barang`, `gambar`) VALUES
(2, 'women', 'Sepatu Pantofel Women', 12, 'Njashghad dhgsdai bshbd hasdgtw bahsgdha djdnj jdsjda agsdhgash hwgeywy bdjsda,nbsadjsb hdjsa vasgdhkl svdsvd bjehwegw svhs jabsdhs mdsbd bashd hasdha hasds hasd adgsy jadk sdadshd havsd', 21000, '21ab885d22d104e05baecce20ebb42f3.jpg'),
(3, 'man', 'Man', 11, 'dnjndsnjndjs dfjdn', 110000, '0f6397bba64e79d8a6ed8b1d290d7529.jpg'),
(4, 'kids', 'kids', 22, 'cmjdnvj jvnjnd vjfndj', 123121, '7e590e8d580b89b2efde249af8fef913.jpg'),
(5, 'sport', 'Sport', 33, 'ddnjnfj jnjsnf', 323213131, 'e4c6ec11b663c8cf1a758f6f974aae52.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `username`, `password`, `email`, `alamat`, `no_telp`, `status`) VALUES
(2, 'nurilratu', 'adaw', 'nurilratu@gmail.com', 'Manyar Sabrangan VI/5, Surabaya', '081232443655', '1'),
(3, 'efrizals', 'efriza', 'efrizals@gmail.com', 'Jl Bla Bla', '0819281728192', '1');

-- --------------------------------------------------------

--
-- Table structure for table `item_keranjang`
--

CREATE TABLE `item_keranjang` (
  `id_keranjang` int(5) NOT NULL,
  `id_barang` int(5) NOT NULL,
  `total_barang` int(20) NOT NULL,
  `sub_total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item_nota`
--

CREATE TABLE `item_nota` (
  `id_nota` int(5) NOT NULL,
  `id_barang` int(5) NOT NULL,
  `total_barang` int(50) NOT NULL,
  `total_harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keranjang_belanja`
--

CREATE TABLE `keranjang_belanja` (
  `id_keranjang` int(5) NOT NULL,
  `id_customer` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(5) NOT NULL,
  `tanggal_transaksi` date DEFAULT NULL,
  `total_pembelian` int(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`id_nota`, `tanggal_transaksi`, `total_pembelian`, `status`) VALUES
(2, '2018-03-09', 900000, '1'),
(3, '2008-11-26', 80500, '0');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id_gambar` int(10) NOT NULL,
  `nama_gambar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `item_keranjang`
--
ALTER TABLE `item_keranjang`
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_keranjang` (`id_keranjang`);

--
-- Indexes for table `item_nota`
--
ALTER TABLE `item_nota`
  ADD KEY `id_nota` (`id_nota`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `keranjang_belanja`
--
ALTER TABLE `keranjang_belanja`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id_gambar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id_gambar` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item_keranjang`
--
ALTER TABLE `item_keranjang`
  ADD CONSTRAINT `item_keranjang_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_keranjang_ibfk_2` FOREIGN KEY (`id_keranjang`) REFERENCES `keranjang_belanja` (`id_keranjang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `item_nota`
--
ALTER TABLE `item_nota`
  ADD CONSTRAINT `item_nota_ibfk_1` FOREIGN KEY (`id_nota`) REFERENCES `nota` (`id_nota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_nota_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `keranjang_belanja`
--
ALTER TABLE `keranjang_belanja`
  ADD CONSTRAINT `keranjang_belanja_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
