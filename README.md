DROP TABLE IF EXISTS mahasiswa;

CREATE TABLE mahasiswa (

id int NOT NULL AUTO_INCREMENT,

npm int NULL DEFAULT NULL,

nama varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,

PRIMARY KEY (id) USING BTREE

) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;

About
No description, website, or topics provided.
Resources
 Readme
Releases
No releases published
Packages
No packages published
Languages
PHP
100.0%
