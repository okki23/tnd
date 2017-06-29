/*
Navicat MySQL Data Transfer

Source Server         : localhost_mysql
Source Server Version : 50616
Source Host           : 127.0.0.1:3306
Source Database       : tnd_db

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2017-06-06 21:31:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_ip
-- ----------------------------
DROP TABLE IF EXISTS `tb_ip`;
CREATE TABLE `tb_ip` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `no_reg` varchar(100) DEFAULT NULL,
  `id_peg` int(10) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` varchar(100) DEFAULT NULL,
  `seksi` varchar(100) DEFAULT NULL,
  `risalah` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `tema_ip` varchar(100) DEFAULT NULL,
  `ksp` text,
  `upload_ksp` text,
  `kstp` text,
  `upload_kstp` text,
  `akibat` text,
  `standarisasi` text,
  `upload_standarisasi` text,
  `manfaat` text,
  `komentar_foreman` text,
  `penilaian_foreman` varchar(20) DEFAULT NULL,
  `komentar_aprove_kasie` text,
  `komentar_aprove_ahmic` text,
  `is_aprove_kasie` varchar(10) DEFAULT NULL,
  `is_aprove_ahmic` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_ip
-- ----------------------------
INSERT INTO `tb_ip` VALUES ('0', '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `tb_ip` VALUES ('1', 'REG0000001', '7', 'Karno Ilyas', '17007', 'MK', 'Semakin malam', '2017-06-03', 'Semakin lapar', 'aku ', '1.jpg', 'pergi', '027cx5e.jpg', 'ke warung', 'untuk makan', '416-bmw-m3-gt2-1920x1080-car-wallpaper.jpg', 'nasi uduk', 'Bagus nak', 'b', ' No, Im Not ', ' AHMIC okeh', '1', '1');
INSERT INTO `tb_ip` VALUES ('2', 'REG0000002', '7', 'Karno Ilyas', '17007', 'MK', 'Sepanjang jalan kenangan', '2017-06-03', 'Semakin malam', 'diriku', '452-lotus-exige-s-1920x1200-car-wallpaper.jpg', 'sendiri', '418-lamborghini-gallardo-wheels-1920x1200-car-wallpaper.jpg', 'ga ada', 'temen', '122-1307-01-o+2013-honda-CBR500R-vs-2013-kawasaki-ninja-300+.jpg', 'bengong deh', 'Diharapkan lebih baik lagi setelah ini,but ini perfect!', 'a', null, null, null, null);
INSERT INTO `tb_ip` VALUES ('3', 'REG0000003', '8', 'Dwi Sasono', '17008', 'PO', 'Semakin jahat', '2017-06-03', 'Semakin jahat negeri ini', 'karena ulah', '471-mclaren-f1-1920x1080-car-wallpaper.jpg', 'para gengster', '428-dodge-viper-1920x1080-car-wallpaper.jpg', 'begal', 'perampok', '436-ford-mustang-shelby-gt500k-1920x1200-car-wallpaper.jpg', 'tembakin ditempat aja', null, null, null, null, null, null);
INSERT INTO `tb_ip` VALUES ('4', 'REG0000004', '8', 'Dwi Sasono', '17008', 'PO', 'Jauh dimata', '2017-06-03', 'Jauh dimata dekat di mana?', 'mau dimana aja', '437-ferrari-458-italia-1920x1200-car-wallpaper.jpg', 'kapan aja', '440-nissan-gt-r-1920x1080-car-wallpaper.jpg', 'tanggal berpa aja', 'dan entah dimana', '447-citroen-survolt-1920x1200-car-wallpaper.jpg', 'yang penting asoy', null, null, null, null, null, null);
INSERT INTO `tb_ip` VALUES ('5', 'REG0000005', '9', 'Susan Sastro', '17009', 'HS', 'Jika engkau', '2017-06-04', 'Jika engkau', 'pergi', '452-lotus-exige-s-1920x1200-car-wallpaper.jpg', 'hilang dariku', '455-mitsubishi-lancer-evo-1920x1080-car-wallpaper.jpg', 'dari tidurku', 'bersamaku', '463-bmw-1920x1080-car-wallpaper.jpg', 'dan tanpamu', null, null, null, null, null, null);
INSERT INTO `tb_ip` VALUES ('6', 'REG0000006', '9', 'Susan Sastro', '17009', 'HS', 'Hidup untukmu', '2017-06-11', 'Hidup untukmu mati tanpamu', 'dari sini', '2006HondaCBR600RR-001.jpg', 'dari lagu ini', '2007_honda_cbr600rr_front_side.jpg', 'aku paham', 'betapa pentingnya', '2011_honda_cbr_600rr-wide.jpg', 'aku dan kamu', null, null, null, null, null, null);
INSERT INTO `tb_ip` VALUES ('7', 'REG0000007', '10', 'Santo Hardiyono', '17010', 'HJ', 'Rasakan hatiku', '2017-06-04', 'Bersandar padaku', 'dan dirku', '2012_CBR600RR_RED.jpg', ' bukanlah aku', '2012-05-14-bikepics-2401025-full.jpg', 'tanpa kamu', 'tuk memelukku', '2012-2013-Honda-CBR600RR-Motorcycles-Wallpaper.jpg', 'kau melengkapiku', null, null, null, null, null, null);
INSERT INTO `tb_ip` VALUES ('8', 'REG0000008', '10', 'Santo Hardiyono', '17010', 'HJ', 'Tak lagi sama', '2017-06-05', 'Kau melengkapiku', '    kau sempurnakan kau  ', '2013_CBR600RR_2000x1275_BlueOrangeWhiteRed_42515B.jpg', '  dan dirku  ', '2752_7lo.jpg', '  bukanlah aku  ', '    tanpa kamu  ', '2014-cbr1000-background-1.jpg', '    menemaniku    ', null, null, null, null, null, null);
INSERT INTO `tb_ip` VALUES ('9', 'REG0000009', '11', 'Paijo Kusumonegoro', '17011', 'NG', 'Kecepatan saat riding', '2017-06-05', 'Speeding or Crash', 'sebelum riding', '3781-bugatti-veyron-mansory-linea-1920x1080-car-wallpaper.jpg', 'perhatikan rem', '3788-ford-mustang-1920x1200-car-wallpaper.jpg', 'thortle', 'dan jarak pandang', '3793-honda-civic-2560x1600-car-wallpaper.jpg', 'supaya aman', null, null, null, null, null, null);
INSERT INTO `tb_ip` VALUES ('10', 'REG0000010', '11', 'Paijo Kusumonegoro', '17011', 'NG', 'Kukatakan dengan indah', '2017-06-05', 'Diriku sedang berjuang', 'disini', '3810-lamborghini-gallardo-lp570-4-superleggera-1920x1080-car-wallpaper.jpg', 'ditempat yang sepi', '3811-lamborghini-gallardo-lp570-4-superleggera-1920x1200-car-wallpaper.jpg', 'ku sendiri', 'berpikir', '3820-mazda-furai-1920x1200-car-wallpaper.jpg', 'bagaimana tuk mengungkapkan', null, null, null, null, null, null);
INSERT INTO `tb_ip` VALUES ('11', 'REG0000011', '12', 'Romi Satrio', '17012', 'BN', 'Selamat datang', '2017-06-04', 'Kota jakarta macet', 'itu adalah hal yang', '3821-mercedes-benz-biome-concept-1920x1080-car-wallpaper.jpg', 'biasa bagi kami', '3832-zenvo-st1-1920x1200-car-wallpaper.jpg', 'jakarta macet', 'itu makanan kami', '3823-mercedes-benz-sls-amg-1920x1200-car-wallpaper.jpg', 'sehari hari', null, null, null, null, null, null);
INSERT INTO `tb_ip` VALUES ('12', 'REG0000012', '12', 'Romi Satrio', '17012', 'BN', 'Malam sunyi', '2017-06-03', 'Semalam suntuk bengong', 'di kesendirian ini', '3824-mercedes-benz-sls-amg-1920x1200-car-wallpaper.jpg', 'aku berpikir', '3830-toyota-supra-1920x1200-car-wallpaper.jpg', 'akan hubungan ini', 'yang sedang stack', '5823-subaru-impreza-wrx-sti-1920x1080-car-wallpaper.jpg', 'yes to going or no to break', null, null, null, null, null, null);
INSERT INTO `tb_ip` VALUES ('13', 'REG0000013', '13', 'Sanwani Hadiwibowo', '17013', 'HG', 'Sepi dan ramai', '2017-06-12', 'Dimana ada sepi disitu ada ramai', 'pernahkah kau merasa', '5824-volkswagen-golf-gti-w12-650-concept-1920x1200-car-wallpaper.jpg', 'hatimu hampa', '5835-audi-q7-v12-tdi-1920x1200-car-wallpaper.jpg', 'tak ada seorangpun', 'dihatimu', '5836-audi-quattro-concept-1920x1080-car-wallpaper.jpg', 'walaupun kau tau disana ada keramaian', '  bagus', 'a', null, null, null, null);
INSERT INTO `tb_ip` VALUES ('14', 'REG0000014', '13', 'Sanwani Hadiwibowo', '17013', 'HG', 'Ujian atau Cobaan', '2017-06-19', 'Permasalahan yang tak ujung usai', 'dari malam pertama', '5845-audi-a1-competition-kit-1920x1200-car-wallpaper.jpg', 'hingga malam ketujuh', '5854-lumma-porsche-cayenne-1920x1080-car-wallpaper.jpg', 'di ruangan ini', 'terus saja ada makhluk pengganggu', '5862-dodge-challenger-srt-1920x1200-car-wallpaper.jpg', 'entah darimana aku merasa terusik', null, null, null, null, null, null);
INSERT INTO `tb_ip` VALUES ('15', 'REG0000015', '14', 'Tejo Raharjo', '17013', 'WW', 'BCB', '2017-06-04', 'Bukan Cinta Biasa ', 'cintaku', '5878-lotus-esprit-1920x1080-car-wallpaper.jpg', 'bukanlah', '5881-aston-martin-db9-1920x1080-car-wallpaper.jpg', 'cinta biasa', 'jika kamu yang memiliki', '5895-black-and-white-chevrolet-camaro-1920x1200-car-wallpaper.jpg', 'aku sayang kamu', null, null, null, null, null, null);
INSERT INTO `tb_ip` VALUES ('16', 'REG0000016', '14', 'Tejo Raharjo', '17013', 'WW', 'Cinta tanpa syarat', '2017-06-15', 'Tanpa syarat apapun', 'aku ingin', '5898-brabus-widestar-mercedes-benz-sls-amg-1920x1200-car-wallpaper.jpg', 'terus', '5899-bugatti-veyron-1920x1080-car-wallpaper.jpg', 'ada dihatimu', 'aku lelaki', '5907-chevrolet-camaro-zl1-1920x1080-car-wallpaper.jpg', 'yang tak bisa mudah menggantimu', null, null, null, null, null, null);
INSERT INTO `tb_ip` VALUES ('20', 'REG0000017', '7', 'Karno Ilyas', '17007', 'MK', 'TEST', '2017-06-05', 'TEST', '  1 ', 'new-honda-cbr250r-dan-cbr300r.jpg', ' 2 ', 'mitsubishi-evolution-x-141.jpg', ' 3 ', '  4 ', 'url.jpg', '  5  ', null, null, null, null, null, null);
INSERT INTO `tb_ip` VALUES ('21', 'REG0000018', '7', 'Karno Ilyas', '17007', 'MK', 'makan', '2017-06-06', '', 'vidbvivoi', 'Screenshot_(4).png', 'ihvoih', '', 'oihvn', 'phgpios', '', 'hfeuifu', null, null, null, null, null, null);
INSERT INTO `tb_ip` VALUES ('22', 'REG0000019', '14', 'Tejo Raharjo', '17013', 'WW', 'test 1', '2017-06-06', 'test 1', 'jelek', 'Screenshot_(1).png', 'lumyan', 'Screenshot_(2).png', 'good', 'mantab', 'Screenshot_(3).png', 'test 1', '  test 1 coba', 'a', '  tesi 1 lumayan', '    good  ', '1', '0');

-- ----------------------------
-- Table structure for tb_pegawai
-- ----------------------------
DROP TABLE IF EXISTS `tb_pegawai`;
CREATE TABLE `tb_pegawai` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_kasie` int(10) DEFAULT NULL,
  `id_foreman` int(10) DEFAULT NULL,
  `nm_pegawai` varchar(100) NOT NULL,
  `nrp` varchar(100) DEFAULT NULL,
  `seksi` varchar(100) DEFAULT NULL,
  `no_telp` text NOT NULL,
  `email` text NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_pegawai
-- ----------------------------
INSERT INTO `tb_pegawai` VALUES ('1', '0', '0', 'Tri Nurdiansyah', '17001', 'KJ', '80876354', 'tri@mail.com', 'jl.nangka 1');
INSERT INTO `tb_pegawai` VALUES ('2', '0', '0', 'Heri Bowo', '17002', 'KK', '80876355', 'heri@mail.com', 'jl.nangka 2');
INSERT INTO `tb_pegawai` VALUES ('3', '1', '0', 'Slamet Raharjo', '17003', 'LO', '80876356', 'slamet@mail.com', 'jl.nangka 3');
INSERT INTO `tb_pegawai` VALUES ('4', '1', '0', 'Jamal Aden', '17004', 'MM', '80876357', 'jamal@mail.com', 'jl.nangka 4');
INSERT INTO `tb_pegawai` VALUES ('5', '2', '0', 'Sapta Harta', '17005', 'NH', '80876358', 'sapta@mail.com', 'jl.nangka 5');
INSERT INTO `tb_pegawai` VALUES ('6', '2', '0', 'Muslimin', '17006', 'JK', '80876359', 'muslim@mail.com', 'jl.nangka 6');
INSERT INTO `tb_pegawai` VALUES ('7', '1', '3', 'Karno Ilyas', '17007', 'MK', '80876360', 'karno@mail.com', 'jl.nangka 7');
INSERT INTO `tb_pegawai` VALUES ('8', '1', '3', 'Dwi Sasono', '17008', 'PO', '80876361', 'dwi@mail.com', 'jl.nangka 8');
INSERT INTO `tb_pegawai` VALUES ('9', '1', '4', 'Susan Sastro', '17009', 'HS', '80876362', 'susan@mail.com', 'jl.nangka 9');
INSERT INTO `tb_pegawai` VALUES ('10', '1', '4', 'Santo Hardiyono', '17010', 'HJ', '80876363', 'santo@mail.com', 'jl.nangka 10');
INSERT INTO `tb_pegawai` VALUES ('11', '2', '5', 'Paijo Kusumonegoro', '17011', 'NG', '80876364', '', 'jl.nangka 11');
INSERT INTO `tb_pegawai` VALUES ('12', '2', '5', 'Romi Satrio', '17012', 'BN', '80876365', '', 'jl.nangka 12');
INSERT INTO `tb_pegawai` VALUES ('13', '2', '6', 'Sanwani Hadiwibowo', '17013', 'HG', '80876366', '', 'jl.nangka 13');
INSERT INTO `tb_pegawai` VALUES ('14', '2', '6', 'Tejo Raharjo', '17013', 'WW', '80876367', '', 'jl.nangka 14');
INSERT INTO `tb_pegawai` VALUES ('15', '0', '0', 'Yahya Kumala', '17015', 'FE', '80876368', '', 'jl.nangka 15');
INSERT INTO `tb_pegawai` VALUES ('16', '0', '0', 'Remo Harsono', '17016', 'SS', '80876369', '', 'jl.nangka 16');
INSERT INTO `tb_pegawai` VALUES ('17', '0', '0', 'Administrator', '17017', 'QQ', '80876370', '', 'jl.nangka 17');
INSERT INTO `tb_pegawai` VALUES ('19', '1', '3', 'Juan Rivai', '17018', 'II', '902893524', 'juan@mail.com', 'Jl.Bangka');

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_pegawai` int(10) NOT NULL,
  `level` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES ('1', 'tri', '0cc175b9c0f1b6a831c399e269772661', '1', '1');
INSERT INTO `tb_user` VALUES ('2', 'heri', '0cc175b9c0f1b6a831c399e269772661', '2', '1');
INSERT INTO `tb_user` VALUES ('3', 'slamet', '0cc175b9c0f1b6a831c399e269772661', '3', '2');
INSERT INTO `tb_user` VALUES ('4', 'jamal', '0cc175b9c0f1b6a831c399e269772661', '4', '2');
INSERT INTO `tb_user` VALUES ('5', 'sapta', '0cc175b9c0f1b6a831c399e269772661', '5', '2');
INSERT INTO `tb_user` VALUES ('6', 'muslim', '0cc175b9c0f1b6a831c399e269772661', '6', '2');
INSERT INTO `tb_user` VALUES ('7', 'karno', '0cc175b9c0f1b6a831c399e269772661', '7', '3');
INSERT INTO `tb_user` VALUES ('8', 'dwi', '0cc175b9c0f1b6a831c399e269772661', '8', '3');
INSERT INTO `tb_user` VALUES ('9', 'susan', '0cc175b9c0f1b6a831c399e269772661', '9', '3');
INSERT INTO `tb_user` VALUES ('10', 'santo', '0cc175b9c0f1b6a831c399e269772661', '10', '3');
INSERT INTO `tb_user` VALUES ('11', 'paijo', '0cc175b9c0f1b6a831c399e269772661', '11', '3');
INSERT INTO `tb_user` VALUES ('12', 'romi', '0cc175b9c0f1b6a831c399e269772661', '12', '3');
INSERT INTO `tb_user` VALUES ('13', 'sanwani', '0cc175b9c0f1b6a831c399e269772661', '13', '3');
INSERT INTO `tb_user` VALUES ('14', 'tejo', '0cc175b9c0f1b6a831c399e269772661', '14', '3');
INSERT INTO `tb_user` VALUES ('15', 'yahya', '0cc175b9c0f1b6a831c399e269772661', '15', '4');
INSERT INTO `tb_user` VALUES ('16', 'remo', '0cc175b9c0f1b6a831c399e269772661', '16', '4');
INSERT INTO `tb_user` VALUES ('17', 'admin', '0cc175b9c0f1b6a831c399e269772661', '17', '5');
INSERT INTO `tb_user` VALUES ('18', 'juan', '0cc175b9c0f1b6a831c399e269772661', '19', '3');
