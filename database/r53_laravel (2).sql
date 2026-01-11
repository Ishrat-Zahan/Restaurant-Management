-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2023 at 06:22 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `r53_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `images`, `created_at`, `updated_at`) VALUES
(1, 'Soup', 'uploads/ZaaeuWdj6cFIWk2z5S2rL54JFqLjf7WO8LlfYYY3.jpg', '2023-07-25 07:23:24', '2023-07-25 07:23:24'),
(2, 'Appetizer', 'uploads/Cy2tGUOG6y0D9DHNwyGkI6ApnHyfJn2sWcRSa62J.jpg', '2023-07-31 03:50:34', '2023-07-31 03:50:34'),
(4, 'Main Dish', 'uploads/Xk8pI0GToifJ4dLvkN0cgWPM6Hq0av3M6Qt9y12d.webp', '2023-08-01 00:02:03', '2023-08-01 00:02:03'),
(5, 'Noodles', 'uploads/c5cFnlWwROKYXO8LUter2CkXhA0AQAN9lIVteU9p.jpg', '2023-08-01 00:07:58', '2023-08-01 00:07:58');

-- --------------------------------------------------------

--
-- Table structure for table `cusers`
--

CREATE TABLE `cusers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `menu_id`, `name`, `created_at`, `updated_at`) VALUES
(8, 5, 'uploads/xVNp5j93LF7IwJ3s5NBrPl6Soz8NHKhQdx1Hwfvu.jpg', '2023-07-31 03:52:10', '2023-07-31 03:52:10'),
(9, 6, 'uploads/wjv5cVYDAAzhGdl8lECCPKxQOPU7aqtEe6O4gsia.jpg', '2023-07-31 03:52:59', '2023-07-31 03:52:59'),
(10, 7, 'uploads/4PBAcVS7OHQzmZP8GDkWLs7OFRyIuO5KREAZZJsQ.jpg', '2023-07-31 03:54:17', '2023-07-31 03:54:17'),
(11, 8, 'uploads/yU1Eva7N8gvoyWCZJ3VzwdP6UkMLIQonA1CIpVzu.jpg', '2023-07-31 03:55:28', '2023-07-31 03:55:28'),
(12, 9, 'uploads/C7f1rCHyLKfeLmyeNFAkq0DmNuLzdJy47Gl1zcDk.jpg', '2023-07-31 03:57:50', '2023-07-31 03:57:50'),
(18, 12, 'uploads/Oqd9t5Ztoq3Xj3rvtLQszFtrVcTrHBYYxIaFYnq6.jpg', '2023-08-01 00:16:18', '2023-08-01 00:16:18'),
(19, 13, 'uploads/R5wV6ptKkQn0JK7yJ7KfQAE8ihbvuAWrhOOCPbcP.jpg', '2023-08-01 00:17:06', '2023-08-01 00:17:06'),
(20, 14, 'uploads/a3OXXUFCLUAA4IaPKmpovfk3FgfsSwQdCmXlbg6I.jpg', '2023-08-01 00:20:32', '2023-08-01 00:20:32'),
(21, 15, 'uploads/KTgqRmSXy05RGONzDnu5BLfoMRskSFX2GmhJG8Cm.jpg', '2023-08-01 00:21:49', '2023-08-01 00:21:49'),
(22, 16, 'uploads/kvcmt8HfAQAsrkjfHngdU4GsfCMcVyMPh37bnjTZ.jpg', '2023-08-01 00:23:10', '2023-08-01 00:23:10'),
(23, 17, 'uploads/BImwjGlTIHXWt9u0KeHLArhrX1xFdsoYBHvQJ7qL.jpg', '2023-08-01 00:24:40', '2023-08-01 00:24:40'),
(24, 18, 'uploads/e1eez0bDj1WOwLBOIdwBkrOQyIliFIWVLi5X5NBf.jpg', '2023-08-01 00:25:53', '2023-08-01 00:25:53'),
(25, 19, 'uploads/2iUIouN3LNiXqnBr07r1GEoqCCkkGmzVcQNcZXaQ.jpg', '2023-08-01 00:27:04', '2023-08-01 00:27:04'),
(26, 20, 'uploads/n5koptQc7TSR3SsNeWXwEteDyfXt4QBDLAinvZ9M.jpg', '2023-08-01 00:28:03', '2023-08-01 00:28:03'),
(27, 21, 'uploads/pyBcvRSylEaxWbtzpCf0zLNIPQ87aqksJeJZJKbR.jpg', '2023-08-01 00:29:49', '2023-08-01 00:29:49'),
(28, 22, 'uploads/EpxDjmIzWfY6jiXe7gr1UpE8KUXe27vhW82SNBHT.jpg', '2023-08-01 00:31:27', '2023-08-01 00:31:27'),
(29, 23, 'uploads/pT7SR8jECmRqCCWGPFs0kDsRGsGRhAbtgRSoxpkZ.jpg', '2023-08-01 00:34:07', '2023-08-01 00:34:07'),
(30, 24, 'uploads/gMccfTM9cNKCtHwFBUfhWGqJLtsbGmsD4OWVAnje.jpg', '2023-08-01 00:35:28', '2023-08-01 00:35:28'),
(31, 25, 'uploads/P8KEudK5SLvm5SfRbGUDAWzylIe8NYbSxtQSWUNt.jpg', '2023-08-01 00:36:37', '2023-08-01 00:36:37'),
(32, 26, 'uploads/FvOskJc9bb1pPyloqZw9EmtA20NUBouEOF2ya4eC.jpg', '2023-08-01 00:37:18', '2023-08-01 00:37:18'),
(33, 27, 'uploads/eOmNukAfffuxwNt4rIVlMke3iHdZg6Snz1Anlv0R.jpg', '2023-08-01 00:38:02', '2023-08-01 00:38:02'),
(34, 28, 'uploads/gctUlpQJOLrel25liFmAGf7klwcg0TobXfwSAvU9.jpg', '2023-08-01 00:39:51', '2023-08-01 00:39:51'),
(35, 29, 'uploads/uNdlJYJesRgzi2u3q0htnmb6y2lMNgcqYTHZ9ZlK.jpg', '2023-08-01 00:40:57', '2023-08-01 00:40:57'),
(36, 30, 'uploads/NxKtuVAGyXCfHVrIiGUOSHb35WcqJslU2nsB0wGQ.jpg', '2023-08-01 00:41:53', '2023-08-01 00:41:53'),
(37, 31, 'uploads/KBfGhHUT7Z8qp8MOgY5TbnJK8WwSsF8nDFcE8blo.jpg', '2023-08-01 00:42:45', '2023-08-01 00:42:45'),
(38, 32, 'uploads/hNmGJznTx3ytEUEeyxR1tgdhJUFqJdR68UuS6WFH.png', '2023-08-01 00:43:34', '2023-08-01 00:43:34'),
(39, 33, 'uploads/fzYkunDsgRdxbAcuWv1rwDhOElsQeKSCRXHQNQpT.jpg', '2023-08-01 00:44:46', '2023-08-01 00:44:46');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `price` double(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `name`, `unit`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Potato', 'Gram', 40, 10.00, NULL, NULL),
(2, 'Flour', 'Gram', 100, 5000.00, NULL, NULL),
(3, 'Egg', 'Ps', 100, 2000.00, NULL, NULL),
(4, 'Rice', 'Kg', 100, 40000.00, NULL, NULL),
(5, 'Noodles', 'ps', 100, 30000.00, NULL, NULL),
(6, 'Ginger', 'Gram', 100, 5000.00, NULL, NULL),
(7, 'Garlic', 'Gram', 100, 30000.00, NULL, NULL),
(8, 'Tomato', 'Gram', 100, 5000.00, NULL, NULL),
(9, 'Turmeric Powder', 'Gram', 100, 30000.00, NULL, NULL),
(10, 'Chilli Powder', 'Gram', 100, 3000.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `material_details`
--

CREATE TABLE `material_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `material_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mealperiods`
--

CREATE TABLE `mealperiods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mealperiods`
--

INSERT INTO `mealperiods` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Lunch', NULL, NULL),
(2, 'Brunch', NULL, NULL),
(3, 'Dinner', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `discount` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `active` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `featured` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `category_id`, `subcategory_id`, `name`, `details`, `price`, `quantity`, `discount`, `active`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(5, 2, 2, 'THAI CHICKEN CASHEW NUT SALAD', 'Warm fried cube cut chicken, roasted cashew nut, tomato, onion, coriander & spicy sauce', 670.00, 20, 0, 1, 1, 0, '2023-07-31 03:52:10', '2023-07-31 03:52:10'),
(6, 2, 2, 'THAI GRILLED CHICKEN SALAD', 'Grilled boneless chicken, carrot, coriander, onion, tomato & spices', 655.00, 20, 0, 1, 1, 0, '2023-07-31 03:52:59', '2023-07-31 03:52:59'),
(7, 2, 2, 'THAI SHRIMPS SALAD', 'Shrimp, onion, lemon grass, ginger, red chili flakes & roasted ground rice', 775.00, 20, 0, 1, 1, 0, '2023-07-31 03:54:17', '2023-07-31 03:54:17'),
(8, 2, 2, 'Classic Prawn Cocktail', 'Minced Tuna fish cooked with spices, egg , flour and served .', 775.00, 20, 0, 1, 1, 0, '2023-07-31 03:55:27', '2023-07-31 03:55:27'),
(9, 2, 2, 'THAI SHRIMPS ROLL', 'Crispy wrap filled with spiced shrimp', 775.00, 20, 0, 1, 1, 0, '2023-07-31 03:57:50', '2023-07-31 03:57:50'),
(12, 4, 4, 'THAI MIXED VEGETABLE WITH CHICKEN OR PRAWN', 'Seasonal mixed vegetable cooked with chicken slices & prawn served with capsicum,brocoli and so more.', 610.00, 20, 0, 1, 1, 0, '2023-08-01 00:16:18', '2023-08-01 00:16:18'),
(13, 4, 4, 'THAI MIXED VEGETABLE', 'Sauté mixed seasonal vegetable cooked with mushroom & baby corn', 610.00, 20, 0, 1, 1, 0, '2023-08-01 00:17:06', '2023-08-01 00:17:06'),
(14, 4, 4, 'PRAWN WITH VEGETABLE', 'Seasonal fresh vegetable prepared with prawn and regular vegetables', 580.00, 20, 0, 1, 1, 0, '2023-08-01 00:20:32', '2023-08-01 00:20:32'),
(15, 4, 4, 'STEAMED BROCCOLI', 'Steamed broccoli with butter & garlic sauté for healthy eater serve with butter and pepper and white sauce.', 580.00, 20, 0, 1, 1, 0, '2023-08-01 00:21:48', '2023-08-01 00:21:48'),
(16, 4, 4, 'FISH WITH VEGETABLE', 'Seasonal fresh vegetable with sliced fish.Sauté mixed seasonal vegetable cooked with mushroom & baby corn', 555.00, 20, 0, 1, 1, 0, '2023-08-01 00:23:09', '2023-08-01 00:23:09'),
(17, 4, 3, 'THAI FRIED RED SNAPPER', 'Fried red snapper prepared with capsicum, carrot, onion leaves & hot chili sauce Fried red snapper prepared with capsicum, carrot, onion leaves & hot.', 1800.00, 20, 0, 1, 1, 0, '2023-08-01 00:24:39', '2023-08-01 00:24:39'),
(18, 4, 3, 'CHAR GRILLED KING FISH', 'Fried red snapper prepared with capsicum, carrot, onion leaves & hot chili sauce.Fried red snapper prepared with capsicum, carrot, onion leaves & hot chili sauce', 920.00, 20, 0, 1, 1, 0, '2023-08-01 00:25:53', '2023-08-01 00:25:53'),
(19, 4, 3, 'SLICED FISH WITH MUSHROOM', 'Sliced sea fish prepared with capsicum, onion, mushroom, & ginger.Sliced sea fish prepared with capsicum, onion, mushroom, & ginger.', 995.00, 20, 0, 1, 1, 0, '2023-08-01 00:27:03', '2023-08-01 00:27:03'),
(20, 4, 3, 'FRIED FISH & OYSTER SAUCE', 'Battered fish cooked with garlic & oyster sauce.Battered fish cooked with garlic & oyster sauce', 865.00, 20, 0, 1, 1, 0, '2023-08-01 00:28:02', '2023-08-01 00:28:02'),
(21, 4, 3, 'Garlic Butter Cod', 'Garlic Butter Cod with Lemon Asparagus Skillet – Healthy, tasty, simple and quick to cook, this cod and asparagus skillet.', 1200.00, 20, 0, 1, 1, 0, '2023-08-01 00:29:49', '2023-08-01 00:29:49'),
(22, 4, 5, 'TOYO FRIED RICE', 'The toyo or soy sauce fried rice that you would want to try, with ingredients that are easily available.The toyo or soy sauce fried rice that you would want to try, with ingredients that are easily available.', 810.00, 20, 0, 1, 1, 0, '2023-08-01 00:31:26', '2023-08-01 00:31:26'),
(23, 4, 5, 'EGG FRIED RICE', 'The toyo or soy sauce fried rice that you would want to try, with ingredients that are easily available served with egg and vegitables.', 350.00, 20, 0, 1, 1, 0, '2023-08-01 00:34:06', '2023-08-01 00:34:06'),
(24, 4, 5, 'SPACIAL EGG FRIED RICE', 'Minced Tuna fish cooked with spices, egg , flour and served ..The toyo or soy sauce fried rice that you would want to try, with ingredients that are easily available.', 650.00, 20, 0, 1, 1, 0, '2023-08-01 00:35:28', '2023-08-01 00:35:28'),
(25, 4, 5, 'THAI SPECIAL FRIED RICE', 'Aromatic rice prepared with sliced chicken, prawn, egg, vegetable, butter oil & sauce.Aromatic rice prepared with sliced chicken, prawn, egg, vegetable, butter oil & sauce.', 550.00, 20, 0, 1, 1, 0, '2023-08-01 00:36:37', '2023-08-01 00:36:37'),
(26, 4, 5, 'AMERICAN FRIED RICE', 'Special rice & cashew nut cooked with butter, sliced chicken, raisin & spicy sauce.Special rice & cashew nut cooked with butter, sliced chicken, raisin & spicy sauce', 655.00, 20, 0, 1, 1, 0, '2023-08-01 00:37:18', '2023-08-01 00:37:18'),
(27, 4, 5, 'THAI VEGETABLE FRIED RICE', 'Spiced mixed rice cooked with seasonal vegetable & butter oil.Spiced mixed rice cooked with seasonal vegetable & butter oil.', 525.00, 20, 0, 1, 1, 0, '2023-08-01 00:38:01', '2023-08-01 00:38:01'),
(28, 2, 2, 'Shrimps Orange & Apple Salad', 'Shrimp, onion, lemon grass, ginger, red chili flakes & roasted ground rice', 685.00, 20, 0, 1, 1, 0, '2023-08-01 00:39:51', '2023-08-01 00:39:51'),
(29, 1, 1, 'CHICKEN VEGETABLE SOUP', 'Sliced chicken prepared with seasonal mixed vegetable.Sliced chicken prepared with seasonal mixed vegetable', 540.00, 20, 0, 1, 1, 0, '2023-08-01 00:40:57', '2023-08-01 00:40:57'),
(30, 1, 1, 'CHICKEN CORN SOUP', 'Mild taste soup cooked with minced chicken, sweet corn & egg.Mild taste soup cooked with minced chicken, sweet corn & egg', 550.00, 20, 0, 1, 1, 0, '2023-08-01 00:41:52', '2023-08-01 00:41:52'),
(31, 1, 1, 'SPECIAL THAI SOUP THICK', 'Sliced chicken & prawn cooked with mushroom, fried onion and chili tomato puree', 735.00, 20, 0, 1, 1, 0, '2023-08-01 00:42:45', '2023-08-01 00:42:45'),
(32, 1, 1, 'STEAMBOAT SOUP', 'Boneless sliced chicken, prawn, sea fish, and egg boiled with vermeil noodles & seasonal veggies', 1760.00, 20, 0, 1, 1, 0, '2023-08-01 00:43:34', '2023-08-01 00:43:34'),
(33, 1, 1, 'CHICKEN NOODLE SOUP', 'Sliced chicken & noodles prepared with saucy vegetable.Sliced chicken & noodles prepared with saucy vegetable.', 665.00, 20, 0, 1, 1, 0, '2023-08-01 00:44:46', '2023-08-01 00:44:46');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_19_044000_create_categories_table', 1),
(6, '2023_07_19_045246_create_subcategories_table', 1),
(7, '2023_07_19_052417_create_menus_table', 1),
(8, '2023_07_19_052524_create_images_table', 1),
(9, '2023_07_21_092917_create_mealperiods_table', 1),
(10, '2023_07_22_152238_create_statuses_table', 1),
(11, '2023_07_22_155251_create_reservations_table', 1),
(12, '2023_07_24_044221_create_cusers_table', 1),
(19, '2023_07_25_142036_create_tabs_table', 2),
(20, '2023_07_25_142244_create_off_orders_table', 2),
(21, '2023_07_25_142256_create_off_order_details_table', 2),
(27, '2023_08_02_124124_create_orders_table', 3),
(28, '2023_08_02_124133_create_order_details_table', 3),
(34, '2023_08_05_113246_create_materials_table', 4),
(35, '2023_08_05_113434_create_material_details_table', 4),
(36, '2023_08_13_052754_create_suppliers_table', 4),
(37, '2023_08_13_052922_create_purches_table', 4),
(38, '2023_08_13_052945_create_purches_details_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `off_orders`
--

CREATE TABLE `off_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tab_id` bigint(20) UNSIGNED NOT NULL,
  `total` double(10,2) NOT NULL,
  `active` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `off_orders`
--

INSERT INTO `off_orders` (`id`, `tab_id`, `total`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 670.00, 0, '2023-07-31 06:29:56', '2023-07-31 07:00:18'),
(2, 1, 670.00, 0, '2023-07-31 06:29:59', '2023-07-31 08:47:20'),
(3, 2, 670.00, 1, '2023-07-31 06:30:15', '2023-07-31 06:30:15'),
(4, 2, 3453.00, 1, '2023-07-31 06:32:13', '2023-07-31 06:32:13'),
(5, 1, 3453.00, 1, '2023-07-31 06:33:27', '2023-07-31 06:33:27'),
(6, 1, 3453.00, 1, '2023-07-31 06:35:15', '2023-07-31 06:35:15'),
(7, 2, 4545.00, 1, '2023-07-31 06:39:07', '2023-07-31 06:39:07'),
(8, 2, 2325.00, 1, '2023-07-31 06:39:36', '2023-07-31 06:39:36'),
(9, 4, 9231.00, 1, '2023-07-31 06:39:54', '2023-07-31 06:39:54'),
(10, 1, 2325.00, 1, '2023-07-31 06:40:14', '2023-07-31 06:40:14'),
(11, 2, 1430.00, 1, '2023-07-31 06:40:36', '2023-07-31 06:40:36'),
(12, 1, 2010.00, 0, '2023-07-31 06:41:01', '2023-08-05 05:04:35'),
(13, 2, 1550.00, 0, '2023-08-01 12:13:09', '2023-08-01 12:14:00'),
(14, 2, 1340.00, 0, '2023-08-02 00:21:39', '2023-08-02 00:25:07'),
(15, 2, 2785.00, 0, '2023-08-02 00:36:37', '2023-08-02 00:37:07'),
(16, 3, 2220.00, 0, '2023-08-05 05:02:46', '2023-08-05 05:03:36');

-- --------------------------------------------------------

--
-- Table structure for table `off_order_details`
--

CREATE TABLE `off_order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `off_order_id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `off_order_details`
--

INSERT INTO `off_order_details` (`id`, `off_order_id`, `menu_id`, `quantity`, `created_at`, `updated_at`) VALUES
(2, 7, 5, 1, NULL, NULL),
(3, 7, 7, 5, NULL, NULL),
(4, 8, 8, 3, NULL, NULL),
(5, 9, 8, 3, NULL, NULL),
(8, 10, 9, 2, NULL, NULL),
(9, 10, 8, 1, NULL, NULL),
(10, 11, 6, 1, NULL, NULL),
(11, 11, 7, 1, NULL, NULL),
(12, 12, 5, 3, NULL, NULL),
(13, 13, 7, 1, NULL, NULL),
(14, 13, 8, 1, NULL, NULL),
(15, 14, 5, 2, NULL, NULL),
(16, 15, 5, 3, NULL, NULL),
(17, 15, 9, 1, NULL, NULL),
(18, 16, 5, 1, NULL, NULL),
(19, 16, 8, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `billing_address` varchar(255) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `total` double(10,2) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `billing_address`, `shipping_address`, `total`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'ghg', 'ghg', 500.00, 'gfhgs', NULL, '2023-08-03 05:59:45', '2023-08-03 05:59:45'),
(2, 2, 'fgheghe', 'ghegheth', 500.00, 'rthrhrth', NULL, '2023-08-03 06:06:17', '2023-08-03 06:06:17'),
(3, 2, 'bdgh', 'dghh', 500.00, 'sghgh', NULL, '2023-08-03 06:06:51', '2023-08-03 06:06:51'),
(4, 2, 'ghet', 'thjhmfhj', 500.00, 'dnghnhdgj', NULL, '2023-08-03 06:11:58', '2023-08-03 06:11:58'),
(5, 2, 'hsfgh', 'vfjhjgkfuyk', 500.00, 'nfgjfyjf', NULL, '2023-08-03 06:12:54', '2023-08-03 06:12:54'),
(6, 2, 'gcfthdcfj', 'ygfuyfyujf', 500.00, 'utgiutgiu', NULL, '2023-08-03 06:14:58', '2023-08-03 06:14:58'),
(7, 2, 'cbn', 'nxfggnf', 500.00, 'fgnxffx', NULL, '2023-08-03 06:16:25', '2023-08-03 06:16:25'),
(8, 2, 'vds', 'svsdv', 500.00, 'vsdsdv', NULL, '2023-08-05 03:41:57', '2023-08-05 03:41:57'),
(9, 2, 'Ashuliya', 'Ashuliya', 500.00, 'Hi ruma....', NULL, '2023-08-05 05:06:16', '2023-08-05 05:06:16'),
(10, 2, 'Mirpur 06', 'Mirpur 6', 500.00, 'hi thfh ghfjgfv', NULL, '2023-08-06 02:43:51', '2023-08-06 02:43:51'),
(11, 2, 'Mirpur 06', 'Mirpur 6', 500.00, 'hi thfh ghfjgfv', NULL, '2023-08-06 03:05:47', '2023-08-06 03:05:47');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `menu_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 3, 6, 1, NULL, NULL),
(2, 3, 7, 1, NULL, NULL),
(3, 3, 5, 1, NULL, NULL),
(4, 3, 6, 1, NULL, NULL),
(5, 3, 9, 1, NULL, NULL),
(6, 4, 6, 1, NULL, NULL),
(7, 4, 7, 1, NULL, NULL),
(8, 4, 5, 1, NULL, NULL),
(9, 4, 6, 1, NULL, NULL),
(10, 4, 9, 1, NULL, NULL),
(11, 5, 6, 1, NULL, NULL),
(12, 5, 7, 1, NULL, NULL),
(13, 5, 5, 1, NULL, NULL),
(14, 5, 6, 1, NULL, NULL),
(15, 5, 9, 1, NULL, NULL),
(16, 6, 6, 1, NULL, NULL),
(17, 6, 7, 1, NULL, NULL),
(18, 6, 5, 1, NULL, NULL),
(19, 6, 6, 1, NULL, NULL),
(20, 6, 9, 1, NULL, NULL),
(21, 7, 6, 1, NULL, NULL),
(22, 7, 7, 1, NULL, NULL),
(23, 7, 5, 1, NULL, NULL),
(24, 7, 6, 1, NULL, NULL),
(25, 7, 9, 1, NULL, NULL),
(26, 8, 6, 1, NULL, NULL),
(27, 8, 7, 1, NULL, NULL),
(28, 8, 5, 1, NULL, NULL),
(29, 8, 6, 1, NULL, NULL),
(30, 8, 9, 1, NULL, NULL),
(31, 9, 6, 1, NULL, NULL),
(32, 9, 7, 1, NULL, NULL),
(33, 9, 8, 1, NULL, NULL),
(34, 9, 12, 1, NULL, NULL),
(35, 10, 6, 1, NULL, NULL),
(36, 10, 7, 1, NULL, NULL);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purches`
--

CREATE TABLE `purches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `total` double(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purches_details`
--

CREATE TABLE `purches_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purches_id` bigint(20) UNSIGNED NOT NULL,
  `material_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `mealperiod_id` bigint(20) UNSIGNED NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `person` int(10) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `user_id`, `mealperiod_id`, `status_id`, `person`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 2, '2023-08-04', '2023-08-02 00:24:10', '2023-08-02 00:24:10'),
(2, 1, 1, 1, 2, '2023-08-05', '2023-08-02 00:35:50', '2023-08-02 00:35:50'),
(3, 2, 3, 1, 3, '2023-08-11', '2023-08-05 04:42:29', '2023-08-05 04:42:29'),
(4, 3, 2, 1, 5, '2023-08-10', '2023-08-05 04:43:52', '2023-08-05 04:43:52'),
(5, 4, 1, 1, 4, '2023-08-24', '2023-08-05 05:00:42', '2023-08-05 05:00:42'),
(6, 2, 1, 1, 5, '2023-08-12', '2023-08-05 05:29:28', '2023-08-05 05:29:28');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Reserved', NULL, NULL),
(2, 'Check-in', NULL, NULL),
(3, 'Cancel', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `images`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Thai Soup', 'uploads/DFFwVqzPguQYDq26y9hnqKpqvPfEz4enbVnULSgL.jpg', 1, '2023-07-25 07:23:40', '2023-07-25 07:23:40'),
(2, 'Starter', 'uploads/0ZToAGMZN1KXETtIrrycAVvPz301Esw8FJ4Z6zXv.jpg', 2, '2023-07-31 03:51:12', '2023-07-31 03:51:12'),
(3, 'Fish', 'uploads/AnkNZUrObtnxJl56vEQszDQ1Tlw5DZMJDZgPMliz.jpg', 4, '2023-08-01 00:04:22', '2023-08-01 00:04:22'),
(4, 'Vegetable', 'uploads/K8jGzfSDxN1luJZl6gtHkCmcwLYE4ruOiU6HRfS8.jpg', 4, '2023-08-01 00:05:14', '2023-08-01 00:05:14'),
(5, 'Rice', 'uploads/6l3HSwYVlW7jYXLPhsRVquNSp204BUFSHgwrGPPa.jpg', 4, '2023-08-01 00:05:47', '2023-08-01 00:05:47'),
(6, 'Ramen', 'uploads/CsC0R2HcFexThKTNnEqkCn1RDXrqx49bHaey0Daf.jpg', 5, '2023-08-01 00:09:05', '2023-08-01 00:09:05'),
(7, 'Korean Spicy', 'uploads/ywyNgw7GcMoDUpAVKA84lyc0fDFacHNMpymXapLG.webp', 5, '2023-08-01 00:09:40', '2023-08-01 00:09:40');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Fahima Akhter', 'fahima@gmail.com', NULL, NULL),
(2, 'Rakib Hasan', 'rakib@gmail.com', NULL, NULL),
(3, 'Sabrina Parveen', 'sabrina@gmail.com', NULL, NULL),
(4, 'Samia Rahman', 'samia@gmail.com', NULL, NULL),
(5, 'Faysal Azan', 'faysal@gmail.com', NULL, NULL),
(6, 'Karim Rahmat', 'karim@gmail.com', NULL, NULL),
(7, 'Sadia Rahman', 'sadia@gmail.com', '2023-08-13 01:27:25', '2023-08-13 01:27:25');

-- --------------------------------------------------------

--
-- Table structure for table `tabs`
--

CREATE TABLE `tabs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `capacity` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tabs`
--

INSERT INTO `tabs` (`id`, `name`, `capacity`, `created_at`, `updated_at`) VALUES
(1, 'A-01', 2, NULL, NULL),
(2, 'A-02', 2, NULL, NULL),
(3, 'B-01', 4, NULL, NULL),
(4, 'B-02', 4, NULL, NULL);

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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$tqZFfEXlKHdS24Ms9CYK9Og/tV3QyiMA7A5sPcvdtDIZh7kr3Bhva', NULL, '2023-07-25 07:23:04', '2023-07-25 07:23:04'),
(2, 'ishrat', 'ishrat@gmail.com', NULL, '$2y$10$3a8Vc5ed/P3XO6tNe7CDkuN/FHhlYYH1BEdUGVyBakiPGbDdLaDtq', NULL, '2023-08-02 00:22:18', '2023-08-02 00:22:18'),
(3, 'nabil', 'nabil@gmail.com', NULL, '$2y$10$G2c29xfbrrjzqG06s0x2/.tiLDi8QV/lR52CfqC6EWOq27MwXTJfq', NULL, '2023-08-02 00:22:32', '2023-08-02 00:22:32'),
(4, 'asif', 'asif@gmail.com', NULL, '$2y$10$Tyay61SYXtrl5WxCXk4pgu1dyVxb/.6eW8dPcFDSGvcJvaGyiPDdi', NULL, '2023-08-02 00:24:24', '2023-08-02 00:24:24'),
(5, 'arif', 'arif@gmail.com', NULL, '$2y$10$s4205iNUpHI3LKkZfOdlPOuOb66X2CWtUFjwKTf5N60Nbao4cqK9a', NULL, '2023-08-02 00:24:45', '2023-08-02 00:24:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cusers`
--
ALTER TABLE `cusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material_details`
--
ALTER TABLE `material_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `material_details_menu_id_foreign` (`menu_id`),
  ADD KEY `material_details_material_id_foreign` (`material_id`);

--
-- Indexes for table `mealperiods`
--
ALTER TABLE `mealperiods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_category_id_foreign` (`category_id`),
  ADD KEY `menus_subcategory_id_foreign` (`subcategory_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `off_orders`
--
ALTER TABLE `off_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `off_orders_tab_id_foreign` (`tab_id`);

--
-- Indexes for table `off_order_details`
--
ALTER TABLE `off_order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `off_order_details_off_order_id_foreign` (`off_order_id`),
  ADD KEY `off_order_details_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `purches`
--
ALTER TABLE `purches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purches_supplier_id_foreign` (`supplier_id`);

--
-- Indexes for table `purches_details`
--
ALTER TABLE `purches_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purches_details_purches_id_foreign` (`purches_id`),
  ADD KEY `purches_details_material_id_foreign` (`material_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_user_id_foreign` (`user_id`),
  ADD KEY `reservations_mealperiod_id_foreign` (`mealperiod_id`),
  ADD KEY `reservations_status_id_foreign` (`status_id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabs`
--
ALTER TABLE `tabs`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cusers`
--
ALTER TABLE `cusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `material_details`
--
ALTER TABLE `material_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mealperiods`
--
ALTER TABLE `mealperiods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `off_orders`
--
ALTER TABLE `off_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `off_order_details`
--
ALTER TABLE `off_order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purches`
--
ALTER TABLE `purches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purches_details`
--
ALTER TABLE `purches_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tabs`
--
ALTER TABLE `tabs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `material_details`
--
ALTER TABLE `material_details`
  ADD CONSTRAINT `material_details_material_id_foreign` FOREIGN KEY (`material_id`) REFERENCES `materials` (`id`),
  ADD CONSTRAINT `material_details_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`);

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `menus_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`);

--
-- Constraints for table `off_orders`
--
ALTER TABLE `off_orders`
  ADD CONSTRAINT `off_orders_tab_id_foreign` FOREIGN KEY (`tab_id`) REFERENCES `tabs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `off_order_details`
--
ALTER TABLE `off_order_details`
  ADD CONSTRAINT `off_order_details_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `off_order_details_off_order_id_foreign` FOREIGN KEY (`off_order_id`) REFERENCES `off_orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `purches`
--
ALTER TABLE `purches`
  ADD CONSTRAINT `purches_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`);

--
-- Constraints for table `purches_details`
--
ALTER TABLE `purches_details`
  ADD CONSTRAINT `purches_details_material_id_foreign` FOREIGN KEY (`material_id`) REFERENCES `materials` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `purches_details_purches_id_foreign` FOREIGN KEY (`purches_id`) REFERENCES `purches` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_mealperiod_id_foreign` FOREIGN KEY (`mealperiod_id`) REFERENCES `mealperiods` (`id`),
  ADD CONSTRAINT `reservations_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`),
  ADD CONSTRAINT `reservations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
