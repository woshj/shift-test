-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table shift.employees: ~0 rows (approximately)
INSERT INTO `employees` (`id`, `name`, `phone`, `office_id`, `job_title_id`, `created_at`, `updated_at`) VALUES
	(1, 'Joshua', '123465798', 3, 3, '2022-05-01 22:23:16', '2022-05-02 15:45:26'),
	(2, 'Andy', '987654321', 1, 1, '2022-05-02 16:20:53', '2022-05-02 16:20:53'),
	(3, 'Mark', '123498765', 2, 2, '2022-05-02 16:20:54', '2022-05-02 16:20:54'),
	(4, 'James', '876565432', 1, 3, '2022-05-02 16:24:02', '2022-05-02 16:24:03'),
	(5, 'Jane', '875623452', 1, 3, '2022-05-02 16:24:38', '2022-05-02 16:24:38');

-- Dumping data for table shift.job_titles: ~0 rows (approximately)
INSERT INTO `job_titles` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Head of Technology', '2022-05-01 22:23:31', '2022-05-02 15:46:29'),
	(2, 'Software Architect', '2022-05-02 16:22:19', '2022-05-02 16:22:19'),
	(3, 'Developer', '2022-05-02 16:22:33', '2022-05-02 16:22:34');

-- Dumping data for table shift.offices: ~0 rows (approximately)
INSERT INTO `offices` (`id`, `name`, `address`, `created_at`, `updated_at`) VALUES
	(1, 'Head Office', 'Plymouth', '2022-05-01 21:36:35', '2022-05-02 15:17:24'),
	(2, 'Mark\'s house', 'Unknown', '2022-05-02 16:23:04', '2022-05-02 16:23:05'),
	(3, 'Josh\'s house', 'Ilchester', '2022-05-02 16:23:15', '2022-05-02 16:23:15');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
