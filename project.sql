-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 06:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `material` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `furniture`
--

INSERT INTO `furniture` (`id`, `name`, `price`, `material`, `color`, `category`, `detail`, `dimension`, `brand`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Vintage Leather Chesterfield Sofa', 130000.00, 'Green', 'Brown', 'living-room', 'A couch, also known as a sofa, futon, chesterfield, or settee/sofa or couch is a piece of furniture for seating two or three people in the form of a bench.', '203*82*71cm', 'no brand', '1.jfif', '2020-01-28 09:20:22', '2020-01-28 09:20:22'),
(3, 'Dining Chair', 4000.00, 'wood and steel', 'Brown', 'dining-room', '(CHERRY-G) Northern Europe Metal Beetle Chair Modern Simple Dining Chair Lounge Chair Computer Chair Creativity Cafe Chair', 'W50*D64*H82.5cm', 'Chinese', '4.jfif', '2020-01-28 09:24:31', '2020-01-28 09:24:31'),
(4, 'Bed', 70000.00, 'wood', 'dark brown', 'bed-room', 'A bed is a piece of furniture which is used as a place to sleep or relax. Most modern beds consist of a soft, cushioned mattress on a bed frame, the mattress resting either on a solid base, often wood slats, or a sprung base.', '1.3CBM', 'no brand', 'bed.jfif', '2020-01-28 09:27:34', '2020-01-28 09:27:34'),
(5, 'Kitchen cupboard', 50000.00, 'wood', 'white', 'kitchen-room', 'The term cupboard was originally used to describe an open-shelved side table for displaying dishware, more specifically plates, cups and saucers.', 'CE, ISO9001, SGS', 'chinese brand', 'kitchen.jpg', '2020-01-28 09:30:49', '2020-01-28 09:30:49'),
(6, 'Sweet Baby Strawberry Furniture/Kids Furniture/Sofa with Pillow', 40000.00, 'soft cotton, wood', 'pink', 'children-room', 'A bed is a piece of furniture which is used as a place to sleep or relax. Most modern beds consist of a soft, cushioned mattress on a bed frame, the mattress resting either on a solid base, often wood slats', '23*43', 'no brand', 'baby_bed.jpeg', '2020-01-28 09:33:32', '2020-01-28 09:33:32'),
(7, 'Deban Sofa Set', 11499.00, 'ceramic', 'wood', 'living-room', '4 inch Form with 50 density\r\n1 inch wood with fixed Kusan\r\nFree Home delivery kathmandu Valley \r\n5 years warranty', '4 inch Form with 50 density', 'no brand', 'sofa.jpg', '2020-01-28 22:22:06', '2020-01-28 22:22:06'),
(8, 'Intex Headboard Raised Airbed with Fiber Technology Air Mattress with Built', 11000.00, 'soft matt', 'white', 'bed-room', 'Shelf box\r\nBuilt in Electric Pump\r\nPillow topped surface\r\nWeight Capacity is 273 Kg\r\nDuffel bag included for storage\r\nInflated size: 1.52m x 2.29m x 79cm', 'W50*D64*H82.5cm', 'no brand', 'bed.jfif', '2020-01-28 22:28:49', '2020-01-28 22:28:49'),
(9, 'Dining table', 1200.00, 'Seesu wood', 'shiny Black', 'dining-room', 'durable Dining table', '1000 * 1000', 'Sunrise', 'dining.jpg', '2021-04-25 22:26:30', '2021-04-25 22:26:30'),
(10, 'Cupboard', 500000.00, 'wood', 'white', 'kitchen-room', 'Good and durable Cupboard of Sunrise Company', 'CE, ISO9001, SGS', 'Sunrise', 'kitchen.jpg', '2021-04-25 22:30:40', '2021-04-25 22:30:40'),
(11, 'Baby Bed', 20000.00, 'plank', 'white', 'children-room', 'Durable Baby bed', '23*43', 'Sunrise', 'baby_bed.jpeg', '2021-04-25 22:32:00', '2021-04-25 22:32:00'),
(12, 'Double bed', 500000.00, 'wood', 'white', 'living-room', 'durable', '1.3CBM', 'Sunrise', 'bed.jfif', '2021-04-25 22:34:38', '2021-04-25 22:34:38');

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
(3, '2020_01_19_081747_create_welcomes_table', 1),
(4, '2020_01_28_075026_create_orders_table', 1),
(5, '2020_01_28_110026_create_new_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `new_orders`
--

CREATE TABLE `new_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `new_orders`
--

INSERT INTO `new_orders` (`id`, `user_id`, `name`, `username`, `address`, `contact`, `material`, `color`, `category`, `detail`, `dimension`, `created_at`, `updated_at`) VALUES
(2, 2, 'Double bed', 'ujwal.kashichhwa', 'Bhaktapur', '9813650817', 'wood', 'dark brown', 'bed-room', 'It should have low height with comfortable matt', '203*82*71cm', '2020-01-28 23:37:55', '2020-01-28 23:37:55'),
(3, 2, 'chair', 'ujwal.kashichhwa', 'bhaktapur', '98136508187', 'wood', 'dark brown', 'living-room', 'i require sustainable cjhair', '203*82*71cm', '2020-01-29 00:37:52', '2020-01-29 00:37:52');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `cart` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `user_id`, `cart`, `address`, `name`) VALUES
(1, '2020-01-28 07:10:59', '2020-01-28 07:10:59', 2, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:1;a:3:{s:3:\"qty\";i:3;s:5:\"price\";d:3600;s:4:\"item\";O:11:\"App\\Welcome\":27:{s:8:\"\0*\0table\";s:9:\"furniture\";s:10:\"primaryKey\";s:2:\"id\";s:9:\"timestamp\";b:1;s:13:\"\0*\0connection\";s:5:\"mysql\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:12:{s:2:\"id\";i:1;s:4:\"name\";s:5:\"Chair\";s:5:\"price\";d:1200;s:8:\"material\";s:4:\"wood\";s:5:\"color\";s:5:\"Brown\";s:8:\"category\";s:11:\"living-room\";s:6:\"detail\";s:17:\"This is new chair\";s:9:\"dimension\";s:20:\"23\'\' left 24\'\' right\";s:5:\"brand\";s:8:\"no brand\";s:5:\"image\";s:10:\"chair.jfif\";s:10:\"created_at\";s:19:\"2020-01-28 12:51:50\";s:10:\"updated_at\";s:19:\"2020-01-28 12:51:50\";}s:11:\"\0*\0original\";a:12:{s:2:\"id\";i:1;s:4:\"name\";s:5:\"Chair\";s:5:\"price\";d:1200;s:8:\"material\";s:4:\"wood\";s:5:\"color\";s:5:\"Brown\";s:8:\"category\";s:11:\"living-room\";s:6:\"detail\";s:17:\"This is new chair\";s:9:\"dimension\";s:20:\"23\'\' left 24\'\' right\";s:5:\"brand\";s:8:\"no brand\";s:5:\"image\";s:10:\"chair.jfif\";s:10:\"created_at\";s:19:\"2020-01-28 12:51:50\";s:10:\"updated_at\";s:19:\"2020-01-28 12:51:50\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:3;s:10:\"totalPrice\";d:3600;}', 'bhaktpur', 'Ujwal Kashichhwa'),
(2, '2020-01-28 07:44:45', '2020-01-28 07:44:45', 2, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:1;a:3:{s:3:\"qty\";i:1;s:5:\"price\";d:1200;s:4:\"item\";O:11:\"App\\Welcome\":27:{s:8:\"\0*\0table\";s:9:\"furniture\";s:10:\"primaryKey\";s:2:\"id\";s:9:\"timestamp\";b:1;s:13:\"\0*\0connection\";s:5:\"mysql\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:12:{s:2:\"id\";i:1;s:4:\"name\";s:5:\"Chair\";s:5:\"price\";d:1200;s:8:\"material\";s:4:\"wood\";s:5:\"color\";s:5:\"Brown\";s:8:\"category\";s:11:\"living-room\";s:6:\"detail\";s:17:\"This is new chair\";s:9:\"dimension\";s:20:\"23\'\' left 24\'\' right\";s:5:\"brand\";s:8:\"no brand\";s:5:\"image\";s:10:\"chair.jfif\";s:10:\"created_at\";s:19:\"2020-01-28 12:51:50\";s:10:\"updated_at\";s:19:\"2020-01-28 12:51:50\";}s:11:\"\0*\0original\";a:12:{s:2:\"id\";i:1;s:4:\"name\";s:5:\"Chair\";s:5:\"price\";d:1200;s:8:\"material\";s:4:\"wood\";s:5:\"color\";s:5:\"Brown\";s:8:\"category\";s:11:\"living-room\";s:6:\"detail\";s:17:\"This is new chair\";s:9:\"dimension\";s:20:\"23\'\' left 24\'\' right\";s:5:\"brand\";s:8:\"no brand\";s:5:\"image\";s:10:\"chair.jfif\";s:10:\"created_at\";s:19:\"2020-01-28 12:51:50\";s:10:\"updated_at\";s:19:\"2020-01-28 12:51:50\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:1200;}', 'bhaktapur', 'Ujwal Kashichhwa'),
(3, '2020-01-29 00:36:09', '2020-01-29 00:36:09', 2, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:2;a:3:{s:3:\"qty\";i:1;s:5:\"price\";d:130000;s:4:\"item\";O:11:\"App\\Welcome\":27:{s:8:\"\0*\0table\";s:9:\"furniture\";s:10:\"primaryKey\";s:2:\"id\";s:9:\"timestamp\";b:1;s:13:\"\0*\0connection\";s:5:\"mysql\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:12:{s:2:\"id\";i:2;s:4:\"name\";s:33:\"Vintage Leather Chesterfield Sofa\";s:5:\"price\";d:130000;s:8:\"material\";s:5:\"Green\";s:5:\"color\";s:5:\"Brown\";s:8:\"category\";s:11:\"living-room\";s:6:\"detail\";s:155:\"A couch, also known as a sofa, futon, chesterfield, or settee/sofa or couch is a piece of furniture for seating two or three people in the form of a bench.\";s:9:\"dimension\";s:11:\"203*82*71cm\";s:5:\"brand\";s:8:\"no brand\";s:5:\"image\";s:6:\"1.jfif\";s:10:\"created_at\";s:19:\"2020-01-28 15:05:22\";s:10:\"updated_at\";s:19:\"2020-01-28 15:05:22\";}s:11:\"\0*\0original\";a:12:{s:2:\"id\";i:2;s:4:\"name\";s:33:\"Vintage Leather Chesterfield Sofa\";s:5:\"price\";d:130000;s:8:\"material\";s:5:\"Green\";s:5:\"color\";s:5:\"Brown\";s:8:\"category\";s:11:\"living-room\";s:6:\"detail\";s:155:\"A couch, also known as a sofa, futon, chesterfield, or settee/sofa or couch is a piece of furniture for seating two or three people in the form of a bench.\";s:9:\"dimension\";s:11:\"203*82*71cm\";s:5:\"brand\";s:8:\"no brand\";s:5:\"image\";s:6:\"1.jfif\";s:10:\"created_at\";s:19:\"2020-01-28 15:05:22\";s:10:\"updated_at\";s:19:\"2020-01-28 15:05:22\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:130000;}', 'bhaktapur', 'Ujwal Kashichhwa'),
(4, '2021-02-09 02:27:45', '2021-02-09 02:27:45', 3, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:2;a:3:{s:3:\"qty\";i:1;s:5:\"price\";d:130000;s:4:\"item\";O:11:\"App\\Welcome\":27:{s:8:\"\0*\0table\";s:9:\"furniture\";s:10:\"primaryKey\";s:2:\"id\";s:9:\"timestamp\";b:1;s:13:\"\0*\0connection\";s:5:\"mysql\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:12:{s:2:\"id\";i:2;s:4:\"name\";s:33:\"Vintage Leather Chesterfield Sofa\";s:5:\"price\";d:130000;s:8:\"material\";s:5:\"Green\";s:5:\"color\";s:5:\"Brown\";s:8:\"category\";s:11:\"living-room\";s:6:\"detail\";s:155:\"A couch, also known as a sofa, futon, chesterfield, or settee/sofa or couch is a piece of furniture for seating two or three people in the form of a bench.\";s:9:\"dimension\";s:11:\"203*82*71cm\";s:5:\"brand\";s:8:\"no brand\";s:5:\"image\";s:6:\"1.jfif\";s:10:\"created_at\";s:19:\"2020-01-28 15:05:22\";s:10:\"updated_at\";s:19:\"2020-01-28 15:05:22\";}s:11:\"\0*\0original\";a:12:{s:2:\"id\";i:2;s:4:\"name\";s:33:\"Vintage Leather Chesterfield Sofa\";s:5:\"price\";d:130000;s:8:\"material\";s:5:\"Green\";s:5:\"color\";s:5:\"Brown\";s:8:\"category\";s:11:\"living-room\";s:6:\"detail\";s:155:\"A couch, also known as a sofa, futon, chesterfield, or settee/sofa or couch is a piece of furniture for seating two or three people in the form of a bench.\";s:9:\"dimension\";s:11:\"203*82*71cm\";s:5:\"brand\";s:8:\"no brand\";s:5:\"image\";s:6:\"1.jfif\";s:10:\"created_at\";s:19:\"2020-01-28 15:05:22\";s:10:\"updated_at\";s:19:\"2020-01-28 15:05:22\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:130000;}', 'bhaktapur', 'Ujwal Kashichhwa'),
(5, '2021-04-25 07:05:22', '2021-04-25 07:05:22', 5, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:2;a:3:{s:3:\"qty\";i:1;s:5:\"price\";d:130000;s:4:\"item\";O:11:\"App\\Welcome\":27:{s:8:\"\0*\0table\";s:9:\"furniture\";s:10:\"primaryKey\";s:2:\"id\";s:9:\"timestamp\";b:1;s:13:\"\0*\0connection\";s:5:\"mysql\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:12:{s:2:\"id\";i:2;s:4:\"name\";s:33:\"Vintage Leather Chesterfield Sofa\";s:5:\"price\";d:130000;s:8:\"material\";s:5:\"Green\";s:5:\"color\";s:5:\"Brown\";s:8:\"category\";s:11:\"living-room\";s:6:\"detail\";s:155:\"A couch, also known as a sofa, futon, chesterfield, or settee/sofa or couch is a piece of furniture for seating two or three people in the form of a bench.\";s:9:\"dimension\";s:11:\"203*82*71cm\";s:5:\"brand\";s:8:\"no brand\";s:5:\"image\";s:6:\"1.jfif\";s:10:\"created_at\";s:19:\"2020-01-28 15:05:22\";s:10:\"updated_at\";s:19:\"2020-01-28 15:05:22\";}s:11:\"\0*\0original\";a:12:{s:2:\"id\";i:2;s:4:\"name\";s:33:\"Vintage Leather Chesterfield Sofa\";s:5:\"price\";d:130000;s:8:\"material\";s:5:\"Green\";s:5:\"color\";s:5:\"Brown\";s:8:\"category\";s:11:\"living-room\";s:6:\"detail\";s:155:\"A couch, also known as a sofa, futon, chesterfield, or settee/sofa or couch is a piece of furniture for seating two or three people in the form of a bench.\";s:9:\"dimension\";s:11:\"203*82*71cm\";s:5:\"brand\";s:8:\"no brand\";s:5:\"image\";s:6:\"1.jfif\";s:10:\"created_at\";s:19:\"2020-01-28 15:05:22\";s:10:\"updated_at\";s:19:\"2020-01-28 15:05:22\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:130000;}', 'bhaktapur', 'ujwal kashichhwa');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$XGxj1VcPAu4BOH34zIm2/.0yUjJg/gto4m/e/hFNX/nnMc6y/1vZK', '2021-02-09 02:25:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'ujwal', 'ujwal@gmail.com', 'user', NULL, '$2y$10$G/8ljTtC/kNgXfaLs/xTkefRO8XRtxL1ZSwQLNTC7iNtbVIYtVV.e', NULL, '2021-02-09 02:26:41', '2021-04-25 06:56:34'),
(4, 'ujwal', 'ujwal.kashichhwa@gmail.com', 'admin', NULL, '$2y$10$SvRd0fOZwQ2XudKmaIFAu.5IMmquQSL1Rlv2pV4VmezpRkVEwX0qO', NULL, '2021-04-25 06:35:51', '2021-04-25 06:35:51'),
(5, 'Shreejan', 'shreejan@gmail.com', 'user', NULL, '$2y$10$CN038Vlaam9GXpmKDpCifu4sNhuGnz3P8lqSt9YL4KTZIwdAGuN/C', NULL, '2021-04-25 06:57:18', '2021-04-25 06:57:18'),
(21, 'nikesh', 'nikesh@gmail.com', 'user', NULL, '$2y$10$kXfTq3HXcOhX3ZxlL3dJV.Qjscea4UGxtJLkHoK1p2y4dCLC8uRJO', NULL, '2021-04-25 22:39:12', '2021-04-25 22:39:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_orders`
--
ALTER TABLE `new_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `furniture`
--
ALTER TABLE `furniture`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `new_orders`
--
ALTER TABLE `new_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
