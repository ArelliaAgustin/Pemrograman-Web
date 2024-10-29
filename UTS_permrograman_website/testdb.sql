-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_utspemweb
CREATE DATABASE IF NOT EXISTS `db_utspemweb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_utspemweb`;

-- Dumping structure for table db_utspemweb.biodata
CREATE TABLE IF NOT EXISTS `biodata` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `tempat_tanggal_lahir` varchar(100) DEFAULT NULL,
  `program_studi` varchar(100) DEFAULT NULL,
  `semester` int DEFAULT NULL,
  `universitas` varchar(100) DEFAULT NULL,
  `hobi` text,
  `posisi_organisasi` varchar(100) DEFAULT NULL,
  `keahlian_utama` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_utspemweb.biodata: ~1 rows (approximately)
INSERT INTO `biodata` (`id`, `nama`, `tempat_tanggal_lahir`, `program_studi`, `semester`, `universitas`, `hobi`, `posisi_organisasi`, `keahlian_utama`) VALUES
	(1, 'Arellia Agustin', 'Jakarta, 24 Agustus 2003', 'Informatika', 5, 'Universitas Pembangunan Jaya', 'Fotografi, Desain, Olahraga', 'Anggota Divisi Publikasi, Dokumentasi, Dekorasi - HIMAFORKA', 'UI/UX Design, Graphic Design, Web Development, Basic SQL');

-- Dumping structure for table db_utspemweb.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_utspemweb.contact: ~6 rows (approximately)
INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
	(1, 'Arel', 'arellgstn24@gmail.com', 'tes', 'halloooo', '2024-10-26 13:19:20'),
	(2, 'Arel', 'arellgstn24@gmail.com', 'tes', 'halloooo ini arell', '2024-10-26 13:22:27'),
	(3, 'tes 1', 'arellgstn24@gmail.com', 'apa', 'hallo ini arel', '2024-10-27 15:34:41'),
	(4, 'tes 1', 'arellgstn24@gmail.com', 'apa', 'hallo ini arel', '2024-10-27 15:36:37'),
	(5, 'Arel', 'arellgstn24@gmail.com', 'apa', 'apaaa?', '2024-10-27 15:37:57'),
	(6, 'Arel', 'arellgstn24@gmail.com', 'apa', 'apaaa?', '2024-10-27 15:39:54');

-- Dumping structure for table db_utspemweb.hobbies
CREATE TABLE IF NOT EXISTS `hobbies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_utspemweb.hobbies: ~3 rows (approximately)
INSERT INTO `hobbies` (`id`, `name`, `description`, `image`) VALUES
	(1, 'Fotografi', 'Saya suka mengabadikan momen dengan kamera dan bereksperimen dengan pencahayaan serta komposisi kreatif', 'fotografi.png'),
	(2, 'Olahraga', 'Olahraga membuat saya tetap sehat dan bugar. Saya juga senang mengeksplorasi berbagai jenis olahraga baru.', 'basket.png'),
	(3, 'Desain', 'Desain grafis dan UI/UX memberi saya ruang untuk menyalurkan kreativitas dalam bentuk visual yang menarik.', 'desain.png');

-- Dumping structure for table db_utspemweb.skills
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int NOT NULL AUTO_INCREMENT,
  `skill_name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_utspemweb.skills: ~4 rows (approximately)
INSERT INTO `skills` (`id`, `skill_name`, `description`, `image`) VALUES
	(1, 'Basic SQL', 'Menguasai penggunaan SQL untuk mengambil, menyisipkan, memperbarui, dan menghapus data dari database, serta memahami dasar-dasar query database.', 's1.png'),
	(2, 'UI/ux design', 'Terampil dalam merancang antarmuka yang intuitif dan berpusat pada pengguna, menggunakan alat seperti Figma, dengan fokus pada pengalaman dan interaksi pengguna.', 's2.png'),
	(3, 'Web design', 'Berpengalaman dalam merancang website yang menarik secara visual, dengan tata letak yang responsif, alur pengguna yang baik, dan keseimbangan estetika, menggunakan HTML, CSS, dan JavaScript dasar.', 's3.png'),
	(4, 'Graphic design', 'Mampu membuat desain grafis untuk konten promosi, media sosial, dan branding visual, menggunakan Adobe Photoshop dan Illustrator untuk menciptakan visual yang menarik.', 's4.png');

-- Dumping structure for table db_utspemweb.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cv_link` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_utspemweb.users: ~1 rows (approximately)
INSERT INTO `users` (`id`, `name`, `description`, `cv_link`, `profile_image`) VALUES
	(1, 'Arellia Agustin', 'Selamat datang di portofolio saya! Saya Arellia Agustin, mahasiswa semester 5 jurusan Informatika yang mendalami pengembangan website dan desain UI di Figma. Selain teknologi, saya juga memiliki passion di bidang fotografi, terutama dalam memahami segitiga eksposur (ISO, aperture, shutter speed).', 'https://drive.google.com/file/d/14QywEzhfMRs8HgLJNYcycr11TdM9ysJP/view?usp=drive_link', 'img/about-us2.png');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
