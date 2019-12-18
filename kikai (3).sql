-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 27, 2019 at 07:50 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kikai`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
CREATE TABLE IF NOT EXISTS `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

DROP TABLE IF EXISTS `awards`;
CREATE TABLE IF NOT EXISTS `awards` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `short_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_reviews`
--

DROP TABLE IF EXISTS `blog_reviews`;
CREATE TABLE IF NOT EXISTS `blog_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `causes`
--

DROP TABLE IF EXISTS `causes`;
CREATE TABLE IF NOT EXISTS `causes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `targeted_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cause_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'in_process',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `urgent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `last_date` date NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cause_categories`
--

DROP TABLE IF EXISTS `cause_categories`;
CREATE TABLE IF NOT EXISTS `cause_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

DROP TABLE IF EXISTS `cms`;
CREATE TABLE IF NOT EXISTS `cms` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `keyword` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_forms`
--

DROP TABLE IF EXISTS `contact_forms`;
CREATE TABLE IF NOT EXISTS `contact_forms` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

DROP TABLE IF EXISTS `donations`;
CREATE TABLE IF NOT EXISTS `donations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `project_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donated_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_mode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `donar_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donation_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emis`
--

DROP TABLE IF EXISTS `emis`;
CREATE TABLE IF NOT EXISTS `emis` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `installment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pending_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `donation_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timing` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'future',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `questions` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answers` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `questions`, `answers`, `status`, `created_at`, `updated_at`) VALUES
(1, 'What is Lorem Ipsum?', '<p>\r\n\r\n<strong>Lorem Ipsum</strong>&nbsp;is simply dummied text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\r\n\r\n<br></p>', 'Active', '2019-09-26 12:13:06', '2019-09-26 12:13:06'),
(2, 'Where does it come from?', '<p>\r\n\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. \r\n\r\n<br></p>', 'Active', '2019-09-26 12:13:41', '2019-09-26 12:13:41');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`, `image_text`, `image_category`, `status`, `created_at`, `updated_at`) VALUES
(1, '1569437144banner1.png', 'banner', 'banner', 'Active', '2019-09-25 13:15:44', '2019-09-25 13:15:44'),
(2, '1569437157banner2.jpg', 'banner', 'banner', 'Active', '2019-09-25 13:15:57', '2019-09-25 13:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_26_093228_create_blogs_table', 1),
(4, '2019_08_26_093259_create_testimonials_table', 1),
(5, '2019_08_26_093315_create_images_table', 1),
(6, '2019_08_26_093326_create_faqs_table', 1),
(7, '2019_08_26_093335_create_events_table', 1),
(8, '2019_08_26_093349_create_causes_table', 1),
(9, '2019_08_26_094606_create_cause_categories_table', 1),
(10, '2019_08_26_121945_create_cities_table', 1),
(11, '2019_08_26_121957_create_states_table', 1),
(12, '2019_08_26_123350_add_slug_to_events', 1),
(13, '2019_08_27_054040_add_urgent_to_causes', 1),
(14, '2019_08_27_060023_add_last_date_causes', 1),
(15, '2019_08_27_072824_add_slug_causes', 1),
(16, '2019_08_27_080008_add_short_description_to_events', 1),
(17, '2019_08_27_095056_create_blog_reviews_table', 1),
(18, '2019_08_27_120330_add_video_url_to_causes', 1),
(19, '2019_08_27_203237_create_donations_table', 1),
(20, '2019_08_28_082214_create_our_teams_table', 1),
(21, '2019_08_28_112708_create_videos_table', 1),
(22, '2019_08_28_184748_create_newsletters_table', 1),
(23, '2019_08_29_115056_create_volunteers_table', 1),
(24, '2019_08_29_195705_create_contact_forms_table', 1),
(25, '2019_08_30_100339_create_awards_table', 1),
(26, '2019_08_30_104532_create_cms_table', 1),
(27, '2019_08_30_122953_add_keyword_to_cms', 1),
(28, '2019_08_31_093424_add_type_to_users', 1),
(29, '2019_09_02_071404_add_phone_to_users', 1),
(30, '2019_09_02_081656_create_addresses_table', 1),
(31, '2019_09_02_113602_add_donar_type_to_donations', 1),
(32, '2019_09_05_093935_add_donation_type_to_donations', 1),
(33, '2019_09_05_101945_create_emis_table', 1),
(34, '2019_09_06_072447_add_donation_id_to_emis', 1),
(35, '2019_09_24_200251_create_projects_table', 2),
(36, '2019_09_24_202234_add_slug_to_project', 3),
(37, '2019_09_25_153613_create_services_table', 4),
(38, '2019_09_25_154357_add_slug_to_services', 5),
(39, '2019_09_25_191032_add_social_links_to_our_teams', 6),
(40, '2019_09_26_160933_add_image_url_to_services', 7);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

DROP TABLE IF EXISTS `newsletters`;
CREATE TABLE IF NOT EXISTS `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `our_teams`
--

DROP TABLE IF EXISTS `our_teams`;
CREATE TABLE IF NOT EXISTS `our_teams` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `member_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_teams`
--

INSERT INTO `our_teams` (`id`, `member_name`, `role`, `image_url`, `status`, `created_at`, `updated_at`, `facebook`, `twitter`, `google`) VALUES
(1, 'Devam Kapoor', 'Founder & CEO', '1569001445devam.jpeg', 'Active', '2019-09-20 12:14:05', '2019-09-25 13:50:00', 'https://www.google.com', NULL, NULL),
(2, 'Depreet Uppal', 'CO-Founder & CSO', '1569001515depreet.jpeg', 'Active', '2019-09-20 12:15:15', '2019-09-20 12:15:15', NULL, NULL, NULL),
(3, 'Adarsh Shrivastva', 'CO-Founder & COO', '1569001545adarsh.jpeg', 'Active', '2019-09-20 12:15:45', '2019-09-20 12:15:45', NULL, NULL, NULL),
(4, 'Aniruddh Sharma', 'Director & CTO', '1569001584aniruddh.jpeg', 'Active', '2019-09-20 12:16:24', '2019-09-20 12:16:24', NULL, NULL, NULL),
(5, 'Manav Dawar', 'Director & CAO', '1569001628manav.jpeg', 'Deactive', '2019-09-20 12:17:08', '2019-09-25 13:46:53', 'fb.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `project_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `title`, `link`, `image_url`, `short_description`, `long_description`, `author`, `status`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'GETBOS.CO', 'Car & Bike Services', 'https://www.getbos.co', 'project1.png', 'Car Wash Services', '<p>Car Wash Services</p>', 'Devam Kapoor & Aniruddh Sharma', 'Active', '2019-09-25 10:43:33', '2019-09-25 10:46:47', 'car-&-bike-services'),
(2, 'GETBOS.CO', 'Back office Functions', 'https://www.getbos.co', 'item-2.jpg', 'Car Wash Services', '<p>Hello World </p>', 'Devam Kapoor', 'Active', '2019-09-25 13:29:06', '2019-09-25 13:29:06', 'back-office-functions'),
(3, 'GETBOS.COm', 'Call center outsourcing- ( Customer Service/Lead Generation, Outbound and Inbound Call)**', 'https://www.getbos.com', 'item-7.jpg', 'Car Wash Services', '<p>India</p>', 'Devam Kapoor & Aniruddh Sharma', 'Active', '2019-09-25 13:29:43', '2019-09-25 13:29:43', 'call-center-outsourcing--(-customer-service/lead-generation,-outbound-and-inbound-call)**'),
(4, 'kikaiservices.com', 'Kikai Services', 'http://www.kikaiservices.com', 'item-4.jpg', 'Kikai services', '<p>Kikai services</p>', 'Manav', 'Active', '2019-09-25 13:31:02', '2019-09-25 13:31:02', 'kikai-services'),
(5, 'hello world', 'Hello Wrld', 'http://www.hello.world.com', 'item-8.jpg', 'Hello World', '<p>Hello World Dummy Data</p>', 'Riya Sethi', 'Active', '2019-09-25 13:32:08', '2019-09-25 13:32:08', 'hello-wrld');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`, `slug`, `image_url`) VALUES
(1, 'Back office Functions', 'Productive, savvy, and quality back-office administrations to oversee, record, and convert your organizations\' back office information.', 'Active', '2019-09-25 10:36:56', '2019-09-26 11:11:10', 'back-office-functions', '1569516070backoffice.jpg'),
(2, 'Call center outsourcing- ( Customer Service/Lead Generation, Outbound and Inbound Call)**', 'Brilliant client administrations, exceptionally prepared specialists and guaranteed quality to decrease cost and improve your general procedure the board.', 'Active', '2019-09-25 10:37:22', '2019-09-26 11:10:51', 'call-center-outsourcing--(-customer-service/lead-generation,-outbound-and-inbound-call)**', '1569516051callcenter.jpg'),
(3, 'HR administrations', 'Qualified and experienced HR authorities for compensation move organization, record keeping, execution evaluation, preparing, advancement, and that\'s only the tip of the iceberg.', 'Active', '2019-09-25 10:37:43', '2019-09-26 11:10:02', 'hr-administrations', '1569516002hr.jpg'),
(4, 'Account & Finance services', 'Versatile and capable record administrations to help little to huge business in better monetary administration and quality guaranteed bookkeeping arrangements.', 'Active', '2019-09-25 10:38:14', '2019-09-26 11:09:18', 'account-&-finance-services', '1569515958accounts.jpg'),
(5, 'E-com support services-', 'Benefit spearheading item the board, truck the executives, request satisfaction, after deal backing, offers and arrangements, client care, and substantially more.', 'Active', '2019-09-25 10:38:37', '2019-09-26 11:07:44', 'e-com-support-services-', '1569515864comm.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
CREATE TABLE IF NOT EXISTS `states` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupasion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `occupasion`, `rating`, `review`, `image_url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Shubham', 'Developer', '5', '<p>Awesome Service</p>', '1569435718member-1.png', 'Active', '2019-09-25 12:51:58', '2019-09-25 12:51:58'),
(2, 'Riya', 'Developer', '5', '<p>Awesome Service </p>', '1569435768group@3x.jpg', 'Active', '2019-09-25 12:52:48', '2019-09-25 12:52:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `type`, `phone`) VALUES
(1, 'jyotika', 'jyotikasethi3007@gmail.com', NULL, '$2y$10$979Nk0gnpv1hs.MSsiDtvOhxNJfTDX779R9g3.W4hIK0OVsBV.WWu', NULL, '2019-09-09 12:59:33', '2019-09-09 12:59:33', 'admin', '9056560413');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

DROP TABLE IF EXISTS `volunteers`;
CREATE TABLE IF NOT EXISTS `volunteers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
