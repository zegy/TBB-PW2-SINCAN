-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `Id_admin` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Bdate` date NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Telp` int(15) NOT NULL,
  `Sex` varchar(6) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `antrian`;
CREATE TABLE `antrian` (
  `Id_antrian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `kasir`;
CREATE TABLE `kasir` (
  `Id_kasir` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Bdate` date NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Telp` int(15) NOT NULL,
  `Sex` varchar(6) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `owner`;
CREATE TABLE `owner` (
  `Id_owner` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Bdate` date NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Telp` int(15) NOT NULL,
  `Sex` varchar(6) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE `pelanggan` (
  `Id_pelangaan` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Telp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `perawatan`;
CREATE TABLE `perawatan` (
  `Id_perawatan` int(11) NOT NULL,
  `Nama_perawatan` varchar(20) NOT NULL,
  `Harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk` (
  `Id_produk` int(11) NOT NULL,
  `Nama_produk` varchar(20) NOT NULL,
  `Harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `transaksi_pembelian`;
CREATE TABLE `transaksi_pembelian` (
  `Id_transaksi_pembelian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `transaksi_perawatan`;
CREATE TABLE `transaksi_perawatan` (
  `Id_transaksi_perawatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2017-07-12 08:25:35
