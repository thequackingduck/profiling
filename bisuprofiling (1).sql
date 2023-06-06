-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 02:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bisuprofiling`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_counselor_feedback`
--

CREATE TABLE `client_counselor_feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `a1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_counselor_feedback_settings`
--

CREATE TABLE `client_counselor_feedback_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `enabled` int(11) NOT NULL DEFAULT 1,
  `req_fields` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'CCJE', '2022-11-08 18:16:33', '2022-11-08 18:16:33'),
(2, 'CTAS', '2022-11-08 18:16:41', '2022-11-08 18:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `college_id` int(11) DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `college_id`, `course`, `code`, `created_at`, `updated_at`) VALUES
(1, 1, 'BS IN CRIMINOLOGY', 'BSCRIM', '2022-11-08 18:17:06', '2022-11-08 18:17:06'),
(2, 2, 'BS IN COMPUTER SCIENCE', 'BSCS', '2022-11-08 18:17:19', '2022-11-08 18:17:19'),
(3, 2, 'BS IN ELECTRONICS', 'BSELECT', '2022-11-08 18:17:32', '2022-11-08 18:17:32'),
(4, 2, 'BS IN INFORMATION TECHNOLOGY', 'BSIT', '2022-11-08 18:17:43', '2022-11-08 18:17:43'),
(5, 2, 'BS IN ELECTRICAL TECHNOLOGY', 'BSETECH', '2022-11-09 05:09:16', '2022-11-09 05:09:34');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_forms`
--

CREATE TABLE `evaluation_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `a1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_form_settings`
--

CREATE TABLE `evaluation_form_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `enabled` int(11) NOT NULL DEFAULT 1,
  `req_fields` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `individual_inventories`
--

CREATE TABLE `individual_inventories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `a1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a15` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a16` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a17` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a18` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a19` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a20` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a21` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `individual_inventory_settings`
--

CREATE TABLE `individual_inventory_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `enabled` int(11) NOT NULL DEFAULT 1,
  `req_fields` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_feedback`
--

CREATE TABLE `inventory_feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `a1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_feedback_settings`
--

CREATE TABLE `inventory_feedback_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `enabled` int(11) NOT NULL DEFAULT 1,
  `req_fields` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leavers`
--

CREATE TABLE `leavers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `schoolyear_id` int(11) DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL,
  `c4` int(11) NOT NULL,
  `c5` int(11) NOT NULL,
  `c6` int(11) NOT NULL,
  `c7` int(11) NOT NULL,
  `c8` int(11) NOT NULL,
  `c9` int(11) NOT NULL,
  `c10` int(11) NOT NULL,
  `c11` int(11) NOT NULL,
  `c12` int(11) NOT NULL,
  `c13` int(11) NOT NULL,
  `c14` int(11) NOT NULL,
  `c15` int(11) NOT NULL,
  `c16` int(11) NOT NULL,
  `c17` int(11) NOT NULL,
  `c18` int(11) NOT NULL,
  `c19` int(11) NOT NULL,
  `c20` int(11) NOT NULL,
  `c21` int(11) NOT NULL,
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leavers`
--

INSERT INTO `leavers` (`id`, `schoolyear_id`, `student_id`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`, `c10`, `c11`, `c12`, `c13`, `c14`, `c15`, `c16`, `c17`, `c18`, `c19`, `c20`, `c21`, `others`, `details`, `created_at`, `updated_at`) VALUES
(2, 1, 369, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 'dss', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis eum impedit provident iure, ut porro maiores perferendis ipsum, eos vitae iusto at illo delectus culpa sint blanditiis exercitationem explicabo. At?', '2022-11-11 21:35:22', '2022-11-11 21:35:22'),
(3, 1, 328, 1, 0, 1, 0, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, NULL, 'test', '2022-11-11 21:36:23', '2022-11-11 21:36:23'),
(4, 1, 344, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, NULL, 'fdfsdsd', '2022-11-11 21:52:36', '2022-11-11 21:52:36'),
(5, 1, 318, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, NULL, 'test', '2022-11-11 22:16:04', '2022-11-11 22:16:04'),
(8, 1, 371, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores minus veritatis suscipit. Architecto reprehenderit, saepe, sapiente minus natus rerum, inventore a enim harum magni nulla sint itaque adipisci sequi fugiat?', '2022-11-12 00:00:47', '2022-11-12 00:00:47'),
(9, 1, 334, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, NULL, 'detailsssssssssssssssssssss', '2022-11-12 08:21:21', '2022-11-12 08:21:21');

-- --------------------------------------------------------

--
-- Table structure for table `leaversettings`
--

CREATE TABLE `leaversettings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `enabled` int(11) NOT NULL DEFAULT 1,
  `req_fields` int(11) NOT NULL DEFAULT 1,
  `details` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaversettings`
--

INSERT INTO `leaversettings` (`id`, `enabled`, `req_fields`, `details`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 1, '2022-11-11 21:23:02', '2022-11-11 21:23:02');

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `a1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c15` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c16` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `membership_settings`
--

CREATE TABLE `membership_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `enabled` int(11) NOT NULL DEFAULT 1,
  `req_fields` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2022_10_26_022322_create_schoolyears_table', 2),
(4, '2022_10_26_022349_create_colleges_table', 2),
(5, '2022_10_26_022357_create_courses_table', 2),
(6, '2022_11_04_105751_create_students_table', 2),
(10, '2022_11_12_015013_add_role_id_to_users', 3),
(21, '2022_11_12_020235_create_leaversettings_table', 4),
(22, '2022_11_12_020248_create_leavers_table', 4),
(23, '2022_11_12_033621_add_section_to_students', 4),
(24, '2022_12_15_115409_create_profiles_table', 5),
(25, '2022_12_15_115422_create_profile_settings_table', 5),
(70, '2022_12_15_122031_create_precounselings_table', 6),
(71, '2022_12_15_122039_create_precounseling_settings_table', 6),
(72, '2022_12_15_122100_create_memberships_table', 6),
(73, '2022_12_15_122107_create_membership_settings_table', 6),
(74, '2022_12_15_122136_create_peer_facilitator_circles_table', 6),
(75, '2022_12_15_122143_create_peer_facilitator_circle_settings_table', 6),
(76, '2022_12_15_122211_create_needs_assessment_inventories_table', 6),
(77, '2022_12_15_122220_create_needs_assessment_inventory_settings_table', 6),
(78, '2022_12_15_122241_create_inventory_feedback_table', 6),
(79, '2022_12_15_122247_create_inventory_feedback_settings_table', 6),
(80, '2022_12_15_122304_create_individual_inventories_table', 6),
(81, '2022_12_15_122310_create_individual_inventory_settings_table', 6),
(82, '2022_12_15_122322_create_evaluation_forms_table', 6),
(83, '2022_12_15_122327_create_evaluation_form_settings_table', 6),
(84, '2022_12_15_122353_create_client_counselor_feedback_table', 6),
(85, '2022_12_15_122359_create_client_counselor_feedback_settings_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `needs_assessment_inventories`
--

CREATE TABLE `needs_assessment_inventories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `1a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `1b` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `1c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `2a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `2b` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `2c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `3a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `3b` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `3c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `4a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `4b` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `4c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `5a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `5b` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `5c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `6a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `6b` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `6c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `7a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `7b` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `7c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `8a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `8b` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `8c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `9a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `9b` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `9c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `10a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `10b` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `needs_assessment_inventory_settings`
--

CREATE TABLE `needs_assessment_inventory_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `enabled` int(11) NOT NULL DEFAULT 1,
  `req_fields` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peer_facilitator_circles`
--

CREATE TABLE `peer_facilitator_circles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `a1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peer_facilitator_circle_settings`
--

CREATE TABLE `peer_facilitator_circle_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `enabled` int(11) NOT NULL DEFAULT 1,
  `req_fields` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `precounselings`
--

CREATE TABLE `precounselings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `a1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `precounseling_settings`
--

CREATE TABLE `precounseling_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `enabled` int(11) NOT NULL DEFAULT 1,
  `req_fields` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `schoolyear_id` int(11) DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  `1a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `1b` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `1c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `1d` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `1e` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `1f` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `1g` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `1h` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `1i` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `1j` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `1k` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `1l` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `1m` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `2a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `2b` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `2c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `2d` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `2e` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `2f` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `2g` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `3a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `3b` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `3c` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `3d` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `3e` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `3f` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `3g` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `4a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile_settings`
--

CREATE TABLE `profile_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `enabled` int(11) NOT NULL DEFAULT 1,
  `req_fields` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schoolyears`
--

CREATE TABLE `schoolyears` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schoolyears`
--



-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `schoolyear_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `id_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middlename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateofbirth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `units` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yearlevel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `schoolyear_id`, `course_id`, `id_no`, `lastname`, `firstname`, `middlename`, `sex`, `address`, `dateofbirth`, `units`, `yearlevel`, `access_key`, `created_at`, `updated_at`, `section`) VALUES
(301, 1, 1, '896152', 'ABANICO', 'JESREIL', 'BUAL', 'Male', NULL, '2002-06-15T16:00:00.000Z', '23', '1', 'SHCDTJYPJE', '2022-11-11 19:41:03', '2022-11-11 22:37:41', 'A'),
(302, 1, 1, '710910', 'ACEBEROS', 'CARLO JAY', 'E', 'Male', NULL, '1999-12-31T16:00:00.000Z', '23', '1', 'BJ6TXSR7AP', '2022-11-11 19:41:03', '2022-11-11 22:37:41', 'A'),
(303, 1, 1, '446310', 'ARGALLON', 'MARK ZUES', 'B', 'Male', NULL, '1999-12-31T16:00:00.000Z', '23', '1', '3LRSKCCZYM', '2022-11-11 19:41:03', '2022-11-11 22:37:41', 'A'),
(304, 1, 1, '371842', 'BACHINILLA', 'JED', 'M.', 'Male', NULL, '1999-12-31T16:00:00.000Z', '23', '1', 'EAXUKTNV9M', '2022-11-11 19:41:03', '2022-11-11 22:37:41', 'A'),
(305, 1, 1, '265712', 'BATINGAL', 'JAYSON', 'A', 'Male', NULL, '1999-12-31T16:00:00.000Z', '23', '1', 'ZAZBTNO1B1', '2022-11-11 19:41:03', '2022-11-11 22:37:41', 'A'),
(306, 1, 1, '957741', 'BOLATETE', 'MICHAEL JAY', 'B', 'Male', NULL, '1999-12-31T16:00:00.000Z', '23', '1', 'PGBDHYMOVU', '2022-11-11 19:41:03', '2022-11-11 22:37:41', 'A'),
(307, 1, 1, '783049', 'CALISAGAN', 'MARK GLENN', 'B', 'Male', NULL, '1999-12-31T16:00:00.000Z', '23', '1', '3BM7GJ59HG', '2022-11-11 19:41:04', '2022-11-11 22:37:41', 'A'),
(308, 1, 1, '521319', 'CALOPE', 'ANDREO NIKKO', 'T', 'Male', NULL, '1999-12-31T16:00:00.000Z', '23', '1', 'AFFZY22EHA', '2022-11-11 19:41:04', '2022-11-11 22:37:41', 'A'),
(309, 1, 1, '301329', 'CAREN', 'JOHN MEJKAL', 'S', 'Male', NULL, '1999-12-31T16:00:00.000Z', '23', '1', 'DL78USALKI', '2022-11-11 19:41:04', '2022-11-11 22:37:41', 'A'),
(310, 1, 1, '553866', 'CLARINAN', 'EARL PATRICK', 'A', 'Male', NULL, '1999-12-31T16:00:00.000Z', '23', '1', '4LCU8GL4VD', '2022-11-11 19:41:04', '2022-11-11 22:37:41', 'A'),
(311, 1, 1, '208085', 'CULABA', 'JOHN KENNETH', 'P', 'Male', NULL, '1999-12-31T16:00:00.000Z', '23', '1', '1YJA1PUZBS', '2022-11-11 19:41:04', '2022-11-11 22:37:41', 'A'),
(312, 1, 1, '547394', 'DAGO-OC', 'KENT LOWELL', 'I', 'Male', NULL, '1999-12-31T16:00:00.000Z', '23', '1', 'R0M485E1ZG', '2022-11-11 19:41:04', '2022-11-11 22:37:41', 'A'),
(313, 1, 1, '406136', 'DOYSABAS', 'LEONARD', 'R', 'Male', NULL, '1999-12-31T16:00:00.000Z', '23', '1', 'WK7OE0RJZZ', '2022-11-11 19:41:04', '2022-11-11 22:37:41', 'A'),
(314, 1, 1, '287237', 'EDAO', 'ROBERT', 'P', 'Male', NULL, '1999-12-31T16:00:00.000Z', '23', '1', 'FCG4TPIG4G', '2022-11-11 19:41:04', '2022-11-11 22:37:41', 'B'),
(315, 1, 1, '757154', 'ESARZA', 'JERIC', 'G', 'Male', NULL, '1999-12-31T16:00:00.000Z', '23', '1', 'ZXYZYO0MYP', '2022-11-11 19:41:04', '2022-11-11 22:37:41', 'B'),
(316, 1, 1, '859320', 'ESTOQUE', 'JAY MARK', 'OCAY', 'Male', NULL, '1999-12-31T16:00:00.000Z', '23', '1', 'CIGERURLC1', '2022-11-11 19:41:04', '2022-11-11 22:37:41', 'B'),
(317, 1, 1, '695162', 'ESTOQUE', 'JERRYMIE', 'C', 'Male', NULL, '1999-12-31T16:00:00.000Z', '23', '1', 'LVRWUVH176', '2022-11-11 19:41:04', '2022-11-11 22:37:41', 'B'),
(318, 1, 1, '189976', 'FELISILDA', 'AARON', 'D', 'Male', NULL, '1999-12-31T16:00:00.000Z', '23', '1', 'BIJBZING3H', '2022-11-11 19:41:05', '2022-11-11 22:37:41', 'B'),
(319, 1, 1, '548936', 'GALON', 'GEBIE', 'P', 'Male', NULL, '1999-12-31T16:00:00.000Z', '11', '1', 'OIADGYHB7O', '2022-11-11 19:41:05', '2022-11-11 22:37:41', 'B'),
(320, 1, 1, '473113', 'HINAY', 'JANREY', 'S', 'Male', NULL, '1999-12-31T16:00:00.000Z', '23', '1', 'GFYEUQNMFN', '2022-11-11 19:41:05', '2022-11-11 22:37:41', 'B'),
(321, 1, 1, '700204', 'HINAY', 'NIEL JEJOMAR', 'P', 'Male', NULL, '1999-12-31T16:00:00.000Z', '23', '1', 'QU1M7OKYZG', '2022-11-11 19:41:05', '2022-11-11 22:37:41', 'B'),
(322, 1, 1, '516996', 'JOTOJOT', 'ANTHONY', 'A', 'Male', NULL, '1999-12-31T16:00:00.000Z', '20', '1', '6XXSDN2FTM', '2022-11-11 19:41:05', '2022-11-11 22:37:41', 'B'),
(323, 1, 1, '967896', 'JUMANG-IT', 'JOMAR', 'A', 'Male', NULL, '1999-12-31T16:00:00.000Z', '23', '1', '5PMUUR68H7', '2022-11-11 19:41:05', '2022-11-11 22:37:41', 'B'),
(324, 1, 1, '702755', 'LANOSA', 'FRANKLIN', 'D', 'Male', NULL, '1999-12-31T16:00:00.000Z', '23', '1', 'YVHVQVSCSB', '2022-11-11 19:41:05', '2022-11-11 22:37:41', 'B'),
(325, 1, 1, '761097', 'LIBOT', 'JOSHUA ERVIN', 'A', 'Male', NULL, '1999-12-31T16:00:00.000Z', '23', '1', 'LZ4W7BQC02', '2022-11-11 19:41:05', '2022-11-11 22:37:41', 'B'),
(326, 1, 2, '795114', 'AMOSURA', 'ALJON', 'SAMUYA', 'Male', 'POBLACION, SAN ISIDRO, BOHOL', '2000-09-07T16:00:00.000Z', '18', '4', 'SRTGAEAKYR', '2022-11-11 19:41:05', '2022-11-11 22:37:41', 'A'),
(327, 1, 2, '971173', 'ANAVISO', 'JULIUS JERRY', 'SUMIOG', 'Male', 'LORETO, CORTES BOHOL', '2000-07-11T16:00:00.000Z', '18', '4', 'MCOJ9ZDGON', '2022-11-11 19:41:05', '2022-11-11 22:37:41', 'A'),
(328, 1, 2, '115452', 'BERENDEZ', 'JICO LOREIL', 'A', 'Male', 'PAGINA, JAGNA, BOHOL', '2000-11-14T16:00:00.000Z', '18', '4', '3RQJKDDPFV', '2022-11-11 19:41:05', '2022-11-11 22:37:41', 'A'),
(329, 1, 2, '564140', 'BU¥OL', 'JOHN YMOR', 'CURAYAG', 'Male', 'ANISLAG, CORELLA, BOHOL', '2000-03-19T16:00:00.000Z', '18', '4', 'MMYFVOSD7H', '2022-11-11 19:41:06', '2022-11-11 22:37:41', 'A'),
(330, 1, 2, '535284', 'CALOPE', 'MARK ANTHONY', 'RULE', 'Male', 'SALVADOR, CORTES, BOHOL', '2000-06-11T16:00:00.000Z', '18', '4', 'DQMDGPAUWG', '2022-11-11 19:41:06', '2022-11-11 22:37:41', 'A'),
(331, 1, 2, '889625', 'COSMOD', 'JOSEPH', 'LUMAAD', 'Male', 'POBLACION, CORTES, BOHOL', '1998-05-11T16:00:00.000Z', '18', '4', 'F5L2Y60IW7', '2022-11-11 19:41:06', '2022-11-11 22:37:41', 'A'),
(332, 1, 2, '542693', 'GULILAT', 'ALVIN', 'PATAC', 'Male', 'BARYONG DAAN, SAN ISIDRO, BOHOL', '1997-01-05T16:00:00.000Z', '18', '4', 'CNSF7KA0CR', '2022-11-11 19:41:06', '2022-11-11 22:37:41', 'A'),
(333, 1, 2, '404937', 'LABANDERA', 'CRISTIAN JAY', 'LINGUEZ', 'Male', 'BAUCAN NORTE, BALILIHAN, BOHOL', '2000-05-04T16:00:00.000Z', '18', '4', 'NPERSCLWJI', '2022-11-11 19:41:06', '2022-11-11 22:37:41', 'A'),
(334, 1, 2, '243961', 'AMIGO', 'CHERIE MAE', 'PAGOD', 'Female', 'DOROL, BALILIHAN, BOHOL', '2000-04-16T16:00:00.000Z', '18', '4', 'EUET86ZSHU', '2022-11-11 19:41:06', '2022-11-11 22:37:41', 'A'),
(335, 1, 2, '610924', 'AUGUIS', 'CAMEL', 'LUSICA', 'Female', 'P3- POBLACION, CORELLA, BOHOL', '2001-06-03T16:00:00.000Z', '18', '4', 'CEWNNEYPQ8', '2022-11-11 19:41:06', '2022-11-11 22:37:41', 'A'),
(336, 1, 2, '311282', 'BAER', 'JORELYN', 'MALANOG', 'Female', 'CANANGCAAN, CORELLA, BOHOL', '2000-10-12T16:00:00.000Z', '18', '4', 'PHPCRRINZK', '2022-11-11 19:41:06', '2022-11-11 22:37:41', 'A'),
(337, 1, 2, '315908', 'DALO', 'HARLENE', 'JALA', 'Female', 'BAHAY BAHAY, SIKATUNA, BOHOL', '1999-07-24T16:00:00.000Z', '18', '4', 'ZZMNTZU7FN', '2022-11-11 19:41:06', '2022-11-11 22:37:41', 'A'),
(338, 1, 2, '676797', 'ENERO', 'MARIEFRANCE', 'MONTESCO', 'Female', 'CABAWAN DIST. TAGBILARAN CITY, BOHOL', '2001-09-13T16:00:00.000Z', '18', '4', 'XMLFBBODKU', '2022-11-11 19:41:06', '2022-11-11 22:37:41', 'A'),
(339, 1, 2, '539316', 'FULGUERINAS', 'ELLA MAY', 'CIRUNAY', 'Female', 'P-3 CATARMAN, DAUIS, BOHOL', '2001-05-09T16:00:00.000Z', '18', '4', 'DZNCHNA9BI', '2022-11-11 19:41:07', '2022-11-11 22:37:41', 'A'),
(340, 1, 2, '786352', 'FULGUERINAS', 'MA. NICEL', 'SACRO', 'Female', 'BIKING 1, DAUIS, BOHOL', '2000-10-03T16:00:00.000Z', '18', '4', 'LHZFTSZLYU', '2022-11-11 19:41:07', '2022-11-11 22:37:41', 'A'),
(341, 1, 3, '237401', 'AGUA', 'JOSEPH JR', 'M', 'Male', NULL, '1999-12-31T16:00:00.000Z', '24', '1', 'EWLTKZCL0K', '2022-11-11 19:41:07', '2022-11-11 22:37:41', 'A'),
(342, 1, 3, '863212', 'ARCAYNA', 'JOHN REY', 'YANGCO', 'Male', NULL, '1999-12-31T16:00:00.000Z', '18', '1', 'A2OCOMOILM', '2022-11-11 19:41:07', '2022-11-11 22:37:41', 'A'),
(343, 1, 3, '381029', 'BALILING', 'JADE', 'A', 'Male', NULL, '1999-12-31T16:00:00.000Z', '24', '1', '2RYD2EYJUD', '2022-11-11 19:41:07', '2022-11-11 22:37:41', 'A'),
(344, 1, 3, '147855', 'BALI-OS', 'JOHN CLEO', 'I.', 'Male', NULL, '1999-12-31T16:00:00.000Z', '24', '1', 'E78LVSMKYT', '2022-11-11 19:41:07', '2022-11-11 22:37:41', 'A'),
(345, 1, 3, '631413', 'BAQUEQUE', 'BRENT', NULL, 'Male', NULL, '1999-12-31T16:00:00.000Z', '24', '1', '9MQCLXXOKD', '2022-11-11 19:41:07', '2022-11-11 22:37:41', 'A'),
(346, 1, 3, '799090', 'BAQUEQUE', 'BRYLE', NULL, 'Male', NULL, '1999-12-31T16:00:00.000Z', '24', '1', 'LNBMRJOPGS', '2022-11-11 19:41:07', '2022-11-11 22:37:41', 'A'),
(347, 1, 3, '780172', 'BOYRAS', 'GLIENT DAVE', 'A', 'Male', NULL, '1999-12-31T16:00:00.000Z', '24', '1', 'TAOBUUSHBW', '2022-11-11 19:41:07', '2022-11-11 22:37:41', 'A'),
(348, 1, 3, '526669', 'CAHAPON', 'JEUARD', NULL, 'Male', NULL, '1999-12-31T16:00:00.000Z', '24', '1', 'OCNDTTNAFI', '2022-11-11 19:41:07', '2022-11-11 22:37:41', 'A'),
(349, 1, 3, '306722', 'CAMANZO', 'ELJAN', 'S', 'Male', NULL, '1999-12-31T16:00:00.000Z', '24', '1', 'TOMXLWQYXF', '2022-11-11 19:41:07', '2022-11-11 22:37:41', 'A'),
(350, 1, 3, '538371', 'DAGANTE', 'JEFFRY', NULL, 'Male', NULL, '1999-12-31T16:00:00.000Z', '24', '1', 'GJSN3RPUD8', '2022-11-11 19:41:07', '2022-11-11 22:37:41', 'A'),
(351, 1, 3, '956554', 'DAING', 'DEL BRYAN', 'M', 'Male', NULL, '1999-12-31T16:00:00.000Z', '24', '1', 'IDTKLRXTER', '2022-11-11 19:41:08', '2022-11-11 22:37:41', 'A'),
(352, 1, 3, '348606', 'DANILA', 'CHARMEL', 'T.', 'Male', NULL, '1999-12-31T16:00:00.000Z', '24', '1', 'ETJ9VOJS1T', '2022-11-11 19:41:08', '2022-11-11 22:37:41', 'A'),
(353, 1, 3, '651135', 'DAQUIPIL', 'JOSIF LEVITICUS', 'B.', 'Male', NULL, '1999-12-31T16:00:00.000Z', '24', '1', 'MH5LQLJQOS', '2022-11-11 19:41:08', '2022-11-11 22:37:41', 'A'),
(354, 1, 3, '894930', 'DICDICAN', 'REYMOND', 'C', 'Male', NULL, '1999-12-31T16:00:00.000Z', '24', '1', '8T8IVAU988', '2022-11-11 19:41:08', '2022-11-11 22:37:41', 'A'),
(355, 1, 3, '518833', 'GARCIA', 'GRIAN CHESTER', 'MARVELOUS', 'Male', NULL, '1999-12-31T16:00:00.000Z', '24', '1', 'ZGHUZLK19Z', '2022-11-11 19:41:08', '2022-11-11 22:37:41', 'A'),
(356, 1, 4, '989330', 'HINAY', 'JEVA MAE', 'BUCIA', 'Female', 'MALAYO NORTE, CORTES, BOHOL', '2000-04-19T16:00:00.000Z', '18', '4', 'LDR4VF6WOO', '2022-11-11 19:41:08', '2022-11-11 22:37:41', 'A'),
(357, 1, 4, '809172', 'ILANDAG', 'VERONICA', 'ZATE', 'Female', 'DAO, TAGBILARAN', '1999-12-11T16:00:00.000Z', '3', '4', 'RCK04MOXPM', '2022-11-11 19:41:08', '2022-11-11 22:37:41', 'A'),
(358, 1, 4, '332095', 'INGUITO', 'ANTTONETH', 'LUSPOC', 'Female', 'PANDOL, CORELLA,BOHOL', '2000-06-12T16:00:00.000Z', '18', '4', 'A0T5OADTGZ', '2022-11-11 19:41:08', '2022-11-11 22:37:41', 'A'),
(359, 1, 4, '319460', 'JAGUNOS', 'RHEA', 'BUNTAG', 'Female', 'BOYOG SUR, BALILIHAN, BOHOL', '2000-12-22T16:00:00.000Z', '18', '4', '52RLOQANDT', '2022-11-11 19:41:08', '2022-11-11 22:37:41', 'A'),
(360, 1, 4, '528505', 'JUMAMIL', 'CHRISTINE', 'TANIZA', 'Female', 'MANGA DIST. TAGBILARAN CITY', '2000-08-29T16:00:00.000Z', '18', '4', 'DQ7BUEDXFO', '2022-11-11 19:41:08', '2022-11-11 22:37:41', 'A'),
(361, 1, 4, '425134', 'LABOR', 'KIMBERLY ANN', 'PAYOT', 'Female', 'MALAYO NORTE, CORTES, BOHOL', '2000-03-03T16:00:00.000Z', '3', '4', '0QL9ICZUE8', '2022-11-11 19:41:09', '2022-11-11 22:37:41', 'A'),
(362, 1, 4, '856636', 'LAHOY', 'SHAILA', 'CAJES', 'Female', 'ROSARIO, CORTES, BOHOL', '2001-03-02T16:00:00.000Z', '18', '4', 'XOXQOLOJXW', '2022-11-11 19:41:09', '2022-11-11 22:37:41', 'A'),
(363, 1, 4, '557866', 'LAMBAN', 'ANGELIE', NULL, 'Female', 'TANDAY, BACLAYON, BOHOL', '1999-12-14T16:00:00.000Z', '3', '4', 'DKMNLA2EGN', '2022-11-11 19:41:09', '2022-11-11 22:37:41', 'A'),
(364, 1, 4, '938490', 'LOMANTAS', 'ALLEAH WIL', 'TABULONG', 'Female', 'BOCTOL, BALILIHAN, BOHOL', '2001-01-07T16:00:00.000Z', '18', '4', '4LKPY1SC1R', '2022-11-11 19:41:09', '2022-11-11 22:37:41', 'A'),
(365, 1, 4, '376364', 'LUMANAS', 'JOLLYMARIE', 'SABAC', 'Female', 'SALVADOR, CORTES, BOHOL', '1999-03-28T16:00:00.000Z', '18', '4', 'LPHYGQQ0CU', '2022-11-11 19:41:09', '2022-11-11 22:37:41', 'A'),
(366, 1, 4, '646571', 'MADIJANON', 'MARIEL', 'ABUZO', 'Female', 'ANIBONGAN, DUERO, BOHOL', '2001-02-25T16:00:00.000Z', '18', '4', 'D7Z19MT927', '2022-11-11 19:41:09', '2022-11-11 22:37:41', 'A'),
(367, 1, 4, '856187', 'MERENCILLO', 'KRISTINE VINE', 'ALE', 'Female', 'MASLOG, BALILIHAN, BOHOL', '2001-05-02T16:00:00.000Z', '18', '4', 'HEDRYHVAIG', '2022-11-11 19:41:09', '2022-11-11 22:37:41', 'A'),
(368, 1, 4, '957490', 'MONTEL', 'VANISSA', 'UGPO', 'Female', 'CANANGCAAN, CORELLA, BOHOL', '2001-03-10T16:00:00.000Z', '18', '4', 'EF8MPSWQ47', '2022-11-11 19:41:09', '2022-11-11 22:37:41', 'A'),
(369, 1, 4, '113455', 'NARAGA', 'JUDELYN', 'EMIA', 'Female', 'MAITUM, CATIGBIAN, BOHOL', '2001-02-26T16:00:00.000Z', '18', '4', 'KTOVGJJCN7', '2022-11-11 19:41:09', '2022-11-11 22:37:41', 'A'),
(370, 1, 4, '571540', 'ORILLA', 'RICKY MAE', 'LIHAT', 'Female', 'HAGUILANAN GRANDE, BALILIHAN, BOHOL', '2001-05-01T16:00:00.000Z', '18', '4', 'ZCXM5FGAPS', '2022-11-11 19:41:09', '2022-11-11 22:37:41', 'A'),
(371, 1, 4, '223333', 'PATAC', 'JENECIL', 'TEREC', 'Female', 'BAUCAN NORTE, BALILIHAN, BOHOL', '2001-01-23T16:00:00.000Z', '18', '4', 'DLSWLZJKIL', '2022-11-11 19:41:09', '2022-11-11 22:37:41', 'A'),
(372, 1, 4, '580566', 'PONGASE', 'CATHERINE', 'LLORENTE', 'Female', 'BOCTOL, BALILIHAN, BOHOL', '1994-07-06T16:00:00.000Z', '18', '4', 'F7FWCKUKPO', '2022-11-11 19:41:10', '2022-11-11 22:37:41', 'A'),
(373, 1, 4, '726303', 'RENEGADO', 'CHERLYN', 'BOCTOTO', 'Female', 'BICAHAN, ANTEQUERA, BOHOL', '1999-03-23T16:00:00.000Z', '18', '4', 'WOLA6XYIY8', '2022-11-11 19:41:10', '2022-11-11 22:37:41', 'A'),
(374, 1, 4, '925226', 'REQUILLO', 'VALLERY MAY', 'DIEZ', 'Female', 'BOYOG NORTE, BALILIHAN, BOHOL', '2001-05-24T16:00:00.000Z', '18', '4', 'XIGGFN2WK9', '2022-11-11 19:41:10', '2022-11-11 22:37:41', 'A'),
(375, 1, 4, '622796', 'TORREON', 'MYLA', 'LANSANG', 'Female', 'BOCTOL, BALILIHAN, BOHOL', '2001-04-18T16:00:00.000Z', '18', '4', '5MYFUJOPVF', '2022-11-11 19:41:10', '2022-11-11 22:37:41', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`) VALUES
(1, 'admin', 'admin', NULL, '$2y$10$7vY.58R0MLlDYuGNViWG/ef/gFN5JZc7kAk2Z4Wc33eaXk7jojygi', NULL, '2022-09-28 07:41:45', '2022-09-28 07:41:45', 0),
(152, 'ABANICO, JESREIL BUAL', '896152', NULL, '$2y$10$VyG3iuPFuO7dFdoNjehV1ORBLOIHs0PphOui4T.A8tggvKdmqtUiS', NULL, '2022-11-11 19:41:03', '2022-11-11 19:41:03', 1),
(153, 'ACEBEROS, CARLO JAY E', '710910', NULL, '$2y$10$ZL/4H6vzXQ7MRiD4rCkcuuTPWFMy01.lHDa9Y9DpSdH4DmlvJBwLe', NULL, '2022-11-11 19:41:03', '2022-11-11 19:41:03', 1),
(154, 'ARGALLON, MARK ZUES B', '446310', NULL, '$2y$10$y4xa784lUBJoygC2vWiBx..nFSShRHNndaBTF/PRKcUmKA4FDpuzi', NULL, '2022-11-11 19:41:03', '2022-11-11 19:41:03', 1),
(155, 'BACHINILLA, JED M.', '371842', NULL, '$2y$10$quo8ETCGlwWMDAbket5KjeITQhCinvGb57EnwOnpvJEU3tJL7i066', NULL, '2022-11-11 19:41:03', '2022-11-11 19:41:03', 1),
(156, 'BATINGAL, JAYSON A', '265712', NULL, '$2y$10$QFrMUF6cipIJ6dDokB9lGe2NAcFdZvyPFx3Y0B4RRPN2xM0ejSSO2', NULL, '2022-11-11 19:41:03', '2022-11-11 19:41:03', 1),
(157, 'BOLATETE, MICHAEL JAY B', '957741', NULL, '$2y$10$6X501b8Qhf0OHaOw3s6QKeWMYf1yQkdvDHfRyrCYkahAJ42USzVse', NULL, '2022-11-11 19:41:04', '2022-11-11 19:41:04', 1),
(158, 'CALISAGAN, MARK GLENN B', '783049', NULL, '$2y$10$6P5RRj72fRozUmjtWTLg2.mQn3Nn7w86oN/2uKiK08oUG49Udmsu.', NULL, '2022-11-11 19:41:04', '2022-11-11 19:41:04', 1),
(159, 'CALOPE, ANDREO NIKKO T', '521319', NULL, '$2y$10$HYkYs.0rM65PVibC5attuOqItDmElnbC0Qkq9fNjP28JzJpSqgina', NULL, '2022-11-11 19:41:04', '2022-11-11 19:41:04', 1),
(160, 'CAREN, JOHN MEJKAL S', '301329', NULL, '$2y$10$4dXO2RhedZqh.QDmbyYu2.EKcI7QQFzsSqEwFYs7AftPX9QIV6BrK', NULL, '2022-11-11 19:41:04', '2022-11-11 19:41:04', 1),
(161, 'CLARINAN, EARL PATRICK A', '553866', NULL, '$2y$10$ytouEavgOq3/6kcc8oh9te8h09Q/sT5qQfzTTdROtDZLtAoXzQuta', NULL, '2022-11-11 19:41:04', '2022-11-11 19:41:04', 1),
(162, 'CULABA, JOHN KENNETH P', '208085', NULL, '$2y$10$.BinIyBVYsOHz4tU.eLh.uTmrCL6TTvotzXrngIHvNJtIku.kgzCO', NULL, '2022-11-11 19:41:04', '2022-11-11 19:41:04', 1),
(163, 'DAGO-OC, KENT LOWELL I', '547394', NULL, '$2y$10$MZxAfXeFO99wMWwzwVVedONtcfewtq4Tv5AWPWrKE2o/OG877meV6', NULL, '2022-11-11 19:41:04', '2022-11-11 19:41:04', 1),
(164, 'DOYSABAS, LEONARD R', '406136', NULL, '$2y$10$.knOFEzXIIS3SwuqYrbNeO4UD/6nbVkKp5rxlpbNGTSBlPGeqVYEK', NULL, '2022-11-11 19:41:04', '2022-11-11 19:41:04', 1),
(165, 'EDAO, ROBERT P', '287237', NULL, '$2y$10$2.tGrhwUBS8SQ84sydKLDOtoKTaTHp1XK5Y5OAjRpypkstbYnvcyi', NULL, '2022-11-11 19:41:04', '2022-11-11 19:41:04', 1),
(166, 'ESARZA, JERIC G', '757154', NULL, '$2y$10$iwyjE4OJOvi5tbB7Lpas2O50orPvnTzAX0J2y/CJJZqWDDmNFThFa', NULL, '2022-11-11 19:41:04', '2022-11-11 19:41:04', 1),
(167, 'ESTOQUE, JAY MARK OCAY', '859320', NULL, '$2y$10$swUaAPSJam/6jArdu18MlusyV4JRpoYaR3B4452muw3Bg.gNzm67m', NULL, '2022-11-11 19:41:04', '2022-11-11 19:41:04', 1),
(168, 'ESTOQUE, JERRYMIE C', '695162', NULL, '$2y$10$mWHpHZZRtUiff.jb3tlqCuiCevMMPmOC6zA3YoFsBaixJMUigKFEe', NULL, '2022-11-11 19:41:05', '2022-11-11 19:41:05', 1),
(169, 'FELISILDA, AARON D', '189976', NULL, '$2y$10$iUcjtFj5nyImu9U2c4k0D.v65C3wYaguC0oYNfsxM1tD6IL4TnhCK', NULL, '2022-11-11 19:41:05', '2022-11-11 19:41:05', 1),
(170, 'GALON, GEBIE P', '548936', NULL, '$2y$10$K0uvGPvTlMqo7KpRRSEKY.hUCKY1Tcz/imyxIMbgHkpA4eyGIHm4W', NULL, '2022-11-11 19:41:05', '2022-11-11 19:41:05', 1),
(171, 'HINAY, JANREY S', '473113', NULL, '$2y$10$5VrW8BXRltNJNai6nYQgI.fh2OGwVYI3VgLzCNHyNbX/4pA9v0Qjq', NULL, '2022-11-11 19:41:05', '2022-11-11 19:41:05', 1),
(172, 'HINAY, NIEL JEJOMAR P', '700204', NULL, '$2y$10$Gax3h0NwGCJoaOUDaMIvU.n99G8w8V8OKPvKNhuxtACG/YjI.bPiK', NULL, '2022-11-11 19:41:05', '2022-11-11 19:41:05', 1),
(173, 'JOTOJOT, ANTHONY A', '516996', NULL, '$2y$10$B/R9GaAnuarbClgXb.b0FuMn5kCv8Vzmt4BvL38XnEsqdQbSE6bje', NULL, '2022-11-11 19:41:05', '2022-11-11 19:41:05', 1),
(174, 'JUMANG-IT, JOMAR A', '967896', NULL, '$2y$10$bpkXmRqAJRRwaKe7VttB0eKxaJHKCBqa71yxFKm/aEeCIuVztr8Gu', NULL, '2022-11-11 19:41:05', '2022-11-11 19:41:05', 1),
(175, 'LANOSA, FRANKLIN D', '702755', NULL, '$2y$10$Gt/mT1juP0qTw/SuIjy0feZAvVu7g70TFuQtM51t5CuyjlF0Cozqa', NULL, '2022-11-11 19:41:05', '2022-11-11 19:41:05', 1),
(176, 'LIBOT, JOSHUA ERVIN ', '761097', NULL, '$2y$10$naslPqRdPH7Q5C83yDamwOIRm9cnOeJXZ3.NXsdiyhrnTaOfjydBO', NULL, '2022-11-11 19:41:05', '2022-11-11 19:41:05', 1),
(177, 'AMOSURA, ALJON SAMUYA', '795114', NULL, '$2y$10$JqxWxg.zakYSs1RWmH7Y0.ELKF0POoh/5yKKombl7Hcu/xd94fhiG', NULL, '2022-11-11 19:41:05', '2022-11-11 19:41:05', 1),
(178, 'ANAVISO, JULIUS JERRY SUMIOG', '971173', NULL, '$2y$10$wk7.ZcktKOlB3S6.iRwFEORJqZZw1ABLVm9q3.ZBuDvbBWGgF01nu', NULL, '2022-11-11 19:41:05', '2022-11-11 19:41:05', 1),
(179, 'BERENDEZ, JICO LOREIL ', '115452', NULL, '$2y$10$y4hhK1dFyoIAjxFCtag/i.FC5RGIrxy6MFxfLlSwxdArxr8J/21..', NULL, '2022-11-11 19:41:06', '2022-11-11 19:41:06', 1),
(180, 'BU¥OL, JOHN YMOR CURAYAG', '564140', NULL, '$2y$10$OxxoCm/uzSQFNnh91NM5WuE7rlLjdL5FscUKBCvUlg3NSBLiGeIAq', NULL, '2022-11-11 19:41:06', '2022-11-11 19:41:06', 1),
(181, 'CALOPE, MARK ANTHONY RULE', '535284', NULL, '$2y$10$90KNu0AEXYi1V88WiorB1OTwDSOvVo.YSxEA4YoO5vIBGqH9Cvh8C', NULL, '2022-11-11 19:41:06', '2022-11-11 19:41:06', 1),
(182, 'COSMOD, JOSEPH LUMAAD', '889625', NULL, '$2y$10$M3KDQ.l.W7TSIpuU5RIxeOIjMeDS6cw9MhahPbSvbFJxuPbXS7Z9m', NULL, '2022-11-11 19:41:06', '2022-11-11 19:41:06', 1),
(183, 'GULILAT, ALVIN PATAC', '542693', NULL, '$2y$10$pCoz6eHl5ypbcdW7yM./AeFwH8fHTPXJY1YhWcWfhakmZ0Y4GRRgC', NULL, '2022-11-11 19:41:06', '2022-11-11 19:41:06', 1),
(184, 'LABANDERA, CRISTIAN JAY LINGUEZ', '404937', NULL, '$2y$10$b0vNgxYSkUVc9690bhm/Gu/kTY2RcJicN8mhQDenowwVZ7xf1oDW.', NULL, '2022-11-11 19:41:06', '2022-11-11 19:41:06', 1),
(185, 'AMIGO, CHERIE MAE PAGOD', '243961', NULL, '$2y$10$JOtchjxVMmSWgw9w6FXFruPd10qLA2L0PtNwEliJzBl9Skpk7rqUG', NULL, '2022-11-11 19:41:06', '2022-11-11 19:41:06', 1),
(186, 'AUGUIS, CAMEL LUSICA', '610924', NULL, '$2y$10$EbdYNOoZNvdWYm1pyGB8Pe.WM.Mn5wXwu1r5sW6AhPnXEskPoA6xy', NULL, '2022-11-11 19:41:06', '2022-11-11 19:41:06', 1),
(187, 'BAER, JORELYN MALANOG', '311282', NULL, '$2y$10$nrPEBu7cmevrv56ZuYKCzuhKHxVnr3disSGvx7uuePg/hXoMG7Z9y', NULL, '2022-11-11 19:41:06', '2022-11-11 19:41:06', 1),
(188, 'DALO, HARLENE JALA', '315908', NULL, '$2y$10$NHxtOh82Z0OHxvIGJo7ANuAtZBgexSSClVaFY0xXfTgpnGhc1IEGy', NULL, '2022-11-11 19:41:06', '2022-11-11 19:41:06', 1),
(189, 'ENERO, MARIEFRANCE MONTESCO', '676797', NULL, '$2y$10$Wy2Y9P0H9SLdsq7KUf4UyuQUeNwWG0O3u8hc1scFWhLCTTT5uhwdy', NULL, '2022-11-11 19:41:07', '2022-11-11 19:41:07', 1),
(190, 'FULGUERINAS, ELLA MAY CIRUNAY', '539316', NULL, '$2y$10$NNpAY9wUukNlepER1MO7bem683Cq.DMj263ff0jJ9pdatO4Sx84u6', NULL, '2022-11-11 19:41:07', '2022-11-11 19:41:07', 1),
(191, 'FULGUERINAS, MA. NICEL SACRO', '786352', NULL, '$2y$10$ZbvNHJkj/sprKc91MJ4F4e9LLO3Re.RZPBiRvVMfsHWaKvsoYQ4q6', NULL, '2022-11-11 19:41:07', '2022-11-11 19:41:07', 1),
(192, 'AGUA, JOSEPH JR M', '237401', NULL, '$2y$10$u4.Zn.CCvkLfCMM6mC7uY.z08WWuUeBwoBJiJBphh0b4rmPTCeHgO', NULL, '2022-11-11 19:41:07', '2022-11-11 19:41:07', 1),
(193, 'ARCAYNA, JOHN REY YANGCO', '863212', NULL, '$2y$10$sMAMYGjtX10CIg9bzUpcfut/cyWI01I6px/fdwGl7PYdFgLERaXxS', NULL, '2022-11-11 19:41:07', '2022-11-11 19:41:07', 1),
(194, 'BALILING, JADE ', '381029', NULL, '$2y$10$g/tOYbafKAN4dhmwCFez6edRlmW80E2rN6qfWSn1GWPMpgm4pnGam', NULL, '2022-11-11 19:41:07', '2022-11-11 19:41:07', 1),
(195, 'BALI-OS, JOHN CLEO I.', '147855', NULL, '$2y$10$oX5f7nn5y9VJULaSqGVPPux9g5M78vFzGvIfUhenLMv4Eaf56DLdq', NULL, '2022-11-11 19:41:07', '2022-11-11 19:41:07', 1),
(196, 'BAQUEQUE, BRENT ', '631413', NULL, '$2y$10$HtLbWjJz1cwtfMSGmLNrHeEcYaSF22OlikIyji95pShU/t5F2eHxS', NULL, '2022-11-11 19:41:07', '2022-11-11 19:41:07', 1),
(197, 'BAQUEQUE, BRYLE ', '799090', NULL, '$2y$10$uFTB6OXoywlsgdkQJXCpC.gPbNJRyLyn/jkBNB.8jv241SQ5G09EK', NULL, '2022-11-11 19:41:07', '2022-11-11 19:41:07', 1),
(198, 'BOYRAS, GLIENT DAVE A', '780172', NULL, '$2y$10$hdHPn4bXmjz36yeUXAd5aeGalUONp35g7UbTCWZGFud6RfyRHzPfi', NULL, '2022-11-11 19:41:07', '2022-11-11 19:41:07', 1),
(199, 'CAHAPON, JEUARD ', '526669', NULL, '$2y$10$es8vT1kFXDU1R5j0b0d9PeMINcySEhAZNvIapIn0769w0Dt3PQW7m', NULL, '2022-11-11 19:41:07', '2022-11-11 19:41:07', 1),
(200, 'CAMANZO, ELJAN S', '306722', NULL, '$2y$10$P7sfEDSiTi9YAEfsJi2SJOJ8p8gQeQVMudAxnyQIfvZjQ44ZkrFIq', NULL, '2022-11-11 19:41:07', '2022-11-11 19:41:07', 1),
(201, 'DAGANTE, JEFFRY ', '538371', NULL, '$2y$10$KnQq0sBxZqzA0IvyfSNHKux7viJ1iJiZQfHBy3eWBeW8hvwHBoVHm', NULL, '2022-11-11 19:41:08', '2022-11-11 19:41:08', 1),
(202, 'DAING, DEL BRYAN M', '956554', NULL, '$2y$10$DeewQEbX42NukO5y/Awo9el425uMhIs.82i42uG/i92XuzKQp832e', NULL, '2022-11-11 19:41:08', '2022-11-11 19:41:08', 1),
(203, 'DANILA, CHARMEL T.', '348606', NULL, '$2y$10$QNIpBp.QhDCjzyEtxihCwey4o6eZHTu/J52XwhVbAmnS.4m6Dy6J2', NULL, '2022-11-11 19:41:08', '2022-11-11 19:41:08', 1),
(204, 'DAQUIPIL, JOSIF LEVITICUS B.', '651135', NULL, '$2y$10$PHc1wQyVjqFkQnW9pgJTO.82vZlMBLVJUarACc6xGIfGkYFFJ8I5m', NULL, '2022-11-11 19:41:08', '2022-11-11 19:41:08', 1),
(205, 'DICDICAN, REYMOND C', '894930', NULL, '$2y$10$6UIYcHvgloUE6J/jgMqhbe7VRH73gKyC2Jy1b2BuCzEQmHpEEKVEm', NULL, '2022-11-11 19:41:08', '2022-11-11 19:41:08', 1),
(206, 'GARCIA, GRIAN CHESTER MARVELOUS', '518833', NULL, '$2y$10$mjUN1WiEP/vCpnNZ4Ad3bubQdaY0b0tC/ItgnzpIZOwdABtKbEsnq', NULL, '2022-11-11 19:41:08', '2022-11-11 19:41:08', 1),
(207, 'HINAY, JEVA MAE BUCIA', '989330', NULL, '$2y$10$z59/AF.26bSTOQNIetWYLO3DXGj.eCLf16M4S6OIDpyMe2bAoy5vG', NULL, '2022-11-11 19:41:08', '2022-11-11 19:41:08', 1),
(208, 'ILANDAG, VERONICA ZATE', '809172', NULL, '$2y$10$i9AI/SUa6HW3IMSv4Wgpwe7gw0iUmk2BH6xYpkGXtrrA4SRbwAM7S', NULL, '2022-11-11 19:41:08', '2022-11-11 19:41:08', 1),
(209, 'INGUITO, ANTTONETH LUSPOC', '332095', NULL, '$2y$10$xKhv7WVer1XJYjpYNNe0x.3sqoq3cDpPDb2geDXHu283bv60KlCu6', NULL, '2022-11-11 19:41:08', '2022-11-11 19:41:08', 1),
(210, 'JAGUNOS, RHEA BUNTAG', '319460', NULL, '$2y$10$ZHB3kTghPxTXwHad2xompO9HQvNjUKA.2FdSwQmmI/7XGDktR.Soa', NULL, '2022-11-11 19:41:08', '2022-11-11 19:41:08', 1),
(211, 'JUMAMIL, CHRISTINE TANIZA', '528505', NULL, '$2y$10$nga43ZonB5hFnvAXdEN2oud7stM6pXP7bnO7VW3Hv2kXvQytGaSAS', NULL, '2022-11-11 19:41:09', '2022-11-11 19:41:09', 1),
(212, 'LABOR, KIMBERLY ANN PAYOT', '425134', NULL, '$2y$10$XdwvDixvqOO6pY1JN9Z2AuiwiuW30hbEPPj53moDwcT8b5kOVC8vG', NULL, '2022-11-11 19:41:09', '2022-11-11 19:41:09', 1),
(213, 'LAHOY, SHAILA CAJES', '856636', NULL, '$2y$10$uLeFu4uRPMdUSQ.2zznX1OQt1s4fHuDl8KylnQd.1vuI/JFrX3uHK', NULL, '2022-11-11 19:41:09', '2022-11-11 19:41:09', 1),
(214, 'LAMBAN, ANGELIE ', '557866', NULL, '$2y$10$1w43SM.NdQhWIETijNt7YeyPB/a012u8ziKf/PGusPM319/g0PFrS', NULL, '2022-11-11 19:41:09', '2022-11-11 19:41:09', 1),
(215, 'LOMANTAS, ALLEAH WIL TABULONG', '938490', NULL, '$2y$10$bxJ1gqyOIoWImqHDlmTzCerSbnRRai6uoF/n2NLtBtuJflr3mU.nq', NULL, '2022-11-11 19:41:09', '2022-11-11 19:41:09', 1),
(216, 'LUMANAS, JOLLYMARIE SABAC', '376364', NULL, '$2y$10$6OldavIHvel9Yv7R.3tiVepPO0Pem/JVGDVgP49V/gCUZqeXdl9pC', NULL, '2022-11-11 19:41:09', '2022-11-11 19:41:09', 1),
(217, 'MADIJANON, MARIEL ABUZO', '646571', NULL, '$2y$10$9cBh/C8eVYD0WHZ7ZENxruvB0pBjgCcJZEoW9v5nu8nTWLTn4r0LS', NULL, '2022-11-11 19:41:09', '2022-11-11 19:41:09', 1),
(218, 'MERENCILLO, KRISTINE VINE ALE', '856187', NULL, '$2y$10$Ujg6fnhV6LlJzMt/zXLakuatKiOCZleJ/k7xwrA1w5sx3lVF9GuMW', NULL, '2022-11-11 19:41:09', '2022-11-11 19:41:09', 1),
(219, 'MONTEL, VANISSA UGPO', '957490', NULL, '$2y$10$WMIkLyqqP8AGDeoDOonlN.H.Vou/9sc5PN.rsp0Ao0RWXRkRPX2xq', NULL, '2022-11-11 19:41:09', '2022-11-11 19:41:09', 1),
(220, 'NARAGA, JUDELYN EMIA', '113455', NULL, '$2y$10$Dwg07sSrKdzUAAw/IgO8f.it1KkvEkq2qR/3RY9PGvhNwmdWd7.YC', NULL, '2022-11-11 19:41:09', '2022-11-11 19:41:09', 1),
(221, 'ORILLA, RICKY MAE LIHAT', '571540', NULL, '$2y$10$OIAlsM64r6DgPQe3gPL89.lW5Q6XCCJ8GqlPXQbs1gmKakJQB46eq', NULL, '2022-11-11 19:41:09', '2022-11-11 19:41:09', 1),
(222, 'PATAC, JENECIL TEREC', '223333', NULL, '$2y$10$tVnYl9HUanEY5CRFXh0yZe2REcw7RMiyck2hWrpVdbycfUDaSnaB6', NULL, '2022-11-11 19:41:10', '2022-11-11 19:41:10', 1),
(223, 'PONGASE, CATHERINE LLORENTE', '580566', NULL, '$2y$10$e/JVEagkbrQVvpocwamW0.H/H5RjkQcFCKQNd4EIzGVFXvqt5OsJK', NULL, '2022-11-11 19:41:10', '2022-11-11 19:41:10', 1),
(224, 'RENEGADO, CHERLYN BOCTOTO', '726303', NULL, '$2y$10$Au.z3JcaqAViaRwKtdwsme9uj1OaKH/KlsTZ0D3c0UFzIWuH0IWCq', NULL, '2022-11-11 19:41:10', '2022-11-11 19:41:10', 1),
(225, 'REQUILLO, VALLERY MAY DIEZ', '925226', NULL, '$2y$10$kXOEJpI4hGCwlQDeaYT7NuK5bYV11kn/yB8S46vWQ/fbbXrZ8eEye', NULL, '2022-11-11 19:41:10', '2022-11-11 19:41:10', 1),
(226, 'TORREON, MYLA LANSANG', '622796', NULL, '$2y$10$QHhdurABbzZVMDqcJnc19OTug6A1ZpL0X3Q/iiqqjRSQWix0fa.Zq', NULL, '2022-11-11 19:41:10', '2022-11-11 19:41:10', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_counselor_feedback`
--
ALTER TABLE `client_counselor_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_counselor_feedback_settings`
--
ALTER TABLE `client_counselor_feedback_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluation_forms`
--
ALTER TABLE `evaluation_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluation_form_settings`
--
ALTER TABLE `evaluation_form_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `individual_inventories`
--
ALTER TABLE `individual_inventories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `individual_inventory_settings`
--
ALTER TABLE `individual_inventory_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory_feedback`
--
ALTER TABLE `inventory_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory_feedback_settings`
--
ALTER TABLE `inventory_feedback_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leavers`
--
ALTER TABLE `leavers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaversettings`
--
ALTER TABLE `leaversettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership_settings`
--
ALTER TABLE `membership_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `needs_assessment_inventories`
--
ALTER TABLE `needs_assessment_inventories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `needs_assessment_inventory_settings`
--
ALTER TABLE `needs_assessment_inventory_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `peer_facilitator_circles`
--
ALTER TABLE `peer_facilitator_circles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peer_facilitator_circle_settings`
--
ALTER TABLE `peer_facilitator_circle_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `precounselings`
--
ALTER TABLE `precounselings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `precounseling_settings`
--
ALTER TABLE `precounseling_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_settings`
--
ALTER TABLE `profile_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schoolyears`
--
ALTER TABLE `schoolyears`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `client_counselor_feedback`
--
ALTER TABLE `client_counselor_feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_counselor_feedback_settings`
--
ALTER TABLE `client_counselor_feedback_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `evaluation_forms`
--
ALTER TABLE `evaluation_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evaluation_form_settings`
--
ALTER TABLE `evaluation_form_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `individual_inventories`
--
ALTER TABLE `individual_inventories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `individual_inventory_settings`
--
ALTER TABLE `individual_inventory_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory_feedback`
--
ALTER TABLE `inventory_feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory_feedback_settings`
--
ALTER TABLE `inventory_feedback_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leavers`
--
ALTER TABLE `leavers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `leaversettings`
--
ALTER TABLE `leaversettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `membership_settings`
--
ALTER TABLE `membership_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `needs_assessment_inventories`
--
ALTER TABLE `needs_assessment_inventories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `needs_assessment_inventory_settings`
--
ALTER TABLE `needs_assessment_inventory_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peer_facilitator_circles`
--
ALTER TABLE `peer_facilitator_circles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peer_facilitator_circle_settings`
--
ALTER TABLE `peer_facilitator_circle_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `precounselings`
--
ALTER TABLE `precounselings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `precounseling_settings`
--
ALTER TABLE `precounseling_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile_settings`
--
ALTER TABLE `profile_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schoolyears`
--
ALTER TABLE `schoolyears`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=376;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
