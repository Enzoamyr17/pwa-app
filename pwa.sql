-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2025 at 04:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `timestamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drafts`
--

CREATE TABLE `drafts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `partname` varchar(255) NOT NULL,
  `partnum` varchar(255) NOT NULL,
  `drawnum` varchar(255) NOT NULL,
  `posnum` varchar(255) NOT NULL,
  `matnum` varchar(255) NOT NULL,
  `impa` varchar(255) NOT NULL,
  `artnum` varchar(255) NOT NULL,
  `specs` longtext NOT NULL,
  `timeper` int(11) NOT NULL,
  `requested_at` date NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drafts`
--

INSERT INTO `drafts` (`id`, `partname`, `partnum`, `drawnum`, `posnum`, `matnum`, `impa`, `artnum`, `specs`, `timeper`, `requested_at`, `token`) VALUES
(1, 'Sample New Draft', '987', '987', '78', '78', '9', '7', 'sample specs ni draft', 0, '2025-05-07', '4cf730a6-c5b9-46a6-af2a-991da2af9ecc');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(7, '2025_04_20_062255_create_admins_table', 2),
(8, '2025_04_20_062257_create_requests_table', 2),
(9, '2025_04_20_151134_add_status_to_requests_table', 3),
(10, '2025_04_30_085455_create_processes_table', 4),
(11, '2025_04_30_085646_create_modules_table', 4),
(12, '2025_05_04_174749_add_token_to_requests_table', 5),
(13, '2025_05_05_130642_create_trivias_table', 6),
(14, '2025_05_07_115124_create_drafts_table', 7),
(15, '2025_05_08_092532_add_desc_to_modules_table', 8),
(16, '2025_05_08_101015_add_desc_to_processes_table', 9),
(18, '2025_05_10_084209_create_parts_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `desc` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `title`, `link`, `created_at`, `updated_at`, `desc`) VALUES
(9, 'ISO 9001:2015 Certification', 'https://drive.google.com/file/d/1TtpKsT9DT9RNPrJIqvBEJo3-evlFQkdP/view?usp=drive_link', NULL, NULL, 'The Quality Management System Standard Certification ensures consistency in the quality of the products and services as well as meets customer expectations. This certification is most suitable for all the organizations like manufacturing industries, service industries, construction, hospitals, educational institutions, etc.'),
(10, 'ISO 14001:2015 Certification', 'https://drive.google.com/file/d/1-Yadt78UFC1JUkjGOZWLU2LrrnP6eogw/view?usp=drive_link', NULL, NULL, 'The Environmental Management System standard Certification ensures that organization adheres to the government regulations and shows that it has a safe and healthy working environment for the employees.'),
(11, 'ISO 22000:2018 Certification', 'https://drive.google.com/file/d/11noteRbb9bvBfO4Fk1WjxduRywGLQcYS/view?usp=drive_link', NULL, NULL, 'The Food Safety Management System Certification ensures the food is safe and healthy to eat. It enhances the customers\' confidence in your products, processes, services, and as well as in your food business.'),
(12, 'ISO 20000:2018 Certification', 'https://drive.google.com/file/d/1fo5BdKSQ6yT1OQTm0NJ7V7ELE-JF7zO6/view?usp=drive_link', NULL, NULL, 'The IT Service Management System Certification ensures the organizations deliver quality services to the customers and stakeholders. It promotes the profile of the organizations and takes your business process to international standards.'),
(13, 'ISO 27001:2013 Certification', 'https://drive.google.com/file/d/1x8YzhkIDr0W7snMOg0GGzH9-O2YunPCr/view?usp=drive_link', NULL, NULL, 'The Information Security Management System Standard Certifiation provides specified requirements to secure the confidential information and important assets of the organization. This is one of the finest ways to gain the trust of the customers and stakeholders. This globally recognized certification promotes your business and enhances the reputation of your organization.'),
(14, 'ISO 50001:2018 Certification', 'https://drive.google.com/file/d/1d55hK7xEWxAEZBjqDY6NQWzf-v97wDTL/view?usp=drive_link', NULL, NULL, 'The Management System standard Certification provides effective guidelines to consume more energy and to enhance energy efficiency. This Certification is applicable to all the organizations that want to get recognized as a future-focused organization.'),
(15, 'ISO 45001:2018 Certification', 'https://drive.google.com/file/d/1LSFcmGB6Z-L_oO58aKswEvZ5MW4feNYc/view?usp=drive_link', NULL, NULL, 'The Occupational Health and Safety Management System Certification is mainly proposed to reduce the accidents/deaths of people and as well as loss or damages to the equipment/environment. This globally recognized certification ensures employees\' safety and enhances the process efficiency.');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `name`, `desc`, `image_url`, `category`, `created_at`, `updated_at`) VALUES
(1, 'PISTON', 'A disk or short cylinder fitting closely within a tube in which it moves up and down against a liquid or gas, used in an internal combustion engine to derive motion, or in a pump to impart motion.', NULL, 'engine', NULL, NULL),
(2, 'CRANKSHAFT', 'A shaft driven by or driving a crank: a shaft consisting of a series of cranks and crankpins to which the connecting rods of an engine are attached.', NULL, 'engine', NULL, NULL),
(3, 'CYLINDER LINER', 'A cylinder liner, also known as a cylinder sleeve, is a cylindrical component inserted into an engine block to provide a durable, smooth, and wear-resistant surface for the reciprocating motion of the piston within an internal combustion engine, ensuring efficient sealing and lubrication', NULL, 'engine', NULL, NULL),
(4, 'FUEL INJECTOR', 'is a device that delivers a precise amount of fuel into an engine\'s combustion chamber, typically at the right time, for efficient combustion. It acts as a spray nozzle, atomizing and injecting fuel into the intake manifold, combustion chamber, or throttle body.', NULL, 'engine', NULL, NULL),
(5, 'CAMSHAFT', 'is a rotating shaft in an internal combustion engine that uses cams to control the opening and closing of valves, ensuring the proper intake of air and fuel and the expulsion of exhaust gases. These cams, which are attached to the shaft, are shaped in a way that, as the shaft rotates, they push on valve lifters, forcing the valves open.', NULL, 'engine', NULL, NULL),
(6, 'ENGINE BLOCK', 'the engine block, also known as cylinder block, is a critical component that forms the foundation for the engine\'s key parts, including the cylinders, pistons, and crankshaft. It\'s essentially the sturdy housing that holds and supports these vital components, facilitating the engine\'s operation.', NULL, 'engine', NULL, NULL),
(7, 'PISTON RING', 'are expandable split rings fitted to the outside of a piston in an internal combustion engine. Their primary functions are to seal the combustion chamber, prevent oil from leaking into the combustion chamber, and help conduct heat from the piston to the cylinder wall.', NULL, 'engine', NULL, NULL),
(8, 'TIMING CHAIN', 'is a metal chain that synchronizes the rotation of the crankshaft and camshaft(s) in an engine, ensuring the valves open and close at correct times. It\'s a crucial part of the engine that helps ensure proper combustion and engine performance', NULL, 'engine', NULL, NULL),
(9, 'ROCKER ARM', 'is a valvetrain component that typically transfers the motion of a pushrod in an overhead valve internal combustion engine to the corresponding intake/exhaust valve.', NULL, 'engine', NULL, NULL),
(10, 'Monkey Island', 'Monkey Island is a sort of deck located at the topmost accessible height of the ship and just above the bridge.', NULL, 'ship', NULL, NULL),
(11, 'Bridge', 'The ship\'s command center is located on the bridge. It manages the ship\'s navigation system, main engine, and crucial deck equipment to regulate the ship\'s motion.', NULL, 'ship', NULL, NULL),
(12, 'Funnel', 'A ship\'s chimney used to release boiler and engine smoke is called a funnel or stacks. Its function is to lift exhaust gases away from the deck.', NULL, 'ship', NULL, NULL),
(13, 'Accommodation', 'Ship accommodation refers to the sections of a vessel that are designed to provide a comfortable and functional living environment at sea. These areas typically include cabins for sleeping, mess halls for dining, galleys for food preparation, lounges for recreation, and sanitary facilities.', NULL, 'ship', NULL, NULL),
(14, 'Keel', 'The keel is the ship\'s foundational structural member, running lengthwise along the bottom and providing stability and strength.', NULL, 'ship', NULL, NULL),
(15, 'Mast', 'A ship\'s mast is a tall vertical spar or pole that rises from the deck of a vessel to support sails, rigging, and sometimes navigational equipment.', NULL, 'ship', NULL, NULL),
(16, 'Derrick crane', 'A ship\'s derrick crane is a lifting device with essential parts including a mast or boom for reach, ropes or wires for hoisting and controlling, blocks and sheaves to create mechanical advantage, and winches to provide the lifting power.', NULL, 'ship', NULL, NULL),
(17, 'Forecastle', 'The forecastle is the raised forward section of a ship\'s main deck. It typically houses equipment like the anchor windlass and mooring fittings, and historically provided shelter for the forward watch crew.', NULL, 'ship', NULL, NULL),
(18, 'Ship hull', 'The ship\'s hull, the watertight body of the vessel, is composed of various structural parts that provide buoyancy, stability, and strength.', NULL, 'ship', NULL, NULL),
(19, 'Propeller', 'A ship propeller typically consists of blades attached to a central hub. These rotating blades generate thrust by accelerating water aft, propelling the vessel forward.', NULL, 'ship', NULL, NULL),
(20, 'ANCHOR', 'An anchor is a heavy metal piece attached to the chain cables and is stored or secured in the hose pipe during the voyage/ship orientation. It can be either permanent or temporary with an additional sub class of sea anchors. All ships carrying anchors are of the temporary type; as they are not always fixed to the same position and often lowered at different position depending upon need. Together with its chain cables, connecting devices, windlass and chain stopper it is called anchor gear', NULL, 'engine', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `processes`
--

CREATE TABLE `processes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `desc` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `processes`
--

INSERT INTO `processes` (`id`, `title`, `link`, `created_at`, `updated_at`, `desc`) VALUES
(13, 'Sample Module 1', 'google.com', NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(14, 'Sample Module 2', 'google.com', NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(15, 'Sample Module 3', 'google.com', NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(16, 'Sample Module 4', 'google.com', NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(17, 'Sample Module 5', 'google.com', NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('APPROVED','DISAPPROVED','REQUESTED','JUSTIFICATION') NOT NULL DEFAULT 'REQUESTED',
  `partname` varchar(255) NOT NULL,
  `partnum` varchar(255) NOT NULL,
  `drawnum` varchar(255) NOT NULL,
  `posnum` varchar(255) NOT NULL,
  `matnum` varchar(255) NOT NULL,
  `impa` varchar(255) NOT NULL,
  `artnum` varchar(255) NOT NULL,
  `specs` longtext NOT NULL,
  `timeper` int(11) NOT NULL,
  `requested_at` date NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `status`, `partname`, `partnum`, `drawnum`, `posnum`, `matnum`, `impa`, `artnum`, `specs`, `timeper`, `requested_at`, `token`, `updated_by`) VALUES
(1, 'REQUESTED', 'Sample Request 1', '01', '01', '01', '01', '01', '01', 'Sample Specs', 0, '2025-05-07', '4cf730a6-c5b9-46a6-af2a-991da2af9ecc', NULL),
(2, 'APPROVED', 'mobile request', '1', '1', '1', '1', '1', '1', 'specs', 0, '2025-05-10', '58e16046-ecf9-457b-a2e6-8ab6a7de2e98', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('7H0IZkoDawjy2tMby7HSegPd2C2lnJv6Pc0COiQF', 1, '172.20.10.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_0_0 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/136.0.7103.56 Mobile/15E148 Safari/604.1', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMGtYZ0RHbHdyNTJUUUo5S0g3UUtOQXVQbTNqWnpGUXhhR3JOS2N4YiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xNzIuMjAuMTAuMjo4MDAwL2Rhc2hib2FyZCI7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1746839836),
('BdSMO4mLiMTbuOW2aQkfCs77Ntn54UIdlgfI832L', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRnJPYThRRzBKNUNGcWJKM005TEN1WWpqTHZCelRPbjdTdUl4aTJMZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1746837629),
('mj73wDJdMCDtEuGZXualMUErdfZedrHkf0z5fr0k', NULL, '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRWVoNnB3VHNMRzdUSTd5cHlic3BPQXM5djcxdlJ2bVRNTlVTYjVnUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9ob3RsIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1746841319);

-- --------------------------------------------------------

--
-- Table structure for table `trivias`
--

CREATE TABLE `trivias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text NOT NULL,
  `choice_a` varchar(255) NOT NULL,
  `choice_b` varchar(255) NOT NULL,
  `choice_c` varchar(255) NOT NULL,
  `choice_d` varchar(255) NOT NULL,
  `correct_answer` varchar(1) NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trivias`
--

INSERT INTO `trivias` (`id`, `question`, `choice_a`, `choice_b`, `choice_c`, `choice_d`, `correct_answer`, `category`, `created_at`, `updated_at`) VALUES
(1, 'The signal by sound given by a vessel who wants to alter course to port is;', '2 long blast', '2 short blast', '1 short blast', 'all of these', 'B', 'MASTER', NULL, NULL),
(2, 'When 2 power-driven vessel are meeting on reciprocal course, so as to involve risk of collision, each should:', 'Reduce speed', 'Alter course to stbd', 'Stop her engine', 'Alter course to port', 'B', 'MASTER', NULL, NULL),
(3, 'A vessel constrained by her draft shall exhibit during the day:', 'A black cylinder', '2 black balls in a vertical line', '3 black balls', '2 cones, apex together', 'A', 'MASTER', NULL, NULL),
(4, 'The vessel is underway when;', 'She is aground', 'She is at anchor', 'She is made fast to shore', 'None of these', 'D', 'MASTER', NULL, NULL),
(5, 'When the ship is not under command, your best action would be', 'Approach her', 'Sound the ship\'s whistle', 'Keep clear of her', 'Stop your engine', 'C', 'MASTER', NULL, NULL),
(6, 'This rule applies to vessels not in sight of one another when navigating in or near an area of restricted visibility.', 'Rule 19', 'Rule 20', 'Rule 17', 'Rule 18', 'A', 'MASTER', NULL, NULL),
(7, 'A vessel using a traffic separation scheme shall:', 'Anchor in the separation zone', 'Cross a traffic lane if obliged to', 'Avoid anchoring near the termination of the scheme', 'Utilize the separation zone for navigation through the scheme', 'C', 'MASTER', NULL, NULL),
(8, 'The term “IN EXTREMIS” means:', 'An act of God', 'An inevitable accident', 'Action is required by the privileged vessel', 'Time for the privileged vessel to sound danger signal', 'B', 'MASTER', NULL, NULL),
(9, 'A safe speed is defined as that speed where:', 'You can stop within your range of visibility', 'You can take proper and effective action to avoid collision', 'You move slower than the surrounding vessels', 'No wake comes from your vessel', 'B', 'MASTER', NULL, NULL),
(10, 'The daymark for fishing in international waters is', 'A basket or a double cone', 'A cone', 'A black ball', 'None of the above', 'A', 'MASTER', NULL, NULL),
(11, 'Compass needle derives its directive force from:', 'Metal used in building the ship', 'Earth’s magnetic field', 'Geographic location', 'Magnetic meridian', 'B', 'CHIEF OFFICER', NULL, NULL),
(12, 'The flinder bar on magnetic compass corrects for:', 'Semi-circular deviation', 'Heeling error', 'Constant deviation', 'Quadrantal deviation', 'A', 'CHIEF OFFICER', NULL, NULL),
(13, 'What is the purpose of the liquid in the magnetic compass?', 'Dampens oscillation on the compass card', 'Reduces friction on the pivot', 'Both a and b', 'Neither a nor b', 'C', 'CHIEF OFFICER', NULL, NULL),
(14, 'Permanent magnetism is found in:', 'Soft iron', 'Hard iron', 'Vertical iron', 'Horizontal iron', 'B', 'CHIEF OFFICER', NULL, NULL),
(15, 'Compass heading in a liquid compass is indicated by:', 'Card', 'Needle', 'Lubber’s line', 'Flinder’s bar', 'A', 'CHIEF OFFICER', NULL, NULL),
(16, 'In adjusting a magnetic compass, which of the following as much as possible would you eliminate?', 'Variation', 'Deviation', 'Earth’s magnetic force', 'Compass error', 'B', 'CHIEF OFFICER', NULL, NULL),
(17, 'Port quarter will possess red polarity and starboard bow will possess blue polarity, the ship is built;', 'Heading South', 'Heading east', 'Heading south & north', 'Heading southeast', 'A', 'CHIEF OFFICER', NULL, NULL),
(18, 'Magnetic variation changes with a change in;', 'Season', 'Vessel’s heading', 'Vessel’s position', 'All of the above', 'C', 'CHIEF OFFICER', NULL, NULL),
(19, 'As you approach the magnetic equator, which of the following is true concerning the deviation due to the permanent magnetism of the ship?', 'Increases', 'Decreases', 'Does not change', 'Unimportant to be ignored', 'B', 'CHIEF OFFICER', NULL, NULL),
(20, 'Which of the following would be used to correct deviation on inter-cardinal headings?', 'Fore and aft magnets', 'Athwartship magnets', 'Quadrantal spheres', 'Heeling magnets', 'C', 'CHIEF OFFICER', NULL, NULL),
(21, 'A measure of the time that the radar indicator (PPI scope) retains images of echoes is called;', 'Pulse repetition', 'Resolution', 'Persistence', 'Recurrence rate', 'C', '2ND OFFICER', NULL, NULL),
(22, 'The radar range scale to use in the open sea when no other vessels are around or when there is no expectation of making a landfall is;', 'Short', 'Medium', 'Maximum with periodic shifting to medium', 'Maximum', 'C', '2ND OFFICER', NULL, NULL),
(23, 'What condition indicates that your radar needs maintenance?', 'Serrated range rings', 'Multiple echoes', 'Blind sector', 'Indirect echoes', 'A', '2ND OFFICER', NULL, NULL),
(24, 'A radar display in which north is always at the top is;', 'unstabilized display', 'Stabilized display', 'Composition display', 'Relative display', 'B', '2ND OFFICER', NULL, NULL),
(25, 'What is the name of the movable, radial guideline used to measure direction on a radar?', 'Compass rose', 'Cursor', 'PPI', 'VRM', 'B', '2ND OFFICER', NULL, NULL),
(26, 'In a radar, sea return is greatest:', 'Ahead', 'To windward', 'To leeward', 'Astern', 'B', '2ND OFFICER', NULL, NULL),
(27, 'The STC control enables you to;', 'A remitter', 'A united radar', 'A T/R box', 'A transceiver', 'D', '2ND OFFICER', NULL, NULL),
(28, 'The ARPA may swap targets when automatically tracking if two targets;', 'Are tracked on reciprocal bearings', 'Are tracked on the same range', 'Are tracked on the same bearing', 'Pass close together', 'D', '2ND OFFICER', NULL, NULL),
(29, 'What is the mark on a leadline indicating 4 fathoms?', '2 strips of leather', '2 pieces of ropes', 'No marking', '2 knots', 'A', '2ND OFFICER', NULL, NULL),
(30, 'An electronic depth finder operates on the principle that:', 'Radio signals reflect from a solid surface', 'Sound waves travel at a constant speed through water', 'Pressure increases with depth', 'All of the above', 'B', '2ND OFFICER', NULL, NULL),
(31, 'If you would want to know facilities of a certain port you wish to avail, the best publication you will refer to is;', 'Notice to mariners', 'Sailing directions', 'World port index', 'Coast pilot', 'C', '3RD OFFICER', NULL, NULL),
(32, 'Polyconic projection is based on;', 'Series of cones tangent at selected parallel', 'Cone tangent at one parallel', 'Plane tangent at one point', 'Cylinder tangent at one point', 'A', '3RD OFFICER', NULL, NULL),
(33, 'Which of the following publications would you refer to obtain navigational information when entering a foreign port?', 'Sailing directions', 'World port index', 'Notice to mariners', 'Coast to pilot', 'A', '3RD OFFICER', NULL, NULL),
(34, 'In H.O charts, soundings may be shown in which of the following measurements?', 'Feet', 'Fathoms', 'Meters', 'Any of the above', 'D', '3RD OFFICER', NULL, NULL),
(35, 'Which of the following information would not be found on a pilot chart?', 'Wind condition', 'Tidal information', 'Steamers route', 'Ocean current', 'B', '3RD OFFICER', NULL, NULL),
(36, 'Which of the following is the official publication for the correction of charts, sailing directions, light list, etc.', 'Coast pilot', 'Notice to mariners', 'List of lights', 'List of radio signals', 'B', '3RD OFFICER', NULL, NULL),
(37, 'Notice to mariners is issued for correcting:', 'Charts and references', 'Sailing directions', 'World port index', 'Radio navigational aids', 'A', '3RD OFFICER', NULL, NULL),
(38, 'On a Mercator chart, how would a great circle line appear?', 'Concave toward the equator', 'Convex toward the equator', 'Straight line', 'Loxodromic', 'C', '3RD OFFICER', NULL, NULL),
(39, 'Charts which give in graphic form information on average winds, currents, barometric pressure, presence of ice and derelicts, and the recommended routes for low and high powered vessels are called;', 'Plotting chart', 'Sailing chart', 'Mercator chart', 'Pilot chart', 'D', '3RD OFFICER', NULL, NULL),
(40, 'The chart symbol for CLAY bottom is;', 'CY', 'CA', 'CL', 'C', 'C', '3RD OFFICER', NULL, NULL),
(41, 'A standard wire is given the same designation as a solid wire if it has the same:', 'Cross-sectional area', 'Weight per foot', 'Overall diameter', 'Strength', 'A', 'CHIEF ENGINEER', NULL, NULL),
(42, 'Counter electromotive force is measured in:', 'Volts', 'Ohms', 'Amps', 'Coulombs', 'A', 'CHIEF ENGINEER', NULL, NULL),
(43, 'With other factors remaining constant, when the applied voltage is doubled, current flow in a given circuit will:', 'Double', 'Remain the same', 'Be divided by two', 'Be divided by four', 'A', 'CHIEF ENGINEER', NULL, NULL),
(44, 'The resistance of a copper wire to the flow of electricity:', 'Increases as the length of the wire increases', 'Decreases as the diameter of the wire decreases', 'Decreases as the length of the wire increases', 'Increases as the diameter of the wire increases', 'A', 'CHIEF ENGINEER', NULL, NULL),
(45, 'Which of the following formulas would solve for amperage?', 'R divided by E', 'R times E', 'E divided by R', 'R minus E', 'C', 'CHIEF ENGINEER', NULL, NULL),
(46, 'Brushless generators operate without the use of:', 'Brushless', 'Slip rings', 'Commutators', 'All of the above', 'D', 'CHIEF ENGINEER', NULL, NULL),
(47, 'An operating characteristic which appears on the nameplates of shipboard AC motors is:', 'Temperature rise', 'Input kilowatts', 'The type of winding', 'Locked rotor torque', 'A', 'CHIEF ENGINEER', NULL, NULL),
(48, 'Low horsepower polyphase induction motors can be started with full line voltage by means of:', 'Compensator', 'Autotransformer', 'Across the line', 'Primary-resistor', 'C', 'CHIEF ENGINEER', NULL, NULL),
(49, 'What type of battery charging circuit is used to maintain a vet cell lead-acid storage battery in a fully charged state over long periods of disuse?', 'Normal charging circuit', 'Quick charging circuit', 'Trickle charging unit', 'High ampere charging circuit', 'C', 'CHIEF ENGINEER', NULL, NULL),
(50, 'The output voltage of a 440, 60 hertz, AC generator is controlled by the:', 'Exciter output voltage', 'Prime mover speed', 'Load on the alternator', 'Number of poles', 'A', 'CHIEF ENGINEER', NULL, NULL),
(51, 'What takes the place of the suction stroke of the compressor in an absorption system of refrigeration?', 'Absorber', 'Bromide', 'Liquifier', 'Refrigerant pump', 'A', '2ND ENGINEER', NULL, NULL),
(52, 'What is the absorber in the aqua-ammonia absorption system of refrigeration?', 'Water', 'Bromide', 'Ammonia', 'Lithium', 'A', '2ND ENGINEER', NULL, NULL),
(53, 'High latent heat is desirable in a refrigerant so that:', 'Smaller compressors can be used', 'Will allow smaller pipings', 'Will boil at low temperature', 'Small amount of refrigerant will absorb large amount of heat', 'D', '2ND ENGINEER', NULL, NULL),
(54, 'Two main types of evaporator calls are:', 'Wet and dry', 'Finned and tube', 'Short and extended', 'Dry and flooded', 'A', '2ND ENGINEER', NULL, NULL),
(55, 'What is the maximum theoretical suction lift of a pump when the mercury barometer reads 28 inches?', '33 feet', '32.5 feet', '28 feet', '31.6 feet', 'B', '2ND ENGINEER', NULL, NULL),
(56, 'Test for leak for system containing sulphur dioxide:', 'Halide torch', 'Leak tracing dye', 'Ammonia swab test', 'Sulphur candle test', 'A', '2ND ENGINEER', NULL, NULL),
(57, 'Cylinder water jacket cooling is used on:', 'Ammonia compressors', 'Methyl chloride compressors', 'Propane compressors', 'Butane compressors', 'A', '2ND ENGINEER', NULL, NULL),
(58, 'What takes the place of the compression stroke of the compressor in an absorption system?', 'Evaporator pump', 'Absorber', 'Generator', 'Condenser pump', 'C', '2ND ENGINEER', NULL, NULL),
(59, 'When removing reusable refrigerant from a system, the line to the storage drum must:', 'Be made of copper', 'Have no bends in it', 'Contain a strainer-dryer', 'Be above the level of the compressor', 'C', '2ND ENGINEER', NULL, NULL),
(60, 'Does ammonia have any effect on lubricants?', 'Will not have any effect', 'Will cause sludging', 'Will lower efficiency of the oil', 'Will cause emulsion', 'B', '2ND ENGINEER', NULL, NULL),
(61, 'The result of a low alkaline boiler water, the presence of free oxygen or both may result in:', 'Scale', 'Corrosion', 'Foaming', 'Priming', 'B', '3RD ENGINEER', NULL, NULL),
(62, 'Nozzle block bolted to the steam chest, which in turn is bolted to the base of the turbine casing is called:', 'Turbine cylinder', 'Diaphragm', 'Wheel casing', 'Dovetail roots', 'B', '3RD ENGINEER', NULL, NULL),
(63, 'The “scleroscope” is used to determine the:', 'Hardness of the metal', 'Thickness of the metal', 'Brittleness of the metal', 'Crack on the metal', 'A', '3RD ENGINEER', NULL, NULL),
(64, 'To determine the discharge capacity of the safety valve on a boiler is known as:', 'Accumulation test', 'Pop test', 'Steam stop test', 'Safety adjustment test', 'A', '3RD ENGINEER', NULL, NULL),
(65, 'The inner sides of a combustion chamber of scotch boilers are stayed by direct stays called:', 'Girder stays', 'Sling stays', 'Diagonal stays', 'Stay bolts', 'D', '3RD ENGINEER', NULL, NULL),
(66, 'Rupture disk are installed for emergency purposes on the:', 'Steam turbines', 'Air ejector', 'Steam condenser', 'Boilers', 'D', '3RD ENGINEER', NULL, NULL),
(67, 'Kinetic energy is the energy a body has due to its:', 'Position', 'Temperature', 'Motion', 'Horse power', 'C', '3RD ENGINEER', NULL, NULL),
(68, 'Work is conveniently expressed in:', 'Pounds per minute', 'Kilograms per minute', 'Kilogram meter', 'Foot-pounds per minute', 'D', '3RD ENGINEER', NULL, NULL),
(69, 'Power is the work as done as:', '33,000 ft. pounds', '2450 kilograms', 'Per unit of time', 'Work times distance', 'C', '3RD ENGINEER', NULL, NULL),
(70, 'What pumps are normally used for fuel oil service?', 'Positive displacement rotary', 'Two-stage centrifugal', 'Explosion proof gear', 'Non-vented plunger', 'A', '3RD ENGINEER', NULL, NULL),
(71, 'If two generators are connected in series:', 'Voltage is added and current stays the same', 'Current is added and voltage stays the same', 'Both current and voltage stay the same', 'None of the above', 'A', '4TH ENGINEER', NULL, NULL),
(72, 'A generator interpole always has the same polarity as the:', 'Pole preceding it', 'Pole following it', 'Opposite the main pole', 'None of the above', 'A', '4TH ENGINEER', NULL, NULL),
(73, 'Interpoles are connected in:', 'Series with the armature', 'Series with the shunt field', 'Parallel with the armature', 'Parallel with the series field', 'A', '4TH ENGINEER', NULL, NULL),
(74, 'What part of the main feed and water cycle separates the condensate system from the feed water system?', 'Deaerating feed tank', 'Main condenser', 'Boiler drum', 'Atmospheric drain tank', 'A', '4TH ENGINEER', NULL, NULL),
(75, 'Reduction gears on main propulsion turbines are lubricated by:', 'Grease cups and gravity feed lines', 'Oil finger rings mounted on the shaft', 'Leak-off lines from the lube-oil cooler', 'Spray nozzles at the gear meshing points', 'D', '4TH ENGINEER', NULL, NULL),
(76, 'The process of changing a solid to a liquid is called the latent heat of:', 'Vaporization', 'Evaporation', 'Fusion', 'Condensation', 'C', '4TH ENGINEER', NULL, NULL),
(77, 'The purpose of the evaporator is to:', 'Transmit latent heat of fusion', 'Transmit latent heat of evaporation', 'Absorb latent heat of fusion', 'Absorb latent heat of evaporation', 'D', '4TH ENGINEER', NULL, NULL),
(78, 'A liquid receiver is used to:', 'Separate the oil from the refrigerant', 'Cool the hot gases', 'Store the refrigerant', 'Receive the refrigerant on charging', 'C', '4TH ENGINEER', NULL, NULL),
(79, 'Moisture in a vapor compression system will cause:', 'High suction temperature', 'High suction pressure', 'Faulty expansion valve', 'Low discharge temperature', 'C', '4TH ENGINEER', NULL, NULL),
(80, 'A thermostat expansion valve can be tested by:', 'Holding its bulb in one’s hand', 'Immersing its tube in hot water', 'Immersing its bulb in ice water', 'Shorting out the cut-out switch', 'B', '4TH ENGINEER', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$yd25B3K9QNhMlcmgB/fiXuGyeqlwW5pFiaTWKtU8lsD6FCnumE1Q2', 'envRA5YtVtJMtRGVrijlFmIz4NF7a6Hk6ySdgCU0jU1WakL556RPjgSy7QK3', '2025-04-30 00:29:17', '2025-04-30 00:29:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `drafts`
--
ALTER TABLE `drafts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `processes`
--
ALTER TABLE `processes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requests_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `trivias`
--
ALTER TABLE `trivias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drafts`
--
ALTER TABLE `drafts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `processes`
--
ALTER TABLE `processes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trivias`
--
ALTER TABLE `trivias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `admins` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
