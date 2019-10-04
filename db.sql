/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : minimarket

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-10-04 14:55:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for barang
-- ----------------------------
DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `barang_id` int(11) NOT NULL AUTO_INCREMENT,
  `barang_barcode` varchar(100) NOT NULL,
  `barang_nama` varchar(100) NOT NULL,
  `barang_kategori_id` int(11) NOT NULL,
  `barang_aktif` enum('N','Y') NOT NULL DEFAULT 'Y',
  `barang_diskon` enum('N','Y') NOT NULL DEFAULT 'N',
  `barang_create` datetime NOT NULL,
  `barang_update` datetime DEFAULT NULL,
  `barang_type` enum('box','pcs') NOT NULL DEFAULT 'pcs',
  PRIMARY KEY (`barang_id`,`barang_barcode`),
  KEY `barang_kategori_id` (`barang_kategori_id`),
  KEY `barang_barcode` (`barang_barcode`),
  CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`barang_kategori_id`) REFERENCES `kategori` (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for barang_diskon
-- ----------------------------
DROP TABLE IF EXISTS `barang_diskon`;
CREATE TABLE `barang_diskon` (
  `diskon_id` int(11) NOT NULL AUTO_INCREMENT,
  `diskon_barang_id` int(11) NOT NULL,
  `diskon_type` enum('PERSEN','NOMINAL') NOT NULL DEFAULT 'NOMINAL',
  `diskon_angka` double NOT NULL,
  `diskon_aktif` enum('N','Y') NOT NULL DEFAULT 'N',
  `diskon_tgl_awal` date DEFAULT NULL,
  `diskon_tgl_akhir` date DEFAULT NULL,
  `diskon_pelanggan_type` varchar(20) NOT NULL,
  `diskon_create` datetime NOT NULL,
  `diskon_update` datetime DEFAULT NULL,
  `diskon_user_input` int(11) NOT NULL,
  PRIMARY KEY (`diskon_id`),
  KEY `diskon_barang_id` (`diskon_barang_id`),
  KEY `diskon_user_input` (`diskon_user_input`),
  CONSTRAINT `barang_diskon_ibfk_1` FOREIGN KEY (`diskon_barang_id`) REFERENCES `barang` (`barang_id`),
  CONSTRAINT `barang_diskon_ibfk_2` FOREIGN KEY (`diskon_user_input`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for barang_harga
-- ----------------------------
DROP TABLE IF EXISTS `barang_harga`;
CREATE TABLE `barang_harga` (
  `harga_id` int(11) NOT NULL AUTO_INCREMENT,
  `harga_barang_id` int(11) NOT NULL,
  `harga_barang_stok` bigint(20) NOT NULL,
  `harga_barang_jumlah` bigint(20) NOT NULL,
  `harga_barang_total` bigint(20) NOT NULL,
  `harga_barang_beli` double NOT NULL,
  `harga_barang_jual` double NOT NULL,
  `harga_barang_create` datetime NOT NULL,
  `harga_barang_update` datetime DEFAULT NULL,
  PRIMARY KEY (`harga_id`),
  KEY `harga_barang_id` (`harga_barang_id`),
  CONSTRAINT `barang_harga_ibfk_1` FOREIGN KEY (`harga_barang_id`) REFERENCES `barang` (`barang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for barang_pembelian
-- ----------------------------
DROP TABLE IF EXISTS `barang_pembelian`;
CREATE TABLE `barang_pembelian` (
  `pembelian_id` int(11) NOT NULL AUTO_INCREMENT,
  `pembelian_barang_barcode` varchar(100) NOT NULL,
  `pembelian_jumlah` double(10,0) NOT NULL,
  `pembelian_create` datetime NOT NULL,
  `pembelian_update` datetime DEFAULT NULL,
  `pembelian_user_id` int(11) NOT NULL,
  PRIMARY KEY (`pembelian_id`),
  KEY `pembelian_user_input` (`pembelian_user_id`),
  CONSTRAINT `barang_pembelian_ibfk_1` FOREIGN KEY (`pembelian_user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for barang_retur
-- ----------------------------
DROP TABLE IF EXISTS `barang_retur`;
CREATE TABLE `barang_retur` (
  `retur_id` int(11) NOT NULL AUTO_INCREMENT,
  `retur_barang_id` int(11) NOT NULL,
  `retur_jumlah` double(10,0) NOT NULL,
  `retur_type` varchar(20) NOT NULL,
  `retur_alasan` text NOT NULL,
  `retur_create` datetime NOT NULL,
  `retur_update` datetime DEFAULT NULL,
  `retur_user_id` int(11) NOT NULL,
  PRIMARY KEY (`retur_id`),
  KEY `retur_barang_id` (`retur_barang_id`),
  KEY `retur_user_id` (`retur_user_id`),
  CONSTRAINT `barang_retur_ibfk_1` FOREIGN KEY (`retur_barang_id`) REFERENCES `barang` (`barang_id`),
  CONSTRAINT `barang_retur_ibfk_2` FOREIGN KEY (`retur_user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for hold
-- ----------------------------
DROP TABLE IF EXISTS `hold`;
CREATE TABLE `hold` (
  `hold_id` int(11) NOT NULL AUTO_INCREMENT,
  `hold_transaksi_temp_urut` int(11) NOT NULL,
  `hold_user_id` int(11) NOT NULL,
  `hold_created_at` datetime NOT NULL,
  `hold_updated_at` datetime NOT NULL,
  PRIMARY KEY (`hold_id`,`hold_transaksi_temp_urut`),
  KEY `hold_user_id` (`hold_user_id`),
  KEY `hold_transaksi_temp_urut` (`hold_transaksi_temp_urut`),
  CONSTRAINT `hold_ibfk_1` FOREIGN KEY (`hold_user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_nama` varchar(100) NOT NULL,
  `kategori_market_id` int(11) NOT NULL,
  `kategori_create` datetime NOT NULL,
  `kategori_update` datetime DEFAULT NULL,
  PRIMARY KEY (`kategori_id`),
  KEY `kategori_market_id` (`kategori_market_id`),
  CONSTRAINT `kategori_ibfk_1` FOREIGN KEY (`kategori_market_id`) REFERENCES `market` (`minimarket_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for log_user
-- ----------------------------
DROP TABLE IF EXISTS `log_user`;
CREATE TABLE `log_user` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_user_id` int(11) NOT NULL,
  `log_aksi` enum('delete','update','read','create') NOT NULL DEFAULT 'read',
  `log_deskripsi` text NOT NULL,
  `log_create` datetime NOT NULL,
  `log_update` datetime DEFAULT NULL,
  PRIMARY KEY (`log_id`),
  KEY `log_user_id` (`log_user_id`),
  CONSTRAINT `log_user_ibfk_1` FOREIGN KEY (`log_user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for market
-- ----------------------------
DROP TABLE IF EXISTS `market`;
CREATE TABLE `market` (
  `minimarket_id` int(11) NOT NULL AUTO_INCREMENT,
  `minimarket_kode` varchar(10) NOT NULL,
  `minimarket_nama` varchar(100) NOT NULL,
  `minimarket_type` varchar(100) NOT NULL,
  `minimarket_create` datetime NOT NULL,
  `minimarket_update` datetime DEFAULT NULL,
  PRIMARY KEY (`minimarket_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for pelanggan
-- ----------------------------
DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE `pelanggan` (
  `pelanggan_id` int(11) NOT NULL AUTO_INCREMENT,
  `pelanggan_nama` varchar(100) NOT NULL,
  `pelanggan_kartu_id` varchar(100) NOT NULL,
  `pelanggan_kategori` varchar(20) NOT NULL,
  `pelanggan_create` datetime NOT NULL,
  `pelanggan_update` datetime DEFAULT NULL,
  `pelanggan_user_id` int(11) NOT NULL,
  PRIMARY KEY (`pelanggan_id`),
  KEY `user_input` (`pelanggan_user_id`),
  CONSTRAINT `user_input` FOREIGN KEY (`pelanggan_user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for transaksi
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL AUTO_INCREMENT,
  `transaksi_barcode` varchar(100) NOT NULL,
  `transaksi_harga` bigint(20) NOT NULL,
  `transaksi_diskon` int(11) DEFAULT NULL,
  `transaksi_harga_diskon` bigint(20) NOT NULL,
  `transaksi_pelanggan_id` int(11) DEFAULT NULL,
  `transaksi_user_id` int(11) NOT NULL,
  `transaksi_akun` varchar(100) DEFAULT NULL,
  `transaksi_creaate` datetime NOT NULL,
  `transaksi_update` datetime NOT NULL,
  PRIMARY KEY (`transaksi_id`),
  KEY `transaksi_barcode` (`transaksi_barcode`),
  KEY `transaksi_user_id` (`transaksi_user_id`),
  CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`transaksi_barcode`) REFERENCES `barang` (`barang_barcode`),
  CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`transaksi_user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for transaksi_detail
-- ----------------------------
DROP TABLE IF EXISTS `transaksi_detail`;
CREATE TABLE `transaksi_detail` (
  `detail_transaksi_id` int(11) NOT NULL AUTO_INCREMENT,
  `detail_transaksi_transaksi_id` int(11) NOT NULL,
  `detail_transaksi_harga_satuan` int(10) DEFAULT NULL,
  `detail_transaksi_harga_diskon` int(10) NOT NULL,
  `detail_transaksi_diskon` int(10) DEFAULT NULL,
  `detail_transaksi_jumlah` int(10) NOT NULL,
  `detail_transaksi_create` datetime NOT NULL,
  `detail_transaksi_update` datetime NOT NULL,
  PRIMARY KEY (`detail_transaksi_id`),
  KEY `detail_transaksi_transaksi_id` (`detail_transaksi_transaksi_id`),
  CONSTRAINT `transaksi_detail_ibfk_1` FOREIGN KEY (`detail_transaksi_transaksi_id`) REFERENCES `transaksi` (`transaksi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for transaksi_temp
-- ----------------------------
DROP TABLE IF EXISTS `transaksi_temp`;
CREATE TABLE `transaksi_temp` (
  `transaksi_temp_urut` int(11) DEFAULT NULL,
  `transasi_temp_barcode` varchar(100) DEFAULT NULL,
  `transaksi_temp_harga_satuan` bigint(20) DEFAULT NULL,
  `transaksi_temp_harga_diskon` bigint(20) DEFAULT NULL,
  `transaksi_temp_diskon` bigint(20) DEFAULT NULL,
  `transaksi_temp_jumlah` bigint(20) DEFAULT NULL,
  `transaksi_temp_user_id` int(11) DEFAULT NULL,
  `transaksi_temp_create` datetime DEFAULT NULL,
  `transaksi_temp_update` datetime DEFAULT NULL,
  KEY `transaksi_temp_urut` (`transaksi_temp_urut`),
  CONSTRAINT `transaksi_temp_ibfk_1` FOREIGN KEY (`transaksi_temp_urut`) REFERENCES `hold` (`hold_transaksi_temp_urut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_nama` varchar(100) NOT NULL,
  `user_user` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_type` enum('ADMIN','KASIR') NOT NULL DEFAULT 'KASIR',
  `user_aktif` enum('N','Y') NOT NULL DEFAULT 'N',
  `user_create` datetime NOT NULL,
  `user_update` datetime DEFAULT NULL,
  `user_market_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_market_id` (`user_market_id`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`user_market_id`) REFERENCES `market` (`minimarket_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
