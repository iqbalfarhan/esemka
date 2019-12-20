-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table db_websekolah.tbl_agenda
CREATE TABLE IF NOT EXISTS `tbl_agenda` (
  `agenda_id` int(11) NOT NULL AUTO_INCREMENT,
  `agenda_nama` varchar(200) DEFAULT NULL,
  `agenda_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `agenda_deskripsi` text,
  `agenda_mulai` date DEFAULT NULL,
  `agenda_selesai` date DEFAULT NULL,
  `agenda_tempat` varchar(90) DEFAULT NULL,
  `agenda_waktu` varchar(30) DEFAULT NULL,
  `agenda_keterangan` varchar(200) DEFAULT NULL,
  `agenda_author` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`agenda_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table db_websekolah.tbl_agenda: ~4 rows (approximately)
/*!40000 ALTER TABLE `tbl_agenda` DISABLE KEYS */;
INSERT INTO `tbl_agenda` (`agenda_id`, `agenda_nama`, `agenda_tanggal`, `agenda_deskripsi`, `agenda_mulai`, `agenda_selesai`, `agenda_tempat`, `agenda_waktu`, `agenda_keterangan`, `agenda_author`) VALUES
	(8, 'tes agenda 3', '2019-10-26 18:44:59', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta consequuntur repellendus impedit obcaecati, fuga veritatis qui ea perspiciatis. Autem perferendis quasi porro officia neque beatae in recusandae iusto voluptates nisi.', '2019-09-29', '2019-10-09', 'xxx', '10.30-21.30 wit', 'xxx', 'user'),
	(9, 'tes agenda 2', '2019-10-26 18:44:59', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta consequuntur repellendus impedit obcaecati, fuga veritatis qui ea perspiciatis. Autem perferendis quasi porro officia neque beatae in recusandae iusto voluptates nisi.', '2019-09-29', '2019-10-09', 'xxx', '10.30-21.30 wit', 'xxx', 'user'),
	(10, 'tes agenda 1', '2019-10-26 18:44:59', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta consequuntur repellendus impedit obcaecati, fuga veritatis qui ea perspiciatis. Autem perferendis quasi porro officia neque beatae in recusandae iusto voluptates nisi.', '2019-09-29', '2019-10-09', 'xxx', '10.30-21.30 wit', 'xxx', 'user'),
	(11, 'tes agenda ', '2019-10-29 19:01:46', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '2019-10-15', '2019-10-25', 'xxxxxxx', '12.00-13.00', 'xxxxxxx', 'user');
/*!40000 ALTER TABLE `tbl_agenda` ENABLE KEYS */;

-- Dumping structure for table db_websekolah.tbl_album
CREATE TABLE IF NOT EXISTS `tbl_album` (
  `album_id` int(11) NOT NULL AUTO_INCREMENT,
  `album_nama` varchar(50) DEFAULT NULL,
  `album_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `album_pengguna_id` int(11) DEFAULT NULL,
  `album_author` varchar(60) DEFAULT NULL,
  `album_count` int(11) DEFAULT '0',
  `album_cover` varchar(40) DEFAULT NULL,
  `album_slug` varchar(40) DEFAULT NULL,
  `album_views` int(11) NOT NULL,
  PRIMARY KEY (`album_id`),
  KEY `album_pengguna_id` (`album_pengguna_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table db_websekolah.tbl_album: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_album` DISABLE KEYS */;
INSERT INTO `tbl_album` (`album_id`, `album_nama`, `album_tanggal`, `album_pengguna_id`, `album_author`, `album_count`, `album_cover`, `album_slug`, `album_views`) VALUES
	(4, 'pintar', '2019-10-26 21:17:17', 5, 'user', 0, '8dbc02104298dc953978f8e7cb3327fe.jpg', 'pintar', 1);
/*!40000 ALTER TABLE `tbl_album` ENABLE KEYS */;

-- Dumping structure for table db_websekolah.tbl_banner
CREATE TABLE IF NOT EXISTS `tbl_banner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gambar` varchar(100) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table db_websekolah.tbl_banner: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_banner` DISABLE KEYS */;
INSERT INTO `tbl_banner` (`id`, `gambar`, `judul`, `keterangan`) VALUES
	(2, 'slider.jpg', 'testing', 'lorem ipsum'),
	(3, 'slider-2.jpg', 'testing 2', 'lorem ipsum dolor sir amet');
/*!40000 ALTER TABLE `tbl_banner` ENABLE KEYS */;

-- Dumping structure for table db_websekolah.tbl_fasilitas
CREATE TABLE IF NOT EXISTS `tbl_fasilitas` (
  `fasilitas_id` int(11) NOT NULL AUTO_INCREMENT,
  `fasilitas_judul` varchar(100) NOT NULL,
  `fasilitas_isi` varchar(100) NOT NULL,
  `fasilitas_tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fasilitas_kategori_id` int(11) NOT NULL,
  `fasilitas_kategori_nama` varchar(40) NOT NULL,
  `fasilitas_views` int(11) NOT NULL,
  `fasilitas_gambar` varchar(60) NOT NULL,
  `fasilitas_pengguna_id` int(11) NOT NULL,
  `fasilitas_author` varchar(50) NOT NULL,
  `fasilitas_img_slider` int(11) NOT NULL,
  `fasilitas_slug` varchar(200) NOT NULL,
  PRIMARY KEY (`fasilitas_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table db_websekolah.tbl_fasilitas: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_fasilitas` DISABLE KEYS */;
INSERT INTO `tbl_fasilitas` (`fasilitas_id`, `fasilitas_judul`, `fasilitas_isi`, `fasilitas_tanggal`, `fasilitas_kategori_id`, `fasilitas_kategori_nama`, `fasilitas_views`, `fasilitas_gambar`, `fasilitas_pengguna_id`, `fasilitas_author`, `fasilitas_img_slider`, `fasilitas_slug`) VALUES
	(6, 'tes fasilitas 1', '<p><em><strong>Masjid</strong></em></p>\r\n\r\n<p>Terdapat fasilitas mushola yang digunakan para siswa s', '2019-10-29 13:25:03', 1, 'umum', 4, 'b021766b408bcd630412dd5626a3642f.png', 5, 'user', 0, 'tes-fasilitas-1');
/*!40000 ALTER TABLE `tbl_fasilitas` ENABLE KEYS */;

-- Dumping structure for table db_websekolah.tbl_files
CREATE TABLE IF NOT EXISTS `tbl_files` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_judul` varchar(120) DEFAULT NULL,
  `file_deskripsi` text,
  `file_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `file_oleh` varchar(60) DEFAULT NULL,
  `file_download` int(11) DEFAULT '0',
  `file_data` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_websekolah.tbl_files: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_files` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_files` ENABLE KEYS */;

-- Dumping structure for table db_websekolah.tbl_galeri
CREATE TABLE IF NOT EXISTS `tbl_galeri` (
  `galeri_id` int(11) NOT NULL AUTO_INCREMENT,
  `galeri_judul` varchar(60) DEFAULT NULL,
  `galeri_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `galeri_gambar` varchar(40) DEFAULT NULL,
  `galeri_album_id` int(11) DEFAULT NULL,
  `galeri_pengguna_id` int(11) DEFAULT NULL,
  `galeri_author` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`galeri_id`),
  KEY `galeri_album_id` (`galeri_album_id`),
  KEY `galeri_pengguna_id` (`galeri_pengguna_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- Dumping data for table db_websekolah.tbl_galeri: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_galeri` DISABLE KEYS */;
INSERT INTO `tbl_galeri` (`galeri_id`, `galeri_judul`, `galeri_tanggal`, `galeri_gambar`, `galeri_album_id`, `galeri_pengguna_id`, `galeri_author`) VALUES
	(22, 'asd', '2019-10-26 20:46:08', '93b36aa1fbf8bc791aa12f17191d729a.png', 3, 5, 'user');
/*!40000 ALTER TABLE `tbl_galeri` ENABLE KEYS */;

-- Dumping structure for table db_websekolah.tbl_guru
CREATE TABLE IF NOT EXISTS `tbl_guru` (
  `guru_id` int(11) NOT NULL AUTO_INCREMENT,
  `guru_nip` varchar(30) DEFAULT NULL,
  `guru_nama` varchar(70) DEFAULT NULL,
  `guru_jenkel` varchar(2) DEFAULT NULL,
  `guru_tmp_lahir` varchar(80) DEFAULT NULL,
  `guru_tgl_lahir` varchar(80) DEFAULT NULL,
  `guru_mapel` varchar(120) DEFAULT NULL,
  `guru_photo` varchar(40) DEFAULT NULL,
  `guru_tgl_input` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`guru_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_websekolah.tbl_guru: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_guru` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_guru` ENABLE KEYS */;

-- Dumping structure for table db_websekolah.tbl_inbox
CREATE TABLE IF NOT EXISTS `tbl_inbox` (
  `inbox_id` int(11) NOT NULL AUTO_INCREMENT,
  `inbox_nama` varchar(40) DEFAULT NULL,
  `inbox_email` varchar(60) DEFAULT NULL,
  `inbox_kontak` varchar(20) DEFAULT NULL,
  `inbox_pesan` text,
  `inbox_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `inbox_status` int(11) DEFAULT '1' COMMENT '1=Belum dilihat, 0=Telah dilihat',
  PRIMARY KEY (`inbox_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table db_websekolah.tbl_inbox: ~3 rows (approximately)
/*!40000 ALTER TABLE `tbl_inbox` DISABLE KEYS */;
INSERT INTO `tbl_inbox` (`inbox_id`, `inbox_nama`, `inbox_email`, `inbox_kontak`, `inbox_pesan`, `inbox_tanggal`, `inbox_status`) VALUES
	(3, 'sdf', 'fds@sddf', 'sdfdf', 'dsfsdf', '2019-10-25 12:15:49', 0),
	(4, 'erewr', 'daS@efe', 'dfdsf', 'dsf', '2019-10-25 12:15:58', 0),
	(5, 'sadsd', 'sdsfsd@fdsf', 'sdfdsf', 'dfsd', '2019-10-25 13:24:17', 0);
/*!40000 ALTER TABLE `tbl_inbox` ENABLE KEYS */;

-- Dumping structure for table db_websekolah.tbl_jurusan
CREATE TABLE IF NOT EXISTS `tbl_jurusan` (
  `jurusan_id` int(11) NOT NULL AUTO_INCREMENT,
  `jurusan_judul` varchar(100) NOT NULL,
  `jurusan_isi` text NOT NULL,
  `jurusan_tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jurusan_kategori_id` int(11) NOT NULL,
  `jurusan_kategori_nama` varchar(30) NOT NULL,
  `jurusan_views` int(11) NOT NULL,
  `jurusan_gambar` varchar(60) NOT NULL,
  `jurusan_pengguna_id` int(11) NOT NULL,
  `jurusan_author` varchar(40) NOT NULL,
  `jurusan_img_slider` int(11) NOT NULL,
  `jurusan_slug` varchar(200) NOT NULL,
  PRIMARY KEY (`jurusan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

-- Dumping data for table db_websekolah.tbl_jurusan: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_jurusan` DISABLE KEYS */;
INSERT INTO `tbl_jurusan` (`jurusan_id`, `jurusan_judul`, `jurusan_isi`, `jurusan_tanggal`, `jurusan_kategori_id`, `jurusan_kategori_nama`, `jurusan_views`, `jurusan_gambar`, `jurusan_pengguna_id`, `jurusan_author`, `jurusan_img_slider`, `jurusan_slug`) VALUES
	(39, 'tes Jurusan 1', '<p>Tujuan Kompetensi Keahlian Teknik Alat Berat</p>\r\n\r\n<p><img alt="" src="http://www.smkn1sgs.sch.id/images/smkn1sgs2/proli/tab.png" style="height:150px; width:600px" /></p>\r\n\r\n<p>Tujuan Program Keahlian Teknik Alat Berat secara umum mengacu pada isi Undang Undang Sistem Pendidikan Nasional (UU SPN) pasal 3 mengenai Tujuan Pendidikan Nasional dan penjelasan pasal 15 yang menyebutkan bahwa&nbsp; pendidikan kejuruan merupakan pendidikan menengah yang mempersiapkan peserta didik terutama untuk bekerja dalam bidang tertentu. Secara khusus tujuan Program Keahlian Teknik Alat Berat&nbsp; adalah membekali peserta didik&nbsp; dengan keterampilan, pengetahuan dan sikap agar kompeten:</p>\r\n\r\n<ol>\r\n	<li>Melaksanakan keterampilan dasar Maintenance and Repair</li>\r\n	<li>Melepas dan memasang electric alat berat</li>\r\n	<li>Melepas dan memasang power train alat berat</li>\r\n	<li>Melepas dan memasang under carigage alat berat</li>\r\n	<li>Melepas dan memasang hydraulic alat berat</li>\r\n	<li>Melaksanakan Preventive Maintenance</li>\r\n</ol>\r\n\r\n<p>Kompetensi Keahlian Teknik Alat Berat</p>\r\n\r\n<p>Standar kompetensi yang digunakan sebagai acuan pengembangan kurikulum ini&nbsp; adalah Standar Kompetensi Kerja Nasional Indonesia (SKKNI) pada Keahlian Teknik Alat Berat. Standar kompetensi dan level kualifikasi keahlian Teknik Alat Berat dapat digambarkan sebagai berikut :</p>\r\n\r\n<ol>\r\n	<li>Memahami dasar &ndash; dasar kejuruan mesin</li>\r\n	<li>Memahami proses &ndash; proses dasar pembentukan logam</li>\r\n	<li>Menjelaskan proses &ndash; proses mesin konversi energi.</li>\r\n	<li>Menerapkan prosedur keselamatan, kesehatan kerja dan lingkungan tempat kerja.</li>\r\n	<li>Menginterprestasikan gambar teknik</li>\r\n	<li>Menggunakan peralatan dan perlengkapan di tempat kerja</li>\r\n	<li>Menggunakan alat &ndash; alat ukur ( measuring tools )</li>\r\n	<li>Menggunakan special tools</li>\r\n	<li>Menggunakan workshop equipment</li>\r\n	<li>Menggunakan seal, bearing dan coating material</li>\r\n	<li>Menggunakan service literatur</li>\r\n	<li>Menggunakan pekerjaan dasar listrik</li>\r\n	<li>Menggunakan dasar hydraulic sistem</li>\r\n	<li>Melaksanakan pekerjaan dasar power train.</li>\r\n	<li>Melaksanakan pekerjaan dasar engine</li>\r\n	<li>Melaksanakan pekerjaan dasar under carriage</li>\r\n	<li>Memperbaiki turbo charger</li>\r\n	<li>Memperbaiki cylinder head group.</li>\r\n	<li>Memperabaiki fuel injection pump</li>\r\n	<li>Memperbaiki radiator assy</li>\r\n	<li>Merawat 10 jam operasi ( daily )</li>\r\n	<li>Merawat unit/ mesin 50 jam operasi ( weekly )</li>\r\n	<li>Merawat unit/ mesin 250 jam operasi ( moontly )</li>\r\n	<li>Merawat unit/ mesin 2000 jam</li>\r\n</ol>\r\n', '2019-10-29 13:19:48', 3, 'Teknik Alat Berat', 15, 'ba5ce90f10ec453c5f70f99068dd4aea.jpg', 5, 'user', 0, 'tes-jurusan-1');
/*!40000 ALTER TABLE `tbl_jurusan` ENABLE KEYS */;

-- Dumping structure for table db_websekolah.tbl_kategori
CREATE TABLE IF NOT EXISTS `tbl_kategori` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_nama` varchar(30) DEFAULT NULL,
  `kategori_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table db_websekolah.tbl_kategori: ~6 rows (approximately)
/*!40000 ALTER TABLE `tbl_kategori` DISABLE KEYS */;
INSERT INTO `tbl_kategori` (`kategori_id`, `kategori_nama`, `kategori_tanggal`) VALUES
	(1, 'Pendidikan', '2016-09-06 13:49:04'),
	(2, 'Politik', '2016-09-06 13:50:01'),
	(3, 'Sains', '2016-09-06 13:59:39'),
	(5, 'Penelitian', '2016-09-06 14:19:26'),
	(6, 'Prestasi', '2016-09-07 10:51:09'),
	(13, 'Olah Raga', '2017-01-13 21:20:31');
/*!40000 ALTER TABLE `tbl_kategori` ENABLE KEYS */;

-- Dumping structure for table db_websekolah.tbl_kategori_fasilitas
CREATE TABLE IF NOT EXISTS `tbl_kategori_fasilitas` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_nama` varchar(50) NOT NULL,
  `kategori_tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_websekolah.tbl_kategori_fasilitas: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_kategori_fasilitas` DISABLE KEYS */;
INSERT INTO `tbl_kategori_fasilitas` (`kategori_id`, `kategori_nama`, `kategori_tanggal`) VALUES
	(1, 'umum', '2019-10-29 10:45:04'),
	(2, 'lapangan', '2019-10-27 20:31:29');
/*!40000 ALTER TABLE `tbl_kategori_fasilitas` ENABLE KEYS */;

-- Dumping structure for table db_websekolah.tbl_kategori_jurusan
CREATE TABLE IF NOT EXISTS `tbl_kategori_jurusan` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_nama` varchar(40) NOT NULL,
  `kategori_tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table db_websekolah.tbl_kategori_jurusan: ~3 rows (approximately)
/*!40000 ALTER TABLE `tbl_kategori_jurusan` DISABLE KEYS */;
INSERT INTO `tbl_kategori_jurusan` (`kategori_id`, `kategori_nama`, `kategori_tanggal`) VALUES
	(1, 'Rekayasa Perangkat Lunak', '2019-10-25 12:45:18'),
	(2, 'Teknik Komputer Jaringan', '2019-10-25 12:45:18'),
	(3, 'Teknik Alat Berat', '2019-10-26 10:26:41');
/*!40000 ALTER TABLE `tbl_kategori_jurusan` ENABLE KEYS */;

-- Dumping structure for table db_websekolah.tbl_kelas
CREATE TABLE IF NOT EXISTS `tbl_kelas` (
  `kelas_id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas_nama` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`kelas_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- Dumping data for table db_websekolah.tbl_kelas: ~21 rows (approximately)
/*!40000 ALTER TABLE `tbl_kelas` DISABLE KEYS */;
INSERT INTO `tbl_kelas` (`kelas_id`, `kelas_nama`) VALUES
	(1, 'Kelas X.1'),
	(2, 'Kelas X.2'),
	(3, 'Kelas X.3'),
	(4, 'Kelas X.4'),
	(5, 'Kelas X.5'),
	(6, 'Kelas X.6'),
	(7, 'Kelas X.7'),
	(8, 'Kelas XI IPA.1'),
	(9, 'Kelas XI IPA.2'),
	(10, 'Kelas XI IPA.3'),
	(11, 'Kelas XI IPA.4'),
	(12, 'Kelas XI IPA.5'),
	(13, 'Kelas XI IPA.6'),
	(14, 'Kelas XI IPA.7'),
	(15, 'Kelas XI IPS.1'),
	(16, 'Kelas XI IPS.2'),
	(17, 'Kelas XI IPS.3'),
	(18, 'Kelas XI IPS.4'),
	(19, 'Kelas XI IPS.5'),
	(20, 'Kelas XI IPS.6'),
	(21, 'Kelas XI IPS.7');
/*!40000 ALTER TABLE `tbl_kelas` ENABLE KEYS */;

-- Dumping structure for table db_websekolah.tbl_komentar
CREATE TABLE IF NOT EXISTS `tbl_komentar` (
  `komentar_id` int(11) NOT NULL AUTO_INCREMENT,
  `komentar_nama` varchar(30) DEFAULT NULL,
  `komentar_email` varchar(50) DEFAULT NULL,
  `komentar_isi` varchar(120) DEFAULT NULL,
  `komentar_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `komentar_status` varchar(2) DEFAULT NULL,
  `komentar_tulisan_id` int(11) DEFAULT NULL,
  `komentar_jurusan_id` int(11) DEFAULT NULL,
  `komentar_fasilitas_id` int(11) DEFAULT NULL,
  `komentar_parent` int(11) DEFAULT '0',
  PRIMARY KEY (`komentar_id`),
  KEY `komentar_tulisan_id` (`komentar_tulisan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- Dumping data for table db_websekolah.tbl_komentar: ~5 rows (approximately)
/*!40000 ALTER TABLE `tbl_komentar` DISABLE KEYS */;
INSERT INTO `tbl_komentar` (`komentar_id`, `komentar_nama`, `komentar_email`, `komentar_isi`, `komentar_tanggal`, `komentar_status`, `komentar_tulisan_id`, `komentar_jurusan_id`, `komentar_fasilitas_id`, `komentar_parent`) VALUES
	(24, 'user', '', 'okeke', '2019-10-26 13:45:20', '1', 0, NULL, 0, 22),
	(25, 'dsf', 'sdf@awdas', ' asdasd', '2019-10-27 20:49:55', '1', NULL, NULL, 5, 0),
	(26, 'user', '', 'dsfdsf', '2019-10-27 20:50:18', '1', 5, NULL, NULL, 25),
	(27, 'aaa', 'aa@dsfd', ' aaa', '2019-10-27 20:50:36', '1', 41, NULL, NULL, 0),
	(28, 'user', '', 'oooo', '2019-10-27 20:50:52', '1', 41, NULL, NULL, 27);
/*!40000 ALTER TABLE `tbl_komentar` ENABLE KEYS */;

-- Dumping structure for table db_websekolah.tbl_log_aktivitas
CREATE TABLE IF NOT EXISTS `tbl_log_aktivitas` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_nama` text,
  `log_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `log_ip` varchar(20) DEFAULT NULL,
  `log_pengguna_id` int(11) DEFAULT NULL,
  `log_icon` blob,
  `log_jenis_icon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`log_id`),
  KEY `log_pengguna_id` (`log_pengguna_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_websekolah.tbl_log_aktivitas: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_log_aktivitas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_log_aktivitas` ENABLE KEYS */;

-- Dumping structure for table db_websekolah.tbl_pengguna
CREATE TABLE IF NOT EXISTS `tbl_pengguna` (
  `pengguna_id` int(11) NOT NULL AUTO_INCREMENT,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_moto` varchar(100) DEFAULT NULL,
  `pengguna_jenkel` varchar(2) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_tentang` text,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_nohp` varchar(20) DEFAULT NULL,
  `pengguna_facebook` varchar(35) DEFAULT NULL,
  `pengguna_twitter` varchar(35) DEFAULT NULL,
  `pengguna_linkdin` varchar(35) DEFAULT NULL,
  `pengguna_google_plus` varchar(35) DEFAULT NULL,
  `pengguna_status` int(2) DEFAULT '1',
  `pengguna_level` varchar(3) DEFAULT NULL,
  `pengguna_register` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengguna_photo` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`pengguna_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table db_websekolah.tbl_pengguna: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_pengguna` DISABLE KEYS */;
INSERT INTO `tbl_pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_moto`, `pengguna_jenkel`, `pengguna_username`, `pengguna_password`, `pengguna_tentang`, `pengguna_email`, `pengguna_nohp`, `pengguna_facebook`, `pengguna_twitter`, `pengguna_linkdin`, `pengguna_google_plus`, `pengguna_status`, `pengguna_level`, `pengguna_register`, `pengguna_photo`) VALUES
	(5, 'user', 'mantap', 'L', 'user', '202cb962ac59075b964b07152d234b70', 'adas', 'user@gmail.com', '553534', '3535', '3535', NULL, '35355', 1, '1', '2019-10-21 13:54:57', '2f968f0cb8f44740d6af3b47f55fc6dc.jpg');
/*!40000 ALTER TABLE `tbl_pengguna` ENABLE KEYS */;

-- Dumping structure for table db_websekolah.tbl_pengumuman
CREATE TABLE IF NOT EXISTS `tbl_pengumuman` (
  `pengumuman_id` int(11) NOT NULL AUTO_INCREMENT,
  `pengumuman_judul` varchar(150) DEFAULT NULL,
  `pengumuman_deskripsi` text,
  `pengumuman_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengumuman_author` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`pengumuman_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table db_websekolah.tbl_pengumuman: ~5 rows (approximately)
/*!40000 ALTER TABLE `tbl_pengumuman` DISABLE KEYS */;
INSERT INTO `tbl_pengumuman` (`pengumuman_id`, `pengumuman_judul`, `pengumuman_deskripsi`, `pengumuman_tanggal`, `pengumuman_author`) VALUES
	(1, 'tes judul 4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta consequuntur repellendus impedit obcaecati, fuga veritatis qui ea perspiciatis. Autem perferendis quasi porro officia neque beatae in recusandae iusto voluptates nisi.', '2019-10-26 18:21:12', 'user'),
	(2, 'tes judul 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta consequuntur repellendus impedit obcaecati, fuga veritatis qui ea perspiciatis. Autem perferendis quasi porro officia neque beatae in recusandae iusto voluptates nisi.', '2019-10-26 18:21:34', 'user'),
	(3, 'tes judul 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta consequuntur repellendus impedit obcaecati, fuga veritatis qui ea perspiciatis. Autem perferendis quasi porro officia neque beatae in recusandae iusto voluptates nisi.', '2019-10-26 19:05:33', 'user'),
	(4, 'tes judul 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta consequuntur repellendus impedit obcaecati, fuga veritatis qui ea perspiciatis. Autem perferendis quasi porro officia neque beatae in recusandae iusto voluptates nisi.', '2019-10-29 13:46:28', 'user'),
	(5, 'tes judul 5', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '2019-10-29 19:02:32', 'user');
/*!40000 ALTER TABLE `tbl_pengumuman` ENABLE KEYS */;

-- Dumping structure for table db_websekolah.tbl_pengunjung
CREATE TABLE IF NOT EXISTS `tbl_pengunjung` (
  `pengunjung_id` int(11) NOT NULL AUTO_INCREMENT,
  `pengunjung_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengunjung_ip` varchar(40) DEFAULT NULL,
  `pengunjung_perangkat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pengunjung_id`)
) ENGINE=InnoDB AUTO_INCREMENT=942 DEFAULT CHARSET=latin1;

-- Dumping data for table db_websekolah.tbl_pengunjung: ~10 rows (approximately)
/*!40000 ALTER TABLE `tbl_pengunjung` DISABLE KEYS */;
INSERT INTO `tbl_pengunjung` (`pengunjung_id`, `pengunjung_tanggal`, `pengunjung_ip`, `pengunjung_perangkat`) VALUES
	(930, '2018-08-09 16:04:59', '::1', 'Chrome'),
	(931, '2019-10-21 13:44:47', '::1', 'Chrome'),
	(932, '2019-10-22 12:58:44', '::1', 'Chrome'),
	(933, '2019-10-25 12:12:47', '::1', 'Chrome'),
	(934, '2019-10-26 10:06:36', '::1', 'Chrome'),
	(935, '2019-10-29 09:36:55', '::1', 'Chrome'),
	(936, '2019-10-27 20:04:19', '::1', 'Chrome'),
	(937, '2019-12-01 19:58:52', '::1', 'Chrome'),
	(938, '2019-12-02 09:22:27', '::1', 'Chrome'),
	(939, '2019-12-02 18:26:52', '127.0.0.1', 'Chrome'),
	(940, '2019-12-03 10:54:42', '127.0.0.1', 'Chrome'),
	(941, '2019-12-03 10:57:08', '::1', 'Chrome');
/*!40000 ALTER TABLE `tbl_pengunjung` ENABLE KEYS */;

-- Dumping structure for table db_websekolah.tbl_siswa
CREATE TABLE IF NOT EXISTS `tbl_siswa` (
  `siswa_id` int(11) NOT NULL AUTO_INCREMENT,
  `siswa_nis` varchar(20) DEFAULT NULL,
  `siswa_nama` varchar(70) DEFAULT NULL,
  `siswa_jenkel` varchar(2) DEFAULT NULL,
  `siswa_kelas_id` int(11) DEFAULT NULL,
  `siswa_photo` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`siswa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_websekolah.tbl_siswa: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_siswa` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_siswa` ENABLE KEYS */;

-- Dumping structure for table db_websekolah.tbl_testimoni
CREATE TABLE IF NOT EXISTS `tbl_testimoni` (
  `testimoni_id` int(11) NOT NULL AUTO_INCREMENT,
  `testimoni_nama` varchar(30) DEFAULT NULL,
  `testimoni_isi` varchar(120) DEFAULT NULL,
  `testimoni_email` varchar(35) DEFAULT NULL,
  `testimoni_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`testimoni_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_websekolah.tbl_testimoni: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_testimoni` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_testimoni` ENABLE KEYS */;

-- Dumping structure for table db_websekolah.tbl_tulisan
CREATE TABLE IF NOT EXISTS `tbl_tulisan` (
  `tulisan_id` int(11) NOT NULL AUTO_INCREMENT,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text,
  `tulisan_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) DEFAULT '0',
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL DEFAULT '0',
  `tulisan_slug` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`tulisan_id`),
  KEY `tulisan_kategori_id` (`tulisan_kategori_id`),
  KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

-- Dumping data for table db_websekolah.tbl_tulisan: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_tulisan` DISABLE KEYS */;
INSERT INTO `tbl_tulisan` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`) VALUES
	(46, 'tes judul 1', '<p><strong>Rekayasa perangkat lunak</strong>&nbsp;(RPL, atau dalam bahasa Inggris: Software Engineering atau SE) adalah satu bidang profesi yang mendalami cara-cara pengembangan software/perangkat lunak termasuk pembuatan, pengembanganan perangkat lunak/software dan manajemen kualitas.</p>\r\n\r\n<p><img alt="" src="https://cdn-images-1.medium.com/max/800/1*vRfb-8tgqdwiI0dYopJRfw.jpeg" style="height:320px; width:604px" /></p>\r\n\r\n<p>Program Keahlian Rekayasa Perangkat Lunak (RPL) adalah salah satu kompetensi keahlian dalam bidang Teknologi Komputer dan Informatika yang secara khusus mempelajari tentang pemrograman komputer. Lulusan RPL dewasa ini sangat dibutuhkan untuk menjawab banyaknya kebutuhan industri bagi ketersediaan tenaga Teknisi dalam bidang pengembangan software. Beberapa ruang lingkup pekerjaan di bidang RPL adalah Software Developer, Game Development, Software Tester, Software Engineering&nbsp;, Software Analis dan Integrator, Konsultan IT dan Programmer.</p>\r\n\r\n<p><strong><strong>M<span dir="rtl">ATERI YANG DIPELAJARI SISWA RPL</span></strong></strong></p>\r\n\r\n<p><strong><strong><span dir="rtl"><img alt="" src="https://idn.sch.id/wp-content/uploads/2016/10/img_580fffe324995.png" style="height:320px; width:604px" /></span></strong></strong></p>\r\n\r\n<p>Seiring dengan perkembangan teknologi saat ini, terutama perkembangan teknologi smartphone seperti Android dan iPhone maka kita memutuskan untuk fokus di dua bidang ini.</p>\r\n', '2019-10-29 13:01:36', 1, 'Pendidikan', 36, '9934152ae92f4e82657360ce77d6f594.jpg', 5, 'user', 0, 'tes-judul-1');
/*!40000 ALTER TABLE `tbl_tulisan` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
