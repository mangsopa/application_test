/*
 Navicat Premium Data Transfer

 Source Server         : Local
 Source Server Type    : MySQL
 Source Server Version : 100428 (10.4.28-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : application_test

 Target Server Type    : MySQL
 Target Server Version : 100428 (10.4.28-MariaDB)
 File Encoding         : 65001

 Date: 08/09/2023 16:49:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for t_pesanan
-- ----------------------------
DROP TABLE IF EXISTS `t_pesanan`;
CREATE TABLE `t_pesanan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `no_pesanan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal` datetime NULL DEFAULT NULL,
  `nm_supplier` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nm_produk` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `total` float NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- ----------------------------
-- Records of t_pesanan
-- ----------------------------
BEGIN;
INSERT INTO `t_pesanan` (`id`, `no_pesanan`, `tanggal`, `nm_supplier`, `nm_produk`, `total`, `updated_at`, `created_at`) VALUES (7, 'ORD202309081647437855', '2023-09-15 00:00:00', '30', 'lighting ceiling kitchen', 3023, '2023-09-08 16:47:43', '2023-09-08 16:47:43'), (8, 'ORD202309081648241183', '2023-10-05 00:00:00', '58', 'Orange Essence Food Flavou', 844, '2023-09-08 16:48:24', '2023-09-08 16:48:24'), (9, 'ORD202309081648339019', '2023-09-30 00:00:00', '58', 'Orange Essence Food Flavou', 844, '2023-09-08 16:48:33', '2023-09-08 16:48:33'), (10, 'ORD202309081648407671', '2023-09-09 00:00:00', '91', 'Leather Hand Bag', 3608, '2023-09-08 16:48:40', '2023-09-08 16:48:40');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
