<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-16 09:17:33 --> Query error: Table 'mlc_nb_ervila.users' doesn't exist - Invalid query: SELECT *
FROM `users`
WHERE `user_email` = 'admin'
AND `user_password` = 'admin'
ERROR - 2023-07-16 09:18:39 --> Severity: Notice --> Undefined index: role C:\xampp74\htdocs\ml\custom\naivebayes-ervila\application\views\layout\menu.php 2
ERROR - 2023-07-16 15:24:55 --> Query error: Unknown column 'jenis_kelamin' in 'field list' - Invalid query: SELECT
                	jenis_kelamin,
                	CASE WHEN 25 <= CAST(usia AS DECIMAL(10,6)) AND CAST(usia AS DECIMAL(10,6)) <= 35 THEN 'Dewasa Awal'
                	     WHEN 36 <= CAST(usia AS DECIMAL(10,6)) AND CAST(usia AS DECIMAL(10,6)) <= 46 THEN 'Dewasa Akhir'
                	     WHEN 47 <= CAST(usia AS DECIMAL(10,6)) AND CAST(usia AS DECIMAL(10,6)) <= 57 THEN 'Lansia Awal'
                	ELSE 'unclassified' END AS usia,
                	CASE WHEN 140 <= CAST(tinggi_badan AS DECIMAL(10,6)) AND CAST(tinggi_badan AS DECIMAL(10,6)) <= 152 THEN 'Pendek'
                	     WHEN 153 <= CAST(tinggi_badan AS DECIMAL(10,6)) AND CAST(tinggi_badan AS DECIMAL(10,6)) <= 165 THEN 'Sedang'
                	     WHEN 166 <= CAST(tinggi_badan AS DECIMAL(10,6)) AND CAST(tinggi_badan AS DECIMAL(10,6)) <= 178 THEN 'Tinggi'
                	ELSE 'unclassified' END AS tinggi_badan,
                	CASE WHEN 40 <= CAST(berat_badan AS DECIMAL(10,6)) AND CAST(berat_badan AS DECIMAL(10,6)) <= 58 THEN 'Kecil'
                	     WHEN 59 <= CAST(berat_badan AS DECIMAL(10,6)) AND CAST(berat_badan AS DECIMAL(10,6)) <= 77 THEN 'Sedang'
                	     WHEN 78 <= CAST(berat_badan AS DECIMAL(10,6)) AND CAST(berat_badan AS DECIMAL(10,6)) <= 96 THEN 'Besar'
                	ELSE 'unclassified' END AS berat_badan,
                	CASE WHEN 62 <= CAST(lingkar_perut AS DECIMAL(10,6)) AND CAST(lingkar_perut AS DECIMAL(10,6)) <= 79 THEN 'Kecil'
                	     WHEN 80 <= CAST(lingkar_perut AS DECIMAL(10,6)) AND CAST(lingkar_perut AS DECIMAL(10,6)) <= 97 THEN 'Sedang'
                	     WHEN 98 <= CAST(lingkar_perut AS DECIMAL(10,6)) AND CAST(lingkar_perut AS DECIMAL(10,6)) <= 115 THEN 'Besar'
                	ELSE 'unclassified' END AS lingkar_perut,
                	kurang_aktifitas_fisik,
                	gula_berlebih,
                	garam_berlebih,
                	lemak_berlebih,
                	kurang_makan_buah_sayur,
                	diagnosa
                FROM dataset;
                	
ERROR - 2023-07-16 15:25:10 --> Query error: Unknown column 'jenis_kelamin' in 'field list' - Invalid query: SELECT
                	jenis_kelamin,
                	CASE WHEN 25 <= CAST(usia AS DECIMAL(10,6)) AND CAST(usia AS DECIMAL(10,6)) <= 35 THEN 'Dewasa Awal'
                	     WHEN 36 <= CAST(usia AS DECIMAL(10,6)) AND CAST(usia AS DECIMAL(10,6)) <= 46 THEN 'Dewasa Akhir'
                	     WHEN 47 <= CAST(usia AS DECIMAL(10,6)) AND CAST(usia AS DECIMAL(10,6)) <= 57 THEN 'Lansia Awal'
                	ELSE 'unclassified' END AS usia,
                	CASE WHEN 140 <= CAST(tinggi_badan AS DECIMAL(10,6)) AND CAST(tinggi_badan AS DECIMAL(10,6)) <= 152 THEN 'Pendek'
                	     WHEN 153 <= CAST(tinggi_badan AS DECIMAL(10,6)) AND CAST(tinggi_badan AS DECIMAL(10,6)) <= 165 THEN 'Sedang'
                	     WHEN 166 <= CAST(tinggi_badan AS DECIMAL(10,6)) AND CAST(tinggi_badan AS DECIMAL(10,6)) <= 178 THEN 'Tinggi'
                	ELSE 'unclassified' END AS tinggi_badan,
                	CASE WHEN 40 <= CAST(berat_badan AS DECIMAL(10,6)) AND CAST(berat_badan AS DECIMAL(10,6)) <= 58 THEN 'Kecil'
                	     WHEN 59 <= CAST(berat_badan AS DECIMAL(10,6)) AND CAST(berat_badan AS DECIMAL(10,6)) <= 77 THEN 'Sedang'
                	     WHEN 78 <= CAST(berat_badan AS DECIMAL(10,6)) AND CAST(berat_badan AS DECIMAL(10,6)) <= 96 THEN 'Besar'
                	ELSE 'unclassified' END AS berat_badan,
                	CASE WHEN 62 <= CAST(lingkar_perut AS DECIMAL(10,6)) AND CAST(lingkar_perut AS DECIMAL(10,6)) <= 79 THEN 'Kecil'
                	     WHEN 80 <= CAST(lingkar_perut AS DECIMAL(10,6)) AND CAST(lingkar_perut AS DECIMAL(10,6)) <= 97 THEN 'Sedang'
                	     WHEN 98 <= CAST(lingkar_perut AS DECIMAL(10,6)) AND CAST(lingkar_perut AS DECIMAL(10,6)) <= 115 THEN 'Besar'
                	ELSE 'unclassified' END AS lingkar_perut,
                	kurang_aktifitas_fisik,
                	gula_berlebih,
                	garam_berlebih,
                	lemak_berlebih,
                	kurang_makan_buah_sayur,
                	diagnosa
                FROM dataset;
                	
ERROR - 2023-07-16 15:37:21 --> Severity: Notice --> Undefined index: jenis_kelamin C:\xampp74\htdocs\ml\custom\naivebayes-ervila\application\views\module\naivebayes\process.php 268
ERROR - 2023-07-16 15:37:21 --> Severity: Notice --> Undefined index: usia C:\xampp74\htdocs\ml\custom\naivebayes-ervila\application\views\module\naivebayes\process.php 269
ERROR - 2023-07-16 15:37:21 --> Severity: Notice --> Undefined index: tinggi_badan C:\xampp74\htdocs\ml\custom\naivebayes-ervila\application\views\module\naivebayes\process.php 270
ERROR - 2023-07-16 15:37:21 --> Severity: Notice --> Undefined index: berat_badan C:\xampp74\htdocs\ml\custom\naivebayes-ervila\application\views\module\naivebayes\process.php 271
ERROR - 2023-07-16 15:37:21 --> Severity: Notice --> Undefined index: jenis_kelamin C:\xampp74\htdocs\ml\custom\naivebayes-ervila\application\views\module\naivebayes\process.php 272
ERROR - 2023-07-16 15:37:21 --> Severity: Notice --> Undefined index: kurang_aktifitas_fisik C:\xampp74\htdocs\ml\custom\naivebayes-ervila\application\views\module\naivebayes\process.php 273
ERROR - 2023-07-16 15:37:21 --> Severity: Notice --> Undefined index: gula_berlebih C:\xampp74\htdocs\ml\custom\naivebayes-ervila\application\views\module\naivebayes\process.php 274
ERROR - 2023-07-16 15:37:21 --> Severity: Notice --> Undefined index: garam_berlebih C:\xampp74\htdocs\ml\custom\naivebayes-ervila\application\views\module\naivebayes\process.php 275
ERROR - 2023-07-16 15:37:21 --> Severity: Notice --> Undefined index: lemak_berlebih C:\xampp74\htdocs\ml\custom\naivebayes-ervila\application\views\module\naivebayes\process.php 276
ERROR - 2023-07-16 15:37:21 --> Severity: Notice --> Undefined index: kurang_makan_buah_sayur C:\xampp74\htdocs\ml\custom\naivebayes-ervila\application\views\module\naivebayes\process.php 277
ERROR - 2023-07-16 15:37:21 --> Severity: Notice --> Undefined index: diagnosa C:\xampp74\htdocs\ml\custom\naivebayes-ervila\application\views\module\naivebayes\process.php 278
ERROR - 2023-07-16 15:37:21 --> Query error: Table 'mlc_nb_ervila.history' doesn't exist - Invalid query: INSERT INTO `history` (`nama`, `jenis_kelamin`, `usia`, `tinggi_badan`, `berat_badan`, `lingkar_perut`, `kurang_aktifitas_fisik`, `gula_berlebih`, `garam_berlebih`, `lemak_berlebih`, `kurang_makan_buah_sayur`, `diagnosa`) VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)
