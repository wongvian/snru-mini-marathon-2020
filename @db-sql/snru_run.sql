/*
 Navicat Premium Data Transfer

 Source Server         : mysql-172.16.1.247
 Source Server Type    : MySQL
 Source Server Version : 100212
 Source Host           : 172.16.1.247:3306
 Source Schema         : snru_run

 Target Server Type    : MySQL
 Target Server Version : 100212
 File Encoding         : 65001

 Date: 25/11/2019 22:20:14
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bank_list
-- ----------------------------
DROP TABLE IF EXISTS `bank_list`;
CREATE TABLE `bank_list`  (
  `bank_id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `bank_account_name` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `bank_acc` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`bank_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bank_list
-- ----------------------------
INSERT INTO `bank_list` VALUES (1, 'ธนาคารกรุงศรีอยุธยา', 'มหาวิทยาลัยราชภัฏสกลนคร (ราชภัฏสกลนคร  มินิมาราธอน)', '421-1-35403-9');

-- ----------------------------
-- Table structure for ci_sessions
-- ----------------------------
DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE `ci_sessions`  (
  `id` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL,
  PRIMARY KEY (`id`, `ip_address`) USING BTREE,
  INDEX `ci_sessions_timestamp`(`timestamp`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ci_sessions
-- ----------------------------
INSERT INTO `ci_sessions` VALUES ('0pimaq8nlnc36pcfdnec284njvhlfdso', '::1', 1574288260, 0x5F5F63695F6C6173745F726567656E65726174657C693A313537343238383236303B);
INSERT INTO `ci_sessions` VALUES ('64vlthnhre3vp9iffi7nutrfbqp3rr15', '::1', 1574290728, 0x5F5F63695F6C6173745F726567656E65726174657C693A313537343239303732323B);
INSERT INTO `ci_sessions` VALUES ('9uckg8qkc5q5bpc6midh87ceeaqqfbol', '::1', 1574287553, 0x5F5F63695F6C6173745F726567656E65726174657C693A313537343238373535333B);
INSERT INTO `ci_sessions` VALUES ('arqmo5fpphbjp0sor50pan5fsmb0lnkh', '::1', 1574291934, 0x5F5F63695F6C6173745F726567656E65726174657C693A313537343239313932393B);
INSERT INTO `ci_sessions` VALUES ('b112i3g4mf13aibr7bjrg12djvdqbu9t', '::1', 1574288260, 0x5F5F63695F6C6173745F726567656E65726174657C693A313537343238383236303B);
INSERT INTO `ci_sessions` VALUES ('fdcsr53kld0lbce4n9dvqhtc2jg4qf0a', '::1', 1574290025, 0x5F5F63695F6C6173745F726567656E65726174657C693A313537343239303032353B);
INSERT INTO `ci_sessions` VALUES ('mnn6bajvonat7o2fifm3fovk21tt8gk2', '::1', 1574290722, 0x5F5F63695F6C6173745F726567656E65726174657C693A313537343239303732323B);
INSERT INTO `ci_sessions` VALUES ('prke1pkeavv827tv1g9sd9dis4rq9nvn', '::1', 1574287944, 0x5F5F63695F6C6173745F726567656E65726174657C693A313537343238373934343B);
INSERT INTO `ci_sessions` VALUES ('rg21cc2igp5k4a4mhoc8un8m8mjph7au', '::1', 1574290409, 0x5F5F63695F6C6173745F726567656E65726174657C693A313537343239303430393B);

-- ----------------------------
-- Table structure for ref_blood_group
-- ----------------------------
DROP TABLE IF EXISTS `ref_blood_group`;
CREATE TABLE `ref_blood_group`  (
  `blood_group_id` int(11) NOT NULL,
  `blood_group_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`blood_group_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_blood_group
-- ----------------------------
INSERT INTO `ref_blood_group` VALUES (1, 'AB');
INSERT INTO `ref_blood_group` VALUES (2, 'AB-');
INSERT INTO `ref_blood_group` VALUES (3, 'AB+');
INSERT INTO `ref_blood_group` VALUES (4, 'O');
INSERT INTO `ref_blood_group` VALUES (5, 'O-');
INSERT INTO `ref_blood_group` VALUES (6, 'O+');
INSERT INTO `ref_blood_group` VALUES (7, 'A');
INSERT INTO `ref_blood_group` VALUES (8, 'ไม่ทราบ');

-- ----------------------------
-- Table structure for ref_mode_regis
-- ----------------------------
DROP TABLE IF EXISTS `ref_mode_regis`;
CREATE TABLE `ref_mode_regis`  (
  `mode_regis_id` int(11) NOT NULL,
  `mode_regis_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`mode_regis_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_mode_regis
-- ----------------------------
INSERT INTO `ref_mode_regis` VALUES (1, 'รุ่นอายุไม่เกิน 19 ปี ');
INSERT INTO `ref_mode_regis` VALUES (2, 'รุ่นอายุ  20 – 29 ปี ');
INSERT INTO `ref_mode_regis` VALUES (3, 'รุ่นอายุ  30 – 39 ปี ');
INSERT INTO `ref_mode_regis` VALUES (4, 'รุ่นอายุ  40 – 49 ปี ');
INSERT INTO `ref_mode_regis` VALUES (5, 'รุ่นอายุ  50 – 59 ปี ');
INSERT INTO `ref_mode_regis` VALUES (6, 'รุ่นอายุ  60 ปี ขึ้นไป');

-- ----------------------------
-- Table structure for ref_prefix
-- ----------------------------
DROP TABLE IF EXISTS `ref_prefix`;
CREATE TABLE `ref_prefix`  (
  `prefix_id` int(11) NOT NULL,
  `prefix_name_th` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`prefix_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_prefix
-- ----------------------------
INSERT INTO `ref_prefix` VALUES (1, 'นาย');
INSERT INTO `ref_prefix` VALUES (2, 'นางสาว');
INSERT INTO `ref_prefix` VALUES (3, 'นาง');

-- ----------------------------
-- Table structure for ref_run_type
-- ----------------------------
DROP TABLE IF EXISTS `ref_run_type`;
CREATE TABLE `ref_run_type`  (
  `run_type_id` int(11) NOT NULL,
  `run_type_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`run_type_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_run_type
-- ----------------------------
INSERT INTO `ref_run_type` VALUES (1, 'FUN RUN 5KM. 350 บาท');
INSERT INTO `ref_run_type` VALUES (2, 'SUPPER MINI 12.5KM. 450 บาท');
INSERT INTO `ref_run_type` VALUES (3, 'VIP 1,000 บาท');

-- ----------------------------
-- Table structure for ref_run_type_noprice
-- ----------------------------
DROP TABLE IF EXISTS `ref_run_type_noprice`;
CREATE TABLE `ref_run_type_noprice`  (
  `run_type_id` int(11) NOT NULL,
  `run_type_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`run_type_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_run_type_noprice
-- ----------------------------
INSERT INTO `ref_run_type_noprice` VALUES (1, 'FUN RUN 5KM.');
INSERT INTO `ref_run_type_noprice` VALUES (2, 'SUPPER MINI 12.5KM.');
INSERT INTO `ref_run_type_noprice` VALUES (3, 'VIP');

-- ----------------------------
-- Table structure for ref_shirt_size
-- ----------------------------
DROP TABLE IF EXISTS `ref_shirt_size`;
CREATE TABLE `ref_shirt_size`  (
  `shirt_size_id` int(11) NOT NULL,
  `shirt_size_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `detail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`shirt_size_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_shirt_size
-- ----------------------------
INSERT INTO `ref_shirt_size` VALUES (1, '4S', '(รอบอก 30\"- ยาว 23\")');
INSERT INTO `ref_shirt_size` VALUES (2, '3S', '(รอบอก 32\"- ยาว 24\")');
INSERT INTO `ref_shirt_size` VALUES (3, '2S', '(รอบอก 34\"- ยาว 25\")');
INSERT INTO `ref_shirt_size` VALUES (4, 'S', '(รอบอก 36\"- ยาว 26\")');
INSERT INTO `ref_shirt_size` VALUES (5, 'M', '(รอบอก 38\"- ยาว 27\")');
INSERT INTO `ref_shirt_size` VALUES (6, 'L', '(รอบอก 40\"- ยาว 28\")');
INSERT INTO `ref_shirt_size` VALUES (7, 'XL', '(รอบอก 42\"- ยาว 29\")');
INSERT INTO `ref_shirt_size` VALUES (8, '2XL', '(รอบอก 44\"- ยาว 30\")');

-- ----------------------------
-- Table structure for register
-- ----------------------------
DROP TABLE IF EXISTS `register`;
CREATE TABLE `register`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary-key',
  `type_run` int(11) DEFAULT NULL COMMENT 'ประเภทที่สมัคร',
  `mode_regis` int(11) DEFAULT NULL COMMENT 'รุ่นการรับสมัคร',
  `prefix_id` int(11) DEFAULT NULL COMMENT 'คำนำหน้า',
  `fname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'ชื่อ',
  `lname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'สกุล',
  `cit_id` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'เลขที่บัตรประชาชน / พาสปอร์ต',
  `gender_id` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '[ชาย,หญิง]',
  `bdate` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'วัน ดือน ปี เกิด',
  `blood_group` int(11) DEFAULT NULL COMMENT 'หมู่เลือด',
  `weight` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'น้ำหนัก',
  `hight` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'ส่วนสูง',
  `congenital` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'โรคประจำตัว',
  `addr` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'ที่อยู่เลขที่',
  `tambol` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'ตำบล',
  `amphur` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'อำเภอ',
  `province` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'จังหวัด',
  `zipcode` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'รหัสไปรษณีย์',
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'เบอร์โทร',
  `emergency_contact` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'ผู้ติดต่อกรณีฉุกเฉิน',
  `mergency_phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'เบอร์ติดต่อฉุกเฉิน',
  `shirt_size` varchar(1) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'ขนาดเสื้อ',
  `payment_status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'สถานะการชำระเงิน[0=รอชำระเงินค่าสมัคร 1=ชำระค่าสมัครแล้ว 3=ส่งหลักฐานการชำระเงินเข้ามาใหม่]',
  `file_payment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'หลักฐานการชำระเงิน',
  `pay_date` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'วันที่ชำระเงิน',
  `pay_time` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'เวลาชำระเงิน',
  `date_regis` datetime(0) DEFAULT NULL COMMENT 'วันที่สมัคร',
  `slip_acc` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'เลขที่บัญชีที่ชำระเงิน',
  `pay_amount` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of register
-- ----------------------------
INSERT INTO `register` VALUES (1, 1, 2, 2, 'สันนิภา', 'วิพรหมหา', '1471200203261', '2', '28/12/2533', 4, '58', '164', 'ไม่มี', '733/66 บ้านอารียา2', 'ธาตุเชิงชุม', 'เมืองสกลนคร', 'สกลนคร', '47000', '0961942228', '-', '-', '4', '1', '1471200203261.jpeg', '25/11/2562', '21.39.14', '2019-11-25 21:15:12', '9398', '350');
INSERT INTO `register` VALUES (2, 2, 3, 1, 'อนรรฆ', 'สมพงษ์', '1102000373302', '1', '17 12 2528', 7, '75', '172', '', 'คณะครุศาสตร์ ม.ราชภัฏสกลนคร', '', 'เมือง', 'สกลนคร', '47000', '0823225305', 'อนรรฆ สมพงษ์', '', '5', '0', NULL, NULL, NULL, '2019-11-25 21:19:15', NULL, NULL);
INSERT INTO `register` VALUES (3, 1, 4, 3, 'สุพิชญา', 'นิลจินดา', '3309901154741', '2', '3/3/1979', 4, '62', '157', '-', '56/2 ถ.นิตโย', 'ธาตุเชิงชุม', 'เมือง', 'สกลนคร', '47000', '0811853388', 'ปรมินทร์', '0819554471', '6', '1', '3309901154741.png', '25/11/2019', '21:21', '2019-11-25 21:20:18', '3960', '350');
INSERT INTO `register` VALUES (4, 2, 4, 1, 'วิเชฎฐ์  ', 'ยาทองไชย', '3471500243133', '1', '02/02/2522', 7, '80', '177', '', 'สำนักงานปศุสัตว์จังหวัดสกลนคร ', 'ธาตุเชิงชุม', 'เมืองสกลนคร', 'สกลนคร', '47000', '0896179575', 'Boonkong', '0878528214', '7', '1', '3471500243133.jpg', '25/11/2562', '21.21', '2019-11-25 21:20:21', '6395', '450');
INSERT INTO `register` VALUES (5, 2, 3, 1, 'Narongwit', 'Sirikhan', '1490300031925', '1', '7 May 1986', 1, '60', '171', '-', '246/4', 'ท่าแร่', 'เมืองสกลนคร', 'สกลนคร', '47230', '0885338846', 'หจก.โชคเจริญค้าวัสดุก่อสร้างท่าแร่', '0859040189', '5', '0', NULL, NULL, NULL, '2019-11-25 21:23:59', NULL, NULL);
INSERT INTO `register` VALUES (6, 2, 3, 1, 'ณัฐสิทธิ์', 'ยี่สารพัฒน์', '1449900090114', '1', '26/09/2529', 1, '81', '176', 'ไม่มี', '29/15 หมู่บ้านเด่นธานี', 'ธาตุเชิงชุม', 'เมืองสกลนคร', 'สกลนคร', '47000', '0809362945', 'นายบัญชา ยี่สารพัฒน์', '0809362945', '7', '0', NULL, NULL, NULL, '2019-11-25 21:33:20', NULL, NULL);
INSERT INTO `register` VALUES (7, 2, 3, 1, 'ธีระพงค์', 'พิบูลย์', '3401800268093', '1', '16012525', 4, '58', '168', 'ไม่มี', '234/572  ม.3', 'ตลาด', 'เมืองนครราชสีมา', 'นครราชสีมา', '30310', ' 0988935956', 'จิลาพร พิบูลย์', '0939894465', '5', '1', '3401800268093.jpg', '25112562', '21.37', '2019-11-25 21:34:38', '4749', '450');
INSERT INTO `register` VALUES (8, 1, 2, 1, 'อรรถพล', 'โนเรศ', '1499900152217', '1', '22 เมษายน 2536', 4, '85', '165', 'ไม่มี', '17 บ้านโคกสุวรรณ', 'มุกดาหาร', 'เมืองมุกดาหาร', 'มุกดาหาร', '49000', '0836738803', '', '', '7', '0', NULL, NULL, NULL, '2019-11-25 21:39:52', NULL, NULL);
INSERT INTO `register` VALUES (9, 2, 4, 1, 'ไกลกังวน', 'ต้นโพธิ์', '3479900067682', '1', '15 มีนาคม 2517', 1, '67', '170', 'ไม่มี', '73 ม.9', 'นาแก้ว', 'โพนนาแก้ว', 'สกลนคร', '47230', '0917155277', 'จิราภรณ์ ต้นโพธิ์', '0910567432', '7', '1', '3479900067682.png', '25 พย.2562', '21:45', '2019-11-25 21:42:34', '3500', '450');
INSERT INTO `register` VALUES (10, 1, 2, 1, 'ธนาวัฒน์ ', 'ศรีสร้อยพร้าว', '1410600327111', '1', '13/02/40', 4, '63', '173', '-', '286 หมู่ 1 บ.สร้อยพร้าว', 'สร้อยพร้าว', 'หนองหาน', 'อุดรธานี', '41130', '0937398524', '-', '0937398524', '5', '0', NULL, NULL, NULL, '2019-11-25 21:46:53', NULL, NULL);
INSERT INTO `register` VALUES (11, 1, 2, 2, 'กรทิพ', 'ริยะบุตร', '1471100146891', '2', '06 11 38', 1, '56', '170', '-', '342/3 อากาศ', 'อากาศ', 'อากาศอำนวย', 'สกลนคร', '47170', '0623732865', '-', '-', '5', '0', NULL, NULL, NULL, '2019-11-25 21:47:11', NULL, NULL);
INSERT INTO `register` VALUES (12, 1, 3, 2, 'ณัฐณิชา', 'เครือศรี', '3480400024056', '2', '28 มิ.ย.2524', 1, '43', '150', 'ไม่มี', '700/27', 'ธาตุเชิงชุม', 'เมืองสกลนคร', 'สกลนคร', '47000', '0911062679', 'นายนฤดล เครือศรี', '0885725661', '4', '1', '3480400024056.jpeg', '25 พ.ย.2562', '21.55', '2019-11-25 21:51:26', '8747', '350');
INSERT INTO `register` VALUES (13, 1, 2, 2, 'ศันสนีย์', 'สุดทอง', '1489900128308', '2', '8 กค 2534', 6, '52', '153', 'ไม่มี', '680 ม.11 มหาวิทยาลัยราชภัฎสกลนคร ต.ธาตุเชิงชุม อ.เมือง จ.สกลนคร 47000', 'ขมิ้น', 'เมืองสกลนคร', 'สกลนคร', '47000', '0971371984', 'ดาราวรรณ ปัตโชติชัย', '0895698097', '3', '0', NULL, NULL, NULL, '2019-11-25 21:52:01', NULL, NULL);
INSERT INTO `register` VALUES (14, 1, 3, 2, 'ดาราวรรณ', 'ปัตโชติชัย', '3470100914382', '2', '26 กันยายน 2526', 4, '89', '159', 'ไม่มี', '680 มหาวิทยาลัยราชภัฎสกลนคร', 'ธาตุเชิงชุม', 'เมืองสกลนคร', 'สกลนคร', '47000', '0895698097', 'ศันสนีย์', '0971371984', '8', '0', NULL, NULL, NULL, '2019-11-25 21:57:39', NULL, NULL);
INSERT INTO `register` VALUES (15, 2, 3, 1, 'ชานุ', 'สิงหกันต์', '3480100160370', '1', '27 ต.ค. 2525', 4, '62', '163', '', '1143/26', 'ธาตุเชิงชุม', 'เมืองสกลนคร', 'สกลนคร', '47000', '0630074518', 'ยุภา นันทจันทร์', '0879727857', '5', '0', NULL, NULL, NULL, '2019-11-25 22:00:00', NULL, NULL);
INSERT INTO `register` VALUES (16, 2, 3, 1, 'วิรัตน์', 'ปุริเศษ', '3470101151421', '1', '4 มีนาคม 2524', 1, '65', '165', '-', '1694/1', 'ธาตุเชิงชุม', 'เมืองสกลนคร', 'สกลนคร', '47000', '062-1526589', '062-3236615', '062-3236615', '6', '0', NULL, NULL, NULL, '2019-11-25 22:02:56', NULL, NULL);
INSERT INTO `register` VALUES (17, 1, 2, 1, 'วันชัย', 'อาษาเหลา', '1499900282439', '1', '04/07/2541', 4, '120', '178', '', '158/3 บ.โพนทราย', 'โพนทราย', 'เมืองมุกดาหาร', 'มุกดาหาร', '49000', '0965743752', 'บิดา', '0833418979', '1', '0', NULL, NULL, NULL, '2019-11-25 22:04:29', NULL, NULL);
INSERT INTO `register` VALUES (18, 1, 3, 2, 'บุญยรัตน์', 'พลวงศ์ษา', '1470100113791', '2', '28 พ.ค.2529', 4, '54', '163', '-', '82/2', 'โคกก่อง', 'เมืองสกลนคร', 'สกลนคร', '47000', '0635163997', '-', '-', '4', '0', NULL, NULL, NULL, '2019-11-25 22:07:35', NULL, NULL);
INSERT INTO `register` VALUES (19, 2, 2, 2, 'ณัฐวี', 'ภูมิสุข', '1329900107379', '2', '25 ธันวาคม 2529', 6, '58', '161', '_', 'สาขาวิชาเคมี คณะวิทยาศาสตร์และเทคโนโลยี มหาวืทยาลัยราชภัฏสกลนคร', 'ธาตุเชิงชุม', 'เมืองสกลนคร', 'สกลนคร', '47000', '0843906025', 'เอกพร', '0887311095', '4', '0', NULL, NULL, NULL, '2019-11-25 22:19:21', NULL, NULL);

-- ----------------------------
-- Table structure for tb_ci_log_delete
-- ----------------------------
DROP TABLE IF EXISTS `tb_ci_log_delete`;
CREATE TABLE `tb_ci_log_delete`  (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_del_remark` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'หมายเหตุ',
  `log_table_name` varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'ชื่อตารางที่ลบ',
  `log_table_pk_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'PK Field',
  `log_table_pk_value` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'PK Value',
  `log_del_condition` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'เงื่อนไขที่ใช้ลบ',
  `log_record_data` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT 'ข้อมูลเรคอร์ดที่ลบ',
  `create_user_id` int(11) DEFAULT NULL COMMENT 'รหัสผู้ทำรายการ',
  `create_datetime` datetime(0) DEFAULT NULL COMMENT 'วันที่ทำรายการ',
  `log_login_id` int(11) DEFAULT NULL COMMENT 'อ้างอิงตารางล็อกอิน',
  PRIMARY KEY (`log_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = 'เก็บข้อมูลก่อนลบ' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_ci_log_history
-- ----------------------------
DROP TABLE IF EXISTS `tb_ci_log_history`;
CREATE TABLE `tb_ci_log_history`  (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_edit_user` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'อ้างอิงตาราง User',
  `log_edit_datetime` datetime(0) DEFAULT NULL COMMENT 'เมื่อไหร่',
  `log_edit_remark` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'หมายเหตุ (ต้องระบุ)',
  `log_edit_table` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'ที่ตารางไหน',
  `log_edit_table_pk_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'PK ฟิลด์',
  `log_edit_table_pk_value` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'PK ข้อมูล',
  `log_edit_condition` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'เก็บเงื่อนไขการอัพเดต',
  `log_login_id` int(11) DEFAULT NULL COMMENT 'อ้างอิงการ ตาราง Login',
  PRIMARY KEY (`log_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 38 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = 'เก็บประวัติการแก้ไข' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_ci_log_history
-- ----------------------------
INSERT INTO `tb_ci_log_history` VALUES (1, '1', '2019-07-15 22:06:20', '', 'db_ci_gen.tb_ci_setting', 'id', '1', 'table_name = \'tb_product_order_master\' \r\n					AND module_name = \'module_name\'\r\n					AND controller_n', NULL);
INSERT INTO `tb_ci_log_history` VALUES (2, '1', '2019-07-16 11:38:44', '', 'db_ci_gen.tb_ci_setting', 'id', '1', 'table_name = \'tb_product_order_master\' \r\n					AND module_name = \'module_name\'\r\n					AND controller_n', NULL);
INSERT INTO `tb_ci_log_history` VALUES (3, '1', '2019-07-16 12:29:23', '', 'db_ci_gen.tb_ci_setting', 'id', '1', 'table_name = \'tb_product_order_master\' \r\n					AND module_name = \'module_name\'\r\n					AND controller_n', NULL);
INSERT INTO `tb_ci_log_history` VALUES (4, '3', '2019-07-24 23:04:12', 'asdfasdf', 'tb_members', 'userid', '2', 'userid = 2', NULL);
INSERT INTO `tb_ci_log_history` VALUES (5, '3', '2019-07-29 22:10:59', 'sdfsdfsdf', 'tb_resume', 'resume_id', '4', 'tb_resume.resume_id = 4', NULL);
INSERT INTO `tb_ci_log_history` VALUES (6, '3', '2019-07-29 22:11:12', 'xcvzxcv', 'tb_resume', 'resume_id', '5', 'tb_resume.resume_id = 5', NULL);
INSERT INTO `tb_ci_log_history` VALUES (7, '1', '2019-08-01 20:34:07', '55555+', 'tb_resume', 'resume_id', '3', 'tb_resume.resume_id = 3', NULL);
INSERT INTO `tb_ci_log_history` VALUES (8, '1', '2019-08-07 20:30:57', 'ddddd', 'tb_product_order_master', 'id', '1', 'id = 1', NULL);
INSERT INTO `tb_ci_log_history` VALUES (9, '1', '2019-08-17 22:55:05', '', 'db_ci_gen.tb_ci_setting', 'id', '4', 'table_name = \'tb_resume\' \r\n					AND module_name = \'demo\'\r\n					AND controller_name = \'Resume\'\r\n					', NULL);
INSERT INTO `tb_ci_log_history` VALUES (10, '1', '2019-08-17 22:55:30', '', 'db_ci_gen.tb_ci_setting', 'id', '4', 'table_name = \'tb_resume\' \r\n					AND module_name = \'demo\'\r\n					AND controller_name = \'Resume\'\r\n					', NULL);
INSERT INTO `tb_ci_log_history` VALUES (11, '1', '2019-08-27 22:21:28', 'test55555', 'tb_resume', 'resume_id', '4', 'tb_resume.resume_id = 4', NULL);
INSERT INTO `tb_ci_log_history` VALUES (12, '1', '2019-08-27 22:21:52', 'test55555', 'tb_resume', 'resume_id', '4', 'tb_resume.resume_id = 4', NULL);
INSERT INTO `tb_ci_log_history` VALUES (13, '1', '2019-08-27 22:23:44', 'ddddddddddd', 'tb_resume', 'resume_id', '4', 'tb_resume.resume_id = 4', NULL);
INSERT INTO `tb_ci_log_history` VALUES (14, '1', '2019-08-27 22:42:06', 'asdfasdfasd', 'tb_resume', 'resume_id', '4', 'tb_resume.resume_id = 4', NULL);
INSERT INTO `tb_ci_log_history` VALUES (15, '1', '2019-08-27 22:42:50', 'dddddddd', 'tb_resume', 'resume_id', '4', 'tb_resume.resume_id = 4', NULL);
INSERT INTO `tb_ci_log_history` VALUES (16, '1', '2019-08-27 22:48:50', 'sdfsdfsdf', 'tb_resume', 'resume_id', '4', 'tb_resume.resume_id = 4', NULL);
INSERT INTO `tb_ci_log_history` VALUES (17, '1', '2019-08-27 22:49:18', 'asdfasfds', 'tb_resume', 'resume_id', '4', 'tb_resume.resume_id = 4', NULL);
INSERT INTO `tb_ci_log_history` VALUES (18, '1', '2019-08-27 23:11:40', 'asdfasdf', 'tb_resume', 'resume_id', '3', 'tb_resume.resume_id = 3', NULL);
INSERT INTO `tb_ci_log_history` VALUES (19, '1', '2019-08-27 23:14:39', 'aaaaaaaaaaaa', 'tb_resume', 'resume_id', '3', 'tb_resume.resume_id = 3', NULL);
INSERT INTO `tb_ci_log_history` VALUES (20, '1', '2019-08-27 23:15:58', 'sssssss', 'tb_resume', 'resume_id', '3', 'tb_resume.resume_id = 3', NULL);
INSERT INTO `tb_ci_log_history` VALUES (21, '8', '2019-11-15 21:52:39', '', 'db_ci_gen.tb_ci_setting', 'id', '8', 'table_name = \'register\' \r\n					AND module_name = \'module_name\'\r\n					AND controller_name = \'Register', NULL);
INSERT INTO `tb_ci_log_history` VALUES (22, '8', '2019-11-15 21:52:49', '', 'db_ci_gen.tb_ci_setting', 'id', '8', 'table_name = \'register\' \r\n					AND module_name = \'module_name\'\r\n					AND controller_name = \'Register', NULL);
INSERT INTO `tb_ci_log_history` VALUES (23, '8', '2019-11-18 23:38:18', '', 'db_ci_gen.tb_ci_setting', 'id', '8', 'table_name = \'register\' \r\n					AND module_name = \'module_name\'\r\n					AND controller_name = \'Register', NULL);
INSERT INTO `tb_ci_log_history` VALUES (24, '8', '2019-11-18 23:41:13', 'หหหหหหหหห', 'register', 'id', '1', 'register.id = 1', NULL);
INSERT INTO `tb_ci_log_history` VALUES (25, '8', '2019-11-20 22:46:52', '', 'db_ci_gen.tb_ci_setting', 'id', '8', 'table_name = \'register\' \r\n					AND module_name = \'module_name\'\r\n					AND controller_name = \'Register', NULL);
INSERT INTO `tb_ci_log_history` VALUES (26, '8', '2019-11-20 22:49:28', '', 'db_ci_gen.tb_ci_setting', 'id', '8', 'table_name = \'register\' \r\n					AND module_name = \'module_name\'\r\n					AND controller_name = \'Register', NULL);
INSERT INTO `tb_ci_log_history` VALUES (27, '8', '2019-11-20 22:50:26', '', 'db_ci_gen.tb_ci_setting', 'id', '8', 'table_name = \'register\' \r\n					AND module_name = \'module_name\'\r\n					AND controller_name = \'Register', NULL);
INSERT INTO `tb_ci_log_history` VALUES (28, '8', '2019-11-20 22:52:17', '', 'db_ci_gen.tb_ci_setting', 'id', '8', 'table_name = \'register\' \r\n					AND module_name = \'module_name\'\r\n					AND controller_name = \'Register', NULL);
INSERT INTO `tb_ci_log_history` VALUES (29, '8', '2019-11-20 22:59:53', '', 'db_ci_gen.tb_ci_setting', 'id', '8', 'table_name = \'register\' \r\n					AND module_name = \'module_name\'\r\n					AND controller_name = \'Register', NULL);
INSERT INTO `tb_ci_log_history` VALUES (30, '8', '2019-11-21 05:20:28', '', 'db_ci_gen.tb_ci_setting', 'id', '10', 'table_name = \'register\' \r\n					AND module_name = \'snru_run\'\r\n					AND controller_name = \'Register\'\r\n', NULL);
INSERT INTO `tb_ci_log_history` VALUES (31, '8', '2019-11-21 05:24:17', '', 'db_ci_gen.tb_ci_setting', 'id', '10', 'table_name = \'register\' \r\n					AND module_name = \'snru_run\'\r\n					AND controller_name = \'Register\'\r\n', NULL);
INSERT INTO `tb_ci_log_history` VALUES (32, NULL, '2019-11-21 05:47:08', '', 'register', 'cit_id', '1490400003052', 'register.cit_id = \'1490400003052\'', NULL);
INSERT INTO `tb_ci_log_history` VALUES (33, NULL, '2019-11-21 05:47:11', '', 'register', 'cit_id', '1490400003052', 'register.cit_id = \'1490400003052\'', NULL);
INSERT INTO `tb_ci_log_history` VALUES (34, NULL, '2019-11-21 05:53:31', '', 'register', 'cit_id', '1490400003052', 'register.cit_id = \'1490400003052\'', NULL);
INSERT INTO `tb_ci_log_history` VALUES (35, NULL, '2019-11-21 05:53:42', '', 'register', 'cit_id', '1490400003052', 'register.cit_id = \'1490400003052\'', NULL);
INSERT INTO `tb_ci_log_history` VALUES (36, NULL, '2019-11-21 05:54:05', '', 'register', 'cit_id', '1490400003052', 'register.cit_id = \'1490400003052\'', NULL);
INSERT INTO `tb_ci_log_history` VALUES (37, '8', '2019-11-21 06:14:53', '', 'db_ci_gen.tb_ci_setting', 'id', '8', 'table_name = \'register\' \r\n					AND module_name = \'module_name\'\r\n					AND controller_name = \'Register', NULL);

-- ----------------------------
-- Table structure for tb_ci_setting
-- ----------------------------
DROP TABLE IF EXISTS `tb_ci_setting`;
CREATE TABLE `tb_ci_setting`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `table_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `module_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `controller_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `model_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `all_setting` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `create_datetime` datetime(0) NOT NULL,
  `modify_datetime` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = 'เก็บข้อมูลการตั้งค่า' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_department
-- ----------------------------
DROP TABLE IF EXISTS `tb_department`;
CREATE TABLE `tb_department`  (
  `dpm_id` int(11) NOT NULL AUTO_INCREMENT,
  `dpm_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'ชื่อสังกัด',
  `dpm_void` int(1) NOT NULL COMMENT '1=ยกเลิก',
  PRIMARY KEY (`dpm_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = 'ตารางแผนก/ฝ่าย/สังกัด' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_department
-- ----------------------------
INSERT INTO `tb_department` VALUES (1, 'ฝ่ายขาย', 0);
INSERT INTO `tb_department` VALUES (2, 'ฝ่ายลูกค้าสัมพันธ์', 0);
INSERT INTO `tb_department` VALUES (3, 'ฝ่ายศูนย์บริการซ่อมบำรุง', 0);
INSERT INTO `tb_department` VALUES (4, 'ฝ่ายบุคคล', 1);

-- ----------------------------
-- Table structure for tb_members
-- ----------------------------
DROP TABLE IF EXISTS `tb_members`;
CREATE TABLE `tb_members`  (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'ชื่อผู้ใช้งาน',
  `password` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'รหัสผ่าน',
  `prefix` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'คำนำหน้า',
  `fullname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'ชื่อ',
  `lastname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'นามสกุล',
  `level` int(1) DEFAULT 1 COMMENT 'สิทธิ์การใช้งาน [1=ผู้ใช้ทั่วไป,9=admin]',
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'อีเมล',
  `tel_number` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'เบอร์โทรศัพท์',
  `line_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'ไอดี Line',
  `department_id` int(11) DEFAULT NULL COMMENT 'อ้างอิง ไอดีสังกัด',
  `photo` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'ภาพประจำตัว',
  `void` int(1) DEFAULT 0 COMMENT '1=ยกเลิกการใช้งาน',
  `create_date` datetime(0) DEFAULT NULL,
  `create_user_id` int(11) DEFAULT NULL,
  `modify_date` datetime(0) DEFAULT NULL,
  `modify_user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`userid`) USING BTREE,
  UNIQUE INDEX `email`(`email`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = 'ตารางสมาชิก' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_members
-- ----------------------------
INSERT INTO `tb_members` VALUES (1, 'user1', '$2y$11$jtrWEP2qaiBn.2D0V5Hno.GMluvI1RWzZq6qo9QJxLxGd7eOcGngO', 'MR', 'USER01', 'TEST1', 2, 'dddddddddddddddddd', '9999999999999', 'asdf12345555', 1, NULL, NULL, '2019-03-31 11:02:06', 1, '2019-04-06 00:00:00', 1);
INSERT INTO `tb_members` VALUES (2, 'demo', '$2y$11$rVlvrl3Ae34kyOptyPKd3.2uWjD8r3AyGyaEEzcUN5pG513o/JWq2', 'MR', 'USER02', 'TEST2', 9, 'kkkkkkkkkkkkkkkkkkkkkkk', '888888', '99999', 3, NULL, 0, '2019-03-31 11:02:13', 3, '2019-07-24 00:00:00', 3);
INSERT INTO `tb_members` VALUES (3, 'admin', '$2y$11$qmOjsOYbmPutFwPSJcNWJOZkAJ3J5nhcCKYJM6eY2YgaByaOmqGuu', 'MR', 'Admin1', 'TEST3', 9, 'dddd', 'sss', 'aaa', 2, NULL, 1, '2019-03-31 11:02:10', 2, '2019-04-03 00:00:00', 1);
INSERT INTO `tb_members` VALUES (4, 'TEST02', '$2y$11$7FDP4nR6uC8LdfUZ2PAlOeG5hOpERqxfeElUkZHSSEZUl52N8e.zG', 'MR', 'TEST 02', 'SYSTEM', 1, '-', '-', '-', 3, NULL, 0, '2019-07-24 23:02:54', 3, NULL, NULL);
INSERT INTO `tb_members` VALUES (5, 'user4', '$2y$11$ufhMNQO3t2KxumMd9e6acecB1EiYa5Sjj./X37XUzXX7624DhwMgG', 'MISS', 'UNIVERSE', 'THAILAND', 1, '123', '-', '-', 2, NULL, 0, '2019-07-30 22:05:50', 3, NULL, NULL);

-- ----------------------------
-- Table structure for tb_members_level
-- ----------------------------
DROP TABLE IF EXISTS `tb_members_level`;
CREATE TABLE `tb_members_level`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level_value` int(2) DEFAULT NULL COMMENT 'ตัวเลขระดับ',
  `level_title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'คำอธิบาย',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = 'ตารางแสดงระดับสิทธิ์การเข้าใช้งานของสมาชิก' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_members_level
-- ----------------------------
INSERT INTO `tb_members_level` VALUES (1, 1, 'ผู้ใช้งานทั่วไป');
INSERT INTO `tb_members_level` VALUES (2, 2, 'หัวหน้า');
INSERT INTO `tb_members_level` VALUES (3, 3, 'ผู้จัดการ');
INSERT INTO `tb_members_level` VALUES (4, 9, 'ผู้ดูแลระบบ');

-- ----------------------------
-- Table structure for u_admin
-- ----------------------------
DROP TABLE IF EXISTS `u_admin`;
CREATE TABLE `u_admin`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username_d` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `password_d` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `full_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of u_admin
-- ----------------------------
INSERT INTO `u_admin` VALUES (1, 'admin', '1234', 'admin ');

-- ----------------------------
-- View structure for v_register
-- ----------------------------
DROP VIEW IF EXISTS `v_register`;
CREATE ALGORITHM = UNDEFINED DEFINER = `root`@`localhost` SQL SECURITY DEFINER VIEW `v_register` AS SELECT
register.id,
concat(ref_prefix.prefix_name_th,register.fname,' ',register.lname) as full_name,
ref_run_type.run_type_name,
ref_mode_regis.mode_regis_name,
ref_shirt_size.shirt_size_name,
ref_prefix.prefix_name_th,
register.fname,
register.lname,
register.cit_id,
register.bdate,
ref_blood_group.blood_group_name,
register.weight,
register.hight,
register.date_regis,
register.payment_status,
register.file_payment,
register.pay_date,
register.pay_time,
register.slip_acc,
register.pay_amount,
register.type_run
FROM
register
INNER JOIN ref_prefix ON register.prefix_id = ref_prefix.prefix_id
INNER JOIN ref_run_type ON register.type_run = ref_run_type.run_type_id
JOIN ref_blood_group ON ref_blood_group.blood_group_id = register.blood_group
INNER JOIN ref_mode_regis ON register.mode_regis = ref_mode_regis.mode_regis_id
INNER JOIN ref_shirt_size ON register.shirt_size = ref_shirt_size.shirt_size_id 
order by id desc ;

SET FOREIGN_KEY_CHECKS = 1;
