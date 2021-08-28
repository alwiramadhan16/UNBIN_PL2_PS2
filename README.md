# Tugas Bahasa Pemrograman 2

NPM: 14197071
<br></br>
Nama: Alwi Sahrul Ramadhan
<br></br>
Kelas: C

## Create Table Mahasiswa
DROP TABLE IF EXISTS `mahasiswa`;
<br></br>
CREATE TABLE `mahasiswa`  (
<br></br>
  `id` int NOT NULL AUTO_INCREMENT,
<br></br>
  `npm` int NULL DEFAULT NULL,
<br></br>
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
<br></br>
  PRIMARY KEY (`id`) USING BTREE
<br></br>
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;
<br></br>
SET FOREIGN_KEY_CHECKS = 1;
