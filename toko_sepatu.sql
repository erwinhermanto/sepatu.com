/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : toko_sepatu

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2015-09-22 14:10:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `jenis`
-- ----------------------------
DROP TABLE IF EXISTS `jenis`;
CREATE TABLE `jenis` (
  `id_jenis` int(4) NOT NULL AUTO_INCREMENT,
  `nama_jenis` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jenis
-- ----------------------------
INSERT INTO `jenis` VALUES ('1', 'Sneaker', null);
INSERT INTO `jenis` VALUES ('2', 'Office Shoes', null);
INSERT INTO `jenis` VALUES ('3', 'Slip-on', null);
INSERT INTO `jenis` VALUES ('4', 'Boots', null);
INSERT INTO `jenis` VALUES ('5', 'Dress Shoes', null);

-- ----------------------------
-- Table structure for `merk`
-- ----------------------------
DROP TABLE IF EXISTS `merk`;
CREATE TABLE `merk` (
  `id_merk` int(4) NOT NULL AUTO_INCREMENT,
  `nama_merk` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_merk`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of merk
-- ----------------------------
INSERT INTO `merk` VALUES ('1', 'Nike ', null);
INSERT INTO `merk` VALUES ('2', 'Adidas  ', null);
INSERT INTO `merk` VALUES ('3', 'Jordan  ', null);
INSERT INTO `merk` VALUES ('4', 'Converse  ', null);
INSERT INTO `merk` VALUES ('5', 'Vans  ', null);

-- ----------------------------
-- Table structure for `sepatu`
-- ----------------------------
DROP TABLE IF EXISTS `sepatu`;
CREATE TABLE `sepatu` (
  `id_sepatu` int(4) NOT NULL AUTO_INCREMENT,
  `id_toko` int(4) DEFAULT NULL,
  `id_merk` int(4) DEFAULT NULL,
  `id_jenis` int(4) DEFAULT NULL,
  `nama_sepatu` varchar(255) DEFAULT NULL,
  `ukuran` int(4) DEFAULT NULL,
  `warna` varchar(255) DEFAULT NULL,
  `harga` bigint(12) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_sepatu`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sepatu
-- ----------------------------
INSERT INTO `sepatu` VALUES ('1', '6', '1', '1', 'Nike Air Force 1 Low - Men', '40', 'putih', '500000', 'Sepatu-3.png', 'keterangan keterangan keterangan keterangan keterangan');
INSERT INTO `sepatu` VALUES ('2', '7', '1', '1', 'Nike Air Force 1 Low - Men', '42', 'putih', '400000', 'Sepatu-3.png', 'keterangan keterangan keterangan keterangan keterangan');
INSERT INTO `sepatu` VALUES ('3', '6', '2', '2', 'Adidas Americana Vin ', '39', 'merah', '320000', 'Sepatu-1.jpg', 'keterangan keterangan keterangan keterangan keterangan');
INSERT INTO `sepatu` VALUES ('4', '7', '2', '2', 'Adidas Americana Vin  ', '40', 'biru', '420000', 'Sepatu-1.jpg', 'keterangan keterangan keterangan keterangan keterangan');
INSERT INTO `sepatu` VALUES ('5', '4', '2', '2', 'Adidas Low Skateboard Shoes', '42', 'biru', '470000', 'Sepatu-2.jpg', 'keterangan keterangan keterangan keterangan keterangan');
INSERT INTO `sepatu` VALUES ('6', '5', '2', '2', 'Adidas Low Skateboard Shoes', '40', 'merah', '470000', 'Sepatu-2.jpg', 'keterangan keterangan keterangan keterangan keterangan');

-- ----------------------------
-- Table structure for `slider`
-- ----------------------------
DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider` (
  `id_slider` int(4) NOT NULL AUTO_INCREMENT,
  `nama_slider` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of slider
-- ----------------------------
INSERT INTO `slider` VALUES ('1', 'Slider-1', 'Slider-1.jpg', 'Slider-1.jpg');
INSERT INTO `slider` VALUES ('2', 'Slider-2', 'Slider-1.jpg', 'Slider-1.jpg');

-- ----------------------------
-- Table structure for `toko`
-- ----------------------------
DROP TABLE IF EXISTS `toko`;
CREATE TABLE `toko` (
  `id_toko` int(4) NOT NULL AUTO_INCREMENT,
  `nama_toko` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telepon` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_toko`)
) ENGINE=InnoDB AUTO_INCREMENT=1002 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of toko
-- ----------------------------
INSERT INTO `toko` VALUES ('0', 'Admin', null, null, null, '-6.898254', '107.631836', null);
INSERT INTO `toko` VALUES ('1', 'Sepatu Trendy Bandung', 'JL Bahagia Permai Raya, No. 33 Komplek Bahagia Permai, Margacinta', null, null, '-6.949151', '107.644598', null);
INSERT INTO `toko` VALUES ('2', 'Catenzo', 'Jl. Terusan Cibaduyut No.9', null, null, '-6.943695', '107.595648', null);
INSERT INTO `toko` VALUES ('3', 'Sandbox Shoes', 'Jl. Pasir Salam No.2 ', null, null, '-6.937989', '107.616028', null);
INSERT INTO `toko` VALUES ('4', 'Sepatu Bagus', 'Kings Shopping Centre Bl K-O Lt 1', null, null, '-6.918673', '107.604838', null);
INSERT INTO `toko` VALUES ('5', 'Tantowi Olshop', 'Cileunyi', null, null, '-6.937904', '107.723905', null);
INSERT INTO `toko` VALUES ('6', 'D\'Shoes', 'JL. Pajajaran', null, null, '-6.901993', '107.593242', null);
INSERT INTO `toko` VALUES ('7', 'Macbeth', 'Jl. Sultan Agung', null, null, '-6.900877', '107.611921', null);

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(4) NOT NULL AUTO_INCREMENT,
  `id_toko` int(4) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '0', 'admin', 'admin', 'admin', null);
INSERT INTO `user` VALUES ('2', '7', 'toko', 'macbeth', 'macbeth', null);
INSERT INTO `user` VALUES ('3', '6', 'toko', 'dshoes', 'dshoes', null);
