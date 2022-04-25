-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2022 at 04:18 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `engwheels`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'assets/uploads/about/37861647022952.jpg', '2022-03-11 16:22:32', '2022-03-11 16:22:32'),
(2, 'assets/uploads/about/82511647022963.jpg', '2022-03-11 16:22:43', '2022-03-11 16:22:43'),
(3, 'assets/uploads/about/64041647022970.jpg', '2022-03-11 16:22:50', '2022-03-11 16:22:50');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `photo`, `email`, `name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'a', 'admin@admin.com', 'ahmed yahya', '$2y$10$r4APdO9rlyZV7TnTiATH/uca1gJMmIRkmegvafKL8FfvS51ppwCGq', '2022-02-10 17:33:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'assets/uploads/brands/41291647620825.png', '2022-03-18 14:27:05', '2022-03-18 14:27:05'),
(2, 'assets/uploads/brands/64231647620900.png', '2022-03-18 14:28:20', '2022-03-18 14:28:20'),
(3, 'assets/uploads/brands/92011647620906.png', '2022-03-18 14:28:26', '2022-03-18 14:28:26'),
(4, 'assets/uploads/brands/73001647620912.png', '2022-03-18 14:28:32', '2022-03-18 14:28:32');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'دايو', '2022-03-24 21:11:46', '2022-03-24 21:11:46'),
(2, 'فيات', '2022-03-24 21:12:00', '2022-03-24 21:12:57'),
(3, 'تويوتا', '2022-03-24 21:13:22', '2022-03-24 21:13:22'),
(4, 'شيفروليه', '2022-03-24 21:13:54', '2022-03-24 21:13:54'),
(6, 'بي ام دبليو', '2022-03-25 10:38:38', '2022-03-25 11:50:38');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'الدوحة', '2022-03-24 19:43:31', '2022-03-24 19:43:31'),
(2, 'الريان', '2022-03-24 19:44:24', '2022-03-24 19:44:24'),
(3, 'الخور', '2022-03-24 19:44:31', '2022-03-24 19:44:31'),
(4, 'الوكرة', '2022-03-24 19:45:09', '2022-03-24 19:45:09'),
(5, 'مدينة الشمال', '2022-03-24 19:45:31', '2022-03-24 19:45:31'),
(6, 'ام صلال', '2022-03-24 19:46:30', '2022-03-24 19:46:30'),
(7, 'الشاعين', '2022-03-24 19:46:45', '2022-03-24 19:46:45'),
(8, 'الرويس', '2022-03-24 19:46:55', '2022-03-24 20:12:48');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `title`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(3, 'Amos Leblanc', 'feboqiquq@mailinator.com', 'Natus ipsam qui modi', '+1 (782) 342-8904', 'Reiciendis ducimus', '2022-02-10 19:57:36', '2022-02-10 19:57:36'),
(4, 'Camille Sutton', 'werodaq@mailinator.com', 'Est animi velit ob', '+1 (451) 559-2344', 'Quam quo qui eaque v', '2022-02-10 19:58:27', '2022-02-10 19:58:27'),
(5, 'Wynter Rojas', 'qapah@mailinator.com', 'Dolore eos labore e', '+1 (839) 474-8347', 'Sit et eiusmod nihil', '2022-02-10 19:58:51', '2022-02-10 19:58:51'),
(6, 'Demetria Graves', 'vagekuj@mailinator.com', 'Hic sequi nisi dolor', '+1 (476) 833-8093', 'Labore quis mollit v', '2022-02-10 20:00:16', '2022-02-10 20:00:16'),
(7, 'Asher Yates', 'duzig@mailinator.com', 'Possimus proident', '+1 (583) 967-8368', 'Quos officia labore', '2022-02-10 20:06:41', '2022-02-10 20:06:41'),
(8, 'Hall Calderon', 'dotywi@mailinator.com', 'Saepe velit necessi', '+1 (388) 312-6771', 'Amet sunt adipisici', '2022-02-10 20:25:39', '2022-02-10 20:25:39'),
(9, 'Yuli Burt', 'kegirata@mailinator.com', 'Neque anim voluptas', '+1 (979) 846-3596', 'Alias velit cumque m', '2022-02-10 20:26:13', '2022-02-10 20:26:13'),
(10, 'Benjamin Galloway', 'kigefexo@mailinator.com', 'Perferendis libero n', '+1 (236) 663-3322', 'Eiusmod aut excepteu', '2022-02-10 20:26:41', '2022-02-10 20:26:41'),
(11, 'Vladimir Gilliam', 'bevyxu@mailinator.com', 'Laborum dolores qui', '+1 (885) 944-8491', 'Occaecat ut qui reic', '2022-02-10 20:26:57', '2022-02-10 20:26:57'),
(12, 'Vladimir Gilliam', 'bevyxu@mailinator.com', 'Laborum dolores qui', '+1 (885) 944-8491', 'Occaecat ut qui reic', '2022-02-10 20:27:26', '2022-02-10 20:27:26'),
(13, 'Vladimir Gilliam', 'bevyxu@mailinator.com', 'Laborum dolores qui', '+1 (885) 944-8491', 'Occaecat ut qui reic', '2022-02-10 20:27:46', '2022-02-10 20:27:46'),
(14, 'Declan Mcbride', 'pygynifij@mailinator.com', 'Et elit quo eu maio', '+1 (635) 724-5581', 'Ut dolor proident a', '2022-02-10 20:28:13', '2022-02-10 20:28:13'),
(15, 'Leigh Reyes', 'xikuxy@mailinator.com', 'Quis qui blanditiis', '+1 (912) 847-5926', 'Ut do dolor nesciunt', '2022-02-10 20:30:49', '2022-02-10 20:30:49'),
(16, 'Susan Stone', 'veqage@mailinator.com', 'Ipsum reprehenderit', '+1 (867) 685-7667', 'Cillum saepe magni e', '2022-02-10 20:31:05', '2022-02-10 20:31:05'),
(17, 'Knox Wells', 'volaqybok@mailinator.com', 'Excepturi qui quia v', '+1 (118) 183-6811', 'Modi illo quia labor', '2022-02-10 20:31:30', '2022-02-10 20:31:30'),
(18, 'Jillian Hale', 'kumelygo@mailinator.com', 'Cumque cupidatat mol', '+1 (728) 554-7032', 'Suscipit non dolore', '2022-02-10 20:32:22', '2022-02-10 20:32:22'),
(19, 'Clarke Andrews', 'wuvehy@mailinator.com', 'Quasi vero aut bland', '+1 (133) 245-5612', 'Illum repellendus', '2022-02-10 20:32:39', '2022-02-10 20:32:39'),
(22, 'Ferdinand Hill', 'jovymudecy@mailinator.com', 'Dolor harum officia', '+1 (393) 559-5113', 'Aut et quis quisquam', '2022-02-10 20:33:57', '2022-02-10 20:33:57'),
(25, 'Stone Terry', 'rapysoti@mailinator.com', 'Dolor commodo aut qu', '+1 (914) 635-6428', 'Commodi sed magna ex', '2022-02-10 20:42:18', '2022-02-10 20:42:18'),
(26, 'Urielle Morton', 'wefuxupar@mailinator.com', 'Mollit quod facere c', '+1 (427) 205-9376', 'Voluptas sit quia re', '2022-02-10 20:42:35', '2022-02-10 20:42:35'),
(27, 'Urielle Morton', 'wefuxupar@mailinator.com', 'Mollit quod facere c', '+1 (427) 205-9376', 'Voluptas sit quia re', '2022-02-10 20:42:45', '2022-02-10 20:42:45'),
(28, 'Urielle Morton', 'wefuxupar@mailinator.com', 'Mollit quod facere c', '+1 (427) 205-9376', 'Voluptas sit quia re', '2022-02-10 20:42:47', '2022-02-10 20:42:47'),
(32, 'Eugenia Adkins', 'taka@mailinator.com', 'Repudiandae quis sed', '+1 (787) 954-7542', 'Neque dolorem conseq', '2022-03-18 20:25:16', '2022-03-18 20:25:16');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_us` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gmail` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `times` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `logo`, `title`, `about_us`, `email`, `phone`, `facebook`, `twitter`, `youtube`, `gmail`, `times`, `created_at`, `updated_at`) VALUES
(1, NULL, 'المهندس للسيارات', 'شركة المهندس للسيارات شركة متخصصة في بيع أفضل السيارات إستعمال الخليج ومواصفات خليجية إذا كنت تفكر في إقتناء سيارة فنحن أفضل أختيار ما عليك سوى إختيار السيارة وسوف نوصلها لك حتى المنزل', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-18 13:11:51');

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
(1, '2022_02_10_210652_create_contact_us_table', 1),
(2, '2022_02_11_160038_create_admins_table', 2),
(3, '2022_03_11_125333_create_general_settings_table', 3),
(4, '2022_03_11_130850_create_sliders_table', 4),
(5, '2022_03_11_164858_create_about_us_table', 5),
(6, '2022_03_18_161349_create_brands_table', 6),
(7, '2022_03_18_224951_create_posts_table', 7),
(9, '2022_03_19_203412_create_teams_table', 8),
(10, '2022_03_24_192550_create_cities_table', 9),
(11, '2022_03_24_223033_create_categories_table', 10),
(12, '2022_03_25_130144_create_sub_categories_table', 11),
(13, '2022_04_22_123436_create_users_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `photo`, `title`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'assets/uploads/posts/70871647647098.jpg', 'مجوعة سيارات جديدة من تويوتا', 'لدينا سيارة تويوتا كرولا موديل 2020 كانت إستخدام القنصلية المصرية لدينا سيارة تويوتا كرولا موديل 2020 كانت إستخدام القنصلية المصرية لدينا سيارة تويوتا كرولا موديل 2020 كانت إستخدام القنصلية المصرية لدينا سيارة تويوتا كرولا موديل 2020 كانت إستخدام القنصلية المصرية\"\"', '2022-03-18 21:25:01', '2022-03-18 21:44:58');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `photo`, `title`, `sub_title`, `button_text`, `button_link`, `created_at`, `updated_at`) VALUES
(1, 'assets/uploads/sliders/63051647012788.jpg', 'المهندس لتجارة السيارات', 'سيارات بحالة الزيرو ومواصفات خليجية إشتريها من المهندس للسيارات', 'تصفح السيارات', NULL, '2022-03-11 11:54:50', '2022-03-11 13:33:08'),
(5, 'assets/uploads/sliders/6291647012821.jpg', 'المهندس للسيارات', 'معاينة وفحص كامل للسيارات من خلال فريق العمل لدينا', 'عرض التفاصيل', NULL, '2022-03-11 13:11:03', '2022-03-11 13:33:41');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `title`, `category_id`, `created_at`, `updated_at`) VALUES
(3, 'نوبيرا', 1, '2022-03-25 11:29:29', '2022-03-25 11:29:29'),
(4, 'لانوس', 1, '2022-03-25 11:29:36', '2022-03-25 11:42:02'),
(6, 'X6', 6, '2022-03-25 11:43:19', '2022-03-25 11:43:19'),
(7, 'Z3', 6, '2022-03-25 11:43:31', '2022-03-25 11:43:31'),
(8, 'Z4', 6, '2022-03-25 11:43:38', '2022-03-25 11:43:43'),
(9, 'كروز', 4, '2022-03-25 11:44:18', '2022-03-25 11:44:18'),
(10, 'كامارو', 4, '2022-03-25 11:44:28', '2022-03-25 11:44:28'),
(11, 'اوبترا', 4, '2022-03-25 11:44:45', '2022-03-25 11:44:45'),
(12, 'هاي اس', 3, '2022-03-25 11:45:15', '2022-03-25 11:45:15'),
(13, 'كورولا', 3, '2022-03-25 11:45:28', '2022-03-25 11:45:28'),
(14, 'راش', 3, '2022-03-25 11:45:38', '2022-03-25 11:45:38'),
(15, '124', 2, '2022-03-25 11:46:13', '2022-03-25 11:46:13'),
(16, 'ماريا', 2, '2022-03-25 11:46:17', '2022-03-25 11:46:17'),
(17, 'كوبو', 2, '2022-03-25 11:46:30', '2022-03-25 11:46:30');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gmail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `photo`, `name`, `job`, `facebook`, `twitter`, `gmail`, `created_at`, `updated_at`) VALUES
(1, 'assets/uploads/teams/35871647724382.jpg', 'سيف ياسر', 'مهندس اول', 'https://www.facebook.com/EngMohamed100', NULL, 'mohamed@gmail.com', '2022-03-19 19:13:02', '2022-03-19 20:08:21'),
(2, 'assets/uploads/teams/35651647727763.png', 'علي خالد', 'استشاري تسويق', 'https://www.facebook.com/Ali120', 'https://www.twitter.com/ali', 'ali@gmail.com', '2022-03-19 20:09:23', '2022-03-19 20:09:23'),
(3, 'assets/uploads/teams/65441647728192.jpg', 'محمود ايهاب', 'مهندس ميكانيكا', 'https://www.facebook.com/ehabMohamed', NULL, 'ehab@gmail.com', '2022-03-19 20:16:32', '2022-03-19 20:16:32'),
(4, 'assets/uploads/teams/90201647728230.jpg', 'عباس منصور', 'متخصص فحص', 'https://www.facebook.com/Abaas22', NULL, NULL, '2022-03-19 20:17:10', '2022-03-19 20:17:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed Yahya', 'ahmed@gmail.com', '$2y$10$r4APdO9rlyZV7TnTiATH/uca1gJMmIRkmegvafKL8FfvS51ppwCGq', NULL, '7Qq7Qj6H7Ywh1WK8sm09OveB6GVnbVNVWdzk0reeofWup6GsvYlr0Q6VpEqs', NULL, NULL),
(3, 'Ahmed Tarek YA', 'ahmedtarekya100@gmail.com', '$2y$10$0Vvlizbggv7v7V7wEVUusOTSyNlbohyXb1dM7v6V.PXQoY02//5CK', NULL, NULL, '2022-04-22 12:06:18', '2022-04-22 12:13:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
