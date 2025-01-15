-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 27, 2023 at 01:53 PM
-- Server version: 5.7.23-23
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vardhdd5_root`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_url1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `territory` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `landmark` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_of_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `super_admin` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `image_url`, `super_admin`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$qWx.R/tK8RMJVP1EaF.5wuhS/joVZ7Ywzw5aD1z1or6GvaD9kz3rK', NULL, 1, 1, NULL, '2022-03-16 00:19:11', '2022-03-16 00:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `bulk_orders`
--

CREATE TABLE `bulk_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_offer_sliders`
--

CREATE TABLE `home_offer_sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_index` int(11) DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_offer_sliders`
--

INSERT INTO `home_offer_sliders` (`id`, `image_url`, `title`, `sort_index`, `url`, `status`, `created_at`, `updated_at`) VALUES
(2, '628b96eae2c43.jpg', NULL, 1, NULL, 1, '2022-05-23 19:45:06', '2022-05-23 19:45:06'),
(3, '628b9ac3cf32d.jpg', NULL, 2, NULL, 1, '2022-05-23 20:01:31', '2022-05-23 20:01:31');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `map_color_sizes`
--

CREATE TABLE `map_color_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `color_id` bigint(20) UNSIGNED DEFAULT NULL,
  `size_id` bigint(20) UNSIGNED DEFAULT NULL,
  `mrp` double NOT NULL,
  `stock` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `sort_index` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gst` int(11) DEFAULT '0',
  `starting_price` double(8,2) DEFAULT NULL,
  `buy_it_now_price` double(8,2) DEFAULT NULL,
  `discount_price` double(8,2) DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `map_color_sizes`
--

INSERT INTO `map_color_sizes` (`id`, `product_id`, `color_id`, `size_id`, `mrp`, `stock`, `status`, `sort_index`, `created_at`, `updated_at`, `gst`, `starting_price`, `buy_it_now_price`, `discount_price`) VALUES
(15650, 15454, 12, 13, 999, 100, 1, 1, '2022-06-17 15:01:42', '2022-06-17 15:01:42', 152, 1995.00, 847.00, 0.00),
(15651, 15454, 12, 14, 999, 100, 1, 1, '2022-06-17 15:01:42', '2022-06-17 15:01:42', 152, 1995.00, 847.00, 0.00),
(15652, 15454, 12, 15, 999, 100, 1, 1, '2022-06-17 15:01:42', '2022-06-17 15:01:42', 152, 1995.00, 847.00, 0.00),
(15653, 15454, 12, 19, 999, 100, 1, 1, '2022-06-17 15:01:42', '2022-06-17 15:01:42', 152, 1995.00, 847.00, 0.00),
(15654, 15454, 12, 20, 999, 100, 1, 1, '2022-06-17 15:01:42', '2022-06-17 15:01:42', 152, 1995.00, 847.00, 0.00),
(15655, 15454, 12, 21, 999, 100, 1, 1, '2022-06-17 15:01:42', '2022-06-17 15:01:42', 152, 1995.00, 847.00, 0.00),
(15656, 15455, 4, 13, 999, 100, 1, 1, '2022-06-17 15:02:52', '2022-06-17 15:02:52', 152, 1995.00, 847.00, 0.00),
(15657, 15455, 4, 14, 999, 100, 1, 1, '2022-06-17 15:02:52', '2022-06-17 15:02:52', 152, 1995.00, 847.00, 0.00),
(15658, 15455, 4, 15, 999, 100, 1, 1, '2022-06-17 15:02:52', '2022-06-17 15:02:52', 152, 1995.00, 847.00, 0.00),
(15659, 15455, 4, 19, 999, 100, 1, 1, '2022-06-17 15:02:52', '2022-06-17 15:02:52', 152, 1995.00, 847.00, 0.00),
(15660, 15455, 4, 20, 999, 100, 1, 1, '2022-06-17 15:02:52', '2022-06-17 15:02:52', 152, 1995.00, 847.00, 0.00),
(15661, 15455, 4, 21, 999, 100, 1, 1, '2022-06-17 15:02:52', '2022-06-17 15:02:52', 152, 1995.00, 847.00, 0.00),
(15674, 15457, 20, 13, 999, 100, 1, 1, '2022-06-17 15:14:13', '2022-06-17 15:14:13', 152, 1995.00, 847.00, 0.00),
(15675, 15457, 20, 14, 999, 100, 1, 1, '2022-06-17 15:14:13', '2022-06-17 15:14:13', 152, 1995.00, 847.00, 0.00),
(15676, 15457, 20, 15, 999, 100, 1, 1, '2022-06-17 15:14:13', '2022-06-17 15:14:13', 152, 1995.00, 847.00, 0.00),
(15677, 15457, 20, 19, 999, 100, 1, 1, '2022-06-17 15:14:13', '2022-06-17 15:14:13', 152, 1995.00, 847.00, 0.00),
(15678, 15457, 20, 20, 999, 100, 1, 1, '2022-06-17 15:14:13', '2022-06-17 15:14:13', 152, 1995.00, 847.00, 0.00),
(15679, 15457, 20, 21, 999, 100, 1, 1, '2022-06-17 15:14:13', '2022-06-17 15:14:13', 152, 1995.00, 847.00, 0.00),
(15680, 15458, 1, 13, 999, 100, 1, 1, '2022-06-17 15:29:25', '2022-06-17 15:29:25', 152, 1995.00, 847.00, 0.00),
(15681, 15458, 1, 14, 999, 100, 1, 1, '2022-06-17 15:29:25', '2022-06-17 15:29:25', 152, 1995.00, 847.00, 0.00),
(15682, 15458, 1, 15, 999, 100, 1, 1, '2022-06-17 15:29:26', '2022-06-17 15:29:26', 152, 1995.00, 847.00, 0.00),
(15683, 15458, 1, 19, 999, 100, 1, 1, '2022-06-17 15:29:26', '2022-06-17 15:29:26', 152, 1995.00, 847.00, 0.00),
(15684, 15458, 1, 20, 999, 100, 1, 1, '2022-06-17 15:29:26', '2022-06-17 15:29:26', 152, 1995.00, 847.00, 0.00),
(15685, 15458, 1, 21, 999, 100, 1, 1, '2022-06-17 15:29:26', '2022-06-17 15:29:26', 152, 1995.00, 847.00, 0.00),
(15686, 15459, 1, 13, 999, 100, 1, 1, '2022-06-17 15:36:21', '2022-06-17 15:36:21', 152, 1995.00, 847.00, 0.00),
(15687, 15459, 1, 14, 999, 100, 1, 1, '2022-06-17 15:36:21', '2022-06-17 15:36:21', 152, 1995.00, 847.00, 0.00),
(15688, 15459, 1, 15, 999, 100, 1, 1, '2022-06-17 15:36:21', '2022-06-17 15:36:21', 152, 1995.00, 847.00, 0.00),
(15689, 15459, 1, 19, 999, 100, 1, 1, '2022-06-17 15:36:21', '2022-06-17 15:36:21', 152, 1995.00, 847.00, 0.00),
(15690, 15459, 1, 20, 999, 100, 1, 1, '2022-06-17 15:36:21', '2022-06-17 15:36:21', 152, 1995.00, 847.00, 0.00),
(15691, 15459, 1, 21, 999, 100, 1, 1, '2022-06-17 15:36:21', '2022-06-17 15:36:21', 152, 1995.00, 847.00, 0.00),
(15710, 15461, 14, 13, 999, 100, 1, 1, '2022-06-17 15:44:17', '2022-06-17 15:44:17', 152, 1995.00, 847.00, 0.00),
(15711, 15461, 14, 14, 999, 100, 1, 1, '2022-06-17 15:44:17', '2022-06-17 15:44:17', 152, 1995.00, 847.00, 0.00),
(15712, 15461, 14, 15, 999, 100, 1, 1, '2022-06-17 15:44:17', '2022-06-17 15:44:17', 152, 1995.00, 847.00, 0.00),
(15713, 15461, 14, 19, 999, 100, 1, 1, '2022-06-17 15:44:17', '2022-06-17 15:44:17', 152, 1995.00, 847.00, 0.00),
(15714, 15461, 14, 20, 999, 100, 1, 1, '2022-06-17 15:44:17', '2022-06-17 15:44:17', 152, 1995.00, 847.00, 0.00),
(15715, 15461, 14, 21, 999, 100, 1, 1, '2022-06-17 15:44:17', '2022-06-17 15:44:17', 152, 1995.00, 847.00, 0.00),
(15716, 15462, 1, 13, 999, 100, 1, 1, '2022-06-17 15:55:59', '2022-06-17 15:55:59', 152, 1995.00, 847.00, 0.00),
(15717, 15462, 1, 14, 999, 100, 1, 1, '2022-06-17 15:55:59', '2022-06-17 15:55:59', 152, 1995.00, 847.00, 0.00),
(15718, 15462, 1, 15, 999, 100, 1, 1, '2022-06-17 15:55:59', '2022-06-17 15:55:59', 152, 1995.00, 847.00, 0.00),
(15719, 15462, 1, 19, 999, 100, 1, 1, '2022-06-17 15:55:59', '2022-06-17 15:55:59', 152, 1995.00, 847.00, 0.00),
(15720, 15462, 1, 20, 999, 100, 1, 1, '2022-06-17 15:55:59', '2022-06-17 15:55:59', 152, 1995.00, 847.00, 0.00),
(15721, 15462, 1, 21, 999, 100, 1, 1, '2022-06-17 15:55:59', '2022-06-17 15:55:59', 152, 1995.00, 847.00, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `map_mst_offer_products`
--

CREATE TABLE `map_mst_offer_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `offer_product_id` int(10) UNSIGNED DEFAULT NULL,
  `color_id` bigint(20) UNSIGNED DEFAULT NULL,
  `size_id` bigint(20) UNSIGNED DEFAULT NULL,
  `offer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `map_offer_products`
--

CREATE TABLE `map_offer_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `mst_offer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `map_offer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `purchase_quantity` int(11) DEFAULT NULL,
  `offered_quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `map_offer_products`
--

INSERT INTO `map_offer_products` (`id`, `product_id`, `mst_offer_id`, `map_offer_id`, `purchase_quantity`, `offered_quantity`, `created_at`, `updated_at`) VALUES
(71, 15454, NULL, NULL, NULL, NULL, '2022-06-17 15:03:12', '2022-06-17 15:03:12'),
(72, 15455, NULL, NULL, NULL, NULL, '2022-06-17 15:03:28', '2022-06-17 15:03:28'),
(74, 15457, NULL, NULL, NULL, NULL, '2022-06-17 15:29:58', '2022-06-17 15:29:58'),
(75, 15458, NULL, NULL, NULL, NULL, '2022-06-17 15:30:08', '2022-06-17 15:30:08'),
(76, 15459, NULL, NULL, NULL, NULL, '2022-06-17 15:36:58', '2022-06-17 15:36:58'),
(77, 15461, NULL, NULL, NULL, NULL, '2022-06-17 15:57:17', '2022-06-17 15:57:17'),
(78, 15462, NULL, NULL, NULL, NULL, '2022-06-17 15:57:29', '2022-06-17 15:57:29');

-- --------------------------------------------------------

--
-- Table structure for table `map_product_mst_sizes`
--

CREATE TABLE `map_product_mst_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `size_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `map_product_mst_sizes`
--

INSERT INTO `map_product_mst_sizes` (`id`, `title`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(15614, '6', 15454, 13, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(15615, '7', 15454, 14, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(15616, '8', 15454, 15, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(15617, '9', 15454, 19, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(15618, '10', 15454, 20, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(15619, '11', 15454, 21, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(15620, '6', 15455, 13, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(15621, '7', 15455, 14, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(15622, '8', 15455, 15, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(15623, '9', 15455, 19, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(15624, '10', 15455, 20, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(15625, '11', 15455, 21, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(15632, '6', 15457, 13, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(15633, '7', 15457, 14, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(15634, '8', 15457, 15, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(15635, '9', 15457, 19, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(15636, '10', 15457, 20, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(15637, '11', 15457, 21, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(15638, '6', 15458, 13, '2022-06-17 15:29:25', '2022-06-17 15:29:25'),
(15639, '7', 15458, 14, '2022-06-17 15:29:25', '2022-06-17 15:29:25'),
(15640, '8', 15458, 15, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(15641, '9', 15458, 19, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(15642, '10', 15458, 20, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(15643, '11', 15458, 21, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(15644, '6', 15459, 13, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(15645, '7', 15459, 14, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(15646, '8', 15459, 15, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(15647, '9', 15459, 19, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(15648, '10', 15459, 20, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(15649, '11', 15459, 21, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(15656, '6', 15461, 13, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(15657, '7', 15461, 14, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(15658, '8', 15461, 15, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(15659, '9', 15461, 19, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(15660, '10', 15461, 20, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(15661, '11', 15461, 21, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(15662, '6', 15462, 13, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15663, '7', 15462, 14, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15664, '8', 15462, 15, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15665, '9', 15462, 19, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15666, '10', 15462, 20, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15667, '11', 15462, 21, '2022-06-17 15:55:59', '2022-06-17 15:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `map_product_sections`
--

CREATE TABLE `map_product_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_warranties`
--

CREATE TABLE `master_warranties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_warranties`
--

INSERT INTO `master_warranties` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(5, '10 days', 1, '2022-04-22 17:37:08', '2022-04-22 17:37:08'),
(18, '30 days', 1, '2022-04-22 18:39:45', '2022-04-22 18:39:53'),
(19, '31 days', 1, '2022-05-26 17:23:40', '2022-05-26 17:23:40'),
(20, '32 days', 1, '2022-05-26 17:23:40', '2022-05-26 17:23:40'),
(21, '33 days', 1, '2022-05-26 17:23:40', '2022-05-26 17:23:40'),
(22, '34 days', 1, '2022-05-26 17:23:40', '2022-05-26 17:23:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_admins_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_21_124306_create_sliders_table', 1),
(4, '2019_08_02_084156_create_staff_table', 1),
(5, '2019_08_12_152632_create_testimonials_table', 1),
(6, '2019_08_14_153007_create_faqs_table', 1),
(7, '2019_08_14_164158_create_abouts_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_09_04_144803_create_shops_table', 1),
(10, '2019_09_26_142440_create_master_warranties_table', 1),
(11, '2019_09_26_142459_create_map_product_sections_table', 1),
(12, '2019_09_26_142459_create_ms_sections_table', 1),
(13, '2019_09_26_142459_create_txn_brands_table', 1),
(14, '2019_09_26_142459_create_txn_categories_table', 1),
(15, '2019_09_26_142459_create_txn_conditions_table', 1),
(16, '2019_09_26_142459_create_txn_contact_us_table', 1),
(17, '2019_09_26_142459_create_txn_custom_fields_table', 1),
(18, '2019_09_26_142459_create_txn_images_table', 1),
(19, '2019_09_26_142459_create_txn_keywords_table', 1),
(20, '2019_09_26_142459_create_txn_materials_table', 1),
(21, '2019_09_26_142459_create_txn_products_table', 1),
(22, '2019_09_26_142459_create_txn_reviews_table', 1),
(23, '2019_09_26_142459_create_txn_users_table', 1),
(24, '2019_09_26_142459_create_txn_weights_table', 1),
(25, '2019_09_26_142460_create_txn_orders_table', 1),
(26, '2019_09_26_142509_create_foreign_keys', 1),
(27, '2019_09_27_142459_create_transactions_table', 1),
(28, '2019_10_02_175444_create_txn_master_gsts_table', 1),
(29, '2019_10_12_190752_create_jobs_table', 1),
(30, '2019_10_17_184353_create_tickets_table', 1),
(31, '2019_10_19_145336_create_side_products_table', 1),
(32, '2019_10_26_162503_create_returntickets_table', 1),
(33, '2019_10_28_233946_create_product_faqs_table', 1),
(34, '2019_12_07_162015_create_mst_colors_table', 1),
(35, '2019_12_07_170052_create_mst_sizes_table', 1),
(36, '2019_12_17_165150_change_txn_images_table', 1),
(37, '2019_12_17_170646_create_map_color_sizes_table', 1),
(38, '2019_12_17_170648_create_txn_order_details_table', 1),
(39, '2019_12_17_180811_change_txn_products_table', 1),
(40, '2019_12_18_154902_create_home_offer_sliders_table', 1),
(41, '2019_12_19_153136_create_map_product_mst_sizes_table', 1),
(42, '2019_12_24_213536_change_map_color_sizes_table', 1),
(43, '2019_12_27_151452_change_add_size_id_txn_order_details_table', 1),
(44, '2020_01_03_191557_change_txn_products_add_offer_table', 1),
(45, '2020_01_04_172007_create_mst_offers_table', 1),
(46, '2020_01_04_172218_create_map_mst_offer_products_table', 1),
(47, '2020_01_04_172400_create_map_offer_products_table', 1),
(48, '2020_01_05_202603_change_map_offer_product_table', 1),
(49, '2020_01_06_230804_change_add_offers_order_details_table', 1),
(50, '2020_01_10_173304_create_subscribers_table', 1),
(51, '2020_01_13_145725_create_addresses_table', 1),
(52, '2020_01_13_151627_change_txn_users_address_table', 1),
(53, '2020_01_13_165336_change_txn_orders_address_type_table', 1),
(54, '2020_01_21_160533_change_addresses_table', 1),
(55, '2020_01_23_115551_change_mst_colors_table', 1),
(56, '2020_01_24_171900_change_map_offers_products_change_constrain_table', 1),
(57, '2020_01_24_183932_change_map_color_sizes_add_status_table', 1),
(58, '2020_01_25_114130_change_txn_products_add_review_status_table', 1),
(59, '2020_01_28_124327_change_shops_table', 1),
(60, '2020_01_28_142128_change_map_color_sizes_add_sort_index_table', 1),
(61, '2020_01_29_115313_create_bulk_orders_table', 1),
(62, '2020_03_04_174041_create_wishlists_table', 1),
(63, '2022_01_27_232331_change_txn_categories_table', 1),
(64, '2022_02_02_232027_change_add_size_id_txn_images_table', 1),
(65, '2022_03_08_235105_change_add_shipment_id_txn_orders_table', 2),
(66, '2022_06_16_181945_add_sizecart_to_txn_products_table--table', 3),
(67, '2022_06_17_122121_add_categorystatus_to_txn_categories_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `mst_colors`
--

CREATE TABLE `mst_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mst_colors`
--

INSERT INTO `mst_colors` (`id`, `title`, `color_code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'black', '#000000', 1, '2022-04-22 17:36:53', '2022-04-22 17:36:53'),
(2, 'Brown', '#a52a2a', 1, '2022-04-22 17:44:33', '2022-04-22 17:44:33'),
(3, 'Tan', '#d2b48c', 1, '2022-04-22 17:45:55', '2022-04-22 17:45:55'),
(4, 'Camel', '#bf8a3d', 1, '2022-04-22 17:46:50', '2022-04-22 17:46:50'),
(5, 'Cherry', '#790604', 1, '2022-04-22 17:47:24', '2022-04-22 17:47:24'),
(6, 'Gray', '#c2c5cc', 1, '2022-04-22 17:48:13', '2022-04-22 17:48:13'),
(7, 'Dark Brown', '#654321', 1, '2022-04-22 17:49:26', '2022-04-22 17:49:26'),
(8, 'Off White', '#e2dccd', 1, '2022-04-22 17:50:01', '2022-04-22 17:50:01'),
(9, 'Olive', '#708238', 1, '2022-04-22 17:50:43', '2022-04-22 17:50:43'),
(10, 'Orange', '#ffa500', 1, '2022-04-22 17:51:25', '2022-04-22 17:51:25'),
(11, 'Beige', '#e1c699', 1, '2022-04-22 17:51:56', '2022-04-22 17:51:56'),
(12, 'Blue', '#0000ff', 1, '2022-04-22 17:52:43', '2022-04-22 17:52:43'),
(13, 'Dark Tan', '#f7aa02', 1, '2022-04-22 17:53:04', '2022-04-22 17:53:04'),
(14, 'White', '#ffffff', 1, '2022-04-22 17:54:14', '2022-04-23 11:32:46'),
(15, 'Coffee Brown', '#6f4e37', 1, '2022-04-22 17:55:36', '2022-04-22 17:55:36'),
(16, 'Grey', '#c5c2cc', 1, '2022-04-22 17:56:31', '2022-04-22 17:56:31'),
(17, 'Antique', '#faebd7', 1, '2022-04-22 17:57:19', '2022-04-22 17:57:19'),
(18, 'Gold', '#d4af37', 1, '2022-04-22 17:57:44', '2022-04-22 17:57:44'),
(19, 'Peach', '#ffcba4', 1, '2022-04-22 18:01:36', '2022-04-22 18:01:36'),
(20, 'Red', '#ff0000', 1, '2022-04-23 11:33:30', '2022-04-23 11:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `mst_offers`
--

CREATE TABLE `mst_offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mst_sizes`
--

CREATE TABLE `mst_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mst_sizes`
--

INSERT INTO `mst_sizes` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'L', 0, '2022-04-22 17:37:08', '2022-06-03 12:40:44'),
(13, '6', 1, '2022-04-22 18:36:06', '2022-04-22 18:36:06'),
(14, '7', 1, '2022-04-22 18:36:11', '2022-04-22 18:36:11'),
(15, '8', 1, '2022-04-22 18:36:17', '2022-04-22 18:36:17'),
(19, '9', 1, '2022-04-23 11:33:44', '2022-04-23 11:33:44'),
(20, '10', 1, '2022-04-23 11:33:44', '2022-04-23 11:33:44'),
(21, '11', 1, '2022-04-23 11:33:44', '2022-04-23 11:33:44'),
(22, '\"6\"', 0, '2022-06-01 18:32:40', '2022-06-03 12:40:18'),
(23, '\"7\"', 0, '2022-06-01 18:32:40', '2022-06-03 12:40:28'),
(24, '\"8\"', 0, '2022-06-01 18:32:40', '2022-06-03 12:40:34'),
(25, '\"9\"', 1, '2022-06-01 18:32:40', '2022-06-01 18:32:40'),
(26, '\"10\"', 1, '2022-06-01 18:32:40', '2022-06-01 18:32:40'),
(27, '\"11\"', 1, '2022-06-01 18:32:40', '2022-06-01 18:32:40');

-- --------------------------------------------------------

--
-- Table structure for table `ms_sections`
--

CREATE TABLE `ms_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `SectionName` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_faqs`
--

CREATE TABLE `product_faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `replied_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `returntickets`
--

CREATE TABLE `returntickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `open_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `closed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` double DEFAULT NULL,
  `used_coupons` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `shop_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ifsc_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `side_products`
--

CREATE TABLE `side_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sort_index` int(11) DEFAULT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `sort_index` int(11) DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image_url`, `title`, `subtitle`, `description`, `sort_index`, `url`, `status`, `created_at`, `updated_at`) VALUES
(20, '628b9cee30b2e.jpg', NULL, NULL, NULL, 1, NULL, 0, '2022-05-23 20:10:46', '2022-06-16 13:32:11'),
(21, '628b9d029ce82.jpg', NULL, NULL, NULL, 2, NULL, 0, '2022-05-23 20:11:06', '2022-06-16 13:32:17'),
(22, '628b9d1a230bd.jpg', NULL, NULL, NULL, 3, NULL, 0, '2022-05-23 20:11:30', '2022-06-16 13:32:28'),
(23, '628b9d23a5d16.jpg', NULL, NULL, NULL, 4, NULL, 0, '2022-05-23 20:11:39', '2022-06-16 13:32:51'),
(24, '628b9d6e87019.jpg', NULL, NULL, NULL, 5, NULL, 0, '2022-05-23 20:12:54', '2022-06-16 13:32:58'),
(25, '628b9d7a85105.jpg', NULL, NULL, NULL, 6, NULL, 0, '2022-05-23 20:13:06', '2022-06-16 13:33:06'),
(26, '628b9d83e58b5.jpg', NULL, NULL, NULL, 7, NULL, 0, '2022-05-23 20:13:15', '2022-06-16 13:33:12'),
(27, '628b9d9105f6d.jpg', NULL, NULL, NULL, 8, NULL, 0, '2022-05-23 20:13:29', '2022-06-16 13:33:19'),
(28, '628b9d9a969e6.jpg', NULL, NULL, NULL, 9, NULL, 0, '2022-05-23 20:13:38', '2022-06-16 13:33:25'),
(29, '62aae3f808e29.jpeg', NULL, NULL, NULL, 1, NULL, 1, '2022-06-16 13:34:08', '2022-06-16 13:34:08'),
(30, '62aae4006c291.jpeg', NULL, NULL, NULL, 2, NULL, 1, '2022-06-16 13:34:16', '2022-06-16 13:34:16'),
(31, '62aae4086fb7e.jpeg', NULL, NULL, NULL, 3, NULL, 1, '2022-06-16 13:34:24', '2022-06-16 13:34:24');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_index` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `open_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `closed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `MID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TXNID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TXNAMOUNT` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PAYMENTMODE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CURRENCY` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TXNDATE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `STATUS` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RESPCODE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RESPMSG` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GATEWAYNAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BANKNAME` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CHECKSUMHASH` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BANKTXNID` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `txn_brands`
--

CREATE TABLE `txn_brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `txn_brands`
--

INSERT INTO `txn_brands` (`id`, `brand_name`, `status`, `created_at`, `updated_at`) VALUES
(5, 'fgxes', 1, '2022-04-22 17:37:08', '2022-04-22 17:37:08'),
(18, 'Vardhra', 1, '2022-04-22 18:39:08', '2022-04-22 18:39:08'),
(19, 'faizan vardhra', 1, '2022-05-09 18:04:22', '2022-05-09 18:04:22');

-- --------------------------------------------------------

--
-- Table structure for table `txn_categories`
--

CREATE TABLE `txn_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categorystatus` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `txn_categories`
--

INSERT INTO `txn_categories` (`id`, `parent_id`, `name`, `slug_url`, `status`, `image_url`, `created_at`, `updated_at`, `categorystatus`) VALUES
(1, 0, 'Men', 'men-1', 1, 'category_-2424.jpg', '2022-03-29 00:08:14', '2022-05-23 19:14:27', 0),
(2, 0, 'Women', 'women-2', 1, 'category_-2940.png', '2022-03-29 00:08:56', '2022-05-23 19:20:06', 0),
(7, 1, 'Formals', 'formals-7', 1, 'category_-5226.jpg', '2022-04-01 12:47:17', '2022-06-17 12:35:09', 1),
(8, 7, 'Derby', 'formal-derby7', 1, 'category_derby-1286.png', '2022-04-01 12:55:03', '2022-04-01 12:55:03', 0),
(9, 7, 'Lace Up', 'lace-up-9', 1, 'category_-6271.JPG', '2022-04-01 13:00:24', '2022-06-17 12:45:16', 1),
(10, 0, 'Party Shoes', 'party-shoes-10', 1, 'category_-3722.png', '2022-04-01 17:05:28', '2022-06-17 12:46:07', 1),
(14, 7, 'Slipon', 'slipon-14', 1, 'category_-2536.png', '2022-04-01 19:19:24', '2022-06-17 12:46:41', 1),
(15, 7, 'Loafers', 'formal-loafers7', 1, 'category_loafers-2331.png', '2022-04-01 19:25:27', '2022-04-01 19:25:27', 0),
(16, 7, 'Moccossins', 'formal-moccossins7', 1, 'category_moccossins-6862.png', '2022-04-01 19:35:42', '2022-04-01 19:35:42', 0),
(17, 7, 'Monk', 'formal-monk7', 1, 'category_monk-8228.png', '2022-04-01 19:38:02', '2022-04-01 19:38:02', 0),
(18, 7, 'Mojari', 'formal-mojari7', 1, 'category_mojari-4570.png', '2022-04-01 19:39:50', '2022-04-01 19:39:50', 0),
(19, 7, 'Oxford', 'formal-oxford7', 1, 'category_oxford-9124.png', '2022-04-01 19:42:51', '2022-04-01 19:42:51', 0),
(20, 1, 'Casual', 'casual-20', 1, 'category_-7868.png', '2022-04-01 19:46:18', '2022-06-17 12:40:56', 1),
(21, 20, 'Slip on', 'casual-slip-on20', 1, 'category_slip-on-806.png', '2022-04-01 19:47:17', '2022-04-01 19:47:17', 0),
(22, 20, 'Lace Up', 'casual-lace-up20', 1, 'category_lace-up-6007.JPG', '2022-04-01 19:48:22', '2022-04-01 19:48:22', 0),
(27, 1, 'Slippers', 'slippers-27', 1, 'category_-3631.png', '2022-04-09 18:27:34', '2022-06-17 12:44:53', 1),
(28, 1, 'Sandal', 'sandal-28', 1, 'category_-4821.png', '2022-04-09 18:27:52', '2022-06-17 12:37:33', 1),
(29, 28, 'Fisherman Sandal', 'sandals-fisherman-sandal28', 1, 'category_fisherman-sandal-4030.png', '2022-04-09 18:28:08', '2022-04-09 18:28:08', 0),
(31, 2, 'Flats', 'women-shoes-flats2', 1, 'category_flats-6770.png', '2022-04-09 18:36:54', '2022-04-09 18:36:54', 0),
(32, 2, 'Wedges', 'women-shoes-wedges2', 1, 'category_wedges-3905.png', '2022-04-09 18:37:11', '2022-04-09 18:37:11', 0),
(33, 2, 'Loafers', 'women-shoes-loafers2', 1, 'category_loafers-180.png', '2022-04-09 18:41:07', '2022-04-09 18:41:07', 0),
(34, 2, 'Heels', 'women-shoes-heels2', 1, 'category_heels-9570.png', '2022-04-09 18:43:19', '2022-04-09 18:43:19', 0),
(35, 2, 'Slidder', 'women-shoes-slidder2', 1, 'category_slidder-7015.png', '2022-04-09 18:46:37', '2022-04-09 18:46:37', 0),
(38, 0, 'Ethnic Footwear', 'ethnic-footwear-38', 1, 'category_-388.png', '2022-04-21 17:40:05', '2022-05-23 19:32:36', 0),
(39, 0, 'Clearance Sale', 'clearance-sale-39', 1, 'category_-9061.png', '2022-04-21 17:42:50', '2022-06-17 12:44:31', 1),
(40, 0, 'Accessories', 'accessories6', 1, 'category_accessories-6147.jpg', '2022-04-21 17:43:37', '2022-04-21 17:43:37', 0);

-- --------------------------------------------------------

--
-- Table structure for table `txn_conditions`
--

CREATE TABLE `txn_conditions` (
  `id` int(10) UNSIGNED NOT NULL,
  `condition` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `txn_conditions`
--

INSERT INTO `txn_conditions` (`id`, `condition`, `status`, `created_at`, `updated_at`) VALUES
(5, 'testing', 1, '2022-04-22 17:37:08', '2022-04-22 17:37:08'),
(19, 'New', 1, '2022-04-23 11:04:46', '2022-04-23 11:04:46');

-- --------------------------------------------------------

--
-- Table structure for table `txn_contact_us`
--

CREATE TABLE `txn_contact_us` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `txn_contact_us`
--

INSERT INTO `txn_contact_us` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'HenryLEari', 'hotbananaomelets@aim.com', 89030304610, 'Let the Robot bring you money while you rest.', 'The success formula is found. Learn more about it. \r\nhttps://profit-gold-strategy.life/?u=bdlkd0x&o=x7t8nng', '2022-04-18 13:49:16', '2022-04-18 13:49:16'),
(2, 'HenryLEari', 'p.ma@abc.com', 89031820514, 'Everyone can earn as much as he wants now.', 'Need some more money? Robot will earn them really fast. \r\nhttps://get-profitshere.life/?u=bdlkd0x&o=x7t8nng', '2022-04-21 18:18:32', '2022-04-21 18:18:32'),
(3, 'HenryLEari', 'us.h.ng.r.unn.65.62476.a@gmail.com', 89033023970, 'Financial robot is the best companion of rich people.', 'Let the financial Robot be your companion in the financial market. \r\nhttps://get-profitshere.life/?u=bdlkd0x&o=x7t8nng', '2022-04-21 18:36:16', '2022-04-21 18:36:16'),
(4, 'HenryLEari', 'be_chia@yahoo.com', 89037940076, 'Financial robot keeps bringing you money while you sleep.', 'Your computer can bring you additional income if you use this Robot. \r\nhttps://get-profitshere.life/?u=bdlkd0x&o=x7t8nng', '2022-04-21 19:01:50', '2022-04-21 19:01:50'),
(5, 'HenryLEari', 'trmnjd@cableone.net', 89034817588, 'Additional income is now available for anyone all around the world.', 'Make $1000 from $1 in a few minutes. Launch the financial robot now. \r\nhttps://get-profitshere.life/?u=bdlkd0x&o=x7t8nng', '2022-04-21 21:42:11', '2022-04-21 21:42:11'),
(6, 'HenryLEari', 'gregh911@yahoo.com', 89032279373, 'Make yourself rich in future using this financial robot.', 'Earning money in the Internet is easy if you use Robot. \r\nhttps://get-profitshere.life/?u=bdlkd0x&o=x7t8nng', '2022-04-22 00:02:18', '2022-04-22 00:02:18'),
(7, 'HenryLEari', 'thomas.bridges24@gmail.com', 89032832996, 'Have no money? It’s easy to earn them online here.', 'No need to work anymore. Just launch the robot. \r\nhttps://get-profitshere.life/?u=bdlkd0x&o=x7t8nng', '2022-04-22 05:37:51', '2022-04-22 05:37:51'),
(8, 'HenryLEari', 'pacquiaomargarit@aol.com', 89030397716, 'Still not a millionaire? Fix it now!', 'Make thousands every week working online here. \r\nhttps://get-profitshere.life/?u=bdlkd0x&o=x7t8nng', '2022-04-22 10:50:08', '2022-04-22 10:50:08'),
(9, 'HenryLEari', 'charles.guedes18@gmail.com', 89039133915, 'Financial robot keeps bringing you money while you sleep.', 'Trust the financial Bot to become rich. \r\nhttps://get-profitshere.life/?u=bdlkd0x&o=x7t8nng', '2022-04-22 16:06:41', '2022-04-22 16:06:41'),
(10, 'HenryLEari', 'prison2055@gmail.com', 89039063267, 'Start making thousands of dollars every week.', 'Join the society of successful people who make money here. \r\nhttps://get-profitshere.life/?u=bdlkd0x&o=x7t8nng', '2022-04-22 23:16:48', '2022-04-22 23:16:48'),
(11, 'HenryLEari', 'kat@yogamagick.com', 89034197570, 'Wow! This Robot is a great start for an online career.', 'The financial Robot is your future wealth and independence. \r\nhttps://get-profitshere.life/?u=bdlkd0x&o=x7t8nng', '2022-04-23 04:28:18', '2022-04-23 04:28:18'),
(12, 'HenryLEari', 'jv68mail@aol.com', 89035243273, 'Your money keep grow 24/7 if you use the financial Robot.', 'Everyone who needs money should try this Robot out. \r\nhttps://get-profitshere.life/?u=bdlkd0x&o=x7t8nng', '2022-04-23 10:07:44', '2022-04-23 10:07:44'),
(13, 'HenryLEari', 'breen.agnew@gmail.com', 89033198051, 'Every your dollar can turn into $100 after you lunch this Robot.', 'The huge income without investments is available, now! https://take-profitnow.life/?u=bdlkd0x&o=x7t8nng', '2022-04-23 15:26:46', '2022-04-23 15:26:46'),
(14, 'HenryLEari', 'zixun2012@163.com', 89030394037, 'Financial independence is what this robot guarantees.', 'The huge income without investments is available, now! https://take-profitnow.life/?u=bdlkd0x&o=x7t8nng', '2022-04-23 20:38:05', '2022-04-23 20:38:05'),
(15, 'HenryLEari', 'mankiller1968@yahoo.com', 89033216511, 'Make your computer to be you earning instrument.', 'Invest $1 today to make $1000 tomorrow. https://take-profitnow.life/?u=bdlkd0x&o=x7t8nng', '2022-04-24 01:56:23', '2022-04-24 01:56:23'),
(16, 'HenryLEari', 'orlori@yahoo.com', 89037141625, 'No need to stay awake all night long to earn money. Launch the robot.', 'Looking for an easy way to make money? Check out the financial robot. https://take-profitnow.life/?u=bdlkd0x&o=x7t8nng', '2022-04-24 07:09:03', '2022-04-24 07:09:03'),
(17, 'HenryLEari', 'neiderman@gmail.com', 89037765025, 'The online job can bring you a fantastic profit.', 'Try out the automatic robot to keep earning all day long. https://take-profitnow.life/?u=bdlkd0x&o=x7t8nng', '2022-04-24 08:51:39', '2022-04-24 08:51:39'),
(18, 'HenryLEari', 'silvia_0022@hotmail.com', 89031263060, 'Need money? Get it here easily?', 'Let the financial Robot be your companion in the financial market.', '2022-04-24 14:05:44', '2022-04-24 14:05:44'),
(19, 'HenryLEari', 'tejbba@piuminimoncler2013italia.com', 89039929989, 'The fastest way to make you wallet thick is here.', 'Using this Robot is the best way to make you rich. https://take-profitnow.life/?u=bdlkd0x&o=x7t8nng', '2022-04-24 19:19:50', '2022-04-24 19:19:50'),
(20, 'HenryLEari', 'bummy35@comcast.net', 89033885216, 'Rich people are rich because they use this robot.', 'Make your money work for you all day long. https://take-profitnow.life/?u=bdlkd0x&o=x7t8nng', '2022-04-25 00:47:18', '2022-04-25 00:47:18'),
(21, 'HenryLEari', 'arthurleejesson@gmail.com', 89037450361, 'Every your dollar can turn into $100 after you lunch this Robot.', 'We know how to increase your financial stability. https://take-profitnow.life/?u=bdlkd0x&o=x7t8nng', '2022-04-25 16:56:30', '2022-04-25 16:56:30'),
(22, 'HenryLEari', 'dbetro2003@aol.com', 89038803633, 'Still not a millionaire? The financial robot will make you him!', 'Learn how to make hundreds of backs each day. https://breweriana.it/gotodate/promo', '2022-04-25 22:52:37', '2022-04-25 22:52:37'),
(23, 'HenryLEari', 'jxkjvt@hotmial.com', 89033716393, 'The best online investment tool is found. Learn more!', 'Wow! This Robot is a great start for an online career. https://breweriana.it/gotodate/promo', '2022-04-26 01:24:51', '2022-04-26 01:24:51'),
(24, 'HenryLEari', 'angie.ervin@hotmail.com', 89033870265, 'Online Bot will bring you wealth and satisfaction.', 'Most successful people already use Robot. Do you? https://breweriana.it/gotodate/promo', '2022-04-26 06:33:46', '2022-04-26 06:33:46'),
(25, 'HenryLEari', 'to.ng.t.h.i.p.hong.d.ai@gmail.com', 89034842146, 'Have no money? Earn it online.', 'Online job can be really effective if you use this Robot. https://breweriana.it/gotodate/promo', '2022-04-26 12:32:00', '2022-04-26 12:32:00'),
(26, 'HenryLEari', 'anuj_shahi24@yahoo.com', 89039458149, 'Thousands of bucks are guaranteed if you use this robot.', 'The fastest way to make you wallet thick is here. https://breweriana.it/gotodate/promo', '2022-04-26 17:37:56', '2022-04-26 17:37:56'),
(27, 'HenryLEari', 'jonlangner13@hotmail.com', 89035367554, 'The financial Robot is your # 1 expert of making money.', 'The huge income without investments is available, now! https://breweriana.it/gotodate/promo', '2022-04-26 22:57:31', '2022-04-26 22:57:31'),
(28, 'HenryLEari', 'rr_ryan79@yahoo.com', 89033957031, 'The online financial Robot is your key to success.', 'Online Bot will bring you wealth and satisfaction. https://breweriana.it/gotodate/promo', '2022-04-27 04:18:36', '2022-04-27 04:18:36'),
(29, 'HenryLEari', 'cottonjasma@yahoo.com', 89035942446, 'The success formula is found. Learn more about it.', 'Online Bot will bring you wealth and satisfaction. https://breweriana.it/gotodate/promo', '2022-04-27 09:34:55', '2022-04-27 09:34:55'),
(30, 'HenryLEari', 'sedatozdemir1966@yahoo.com', 89032706369, 'The best online investment tool is found. Learn more!', 'Your money work even when you sleep. https://2f-2f.de/gotodate/promo', '2022-04-27 15:05:14', '2022-04-27 15:05:14'),
(31, 'HenryLEari', 'auhaus@gmail.com', 89037008341, 'Have no money? Earn it online.', 'Everyone can earn as much as he wants suing this Bot. https://2f-2f.de/gotodate/promo', '2022-04-27 20:40:21', '2022-04-27 20:40:21'),
(32, 'HenryLEari', 'vincelght@yahoo.com', 89032596438, 'Every your dollar can turn into $100 after you lunch this Robot.', 'Automatic robot is the best start for financial independence. https://2f-2f.de/gotodate/promo', '2022-04-28 02:00:37', '2022-04-28 02:00:37'),
(33, 'HenryLEari', 'reggiemcvea@gmail.com', 89031492254, 'Launch the best investment instrument to start making money today.', 'Financial robot is a great way to manage and increase your income. https://2f-2f.de/gotodate/promo', '2022-04-28 07:11:55', '2022-04-28 07:11:55'),
(34, 'HenryLEari', 'sebby_darling@ymail.com', 89039215848, 'Financial robot is your success formula is found. Learn more about it.', 'No need to worry about the future if your use this financial robot. https://2f-2f.de/gotodate/promo', '2022-04-28 12:49:31', '2022-04-28 12:49:31'),
(35, 'HenryLEari', 'clenayshineon@gmail.com', 89035128919, 'Let the Robot bring you money while you rest.', 'Make your money work for you all day long. https://2f-2f.de/gotodate/promo', '2022-04-28 18:22:53', '2022-04-28 18:22:53'),
(36, 'HenryLEari', 'ajhorsman@uk2.net', 89036879321, 'Making money is very easy if you use the financial Robot.', 'Your computer can bring you additional income if you use this Robot. https://2f-2f.de/gotodate/promo', '2022-04-28 23:33:41', '2022-04-28 23:33:41'),
(37, 'HenryLEari', 'kelli.corbett88@gmail.com', 89036077212, 'Watch your money grow while you invest with the Robot.', 'Most successful people already use Robot. Do you? https://2f-2f.de/gotodate/promo', '2022-04-29 04:39:44', '2022-04-29 04:39:44'),
(38, 'HenryLEari', 'rashadzone@yahoo.com', 89030045115, 'Money, money! Make more money with financial robot!', 'Everyone who needs money should try this Robot out. https://2f-2f.de/gotodate/promo', '2022-04-29 10:13:02', '2022-04-29 10:13:02'),
(39, 'HenryLEari', 'p.ropos.ebgpg@gmail.com', 89033257970, 'Make your computer to be you earning instrument.', 'Attention! Here you can earn money online! https://2f-2f.de/gotodate/promo', '2022-04-29 15:54:34', '2022-04-29 15:54:34'),
(40, 'HenryLEari', 'nicole2591@yahoo.com', 89035900890, 'It is the best time to launch the Robot to get more money.', 'Make money online, staying at home this cold winter. https://2f-2f.de/gotodate/promo', '2022-04-29 21:21:14', '2022-04-29 21:21:14'),
(41, 'HenryLEari', 'tailer93@aol.com', 89032270201, 'Trust the financial Bot to become rich.', 'There is no need to look for a job anymore. Work online. https://2f-2f.de/gotodate/promo', '2022-04-30 02:52:21', '2022-04-30 02:52:21'),
(42, 'HenryLEari', 'gengjian123123@163.com', 89034288655, 'Launch the robot and let it bring you money.', 'Every your dollar can turn into $100 after you lunch this Robot. https://2f-2f.de/gotodate/promo', '2022-04-30 08:30:13', '2022-04-30 08:30:13'),
(43, 'HenryLEari', 'cvp_1977@yahoo.com', 89038201140, 'This robot can bring you money 24/7.', 'Try out the automatic robot to keep earning all day long. https://2f-2f.de/gotodate/promo', '2022-04-30 14:05:04', '2022-04-30 14:05:04'),
(44, 'HenryLEari', 'xcarolyn.graham@bankofamerica.com', 89034797249, 'Financial robot is the best companion of rich people.', 'Robot never sleeps. It makes money for you 24/7. https://2f-2f.de/gotodate/promo', '2022-04-30 20:00:16', '2022-04-30 20:00:16'),
(45, 'HenryLEari', 'leamichele22@aol.com', 89039206428, 'Earn additional money without efforts and skills.', 'Make thousands of bucks. Financial robot will help you to do it! https://2f-2f.de/gotodate/promo', '2022-04-30 22:02:59', '2022-04-30 22:02:59'),
(46, 'HenryLEari', 'bobandsy@hotmail.com', 89032990381, 'Start making thousands of dollars every week.', 'We know how to increase your financial stability. https://2f-2f.de/gotodate/promo', '2022-05-01 03:22:13', '2022-05-01 03:22:13'),
(47, 'HenryLEari', 'dbame247@aol.com', 89035110174, 'Automatic robot is the best start for financial independence.', 'The financial Robot is your future wealth and independence. https://2f-2f.de/gotodate/promo', '2022-05-01 09:00:18', '2022-05-01 09:00:18'),
(48, 'HenryLEari', 'crazyin_town@yahoo.com', 89034526801, 'The additional income for everyone.', 'No need to work anymore while you have the Robot launched! https://2f-2f.de/gotodate/promo', '2022-05-01 14:32:06', '2022-05-01 14:32:06'),
(49, 'HenryLEari', 'rushsolo@gmail.com', 89039291818, 'We know how to increase your financial stability.', 'No need to work anymore while you have the Robot launched! https://2f-2f.de/gotodate/promo', '2022-05-01 20:01:10', '2022-05-01 20:01:10'),
(50, 'HenryLEari', 'xxx3t3rn1tyxxx@yahoo.com', 89035185294, 'The financial Robot works for you even when you sleep.', 'Robot is the best way for everyone who looks for financial independence. https://2f-2f.de/gotodate/promo', '2022-05-02 01:38:16', '2022-05-02 01:38:16'),
(51, 'HenryLEari', 'rashmirajan22@yahoo.com', 89039885705, 'Financial robot keeps bringing you money while you sleep.', 'Online earnings are the easiest way for financial independence. https://2f-2f.de/gotodate/promo', '2022-05-02 07:26:55', '2022-05-02 07:26:55'),
(52, 'HenryLEari', 'gallahuebe.pik@gmail.com', 89037897211, 'Have no money? Earn it online.', 'Your money work even when you sleep. https://2f-2f.de/gotodate/promo', '2022-05-02 13:06:32', '2022-05-02 13:06:32'),
(53, 'HenryLEari', '129121113@HUSHMAIL.COM', 89039304563, 'The huge income without investments is available.', 'Earning $1000 a day is easy if you use this financial Robot. https://2f-2f.de/gotodate/promo', '2022-05-02 18:22:04', '2022-05-02 18:22:04'),
(54, 'HenryLEari', 'j_hammonds69@yahoo.com', 89037496416, 'Looking for additional money? Try out the best financial instrument.', 'The financial Robot is the most effective financial tool in the net! https://2f-2f.de/gotodate/promo', '2022-05-03 00:01:18', '2022-05-03 00:01:18'),
(55, 'HenryLEari', 'STEVECARR888@COMCAST.NET', 89033635501, 'There is no need to look for a job anymore. Work online.', 'We know how to become rich and do you? https://2f-2f.de/gotodate/promo', '2022-05-03 05:37:15', '2022-05-03 05:37:15'),
(56, 'HenryLEari', 'viclong16@yahoo.com', 89038391561, 'Money, money! Make more money with financial robot!', 'This robot will help you to make hundreds of dollars each day. https://2f-2f.de/gotodate/promo', '2022-05-03 11:37:04', '2022-05-03 11:37:04'),
(57, 'HenryLEari', 'pickyjap@gmail.com', 89036123871, 'Make your computer to be you earning instrument.', 'Need money? Get it here easily? https://2f-2f.de/gotodate/promo', '2022-05-03 17:24:41', '2022-05-03 17:24:41'),
(58, 'HenryLEari', 'dee.mccln@yahoo.com', 89030675895, 'The fastest way to make you wallet thick is here.', 'We have found the fastest way to be rich. Find it out here. https://2f-2f.de/gotodate/promo', '2022-05-03 23:28:07', '2022-05-03 23:28:07'),
(59, 'HenryLEari', 'gayle_gawlik@comcast.net', 89038504919, 'Looking forward for income? Get it online.', 'Join the society of successful people who make money here. https://2f-2f.de/gotodate/promo', '2022-05-04 04:54:17', '2022-05-04 04:54:17'),
(60, 'HenryLEari', 'sales@limogesboutique.com', 89036780262, 'We know how to make our future rich and do you?', 'Earning $1000 a day is easy if you use this financial Robot. https://2f-2f.de/gotodate/promo', '2022-05-04 10:01:14', '2022-05-04 10:01:14'),
(61, 'HenryLEari', 'Napalisous@aol.com', 89037832429, 'No need to worry about the future if your use this financial robot.', 'Just one click can turn you dollar into $1000. https://LEari.187sued.de/gotodate/promo', '2022-05-04 15:17:33', '2022-05-04 15:17:33'),
(62, 'HenryLEari', 'rickysgurl2004@yahoo.com', 89036127011, 'No need to work anymore. Just launch the robot.', 'Make thousands of bucks. Pay nothing. https://LEari.187sued.de/gotodate/promo', '2022-05-04 20:39:11', '2022-05-04 20:39:11'),
(63, 'HenryLEari', 'wllmroads@earthlink.net', 89039013294, 'Make money in the internet using this Bot. It really works!', 'Financial robot guarantees everyone stability and income. https://LEari.187sued.de/gotodate/promo', '2022-05-05 02:14:27', '2022-05-05 02:14:27'),
(64, 'HenryLEari', 'vurtikaz117@gmail.com', 89030674406, 'Using this Robot is the best way to make you rich.', 'Additional income is now available for anyone all around the world. https://LEari.187sued.de/gotodate/promo', '2022-05-05 07:22:09', '2022-05-05 07:22:09'),
(65, 'HenryLEari', 'jlerose@moneyshopmidwest.com', 89039227157, 'Make yourself rich in future using this financial robot.', 'Financial Robot is #1 investment tool ever. Launch it! https://LEari.187sued.de/gotodate/promo', '2022-05-05 13:04:53', '2022-05-05 13:04:53'),
(66, 'HenryLEari', 'arunnair@gmail.com', 89032333698, 'Everyone who needs money should try this Robot out.', 'Additional income is now available for anyone all around the world. https://LEari.187sued.de/gotodate/promo', '2022-05-05 18:38:12', '2022-05-05 18:38:12'),
(67, 'HenryLEari', 'gb0868@yahoo.com', 89038350749, 'Trust your dollar to the Robot and see how it grows to $100.', 'One dollar is nothing, but it can grow into $100 here. https://LEari.187sued.de/gotodate/promo', '2022-05-06 00:49:31', '2022-05-06 00:49:31'),
(68, 'HenryLEari', 'hirusepalika@gmail.com', 89036598952, 'No need to work anymore. Just launch the robot.', 'Every your dollar can turn into $100 after you lunch this Robot. https://LEari.187sued.de/gotodate/promo', '2022-05-06 06:37:20', '2022-05-06 06:37:20'),
(69, 'HenryLEari', 'wendy_eng@verizon.net', 89030557074, 'Financial robot is your success formula is found. Learn more about it.', 'Wow! This Robot is a great start for an online career. https://LEari.187sued.de/gotodate/promo', '2022-05-06 12:23:03', '2022-05-06 12:23:03'),
(70, 'HenryLEari', 'jackie6849@gmail.com', 89037398191, 'Make your laptop a financial instrument with this program.', 'We know how to increase your financial stability. https://LEari.187sued.de/gotodate/promo', '2022-05-06 18:10:54', '2022-05-06 18:10:54'),
(71, 'HenryLEari', 'nanjala9@gmail.com', 89036150633, 'No need to work anymore. Just launch the robot.', 'Just one click can turn you dollar into $1000. https://LEari.187sued.de/gotodate/promo', '2022-05-06 23:56:29', '2022-05-06 23:56:29'),
(72, 'HenryLEari', 'sanbb19@ymail.com', 89034980471, 'Even a child knows how to make money. This robot is what you need!', 'No need to worry about the future if your use this financial robot. https://LEari.187sued.de/gotodate/promo', '2022-05-07 05:01:36', '2022-05-07 05:01:36'),
(73, 'HenryLEari', 'glkxa@lowestpricesonthenet.com', 89030106207, 'Need money? Get it here easily?', 'Launch the best investment instrument to start making money today. https://LEari.187sued.de/gotodate/promo', '2022-05-07 10:11:36', '2022-05-07 10:11:36'),
(74, 'HenryLEari', 'cherrylyngo@gmail.com', 89037605762, 'The financial Robot is your # 1 expert of making money.', 'Launch the financial Bot now to start earning. https://LEari.187sued.de/gotodate/promo', '2022-05-07 16:08:41', '2022-05-07 16:08:41'),
(75, 'HenryLEari', 'erinpianelli@gmail.com', 89039273302, 'There is no need to look for a job anymore. Work online.', 'Automatic robot is the best start for financial independence. https://LEari.187sued.de/gotodate/promo', '2022-05-07 21:45:35', '2022-05-07 21:45:35'),
(76, 'HenryLEari', 'Jenniferreese10@yahoo.com', 89031626593, 'The fastest way to make you wallet thick is here.', 'No need to work anymore. Just launch the robot. https://LEari.187sued.de/gotodate/promo', '2022-05-08 02:52:21', '2022-05-08 02:52:21'),
(77, 'HenryLEari', 'mcoleman@yahoo.com', 89033282909, 'The financial Robot is the most effective financial tool in the net!', 'Check out the automatic Bot, which works for you 24/7. https://LEari.187sued.de/gotodate/promo', '2022-05-08 07:57:51', '2022-05-08 07:57:51'),
(78, 'HenryLEari', 'tony21502@yahoo.com', 89036588043, 'Financial robot keeps bringing you money while you sleep.', 'Need some more money? Robot will earn them really fast. https://LEari.187sued.de/gotodate/promo', '2022-05-08 13:30:57', '2022-05-08 13:30:57'),
(79, 'HenryLEari', 'lchernobylchick@hotmail.com', 89032059722, 'Robot never sleeps. It makes money for you 24/7.', 'Everyone can earn as much as he wants now. https://LEari.187sued.de/gotodate/promo', '2022-05-08 18:59:35', '2022-05-08 18:59:35'),
(80, 'HenryLEari', 'anas.ahamd@gmail.com', 89032587470, 'Find out about the fastest way for a financial independence.', 'No worries if you are fired. Work online. https://LEari.187sued.de/gotodate/promo', '2022-05-09 00:53:20', '2022-05-09 00:53:20'),
(81, 'HenryLEari', 'karikosovich94@happy.maildin.com', 89036374125, 'Have no money? It’s easy to earn them online here.', 'Feel free to buy everything you want with the additional income. https://LEari.187sued.de/gotodate/promo', '2022-05-09 06:20:52', '2022-05-09 06:20:52'),
(82, 'HenryLEari', 'armen-armin@hotmail.com', 89038119742, 'Need money? The financial robot is your solution.', 'Earning $1000 a day is easy if you use this financial Robot. https://LEari.187sued.de/gotodate/promo', '2022-05-09 11:30:37', '2022-05-09 11:30:37'),
(83, 'HenryLEari', 'vroadifer@yahoo.com', 89030084423, 'One dollar is nothing, but it can grow into $100 here.', 'The success formula is found. Learn more about it. https://LEari.187sued.de/gotodate/promo', '2022-05-09 16:40:53', '2022-05-09 16:40:53'),
(84, 'HenryLEari', 'wings_of_the_world@hotmail.com', 89031645665, 'Robot is the best way for everyone who looks for financial independence.', 'Automatic robot is the best start for financial independence. https://LEari.187sued.de/gotodate/promo', '2022-05-09 21:56:54', '2022-05-09 21:56:54'),
(85, 'HenryLEari', 'msidecar004@aol.com', 89031756513, 'Need money? Get it here easily?', 'Buy everything you want earning money online. https://LEari.187sued.de/gotodate/promo', '2022-05-10 03:03:18', '2022-05-10 03:03:18'),
(86, 'HenryLEari', 'gt4som@gmail.com', 89033856845, 'Even a child knows how to make $100 today with the help of this robot.', 'Start making thousands of dollars every week just using this robot. https://LEari.187sued.de/gotodate/promo', '2022-05-10 08:18:46', '2022-05-10 08:18:46'),
(87, 'HenryLEari', 'michfloria36@yahoo.com', 89037664628, 'Financial robot keeps bringing you money while you sleep.', 'The online income is the easiest ways to make you dream come true. https://LEari.187sued.de/gotodate/promo', '2022-05-10 13:30:57', '2022-05-10 13:30:57'),
(88, 'HenryLEari', 'sebarmenault@hotmail.com', 89034350430, 'We know how to increase your financial stability.', 'Online earnings are the easiest way for financial independence. https://LEari.187sued.de/gotodate/promo', '2022-05-10 18:41:28', '2022-05-10 18:41:28'),
(89, 'HenryLEari', 'YAHOOWAHOO@AOL.COM', 89034273768, 'The online income is your key to success.', 'Join the society of successful people who make money here. https://LEari.187sued.de/gotodate/promo', '2022-05-11 00:09:00', '2022-05-11 00:09:00'),
(90, 'HenryLEari', 'ammelrodrigo@hotmail.com', 89037363040, 'Small investments can bring tons of dollars fast.', 'The financial Robot is the most effective financial tool in the net! https://LEari.187sued.de/gotodate/promo', '2022-05-11 05:17:12', '2022-05-11 05:17:12'),
(91, 'HenryLEari', 'jakki.k.davis@gmail.com', 89030220066, 'Make money, not war! Financial Robot is what you need.', 'The best online job for retirees. Make your old ages rich. https://LEari.187sued.de/gotodate/promo', '2022-05-11 10:24:00', '2022-05-11 10:24:00'),
(92, 'HenryLEari', 'mezoo@yahoo.com', 89035902412, 'Trust your dollar to the Robot and see how it grows to $100.', 'Watch your money grow while you invest with the Robot. https://LEari.187sued.de/gotodate/promo', '2022-05-11 15:33:23', '2022-05-11 15:33:23'),
(93, 'HenryLEari', 'Klturner3@gmail.com', 89038102273, 'The online income is the easiest ways to make you dream come true.', 'One click of the robot can bring you thousands of bucks. https://LEari.187sued.de/gotodate/promo', '2022-05-11 20:58:12', '2022-05-11 20:58:12'),
(94, 'HenryLEari', 'maliang@prodigy.net', 89038513984, 'Learn how to make hundreds of backs each day.', 'The additional income for everyone. https://LEari.187sued.de/gotodate/promo', '2022-05-12 02:02:48', '2022-05-12 02:02:48'),
(95, 'HenryLEari', 'glooney43125@gmail.com', 89038444937, 'Make thousands of bucks. Financial robot will help you to do it!', 'Make yourself rich in future using this financial robot. https://LEari.187sued.de/gotodate/promo', '2022-05-12 07:15:38', '2022-05-12 07:15:38'),
(96, 'Gradyreony', 'prazeres.jana@hotmail.com', 84831712861, 'MORE THAN $1000 IN 10 MINUTES!', 'FROM $1000 FOR 10 MINUTES! https://1200usd-for-10-minutes.blogspot.hu/2022/05/how-to-earn-1200-in-10-minutes.html?yes2027818', '2022-05-12 08:28:42', '2022-05-12 08:28:42'),
(97, 'HenryLEari', 'Linda.dethsada@gmail.com', 89031209722, 'Let your money grow into the capital with this Robot.', 'No need to stay awake all night long to earn money. Launch the robot. https://LEari.187sued.de/gotodate/promo', '2022-05-12 12:23:15', '2022-05-12 12:23:15'),
(98, 'HenryLEari', 'fjptly005+abc030@gmail.com', 89035891549, 'Need money? Get it here easily! Just press this to launch the robot.', 'We know how to make our future rich and do you? https://LEari.187sued.de/gotodate/promo', '2022-05-12 22:39:44', '2022-05-12 22:39:44'),
(99, 'HenryLEari', 'sanjukta_ghose@yahoo.com', 89030104475, 'Earning money in the Internet is easy if you use Robot.', 'Let your money grow into the capital with this Robot. https://LEari.187sued.de/gotodate/promo', '2022-05-13 03:46:14', '2022-05-13 03:46:14'),
(100, 'HenryLEari', 'motherof3kids@sbcglobal.net', 89034986709, 'Let the financial Robot be your companion in the financial market.', 'Launch the financial Robot and do your business. https://LEari.187sued.de/gotodate/promo', '2022-05-13 08:58:44', '2022-05-13 08:58:44'),
(101, 'HenryLEari', 'basiamp@hotmail.com', 89038868994, 'Find out about the fastest way for a financial independence.', 'Everyone who needs money should try this Robot out. https://LEari.187sued.de/gotodate/promo', '2022-05-13 14:07:17', '2022-05-13 14:07:17'),
(102, 'HenryLEari', 'cullmansheila@aol.com', 89032046261, 'The best online investment tool is found. Learn more!', 'Making money in the net is easier now. https://LEari.187sued.de/gotodate/promo', '2022-05-13 15:45:47', '2022-05-13 15:45:47'),
(103, 'HenryLEari', 'norenephillips@aol.com', 89033958908, 'Have no money? Earn it online.', 'Your computer can bring you additional income if you use this Robot. https://LEari.187sued.de/gotodate/promo', '2022-05-13 21:03:51', '2022-05-13 21:03:51'),
(104, 'HenryLEari', 'hit1out@sbcglobal.net', 89030714993, 'The financial Robot is the most effective financial tool in the net!', 'Buy everything you want earning money online. https://LEari.187sued.de/gotodate/promo', '2022-05-14 02:10:56', '2022-05-14 02:10:56'),
(105, 'HenryLEari', 'seangoudreau@yahoo.com', 89031992393, 'No need to worry about the future if your use this financial robot.', 'Financial independence is what this robot guarantees. https://LEari.187sued.de/gotodate/promo', '2022-05-14 07:17:57', '2022-05-14 07:17:57'),
(106, 'HenryLEari', 'simone.klaehn@telefonica.net', 89038859252, 'Make thousands every week working online here.', 'Start your online work using the financial Robot. https://LEari.187sued.de/gotodate/promo', '2022-05-14 12:30:00', '2022-05-14 12:30:00'),
(107, 'HenryLEari', 'hscross2003@yahoo.com', 89036227672, 'The additional income for everyone.', 'Make $1000 from $1 in a few minutes. Launch the financial robot now. https://LEari.187sued.de/gotodate/promo', '2022-05-14 17:36:11', '2022-05-14 17:36:11'),
(108, 'HenryLEari', 'danilemontalvo@comcast.net', 89034068484, 'Watch your money grow while you invest with the Robot.', 'We know how to increase your financial stability. https://LEari.187sued.de/gotodate/promo', '2022-05-14 22:43:24', '2022-05-14 22:43:24'),
(109, 'HenryLEari', 'jeff.elmer@gmail.com', 89031023669, 'Check out the newest way to make a fantastic profit.', 'Your money work even when you sleep. https://LEari.187sued.de/gotodate/promo', '2022-05-15 04:10:10', '2022-05-15 04:10:10'),
(110, 'HenryLEari', 'rachelle2552@gmail.com', 89031380411, 'Earning $1000 a day is easy if you use this financial Robot.', 'The best online investment tool is found. Learn more! https://LEari.187sued.de/gotodate/promo', '2022-05-15 09:32:14', '2022-05-15 09:32:14'),
(111, 'HenryLEari', 'jillppresnal@yahoo.com', 89037289847, 'Robot never sleeps. It makes money for you 24/7.', 'Provide your family with the money in age. Launch the Robot! https://LEari.187sued.de/gotodate/promo', '2022-05-15 14:40:28', '2022-05-15 14:40:28'),
(112, 'HenryLEari', 'mackey_antonio@yahoo.com', 89032851251, 'No need to stay awake all night long to earn money. Launch the robot.', 'Check out the automatic Bot, which works for you 24/7. https://LEari.187sued.de/gotodate/promo', '2022-05-15 20:07:44', '2022-05-15 20:07:44'),
(113, 'HenryLEari', 'xfirextigerx@yahoo.com', 89037182956, 'Learn how to make hundreds of backs each day.', 'The huge income without investments is available, now! https://LEari.187sued.de/gotodate/promo', '2022-05-16 01:48:47', '2022-05-16 01:48:47'),
(114, 'HenryLEari', 'deladjidjo@gmail.com', 89031116729, 'Small investments can bring tons of dollars fast.', 'The online income is the easiest ways to make you dream come true. https://LEari.187sued.de/gotodate/promo', '2022-05-16 07:23:40', '2022-05-16 07:23:40'),
(115, 'HenryLEari', 'rheashaik@gmail.com', 89033480560, 'Money, money! Make more money with financial robot!', 'The financial Robot is the most effective financial tool in the net! https://LEari.187sued.de/gotodate/promo', '2022-05-16 13:08:03', '2022-05-16 13:08:03'),
(116, 'HenryLEari', 'rik.denekamp@gmail.com', 89036362765, 'No need to work anymore. Just launch the robot.', 'Even a child knows how to make money. This robot is what you need! https://LEari.187sued.de/gotodate/promo', '2022-05-16 18:48:45', '2022-05-16 18:48:45'),
(117, 'HenryLEari', 'Rphong86@gmail.com', 89035776829, 'The online income is the easiest ways to make you dream come true.', 'Make money in the internet using this Bot. It really works! https://LEari.187sued.de/gotodate/promo', '2022-05-16 23:57:41', '2022-05-16 23:57:41'),
(118, 'HenryLEari', 'allu_65@yahoo.com', 89039928189, 'We know how to increase your financial stability.', 'This robot can bring you money 24/7. https://LEari.187sued.de/gotodate/promo', '2022-05-17 05:23:02', '2022-05-17 05:23:02'),
(119, 'HenryLEari', 'santilabel@hotmail.com', 89039156391, 'Buy everything you want earning money online.', 'The additional income for everyone. https://LEari.187sued.de/gotodate/promo', '2022-05-17 10:32:24', '2022-05-17 10:32:24'),
(120, 'HenryLEari', 'bradley@blbest.com', 89032005920, 'Financial independence is what this robot guarantees.', 'Have no money? It’s easy to earn them online here. https://LEari.187sued.de/gotodate/promo', '2022-05-17 15:54:52', '2022-05-17 15:54:52'),
(121, 'HenryLEari', 'jb@nutter.com', 89034103480, 'Robot is the best solution for everyone who wants to earn.', 'Even a child knows how to make $100 today with the help of this robot. https://LEari.187sued.de/gotodate/promo', '2022-05-17 21:33:29', '2022-05-17 21:33:29'),
(122, 'HenryLEari', 'carolechisem@hotmail.com', 89032100852, 'No need to stay awake all night long to earn money. Launch the robot.', 'Additional income is now available for anyone all around the world. https://LEari.187sued.de/gotodate/link', '2022-05-18 02:55:25', '2022-05-18 02:55:25'),
(123, 'HenryLEari', 'jamilzz@gmail.com', 89036564504, 'Make money in the internet using this Bot. It really works!', 'Join the society of successful people who make money here. https://LEari.187sued.de/gotodate/link', '2022-05-18 08:26:42', '2022-05-18 08:26:42'),
(124, 'HenryLEari', 'bio-bezpeka@ukr.net', 89032918187, 'Still not a millionaire? The financial robot will make you him!', 'Make money, not war! Financial Robot is what you need. https://LEari.187sued.de/gotodate/link', '2022-05-18 13:58:32', '2022-05-18 13:58:32'),
(125, 'HenryLEari', 'josejvelez@gmail.com', 89033118955, 'Let your money grow into the capital with this Robot.', 'The best online investment tool is found. Learn more! https://LEari.187sued.de/gotodate/link', '2022-05-18 19:25:09', '2022-05-18 19:25:09'),
(126, 'HenryLEari', 'popp81@gmail.com', 89036414931, 'Looking forward for income? Get it online.', 'Wow! This is a fastest way for a financial independence. https://LEari.187sued.de/gotodate/link', '2022-05-19 00:33:21', '2022-05-19 00:33:21'),
(127, 'HenryLEari', 'kimball_tammy@yahoo.com', 89039941579, 'Make dollars staying at home and launched this Bot.', 'The financial Robot works for you even when you sleep. https://LEari.187sued.de/gotodate/link', '2022-05-19 05:40:01', '2022-05-19 05:40:01'),
(128, 'HenryLEari', 'luce2006@hotmail.com', 89031329643, 'Make yourself rich in future using this financial robot.', 'The huge income without investments is available. https://LEari.187sued.de/gotodate/link', '2022-05-19 08:45:33', '2022-05-19 08:45:33'),
(129, 'HenryLEari', 'pieplespoorie6897@agpforum.com', 89031640586, 'Launch the financial Bot now to start earning.', 'Feel free to buy everything you want with the additional income. https://LEari.bookeat.es/gotodate/promo', '2022-05-19 14:31:13', '2022-05-19 14:31:13'),
(130, 'HenryLEari', 'kimberlylewis76@yahoo.com', 89030428676, 'The online income is your key to success.', 'Earn additional money without efforts. https://LEari.bookeat.es/gotodate/promo', '2022-05-19 19:39:21', '2022-05-19 19:39:21'),
(131, 'HenryLEari', 'mtptman@live.com', 89035176302, 'Make thousands of bucks. Pay nothing.', 'Looking forward for income? Get it online. https://LEari.bookeat.es/gotodate/promo', '2022-05-20 00:45:04', '2022-05-20 00:45:04'),
(132, 'HenryLEari', 'hawksnest5@att.net', 89030517625, 'Using this Robot is the best way to make you rich.', 'Make dollars just sitting home. https://LEari.bookeat.es/gotodate/promo', '2022-05-20 06:15:29', '2022-05-20 06:15:29'),
(133, 'HenryLEari', 'shipaint@hotmail.com', 89034021994, 'Try out the automatic robot to keep earning all day long.', 'Financial independence is what this robot guarantees. https://LEari.bookeat.es/gotodate/promo', '2022-05-20 11:46:06', '2022-05-20 11:46:06'),
(134, 'HenryLEari', 'wendalynnweaver77@gmail.com', 89038983939, 'Buy everything you want earning money online.', 'The huge income without investments is available. https://LEari.bookeat.es/gotodate/promo', '2022-05-20 16:49:58', '2022-05-20 16:49:58'),
(135, 'HenryLEari', 'venku89@gmail.com', 89030922420, 'Need money? Get it here easily?', '# 1 financial expert in the net! Check out the new Robot. https://LEari.bookeat.es/gotodate/promo', '2022-05-20 21:56:07', '2022-05-20 21:56:07'),
(136, 'HenryLEari', 'jlaird72@gmail.com', 89033851648, 'Thousands of bucks are guaranteed if you use this robot.', 'The success formula is found. Learn more about it. https://LEari.bookeat.es/gotodate/promo', '2022-05-21 02:59:02', '2022-05-21 02:59:02'),
(137, 'HenryLEari', 'prafull.goel@gmail.com', 89038535059, 'Earn additional money without efforts.', 'The financial Robot is your # 1 expert of making money. https://LEari.bookeat.es/gotodate/promo', '2022-05-21 08:26:07', '2022-05-21 08:26:07'),
(138, 'HenryLEari', 'estafford43@yahoo.com', 89031730509, 'Launch the financial Bot now to start earning.', 'Make money online, staying at home this cold winter. https://LEari.bookeat.es/gotodate/promo', '2022-05-21 13:37:37', '2022-05-21 13:37:37'),
(139, 'HenryLEari', 'joey_cky@yahoo.com', 89036862329, 'Make thousands of bucks. Pay nothing.', 'Make thousands of bucks. Financial robot will help you to do it! https://LEari.bookeat.es/gotodate/promo', '2022-05-21 18:50:27', '2022-05-21 18:50:27'),
(140, 'HenryLEari', 'vigi.molfino@yahoo.com', 89037286414, 'No need to stay awake all night long to earn money. Launch the robot.', 'Try out the best financial robot in the Internet. https://LEari.bookeat.es/gotodate/promo', '2022-05-21 23:56:32', '2022-05-21 23:56:32'),
(141, 'HenryLEari', 'pnmjbm143@yahoo.com', 89034985510, 'Earning $1000 a day is easy if you use this financial Robot.', 'Earn additional money without efforts and skills. https://LEari.bookeat.es/gotodate/promo', '2022-05-22 05:08:57', '2022-05-22 05:08:57'),
(142, 'HenryLEari', 'sondra_stamper@yahoo.com', 89035916038, 'The fastest way to make your wallet thick is found.', 'Make yourself rich in future using this financial robot. https://LEari.bookeat.es/gotodate/promo', '2022-05-22 10:34:20', '2022-05-22 10:34:20'),
(143, 'HenryLEari', 'c.tsuruta@yahoo.com', 89036409442, 'Find out about the easiest way of money earning.', 'Earning $1000 a day is easy if you use this financial Robot. https://LEari.bookeat.es/gotodate/promo', '2022-05-22 15:58:25', '2022-05-22 15:58:25'),
(144, 'HenryLEari', 'serpil2710@yahoo.com', 89031545620, 'The huge income without investments is available, now!', 'No need to work anymore. Just launch the robot. https://LEari.bookeat.es/gotodate/promo', '2022-05-22 21:04:58', '2022-05-22 21:04:58'),
(145, 'HenryLEari', 'sweetnsexyagatka@aol.com', 89033525623, 'Make dollars staying at home and launched this Bot.', 'Every your dollar can turn into $100 after you lunch this Robot. https://LEari.bookeat.es/gotodate/promo', '2022-05-23 02:11:58', '2022-05-23 02:11:58'),
(146, 'HenryLEari', 'brendancody421@aol.com', 89032953378, 'Even a child knows how to make money. Do you?', 'See how Robot makes $1000 from $1 of investment. https://LEari.bookeat.es/gotodate/promo', '2022-05-23 07:35:16', '2022-05-23 07:35:16'),
(147, 'HenryLEari', 'saratwigg@gmail.com', 89035009695, 'Need money? Get it here easily?', 'Make money, not war! Financial Robot is what you need. https://LEari.bookeat.es/gotodate/promo', '2022-05-23 12:40:14', '2022-05-23 12:40:14'),
(148, 'HenryLEari', 'reneeeeeee@gmail.com', 89033234206, 'Let your money grow into the capital with this Robot.', 'Join the society of successful people who make money here. https://LEari.bookeat.es/gotodate/promo', '2022-05-23 18:02:32', '2022-05-23 18:02:32'),
(149, 'HenryLEari', 'claytonhouser17@yahoo.com', 89038218885, 'Need money? Get it here easily?', 'Make your computer to be you earning instrument. https://LEari.bookeat.es/gotodate/promotion', '2022-05-23 23:16:13', '2022-05-23 23:16:13'),
(150, 'HenryLEari', 'ashleyweir@gmail.com', 89033596540, 'Make dollars just sitting home.', 'Wow! This is a fastest way for a financial independence. https://LEari.bookeat.es/gotodate/promotion', '2022-05-23 23:17:54', '2022-05-23 23:17:54'),
(151, 'HenryLEari', 'killersob@gmail.com', 89032174356, 'Money, money! Make more money with financial robot!', 'Robot never sleeps. It makes money for you 24/7. https://LEari.bookeat.es/gotodate/promotion', '2022-05-23 23:36:28', '2022-05-23 23:36:28'),
(152, 'HenryLEari', 'pvodbsrjh@msn.com', 89038699387, 'Earn additional money without efforts and skills.', 'Make your computer to be you earning instrument. https://LEari.bookeat.es/gotodate/promotion', '2022-05-24 04:29:37', '2022-05-24 04:29:37'),
(153, 'HenryLEari', 'rohmoxwg@hotmail.com', 89034168065, 'Make dollars just sitting home.', 'The financial Robot is your # 1 expert of making money. https://LEari.bookeat.es/gotodate/promotion', '2022-05-24 09:37:05', '2022-05-24 09:37:05'),
(154, 'HenryLEari', 'lahjhh@earthlink.net', 89030534784, 'We have found the fastest way to be rich. Find it out here.', 'The additional income for everyone. https://LEari.bookeat.es/gotodate/promotion', '2022-05-24 13:42:11', '2022-05-24 13:42:11'),
(155, 'HenryLEari', 'pop_free70@windowslive.com', 89032225072, 'No need to work anymore. Just launch the robot.', 'Need some more money? Robot will earn them really fast. https://LEari.bookeat.es/gotodate/promotion', '2022-05-24 14:17:59', '2022-05-24 14:17:59'),
(156, 'HenryLEari', 'testicloctopus@gmail.com', 89036598720, 'Even a child knows how to make $100 today with the help of this robot.', 'Start making thousands of dollars every week. https://LEari.bookeat.es/gotodate/promotion', '2022-05-24 14:45:35', '2022-05-24 14:45:35'),
(157, 'HenryLEari', 'sondra48monroe@hotmail.com', 89039281465, 'Your computer can bring you additional income if you use this Robot.', 'Only one click can grow up your money really fast. https://LEari.bookeat.es/gotodate/promotion', '2022-05-24 19:18:11', '2022-05-24 19:18:11'),
(158, 'HenryLEari', 'tonach@msn.com', 89034652890, 'Making money is very easy if you use the financial Robot.', 'Attention! Here you can earn money online! https://LEari.bookeat.es/gotodate/promotion', '2022-05-24 19:19:04', '2022-05-24 19:19:04'),
(159, 'HenryLEari', 'emerald592002@yahoo.com', 89031892405, 'Financial robot keeps bringing you money while you sleep.', 'The additional income is available for everyone using this robot. https://LEari.bookeat.es/gotodate/promotion', '2022-05-24 19:54:06', '2022-05-24 19:54:06'),
(160, 'HenryLEari', 'rmartinez1483@yahoo.com', 89038853881, 'The additional income is available for everyone using this robot.', 'Wow! This is a fastest way for a financial independence. https://LEari.bookeat.es/gotodate/promotion', '2022-05-25 00:18:07', '2022-05-25 00:18:07'),
(161, 'HenryLEari', 'nicekickz23@aim.com', 89037553576, 'Make money 24/7 without any efforts and skills.', 'Check out the automatic Bot, which works for you 24/7. https://LEari.bookeat.es/gotodate/promotion', '2022-05-25 00:55:38', '2022-05-25 00:55:38'),
(162, 'HenryLEari', 'yochris2@hotmail.com', 89034457832, 'Robot is the best way for everyone who looks for financial independence.', 'Have no financial skills? Let Robot make money for you. https://LEari.bookeat.es/gotodate/promotion', '2022-05-25 01:00:20', '2022-05-25 01:00:20'),
(163, 'HenryLEari', 'alexis_bubbles09@yahoo.com', 89039869051, 'Robot never sleeps. It makes money for you 24/7.', 'The online income is the easiest ways to make you dream come true. https://LEari.bookeat.es/gotodate/promotion', '2022-05-25 05:20:51', '2022-05-25 05:20:51'),
(164, 'HenryLEari', 'faithycrispy@yahoo.com', 89031315396, 'Have no money? Earn it online.', 'The online income is the easiest ways to make you dream come true. https://LEari.bookeat.es/gotodate/promotion', '2022-05-25 06:12:29', '2022-05-25 06:12:29'),
(165, 'HenryLEari', 's.hedenstierna@telia.com', 89031072407, 'Make thousands of bucks. Financial robot will help you to do it!', 'Make $1000 from $1 in a few minutes. Launch the financial robot now. https://LEari.bookeat.es/gotodate/promotion', '2022-05-25 06:36:19', '2022-05-25 06:36:19'),
(166, 'HenryLEari', 'paulgreen710@yahoo.com', 89036751994, 'Turn $1 into $100 instantly. Use the financial Robot.', 'Need money? Earn it without leaving your home. https://LEari.bookeat.es/gotodate/promotion', '2022-05-25 10:32:07', '2022-05-25 10:32:07'),
(167, 'HenryLEari', 'pah_penedo@hotmail.com', 89035044701, 'Need cash? Launch this robot and see what it can.', 'Wow! This is a fastest way for a financial independence. https://LEari.bookeat.es/gotodate/promotion', '2022-05-25 11:21:48', '2022-05-25 11:21:48'),
(168, 'HenryLEari', 'teresa1618@att.net', 89032662240, 'Have no financial skills? Let Robot make money for you.', 'Robot is the best way for everyone who looks for financial independence. https://LEari.bookeat.es/gotodate/promotion', '2022-05-25 12:13:32', '2022-05-25 12:13:32'),
(169, 'HenryLEari', 'kaylerzhelton@ymail.com', 89034022480, 'Trust the financial Bot to become rich.', 'Invest $1 today to make $1000 tomorrow. https://LEari.bookeat.es/gotodate/promotion', '2022-05-25 13:19:30', '2022-05-25 13:19:30'),
(170, 'HenryLEari', 'like2watchu73@yahoo.com', 89037775616, 'We know how to become rich and do you?', 'Your money work even when you sleep. https://LEari.bookeat.es/gotodate/promotion', '2022-05-25 16:27:45', '2022-05-25 16:27:45'),
(171, 'HenryLEari', 'softballsuperstar20@gmail.com', 89036707399, 'Start making thousands of dollars every week just using this robot.', 'Check out the automatic Bot, which works for you 24/7. https://LEari.bookeat.es/gotodate/promotion', '2022-05-25 17:46:55', '2022-05-25 17:46:55'),
(172, 'HenryLEari', 'dominiquejstar@gmail.com', 89036752282, 'Using this Robot is the best way to make you rich.', 'Need money? Get it here easily! Just press this to launch the robot. https://LEari.bookeat.es/gotodate/promotion', '2022-05-25 18:28:43', '2022-05-25 18:28:43'),
(173, 'HenryLEari', 'ch1ck1000@hotmail.com', 89036818238, 'Automatic robot is the best start for financial independence.', 'No worries if you are fired. Work online. https://LEari.bookeat.es/gotodate/promotion', '2022-05-25 21:42:54', '2022-05-25 21:42:54'),
(174, 'HenryLEari', 'allan.grigsby@gmail.com', 89036622008, 'The additional income is available for everyone using this robot.', 'Trust your dollar to the Robot and see how it grows to $100. https://LEari.bookeat.es/gotodate/promotion', '2022-05-25 23:20:58', '2022-05-25 23:20:58'),
(175, 'HenryLEari', 'vicky.esp@hotmail.com', 89038658285, 'Financial robot guarantees everyone stability and income.', 'Need money? Get it here easily? https://LEari.bookeat.es/gotodate/promotion', '2022-05-25 23:35:01', '2022-05-25 23:35:01'),
(176, 'HenryLEari', 'nealcrow@blackinbox.org', 89032372732, 'No need to work anymore while you have the Robot launched!', 'Still not a millionaire? Fix it now! https://LEari.bookeat.es/gotodate/promotion', '2022-05-26 02:55:48', '2022-05-26 02:55:48'),
(177, 'HenryLEari', 'coollookingal@yahoo.com', 89036615177, 'Invest $1 today to make $1000 tomorrow.', 'Make dollars just sitting home. https://LEari.bookeat.es/gotodate/promotion', '2022-05-26 04:55:28', '2022-05-26 04:55:28'),
(178, 'HenryLEari', 'jonathan.proctor@gmail.com', 89035346208, 'Automatic robot is the best start for financial independence.', 'The online job can bring you a fantastic profit. https://LEari.bookeat.es/gotodate/promotion', '2022-05-26 04:57:37', '2022-05-26 04:57:37'),
(179, 'HenryLEari', 'corgi21@yahoo.com', 89037380205, 'The additional income is available for everyone using this robot.', 'Looking for additional money? Try out the best financial instrument. https://LEari.bookeat.es/gotodate/promotion', '2022-05-26 08:10:10', '2022-05-26 08:10:10'),
(180, 'HenryLEari', 'marketing2@gospell.com', 89034908646, 'Still not a millionaire? Fix it now!', 'The fastest way to make you wallet thick is here. https://LEari.bookeat.es/gotodate/promotion', '2022-05-26 09:52:01', '2022-05-26 09:52:01'),
(181, 'HenryLEari', 'sohorny69tonight@hotmail.com', 89034124275, 'Financial robot keeps bringing you money while you sleep.', 'Check out the new financial tool, which can make you rich. https://LEari.bookeat.es/gotodate/promotion', '2022-05-26 10:50:38', '2022-05-26 10:50:38'),
(182, 'HenryLEari', 'ratana76@yahoo.com', 89039853398, 'Start your online work using the financial Robot.', 'We know how to become rich and do you? https://LEari.bookeat.es/gotodate/promotion', '2022-05-26 12:01:11', '2022-05-26 12:01:11'),
(183, 'HenryLEari', 'laura_hensley@yahoo.com', 89036787019, 'Most successful people already use Robot. Do you?', 'Check out the new financial tool, which can make you rich. https://LEari.bookeat.es/gotodate/promotion', '2022-05-26 13:26:25', '2022-05-26 13:26:25'),
(184, 'HenryLEari', 'salavatvioleta@yahoo.com', 89036349263, 'Buy everything you want earning money online.', 'Online earnings are the easiest way for financial independence. https://LEari.bookeat.es/gotodate/promotion', '2022-05-26 16:29:50', '2022-05-26 16:29:50'),
(185, 'HenryLEari', 'lupita04@outlook.com', 89032831764, 'Only one click can grow up your money really fast.', 'Let your money grow into the capital with this Robot. https://LEari.bookeat.es/gotodate/promotion', '2022-05-26 16:59:04', '2022-05-26 16:59:04'),
(186, 'HenryLEari', 'audreycrossen@gmail.com', 89038274711, 'Launch the robot and let it bring you money.', 'Looking for an easy way to make money? Check out the financial robot. https://LEari.bookeat.es/gotodate/promotion', '2022-05-26 18:46:23', '2022-05-26 18:46:23'),
(187, 'HenryLEari', 'aframprosper@yahoo.com', 89031679755, 'Make thousands every week working online here.', 'Robot is the best way for everyone who looks for financial independence. https://LEari.bookeat.es/gotodate/promotion', '2022-05-26 19:21:33', '2022-05-26 19:21:33'),
(188, 'HenryLEari', 'daleball1326@yahoo.com', 89039766115, 'The fastest way to make you wallet thick is here.', 'Every your dollar can turn into $100 after you lunch this Robot. https://LEari.battletech-newsletter.de/gotodate/promo', '2022-05-26 22:05:53', '2022-05-26 22:05:53'),
(189, 'HenryLEari', 'i_punish_u0164@yahoo.com', 89032554514, 'The huge income without investments is available, now!', 'No need to stay awake all night long to earn money. Launch the robot. https://LEari.battletech-newsletter.de/gotodate/promo', '2022-05-27 00:19:01', '2022-05-27 00:19:01'),
(190, 'HenryLEari', 'rlarry@hotmail.com', 89030761614, 'Looking for an easy way to make money? Check out the financial robot.', 'The online income is the easiest ways to make you dream come true. https://LEari.battletech-newsletter.de/gotodate/promo', '2022-05-27 00:43:09', '2022-05-27 00:43:09'),
(191, 'HenryLEari', 'rgarofalo2000@yahoo.com', 89032347940, 'We know how to become rich and do you?', 'No need to worry about the future if your use this financial robot. https://LEari.battletech-newsletter.de/gotodate/promo', '2022-05-27 03:47:33', '2022-05-27 03:47:33'),
(192, 'HenryLEari', 'jscmpower@comcast.net', 89031707781, 'Make thousands of bucks. Financial robot will help you to do it!', 'The success formula is found. Learn more about it. https://LEari.battletech-newsletter.de/gotodate/promo', '2022-05-27 05:31:28', '2022-05-27 05:31:28'),
(193, 'HenryLEari', 'woman@dergunter.org', 89039701552, 'Learn how to make hundreds of backs each day.', 'Find out about the easiest way of money earning. https://LEari.battletech-newsletter.de/gotodate/promo', '2022-05-27 05:41:33', '2022-05-27 05:41:33');
INSERT INTO `txn_contact_us` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(194, 'HenryLEari', 'cookmaddy@ymail.com', 89032035872, 'Still not a millionaire? Fix it now!', 'This robot can bring you money 24/7. https://LEari.battletech-newsletter.de/gotodate/promo', '2022-05-27 09:24:07', '2022-05-27 09:24:07'),
(195, 'HenryLEari', 'josh_blanchard@yahoo.com', 89039965333, 'Even a child knows how to make money. This robot is what you need!', 'The success formula is found. Learn more about it. https://LEari.battletech-newsletter.de/gotodate/promo', '2022-05-27 10:39:10', '2022-05-27 10:39:10'),
(196, 'HenryLEari', 'david.turnbull1234@gmail.com', 89036114136, 'The financial Robot is your # 1 expert of making money.', 'Everyone can earn as much as he wants suing this Bot. https://LEari.battletech-newsletter.de/gotodate/promo', '2022-05-27 10:39:11', '2022-05-27 10:39:11'),
(197, 'HenryLEari', 'DFORNDUFF@aol.com', 89032758749, 'Feel free to buy everything you want with the additional income.', 'Financial robot is your success formula is found. Learn more about it. https://LEari.battletech-newsletter.de/gotodate/promo', '2022-05-27 15:01:59', '2022-05-27 15:01:59'),
(198, 'HenryLEari', 'jeff61@warpnet.net', 89035009504, 'Looking forward for income? Get it online.', 'Make money in the internet using this Bot. It really works! https://LEari.battletech-newsletter.de/gotodate/promo', '2022-05-27 15:36:52', '2022-05-27 15:36:52'),
(199, 'HenryLEari', 'sherath_fatty@hotmail.com', 89039635800, 'We have found the fastest way to be rich. Find it out here.', 'Earning money in the Internet is easy if you use Robot. https://LEari.battletech-newsletter.de/gotodate/promo', '2022-05-27 16:30:00', '2022-05-27 16:30:00'),
(200, 'HenryLEari', 'shrofflvmu@hotmail.com', 89030385366, 'We know how to make our future rich and do you?', 'Have no money? It’s easy to earn them online here. https://LEari.battletech-newsletter.de/gotodate/promo', '2022-05-27 18:42:56', '2022-05-27 18:42:56'),
(201, 'HenryLEari', 'shoesonfeet205@netscape.net', 89035206134, 'Small investments can bring tons of dollars fast.', 'Everyone can earn as much as he wants now. https://LEari.battletech-newsletter.de/gotodate/promo', '2022-05-27 20:47:20', '2022-05-27 20:47:20'),
(202, 'HenryLEari', 'lisamwolff@juno.com', 89039286985, 'Still not a millionaire? Fix it now!', 'Financial independence is what this robot guarantees. https://LEari.battletech-newsletter.de/gotodate/promo', '2022-05-27 20:47:30', '2022-05-27 20:47:30'),
(203, 'HenryLEari', 'jithumpa@gmail.com', 89037126627, 'Making money in the net is easier now.', 'There is no need to look for a job anymore. Work online. https://LEari.battletech-newsletter.de/LEari', '2022-05-28 00:27:26', '2022-05-28 00:27:26'),
(204, 'HenryLEari', 'patha.naveen40@gmail.com', 89035238516, 'Make thousands of bucks. Financial robot will help you to do it!', '# 1 financial expert in the net! Check out the new Robot. https://LEari.battletech-newsletter.de/LEari', '2022-05-28 01:45:05', '2022-05-28 01:45:05'),
(205, 'HenryLEari', 'Planialork@ymail.com', 89034836122, 'Buy everything you want earning money online.', 'Thousands of bucks are guaranteed if you use this robot. https://LEari.battletech-newsletter.de/LEari', '2022-05-28 02:20:36', '2022-05-28 02:20:36'),
(206, 'HenryLEari', 'seanodwyer140@gmail.com', 89036313319, 'Invest $1 today to make $1000 tomorrow.', 'Trust the financial Bot to become rich. https://LEari.battletech-newsletter.de/LEari', '2022-05-28 05:36:20', '2022-05-28 05:36:20'),
(207, 'HenryLEari', 'sandro_dmf@hotmail.com', 89032276926, 'No need to stay awake all night long to earn money. Launch the robot.', 'Trust your dollar to the Robot and see how it grows to $100. https://LEari.battletech-newsletter.de/LEari', '2022-05-28 06:43:09', '2022-05-28 06:43:09'),
(208, 'HenryLEari', 'john@hempster.com', 89033118768, 'Need money? Get it here easily?', 'No need to work anymore. Just launch the robot. https://LEari.battletech-newsletter.de/LEari', '2022-05-28 08:05:38', '2022-05-28 08:05:38'),
(209, 'HenryLEari', 'kstrickland@corinth.k12.ms.us', 89037126781, 'Using this Robot is the best way to make you rich.', 'No need to work anymore. Just launch the robot. https://LEari.battletech-newsletter.de/LEari', '2022-05-28 10:42:21', '2022-05-28 10:42:21'),
(210, 'HenryLEari', 'kathy.freeman@hector.k12.ar.us', 89038790491, 'Even a child knows how to make money. This robot is what you need!', 'Financial independence is what this robot guarantees. https://LEari.battletech-newsletter.de/LEari', '2022-05-28 11:41:36', '2022-05-28 11:41:36'),
(211, 'HenryLEari', 'caseydalthorp@yahoo.com', 89032630449, 'Financial robot keeps bringing you money while you sleep.', 'Launch the best investment instrument to start making money today. https://LEari.battletech-newsletter.de/LEari', '2022-05-28 13:39:19', '2022-05-28 13:39:19'),
(212, 'HenryLEari', 'bajnessjnry@ymail.net', 89031435091, 'The fastest way to make you wallet thick is here.', 'We know how to become rich and do you? https://LEari.battletech-newsletter.de/LEari', '2022-05-28 16:04:19', '2022-05-28 16:04:19'),
(213, 'HenryLEari', 'jsyy1102@hanmail.net', 89031293494, 'Money, money! Make more money with financial robot!', 'One click of the robot can bring you thousands of bucks. https://LEari.battletech-newsletter.de/LEari', '2022-05-28 17:07:58', '2022-05-28 17:07:58'),
(214, 'HenryLEari', 'missdeeva_01@yahoo.com', 89036064417, 'Financial independence is what this robot guarantees.', 'Money, money! Make more money with financial robot! https://LEari.battletech-newsletter.de/LEari', '2022-05-28 19:12:58', '2022-05-28 19:12:58'),
(215, 'HenryLEari', 'soxchild06@yahoo.com', 89038430637, 'Financial independence is what everyone needs.', 'Start your online work using the financial Robot. https://LEari.battletech-newsletter.de/LEari', '2022-05-28 21:37:08', '2022-05-28 21:37:08'),
(216, 'HenryLEari', 'chaines91@aol.com', 89035197107, 'No need to stay awake all night long to earn money. Launch the robot.', 'Even a child knows how to make money. Do you? https://LEari.battletech-newsletter.de/LEari', '2022-05-28 21:58:18', '2022-05-28 21:58:18'),
(217, 'HenryLEari', 'LULASASSO@GMAIL.COM', 89034043221, 'Thousands of bucks are guaranteed if you use this robot.', 'The best way for everyone who rushes for financial independence. https://LEari.battletech-newsletter.de/LEari', '2022-05-29 00:56:51', '2022-05-29 00:56:51'),
(218, 'HenryLEari', 'Tanya0777@yahoo.com', 89032197218, 'The online income is the easiest ways to make you dream come true.', 'Online earnings are the easiest way for financial independence. https://LEari.battletech-newsletter.de/LEari', '2022-05-29 03:01:40', '2022-05-29 03:01:40'),
(219, 'HenryLEari', 'sherrilantas@comcast.net', 89039717148, 'This robot can bring you money 24/7.', 'The online income is the easiest ways to make you dream come true. https://LEari.battletech-newsletter.de/LEari', '2022-05-29 03:20:14', '2022-05-29 03:20:14'),
(220, 'HenryLEari', 'mvidger@yahoo.com', 89035578788, 'Financial robot guarantees everyone stability and income.', 'Your money keep grow 24/7 if you use the financial Robot. https://LEari.battletech-newsletter.de/LEari', '2022-05-29 06:35:33', '2022-05-29 06:35:33'),
(221, 'HenryLEari', 'isthatso21@yahoo.com', 89036122577, 'The success formula is found. Learn more about it.', 'Make dollars staying at home and launched this Bot. https://LEari.battletech-newsletter.de/LEari', '2022-05-29 08:13:16', '2022-05-29 08:13:16'),
(222, 'HenryLEari', 'ririman11@yahoo.com', 89036204399, 'Launch the financial Robot and do your business.', 'Start making thousands of dollars every week. https://LEari.battletech-newsletter.de/LEari', '2022-05-29 08:29:43', '2022-05-29 08:29:43'),
(223, 'HenryLEari', 'gala1dre@yahoo.com', 89036557972, 'Robot is the best solution for everyone who wants to earn.', 'Small investments can bring tons of dollars fast. https://LEari.battletech-newsletter.de/LEari', '2022-05-29 12:48:00', '2022-05-29 12:48:00'),
(224, 'HenryLEari', 'ltbvnpro57904abc@gmail.com', 89031455682, 'Feel free to buy everything you want with the additional income.', 'One dollar is nothing, but it can grow into $100 here. https://LEari.battletech-newsletter.de/LEari', '2022-05-29 13:25:22', '2022-05-29 13:25:22'),
(225, 'HenryLEari', 'ivalves@hotmail.com', 89035596158, 'Check out the new financial tool, which can make you rich.', 'The online job can bring you a fantastic profit. https://LEari.battletech-newsletter.de/LEari', '2022-05-29 13:28:54', '2022-05-29 13:28:54'),
(226, 'HenryLEari', 'atos4sho@yahoo.com', 89037665191, 'The financial Robot is your future wealth and independence.', 'Earning $1000 a day is easy if you use this financial Robot. https://LEari.battletech-newsletter.de/LEari', '2022-05-29 14:44:13', '2022-05-29 14:44:13'),
(227, 'HenryLEari', 'swfitzhq@hotmail.com', 89039805298, 'Still not a millionaire? Fix it now!', 'Make thousands every week working online here. https://LEari.battletech-newsletter.de/LEari', '2022-05-29 18:22:15', '2022-05-29 18:22:15'),
(228, 'HenryLEari', 'BrightAngel2606@gmail.com', 89031445807, 'Automatic robot is the best start for financial independence.', 'Learn how to make hundreds of backs each day. https://LEari.battletech-newsletter.de/LEari', '2022-05-29 18:26:19', '2022-05-29 18:26:19'),
(229, 'HenryLEari', 'razor.wyta@yahoo.com', 89032995969, 'Make thousands every week working online here.', 'Even a child knows how to make money. Do you? https://LEari.battletech-newsletter.de/LEari', '2022-05-29 20:19:40', '2022-05-29 20:19:40'),
(230, 'HenryLEari', 'widemanslugger@yahoo.com', 89032553598, 'The online income is the easiest ways to make you dream come true.', 'Money, money! Make more money with financial robot! https://LEari.battletech-newsletter.de/LEari', '2022-05-29 23:31:38', '2022-05-29 23:31:38'),
(231, 'HenryLEari', 's.rachael2@outlook.com', 89030045329, 'Additional income is now available for anyone all around the world.', 'Make your computer to be you earning instrument. https://LEari.battletech-newsletter.de/LEari', '2022-05-29 23:59:13', '2022-05-29 23:59:13'),
(232, 'HenryLEari', 'Wlindeke@gmail.com', 89033577199, 'Your money keep grow 24/7 if you use the financial Robot.', 'The financial Robot works for you even when you sleep. https://LEari.battletech-newsletter.de/LEari', '2022-05-30 01:47:04', '2022-05-30 01:47:04'),
(233, 'HenryLEari', 'therockgod14@aol.com', 89036512408, 'Launch the financial Robot and do your business.', 'Need some more money? Robot will earn them really fast. https://LEari.battletech-newsletter.de/LEari', '2022-05-30 04:28:31', '2022-05-30 04:28:31'),
(234, 'HenryLEari', 'remralino@hammers.com', 89038351344, 'Attention! Here you can earn money online!', 'Still not a millionaire? Fix it now! https://LEari.battletech-newsletter.de/LEari', '2022-05-30 05:30:40', '2022-05-30 05:30:40'),
(235, 'HenryLEari', 'bigsinte@yahoo.com', 89039294236, 'Need money? Get it here easily?', 'Try out the best financial robot in the Internet. https://LEari.battletech-newsletter.de/LEari', '2022-05-30 07:18:47', '2022-05-30 07:18:47'),
(236, 'HenryLEari', 'ltbprovip8645225abc@mail.com', 89031913795, 'Start your online work using the financial Robot.', 'Feel free to buy everything you want with the additional income. https://LEari.battletech-newsletter.de/LEari', '2022-05-30 09:24:12', '2022-05-30 09:24:12'),
(237, 'HenryLEari', 'lilyt_21@yahoo.com', 89033823880, 'Need some more money? Robot will earn them really fast.', 'Attention! Here you can earn money online! https://LEari.battletech-newsletter.de/LEari', '2022-05-30 09:27:09', '2022-05-30 09:27:09'),
(238, 'HenryLEari', 'ktls22@hotmail.com', 89034773655, 'Online job can be really effective if you use this Robot.', 'The best online job for retirees. Make your old ages rich. https://LEari.battletech-newsletter.de/LEari', '2022-05-30 11:15:51', '2022-05-30 11:15:51'),
(239, 'HenryLEari', 'youngstunnuh@yahoo.com', 89037749381, 'We know how to increase your financial stability.', 'Need money? Get it here easily? https://LEari.battletech-newsletter.de/LEari', '2022-05-30 14:37:18', '2022-05-30 14:37:18'),
(240, 'HenryLEari', 'meandyou1126@yahoo.com', 89030390900, 'Robot is the best way for everyone who looks for financial independence.', 'Check out the automatic Bot, which works for you 24/7. https://LEari.battletech-newsletter.de/LEari', '2022-05-30 14:40:30', '2022-05-30 14:40:30'),
(241, 'HenryLEari', 'germeta75@gmail.com', 89037251096, 'Find out about the fastest way for a financial independence.', 'The additional income is available for everyone using this robot. https://LEari.battletech-newsletter.de/LEari', '2022-05-30 16:51:20', '2022-05-30 16:51:20'),
(242, 'HenryLEari', 'donhauk@yahoo.com', 89034442316, 'The financial Robot is your # 1 expert of making money.', 'Start making thousands of dollars every week just using this robot. https://LEari.battletech-newsletter.de/LEari', '2022-05-30 19:51:22', '2022-05-30 19:51:22'),
(243, 'HenryLEari', 'cheeseburgerchick@hotmail.com', 89036972759, 'Financial robot is the best companion of rich people.', 'We know how to become rich and do you? https://LEari.battletech-newsletter.de/LEari', '2022-05-30 20:15:58', '2022-05-30 20:15:58'),
(244, 'HenryLEari', 'jamjohnson@comcast.net', 89034969256, 'Your money work even when you sleep.', 'See how Robot makes $1000 from $1 of investment. https://LEari.battletech-newsletter.de/LEari', '2022-05-30 23:09:36', '2022-05-30 23:09:36'),
(245, 'HenryLEari', 'penhoi_ilusm@yahoo.com', 89032161883, 'We have found the fastest way to be rich. Find it out here.', 'Launch the financial Robot and do your business. https://LEari.battletech-newsletter.de/LEari', '2022-05-31 00:51:27', '2022-05-31 00:51:27'),
(246, 'HenryLEari', 'maxturbo@ukr.net', 89039686546, 'Launch the financial Robot and do your business.', 'Online earnings are the easiest way for financial independence. https://LEari.battletech-newsletter.de/LEari', '2022-05-31 01:33:47', '2022-05-31 01:33:47'),
(247, 'HenryLEari', 'sonasingh54@gmail.com', 89039774242, 'Financial robot guarantees everyone stability and income.', 'The financial Robot is your # 1 expert of making money. https://LEari.battletech-newsletter.de/LEari', '2022-05-31 04:45:05', '2022-05-31 04:45:05'),
(248, 'HenryLEari', 'oldsalt001@gmail.com', 89037514517, 'Online job can be really effective if you use this Robot.', 'Automatic robot is the best start for financial independence. https://LEari.battletech-newsletter.de/LEari', '2022-05-31 06:06:23', '2022-05-31 06:06:23'),
(249, 'HenryLEari', 'dkbarcticsnowkat@verizon.net', 89037603115, 'Financial robot is your success formula is found. Learn more about it.', 'Need money? The financial robot is your solution. https://LEari.battletech-newsletter.de/LEari', '2022-05-31 06:43:45', '2022-05-31 06:43:45'),
(250, 'HenryLEari', 'vivian_ci@redinbox.org', 89034611998, 'The fastest way to make you wallet thick is here.', 'Online earnings are the easiest way for financial independence. https://LEari.battletech-newsletter.de/LEari', '2022-05-31 10:19:00', '2022-05-31 10:19:00'),
(251, 'HenryLEari', 'eddieestrad@gmail.com', 89039683757, 'No need to work anymore while you have the Robot launched!', 'Make money online, staying at home this cold winter. https://LEari.battletech-newsletter.de/LEari', '2022-05-31 11:18:59', '2022-05-31 11:18:59'),
(252, 'HenryLEari', 'Barbara.Tancredi@yahoo.com', 89035611322, 'We know how to increase your financial stability.', 'Financial independence is what everyone needs. https://LEari.battletech-newsletter.de/LEari', '2022-05-31 12:00:27', '2022-05-31 12:00:27'),
(253, 'HenryLEari', 'mhewitt2463@gmail.com', 89035383325, 'Using this Robot is the best way to make you rich.', 'Financial independence is what everyone needs. https://LEari.battletech-newsletter.de/LEari', '2022-05-31 16:00:06', '2022-05-31 16:00:06'),
(254, 'HenryLEari', 'invy@yahoo.com', 89035925346, 'No worries if you are fired. Work online.', 'Make dollars just sitting home. https://LEari.battletech-newsletter.de/LEari', '2022-05-31 16:26:22', '2022-05-31 16:26:22'),
(255, 'HenryLEari', 'loisburns@hotmail.com', 89038169228, 'No worries if you are fired. Work online.', 'No need to work anymore. Just launch the robot. https://LEari.battletech-newsletter.de/LEari', '2022-05-31 17:27:18', '2022-05-31 17:27:18'),
(256, 'HenryLEari', 'chankw.my@gmail.com', 89038891282, 'No worries if you are fired. Work online.', 'Trust your dollar to the Robot and see how it grows to $100. https://LEari.battletech-newsletter.de/LEari', '2022-05-31 21:27:51', '2022-05-31 21:27:51'),
(257, 'HenryLEari', 't.borick@student.boyertownasd.org', 89035784223, 'Financial independence is what this robot guarantees.', 'Robot is the best way for everyone who looks for financial independence. https://LEari.battletech-newsletter.de/LEari', '2022-05-31 21:42:49', '2022-05-31 21:42:49'),
(258, 'HenryLEari', 'sjabbink@hotmail.com', 89036431505, 'Make your money work for you all day long.', 'We have found the fastest way to be rich. Find it out here. https://LEari.battletech-newsletter.de/LEari', '2022-05-31 23:05:52', '2022-05-31 23:05:52'),
(259, 'HenryLEari', 'cutiepie420@bellsouth.net', 89039117937, 'Make yourself rich in future using this financial robot.', 'The online job can bring you a fantastic profit. https://LEari.battletech-newsletter.de/LEari', '2022-06-01 02:38:38', '2022-06-01 02:38:38'),
(260, 'HenryLEari', 'rosellini34@yahoo.com', 89039020160, 'Start your online work using the financial Robot.', 'No worries if you are fired. Work online. https://LEari.battletech-newsletter.de/LEari', '2022-06-01 03:17:08', '2022-06-01 03:17:08'),
(261, 'HenryLEari', 'eprhuggenaath@citco.com', 89036627520, 'Start your online work using the financial Robot.', 'Financial robot is your success formula is found. Learn more about it. https://LEari.battletech-newsletter.de/LEari', '2022-06-01 04:19:24', '2022-06-01 04:19:24'),
(262, 'HenryLEari', 'convoy_zaa@hotmail.com', 89032332672, 'Make your computer to be you earning instrument.', 'Even a child knows how to make $100 today. https://LEari.battletech-newsletter.de/LEari', '2022-06-01 07:39:53', '2022-06-01 07:39:53'),
(263, 'HenryLEari', 'rigo_gomez71@yahoo.com', 89030052270, 'Financial robot is the best companion of rich people.', 'Make thousands every week working online here. https://LEari.battletech-newsletter.de/LEari', '2022-06-01 08:54:23', '2022-06-01 08:54:23'),
(264, 'HenryLEari', 'domscarangella@aol.com', 89032245039, 'Make your money work for you all day long.', 'Robot is the best way for everyone who looks for financial independence. https://LEari.battletech-newsletter.de/LEari', '2022-06-01 09:40:22', '2022-06-01 09:40:22'),
(265, 'HenryLEari', 'Coraline.Bat319@googlemail.com', 89036501407, 'Even a child knows how to make money. Do you?', 'Making money can be extremely easy if you use this Robot. https://LEari.battletech-newsletter.de/LEari', '2022-06-01 14:35:14', '2022-06-01 14:35:14'),
(266, 'HenryLEari', 'qizemdoqanay@windowslive.com', 89037986828, 'Just one click can turn you dollar into $1000.', 'Looking for an easy way to make money? Check out the financial robot. https://LEari.battletech-newsletter.de/LEari', '2022-06-01 15:30:30', '2022-06-01 15:30:30'),
(267, 'HenryLEari', 'max.deluca@thermofisher.com', 89039479782, 'Still not a millionaire? Fix it now!', 'Financial robot is the best companion of rich people. https://LEari.battletech-newsletter.de/LEari', '2022-06-01 18:09:38', '2022-06-01 18:09:38'),
(268, 'HenryLEari', 'arlene@desertphotos.com', 89039065565, 'Make your laptop a financial instrument with this program.', 'Financial robot is your success formula is found. Learn more about it. https://LEari.battletech-newsletter.de/LEari', '2022-06-01 19:14:19', '2022-06-01 19:14:19'),
(269, 'HenryLEari', 'k-lyn13@hotmail.com', 89030135590, 'Make money 24/7 without any efforts and skills.', 'Robot never sleeps. It makes money for you 24/7. https://LEari.battletech-newsletter.de/LEari', '2022-06-01 20:36:21', '2022-06-01 20:36:21'),
(270, 'HenryLEari', 'cuca_laloca@hotmail.com', 89031191511, 'Check out the automatic Bot, which works for you 24/7.', 'Your money keep grow 24/7 if you use the financial Robot. https://LEari.battletech-newsletter.de/LEari', '2022-06-01 20:45:52', '2022-06-01 20:45:52'),
(271, 'HenryLEari', 'cvandeusen@cox.net', 89035462897, 'Online Bot will bring you wealth and satisfaction.', 'The best online job for retirees. Make your old ages rich. https://LEari.battletech-newsletter.de/LEari', '2022-06-02 00:04:55', '2022-06-02 00:04:55'),
(272, 'HenryLEari', 'keairawhack@mail.com', 89036394255, 'Join the society of successful people who make money here.', 'Try out the automatic robot to keep earning all day long. https://LEari.battletech-newsletter.de/LEari', '2022-06-02 01:57:10', '2022-06-02 01:57:10'),
(273, 'HenryLEari', 'khanna15279@gmail.com', 89036657995, 'Start making thousands of dollars every week just using this robot.', 'Making money can be extremely easy if you use this Robot. https://LEari.battletech-newsletter.de/LEari', '2022-06-02 02:13:34', '2022-06-02 02:13:34'),
(274, 'HenryLEari', 'RookTessa9292@o2.pl', 89036128053, 'Need money? Get it here easily?', 'Need money? Get it here easily! Just press this to launch the robot. https://LEari.battletech-newsletter.de/LEari', '2022-06-02 21:13:30', '2022-06-02 21:13:30'),
(275, 'HenryLEari', 'RookTessa9292@o2.pl', 89030039455, 'One dollar is nothing, but it can grow into $100 here.', 'Find out about the easiest way of money earning. https://LEari.bode-roesch.de/LEari', '2022-06-03 09:30:14', '2022-06-03 09:30:14'),
(276, 'HenryLEari', 'RookTessa9292@o2.pl', 89035989741, 'Even a child knows how to make $100 today with the help of this robot.', 'Using this Robot is the best way to make you rich. https://LEari.bode-roesch.de/LEari', '2022-06-04 13:33:45', '2022-06-04 13:33:45'),
(277, 'HenryLEari', 'RookTessa9292@o2.pl', 89030358334, 'Making money can be extremely easy if you use this Robot.', 'No need to worry about the future if your use this financial robot. https://LEari.bode-roesch.de/LEari', '2022-06-05 17:58:49', '2022-06-05 17:58:49'),
(278, 'HenryLEari', '233@forum.dk', 89039645538, 'Wow! This Robot is a great start for an online career.', 'Wow! This Robot is a great start for an online career. https://LEari.bode-roesch.de/LEari', '2022-06-06 04:25:49', '2022-06-06 04:25:49'),
(279, 'HenryLEari', 'schreiber@forum.dk', 89037469062, 'Attention! Financial robot may bring you millions!', 'The online financial Robot is your key to success. https://LEari.bode-roesch.de/LEari', '2022-06-06 06:46:33', '2022-06-06 06:46:33'),
(280, 'HenryLEari', 'thomas1petersen@mailme.dk', 89034995238, 'Buy everything you want earning money online.', 'Additional income is now available for anyone all around the world. https://LEari.bode-roesch.de/LEari', '2022-06-06 09:08:46', '2022-06-06 09:08:46'),
(281, 'HenryLEari', 'thomas01@forum.dk', 89033783389, 'Online Bot will bring you wealth and satisfaction.', 'Financial robot keeps bringing you money while you sleep. https://LEari.bode-roesch.de/LEari', '2022-06-06 11:32:11', '2022-06-06 11:32:11'),
(282, 'HenryLEari', 'yyc12@mailme.dk', 89031943710, 'See how Robot makes $1000 from $1 of investment.', 'Launch the financial Robot and do your business. https://LEari.bode-roesch.de/LEari', '2022-06-06 13:50:46', '2022-06-06 13:50:46'),
(283, 'HenryLEari', 'helle-rasmussen@forum.dk', 89039940465, 'Launch the robot and let it bring you money.', 'Financial independence is what everyone needs. https://LEari.bode-roesch.de/LEari', '2022-06-06 16:22:02', '2022-06-06 16:22:02'),
(284, 'HenryLEari', 'crazyxxx@forum.dk', 89039917499, 'Earn additional money without efforts.', 'Online earnings are the easiest way for financial independence. https://LEari.bode-roesch.de/LEari', '2022-06-06 18:47:39', '2022-06-06 18:47:39'),
(285, 'HenryLEari', 'zodiac_e800@yahoo.com', 89033395162, 'Still not a millionaire? The financial robot will make you him!', 'Only one click can grow up your money really fast. https://LEari.bode-roesch.de/LEari', '2022-06-06 21:04:32', '2022-06-06 21:04:32'),
(286, 'HenryLEari', 'pelle99@forum.dk', 89034525857, 'Start making thousands of dollars every week just using this robot.', 'See how Robot makes $1000 from $1 of investment. https://LEari.bode-roesch.de/LEari', '2022-06-06 23:44:47', '2022-06-06 23:44:47'),
(287, 'HenryLEari', 'peter1@yahoo.com', 89033724014, 'Make thousands of bucks. Pay nothing.', 'Feel free to buy everything you want with the additional income. https://LEari.bode-roesch.de/LEari', '2022-06-07 02:07:59', '2022-06-07 02:07:59'),
(288, 'HenryLEari', 'soumayaoali@forum.dk', 89034346824, 'Watch your money grow while you invest with the Robot.', 'The online income is the easiest ways to make you dream come true. https://LEari.bode-roesch.de/LEari', '2022-06-07 04:25:22', '2022-06-07 04:25:22'),
(289, 'HenryLEari', 'emerson@mail-online.dk', 89038432890, 'The financial Robot is your future wealth and independence.', 'We have found the fastest way to be rich. Find it out here. https://LEari.bode-roesch.de/LEari', '2022-06-07 07:10:27', '2022-06-07 07:10:27'),
(290, 'HenryLEari', 'gforce4@mail-online.dk', 89039923780, 'The additional income for everyone.', 'See how Robot makes $1000 from $1 of investment. https://LEari.bode-roesch.de/LEari', '2022-06-07 09:28:18', '2022-06-07 09:28:18'),
(291, 'HenryLEari', 'dimaadebayor@mailme.dk', 89033854090, 'Launch the robot and let it bring you money.', 'The fastest way to make your wallet thick is found. https://LEari.bode-roesch.de/LEari', '2022-06-07 12:08:47', '2022-06-07 12:08:47'),
(292, 'HenryLEari', 'cgylden@forum.dk', 89036885924, 'The online income is your key to success.', 'Financial independence is what this robot guarantees. https://LEari.bode-roesch.de/LEari', '2022-06-07 14:31:07', '2022-06-07 14:31:07'),
(293, 'HenryLEari', 'jalal@forum.dk', 89033717251, 'Find out about the fastest way for a financial independence.', 'No worries if you are fired. Work online. https://LEari.bode-roesch.de/LEari', '2022-06-07 17:02:53', '2022-06-07 17:02:53'),
(294, 'HenryLEari', 'hcsen@forum.dk', 89035381516, 'The best online job for retirees. Make your old ages rich.', 'This robot can bring you money 24/7. https://LEari.bode-roesch.de/LEari', '2022-06-07 22:04:41', '2022-06-07 22:04:41'),
(295, 'HenryLEari', 'j.adler@forum.dk', 89037701845, 'Looking forward for income? Get it online.', 'This robot can bring you money 24/7. https://LEari.bode-roesch.de/LEari', '2022-06-08 02:36:59', '2022-06-08 02:36:59'),
(296, 'HenryLEari', 'mhindborg@forum.dk', 89035478261, 'Buy everything you want earning money online.', 'Money, money! Make more money with financial robot! https://LEari.blueliners07.de/LEari', '2022-06-08 05:01:42', '2022-06-08 05:01:42'),
(297, 'HenryLEari', 'codesvm@mailme.dk', 89037443747, 'We know how to make our future rich and do you?', 'Have no money? Earn it online. https://LEari.blueliners07.de/LEari', '2022-06-08 07:49:19', '2022-06-08 07:49:19'),
(298, 'HenryLEari', 'johantjoensen@forum.dk', 89038321585, 'Make your money work for you all day long.', 'Feel free to buy everything you want with the additional income. https://LEari.blueliners07.de/LEari', '2022-06-08 10:29:37', '2022-06-08 10:29:37'),
(299, 'HenryLEari', 'fvjc@forum.dk', 89033298662, 'Making money in the net is easier now.', 'Most successful people already use Robot. Do you? https://LEari.blueliners07.de/LEari', '2022-06-08 12:49:51', '2022-06-08 12:49:51'),
(300, 'HenryLEari', 'hemmeligpost@mailme.dk', 89038973768, 'Just one click can turn you dollar into $1000.', 'The fastest way to make your wallet thick is found. https://LEari.blueliners07.de/LEari', '2022-06-08 15:10:09', '2022-06-08 15:10:09'),
(301, 'HenryLEari', 'svetg07@mailme.dk', 89032978823, 'We know how to increase your financial stability.', 'Financial robot is the best companion of rich people. https://LEari.blueliners07.de/LEari', '2022-06-08 17:24:42', '2022-06-08 17:24:42'),
(302, 'HenryLEari', 'pallepersson@jubiipost.dk', 89033134908, 'The financial Robot is the most effective financial tool in the net!', 'The online financial Robot is your key to success. https://LEari.blueliners07.de/LEari', '2022-06-08 19:44:21', '2022-06-08 19:44:21'),
(303, 'HenryLEari', 'susannekofoed@forum.dk', 89036390753, 'The online income is your key to success.', 'The best way for everyone who rushes for financial independence. https://LEari.blueliners07.de/LEari', '2022-06-08 22:10:23', '2022-06-08 22:10:23'),
(304, 'HenryLEari', 'piaogkim@forum.dk', 89039528652, 'Make $1000 from $1 in a few minutes. Launch the financial robot now.', 'Small investments can bring tons of dollars fast. https://LEari.blueliners07.de/LEari', '2022-06-09 01:50:46', '2022-06-09 01:50:46'),
(305, 'HenryLEari', 'timmy@forum.dk', 89037338640, 'The online financial Robot is your key to success.', 'No need to stay awake all night long to earn money. Launch the robot. https://LEari.blueliners07.de/LEari', '2022-06-09 04:06:22', '2022-06-09 04:06:22'),
(306, 'HenryLEari', 'ina-musssen@forum.dk', 89033812308, 'Still not a millionaire? The financial robot will make you him!', 'Rich people are rich because they use this robot. https://LEari.blueliners07.de/LEari', '2022-06-09 06:21:36', '2022-06-09 06:21:36'),
(307, 'HenryLEari', 'jungledyret.hugo@forum.dk', 89032762120, 'Make $1000 from $1 in a few minutes. Launch the financial robot now.', 'Online job can be really effective if you use this Robot. https://LEari.blueliners07.de/LEari', '2022-06-09 09:11:07', '2022-06-09 09:11:07'),
(308, 'HenryLEari', 'mj.ferreiro@mailme.dk', 89035210109, 'Need money? Earn it without leaving your home.', 'Let your money grow into the capital with this Robot. https://LEari.blueliners07.de/LEari', '2022-06-09 11:33:48', '2022-06-09 11:33:48'),
(309, 'HenryLEari', 'fuck@mailme.dk', 89031804541, 'Provide your family with the money in age. Launch the Robot!', 'The fastest way to make your wallet thick is found. https://LEari.blueliners07.de/LEari', '2022-06-09 13:52:06', '2022-06-09 13:52:06'),
(310, 'HenryLEari', 'kevin13@forum.dk', 89039844931, 'The online income is the easiest ways to make you dream come true.', 'Launch the financial Bot now to start earning. https://LEari.blueliners07.de/LEari', '2022-06-09 16:20:58', '2022-06-09 16:20:58'),
(311, 'HenryLEari', 'thisisforyou@forum.dk', 89035824819, 'Make dollars just sitting home.', 'Learn how to make hundreds of backs each day. https://LEari.blueliners07.de/LEari', '2022-06-09 18:43:44', '2022-06-09 18:43:44'),
(312, 'HenryLEari', 'ryencone62@hotmail.com', 89037288818, 'Robot is the best solution for everyone who wants to earn.', 'Robot is the best way for everyone who looks for financial independence. https://LEari.blueliners07.de/LEari', '2022-06-09 21:11:26', '2022-06-09 21:11:26'),
(313, 'HenryLEari', 'alicepinar@forum.dk', 89031816007, 'Even a child knows how to make $100 today with the help of this robot.', 'Even a child knows how to make money. Do you? https://LEari.blueliners07.de/LEari', '2022-06-09 23:31:55', '2022-06-09 23:31:55'),
(314, 'HenryLEari', 'beteg@forum.dk', 89031535562, 'The huge income without investments is available, now!', 'Money, money! Make more money with financial robot! https://LEari.blueliners07.de/LEari', '2022-06-10 03:50:42', '2022-06-10 03:50:42'),
(315, 'HenryLEari', 'eschmoeller2001@yahoo.com', 89034271408, 'Learn how to make hundreds of backs each day.', 'Robot never sleeps. It makes money for you 24/7. https://LEari.blueliners07.de/LEari', '2022-06-10 05:11:06', '2022-06-10 05:11:06'),
(316, 'HenryLEari', 'olg19942807@mailme.dk', 89030410633, 'Have no money? It’s easy to earn them online here.', 'See how Robot makes $1000 from $1 of investment. https://LEari.blueliners07.de/LEari', '2022-06-10 08:08:33', '2022-06-10 08:08:33'),
(317, 'HenryLEari', 'llou@forum.dk', 89037778294, 'Your money work even when you sleep.', 'We know how to become rich and do you? https://LEari.coronect.de/LEari', '2022-06-10 23:27:05', '2022-06-10 23:27:05'),
(318, 'HenryLEari', 'iri-lomova@mailme.dk', 89038116234, 'Making money in the net is easier now.', 'Launch the financial Robot and do your business. https://LEari.coronect.de/LEari', '2022-06-11 02:00:48', '2022-06-11 02:00:48'),
(319, 'HenryLEari', 'adajdsjaasdjjdsajsda@forum.dk', 89037543120, 'Everyone who needs money should try this Robot out.', 'Start your online work using the financial Robot. https://LEari.coronect.de/LEari', '2022-06-11 04:40:59', '2022-06-11 04:40:59'),
(320, 'HenryLEari', 'brago-men@mail.ru', 89039907152, 'Just one click can turn you dollar into $1000.', 'We know how to increase your financial stability. https://LEari.coronect.de/LEari', '2022-06-11 07:01:05', '2022-06-11 07:01:05'),
(321, 'HenryLEari', 'miamirn1965@yahoo.com', 89037548893, 'Looking forward for income? Get it online.', 'Try out the automatic robot to keep earning all day long. https://LEari.coronect.de/LEari', '2022-06-11 09:31:13', '2022-06-11 09:31:13'),
(322, 'HenryLEari', 'meas@forum.dk', 89030556101, 'Rich people are rich because they use this robot.', 'Make thousands of bucks. Financial robot will help you to do it! https://LEari.coronect.de/LEari', '2022-06-11 12:21:15', '2022-06-11 12:21:15'),
(323, 'HenryLEari', 'strandsb@mail-online.dk', 89034664231, 'We know how to become rich and do you?', 'Financial robot keeps bringing you money while you sleep. https://LEari.coronect.de/LEari', '2022-06-11 14:49:58', '2022-06-11 14:49:58'),
(324, 'HenryLEari', 'sadohin.01@mailme.dk', 89038849613, 'Make money, not war! Financial Robot is what you need.', 'Make dollars staying at home and launched this Bot. https://LEari.coronect.de/LEari', '2022-06-11 17:21:31', '2022-06-11 17:21:31'),
(325, 'HenryLEari', 'melanie.klepke@forum.dk', 89030461663, 'Financial independence is what this robot guarantees.', 'Robot is the best solution for everyone who wants to earn. https://LEari.coronect.de/LEari', '2022-06-11 19:41:37', '2022-06-11 19:41:37'),
(326, 'HenryLEari', 'edwardlookbook@forum.dk', 89035917929, 'Online earnings are the easiest way for financial independence.', 'Your money keep grow 24/7 if you use the financial Robot. https://LEari.coronect.de/LEari', '2022-06-11 21:56:58', '2022-06-11 21:56:58'),
(327, 'HenryLEari', 'hyggebella@forum.dk', 89038355486, 'The online income is the easiest ways to make you dream come true.', 'Start making thousands of dollars every week. https://LEari.coronect.de/LEari', '2022-06-12 00:12:31', '2022-06-12 00:12:31'),
(328, 'HenryLEari', 'pera@mail-online.dk', 89031633740, 'Wow! This Robot is a great start for an online career.', 'Robot is the best way for everyone who looks for financial independence. https://LEari.coronect.de/LEari', '2022-06-12 02:31:08', '2022-06-12 02:31:08'),
(329, 'HenryLEari', 'lorentz@forum.dk', 89037609256, 'Make money, not war! Financial Robot is what you need.', 'Need some more money? Robot will earn them really fast. https://LEari.coronect.de/LEari', '2022-06-12 05:22:17', '2022-06-12 05:22:17'),
(330, 'HenryLEari', 'foxtrox@forum.dk', 89034203427, 'Attention! Financial robot may bring you millions!', 'We have found the fastest way to be rich. Find it out here. https://LEari.coronect.de/LEari', '2022-06-12 07:32:15', '2022-06-12 07:32:15'),
(331, 'HenryLEari', 'doerner-axel@forum.dk', 89038984951, 'The fastest way to make your wallet thick is found.', 'Feel free to buy everything you want with the additional income. https://LEari.coronect.de/LEari', '2022-06-12 09:44:12', '2022-06-12 09:44:12'),
(332, 'HenryLEari', 'blabla111@forum.dk', 89031014637, 'Make your laptop a financial instrument with this program.', 'Check out the automatic Bot, which works for you 24/7. https://LEari.coronect.de/LEari', '2022-06-12 12:17:35', '2022-06-12 12:17:35'),
(333, 'HenryLEari', 'johnnys@mailme.dk', 89039252693, 'The financial Robot is the most effective financial tool in the net!', 'The financial Robot is your # 1 expert of making money. https://LEari.coronect.de/LEari', '2022-06-12 14:53:05', '2022-06-12 14:53:05'),
(334, 'HenryLEari', 'mischa@forum.dk', 89039060051, 'This robot will help you to make hundreds of dollars each day.', 'Try out the automatic robot to keep earning all day long. https://LEari.coronect.de/LEari', '2022-06-12 17:12:41', '2022-06-12 17:12:41'),
(335, 'HenryLEari', 'lestatlestat@forum.dk', 89039829806, 'The online income is the easiest ways to make you dream come true.', 'Earn additional money without efforts and skills. https://LEari.coronect.de/LEari', '2022-06-12 19:32:44', '2022-06-12 19:32:44'),
(336, 'HenryLEari', 'mogens.a@forum.dk', 89039375471, 'Make money online, staying at home this cold winter.', 'There is no need to look for a job anymore. Work online. https://LEari.coronect.de/LEari', '2022-06-12 22:03:26', '2022-06-12 22:03:26'),
(337, 'HenryLEari', 'hallbergf@forum.dk', 89038724096, 'Make $1000 from $1 in a few minutes. Launch the financial robot now.', 'Make dollars staying at home and launched this Bot. https://LEari.coronect.de/LEari', '2022-06-13 00:15:02', '2022-06-13 00:15:02'),
(338, 'HenryLEari', 'troublecats@mail-online.dk', 89034893851, 'This robot can bring you money 24/7.', 'Make yourself rich in future using this financial robot. https://LEari.coronect.de/LEari', '2022-06-13 02:39:54', '2022-06-13 02:39:54'),
(339, 'HenryLEari', 'rmzjzl@forum.dk', 89032239161, 'Looking forward for income? Get it online.', 'Even a child knows how to make money. This robot is what you need! https://LEari.coronect.de/LEari', '2022-06-13 04:58:58', '2022-06-13 04:58:58'),
(340, 'HenryLEari', 'salonliss@forum.dk', 89039473978, 'See how Robot makes $1000 from $1 of investment.', 'Make thousands every week working online here. https://LEari.coronect.de/LEari', '2022-06-13 07:17:46', '2022-06-13 07:17:46'),
(341, 'HenryLEari', 'fifler52@forum.dk', 89033157855, 'Attention! Financial robot may bring you millions!', 'The financial Robot works for you even when you sleep. https://LEari.coronect.de/LEari', '2022-06-13 10:03:35', '2022-06-13 10:03:35'),
(342, 'HenryLEari', 'jensentang82@forum.dk', 89031495743, 'Make yourself rich in future using this financial robot.', 'Everyone can earn as much as he wants suing this Bot. https://LEari.coronect.de/LEari', '2022-06-13 12:43:49', '2022-06-13 12:43:49'),
(343, 'HenryLEari', 'kirstinebundgaard@jubiipost.dk', 89038084900, 'Provide your family with the money in age. Launch the Robot!', 'Using this Robot is the best way to make you rich. https://LEari.coronect.de/LEari', '2022-06-13 15:03:51', '2022-06-13 15:03:51'),
(344, 'HenryLEari', 'firwindalmacio@mailme.dk', 89034902497, 'Need money? Get it here easily! Just press this to launch the robot.', 'The financial Robot is your future wealth and independence. https://LEari.coronect.de/LEari', '2022-06-13 17:35:58', '2022-06-13 17:35:58'),
(345, 'HenryLEari', 'www.jotte@forum.dk', 89039150379, 'Automatic robot is the best start for financial independence.', 'The online job can bring you a fantastic profit. https://LEari.coronect.de/LEari', '2022-06-13 20:44:14', '2022-06-13 20:44:14'),
(346, 'HenryLEari', 'hgejgzfstf@mail.goo.ne.jp', 89036684745, 'Even a child knows how to make money. This robot is what you need!', 'The best way for everyone who rushes for financial independence. https://LEari.coronect.de/LEari', '2022-06-13 23:24:42', '2022-06-13 23:24:42'),
(347, 'HenryLEari', 'mads49@forum.dk', 89037978839, 'The online income is the easiest ways to make you dream come true.', 'Need some more money? Robot will earn them really fast. https://LEari.coronect.de/LEari', '2022-06-14 01:52:17', '2022-06-14 01:52:17'),
(348, 'HenryLEari', 'xpoqsnxtnwegp1x@mail.ru', 89031403743, 'The financial Robot is your future wealth and independence.', 'Financial robot is your success formula is found. Learn more about it. https://LEari.coronect.de/LEari', '2022-06-14 04:15:46', '2022-06-14 04:15:46'),
(349, 'HenryLEari', 'mak@forum.dk', 89035991138, 'The fastest way to make you wallet thick is here.', 'Need cash? Launch this robot and see what it can. https://LEari.coronect.de/LEari', '2022-06-14 07:04:45', '2022-06-14 07:04:45'),
(350, 'HenryLEari', 'lady.madam197@mailme.dk', 89038385544, 'Attention! Financial robot may bring you millions!', 'The online income is the easiest ways to make you dream come true. https://LEari.coronect.de/LEari', '2022-06-14 09:24:36', '2022-06-14 09:24:36'),
(351, 'HenryLEari', 'mr.oliig@forum.dk', 89032505574, 'Making money is very easy if you use the financial Robot.', 'Start making thousands of dollars every week just using this robot. https://LEari.coronect.de/LEari', '2022-06-14 11:34:15', '2022-06-14 11:34:15'),
(352, 'HenryLEari', 'martin7777777@forum.dk', 89033703819, 'We know how to increase your financial stability.', 'Make money, not war! Financial Robot is what you need. https://LEari.coronect.de/LEari', '2022-06-14 14:25:10', '2022-06-14 14:25:10'),
(353, 'HenryLEari', 'aurora_72e@forum.dk', 89037031374, 'We have found the fastest way to be rich. Find it out here.', 'The additional income is available for everyone using this robot. https://LEari.coronect.de/LEari', '2022-06-14 16:32:31', '2022-06-14 16:32:31'),
(354, 'HenryLEari', 'cabosh@forum.dk', 89034084239, 'Earn additional money without efforts.', 'Even a child knows how to make money. This robot is what you need! https://LEari.coronect.de/LEari', '2022-06-14 18:52:56', '2022-06-14 18:52:56'),
(355, 'HenryLEari', 'karinpetersen@forum.dk', 89039398621, 'The fastest way to make you wallet thick is here.', 'The financial Robot is your # 1 expert of making money. https://LEari.coronect.de/LEari', '2022-06-14 21:45:24', '2022-06-14 21:45:24'),
(356, 'HenryLEari', 'zampotexxx@mailme.dk', 89036453784, 'No need to work anymore. Just launch the robot.', 'Automatic robot is the best start for financial independence. https://LEari.coronect.de/LEari', '2022-06-15 00:13:32', '2022-06-15 00:13:32'),
(357, 'HenryLEari', 'tina.eto@mail.ru', 89031503462, 'This robot will help you to make hundreds of dollars each day.', 'The fastest way to make your wallet thick is found. https://LEari.coronect.de/LEari', '2022-06-15 02:55:18', '2022-06-15 02:55:18'),
(358, 'HenryLEari', 'nancy.efremenko@mailme.dk', 89039536860, 'Try out the best financial robot in the Internet.', 'Need some more money? Robot will earn them really fast. https://LEari.coronect.de/LEari', '2022-06-15 05:45:35', '2022-06-15 05:45:35'),
(359, 'HenryLEari', 'voroba83@mailme.dk', 89030157487, 'Financial robot guarantees everyone stability and income.', 'Your money work even when you sleep. https://LEari.coronect.de/LEari', '2022-06-15 08:06:01', '2022-06-15 08:06:01'),
(360, 'HenryLEari', 'mstanley@mailme.dk', 89034553587, 'Thousands of bucks are guaranteed if you use this robot.', 'The fastest way to make you wallet thick is here. https://LEari.coronect.de/LEari', '2022-06-15 10:40:25', '2022-06-15 10:40:25'),
(361, 'HenryLEari', 'nathan.ara@forum.dk', 89033752023, 'Try out the best financial robot in the Internet.', 'Making money in the net is easier now. https://LEari.coronect.de/LEari', '2022-06-15 13:16:29', '2022-06-15 13:16:29'),
(362, 'HenryLEari', 'donaldoggitte@forum.dk', 89036856242, 'We know how to make our future rich and do you?', 'Automatic robot is the best start for financial independence. https://LEari.coronect.de/LEari', '2022-06-15 15:34:02', '2022-06-15 15:34:02'),
(363, 'HenryLEari', 'ira-a2704@mailme.dk', 89033755973, 'Thousands of bucks are guaranteed if you use this robot.', 'Launch the financial Bot now to start earning. https://LEari.coronect.de/LEari', '2022-06-15 17:45:53', '2022-06-15 17:45:53'),
(364, 'HenryLEari', 'fiffi_dong@forum.dk', 89037718480, 'The online job can bring you a fantastic profit.', 'Trust your dollar to the Robot and see how it grows to $100. https://LEari.coronect.de/LEari', '2022-06-15 20:06:48', '2022-06-15 20:06:48'),
(365, 'HenryLEari', 'oksenboel@forum.dk', 89032650836, 'Need cash? Launch this robot and see what it can.', 'The online financial Robot is your key to success. https://LEari.coronect.de/LEari', '2022-06-15 22:18:31', '2022-06-15 22:18:31'),
(366, 'HenryLEari', 'hyt@forum.dk', 89031824634, 'Earning money in the Internet is easy if you use Robot.', 'Trust the financial Bot to become rich. https://LEari.coronect.de/LEari', '2022-06-16 01:01:57', '2022-06-16 01:01:57'),
(367, 'HenryLEari', 'nast2212@mailme.dk', 89037989189, 'Robot never sleeps. It makes money for you 24/7.', 'The best way for everyone who rushes for financial independence. https://LEari.coronect.de/LEari', '2022-06-16 03:26:49', '2022-06-16 03:26:49'),
(368, 'HenryLEari', 'camaso@forum.dk', 89037741773, 'Make dollars just sitting home.', 'Financial robot is a great way to manage and increase your income. https://LEari.coronect.de/LEari', '2022-06-16 06:02:21', '2022-06-16 06:02:21'),
(369, 'HenryLEari', 'davinchi-mebel@mailme.dk', 89038173978, 'Everyone who needs money should try this Robot out.', 'Online job can be really effective if you use this Robot. https://LEari.coronect.de/LEari', '2022-06-16 08:41:35', '2022-06-16 08:41:35'),
(370, 'HenryLEari', 'andrelarsen@forum.dk', 89032527407, 'Financial robot keeps bringing you money while you sleep.', 'We know how to become rich and do you? https://LEari.coronect.de/LEari', '2022-06-16 11:07:01', '2022-06-16 11:07:01'),
(371, 'HenryLEari', 'jih67@forum.dk', 89031587859, 'Try out the automatic robot to keep earning all day long.', 'Financial independence is what this robot guarantees. https://LEari.coronect.de/LEari', '2022-06-16 13:47:31', '2022-06-16 13:47:31'),
(372, 'HenryLEari', 'felder8700@forum.dk', 89038119656, 'Make your computer to be you earning instrument.', 'Looking for an easy way to make money? Check out the financial robot. https://LEari.coronect.de/LEari', '2022-06-16 15:58:03', '2022-06-16 15:58:03'),
(373, 'HenryLEari', 'hellepe@mail-online.dk', 89034627656, 'Even a child knows how to make money. Do you?', 'Robot is the best solution for everyone who wants to earn. https://LEari.bode-roesch.de/LEari', '2022-06-16 18:16:08', '2022-06-16 18:16:08'),
(374, 'HenryLEari', 'kristianpaulsenkristianpaulsen@mailme.dk', 89034267133, 'Check out the automatic Bot, which works for you 24/7.', 'One dollar is nothing, but it can grow into $100 here. https://LEari.bode-roesch.de/LEari', '2022-06-16 20:38:00', '2022-06-16 20:38:00'),
(375, 'HenryLEari', 'sarahsa@forum.dk', 89038581949, 'Make thousands of bucks. Pay nothing.', 'The best online job for retirees. Make your old ages rich. https://LEari.bode-roesch.de/LEari', '2022-06-16 23:19:52', '2022-06-16 23:19:52'),
(376, 'HenryLEari', 'jackwonde@mailme.dk', 89032435237, 'Let the Robot bring you money while you rest.', 'It is the best time to launch the Robot to get more money. https://LEari.bode-roesch.de/LEari', '2022-06-17 01:40:07', '2022-06-17 01:40:07'),
(377, 'HenryLEari', 'mudi44@forum.dk', 89039497392, 'Check out the new financial tool, which can make you rich.', 'Still not a millionaire? Fix it now! https://LEari.bode-roesch.de/LEari', '2022-06-17 05:08:36', '2022-06-17 05:08:36'),
(378, 'HenryLEari', 'cyberbear@forum.dk', 89038211832, 'Earn additional money without efforts and skills.', 'Trust your dollar to the Robot and see how it grows to $100. https://LEari.bode-roesch.de/LEari', '2022-06-17 07:22:39', '2022-06-17 07:22:39'),
(379, 'HenryLEari', '11-18-15-07@forum.dk', 89039891769, 'Looking forward for income? Get it online.', 'The financial Robot is your future wealth and independence. https://LEari.bode-roesch.de/LEari', '2022-06-17 09:40:42', '2022-06-17 09:40:42'),
(380, 'HenryLEari', 'ina-tranoe@forum.dk', 89038601172, 'Trust the financial Bot to become rich.', 'Financial robot keeps bringing you money while you sleep. https://LEari.bode-roesch.de/LEari', '2022-06-17 12:08:59', '2022-06-17 12:08:59'),
(381, 'HenryLEari', 'carter84@forum.dk', 89034561201, 'The fastest way to make your wallet thick is found.', 'Launch the robot and let it bring you money. https://LEari.bode-roesch.de/LEari', '2022-06-17 14:50:56', '2022-06-17 14:50:56'),
(382, 'HenryLEari', 'annamichelsdfle1995@mail-online.dk', 89032452427, 'Looking for additional money? Try out the best financial instrument.', 'The huge income without investments is available. https://LEari.fannyberlin.se/LEari', '2022-06-17 17:18:37', '2022-06-17 17:18:37'),
(383, 'HenryLEari', 'nbaess@forum.dk', 89038660924, 'Check out the new financial tool, which can make you rich.', 'Make money in the internet using this Bot. It really works! https://LEari.fannyberlin.se/LEari', '2022-06-17 19:34:43', '2022-06-17 19:34:43'),
(384, 'HenryLEari', 'pcboye@forum.dk', 89035104743, 'We know how to become rich and do you?', 'Small investments can bring tons of dollars fast. https://LEari.fannyberlin.se/LEari', '2022-06-17 21:58:10', '2022-06-17 21:58:10'),
(385, 'HenryLEari', 'anogma@forum.dk', 89034092829, 'Make your laptop a financial instrument with this program.', 'The financial Robot is the most effective financial tool in the net! https://LEari.fannyberlin.se/LEari', '2022-06-18 00:15:40', '2022-06-18 00:15:40'),
(386, 'HenryLEari', 'giese2@jubiipost.dk', 89031826456, 'Using this Robot is the best way to make you rich.', 'One click of the robot can bring you thousands of bucks. https://LEari.fannyberlin.se/LEari', '2022-06-18 02:43:42', '2022-06-18 02:43:42'),
(387, 'HenryLEari', 'kennetwalsh@forum.dk', 89030380973, 'Even a child knows how to make money. Do you?', 'Wow! This Robot is a great start for an online career. https://LEari.fannyberlin.se/LEari', '2022-06-18 05:03:37', '2022-06-18 05:03:37'),
(388, 'HenryLEari', 'jaspertippo@forum.dk', 89039549176, 'This robot can bring you money 24/7.', 'Have no money? It’s easy to earn them online here. https://LEari.fannyberlin.se/LEari', '2022-06-18 07:17:16', '2022-06-18 07:17:16'),
(389, 'HenryLEari', 'tillort@forum.dk', 89033764729, 'Turn $1 into $100 instantly. Use the financial Robot.', 'Even a child knows how to make money. This robot is what you need! https://LEari.fannyberlin.se/LEari', '2022-06-18 09:36:02', '2022-06-18 09:36:02');
INSERT INTO `txn_contact_us` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(390, 'HenryLEari', 'batsberg@jubiipost.dk', 89035967751, 'The best online investment tool is found. Learn more!', 'The additional income for everyone. https://LEari.fannyberlin.se/LEari', '2022-06-18 12:01:14', '2022-06-18 12:01:14'),
(391, 'HenryLEari', 'lottesvenningsen@forum.dk', 89030195490, 'Try out the automatic robot to keep earning all day long.', 'Online Bot will bring you wealth and satisfaction. https://LEari.fannyberlin.se/LEari', '2022-06-18 14:11:11', '2022-06-18 14:11:11'),
(392, 'HenryLEari', 'klmbruun@forum.dk', 89031401141, 'Check out the newest way to make a fantastic profit.', 'Everyone can earn as much as he wants suing this Bot. https://LEari.fannyberlin.se/LEari', '2022-06-18 16:24:28', '2022-06-18 16:24:28'),
(393, 'HenryLEari', 'rikkeogputte@forum.dk', 89034851330, 'Make money in the internet using this Bot. It really works!', 'One dollar is nothing, but it can grow into $100 here. https://LEari.fannyberlin.se/LEari', '2022-06-18 18:43:42', '2022-06-18 18:43:42'),
(394, 'HenryLEari', 'jammybabe05@hotmail.com', 89035855223, 'Watch your money grow while you invest with the Robot.', 'Financial Robot is #1 investment tool ever. Launch it! https://LEari.fannyberlin.se/LEari', '2022-06-18 20:58:01', '2022-06-18 20:58:01'),
(395, 'HenryLEari', 'slangerup1@forum.dk', 89034372973, 'Making money is very easy if you use the financial Robot.', 'Have no money? Earn it online. https://LEari.fannyberlin.se/LEari', '2022-06-18 23:22:21', '2022-06-18 23:22:21'),
(396, 'HenryLEari', 'kmadsen1966@forum.dk', 89035983023, 'Financial robot guarantees everyone stability and income.', 'Invest $1 today to make $1000 tomorrow. https://LEari.fannyberlin.se/LEari', '2022-06-19 01:36:05', '2022-06-19 01:36:05'),
(397, 'HenryLEari', 'jydekvinden@forum.dk', 89033399967, 'Your computer can bring you additional income if you use this Robot.', 'Financial independence is what this robot guarantees. https://LEari.fannyberlin.se/LEari', '2022-06-19 03:56:34', '2022-06-19 03:56:34'),
(398, 'HenryLEari', 'relex29@forum.dk', 89037911012, 'There is no need to look for a job anymore. Work online.', 'Financial robot is a great way to manage and increase your income. https://LEari.fannyberlin.se/LEari', '2022-06-19 06:24:57', '2022-06-19 06:24:57'),
(399, 'HenryLEari', 'nikolaj01@forum.dk', 89033664045, 'Attention! Here you can earn money online!', 'The financial Robot is the most effective financial tool in the net! https://LEari.fannyberlin.se/LEari', '2022-06-19 08:41:03', '2022-06-19 08:41:03'),
(400, 'HenryLEari', 'andreas23@forum.dk', 89039572825, 'Attention! Financial robot may bring you millions!', 'Watch your money grow while you invest with the Robot. https://LEari.fannyberlin.se/LEari', '2022-06-19 10:53:13', '2022-06-19 10:53:13'),
(401, 'HenryLEari', 'c.u.p@forum.dk', 89036858314, 'No worries if you are fired. Work online.', 'Everyone who needs money should try this Robot out. https://LEari.fannyberlin.se/LEari', '2022-06-19 13:00:13', '2022-06-19 13:00:13'),
(402, 'HenryLEari', 'sd702@forum.dk', 89034348386, 'Need money? Get it here easily?', 'Join the society of successful people who make money here. https://LEari.fannyberlin.se/LEari', '2022-06-19 15:25:52', '2022-06-19 15:25:52'),
(403, 'HenryLEari', 'schwarze.leon@mailme.dk', 89039873191, 'Wow! This Robot is a great start for an online career.', 'Watch your money grow while you invest with the Robot. https://LEari.fannyberlin.se/LEari', '2022-06-19 17:39:02', '2022-06-19 17:39:02'),
(404, 'HenryLEari', 'liselihn@forum.dk', 89035411538, 'Let the Robot bring you money while you rest.', 'Make money in the internet using this Bot. It really works! https://LEari.fannyberlin.se/LEari', '2022-06-19 19:57:48', '2022-06-19 19:57:48'),
(405, 'HenryLEari', 'procee1@mail-online.dk', 89033354437, 'There is no need to look for a job anymore. Work online.', 'No need to work anymore. Just launch the robot. https://LEari.fannyberlin.se/LEari', '2022-06-19 22:26:11', '2022-06-19 22:26:11'),
(406, 'HenryLEari', 'lf@forum.dk', 89033739748, 'The fastest way to make your wallet thick is found.', 'Make money in the internet using this Bot. It really works! https://LEari.baleti-design.fr/LEari', '2022-06-20 03:46:30', '2022-06-20 03:46:30'),
(407, 'HenryLEari', 'dahl@forum.dk', 89030946823, 'Need money? The financial robot is your solution.', 'Need money? The financial robot is your solution. https://LEari.borisvonsmercek.de/LEari', '2022-06-20 06:04:09', '2022-06-20 06:04:09'),
(408, 'HenryLEari', 'bjoernvold@forum.dk', 89036119893, 'Looking for an easy way to make money? Check out the financial robot.', 'The huge income without investments is available, now! https://fannyberlin.se/LEari', '2022-06-20 08:22:40', '2022-06-20 08:22:40'),
(409, 'HenryLEari', 'puretna@forum.dk', 89034745439, 'No need to worry about the future if your use this financial robot.', 'Financial Robot is #1 investment tool ever. Launch it! https://LEari.compras2u.es/LEari', '2022-06-20 10:41:34', '2022-06-20 10:41:34'),
(410, 'HenryLEari', 'christian-nielsen@forum.dk', 89031500737, 'We know how to increase your financial stability.', 'No need to stay awake all night long to earn money. Launch the robot. https://LEari.fannyberlin.se/LEari', '2022-06-20 13:09:27', '2022-06-20 13:09:27'),
(411, 'HenryLEari', 'casper37@forum.dk', 89039280172, 'Even a child knows how to make money. Do you?', 'Looking for additional money? Try out the best financial instrument. https://LEari.compras2u.es/LEari', '2022-06-20 15:44:32', '2022-06-20 15:44:32'),
(412, 'HenryLEari', 'cpb@mail-online.dk', 89037243704, 'Make money online, staying at home this cold winter.', 'Try out the automatic robot to keep earning all day long. https://LEari.fannyberlin.se/LEari', '2022-06-20 18:04:30', '2022-06-20 18:04:30'),
(413, 'HenryLEari', 'olenicolaisen@forum.dk', 89036868342, 'No need to work anymore. Just launch the robot.', 'Attention! Here you can earn money online! https://collectif-hameb.fr/LEari', '2022-06-20 20:26:37', '2022-06-20 20:26:37'),
(414, 'HenryLEari', 'becca84@forum.dk', 89032121439, 'Let your money grow into the capital with this Robot.', 'Start making thousands of dollars every week just using this robot. https://LEari.amalgamas.es/LEari', '2022-06-20 22:44:18', '2022-06-20 22:44:18'),
(415, 'HenryLEari', 'anders21@forum.dk', 89038369074, 'The financial Robot is your # 1 expert of making money.', 'Check out the newest way to make a fantastic profit. https://collectif-hameb.fr/LEari', '2022-06-21 04:01:25', '2022-06-21 04:01:25'),
(416, 'HenryLEari', 'bifjan15@forum.dk', 89033478452, 'Every your dollar can turn into $100 after you lunch this Robot.', 'Invest $1 today to make $1000 tomorrow. https://fannyberlin.se/LEari', '2022-06-21 06:16:03', '2022-06-21 06:16:03'),
(417, 'HenryLEari', 'ibecha@forum.dk', 89039880624, 'Have no financial skills? Let Robot make money for you.', 'Making money in the net is easier now. https://fannyberlin.se/LEari', '2022-06-21 08:50:38', '2022-06-21 08:50:38'),
(418, 'HenryLEari', 'shtraube@mailme.dk', 89032780028, 'Looking forward for income? Get it online.', 'Making money can be extremely easy if you use this Robot. https://LEari.fannyberlin.se/LEari', '2022-06-21 11:05:44', '2022-06-21 11:05:44'),
(419, 'HenryLEari', 'kkll16@mail-online.dk', 89036835130, 'Have no financial skills? Let Robot make money for you.', 'Check out the newest way to make a fantastic profit. https://LEari.fannyberlin.se/LEari', '2022-06-21 13:21:53', '2022-06-21 13:21:53'),
(420, 'HenryLEari', 'nelly_nut@mail-online.dk', 89039997030, 'Only one click can grow up your money really fast.', 'The online job can bring you a fantastic profit. https://LEari.compras2u.es/LEari', '2022-06-21 15:42:35', '2022-06-21 15:42:35'),
(421, 'HenryLEari', 'komfrisk@forum.dk', 89037059022, 'Check out the new financial tool, which can make you rich.', 'The fastest way to make your wallet thick is found. https://LEari.baleti-design.fr/LEari', '2022-06-21 18:11:26', '2022-06-21 18:11:26'),
(422, 'HenryLEari', 'aget@forum.dk', 89031546789, 'No need to work anymore. Just launch the robot.', 'Have no money? Earn it online. http://go.afalobo.com/0ide', '2022-06-21 20:26:36', '2022-06-21 20:26:36'),
(423, 'HenryLEari', 'mi_oae@coremail.ru', 89031113483, 'Online earnings are the easiest way for financial independence.', 'Need some more money? Robot will earn them really fast. http://go.afalobo.com/0ide', '2022-06-21 22:51:08', '2022-06-21 22:51:08'),
(424, 'HenryLEari', 'ricksonalvine@gmail.com', 89031711716, 'Just one click can turn you dollar into $1000.', 'Robot is the best solution for everyone who wants to earn. http://go.afalobo.com/0ide', '2022-06-22 01:23:40', '2022-06-22 01:23:40'),
(425, 'HenryLEari', 'derekdimitarleye@coremail.ru', 89033592093, 'The additional income is available for everyone using this robot.', 'Even a child knows how to make $100 today. http://go.afalobo.com/0ide', '2022-06-22 03:45:38', '2022-06-22 03:45:38'),
(426, 'HenryLEari', 'michaelprince1456s@gmail.com', 89030149424, 'The financial Robot is your future wealth and independence.', 'Feel free to buy everything you want with the additional income. http://go.afalobo.com/0ide', '2022-06-22 06:04:43', '2022-06-22 06:04:43'),
(427, 'HenryLEari', 'doanquynhlam4906@gmail.com', 89030729933, 'We have found the fastest way to be rich. Find it out here.', 'Make your money work for you all day long. http://go.afalobo.com/0ide', '2022-06-22 08:24:52', '2022-06-22 08:24:52'),
(428, 'HenryLEari', 'sergachevavika1@gmail.com', 89035741444, 'Try out the automatic robot to keep earning all day long.', 'Financial robot is the best companion of rich people. http://go.afalobo.com/0ide', '2022-06-22 10:44:03', '2022-06-22 10:44:03'),
(429, 'HenryLEari', 'ekatirinaker@gmail.com', 89038731446, 'Your money keep grow 24/7 if you use the financial Robot.', 'The online job can bring you a fantastic profit. http://go.afalobo.com/0ide', '2022-06-22 13:05:42', '2022-06-22 13:05:42'),
(430, 'HenryLEari', 'kulishovaalina4@gmail.com', 89037065337, 'Make thousands every week working online here.', 'Join the society of successful people who make money here. http://go.cufasez.com/0ie5', '2022-06-22 15:32:19', '2022-06-22 15:32:19'),
(431, 'HenryLEari', 'samantha7997a@aol.com', 89038855004, 'Attention! Financial robot may bring you millions!', 'The financial Robot is the most effective financial tool in the net! http://go.cufasez.com/0ie5', '2022-06-22 17:52:28', '2022-06-22 17:52:28'),
(432, 'HenryLEari', 'ykwbq@163.com', 89036306921, 'See how Robot makes $1000 from $1 of investment.', 'Try out the best financial robot in the Internet. https://LEari.nanolabs.es/LEari', '2022-06-22 20:12:31', '2022-06-22 20:12:31'),
(433, 'HenryLEari', 'myyear.com@gmail.com', 89030813302, 'Try out the best financial robot in the Internet.', 'The success formula is found. Learn more about it. https://LEari.nanolabs.es/LEari', '2022-06-22 23:47:00', '2022-06-22 23:47:00'),
(434, 'HenryLEari', 'callumbolliger1@gmail.com', 89031790367, 'Let the Robot bring you money while you rest.', 'Small investments can bring tons of dollars fast. https://LEari.nanolabs.es/LEari', '2022-06-23 02:03:56', '2022-06-23 02:03:56'),
(435, 'HenryLEari', 'friedaochinskij@coremail.ru', 89032016730, 'Every your dollar can turn into $100 after you lunch this Robot.', 'Start making thousands of dollars every week. https://LEari.nanolabs.es/LEari', '2022-06-23 04:33:31', '2022-06-23 04:33:31'),
(436, 'HenryLEari', 'jiaochengxiu41@163.com', 89030866432, 'The best way for everyone who rushes for financial independence.', 'The additional income for everyone. https://LEari.nanolabs.es/LEari', '2022-06-23 06:48:05', '2022-06-23 06:48:05'),
(437, 'HenryLEari', 'cetinkaya_mehmet@web.de', 89032623944, 'The financial Robot is your # 1 expert of making money.', 'Robot is the best way for everyone who looks for financial independence. https://LEari.nanolabs.es/LEari', '2022-06-23 09:04:45', '2022-06-23 09:04:45'),
(438, 'HenryLEari', 'greylowshi@gmail.com', 89037852619, 'See how Robot makes $1000 from $1 of investment.', 'Everyone can earn as much as he wants suing this Bot. https://LEari.nanolabs.es/LEari', '2022-06-23 11:24:33', '2022-06-23 11:24:33'),
(439, 'HenryLEari', 'artlahe@gmail.com', 89039931998, 'Even a child knows how to make $100 today.', 'Need some more money? Robot will earn them really fast. https://LEari.nanolabs.es/LEari', '2022-06-23 14:08:13', '2022-06-23 14:08:13'),
(440, 'HenryLEari', 'ganozin@gmail.com', 89037821906, 'Make your computer to be you earning instrument.', 'Let the Robot bring you money while you rest. https://LEari.nanolabs.es/LEari', '2022-06-23 16:26:38', '2022-06-23 16:26:38'),
(441, 'HenryLEari', 'bankar123@gmail.com', 89033273363, 'Financial robot is the best companion of rich people.', 'Find out about the fastest way for a financial independence. https://LEari.nanolabs.es/LEari', '2022-06-23 18:48:05', '2022-06-23 18:48:05'),
(442, 'HenryLEari', 'earlmuhammadyounas@coremail.ru', 89039738308, 'The success formula is found. Learn more about it.', 'No need to work anymore while you have the Robot launched! https://LEari.nanolabs.es/LEari', '2022-06-23 21:04:40', '2022-06-23 21:04:40'),
(443, 'HenryLEari', 'phanlamtruong89483@gmail.com', 89033639686, 'Need money? Get it here easily! Just press this to launch the robot.', 'Make $1000 from $1 in a few minutes. Launch the financial robot now. https://LEari.nanolabs.es/LEari', '2022-06-24 00:47:31', '2022-06-24 00:47:31'),
(444, 'HenryLEari', 'poferroe@coremail.ru', 89031768487, 'There is no need to look for a job anymore. Work online.', 'Make your money work for you all day long. https://LEari.nanolabs.es/LEari', '2022-06-24 16:54:49', '2022-06-24 16:54:49'),
(445, 'HenryLEari', 'prikalisr@hotmail.it', 89038128101, 'Make dollars just sitting home.', 'Make money 24/7 without any efforts and skills. https://LEari.nanolabs.es/LEari', '2022-06-24 19:09:47', '2022-06-24 19:09:47'),
(446, 'HenryLEari', 'raccoon@zomail.co', 89031143941, 'The financial Robot is the most effective financial tool in the net!', 'Additional income is now available for anyone all around the world. https://LEari.nanolabs.es/LEari', '2022-06-24 21:28:31', '2022-06-24 21:28:31'),
(447, 'HenryLEari', 'abbas_iipm@yahoo.co.in', 89036907018, 'Making money is very easy if you use the financial Robot.', 'Robot is the best solution for everyone who wants to earn. https://LEari.nanolabs.es/LEari', '2022-06-24 23:46:23', '2022-06-24 23:46:23'),
(448, 'HenryLEari', 'virgievitalii_gen@coremail.ru', 89031690052, 'The online income is your key to success.', 'Trust the financial Bot to become rich. https://LEari.nanolabs.es/LEari', '2022-06-25 02:04:33', '2022-06-25 02:04:33'),
(449, 'HenryLEari', 'horaceknigh@gmail.com', 89032677339, 'Everyone can earn as much as he wants suing this Bot.', 'Attention! Financial robot may bring you millions! https://LEari.nanolabs.es/LEari', '2022-06-25 04:27:09', '2022-06-25 04:27:09'),
(450, 'HenryLEari', 'zahid.zulafqar786@gmail.com', 89032595113, 'Have no money? Earn it online.', 'Make money, not war! Financial Robot is what you need. https://LEari.nanolabs.es/LEari', '2022-06-25 06:42:07', '2022-06-25 06:42:07'),
(451, 'HenryLEari', 'funguy272@aol.com', 89033806675, 'Rich people are rich because they use this robot.', 'The financial Robot is your future wealth and independence. https://LEari.nanolabs.es/LEari', '2022-06-25 09:07:43', '2022-06-25 09:07:43'),
(452, 'HenryLEari', 'monica.rowland@bk.ru', 89038610999, 'The online income is the easiest ways to make you dream come true.', 'Financial Robot is #1 investment tool ever. Launch it! https://LEari.nanolabs.es/LEari', '2022-06-25 11:26:59', '2022-06-25 11:26:59'),
(453, 'HenryLEari', 'himaahmed1234@gmail.com', 89036731251, 'Make yourself rich in future using this financial robot.', 'Start making thousands of dollars every week. https://LEari.nanolabs.es/LEari', '2022-06-25 13:39:44', '2022-06-25 13:39:44'),
(454, 'CrytoLEariLEari', 'MerinoBart@o2.pl', 89038642667, 'We have found the fastest way to be rich. Find it out here.', 'One dollar is nothing, but it can grow into $100 here. https://Agog.startupers.se/promo', '2022-06-26 12:31:10', '2022-06-26 12:31:10'),
(455, 'CrytoLEariLEari', 'MerinoBart@o2.pl', 89031329745, 'The best online job for retirees. Make your old ages rich.', 'Looking for additional money? Try out the best financial instrument. https://Agog.startupers.se/gotodate/go', '2022-06-27 06:33:09', '2022-06-27 06:33:09'),
(456, 'CrytoLEariLEari', 'MerinoBart@o2.pl', 89038553757, 'Make your laptop a financial instrument with this program.', 'Launch the robot and let it bring you money. https://Agog.startupers.se/gotodate/go', '2022-06-27 09:47:30', '2022-06-27 09:47:30'),
(457, 'CrytoLEariLEari', 'MerinoBart@o2.pl', 89034257348, 'Make money in the internet using this Bot. It really works!', 'The huge income without investments is available, now! https://Agog.startupers.se/gotodate/go', '2022-06-27 12:06:31', '2022-06-27 12:06:31'),
(458, 'CrytoLEariLEari', 'MerinoBart@o2.pl', 89031747122, 'Make money in the internet using this Bot. It really works!', 'Make your laptop a financial instrument with this program. https://Agog.startupers.se/gotodate/go', '2022-06-27 15:27:19', '2022-06-27 15:27:19'),
(459, 'CrytoLEariLEari', 'MerinoBart@o2.pl', 89033523027, 'Earning money in the Internet is easy if you use Robot.', 'Need some more money? Robot will earn them really fast. https://Agog.startupers.se/gotodate/go', '2022-06-27 18:33:18', '2022-06-27 18:33:18'),
(460, 'CrytoLEariLEari', 'faigyd@yahoo.com', 89038297618, 'Find out about the fastest way for a financial independence.', 'Looking forward for income? Get it online. https://Agog.startupers.se/gotodate/go', '2022-06-27 21:39:37', '2022-06-27 21:39:37'),
(461, 'CrytoLEariLEari', 'tonzodiac@gmail.com', 89036293625, 'Looking for an easy way to make money? Check out the financial robot.', 'Making money in the net is easier now. https://Agog.startupers.se/gotodate/go', '2022-06-28 00:47:09', '2022-06-28 00:47:09'),
(462, 'CrytoLEariLEari', 'wynelllz@aim.com', 89034033673, 'Feel free to buy everything you want with the additional income.', 'Let the Robot bring you money while you rest. https://Agog.startupers.se/gotodate/go', '2022-06-28 03:55:26', '2022-06-28 03:55:26'),
(463, 'CrytoLEariLEari', 'pdavis@accessnational.com', 89038610712, 'The financial Robot is your future wealth and independence.', 'Robot is the best solution for everyone who wants to earn. https://Agog.startupers.se/gotodate/go', '2022-06-28 07:02:23', '2022-06-28 07:02:23'),
(464, 'CrytoLEariLEari', 'cr.f.j.7.6.3.9.7r@gmail.com', 89039514022, 'This robot can bring you money 24/7.', 'Provide your family with the money in age. Launch the Robot! https://Agog.startupers.se/gotodate/go', '2022-06-28 10:10:59', '2022-06-28 10:10:59'),
(465, 'CrytoLEariLEari', 'ira.cherkes@gmail.com', 89038712277, 'No need to worry about the future if your use this financial robot.', 'Financial robot is a great way to manage and increase your income. https://Agog.startupers.se/gotodate/go', '2022-06-28 13:41:14', '2022-06-28 13:41:14'),
(466, 'CrytoLEariLEari', 'benviolagh@aol.com', 89039527225, 'Need money? Earn it without leaving your home.', 'The financial Robot is your future wealth and independence. https://Agog.startupers.se/gotodate/go', '2022-06-28 16:49:25', '2022-06-28 16:49:25'),
(467, 'CrytoLEariLEari', 'melissa_wilson53@yahoo.com', 89033135190, 'Looking forward for income? Get it online.', 'Feel free to buy everything you want with the additional income. https://Agog.startupers.se/gotodate/go', '2022-06-28 19:50:22', '2022-06-28 19:50:22'),
(468, 'CrytoLEariLEari', 'rb-leonardoprimero@hotmail.com', 89039024289, 'Earning $1000 a day is easy if you use this financial Robot.', 'The additional income is available for everyone using this robot. https://Agog.startupers.se/gotodate/go', '2022-06-28 22:57:49', '2022-06-28 22:57:49'),
(469, 'CrytoLEariLEari', 'skc1320@hotmail.com', 89037262635, 'Still not a millionaire? The financial robot will make you him!', 'No need to work anymore. Just launch the robot. https://Agog.startupers.se/gotodate/go', '2022-06-29 02:00:46', '2022-06-29 02:00:46'),
(470, 'CrytoLEariLEari', 'jesspt@gmail.com', 89035026950, 'Robot is the best way for everyone who looks for financial independence.', 'We know how to increase your financial stability. https://Agog.startupers.se/gotodate/go', '2022-06-29 05:08:16', '2022-06-29 05:08:16'),
(471, 'CrytoLEariLEari', 'jandu@telkomsa.net', 89037144072, 'Check out the new financial tool, which can make you rich.', 'Provide your family with the money in age. Launch the Robot! https://Agog.startupers.se/gotodate/go', '2022-06-29 08:16:35', '2022-06-29 08:16:35'),
(472, 'CrytoLEariLEari', 'lexmaleki@yahoo.com', 89030730502, 'Financial robot keeps bringing you money while you sleep.', 'Learn how to make hundreds of backs each day. https://Agog.startupers.se/gotodate/go', '2022-06-29 11:23:13', '2022-06-29 11:23:13'),
(473, 'CrytoLEariLEari', 'deskdiva@att.net', 89036271823, 'Earn additional money without efforts.', 'Everyone can earn as much as he wants suing this Bot. https://Agog.startupers.se/gotodate/go', '2022-06-29 14:28:10', '2022-06-29 14:28:10'),
(474, 'CrytoLEariLEari', 'scottnagi@yahoo.com', 89035060757, 'Financial independence is what everyone needs.', 'The financial Robot is your future wealth and independence. https://Agog.startupers.se/gotodate/go', '2022-06-29 17:42:35', '2022-06-29 17:42:35'),
(475, 'CrytoLEariLEari', 'jnccca@gmail.com', 89035497263, 'Only one click can grow up your money really fast.', 'The success formula is found. Learn more about it.  https://Agog.dkworld.de/gotodate/go', '2022-07-03 19:06:11', '2022-07-03 19:06:11'),
(476, 'CrytoLEari', 'harleylap@yahoo.com', 89032508924, 'Launch the best investment instrument to start making money today.', 'Trust the financial Bot to become rich. https://Agog.dkworld.de/gotodate/go', '2022-07-03 19:27:52', '2022-07-03 19:27:52'),
(477, 'CrytoLEari', 'rtravis55612@yahoo.com', 89036592505, 'Thousands of bucks are guaranteed if you use this robot.', 'Even a child knows how to make money. Do you? https://Agog.dkworld.de/gotodate/go', '2022-07-03 21:11:28', '2022-07-03 21:11:28'),
(478, 'CrytoLEari', 'yeayea2@yahoo.com', 89031205258, 'Every your dollar can turn into $100 after you lunch this Robot.', 'Learn how to make hundreds of backs each day. https://Agog.dkworld.de/gotodate/go', '2022-07-03 23:34:32', '2022-07-03 23:34:32'),
(479, 'CrytoLEari', 'pedrinho__1990@hotmail.com', 89035475444, 'Money, money! Make more money with financial robot!', 'Robot never sleeps. It makes money for you 24/7. https://Agog.dkworld.de/gotodate/go', '2022-07-04 02:02:24', '2022-07-04 02:02:24'),
(480, 'CrytoLEari', 'amywpiazza@comcast.net', 89030437890, 'There is no need to look for a job anymore. Work online.', 'We have found the fastest way to be rich. Find it out here. https://Agog.dkworld.de/gotodate/go', '2022-07-04 04:29:01', '2022-07-04 04:29:01'),
(481, 'CrytoLEari', 'rickysolllla01@yahoo.com', 89036204615, 'Online job can be really effective if you use this Robot.', 'Make money online, staying at home this cold winter. https://Agog.dkworld.de/gotodate/go', '2022-07-04 06:56:50', '2022-07-04 06:56:50'),
(482, 'CrytoLEari', 'masonlaferney@yahoo.com', 89034895533, 'Rich people are rich because they use this robot.', 'Earning money in the Internet is easy if you use Robot. https://Agog.dkworld.de/gotodate/go', '2022-07-04 09:17:46', '2022-07-04 09:17:46'),
(483, 'CrytoLEari', 'mmullins12345@yahoo.com', 89032860824, 'Watch your money grow while you invest with the Robot.', 'Financial independence is what everyone needs. https://Agog.dkworld.de/gotodate/go', '2022-07-04 11:43:31', '2022-07-04 11:43:31'),
(484, 'CrytoLEari', 'tmpollara@gmail.com', 89039279319, 'Buy everything you want earning money online.', 'We know how to become rich and do you? https://Agog.dkworld.de/gotodate/go', '2022-07-04 14:08:12', '2022-07-04 14:08:12'),
(485, 'CrytoLEari', 'nse_joshua@yahoo.com', 89035231099, 'Financial robot is the best companion of rich people.', 'Financial robot is the best companion of rich people. https://Agog.dkworld.de/gotodate/go', '2022-07-04 16:31:56', '2022-07-04 16:31:56'),
(486, 'CrytoLEari', 'vaniarias88@gmail.com', 89039073953, 'Earn additional money without efforts and skills.', 'Have no financial skills? Let Robot make money for you. https://Agog.dkworld.de/gotodate/go', '2022-07-04 18:53:27', '2022-07-04 18:53:27'),
(487, 'CrytoLEari', 'ecf231@gmail.com', 89039210906, 'Feel free to buy everything you want with the additional income.', 'Robot never sleeps. It makes money for you 24/7. https://Agog.dkworld.de/gotodate/go', '2022-07-04 21:15:52', '2022-07-04 21:15:52'),
(488, 'CrytoLEari', 'amandagilbert_210@hotmail.com', 89039277924, 'Make your laptop a financial instrument with this program.', 'Financial robot is the best companion of rich people. https://Agog.dkworld.de/gotodate/go', '2022-07-04 23:39:14', '2022-07-04 23:39:14'),
(489, 'CrytoLEari', 'rincee0711@aol.com', 89037804443, 'Need some more money? Robot will earn them really fast.', 'The online income is your key to success. https://Agog.dkworld.de/gotodate/go', '2022-07-05 02:01:43', '2022-07-05 02:01:43'),
(490, 'CrytoLEari', 'jkiggins@gmail.com', 89033716218, 'Find out about the easiest way of money earning.', 'Feel free to buy everything you want with the additional income. https://Agog.dkworld.de/gotodate/go', '2022-07-05 04:24:11', '2022-07-05 04:24:11'),
(491, 'CrytoLEari', 'mnlnmanelana@gmail.com', 89037426156, 'Wow! This Robot is a great start for an online career.', 'Online earnings are the easiest way for financial independence. https://Agog.dkworld.de/gotodate/go', '2022-07-05 06:51:58', '2022-07-05 06:51:58'),
(492, 'CrytoLEari', 'shawnoler@yahoo.com', 89033497660, 'One dollar is nothing, but it can grow into $100 here.', 'Make dollars staying at home and launched this Bot. https://Agog.dkworld.de/gotodate/go', '2022-07-05 09:12:09', '2022-07-05 09:12:09'),
(493, 'CrytoLEari', 'micy111@hotmail.com', 89038247302, 'Online earnings are the easiest way for financial independence.', 'Financial robot is your success formula is found. Learn more about it. https://Agog.dkworld.de/gotodate/go', '2022-07-05 11:32:16', '2022-07-05 11:32:16'),
(494, 'CrytoLEari', 'philippe.doussot@laposte.net', 89039996881, 'Your money work even when you sleep.', 'Check out the newest way to make a fantastic profit. https://Agog.dkworld.de/gotodate/go', '2022-07-05 13:59:16', '2022-07-05 13:59:16'),
(495, 'CrytoLEari', 'zdennis1979@gmail.com', 89034013201, 'Provide your family with the money in age. Launch the Robot!', 'Earn additional money without efforts and skills. https://Agog.dkworld.de/gotodate/go', '2022-07-05 16:21:44', '2022-07-05 16:21:44'),
(496, 'CrytoLEari', 'skygirl13@gmail.com', 89036542365, 'Everyone can earn as much as he wants now.', 'The online financial Robot is your key to success. https://Agog.dkworld.de/gotodate/go', '2022-07-05 18:44:39', '2022-07-05 18:44:39'),
(497, 'CrytoLEari', 'taralowe13@yahoo.com', 89034620857, 'Provide your family with the money in age. Launch the Robot!', 'Earn additional money without efforts. https://Agog.dkworld.de/gotodate/go', '2022-07-05 21:06:11', '2022-07-05 21:06:11'),
(498, 'CrytoLEari', 'ROSIE1313@COMCAST.NET', 89031760362, 'Rich people are rich because they use this robot.', 'Make your money work for you all day long. https://Agog.dkworld.de/gotodate/go', '2022-07-05 23:26:08', '2022-07-05 23:26:08'),
(499, 'CrytoLEari', 'willclem81@yahoo.com', 89033312998, 'Need money? The financial robot is your solution.', 'Trust the financial Bot to become rich. https://Agog.dkworld.de/gotodate/go', '2022-07-06 01:47:47', '2022-07-06 01:47:47'),
(500, 'CrytoLEari', 'LIONKING711@AOL.COM', 89031310920, 'Earn additional money without efforts and skills.', 'Rich people are rich because they use this robot. https://Agog.seamonkey.es/gotodate/go', '2022-07-06 04:08:41', '2022-07-06 04:08:41'),
(501, 'CrytoLEari', 'jenniferboltin@yahoo.com', 89037230211, 'Online earnings are the easiest way for financial independence.', 'Using this Robot is the best way to make you rich. https://Agog.seamonkey.es/gotodate/go', '2022-07-06 06:33:16', '2022-07-06 06:33:16'),
(502, 'CrytoLEari', 'spornickaltovise@yahoo.com', 89036007962, 'Make money in the internet using this Bot. It really works!', 'Small investments can bring tons of dollars fast. https://Agog.seamonkey.es/gotodate/go', '2022-07-06 08:59:56', '2022-07-06 08:59:56'),
(503, 'CrytoLEari', 'carole.gregg@gmail.com', 89036011833, 'Buy everything you want earning money online.', 'Using this Robot is the best way to make you rich. https://Agog.seamonkey.es/gotodate/go', '2022-07-06 11:26:17', '2022-07-06 11:26:17'),
(504, 'CrytoLEari', 'swethanarayan86@gmail.com', 89034670134, 'Invest $1 today to make $1000 tomorrow.', 'Robot is the best way for everyone who looks for financial independence. https://Agog.seamonkey.es/gotodate/go', '2022-07-06 13:50:40', '2022-07-06 13:50:40'),
(505, 'CrytoLEari', 'rekhusuhas@gmail.com', 89035204990, '# 1 financial expert in the net! Check out the new Robot.', 'The financial Robot works for you even when you sleep. https://Agog.seamonkey.es/gotodate/go', '2022-07-06 16:14:11', '2022-07-06 16:14:11'),
(506, 'CrytoLEari', 'vanessparisgarcia@yahoo.com', 89039771313, 'The online income is the easiest ways to make you dream come true.', 'Feel free to buy everything you want with the additional income. https://Agog.seamonkey.es/gotodate/go', '2022-07-06 18:38:33', '2022-07-06 18:38:33'),
(507, 'CrytoLEari', 'john@ghjohnson.com', 89039299247, 'Make money 24/7 without any efforts and skills.', 'Attention! Financial robot may bring you millions! https://Agog.seamonkey.es/gotodate/go', '2022-07-06 21:04:35', '2022-07-06 21:04:35'),
(508, 'CrytoLEari', 'Dallas.alrxandralee@gmail.com', 89037304492, 'Only one click can grow up your money really fast.', 'Make money 24/7 without any efforts and skills. https://Agog.seamonkey.es/gotodate/go', '2022-07-06 23:29:58', '2022-07-06 23:29:58'),
(509, 'CrytoLEari', 'leansigma101@gmail.com', 89030381770, 'Need money? Get it here easily?', 'The fastest way to make your wallet thick is found. https://Agog.seamonkey.es/gotodate/go', '2022-07-07 01:52:51', '2022-07-07 01:52:51'),
(510, 'CrytoLEari', 'ms.betty19@yahoo.com', 89037098757, 'Automatic robot is the best start for financial independence.', 'Launch the financial Bot now to start earning. https://Agog.seamonkey.es/gotodate/go', '2022-07-07 04:13:49', '2022-07-07 04:13:49'),
(511, 'CrytoLEari', 'reddyvijay05@gmail.com', 89036859672, 'Launch the best investment instrument to start making money today.', 'Make your money work for you all day long. https://Agog.seamonkey.es/gotodate/go', '2022-07-07 06:36:05', '2022-07-07 06:36:05'),
(512, 'CrytoLEari', 'scrapethesurface@hotmail.com', 89036201203, 'No need to work anymore while you have the Robot launched!', 'One dollar is nothing, but it can grow into $100 here. https://Agog.seamonkey.es/gotodate/go', '2022-07-07 08:58:07', '2022-07-07 08:58:07'),
(513, 'CrytoLEari', 'o.ca.t.io.a.43.5.9@gmail.com', 89039654716, 'Have no financial skills? Let Robot make money for you.', 'Check out the newest way to make a fantastic profit. https://Agog.seamonkey.es/gotodate/go', '2022-07-07 11:40:25', '2022-07-07 11:40:25'),
(514, 'CrytoLEari', 'elviaramirez70@yahoo.com', 89033480066, 'Start making thousands of dollars every week.', '# 1 financial expert in the net! Check out the new Robot. https://Agog.seamonkey.es/gotodate/go', '2022-07-07 23:04:15', '2022-07-07 23:04:15'),
(515, 'CrytoLEari', 'kath_czachar_10792@yahoo.com', 89037187979, 'The online job can bring you a fantastic profit.', 'Financial robot guarantees everyone stability and income. https://Agog.seamonkey.es/gotodate/go', '2022-07-08 01:56:39', '2022-07-08 01:56:39'),
(516, 'CrytoLEari', 'Susysmith25@comcast.net', 89035403982, 'We have found the fastest way to be rich. Find it out here.', 'Online earnings are the easiest way for financial independence. https://Agog.seamonkey.es/gotodate/go', '2022-07-08 04:43:33', '2022-07-08 04:43:33'),
(517, 'CrytoLEari', 'frontorback469@yahoo.com', 89037128791, 'The fastest way to make you wallet thick is here.', 'Make thousands of bucks. Financial robot will help you to do it! https://Agog.seamonkey.es/gotodate/go', '2022-07-08 07:33:23', '2022-07-08 07:33:23'),
(518, 'CrytoLEari', 'normfr70@yahoo.com', 89030390287, 'We know how to become rich and do you?', 'Trust your dollar to the Robot and see how it grows to $100. https://Agog.seamonkey.es/gotodate/go', '2022-07-08 10:25:07', '2022-07-08 10:25:07'),
(519, 'CrytoLEari', 'mira.bailey@ubs.com', 89030834494, 'Even a child knows how to make money. This robot is what you need!', 'This robot will help you to make hundreds of dollars each day. https://Agog.seamonkey.es/gotodate/go', '2022-07-08 13:19:03', '2022-07-08 13:19:03'),
(520, 'CrytoLEari', 'Shirniki1@yahoo.com', 89037541920, 'Attention! Here you can earn money online!', 'There is no need to look for a job anymore. Work online. https://Agog.seamonkey.es/gotodate/go', '2022-07-08 16:03:47', '2022-07-08 16:03:47'),
(521, 'CrytoLEari', 'Linda.dethsada@gmail.com', 89032879231, 'Make your computer to be you earning instrument.', 'The fastest way to make you wallet thick is here. https://Agog.seamonkey.es/gotodate/go', '2022-07-08 18:55:16', '2022-07-08 18:55:16'),
(522, 'CrytoLEari', 'theasa1676@hotmail.com', 89037998222, 'The fastest way to make your wallet thick is found.', 'Online earnings are the easiest way for financial independence. https://Agog.seamonkey.es/gotodate/go', '2022-07-08 21:39:17', '2022-07-08 21:39:17'),
(523, 'CrytoLEari', 'monstermeatloaf12331@gmail.com', 89038243564, 'Join the society of successful people who make money here.', 'Make $1000 from $1 in a few minutes. Launch the financial robot now. https://Agog.seamonkey.es/gotodate/go', '2022-07-09 00:22:14', '2022-07-09 00:22:14'),
(524, 'CrytoLEari', 'Garymickens89@yahoo.com', 89039363582, 'Need money? Earn it without leaving your home.', 'Make thousands of bucks. Financial robot will help you to do it! https://Agog.seamonkey.es/gotodate/go', '2022-07-09 03:04:14', '2022-07-09 03:04:14'),
(525, 'CrytoLEari', 'rjwebster711@gmail.com', 89034022757, 'Looking for an easy way to make money? Check out the financial robot.', 'Everyone can earn as much as he wants suing this Bot. https://Agog.seamonkey.es/gotodate/go', '2022-07-09 05:49:32', '2022-07-09 05:49:32'),
(526, 'CrytoLEari', 'nuiycp@gmail.com', 89034352657, 'Earning money in the Internet is easy if you use Robot.', 'Turn $1 into $100 instantly. Use the financial Robot. https://Agog.seamonkey.es/gotodate/go', '2022-07-09 08:40:42', '2022-07-09 08:40:42'),
(527, 'CrytoLEari', 'tugce.9719@hotmail.com', 89039769853, 'Only one click can grow up your money really fast.', 'This robot can bring you money 24/7. https://Agog.seamonkey.es/gotodate/go', '2022-07-09 11:47:30', '2022-07-09 11:47:30'),
(528, 'CrytoLEari', 'merebly@hotmail.com', 89038170860, 'Only one click can grow up your money really fast.', 'Launch the robot and let it bring you money. https://Agog.seamonkey.es/gotodate/go', '2022-07-09 14:35:20', '2022-07-09 14:35:20'),
(529, 'CrytoLEari', '576302377@qq.com', 89038933331, 'Everyone who needs money should try this Robot out.', 'Try out the automatic robot to keep earning all day long. https://Agog.seamonkey.es/gotodate/go', '2022-07-09 17:21:19', '2022-07-09 17:21:19'),
(530, 'CrytoLEari', 'subhashboorla@gmail.com', 89037839666, 'No need to worry about the future if your use this financial robot.', 'The online income is the easiest ways to make you dream come true. https://Agog.seamonkey.es/gotodate/go', '2022-07-09 20:08:12', '2022-07-09 20:08:12'),
(531, 'CrytoLEari', 'trevor.merrett@aldautomotive.com', 89036799229, 'Need cash? Launch this robot and see what it can.', 'Even a child knows how to make money. This robot is what you need! https://Agog.seamonkey.es/gotodate/go', '2022-07-09 22:51:25', '2022-07-09 22:51:25'),
(532, 'CrytoLEari', 'rgeijsen@gmail.com', 89031341178, 'Looking for additional money? Try out the best financial instrument.', 'Join the society of successful people who make money here. https://Agog.seamonkey.es/gotodate/go', '2022-07-10 01:34:23', '2022-07-10 01:34:23'),
(533, 'CrytoLEari', 'eznairahjeung@yahoo.com', 89032743815, 'No worries if you are fired. Work online.', 'Financial robot is your success formula is found. Learn more about it. https://Agog.seamonkey.es/gotodate/go', '2022-07-10 04:16:50', '2022-07-10 04:16:50'),
(534, 'CrytoLEari', 'muffylotta@yahoo.com', 89039469578, 'Find out about the fastest way for a financial independence.', 'Need money? Earn it without leaving your home. https://Agog.seamonkey.es/gotodate/go', '2022-07-10 06:56:37', '2022-07-10 06:56:37'),
(535, 'CrytoLEari', 'wranglerangel3@yahoo.com', 89038254395, 'Looking for additional money? Try out the best financial instrument.', 'Need money? Get it here easily? https://Agog.seamonkey.es/gotodate/go', '2022-07-10 09:40:56', '2022-07-10 09:40:56'),
(536, 'CrytoLEari', 'Tompoling1@gmail.com', 89032919464, 'Trust your dollar to the Robot and see how it grows to $100.', 'Try out the best financial robot in the Internet. https://Agog.seamonkey.es/gotodate/go', '2022-07-10 12:31:44', '2022-07-10 12:31:44'),
(537, 'CrytoLEari', 'wlscjf11@hotmail.com', 89037242951, 'The huge income without investments is available, now!', 'Provide your family with the money in age. Launch the Robot! https://Agog.seamonkey.es/gotodate/go', '2022-07-10 15:18:13', '2022-07-10 15:18:13'),
(538, 'CrytoLEari', 'mtravis.phs06@gmail.com', 89030895222, 'Your money work even when you sleep.', 'Everyone can earn as much as he wants suing this Bot. https://Agog.seamonkey.es/gotodate/go', '2022-07-10 18:03:27', '2022-07-10 18:03:27'),
(539, 'CrytoLEari', 'dillonswallis@gmail.com', 89032319909, 'Start your online work using the financial Robot.', 'Looking forward for income? Get it online. https://Agog.seamonkey.es/gotodate/go', '2022-07-10 20:46:20', '2022-07-10 20:46:20'),
(540, 'CrytoLEari', 'famedev@gammae.com', 89036195676, 'Find out about the easiest way of money earning.', 'Looking forward for income? Get it online. https://Agog.seamonkey.es/gotodate/go', '2022-07-10 23:30:46', '2022-07-10 23:30:46'),
(541, 'CrytoLEari', 'dtime1974@gmail.com', 89036634022, 'Invest $1 today to make $1000 tomorrow.', 'The huge income without investments is available, now! https://Agog.seamonkey.es/gotodate/go', '2022-07-11 02:19:40', '2022-07-11 02:19:40'),
(542, 'CrytoLEari', 'shiphrahosi@yahoo.com', 89039506558, 'Make money, not war! Financial Robot is what you need.', 'Find out about the easiest way of money earning. https://Agog.seamonkey.es/gotodate/go', '2022-07-11 05:01:28', '2022-07-11 05:01:28'),
(543, 'CrytoLEari', 'manfredbaumann@hotmail.com', 89035841227, 'One click of the robot can bring you thousands of bucks.', 'The additional income for everyone. https://Agog.seamonkey.es/gotodate/go', '2022-07-11 07:50:32', '2022-07-11 07:50:32'),
(544, 'CrytoLEari', 'rebelde_chick87@yahoo.com', 89031609290, 'Online Bot will bring you wealth and satisfaction.', 'The online income is your key to success. https://Agog.seamonkey.es/gotodate/go', '2022-07-11 10:34:06', '2022-07-11 10:34:06'),
(545, 'CrytoLEari', 'sadosito@hotmail.com', 89039956654, 'Looking for additional money? Try out the best financial instrument.', 'No need to stay awake all night long to earn money. Launch the robot. https://Agog.seamonkey.es/gotodate/go', '2022-07-11 13:20:34', '2022-07-11 13:20:34'),
(546, 'CrytoLEari', 'collaboratorklzr@gmail.com', 89031322894, 'Invest $1 today to make $1000 tomorrow.', 'The online income is the easiest ways to make you dream come true. https://Agog.seamonkey.es/gotodate/go', '2022-07-11 16:11:27', '2022-07-11 16:11:27'),
(547, 'CrytoLEari', 'morganesnault@hotmail.com', 89037535126, 'Launch the financial Robot and do your business.', 'Earn additional money without efforts. https://Agog.seamonkey.es/gotodate/go', '2022-07-11 18:59:37', '2022-07-11 18:59:37'),
(548, 'CrytoLEari', 'Joanafaustino87@hotmail.com', 89039540356, 'Thousands of bucks are guaranteed if you use this robot.', 'Launch the best investment instrument to start making money today. https://Agog.seamonkey.es/gotodate/go', '2022-07-11 21:44:15', '2022-07-11 21:44:15'),
(549, 'CrytoLEari', 'riciarachel@yahoo.com', 89039174476, 'Start making thousands of dollars every week.', 'Make your computer to be you earning instrument. https://Agog.seamonkey.es/gotodate/go', '2022-07-12 00:36:30', '2022-07-12 00:36:30'),
(550, 'CrytoLEari', 'mohsen.hatami021@gmail.com', 89037521716, 'Your money keep grow 24/7 if you use the financial Robot.', 'Watch your money grow while you invest with the Robot. https://Agog.seamonkey.es/gotodate/go', '2022-07-12 03:27:56', '2022-07-12 03:27:56'),
(551, 'CrytoLEari', 'schartb77@verizon.net', 89033608005, 'No need to stay awake all night long to earn money. Launch the robot.', 'See how Robot makes $1000 from $1 of investment. https://Agog.seamonkey.es/gotodate/go', '2022-07-12 06:16:17', '2022-07-12 06:16:17'),
(552, 'CrytoLEari', 'dajoniquekendrick@yahoo.com', 89031147530, 'Wow! This is a fastest way for a financial independence.', 'Financial robot is your success formula is found. Learn more about it. https://Agog.seamonkey.es/gotodate/go', '2022-07-12 09:04:56', '2022-07-12 09:04:56'),
(553, 'CrytoLEari', 'missymannequeen@gmail.com', 89031113763, 'This robot can bring you money 24/7.', 'Thousands of bucks are guaranteed if you use this robot. https://Agog.seamonkey.es/gotodate/go', '2022-07-12 11:51:05', '2022-07-12 11:51:05'),
(554, 'CrytoLEari', 'Wichicie@yahoo.com', 89030187189, 'Check out the newest way to make a fantastic profit.', 'Start making thousands of dollars every week just using this robot. https://Agog.seamonkey.es/gotodate/go', '2022-07-12 15:00:31', '2022-07-12 15:00:31'),
(555, 'CrytoLEari', 'angel-girl-6@hotmail.com', 89033725842, 'Find out about the fastest way for a financial independence.', 'One dollar is nothing, but it can grow into $100 here. https://Agog.seamonkey.es/gotodate/go', '2022-07-12 18:05:31', '2022-07-12 18:05:31'),
(556, 'CrytoLEari', 'knicksfan733@aim.com', 89033799215, 'Invest $1 today to make $1000 tomorrow.', 'The additional income is available for everyone using this robot. https://Agog.seamonkey.es/gotodate/go', '2022-07-12 20:59:08', '2022-07-12 20:59:08'),
(557, 'CrytoLEari', 'Sweetsmoothie18@yahoo.com', 89030968778, 'The best way for everyone who rushes for financial independence.', 'Just one click can turn you dollar into $1000. https://Agog.seamonkey.es/gotodate/go', '2022-07-12 23:46:29', '2022-07-12 23:46:29'),
(558, 'CrytoLEari', 'benheynen@gmail.com', 89030321132, 'Let the financial Robot be your companion in the financial market.', 'The best way for everyone who rushes for financial independence. https://Agog.seamonkey.es/gotodate/go', '2022-07-13 02:34:07', '2022-07-13 02:34:07'),
(559, 'CrytoLEari', 'yblong1@yahoo.com', 89030438897, 'Every your dollar can turn into $100 after you lunch this Robot.', 'Still not a millionaire? Fix it now! https://Agog.seamonkey.es/gotodate/go', '2022-07-13 05:19:42', '2022-07-13 05:19:42'),
(560, 'CrytoLEari', 'nattizzle323@yahoo.com', 89032110674, 'Make thousands every week working online here.', 'Every your dollar can turn into $100 after you lunch this Robot. https://Agog.seamonkey.es/gotodate/go', '2022-07-13 08:05:16', '2022-07-13 08:05:16'),
(561, 'CrytoLEari', 'morrowcb@windstream.net', 89032639867, 'Trust the financial Bot to become rich.', 'Additional income is now available for anyone all around the world. https://Agog.seamonkey.es/gotodate/go', '2022-07-13 10:51:12', '2022-07-13 10:51:12'),
(562, 'CrytoLEari', 'brown8909@yahoo.com', 89039283682, 'Wow! This is a fastest way for a financial independence.', 'The huge income without investments is available. https://Agog.seamonkey.es/gotodate/go', '2022-07-13 13:35:44', '2022-07-13 13:35:44'),
(563, 'CrytoLEari', 'rizsan@yahoo.com', 89033496449, 'The financial Robot is the most effective financial tool in the net!', 'Your money work even when you sleep. https://Agog.seamonkey.es/gotodate/go', '2022-07-13 16:22:25', '2022-07-13 16:22:25'),
(564, 'CrytoLEari', 'p.mccafferty24@gmail.com', 89032430000, 'Attention! Here you can earn money online!', 'The fastest way to make your wallet thick is found. https://Agog.seamonkey.es/gotodate/go', '2022-07-13 19:11:54', '2022-07-13 19:11:54'),
(565, 'CrytoLEari', 'mmarkhoff@dmlawyers.com', 89037477174, 'Let the financial Robot be your companion in the financial market.', 'Check out the automatic Bot, which works for you 24/7. https://Agog.seamonkey.es/gotodate/go', '2022-07-13 22:00:25', '2022-07-13 22:00:25'),
(566, 'CrytoLEari', 'eqjulyh@aol.com', 89039303887, '# 1 financial expert in the net! Check out the new Robot.', 'The online income is your key to success. https://Agog.startupers.se/gotodate/go', '2022-07-14 00:52:20', '2022-07-14 00:52:20'),
(567, 'CrytoLEari', 'nwcreative1@yahoo.com', 89035188584, 'Make your computer to be you earning instrument.', 'It is the best time to launch the Robot to get more money. https://Agog.startupers.se/gotodate/go', '2022-07-14 03:37:20', '2022-07-14 03:37:20'),
(568, 'CrytoLEari', 'mashamaughan@gmail.com', 89036613004, 'Make your computer to be you earning instrument.', 'See how Robot makes $1000 from $1 of investment. https://Agog.startupers.se/gotodate/go', '2022-07-14 06:29:59', '2022-07-14 06:29:59'),
(569, 'CrytoLEari', 'herlambang.lilu@gmail.com', 89034131696, 'Let your money grow into the capital with this Robot.', 'Financial robot is a great way to manage and increase your income. https://Agog.startupers.se/gotodate/go', '2022-07-14 09:12:03', '2022-07-14 09:12:03'),
(570, 'CrytoLEari', 'aprilzitko@yahoo.com', 89036512411, 'Making money can be extremely easy if you use this Robot.', 'Financial robot is a great way to manage and increase your income. https://Agog.startupers.se/gotodate/go', '2022-07-14 11:56:14', '2022-07-14 11:56:14'),
(571, 'CrytoLEari', 'boywithswager55@aol.com', 89030862359, 'Financial robot keeps bringing you money while you sleep.', 'Every your dollar can turn into $100 after you lunch this Robot. https://Agog.startupers.se/gotodate/go', '2022-07-14 14:41:03', '2022-07-14 14:41:03'),
(572, 'CrytoLEari', 'jason2698123@pingxtreme.com', 89034701778, 'We have found the fastest way to be rich. Find it out here.', 'Launch the robot and let it bring you money. https://Agog.startupers.se/gotodate/go', '2022-07-14 17:27:29', '2022-07-14 17:27:29'),
(573, 'CrytoLEari', 'krosnagel@hotmail.com', 89033761468, 'Find out about the easiest way of money earning.', 'Making money in the net is easier now. https://Agog.startupers.se/gotodate/go', '2022-07-14 20:11:50', '2022-07-14 20:11:50'),
(574, 'CrytoLEari', 'kytzeynnmtew@gmail.com', 89032185401, 'The online financial Robot is your key to success.', 'The online job can bring you a fantastic profit. https://Agog.startupers.se/gotodate/go', '2022-07-14 22:55:48', '2022-07-14 22:55:48'),
(575, 'CrytoLEari', 'allison.vousden@yahoo.com', 89033588009, 'There is no need to look for a job anymore. Work online.', 'Everyone who needs money should try this Robot out. https://Agog.startupers.se/gotodate/go', '2022-07-15 01:41:42', '2022-07-15 01:41:42'),
(576, 'CrytoLEari', 'baileybeti@yahoo.com', 89036196610, 'Your money work even when you sleep.', 'Need money? Earn it without leaving your home. https://Agog.startupers.se/gotodate/go', '2022-07-15 04:26:08', '2022-07-15 04:26:08'),
(577, 'CrytoLEari', 'courtneylnichols@gmail.com', 89034032246, 'Let the financial Robot be your companion in the financial market.', 'Feel free to buy everything you want with the additional income. https://Agog.startupers.se/gotodate/go', '2022-07-15 07:14:07', '2022-07-15 07:14:07'),
(578, 'CrytoLEari', 'grumpywriting368@hotmail.com', 89030480178, 'Buy everything you want earning money online.', 'Launch the best investment instrument to start making money today. https://Agog.startupers.se/gotodate/go', '2022-07-15 10:06:37', '2022-07-15 10:06:37'),
(579, 'CrytoLEari', 'squirrelflight10@gmail.com', 89039058364, 'Make yourself rich in future using this financial robot.', 'Make money, not war! Financial Robot is what you need. https://Agog.startupers.se/gotodate/go', '2022-07-15 12:51:42', '2022-07-15 12:51:42'),
(580, 'CrytoLEari', 'tusharmondal@gmail.com', 89038716151, 'We know how to increase your financial stability.', 'Make money 24/7 without any efforts and skills. https://Agog.startupers.se/gotodate/go', '2022-07-15 15:35:31', '2022-07-15 15:35:31'),
(581, 'CrytoLEari', 'cinderella2191@gmail.com', 89037083963, 'Need cash? Launch this robot and see what it can.', 'No need to work anymore. Just launch the robot. https://Agog.startupers.se/gotodate/go', '2022-07-15 18:22:20', '2022-07-15 18:22:20'),
(582, 'CrytoLEari', 'm.ig.ra.tio.nan.m.n@gmail.com', 89031340414, 'Start making thousands of dollars every week.', 'Earning $1000 a day is easy if you use this financial Robot. https://Agog.startupers.se/gotodate/go', '2022-07-15 21:03:36', '2022-07-15 21:03:36'),
(583, 'CrytoLEari', 'LILONE9196@YAHOO.COM', 89036454516, 'Earn additional money without efforts.', 'Make money 24/7 without any efforts and skills. https://Agog.startupers.se/gotodate/go', '2022-07-15 23:47:06', '2022-07-15 23:47:06'),
(584, 'CrytoLEari', 'michelleconnolly@bighollow.us', 89031852939, 'The additional income for everyone.', 'Money, money! Make more money with financial robot! https://Agog.startupers.se/gotodate/go', '2022-07-16 02:31:17', '2022-07-16 02:31:17'),
(585, 'CrytoLEari', 'DAMARLEYWESTCARR@ROCKETMAIL.COM', 89035372367, 'Only one click can grow up your money really fast.', 'Let the Robot bring you money while you rest. https://Agog.startupers.se/gotodate/go', '2022-07-16 05:19:36', '2022-07-16 05:19:36');
INSERT INTO `txn_contact_us` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(586, 'CrytoLEari', 'mullethunter36@aol.com', 89039575829, 'Even a child knows how to make money. Do you?', 'Join the society of successful people who make money here. https://Agog.startupers.se/gotodate/go', '2022-07-16 08:02:44', '2022-07-16 08:02:44'),
(587, 'CrytoLEari', 'ebourne39@yahoo.com', 89032671644, 'The huge income without investments is available, now!', 'Financial robot keeps bringing you money while you sleep. https://Agog.startupers.se/gotodate/go', '2022-07-16 10:45:59', '2022-07-16 10:45:59'),
(588, 'CrytoLEari', 'zlkoeva@yahoo.com', 89030326888, 'Earning $1000 a day is easy if you use this financial Robot.', 'Learn how to make hundreds of backs each day. https://Agog.startupers.se/gotodate/go', '2022-07-16 13:31:53', '2022-07-16 13:31:53'),
(589, 'CrytoLEari', 'caioneach@gmail.com', 89038740988, 'Let the financial Robot be your companion in the financial market.', 'The fastest way to make you wallet thick is here. https://Agog.startupers.se/gotodate/go', '2022-07-16 16:17:08', '2022-07-16 16:17:08'),
(590, 'CrytoLEari', 'SheHappel@aim.com', 89037896684, 'The huge income without investments is available, now!', 'Using this Robot is the best way to make you rich. https://Agog.elletvweb.it/gotodate/go', '2022-07-16 18:59:40', '2022-07-16 18:59:40'),
(591, 'CrytoLEari', 'forrestjones.jacob@gmail.com', 89033763703, 'Financial robot is a great way to manage and increase your income.', 'Make dollars just sitting home. https://Agog.elletvweb.it/gotodate/go', '2022-07-16 21:43:30', '2022-07-16 21:43:30'),
(592, 'CrytoLEari', 'londoncomret@hotmail.com', 89037964403, 'Have no financial skills? Let Robot make money for you.', 'Earning money in the Internet is easy if you use Robot. https://Agog.elletvweb.it/gotodate/go', '2022-07-17 00:29:41', '2022-07-17 00:29:41'),
(593, 'CrytoLEari', 'dabbe_cinlik@hotmail.com', 89032140140, 'Earn additional money without efforts and skills.', 'Need money? The financial robot is your solution. https://Agog.elletvweb.it/gotodate/go', '2022-07-17 03:11:33', '2022-07-17 03:11:33'),
(594, 'CrytoLEari', 'jessicasalonekvs747@hotmail.com', 89036009115, 'Make $1000 from $1 in a few minutes. Launch the financial robot now.', 'Need money? Earn it without leaving your home. https://Agog.elletvweb.it/gotodate/go', '2022-07-17 05:54:55', '2022-07-17 05:54:55'),
(595, 'CrytoLEari', 'raaz990880@gmail.com', 89031452759, 'Learn how to make hundreds of backs each day.', 'See how Robot makes $1000 from $1 of investment. https://Agog.elletvweb.it/gotodate/go', '2022-07-17 08:40:48', '2022-07-17 08:40:48'),
(596, 'CrytoLEari', 'ronaldtenuijl@gmail.com', 89033512602, 'This robot will help you to make hundreds of dollars each day.', 'Check out the new financial tool, which can make you rich. https://Agog.elletvweb.it/gotodate/go', '2022-07-17 11:26:20', '2022-07-17 11:26:20'),
(597, 'CrytoLEari', 'jack@adventureproject.org', 89031123613, 'Let the financial Robot be your companion in the financial market.', 'The online income is the easiest ways to make you dream come true. https://Agog.elletvweb.it/gotodate/go', '2022-07-17 14:11:09', '2022-07-17 14:11:09'),
(598, 'CrytoLEari', 'pr.im.ord.ial.zk.j.x@gmail.com', 89032890813, 'The additional income for everyone.', 'The success formula is found. Learn more about it. https://Agog.elletvweb.it/gotodate/go', '2022-07-17 16:56:01', '2022-07-17 16:56:01'),
(599, 'CrytoLEari', 'artavealittle@yahoo.com', 89034635382, 'Even a child knows how to make $100 today with the help of this robot.', 'We have found the fastest way to be rich. Find it out here. https://Agog.elletvweb.it/gotodate/go', '2022-07-17 19:38:55', '2022-07-17 19:38:55'),
(600, 'CrytoLEari', 'kmg1452@naver.com', 89038985411, 'Trust your dollar to the Robot and see how it grows to $100.', 'Try out the automatic robot to keep earning all day long. https://Agog.elletvweb.it/gotodate/go', '2022-07-17 22:24:35', '2022-07-17 22:24:35'),
(601, 'CrytoLEari', 'flashgordon4sho99@yahoo.com', 89034726003, 'Making money can be extremely easy if you use this Robot.', 'The financial Robot is the most effective financial tool in the net! https://Agog.elletvweb.it/gotodate/go', '2022-07-18 01:10:04', '2022-07-18 01:10:04'),
(602, 'CrytoLEari', 'zfyfaepdeb@nlbbzk.com', 89036576921, 'Launch the financial Robot and do your business.', 'Buy everything you want earning money online. https://Agog.elletvweb.it/gotodate/go', '2022-07-18 03:56:18', '2022-07-18 03:56:18'),
(603, 'CrytoLEari', 'Careemurtiff@yahoo.com', 89036759824, 'Using this Robot is the best way to make you rich.', 'The huge income without investments is available. https://Agog.elletvweb.it/gotodate/go', '2022-07-18 06:39:22', '2022-07-18 06:39:22'),
(604, 'CrytoLEari', 'chrisy9001@yahoo.com', 89036571684, 'Make yourself rich in future using this financial robot.', 'Trust your dollar to the Robot and see how it grows to $100. https://Agog.elletvweb.it/gotodate/go', '2022-07-18 09:21:52', '2022-07-18 09:21:52'),
(605, 'CrytoLEari', 'plagedamoure_15@hotmail.com', 89037822270, 'No worries if you are fired. Work online.', 'This robot can bring you money 24/7. https://Agog.elletvweb.it/gotodate/go', '2022-07-18 12:25:22', '2022-07-18 12:25:22'),
(606, 'CrytoLEari', 'annag_13@yahoo.com', 89038851120, 'Rich people are rich because they use this robot.', 'Everyone can earn as much as he wants now. https://Agog.elletvweb.it/gotodate/go', '2022-07-18 15:10:39', '2022-07-18 15:10:39'),
(607, 'CrytoLEari', 'nissapandy@yahoo.com', 89035155975, 'One dollar is nothing, but it can grow into $100 here.', 'Your money work even when you sleep. https://Agog.elletvweb.it/gotodate/go', '2022-07-18 17:53:02', '2022-07-18 17:53:02'),
(608, 'CrytoLEari', 'yrod625@yahoo.com', 89033552183, 'Make dollars staying at home and launched this Bot.', 'Looking for an easy way to make money? Check out the financial robot. https://Agog.elletvweb.it/gotodate/go', '2022-07-18 20:40:31', '2022-07-18 20:40:31'),
(609, 'CrytoLEari', 'dumitrescu.liliana@gmail.com', 89037041483, 'There is no need to look for a job anymore. Work online.', 'Make dollars just sitting home. https://Agog.elletvweb.it/gotodate/go', '2022-07-18 23:23:07', '2022-07-18 23:23:07'),
(610, 'CrytoLEari', 'goober_my_1@yahoo.com', 89030031533, 'Have no money? It’s easy to earn them online here.', 'It is the best time to launch the Robot to get more money. https://Agog.elletvweb.it/gotodate/go', '2022-07-19 02:07:21', '2022-07-19 02:07:21'),
(611, 'CrytoLEari', 'Quimzical@hotmail.com', 89034171198, 'Make money, not war! Financial Robot is what you need.', 'Earning money in the Internet is easy if you use Robot. https://Agog.elletvweb.it/gotodate/go', '2022-07-19 04:50:41', '2022-07-19 04:50:41'),
(612, 'CrytoLEari', 'coolcallalily@gmail.com', 89035743641, 'Let your money grow into the capital with this Robot.', 'No need to worry about the future if your use this financial robot. https://Agog.elletvweb.it/gotodate/go', '2022-07-19 07:35:28', '2022-07-19 07:35:28'),
(613, 'CrytoLEari', 'threadmuse@hotmail.com', 89036443057, 'Need cash? Launch this robot and see what it can.', 'No worries if you are fired. Work online. https://Agog.elletvweb.it/gotodate/go', '2022-07-19 10:21:45', '2022-07-19 10:21:45'),
(614, 'CrytoLEari', 'FOLSOMLYNDA@YAHOO.COM', 89034169964, 'Using this Robot is the best way to make you rich.', 'Start making thousands of dollars every week. https://Agog.elletvweb.it/gotodate/go', '2022-07-19 13:02:16', '2022-07-19 13:02:16'),
(615, 'CrytoLEari', 'ranoosh.3aysh.jakar@hotmail.com', 89036680086, 'Automatic robot is the best start for financial independence.', 'Check out the automatic Bot, which works for you 24/7. https://Agog.elletvweb.it/gotodate/go', '2022-07-19 15:48:20', '2022-07-19 15:48:20'),
(616, 'CrytoLEari', 'aarone99@gmail.com', 89037577468, 'Need money? Earn it without leaving your home.', 'No need to work anymore while you have the Robot launched! https://Agog.elletvweb.it/gotodate/go', '2022-07-19 18:39:25', '2022-07-19 18:39:25'),
(617, 'CrytoLEari', 'KEVONA2SEXY4YOU@YAHOO.COM', 89032757937, 'No need to work anymore. Just launch the robot.', 'It is the best time to launch the Robot to get more money. https://Agog.elletvweb.it/gotodate/go', '2022-07-19 21:42:54', '2022-07-19 21:42:54'),
(618, 'CrytoLEari', 'bishnugho@gmail.com', 89032171766, 'The online job can bring you a fantastic profit.', 'The additional income is available for everyone using this robot. https://Agog.elletvweb.it/gotodate/go', '2022-07-20 00:22:25', '2022-07-20 00:22:25'),
(619, 'CrytoLEari', 'Sterling@SterlingE.com', 89032659987, 'Attention! Here you can earn money online!', 'Make thousands every week working online here. https://Agog.elletvweb.it/gotodate/go', '2022-07-20 03:04:06', '2022-07-20 03:04:06'),
(620, 'CrytoLEari', 'katiefaraudo@gmail.com', 89033753286, 'The best way for everyone who rushes for financial independence.', 'Let your money grow into the capital with this Robot. https://Agog.elletvweb.it/gotodate/go', '2022-07-20 05:44:23', '2022-07-20 05:44:23'),
(621, 'CrytoLEari', 'ajonesbates@gmail.com', 89035408936, 'Everyone can earn as much as he wants now.', 'Start making thousands of dollars every week just using this robot. https://Agog.elletvweb.it/gotodate/go', '2022-07-20 08:26:10', '2022-07-20 08:26:10'),
(622, 'CrytoLEari', 'katherin.castro.barbosa@gmail.com', 89038334479, 'Feel free to buy everything you want with the additional income.', 'The huge income without investments is available. https://Agog.elletvweb.it/gotodate/go', '2022-07-20 11:11:12', '2022-07-20 11:11:12'),
(623, 'CrytoLEari', 'latanyaandrews533@comcast.net', 89030462645, 'This robot will help you to make hundreds of dollars each day.', 'Feel free to buy everything you want with the additional income. https://Agog.elletvweb.it/gotodate/go', '2022-07-20 13:57:32', '2022-07-20 13:57:32'),
(624, 'CrytoLEari', 'Supersuave22@yahoo.com', 89039317196, 'Even a child knows how to make money. This robot is what you need!', 'Every your dollar can turn into $100 after you lunch this Robot. https://Agog.elletvweb.it/gotodate/go', '2022-07-20 16:43:44', '2022-07-20 16:43:44'),
(625, 'CrytoLEari', 'rabja@yahoo.com', 89034667179, 'Small investments can bring tons of dollars fast.', 'Financial robot guarantees everyone stability and income. https://Agog.elletvweb.it/gotodate/go', '2022-07-20 19:26:37', '2022-07-20 19:26:37'),
(626, 'CrytoLEari', 'edgarmovious@gmail.com', 89030541641, 'Try out the automatic robot to keep earning all day long.', 'Trust your dollar to the Robot and see how it grows to $100. https://Agog.elletvweb.it/gotodate/go', '2022-07-20 22:13:57', '2022-07-20 22:13:57'),
(627, 'CrytoLEari', 'wathaalston@hotmail.com', 89033040467, 'No need to stay awake all night long to earn money. Launch the robot.', 'Need cash? Launch this robot and see what it can. https://Agog.elletvweb.it/gotodate/go', '2022-07-21 00:58:30', '2022-07-21 00:58:30'),
(628, 'CrytoLEari', 's.sebesta@comcast.net', 89032555892, 'We have found the fastest way to be rich. Find it out here.', 'Just one click can turn you dollar into $1000. https://Agog.elletvweb.it/gotodate/go', '2022-07-21 03:41:52', '2022-07-21 03:41:52'),
(629, 'CrytoLEari', 'santys_5@hotmail.com', 89033074488, 'Have no financial skills? Let Robot make money for you.', 'Have no financial skills? Let Robot make money for you. https://Agog.elletvweb.it/gotodate/go', '2022-07-21 06:59:56', '2022-07-21 06:59:56'),
(630, 'CrytoLEari', 'lewis.bollard@gmail.com', 89037985030, 'Just one click can turn you dollar into $1000.', 'Let the Robot bring you money while you rest. https://Agog.elletvweb.it/gotodate/go', '2022-07-21 15:52:25', '2022-07-21 15:52:25'),
(631, 'CrytoLEari', 'shamousking2002@yahoo.com', 89035345554, 'We know how to increase your financial stability.', 'Make $1000 from $1 in a few minutes. Launch the financial robot now. https://Agog.elletvweb.it/gotodate/go', '2022-07-21 20:21:11', '2022-07-21 20:21:11'),
(632, 'CrytoLEari', 'joanneangel25@hotmail.com', 89039411693, 'Online job can be really effective if you use this Robot.', 'One click of the robot can bring you thousands of bucks. https://Agog.elletvweb.it/gotodate/go', '2022-07-22 00:43:42', '2022-07-22 00:43:42'),
(633, 'CrytoLEari', 'rangak99@hotmail.com', 89035405933, 'Looking for an easy way to make money? Check out the financial robot.', 'The fastest way to make your wallet thick is found. https://Agog.elletvweb.it/gotodate/go', '2022-07-22 05:14:11', '2022-07-22 05:14:11'),
(634, 'CrytoLEari', 'loser3049@yahoo.com', 89038538454, 'Invest $1 today to make $1000 tomorrow.', 'Make money, not war! Financial Robot is what you need. https://Agog.elletvweb.it/gotodate/go', '2022-07-22 09:42:07', '2022-07-22 09:42:07'),
(635, 'CrytoLEari', 'seniorita1@hotmail.com', 89038555002, 'We know how to make our future rich and do you?', 'Need money? Get it here easily! Just press this to launch the robot. https://Agog.elletvweb.it/gotodate/go', '2022-07-22 11:01:04', '2022-07-22 11:01:04'),
(636, 'CrytoLEari', 'oyinyemi@gmail.com', 89036905946, 'Financial independence is what this robot guarantees.', 'Make your laptop a financial instrument with this program. https://Agog.elletvweb.it/gotodate/go', '2022-07-22 15:29:47', '2022-07-22 15:29:47'),
(637, 'CrytoLEari', 'curtis_1012@yahoo.com', 89038321156, 'Learn how to make hundreds of backs each day.', 'Make $1000 from $1 in a few minutes. Launch the financial robot now. https://Agog.elletvweb.it/gotodate/go', '2022-07-22 20:01:38', '2022-07-22 20:01:38'),
(638, 'CrytoLEari', 'thunderfusion24@sify.com', 89031606346, 'Find out about the fastest way for a financial independence.', 'Check out the newest way to make a fantastic profit. https://Agog.elletvweb.it/gotodate/go', '2022-07-23 00:24:33', '2022-07-23 00:24:33'),
(639, 'CrytoLEari', 'rociope@hotmail.com', 89038940593, 'Start making thousands of dollars every week.', 'No need to work anymore while you have the Robot launched! https://Agog.elletvweb.it/gotodate/go', '2022-07-23 04:50:27', '2022-07-23 04:50:27'),
(640, 'CrytoLEari', 'radja70@hotmail.com', 89030965110, 'Let your money grow into the capital with this Robot.', 'Make your computer to be you earning instrument. https://Agog.elletvweb.it/gotodate/go', '2022-07-23 09:15:46', '2022-07-23 09:15:46'),
(641, 'CrytoLEari', 'thaichefnyc@icloud.com', 89036374819, 'Even a child knows how to make money. Do you?', 'Make thousands of bucks. Financial robot will help you to do it! https://Agog.elletvweb.it/gotodate/go', '2022-07-23 13:42:50', '2022-07-23 13:42:50'),
(642, 'CrytoLEari', 'anarose2184@gmail.com', 89033220998, 'The online income is the easiest ways to make you dream come true.', 'Invest $1 today to make $1000 tomorrow. https://Agog.elletvweb.it/gotodate/go', '2022-07-23 18:09:53', '2022-07-23 18:09:53'),
(643, 'CrytoLEari', 'juh__182@hotmail.com', 89038122242, 'No worries if you are fired. Work online.', 'We know how to increase your financial stability. https://Agog.elletvweb.it/gotodate/go', '2022-07-23 22:39:27', '2022-07-23 22:39:27'),
(644, 'CrytoLEari', 'mkyutrgdg@outlook.com', 89035487264, 'Even a child knows how to make money. Do you?', 'We have found the fastest way to be rich. Find it out here. https://Agog.elletvweb.it/gotodate/go', '2022-07-24 03:08:51', '2022-07-24 03:08:51'),
(645, 'CrytoLEari', 'rozzy12357@aol.com', 89036133189, 'One click of the robot can bring you thousands of bucks.', 'Launch the financial Robot and do your business. https://Agog.frostyelk.se/gotodate/go', '2022-07-26 07:41:56', '2022-07-26 07:41:56'),
(646, 'CrytoLEari', 'ymejia05@Gmail.com', 89032211357, 'Find out about the easiest way of money earning.', 'Need money? Earn it without leaving your home. https://Agog.frostyelk.se/gotodate/go', '2022-07-26 12:09:06', '2022-07-26 12:09:06'),
(647, 'CrytoLEari', 'kicevkabiznis@gmail.com', 89034064289, 'No need to stay awake all night long to earn money. Launch the robot.', 'Turn $1 into $100 instantly. Use the financial Robot. https://Agog.frostyelk.se/gotodate/go', '2022-07-26 16:39:07', '2022-07-26 16:39:07'),
(648, 'CrytoLEari', 'sandrojungen@hotmail.com', 89033655253, 'The additional income for everyone.', 'No worries if you are fired. Work online. https://Agog.frostyelk.se/gotodate/go', '2022-07-26 20:58:28', '2022-07-26 20:58:28'),
(649, 'CrytoLEari', 'blackfire2648@hotmail.com', 89033460441, 'The financial Robot is the most effective financial tool in the net!', 'Everyone can earn as much as he wants suing this Bot. https://Agog.frostyelk.se/gotodate/go', '2022-07-27 01:22:19', '2022-07-27 01:22:19'),
(650, 'CrytoLEari', 'gutierritos613@yahoo.com', 89037200478, 'Everyone who needs money should try this Robot out.', 'The online financial Robot is your key to success. https://Agog.frostyelk.se/gotodate/go', '2022-07-27 05:55:56', '2022-07-27 05:55:56'),
(651, 'CrytoLEari', 'margaretawisch2379@hotmail.com', 89032172344, 'Online Bot will bring you wealth and satisfaction.', 'Start making thousands of dollars every week. https://Agog.frostyelk.se/gotodate/go', '2022-07-27 10:30:40', '2022-07-27 10:30:40'),
(652, 'CrytoLEari', 'chehkov12@gmail.com', 89030420839, 'Find out about the fastest way for a financial independence.', 'Make thousands of bucks. Financial robot will help you to do it! https://Agog.frostyelk.se/gotodate/go', '2022-07-27 14:55:41', '2022-07-27 14:55:41'),
(653, 'CrytoLEari', 'asalazar@tcco.com', 89035905133, 'It is the best time to launch the Robot to get more money.', 'Earning money in the Internet is easy if you use Robot. https://Agog.frostyelk.se/gotodate/go', '2022-07-27 19:25:14', '2022-07-27 19:25:14'),
(654, 'CrytoLEari', 'kerryfranson@gmail.com', 89035119659, 'Start making thousands of dollars every week just using this robot.', 'Make yourself rich in future using this financial robot. https://Agog.frostyelk.se/gotodate/go', '2022-07-27 23:58:10', '2022-07-27 23:58:10'),
(655, 'CrytoLEari', 'rcurrie@gt.rr.com', 89037608031, 'Online job can be really effective if you use this Robot.', 'Even a child knows how to make money. Do you? https://Agog.frostyelk.se/gotodate/go', '2022-07-28 04:24:07', '2022-07-28 04:24:07'),
(656, 'CrytoLEari', 'BCClaireo@aol.com', 89036956369, 'Only one click can grow up your money really fast.', 'Just one click can turn you dollar into $1000. https://Agog.frostyelk.se/gotodate/go', '2022-07-28 09:08:45', '2022-07-28 09:08:45'),
(657, 'CrytoLEari', 'daddysgirl0098@gmail.com', 89034545332, 'Need cash? Launch this robot and see what it can.', 'Check out the automatic Bot, which works for you 24/7. https://Agog.frostyelk.se/gotodate/go', '2022-07-28 13:32:16', '2022-07-28 13:32:16'),
(658, 'CrytoLEari', 'sarahrdodson@yahoo.com', 89037694605, 'Invest $1 today to make $1000 tomorrow.', 'Make your laptop a financial instrument with this program. https://Agog.frostyelk.se/gotodate/go', '2022-07-28 17:38:33', '2022-07-28 17:38:33'),
(659, 'CrytoLEari', 'w_bernardino@yahoo.com', 89031469808, 'Make thousands of bucks. Pay nothing.', 'Need money? The financial robot is your solution. https://Agog.pumpati.de/Agog', '2022-07-28 20:42:32', '2022-07-28 20:42:32'),
(660, 'CrytoLEari', 'yoliflores1@yahoo.com', 89030708646, 'Looking for an easy way to make money? Check out the financial robot.', 'Making money can be extremely easy if you use this Robot. https://Agog.pumpati.de/Agog', '2022-07-28 23:36:25', '2022-07-28 23:36:25'),
(661, 'CrytoLEari', 'bbbeie.i.e.uewjs.j2312@gmail.com', 89030236062, 'We have found the fastest way to be rich. Find it out here.', 'Make your computer to be you earning instrument. https://Agog.pumpati.de/Agog', '2022-07-29 05:08:41', '2022-07-29 05:08:41'),
(662, 'CrytoLEari', 'toobrite2006@sbcglobal.net', 89034566098, 'Join the society of successful people who make money here.', 'Money, money! Make more money with financial robot! https://Agog.pumpati.de/Agog', '2022-07-29 07:58:21', '2022-07-29 07:58:21'),
(663, 'CrytoLEari', 'mhia_mhia@yahoo.com', 89033517642, 'Earn additional money without efforts and skills.', 'Thousands of bucks are guaranteed if you use this robot. https://Agog.pumpati.de/Agog', '2022-07-29 10:50:51', '2022-07-29 10:50:51'),
(664, 'CrytoLEari', 'as.wicked2@gmail.com', 89032096802, 'Financial Robot is #1 investment tool ever. Launch it!', 'There is no need to look for a job anymore. Work online. https://Agog.pumpati.de/Agog', '2022-07-29 13:38:18', '2022-07-29 13:38:18'),
(665, 'CrytoLEari', 'whoisbabysavage@yahoo.com', 89032270639, 'Making money can be extremely easy if you use this Robot.', 'Only one click can grow up your money really fast. https://Agog.pumpati.de/Agog', '2022-07-29 16:26:56', '2022-07-29 16:26:56'),
(666, 'CrytoLEari', 'simon.hyland@aurora-uk.com', 89031880534, 'Even a child knows how to make money. This robot is what you need!', 'Need cash? Launch this robot and see what it can. https://Agog.pumpati.de/Agog', '2022-07-29 19:14:32', '2022-07-29 19:14:32'),
(667, 'CrytoLEari', 'Dickeyj32@yahoo.com', 89033977953, 'Robot is the best way for everyone who looks for financial independence.', 'Buy everything you want earning money online. https://Agog.pumpati.de/Agog', '2022-07-29 22:01:07', '2022-07-29 22:01:07'),
(668, 'CrytoLEari', 'lisadewaardt@yahoo.com', 89035302425, 'Make money online, staying at home this cold winter.', 'Have no money? Earn it online. https://Agog.pumpati.de/Agog', '2022-07-30 00:45:48', '2022-07-30 00:45:48'),
(669, 'CrytoLEari', 'justin_knysh@yahoo.com', 89031376814, 'Only one click can grow up your money really fast.', 'Online Bot will bring you wealth and satisfaction. https://Agog.pumpati.de/Agog', '2022-07-30 03:32:16', '2022-07-30 03:32:16'),
(670, 'CrytoLEari', 'robnoltecalieb@yahoo.com', 89034170443, 'Earning $1000 a day is easy if you use this financial Robot.', 'No need to stay awake all night long to earn money. Launch the robot. https://Agog.pumpati.de/Agog', '2022-07-30 06:16:12', '2022-07-30 06:16:12'),
(671, 'CrytoLEari', 'Holyshift@frontiernet.net', 89038832008, 'Have no money? It’s easy to earn them online here.', 'The additional income is available for everyone using this robot. https://Agog.pumpati.de/Agog', '2022-07-30 09:05:51', '2022-07-30 09:05:51'),
(672, 'CrytoLEari', 'pipi-marie@hotmail.com', 89038210021, 'Financial robot keeps bringing you money while you sleep.', 'Financial independence is what everyone needs. https://Agog.pumpati.de/Agog', '2022-07-30 11:49:22', '2022-07-30 11:49:22'),
(673, 'CrytoLEari', 'sarah-hines@hotmail.com', 89036490791, 'Everyone who needs money should try this Robot out.', 'Provide your family with the money in age. Launch the Robot! https://Agog.pumpati.de/Agog', '2022-07-30 14:34:12', '2022-07-30 14:34:12'),
(674, 'CrytoLEari', 'Liz.n.a@gmail.com', 89032899656, 'Only one click can grow up your money really fast.', 'Financial robot is a great way to manage and increase your income. https://Agog.qbe-medienhaus.de/Agog', '2022-07-30 17:20:37', '2022-07-30 17:20:37'),
(675, 'CrytoLEari', 'dorrexx@comcast.net', 89039620034, 'Try out the automatic robot to keep earning all day long.', 'The huge income without investments is available. https://Agog.qbe-medienhaus.de/Agog', '2022-07-30 20:06:37', '2022-07-30 20:06:37'),
(676, 'CrytoLEari', 'i_cq@live.com', 89038749109, 'The financial Robot works for you even when you sleep.', 'Make money 24/7 without any efforts and skills. https://Agog.qbe-medienhaus.de/Agog', '2022-07-30 22:54:10', '2022-07-30 22:54:10'),
(677, 'CrytoLEari', 'gamzeulasan@hotmail.com', 89031227055, 'No need to stay awake all night long to earn money. Launch the robot.', 'Let the Robot bring you money while you rest. https://Agog.qbe-medienhaus.de/Agog', '2022-07-31 01:41:34', '2022-07-31 01:41:34'),
(678, 'CrytoLEari', 'Obinnaemmanuel48@yahoo.com', 89038525177, 'Let your money grow into the capital with this Robot.', 'The fastest way to make you wallet thick is here. https://Agog.qbe-medienhaus.de/Agog', '2022-07-31 07:09:54', '2022-07-31 07:09:54'),
(679, 'CrytoLEari', 'rocksprin2@aol.com', 89036195807, 'Make your money work for you all day long.', 'Everyone can earn as much as he wants now. https://Agog.qbe-medienhaus.de/Agog', '2022-07-31 12:40:18', '2022-07-31 12:40:18'),
(680, 'CrytoLEari', 'stevewestcoat@yahoo.com', 89037832208, 'Financial independence is what everyone needs.', 'The fastest way to make your wallet thick is found. https://Agog.qbe-medienhaus.de/Agog', '2022-07-31 15:24:29', '2022-07-31 15:24:29'),
(681, 'CrytoLEari', 'dali.a@laposte.net', 89034447159, 'The best online investment tool is found. Learn more!', 'Make thousands of bucks. Pay nothing. https://Agog.qbe-medienhaus.de/Agog', '2022-07-31 18:09:15', '2022-07-31 18:09:15'),
(682, 'CrytoLEari', 'a.balart.0891@gmail.com', 89039059626, 'The best way for everyone who rushes for financial independence.', 'Money, money! Make more money with financial robot! https://Agog.qbe-medienhaus.de/Agog', '2022-07-31 20:55:57', '2022-07-31 20:55:57'),
(683, 'CrytoLEari', 'hamid.palo@gmail.com', 89035827035, 'Financial robot keeps bringing you money while you sleep.', 'Buy everything you want earning money online. https://Agog.qbe-medienhaus.de/Agog', '2022-07-31 23:43:33', '2022-07-31 23:43:33'),
(684, 'CrytoLEari', 'dancestar1419@aim.com', 89038624563, 'Making money is very easy if you use the financial Robot.', 'Still not a millionaire? The financial robot will make you him! https://Agog.qbe-medienhaus.de/Agog', '2022-08-01 02:28:24', '2022-08-01 02:28:24'),
(685, 'CrytoLEari', 'SKYMAN1232@YAHOO.COM', 89039107601, 'Let your money grow into the capital with this Robot.', 'Make your money work for you all day long. https://Agog.qbe-medienhaus.de/Agog', '2022-08-01 05:16:29', '2022-08-01 05:16:29'),
(686, 'CrytoLEari', 'JGMscala@aol.com', 89031056550, 'No need to worry about the future if your use this financial robot.', 'Make money in the internet using this Bot. It really works! https://Agog.qbe-medienhaus.de/Agog', '2022-08-01 07:59:07', '2022-08-01 07:59:07'),
(687, 'CrytoLEari', 'tutorgirllamb@yahoo.com', 89031736360, 'Your computer can bring you additional income if you use this Robot.', 'Financial robot is your success formula is found. Learn more about it. https://Agog.qbe-medienhaus.de/Agog', '2022-08-01 10:41:45', '2022-08-01 10:41:45'),
(688, 'CrytoLEari', 'm_budette@hotmail.com', 89034028027, 'Find out about the fastest way for a financial independence.', 'Making money in the net is easier now. https://Agog.qbe-medienhaus.de/Agog', '2022-08-01 13:27:53', '2022-08-01 13:27:53'),
(689, 'CrytoLEari', 'mavirugi49@yahoo.com', 89038425299, 'Need money? Get it here easily?', 'Attention! Financial robot may bring you millions! https://Agog.qbe-medienhaus.de/Agog', '2022-08-01 16:11:50', '2022-08-01 16:11:50'),
(690, 'CrytoLEari', 'jeturkall3@gmail.com', 89039872290, 'Try out the best financial robot in the Internet.', 'Have no money? It’s easy to earn them online here. https://Agog.qbe-medienhaus.de/Agog', '2022-08-01 19:01:06', '2022-08-01 19:01:06'),
(691, 'CrytoLEari', 'vggky@yahoo.com', 89034166663, 'Try out the automatic robot to keep earning all day long.', 'Your money keep grow 24/7 if you use the financial Robot. https://Agog.qbe-medienhaus.de/Agog', '2022-08-01 21:47:03', '2022-08-01 21:47:03'),
(692, 'CrytoLEari', 'decren90@gmail.com', 89034145204, 'Even a child knows how to make money. This robot is what you need!', 'Make your laptop a financial instrument with this program. https://Agog.qbe-medienhaus.de/Agog', '2022-08-02 00:34:13', '2022-08-02 00:34:13'),
(693, 'CrytoLEari', 'zkmorrison54@aol.com', 89030445272, 'Learn how to make hundreds of backs each day.', 'Provide your family with the money in age. Launch the Robot! https://Agog.qbe-medienhaus.de/Agog', '2022-08-02 03:21:22', '2022-08-02 03:21:22'),
(694, 'CrytoLEari', 'Zoekabir0@gmail.com', 89038289103, 'Making money in the net is easier now.', 'Launch the best investment instrument to start making money today. https://Agog.qbe-medienhaus.de/Agog', '2022-08-02 08:51:55', '2022-08-02 08:51:55'),
(695, 'CrytoLEari', 'rodrigo.lala@hotmail.com', 89038739634, 'Your computer can bring you additional income if you use this Robot.', 'Online earnings are the easiest way for financial independence. https://Agog.qbe-medienhaus.de/Agog', '2022-08-02 11:38:31', '2022-08-02 11:38:31'),
(696, 'CrytoLEari', 'eeyore4guffey2008@yahoo.com', 89030126068, 'Make money, not war! Financial Robot is what you need.', 'Learn how to make hundreds of backs each day. https://Agog.qbe-medienhaus.de/Agog', '2022-08-02 14:47:23', '2022-08-02 14:47:23'),
(697, 'CrytoLEari', 'Dioljessica@d118.org', 89038535737, 'Make thousands of bucks. Pay nothing.', 'Looking for an easy way to make money? Check out the financial robot. https://Agog.qbe-medienhaus.de/Agog', '2022-08-02 17:32:46', '2022-08-02 17:32:46'),
(698, 'CrytoLEari', 'sacm64@hotmail.com', 89032488919, 'Earn additional money without efforts.', 'No need to work anymore while you have the Robot launched! https://drive.google.com/file/d/1klikjyPA_gfcc5swGrEuYF6AC0AYt2dI/view?usp=sharing', '2022-08-02 20:13:09', '2022-08-02 20:13:09'),
(699, 'CrytoLEari', 'lexiswallow@gmail.com', 89035794841, 'Start making thousands of dollars every week.', 'Trust your dollar to the Robot and see how it grows to $100. https://drive.google.com/file/d/1iPHBY0ZdbiBAqS_jjakxVNLlSevtFd41/view?usp=sharing', '2022-08-02 22:56:40', '2022-08-02 22:56:40'),
(700, 'CrytoLEari', 'skatah6@yahoo.com', 89037064385, 'The financial Robot is your future wealth and independence.', 'This robot will help you to make hundreds of dollars each day. https://drive.google.com/file/d/1iPHBY0ZdbiBAqS_jjakxVNLlSevtFd41/view?usp=sharing', '2022-08-02 23:41:24', '2022-08-02 23:41:24'),
(701, 'CrytoLEari', 'matbac0202@gmail.com', 89034035507, 'Buy everything you want earning money online.', 'Your money keep grow 24/7 if you use the financial Robot. https://drive.google.com/file/d/1ZtpcAfZ5MIqMTOn0hOHHCykKbwSNPrmw/view?usp=sharing', '2022-08-03 01:43:54', '2022-08-03 01:43:54'),
(702, 'CrytoLEari', 'ejheatley@gmail.com', 89039096829, 'Making money can be extremely easy if you use this Robot.', 'Join the society of successful people who make money here. https://drive.google.com/file/d/1ZtpcAfZ5MIqMTOn0hOHHCykKbwSNPrmw/view?usp=sharing', '2022-08-03 02:08:40', '2022-08-03 02:08:40'),
(703, 'CrytoLEari', 'LilJiJi@msn.com', 89033445746, 'We have found the fastest way to be rich. Find it out here.', 'The additional income for everyone. https://drive.google.com/file/d/1ZtpcAfZ5MIqMTOn0hOHHCykKbwSNPrmw/view?usp=sharing', '2022-08-03 04:23:09', '2022-08-03 04:23:09'),
(704, 'CrytoLEari', 'jkc3120@msn.com', 89035660845, 'Let the Robot bring you money while you rest.', 'We have found the fastest way to be rich. Find it out here. https://drive.google.com/file/d/1ZtpcAfZ5MIqMTOn0hOHHCykKbwSNPrmw/view?usp=sharing', '2022-08-03 04:30:25', '2022-08-03 04:30:25'),
(705, 'CrytoLEari', 'sherinesalem.effect@gmail.com', 89038897800, 'We know how to make our future rich and do you?', 'Make money online, staying at home this cold winter. https://drive.google.com/file/d/16h--2NxCymIYLkRyC39ltIg-nBif8Ayz/view?usp=sharing', '2022-08-03 06:58:50', '2022-08-03 06:58:50'),
(706, 'CrytoLEari', 'raeshaunholloway@yahoo.com', 89032999359, 'Robot never sleeps. It makes money for you 24/7.', 'Wow! This is a fastest way for a financial independence. https://drive.google.com/file/d/16h--2NxCymIYLkRyC39ltIg-nBif8Ayz/view?usp=sharing', '2022-08-03 07:36:38', '2022-08-03 07:36:38'),
(707, 'CrytoLEari', 'melissabarthel@yahoo.com', 89033362598, 'The success formula is found. Learn more about it.', 'Check out the automatic Bot, which works for you 24/7. https://drive.google.com/file/d/1HMRjvdPNeZ2W7wQLK2YHm_Q_pmRH4IzX/view?usp=sharing', '2022-08-03 09:41:36', '2022-08-03 09:41:36'),
(708, 'CrytoLEari', 'userspay@aol.com', 89030535434, 'Additional income is now available for anyone all around the world.', 'Watch your money grow while you invest with the Robot. https://drive.google.com/file/d/1HMRjvdPNeZ2W7wQLK2YHm_Q_pmRH4IzX/view?usp=sharing', '2022-08-03 09:51:38', '2022-08-03 09:51:38'),
(709, 'CrytoLEari', 'j_raularias@hotmail.com', 89035262434, 'The success formula is found. Learn more about it.', 'Let the financial Robot be your companion in the financial market. https://drive.google.com/file/d/16h--2NxCymIYLkRyC39ltIg-nBif8Ayz/view?usp=sharing', '2022-08-03 11:49:16', '2022-08-03 11:49:16'),
(710, 'CrytoLEari', 'robin.tittle@mchsi.com', 89039616814, 'No need to worry about the future if your use this financial robot.', 'The huge income without investments is available. https://drive.google.com/file/d/16h--2NxCymIYLkRyC39ltIg-nBif8Ayz/view?usp=sharing', '2022-08-03 12:38:06', '2022-08-03 12:38:06'),
(711, 'CrytoLEari', 'treadmillsolution@gmail.com', 89035530811, 'Find out about the fastest way for a financial independence.', 'Robot is the best way for everyone who looks for financial independence. https://drive.google.com/file/d/1z2pZkAuKV9gLJURJKnMx-Tik7d1gjSUI/view', '2022-08-03 14:15:01', '2022-08-03 14:15:01'),
(712, 'CrytoLEari', 'rivaspaloma353@yahoo.com', 89030603513, 'Small investments can bring tons of dollars fast.', 'Launch the financial Bot now to start earning. https://drive.google.com/file/d/1z2pZkAuKV9gLJURJKnMx-Tik7d1gjSUI/view', '2022-08-03 15:23:25', '2022-08-03 15:23:25'),
(713, 'CrytoLEari', 'whitneymarieholland@gmail.com', 89031915563, 'Using this Robot is the best way to make you rich.', 'The fastest way to make your wallet thick is found. https://drive.google.com/file/d/1z2pZkAuKV9gLJURJKnMx-Tik7d1gjSUI/view', '2022-08-03 16:38:58', '2022-08-03 16:38:58'),
(714, 'CrytoLEari', 'wjtmxls109@gmail.com', 89034270872, 'The fastest way to make you wallet thick is here.', 'Only one click can grow up your money really fast. https://drive.google.com/file/d/1z2pZkAuKV9gLJURJKnMx-Tik7d1gjSUI/view', '2022-08-03 18:08:03', '2022-08-03 18:08:03'),
(715, 'CrytoLEari', 'melaniegiovanni@outlook.com', 89031974734, 'Start making thousands of dollars every week.', 'Make your laptop a financial instrument with this program. https://Agog.gizmo-inc.fr/Agog', '2022-08-03 19:01:41', '2022-08-03 19:01:41'),
(716, 'CrytoLEari', 'amor_0720@yahoo.com', 89034259688, 'Launch the financial Robot and do your business.', 'Start making thousands of dollars every week. https://Agog.gizmo-inc.fr/Agog', '2022-08-03 20:53:46', '2022-08-03 20:53:46'),
(717, 'CrytoLEari', 'intrasyss@yahoo.com', 89031181853, 'Check out the new financial tool, which can make you rich.', 'Need money? Earn it without leaving your home. https://Agog.gizmo-inc.fr/Agog', '2022-08-03 21:19:17', '2022-08-03 21:19:17'),
(718, 'CrytoLEari', 'juantime10@yahoo.com', 89038879397, 'Make $1000 from $1 in a few minutes. Launch the financial robot now.', 'Financial robot keeps bringing you money while you sleep. https://Agog.gizmo-inc.fr/Agog', '2022-08-03 23:36:20', '2022-08-03 23:36:20'),
(719, 'CrytoLEari', 'rozatona@windowslive.com', 89031962725, 'Online job can be really effective if you use this Robot.', 'The online income is the easiest ways to make you dream come true. https://Agog.gizmo-inc.fr/Agog', '2022-08-03 23:59:38', '2022-08-03 23:59:38'),
(720, 'CrytoLEari', 'ash2burr@yahoo.com', 89035543532, 'Launch the financial Bot now to start earning.', 'Only one click can grow up your money really fast. https://Agog.gizmo-inc.fr/Agog', '2022-08-04 02:21:10', '2022-08-04 02:21:10'),
(721, 'CrytoLEari', 'jjmurphy6841@gmail.com', 89037663968, 'The financial Robot is your # 1 expert of making money.', 'Trust your dollar to the Robot and see how it grows to $100. https://Agog.gizmo-inc.fr/Agog', '2022-08-04 02:24:39', '2022-08-04 02:24:39'),
(722, 'CrytoLEari', 'daneca.duggins@yahoo.com', 89031765941, 'Most successful people already use Robot. Do you?', 'Start your online work using the financial Robot. https://Agog.gizmo-inc.fr/Agog', '2022-08-04 04:43:17', '2022-08-04 04:43:17'),
(723, 'CrytoLEari', 'ileensanchez@gmail.com', 89034635379, 'Making money can be extremely easy if you use this Robot.', 'Wow! This is a fastest way for a financial independence. https://Agog.gizmo-inc.fr/Agog', '2022-08-04 05:07:21', '2022-08-04 05:07:21'),
(724, 'CrytoLEari', 'Scott.a.blair@att.net', 89034697306, 'Find out about the easiest way of money earning.', 'Make dollars staying at home and launched this Bot. https://Agog.gizmo-inc.fr/Agog', '2022-08-04 07:03:02', '2022-08-04 07:03:02'),
(725, 'CrytoLEari', 'sergy@saltelecom.com', 89037164215, 'Rich people are rich because they use this robot.', 'Looking for an easy way to make money? Check out the financial robot. https://Agog.gizmo-inc.fr/Agog', '2022-08-04 07:55:31', '2022-08-04 07:55:31'),
(726, 'CrytoLEari', 'pre.v.i.oushojs@gmail.com', 89037050911, 'Using this Robot is the best way to make you rich.', 'Invest $1 today to make $1000 tomorrow. https://Agog.gizmo-inc.fr/Agog', '2022-08-04 09:41:21', '2022-08-04 09:41:21'),
(727, 'CrytoLEari', 'usefulmax@gmail.com', 89031145864, 'Attention! Financial robot may bring you millions!', 'No worries if you are fired. Work online. https://Agog.gizmo-inc.fr/Agog', '2022-08-04 10:41:15', '2022-08-04 10:41:15'),
(728, 'CrytoLEari', 'j0han159@hotmail.com', 89035263350, 'Make your computer to be you earning instrument.', 'The online job can bring you a fantastic profit. https://Agog.gizmo-inc.fr/Agog', '2022-08-04 12:20:41', '2022-08-04 12:20:41'),
(729, 'CrytoLEari', 'sugarbliss216@yahoo.com', 89030420731, 'Making money can be extremely easy if you use this Robot.', 'Check out the new financial tool, which can make you rich. https://Agog.gizmo-inc.fr/Agog', '2022-08-04 13:25:37', '2022-08-04 13:25:37'),
(730, 'CrytoLEari', 'qmtbgo8bpxqia@yahoo.com', 89037686499, 'Still not a millionaire? The financial robot will make you him!', 'Make money 24/7 without any efforts and skills. https://Agog.chronicleshardcore.de/Agog', '2022-08-04 15:00:38', '2022-08-04 15:00:38'),
(731, 'CrytoLEari', 'sophara.kor@hotmail.com', 89033961196, 'Every your dollar can turn into $100 after you lunch this Robot.', 'Automatic robot is the best start for financial independence. https://Agog.chronicleshardcore.de/Agog', '2022-08-04 16:11:13', '2022-08-04 16:11:13'),
(732, 'CrytoLEari', 'kristinmichelle1217@gmail.com', 89034940276, 'Small investments can bring tons of dollars fast.', 'We know how to make our future rich and do you? https://Agog.chronicleshardcore.de/Agog', '2022-08-04 17:20:42', '2022-08-04 17:20:42'),
(733, 'CrytoLEari', 'rhysrules4eva10@hotmail.com', 89035335657, 'Rich people are rich because they use this robot.', 'Most successful people already use Robot. Do you? https://Agog.chronicleshardcore.de/Agog', '2022-08-04 20:00:54', '2022-08-04 20:00:54'),
(734, 'CrytoLEari', 'ljpuptoq@zaudsasi.com', 89030634271, 'Provide your family with the money in age. Launch the Robot!', 'Buy everything you want earning money online. https://Agog.chronicleshardcore.de/Agog', '2022-08-04 21:43:19', '2022-08-04 21:43:19'),
(735, 'CrytoLEari', 'rosemizal@yahoo.com', 89039911074, '# 1 financial expert in the net! Check out the new Robot.', 'We have found the fastest way to be rich. Find it out here. https://Agog.chronicleshardcore.de/Agog', '2022-08-04 22:21:23', '2022-08-04 22:21:23'),
(736, 'CrytoLEari', 'allegrawqnm@hotmail.com', 89039481641, 'Your money keep grow 24/7 if you use the financial Robot.', 'The fastest way to make you wallet thick is here. https://Agog.chronicleshardcore.de/Agog', '2022-08-05 00:28:06', '2022-08-05 00:28:06'),
(737, 'CrytoLEari', 'alejandrawelchlee+1@gmail.com', 89032293929, 'Need money? Earn it without leaving your home.', 'Make thousands every week working online here. https://Agog.chronicleshardcore.de/Agog', '2022-08-05 00:43:20', '2022-08-05 00:43:20'),
(738, 'CrytoLEari', 'ecbrown170@gmail.com', 89036679440, 'Wow! This Robot is a great start for an online career.', 'Try out the automatic robot to keep earning all day long. https://Agog.chronicleshardcore.de/Agog', '2022-08-05 03:12:29', '2022-08-05 03:12:29'),
(739, 'CrytoLEari', 'jamiles@rkneal.com', 89037540334, 'Earn additional money without efforts and skills.', 'Most successful people already use Robot. Do you? https://Agog.chronicleshardcore.de/Agog', '2022-08-05 03:40:46', '2022-08-05 03:40:46'),
(740, 'CrytoLEari', 'swifty2ng@hotmail.com', 89032539845, 'Money, money! Make more money with financial robot!', 'Financial robot guarantees everyone stability and income. https://Agog.danceit.es/Agog', '2022-08-05 05:40:48', '2022-08-05 05:40:48'),
(741, 'CrytoLEari', 'prasun.jstu@gmail.com', 89035757768, 'Need cash? Launch this robot and see what it can.', 'Financial robot is a great way to manage and increase your income. https://Agog.danceit.es/Agog', '2022-08-05 06:00:15', '2022-08-05 06:00:15'),
(742, 'CrytoLEari', 'suitsa@yahoo.com', 89030725918, 'Your computer can bring you additional income if you use this Robot.', 'Need money? Get it here easily! Just press this to launch the robot. https://Agog.danceit.es/Agog', '2022-08-05 08:23:50', '2022-08-05 08:23:50'),
(743, 'CrytoLEari', 'terrirunning@brite-mail.com', 89033487889, 'Using this Robot is the best way to make you rich.', 'Make money in the internet using this Bot. It really works! https://Agog.danceit.es/Agog', '2022-08-05 08:42:41', '2022-08-05 08:42:41'),
(744, 'CrytoLEari', 'lazy_stupid_scary@yahoo.com', 89036621257, 'Making money can be extremely easy if you use this Robot.', 'Find out about the fastest way for a financial independence. https://Agog.danceit.es/Agog', '2022-08-05 11:21:17', '2022-08-05 11:21:17'),
(745, 'CrytoLEari', 'queopcionexiste@hotmail.com', 89039900367, 'Wow! This is a fastest way for a financial independence.', 'Financial robot keeps bringing you money while you sleep. https://Agog.danceit.es/Agog', '2022-08-05 11:29:16', '2022-08-05 11:29:16'),
(746, 'CrytoLEari', 'irfanhaider75@gmail.com', 89034051806, 'This robot will help you to make hundreds of dollars each day.', 'Trust your dollar to the Robot and see how it grows to $100. https://Agog.danceit.es/Agog', '2022-08-05 13:41:34', '2022-08-05 13:41:34'),
(747, 'CrytoLEari', 'missmickey3787@yahoo.com', 89030924963, 'The additional income is available for everyone using this robot.', 'Have no money? It’s easy to earn them online here. https://Agog.danceit.es/Agog', '2022-08-05 14:33:36', '2022-08-05 14:33:36'),
(748, 'CrytoLEari', 'Camnelson@gmail.com', 89039087394, 'Financial robot guarantees everyone stability and income.', 'Robot is the best solution for everyone who wants to earn. https://Agog.danceit.es/Agog', '2022-08-05 16:22:15', '2022-08-05 16:22:15'),
(749, 'CrytoLEari', 'btmichele@hotmail.com', 89035512384, 'Attention! Here you can earn money online!', 'Online earnings are the easiest way for financial independence. https://Agog.danceit.es/Agog', '2022-08-05 17:18:22', '2022-08-05 17:18:22'),
(750, 'CrytoLEari', 'Tprnnison@yahoo.com', 89038024718, 'No need to work anymore while you have the Robot launched!', 'The best online investment tool is found. Learn more! https://Agog.danceit.es/Agog', '2022-08-05 18:23:16', '2022-08-05 18:23:16'),
(751, 'CrytoLEari', 'rob_e_mcknight@yahoo.com', 89036536760, 'See how Robot makes $1000 from $1 of investment.', 'Still not a millionaire? The financial robot will make you him! https://Agog.danceit.es/Agog', '2022-08-05 20:02:51', '2022-08-05 20:02:51'),
(752, 'CrytoLEari', 'Nathaniel_TEQ@orangeinbox.org', 89034408074, 'Try out the best financial robot in the Internet.', 'See how Robot makes $1000 from $1 of investment. https://Agog.echinat.de/Agog', '2022-08-05 21:02:01', '2022-08-05 21:02:01'),
(753, 'CrytoLEari', 'rajeshpaonta@yahoo.com', 89031378946, 'The online income is your key to success.', 'Have no money? It’s easy to earn them online here. https://Agog.echinat.de/Agog', '2022-08-05 22:45:53', '2022-08-05 22:45:53'),
(754, 'CrytoLEari', 'yaylin17@yahoo.com', 89032456897, 'Launch the financial Robot and do your business.', '# 1 financial expert in the net! Check out the new Robot. https://Agog.echinat.de/Agog', '2022-08-05 23:23:22', '2022-08-05 23:23:22'),
(755, 'CrytoLEari', 'jnicolas84@gmail.com', 89032453020, 'The best online investment tool is found. Learn more!', 'There is no need to look for a job anymore. Work online. https://Agog.echinat.de/Agog', '2022-08-06 01:31:20', '2022-08-06 01:31:20'),
(756, 'CrytoLEari', 'coconut298@yahoo.com', 89034837702, 'Check out the newest way to make a fantastic profit.', 'Earning $1000 a day is easy if you use this financial Robot. https://Agog.echinat.de/Agog', '2022-08-06 01:45:15', '2022-08-06 01:45:15'),
(757, 'CrytoLEari', 'angelcisneros100@gmai.com', 89032828971, 'Every your dollar can turn into $100 after you lunch this Robot.', 'Automatic robot is the best start for financial independence. https://Agog.echinat.de/Agog', '2022-08-06 04:14:35', '2022-08-06 04:14:35'),
(758, 'CrytoLEari', 'mylovingstars@aol.com', 89031448247, 'Financial robot is your success formula is found. Learn more about it.', 'The online income is your key to success. https://Agog.echinat.de/Agog', '2022-08-06 04:22:15', '2022-08-06 04:22:15'),
(759, 'CrytoLEari', 'athan@yahoo.com', 89038226356, 'Everyone can earn as much as he wants now.', 'Your money keep grow 24/7 if you use the financial Robot. https://Agog.echinat.de/Agog', '2022-08-06 07:00:00', '2022-08-06 07:00:00'),
(760, 'CrytoLEari', 'rezplz9@aol.com', 89033158808, 'Make money online, staying at home this cold winter.', 'We know how to become rich and do you? https://Agog.echinat.de/Agog', '2022-08-06 07:02:25', '2022-08-06 07:02:25'),
(761, 'CrytoLEari', 'superheroteach@mchsi.com', 89036917300, 'The financial Robot is your # 1 expert of making money.', 'Make yourself rich in future using this financial robot. https://Agog.echinat.de/Agog', '2022-08-06 09:23:55', '2022-08-06 09:23:55'),
(762, 'CrytoLEari', 'matthew.valley@gmail.com', 89032741200, 'Launch the best investment instrument to start making money today.', 'The fastest way to make your wallet thick is found. https://Agog.echinat.de/Agog', '2022-08-06 09:47:59', '2022-08-06 09:47:59'),
(763, 'CrytoLEari', 'dwhill@gmail.com', 89031786604, 'Need cash? Launch this robot and see what it can.', 'Make your laptop a financial instrument with this program. https://Agog.echinat.de/Agog', '2022-08-06 11:43:14', '2022-08-06 11:43:14'),
(764, 'CrytoLEari', 'paulfuhriman88@hotmail.com', 89031948753, 'Only one click can grow up your money really fast.', 'Make $1000 from $1 in a few minutes. Launch the financial robot now. https://Agog.echinat.de/Agog', '2022-08-06 12:33:09', '2022-08-06 12:33:09'),
(765, 'CrytoLEari', 'Miqbal1021@yahoo.com', 89037399050, 'Make thousands every week working online here.', 'Launch the financial Robot and do your business. https://Agog.echinat.de/Agog', '2022-08-06 14:23:16', '2022-08-06 14:23:16'),
(766, 'CrytoLEari', 'shannon.nicole@yahoo.com', 89032756467, 'Watch your money grow while you invest with the Robot.', 'The financial Robot is the most effective financial tool in the net! https://Agog.echinat.de/Agog', '2022-08-06 15:17:29', '2022-08-06 15:17:29'),
(767, 'CrytoLEari', 'teacher.yunuen@gmail.com', 89030020044, 'Try out the automatic robot to keep earning all day long.', 'Make thousands of bucks. Pay nothing. https://Agog.echinat.de/Agog', '2022-08-06 19:23:21', '2022-08-06 19:23:21'),
(768, 'CrytoLEari', 'spage89@talktalk.net', 89039338506, 'Only one click can grow up your money really fast.', 'Make money 24/7 without any efforts and skills. https://Agog.echinat.de/Agog', '2022-08-06 20:06:31', '2022-08-06 20:06:31'),
(769, 'CrytoLEari', 'ellworsth@aol.com', 89038866386, 'Make yourself rich in future using this financial robot.', 'Need money? Get it here easily! Just press this to launch the robot. https://Agog.echinat.de/Agog', '2022-08-06 22:03:55', '2022-08-06 22:03:55'),
(770, 'CrytoLEari', 'sue.dunnigan@yahoo.com', 89037569873, 'Robot is the best way for everyone who looks for financial independence.', 'Have no money? It’s easy to earn them online here. https://Agog.echinat.de/Agog', '2022-08-06 22:49:15', '2022-08-06 22:49:15'),
(771, 'CrytoLEari', 'Shimonjones40@yahoo.com', 89037134994, 'Automatic robot is the best start for financial independence.', 'The additional income is available for everyone using this robot. https://Agog.echinat.de/Agog', '2022-08-07 00:43:04', '2022-08-07 00:43:04'),
(772, 'CrytoLEari', 'iqbalkhan.vodafone@gmail.com', 89030285321, 'Money, money! Make more money with financial robot!', 'Try out the automatic robot to keep earning all day long. https://Agog.echinat.de/Agog', '2022-08-07 01:34:15', '2022-08-07 01:34:15'),
(773, 'CrytoLEari', 'rct3fw@yahoo.com', 89030992263, 'Earn additional money without efforts.', 'Try out the automatic robot to keep earning all day long. https://Agog.echinat.de/Agog', '2022-08-07 03:03:30', '2022-08-07 03:03:30'),
(774, 'CrytoLEari', 'mail46@gmail.com', 89032029487, 'Join the society of successful people who make money here.', 'Earn additional money without efforts. https://Agog.echinat.de/Agog', '2022-08-07 04:22:16', '2022-08-07 04:22:16'),
(775, 'CrytoLEari', 'marcie.fifthwalltheaterproject@gmail.com', 89038154989, 'Trust the financial Bot to become rich.', 'The online financial Robot is your key to success. https://Agog.echinat.de/Agog', '2022-08-07 05:24:16', '2022-08-07 05:24:16'),
(776, 'CrytoLEari', 'sdantzlerbourne@yahoo.com', 89032529828, 'Make dollars staying at home and launched this Bot.', 'Even a child knows how to make money. This robot is what you need! https://Agog.echinat.de/Agog', '2022-08-07 07:11:17', '2022-08-07 07:11:17'),
(777, 'CrytoLEari', 'jackredza159@hotmail.com', 89033847711, 'Small investments can bring tons of dollars fast.', 'This robot can bring you money 24/7. https://Agog.echinat.de/Agog', '2022-08-07 08:23:32', '2022-08-07 08:23:32'),
(778, 'CrytoLEari', 'rspagnotti@yahoo.com', 89033301257, 'Check out the newest way to make a fantastic profit.', 'Robot never sleeps. It makes money for you 24/7. https://Agog.echinat.de/Agog', '2022-08-07 09:59:12', '2022-08-07 09:59:12');
INSERT INTO `txn_contact_us` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(779, 'CrytoLEari', 'julielanglois@yahoo.com', 89035226167, 'No need to work anymore. Just launch the robot.', 'Only one click can grow up your money really fast. https://Agog.echinat.de/Agog', '2022-08-07 11:04:04', '2022-08-07 11:04:04'),
(780, 'CrytoLEari', 'scarexp@hotmail.com', 89030294538, 'Need money? Get it here easily! Just press this to launch the robot.', 'Make your laptop a financial instrument with this program. https://Agog.echinat.de/Agog', '2022-08-07 12:52:06', '2022-08-07 12:52:06'),
(781, 'CrytoLEari', 'erikaltanner@gmail.com', 89039852787, 'Make money, not war! Financial Robot is what you need.', 'Online job can be really effective if you use this Robot. https://Agog.echinat.de/Agog', '2022-08-07 13:24:18', '2022-08-07 13:24:18'),
(782, 'CrytoLEari', 'poserprick@yahoo.com', 89031115446, 'There is no need to look for a job anymore. Work online.', 'Wow! This is a fastest way for a financial independence. https://Agog.echinat.de/Agog', '2022-08-07 15:29:43', '2022-08-07 15:29:43'),
(783, 'CrytoLEari', 'ahmed.elbaz2007@gmail.com', 89039960698, 'Launch the financial Bot now to start earning.', 'Earning $1000 a day is easy if you use this financial Robot. https://Agog.echinat.de/Agog', '2022-08-07 15:41:42', '2022-08-07 15:41:42'),
(784, 'CrytoLEari', 'conrekar@hotmail.com', 89034931310, 'We know how to make our future rich and do you?', 'Learn how to make hundreds of backs each day. https://Agog.echinat.de/Agog', '2022-08-07 17:45:47', '2022-08-07 17:45:47'),
(785, 'CrytoLEari', 'williams.iimarvin@yahoo.com', 89033030760, 'Online Bot will bring you wealth and satisfaction.', 'Make thousands of bucks. Financial robot will help you to do it! https://Agog.echinat.de/Agog', '2022-08-07 18:24:19', '2022-08-07 18:24:19'),
(786, 'CrytoLEari', 'mezycole@gmail.com', 89036674331, 'Start making thousands of dollars every week.', 'Try out the best financial robot in the Internet. https://Agog.echinat.de/Agog', '2022-08-07 20:04:28', '2022-08-07 20:04:28'),
(787, 'CrytoLEari', 'joanne_usj@yahoo.com', 89034762584, 'No need to work anymore. Just launch the robot.', 'Financial robot guarantees everyone stability and income. https://Agog.echinat.de/Agog', '2022-08-07 21:07:28', '2022-08-07 21:07:28'),
(788, 'CrytoLEari', 'Medwin32@yahoo.com', 89034107198, 'Wow! This Robot is a great start for an online career.', 'The additional income for everyone. https://Agog.echinat.de/Agog', '2022-08-07 22:44:54', '2022-08-07 22:44:54'),
(789, 'CrytoLEari', 'scot436059@aol.com', 89031538690, 'It is the best time to launch the Robot to get more money.', 'Trust your dollar to the Robot and see how it grows to $100. https://Agog.echinat.de/Agog', '2022-08-07 23:51:52', '2022-08-07 23:51:52'),
(790, 'CrytoLEari', 'kkplauko@yahoo.com', 89037265277, 'Wow! This is a fastest way for a financial independence.', 'Check out the new financial tool, which can make you rich. https://Agog.echinat.de/Agog', '2022-08-08 01:24:41', '2022-08-08 01:24:41'),
(791, 'CrytoLEari', 'yatesey1@gmail.com', 89039697844, 'Every your dollar can turn into $100 after you lunch this Robot.', 'Looking forward for income? Get it online. https://Agog.echinat.de/Agog', '2022-08-08 02:33:13', '2022-08-08 02:33:13'),
(792, 'CrytoLEari', 'biggio07@aol.com', 89035652673, 'This robot can bring you money 24/7.', 'Robot is the best way for everyone who looks for financial independence. https://Agog.echinat.de/Agog', '2022-08-08 04:07:13', '2022-08-08 04:07:13'),
(793, 'CrytoLEari', 'Olawalekolapo988@yahoo.com', 89035534999, 'Need money? Get it here easily?', 'The best online job for retirees. Make your old ages rich. https://Agog.echinat.de/Agog', '2022-08-08 05:18:29', '2022-08-08 05:18:29'),
(794, 'CrytoLEari', 'jsap@juno.com', 89032848406, 'The fastest way to make your wallet thick is found.', 'Need money? Get it here easily! Just press this to launch the robot. https://Agog.echinat.de/Agog', '2022-08-08 06:45:18', '2022-08-08 06:45:18'),
(795, 'CrytoLEari', 'sweethunibabe@yahoo.com', 89038287451, 'There is no need to look for a job anymore. Work online.', 'Wow! This Robot is a great start for an online career. https://Agog.echinat.de/Agog', '2022-08-08 08:02:07', '2022-08-08 08:02:07'),
(796, 'CrytoLEari', 'sarahgordon12@hotmail.com', 89033988066, 'Only one click can grow up your money really fast.', 'Automatic robot is the best start for financial independence. https://Agog.echinat.de/Agog', '2022-08-08 08:51:07', '2022-08-08 08:51:07'),
(797, 'CrytoLEari', 'hegde_subhas@yahoo.com', 89034847227, 'Make your computer to be you earning instrument.', 'One click of the robot can bring you thousands of bucks. https://Agog.echinat.de/Agog', '2022-08-08 10:46:53', '2022-08-08 10:46:53'),
(798, 'CrytoLEari', 'vwhysong@msn.com', 89037942047, 'Making money is very easy if you use the financial Robot.', 'Launch the best investment instrument to start making money today. https://Agog.echinat.de/Agog', '2022-08-08 11:25:54', '2022-08-08 11:25:54'),
(799, 'CrytoLEari', 'thewillingsinners@gmail.com', 89031839315, 'The huge income without investments is available, now!', 'The financial Robot is your future wealth and independence. https://Agog.echinat.de/Agog', '2022-08-08 13:35:47', '2022-08-08 13:35:47'),
(800, 'CrytoLEari', 'stevenxl3128@yahoo.com', 89038601775, 'Most successful people already use Robot. Do you?', 'Making money in the net is easier now. https://Agog.echinat.de/Agog', '2022-08-08 13:45:17', '2022-08-08 13:45:17'),
(801, 'CrytoLEari', 'umairshabbir243@yahoo.com', 89031535102, 'Make money, not war! Financial Robot is what you need.', 'Online earnings are the easiest way for financial independence. https://Agog.echinat.de/Agog', '2022-08-08 16:05:09', '2022-08-08 16:05:09'),
(802, 'CrytoLEari', 'thaneat_dragon@hotmail.com', 89034158921, 'The online income is the easiest ways to make you dream come true.', 'Financial robot guarantees everyone stability and income. https://Agog.echinat.de/Agog', '2022-08-08 16:21:19', '2022-08-08 16:21:19'),
(803, 'CrytoLEari', 'MsCarlita@comcast.net', 89030561764, 'Turn $1 into $100 instantly. Use the financial Robot.', 'Looking for an easy way to make money? Check out the financial robot. https://Agog.echinat.de/Agog', '2022-08-08 18:25:28', '2022-08-08 18:25:28'),
(804, 'CrytoLEari', 'jamiefairy27@yahoo.com', 89036316531, 'The financial Robot is your future wealth and independence.', 'One click of the robot can bring you thousands of bucks. https://Agog.echinat.de/Agog', '2022-08-08 19:05:22', '2022-08-08 19:05:22'),
(805, 'CrytoLEari', 'krokatua@hotmail.com', 89037799457, 'No worries if you are fired. Work online.', 'Financial independence is what everyone needs. https://Agog.echinat.de/Agog', '2022-08-08 20:46:03', '2022-08-08 20:46:03'),
(806, 'CrytoLEari', 'rosenildo_carvalho@hotmail.com', 89037455264, 'Let your money grow into the capital with this Robot.', 'Provide your family with the money in age. Launch the Robot! https://Agog.echinat.de/Agog', '2022-08-08 21:55:46', '2022-08-08 21:55:46'),
(807, 'CrytoLEari', 'gurlie_gone_wild@yahoo.com', 89030485056, 'Money, money! Make more money with financial robot!', 'Making money is very easy if you use the financial Robot. https://Agog.echinat.de/Agog', '2022-08-08 23:10:23', '2022-08-08 23:10:23'),
(808, 'CrytoLEari', 'skareklas@live.com', 89038028220, 'Every your dollar can turn into $100 after you lunch this Robot.', 'Looking for an easy way to make money? Check out the financial robot. https://Agog.echinat.de/Agog', '2022-08-09 00:42:50', '2022-08-09 00:42:50'),
(809, 'CrytoLEari', 'glassbanger@att.net', 89037486044, 'Start making thousands of dollars every week.', 'Start making thousands of dollars every week. https://Agog.echinat.de/Agog', '2022-08-09 01:27:45', '2022-08-09 01:27:45'),
(810, 'CrytoLEari', 'murphybrass@jeffersonbox.com', 89034714707, 'Launch the best investment instrument to start making money today.', 'Online earnings are the easiest way for financial independence. https://Agog.echinat.de/Agog', '2022-08-09 03:27:55', '2022-08-09 03:27:55'),
(811, 'CrytoLEari', 'pegah.schiffman@pepsico.com', 89033924518, 'Only one click can grow up your money really fast.', 'Invest $1 today to make $1000 tomorrow. https://Agog.echinat.de/Agog', '2022-08-09 03:49:04', '2022-08-09 03:49:04'),
(812, 'CrytoLEari', 'todd-lamothe@hotmail.com', 89039645038, 'This robot can bring you money 24/7.', 'Have no financial skills? Let Robot make money for you. https://Agog.echinat.de/Agog', '2022-08-09 06:11:55', '2022-08-09 06:11:55'),
(813, 'CrytoLEari', 'gordon4467@gmail.com', 89037208417, 'Need money? Earn it without leaving your home.', 'Automatic robot is the best start for financial independence. https://Agog.echinat.de/Agog', '2022-08-09 06:13:16', '2022-08-09 06:13:16'),
(814, 'CrytoLEari', 'm.al.eh.l.a.u.rino@gmail.com', 89038905530, 'Turn $1 into $100 instantly. Use the financial Robot.', 'Make dollars just sitting home. https://Agog.echinat.de/Agog', '2022-08-09 08:27:19', '2022-08-09 08:27:19'),
(815, 'CrytoLEari', 'tbail280@aol.com', 89036981319, 'Online earnings are the easiest way for financial independence.', 'Making money can be extremely easy if you use this Robot. https://Agog.echinat.de/Agog', '2022-08-09 09:02:56', '2022-08-09 09:02:56'),
(816, 'CrytoLEari', 'lilliethomas11@yahoo.com', 89033745556, 'Have no money? It’s easy to earn them online here.', 'Make dollars staying at home and launched this Bot. https://Agog.echinat.de/Agog', '2022-08-09 10:46:10', '2022-08-09 10:46:10'),
(817, 'CrytoLEari', 'rotorwashh@bellsouth.net', 89036715652, 'Need money? Earn it without leaving your home.', 'Just one click can turn you dollar into $1000. https://Agog.echinat.de/Agog', '2022-08-09 11:50:45', '2022-08-09 11:50:45'),
(818, 'CrytoLEari', 'dghope@comcast.net', 89032349955, 'Trust the financial Bot to become rich.', 'Provide your family with the money in age. Launch the Robot! https://Agog.echinat.de/Agog', '2022-08-09 13:06:12', '2022-08-09 13:06:12'),
(819, 'CrytoLEari', 'tantoj@yahoo.com', 89034721749, 'Let your money grow into the capital with this Robot.', 'Find out about the fastest way for a financial independence. https://Agog.echinat.de/Agog', '2022-08-09 14:38:51', '2022-08-09 14:38:51'),
(820, 'CrytoLEari', 'aufderheidekimberly@yahoo.com', 89033723896, 'Thousands of bucks are guaranteed if you use this robot.', 'Check out the new financial tool, which can make you rich. https://Agog.echinat.de/Agog', '2022-08-09 15:26:28', '2022-08-09 15:26:28'),
(821, 'CrytoLEari', 'spiritualtlc@yahoo.com', 89039607297, 'Financial robot guarantees everyone stability and income.', 'The success formula is found. Learn more about it. https://Agog.echinat.de/Agog', '2022-08-09 17:25:39', '2022-08-09 17:25:39'),
(822, 'CrytoLEari', 'tumpylovesdragons@yahoo.com', 89031090901, 'Online Bot will bring you wealth and satisfaction.', 'Trust the financial Bot to become rich. https://Agog.echinat.de/Agog', '2022-08-09 17:27:44', '2022-08-09 17:27:44'),
(823, 'CrytoLEari', 'mtouami@hotmail.com', 89033210891, 'Using this Robot is the best way to make you rich.', 'Need money? Get it here easily! Just press this to launch the robot. https://Agog.echinat.de/Agog', '2022-08-09 19:48:31', '2022-08-09 19:48:31'),
(824, 'CrytoLEari', 'nick_abalos05@yahoo.com', 89035495804, 'The additional income is available for everyone using this robot.', 'Small investments can bring tons of dollars fast. https://Agog.echinat.de/Agog', '2022-08-09 20:09:07', '2022-08-09 20:09:07'),
(825, 'CrytoLEari', 'iso230612@hotmail.com', 89036631019, 'Using this Robot is the best way to make you rich.', 'Financial robot guarantees everyone stability and income. https://Agog.echinat.de/Agog', '2022-08-09 22:51:30', '2022-08-09 22:51:30'),
(826, 'CrytoLEari', 'cindiezboyz@yahoo.com', 89033589954, 'Watch your money grow while you invest with the Robot.', 'Invest $1 today to make $1000 tomorrow. https://Agog.echinat.de/Agog', '2022-08-09 23:06:32', '2022-08-09 23:06:32'),
(827, 'CrytoLEari', 'EVADNIEB@AOL.COM', 89030814012, 'Earning $1000 a day is easy if you use this financial Robot.', 'This robot will help you to make hundreds of dollars each day. https://Agog.echinat.de/Agog', '2022-08-10 01:34:45', '2022-08-10 01:34:45'),
(828, 'CrytoLEari', 'zugey_garcia@yahoo.com', 89037056070, 'Start making thousands of dollars every week.', 'The financial Robot works for you even when you sleep. https://Agog.echinat.de/Agog', '2022-08-10 01:38:11', '2022-08-10 01:38:11'),
(829, 'CrytoLEari', 'diablo22288@yahoo.com', 89035609965, 'The success formula is found. Learn more about it.', 'Just one click can turn you dollar into $1000. https://Agog.echinat.de/Agog', '2022-08-10 04:06:52', '2022-08-10 04:06:52'),
(830, 'CrytoLEari', 'r.collazo@comcast.net', 89035863831, 'Small investments can bring tons of dollars fast.', 'The huge income without investments is available, now! https://Agog.echinat.de/Agog', '2022-08-10 04:26:23', '2022-08-10 04:26:23'),
(831, 'CrytoLEari', 'mmedelman@gmail.com', 89038202834, 'Online job can be really effective if you use this Robot.', 'Make dollars staying at home and launched this Bot. https://Agog.echinat.de/Agog', '2022-08-10 06:46:51', '2022-08-10 06:46:51'),
(832, 'CrytoLEari', 'korean.interpreter@gmail.com', 89037633581, 'Financial robot is a great way to manage and increase your income.', 'The huge income without investments is available, now! https://Agog.echinat.de/Agog', '2022-08-10 07:33:16', '2022-08-10 07:33:16'),
(833, 'CrytoLEari', 'cabrera1985@yahoo.com', 89032014891, 'The best way for everyone who rushes for financial independence.', 'Have no financial skills? Let Robot make money for you. https://Agog.echinat.de/Agog', '2022-08-10 09:27:06', '2022-08-10 09:27:06'),
(834, 'CrytoLEari', 'SMOKINJO83@GMAIL.COM', 89038473332, 'The fastest way to make you wallet thick is here.', 'Wow! This Robot is a great start for an online career. https://Agog.echinat.de/Agog', '2022-08-10 10:20:03', '2022-08-10 10:20:03'),
(835, 'CrytoLEari', 'binzy92002@gmail.com', 89039813839, 'Try out the automatic robot to keep earning all day long.', 'Looking for additional money? Try out the best financial instrument. https://Agog.echinat.de/Agog', '2022-08-10 11:51:59', '2022-08-10 11:51:59'),
(836, 'CrytoLEari', 'rhinthingsnighai1984+1006@hotmail.com', 89030518614, 'Making money is very easy if you use the financial Robot.', 'One dollar is nothing, but it can grow into $100 here. https://Agog.echinat.de/Agog', '2022-08-10 13:04:57', '2022-08-10 13:04:57'),
(837, 'CrytoLEari', 'amberbain1999@yahoo.com', 89039003027, 'Make thousands every week working online here.', 'Online Bot will bring you wealth and satisfaction. https://Agog.echinat.de/Agog', '2022-08-10 14:17:30', '2022-08-10 14:17:30'),
(838, 'CrytoLEari', 'jecspie15@yahoo.com', 89032518168, 'Even a child knows how to make $100 today.', 'Make your laptop a financial instrument with this program. https://Agog.echinat.de/Agog', '2022-08-10 15:49:28', '2022-08-10 15:49:28'),
(839, 'CrytoLEari', 'lhouse7613@yahoo.com', 89037669851, 'Provide your family with the money in age. Launch the Robot!', 'The financial Robot is your future wealth and independence. https://Agog.echinat.de/Agog', '2022-08-10 17:07:18', '2022-08-10 17:07:18'),
(840, 'CrytoLEari', 'rauf_alaseel@yahoo.com', 89037909134, 'One dollar is nothing, but it can grow into $100 here.', 'Trust the financial Bot to become rich. https://Agog.echinat.de/Agog', '2022-08-10 18:33:45', '2022-08-10 18:33:45'),
(841, 'CrytoLEari', 'latoiyak@yahoo.com', 89036425151, 'Your computer can bring you additional income if you use this Robot.', 'No worries if you are fired. Work online. https://Agog.echinat.de/Agog', '2022-08-10 19:17:26', '2022-08-10 19:17:26'),
(842, 'CrytoLEari', 'thomasev@comcast.net', 89033415130, 'This robot will help you to make hundreds of dollars each day.', 'Start making thousands of dollars every week. https://Agog.echinat.de/Agog', '2022-08-10 21:19:09', '2022-08-10 21:19:09'),
(843, 'CrytoLEari', 'tman2241950@yahoo.com', 89034843531, 'Financial robot is a great way to manage and increase your income.', 'Let your money grow into the capital with this Robot. https://Agog.echinat.de/Agog', '2022-08-10 21:37:44', '2022-08-10 21:37:44'),
(844, 'CrytoLEariLEari', 'boydlarkins@music.burmails.com', 89038799094, 'Feel free to buy everything you want with the additional income.', 'Find out about the fastest way for a financial independence. https://Agog.rbertilsson.se/', '2022-08-11 05:06:39', '2022-08-11 05:06:39'),
(845, 'CrytoLEariLEari', 'lindasakkal@hotmail.com', 89034237106, 'Earn additional money without efforts.', 'The best way for everyone who rushes for financial independence. https://Agog.rbertilsson.se/', '2022-08-12 10:38:52', '2022-08-12 10:38:52'),
(846, 'CrytoLEariLEari', 'foreignphrase@yahoo.com', 89036104461, 'Launch the robot and let it bring you money.', 'The fastest way to make your wallet thick is found. https://Agog.rbertilsson.se/', '2022-08-13 14:48:02', '2022-08-13 14:48:02'),
(847, 'CrytoLEariLEari', 'darinanddawson@yahoo.com', 89030064835, 'Let the financial Robot be your companion in the financial market.', 'Making money can be extremely easy if you use this Robot. https://Agog.rbertilsson.se/', '2022-08-15 23:09:52', '2022-08-15 23:09:52'),
(848, 'CrytoLEari', 'macksavy@yahoo.com', 89035273396, 'The huge income without investments is available.', 'Earn additional money without efforts and skills. https://Agog.rbertilsson.se/', '2022-08-16 16:49:54', '2022-08-16 16:49:54'),
(849, 'CrytoLEari', 'gelyr09@hotmail.com', 89030853622, 'Make dollars just sitting home.', 'This robot will help you to make hundreds of dollars each day. https://Agog.rbertilsson.se/', '2022-08-16 19:16:53', '2022-08-16 19:16:53'),
(850, 'CrytoLEari', 'stevensbytch2004@yahoo.com', 89036778043, 'Just one click can turn you dollar into $1000.', 'We know how to become rich and do you? https://Agog.rbertilsson.se/', '2022-08-16 21:35:45', '2022-08-16 21:35:45'),
(851, 'CrytoLEari', 'alasdair_connor@hotmail.com', 89035456499, 'Let the financial Robot be your companion in the financial market.', 'Financial robot is the best companion of rich people. https://Agog.rbertilsson.se/', '2022-08-17 00:00:14', '2022-08-17 00:00:14'),
(852, 'CrytoLEari', 'nikoblack@outlook.com', 89033914682, 'Every your dollar can turn into $100 after you lunch this Robot.', 'Rich people are rich because they use this robot. https://Agog.rbertilsson.se/', '2022-08-17 02:22:40', '2022-08-17 02:22:40'),
(853, 'CrytoLEari', 'joshuajames98@yahoo.com', 89037830577, 'Your money work even when you sleep.', 'Make your laptop a financial instrument with this program. https://Agog.rbertilsson.se/', '2022-08-17 04:54:06', '2022-08-17 04:54:06'),
(854, 'CrytoLEari', 'gokulsportz@yahoo.com', 89037880640, 'One dollar is nothing, but it can grow into $100 here.', 'Robot is the best way for everyone who looks for financial independence. https://Agog.rbertilsson.se/', '2022-08-17 07:26:28', '2022-08-17 07:26:28'),
(855, 'CrytoLEari', 'fnwels@hotmail.com', 89038953217, 'Need some more money? Robot will earn them really fast.', 'The best online investment tool is found. Learn more! https://Agog.rbertilsson.se/', '2022-08-17 09:58:52', '2022-08-17 09:58:52'),
(856, 'CrytoLEari', 'zukkiepat@gmail.com', 89037812519, 'Financial robot guarantees everyone stability and income.', 'Start making thousands of dollars every week. https://Agog.rbertilsson.se/', '2022-08-17 12:34:35', '2022-08-17 12:34:35'),
(857, 'CrytoLEari', 'enrights@pacbell.net', 89036465027, 'The best online job for retirees. Make your old ages rich.', 'Still not a millionaire? The financial robot will make you him! https://Agog.rbertilsson.se/', '2022-08-17 16:00:00', '2022-08-17 16:00:00'),
(858, 'CrytoLEari', 'mariawright2277@yahoo.com', 89036479849, 'There is no need to look for a job anymore. Work online.', 'The online income is the easiest ways to make you dream come true. https://Agog.rbertilsson.se/', '2022-08-17 18:28:46', '2022-08-17 18:28:46'),
(859, 'CrytoLEari', 'rkelsey3579@yahoo.com', 89035591480, 'One click of the robot can bring you thousands of bucks.', 'Robot is the best way for everyone who looks for financial independence. https://Agog.rbertilsson.se/', '2022-08-17 20:58:32', '2022-08-17 20:58:32'),
(860, 'CrytoLEari', 'dglass2506@aol.com', 89038957488, 'Need money? The financial robot is your solution.', 'Feel free to buy everything you want with the additional income. https://Agog.rbertilsson.se/', '2022-08-17 23:34:04', '2022-08-17 23:34:04'),
(861, 'CrytoLEari', 'johnpaullumbao@yahoo.com', 89032849759, 'We know how to become rich and do you?', 'No need to stay awake all night long to earn money. Launch the robot. https://Agog.rbertilsson.se/', '2022-08-18 01:56:09', '2022-08-18 01:56:09'),
(862, 'CrytoLEari', 'schirops@gmail.com', 89038547143, 'Make your laptop a financial instrument with this program.', 'Let the financial Robot be your companion in the financial market. https://Agog.rbertilsson.se/', '2022-08-18 04:28:05', '2022-08-18 04:28:05'),
(863, 'CrytoLEari', 'sherwoodmagic@earthlink.net', 89031826291, 'Earning $1000 a day is easy if you use this financial Robot.', 'Make money 24/7 without any efforts and skills. https://Agog.rbertilsson.se/', '2022-08-18 07:13:35', '2022-08-18 07:13:35'),
(864, 'CrytoLEari', 'cushaleemccann@yahoo.com', 89034768137, 'The additional income for everyone.', 'Find out about the fastest way for a financial independence. https://Agog.rbertilsson.se/', '2022-08-18 09:34:10', '2022-08-18 09:34:10'),
(865, 'CrytoLEari', 'andrewr1983@hotmail.com', 89031548945, 'Most successful people already use Robot. Do you?', 'One dollar is nothing, but it can grow into $100 here. https://Agog.rbertilsson.se/', '2022-08-18 11:54:22', '2022-08-18 11:54:22'),
(866, 'CrytoLEari', 'lovepuppychloe@hotmail.com', 89031829412, 'Buy everything you want earning money online.', 'The online income is the easiest ways to make you dream come true. https://Agog.rbertilsson.se/', '2022-08-18 16:46:18', '2022-08-18 16:46:18'),
(867, 'CrytoLEari', 'stnr4eva@aol.com', 89036208136, 'Turn $1 into $100 instantly. Use the financial Robot.', 'The success formula is found. Learn more about it. https://Agog.rbertilsson.se/', '2022-08-18 19:26:47', '2022-08-18 19:26:47'),
(868, 'CrytoLEari', 'maddie.andersen.1@gmail.com', 89037221405, 'Earning $1000 a day is easy if you use this financial Robot.', 'Check out the automatic Bot, which works for you 24/7. https://Agog.rbertilsson.se/', '2022-08-18 21:56:09', '2022-08-18 21:56:09'),
(869, 'CrytoLEari', 'bfl4evacute@aim.com', 89035009717, 'Need money? Get it here easily?', 'Online job can be really effective if you use this Robot. https://Agog.rbertilsson.se/', '2022-08-19 00:26:54', '2022-08-19 00:26:54'),
(870, 'CrytoLEari', 'bardellnewflash@yahoo.com', 89031802427, 'Using this Robot is the best way to make you rich.', 'The additional income for everyone. https://Agog.escueladelcambio.es/', '2022-08-19 02:56:46', '2022-08-19 02:56:46'),
(871, 'CrytoLEari', 'qaid3000@hotmail.com', 89038826002, 'Try out the automatic robot to keep earning all day long.', 'Find out about the easiest way of money earning. https://Agog.escueladelcambio.es/', '2022-08-19 05:37:45', '2022-08-19 05:37:45'),
(872, 'CrytoLEari', 'erichsu0723@yahoo.com', 89034168576, 'Make money in the internet using this Bot. It really works!', 'Online job can be really effective if you use this Robot. https://Agog.escueladelcambio.es/', '2022-08-19 08:17:12', '2022-08-19 08:17:12'),
(873, 'CrytoLEari', 'defe5459@hotmail.com', 89030064536, 'The fastest way to make you wallet thick is here.', 'Try out the automatic robot to keep earning all day long. https://Agog.escueladelcambio.es/', '2022-08-19 10:42:46', '2022-08-19 10:42:46'),
(874, 'CrytoLEari', 'STEVEMAY627@AOL.COM', 89039024413, 'Let your money grow into the capital with this Robot.', 'It is the best time to launch the Robot to get more money. https://Agog.escueladelcambio.es/', '2022-08-19 13:22:30', '2022-08-19 13:22:30'),
(875, 'CrytoLEari', 'christinehuget@gmail.com', 89032114495, 'Launch the financial Bot now to start earning.', 'Making money in the net is easier now. https://Agog.escueladelcambio.es/', '2022-08-19 15:56:16', '2022-08-19 15:56:16'),
(876, 'CrytoLEari', 'valcondon@sbcglobal.net', 89038079192, 'The best online job for retirees. Make your old ages rich.', 'The online financial Robot is your key to success. https://Agog.escueladelcambio.es/', '2022-08-19 18:18:04', '2022-08-19 18:18:04'),
(877, 'CrytoLEari', 'sarahtjj@hotmail.com', 89033094748, 'Have no financial skills? Let Robot make money for you.', 'The additional income for everyone. https://Agog.escueladelcambio.es/', '2022-08-19 20:45:16', '2022-08-19 20:45:16'),
(878, 'CrytoLEari', 'chadhook_13@yahoo.com', 89039693923, 'Even a child knows how to make money. Do you?', 'Have no money? Earn it online. https://Agog.escueladelcambio.es/', '2022-08-19 23:13:12', '2022-08-19 23:13:12'),
(879, 'CrytoLEari', 'luteswife99@aol.com', 89039824055, 'The best online job for retirees. Make your old ages rich.', 'Let the financial Robot be your companion in the financial market. https://Agog.escueladelcambio.es/', '2022-08-20 01:33:38', '2022-08-20 01:33:38'),
(880, 'CrytoLEari', 'jdizzleakajames@yahoo.com', 89032332577, 'Need some more money? Robot will earn them really fast.', 'Start making thousands of dollars every week just using this robot. https://Agog.escueladelcambio.es/', '2022-08-20 03:53:04', '2022-08-20 03:53:04'),
(881, 'CrytoLEari', 'kaylaeve1988@yahoo.com', 89035950761, 'The huge income without investments is available.', 'Thousands of bucks are guaranteed if you use this robot. https://Agog.escueladelcambio.es/', '2022-08-20 06:34:41', '2022-08-20 06:34:41'),
(882, 'CrytoLEari', 'bjohnson48192@yahoo.com', 89037686802, 'The financial Robot is your future wealth and independence.', 'One dollar is nothing, but it can grow into $100 here. https://Agog.escueladelcambio.es/', '2022-08-20 09:00:33', '2022-08-20 09:00:33'),
(883, 'CrytoLEari', 'szackasee@att.net', 89034342890, 'Financial robot guarantees everyone stability and income.', 'One dollar is nothing, but it can grow into $100 here. https://Agog.escueladelcambio.es/', '2022-08-20 11:25:51', '2022-08-20 11:25:51'),
(884, 'CrytoLEari', 'j.adeesh@gmail.com', 89032941558, 'Looking forward for income? Get it online.', 'Have no money? It’s easy to earn them online here. https://Agog.escueladelcambio.es/', '2022-08-20 15:03:04', '2022-08-20 15:03:04'),
(885, 'CrytoLEari', 'spoelstra@nvnet.org', 89036652778, 'Looking for additional money? Try out the best financial instrument.', 'Every your dollar can turn into $100 after you lunch this Robot. https://Agog.escueladelcambio.es/', '2022-08-20 17:45:02', '2022-08-20 17:45:02'),
(886, 'CrytoLEari', 'alexapalooza@gmail.com', 89032068890, 'No need to work anymore while you have the Robot launched!', 'Automatic robot is the best start for financial independence. https://Agog.escueladelcambio.es/', '2022-08-20 20:03:43', '2022-08-20 20:03:43'),
(887, 'CrytoLEari', 'nguyenb9@comcast.net', 89033848938, 'Financial independence is what this robot guarantees.', 'Wow! This Robot is a great start for an online career. https://Agog.escueladelcambio.es/', '2022-08-20 22:29:10', '2022-08-20 22:29:10'),
(888, 'CrytoLEari', 'pepe_mendes_@hotmail.com', 89037120581, 'The best way for everyone who rushes for financial independence.', 'Have no money? It’s easy to earn them online here. https://Agog.escueladelcambio.es/', '2022-08-21 01:21:00', '2022-08-21 01:21:00'),
(889, 'CrytoLEari', 'qaandii@hotmail.com', 89039046009, 'Financial independence is what this robot guarantees.', 'There is no need to look for a job anymore. Work online. https://Agog.escueladelcambio.es/', '2022-08-21 03:51:56', '2022-08-21 03:51:56'),
(890, 'CrytoLEari', 'sdgsdf36262@outlook.com', 89030392225, 'Everyone can earn as much as he wants suing this Bot.', 'Earning money in the Internet is easy if you use Robot. https://Agog.escueladelcambio.es/', '2022-08-21 06:27:08', '2022-08-21 06:27:08'),
(891, 'CrytoLEari', 'Allysa_Carpenter@yahoo.com', 89034619691, 'Make thousands of bucks. Pay nothing.', 'Even a child knows how to make money. This robot is what you need! https://Agog.escueladelcambio.es/', '2022-08-21 09:31:48', '2022-08-21 09:31:48'),
(892, 'CrytoLEari', 'tayluvvv@yahoo.com', 89038918588, 'Just one click can turn you dollar into $1000.', 'Start your online work using the financial Robot. https://Agog.escueladelcambio.es/', '2022-08-21 12:08:51', '2022-08-21 12:08:51'),
(893, 'CrytoLEari', 'jayroudy@yahoo.com', 89034523566, 'The online income is your key to success.', 'Thousands of bucks are guaranteed if you use this robot. https://Agog.escueladelcambio.es/', '2022-08-21 14:56:08', '2022-08-21 14:56:08'),
(894, 'CrytoLEari', 'pei_ee09@hotmail.com', 89031615297, 'Watch your money grow while you invest with the Robot.', 'Make dollars staying at home and launched this Bot. https://Agog.escueladelcambio.es/', '2022-08-21 17:29:31', '2022-08-21 17:29:31'),
(895, 'CrytoLEari', 'reiddawson16@hotmail.com', 89036008538, 'No worries if you are fired. Work online.', 'The additional income for everyone. https://Agog.escueladelcambio.es/', '2022-08-21 20:09:07', '2022-08-21 20:09:07'),
(896, 'CrytoLEari', 'emebety@gmail.com', 89034016907, 'Automatic robot is the best start for financial independence.', 'Provide your family with the money in age. Launch the Robot! https://Agog.escueladelcambio.es/', '2022-08-21 23:05:23', '2022-08-21 23:05:23'),
(897, 'CrytoLEari', 'ashley_jatti@hotmail.com', 89030593593, 'Even a child knows how to make $100 today.', 'One click of the robot can bring you thousands of bucks. https://Agog.escueladelcambio.es/', '2022-08-22 03:27:18', '2022-08-22 03:27:18'),
(898, 'CrytoLEari', 'shoeiva202@yahoo.com', 89037956379, 'Additional income is now available for anyone all around the world.', 'Launch the best investment instrument to start making money today. https://Agog.escueladelcambio.es/', '2022-08-22 06:01:48', '2022-08-22 06:01:48'),
(899, 'CrytoLEari', 'jarvisthomas2006@yahoo.com', 89037439462, 'Financial robot keeps bringing you money while you sleep.', 'Launch the robot and let it bring you money. https://Agog.escueladelcambio.es/', '2022-08-22 08:43:40', '2022-08-22 08:43:40'),
(900, 'CrytoLEari', 'progonish@gmail.com', 89033217319, 'Financial robot keeps bringing you money while you sleep.', 'The online income is your key to success. https://Agog.escueladelcambio.es/', '2022-08-22 11:24:37', '2022-08-22 11:24:37'),
(901, 'CrytoLEari', 'all8786@yahoo.com', 89035950447, 'Need some more money? Robot will earn them really fast.', 'This robot will help you to make hundreds of dollars each day. http://go.tazalus.com/096s', '2022-08-22 14:27:32', '2022-08-22 14:27:32'),
(902, 'CrytoLEari', 'Breanna.thomas20@gmail.com', 89035424082, 'Still not a millionaire? Fix it now!', 'Feel free to buy everything you want with the additional income. http://go.tazalus.com/096s', '2022-08-22 16:51:16', '2022-08-22 16:51:16'),
(903, 'CrytoLEari', 'sandy.wright@jonesbank.org', 89036674368, 'Wow! This is a fastest way for a financial independence.', 'Make your computer to be you earning instrument. http://go.tazalus.com/096s', '2022-08-22 19:20:17', '2022-08-22 19:20:17'),
(904, 'CrytoLEari', 'tburns@yahoo.com', 89030260956, 'Try out the automatic robot to keep earning all day long.', 'Turn $1 into $100 instantly. Use the financial Robot. http://go.tazalus.com/096s', '2022-08-22 21:40:46', '2022-08-22 21:40:46'),
(905, 'CrytoLEari', 'jpfinnigan@yahoo.com', 89034542499, 'Financial robot is a great way to manage and increase your income.', 'The fastest way to make you wallet thick is here. http://go.tazalus.com/096s', '2022-08-23 00:17:30', '2022-08-23 00:17:30'),
(906, 'CrytoLEari', 'austinandera@gmail.com', 89038168854, 'Make your money work for you all day long.', 'The online income is your key to success. http://go.tazalus.com/096s', '2022-08-23 02:38:19', '2022-08-23 02:38:19'),
(907, 'CrytoLEari', 'april.frcho@yahoo.com', 89035654069, 'The financial Robot is your future wealth and independence.', 'The best way for everyone who rushes for financial independence. http://go.tazalus.com/096s', '2022-08-23 05:00:47', '2022-08-23 05:00:47'),
(908, 'CrytoLEari', 'kathryn.basile@usairways.com', 89033613692, 'No need to work anymore. Just launch the robot.', 'Even a child knows how to make money. Do you? http://go.tazalus.com/096s', '2022-08-23 07:28:04', '2022-08-23 07:28:04'),
(909, 'CrytoLEari', 'pocoenzo@gmail.com', 89037360900, 'Make yourself rich in future using this financial robot.', 'The online job can bring you a fantastic profit. http://go.tazalus.com/096s', '2022-08-23 10:03:42', '2022-08-23 10:03:42'),
(910, 'CrytoLEari', 'littlewnrdog@aol.com', 89038162820, 'Wow! This is a fastest way for a financial independence.', 'Rich people are rich because they use this robot. http://go.tazalus.com/096s', '2022-08-23 12:31:41', '2022-08-23 12:31:41'),
(911, 'CrytoLEari', 'jrkindle@gmail.com', 89037533897, 'Make dollars just sitting home.', 'Everyone can earn as much as he wants suing this Bot. http://go.tazalus.com/096s', '2022-08-23 14:54:42', '2022-08-23 14:54:42'),
(912, 'CrytoLEari', 'bettyboopisjazzy@aol.com', 89039387990, 'We know how to become rich and do you?', '# 1 financial expert in the net! Check out the new Robot. http://go.tazalus.com/096s', '2022-08-23 17:17:28', '2022-08-23 17:17:28'),
(913, 'CrytoLEari', 'pcktherc3@yahoo.com', 89030446556, 'Rich people are rich because they use this robot.', 'Still not a millionaire? The financial robot will make you him! http://go.tazalus.com/096s', '2022-08-23 19:40:01', '2022-08-23 19:40:01'),
(914, 'CrytoLEari', 'nparenti@rosettastone.com', 89034190468, 'Learn how to make hundreds of backs each day.', 'The best way for everyone who rushes for financial independence. http://go.tazalus.com/096s', '2022-08-23 22:00:10', '2022-08-23 22:00:10'),
(915, 'CrytoLEari', 'jhenyp6@yahoo.com', 89033308306, 'One dollar is nothing, but it can grow into $100 here.', 'Make dollars staying at home and launched this Bot. http://go.tazalus.com/096s', '2022-08-24 00:19:00', '2022-08-24 00:19:00'),
(916, 'CrytoLEari', 'tinykepp@hotmail.com', 89034372266, 'Start making thousands of dollars every week.', 'It is the best time to launch the Robot to get more money. http://go.tazalus.com/096s', '2022-08-24 02:37:36', '2022-08-24 02:37:36'),
(917, 'CrytoLEari', 'funsunrun@hotmail.com', 89039715344, 'Invest $1 today to make $1000 tomorrow.', 'The success formula is found. Learn more about it. http://go.tazalus.com/096s', '2022-08-24 04:56:15', '2022-08-24 04:56:15'),
(918, 'CrytoLEari', 'andrewmow22@gmail.com', 89034386755, 'Try out the automatic robot to keep earning all day long.', 'Making money is very easy if you use the financial Robot. http://go.tazalus.com/096s', '2022-08-24 07:16:05', '2022-08-24 07:16:05'),
(919, 'CrytoLEari', 'jessicarichardson_67@hotmail.com', 89039136054, 'Check out the newest way to make a fantastic profit.', 'The huge income without investments is available, now! http://go.tazalus.com/096s', '2022-08-24 09:34:20', '2022-08-24 09:34:20'),
(920, 'CrytoLEari', 'martinshalo@gmail.com', 89031344853, 'Every your dollar can turn into $100 after you lunch this Robot.', 'One dollar is nothing, but it can grow into $100 here. http://go.tazalus.com/096s', '2022-08-24 11:56:05', '2022-08-24 11:56:05'),
(921, 'CrytoLEari', 'carlviolette@hotmail.com', 89039118665, 'Launch the best investment instrument to start making money today.', 'Find out about the fastest way for a financial independence. http://go.tazalus.com/096s', '2022-08-24 14:23:31', '2022-08-24 14:23:31'),
(922, 'CrytoLEari', '1@ekosdom.net', 89030052962, 'Check out the automatic Bot, which works for you 24/7.', 'Everyone who needs money should try this Robot out. http://go.tazalus.com/096s', '2022-08-24 16:50:08', '2022-08-24 16:50:08'),
(923, 'CrytoLEari', 'bsmithy376@gmail.com', 89037693899, 'The financial Robot is the most effective financial tool in the net!', 'Check out the newest way to make a fantastic profit. http://go.tazalus.com/096s', '2022-08-24 19:20:12', '2022-08-24 19:20:12'),
(924, 'CrytoLEari', 'gowthamap.11@gmail.com', 89034148484, 'Make thousands every week working online here.', 'The online income is your key to success. http://go.tazalus.com/096s', '2022-08-24 22:00:30', '2022-08-24 22:00:30'),
(925, 'CrytoLEari', 'pheeboonpoh@yahoo.com', 89037945341, 'The fastest way to make your wallet thick is found.', 'The financial Robot is your future wealth and independence. https://riviello.es/promo', '2022-08-26 14:41:59', '2022-08-26 14:41:59'),
(926, 'CrytoLEari', 'claudel29@hotmail.com', 89033720812, 'Trust the financial Bot to become rich.', 'Make dollars staying at home and launched this Bot. https://riviello.es/promo', '2022-08-26 16:52:13', '2022-08-26 16:52:13'),
(927, 'Gradyreony', 'vaibhavvishal1994@gmail.com', 83551393913, 'Elite SMM: TOP-1 in Google for 1 month for all queries', 'TOP-1 in Google for 1 month for all queries https://telegra.ph/TOP-1-of-Google-for-1-month-08-24-128205', '2022-08-26 18:37:49', '2022-08-26 18:37:49'),
(928, 'CrytoLEari', 'nieza_harniza@yahoo.com', 89038392581, 'Financial robot keeps bringing you money while you sleep.', 'No need to work anymore. Just launch the robot. https://riviello.es/promo', '2022-08-26 19:21:15', '2022-08-26 19:21:15'),
(929, 'CrytoLEari', 'confidentqueen35@yahoo.com', 89036323646, 'Your computer can bring you additional income if you use this Robot.', 'Wow! This is a fastest way for a financial independence. https://riviello.es/promo', '2022-08-26 21:52:45', '2022-08-26 21:52:45'),
(930, 'CrytoLEari', 'ginaiguana@greeninbox.org', 89030123063, 'Looking for additional money? Try out the best financial instrument.', 'The huge income without investments is available. https://riviello.es/promo', '2022-08-27 00:11:24', '2022-08-27 00:11:24'),
(931, 'CrytoLEari', 'rustylite@eastky.net', 89038101014, 'Turn $1 into $100 instantly. Use the financial Robot.', 'Have no financial skills? Let Robot make money for you. https://riviello.es/promo', '2022-08-27 02:35:10', '2022-08-27 02:35:10'),
(932, 'CrytoLEari', 'mubarakkuwait@hotmail.com', 89031617350, 'The best online job for retirees. Make your old ages rich.', 'No need to stay awake all night long to earn money. Launch the robot. https://riviello.es/promo', '2022-08-27 22:21:04', '2022-08-27 22:21:04'),
(933, 'CrytoLEari', 'bubba6685@hotmail.com', 89038635237, 'Financial Robot is #1 investment tool ever. Launch it!', 'Make your laptop a financial instrument with this program. https://riviello.es/promo', '2022-08-28 15:07:33', '2022-08-28 15:07:33'),
(934, 'CrytoLEari', 'andretorond@gmail.com', 89037999272, 'Need money? Get it here easily?', 'Make money, not war! Financial Robot is what you need. https://riviello.es/promo', '2022-08-28 17:09:39', '2022-08-28 17:09:39'),
(935, 'CrytoLEari', 'satara.manoj@podar.org', 89032615091, 'Make money in the internet using this Bot. It really works!', 'Let the Robot bring you money while you rest. https://riviello.es/promo', '2022-08-28 19:12:14', '2022-08-28 19:12:14'),
(936, 'CrytoLEari', 'malikt_masr@hotmail.com', 89032565860, 'Try out the automatic robot to keep earning all day long.', 'Feel free to buy everything you want with the additional income. https://riviello.es/promo', '2022-08-28 21:19:50', '2022-08-28 21:19:50'),
(937, 'CrytoLEari', 'michaelbokonich@yahoo.com', 89034892029, 'Everyone can earn as much as he wants suing this Bot.', 'Your money keep grow 24/7 if you use the financial Robot. https://riviello.es/promo', '2022-08-28 23:23:07', '2022-08-28 23:23:07'),
(938, 'CrytoLEari', 'nettz.t_x@hotnail.com', 89036427542, 'Small investments can bring tons of dollars fast.', 'Make money, not war! Financial Robot is what you need. https://riviello.es/promo', '2022-08-29 01:25:33', '2022-08-29 01:25:33'),
(939, 'CrytoLEari', 'aleenasays@yahoo.com', 89030723014, 'Looking forward for income? Get it online.', 'Trust the financial Bot to become rich. https://riviello.es/promo', '2022-08-29 03:28:18', '2022-08-29 03:28:18'),
(940, 'CrytoLEari', 'saravivares@hotmail.com', 89039068991, 'We have found the fastest way to be rich. Find it out here.', 'Watch your money grow while you invest with the Robot. https://riviello.es/promo', '2022-08-29 05:32:33', '2022-08-29 05:32:33'),
(941, 'CrytoLEari', 'nellalynnartist@gmail.com', 89030817308, 'Online earnings are the easiest way for financial independence.', 'This robot can bring you money 24/7. https://riviello.es/promo', '2022-08-29 07:35:26', '2022-08-29 07:35:26'),
(942, 'CrytoLEari', 'patumiwa15@yahoo.com', 89036334865, 'Just one click can turn you dollar into $1000.', 'Online earnings are the easiest way for financial independence. https://riviello.es/promo', '2022-08-29 09:38:31', '2022-08-29 09:38:31'),
(943, 'CrytoLEari', 'donb922@yahoo.com', 89032044887, 'Earn additional money without efforts.', 'The online income is the easiest ways to make you dream come true. https://riviello.es/promo', '2022-08-29 11:42:45', '2022-08-29 11:42:45'),
(944, 'CrytoLEari', 'smiley65@optimum.net', 89037367282, 'Start your online work using the financial Robot.', 'The best online investment tool is found. Learn more! https://riviello.es/promo', '2022-08-29 13:49:22', '2022-08-29 13:49:22'),
(945, 'CrytoLEari', 'sk8er42014@yahoo.com', 89035251626, 'Make thousands every week working online here.', 'Provide your family with the money in age. Launch the Robot! https://riviello.es/promo', '2022-08-29 15:53:19', '2022-08-29 15:53:19'),
(946, 'CrytoLEari', 'slbriggs80@yahoo.com', 89031174944, 'Have no money? It’s easy to earn them online here.', 'Check out the new financial tool, which can make you rich. https://riviello.es/promo', '2022-08-29 17:57:42', '2022-08-29 17:57:42'),
(947, 'CrytoLEari', 'timsmith_94087@yahoo.com', 89037943451, 'Launch the robot and let it bring you money.', 'Attention! Financial robot may bring you millions! https://riviello.es/promo', '2022-08-29 20:01:13', '2022-08-29 20:01:13'),
(948, 'CrytoLEari', 'rosievictoria1996@gmail.com', 89037598179, 'Need money? Get it here easily! Just press this to launch the robot.', 'Make your computer to be you earning instrument. https://riviello.es/promo', '2022-08-29 22:08:28', '2022-08-29 22:08:28'),
(949, 'CrytoLEari', 'maroncelli@comcast.net', 89034582995, 'Robot never sleeps. It makes money for you 24/7.', 'Start making thousands of dollars every week just using this robot. https://riviello.es/promo', '2022-08-30 00:15:54', '2022-08-30 00:15:54'),
(950, 'CrytoLEari', 'bgilmantas@yahoo.com', 89037231567, 'We have found the fastest way to be rich. Find it out here.', 'No need to worry about the future if your use this financial robot. https://riviello.es/promo', '2022-08-30 02:20:39', '2022-08-30 02:20:39'),
(951, 'CrytoLEari', 'thegold12v@sayclub.com', 89030362025, 'There is no need to look for a job anymore. Work online.', 'Buy everything you want earning money online. https://riviello.es/promo', '2022-08-30 04:23:28', '2022-08-30 04:23:28'),
(952, 'CrytoLEari', 'backpackinggear@gmail.com', 89031517739, 'No worries if you are fired. Work online.', 'Check out the new financial tool, which can make you rich. https://riviello.es/promo', '2022-08-30 06:26:33', '2022-08-30 06:26:33'),
(953, 'CrytoLEari', 'destinynefx@gmail.com', 89034955755, 'Make yourself rich in future using this financial robot.', 'Try out the automatic robot to keep earning all day long. https://riviello.es/promo', '2022-08-30 08:31:30', '2022-08-30 08:31:30'),
(954, 'CrytoLEari', 'kiwi305c@yahoo.com', 89030628320, 'Make yourself rich in future using this financial robot.', 'Robot never sleeps. It makes money for you 24/7. https://riviello.es/promo', '2022-08-30 10:33:54', '2022-08-30 10:33:54'),
(955, 'CrytoLEari', 'luisgarciahawm@gmail.com', 89030314003, 'No need to work anymore while you have the Robot launched!', 'Earning $1000 a day is easy if you use this financial Robot. https://riviello.es/promo', '2022-08-30 12:41:31', '2022-08-30 12:41:31'),
(956, 'CrytoLEari', 'pubudu_dasanayake@yahoo.com', 89030382072, 'Make your money work for you all day long.', 'The huge income without investments is available. http://go.tazalus.com/0j0l', '2022-08-30 14:41:59', '2022-08-30 14:41:59'),
(957, 'CrytoLEari', 'ceciliaruthie@gmail.com', 89033335184, 'The additional income is available for everyone using this robot.', 'Make money 24/7 without any efforts and skills. http://go.tazalus.com/0j0l', '2022-08-30 16:46:55', '2022-08-30 16:46:55'),
(958, 'CrytoLEari', 'clare-fraser@hotmail.com', 89033565452, 'Financial robot is the best companion of rich people.', 'Your money work even when you sleep. http://go.tazalus.com/0j0l', '2022-08-30 18:48:22', '2022-08-30 18:48:22'),
(959, 'CrytoLEari', 'garydpetit@comcast.net', 89033340885, 'Invest $1 today to make $1000 tomorrow.', 'No worries if you are fired. Work online. http://go.tazalus.com/0j0l', '2022-08-30 20:52:13', '2022-08-30 20:52:13'),
(960, 'CrytoLEari', 'josepina.duque@yahoo.com', 89035177887, 'Learn how to make hundreds of backs each day.', 'Launch the best investment instrument to start making money today. http://go.tazalus.com/0j0l', '2022-08-30 22:55:41', '2022-08-30 22:55:41'),
(961, 'CrytoLEari', 'bakerje_123@yahoo.com', 89037446351, 'Invest $1 today to make $1000 tomorrow.', 'Make yourself rich in future using this financial robot. http://go.tazalus.com/0j0l', '2022-08-31 00:58:00', '2022-08-31 00:58:00'),
(962, 'CrytoLEari', 'onecrazybmxrider@hotmail.com', 89030210478, 'Looking for an easy way to make money? Check out the financial robot.', 'Need money? Get it here easily! Just press this to launch the robot. http://go.tazalus.com/0j0l', '2022-08-31 02:59:58', '2022-08-31 02:59:58'),
(963, 'CrytoLEari', 'osge__41@hotmail.com', 89034292225, 'Even a child knows how to make $100 today with the help of this robot.', 'Financial robot is a great way to manage and increase your income. http://go.tazalus.com/0j0l', '2022-08-31 05:02:13', '2022-08-31 05:02:13'),
(964, 'CrytoLEari', 'beckyuber@gmail.com', 89036028052, 'Find out about the easiest way of money earning.', 'Learn how to make hundreds of backs each day. http://go.tazalus.com/0j0l', '2022-08-31 07:05:11', '2022-08-31 07:05:11'),
(965, 'CrytoLEari', 'tommy_horan@yahoo.com', 89038877232, 'Additional income is now available for anyone all around the world.', 'Need money? Earn it without leaving your home. http://go.tazalus.com/0j0l', '2022-08-31 09:07:25', '2022-08-31 09:07:25'),
(966, 'CrytoLEari', 'beechbratz@yahoo.com', 89034906622, 'Trust your dollar to the Robot and see how it grows to $100.', 'We know how to increase your financial stability. http://go.tazalus.com/0j0l', '2022-08-31 11:09:35', '2022-08-31 11:09:35'),
(967, 'CrytoLEari', 'yytr548@aol.com', 89037915000, 'Let the financial Robot be your companion in the financial market.', 'Need money? The financial robot is your solution. http://go.tazalus.com/0j0l', '2022-08-31 13:14:11', '2022-08-31 13:14:11'),
(968, 'CrytoLEari', 'reddys@gmx.com', 89031555249, 'Earning $1000 a day is easy if you use this financial Robot.', 'Financial robot is the best companion of rich people. http://go.tazalus.com/0j0l', '2022-08-31 15:17:23', '2022-08-31 15:17:23'),
(969, 'CrytoLEari', 'TANBROS@SBCGLOBAL.NET', 89034575617, 'Even a child knows how to make money. Do you?', 'Automatic robot is the best start for financial independence. http://go.tazalus.com/0j0l', '2022-09-02 17:51:16', '2022-09-02 17:51:16'),
(970, 'CrytoLEari', 'trulpkilt@hotmail.com', 89034296443, 'Online job can be really effective if you use this Robot.', 'Financial robot guarantees everyone stability and income. http://go.tazalus.com/0j0l', '2022-09-02 19:55:10', '2022-09-02 19:55:10'),
(971, 'CrytoLEari', 'kira1xee@yahoo.com', 89037089374, 'No need to stay awake all night long to earn money. Launch the robot.', 'Still not a millionaire? The financial robot will make you him! http://go.tazalus.com/0j0l', '2022-09-02 22:01:46', '2022-09-02 22:01:46'),
(972, 'CrytoLEari', 'thomashoback@hotmail.com', 89036408710, 'Your money work even when you sleep.', 'Every your dollar can turn into $100 after you lunch this Robot. http://go.tazalus.com/0j0l', '2022-09-03 00:05:41', '2022-09-03 00:05:41'),
(973, 'CrytoLEari', 'sdivyarao@yahoo.com', 89038731963, 'See how Robot makes $1000 from $1 of investment.', 'The best online investment tool is found. Learn more! http://go.tazalus.com/0j0l', '2022-09-03 02:10:24', '2022-09-03 02:10:24'),
(974, 'CrytoLEari', 'jueery1175suin1@outlook.com', 89036223556, 'Make dollars staying at home and launched this Bot.', 'Provide your family with the money in age. Launch the Robot! http://go.tazalus.com/0j0l', '2022-09-03 04:14:45', '2022-09-03 04:14:45'),
(975, 'CrytoLEari', 'dgg2828@hotmail.com', 89034529255, 'The online income is the easiest ways to make you dream come true.', 'We know how to become rich and do you? http://go.tazalus.com/0j0l', '2022-09-03 06:19:54', '2022-09-03 06:19:54'),
(976, 'CrytoLEari', 'hilgalj777@gmail.com', 89030282309, 'Everyone can earn as much as he wants now.', 'The financial Robot works for you even when you sleep. http://go.tazalus.com/0j0l', '2022-09-03 08:26:04', '2022-09-03 08:26:04'),
(977, 'CrytoLEari', 'kazyevra@yahoo.com', 89032314339, 'Small investments can bring tons of dollars fast.', 'The online income is the easiest ways to make you dream come true. http://go.tazalus.com/0j0l', '2022-09-03 10:32:52', '2022-09-03 10:32:52'),
(978, 'CrytoLEari', 'lindsey_ellicott01@yahoo.com', 89036658832, 'Check out the automatic Bot, which works for you 24/7.', 'One click of the robot can bring you thousands of bucks. http://go.tazalus.com/0j0l', '2022-09-03 12:56:07', '2022-09-03 12:56:07'),
(979, 'CrytoLEari', 'anewton75@gmail.com', 89038503147, 'See how Robot makes $1000 from $1 of investment.', 'Make money, not war! Financial Robot is what you need. http://go.tazalus.com/0j0l', '2022-09-03 15:00:05', '2022-09-03 15:00:05');
INSERT INTO `txn_contact_us` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(980, 'CrytoLEari', 'heidi_sandoval@hotmail.com', 89039952391, 'Launch the best investment instrument to start making money today.', 'The best way for everyone who rushes for financial independence. http://go.tazalus.com/0j0l', '2022-09-03 17:05:41', '2022-09-03 17:05:41'),
(981, 'CrytoLEari', 'gothchicthechurch@yahoo.com', 89030839709, 'It is the best time to launch the Robot to get more money.', 'Trust the financial Bot to become rich. http://go.tazalus.com/0j0l', '2022-09-03 19:10:36', '2022-09-03 19:10:36'),
(982, 'CrytoLEari', 'azis_cheking09@yahoo.com', 89037564235, 'Have no financial skills? Let Robot make money for you.', 'Find out about the fastest way for a financial independence. http://go.tazalus.com/0j0l', '2022-09-03 21:14:18', '2022-09-03 21:14:18'),
(983, 'CrytoLEari', 'msujcbw@aol.com', 89036518375, 'Have no money? It’s easy to earn them online here.', 'Financial robot is a great way to manage and increase your income. http://go.tazalus.com/0j0l', '2022-09-03 23:18:18', '2022-09-03 23:18:18'),
(984, 'CrytoLEari', 'duhnahzmadre@aol.com', 89035859336, 'Automatic robot is the best start for financial independence.', 'Looking for additional money? Try out the best financial instrument. http://go.tazalus.com/0j0l', '2022-09-04 01:20:59', '2022-09-04 01:20:59'),
(985, 'CrytoLEari', 'iaorfsn355@aol.com', 89036566069, 'Online earnings are the easiest way for financial independence.', 'Let the financial Robot be your companion in the financial market. http://go.tazalus.com/0j0l', '2022-09-04 03:25:35', '2022-09-04 03:25:35'),
(986, 'CrytoLEari', 'Amari.hollins@gmail.com', 89039896808, 'Robot is the best way for everyone who looks for financial independence.', 'Financial robot guarantees everyone stability and income. http://go.tazalus.com/0j0l', '2022-09-04 05:28:22', '2022-09-04 05:28:22'),
(987, 'CrytoLEari', 'PRPam9@hotmail.com', 89038927032, 'Even a child knows how to make $100 today with the help of this robot.', 'Financial independence is what everyone needs. http://go.tazalus.com/0j0l', '2022-09-04 07:29:47', '2022-09-04 07:29:47'),
(988, 'CrytoLEari', 'Skierosewoods@yahoo.com', 89030158683, 'Make dollars staying at home and launched this Bot.', 'Check out the new financial tool, which can make you rich. http://go.tazalus.com/0j0l', '2022-09-04 09:31:37', '2022-09-04 09:31:37'),
(989, 'CrytoLEari', 'axo.p.wkr.fs@gmail.com', 89037186969, 'Robot is the best way for everyone who looks for financial independence.', 'Start making thousands of dollars every week just using this robot. http://go.tazalus.com/0j0l', '2022-09-04 11:39:27', '2022-09-04 11:39:27'),
(990, 'CrytoLEari', 'molto@goo.com', 89033880873, 'Check out the newest way to make a fantastic profit.', 'Make money, not war! Financial Robot is what you need. http://go.tazalus.com/0j0l', '2022-09-04 13:42:49', '2022-09-04 13:42:49'),
(991, 'CrytoLEari', 'kevin.yeager14@gmail.com', 89034698106, 'Making money is very easy if you use the financial Robot.', 'Make your computer to be you earning instrument. http://go.tygyguip.com/096s', '2022-09-04 15:45:57', '2022-09-04 15:45:57'),
(992, 'CrytoLEari', 'lograrmetas@yahoo.com', 89035991665, 'No need to work anymore. Just launch the robot.', 'The online income is the easiest ways to make you dream come true. http://go.tygyguip.com/096s', '2022-09-04 17:52:38', '2022-09-04 17:52:38'),
(993, 'CrytoLEari', 'saamaanthaaxoxo@gmail.com', 89034697614, 'Need money? Get it here easily! Just press this to launch the robot.', 'Making money is very easy if you use the financial Robot. http://go.tygyguip.com/096s', '2022-09-04 19:55:11', '2022-09-04 19:55:11'),
(994, 'CrytoLEari', 'boonermp@msn.com', 89037194950, 'Most successful people already use Robot. Do you?', 'Let the financial Robot be your companion in the financial market. http://go.tygyguip.com/096s', '2022-09-04 21:57:39', '2022-09-04 21:57:39'),
(995, 'CrytoLEari', 'sue_fi@redinbox.org', 89033124883, 'Try out the automatic robot to keep earning all day long.', 'One click of the robot can bring you thousands of bucks. https://emdn.cl/promo', '2022-09-05 00:00:10', '2022-09-05 00:00:10'),
(996, 'CrytoLEari', 'mrtc3000@yahoo.com', 89039984304, 'The financial Robot is your future wealth and independence.', 'No need to worry about the future if your use this financial robot. https://emdn.cl/promo', '2022-09-05 02:05:03', '2022-09-05 02:05:03'),
(997, 'CrytoLEari', 'syfly@msn.com', 89032468465, 'Still not a millionaire? Fix it now!', 'Online Bot will bring you wealth and satisfaction. https://emdn.cl/promo', '2022-09-05 04:12:19', '2022-09-05 04:12:19'),
(998, 'CrytoLEari', 'meshga9_007@yahoo.com', 89033417962, 'Your money keep grow 24/7 if you use the financial Robot.', 'No need to work anymore. Just launch the robot. https://emdn.cl/promo', '2022-09-05 06:13:47', '2022-09-05 06:13:47'),
(999, 'CrytoLEari', 'sinfullyvixen13@live.com', 89038573794, 'Trust the financial Bot to become rich.', 'Have no money? Earn it online. https://emdn.cl/promo', '2022-09-05 08:35:06', '2022-09-05 08:35:06'),
(1000, 'CrytoLEari', 'ladi_oven@hotmail.com', 89038058350, 'Using this Robot is the best way to make you rich.', 'Need cash? Launch this robot and see what it can. https://emdn.cl/promo', '2022-09-05 10:38:14', '2022-09-05 10:38:14'),
(1001, 'CrytoLEari', 'zuozhan19822004@yahoo.com', 89035467280, 'Make money in the internet using this Bot. It really works!', 'Even a child knows how to make money. Do you? https://emdn.cl/promo', '2022-09-05 12:40:50', '2022-09-05 12:40:50'),
(1002, 'CrytoLEari', 'dark_lady_04@yahoo.com', 89036903993, 'The additional income for everyone.', 'Make money, not war! Financial Robot is what you need. https://emdn.cl/promo', '2022-09-05 14:45:58', '2022-09-05 14:45:58'),
(1003, 'CrytoLEari', 'skyluvzzyou@yahoo.com', 89039526339, 'Financial independence is what everyone needs.', 'Making money is very easy if you use the financial Robot. https://emdn.cl/promo', '2022-09-05 16:48:07', '2022-09-05 16:48:07'),
(1004, 'CrytoLEari', 'xlilmizzlyssx@aol.com', 89030864402, 'We know how to increase your financial stability.', 'Let the Robot bring you money while you rest. https://tiendaskon.com.es/promo', '2022-09-05 18:52:31', '2022-09-05 18:52:31'),
(1005, 'CrytoLEari', 'cihan07@hotmail.com', 89031743115, 'Make money in the internet using this Bot. It really works!', 'Only one click can grow up your money really fast. https://tiendaskon.com.es/promo', '2022-09-05 20:57:15', '2022-09-05 20:57:15'),
(1006, 'CrytoLEari', 'karmasfate@yahoo.com', 89032506853, 'Make money 24/7 without any efforts and skills.', 'Try out the best financial robot in the Internet. https://tiendaskon.com.es/promo', '2022-09-05 23:00:32', '2022-09-05 23:00:32'),
(1007, 'CrytoLEari', 'MAGITTA@YAHOO.COM', 89031832435, 'Need money? Earn it without leaving your home.', 'Financial robot keeps bringing you money while you sleep. https://tiendaskon.com.es/promo', '2022-09-06 01:03:24', '2022-09-06 01:03:24'),
(1008, 'CrytoLEari', 'angelina.lipman@gmail.com', 89032616392, 'Automatic robot is the best start for financial independence.', 'Still not a millionaire? Fix it now! https://tiendaskon.com.es/promo', '2022-09-06 03:27:53', '2022-09-06 03:27:53'),
(1009, 'CrytoLEari', 'frainemike@yahoo.com', 89030013806, 'Everyone can earn as much as he wants suing this Bot.', 'Make your computer to be you earning instrument. https://tiendaskon.com.es/promo', '2022-09-06 05:30:28', '2022-09-06 05:30:28'),
(1010, 'CrytoLEari', 'bchannell09@verizon.net', 89033688532, 'We know how to increase your financial stability.', 'Just one click can turn you dollar into $1000. https://tiendaskon.com.es/promo', '2022-09-06 07:33:48', '2022-09-06 07:33:48'),
(1011, 'CrytoLEari', 'roger.bernal7@gmail.com', 89037366803, 'Wow! This is a fastest way for a financial independence.', 'Wow! This Robot is a great start for an online career. https://tiendaskon.com.es/promo', '2022-09-06 09:37:36', '2022-09-06 09:37:36'),
(1012, 'CrytoLEari', 'smashley62487@yahoo.com', 89038353386, 'See how Robot makes $1000 from $1 of investment.', 'Need money? Get it here easily? https://tiendaskon.com.es/promo', '2022-09-06 11:41:06', '2022-09-06 11:41:06'),
(1013, 'CrytoLEari', 'vfstib@aol.com', 89032904412, 'Check out the newest way to make a fantastic profit.', 'Need some more money? Robot will earn them really fast. https://tiendaskon.com.es/promo', '2022-09-06 13:45:49', '2022-09-06 13:45:49'),
(1014, 'CrytoLEari', 'underdog718@msn.com', 89031681051, 'Make yourself rich in future using this financial robot.', 'Start making thousands of dollars every week. https://tiendaskon.com.es/promo', '2022-09-06 15:48:36', '2022-09-06 15:48:36'),
(1015, 'CrytoLEari', 'nadia.aukburally@diageo.com', 89035141825, 'Making money is very easy if you use the financial Robot.', 'We know how to become rich and do you? https://hierbalimon.es/promo', '2022-09-06 17:51:03', '2022-09-06 17:51:03'),
(1016, 'CrytoLEari', 'bensavage@hotmail.com', 89039785378, 'Need money? Earn it without leaving your home.', 'The online financial Robot is your key to success. https://hierbalimon.es/promo', '2022-09-06 19:54:22', '2022-09-06 19:54:22'),
(1017, 'CrytoLEari', 'ALS13@SBCGLOBAL.NET', 89032833051, 'Looking forward for income? Get it online.', 'Small investments can bring tons of dollars fast. https://hierbalimon.es/promo', '2022-09-06 21:57:58', '2022-09-06 21:57:58'),
(1018, 'CrytoLEari', 'lovemask95@yahoo.com', 89035485188, 'Online earnings are the easiest way for financial independence.', 'Your money work even when you sleep. https://hierbalimon.es/promo', '2022-09-06 23:59:56', '2022-09-06 23:59:56'),
(1019, 'CrytoLEari', 'nslupski@cdeducation.org', 89035422580, 'Earning money in the Internet is easy if you use Robot.', 'Buy everything you want earning money online. https://hierbalimon.es/promo', '2022-09-07 02:01:51', '2022-09-07 02:01:51'),
(1020, 'CrytoLEari', 'g.i.k.o.pn.utet@gmail.com', 89039451154, 'Have no financial skills? Let Robot make money for you.', 'The financial Robot is the most effective financial tool in the net! https://hierbalimon.es/promo', '2022-09-07 04:04:33', '2022-09-07 04:04:33'),
(1021, 'CrytoLEari', 'jctru2@hotmail.com', 89034309684, 'The huge income without investments is available.', 'Money, money! Make more money with financial robot! https://hierbalimon.es/promo', '2022-09-07 05:55:44', '2022-09-07 05:55:44'),
(1022, 'CrytoLEari', 'gabrielarinofraga@gmail.com', 89032980103, 'Make dollars staying at home and launched this Bot.', 'Join the society of successful people who make money here. https://hierbalimon.es/promo', '2022-09-07 07:59:15', '2022-09-07 07:59:15'),
(1023, 'CrytoLEari', 'caitlinmccahill@gmail.com', 89036975290, 'Launch the best investment instrument to start making money today.', 'Find out about the fastest way for a financial independence. https://hierbalimon.es/promo', '2022-09-07 10:01:57', '2022-09-07 10:01:57'),
(1024, 'CrytoLEari', 'brett.seawell@gmail.com', 89032931769, 'Most successful people already use Robot. Do you?', 'Start your online work using the financial Robot. https://hierbalimon.es/promo', '2022-09-07 12:04:37', '2022-09-07 12:04:37'),
(1025, 'CrytoLEari', 'SheCLASH@aol.com', 89037820724, 'Learn how to make hundreds of backs each day.', 'Watch your money grow while you invest with the Robot. https://hierbalimon.es/promo', '2022-09-07 14:10:25', '2022-09-07 14:10:25'),
(1026, 'CrytoLEari', 'evergreenfininspot@hotmail.com', 89036516424, 'Looking for an easy way to make money? Check out the financial robot.', 'Need some more money? Robot will earn them really fast. https://bodyandsoul.com.es/promo', '2022-09-07 16:15:13', '2022-09-07 16:15:13'),
(1027, 'CrytoLEari', 'bige_1212@yahoo.com', 89030250526, 'Earn additional money without efforts.', 'Earning $1000 a day is easy if you use this financial Robot. https://bodyandsoul.com.es/promo', '2022-09-07 18:24:34', '2022-09-07 18:24:34'),
(1028, 'CrytoLEari', 'tzonglee@hotmail.com', 89034706475, 'One click of the robot can bring you thousands of bucks.', 'Automatic robot is the best start for financial independence. https://bodyandsoul.com.es/promo', '2022-09-07 20:29:10', '2022-09-07 20:29:10'),
(1029, 'CrytoLEari', 'artaly.is.artsy@gmail.com', 89035388979, 'The huge income without investments is available, now!', 'Financial independence is what this robot guarantees. https://bodyandsoul.com.es/promo', '2022-09-07 22:32:32', '2022-09-07 22:32:32'),
(1030, 'CrytoLEari', 'm.a.rr.ya.licea.n.n0.1@gmail.com', 89034309304, 'Making money can be extremely easy if you use this Robot.', 'The best online investment tool is found. Learn more! https://bodyandsoul.com.es/promo', '2022-09-08 00:36:42', '2022-09-08 00:36:42'),
(1031, 'CrytoLEari', 'kobijack11@yahoo.com', 89030513993, 'Need money? Earn it without leaving your home.', 'Launch the financial Bot now to start earning. https://bodyandsoul.com.es/promo', '2022-09-08 02:43:47', '2022-09-08 02:43:47'),
(1032, 'CrytoLEari', 'myongsoo284@hotmail.com', 89037879167, 'The online financial Robot is your key to success.', 'Your money work even when you sleep. https://bodyandsoul.com.es/promo', '2022-09-08 04:50:16', '2022-09-08 04:50:16'),
(1033, 'CrytoLEari', 'klybaby43@yahoo.com', 89032965203, 'The huge income without investments is available, now!', 'Your money keep grow 24/7 if you use the financial Robot. https://bodyandsoul.com.es/promo', '2022-09-08 06:54:18', '2022-09-08 06:54:18'),
(1034, 'CrytoLEari', 'jnbb222001@yahoo.com', 89034824047, 'Find out about the easiest way of money earning.', 'Make money, not war! Financial Robot is what you need. https://bodyandsoul.com.es/promo', '2022-09-08 08:57:30', '2022-09-08 08:57:30'),
(1035, 'CrytoLEari', 'ttony169@yahoo.com', 89032732912, 'Small investments can bring tons of dollars fast.', 'Your money work even when you sleep. https://bodyandsoul.com.es/promo', '2022-09-08 11:04:10', '2022-09-08 11:04:10'),
(1036, 'CrytoLEari', 'gu-not-za@hotmail.com', 89031946568, 'Check out the newest way to make a fantastic profit.', 'Launch the financial Bot now to start earning. https://bodyandsoul.com.es/promo', '2022-09-08 13:09:03', '2022-09-08 13:09:03'),
(1037, 'CrytoLEari', 'Cappellam101@aim.com', 89031221439, 'The online financial Robot is your key to success.', 'Launch the financial Robot and do your business. https://puertobelenn.cl/promo', '2022-09-08 15:14:48', '2022-09-08 15:14:48'),
(1038, 'CrytoLEari', 'potts1535@netscape.net', 89033166100, 'Have no money? Earn it online.', 'Everyone can earn as much as he wants suing this Bot. https://puertobelenn.cl/promo', '2022-09-08 17:21:18', '2022-09-08 17:21:18'),
(1039, 'CrytoLEari', 'raimundo@comcast.net', 89038193667, 'Launch the best investment instrument to start making money today.', 'No worries if you are fired. Work online. https://puertobelenn.cl/promo', '2022-09-08 19:28:24', '2022-09-08 19:28:24'),
(1040, 'CrytoLEari', 'weezybell@yahoo.com', 89030179682, 'Rich people are rich because they use this robot.', 'Even a child knows how to make $100 today with the help of this robot. https://www.pntrac.com/t/TUJGRkhOSkJGSEhMSElCRkpHSkpM?url=https%3A%2F%2Fpuertobelenn.cl%2Fpromo&sid=lh_fd00bn', '2022-09-08 21:35:29', '2022-09-08 21:35:29'),
(1041, 'CrytoLEari', 'melissabarron18@yahoo.com', 89030321869, 'Watch your money grow while you invest with the Robot.', 'Your computer can bring you additional income if you use this Robot. http://tensmusclestimulators.com/buy.php?url=https://puertobelenn.cl/promo', '2022-09-08 23:43:23', '2022-09-08 23:43:23'),
(1042, 'CrytoLEari', 'michele_mara@hotmail.com', 89030262615, 'Check out the automatic Bot, which works for you 24/7.', 'This robot will help you to make hundreds of dollars each day. http://mikuchanarena.jp/blog/areana?wptouch_switch=mobile&redirect=https%3A%2F%2Fpuertobelenn.cl%2Fpromo', '2022-09-09 00:59:16', '2022-09-09 00:59:16'),
(1043, 'CrytoLEari', 'kmorin@woh.rr.com', 89035723128, 'The best online job for retirees. Make your old ages rich.', 'Make thousands of bucks. Pay nothing. http://blog.cgodard.com/?wptouch_switch=desktop&redirect=https%3A%2F%2Fpuertobelenn.cl%2Fpromo', '2022-09-09 03:05:35', '2022-09-09 03:05:35'),
(1044, 'CrytoLEari', 'todd.martin@stokes.k12.nc.us', 89033704485, 'Make $1000 from $1 in a few minutes. Launch the financial robot now.', 'Wow! This Robot is a great start for an online career. http://wp.akatsuki.me/?wptouch_switch=desktop&redirect=https%3A%2F%2Fpuertobelenn.cl%2Fpromo', '2022-09-09 05:11:26', '2022-09-09 05:11:26'),
(1045, 'CrytoLEari', 'j_e_r1@hotmail.com', 89033128416, 'See how Robot makes $1000 from $1 of investment.', 'Earn additional money without efforts. http://d-click.fiemg.com.br/u/18081/131/75411/137_0/82cb7/?url=https://puertobelenn.cl/promo', '2022-09-09 07:17:14', '2022-09-09 07:17:14'),
(1046, 'CrytoLEari', 'cedricdi7@yahoo.com', 89032854189, 'No need to worry about the future if your use this financial robot.', 'The financial Robot is the most effective financial tool in the net! http://sportin.me/Account/ChangeCulture?lang=en&returnUrl=https%3A%2F%2Fpuertobelenn.cl%2Fpromo', '2022-09-09 09:24:02', '2022-09-09 09:24:02'),
(1047, 'CrytoLEari', 'mdoherty1990@hotmail.com', 89035594407, 'Try out the automatic robot to keep earning all day long.', 'Launch the robot and let it bring you money. http://ilyamargulis.ru/go?https://puertobelenn.cl/promo', '2022-09-09 11:26:59', '2022-09-09 11:26:59'),
(1048, 'CrytoLEari', 'maurice.bellinger25@hotmail.com', 89034525482, 'Looking for additional money? Try out the best financial instrument.', 'Have no financial skills? Let Robot make money for you. http://www.topdog.lt/bitrix/redirect.php?event1=&event2=&event3=&goto=https://puertobelenn.cl/promo', '2022-09-09 13:29:47', '2022-09-09 13:29:47'),
(1049, 'CrytoLEari', 'h.truong66@yahoo.com', 89038547491, 'Make your money work for you all day long.', 'Still not a millionaire? Fix it now! http://www.fondear.org/Boats/IraPagina.asp?Direccion=puertobelenn.cl%2Fpromo', '2022-09-09 15:35:14', '2022-09-09 15:35:14'),
(1050, 'CrytoLEari', 'bowlin@yahoo.com', 89036413503, 'Check out the new financial tool, which can make you rich.', 'Make $1000 from $1 in a few minutes. Launch the financial robot now. http://uv.fausac.gt/uv/main/link/link_goto.php?cidreq=labapliis2017&id_session=0&gidreq=0&link_id=2&link_url=https://puertobelenn.cl/promo', '2022-09-09 17:39:42', '2022-09-09 17:39:42'),
(1051, 'CrytoLEari', 'kerry61ratliff@aol.com', 89034442810, 'Everyone can earn as much as he wants now.', 'Most successful people already use Robot. Do you? http://so-ko.info/links/rank.php?url=https://puertobelenn.cl/promo', '2022-09-09 19:44:07', '2022-09-09 19:44:07'),
(1052, 'CrytoLEari', 'oraduxob@satabmail.com', 89036527873, 'Just one click can turn you dollar into $1000.', 'Turn $1 into $100 instantly. Use the financial Robot. https://ad2.trafficgate.net/t/r/416/956/281642_350895/0/-/https://puertobelenn.cl/promo', '2022-09-09 23:51:49', '2022-09-09 23:51:49'),
(1053, 'CrytoLEari', 'EyashaBoozer@yahoo.com', 89039407643, 'Check out the new financial tool, which can make you rich.', 'The success formula is found. Learn more about it. https://quehacerensantiago.cl/promo', '2022-09-10 01:55:36', '2022-09-10 01:55:36'),
(1054, 'CrytoLEari', 'dirteyridin@yahoo.com', 89030173586, 'Earning money in the Internet is easy if you use Robot.', 'Launch the robot and let it bring you money. https://quehacerensantiago.cl/promo', '2022-09-10 03:56:47', '2022-09-10 03:56:47'),
(1055, 'CrytoLEari', 'autuwagnerbe@yahoo.com', 89039749295, 'We have found the fastest way to be rich. Find it out here.', 'Robot never sleeps. It makes money for you 24/7. https://quehacerensantiago.cl/promo', '2022-09-10 05:57:41', '2022-09-10 05:57:41'),
(1056, 'CrytoLEari', 'aphroditejig372@aol.com', 89031366981, 'Find out about the fastest way for a financial independence.', 'Watch your money grow while you invest with the Robot. https://quehacerensantiago.cl/promo', '2022-09-10 07:59:41', '2022-09-10 07:59:41'),
(1057, 'CrytoLEari', 'dincertimr@gmail.com', 89035188195, 'Financial robot is a great way to manage and increase your income.', 'Even a child knows how to make $100 today with the help of this robot. https://quehacerensantiago.cl/promo', '2022-09-10 10:01:32', '2022-09-10 10:01:32'),
(1058, 'CrytoLEari', 'cincyguy1998@yahoo.com', 89032997249, 'Make money, not war! Financial Robot is what you need.', 'Make thousands of bucks. Pay nothing. https://quehacerensantiago.cl/promo', '2022-09-10 12:04:08', '2022-09-10 12:04:08'),
(1059, 'CrytoLEari', 'mbvvma@gmail.com', 89037529045, 'Small investments can bring tons of dollars fast.', 'The financial Robot is your future wealth and independence. https://quehacerensantiago.cl/promo', '2022-09-10 14:07:03', '2022-09-10 14:07:03'),
(1060, 'CrytoLEari', 'nsaatsaki@gmail.com', 89037207744, 'Invest $1 today to make $1000 tomorrow.', 'Try out the best financial robot in the Internet. https://quehacerensantiago.cl/promo', '2022-09-10 16:10:10', '2022-09-10 16:10:10'),
(1061, 'CrytoLEari', 'beyers_jennifer@yahoo.com', 89032454032, 'Turn $1 into $100 instantly. Use the financial Robot.', 'The online job can bring you a fantastic profit. http://www.uwes-tipps.de/clickcounter.php?https://varatradgardsforening.se/promo', '2022-09-10 18:11:36', '2022-09-10 18:11:36'),
(1062, 'CrytoLEari', 'Bryanbuss7@gmail.com', 89032227201, 'Making money can be extremely easy if you use this Robot.', 'Try out the automatic robot to keep earning all day long. http://www.archijob.co.il/index/comp_website.asp?companyId=1595&website=https%3A%2F%2Fvaratradgardsforening.se%2Fpromo', '2022-09-10 20:12:25', '2022-09-10 20:12:25'),
(1063, 'CrytoLEari', 'ablessn4hire@yahoo.com', 89036767317, 'Attention! Financial robot may bring you millions!', 'Make thousands every week working online here. https://wmscripti.com/git.php?url=https://varatradgardsforening.se/promo', '2022-09-10 22:14:03', '2022-09-10 22:14:03'),
(1064, 'CrytoLEari', 'singlebychoice31@aol.com', 89038678753, 'Find out about the fastest way for a financial independence.', 'Robot never sleeps. It makes money for you 24/7. http://meltingthedragon.com/?wptouch_switch=mobile&redirect=https%3A%2F%2Fvaratradgardsforening.se%2Fpromo', '2022-09-11 00:14:56', '2022-09-11 00:14:56'),
(1065, 'CrytoLEari', 'zon_y18@hotmail.com', 89037629158, 'Trust your dollar to the Robot and see how it grows to $100.', 'This robot will help you to make hundreds of dollars each day. http://biocheck.in/main/index.php?mode=goto&sseq=4309&url=https%3A%2F%2Fvaratradgardsforening.se%2Fpromo', '2022-09-11 02:19:57', '2022-09-11 02:19:57'),
(1066, 'CrytoLEari', 'fingoglia3@yahoo.com', 89032056153, 'Invest $1 today to make $1000 tomorrow.', 'Robot is the best solution for everyone who wants to earn. https://ads.elitemate.com/adclick.php?bannerid=30&zoneid=&source=&dest=https://varatradgardsforening.se/promo', '2022-09-11 04:21:35', '2022-09-11 04:21:35'),
(1067, 'CrytoLEari', 'faisal_98@hotmail.com', 89036896250, 'No need to stay awake all night long to earn money. Launch the robot.', 'Everyone can earn as much as he wants suing this Bot. http://go.tygyguip.com/096s', '2022-09-11 06:22:43', '2022-09-11 06:22:43'),
(1068, 'CrytoLEari', 'mgluna10@aol.com', 89031562307, 'The financial Robot is the most effective financial tool in the net!', 'Making money can be extremely easy if you use this Robot. http://go.tygyguip.com/096s', '2022-09-11 08:27:48', '2022-09-11 08:27:48'),
(1069, 'CrytoLEari', 'mdiez@nyc.rr.com', 89033240907, 'Financial robot is a great way to manage and increase your income.', 'Find out about the easiest way of money earning. http://go.tygyguip.com/096s', '2022-09-11 10:31:24', '2022-09-11 10:31:24'),
(1070, 'CrytoLEari', 'easternculture99@gmail.com', 89039988413, 'Make money online, staying at home this cold winter.', 'Find out about the fastest way for a financial independence. http://go.tygyguip.com/096s', '2022-09-11 12:33:20', '2022-09-11 12:33:20'),
(1071, 'CrytoLEari', 'osteenoaruiosalie@hotmail.com', 89037704461, 'No need to work anymore. Just launch the robot.', 'We know how to make our future rich and do you? http://go.tygyguip.com/096s', '2022-09-11 14:34:15', '2022-09-11 14:34:15'),
(1072, 'CrytoLEari', 'jamespaulharmon@yahoo.com', 89039743330, 'The best way for everyone who rushes for financial independence.', 'We know how to make our future rich and do you? http://go.tygyguip.com/096s', '2022-09-11 16:35:15', '2022-09-11 16:35:15'),
(1073, 'CrytoLEari', 'iceteaqueen916@gmail.com', 89031656753, 'There is no need to look for a job anymore. Work online.', 'Make yourself rich in future using this financial robot. http://go.tygyguip.com/096s', '2022-09-11 18:40:49', '2022-09-11 18:40:49'),
(1074, 'CrytoLEari', 'ingomarmoraga@hotmail.com', 89038852312, 'Attention! Financial robot may bring you millions!', 'This robot can bring you money 24/7. http://go.tygyguip.com/096s', '2022-09-11 20:41:30', '2022-09-11 20:41:30'),
(1075, 'CrytoLEari', 'jeffalmeida@msn.com', 89035566910, 'Thousands of bucks are guaranteed if you use this robot.', 'Financial robot is a great way to manage and increase your income. http://go.tygyguip.com/096s', '2022-09-11 22:42:51', '2022-09-11 22:42:51'),
(1076, 'CrytoLEari', 'binandsinghlaishram@gmail.com', 89033651591, 'Thousands of bucks are guaranteed if you use this robot.', 'Automatic robot is the best start for financial independence. http://go.tygyguip.com/096s', '2022-09-12 00:50:49', '2022-09-12 00:50:49'),
(1077, 'CrytoLEari', 'turbojetta_1.8l@hotmail.com', 89034034081, 'Wow! This is a fastest way for a financial independence.', 'Attention! Financial robot may bring you millions! http://go.tygyguip.com/096s', '2022-09-12 02:57:12', '2022-09-12 02:57:12'),
(1078, 'CrytoLEari', 'jd.coggs@ntlworld.com', 89039532390, 'Make your money work for you all day long.', 'Money, money! Make more money with financial robot! http://go.tygyguip.com/096s', '2022-09-12 04:59:14', '2022-09-12 04:59:14'),
(1079, 'CrytoLEari', 'raimundopedro@hotmail.com', 89032308568, 'Everyone can earn as much as he wants now.', 'Making money is very easy if you use the financial Robot. http://go.tygyguip.com/096s', '2022-09-12 06:58:58', '2022-09-12 06:58:58'),
(1080, 'CrytoLEari', 'Viralpunk@gmail.com', 89037724205, 'Automatic robot is the best start for financial independence.', '# 1 financial expert in the net! Check out the new Robot. http://go.tygyguip.com/096s', '2022-09-12 09:00:16', '2022-09-12 09:00:16'),
(1081, 'CrytoLEari', 'DENISEGARCIA620@YAHOO.COM', 89034378414, 'We know how to increase your financial stability.', 'The additional income is available for everyone using this robot. http://go.tygyguip.com/096s', '2022-09-12 11:05:55', '2022-09-12 11:05:55'),
(1082, 'CrytoLEari', 'ttameyb@comcast.net', 89038202417, 'Launch the financial Robot and do your business.', 'The financial Robot is your # 1 expert of making money. http://go.tygyguip.com/096s', '2022-09-12 13:07:31', '2022-09-12 13:07:31'),
(1083, 'CrytoLEari', 'core4jesus@rocketmail.com', 89038970907, 'Make money in the internet using this Bot. It really works!', 'Everyone who needs money should try this Robot out. http://go.tygyguip.com/096s', '2022-09-12 15:07:43', '2022-09-12 15:07:43'),
(1084, 'CrytoLEari', 'infinito3144@hotmail.com', 89034303940, 'Make money 24/7 without any efforts and skills.', 'The fastest way to make your wallet thick is found. http://go.tygyguip.com/096s', '2022-09-12 17:10:01', '2022-09-12 17:10:01'),
(1085, 'CrytoLEari', 'joodiep@optonline.net', 89036316442, 'No need to work anymore. Just launch the robot.', 'We know how to become rich and do you? http://go.tygyguip.com/096s', '2022-09-12 19:12:59', '2022-09-12 19:12:59'),
(1086, 'CrytoLEari', 'rschnell2006@gmail.com', 89037919113, 'Provide your family with the money in age. Launch the Robot!', 'Financial robot keeps bringing you money while you sleep. https://allnews.elk.pl/wfdl', '2022-09-12 21:26:31', '2022-09-12 21:26:31'),
(1087, 'CrytoLEari', 'bert@webmailvillage.com', 89033849985, 'No need to work anymore while you have the Robot launched!', 'The additional income for everyone. https://allnews.elk.pl/wfdl', '2022-09-12 23:27:24', '2022-09-12 23:27:24'),
(1088, 'CrytoLEari', 'monica.davenport@yahoo.com', 89034675393, 'Make yourself rich in future using this financial robot.', 'Still not a millionaire? The financial robot will make you him! https://allnews.elk.pl/wfdl', '2022-09-13 01:30:07', '2022-09-13 01:30:07'),
(1089, 'CrytoLEari', 'ryckynho_2205@hotmail.com', 89030851557, 'Trust the financial Bot to become rich.', 'Rich people are rich because they use this robot. https://allnews.elk.pl/wfdl', '2022-09-13 03:34:26', '2022-09-13 03:34:26'),
(1090, 'CrytoLEari', 'minkb@btinternet.com', 89030946628, 'Trust the financial Bot to become rich.', 'Make dollars staying at home and launched this Bot. https://allcnews.xyz/wfdl', '2022-09-13 05:37:10', '2022-09-13 05:37:10'),
(1091, 'CrytoLEari', 'amrhota@hotmail.com', 89039992297, 'Check out the newest way to make a fantastic profit.', 'Make your computer to be you earning instrument. https://allcnews.xyz/wfdl', '2022-09-13 07:39:24', '2022-09-13 07:39:24'),
(1092, 'Philiplok', 'mordvinovmilano+atid@mail.ru', 84122237497, 'vardhrashoes.com ofeiifeodwpdeofijesdwsfeiiejokdwpdoefigjfidoksfihigjskodwsfiheghifegergsdfsregsfggr', 'vardhrashoes.com ofeiifeodwpdeofijesdwsfeiiejokdwpdoefigjfidoksfihigjskodwsfiheghifegergsdfsregsfggrgr', '2022-09-13 07:44:29', '2022-09-13 07:44:29'),
(1093, 'CrytoLEari', 'kklunk22@yahoo.com', 89032111906, 'Start your online work using the financial Robot.', 'It is the best time to launch the Robot to get more money. https://allcnews.xyz/wfdl', '2022-09-13 09:41:19', '2022-09-13 09:41:19'),
(1094, 'CrytoLEari', 'trb@mymts.net', 89038761894, 'Making money is very easy if you use the financial Robot.', 'Let the Robot bring you money while you rest. https://allcnews.xyz/wfdl', '2022-09-13 11:43:32', '2022-09-13 11:43:32'),
(1095, 'CrytoLEari', 'monkeyfanabi@aim.com', 89034619340, 'Start your online work using the financial Robot.', 'No need to work anymore while you have the Robot launched! https://allcnews.xyz/wfdl', '2022-09-13 13:46:04', '2022-09-13 13:46:04'),
(1096, 'CrytoLEari', 'irvinalleyt52@yahoo.com', 89038329338, 'Just one click can turn you dollar into $1000.', 'Start making thousands of dollars every week. https://allcnews.xyz/wfdl', '2022-09-13 16:12:09', '2022-09-13 16:12:09'),
(1097, 'CrytoLEari', 'peytonkey925@yahoo.com', 89033120369, 'Financial robot guarantees everyone stability and income.', 'The best online job for retirees. Make your old ages rich. http://go.tygyguip.com/0j35', '2022-09-13 18:22:25', '2022-09-13 18:22:25'),
(1098, 'CrytoLEari', 'rlwmdv@att.net', 89032172150, 'Find out about the fastest way for a financial independence.', 'Making money in the net is easier now. https://allcryptonnews.xyz/0j35', '2022-09-13 20:27:32', '2022-09-13 20:27:32'),
(1099, 'CrytoLEari', 'manemo2499@hotmail.com', 89038149261, 'Find out about the easiest way of money earning.', 'Looking for an easy way to make money? Check out the financial robot. https://allcryptonnews.xyz/0j35', '2022-09-13 22:33:10', '2022-09-13 22:33:10'),
(1100, 'CrytoLEari', 'pjcky1963@yahoo.com', 89039037686, 'Thousands of bucks are guaranteed if you use this robot.', 'It is the best time to launch the Robot to get more money. https://allcryptonnews.xyz/0j35', '2022-09-14 00:35:19', '2022-09-14 00:35:19'),
(1101, 'CrytoLEari', 'tailmoonshadow@ymail.com', 89034792400, 'Check out the newest way to make a fantastic profit.', 'Using this Robot is the best way to make you rich. https://allcryptonnews.xyz/0j35', '2022-09-14 03:04:26', '2022-09-14 03:04:26'),
(1102, 'CrytoLEari', 'quinteros_vanesa@hotmail.com', 89031565448, 'Start making thousands of dollars every week.', 'Find out about the fastest way for a financial independence. https://allcryptonnews.xyz/0j35', '2022-09-14 05:27:42', '2022-09-14 05:27:42'),
(1103, 'CrytoLEari', 'jenn.cross@rogers.com', 89032214558, 'Wow! This Robot is a great start for an online career.', 'Need cash? Launch this robot and see what it can. https://allcryptonnews.xyz/0j35', '2022-09-14 07:27:42', '2022-09-14 07:27:42'),
(1104, 'CrytoLEari', 'hyun770914@hotmail.com', 89039237844, 'Make thousands of bucks. Financial robot will help you to do it!', 'Find out about the easiest way of money earning. https://allcryptonnews.xyz/0j35', '2022-09-14 09:28:06', '2022-09-14 09:28:06'),
(1105, 'CrytoLEari', 'bobdelehanty@yahoo.com', 89033019218, 'Financial independence is what everyone needs.', 'Online job can be really effective if you use this Robot. https://allcryptonnews.xyz/0j35', '2022-09-14 11:30:38', '2022-09-14 11:30:38'),
(1106, 'CrytoLEari', 'fedorityoukill@gmail.com', 89030078941, 'Need some more money? Robot will earn them really fast.', 'Your computer can bring you additional income if you use this Robot. https://allcryptonnews.xyz/0j35', '2022-09-14 13:35:00', '2022-09-14 13:35:00'),
(1107, 'CrytoLEari', 'cook_smith113@live.com', 89031176117, 'Small investments can bring tons of dollars fast.', 'Everyone can earn as much as he wants suing this Bot. https://allcryptonnews.xyz/0j35', '2022-09-14 15:37:34', '2022-09-14 15:37:34'),
(1108, 'CrytoLEari', 'terrell_alyssa@yahoo.com', 89038688445, 'Check out the newest way to make a fantastic profit.', 'Everyone can earn as much as he wants suing this Bot. https://allcryptonnews.xyz/0j35', '2022-09-14 17:38:27', '2022-09-14 17:38:27'),
(1109, 'CrytoLEari', 'info@derwa.com', 89037243091, 'Try out the best financial robot in the Internet.', 'Financial Robot is #1 investment tool ever. Launch it! https://go.tygyguip.com/0j35', '2022-09-14 19:39:43', '2022-09-14 19:39:43'),
(1110, 'CrytoLEari', 'papashvili@uralweb.us', 89038662653, 'Financial independence is what this robot guarantees.', 'We know how to make our future rich and do you? https://go.tygyguip.com/0j35', '2022-09-14 21:42:05', '2022-09-14 21:42:05'),
(1111, 'CrytoLEari', 'hasithiromal@rocketmail.com', 89031873104, 'The financial Robot is the most effective financial tool in the net!', 'Automatic robot is the best start for financial independence. https://go.tygyguip.com/0j35', '2022-09-14 23:42:53', '2022-09-14 23:42:53'),
(1112, 'CrytoLEari', 'Rebeccamarydunn@gmail.com', 89030588228, 'Looking forward for income? Get it online.', 'Financial independence is what everyone needs. https://go.tygyguip.com/0j35', '2022-09-15 01:46:48', '2022-09-15 01:46:48'),
(1113, 'CrytoLEari', 'mr.aaronbeck@gmail.com', 89031508361, 'The financial Robot is your future wealth and independence.', 'We have found the fastest way to be rich. Find it out here. https://go.tygyguip.com/0j35', '2022-09-15 03:48:04', '2022-09-15 03:48:04'),
(1114, 'CrytoLEari', 'shai_mae08@yahoo.com', 89034581773, 'Need money? Get it here easily! Just press this to launch the robot.', 'Financial robot is the best companion of rich people. https://go.tygyguip.com/0j35', '2022-09-15 05:48:30', '2022-09-15 05:48:30'),
(1115, 'CrytoLEari', 'mstintheforest@msn.com', 89036911775, 'Try out the best financial robot in the Internet.', 'Check out the automatic Bot, which works for you 24/7. https://go.tygyguip.com/0j35', '2022-09-15 07:50:58', '2022-09-15 07:50:58'),
(1116, 'CrytoLEari', 'makutzer@gmail.com', 89039746953, 'Still not a millionaire? Fix it now!', 'Launch the robot and let it bring you money. https://go.tygyguip.com/0j35', '2022-09-15 10:00:20', '2022-09-15 10:00:20'),
(1117, 'CrytoLEari', 'veroaguilar_1810@hotmail.com', 89037796388, 'Check out the newest way to make a fantastic profit.', 'Financial robot is your success formula is found. Learn more about it. https://go.tygyguip.com/0j35', '2022-09-15 12:01:04', '2022-09-15 12:01:04'),
(1118, 'CrytoLEari', 'baybchar79@yahoo.com', 89034256566, 'Make thousands of bucks. Pay nothing.', 'Financial robot keeps bringing you money while you sleep. https://go.tygyguip.com/0j35', '2022-09-15 14:02:10', '2022-09-15 14:02:10'),
(1119, 'CrytoLEari', 'Noemi.pellecer@yahoo.com', 89039631553, 'Using this Robot is the best way to make you rich.', 'Thousands of bucks are guaranteed if you use this robot. https://go.tygyguip.com/0j35', '2022-09-15 16:03:04', '2022-09-15 16:03:04'),
(1120, 'CrytoLEari', 'egmjkh8gh5g@gmail.com', 89039347292, 'Most successful people already use Robot. Do you?', 'Find out about the fastest way for a financial independence. https://go.tygyguip.com/0j35', '2022-09-15 18:06:59', '2022-09-15 18:06:59'),
(1121, 'CrytoLEari', 'linda.conrad3@verizon.net', 89036125739, 'Financial Robot is #1 investment tool ever. Launch it!', 'Have no financial skills? Let Robot make money for you. https://go.tygyguip.com/0j35', '2022-09-15 20:07:21', '2022-09-15 20:07:21'),
(1122, 'CrytoLEari', 'hutzlerpin354@gmail.com', 89039982441, 'We have found the fastest way to be rich. Find it out here.', 'Let your money grow into the capital with this Robot. https://go.tygyguip.com/0j35', '2022-09-15 22:09:08', '2022-09-15 22:09:08'),
(1123, 'CrytoLEari', 'buckfalfa@gmail.com', 89034491801, 'The success formula is found. Learn more about it.', '# 1 financial expert in the net! Check out the new Robot. https://go.tygyguip.com/0j35', '2022-09-16 00:10:40', '2022-09-16 00:10:40'),
(1124, 'CrytoLEari', 'luyzza10@yahoo.com', 89035074680, 'Find out about the easiest way of money earning.', 'Join the society of successful people who make money here. https://go.tygyguip.com/0j35', '2022-09-16 02:13:21', '2022-09-16 02:13:21'),
(1125, 'CrytoLEari', 'dco2453@hotmail.com', 89037829328, 'See how Robot makes $1000 from $1 of investment.', 'Watch your money grow while you invest with the Robot. https://go.tygyguip.com/0j35', '2022-09-16 04:15:51', '2022-09-16 04:15:51'),
(1126, 'CrytoLEari', 'laurmarg16@yahoo.com', 89036889835, 'Need some more money? Robot will earn them really fast.', 'Watch your money grow while you invest with the Robot. https://go.tygyguip.com/0j35', '2022-09-16 06:26:01', '2022-09-16 06:26:01'),
(1127, 'CrytoLEari', 'ddavis71@msn.com', 89031740898, 'The online income is the easiest ways to make you dream come true.', 'Learn how to make hundreds of backs each day. https://go.tygyguip.com/0j35', '2022-09-16 08:31:49', '2022-09-16 08:31:49'),
(1128, 'CrytoLEari', 'kyttcarson@suddenlink.net', 89031381566, 'Need money? The financial robot is your solution.', 'This robot will help you to make hundreds of dollars each day. https://go.tygyguip.com/0j35', '2022-09-16 10:35:46', '2022-09-16 10:35:46'),
(1129, 'CrytoLEari', 'marissaswan@yahoo.com', 89037795203, 'Try out the automatic robot to keep earning all day long.', 'Invest $1 today to make $1000 tomorrow. https://go.tygyguip.com/0j35', '2022-09-16 12:39:36', '2022-09-16 12:39:36'),
(1130, 'CrytoLEari', 'rearl306@gmail.com', 89030593216, 'Buy everything you want earning money online.', 'Launch the best investment instrument to start making money today. https://go.tygyguip.com/0j35', '2022-09-16 14:41:49', '2022-09-16 14:41:49'),
(1131, 'CrytoLEari', 'mech.a.n.i.z.ed.if.p.d@gmail.com', 89037964545, 'Every your dollar can turn into $100 after you lunch this Robot.', 'Robot is the best way for everyone who looks for financial independence. https://go.tygyguip.com/0j35', '2022-09-16 16:44:56', '2022-09-16 16:44:56'),
(1132, 'CrytoLEari', 'barsanti.family@sbcglobal.net', 89034858063, 'This robot will help you to make hundreds of dollars each day.', 'Let the financial Robot be your companion in the financial market. https://go.tygyguip.com/0j35', '2022-09-16 18:47:25', '2022-09-16 18:47:25'),
(1133, 'CrytoLEari', 'razzledazzle368@yahoo.com', 89038119647, 'Need money? Get it here easily! Just press this to launch the robot.', 'Robot is the best way for everyone who looks for financial independence. https://go.tygyguip.com/0j35', '2022-09-16 20:50:37', '2022-09-16 20:50:37'),
(1134, 'CrytoLEari', 'bandit96@twlakes.net', 89037440839, 'Find out about the fastest way for a financial independence.', 'Buy everything you want earning money online. https://go.tygyguip.com/0j35', '2022-09-16 22:59:57', '2022-09-16 22:59:57'),
(1135, 'CrytoLEari', 'bluesky27@talktalk.net', 89030436286, 'We know how to make our future rich and do you?', 'We know how to increase your financial stability. https://go.tygyguip.com/0j35', '2022-09-17 01:03:24', '2022-09-17 01:03:24'),
(1136, 'CrytoLEari', 'genjosanzo21@gmail.com', 89036372763, 'The financial Robot is the most effective financial tool in the net!', 'Make thousands of bucks. Pay nothing. https://go.tygyguip.com/0j35', '2022-09-17 03:05:26', '2022-09-17 03:05:26'),
(1137, 'CrytoLEari', 'JESUS.GRACIA@MY.RFUMS.ORG', 89030161023, 'Find out about the fastest way for a financial independence.', 'Let your money grow into the capital with this Robot. https://go.tygyguip.com/0j35', '2022-09-17 05:08:47', '2022-09-17 05:08:47'),
(1138, 'CrytoLEari', 'Bugirl69@Hotmail.com', 89034123921, 'Make your computer to be you earning instrument.', 'The best online job for retirees. Make your old ages rich. https://go.tygyguip.com/0j35', '2022-09-17 07:12:33', '2022-09-17 07:12:33'),
(1139, 'CrytoLEari', 'derketo_yen@yahoo.com', 89036957531, 'The financial Robot is your future wealth and independence.', 'Let the Robot bring you money while you rest. https://go.tygyguip.com/0j35', '2022-09-17 09:15:51', '2022-09-17 09:15:51'),
(1140, 'CrytoLEari', 'julievdeadman@btinternet.com', 89030811901, 'Launch the financial Robot and do your business.', 'No need to worry about the future if your use this financial robot. https://go.tygyguip.com/0j35', '2022-09-17 11:19:55', '2022-09-17 11:19:55'),
(1141, 'CrytoLEari', 'chaniell@chaniellsells.com', 89032710852, 'Most successful people already use Robot. Do you?', 'Trust your dollar to the Robot and see how it grows to $100. https://go.tygyguip.com/0j35', '2022-09-17 13:22:41', '2022-09-17 13:22:41'),
(1142, 'Donaldglity', 'satelkagashkin+4ea@mail.ru', 83471848679, 'Ihfkhdjadhvfej jdhjkdwshjfhwh jwsfishfuwsjdksldfheiudhfe', 'vardhrashoes.com Mfuehdwkjdwjfjwfwjhfdwkdwkhfjweh hidwhdjwskfawdhfwhkjdwdhqhfbejkdw fejkdlwjakdwefjkewndwfhwefjwehfew kjwjalkdheahfbejkfnjkewbfhegbfewjgjfkewsbjk', '2022-09-17 14:20:32', '2022-09-17 14:20:32'),
(1143, 'Frankbaich', 'mymail@mymails.cmo', 83776235955, 'BILD.de: WIR KONNEN ES NICHT GLAUBEN: Mike Tyson ist wieder fabelhaft reich!', 'BILD.de: Aktuelle Nachrichten. \r\nWIR KONNEN ES NICHT GLAUBEN: Mike Tyson ist wieder fabelhaft reich! https://87bil.co/bild.de/?Nachrichten-ID-761864', '2022-09-17 14:29:32', '2022-09-17 14:29:32'),
(1144, 'CrytoLEari', 'spankyberman@hotmail.com', 89039634608, 'Need cash? Launch this robot and see what it can.', 'Financial Robot is #1 investment tool ever. Launch it! https://go.tygyguip.com/0j35', '2022-09-17 15:25:24', '2022-09-17 15:25:24'),
(1145, 'CrytoLEari', 'Svetovolna@gmail.com', 89038129658, 'Earn additional money without efforts and skills.', 'Wow! This is a fastest way for a financial independence. https://go.tygyguip.com/0j35', '2022-09-17 17:32:11', '2022-09-17 17:32:11'),
(1146, 'CrytoLEari', 'sumit.sohani@gmail.com', 89038653731, 'Trust your dollar to the Robot and see how it grows to $100.', 'Robot never sleeps. It makes money for you 24/7. https://go.tygyguip.com/0j35', '2022-09-17 19:34:50', '2022-09-17 19:34:50'),
(1147, 'CrytoLEari', 'anjelwings4@comcast.net', 89036478348, 'Most successful people already use Robot. Do you?', 'The online income is your key to success. https://go.tygyguip.com/0j35', '2022-09-17 21:37:41', '2022-09-17 21:37:41'),
(1148, 'CrytoLEari', 'rgiviana@yahoo.com', 89031982456, 'Provide your family with the money in age. Launch the Robot!', 'One click of the robot can bring you thousands of bucks. https://go.tygyguip.com/0j35', '2022-09-17 23:41:45', '2022-09-17 23:41:45'),
(1149, 'CrytoLEari', 'nguoihung212001@yahoo.com', 89038080289, 'Earning $1000 a day is easy if you use this financial Robot.', 'No need to work anymore while you have the Robot launched! https://go.tygyguip.com/0j35', '2022-09-18 01:46:26', '2022-09-18 01:46:26'),
(1150, 'CrytoLEari', 'andrewnene7@gmail.com', 89037724580, 'Make money online, staying at home this cold winter.', 'The online income is your key to success. https://go.tygyguip.com/0j35', '2022-09-18 03:54:28', '2022-09-18 03:54:28'),
(1151, 'CrytoLEari', 'esellewilliams29@yahoo.com', 89035690110, 'Check out the newest way to make a fantastic profit.', 'Attention! Financial robot may bring you millions! https://go.tygyguip.com/0j35', '2022-09-18 05:58:06', '2022-09-18 05:58:06'),
(1152, 'CrytoLEari', 'jose.rivera2003@yahoo.com', 89037026966, 'The financial Robot is the most effective financial tool in the net!', 'Make money in the internet using this Bot. It really works! https://go.tygyguip.com/0j35', '2022-09-18 08:02:18', '2022-09-18 08:02:18'),
(1153, 'CrytoLEari', 'Cheriegoldsmith92@gmail.com', 89034386128, 'There is no need to look for a job anymore. Work online.', 'No need to work anymore while you have the Robot launched! https://go.tygyguip.com/0j35', '2022-09-18 11:08:16', '2022-09-18 11:08:16'),
(1154, 'CrytoLEari', 'philworthingtongolf@hotmail.com', 89035425735, 'Have no money? It’s easy to earn them online here.', 'Additional income is now available for anyone all around the world. https://go.tygyguip.com/0j35', '2022-09-18 13:12:22', '2022-09-18 13:12:22'),
(1155, 'CrytoLEari', 'WB4Charmed@aol.com', 89034060480, 'Make yourself rich in future using this financial robot.', 'Trust your dollar to the Robot and see how it grows to $100. https://go.tygyguip.com/0j35', '2022-09-18 15:14:40', '2022-09-18 15:14:40'),
(1156, 'CrytoLEari', 'annette.nazareth@davispolk.com', 89035356672, 'The best way for everyone who rushes for financial independence.', 'Your computer can bring you additional income if you use this Robot. https://go.tygyguip.com/0j35', '2022-09-18 17:18:20', '2022-09-18 17:18:20'),
(1157, 'CrytoLEari', 'jamaltony@ymail.com', 89031742415, 'The best online job for retirees. Make your old ages rich.', 'The financial Robot is your # 1 expert of making money. https://go.tygyguip.com/0j35', '2022-09-18 19:21:45', '2022-09-18 19:21:45'),
(1158, 'CrytoLEari', 'spartan-114@hotmail.com', 89036935259, 'Your money work even when you sleep.', 'Rich people are rich because they use this robot. https://go.tygyguip.com/0j35', '2022-09-18 21:24:50', '2022-09-18 21:24:50'),
(1159, 'CrytoLEari', 'gladys.garbuttd5f07@gmail.com', 89035253789, 'Launch the robot and let it bring you money.', 'Everyone who needs money should try this Robot out. https://go.tygyguip.com/0j35', '2022-09-18 23:27:54', '2022-09-18 23:27:54'),
(1160, 'CrytoLEari', 'redpepper492003@yahoo.com', 89038041279, 'Robot is the best solution for everyone who wants to earn.', 'Money, money! Make more money with financial robot! https://go.tygyguip.com/0j35', '2022-09-19 01:30:50', '2022-09-19 01:30:50'),
(1161, 'CrytoLEari', 'schandam@mortgageamerica.com', 89033719726, 'Buy everything you want earning money online.', 'The huge income without investments is available, now! https://go.tygyguip.com/0j35', '2022-09-19 03:33:30', '2022-09-19 03:33:30'),
(1162, 'CrytoLEari', 's.marrsiii@yahoo.com', 89034207554, 'Join the society of successful people who make money here.', 'One click of the robot can bring you thousands of bucks. https://go.tygyguip.com/0j35', '2022-09-19 05:37:56', '2022-09-19 05:37:56'),
(1163, 'CrytoLEari', 'tjrogers80@btinternet.com', 89036720075, 'Turn $1 into $100 instantly. Use the financial Robot.', 'Making money is very easy if you use the financial Robot. https://go.tygyguip.com/0j35', '2022-09-19 07:41:54', '2022-09-19 07:41:54'),
(1164, 'CrytoLEari', 'kenzir@gmail.com', 89038261913, 'Make thousands every week working online here.', 'Start making thousands of dollars every week. https://go.tygyguip.com/0j35', '2022-09-19 09:09:06', '2022-09-19 09:09:06'),
(1165, 'CrytoLEari', 'ajump1@me.com', 89037429462, 'Robot is the best solution for everyone who wants to earn.', 'Even a child knows how to make $100 today with the help of this robot. https://go.tygyguip.com/0j35', '2022-09-19 11:10:46', '2022-09-19 11:10:46'),
(1166, 'CrytoLEari', 'midprive@hotmail.com', 89031015453, 'Turn $1 into $100 instantly. Use the financial Robot.', 'The financial Robot is your future wealth and independence. https://go.tygyguip.com/0j35', '2022-09-19 13:14:30', '2022-09-19 13:14:30'),
(1167, 'CrytoLEari', 'moranojoantonette@yahoo.com', 89035589403, 'Invest $1 today to make $1000 tomorrow.', 'Making money is very easy if you use the financial Robot. https://go.tygyguip.com/0j35', '2022-09-19 15:17:23', '2022-09-19 15:17:23'),
(1168, 'CrytoLEari', 'melany1959@yahoo.com', 89035870377, 'Just one click can turn you dollar into $1000.', 'The online income is the easiest ways to make you dream come true. https://go.tygyguip.com/0j35', '2022-09-19 17:21:43', '2022-09-19 17:21:43'),
(1169, 'CrytoLEari', 'jaf100860@yahoo.com', 89037465376, 'Looking for additional money? Try out the best financial instrument.', 'Online job can be really effective if you use this Robot. https://go.tygyguip.com/0j35', '2022-09-19 21:28:19', '2022-09-19 21:28:19'),
(1170, 'CrytoLEari', 'slapshotkhalil.77@live.com', 89035613226, 'The additional income for everyone.', 'This robot can bring you money 24/7. https://go.tygyguip.com/0j35', '2022-09-19 23:31:06', '2022-09-19 23:31:06'),
(1171, 'CrytoLEari', 'lmproenza@fedex.com', 89030980355, 'Earning money in the Internet is easy if you use Robot.', 'Online job can be really effective if you use this Robot. https://go.tygyguip.com/0j35', '2022-09-20 01:34:05', '2022-09-20 01:34:05'),
(1172, 'CrytoLEari', 'drk_archer@yahoo.com', 89031363194, 'Your money keep grow 24/7 if you use the financial Robot.', 'Join the society of successful people who make money here. https://go.tygyguip.com/0j35', '2022-09-20 03:36:51', '2022-09-20 03:36:51'),
(1173, 'CrytoLEari', 'edilsond@hotmail.com', 89031004101, 'Make thousands of bucks. Financial robot will help you to do it!', 'Only one click can grow up your money really fast. https://go.tygyguip.com/0j35', '2022-09-20 05:38:50', '2022-09-20 05:38:50');
INSERT INTO `txn_contact_us` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1174, 'CrytoLEari', 'vicken3@msn.com', 89039782642, 'Make money 24/7 without any efforts and skills.', 'Find out about the fastest way for a financial independence. https://go.tygyguip.com/0j35', '2022-09-20 07:43:39', '2022-09-20 07:43:39'),
(1175, 'CrytoLEari', 's.deeperlifechristianchurch@yahoo.com', 89037037971, 'Need money? Earn it without leaving your home.', 'One dollar is nothing, but it can grow into $100 here. https://go.tygyguip.com/0j35', '2022-09-20 10:32:26', '2022-09-20 10:32:26'),
(1176, 'CrytoLEari', 'sunshinewilliams@verizon.net', 89032414921, 'Watch your money grow while you invest with the Robot.', 'Financial independence is what everyone needs. https://go.tygyguip.com/0j35', '2022-09-20 12:36:02', '2022-09-20 12:36:02'),
(1177, 'StevenKic', 'mymail@mymails.cmo', 82743487277, 'ONE OF A KIND REPORT: $593 on the side of 3 minutes', 'SIGNIFICANT REPORT: Last week, he appeared on The Overdue Teach with Stephen Colbert and announced a redone \"wealth loophole\" which can turn into anyone into a millionaire within 3-4 months https://87bil.co/EN-CA-2124.html?news-id-939717', '2022-09-20 13:37:25', '2022-09-20 13:37:25'),
(1178, 'CrytoLEari', 'ashrank91993@yahoo.com', 89033002894, 'Wow! This Robot is a great start for an online career.', 'Looking for additional money? Try out the best financial instrument. https://go.tygyguip.com/0j35', '2022-09-20 14:44:04', '2022-09-20 14:44:04'),
(1179, 'CrytoLEari', 'dr3iun@hotmial.com', 89036210257, 'The fastest way to make you wallet thick is here.', 'Launch the best investment instrument to start making money today. https://go.tygyguip.com/0j35', '2022-09-20 16:47:21', '2022-09-20 16:47:21'),
(1180, 'CrytoLEari', 'Coka_lover@msn.com', 89037539899, 'Join the society of successful people who make money here.', 'Learn how to make hundreds of backs each day. https://go.tygyguip.com/0j35', '2022-09-20 18:52:23', '2022-09-20 18:52:23'),
(1181, 'CrytoLEari', 'southerngent2020@gmail.com', 89037258217, 'This robot can bring you money 24/7.', 'Launch the financial Bot now to start earning. https://go.tygyguip.com/0j35', '2022-09-20 20:54:57', '2022-09-20 20:54:57'),
(1182, 'CrytoLEari', 'delkitt07@live.com', 89034099612, 'Launch the robot and let it bring you money.', 'Additional income is now available for anyone all around the world. https://go.hinebixi.com/0j35', '2022-09-20 22:57:14', '2022-09-20 22:57:14'),
(1183, 'CrytoLEari', 'dmv2323@yahoo.com', 89036785976, 'Need money? Get it here easily?', 'Your money work even when you sleep. https://go.hinebixi.com/0j35', '2022-09-21 00:58:47', '2022-09-21 00:58:47'),
(1184, 'CrytoLEari', 'Esma883@aol.com', 89033016357, 'Have no money? It’s easy to earn them online here.', 'Try out the best financial robot in the Internet. https://go.hinebixi.com/0j35', '2022-09-21 03:00:25', '2022-09-21 03:00:25'),
(1185, 'CrytoLEari', 'efini.lackleen@gmail.com', 89033587566, 'Check out the new financial tool, which can make you rich.', 'Just one click can turn you dollar into $1000. https://go.hinebixi.com/0j35', '2022-09-21 05:04:46', '2022-09-21 05:04:46'),
(1186, 'CrytoLEari', 'nxs2@hotmail.com', 89030438069, 'Earn additional money without efforts and skills.', 'One click of the robot can bring you thousands of bucks. https://go.hinebixi.com/0j35', '2022-09-21 07:07:52', '2022-09-21 07:07:52'),
(1187, 'CrytoLEari', 'marco_pasha@msn.com', 89032365058, 'Robot never sleeps. It makes money for you 24/7.', 'Invest $1 today to make $1000 tomorrow. https://go.hinebixi.com/0j35', '2022-09-21 09:14:43', '2022-09-21 09:14:43'),
(1188, 'CrytoLEari', 'ctigordon@yahoo.com', 89038367074, 'Still not a millionaire? The financial robot will make you him!', 'The financial Robot is your future wealth and independence. https://go.hinebixi.com/0j35', '2022-09-21 11:16:31', '2022-09-21 11:16:31'),
(1189, 'CrytoLEari', 'Channig@gmail.com', 89036554617, 'Looking for an easy way to make money? Check out the financial robot.', '# 1 financial expert in the net! Check out the new Robot. https://go.hinebixi.com/0j35', '2022-09-21 13:19:00', '2022-09-21 13:19:00'),
(1190, 'CrytoLEari', 'andreina.guevara@aol.com', 89033401720, 'The huge income without investments is available, now!', 'Making money in the net is easier now. https://go.hinebixi.com/0j35', '2022-09-21 15:22:07', '2022-09-21 15:22:07'),
(1191, 'CrytoLEari', 'buse_m18m@hotmail.com', 89030032174, 'Check out the new financial tool, which can make you rich.', 'Start making thousands of dollars every week just using this robot. https://go.hinebixi.com/0j35', '2022-09-21 17:23:58', '2022-09-21 17:23:58'),
(1192, 'CrytoLEari', 'abellaldama@yahoo.com', 89033262375, 'Make $1000 from $1 in a few minutes. Launch the financial robot now.', 'Make thousands every week working online here. https://go.hinebixi.com/0j35', '2022-09-21 19:25:00', '2022-09-21 19:25:00'),
(1193, 'CrytoLEari', 'poonsak_pha@hotmail.com', 89031906416, 'Make thousands of bucks. Pay nothing.', 'Need some more money? Robot will earn them really fast. https://go.obermatsa.com/0j35', '2022-09-21 21:26:45', '2022-09-21 21:26:45'),
(1194, 'CrytoLEari', 'soma_soma_kitty_star@yahoo.com', 89037611174, 'Everyone can earn as much as he wants now.', 'Your money work even when you sleep. https://go.obermatsa.com/0j35', '2022-09-21 23:28:48', '2022-09-21 23:28:48'),
(1195, 'CrytoLEari', 'ford67stanger@yahoo.com', 89035939729, 'Additional income is now available for anyone all around the world.', 'Need money? Get it here easily! Just press this to launch the robot. https://go.obermatsa.com/0j35', '2022-09-22 01:33:53', '2022-09-22 01:33:53'),
(1196, 'CrytoLEari', 'lolah.xx@gmail.com', 89035778836, 'The success formula is found. Learn more about it.', 'The best online investment tool is found. Learn more! https://go.obermatsa.com/0j35', '2022-09-22 03:43:07', '2022-09-22 03:43:07'),
(1197, 'CrytoLEari', 'dawn_68@yahoo.com', 89033951050, 'Additional income is now available for anyone all around the world.', 'Make thousands every week working online here. https://go.obermatsa.com/0j35', '2022-09-22 05:45:33', '2022-09-22 05:45:33'),
(1198, 'CrytoLEari', 'jake7818@gmail.com', 89031437083, 'Attention! Financial robot may bring you millions!', 'No need to work anymore while you have the Robot launched! https://go.obermatsa.com/0j35', '2022-09-22 08:06:45', '2022-09-22 08:06:45'),
(1199, 'CrytoLEari', 'perrinwhite@gmail.com', 89035922151, 'Need money? The financial robot is your solution.', 'The fastest way to make you wallet thick is here. https://go.obermatsa.com/0j35', '2022-09-22 10:08:44', '2022-09-22 10:08:44'),
(1200, 'CrytoLEari', 'samar98749@hotmail.com', 89034710245, 'Attention! Here you can earn money online!', 'Make thousands of bucks. Pay nothing. https://go.obermatsa.com/0j35', '2022-09-22 12:31:58', '2022-09-22 12:31:58'),
(1201, 'CrytoLEari', 'nogreatergator@yahoo.com', 89030869590, 'The additional income is available for everyone using this robot.', 'The online income is your key to success. https://go.obermatsa.com/0j35', '2022-09-22 14:33:49', '2022-09-22 14:33:49'),
(1202, 'CrytoLEari', 'lindax.wang@gmail.com', 89030519293, 'Financial independence is what this robot guarantees.', 'Attention! Here you can earn money online! https://go.obermatsa.com/0j35', '2022-09-22 16:36:57', '2022-09-22 16:36:57'),
(1203, 'CrytoLEari', 'IvanTorres381@yahoo.com', 89031563789, 'Learn how to make hundreds of backs each day.', 'Even a child knows how to make $100 today. https://go.obermatsa.com/0j35', '2022-09-22 18:39:13', '2022-09-22 18:39:13'),
(1204, 'CrytoLEari', 'chambers.robert3@yahoo.com', 89032769686, 'Make yourself rich in future using this financial robot.', 'This robot will help you to make hundreds of dollars each day. https://go.obermatsa.com/0j35', '2022-09-22 20:39:45', '2022-09-22 20:39:45'),
(1205, 'CrytoLEari', 'deathofnatas@yahoo.com', 89036243923, 'Try out the automatic robot to keep earning all day long.', 'Check out the automatic Bot, which works for you 24/7. https://go.obermatsa.com/0j35', '2022-09-22 22:41:20', '2022-09-22 22:41:20'),
(1206, 'CrytoLEari', 'horsewhisper130@hotmail.com', 89031344753, 'The huge income without investments is available.', 'Small investments can bring tons of dollars fast. https://go.obermatsa.com/0j35', '2022-09-23 00:45:24', '2022-09-23 00:45:24'),
(1207, 'CrytoLEari', 'lauragemme@gmail.com', 89031599454, 'The financial Robot is the most effective financial tool in the net!', 'Invest $1 today to make $1000 tomorrow. https://go.obermatsa.com/0j35', '2022-09-23 02:47:28', '2022-09-23 02:47:28'),
(1208, 'JasonVok', 'mymail@mymails.cmo', 82828844762, 'Interesting news: a student from Australia earned $ 30,000,000 in 1.5 months', 'A student from Australia earned $ 30,000,000 in 1.5 months https://telegra.ph/Interesting-news-a-student-from-Australia-earned--30000000-in-15-months-09-22?news-id-649694', '2022-09-23 03:55:43', '2022-09-23 03:55:43'),
(1209, 'CrytoLEari', 'arubaazalea@live.com', 89030755181, 'Let the Robot bring you money while you rest.', 'Making money is very easy if you use the financial Robot. https://go.obermatsa.com/0j35', '2022-09-23 04:50:59', '2022-09-23 04:50:59'),
(1210, 'CrytoLEari', 'pesetazku305@yahoo.com', 89032725084, 'The financial Robot is your future wealth and independence.', 'This robot can bring you money 24/7. https://go.obermatsa.com/0j35', '2022-09-23 06:57:26', '2022-09-23 06:57:26'),
(1211, 'CrytoLEari', 'kbomhard@cox.net', 89039026611, 'Attention! Here you can earn money online!', 'No need to stay awake all night long to earn money. Launch the robot. https://go.obermatsa.com/0j35', '2022-09-23 08:59:33', '2022-09-23 08:59:33'),
(1212, 'CrytoLEari', 'idachour@gmail.com', 89037383583, 'Buy everything you want earning money online.', 'Financial robot is the best companion of rich people. https://go.obermatsa.com/0j35', '2022-09-23 11:00:42', '2022-09-23 11:00:42'),
(1213, 'CrytoLEari', 'st.ongeb@yahoo.com', 89037217693, 'Wow! This is a fastest way for a financial independence.', 'Make dollars staying at home and launched this Bot. https://go.obermatsa.com/0j35', '2022-09-23 13:03:48', '2022-09-23 13:03:48'),
(1214, 'CrytoLEari', 'vmkunze@comcast.net', 89030947941, 'Check out the newest way to make a fantastic profit.', 'Invest $1 today to make $1000 tomorrow. https://go.obermatsa.com/0j35', '2022-09-23 15:05:53', '2022-09-23 15:05:53'),
(1215, 'CrytoLEari', 'iekcc4@scsmalls.com', 89039014746, 'We know how to become rich and do you?', 'Even a child knows how to make money. This robot is what you need! https://go.obermatsa.com/0j35', '2022-09-23 17:07:08', '2022-09-23 17:07:08'),
(1216, 'CrytoLEari', 'jo.strydom@yahoo.com', 89031920911, 'Earning money in the Internet is easy if you use Robot.', 'Even a child knows how to make money. Do you? https://go.obermatsa.com/0j35', '2022-09-23 19:14:52', '2022-09-23 19:14:52'),
(1217, 'CrytoLEari', 'james.darwin@gmail.com', 89032818603, 'It is the best time to launch the Robot to get more money.', 'Make money in the internet using this Bot. It really works! https://go.obermatsa.com/0j35', '2022-09-23 21:15:21', '2022-09-23 21:15:21'),
(1218, 'CrytoLEari', 'www.bcssexiest@aim.com', 89034890617, 'Still not a millionaire? Fix it now!', 'The online income is the easiest ways to make you dream come true. https://go.obermatsa.com/0j35', '2022-09-23 23:18:56', '2022-09-23 23:18:56'),
(1219, 'CrytoLEari', 'victoriajones1121@gmail.com', 89030144337, 'Make $1000 from $1 in a few minutes. Launch the financial robot now.', 'The huge income without investments is available, now! https://go.obermatsa.com/0j35', '2022-09-24 01:20:15', '2022-09-24 01:20:15'),
(1220, 'CharlesGonse', 'mreleyox@gmail.com', 86782371368, 'NFT marketplace: Get NFT in the amount of $50,000 or more, details in your personal account', 'You have a NFT gift in the amount of $50,000, details in your personal account http://play-to-get-nft.selenmuratoglu.com/id-4990', '2022-09-24 02:58:45', '2022-09-24 02:58:45'),
(1221, 'CrytoLEari', 'pradhan.abhishek01@gmail.com', 89032760142, 'Try out the automatic robot to keep earning all day long.', 'We know how to make our future rich and do you? https://go.obermatsa.com/0j35', '2022-09-24 03:19:37', '2022-09-24 03:19:37'),
(1222, 'CrytoLEari', 'billy2000@bluebottle.com', 89031344323, 'Even a child knows how to make $100 today.', 'Everyone can earn as much as he wants now. https://go.obermatsa.com/0j35', '2022-09-24 05:19:58', '2022-09-24 05:19:58'),
(1223, 'CrytoLEari', 'marxela94@hotmail.com', 89033773436, 'Still not a millionaire? Fix it now!', 'Thousands of bucks are guaranteed if you use this robot. https://go.obermatsa.com/0j35', '2022-09-24 07:42:35', '2022-09-24 07:42:35'),
(1224, 'CrytoLEari', 'miloon2382@gmail.com', 89036187845, 'Most successful people already use Robot. Do you?', 'Make money, not war! Financial Robot is what you need. https://go.obermatsa.com/0j35', '2022-09-24 09:42:14', '2022-09-24 09:42:14'),
(1225, 'CrytoLEari', 'jrkatcal@hotmail.com', 89036277085, 'Financial robot is the best companion of rich people.', 'Financial robot is the best companion of rich people. https://go.obermatsa.com/0j35', '2022-09-24 11:47:37', '2022-09-24 11:47:37'),
(1226, 'CrytoLEari', 'rafael_carbonell@hotmail.com', 89031475650, 'Even a child knows how to make money. This robot is what you need!', 'Everyone who needs money should try this Robot out. https://go.obermatsa.com/0j35', '2022-09-24 13:50:58', '2022-09-24 13:50:58'),
(1227, 'CrytoLEari', 'bleinaeng@yahoo.com', 89031921223, 'Making money is very easy if you use the financial Robot.', 'Financial robot is your success formula is found. Learn more about it. https://go.obermatsa.com/0j35', '2022-09-24 15:51:31', '2022-09-24 15:51:31'),
(1228, 'CrytoLEari', 'vondabqu@hotmail.com', 89032242587, 'The online financial Robot is your key to success.', 'Small investments can bring tons of dollars fast. https://go.obermatsa.com/0j35', '2022-09-24 17:58:10', '2022-09-24 17:58:10'),
(1229, 'CrytoLEari', 'abbyanderson0711@aol.com', 89036305257, 'Online earnings are the easiest way for financial independence.', 'Most successful people already use Robot. Do you? https://go.obermatsa.com/0j35', '2022-09-24 19:58:37', '2022-09-24 19:58:37'),
(1230, 'CrytoLEari', 'zaqidelta@yahoo.com', 89039515848, 'Additional income is now available for anyone all around the world.', 'Making money is very easy if you use the financial Robot. https://go.obermatsa.com/0j35', '2022-09-24 21:58:27', '2022-09-24 21:58:27'),
(1231, 'CrytoLEari', 'baileygregor@yahoo.com', 89033262970, 'The online income is the easiest ways to make you dream come true.', 'Earn additional money without efforts. https://go.obermatsa.com/0j35', '2022-09-25 00:00:15', '2022-09-25 00:00:15'),
(1232, 'CrytoLEari', 'stephanie_wa@browninbox.org', 89038500059, 'Robot never sleeps. It makes money for you 24/7.', 'Your money work even when you sleep. https://go.obermatsa.com/0j35', '2022-09-25 02:04:31', '2022-09-25 02:04:31'),
(1233, 'CrytoLEari', 'qweema1234@yahoo.com', 89038524488, 'Your computer can bring you additional income if you use this Robot.', 'Trust your dollar to the Robot and see how it grows to $100. https://go.obermatsa.com/0j35', '2022-09-25 04:06:24', '2022-09-25 04:06:24'),
(1234, 'CrytoLEari', 'reneewillette@hotmail.com', 89030719587, 'Wow! This Robot is a great start for an online career.', 'Financial robot is your success formula is found. Learn more about it. https://go.obermatsa.com/0j35', '2022-09-25 06:11:29', '2022-09-25 06:11:29'),
(1235, 'CrytoLEari', 'mauiqt3@gmail.com', 89033020901, 'Robot never sleeps. It makes money for you 24/7.', 'The best online investment tool is found. Learn more! https://go.obermatsa.com/0j35', '2022-09-25 08:12:32', '2022-09-25 08:12:32'),
(1236, 'CrytoLEari', 'jvrainiebiserate@aol.com', 89033016711, 'Try out the best financial robot in the Internet.', 'Online job can be really effective if you use this Robot. https://go.obermatsa.com/0j35', '2022-09-25 10:12:04', '2022-09-25 10:12:04'),
(1237, 'CrytoLEari', 'clara_93_14@yahoo.com', 89039123692, 'Even a child knows how to make $100 today.', 'Need money? The financial robot is your solution. https://go.obermatsa.com/0j35', '2022-09-25 12:16:13', '2022-09-25 12:16:13'),
(1238, 'CrytoLEari', 'stilesee@yahoo.com', 89033326969, 'Rich people are rich because they use this robot.', 'Launch the robot and let it bring you money. https://go.obermatsa.com/0j35', '2022-09-25 14:17:53', '2022-09-25 14:17:53'),
(1239, 'CrytoLEari', 'Faisal_Hamid@hotmail.com', 89033363709, 'See how Robot makes $1000 from $1 of investment.', 'Still not a millionaire? Fix it now! https://go.obermatsa.com/0j35', '2022-09-25 16:19:17', '2022-09-25 16:19:17'),
(1240, 'CrytoLEari', 'phong_ving@yahoo.com', 89034700821, 'The huge income without investments is available.', 'No worries if you are fired. Work online. https://go.obermatsa.com/0j35', '2022-09-25 18:24:52', '2022-09-25 18:24:52'),
(1241, 'CrytoLEari', 'sjhaigler@bellsouth.net', 89031380986, 'Thousands of bucks are guaranteed if you use this robot.', 'Make money, not war! Financial Robot is what you need. https://go.obermatsa.com/0j35', '2022-09-25 20:30:25', '2022-09-25 20:30:25'),
(1242, 'CrytoLEari', 'philsfez@hotmail.com', 89034213691, 'Make money in the internet using this Bot. It really works!', 'Online earnings are the easiest way for financial independence. https://go.obermatsa.com/0j35', '2022-09-25 22:32:11', '2022-09-25 22:32:11'),
(1243, 'CrytoLEari', 'HalperyhnycVasgohti@hotmail.com', 89037892479, 'The additional income for everyone.', 'Need money? Get it here easily! Just press this to launch the robot. https://go.obermatsa.com/0j35', '2022-09-26 00:32:55', '2022-09-26 00:32:55'),
(1244, 'CrytoLEari', 'myselfinme@hotmail.com', 89037327672, 'The best way for everyone who rushes for financial independence.', 'Let your money grow into the capital with this Robot. https://go.obermatsa.com/0j35', '2022-09-26 02:36:53', '2022-09-26 02:36:53'),
(1245, 'CrytoLEari', 'y.hgj.sdfsdfi.p.r@gmail.com', 89038329306, 'See how Robot makes $1000 from $1 of investment.', 'The best online investment tool is found. Learn more! https://go.obermatsa.com/0j35', '2022-09-26 04:40:29', '2022-09-26 04:40:29'),
(1246, 'CrytoLEari', 'hsxc@hotmail.com', 89032866538, 'Rich people are rich because they use this robot.', 'Financial Robot is #1 investment tool ever. Launch it! https://go.obermatsa.com/0j35', '2022-09-26 06:43:28', '2022-09-26 06:43:28'),
(1247, 'CrytoLEari', 'emaloney07@yahoo.com', 89038982497, 'Trust the financial Bot to become rich.', 'The success formula is found. Learn more about it. https://go.obermatsa.com/0j35', '2022-09-26 08:43:02', '2022-09-26 08:43:02'),
(1248, 'CrytoLEari', 'hurtmeado@yahoo.com', 89036967558, 'The financial Robot is the most effective financial tool in the net!', 'The financial Robot is your future wealth and independence. https://go.obermatsa.com/0j35', '2022-09-26 10:43:13', '2022-09-26 10:43:13'),
(1249, 'CrytoLEari', 'bmorris01@hughes.net', 89033770908, 'Make your money work for you all day long.', 'Let the Robot bring you money while you rest. https://go.obermatsa.com/0j35', '2022-09-26 12:45:22', '2022-09-26 12:45:22'),
(1250, 'CrytoLEari', 'patriklacroi24@hotmail.com', 89038941838, 'The online job can bring you a fantastic profit.', 'Launch the robot and let it bring you money. https://go.obermatsa.com/0j35', '2022-09-26 14:44:59', '2022-09-26 14:44:59'),
(1251, 'CrytoLEari', 'david@synrad.com', 89037122860, 'Attention! Financial robot may bring you millions!', 'Buy everything you want earning money online. https://go.obermatsa.com/0j35', '2022-09-26 16:45:06', '2022-09-26 16:45:06'),
(1252, 'CrytoLEari', 'Renwick.Beth@hotmail.com', 89034648888, 'The additional income is available for everyone using this robot.', 'The huge income without investments is available. https://go.obermatsa.com/0j35', '2022-09-26 18:54:30', '2022-09-26 18:54:30'),
(1253, 'CrytoLEari', 'sonnya135@att.net', 89035501026, 'Your money keep grow 24/7 if you use the financial Robot.', 'Robot never sleeps. It makes money for you 24/7. https://go.obermatsa.com/0j35', '2022-09-26 21:11:17', '2022-09-26 21:11:17'),
(1254, 'CrytoLEari', 'pijusha@gmail.com', 89033007848, 'Even a child knows how to make money. Do you?', 'Robot is the best way for everyone who looks for financial independence. https://go.obermatsa.com/0j35', '2022-09-26 23:16:34', '2022-09-26 23:16:34'),
(1255, 'CrytoLEari', 'rsotorea@aol.com', 89035709053, 'Financial robot guarantees everyone stability and income.', 'Earning $1000 a day is easy if you use this financial Robot. https://go.obermatsa.com/0j35', '2022-09-27 01:22:36', '2022-09-27 01:22:36'),
(1256, 'CrytoLEari', 'AzMelissaRay@yahoo.com', 89038619817, 'Buy everything you want earning money online.', 'Make money, not war! Financial Robot is what you need. https://go.obermatsa.com/0j35', '2022-09-27 03:27:50', '2022-09-27 03:27:50'),
(1257, 'CrytoLEari', 'martika1@verizon.net', 89032336114, 'The financial Robot is your future wealth and independence.', 'The online job can bring you a fantastic profit. https://go.obermatsa.com/0j35', '2022-09-27 05:30:41', '2022-09-27 05:30:41'),
(1258, 'CrytoLEari', 'buland2409@gmail.com', 89036504151, 'Make money online, staying at home this cold winter.', 'Start your online work using the financial Robot. https://go.obermatsa.com/0j35', '2022-09-27 07:37:12', '2022-09-27 07:37:12'),
(1259, 'CrytoLEari', 'sarah_sunlion@hotmail.com', 89031111150, 'One click of the robot can bring you thousands of bucks.', 'Attention! Here you can earn money online! https://go.obermatsa.com/0j35', '2022-09-27 09:39:21', '2022-09-27 09:39:21'),
(1260, 'CrytoLEari', 'kerouac75@msn.com', 89036988443, 'Check out the new financial tool, which can make you rich.', 'Financial robot is a great way to manage and increase your income. https://go.obermatsa.com/0j35', '2022-09-27 11:41:59', '2022-09-27 11:41:59'),
(1261, 'CrytoLEari', 'sabir050@hotmail.com', 89039690599, 'Find out about the easiest way of money earning.', 'Automatic robot is the best start for financial independence. https://go.obermatsa.com/0j35', '2022-09-27 13:49:06', '2022-09-27 13:49:06'),
(1262, 'CrytoLEari', 'rasking83@gmail.com', 89035772466, 'Invest $1 today to make $1000 tomorrow.', 'Money, money! Make more money with financial robot! https://go.obermatsa.com/0j35', '2022-09-27 15:53:18', '2022-09-27 15:53:18'),
(1263, 'CrytoLEari', 'eloise_harkess@hotmail.com', 89034937176, 'No worries if you are fired. Work online.', 'The additional income for everyone. https://go.obermatsa.com/0j35', '2022-09-27 18:01:25', '2022-09-27 18:01:25'),
(1264, 'CrytoLEari', 'uyjarchowtolerdd@compaq.com', 89039445745, 'No need to worry about the future if your use this financial robot.', 'Launch the financial Robot and do your business. https://go.obermatsa.com/0j35', '2022-09-27 20:05:48', '2022-09-27 20:05:48'),
(1265, 'CrytoLEari', 'sean.mcfadden22@gmail.com', 89036068157, 'Earn additional money without efforts and skills.', 'Still not a millionaire? The financial robot will make you him! https://go.obermatsa.com/0j35', '2022-09-27 22:09:51', '2022-09-27 22:09:51'),
(1266, 'CrytoLEari', 'princess_mush18@yahoo.com', 89030666711, 'Make yourself rich in future using this financial robot.', 'Join the society of successful people who make money here. https://go.obermatsa.com/0j35', '2022-09-28 00:17:26', '2022-09-28 00:17:26'),
(1267, 'CrytoLEari', 'brodygurlie@aol.com', 89030142511, 'We know how to become rich and do you?', 'Wow! This Robot is a great start for an online career. https://go.obermatsa.com/0j35', '2022-09-28 02:23:21', '2022-09-28 02:23:21'),
(1268, 'AnthonyGug', 'kdoigor344@gmail.com', 89337693134, 'Wall Street Journal: This 36-year-old made over $309,000 in about 9', 'What is an NFT and should you invest in them? https://telegra.ph/Earnings-on-NFT-on-autopilot-from-1000-per-day-09-27-322?news-id-281639', '2022-09-28 12:01:54', '2022-09-28 12:01:54'),
(1269, 'CrytoLEari', 'cutemonkeyhead@yahoo.com', 89039642506, 'Need money? Get it here easily?', 'Even a child knows how to make $100 today. http://go.obermatsa.com/0ja8', '2022-09-28 15:20:31', '2022-09-28 15:20:31'),
(1270, 'CrytoLEari', 'sonia_iona@hotmail.com', 89033168515, 'Make money 24/7 without any efforts and skills.', 'Feel free to buy everything you want with the additional income. http://go.obermatsa.com/0ja8', '2022-09-28 22:16:34', '2022-09-28 22:16:34'),
(1271, 'CrytoLEari', 'andydownton@talk21.com', 89039907472, 'Trust the financial Bot to become rich.', 'Rich people are rich because they use this robot. http://go.obermatsa.com/0ja8', '2022-09-29 05:01:27', '2022-09-29 05:01:27'),
(1272, 'CrytoLEari', 'bittersweetdean@yahoo.com', 89035571466, 'Start making thousands of dollars every week just using this robot.', 'The huge income without investments is available. http://go.obermatsa.com/0ja8', '2022-09-29 11:59:34', '2022-09-29 11:59:34'),
(1273, 'AnthonyGug', 'ogunpo@gmail.com', 83487787751, 'Prize: Samsung Galaxy get it now', 'You won an iPhone 13, get it now http://amazon-loyalty-program-win-iphone.cuteproduct.com/news-4109', '2022-09-29 15:05:04', '2022-09-29 15:05:04'),
(1274, 'CrytoLEari', 'racq@mindspring.com', 89036889543, 'Make your laptop a financial instrument with this program.', 'Financial independence is what this robot guarantees. https://go.diryjyaz.com/0j35', '2022-09-29 19:05:38', '2022-09-29 19:05:38'),
(1275, 'CrytoLEari', 'kgreer01@gmail.com', 89034459607, 'Let your money grow into the capital with this Robot.', 'Financial robot is a great way to manage and increase your income. https://go.diryjyaz.com/0j35', '2022-09-30 02:01:01', '2022-09-30 02:01:01'),
(1276, 'AnthonyGug', 'simon.platzer@lycos.de', 86684334519, 'Bild Plus: Arbeiten Sie online mit einem Einkommen von 50.000 Euro pro Woche', 'Reales Einkommen uber 50000 Euro pro Woche https://telegra.ph/Ab-1000--pro-Tag-im-automatischen-Modus-09-29-11308?id-81558364', '2022-09-30 04:07:03', '2022-09-30 04:07:03'),
(1277, 'CrytoLEari', 'qhfan923@gmail.com', 89036422817, 'Have no financial skills? Let Robot make money for you.', 'Find out about the easiest way of money earning. https://go.diryjyaz.com/0j35', '2022-09-30 06:19:47', '2022-09-30 06:19:47'),
(1278, 'CrytoLEari', 'jacobhdahl@gmail.com', 89035602859, 'Financial robot is your success formula is found. Learn more about it.', 'Financial robot is your success formula is found. Learn more about it. https://go.diryjyaz.com/0j35', '2022-09-30 12:56:12', '2022-09-30 12:56:12'),
(1279, 'CrytoLEari', 'lhss@r7.com', 89033982320, 'The fastest way to make you wallet thick is here.', 'This robot can bring you money 24/7. https://go.diryjyaz.com/0j35', '2022-09-30 19:43:24', '2022-09-30 19:43:24'),
(1280, 'CrytoLEari', 'tim@yahoo.com', 89035236059, 'Let the Robot bring you money while you rest.', 'Invest $1 today to make $1000 tomorrow. https://go.diryjyaz.com/0j35', '2022-10-01 02:38:16', '2022-10-01 02:38:16'),
(1281, 'Michaeldreab', 'idaho@guru.de', 82885626812, 'Ab 50.000 EUR pro Woche verdienen lernen', 'Investieren Sie und erhalten Sie mehr als 50.000 Euro pro Woche >>> https://telegra.ph/Ab-1000--pro-Tag-im-automatischen-Modus-09-29-10497?id-67306062 <<<', '2022-10-01 04:15:39', '2022-10-01 04:15:39'),
(1282, 'CrytoLEari', 'ssoep@yahoo.com', 89035037087, 'Provide your family with the money in age. Launch the Robot!', 'The financial Robot is the most effective financial tool in the net! https://go.diryjyaz.com/0j35', '2022-10-01 09:19:32', '2022-10-01 09:19:32'),
(1283, 'CrytoLEari', 'm.jackson7310@yahoo.com', 89039142136, 'This robot can bring you money 24/7.', 'Automatic robot is the best start for financial independence. https://go.diryjyaz.com/0j35', '2022-10-01 15:58:22', '2022-10-01 15:58:22'),
(1284, 'AnthonyGug', 'schristians@freenet.de', 86229249279, 'Bild: Verdienen im Internet mit einem Einkommen von mehr als 50.000 EUR pro Monat', 'Erhalten Sie ein Einkommen von 50000 EUR pro Monat http://best-way-to-earn-money-online.minimaltechliving.com/news-2745', '2022-10-01 20:39:32', '2022-10-01 20:39:32'),
(1285, 'CrytoLEari', 'cathrinemillis@gmail.com', 89039520760, 'Everyone who needs money should try this Robot out.', 'Turn $1 into $100 instantly. Use the financial Robot. https://go.diryjyaz.com/0j35', '2022-10-01 22:43:39', '2022-10-01 22:43:39'),
(1286, 'CrytoLEari', 'take3dvd@outlook.com', 89031742331, 'Have no financial skills? Let Robot make money for you.', 'No need to worry about the future if your use this financial robot. https://go.diryjyaz.com/0j35', '2022-10-02 05:37:31', '2022-10-02 05:37:31'),
(1287, 'CrytoLEari', 'pinky80215@yahoo.com', 89036542900, 'Everyone can earn as much as he wants now.', 'This robot will help you to make hundreds of dollars each day. https://go.diryjyaz.com/0j35', '2022-10-02 12:18:52', '2022-10-02 12:18:52'),
(1288, 'CrytoLEari', 'christian.walter@mauffrey.com', 89035981249, 'Still not a millionaire? The financial robot will make you him!', 'Just one click can turn you dollar into $1000. https://go.diryjyaz.com/0j35', '2022-10-02 19:02:33', '2022-10-02 19:02:33'),
(1289, 'Carltonrourl', 'esrarengiz@isnet.net.tr', 84431752182, 'Mirror: BEST NFT GIVEAWAYS IN 2023 - BUSINESS 2 COMMUNITY', 'Best NFT Giveaways in 2023 - Business 2 Community https://telegra.ph/Get-NFT-over-25000-for-free-10-02-12897', '2022-10-02 23:07:11', '2022-10-02 23:07:11'),
(1290, 'CrytoLEari', 'cterry@cinci.rr.com', 89039769467, 'Attention! Here you can earn money online!', 'Make thousands of bucks. Financial robot will help you to do it! https://go.diryjyaz.com/0j35', '2022-10-03 02:00:15', '2022-10-03 02:00:15'),
(1291, 'CrytoLEari', 'scent4cell@hotmail.com', 89038876601, 'Make thousands every week working online here.', 'Have no money? Earn it online. https://go.diryjyaz.com/0j35', '2022-10-03 08:54:21', '2022-10-03 08:54:21'),
(1292, 'CrytoLEari', 'golfeasv@gmail.com', 89031684137, 'Need cash? Launch this robot and see what it can.', 'Launch the best investment instrument to start making money today. https://go.diryjyaz.com/0j35', '2022-10-03 15:44:06', '2022-10-03 15:44:06'),
(1293, 'CrytoLEari', 'sanjuanit2@gmail.com', 89031533705, 'Looking for additional money? Try out the best financial instrument.', 'The fastest way to make you wallet thick is here. https://go.sakelonel.com/0jb5', '2022-10-03 22:26:27', '2022-10-03 22:26:27'),
(1294, 'CrytoLEari', 'jcarter191@yahoo.com', 89036150936, 'Need money? Earn it without leaving your home.', 'Turn $1 into $100 instantly. Use the financial Robot. https://go.sakelonel.com/0jb5', '2022-10-04 05:01:54', '2022-10-04 05:01:54'),
(1295, 'CrytoLEari', 'lyrisgarcia75@gmail.com', 89031067865, 'Robot is the best way for everyone who looks for financial independence.', 'Make money online, staying at home this cold winter. https://go.sakelonel.com/0jb5', '2022-10-04 11:43:18', '2022-10-04 11:43:18'),
(1296, 'RickyDex', 'mymail@mymails.cmo', 87785372989, 'Are gas and electricity prices bothering you?', 'Hello. \r\nContact Scott Ritter. \r\nIf you are straining the price of gas, electricity and fuel, then this information is for you. \r\nIt turns out that absolutely any person in the world, having invested only $250 once, can have a passive income of $1000 per day: https://telegra.ph/Prices-for-gas-and-electricity-strain-10-03?id-23448096', '2022-10-04 15:24:15', '2022-10-04 15:24:15'),
(1297, 'CrytoLEari', 'e7jrd@aol.com', 89035586457, 'The online financial Robot is your key to success.', 'Need some more money? Robot will earn them really fast. https://go.sakelonel.com/0jb5', '2022-10-04 18:26:31', '2022-10-04 18:26:31'),
(1298, 'Georgeglath', 'saffet_ycl_@hotmail.com', 87936835673, 'Fast and High-Quality Facebook Promotion', 'Smart Promotion on Facebook >>> http://facebook-orphanage-promo.degitalchain.com/news-8965 <<<', '2022-10-04 19:02:08', '2022-10-04 19:02:08'),
(1299, 'CrytoLEari', 'alyssagris@gmail.com', 89030732066, 'Make your laptop a financial instrument with this program.', 'The best online job for retirees. Make your old ages rich. https://go.sakelonel.com/0j35', '2022-10-05 01:09:16', '2022-10-05 01:09:16'),
(1300, 'CrytoLEari', 'esmrotteveel@gmail.com', 89038057962, '# 1 financial expert in the net! Check out the new Robot.', 'Small investments can bring tons of dollars fast. https://go.sakelonel.com/0j35', '2022-10-05 07:52:24', '2022-10-05 07:52:24'),
(1301, 'CrytoLEari', 'ssplfelton@yahoo.com', 89039518535, 'The huge income without investments is available.', 'The huge income without investments is available. https://go.sakelonel.com/0j35', '2022-10-05 14:28:14', '2022-10-05 14:28:14'),
(1302, 'CrytoLEari', 'kristieljrocks@yahoo.com', 89032030452, 'Make dollars just sitting home.', 'Small investments can bring tons of dollars fast. http://go.cuxavyem.com/0j35', '2022-10-05 21:05:37', '2022-10-05 21:05:37'),
(1303, 'CrytoLEari', 'green-eyez924@hotmail.com', 89031120485, 'This robot can bring you money 24/7.', 'Earning money in the Internet is easy if you use Robot. http://go.cuxavyem.com/0j35', '2022-10-06 03:46:21', '2022-10-06 03:46:21'),
(1304, 'CrytoLEari', 'rafeholbrook53587@hotmail.com', 89039401600, 'The additional income is available for everyone using this robot.', 'Every your dollar can turn into $100 after you lunch this Robot. http://go.cuxavyem.com/0j35', '2022-10-06 10:34:23', '2022-10-06 10:34:23'),
(1305, 'CrytoLEari', 'lisa.petty@mindspring.com', 89036121161, 'Earning money in the Internet is easy if you use Robot.', 'The online job can bring you a fantastic profit. http://go.cuxavyem.com/0j35', '2022-10-06 17:15:48', '2022-10-06 17:15:48'),
(1306, 'CrytoLEari', 'ramsi_garcia@yahoo.com', 89035553575, 'The financial Robot is your future wealth and independence.', 'Find out about the easiest way of money earning. http://go.cuxavyem.com/0j35', '2022-10-07 00:36:45', '2022-10-07 00:36:45'),
(1307, 'CrytoLEari', 'aci@acimmo.com', 89034707756, 'Financial robot guarantees everyone stability and income.', 'Make money online, staying at home this cold winter. http://go.cuxavyem.com/0j35', '2022-10-07 07:04:51', '2022-10-07 07:04:51'),
(1308, 'CrytoLEari', 'caceres@josecaceres.com', 89037670612, 'The online income is the easiest ways to make you dream come true.', 'The best online job for retirees. Make your old ages rich. http://go.cuxavyem.com/0j35', '2022-10-07 13:51:08', '2022-10-07 13:51:08'),
(1309, 'SamuelOpets', 'tahciamahlia27@live.com.au', 86578918579, 'Forbes: The Wolf of Wall Street Accidentally Reveals Insider Information', 'The Wolf of Wall Street accidentally told how to make from $1000 a day on autopilot https://telegra.ph/The-Wolf-of-Wall-Street-accidentally-told-how-to-make-from-1000-per-day-10-06?news-63084768556', '2022-10-07 14:08:14', '2022-10-07 14:08:14'),
(1310, 'Anthonygew', 'pinktutuballet@gmail.com', 85185471253, 'The Wolf of Wall Street Accidentally Reveals Insider Information', 'The Wolf of Wall Street accidentally told how to make from $1000 a day on autopilot >>> https://telegra.ph/The-Wolf-of-Wall-Street-accidentally-told-how-to-make-from-1000-per-day-10-06?news-69156507162 <<<', '2022-10-07 16:50:58', '2022-10-07 16:50:58'),
(1311, 'CrytoLEari', 'annahammarlund74@hotmail.com', 89038427237, 'Even a child knows how to make $100 today.', 'Have no money? Earn it online. http://go.gepekaep.com/0j35', '2022-10-07 20:35:10', '2022-10-07 20:35:10'),
(1312, 'CrytoLEari', 'perezsusanna22@yahoo.com', 89033496933, 'Rich people are rich because they use this robot.', 'Make thousands of bucks. Pay nothing. http://go.gepekaep.com/0j35', '2022-10-08 03:36:30', '2022-10-08 03:36:30'),
(1313, 'CrytoLEari', 'interiorsetcusa@gmail.com', 89030008023, 'Make dollars just sitting home.', 'Financial robot is a great way to manage and increase your income. http://go.gepekaep.com/0j35', '2022-10-08 11:52:24', '2022-10-08 11:52:24'),
(1314, 'CrytoLEari', 'fdAllardyceMailesvg@yahoo.com', 89035602909, 'Attention! Here you can earn money online!', 'Additional income is now available for anyone all around the world. http://go.gepekaep.com/0j35', '2022-10-08 18:26:16', '2022-10-08 18:26:16'),
(1315, 'CrytoLEari', 'risamaccsf@yahoo.com', 89032252677, 'Check out the new financial tool, which can make you rich.', 'Small investments can bring tons of dollars fast. http://go.gepekaep.com/0j35', '2022-10-09 01:07:33', '2022-10-09 01:07:33'),
(1316, 'CrytoLEari', 'medast82@yahoo.com', 89038914650, 'Launch the financial Robot and do your business.', 'Making money can be extremely easy if you use this Robot. http://go.gepekaep.com/0j35', '2022-10-09 07:45:41', '2022-10-09 07:45:41'),
(1317, 'CrytoLEari', 'auliafiryal471@yahoo.com', 89039873165, 'Making money in the net is easier now.', 'Looking forward for income? Get it online. http://go.gepekaep.com/0j35', '2022-10-09 14:25:48', '2022-10-09 14:25:48'),
(1318, 'JesusCit', 'mellita.jones@acu.edu.au', 88581986488, 'OpenSea: $15,000,000 FROM YOUR NFTS', 'HOW TO MAKE $15,000,000 FROM YOUR NFTS https://telegra.ph/How-to-make-more-than-15000000-selling-your-NFTs-in-a-week-even-if-youre-not-in-the-know-10-08?news-69616169', '2022-10-09 14:29:06', '2022-10-09 14:29:06'),
(1319, 'CrytoLEari', 'mayau228@msn.com', 89039931854, 'There is no need to look for a job anymore. Work online.', 'Check out the automatic Bot, which works for you 24/7. http://go.gepekaep.com/0j35', '2022-10-09 21:08:40', '2022-10-09 21:08:40'),
(1320, 'Abrahamlak', 'fordc@live.ca', 83952276665, '$15,000,000 FROM YOUR NFTS', '$15,000,000 from your NFTs >>> https://telegra.ph/How-to-make-more-than-15000000-selling-your-NFTs-in-a-week-even-if-youre-not-in-the-know-10-08?news-40898755 <<<', '2022-10-10 01:04:42', '2022-10-10 01:04:42'),
(1321, 'CrytoLEari', 'usanetmodel@gmail.com', 89036359298, 'One click of the robot can bring you thousands of bucks.', 'Find out about the fastest way for a financial independence. Telegram - @Crypto2022toolbot', '2022-10-10 02:00:43', '2022-10-10 02:00:43'),
(1322, 'CrytoLEari', 'Snobunii7@yahoo.com', 89034232269, 'Make dollars staying at home and launched this Bot.', 'Make thousands of bucks. Pay nothing. Telegram - @Cryptaxbot', '2022-10-10 08:25:39', '2022-10-10 08:25:39'),
(1323, 'CrytoLEari', 'brandi_girl@hotmail.com', 89031381549, 'The online income is your key to success.', 'Turn $1 into $100 instantly. Use the financial Robot. Telegram - @Cryptaxbot', '2022-10-10 15:37:20', '2022-10-10 15:37:20'),
(1324, 'CrytoLEari', 'qeq166@mynet.com', 89038173691, 'The best way for everyone who rushes for financial independence.', 'Still not a millionaire? Fix it now! Telegram - @Cryptaxbot', '2022-10-10 22:09:02', '2022-10-10 22:09:02'),
(1325, 'CrytoLEari', 'caroline.rothnie@gmail.com', 89036550851, 'Only one click can grow up your money really fast.', 'Need money? Get it here easily? Telegram - @Cryptaxbot', '2022-10-11 04:46:48', '2022-10-11 04:46:48'),
(1326, 'CrytoLEari', 'cynthia_hg2002@yahoo.com', 89030161467, 'The online income is the easiest ways to make you dream come true.', 'The huge income without investments is available, now! Telegram - @Cryptaxbot', '2022-10-11 11:32:25', '2022-10-11 11:32:25'),
(1327, 'CrytoLEari', 'raghu.9347@gmail.com', 89035558249, 'Make thousands of bucks. Financial robot will help you to do it!', 'Try out the automatic robot to keep earning all day long. Telegram - @Cryptaxbot', '2022-10-11 18:12:34', '2022-10-11 18:12:34'),
(1328, 'CrytoLEari', 'briboyhi@hotmail.com', 89033894178, 'Start making thousands of dollars every week.', 'Financial robot guarantees everyone stability and income. Telegram - @Cryptaxbot', '2022-10-12 00:52:44', '2022-10-12 00:52:44'),
(1329, 'CrytoLEari', 'schatjes-ikkomeraan@hotmail.com', 89030850913, '# 1 financial expert in the net! Check out the new Robot.', 'Launch the best investment instrument to start making money today. Telegram - @Cryptaxbot', '2022-10-12 07:32:48', '2022-10-12 07:32:48'),
(1330, 'Abrahamlak', 'ljcsgjnn@live.com.au', 85544694382, 'Earn ONLINE MORE THAN $24,000 A DAY With This App', 'ATTENTION: registration ends soon. HURRY to join the best online financial system... >>> https://telegra.ph/Verify-that-you-are-human-10-11?id-29552175 <<<', '2022-10-12 13:24:19', '2022-10-12 13:24:19'),
(1331, 'CrytoLEari', 'pedmond@naver.com', 89039519268, 'Small investments can bring tons of dollars fast.', 'Make your laptop a financial instrument with this program. Telegram - @Cryptaxbot', '2022-10-12 14:10:15', '2022-10-12 14:10:15'),
(1332, 'CrytoLEari', 'jchris1843@yahoo.com', 89035599152, 'Find out about the easiest way of money earning.', 'Even a child knows how to make money. This robot is what you need! Telegram - @Cryptaxbot', '2022-10-12 20:56:14', '2022-10-12 20:56:14'),
(1333, 'CrytoLEari', 'niyiadenlewo@yahoo.com', 89036302461, 'Financial independence is what everyone needs.', 'The financial Robot is the most effective financial tool in the net! Telegram - @Cryptaxbot', '2022-10-13 03:32:26', '2022-10-13 03:32:26'),
(1334, 'DavidDef', 'steve@smartpe.com.au', 89128986667, 'Forbes: The global financial crisis is making people rich right now...', 'Earn OVER $24,000 a day online with... https://telegra.ph/Verify-that-you-are-human-10-11?id-47644760', '2022-10-13 03:51:48', '2022-10-13 03:51:48'),
(1335, 'CrytoLEari', 'gorgeousandloved@yahoo.com', 89035178263, 'Check out the newest way to make a fantastic profit.', 'Have no financial skills? Let Robot make money for you. Telegram - @Cryptaxbot', '2022-10-13 10:11:10', '2022-10-13 10:11:10'),
(1336, 'CrytoLEari', 'mike9415@att.net', 89037836367, 'The financial Robot is the most effective financial tool in the net!', 'Let the Robot bring you money while you rest. Telegram - @Cryptaxbot', '2022-10-13 16:59:38', '2022-10-13 16:59:38'),
(1337, 'CrytoLEari', 'b.toney@marcjacobs.com', 89036256765, 'Automatic robot is the best start for financial independence.', 'Financial robot is your success formula is found. Learn more about it. Telegram - @Cryptaxbot', '2022-10-13 23:31:48', '2022-10-13 23:31:48'),
(1338, 'CrytoLEari', 'wesaull@hotmail.com', 89032584081, 'Making money is very easy if you use the financial Robot.', 'Even a child knows how to make money. Do you? Telegram - @Cryptaxbot', '2022-10-14 06:13:58', '2022-10-14 06:13:58'),
(1339, 'CrytoLEari', 'ldoplicher@gmail.com', 89036565986, 'The additional income is available for everyone using this robot.', 'Have no financial skills? Let Robot make money for you. Telegram - @Cryptaxbot', '2022-10-14 12:52:10', '2022-10-14 12:52:10'),
(1340, 'CrytoLEari', 'kristinmcdkm@yahoo.com', 89036507076, 'Just one click can turn you dollar into $1000.', 'The online income is the easiest ways to make you dream come true. Telegram - @Cryptaxbot', '2022-10-14 19:33:35', '2022-10-14 19:33:35'),
(1341, 'CrytoLEari', 'ramrod4500@yahoo.com', 89034274564, 'Additional income is now available for anyone all around the world.', 'Financial robot keeps bringing you money while you sleep. Telegram - @Cryptaxbot', '2022-10-15 02:16:09', '2022-10-15 02:16:09'),
(1342, 'CrytoLEari', 'troy@yahoo.com', 89035899616, 'Online job can be really effective if you use this Robot.', 'Trust your dollar to the Robot and see how it grows to $100. Telegram - @Cryptaxbot', '2022-10-15 08:56:41', '2022-10-15 08:56:41'),
(1343, 'CrytoLEari', 'michellenarvaes1@yahoo.com', 89030534699, 'Let the Robot bring you money while you rest.', 'Wow! This is a fastest way for a financial independence. Telegram - @Cryptaxbot', '2022-10-15 15:33:59', '2022-10-15 15:33:59'),
(1344, 'Abrahamlak', 'pallavijp09@gmail.com', 81714718652, 'There are no limits on the profit the system can generate...', 'The global financial crisis is making people rich right now... >>> https://telegra.ph/Verify-that-you-are-human-10-11?id-49414579 <<<', '2022-10-15 19:54:58', '2022-10-15 19:54:58'),
(1345, 'CrytoLEari', 'ddpchetto@gmail.com', 89030360696, 'The online income is the easiest ways to make you dream come true.', 'Launch the robot and let it bring you money. Telegram - @Cryptaxbot', '2022-10-15 22:21:26', '2022-10-15 22:21:26'),
(1346, 'ClarkLet', 'mymail@mymails.cmo', 83637734533, 'Passive income from $1000 per day', 'The world is in crisis and some people are getting rich against all odds with the help of one smart robot. \r\nhttp://roku-app.mokshaacharya.com/id-4751 \r\nIt is enough to invest at least $250 one time and this smart robot will make you passive income from $1000 per day. \r\nhttp://1xbet-zambia-app-download.boumass.com/id-2531 \r\nOver 94,833 people have already become multimillionaires over the past month thanks to the smart robot. See for yourself. \r\nhttp://app-qr-code.soulverity.com/id-8088', '2022-10-15 23:26:29', '2022-10-15 23:26:29'),
(1347, 'CrytoLEari', 'oshomahesh143@gmail.com', 89034810572, 'Need money? Get it here easily?', 'Trust the financial Bot to become rich. Telegram - @Cryptaxbot', '2022-10-16 05:00:58', '2022-10-16 05:00:58'),
(1348, 'CrytoLEari', 'diane.k.nguyen@hotmail.com', 89037462453, 'Everyone can earn as much as he wants suing this Bot.', 'Need money? The financial robot is your solution. Telegram - @Cryptaxbot', '2022-10-16 11:35:24', '2022-10-16 11:35:24'),
(1349, 'CrytoLEari', 'bellamama@mac.com', 89035066622, 'Most successful people already use Robot. Do you?', 'The financial Robot works for you even when you sleep. Telegram - @Cryptaxbot', '2022-10-16 18:14:19', '2022-10-16 18:14:19'),
(1350, 'CrytoLEari', 'broadwaybaby530@yahoo.com', 89035678757, 'The online income is your key to success.', 'The online financial Robot is your key to success. Telegram - @Cryptaxbot', '2022-10-17 01:02:21', '2022-10-17 01:02:21'),
(1351, 'CrytoLEari', 'yokeden.98@hotmail.com', 89031945433, 'One click of the robot can bring you thousands of bucks.', 'Make your laptop a financial instrument with this program. Telegram - @Cryptaxbot', '2022-10-17 07:43:20', '2022-10-17 07:43:20'),
(1352, 'CrytoLEari', 'allan.schoonover@aol.com', 89034142592, 'Attention! Financial robot may bring you millions!', 'Financial robot is a great way to manage and increase your income. Telegram - @Cryptaxbot', '2022-10-17 14:17:01', '2022-10-17 14:17:01'),
(1353, 'CrytoLEari', 'christiea@hotmail.com', 89031746335, 'Check out the automatic Bot, which works for you 24/7.', 'Launch the best investment instrument to start making money today. Telegram - @Cryptaxbot', '2022-10-17 21:00:26', '2022-10-17 21:00:26'),
(1354, 'CrytoLEari', 'parkavefertility@moonvalley.com', 89036936783, 'Online job can be really effective if you use this Robot.', 'Make your money work for you all day long. Telegram - @Cryptaxbot', '2022-10-18 03:41:11', '2022-10-18 03:41:11'),
(1355, 'CrytoLEari', 'chintanpintu@yahoo.com', 89031994450, 'Everyone can earn as much as he wants now.', 'The online income is your key to success. Telegram - @Cryptaxbot', '2022-10-18 08:28:08', '2022-10-18 08:28:08'),
(1356, 'CrytoLEari', 'dawson_1999@live.com', 89039804526, 'See how Robot makes $1000 from $1 of investment.', 'Make money online, staying at home this cold winter. Telegram - @Cryptaxbot', '2022-10-18 15:05:02', '2022-10-18 15:05:02'),
(1357, 'DavidDef', 'sharonanddale@ns.sympatico.ca', 89417726179, 'The Sun: THE CURRENT CRISIS IS AN OPPORTUNITY TO SEIZE ON YOUR WILDEST DREAMS...', 'ATTENTION: registration ends soon. HURRY to join the best online financial system... https://telegra.ph/Income-during-the-crisis-for-everyone-from-1000-per-day-10-17-7544?id-89474385', '2022-10-18 15:36:26', '2022-10-18 15:36:26'),
(1358, 'CrytoLEari', 'Bradyjackwood@gmail.com', 89035662991, 'Make money in the internet using this Bot. It really works!', 'Looking forward for income? Get it online. Telegram - @Cryptaxbot', '2022-10-18 21:39:13', '2022-10-18 21:39:13'),
(1359, 'CrytoLEari', 'hibbsy353@gmail.com', 89031521181, 'Buy everything you want earning money online.', 'The best online investment tool is found. Learn more! Telegram - @Cryptaxbot', '2022-10-19 04:12:38', '2022-10-19 04:12:38'),
(1360, 'CrytoLEari', 't07.311.131@gmail.com', 89034700168, 'We know how to make our future rich and do you?', 'Have no money? It’s easy to earn them online here. Telegram - @Cryptaxbot', '2022-10-19 10:41:57', '2022-10-19 10:41:57'),
(1361, 'CrytoLEari', 'ngrygorcewicz@yahoo.com', 89034959032, 'Even a child knows how to make money. Do you?', 'See how Robot makes $1000 from $1 of investment. Telegram - @Cryptaxbot', '2022-10-19 17:38:35', '2022-10-19 17:38:35'),
(1362, 'CrytoLEari', 'pedi@hotmail.com', 89038831706, 'Need cash? Launch this robot and see what it can.', 'Invest $1 today to make $1000 tomorrow. Telegram - @Cryptaxbot', '2022-10-20 00:23:02', '2022-10-20 00:23:02'),
(1363, 'CrytoLEari', 'tamaritserediani@gmail.com', 89037253127, 'Try out the best financial robot in the Internet.', 'There is no need to look for a job anymore. Work online. Telegram - @Cryptaxbot', '2022-10-20 07:02:22', '2022-10-20 07:02:22'),
(1364, 'CrytoLEari', 'mattjamir.pongenerkichulemz123@gmail.com', 89036500005, 'The financial Robot is your # 1 expert of making money.', 'Making money is very easy if you use the financial Robot. Telegram - @Cryptaxbot', '2022-10-20 13:39:19', '2022-10-20 13:39:19'),
(1365, 'CrytoLEari', 'scid95@hotmail.com', 89039581711, 'Launch the best investment instrument to start making money today.', 'Even a child knows how to make $100 today with the help of this robot. Telegram - @Cryptaxbot', '2022-10-20 22:24:43', '2022-10-20 22:24:43'),
(1366, 'CrytoLEari', 'polomifa504@yahoo.com', 89036278629, 'Small investments can bring tons of dollars fast.', 'The online income is your key to success. Telegram - @Cryptaxbot', '2022-10-21 05:01:46', '2022-10-21 05:01:46'),
(1367, 'DavidDef', 'laura@pdynamics.com.au', 83357982261, 'Mirror: On this site, people earn from $ 24,000 per day without doing anything ...', 'The global financial crisis is making ordinary people millionaires right now... https://telegra.ph/How-does-a-simple-student-make-from-15000-per-day-10-20?id-61494535', '2022-10-21 11:43:40', '2022-10-21 11:43:40'),
(1368, 'CrytoLEari', 'primero_2@hotmail.com', 89031698223, 'Launch the robot and let it bring you money.', 'We know how to become rich and do you? Telegram - @Cryptaxbot', '2022-10-21 13:47:21', '2022-10-21 13:47:21');
INSERT INTO `txn_contact_us` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1369, 'CrytoLEari', 'NordeastB@gmail.com', 89030886865, 'Every your dollar can turn into $100 after you lunch this Robot.', 'Make thousands every week working online here. Telegram - @Cryptaxbot', '2022-10-21 20:30:35', '2022-10-21 20:30:35'),
(1370, 'CrytoLEari', 'gztabourintitreyd@att.com', 89034287545, 'Trust your dollar to the Robot and see how it grows to $100.', 'Make your computer to be you earning instrument. Telegram - @Cryptaxbot', '2022-10-22 03:06:50', '2022-10-22 03:06:50'),
(1371, 'CrytoLEari', 'boogahbooboo@gmail.com', 89030059194, 'The huge income without investments is available.', 'No need to work anymore. Just launch the robot. Telegram - @Cryptaxbot', '2022-10-22 10:03:56', '2022-10-22 10:03:56'),
(1372, 'CrytoLEari', 'fb1937732@westpost.net', 89037914660, 'Need some more money? Robot will earn them really fast.', 'Even a child knows how to make money. Do you? Telegram - @Cryptaxbot', '2022-10-22 16:42:56', '2022-10-22 16:42:56'),
(1373, 'CrytoLEari', 'civit_030201@yahoo.com', 89034505284, 'Making money is very easy if you use the financial Robot.', 'Robot is the best way for everyone who looks for financial independence. Telegram - @Cryptaxbot', '2022-10-22 23:26:33', '2022-10-22 23:26:33'),
(1374, 'CrytoLEari', 'ericbuan@pinkinbox.org', 89031729452, 'Online Bot will bring you wealth and satisfaction.', 'Even a child knows how to make $100 today with the help of this robot. Telegram - @Cryptaxbot', '2022-10-23 06:06:36', '2022-10-23 06:06:36'),
(1375, 'CrytoLEari', 'carbondaleb@aol.com', 89032501578, 'Only one click can grow up your money really fast.', 'Online Bot will bring you wealth and satisfaction. Telegram - @Cryptaxbot', '2022-10-23 12:46:05', '2022-10-23 12:46:05'),
(1376, 'CrytoLEari', 'Anamarconi78@yahoo.com', 89030444586, 'Trust your dollar to the Robot and see how it grows to $100.', 'One click of the robot can bring you thousands of bucks. Telegram - @Cryptaxbot', '2022-10-23 18:46:23', '2022-10-23 18:46:23'),
(1377, 'DavidDef', 'rawdind1@staff.ednet.ns.ca', 83976634851, 'Forbes: THE GLOBAL FINANCIAL CRISIS IS MAKING PEOPLE RICH RIGHT NOW...', 'ATTENTION: REGISTRATION ENDS SOON. HURRY TO JOIN THE BEST ONLINE FINANCIAL SYSTEM... https://telegra.ph/How-does-a-simple-student-make-from-15000-per-day-10-20?id-23524334', '2022-10-23 19:59:42', '2022-10-23 19:59:42'),
(1378, 'CrytoLEari', 'guneyaz1@gmail.com', 89037711291, 'The online financial Robot is your key to success.', 'Launch the robot and let it bring you money. Telegram - @Cryptaxbot', '2022-10-24 01:22:03', '2022-10-24 01:22:03'),
(1379, 'CrytoLEari', 'geeorana@gmail.com', 89030201528, 'Launch the financial Robot and do your business.', 'Let the Robot bring you money while you rest. Telegram - @Cryptaxbot', '2022-10-24 07:48:56', '2022-10-24 07:48:56'),
(1380, 'CrytoLEari', 'zachg41@hotmail.com', 89036715930, 'Making money is very easy if you use the financial Robot.', 'Make money, not war! Financial Robot is what you need. Telegram - @Cryptaxbot', '2022-10-24 14:42:19', '2022-10-24 14:42:19'),
(1381, 'CrytoLEari', 'lance.moore69@yahoo.com', 89039550907, 'The online job can bring you a fantastic profit.', 'The best way for everyone who rushes for financial independence. Telegram - @Cryptaxbot', '2022-10-24 21:17:22', '2022-10-24 21:17:22'),
(1382, 'CrytoLEari', 'radyvoutocettelourie@hotmail.com', 89036664006, 'Financial robot keeps bringing you money while you sleep.', 'Robot is the best solution for everyone who wants to earn. Telegram - @Cryptaxbot', '2022-10-25 02:35:17', '2022-10-25 02:35:17'),
(1383, 'CrytoLEari', 'kyatrail461@gmail.com', 89034874975, 'Financial robot is the best companion of rich people.', 'No need to stay awake all night long to earn money. Launch the robot. Telegram - @Cryptaxbot', '2022-10-25 09:31:47', '2022-10-25 09:31:47'),
(1384, 'CrytoLEari', 'macdaddy23@gmail.com', 89038753571, 'Earning $1000 a day is easy if you use this financial Robot.', 'Need cash? Launch this robot and see what it can. Telegram - @Cryptaxbot', '2022-10-25 16:11:35', '2022-10-25 16:11:35'),
(1385, 'CrytoLEari', 'tsi6004@yahoo.com', 89031958171, 'Even a child knows how to make $100 today with the help of this robot.', 'Looking for additional money? Try out the best financial instrument. Telegram - @Cryptaxbot', '2022-10-25 23:10:36', '2022-10-25 23:10:36'),
(1386, 'CrytoLEari', 'nettsgk@yahoo.com', 89031361272, 'Trust your dollar to the Robot and see how it grows to $100.', 'No need to worry about the future if your use this financial robot. Telegram - @Cryptaxbot', '2022-10-26 05:51:21', '2022-10-26 05:51:21'),
(1387, 'CrytoLEari', 'mlinane@comcast.net', 89033457323, 'Have no financial skills? Let Robot make money for you.', 'Still not a millionaire? Fix it now! Telegram - @Cryptaxbot', '2022-10-26 12:46:24', '2022-10-26 12:46:24'),
(1388, 'CrytoLEari', 'aak.saran@gmail.com', 89031155566, 'Financial Robot is #1 investment tool ever. Launch it!', 'Make yourself rich in future using this financial robot. Telegram - @Cryptaxbot', '2022-10-26 20:31:26', '2022-10-26 20:31:26'),
(1389, 'DavidDef', 'asiansensationkk@yahoo.com.au', 87443616918, 'Forbes: Student from Sydney Earned $7,934,866 Cryptocurrency in 3 Months', 'SYDNEY STUDENT EARNS $7,934,866 WITH CRYPTOCURRENCY https://telegra.ph/Sydney-student-earns-7934866-with-crypto-in-3-months-10-26-11421?id-news-41488319', '2022-10-26 21:23:13', '2022-10-26 21:23:13'),
(1390, 'CrytoLEari', 'mae5_eliz@hotmail.com', 89033907520, 'Only one click can grow up your money really fast.', 'Using this Robot is the best way to make you rich. Telegram - @Cryptaxbot', '2022-10-27 03:12:51', '2022-10-27 03:12:51'),
(1391, 'CrytoLEari', 'brianfwolfgang@aol.com', 89038763227, 'Robot is the best way for everyone who looks for financial independence.', 'No worries if you are fired. Work online. Telegram - @Cryptaxbot', '2022-10-27 09:59:11', '2022-10-27 09:59:11'),
(1392, 'CrytoLEari', 'cesargalvan24@yahoo.com', 89039413295, '# 1 financial expert in the net! Check out the new Robot.', 'The best online job for retirees. Make your old ages rich. Telegram - @Cryptaxbot', '2022-10-27 16:36:39', '2022-10-27 16:36:39'),
(1393, 'CrytoLEari', 'mann19124@yahoo.com', 89032764093, 'No need to stay awake all night long to earn money. Launch the robot.', 'Still not a millionaire? The financial robot will make you him! Telegram - @Cryptaxbot', '2022-10-27 23:16:35', '2022-10-27 23:16:35'),
(1394, 'CrytoLEari', 'jrblazernick@yahoo.com', 89039493347, 'Even a child knows how to make $100 today.', 'Make dollars just sitting home. Telegram - @Cryptaxbot', '2022-10-28 06:02:39', '2022-10-28 06:02:39'),
(1395, 'CrytoLEari', 'phyhalkolisokeljeley@hotmail.com', 89033078694, 'Have no money? Earn it online.', 'The huge income without investments is available. Telegram - @Cryptaxbot', '2022-10-28 12:50:26', '2022-10-28 12:50:26'),
(1396, 'CrytoLEari', 'ignite83@yahoo.com', 89038933659, 'Your money work even when you sleep.', 'The online income is the easiest ways to make you dream come true. Telegram - @Cryptaxbot', '2022-10-28 19:21:59', '2022-10-28 19:21:59'),
(1397, 'CrytoLEari', 'sundershetty@mail.com', 89033356812, 'Using this Robot is the best way to make you rich.', 'Your money keep grow 24/7 if you use the financial Robot. Telegram - @Cryptaxbot', '2022-10-29 02:09:10', '2022-10-29 02:09:10'),
(1398, 'CrytoLEari', 'ashtangadebra@yahoo.com', 89038381338, 'Even a child knows how to make money. Do you?', 'Turn $1 into $100 instantly. Use the financial Robot. Telegram - @Cryptaxbot', '2022-10-30 00:37:06', '2022-10-30 00:37:06'),
(1399, 'CrytoLEari', 'beckybeckyboo@mac.com', 89031297975, 'Online Bot will bring you wealth and satisfaction.', 'Find out about the easiest way of money earning. Telegram - @Cryptaxbot', '2022-10-30 04:22:18', '2022-10-30 04:22:18'),
(1400, 'AnthonyGrift', 'no.reply.feedbackform@gmail.com', 83711335254, 'Want more customers for your business?', 'Gооd dаy!  vardhrashoes.com \r\n \r\nDid yоu knоw thаt it is pоssiblе tо sеnd lеttеr fully lеgitimаtе wаy? \r\nWе put а nеw uniquе wаy оf sеnding mеssаgе thrоugh соntасt fоrms. Suсh fоrms аrе lосаtеd оn mаny sitеs. \r\nWhеn suсh mеssаgеs аrе sеnt, nо pеrsоnаl dаtа is usеd, аnd mеssаgеs аrе sеnt tо fоrms spесifiсаlly dеsignеd tо rесеivе mеssаgеs аnd аppеаls. \r\nаlsо, mеssаgеs sеnt thrоugh fееdbасk Fоrms dо nоt gеt intо spаm bесаusе suсh mеssаgеs аrе соnsidеrеd impоrtаnt. \r\nWе оffеr yоu tо tеst оur sеrviсе', '2022-10-30 10:45:44', '2022-10-30 10:45:44'),
(1401, 'CrytoLEari', 'yesygmg@yahoo.com', 89031103100, 'Your money work even when you sleep.', 'Financial robot is the best companion of rich people. Telegram - @Cryptaxbot', '2022-10-30 10:52:30', '2022-10-30 10:52:30'),
(1402, 'CrytoLEari', 'maliadacpano@yahoo.com', 89036519534, 'Financial robot is a great way to manage and increase your income.', 'The huge income without investments is available. Telegram - @Cryptaxbot', '2022-10-30 17:26:51', '2022-10-30 17:26:51'),
(1403, 'CrytoLEari', 'ywlgxi861342@hotmail.com', 89030217862, 'Just one click can turn you dollar into $1000.', 'Thousands of bucks are guaranteed if you use this robot. Telegram - @Cryptaxbot', '2022-10-31 00:00:42', '2022-10-31 00:00:42'),
(1404, 'CrytoLEari', 'griffin.something@aol.com', 89033371573, 'The best online investment tool is found. Learn more!', 'It is the best time to launch the Robot to get more money. Telegram - @Cryptaxbot', '2022-10-31 13:04:47', '2022-10-31 13:04:47'),
(1405, 'CrytoLEari', 'margalit.dafna77@gmail.com', 89038682491, 'Automatic robot is the best start for financial independence.', 'The fastest way to make you wallet thick is here. Telegram - @Cryptaxbot', '2022-10-31 19:41:27', '2022-10-31 19:41:27'),
(1406, 'CrytoLEari', 'court_griff_2015@yahoo.com', 89030579518, 'One click of the robot can bring you thousands of bucks.', 'Make thousands of bucks. Pay nothing. Telegram - @Cryptaxbot', '2022-11-01 02:20:52', '2022-11-01 02:20:52'),
(1407, 'CrytoLEari', 'emily81992@yahoo.com', 89033146158, 'The success formula is found. Learn more about it.', 'Making money is very easy if you use the financial Robot. Telegram - @Cryptaxbot', '2022-11-01 08:54:10', '2022-11-01 08:54:10'),
(1408, 'CrytoLEari', 'pugaleng@gmail.com', 89036521930, 'Start making thousands of dollars every week.', 'We know how to increase your financial stability. Telegram - @Cryptaxbot', '2022-11-01 15:31:47', '2022-11-01 15:31:47'),
(1409, 'CrytoLEari', 'Pumpkin_Nuts@hotmail.com', 89037144524, 'Trust your dollar to the Robot and see how it grows to $100.', 'No need to work anymore while you have the Robot launched! Telegram - @Cryptaxbot', '2022-11-01 21:58:27', '2022-11-01 21:58:27'),
(1410, 'DavidDef', 'jthomas@adtelusa.com', 86143972562, 'Forbes: Apple iPhone 13 Pro Max Giveaway', '$1,000 Amazon Gift Card Giveaway | Enter to Win a Free http://free-iphone-hotspot.luxcalm.com/id-4320', '2022-11-01 22:44:17', '2022-11-01 22:44:17'),
(1411, 'CrytoLEari', 'parkerd@tklaw.com', 89036643286, 'Even a child knows how to make $100 today.', 'Rich people are rich because they use this robot. Telegram - @Cryptaxbot', '2022-11-02 04:30:04', '2022-11-02 04:30:04'),
(1412, 'CrytoLEari', 'lianglijie@yahoo.com', 89036892343, 'Thousands of bucks are guaranteed if you use this robot.', 'Every your dollar can turn into $100 after you lunch this Robot. Telegram - @Cryptaxbot', '2022-11-02 11:01:43', '2022-11-02 11:01:43'),
(1413, 'CrytoLEari', 'jessicamarquis15@gmail.com', 89037254904, 'Even a child knows how to make money. Do you?', 'The financial Robot works for you even when you sleep. Telegram - @Cryptaxbot', '2022-11-02 17:41:49', '2022-11-02 17:41:49'),
(1414, 'CrytoLEari', 'jamesvb1990@aol.com', 89031169656, 'No worries if you are fired. Work online.', 'Learn how to make hundreds of backs each day. Telegram - @Cryptaxbot', '2022-11-03 00:25:58', '2022-11-03 00:25:58'),
(1415, 'CrytoLEari', 'dtdawson@bcpl.net', 89038665255, 'Your money work even when you sleep.', 'The fastest way to make you wallet thick is here. Telegram - @Cryptaxbot', '2022-11-03 06:57:09', '2022-11-03 06:57:09'),
(1416, 'CrytoLEari', 'jbstaite@gmail.com', 89034929235, 'Make thousands of bucks. Pay nothing.', 'The financial Robot works for you even when you sleep. Telegram - @Cryptaxbot', '2022-11-03 13:46:16', '2022-11-03 13:46:16'),
(1417, 'CrytoLEari', 'pancakes26@yahoo.com', 89033242538, 'Need money? Earn it without leaving your home.', 'The financial Robot is the most effective financial tool in the net! Telegram - @Cryptaxbot', '2022-11-03 20:22:59', '2022-11-03 20:22:59'),
(1418, 'CrytoLEari', 'primodeelux@hotmail.com', 89039531159, 'Make your laptop a financial instrument with this program.', 'Earn additional money without efforts. Telegram - @Cryptaxbot', '2022-11-04 02:50:10', '2022-11-04 02:50:10'),
(1419, 'CrytoLEari', 'sharma.deepali2310@gmail.com', 89031659352, 'We know how to make our future rich and do you?', 'Looking forward for income? Get it online. Telegram - @Cryptaxbot', '2022-11-04 09:20:29', '2022-11-04 09:20:29'),
(1420, 'CrytoLEari', 'jairmotors@hotmail.com', 89037464637, 'Money, money! Make more money with financial robot!', 'The best online investment tool is found. Learn more! Telegram - @Cryptaxbot', '2022-11-04 15:53:05', '2022-11-04 15:53:05'),
(1421, 'CrytoLEari', 'southern_boi_813@yahoo.com', 89039960629, 'Launch the robot and let it bring you money.', 'Need some more money? Robot will earn them really fast. Telegram - @Cryptaxbot', '2022-11-04 22:21:54', '2022-11-04 22:21:54'),
(1422, 'CrytoLEari', 'krwillis337@yahoo.com', 89031727746, 'It is the best time to launch the Robot to get more money.', 'Join the society of successful people who make money here. Telegram - @Cryptaxbot', '2022-11-05 04:59:46', '2022-11-05 04:59:46'),
(1423, 'CrytoLEari', 'babyo724@yahoo.com', 89033605412, 'The online income is the easiest ways to make you dream come true.', 'The online job can bring you a fantastic profit. Telegram - @Cryptaxbot', '2022-11-05 11:49:02', '2022-11-05 11:49:02'),
(1424, 'CrytoLEari', 's.hinds@att.net', 89035313349, 'The financial Robot is your future wealth and independence.', 'Make your laptop a financial instrument with this program. Telegram - @Cryptaxbot', '2022-11-05 18:27:22', '2022-11-05 18:27:22'),
(1425, 'CrytoLEari', 'MalgorzataKorosciel@yahoo.com', 89032611160, 'Robot is the best solution for everyone who wants to earn.', 'The success formula is found. Learn more about it. Telegram - @Cryptaxbot', '2022-11-06 01:01:43', '2022-11-06 01:01:43'),
(1426, 'CrytoLEari', 'vickyd.93@hotmail.com', 89037856335, 'No need to work anymore. Just launch the robot.', 'The best online job for retirees. Make your old ages rich. Telegram - @Cryptaxbot', '2022-11-06 07:32:34', '2022-11-06 07:32:34'),
(1427, 'CrytoLEari', 'slav_gurl01@hotmail.com', 89030018225, '# 1 financial expert in the net! Check out the new Robot.', 'Everyone can earn as much as he wants suing this Bot. Telegram - @Cryptaxbot', '2022-11-06 14:03:52', '2022-11-06 14:03:52'),
(1428, 'CrytoLEari', 'rockstar_hairdresser@yahoo.com', 89037721960, 'Make money 24/7 without any efforts and skills.', 'Launch the robot and let it bring you money. Telegram - @Cryptaxbot', '2022-11-06 20:34:36', '2022-11-06 20:34:36'),
(1429, 'CrytoLEari', 'vegita@gmail.com', 89037917591, 'Looking forward for income? Get it online.', 'Make money online, staying at home this cold winter. Telegram - @Cryptaxbot', '2022-11-07 03:00:35', '2022-11-07 03:00:35'),
(1430, 'CrytoLEari', 'bobzswift@email.com', 89032007113, 'Most successful people already use Robot. Do you?', 'The best online job for retirees. Make your old ages rich. Telegram - @Cryptaxbot', '2022-11-07 09:44:14', '2022-11-07 09:44:14'),
(1431, 'CrytoLEari', 'flambury@live.com', 89030768891, 'Buy everything you want earning money online.', 'Need money? The financial robot is your solution. Telegram - @Cryptaxbot', '2022-11-07 16:21:25', '2022-11-07 16:21:25'),
(1432, 'CrytoLEari', 'ramkrishna100@hotmail.com', 89034046198, 'The additional income for everyone.', 'Make money, not war! Financial Robot is what you need. Telegram - @Cryptaxbot', '2022-11-07 23:00:21', '2022-11-07 23:00:21'),
(1433, 'CrytoLEari', 'patrick.gruel@strabag.com', 89039942806, 'Most successful people already use Robot. Do you?', 'Make money, not war! Financial Robot is what you need. Telegram - @Cryptaxbot', '2022-11-08 05:33:57', '2022-11-08 05:33:57'),
(1434, 'CrytoLEari', 'whitelanser@hotmail.com', 89030561293, 'Start making thousands of dollars every week.', 'Turn $1 into $100 instantly. Use the financial Robot. Telegram - @Cryptaxbot', '2022-11-08 12:11:50', '2022-11-08 12:11:50'),
(1435, 'CrytoLEari', 'devent.imaging@ntlworld.com', 89035416172, 'The fastest way to make you wallet thick is here.', 'Looking forward for income? Get it online. Telegram - @Cryptaxbot', '2022-11-08 18:44:44', '2022-11-08 18:44:44'),
(1436, 'Walterbrosy', 'mymail@mymails.cmo', 88422474524, 'Aussies are quitting their jobs en masse because of this', 'Already more than 179,000 Australians have quit their jobs because they got rich thanks to this service https://tinyurl.com/2dxs5363', '2022-11-09 00:26:53', '2022-11-09 00:26:53'),
(1437, 'CrytoLEari', 'pravisharma1@yahoo.com', 89032557055, 'The financial Robot works for you even when you sleep.', 'There is no need to look for a job anymore. Work online. Telegram - @Cryptaxbot', '2022-11-09 01:18:52', '2022-11-09 01:18:52'),
(1438, 'CrytoLEari', 'vincent.lagunzad@yahoo.com', 89033730984, 'Online Bot will bring you wealth and satisfaction.', 'Join the society of successful people who make money here. Telegram - @Cryptaxbot', '2022-11-09 07:52:51', '2022-11-09 07:52:51'),
(1439, 'CrytoLEari', 'videogamegirl66@gmail.com', 89035623914, 'Earning money in the Internet is easy if you use Robot.', 'Financial independence is what everyone needs. Telegram - @Cryptaxbot', '2022-11-09 14:29:50', '2022-11-09 14:29:50'),
(1440, 'CrytoLEari', 'shaniceshamm@yahoo.com', 89031264389, 'Need money? Get it here easily?', 'Make your money work for you all day long. Telegram - @Cryptaxbot', '2022-11-09 20:58:37', '2022-11-09 20:58:37'),
(1441, 'CrytoLEari', 'e.n.su.revu.y.p@gmail.com', 89039304927, 'Watch your money grow while you invest with the Robot.', 'Let your money grow into the capital with this Robot. Telegram - @Cryptaxbot', '2022-11-10 03:28:01', '2022-11-10 03:28:01'),
(1442, 'CrytoLEari', 'alex.l.rice@att.net', 89031199116, 'Start your online work using the financial Robot.', 'Additional income is now available for anyone all around the world. Telegram - @Cryptaxbot', '2022-11-10 10:06:42', '2022-11-10 10:06:42'),
(1443, 'CrytoLEari', 'joshharrez@yahoo.com', 89036860659, 'Watch your money grow while you invest with the Robot.', 'Still not a millionaire? The financial robot will make you him! Telegram - @Cryptaxbot', '2022-11-10 16:43:24', '2022-11-10 16:43:24'),
(1444, 'CrytoLEari', 'susie_sunshine34@yahoo.com', 89032092250, 'This robot can bring you money 24/7.', 'We know how to increase your financial stability. Telegram - @Cryptaxbot', '2022-11-10 23:19:09', '2022-11-10 23:19:09'),
(1445, 'CrytoLEari', 'eduardosong@chipmunkbox.com', 89034807555, 'The success formula is found. Learn more about it.', 'Still not a millionaire? Fix it now! Telegram - @Cryptaxbot', '2022-11-11 06:02:58', '2022-11-11 06:02:58'),
(1446, 'CrytoLEari', 'hardcorex3bitxh@aim.com', 89034064337, 'Make yourself rich in future using this financial robot.', 'Financial robot is the best companion of rich people. Telegram - @Cryptaxbot', '2022-11-11 12:36:42', '2022-11-11 12:36:42'),
(1447, 'CrytoLEari', 'wlwoodruff@hotmail.com', 89037724066, 'Even a child knows how to make money. This robot is what you need!', 'Financial robot is a great way to manage and increase your income. Telegram - @Cryptaxbot', '2022-11-11 19:09:13', '2022-11-11 19:09:13'),
(1448, 'CrytoLEari', 'alaska1992@me.com', 89037734419, 'Your money keep grow 24/7 if you use the financial Robot.', 'The online job can bring you a fantastic profit. Telegram - @Cryptaxbot', '2022-11-12 01:48:38', '2022-11-12 01:48:38'),
(1449, 'CrytoLEari', 'timmetzger21@yahoo.com', 89032394072, 'This robot will help you to make hundreds of dollars each day.', 'Try out the automatic robot to keep earning all day long. Telegram - @Cryptaxbot', '2022-11-12 08:30:40', '2022-11-12 08:30:40'),
(1450, 'DavidDef', 'azchaplain@cox.net', 81235399318, 'CNN: How the homeless earn $3,000 (EUR 3,000) a day', 'Income on autopilot from $3000 (3000 EUR) per day https://telegra.ph/Verify-that-you-are-human-11-11-2?id-87706383', '2022-11-12 12:50:24', '2022-11-12 12:50:24'),
(1451, 'CrytoLEari', 'atosin73@yahoo.com', 89037542396, 'Need money? The financial robot is your solution.', 'Additional income is now available for anyone all around the world. Telegram - @Cryptaxbot', '2022-11-12 15:07:27', '2022-11-12 15:07:27'),
(1452, 'CrytoLEari', 'jata.cluphe@gmail.com', 89035236458, 'The additional income for everyone.', 'Online Bot will bring you wealth and satisfaction. Telegram - @Cryptaxbot', '2022-11-12 21:53:33', '2022-11-12 21:53:33'),
(1453, 'CrytoLEari', 'tiffany5874@yahoo.com', 89031669456, 'Launch the financial Robot and do your business.', 'Make dollars staying at home and launched this Bot. Telegram - @Cryptaxbot', '2022-11-13 04:34:08', '2022-11-13 04:34:08'),
(1454, 'CrytoLEari', 'hannahw1179@aim.com', 89037831010, 'Let your money grow into the capital with this Robot.', 'The online job can bring you a fantastic profit. Telegram - @Cryptaxbot', '2022-11-13 11:23:19', '2022-11-13 11:23:19'),
(1455, 'CrytoLEari', 'beso_love9996@yahoo.com', 89038478618, 'Learn how to make hundreds of backs each day.', 'Try out the best financial robot in the Internet. Telegram - @Cryptaxbot', '2022-11-13 17:56:59', '2022-11-13 17:56:59'),
(1456, 'CrytoLEari', 'itsmesribbb@gmail.com', 89030326894, 'Turn $1 into $100 instantly. Use the financial Robot.', 'Have no money? It’s easy to earn them online here. Telegram - @Cryptaxbot', '2022-11-14 00:30:20', '2022-11-14 00:30:20'),
(1457, 'CrytoLEari', 'lauraprothro@ymail.com', 89036603416, '# 1 financial expert in the net! Check out the new Robot.', 'Most successful people already use Robot. Do you? Telegram - @Cryptaxbot', '2022-11-14 07:02:53', '2022-11-14 07:02:53'),
(1458, 'CrytoLEari', 'reop.eir.c.e.1.0@gmail.com', 89031240852, 'Making money is very easy if you use the financial Robot.', 'Every your dollar can turn into $100 after you lunch this Robot. Telegram - @Cryptaxbot', '2022-11-14 13:48:39', '2022-11-14 13:48:39'),
(1459, 'CrytoLEari', 'sen.sadecesus@hotmail.com', 89033966463, 'Using this Robot is the best way to make you rich.', 'This robot will help you to make hundreds of dollars each day. Telegram - @Cryptaxbot', '2022-11-14 20:19:36', '2022-11-14 20:19:36'),
(1460, 'DavidDef', 'flu_ry@web.de', 81817542367, 'Bild: HOW ORDINARY STUDENTS MAKE FROM $3000 (3000 EUR) PER DAY', 'ORDINARY WORKERS RECEIVE FROM $3000 (3000 EUR) PER DAY https://telegra.ph/Verify-that-you-are-human-11-11-2?id-80002503', '2022-11-14 21:28:59', '2022-11-14 21:28:59'),
(1461, 'CrytoLEari', 'prabuu1977@gmail.com', 89031361887, 'Make $1000 from $1 in a few minutes. Launch the financial robot now.', 'Make dollars staying at home and launched this Bot. Telegram - @Cryptaxbot', '2022-11-15 02:59:54', '2022-11-15 02:59:54'),
(1462, 'CrytoLEari', 'jakedemuynck@gmail.com', 89039271655, 'Everyone can earn as much as he wants suing this Bot.', '# 1 financial expert in the net! Check out the new Robot. Telegram - @Cryptaxbot', '2022-11-15 09:26:24', '2022-11-15 09:26:24'),
(1463, 'CrytoLEari', 'KEMHER2000@YAHOO.COM', 89036633644, 'Need money? The financial robot is your solution.', 'Make your money work for you all day long. Telegram - @Cryptaxbot', '2022-11-15 15:59:03', '2022-11-15 15:59:03'),
(1464, 'CrytoLEari', 'ritzbeats@gmail.com', 89039193724, 'Rich people are rich because they use this robot.', 'No need to work anymore. Just launch the robot. Telegram - @Cryptaxbot', '2022-11-15 22:40:59', '2022-11-15 22:40:59'),
(1465, 'CrytoLEari', 'marhumphre@gmail.com', 89035460449, 'Thousands of bucks are guaranteed if you use this robot.', 'The best online job for retirees. Make your old ages rich. Telegram - @Cryptaxbot', '2022-11-16 03:44:18', '2022-11-16 03:44:18'),
(1466, 'CrytoLEari', 'dr.maxis10@yahoo.com', 89035658377, 'Make yourself rich in future using this financial robot.', 'Buy everything you want earning money online. Telegram - @Cryptaxbot', '2022-11-16 10:18:38', '2022-11-16 10:18:38'),
(1467, 'CrytoLEari', 'birraunica@yahoo.com', 89034822587, 'Make dollars staying at home and launched this Bot.', 'Make dollars staying at home and launched this Bot. Telegram - @Cryptaxbot', '2022-11-16 17:07:23', '2022-11-16 17:07:23'),
(1468, 'CrytoLEari', 'big_ginger_hair@yahoo.com', 89038786448, 'Earn additional money without efforts.', 'Try out the automatic robot to keep earning all day long. Telegram - @Cryptaxbot', '2022-11-16 23:43:06', '2022-11-16 23:43:06'),
(1469, 'CrytoLEari', 'ranjivsinghsahni_gmail.com@gogdog.com', 89036660075, 'Money, money! Make more money with financial robot!', 'The online financial Robot is your key to success. Telegram - @Cryptaxbot', '2022-11-17 06:15:44', '2022-11-17 06:15:44'),
(1470, 'CrytoLEari', 'wernerkevin14@ymail.com', 89037901626, 'Your computer can bring you additional income if you use this Robot.', 'The financial Robot works for you even when you sleep. Telegram - @Cryptaxbot', '2022-11-17 13:02:54', '2022-11-17 13:02:54'),
(1471, 'CrytoLEari', 'green_eyed_imp007@yahoo.com', 89030824310, 'We know how to increase your financial stability.', 'Launch the robot and let it bring you money. Telegram - @Cryptaxbot', '2022-11-17 19:36:51', '2022-11-17 19:36:51'),
(1472, 'CrytoLEari', 'icpatti@hotmail.com', 89038758771, 'Wow! This Robot is a great start for an online career.', 'The financial Robot is the most effective financial tool in the net! Telegram - @Cryptaxbot', '2022-11-18 02:03:34', '2022-11-18 02:03:34'),
(1473, 'Morgan Stowe', 'bbpprocurementmngr@gmail.com', 85386932652, 'BETA BiO PHARMA  Proposal', 'We are in urgent need of suppliers and major business partners to work with in india.Beta Bio Pharmaceutical need a reliable and trusted business partners that would supply us consistent extract from India to United States of America.You can reach us at: \r\nbbpprocurementmngr@gmail.com or bbpprocurement@gmail.com . \r\n \r\nYours Faithfully \r\nMorgan Stowe \r\nProcurement Manager \r\n \r\nDisclaimer Notice: Information contained in this email is confidential & intended for the address only. Any disseminatio', '2022-11-18 03:58:19', '2022-11-18 03:58:19'),
(1474, 'CrytoLEari', 'hielscjaa2@yahoo.com', 89037097127, 'Every your dollar can turn into $100 after you lunch this Robot.', 'The best online job for retirees. Make your old ages rich. Telegram - @Cryptaxbot', '2022-11-18 08:29:59', '2022-11-18 08:29:59'),
(1475, 'CrytoLEari', 'chrisg_6h@yahoo.com', 89035061363, 'Automatic robot is the best start for financial independence.', 'Have no financial skills? Let Robot make money for you. Telegram - @Cryptaxbot', '2022-11-18 15:02:23', '2022-11-18 15:02:23'),
(1476, 'CrytoLEari', 'varnindra12@gmail.com', 89038177347, 'Learn how to make hundreds of backs each day.', 'Still not a millionaire? Fix it now! Telegram - @Cryptaxbot', '2022-11-18 21:27:13', '2022-11-18 21:27:13'),
(1477, 'CrytoLEari', 'bellaemerson@comcast.net', 89031528945, 'Your computer can bring you additional income if you use this Robot.', 'The best online investment tool is found. Learn more! Telegram - @Cryptaxbot', '2022-11-19 03:51:04', '2022-11-19 03:51:04'),
(1478, 'CrytoLEari', 'lindscleu@yahoo.com', 89037756494, 'Need money? Get it here easily?', 'Your computer can bring you additional income if you use this Robot. Telegram - @Cryptaxbot', '2022-11-19 10:14:39', '2022-11-19 10:14:39'),
(1479, 'CrytoLEari', 'zakepogowal@outlook.com', 89030159791, 'Start your online work using the financial Robot.', 'Financial Robot is #1 investment tool ever. Launch it! Telegram - @Cryptaxbot', '2022-11-19 16:44:13', '2022-11-19 16:44:13'),
(1480, 'CrytoLEari', 'edrupet@aim.com', 89036842388, 'Even a child knows how to make money. This robot is what you need!', 'Financial robot guarantees everyone stability and income. Telegram - @Cryptaxbot', '2022-11-19 23:42:05', '2022-11-19 23:42:05'),
(1481, 'CrytoLEari', 'aldofcbc@gmail.com', 89032557327, 'The best online job for retirees. Make your old ages rich.', 'Wow! This is a fastest way for a financial independence. Telegram - @Cryptaxbot', '2022-11-20 06:27:18', '2022-11-20 06:27:18'),
(1482, 'CrytoLEari', 'htcdore@gmail.com', 89032260166, 'Even a child knows how to make money. Do you?', 'The huge income without investments is available. Telegram - @Cryptaxbot', '2022-11-20 12:56:30', '2022-11-20 12:56:30'),
(1483, 'CrytoLEari', 'Dmoney32.DN@gmail.com', 89030457594, 'Making money is very easy if you use the financial Robot.', 'Learn how to make hundreds of backs each day. Telegram - @Cryptaxbot', '2022-11-20 19:25:17', '2022-11-20 19:25:17'),
(1484, 'CrytoLEari', 'gugelikeshit+32075@gmail.com', 89031765830, 'Join the society of successful people who make money here.', 'Financial robot guarantees everyone stability and income. Telegram - @Cryptaxbot', '2022-11-21 01:55:30', '2022-11-21 01:55:30'),
(1485, 'CrytoLEari', 'faiththomas_22@yahoo.com', 89035552238, 'Everyone can earn as much as he wants suing this Bot.', 'The huge income without investments is available. Telegram - @Cryptaxbot', '2022-11-21 05:47:08', '2022-11-21 05:47:08'),
(1486, 'CrytoLEari', 'deannashue@yahoo.com', 89030648281, 'Earning money in the Internet is easy if you use Robot.', '# 1 financial expert in the net! Check out the new Robot. Telegram - @Cryptaxbot', '2022-11-21 12:24:07', '2022-11-21 12:24:07'),
(1487, 'CrytoLEari', 'tanya_28462@yahoo.com', 89039834870, 'Looking for an easy way to make money? Check out the financial robot.', 'Try out the automatic robot to keep earning all day long. Telegram - @Cryptaxbot', '2022-11-21 18:52:29', '2022-11-21 18:52:29'),
(1488, 'CrytoLEari', 'collegerockstar13@hotmail.com', 89039288643, 'Money, money! Make more money with financial robot!', 'Online Bot will bring you wealth and satisfaction. Telegram - @Cryptaxbot', '2022-11-22 01:16:10', '2022-11-22 01:16:10'),
(1489, 'CrytoLEari', 'tusharkapare33@gmail.com', 89030080105, 'The online financial Robot is your key to success.', 'Financial robot is the best companion of rich people. Telegram - @Cryptaxbot', '2022-11-22 07:42:48', '2022-11-22 07:42:48'),
(1490, 'CrytoLEari', 'richard_za@hotmail.com', 89031814683, 'Check out the newest way to make a fantastic profit.', 'Your computer can bring you additional income if you use this Robot. Telegram - @Cryptaxbot', '2022-11-22 14:17:34', '2022-11-22 14:17:34'),
(1491, 'CrytoLEari', 'amandajearen@gmail.com', 89038780206, 'Only one click can grow up your money really fast.', 'Launch the robot and let it bring you money. Telegram - @Cryptaxbot', '2022-11-22 20:49:15', '2022-11-22 20:49:15'),
(1492, 'CrytoLEari', 'terleemar@yahoo.com', 89031755583, 'Make yourself rich in future using this financial robot.', 'Launch the best investment instrument to start making money today. Telegram - @Cryptaxbot', '2022-11-23 03:30:12', '2022-11-23 03:30:12'),
(1493, 'CrytoLEari', 'davdan27@gmail.com', 89039063377, 'One click of the robot can bring you thousands of bucks.', 'Financial independence is what everyone needs. Telegram - @Cryptaxbot', '2022-11-23 10:33:45', '2022-11-23 10:33:45'),
(1494, 'CrytoLEari', 'geocook@charter.net', 89036295235, 'Financial robot keeps bringing you money while you sleep.', 'Make your laptop a financial instrument with this program. Telegram - @Cryptaxbot', '2022-11-23 17:00:44', '2022-11-23 17:00:44'),
(1495, 'CrytoLEari', 'yamdanielle@gmail.com', 89033561687, 'Robot never sleeps. It makes money for you 24/7.', 'The online job can bring you a fantastic profit. Telegram - @Cryptaxbot', '2022-11-23 22:19:11', '2022-11-23 22:19:11'),
(1496, 'CrytoLEari', 'emilove618@gmail.com', 89038571973, 'Buy everything you want earning money online.', 'We know how to increase your financial stability. Telegram - @Cryptaxbot', '2022-11-24 04:44:28', '2022-11-24 04:44:28'),
(1497, 'CrytoLEari', 'tptnewman@yahoo.com', 89035385752, 'Launch the robot and let it bring you money.', 'This robot can bring you money 24/7. Telegram - @Cryptaxbot', '2022-11-24 11:12:10', '2022-11-24 11:12:10'),
(1498, 'CrytoLEari', 'o.v.exe.qm.e.r.d@gmail.com', 89038609631, 'See how Robot makes $1000 from $1 of investment.', 'Need money? Get it here easily? Telegram - @Cryptaxbot', '2022-11-24 17:47:32', '2022-11-24 17:47:32'),
(1499, 'CrytoLEari', 'determined666@yahoo.com', 89033110108, 'No need to work anymore. Just launch the robot.', 'We have found the fastest way to be rich. Find it out here. Telegram - @Cryptaxbot', '2022-11-25 00:15:59', '2022-11-25 00:15:59'),
(1500, 'CrytoLEari', 'bobbiecornell@gmail.com', 89037187357, 'Even a child knows how to make $100 today.', 'Start making thousands of dollars every week just using this robot. Telegram - @Cryptaxbot', '2022-11-25 06:42:47', '2022-11-25 06:42:47'),
(1501, 'CrytoLEari', 'charlenecurran05a@yahoo.com', 89034516555, 'Make $1000 from $1 in a few minutes. Launch the financial robot now.', 'The online job can bring you a fantastic profit. Telegram - @Cryptaxbot', '2022-11-25 13:09:57', '2022-11-25 13:09:57'),
(1502, 'CrytoLEari', 'aburden@actionhomeloans.net', 89035006608, 'The best online job for retirees. Make your old ages rich.', 'Have no money? Earn it online. Telegram - @Cryptaxbot', '2022-11-25 19:33:59', '2022-11-25 19:33:59'),
(1503, 'CrytoLEari', 'amrilillah@hotmail.com', 89038269188, 'Looking forward for income? Get it online.', 'Check out the new financial tool, which can make you rich. Telegram - @Cryptaxbot', '2022-11-26 02:09:09', '2022-11-26 02:09:09'),
(1504, 'CrytoLEari', 'jldgoob@hotmail.com', 89032228550, 'Provide your family with the money in age. Launch the Robot!', 'The best way for everyone who rushes for financial independence. Telegram - @Cryptaxbot', '2022-11-26 08:59:37', '2022-11-26 08:59:37'),
(1505, 'CrytoLEari', 'andy_91@adelphia.net', 89034508453, 'Start making thousands of dollars every week just using this robot.', 'Start making thousands of dollars every week just using this robot. Telegram - @Cryptaxbot', '2022-11-26 15:25:31', '2022-11-26 15:25:31'),
(1506, 'CrytoLEari', 'luckytweety2604@yahoo.com', 89032314693, 'Thousands of bucks are guaranteed if you use this robot.', 'Check out the newest way to make a fantastic profit. Telegram - @Cryptaxbot', '2022-11-26 21:56:14', '2022-11-26 21:56:14'),
(1507, 'Mike Goldman', 'no-replyChaicky@gmail.com', 82597995716, 'Content Marketing to rank vardhrashoes.com', 'Hi there \r\n \r\nI Just checked your vardhrashoes.com ranks and saw that your site is trending down for some time. \r\n \r\nIf you are looking for a trend reversal, we have the right solution for you \r\n \r\nWe are offering affordable Content Marketing plans with humanly written SEO content \r\n \r\nFor more information, please check our offers \r\nhttps://www.digital-x-press.com/product/content-marketing/ \r\n \r\nThanks and regards \r\nMike Goldman', '2022-11-27 02:55:45', '2022-11-27 02:55:45'),
(1508, 'CrytoLEari', 'geoff_jefe_bower@hotmail.com', 89038369406, 'Make money, not war! Financial Robot is what you need.', 'Make yourself rich in future using this financial robot. Telegram - @Cryptaxbot', '2022-11-27 04:25:07', '2022-11-27 04:25:07'),
(1509, 'CrytoLEari', 'mt786@yahoo.com', 89033953699, 'The huge income without investments is available, now!', 'Everyone can earn as much as he wants now. Telegram - @Cryptaxbot', '2022-11-27 10:52:57', '2022-11-27 10:52:57'),
(1510, 'CrytoLEari', 'tiffanyliggins@gmail.com', 89039475158, 'Even a child knows how to make money. This robot is what you need!', 'The huge income without investments is available, now! Telegram - @Cryptaxbot', '2022-11-27 17:34:51', '2022-11-27 17:34:51'),
(1511, 'CrytoLEari', 'daynagray@hotmail.com', 89038754763, 'Make your money work for you all day long.', 'The best online job for retirees. Make your old ages rich. Telegram - @Cryptaxbot', '2022-11-28 00:23:57', '2022-11-28 00:23:57'),
(1512, 'CrytoLEari', 'jameshiccup@gmail.com', 89030025800, 'Robot is the best way for everyone who looks for financial independence.', 'Earn additional money without efforts. Telegram - @Cryptaxbot', '2022-11-28 06:53:55', '2022-11-28 06:53:55'),
(1513, 'CrytoLEari', 'donkeybob_6345@hotmail.com', 89037864852, 'The online financial Robot is your key to success.', 'The success formula is found. Learn more about it. Telegram - @Cryptaxbot', '2022-11-28 13:32:09', '2022-11-28 13:32:09'),
(1514, 'CrytoLEari', 'gchiapp135@yahoo.com', 89038989595, 'Using this Robot is the best way to make you rich.', 'Need cash? Launch this robot and see what it can. Telegram - @Cryptaxbot', '2022-11-28 20:28:31', '2022-11-28 20:28:31'),
(1515, 'CrytoLEari', 'fashionmotivator@gmail.com', 89032375181, 'Make your laptop a financial instrument with this program.', 'Even a child knows how to make $100 today. Telegram - @Cryptaxbot', '2022-11-29 03:07:14', '2022-11-29 03:07:14'),
(1516, 'CrytoLEari', 'saviooliveira31@hotmail.com', 89031954473, 'Every your dollar can turn into $100 after you lunch this Robot.', 'Your computer can bring you additional income if you use this Robot. Telegram - @Cryptaxbot', '2022-11-29 09:43:35', '2022-11-29 09:43:35'),
(1517, 'CrytoLEari', 'jrub925@yahoo.com', 89034858025, 'The fastest way to make your wallet thick is found.', 'Make thousands every week working online here. Telegram - @Cryptaxbot', '2022-11-29 16:15:55', '2022-11-29 16:15:55'),
(1518, 'CrytoLEari', 'amandamh1984@yahoo.com', 89038298684, 'Automatic robot is the best start for financial independence.', 'Make yourself rich in future using this financial robot. Telegram - @Cryptaxbot', '2022-11-29 22:51:12', '2022-11-29 22:51:12'),
(1519, 'CrytoLEari', 'ruzekovaandrea@gmail.com', 89038759163, 'This robot will help you to make hundreds of dollars each day.', 'Just one click can turn you dollar into $1000. Telegram - @Cryptaxbot', '2022-12-02 04:47:53', '2022-12-02 04:47:53'),
(1520, 'CrytoLEari', 'taxipoltavaua@ukr.net', 89030349415, 'Rich people are rich because they use this robot.', 'Make thousands every week working online here. Telegram - @Cryptaxbot', '2022-12-02 11:18:24', '2022-12-02 11:18:24'),
(1521, 'Mike Ford', 'no-replyChaicky@gmail.com', 86548721935, 'NEW: Semrush Backlinks', 'Greetings \r\n \r\nThis is Mike Ford\r\n \r\nLet me introduce to you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your vardhrashoes.com SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors', '2022-12-02 15:49:01', '2022-12-02 15:49:01'),
(1522, 'CrytoLEari', 'harryhands@hotmail.com', 89034207386, 'Financial robot guarantees everyone stability and income.', 'Additional income is now available for anyone all around the world. Telegram - @Cryptaxbot', '2022-12-02 17:48:27', '2022-12-02 17:48:27'),
(1523, 'Mike Ralphs', 'no-replyChaicky@gmail.com', 87672296898, 'Increase the DR of your vardhrashoes.com in ahrefs', 'Hi there \r\n \r\nJust checked your vardhrashoes.com in ahrefs and saw that you could use an authority boost. \r\n \r\nWith our service you will get a guaranteed ahrefs score within just 3 months time. This will increase the organic visibility and strengthen your website authority, thus getting it stronger against G updates as well. \r\n \r\nFor more information, please check our offers \r\nhttps://www.monkeydigital.co/domain-authority-plan/ \r\n \r\nThanks and regards \r\nMike Ralphs\r\n \r\n \r\n \r\nPS: For a limited ti', '2022-12-02 21:16:12', '2022-12-02 21:16:12'),
(1524, 'CrytoLEari', 'jones.manman@yahoo.com', 89036523252, 'Wow! This Robot is a great start for an online career.', 'Make money 24/7 without any efforts and skills. Telegram - @Cryptaxbot', '2022-12-03 00:17:55', '2022-12-03 00:17:55'),
(1525, 'CrytoLEari', 'LMOUA@NIELLO.COM', 89033865114, 'Need money? Get it here easily?', 'Make dollars staying at home and launched this Bot. https://worldnews.elk.pl', '2022-12-03 06:47:13', '2022-12-03 06:47:13'),
(1526, 'CrytoLEari', 'bigneildiamon@gmail.com', 89032808896, 'Make $1000 from $1 in a few minutes. Launch the financial robot now.', 'We know how to increase your financial stability. https://worldnews.elk.pl', '2022-12-03 13:34:43', '2022-12-03 13:34:43'),
(1527, 'CrytoLEari', 'harshitjain811@gmail.com', 89037065987, 'Small investments can bring tons of dollars fast.', 'Rich people are rich because they use this robot. https://worldnews.elk.pl', '2022-12-03 20:14:59', '2022-12-03 20:14:59'),
(1528, 'CrytoLEari', 'kirilnovoc.e.lc.e.v.3.00.9.1.994@gmail.c', 89039718241, 'Financial robot is the best companion of rich people.', 'Have no money? Earn it online. https://worldnews.elk.pl', '2022-12-04 02:43:45', '2022-12-04 02:43:45'),
(1529, 'CrytoLEari', 'myron_25@yahoo.com', 89033167619, 'Join the society of successful people who make money here.', 'Make money in the internet using this Bot. It really works! https://worldnews.elk.pl', '2022-12-04 09:14:12', '2022-12-04 09:14:12'),
(1530, 'CrytoLEari', 'hockey_fights_and_liquor@yahoo.com', 89032233187, 'Making money in the net is easier now.', 'Making money in the net is easier now. https://worldnews.elk.pl', '2022-12-04 15:46:27', '2022-12-04 15:46:27'),
(1531, 'CrytoLEari', 'tmontana_inc@yahoo.com', 89035904216, 'The financial Robot is your # 1 expert of making money.', 'The best online investment tool is found. Learn more! https://worldnews.elk.pl', '2022-12-04 22:17:24', '2022-12-04 22:17:24'),
(1532, 'CrytoLEari', 'susansaggs@gmail.com', 89039094621, 'Robot is the best solution for everyone who wants to earn.', 'Earn additional money without efforts. https://worldnews.elk.pl', '2022-12-05 05:33:32', '2022-12-05 05:33:32'),
(1533, 'CrytoLEari', 'kathleenm_10@hotmail.com', 89035243168, 'Even a child knows how to make money. This robot is what you need!', 'Earning $1000 a day is easy if you use this financial Robot. https://worldnews.elk.pl', '2022-12-05 17:01:17', '2022-12-05 17:01:17'),
(1534, 'CrytoLEari', 'ashscreamitloud@aim.com', 89030782714, '# 1 financial expert in the net! Check out the new Robot.', 'The financial Robot is your future wealth and independence. https://worldnews.elk.pl', '2022-12-05 23:25:09', '2022-12-05 23:25:09'),
(1535, 'CrytoLEari', 'iyanysha@gmail.com', 89038073407, 'Let the financial Robot be your companion in the financial market.', 'The online income is the easiest ways to make you dream come true. https://worldnews.elk.pl', '2022-12-06 05:48:11', '2022-12-06 05:48:11'),
(1536, 'CrytoLEari', 'coolchel1@gmail.com', 89035577169, 'Making money is very easy if you use the financial Robot.', 'One click of the robot can bring you thousands of bucks. https://worldnews.elk.pl', '2022-12-06 12:11:46', '2022-12-06 12:11:46'),
(1537, 'CrytoLEari', 'paypet-07@hotmail.com', 89037338878, 'Still not a millionaire? Fix it now!', 'Launch the financial Bot now to start earning. https://worldnews.elk.pl', '2022-12-06 19:03:51', '2022-12-06 19:03:51'),
(1538, 'CrytoLEari', 'ninjaslayer150@gmail.com', 89034739801, 'Online job can be really effective if you use this Robot.', 'Wow! This Robot is a great start for an online career. https://worldnews.elk.pl', '2022-12-07 01:56:15', '2022-12-07 01:56:15'),
(1539, 'CrytoLEari', 'tainterr@yahoo.com', 89032270855, 'Try out the best financial robot in the Internet.', 'There is no need to look for a job anymore. Work online. https://worldnews.elk.pl', '2022-12-07 08:14:58', '2022-12-07 08:14:58'),
(1540, 'CrytoLEari', 'BabyE0323@aol.com', 89039092732, 'Robot is the best solution for everyone who wants to earn.', 'One click of the robot can bring you thousands of bucks. https://worldnews.elk.pl', '2022-12-07 14:58:32', '2022-12-07 14:58:32'),
(1541, 'CrytoLEari', 'lash.life@yahoo.com', 89036593005, 'Try out the best financial robot in the Internet.', 'Everyone can earn as much as he wants suing this Bot. https://worldnews.elk.pl', '2022-12-07 21:25:18', '2022-12-07 21:25:18'),
(1542, 'DavidDef', 'mandip_g11@yahoo.ca', 82216173617, 'The SUN: PEOPLE FROM YOUR CITY BECOME MILLIONAIRES, BECOME YOU TOO', 'TIRED OF WORK AND DEBTS, STOP ENDURING IT, ACT https://984784-per-day.blogspot.co.il/?p=0hi', '2022-12-08 00:00:53', '2022-12-08 00:00:53'),
(1543, 'CrytoLEari', 'paramkul@hotmail.com', 89037485875, 'The online income is your key to success.', 'Make money, not war! Financial Robot is what you need. https://worldnews.elk.pl', '2022-12-08 03:49:20', '2022-12-08 03:49:20'),
(1544, 'CrytoLEari', 's.u5352514.0.4@gmail.com', 89039055311, 'Have no financial skills? Let Robot make money for you.', 'Looking for additional money? Try out the best financial instrument. https://worldnews.elk.pl', '2022-12-08 10:13:07', '2022-12-08 10:13:07'),
(1545, 'Jamesrom', 'sport.47@live.fr', 82957742637, 'The SUN: Voulez-vous vivre luxueusement? Alors c\'est pour vous...', 'Le mois dernier, plus de 29 000 FranГ§ais sont devenus multimillionnaires. DГ©couvrez comment ils ont fait https://537457-euro-per-week.blogspot.de/?p=9qx', '2022-12-08 13:16:08', '2022-12-08 13:16:08'),
(1546, 'CrytoLEari', 'bobrox@virginmedia.com', 89036421938, 'Financial robot guarantees everyone stability and income.', 'One click of the robot can bring you thousands of bucks. https://worldnews.elk.pl', '2022-12-08 16:56:55', '2022-12-08 16:56:55'),
(1547, 'Mike Chapman', 'no-replyChaicky@gmail.com', 81127311615, 'Improve local visibility for vardhrashoes.com', 'If you have a local business and want to rank it on google maps in a specific area then this service is for you. \r\n \r\nGoogle Map Stacking is one of the best ways to rank your GMB in a specific mile radius. \r\n \r\nMore info: \r\nhttps://www.speed-seo.net/product/google-maps-pointers/ \r\n \r\nThanks and Regards \r\nMike Chapman\r\n \r\n \r\nPS: Want an all in one Local Plan that includes everything? \r\nhttps://www.speed-seo.net/product/local-seo-package/', '2022-12-08 17:34:59', '2022-12-08 17:34:59'),
(1548, 'CrytoLEari', 'jihyun2980@yahoo.com', 89039475475, 'No need to work anymore while you have the Robot launched!', 'Let the financial Robot be your companion in the financial market. https://worldnews.elk.pl', '2022-12-08 23:42:09', '2022-12-08 23:42:09'),
(1549, 'Williamjew', 'no.reply.peews@gmail.com', 82285244989, 'Do you want cheap and innovative advertising for little money?', 'Hеllо!  vardhrashoes.com \r\n \r\nDid yоu knоw thаt it is pоssiblе tо sеnd mеssаgе аbsоlutеly lаwful? \r\nWе prоvidе а nеw lеgаl mеthоd оf sеnding mеssаgе thrоugh соntасt fоrms. Suсh fоrms аrе lосаtеd оn mаny sitеs. \r\nWhеn suсh соmmеrсiаl оffеrs аrе sеnt, nо pеrsоnаl dаtа is usеd, аnd mеssаgеs аrе sеnt tо fоrms spесifiсаlly dеsignеd tо rесеivе mеssаgеs аnd аppеаls. \r\nаlsо, mеssаgеs sеnt thrоugh соntасt Fоrms dо nоt gеt intо spаm bесаusе suсh mеssаgеs аrе соnsidеrеd impоrtаnt. \r\nWе оffеr yоu tо tеst оu', '2022-12-09 05:03:09', '2022-12-09 05:03:09'),
(1550, 'CrytoLEari', 'narelleclose76@gmail.com', 89035517729, 'The fastest way to make your wallet thick is found.', 'Financial robot is the best companion of rich people. https://worldnews.elk.pl', '2022-12-09 05:47:18', '2022-12-09 05:47:18'),
(1551, 'CrytoLEari', 'jmcallaham3@cherter.net', 89031914419, 'Using this Robot is the best way to make you rich.', 'Small investments can bring tons of dollars fast. https://worldnews.elk.pl', '2022-12-09 12:10:35', '2022-12-09 12:10:35'),
(1552, 'Jamesrom', 'vanopdenboch.l@skynet.be', 87698758457, 'The SUN: ZEIT HABEN, VOR DEM NEUEN JAHR MILLIONAR ZU WERDEN', 'Mude von Arbeit und Schulden, hor auf, es zu ertragen, handle https://999999-euro-per-week.blogspot.com.ar/?o=9wk', '2022-12-09 16:38:29', '2022-12-09 16:38:29'),
(1553, 'CrytoLEari', 'feeya@lemondrop.com', 89034407343, 'Your computer can bring you additional income if you use this Robot.', 'Need cash? Launch this robot and see what it can. https://worldnews.elk.pl', '2022-12-09 18:35:09', '2022-12-09 18:35:09'),
(1554, 'Jamesrom', 'user.loginpower89@live.ca', 86953929615, 'The SUN: Become a millionaire before the new year', 'You have a low salary, stop tolerating it https://telegra.ph/Canadians-are-massively-getting-richer-and-becoming-millionaires-12-09-2405', '2022-12-10 00:37:53', '2022-12-10 00:37:53'),
(1555, 'CrytoLEari', 'letipena@hotmail.com', 89039056133, 'We know how to become rich and do you?', 'No need to stay awake all night long to earn money. Launch the robot. https://worldnews.elk.pl', '2022-12-10 00:54:15', '2022-12-10 00:54:15'),
(1556, 'CrytoLEari', 'shelte.r.k.t.vo@gmail.com', 89031881660, 'Financial robot is a great way to manage and increase your income.', 'Earn additional money without efforts and skills. https://worldnews.elk.pl', '2022-12-10 07:15:45', '2022-12-10 07:15:45'),
(1557, 'CrytoLEari', 'ksmith6351@yahoo.com', 89030812827, 'We know how to make our future rich and do you?', 'Let your money grow into the capital with this Robot. https://worldnews.elk.pl', '2022-12-10 13:57:04', '2022-12-10 13:57:04'),
(1558, 'CrytoLEari', 'nightappl@aol.com', 89036563911, 'Making money is very easy if you use the financial Robot.', 'No need to work anymore while you have the Robot launched! https://worldnews.elk.pl', '2022-12-10 20:22:09', '2022-12-10 20:22:09'),
(1559, 'CrytoLEari', 'everybodylovesme420@yahoo.com', 89036075103, 'Money, money! Make more money with financial robot!', 'Make your money work for you all day long. https://worldnews.elk.pl', '2022-12-11 02:47:29', '2022-12-11 02:47:29');
INSERT INTO `txn_contact_us` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1560, 'CrytoLEari', 'asaf.vs.world@hotmail.com', 89038136534, 'Make yourself rich in future using this financial robot.', 'Looking for an easy way to make money? Check out the financial robot. https://worldnews.elk.pl', '2022-12-11 09:05:23', '2022-12-11 09:05:23'),
(1561, 'CrytoLEari', 'aramirez818@yahoo.com', 89033815076, 'We know how to make our future rich and do you?', 'Invest $1 today to make $1000 tomorrow. https://worldnews.elk.pl', '2022-12-11 15:33:06', '2022-12-11 15:33:06'),
(1562, 'CrytoLEari', 'omfspw@gmail.com', 89037703887, 'Robot is the best way for everyone who looks for financial independence.', 'Earning $1000 a day is easy if you use this financial Robot. https://newsworld.elk.pl', '2022-12-11 21:57:09', '2022-12-11 21:57:09'),
(1563, 'CrytoLEari', 'myakoobs4@gmail.com', 89036194499, 'Provide your family with the money in age. Launch the Robot!', 'Still not a millionaire? The financial robot will make you him! https://newsworld.elk.pl', '2022-12-12 04:14:07', '2022-12-12 04:14:07'),
(1564, 'CrytoLEari', 'rebelracestar@yahoo.com', 89037798102, 'One dollar is nothing, but it can grow into $100 here.', 'One click of the robot can bring you thousands of bucks. https://newsworld.elk.pl', '2022-12-12 10:37:57', '2022-12-12 10:37:57'),
(1565, 'CrytoLEari', 'iwdspxqu@nowemailbox.com', 89032794797, 'Looking for an easy way to make money? Check out the financial robot.', 'Even a child knows how to make money. Do you? https://newsworld.elk.pl', '2022-12-12 17:02:35', '2022-12-12 17:02:35'),
(1566, 'Jamesrom', 'kontokontokonotlol@wp.pl', 88289558755, 'The SUN: PRZESTAN ZYC W UBOSTWIE I DLUGACH, OSIAGNAC SUKCES PRZED NOWYM ROKIEM', 'Przestan siedziec bez pieniedzy, wyprobuj te metode https://telegra.ph/300000000000-euro-12-12-12827', '2022-12-13 00:23:51', '2022-12-13 00:23:51'),
(1567, 'CrytoLEari', 'chriskampmeyer@yahoo.com', 89039803111, 'Need some more money? Robot will earn them really fast.', 'Online job can be really effective if you use this Robot. https://newsworld.elk.pl', '2022-12-13 05:58:01', '2022-12-13 05:58:01'),
(1568, 'CrytoLEari', 'roed.meghan@gmail.com', 89030815425, 'Rich people are rich because they use this robot.', 'Make your laptop a financial instrument with this program. https://newsworld.elk.pl', '2022-12-13 12:22:21', '2022-12-13 12:22:21'),
(1569, 'CrytoLEari', 'patmalbrough@msn.com', 89030410858, 'Financial robot keeps bringing you money while you sleep.', 'No worries if you are fired. Work online. https://newsworld.elk.pl', '2022-12-13 18:46:03', '2022-12-13 18:46:03'),
(1570, 'CrytoLEari', 'perktir503@chainlinkthemovie.com', 89032487891, 'Start your online work using the financial Robot.', 'Even a child knows how to make money. This robot is what you need! https://newsworld.elk.pl', '2022-12-14 01:31:32', '2022-12-14 01:31:32'),
(1571, 'CrytoLEari', 'mkhan1213@gmail.com', 89032420337, 'Looking for an easy way to make money? Check out the financial robot.', 'One click of the robot can bring you thousands of bucks. https://newsworld.elk.pl', '2022-12-14 07:50:55', '2022-12-14 07:50:55'),
(1572, 'Mike Taylor', 'no-replyChaicky@gmail.com', 81666887754, 'Monthly SEO plans from 49$ ONLY', 'Good Day \r\n \r\nI have just checked  vardhrashoes.com for  the current search visibility and saw that your website could use a push. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our services below, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nRegards \r\nMike Taylor\r\n \r\n \r\nPS: Quality SEO content is included', '2022-12-14 16:52:47', '2022-12-14 16:52:47'),
(1573, 'CrytoLEari', 'neal.khadijah@yahoo.com', 89030811049, 'Find out about the fastest way for a financial independence.', 'Still not a millionaire? The financial robot will make you him! https://newsworld.elk.pl', '2022-12-14 23:24:38', '2022-12-14 23:24:38'),
(1574, 'CrytoLEari', 'jungs.melker@gmx.net', 89036657569, 'Find out about the fastest way for a financial independence.', 'Financial independence is what everyone needs. https://newsworld.elk.pl', '2022-12-15 07:03:57', '2022-12-15 07:03:57'),
(1575, 'CrytoLEari', 'jmontiel5@yahoo.com', 89030224853, 'Everyone can earn as much as he wants now.', 'Only one click can grow up your money really fast. https://newsworld.elk.pl', '2022-12-15 13:27:52', '2022-12-15 13:27:52'),
(1576, 'CrytoLEari', 'ecleve216@yahoo.com', 89030411995, 'Start making thousands of dollars every week.', 'Financial robot is your success formula is found. Learn more about it. https://newsworld.elk.pl', '2022-12-15 19:50:32', '2022-12-15 19:50:32'),
(1577, 'CrytoLEari', 'mdivcheryl@aol.com', 89036288336, 'Only one click can grow up your money really fast.', 'Looking for an easy way to make money? Check out the financial robot. https://newsworld.elk.pl', '2022-12-16 01:35:30', '2022-12-16 01:35:30'),
(1578, 'CrytoLEari', 'iris.gonzalez45@yahoo.com', 89033278991, 'The best way for everyone who rushes for financial independence.', 'Online Bot will bring you wealth and satisfaction. https://newsworld.elk.pl', '2022-12-16 08:21:51', '2022-12-16 08:21:51'),
(1579, 'Tyroneinnom', 'support@capitalfund-hk.com', 88354643936, 'Business Funding', 'Capital Fund International Limited has been working in close partnership with various Business/Financial Consultants and every business and industrial sector all over the world. \r\n \r\nOur Financial services; Funding, Loan, collateral Facilities/Instrument and expertise is the safety net that you require in your Business. \r\n \r\nRequire funding/ Loan from 1 Million to 10 Billion USD/EURO/GBP and Above? \r\n \r\n+852 3008 8373 \r\nCapital Fund International Limited \r\nhttp://www.capitalfund-hk.com/ \r\ninfo@c', '2022-12-16 09:23:01', '2022-12-16 09:23:01'),
(1580, 'CrytoLEari', 'wawanbeloon@gmail.com', 89038706511, 'Join the society of successful people who make money here.', 'Make yourself rich in future using this financial robot. https://newsworld.elk.pl', '2022-12-16 14:51:04', '2022-12-16 14:51:04'),
(1581, 'CrytoLEari', 'vjrodriguez1387@gmail.com', 89031741043, 'The fastest way to make you wallet thick is here.', 'Only one click can grow up your money really fast. https://newsworld.elk.pl', '2022-12-16 21:34:45', '2022-12-16 21:34:45'),
(1582, 'CrytoLEari', 'mbreda5@yahoo.com', 89035698829, 'Looking for additional money? Try out the best financial instrument.', 'Small investments can bring tons of dollars fast. https://newsworld.elk.pl', '2022-12-17 04:05:59', '2022-12-17 04:05:59'),
(1583, 'CrytoLEari', 'dotcomdotcom@hotmail.com', 89034045676, 'Need money? The financial robot is your solution.', 'Need money? Get it here easily? https://newsworld.elk.pl', '2022-12-17 10:49:10', '2022-12-17 10:49:10'),
(1584, 'CrytoLEari', 'tamaradavis15@msn.com', 89031320910, 'Looking forward for income? Get it online.', 'Launch the financial Robot and do your business. https://newsworld.elk.pl', '2022-12-17 17:31:44', '2022-12-17 17:31:44'),
(1585, 'CrytoLEari', 'psychicminxz@gmail.com', 89036086681, 'The financial Robot works for you even when you sleep.', 'Everyone who needs money should try this Robot out. https://newsworld.elk.pl', '2022-12-18 00:03:20', '2022-12-18 00:03:20'),
(1586, 'CrytoLEari', 'MR.RAJESHKANNA999@GMAIL.COM', 89036169683, 'Make $1000 from $1 in a few minutes. Launch the financial robot now.', 'Robot is the best way for everyone who looks for financial independence. https://newsworld.elk.pl', '2022-12-18 06:31:43', '2022-12-18 06:31:43'),
(1587, 'CrytoLEari', 'lallie78@hotmail.com', 89034860037, 'Check out the automatic Bot, which works for you 24/7.', 'Start your online work using the financial Robot. https://newsworld.elk.pl', '2022-12-18 13:02:42', '2022-12-18 13:02:42'),
(1588, 'CrytoLEari', 'iikkoo@aol.com', 89034320274, 'The financial Robot is the most effective financial tool in the net!', 'The fastest way to make you wallet thick is here. https://newsworld.elk.pl', '2022-12-18 19:25:56', '2022-12-18 19:25:56'),
(1589, 'CrytoLEari', 'ctvbiz@126.com', 89037315306, 'Most successful people already use Robot. Do you?', 'Online earnings are the easiest way for financial independence. https://newsworld.elk.pl', '2022-12-19 01:53:17', '2022-12-19 01:53:17'),
(1590, 'CrytoLEari', 'soliscynthia85@yahoo.com', 89038456212, 'One dollar is nothing, but it can grow into $100 here.', 'Just one click can turn you dollar into $1000. https://newsworld.elk.pl', '2022-12-19 08:19:18', '2022-12-19 08:19:18'),
(1591, 'CrytoLEari', 'info@jlhriskconsulting.net', 89032634278, 'The online income is your key to success.', 'Attention! Financial robot may bring you millions! https://newsworld.elk.pl', '2022-12-19 14:47:52', '2022-12-19 14:47:52'),
(1592, 'CrytoLEari', 'phideltky582@yahoo.com', 89035451083, 'Trust your dollar to the Robot and see how it grows to $100.', 'Making money in the net is easier now. https://newsworld.elk.pl', '2022-12-19 21:14:39', '2022-12-19 21:14:39'),
(1593, 'CrytoLEari', 'peter@rageeks.com', 89030516329, 'Let your money grow into the capital with this Robot.', 'Let the financial Robot be your companion in the financial market. https://newsworld.elk.pl', '2022-12-20 03:41:10', '2022-12-20 03:41:10'),
(1594, 'CrytoLEari', 'GFCARETR@FRONTIERNET.NET', 89039237624, 'Make your computer to be you earning instrument.', 'Watch your money grow while you invest with the Robot. https://newsworld.elk.pl', '2022-12-20 10:01:59', '2022-12-20 10:01:59'),
(1595, 'CrytoLEari', 'anashamada90@gmail.com', 89030182993, 'Everyone can earn as much as he wants now.', 'Rich people are rich because they use this robot. https://newsworld.elk.pl', '2022-12-20 16:24:53', '2022-12-20 16:24:53'),
(1596, 'CrytoLEari', 'kaylene.lewek@gmail.com', 89036373946, 'Robot never sleeps. It makes money for you 24/7.', 'No need to work anymore while you have the Robot launched! https://newsworld.elk.pl', '2022-12-20 22:48:58', '2022-12-20 22:48:58'),
(1597, 'CrytoLEari', 'zgfunkz@gmail.com', 89034972035, 'Financial independence is what everyone needs.', 'Financial independence is what everyone needs. https://newsworld.elk.pl', '2022-12-21 05:08:50', '2022-12-21 05:08:50'),
(1598, 'CrytoLEari', 'drice11290@gmail.com', 89039025575, 'The online income is the easiest ways to make you dream come true.', 'Even a child knows how to make $100 today with the help of this robot. https://newsworld.elk.pl', '2022-12-21 11:57:48', '2022-12-21 11:57:48'),
(1599, 'Mike Bradberry', 'no-replyChaicky@gmail.com', 85948696487, 'Content Marketing to rank vardhrashoes.com', 'Hi there \r\n \r\nI Just checked your vardhrashoes.com ranks and saw that your site is trending down for some time. \r\n \r\nIf you are looking for a trend reversal, we have the right solution for you \r\n \r\nWe are offering affordable Content Marketing plans with humanly written SEO content \r\n \r\nFor more information, please check our offers \r\nhttps://www.digital-x-press.com/product/content-marketing/ \r\n \r\nThanks and regards \r\nMike Bradberry', '2022-12-21 15:24:31', '2022-12-21 15:24:31'),
(1600, 'CrytoLEari', 'mastoria@takoe.net', 89038405721, 'The best way for everyone who rushes for financial independence.', 'Robot is the best solution for everyone who wants to earn. https://newsworld.elk.pl', '2022-12-21 18:23:56', '2022-12-21 18:23:56'),
(1601, 'CrytoLEari', 'janinedwade@gmail.com', 89039536990, 'The success formula is found. Learn more about it.', 'Everyone can earn as much as he wants suing this Bot. https://newsworld.elk.pl', '2022-12-22 00:53:32', '2022-12-22 00:53:32'),
(1602, 'CrytoLEari', 'regkind@gmail.com', 89031834561, 'One dollar is nothing, but it can grow into $100 here.', 'Find out about the easiest way of money earning. https://newsworld.elk.pl', '2022-12-22 07:15:13', '2022-12-22 07:15:13'),
(1603, 'CrytoLEari', 'kmodel04@hotmail.com', 89035877383, 'Earning $1000 a day is easy if you use this financial Robot.', 'Wow! This Robot is a great start for an online career. https://newsworld.elk.pl', '2022-12-22 14:24:58', '2022-12-22 14:24:58'),
(1604, 'Richardcob', 'christer.olofsson@comhem.se', 82467334555, 'AN EASY WAY TO HAVE EXTRA INCOME FROM $1000 PER DAY', 'How to Earn $500,000 Without Effort With Just $250 https://passive-income-for-you777.blogspot.co.nz/?p=0pn', '2022-12-22 15:54:05', '2022-12-22 15:54:05'),
(1605, 'CrytoLEari', 'andres.morera@yahoo.com', 89031311108, 'Every your dollar can turn into $100 after you lunch this Robot.', 'The online job can bring you a fantastic profit. https://newsworld.elk.pl', '2022-12-22 20:51:40', '2022-12-22 20:51:40'),
(1606, 'CrytoLEari', 'islandboy_williams@yahoo.com', 89037336682, 'Feel free to buy everything you want with the additional income.', 'Most successful people already use Robot. Do you? https://newsworld.elk.pl', '2022-12-23 03:14:38', '2022-12-23 03:14:38'),
(1607, 'CrytoLEari', 'twokidsnosleep@aol.com', 89032315779, 'Make dollars staying at home and launched this Bot.', 'The best way for everyone who rushes for financial independence. https://newsworld.elk.pl', '2022-12-23 09:38:33', '2022-12-23 09:38:33'),
(1608, 'CrytoLEari', 'neeri7@yahoo.com', 89032890526, 'It is the best time to launch the Robot to get more money.', 'One dollar is nothing, but it can grow into $100 here. https://newsworld.elk.pl', '2022-12-23 16:16:00', '2022-12-23 16:16:00'),
(1609, 'CrytoLEari', 'Jasminemurdock06@yahoo.com', 89036730451, 'See how Robot makes $1000 from $1 of investment.', 'Looking for an easy way to make money? Check out the financial robot. https://newsworld.elk.pl', '2022-12-23 22:36:06', '2022-12-23 22:36:06'),
(1610, 'CrytoLEari', 'yvescaminade@hotmail.com', 89036128759, 'Feel free to buy everything you want with the additional income.', 'The additional income for everyone. https://newsworld.elk.pl', '2022-12-24 04:56:20', '2022-12-24 04:56:20'),
(1611, 'CrytoLEari', 'rubens.olivia@gmail.com', 89035150805, 'Robot is the best solution for everyone who wants to earn.', 'Your money keep grow 24/7 if you use the financial Robot. https://newsworld.elk.pl', '2022-12-24 12:09:53', '2022-12-24 12:09:53'),
(1612, 'CrytoLEari', 'annasantos7@hotmail.com', 89039419227, 'Check out the automatic Bot, which works for you 24/7.', 'One click of the robot can bring you thousands of bucks. https://newsworld.elk.pl', '2022-12-24 18:33:34', '2022-12-24 18:33:34'),
(1613, 'CrytoLEari', 'joneservin73@yahoo.com', 89033685485, 'Have no money? It’s easy to earn them online here.', 'No worries if you are fired. Work online. https://newsworld.elk.pl', '2022-12-25 01:03:35', '2022-12-25 01:03:35'),
(1614, 'CrytoLEari', 'allenduck@jeffersonbox.com', 89037997853, 'Feel free to buy everything you want with the additional income.', 'Attention! Financial robot may bring you millions! https://newsworld.elk.pl', '2022-12-25 07:24:32', '2022-12-25 07:24:32'),
(1615, 'CrytoLEari', 'ruby.gomez18@yahoo.com', 89034543348, 'Online earnings are the easiest way for financial independence.', 'Need money? The financial robot is your solution. https://newsworld.elk.pl', '2022-12-25 13:47:11', '2022-12-25 13:47:11'),
(1616, 'CrytoLEari', 'vevabird@yahoo.com', 89037580405, 'The success formula is found. Learn more about it.', 'Financial independence is what everyone needs. https://newsworld.elk.pl', '2022-12-25 20:13:08', '2022-12-25 20:13:08'),
(1617, 'CrytoLEari', 'jc@probadge.com', 89030811397, 'Looking for an easy way to make money? Check out the financial robot.', 'Launch the best investment instrument to start making money today. https://newsworld.elk.pl', '2022-12-26 02:32:02', '2022-12-26 02:32:02'),
(1618, 'CrytoLEari', 'gozer711@yahoo.com', 89031210006, 'Still not a millionaire? Fix it now!', 'No worries if you are fired. Work online. https://newsworld.elk.pl', '2022-12-26 07:49:15', '2022-12-26 07:49:15'),
(1619, 'CrytoLEari', 'ticktock992@aim.com', 89037903380, 'Financial robot is the best companion of rich people.', 'Looking for an easy way to make money? Check out the financial robot. https://newsworld.elk.pl', '2022-12-26 14:12:38', '2022-12-26 14:12:38'),
(1620, 'CrytoLEari', 'constandinosjobs@gmail.com', 89030611611, 'The fastest way to make you wallet thick is here.', 'The additional income for everyone. http://go.suqomuaq.com/0j35', '2022-12-26 20:31:53', '2022-12-26 20:31:53'),
(1621, 'CrytoLEari', 'arnoldchassity@yahoo.com', 89036624944, 'Just one click can turn you dollar into $1000.', 'Make money 24/7 without any efforts and skills. http://go.suqomuaq.com/0j35', '2022-12-27 02:53:16', '2022-12-27 02:53:16'),
(1622, 'CrytoLEari', 'jonilynn2000@hotmail.com', 89033389024, 'Have no financial skills? Let Robot make money for you.', 'Financial robot keeps bringing you money while you sleep. http://go.suqomuaq.com/0j35', '2022-12-27 09:26:50', '2022-12-27 09:26:50'),
(1623, 'CrytoLEari', 'sd_handy_man@yahoo.com', 89036622734, 'One click of the robot can bring you thousands of bucks.', 'Financial robot is the best companion of rich people. http://go.suqomuaq.com/0j35', '2022-12-27 16:04:48', '2022-12-27 16:04:48'),
(1624, 'CrytoLEari', 'sevenbehrs@surfelm.net', 89039688724, 'Still not a millionaire? Fix it now!', 'This robot will help you to make hundreds of dollars each day. http://go.suqomuaq.com/0j35', '2022-12-27 22:30:08', '2022-12-27 22:30:08'),
(1625, 'CrytoLEari', 'cakeggal@gmail.com', 89039208970, 'Financial Robot is #1 investment tool ever. Launch it!', 'Only one click can grow up your money really fast. http://go.suqomuaq.com/0j35', '2022-12-28 04:58:35', '2022-12-28 04:58:35'),
(1626, 'CrytoLEari', 'Kemont@ymail.com', 89036299778, 'Rich people are rich because they use this robot.', 'The huge income without investments is available, now! http://go.suqomuaq.com/0j35', '2022-12-28 11:21:13', '2022-12-28 11:21:13'),
(1627, 'CrytoLEari', 'crystalcastaneda585@yahoo.com', 89032790618, 'Make your laptop a financial instrument with this program.', 'Launch the robot and let it bring you money. http://go.suqomuaq.com/0j35', '2022-12-28 17:46:19', '2022-12-28 17:46:19'),
(1628, 'CrytoLEari', 'yswkniyt@yahoo.com', 89035586062, 'Make money, not war! Financial Robot is what you need.', 'We know how to become rich and do you? http://go.suqomuaq.com/0j35', '2022-12-29 00:21:27', '2022-12-29 00:21:27'),
(1629, 'CrytoLEari', 'drichardson413@yahoo.com', 89039317447, 'No need to work anymore. Just launch the robot.', 'The best online job for retirees. Make your old ages rich. http://go.suqomuaq.com/0j35', '2022-12-29 06:45:36', '2022-12-29 06:45:36'),
(1630, 'CrytoLEari', 'pillar6610@yahoo.com', 89039803223, 'Everyone who needs money should try this Robot out.', 'Make money online, staying at home this cold winter. http://go.suqomuaq.com/0j35', '2022-12-29 13:07:28', '2022-12-29 13:07:28'),
(1631, 'Mike Kingsman', 'no-replyChaicky@gmail.com', 89411952519, 'NEW: Semrush Backlinks', 'Good Day \r\n \r\nThis is Mike Kingsman\r\n \r\nLet me introduce to you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your vardhrashoes.com SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other fact', '2022-12-29 13:39:50', '2022-12-29 13:39:50'),
(1632, 'CrytoLEari', 'dragonsforever@sbcglobal.net', 89036698017, 'The financial Robot is your future wealth and independence.', 'Small investments can bring tons of dollars fast. http://go.suqomuaq.com/0j35', '2022-12-29 19:36:57', '2022-12-29 19:36:57'),
(1633, 'CrytoLEari', 'sparklee@nappyblue.net', 89039945412, 'Check out the automatic Bot, which works for you 24/7.', 'The huge income without investments is available. http://go.suqomuaq.com/0j35', '2022-12-30 02:01:35', '2022-12-30 02:01:35'),
(1634, 'CrytoLEari', 'pryqmqkjhp@rkirwr.com', 89035870643, 'Everyone can earn as much as he wants now.', 'Make money in the internet using this Bot. It really works! http://go.suqomuaq.com/0j35', '2022-12-30 08:28:15', '2022-12-30 08:28:15'),
(1635, 'CrytoLEari', 'danielmoreno180@edmodo.com', 89030360655, 'Make dollars just sitting home.', 'Launch the financial Bot now to start earning. http://go.suqomuaq.com/0j35', '2022-12-30 15:20:12', '2022-12-30 15:20:12'),
(1636, 'CrytoLEari', 'sawin92@hotmail.com', 89035424514, 'Trust the financial Bot to become rich.', 'No need to work anymore while you have the Robot launched! http://go.suqomuaq.com/0j35', '2022-12-30 21:43:11', '2022-12-30 21:43:11'),
(1637, 'Mike Morrison', 'no-replyChaicky@gmail.com', 85964312384, 'Increase the DR of your vardhrashoes.com in ahrefs', 'Hi there \r\n \r\nJust checked your vardhrashoes.com in ahrefs and saw that you could use an authority boost. \r\n \r\nWith our service you will get a guaranteed ahrefs score within just 3 months time. This will increase the organic visibility and strengthen your website authority, thus getting it stronger against G updates as well. \r\n \r\nFor more information, please check our offers \r\nhttps://www.monkeydigital.co/domain-authority-plan/ \r\n \r\nNEW: Semrush DA is now possible \r\nhttps://www.monkeydigital.co/', '2022-12-30 22:01:15', '2022-12-30 22:01:15'),
(1638, 'CrytoLEari', 'whkazakosfontanfe@gmail.com', 89038160997, 'We have found the fastest way to be rich. Find it out here.', 'Make money in the internet using this Bot. It really works! http://go.hojagoak.com/0j35', '2023-01-04 02:10:32', '2023-01-04 02:10:32'),
(1639, 'CrytoLEari', 'jholt99@hotmail.com', 89032265540, 'Financial robot is the best companion of rich people.', 'We know how to become rich and do you? http://go.hojagoak.com/0j35', '2023-01-06 18:36:23', '2023-01-06 18:36:23'),
(1640, 'CrytoLEari', 'tiffanytb723@aol.com', 89032116662, 'We know how to become rich and do you?', 'Make money 24/7 without any efforts and skills. http://go.hojagoak.com/0j35', '2023-01-06 22:34:31', '2023-01-06 22:34:31'),
(1641, 'Mike Molligan', 'no-replyChaicky@gmail.com', 86262251198, 'Improve local visibility for vardhrashoes.com', 'If you have a local business and want to rank it on google maps in a specific area then this service is for you. \r\n \r\nGoogle Map Stacking is one of the best ways to rank your GMB in a specific mile radius. \r\n \r\nMore info: \r\nhttps://www.speed-seo.net/product/google-maps-pointers/ \r\n \r\nThanks and Regards \r\nMike Molligan\r\n \r\n \r\nPS: Want an all in one Local Plan that includes everything? \r\nhttps://www.speed-seo.net/product/local-seo-package/', '2023-01-07 00:15:12', '2023-01-07 00:15:12'),
(1642, 'MK Timothy', 'mktimothy2010@gmail.com', 88423185573, 'Subject: Invest in Uganda the pearl of Africa', 'Invest in Uganda- Mk Timothy works directly with top Government officials of all ministries to provide a seamless service for investment expansion in Uganda. \r\n \r\nOur customized services help global companies unlock investment opportunities in Uganda whose advantages attract global companies in growing futuristic innovations increase exponentially by the day. Let me help facilitate and accelerate your investment in Uganda. \r\n \r\nTo find out more about why Uganda is the best investment destination', '2023-01-07 01:44:03', '2023-01-07 01:44:03'),
(1643, 'CrytoLEari', 'xxxray149@yahoo.com', 89031113371, 'Make thousands of bucks. Financial robot will help you to do it!', 'Only one click can grow up your money really fast. http://go.hojagoak.com/0j35', '2023-01-07 02:34:58', '2023-01-07 02:34:58'),
(1644, 'CrytoLEari', 'cmoretahoe76@gmail.com', 89031001009, 'The online job can bring you a fantastic profit.', 'This robot will help you to make hundreds of dollars each day. http://go.hojagoak.com/0j35', '2023-01-07 06:35:51', '2023-01-07 06:35:51'),
(1645, 'CrytoLEari', 'myriam_rm@hotmail.com', 89032804944, 'Make your computer to be you earning instrument.', 'The online income is your key to success. http://go.hojagoak.com/0j35', '2023-01-07 10:54:07', '2023-01-07 10:54:07'),
(1646, 'CrytoLEari', 'mpenner@socal.rr.com', 89034003956, 'Most successful people already use Robot. Do you?', 'Check out the newest way to make a fantastic profit. http://go.hojagoak.com/0j35', '2023-01-07 14:45:52', '2023-01-07 14:45:52'),
(1647, 'CrytoLEari', 'patatkoppie@yahoo.com', 89034919565, 'Robot is the best solution for everyone who wants to earn.', 'The online job can bring you a fantastic profit. http://go.hojagoak.com/0j35', '2023-01-07 18:42:36', '2023-01-07 18:42:36'),
(1648, 'CrytoLEari', 'ksracing@bellsouth.net', 89034757388, 'Make yourself rich in future using this financial robot.', 'Online job can be really effective if you use this Robot. http://go.hojagoak.com/0j35', '2023-01-07 22:39:56', '2023-01-07 22:39:56'),
(1649, 'CrytoLEari', 'melai0821@yahoo.com', 89037034173, 'The financial Robot works for you even when you sleep.', 'Make dollars just sitting home. http://go.hojagoak.com/0j35', '2023-01-08 02:56:24', '2023-01-08 02:56:24'),
(1650, 'CrytoLEari', 'gaudytutor44uc1972@yahoo.com', 89034596040, 'Online job can be really effective if you use this Robot.', 'Even a child knows how to make $100 today. http://go.hojagoak.com/0j35', '2023-01-08 06:58:24', '2023-01-08 06:58:24'),
(1651, 'CrytoLEari', 'jenny_7865@yahoo.com', 89035589344, 'This robot can bring you money 24/7.', 'Earn additional money without efforts and skills. http://go.hojagoak.com/0j35', '2023-01-08 10:58:59', '2023-01-08 10:58:59'),
(1652, 'CrytoLEari', 'xooxmickeyxoox@aol.com', 89032897125, 'Every your dollar can turn into $100 after you lunch this Robot.', 'Trust your dollar to the Robot and see how it grows to $100. http://go.hojagoak.com/0j35', '2023-01-08 15:02:13', '2023-01-08 15:02:13'),
(1653, 'CrytoLEari', 'bolger.stephen@yahoo.com', 89038714821, 'Launch the robot and let it bring you money.', 'Just one click can turn you dollar into $1000. http://go.hojagoak.com/0j35', '2023-01-08 19:04:27', '2023-01-08 19:04:27'),
(1654, 'Williamjew', 'no.reply.peews@gmail.com', 87623815438, 'Want more customers for your business?', 'Hеllо!  vardhrashoes.com \r\n \r\nDid yоu knоw thаt it is pоssiblе tо sеnd аppеаl   lеgаl? \r\nWе sеll а nеw wаy оf sеnding mеssаgе thrоugh соntасt fоrms. Suсh fоrms аrе lосаtеd оn mаny sitеs. \r\nWhеn suсh mеssаgеs аrе sеnt, nо pеrsоnаl dаtа is usеd, аnd mеssаgеs аrе sеnt tо fоrms spесifiсаlly dеsignеd tо rесеivе mеssаgеs аnd аppеаls. \r\nаlsо, mеssаgеs sеnt thrоugh соntасt Fоrms dо nоt gеt intо spаm bесаusе suсh mеssаgеs аrе соnsidеrеd impоrtаnt. \r\nWе оffеr yоu tо tеst оur sеrviсе fоr frее. Wе will sеnd', '2023-01-08 19:49:22', '2023-01-08 19:49:22'),
(1655, 'CrytoLEari', 'olivehomjit@gmail.com', 89035519155, 'Check out the automatic Bot, which works for you 24/7.', 'Financial robot is your success formula is found. Learn more about it. http://go.hojagoak.com/0j35', '2023-01-08 23:23:10', '2023-01-08 23:23:10'),
(1656, 'CrytoLEari', 'zggumbo@aol.com', 89032761767, 'Your money work even when you sleep.', 'Making money can be extremely easy if you use this Robot. http://go.hojagoak.com/0j35', '2023-01-09 03:26:00', '2023-01-09 03:26:00'),
(1657, 'CrytoLEari', 'm_Kawato@jic-ohio.com', 89035422996, 'Additional income is now available for anyone all around the world.', 'The financial Robot works for you even when you sleep. http://go.hojagoak.com/0j35', '2023-01-09 07:27:34', '2023-01-09 07:27:34'),
(1658, 'CrytoLEari', 'bonelikethug@yahoo.com', 89031647660, 'Find out about the easiest way of money earning.', 'Earn additional money without efforts. http://go.hojagoak.com/0j35', '2023-01-09 11:36:00', '2023-01-09 11:36:00'),
(1659, 'CrytoLEari', 'michaelgauda@yahoo.com', 89036356223, 'The online income is the easiest ways to make you dream come true.', 'Financial robot is the best companion of rich people. http://go.hojagoak.com/0j35', '2023-01-09 15:44:07', '2023-01-09 15:44:07'),
(1660, 'CrytoLEari', 'babyblusangel@hotmail.com', 89033306856, 'Online earnings are the easiest way for financial independence.', 'Start your online work using the financial Robot. http://go.hojagoak.com/0j35', '2023-01-09 23:51:29', '2023-01-09 23:51:29'),
(1661, 'CrytoLEari', 'jmtabs@yahoo.com', 89032256525, 'Make thousands every week working online here.', 'Make thousands every week working online here. http://go.hojagoak.com/0j35', '2023-01-10 03:55:01', '2023-01-10 03:55:01'),
(1662, 'CrytoLEari', 'katiecochran2004@hotmail.com', 89030773815, 'Robot is the best way for everyone who looks for financial independence.', 'Making money in the net is easier now. http://go.hojagoak.com/0j35', '2023-01-10 07:53:41', '2023-01-10 07:53:41'),
(1663, 'CrytoLEari', 'mattyboy2477@yahoo.com', 89033916961, 'Have no money? Earn it online.', 'The best online job for retirees. Make your old ages rich. http://go.hojagoak.com/0j35', '2023-01-10 11:56:13', '2023-01-10 11:56:13'),
(1664, 'CrytoLEari', 'k.s.pryde@gmail.com', 89034379673, 'The financial Robot is your future wealth and independence.', 'Need cash? Launch this robot and see what it can. http://go.hojagoak.com/0j35', '2023-01-10 15:54:45', '2023-01-10 15:54:45'),
(1665, 'Mike Salomon', 'no-replyChaicky@gmail.com', 86129575351, 'Monthly SEO plans from 49$ ONLY', 'Good Day \r\n \r\nI have just verified your SEO on  vardhrashoes.com for the ranking keywords and saw that your website could use an upgrade. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nRegards \r\nMike Salomon\r\n \r\n \r\nPS: Quality SEO content is included', '2023-01-10 16:43:47', '2023-01-10 16:43:47'),
(1666, 'CrytoLEari', 'crambo12@yahoo.com', 89032489220, 'Even a child knows how to make $100 today.', 'Check out the newest way to make a fantastic profit. http://go.hojagoak.com/0j35', '2023-01-10 19:55:43', '2023-01-10 19:55:43'),
(1667, 'CrytoLEari', 'kjgfy3@hotmail.com', 89031550975, 'Your money keep grow 24/7 if you use the financial Robot.', 'Earning money in the Internet is easy if you use Robot. http://go.hojagoak.com/0j35', '2023-01-10 23:56:57', '2023-01-10 23:56:57'),
(1668, 'CrytoLEari', 'constructionspi2@me.com', 89035466308, 'The financial Robot is your future wealth and independence.', 'Find out about the easiest way of money earning. http://go.hojagoak.com/0j35', '2023-01-11 03:58:55', '2023-01-11 03:58:55'),
(1669, 'CrytoLEari', 'mitlyngl@yahoo.com', 89036210218, 'Earning money in the Internet is easy if you use Robot.', 'Small investments can bring tons of dollars fast. http://go.hojagoak.com/0j35', '2023-01-11 08:04:19', '2023-01-11 08:04:19'),
(1670, 'CrytoLEari', 'hunteeothef@gmail.com', 89039556023, 'Everyone who needs money should try this Robot out.', 'Learn how to make hundreds of backs each day. http://go.hojagoak.com/0j35', '2023-01-11 12:04:00', '2023-01-11 12:04:00'),
(1671, 'CrytoLEari', 'andre.paloma1234@gmail.com', 89030300147, 'Launch the financial Robot and do your business.', 'Rich people are rich because they use this robot. http://go.hojagoak.com/0j35', '2023-01-11 16:05:38', '2023-01-11 16:05:38'),
(1672, 'CrytoLEari', 'Cruzito20042000@yahoo.com', 89030420362, 'Start your online work using the financial Robot.', 'Additional income is now available for anyone all around the world. http://go.hojagoak.com/0j35', '2023-01-11 20:02:57', '2023-01-11 20:02:57'),
(1673, 'CrytoLEari', 'ellisk.i.d.ef@gmail.com', 89035336948, 'One dollar is nothing, but it can grow into $100 here.', 'Need money? The financial robot is your solution. http://go.hojagoak.com/0j35', '2023-01-12 00:26:09', '2023-01-12 00:26:09'),
(1674, 'CrytoLEari', 'NBarr0421@aol.com', 89038453024, 'Financial robot is the best companion of rich people.', 'Online job can be really effective if you use this Robot. http://go.hojagoak.com/0j35', '2023-01-12 04:27:10', '2023-01-12 04:27:10'),
(1675, 'CrytoLEari', 'ldbassett47@yahoo.com', 89038622257, 'Money, money! Make more money with financial robot!', 'Make dollars staying at home and launched this Bot. https://LEari.worldnews.biz.pl/pigree', '2023-01-12 08:31:01', '2023-01-12 08:31:01'),
(1676, 'CrytoLEari', 'mwselby@knology.net', 89030794329, 'Automatic robot is the best start for financial independence.', 'No worries if you are fired. Work online. https://LEari.worldnews.biz.pl/pigree', '2023-01-12 12:27:21', '2023-01-12 12:27:21'),
(1677, 'Raymond', 's1.thecctvpro@gmail.com', 81828971894, '4G solar', 'Dear Sir/mdm, \r\nHope you are doing well \r\nWe supply 4G solar cameras, explosion-proof cameras and underwater cameras for commercial use. Use of applications: ships, construction sites, oil rigs and nuclear reactor etc.. \r\nDo contact us for any enquiries and visit our website below \r\nWe also have nitrile gloves if you need some \r\nWhatsapp: +65 87695655 \r\nEmail: sales@thecctvpro.com \r\nW: https://www.thecctvpro.com/ \r\nIf you wish to unsubscribe, do reply to our email. \r\nregards, \r\nRaymond', '2023-01-12 16:22:02', '2023-01-12 16:22:02'),
(1678, 'CrytoLEari', 'kacy_mccormick@hotmail.com', 89037829145, 'The best online job for retirees. Make your old ages rich.', 'Have no money? It’s easy to earn them online here. https://LEari.worldnews.biz.pl/pigree', '2023-01-12 16:59:01', '2023-01-12 16:59:01'),
(1679, 'CrytoLEari', 'peytonbridges@yahoo.com', 89030814972, 'Find out about the easiest way of money earning.', 'It is the best time to launch the Robot to get more money. https://LEari.worldnews.biz.pl/pigree', '2023-01-12 20:56:33', '2023-01-12 20:56:33'),
(1680, 'CrytoLEari', 'nekodalee040713@gmail.com', 89030360950, 'Try out the automatic robot to keep earning all day long.', 'No worries if you are fired. Work online. https://LEari.worldnews.biz.pl/pigree', '2023-01-13 00:59:04', '2023-01-13 00:59:04'),
(1681, 'CrytoLEari', 'idivakar.com@gmail.com', 89036877126, 'It is the best time to launch the Robot to get more money.', 'Trust your dollar to the Robot and see how it grows to $100. https://LEari.worldnews.biz.pl/pigree', '2023-01-13 04:52:34', '2023-01-13 04:52:34'),
(1682, 'Bah Mbi', 'bahmbi129@gmail.com', 83161364583, 'Business Corporation', 'Attn. Director, \r\n \r\nI am interested in your products and line of business. \r\n \r\nDo not hesitate to contact me if you will need a financial partner and investor. \r\n \r\n \r\n \r\nPlease send the reply to \r\nbahmbimiii@oiedcadmin.org \r\n \r\n \r\nRegards, \r\n \r\nBah Mbi', '2023-01-13 07:53:49', '2023-01-13 07:53:49'),
(1683, 'CrytoLEari', 'Baby_Majestic4u2@yahoo.com', 89035402631, 'Everyone who needs money should try this Robot out.', 'Have no financial skills? Let Robot make money for you. https://LEari.worldnews.biz.pl/pigree', '2023-01-13 08:53:51', '2023-01-13 08:53:51'),
(1684, 'CrytoLEari', 'mroberts62114@roadrunner.com', 89033500078, 'Need money? The financial robot is your solution.', 'Start your online work using the financial Robot. https://LEari.worldnews.biz.pl/pigree', '2023-01-13 13:44:11', '2023-01-13 13:44:11'),
(1685, 'Robertnocop', 'noebb2016@mail.dk', 85382745691, '$$$ CRYPTOCURRENCY GOR FOLK RIGE I DET NYE AR $$$', '$$$$$$$ BLIV MILLION?R I AR PA KRIPTOVALUTAENS EFTERAR https://bbc-news.cartuguarta.ml/news-id-851855 $$$$$$$', '2023-01-13 17:40:47', '2023-01-13 17:40:47'),
(1686, 'CrytoLEari', 'bergun_12@hotmail.com', 89032063341, 'Invest $1 today to make $1000 tomorrow.', 'Find out about the fastest way for a financial independence. https://LEari.worldnews.biz.pl/pigree', '2023-01-13 17:43:28', '2023-01-13 17:43:28'),
(1687, 'CrytoLEari', 'miller3709@att.net', 89031655255, 'Invest $1 today to make $1000 tomorrow.', 'Make dollars just sitting home. https://LEari.worldnews.biz.pl/pigree', '2023-01-13 21:44:38', '2023-01-13 21:44:38'),
(1688, 'Richardcrity', 'becka.babes@shaw.ca', 83292795517, '$$$ CLAIM YOUR WINNINGS OF $24754 NOW $$$', '$$$$$$$ CLAIM YOUR WINNINGS OF $24754 NOW https://telegra.ph/You-have-won-24754---claim-it-now-01-13-21896 $$$$$$$', '2023-01-13 21:52:59', '2023-01-13 21:52:59'),
(1689, 'CrytoLEari', 'bluesky_yellowsun@hotmail.com', 89033117875, 'We have found the fastest way to be rich. Find it out here.', 'The fastest way to make you wallet thick is here. https://LEari.worldnews.biz.pl/pigree', '2023-01-14 01:46:05', '2023-01-14 01:46:05'),
(1690, 'CrytoLEari', 'suchadivaa@yahoo.com', 89039595376, 'Make your money work for you all day long.', 'Online earnings are the easiest way for financial independence. https://LEari.worldnews.biz.pl/pigree', '2023-01-14 05:48:17', '2023-01-14 05:48:17'),
(1691, 'CrytoLEari', 'rbowman2@tx.rr.com', 89036924577, 'Earning $1000 a day is easy if you use this financial Robot.', 'Additional income is now available for anyone all around the world. https://LEari.worldnews.biz.pl/pigree', '2023-01-14 09:48:11', '2023-01-14 09:48:11'),
(1692, 'CrytoLEari', 'Latina_loca431@hotmail.com', 89039021825, 'Your computer can bring you additional income if you use this Robot.', 'The additional income is available for everyone using this robot. https://LEari.worldnews.biz.pl/pigree', '2023-01-14 13:43:51', '2023-01-14 13:43:51'),
(1693, 'CrytoLEari', 'sosexy10runit@yahoo.com', 89030096279, 'Wow! This Robot is a great start for an online career.', 'The online income is the easiest ways to make you dream come true. https://LEari.worldnews.biz.pl/pigree', '2023-01-14 17:42:51', '2023-01-14 17:42:51'),
(1694, 'CrytoLEari', 'fionapr_31@yahoo.com', 89031184768, 'Additional income is now available for anyone all around the world.', 'Only one click can grow up your money really fast. https://LEari.worldnews.biz.pl/pigree', '2023-01-14 21:42:03', '2023-01-14 21:42:03'),
(1695, 'CrytoLEari', 'ocuwupua@kreuiema.com', 89039384970, 'Start making thousands of dollars every week just using this robot.', 'Provide your family with the money in age. Launch the Robot! https://LEari.worldnews.biz.pl/pigree', '2023-01-15 01:41:53', '2023-01-15 01:41:53'),
(1696, 'CrytoLEari', 'regardelectrique@hotmail.com', 89039655166, 'Looking forward for income? Get it online.', 'The financial Robot works for you even when you sleep. https://LEari.worldnews.biz.pl/pigree', '2023-01-15 05:10:13', '2023-01-15 05:10:13'),
(1697, 'CrytoLEari', 'erin.dunn96@yahoo.com', 89030677843, 'Make $1000 from $1 in a few minutes. Launch the financial robot now.', 'Launch the best investment instrument to start making money today. https://LEari.worldnews.biz.pl/pigree', '2023-01-15 09:06:20', '2023-01-15 09:06:20'),
(1698, 'CrytoLEari', 'rebecca_verdin@yahoo.com', 89038558285, 'Looking for an easy way to make money? Check out the financial robot.', 'Make dollars just sitting home. https://LEari.worldnews.biz.pl/pigree', '2023-01-15 13:09:10', '2023-01-15 13:09:10'),
(1699, 'CrytoLEari', 'turekmalgorzata@yahoo.com', 89039229405, 'Have no money? Earn it online.', 'We know how to become rich and do you? https://LEari.worldnews.biz.pl/pigree', '2023-01-15 17:06:38', '2023-01-15 17:06:38'),
(1700, 'CrytoLEari', 'hanan-hh@windowslive.com', 89038345011, 'Using this Robot is the best way to make you rich.', 'Rich people are rich because they use this robot. https://LEari.worldnews.biz.pl/pigree', '2023-01-15 21:08:13', '2023-01-15 21:08:13'),
(1701, 'CrytoLEari', 'welkermurr@verizon.net', 89030310766, 'Online Bot will bring you wealth and satisfaction.', 'The online income is your key to success. https://LEari.worldnews.biz.pl/pigree', '2023-01-16 01:07:00', '2023-01-16 01:07:00'),
(1702, 'CrytoLEari', 'whitgiov@aol.com', 89033507241, 'Need money? Get it here easily?', 'Make your laptop a financial instrument with this program. https://LEari.worldnews.biz.pl/pigree', '2023-01-16 05:08:00', '2023-01-16 05:08:00'),
(1703, 'CrytoLEari', 'xujian7612@163.com', 89030756193, 'Financial independence is what this robot guarantees.', 'Even a child knows how to make money. This robot is what you need! https://LEari.worldnews.biz.pl/pigree', '2023-01-16 09:03:31', '2023-01-16 09:03:31'),
(1704, 'CrytoLEari', 'mf.carpintaria@gmail.com', 89030619183, 'Make money online, staying at home this cold winter.', 'Make your laptop a financial instrument with this program. https://LEari.worldnews.biz.pl/pigree', '2023-01-16 13:00:25', '2023-01-16 13:00:25'),
(1705, 'CrytoLEari', 'jerko4@hotmail.com', 89035718180, 'Your money keep grow 24/7 if you use the financial Robot.', 'Find out about the fastest way for a financial independence. https://LEari.worldnews.biz.pl/pigree', '2023-01-16 16:57:01', '2023-01-16 16:57:01'),
(1706, 'CrytoLEari', 'jenna5656@hotmail.com', 89031741678, 'Watch your money grow while you invest with the Robot.', 'Small investments can bring tons of dollars fast. https://LEari.worldnews.biz.pl/pigree', '2023-01-16 20:57:18', '2023-01-16 20:57:18'),
(1707, 'CrytoLEari', 'Bigguyx15a@aol.com', 89039149493, 'The success formula is found. Learn more about it.', 'Everyone can earn as much as he wants suing this Bot. http://go.huwadaom.com/0j35', '2023-01-17 00:54:33', '2023-01-17 00:54:33'),
(1708, 'CrytoLEari', 'normanbrown08@yahoo.com', 89032774553, 'Rich people are rich because they use this robot.', 'Let the financial Robot be your companion in the financial market. https://newsworld.biz.pl/link', '2023-01-17 04:32:34', '2023-01-17 04:32:34'),
(1709, 'CrytoLEari', 'Shakamiya@gmail.com', 89032034767, 'This robot can bring you money 24/7.', 'One dollar is nothing, but it can grow into $100 here. https://newsworld.biz.pl/link', '2023-01-17 08:25:01', '2023-01-17 08:25:01'),
(1710, 'CrytoLEari', '19kiko96@gmail.com', 89036740771, 'Need money? The financial robot is your solution.', 'Check out the new financial tool, which can make you rich. https://newsworld.biz.pl/link', '2023-01-17 12:20:45', '2023-01-17 12:20:45'),
(1711, 'CrytoLEari', 'mkitsman@rocketmail.com', 89038006692, 'Let the Robot bring you money while you rest.', 'Need some more money? Robot will earn them really fast. https://newsworld.biz.pl/link', '2023-01-17 16:18:42', '2023-01-17 16:18:42'),
(1712, 'CrytoLEari', 'sandj042603@yahoo.com', 89031639300, 'Attention! Financial robot may bring you millions!', 'Let the Robot bring you money while you rest. https://newsworld.biz.pl/link', '2023-01-17 20:11:18', '2023-01-17 20:11:18'),
(1713, 'CrytoLEari', 'jramsden74@yahoo.com', 89037764092, 'Trust your dollar to the Robot and see how it grows to $100.', 'Let the Robot bring you money while you rest. https://newsworld.biz.pl/link', '2023-01-18 01:29:56', '2023-01-18 01:29:56'),
(1714, 'CrytoLEari', 'ckendrick@musson.com', 89033250649, 'The fastest way to make you wallet thick is here.', 'Invest $1 today to make $1000 tomorrow. https://newsworld.biz.pl/link', '2023-01-18 05:25:54', '2023-01-18 05:25:54'),
(1715, 'CrytoLEari', 'sextongjl@yahoo.com', 89030840222, 'We know how to make our future rich and do you?', 'We have found the fastest way to be rich. Find it out here. https://newsworld.biz.pl/link', '2023-01-18 09:21:50', '2023-01-18 09:21:50'),
(1716, 'CrytoLEari', 'nattsdiep@yahoo.com', 89034626995, 'The online job can bring you a fantastic profit.', 'Rich people are rich because they use this robot. https://newsworld.biz.pl/link', '2023-01-18 13:38:54', '2023-01-18 13:38:54'),
(1717, 'LEari', 'Stevie-Leigh95@hotmail.com', 89031329846, 'We have found the fastest way to be rich. Find it out here.', 'Make money, not war! Financial Robot is what you need. https://pigree.newsworld.biz.pl/Appoics', '2023-01-18 18:31:39', '2023-01-18 18:31:39'),
(1718, 'LEari', 'Nix74@aol.com', 89035660905, 'Make money in the internet using this Bot. It really works!', 'Trust the financial Bot to become rich. https://LEari.newsworld.biz.pl/Appoics', '2023-01-18 22:29:21', '2023-01-18 22:29:21'),
(1719, 'LEari', 'owly1959@yahoo.com', 89031718865, 'The financial Robot is your # 1 expert of making money.', 'Financial independence is what this robot guarantees. https://LEari.newsworld.biz.pl/Appoics', '2023-01-19 02:27:35', '2023-01-19 02:27:35'),
(1720, 'LEari', 'biancadavenport07@hotmail.com', 89031758386, 'The best online investment tool is found. Learn more!', 'Online job can be really effective if you use this Robot. https://LEari.newsworld.biz.pl/Appoics', '2023-01-19 06:21:26', '2023-01-19 06:21:26'),
(1721, 'LEari', 'morenaperu75@yahoo.com', 89037526550, 'Financial Robot is #1 investment tool ever. Launch it!', 'Everyone who needs money should try this Robot out. https://LEari.newsworld.biz.pl/Appoics', '2023-01-19 10:18:00', '2023-01-19 10:18:00'),
(1722, 'LEari', 'erin1234marie@yahoo.com', 89037045476, 'Making money in the net is easier now.', 'Make yourself rich in future using this financial robot. https://LEari.newsworld.biz.pl/Appoics', '2023-01-19 14:12:04', '2023-01-19 14:12:04'),
(1723, 'LEari', 'mrs.jeanty@yahoo.com', 89031802473, 'The best online investment tool is found. Learn more!', 'Launch the robot and let it bring you money. https://LEari.newsworld.biz.pl/Appoics', '2023-01-19 18:08:22', '2023-01-19 18:08:22'),
(1724, 'LEari', 'lydia_rose_1999@yahoo.com', 89037713053, 'Need money? Get it here easily! Just press this to launch the robot.', 'There is no need to look for a job anymore. Work online. https://LEari.newsworld.biz.pl/Appoics', '2023-01-19 22:00:48', '2023-01-19 22:00:48'),
(1725, 'LEari', 'leyvasangels@yahoo.com', 89036095105, 'Looking for an easy way to make money? Check out the financial robot.', 'Online earnings are the easiest way for financial independence. https://LEari.newsworld.biz.pl/Appoics', '2023-01-20 02:00:15', '2023-01-20 02:00:15'),
(1726, 'LEari', 'dionelferreira15@gmail.com', 89035991172, 'Learn how to make hundreds of backs each day.', 'The financial Robot works for you even when you sleep. https://LEari.newsworld.biz.pl/Appoics', '2023-01-20 05:54:55', '2023-01-20 05:54:55'),
(1727, 'LEari', 'findasari@rocketmail.com', 89034547426, 'Let the financial Robot be your companion in the financial market.', 'Wow! This is a fastest way for a financial independence. https://LEari.newsworld.biz.pl/Appoics', '2023-01-20 09:48:50', '2023-01-20 09:48:50'),
(1728, 'LEari', 'appeals@washingtonappeals.com', 89036128159, 'Find out about the fastest way for a financial independence.', 'Robot never sleeps. It makes money for you 24/7. https://LEari.newsworld.biz.pl/Appoics', '2023-01-20 14:00:05', '2023-01-20 14:00:05'),
(1729, 'LEari', 'reakina@hotmail.com', 89037124231, 'Watch your money grow while you invest with the Robot.', 'Wow! This is a fastest way for a financial independence. https://LEari.newsworld.biz.pl/Appoics', '2023-01-20 17:59:10', '2023-01-20 17:59:10'),
(1730, 'LEari', 'cnaftzger@gmail.com', 89031654768, 'The fastest way to make your wallet thick is found.', 'This robot can bring you money 24/7. https://LEari.newsworld.biz.pl/Appoics', '2023-01-20 21:54:17', '2023-01-20 21:54:17'),
(1731, 'LEari', 'gudrun.diefenbach@limeshof.com', 89034193499, 'Financial independence is what this robot guarantees.', 'Have no financial skills? Let Robot make money for you. https://LEari.newsworld.biz.pl/Appoics', '2023-01-21 01:51:07', '2023-01-21 01:51:07'),
(1732, 'LEari', 'cialisnopr15@google.com', 89031083313, 'Even a child knows how to make $100 today with the help of this robot.', 'Online job can be really effective if you use this Robot. https://LEari.newsworld.biz.pl/Appoics', '2023-01-21 05:43:34', '2023-01-21 05:43:34'),
(1733, 'LEari', 'sshamah@geico.com', 89030513950, 'Have no money? Earn it online.', 'Watch your money grow while you invest with the Robot. https://LEari.newsworld.biz.pl/Appoics', '2023-01-21 15:17:04', '2023-01-21 15:17:04'),
(1734, 'LEari', 'globalnbasolar@gmail.com', 89035316474, 'The best online investment tool is found. Learn more!', 'Even a child knows how to make money. This robot is what you need! https://LEari.newsworld.biz.pl/Appoics', '2023-01-21 19:30:09', '2023-01-21 19:30:09'),
(1735, 'LEari', 'siguy99@gmail.com', 89032584906, 'Have no money? It’s easy to earn them online here.', 'Financial robot is the best companion of rich people. https://LEari.newsworld.biz.pl/Appoics', '2023-01-21 23:31:35', '2023-01-21 23:31:35'),
(1736, 'LEari', 'brinetechavez_1@yahoo.com', 89032581219, 'Launch the robot and let it bring you money.', 'Even a child knows how to make $100 today with the help of this robot. https://LEari.newsworld.biz.pl/Appoics', '2023-01-22 02:15:30', '2023-01-22 02:15:30'),
(1737, 'LEari', 'gallesn@wellmark.com', 89035684439, 'Check out the newest way to make a fantastic profit.', 'Check out the automatic Bot, which works for you 24/7. https://LEari.newsworld.biz.pl/Appoics', '2023-01-22 06:10:29', '2023-01-22 06:10:29'),
(1738, 'LEari', 'marisalcs@yahoo.com', 89030179030, 'The huge income without investments is available, now!', 'Just one click can turn you dollar into $1000. https://LEari.newsworld.biz.pl/Appoics', '2023-01-22 10:04:13', '2023-01-22 10:04:13'),
(1739, 'Mike Reynolds', 'no-replyChaicky@gmail.com', 84133961751, 'Content Marketing to rank vardhrashoes.com', 'Hi there \r\n \r\nI Just checked your vardhrashoes.com ranks and saw that your site is trending down for some time. \r\n \r\nIf you are looking for a trend reversal, we have the right solution for you \r\n \r\nWe are offering affordable Content Marketing plans with humanly written SEO content \r\n \r\nFor more information, please check our offers \r\nhttps://www.digital-x-press.com/product/content-marketing/ \r\n \r\nThanks and regards \r\nMike Reynolds', '2023-01-22 11:50:38', '2023-01-22 11:50:38'),
(1740, 'LEari', 'charlotte.plasterie@gmail.com', 89032055430, 'We know how to become rich and do you?', 'Make your computer to be you earning instrument. https://LEari.newsworld.biz.pl/Appoics', '2023-01-22 13:59:01', '2023-01-22 13:59:01'),
(1741, 'LEari', 'jlmalone1121@att.net', 89039111092, 'The fastest way to make you wallet thick is here.', 'One dollar is nothing, but it can grow into $100 here. https://LEari.newsworld.biz.pl/Appoics', '2023-01-22 17:54:47', '2023-01-22 17:54:47');
INSERT INTO `txn_contact_us` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1742, 'LEari', 'karuna.sagar33@gmail.com', 89033480285, 'Earning $1000 a day is easy if you use this financial Robot.', 'Making money is very easy if you use the financial Robot. https://LEari.newsworld.biz.pl/Appoics', '2023-01-22 21:48:55', '2023-01-22 21:48:55'),
(1743, 'LEari', 'm1a1503@aol.com', 89032690510, 'Wow! This Robot is a great start for an online career.', 'Make your money work for you all day long. https://LEari.newsworld.biz.pl/Appoics', '2023-01-23 01:47:09', '2023-01-23 01:47:09'),
(1744, 'LEari', 'gykfil@yahoo.com', 89035903507, 'See how Robot makes $1000 from $1 of investment.', 'The success formula is found. Learn more about it. https://LEari.newsworld.biz.pl/Appoics', '2023-01-23 05:38:07', '2023-01-23 05:38:07'),
(1745, 'LEari', 'thesecreted@gmail.com', 89034909266, 'Need some more money? Robot will earn them really fast.', 'The fastest way to make your wallet thick is found. https://LEari.newsworld.biz.pl/Appoics', '2023-01-23 09:34:59', '2023-01-23 09:34:59'),
(1746, 'LEari', 'wolfus1421@gmail.com', 89039842653, 'Make dollars just sitting home.', 'The huge income without investments is available, now! https://LEari.newsworld.biz.pl/Appoics', '2023-01-23 13:30:26', '2023-01-23 13:30:26'),
(1747, 'Mike Chesterton', 'no-replyChaicky@gmail.com', 83451549641, 'Domain Authority of your vardhrashoes.com', 'Hi there \r\n \r\nJust checked your vardhrashoes.com in MOZ and saw that you could use an authority boost. \r\n \r\nWith our service you will get a guaranteed Domain Authority score within just 3 months time. This will increase the organic visibility and strengthen your website authority, thus getting it stronger against G updates as well. \r\n \r\nFor more information, please check our offers \r\nhttps://www.monkeydigital.co/domain-authority-plan/ \r\n \r\nNEW: Semrush DA is now possible \r\nhttps://www.monkeydigi', '2023-01-23 13:47:32', '2023-01-23 13:47:32'),
(1748, 'LEari', 'Lenea.j@aol.com', 89030287294, 'Every your dollar can turn into $100 after you lunch this Robot.', 'Make money 24/7 without any efforts and skills. https://LEari.newsworld.biz.pl/Appoics', '2023-01-23 17:28:31', '2023-01-23 17:28:31'),
(1749, 'LEari', 'twisterhead007@gmail.com', 89030165882, 'No need to work anymore while you have the Robot launched!', 'Using this Robot is the best way to make you rich. https://LEari.world4news.biz.pl/Appoics', '2023-01-23 21:25:50', '2023-01-23 21:25:50'),
(1750, 'LEari', 'pmapabalinas@yahoo.com', 89033303798, 'Looking forward for income? Get it online.', 'Looking for additional money? Try out the best financial instrument. https://LEari.world4news.biz.pl/Appoics', '2023-01-24 01:24:40', '2023-01-24 01:24:40'),
(1751, 'LEari', 'enjoi7jordan@aol.com', 89037595168, 'No need to work anymore while you have the Robot launched!', 'Earning $1000 a day is easy if you use this financial Robot. https://LEari.world4news.biz.pl/Appoics', '2023-01-24 05:25:55', '2023-01-24 05:25:55'),
(1752, 'LEari', 'deburchett@yahoo.com', 89034275459, 'Even a child knows how to make $100 today.', 'Everyone can earn as much as he wants now. https://LEari.world4news.biz.pl/Appoics', '2023-01-24 09:19:07', '2023-01-24 09:19:07'),
(1753, 'LEari', 'kallan.lucas@gmail.com', 89038728542, 'No need to stay awake all night long to earn money. Launch the robot.', 'Need money? Earn it without leaving your home. https://LEari.world4news.biz.pl/Appoics', '2023-01-24 13:18:43', '2023-01-24 13:18:43'),
(1754, 'LEari', 'eresuma@gmail.com', 89032293644, 'The huge income without investments is available.', 'We know how to make our future rich and do you? https://LEari.world4news.biz.pl/Appoics', '2023-01-24 17:17:28', '2023-01-24 17:17:28'),
(1755, 'LEari', 'phycz0524@aol.com', 89037359005, 'Most successful people already use Robot. Do you?', 'Start your online work using the financial Robot. https://LEari.world4news.biz.pl/Appoics', '2023-01-24 21:16:07', '2023-01-24 21:16:07'),
(1756, 'LEari', 'rayman1520@hotmail.com', 89037935521, 'Buy everything you want earning money online.', 'Most successful people already use Robot. Do you? https://LEari.world4news.biz.pl/Appoics', '2023-01-25 01:06:21', '2023-01-25 01:06:21'),
(1757, 'LEari', 'betty.marfo.3@facebook.com', 89034952378, 'The financial Robot is the most effective financial tool in the net!', 'We know how to make our future rich and do you? https://LEari.world4news.biz.pl/Appoics', '2023-01-25 04:55:32', '2023-01-25 04:55:32'),
(1758, 'LEari', 'adooguyguy@gmail.com', 89038506868, 'Feel free to buy everything you want with the additional income.', 'One click of the robot can bring you thousands of bucks. https://LEari.world4news.biz.pl/Appoics', '2023-01-25 08:45:41', '2023-01-25 08:45:41'),
(1759, 'LEari', 'chromehomie@comcast.net', 89039612309, 'Start making thousands of dollars every week just using this robot.', 'We know how to become rich and do you? https://LEari.world4news.biz.pl/Appoics', '2023-01-25 12:31:09', '2023-01-25 12:31:09'),
(1760, 'LEari', 'CARROLLKISSAM@COMCAST.NET', 89034711116, 'Everyone who needs money should try this Robot out.', 'Make money, not war! Financial Robot is what you need. https://LEari.world4news.biz.pl/Appoics', '2023-01-25 16:17:58', '2023-01-25 16:17:58'),
(1761, 'LEari', 'chris.diomede@btconnect.com', 89035373279, 'Learn how to make hundreds of backs each day.', 'Looking forward for income? Get it online. https://LEari.world4news.biz.pl/Appoics', '2023-01-25 20:04:29', '2023-01-25 20:04:29'),
(1762, 'LEari', 'tulamokom@prodigy.net', 89033206976, 'Attention! Financial robot may bring you millions!', 'Financial independence is what this robot guarantees. https://LEari.world4news.biz.pl/Appoics', '2023-01-25 23:53:53', '2023-01-25 23:53:53'),
(1763, 'LEari', 'KrisDahl01@aol.com', 89038986875, 'One dollar is nothing, but it can grow into $100 here.', 'Looking forward for income? Get it online. https://LEari.world4news.biz.pl/Appoics', '2023-01-26 04:08:16', '2023-01-26 04:08:16'),
(1764, 'LEari', 'rosemary.haselock@ntlworld.com', 89034144098, 'Everyone can earn as much as he wants now.', 'Even a child knows how to make money. This robot is what you need! https://LEari.world4news.biz.pl/Appoics', '2023-01-26 07:56:06', '2023-01-26 07:56:06'),
(1765, 'LEari', 'montreyt@yahoo.com', 89034283074, 'Make $1000 from $1 in a few minutes. Launch the financial robot now.', 'No need to stay awake all night long to earn money. Launch the robot. https://LEari.world4news.biz.pl/Appoics', '2023-01-26 11:43:16', '2023-01-26 11:43:16'),
(1766, 'LEari', 'Haypieper@gmail.com', 89035291728, 'Financial independence is what this robot guarantees.', 'Make thousands of bucks. Pay nothing. https://LEari.world4news.biz.pl/Appoics', '2023-01-26 15:29:14', '2023-01-26 15:29:14'),
(1767, 'LEari', 'www.456jasmine@yahoo.com', 89030923935, 'It is the best time to launch the Robot to get more money.', 'Rich people are rich because they use this robot. https://LEari.world4news.biz.pl/Appoics', '2023-01-26 19:13:56', '2023-01-26 19:13:56'),
(1768, 'LEari', 'kunalkishore@yahoo.com', 89037049674, 'Make money online, staying at home this cold winter.', 'Making money can be extremely easy if you use this Robot. https://fqxtzbiyr.com/14?r=35846', '2023-01-26 21:33:27', '2023-01-26 21:33:27'),
(1769, 'LEari', 'cksweetie85@yahoo.com', 89035684366, 'One click of the robot can bring you thousands of bucks.', 'Still not a millionaire? The financial robot will make you him! https://fqxtzbiyr.com/14?r=35846', '2023-01-27 01:25:11', '2023-01-27 01:25:11'),
(1770, 'LEari', 'danny.soccerdude@gmail.com', 89030441299, 'Check out the new financial tool, which can make you rich.', 'Looking forward for income? Get it online. https://fqxtzbiyr.com/14?r=35846', '2023-01-27 05:12:11', '2023-01-27 05:12:11'),
(1771, 'LEari', 'colleenmorris@me.com', 89032630731, 'Make money, not war! Financial Robot is what you need.', 'Trust your dollar to the Robot and see how it grows to $100. https://fqxtzbiyr.com/14?r=35846', '2023-01-27 09:02:11', '2023-01-27 09:02:11'),
(1772, 'LEari', 'drequandebose@yahoo.com', 89037369478, 'Make yourself rich in future using this financial robot.', 'Attention! Here you can earn money online! https://fqxtzbiyr.com/14?r=35846', '2023-01-27 12:49:15', '2023-01-27 12:49:15'),
(1773, 'LEari', 'JackieLieras@aol.com', 89035920585, 'Financial robot is a great way to manage and increase your income.', 'Making money can be extremely easy if you use this Robot. https://fqxtzbiyr.com/14?r=35846', '2023-01-27 16:37:07', '2023-01-27 16:37:07');

-- --------------------------------------------------------

--
-- Table structure for table `txn_custom_fields`
--

CREATE TABLE `txn_custom_fields` (
  `id` int(10) UNSIGNED NOT NULL,
  `field_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field_value` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `txn_images`
--

CREATE TABLE `txn_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_url` varchar(15000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED DEFAULT NULL,
  `size_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `txn_images`
--

INSERT INTO `txn_images` (`id`, `image_url`, `product_id`, `color_id`, `size_id`, `created_at`, `updated_at`) VALUES
(14606, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/2.jpg', 15454, 12, 13, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14607, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/3.jpg', 15454, 12, 13, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14608, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/4.jpg', 15454, 12, 13, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14609, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/5.jpg', 15454, 12, 13, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14610, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/6.jpg', 15454, 12, 13, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14611, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/1.jpg', 15454, 12, 13, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14612, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/2.jpg', 15454, 12, 14, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14613, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/3.jpg', 15454, 12, 14, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14614, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/4.jpg', 15454, 12, 14, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14615, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/5.jpg', 15454, 12, 14, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14616, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/6.jpg', 15454, 12, 14, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14617, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/1.jpg', 15454, 12, 14, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14618, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/2.jpg', 15454, 12, 15, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14619, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/3.jpg', 15454, 12, 15, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14620, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/4.jpg', 15454, 12, 15, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14621, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/5.jpg', 15454, 12, 15, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14622, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/6.jpg', 15454, 12, 15, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14623, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/1.jpg', 15454, 12, 15, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14624, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/2.jpg', 15454, 12, 19, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14625, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/3.jpg', 15454, 12, 19, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14626, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/4.jpg', 15454, 12, 19, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14627, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/5.jpg', 15454, 12, 19, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14628, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/6.jpg', 15454, 12, 19, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14629, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/1.jpg', 15454, 12, 19, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14630, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/2.jpg', 15454, 12, 20, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14631, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/3.jpg', 15454, 12, 20, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14632, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/4.jpg', 15454, 12, 20, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14633, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/5.jpg', 15454, 12, 20, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14634, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/6.jpg', 15454, 12, 20, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14635, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/1.jpg', 15454, 12, 20, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14636, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/2.jpg', 15454, 12, 21, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14637, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/3.jpg', 15454, 12, 21, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14638, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/4.jpg', 15454, 12, 21, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14639, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/5.jpg', 15454, 12, 21, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14640, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/6.jpg', 15454, 12, 21, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14641, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/1.jpg', 15454, 12, 21, '2022-06-17 15:01:42', '2022-06-17 15:01:42'),
(14642, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/2.jpg', 15455, 4, 13, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14643, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/3.jpg', 15455, 4, 13, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14644, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/4.jpg', 15455, 4, 13, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14645, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/5.jpg', 15455, 4, 13, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14646, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/6.jpg', 15455, 4, 13, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14647, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/1.jpg', 15455, 4, 13, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14648, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/2.jpg', 15455, 4, 14, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14649, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/3.jpg', 15455, 4, 14, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14650, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/4.jpg', 15455, 4, 14, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14651, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/5.jpg', 15455, 4, 14, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14652, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/6.jpg', 15455, 4, 14, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14653, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/1.jpg', 15455, 4, 14, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14654, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/2.jpg', 15455, 4, 15, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14655, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/3.jpg', 15455, 4, 15, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14656, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/4.jpg', 15455, 4, 15, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14657, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/5.jpg', 15455, 4, 15, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14658, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/6.jpg', 15455, 4, 15, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14659, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/1.jpg', 15455, 4, 15, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14660, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/2.jpg', 15455, 4, 19, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14661, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/3.jpg', 15455, 4, 19, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14662, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/4.jpg', 15455, 4, 19, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14663, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/5.jpg', 15455, 4, 19, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14664, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/6.jpg', 15455, 4, 19, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14665, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/1.jpg', 15455, 4, 19, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14666, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/2.jpg', 15455, 4, 20, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14667, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/3.jpg', 15455, 4, 20, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14668, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/4.jpg', 15455, 4, 20, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14669, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/5.jpg', 15455, 4, 20, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14670, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/6.jpg', 15455, 4, 20, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14671, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/1.jpg', 15455, 4, 20, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14672, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/2.jpg', 15455, 4, 21, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14673, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/3.jpg', 15455, 4, 21, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14674, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/4.jpg', 15455, 4, 21, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14675, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/5.jpg', 15455, 4, 21, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14676, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/6.jpg', 15455, 4, 21, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14677, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/1.jpg', 15455, 4, 21, '2022-06-17 15:02:52', '2022-06-17 15:02:52'),
(14750, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/2.jpg', 15457, 20, 13, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14751, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/3.jpg', 15457, 20, 13, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14752, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/4.jpg', 15457, 20, 13, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14753, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/5.jpg', 15457, 20, 13, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14754, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/6.jpg', 15457, 20, 13, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14755, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/1.jpg', 15457, 20, 13, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14756, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/2.jpg', 15457, 20, 14, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14757, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/3.jpg', 15457, 20, 14, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14758, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/4.jpg', 15457, 20, 14, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14759, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/5.jpg', 15457, 20, 14, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14760, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/6.jpg', 15457, 20, 14, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14761, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/1.jpg', 15457, 20, 14, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14762, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/2.jpg', 15457, 20, 15, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14763, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/3.jpg', 15457, 20, 15, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14764, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/4.jpg', 15457, 20, 15, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14765, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/5.jpg', 15457, 20, 15, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14766, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/6.jpg', 15457, 20, 15, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14767, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/1.jpg', 15457, 20, 15, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14768, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/2.jpg', 15457, 20, 19, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14769, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/3.jpg', 15457, 20, 19, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14770, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/4.jpg', 15457, 20, 19, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14771, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/5.jpg', 15457, 20, 19, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14772, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/6.jpg', 15457, 20, 19, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14773, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/1.jpg', 15457, 20, 19, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14774, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/2.jpg', 15457, 20, 20, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14775, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/3.jpg', 15457, 20, 20, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14776, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/4.jpg', 15457, 20, 20, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14777, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/5.jpg', 15457, 20, 20, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14778, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/6.jpg', 15457, 20, 20, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14779, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/1.jpg', 15457, 20, 20, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14780, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/2.jpg', 15457, 20, 21, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14781, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/3.jpg', 15457, 20, 21, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14782, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/4.jpg', 15457, 20, 21, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14783, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/5.jpg', 15457, 20, 21, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14784, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/6.jpg', 15457, 20, 21, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14785, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/1.jpg', 15457, 20, 21, '2022-06-17 15:14:13', '2022-06-17 15:14:13'),
(14786, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/2.jpg', 15458, 1, 13, '2022-06-17 15:29:25', '2022-06-17 15:29:25'),
(14787, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/3.jpg', 15458, 1, 13, '2022-06-17 15:29:25', '2022-06-17 15:29:25'),
(14788, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/4.jpg', 15458, 1, 13, '2022-06-17 15:29:25', '2022-06-17 15:29:25'),
(14789, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/5.jpg', 15458, 1, 13, '2022-06-17 15:29:25', '2022-06-17 15:29:25'),
(14790, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/6.jpg', 15458, 1, 13, '2022-06-17 15:29:25', '2022-06-17 15:29:25'),
(14791, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/1.jpg', 15458, 1, 13, '2022-06-17 15:29:25', '2022-06-17 15:29:25'),
(14792, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/2.jpg', 15458, 1, 14, '2022-06-17 15:29:25', '2022-06-17 15:29:25'),
(14793, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/3.jpg', 15458, 1, 14, '2022-06-17 15:29:25', '2022-06-17 15:29:25'),
(14794, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/4.jpg', 15458, 1, 14, '2022-06-17 15:29:25', '2022-06-17 15:29:25'),
(14795, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/5.jpg', 15458, 1, 14, '2022-06-17 15:29:25', '2022-06-17 15:29:25'),
(14796, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/6.jpg', 15458, 1, 14, '2022-06-17 15:29:25', '2022-06-17 15:29:25'),
(14797, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/1.jpg', 15458, 1, 14, '2022-06-17 15:29:25', '2022-06-17 15:29:25'),
(14798, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/2.jpg', 15458, 1, 15, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(14799, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/3.jpg', 15458, 1, 15, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(14800, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/4.jpg', 15458, 1, 15, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(14801, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/5.jpg', 15458, 1, 15, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(14802, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/6.jpg', 15458, 1, 15, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(14803, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/1.jpg', 15458, 1, 15, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(14804, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/2.jpg', 15458, 1, 19, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(14805, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/3.jpg', 15458, 1, 19, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(14806, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/4.jpg', 15458, 1, 19, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(14807, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/5.jpg', 15458, 1, 19, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(14808, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/6.jpg', 15458, 1, 19, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(14809, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/1.jpg', 15458, 1, 19, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(14810, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/2.jpg', 15458, 1, 20, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(14811, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/3.jpg', 15458, 1, 20, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(14812, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/4.jpg', 15458, 1, 20, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(14813, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/5.jpg', 15458, 1, 20, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(14814, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/6.jpg', 15458, 1, 20, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(14815, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/1.jpg', 15458, 1, 20, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(14816, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/2.jpg', 15458, 1, 21, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(14817, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/3.jpg', 15458, 1, 21, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(14818, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/4.jpg', 15458, 1, 21, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(14819, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/5.jpg', 15458, 1, 21, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(14820, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/6.jpg', 15458, 1, 21, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(14821, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/1.jpg', 15458, 1, 21, '2022-06-17 15:29:26', '2022-06-17 15:29:26'),
(14822, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/2.jpg', 15459, 1, 13, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14823, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/3.jpg', 15459, 1, 13, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14824, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/4.jpg', 15459, 1, 13, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14825, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/5.jpg', 15459, 1, 13, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14826, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/6.jpg', 15459, 1, 13, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14827, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/1.jpg', 15459, 1, 13, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14828, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/2.jpg', 15459, 1, 14, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14829, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/3.jpg', 15459, 1, 14, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14830, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/4.jpg', 15459, 1, 14, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14831, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/5.jpg', 15459, 1, 14, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14832, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/6.jpg', 15459, 1, 14, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14833, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/1.jpg', 15459, 1, 14, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14834, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/2.jpg', 15459, 1, 15, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14835, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/3.jpg', 15459, 1, 15, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14836, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/4.jpg', 15459, 1, 15, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14837, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/5.jpg', 15459, 1, 15, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14838, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/6.jpg', 15459, 1, 15, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14839, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/1.jpg', 15459, 1, 15, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14840, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/2.jpg', 15459, 1, 19, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14841, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/3.jpg', 15459, 1, 19, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14842, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/4.jpg', 15459, 1, 19, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14843, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/5.jpg', 15459, 1, 19, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14844, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/6.jpg', 15459, 1, 19, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14845, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/1.jpg', 15459, 1, 19, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14846, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/2.jpg', 15459, 1, 20, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14847, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/3.jpg', 15459, 1, 20, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14848, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/4.jpg', 15459, 1, 20, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14849, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/5.jpg', 15459, 1, 20, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14850, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/6.jpg', 15459, 1, 20, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14851, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/1.jpg', 15459, 1, 20, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14852, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/2.jpg', 15459, 1, 21, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14853, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/3.jpg', 15459, 1, 21, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14854, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/4.jpg', 15459, 1, 21, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14855, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/5.jpg', 15459, 1, 21, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14856, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/6.jpg', 15459, 1, 21, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14857, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/1.jpg', 15459, 1, 21, '2022-06-17 15:36:21', '2022-06-17 15:36:21'),
(14966, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/2.jpg', 15461, 14, 13, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14967, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/3.jpg', 15461, 14, 13, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14968, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/4.jpg', 15461, 14, 13, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14969, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/5.jpg', 15461, 14, 13, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14970, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/6.jpg', 15461, 14, 13, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14971, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/1.jpg', 15461, 14, 13, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14972, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/2.jpg', 15461, 14, 14, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14973, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/3.jpg', 15461, 14, 14, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14974, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/4.jpg', 15461, 14, 14, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14975, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/5.jpg', 15461, 14, 14, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14976, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/6.jpg', 15461, 14, 14, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14977, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/1.jpg', 15461, 14, 14, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14978, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/2.jpg', 15461, 14, 15, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14979, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/3.jpg', 15461, 14, 15, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14980, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/4.jpg', 15461, 14, 15, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14981, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/5.jpg', 15461, 14, 15, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14982, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/6.jpg', 15461, 14, 15, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14983, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/1.jpg', 15461, 14, 15, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14984, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/2.jpg', 15461, 14, 19, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14985, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/3.jpg', 15461, 14, 19, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14986, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/4.jpg', 15461, 14, 19, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14987, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/5.jpg', 15461, 14, 19, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14988, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/6.jpg', 15461, 14, 19, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14989, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/1.jpg', 15461, 14, 19, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14990, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/2.jpg', 15461, 14, 20, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14991, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/3.jpg', 15461, 14, 20, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14992, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/4.jpg', 15461, 14, 20, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14993, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/5.jpg', 15461, 14, 20, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14994, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/6.jpg', 15461, 14, 20, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14995, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/1.jpg', 15461, 14, 20, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14996, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/2.jpg', 15461, 14, 21, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14997, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/3.jpg', 15461, 14, 21, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14998, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/4.jpg', 15461, 14, 21, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(14999, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/5.jpg', 15461, 14, 21, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(15000, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/6.jpg', 15461, 14, 21, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(15001, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/1.jpg', 15461, 14, 21, '2022-06-17 15:44:17', '2022-06-17 15:44:17'),
(15002, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/2.jpg', 15462, 1, 13, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15003, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/3.jpg', 15462, 1, 13, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15004, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/4.jpg', 15462, 1, 13, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15005, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/5.jpg', 15462, 1, 13, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15006, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/6.jpg', 15462, 1, 13, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15007, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/1.jpg', 15462, 1, 13, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15008, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/2.jpg', 15462, 1, 14, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15009, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/3.jpg', 15462, 1, 14, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15010, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/4.jpg', 15462, 1, 14, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15011, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/5.jpg', 15462, 1, 14, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15012, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/6.jpg', 15462, 1, 14, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15013, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/1.jpg', 15462, 1, 14, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15014, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/2.jpg', 15462, 1, 15, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15015, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/3.jpg', 15462, 1, 15, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15016, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/4.jpg', 15462, 1, 15, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15017, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/5.jpg', 15462, 1, 15, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15018, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/6.jpg', 15462, 1, 15, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15019, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/1.jpg', 15462, 1, 15, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15020, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/2.jpg', 15462, 1, 19, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15021, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/3.jpg', 15462, 1, 19, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15022, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/4.jpg', 15462, 1, 19, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15023, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/5.jpg', 15462, 1, 19, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15024, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/6.jpg', 15462, 1, 19, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15025, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/1.jpg', 15462, 1, 19, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15026, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/2.jpg', 15462, 1, 20, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15027, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/3.jpg', 15462, 1, 20, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15028, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/4.jpg', 15462, 1, 20, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15029, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/5.jpg', 15462, 1, 20, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15030, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/6.jpg', 15462, 1, 20, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15031, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/1.jpg', 15462, 1, 20, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15032, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/2.jpg', 15462, 1, 21, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15033, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/3.jpg', 15462, 1, 21, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15034, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/4.jpg', 15462, 1, 21, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15035, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/5.jpg', 15462, 1, 21, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15036, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/6.jpg', 15462, 1, 21, '2022-06-17 15:55:59', '2022-06-17 15:55:59'),
(15037, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/1.jpg', 15462, 1, 21, '2022-06-17 15:55:59', '2022-06-17 15:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `txn_keywords`
--

CREATE TABLE `txn_keywords` (
  `id` int(10) UNSIGNED NOT NULL,
  `keyword` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `txn_keywords`
--

INSERT INTO `txn_keywords` (`id`, `keyword`, `product_id`, `created_at`, `updated_at`) VALUES
(15750, 'Vardhra Y&B SPORTS SHOES WHITE & BLUE', 15454, '2022-06-17 15:03:12', '2022-06-17 15:03:12'),
(15751, 'Vardhra Y&B SPORTS SHOES WHITE & BLUE', 15454, '2022-06-17 15:03:12', '2022-06-17 15:03:12'),
(15752, 'Vardhra Y&B SPORTS SHOES WHITE & BLUE', 15454, '2022-06-17 15:03:12', '2022-06-17 15:03:12'),
(15753, 'Vardhra Y&B SPORTS SHOES WHITE & BLUE', 15454, '2022-06-17 15:03:12', '2022-06-17 15:03:12'),
(15754, 'Vardhra Y&B SPORTS SHOES WHITE & BLUE', 15454, '2022-06-17 15:03:12', '2022-06-17 15:03:12'),
(15755, 'Vardhra Y&B SPORTS SHOES WHITE & BLUE', 15454, '2022-06-17 15:03:12', '2022-06-17 15:03:12'),
(15756, 'Vardhra Y&B DENIM CASUAL LACEUP SNEAKERS', 15455, '2022-06-17 15:03:28', '2022-06-17 15:03:28'),
(15757, 'Vardhra Y&B DENIM CASUAL LACEUP SNEAKERS', 15455, '2022-06-17 15:03:28', '2022-06-17 15:03:28'),
(15758, 'Vardhra Y&B DENIM CASUAL LACEUP SNEAKERS', 15455, '2022-06-17 15:03:28', '2022-06-17 15:03:28'),
(15759, 'Vardhra Y&B DENIM CASUAL LACEUP SNEAKERS', 15455, '2022-06-17 15:03:28', '2022-06-17 15:03:28'),
(15760, 'Vardhra Y&B DENIM CASUAL LACEUP SNEAKERS', 15455, '2022-06-17 15:03:28', '2022-06-17 15:03:28'),
(15761, 'Vardhra Y&B DENIM CASUAL LACEUP SNEAKERS', 15455, '2022-06-17 15:03:28', '2022-06-17 15:03:28'),
(15792, 'Vardhra Y&B SPORTS SHOES WHITE & RED', 15457, '2022-06-17 15:29:58', '2022-06-17 15:29:58'),
(15793, 'Vardhra Y&B SPORTS SHOES WHITE & RED', 15457, '2022-06-17 15:29:58', '2022-06-17 15:29:58'),
(15794, 'Vardhra Y&B SPORTS SHOES WHITE & RED', 15457, '2022-06-17 15:29:58', '2022-06-17 15:29:58'),
(15795, 'Vardhra Y&B SPORTS SHOES WHITE & RED', 15457, '2022-06-17 15:29:58', '2022-06-17 15:29:58'),
(15796, 'Vardhra Y&B SPORTS SHOES WHITE & RED', 15457, '2022-06-17 15:29:58', '2022-06-17 15:29:58'),
(15797, 'Vardhra Y&B SPORTS SHOES WHITE & RED', 15457, '2022-06-17 15:29:58', '2022-06-17 15:29:58'),
(15798, 'Vardhra Y&B BLACK 2.0 SPEEDSTAR CASUAL SHOES', 15458, '2022-06-17 15:30:08', '2022-06-17 15:30:08'),
(15799, 'Vardhra Y&B BLACK 2.0 SPEEDSTAR CASUAL SHOES', 15458, '2022-06-17 15:30:08', '2022-06-17 15:30:08'),
(15800, 'Vardhra Y&B BLACK 2.0 SPEEDSTAR CASUAL SHOES', 15458, '2022-06-17 15:30:08', '2022-06-17 15:30:08'),
(15801, 'Vardhra Y&B BLACK 2.0 SPEEDSTAR CASUAL SHOES', 15458, '2022-06-17 15:30:08', '2022-06-17 15:30:08'),
(15802, 'Vardhra Y&B BLACK 2.0 SPEEDSTAR CASUAL SHOES', 15458, '2022-06-17 15:30:08', '2022-06-17 15:30:08'),
(15803, 'Vardhra Y&B BLACK 2.0 SPEEDSTAR CASUAL SHOES', 15458, '2022-06-17 15:30:08', '2022-06-17 15:30:08'),
(15810, 'Vardhra Y&B SLIPON BLACK CASUAL SHOES', 15459, '2022-06-17 15:36:58', '2022-06-17 15:36:58'),
(15811, 'Vardhra Y&B SLIPON BLACK CASUAL SHOES', 15459, '2022-06-17 15:36:58', '2022-06-17 15:36:58'),
(15812, 'Vardhra Y&B SLIPON BLACK CASUAL SHOES', 15459, '2022-06-17 15:36:58', '2022-06-17 15:36:58'),
(15813, 'Vardhra Y&B SLIPON BLACK CASUAL SHOES', 15459, '2022-06-17 15:36:58', '2022-06-17 15:36:58'),
(15814, 'Vardhra Y&B SLIPON BLACK CASUAL SHOES', 15459, '2022-06-17 15:36:58', '2022-06-17 15:36:58'),
(15815, 'Vardhra Y&B SLIPON BLACK CASUAL SHOES', 15459, '2022-06-17 15:36:58', '2022-06-17 15:36:58'),
(15846, 'Vardhra Y&B WHITE&GREY CASAUL SNEAKER', 15461, '2022-06-17 15:57:17', '2022-06-17 15:57:17'),
(15847, 'Vardhra Y&B WHITE&GREY CASAUL SNEAKER', 15461, '2022-06-17 15:57:17', '2022-06-17 15:57:17'),
(15848, 'Vardhra Y&B WHITE&GREY CASAUL SNEAKER', 15461, '2022-06-17 15:57:17', '2022-06-17 15:57:17'),
(15849, 'Vardhra Y&B WHITE&GREY CASAUL SNEAKER', 15461, '2022-06-17 15:57:17', '2022-06-17 15:57:17'),
(15850, 'Vardhra Y&B WHITE&GREY CASAUL SNEAKER', 15461, '2022-06-17 15:57:17', '2022-06-17 15:57:17'),
(15851, 'Vardhra Y&B WHITE&GREY CASAUL SNEAKER', 15461, '2022-06-17 15:57:17', '2022-06-17 15:57:17'),
(15852, 'Vardhra Y&B BLACK SPEEDSTAR SNEAKER CASUAL', 15462, '2022-06-17 15:57:29', '2022-06-17 15:57:29'),
(15853, 'Vardhra Y&B BLACK SPEEDSTAR SNEAKER CASUAL', 15462, '2022-06-17 15:57:29', '2022-06-17 15:57:29'),
(15854, 'Vardhra Y&B BLACK SPEEDSTAR SNEAKER CASUAL', 15462, '2022-06-17 15:57:29', '2022-06-17 15:57:29'),
(15855, 'Vardhra Y&B BLACK SPEEDSTAR SNEAKER CASUAL', 15462, '2022-06-17 15:57:29', '2022-06-17 15:57:29'),
(15856, 'Vardhra Y&B BLACK SPEEDSTAR SNEAKER CASUAL', 15462, '2022-06-17 15:57:29', '2022-06-17 15:57:29'),
(15857, 'Vardhra Y&B BLACK SPEEDSTAR SNEAKER CASUAL', 15462, '2022-06-17 15:57:29', '2022-06-17 15:57:29');

-- --------------------------------------------------------

--
-- Table structure for table `txn_master_gsts`
--

CREATE TABLE `txn_master_gsts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gst_value` double(8,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `txn_master_gsts`
--

INSERT INTO `txn_master_gsts` (`id`, `gst_value`, `status`, `created_at`, `updated_at`) VALUES
(5, 10.00, 1, '2022-04-22 17:37:08', '2022-04-22 17:37:08'),
(18, 18.00, 1, '2022-04-22 18:37:55', '2022-04-22 18:37:55'),
(20, 12.00, 1, '2022-04-23 11:33:44', '2022-04-23 11:33:44'),
(21, 7.00, 1, '2022-05-25 05:38:01', '2022-05-25 05:38:01'),
(22, 8.00, 1, '2022-05-25 05:38:01', '2022-05-25 05:38:01'),
(23, 9.00, 1, '2022-05-25 05:38:01', '2022-05-25 05:38:01'),
(24, 11.00, 1, '2022-05-25 05:38:01', '2022-05-25 05:38:01');

-- --------------------------------------------------------

--
-- Table structure for table `txn_materials`
--

CREATE TABLE `txn_materials` (
  `id` int(10) UNSIGNED NOT NULL,
  `material_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `txn_materials`
--

INSERT INTO `txn_materials` (`id`, `material_name`, `status`, `created_at`, `updated_at`) VALUES
(5, 'cotton', 1, '2022-04-22 17:37:08', '2022-04-22 17:37:08'),
(18, 'LEATHER', 1, '2022-04-22 18:38:50', '2022-04-22 18:38:50'),
(23, 'Synthetic', 1, '2022-04-23 11:33:44', '2022-04-23 11:33:44'),
(24, 'Suede', 1, '2022-04-23 11:33:44', '2022-04-23 11:33:44'),
(25, 'Suede Leather', 1, '2022-04-23 11:33:44', '2022-04-23 11:33:44'),
(26, 'Genuine Leather', 1, '2022-04-23 11:33:46', '2022-04-23 11:33:46'),
(27, 'Synthetic Patent', 1, '2022-04-23 16:46:17', '2022-04-23 16:46:17');

-- --------------------------------------------------------

--
-- Table structure for table `txn_orders`
--

CREATE TABLE `txn_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `shipment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipment_order_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pickup_point` text COLLATE utf8mb4_unicode_ci,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `tbt` double DEFAULT NULL,
  `tax` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `promocode` char(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `payment_mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `territory` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `landmark` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_of_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `awf_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_date` date DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci,
  `cancel_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_reason` text COLLATE utf8mb4_unicode_ci,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_discount` tinyint(1) NOT NULL DEFAULT '0',
  `reward_points` bigint(20) DEFAULT NULL,
  `return_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `txn_order_details`
--

CREATE TABLE `txn_order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `map_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `mrp` double(8,2) DEFAULT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `color_id` bigint(20) UNSIGNED DEFAULT NULL,
  `size_id` bigint(20) UNSIGNED DEFAULT NULL,
  `offers` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `txn_products`
--

CREATE TABLE `txn_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `upc` bigint(20) DEFAULT NULL,
  `brand_id` int(10) UNSIGNED DEFAULT NULL,
  `gst_id` bigint(20) UNSIGNED DEFAULT NULL,
  `material_id` int(10) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `length` double(8,2) DEFAULT NULL,
  `breadth` double(8,2) DEFAULT NULL,
  `height` double(8,2) DEFAULT NULL,
  `weight` double(8,2) DEFAULT NULL,
  `weight_unit` int(10) UNSIGNED DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `condition_id` int(10) UNSIGNED DEFAULT NULL,
  `image_url` varchar(15000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url1` mediumtext COLLATE utf8mb4_unicode_ci,
  `slug_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `warranty_id` bigint(20) UNSIGNED DEFAULT NULL,
  `width` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isCodAvailable` tinyint(1) DEFAULT NULL,
  `within_days` tinyint(1) DEFAULT '0',
  `wrong_products` tinyint(1) DEFAULT '0',
  `faulty_products` tinyint(1) DEFAULT '0',
  `quality_issue` tinyint(1) DEFAULT '0',
  `purchase_qty` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offered_qty` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `review_status` tinyint(1) NOT NULL DEFAULT '0',
  `sizecart` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `txn_products`
--

INSERT INTO `txn_products` (`id`, `title`, `category_id`, `upc`, `brand_id`, `gst_id`, `material_id`, `description`, `length`, `breadth`, `height`, `weight`, `weight_unit`, `expiry_date`, `condition_id`, `image_url`, `image_url1`, `slug_url`, `status`, `warranty_id`, `width`, `isCodAvailable`, `within_days`, `wrong_products`, `faulty_products`, `quality_issue`, `purchase_qty`, `offered_qty`, `created_at`, `updated_at`, `review_status`, `sizecart`) VALUES
(15454, 'Vardhra Y&B SPORTS SHOES WHITE & BLUE', 20, NULL, 18, 18, 23, 'Vardhra Y&B SPORTS SHOES WHITE & BLUE', 14.00, 8.00, 4.00, 0.40, 18, NULL, 19, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/1.jpg', 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-5%20%20WHITE%20BLUE/2.jpg', 'casual-vardhra-yb-sports-shoes-white-blue-9375', 1, 18, '8', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17 15:01:42', '2022-06-17 15:03:12', 1, '<ul style=\"margin:0px 0px 0px 18px;color:#0f1111;margin-bottom:4px;\">\r\n\r\n\r\n<li style=\"list-style:circle; margin-top:9px;margin-bottom:2px;\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nOuter Material: Synthethic\r\n </span>\r\n\r\n </li>\r\n\r\n\r\n\r\n<li style=\"list-style:circle; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n \">\r\nInner Material: Synthethic\r\n </span>\r\n\r\n </li>\r\n\r\n\r\n\r\n<li style=\"list-style:circle; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;     font-size: 13px;\r\n \">\r\nSole: Eva\r\n </span>\r\n\r\n </li>\r\n\r\n<li style=\"list-style:circle; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nClosure: Lace Up\r\n </span>\r\n\r\n </li>\r\n\r\n<li style=\"list-style:disc; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nLight Weight and Durable\r\n\r\n </span>\r\n\r\n </li>\r\n\r\n<li style=\"list-style:disc; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nMADE IN  INDIA\r\n\r\n </span>\r\n\r\n </li>\r\n\r\n\r\n\r\n</ul>'),
(15455, 'Vardhra Y&B DENIM CASUAL LACEUP SNEAKERS', 20, NULL, 18, 18, 23, 'Vardhra Y&B SPORTS SHOES WHITE & BLUE', 14.00, 8.00, 4.00, 0.40, 18, NULL, 19, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/1.jpg', 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-4%20DENIM/2.jpg', 'casual-vardhra-yb-denim-casual-laceup-sneakers-7599', 1, 18, '8', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17 15:02:52', '2022-06-17 15:03:28', 1, '<ul style=\"margin:0px 0px 0px 18px;color:#0f1111;margin-bottom:4px;\">\r\n\r\n\r\n<li style=\"list-style:circle; margin-top:9px;margin-bottom:2px;\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nOuter Material: Synthethic\r\n </span>\r\n\r\n </li>\r\n\r\n\r\n\r\n<li style=\"list-style:circle; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n \">\r\nInner Material: Synthethic\r\n </span>\r\n\r\n </li>\r\n\r\n\r\n\r\n<li style=\"list-style:circle; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;     font-size: 13px;\r\n \">\r\nSole: Eva\r\n </span>\r\n\r\n </li>\r\n\r\n<li style=\"list-style:circle; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nClosure: Lace Up\r\n </span>\r\n\r\n </li>\r\n\r\n<li style=\"list-style:disc; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nLight Weight and Durable\r\n\r\n </span>\r\n\r\n </li>\r\n\r\n<li style=\"list-style:disc; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nMADE IN  INDIA\r\n\r\n </span>\r\n\r\n </li>\r\n\r\n\r\n\r\n</ul>'),
(15457, 'Vardhra Y&B SPORTS SHOES WHITE & RED', 20, NULL, 18, 18, 23, 'Vardhra Y&B SPORTS SHOES WHITE & RED', 14.00, 8.00, 4.00, 0.40, 18, NULL, 19, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/1.jpg', 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-7-WHITERED/2.jpg', 'casual-vardhra-yb-sports-shoes-white-red-7999', 1, 18, '8', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17 15:14:13', '2022-06-17 15:29:58', 1, '<ul style=\"margin:0px 0px 0px 18px;color:#0f1111;margin-bottom:4px;\">\r\n\r\n\r\n<li style=\"list-style:circle; margin-top:9px;margin-bottom:2px;\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nOuter Material: Synthethic\r\n </span>\r\n\r\n </li>\r\n\r\n\r\n\r\n<li style=\"list-style:circle; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n \">\r\nInner Material: Synthethic\r\n </span>\r\n\r\n </li>\r\n\r\n\r\n\r\n<li style=\"list-style:circle; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;     font-size: 13px;\r\n \">\r\nSole: Eva\r\n </span>\r\n\r\n </li>\r\n\r\n<li style=\"list-style:circle; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nClosure: Lace Up\r\n </span>\r\n\r\n </li>\r\n\r\n<li style=\"list-style:disc; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nLight Weight and Durable\r\n\r\n </span>\r\n\r\n </li>\r\n\r\n<li style=\"list-style:disc; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nMADE IN  INDIA\r\n\r\n </span>\r\n\r\n </li>\r\n\r\n\r\n\r\n</ul>'),
(15458, 'Vardhra Y&B BLACK 2.0 SPEEDSTAR CASUAL SHOES', 20, NULL, 18, 18, 23, 'Vardhra Y&B BLACK 2.0 SPEEDSTAR CASUAL SHOES', 14.00, 8.00, 4.00, 0.40, 18, NULL, 19, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/1.jpg', 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-6%20BLACKMULTI/2.jpg', 'casual-vardhra-yb-black-20-speedstar-casual-shoes-3433', 1, 18, '8', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17 15:29:25', '2022-06-17 15:30:08', 1, '<ul style=\"margin:0px 0px 0px 18px;color:#0f1111;margin-bottom:4px;\">\r\n\r\n\r\n<li style=\"list-style:circle; margin-top:9px;margin-bottom:2px;\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nOuter Material: Synthethic\r\n </span>\r\n\r\n </li>\r\n\r\n\r\n\r\n<li style=\"list-style:circle; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n \">\r\nInner Material: Synthethic\r\n </span>\r\n\r\n </li>\r\n\r\n\r\n\r\n<li style=\"list-style:circle; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;     font-size: 13px;\r\n \">\r\nSole: Eva\r\n </span>\r\n\r\n </li>\r\n\r\n<li style=\"list-style:circle; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nClosure: Lace Up\r\n </span>\r\n\r\n </li>\r\n\r\n<li style=\"list-style:disc; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nLight Weight and Durable\r\n\r\n </span>\r\n\r\n </li>\r\n\r\n<li style=\"list-style:disc; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nMADE IN  INDIA\r\n\r\n </span>\r\n\r\n </li>\r\n\r\n\r\n\r\n</ul>'),
(15459, 'Vardhra Y&B SLIPON BLACK CASUAL SHOES', 20, NULL, 18, 18, 23, 'Vardhra Y&B SLIPON BLACK CASUAL SHOES', 14.00, 8.00, 4.00, 0.40, 18, NULL, 19, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/1.jpg', 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-3%20black%20slipon/2.jpg', 'casual-vardhra-yb-slipon-black-casual-shoes-1985', 1, 18, '8', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17 15:36:21', '2022-06-17 15:36:58', 1, '<ul style=\"margin:0px 0px 0px 18px;color:#0f1111;margin-bottom:4px;\">\r\n\r\n\r\n<li style=\"list-style:circle; margin-top:9px;margin-bottom:2px;\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nOuter Material: Synthethic\r\n </span>\r\n\r\n </li>\r\n\r\n\r\n\r\n<li style=\"list-style:circle; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n \">\r\nInner Material: Synthethic\r\n </span>\r\n\r\n </li>\r\n\r\n\r\n\r\n<li style=\"list-style:circle; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;     font-size: 13px;\r\n \">\r\nSole: Eva\r\n </span>\r\n\r\n </li>\r\n\r\n<li style=\"list-style:circle; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nClosure: Lace Up\r\n </span>\r\n\r\n </li>\r\n\r\n<li style=\"list-style:disc; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nLight Weight and Durable\r\n\r\n </span>\r\n\r\n </li>\r\n\r\n<li style=\"list-style:disc; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nMADE IN  INDIA\r\n\r\n </span>\r\n\r\n </li>\r\n\r\n\r\n\r\n</ul>'),
(15461, 'Vardhra Y&B WHITE&GREY CASAUL SNEAKER', 20, NULL, 18, 18, 23, 'Vardhra Y&B WHITE&GREY CASAUL SNEAKER', 14.00, 8.00, 4.00, 0.40, 18, NULL, 19, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/1.jpg', 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-1%20white-20220612T071440Z-001/FPL-1%20white/2.jpg', 'casual-vardhra-yb-whitegrey-casaul-sneaker-2873', 1, 18, '8', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17 15:44:17', '2022-06-17 15:57:17', 1, '<ul style=\"margin:0px 0px 0px 18px;color:#0f1111;margin-bottom:4px;\">\r\n\r\n\r\n<li style=\"list-style:circle; margin-top:9px;margin-bottom:2px;\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nOuter Material: Synthethic\r\n </span>\r\n\r\n </li>\r\n\r\n\r\n\r\n<li style=\"list-style:circle; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n \">\r\nInner Material: Synthethic\r\n </span>\r\n\r\n </li>\r\n\r\n\r\n\r\n<li style=\"list-style:circle; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;     font-size: 13px;\r\n \">\r\nSole: Eva\r\n </span>\r\n\r\n </li>\r\n\r\n<li style=\"list-style:circle; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nClosure: Lace Up\r\n </span>\r\n\r\n </li>\r\n\r\n<li style=\"list-style:disc; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nLight Weight and Durable\r\n\r\n </span>\r\n\r\n </li>\r\n\r\n<li style=\"list-style:disc; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nMADE IN  INDIA\r\n\r\n </span>\r\n\r\n </li>\r\n\r\n\r\n\r\n</ul>'),
(15462, 'Vardhra Y&B BLACK SPEEDSTAR SNEAKER CASUAL', 20, NULL, 18, 18, 23, 'Vardhra Y&B BLACK SPEEDSTAR SNEAKER CASUAL', 14.00, 8.00, 4.00, 0.40, 18, NULL, 19, 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/1.jpg', 'https://vardhara.s3.ap-south-1.amazonaws.com/Men/Casual/drive-download-20220612T070830Z-001/FPL-2%20black/2.jpg', 'casual-vardhra-yb-black-speedstar-sneaker-casual-9028', 1, 18, '8', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17 15:55:59', '2022-06-17 15:57:29', 1, '<ul style=\"margin:0px 0px 0px 18px;color:#0f1111;margin-bottom:4px;\">\r\n\r\n\r\n<li style=\"list-style:circle; margin-top:9px;margin-bottom:2px;\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nOuter Material: Synthethic\r\n </span>\r\n\r\n </li>\r\n\r\n\r\n\r\n<li style=\"list-style:circle; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n \">\r\nInner Material: Synthethic\r\n </span>\r\n\r\n </li>\r\n\r\n\r\n\r\n<li style=\"list-style:circle; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;     font-size: 13px;\r\n \">\r\nSole: Eva\r\n </span>\r\n\r\n </li>\r\n\r\n<li style=\"list-style:circle; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nClosure: Lace Up\r\n </span>\r\n\r\n </li>\r\n\r\n<li style=\"list-style:disc; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nLight Weight and Durable\r\n\r\n </span>\r\n\r\n </li>\r\n\r\n<li style=\"list-style:disc; margin-top:3px;margin-bottom:3px\">     \r\n\r\n<span style=\" word-wrap:break-word;color:#0f1111;display:block;    font-size: 13px;\r\n\">\r\nMADE IN  INDIA\r\n\r\n </span>\r\n\r\n </li>\r\n\r\n\r\n\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `txn_reviews`
--

CREATE TABLE `txn_reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `comment` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` enum('1','2','3','4','5') COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `txn_users`
--

CREATE TABLE `txn_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `territory` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `address_id` bigint(20) UNSIGNED DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_purchase` timestamp NULL DEFAULT NULL,
  `last_purchase` timestamp NULL DEFAULT NULL,
  `gst` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_subcribed` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landmark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_rewards` bigint(20) DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promocode` char(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci,
  `sales_start_date` date DEFAULT NULL,
  `sales_end_date` date DEFAULT NULL,
  `total_sales` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `elite` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `txn_weights`
--

CREATE TABLE `txn_weights` (
  `id` int(10) UNSIGNED NOT NULL,
  `unit` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `txn_weights`
--

INSERT INTO `txn_weights` (`id`, `unit`, `status`, `created_at`, `updated_at`) VALUES
(5, '10', 1, '2022-04-22 17:37:08', '2022-04-22 17:37:08'),
(18, '1', 1, '2022-04-22 18:39:32', '2022-04-22 18:39:32');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `size_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `bulk_orders`
--
ALTER TABLE `bulk_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_offer_sliders`
--
ALTER TABLE `home_offer_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `map_color_sizes`
--
ALTER TABLE `map_color_sizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `map_color_sizes_product_id_foreign` (`product_id`),
  ADD KEY `map_color_sizes_color_id_foreign` (`color_id`),
  ADD KEY `map_color_sizes_size_id_foreign` (`size_id`);

--
-- Indexes for table `map_mst_offer_products`
--
ALTER TABLE `map_mst_offer_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `map_mst_offer_products_category_id_foreign` (`category_id`),
  ADD KEY `map_mst_offer_products_offer_product_id_foreign` (`offer_product_id`),
  ADD KEY `map_mst_offer_products_color_id_foreign` (`color_id`),
  ADD KEY `map_mst_offer_products_size_id_foreign` (`size_id`),
  ADD KEY `map_mst_offer_products_offer_id_foreign` (`offer_id`);

--
-- Indexes for table `map_offer_products`
--
ALTER TABLE `map_offer_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `map_offer_products_product_id_foreign` (`product_id`),
  ADD KEY `map_offer_products_map_offer_id_foreign` (`map_offer_id`),
  ADD KEY `map_offer_products_mst_offer_id_foreign` (`mst_offer_id`);

--
-- Indexes for table `map_product_mst_sizes`
--
ALTER TABLE `map_product_mst_sizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `map_product_mst_sizes_product_id_foreign` (`product_id`),
  ADD KEY `map_product_mst_sizes_size_id_foreign` (`size_id`);

--
-- Indexes for table `map_product_sections`
--
ALTER TABLE `map_product_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `map_product_sections_section_id_foreign` (`section_id`),
  ADD KEY `map_product_sections_product_id_foreign` (`product_id`);

--
-- Indexes for table `master_warranties`
--
ALTER TABLE `master_warranties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_colors`
--
ALTER TABLE `mst_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_offers`
--
ALTER TABLE `mst_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_sizes`
--
ALTER TABLE `mst_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_sections`
--
ALTER TABLE `ms_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `product_faqs`
--
ALTER TABLE `product_faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_faqs_product_id_foreign` (`product_id`);

--
-- Indexes for table `returntickets`
--
ALTER TABLE `returntickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shops_email_unique` (`email`);

--
-- Indexes for table `side_products`
--
ALTER TABLE `side_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `side_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staff_email_unique` (`email`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_order_id_foreign` (`order_id`);

--
-- Indexes for table `txn_brands`
--
ALTER TABLE `txn_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `txn_categories`
--
ALTER TABLE `txn_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `txn_conditions`
--
ALTER TABLE `txn_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `txn_contact_us`
--
ALTER TABLE `txn_contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `txn_custom_fields`
--
ALTER TABLE `txn_custom_fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `txn_custom_fields_product_id_foreign` (`product_id`);

--
-- Indexes for table `txn_images`
--
ALTER TABLE `txn_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `txn_images_product_id_foreign` (`product_id`),
  ADD KEY `txn_images_color_id_foreign` (`color_id`),
  ADD KEY `txn_images_size_id_foreign` (`size_id`);

--
-- Indexes for table `txn_keywords`
--
ALTER TABLE `txn_keywords`
  ADD PRIMARY KEY (`id`),
  ADD KEY `txn_keywords_product_id_foreign` (`product_id`);

--
-- Indexes for table `txn_master_gsts`
--
ALTER TABLE `txn_master_gsts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `txn_materials`
--
ALTER TABLE `txn_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `txn_orders`
--
ALTER TABLE `txn_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `txn_orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `txn_order_details`
--
ALTER TABLE `txn_order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `txn_order_details_product_id_foreign` (`product_id`),
  ADD KEY `txn_order_details_map_id_foreign` (`map_id`),
  ADD KEY `txn_order_details_order_id_foreign` (`order_id`),
  ADD KEY `txn_order_details_size_id_foreign` (`size_id`),
  ADD KEY `txn_order_details_color_id_foreign` (`color_id`);

--
-- Indexes for table `txn_products`
--
ALTER TABLE `txn_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `txn_products_warranty_id_foreign` (`warranty_id`),
  ADD KEY `txn_products_category_id_foreign` (`category_id`),
  ADD KEY `txn_products_brand_id_foreign` (`brand_id`),
  ADD KEY `txn_products_material_id_foreign` (`material_id`),
  ADD KEY `txn_products_weight_unit_foreign` (`weight_unit`),
  ADD KEY `txn_products_condition_id_foreign` (`condition_id`),
  ADD KEY `txn_products_gst_id_foreign` (`gst_id`);

--
-- Indexes for table `txn_reviews`
--
ALTER TABLE `txn_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `txn_reviews_user_id_foreign` (`user_id`),
  ADD KEY `txn_reviews_product_id_foreign` (`product_id`);

--
-- Indexes for table `txn_users`
--
ALTER TABLE `txn_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `txn_users_promocode_unique` (`promocode`),
  ADD KEY `txn_users_address_id_foreign` (`address_id`);

--
-- Indexes for table `txn_weights`
--
ALTER TABLE `txn_weights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`),
  ADD KEY `wishlists_product_id_foreign` (`product_id`),
  ADD KEY `wishlists_color_id_foreign` (`color_id`),
  ADD KEY `wishlists_size_id_foreign` (`size_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bulk_orders`
--
ALTER TABLE `bulk_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_offer_sliders`
--
ALTER TABLE `home_offer_sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `map_color_sizes`
--
ALTER TABLE `map_color_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15722;

--
-- AUTO_INCREMENT for table `map_mst_offer_products`
--
ALTER TABLE `map_mst_offer_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `map_offer_products`
--
ALTER TABLE `map_offer_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `map_product_mst_sizes`
--
ALTER TABLE `map_product_mst_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15668;

--
-- AUTO_INCREMENT for table `map_product_sections`
--
ALTER TABLE `map_product_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_warranties`
--
ALTER TABLE `master_warranties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `mst_colors`
--
ALTER TABLE `mst_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `mst_offers`
--
ALTER TABLE `mst_offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mst_sizes`
--
ALTER TABLE `mst_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `ms_sections`
--
ALTER TABLE `ms_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_faqs`
--
ALTER TABLE `product_faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `returntickets`
--
ALTER TABLE `returntickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `side_products`
--
ALTER TABLE `side_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `txn_brands`
--
ALTER TABLE `txn_brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `txn_categories`
--
ALTER TABLE `txn_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `txn_conditions`
--
ALTER TABLE `txn_conditions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `txn_contact_us`
--
ALTER TABLE `txn_contact_us`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1774;

--
-- AUTO_INCREMENT for table `txn_custom_fields`
--
ALTER TABLE `txn_custom_fields`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `txn_images`
--
ALTER TABLE `txn_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15038;

--
-- AUTO_INCREMENT for table `txn_keywords`
--
ALTER TABLE `txn_keywords`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15858;

--
-- AUTO_INCREMENT for table `txn_master_gsts`
--
ALTER TABLE `txn_master_gsts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `txn_materials`
--
ALTER TABLE `txn_materials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `txn_orders`
--
ALTER TABLE `txn_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `txn_order_details`
--
ALTER TABLE `txn_order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `txn_products`
--
ALTER TABLE `txn_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15463;

--
-- AUTO_INCREMENT for table `txn_reviews`
--
ALTER TABLE `txn_reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `txn_users`
--
ALTER TABLE `txn_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `txn_weights`
--
ALTER TABLE `txn_weights`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `txn_users` (`id`);

--
-- Constraints for table `map_color_sizes`
--
ALTER TABLE `map_color_sizes`
  ADD CONSTRAINT `map_color_sizes_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `mst_colors` (`id`),
  ADD CONSTRAINT `map_color_sizes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `txn_products` (`id`),
  ADD CONSTRAINT `map_color_sizes_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `mst_sizes` (`id`);

--
-- Constraints for table `map_mst_offer_products`
--
ALTER TABLE `map_mst_offer_products`
  ADD CONSTRAINT `map_mst_offer_products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `txn_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `map_mst_offer_products_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `mst_colors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `map_mst_offer_products_offer_id_foreign` FOREIGN KEY (`offer_id`) REFERENCES `mst_offers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `map_mst_offer_products_offer_product_id_foreign` FOREIGN KEY (`offer_product_id`) REFERENCES `txn_products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `map_mst_offer_products_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `mst_sizes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `map_offer_products`
--
ALTER TABLE `map_offer_products`
  ADD CONSTRAINT `map_offer_products_map_offer_id_foreign` FOREIGN KEY (`map_offer_id`) REFERENCES `map_mst_offer_products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `map_offer_products_mst_offer_id_foreign` FOREIGN KEY (`mst_offer_id`) REFERENCES `mst_offers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `map_offer_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `txn_products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `map_product_mst_sizes`
--
ALTER TABLE `map_product_mst_sizes`
  ADD CONSTRAINT `map_product_mst_sizes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `txn_products` (`id`),
  ADD CONSTRAINT `map_product_mst_sizes_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `mst_sizes` (`id`);

--
-- Constraints for table `map_product_sections`
--
ALTER TABLE `map_product_sections`
  ADD CONSTRAINT `map_product_sections_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `txn_products` (`id`),
  ADD CONSTRAINT `map_product_sections_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `ms_sections` (`id`);

--
-- Constraints for table `product_faqs`
--
ALTER TABLE `product_faqs`
  ADD CONSTRAINT `product_faqs_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `txn_products` (`id`);

--
-- Constraints for table `side_products`
--
ALTER TABLE `side_products`
  ADD CONSTRAINT `side_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `txn_products` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `txn_orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `txn_custom_fields`
--
ALTER TABLE `txn_custom_fields`
  ADD CONSTRAINT `txn_custom_fields_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `txn_products` (`id`);

--
-- Constraints for table `txn_images`
--
ALTER TABLE `txn_images`
  ADD CONSTRAINT `txn_images_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `mst_colors` (`id`),
  ADD CONSTRAINT `txn_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `txn_products` (`id`),
  ADD CONSTRAINT `txn_images_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `mst_sizes` (`id`);

--
-- Constraints for table `txn_keywords`
--
ALTER TABLE `txn_keywords`
  ADD CONSTRAINT `txn_keywords_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `txn_products` (`id`);

--
-- Constraints for table `txn_orders`
--
ALTER TABLE `txn_orders`
  ADD CONSTRAINT `txn_orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `txn_users` (`id`);

--
-- Constraints for table `txn_order_details`
--
ALTER TABLE `txn_order_details`
  ADD CONSTRAINT `txn_order_details_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `mst_colors` (`id`),
  ADD CONSTRAINT `txn_order_details_map_id_foreign` FOREIGN KEY (`map_id`) REFERENCES `map_color_sizes` (`id`),
  ADD CONSTRAINT `txn_order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `txn_orders` (`id`),
  ADD CONSTRAINT `txn_order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `txn_products` (`id`),
  ADD CONSTRAINT `txn_order_details_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `mst_sizes` (`id`);

--
-- Constraints for table `txn_products`
--
ALTER TABLE `txn_products`
  ADD CONSTRAINT `txn_products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `txn_brands` (`id`),
  ADD CONSTRAINT `txn_products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `txn_categories` (`id`),
  ADD CONSTRAINT `txn_products_condition_id_foreign` FOREIGN KEY (`condition_id`) REFERENCES `txn_conditions` (`id`),
  ADD CONSTRAINT `txn_products_gst_id_foreign` FOREIGN KEY (`gst_id`) REFERENCES `txn_master_gsts` (`id`),
  ADD CONSTRAINT `txn_products_material_id_foreign` FOREIGN KEY (`material_id`) REFERENCES `txn_materials` (`id`),
  ADD CONSTRAINT `txn_products_warranty_id_foreign` FOREIGN KEY (`warranty_id`) REFERENCES `master_warranties` (`id`),
  ADD CONSTRAINT `txn_products_weight_unit_foreign` FOREIGN KEY (`weight_unit`) REFERENCES `txn_weights` (`id`);

--
-- Constraints for table `txn_reviews`
--
ALTER TABLE `txn_reviews`
  ADD CONSTRAINT `txn_reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `txn_products` (`id`),
  ADD CONSTRAINT `txn_reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `txn_users` (`id`);

--
-- Constraints for table `txn_users`
--
ALTER TABLE `txn_users`
  ADD CONSTRAINT `txn_users_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`);

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `mst_colors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `txn_products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlists_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `mst_sizes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `txn_users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
