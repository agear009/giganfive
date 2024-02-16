-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Feb 2024 pada 15.01
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `001-ex`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_products`
--

CREATE TABLE `category_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `countries`
--

INSERT INTO `countries` (`id`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Afganistan', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(2, 'south Africa', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(3, 'Albania', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(4, 'Aljazair', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(5, 'Andorra', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(6, 'Angola', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(7, 'Antigua and Barbuda', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(8, 'Armenia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(9, 'Australia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(10, 'Austria', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(11, 'Azerbaijan', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(12, 'Bahama', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(13, 'Bahrain', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(14, 'Bangladesh', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(15, 'Barbados', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(16, 'Belanda', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(17, 'Belarusia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(18, 'Belgia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(19, 'Belize', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(20, 'Benin', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(21, 'Bhutan', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(22, 'Bolivia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(23, 'Bosnia and Herzegovina', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(24, 'Botswana', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(25, 'Brasil', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(26, 'Britania Raya', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(27, 'Bulgaria', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(28, 'Burkina Faso ', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(29, 'Chad', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(30, 'China', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(31, 'Cile', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(32, 'Denmark', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(33, 'Djibouti', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(34, 'Dominika', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(35, 'Republik Dominika', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(36, 'Ekuador', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(37, 'El Salvador', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(38, 'Eritrea', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(39, 'Estonia ', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(40, 'Eswatini', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(41, 'Etiopia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(42, 'Fiji', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(43, 'Finlandia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(44, 'Gabon', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(45, 'Gambia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(46, 'Georgia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(47, 'Ghana ', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(48, 'Grenada', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(49, 'Guinea', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(50, 'Guinea-Bissau', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(51, 'Guinea Khatulistiwa', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(52, 'Guyana', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(53, 'Haiti', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(54, 'Honduras', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(55, 'Hungaria', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(56, 'Islandia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(57, 'India', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(58, 'Indonesia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(59, 'Iran', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(60, 'Irak', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(61, 'Irlandia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(62, 'Italia ', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(63, 'Jamaika', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(64, 'Jerman', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(65, 'Kazakhstan', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(66, 'Kamerun', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(67, 'Kanada', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(68, 'Kenya', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(69, 'Marshall Islands', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(70, 'Solomon Islands', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(71, 'Kiribati', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(72, 'Kolombia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(73, 'Komoro', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(74, 'North Korea', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(75, 'North Korea', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(76, 'Kosovo', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(77, 'Kosta Rika', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(78, 'Kuwait', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(79, 'Kirgizstan', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(80, 'Kroasia ', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(81, 'Kuba', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(82, 'Latvia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(83, 'Lesotho', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(84, 'Liberia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(85, 'Libya', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(86, 'Liechtenstein', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(87, 'Lituania', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(88, 'Luksemburg', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(89, 'Madagaskar', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(90, 'North Macedonia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(91, 'Malawi', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(92, 'Malaysia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(93, 'Maladewa', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(94, 'Mali', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(95, 'Malta', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(96, 'Mauritania', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(97, 'Mauritius', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(98, 'Meksiko', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(99, 'Mesir ', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(100, 'Mikronesia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(101, 'Moldova', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(102, 'Monako', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(103, 'Mongolia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(104, 'Montenegro', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(105, 'Mozambik ', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(106, 'Nauru', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(107, 'Nikaragua', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(108, 'Niger', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(109, 'Nigeria', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(110, 'Oman', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(111, 'Pakistan', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(112, 'Palau', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(113, 'Panama', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(114, 'Pantai Gading', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(115, 'Paraguay', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(116, 'Peru', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(117, 'Polandia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(118, 'Portugal', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(119, 'Central African Republic', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(120, 'Republik Ceko', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(121, 'Republik Demokratik Kongo', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(122, 'Republik Kongo ', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(123, 'Rumania', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(124, 'Rusia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(125, 'Rwanda', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(126, 'Saint Kitts and Nevi', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(127, 'Saint Lucia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(128, 'Saint Vincent', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(129, 'Samoa', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(130, 'San Marino', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(131, 'Sao Tome and Principe', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(132, 'Senegal', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(133, 'Serbia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(134, 'Seychelles', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(135, 'Sierra Leone', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(136, 'Siprus', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(137, 'Slovakia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(138, 'Somalia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(139, 'Spanyol', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(140, 'Sri Lanka', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(141, 'Suriname', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(142, 'Swedia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(143, 'Suriah', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(144, 'Tajikistan', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(145, 'Tanjung Verde', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(146, 'Tanzania', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(147, 'Togo', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(148, 'Tonga', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(149, 'Trinidad and Tobago', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(150, 'Tunisia', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(151, 'Turkmenistan', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(152, 'Tuvalu', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(153, 'Uganda', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(154, 'Ukraina', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(155, 'Uni Emirat Arab', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(156, 'Uruguay', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(157, 'Uzbekistan', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(158, 'Vanuatu', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(159, 'Vatikan', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(160, 'Venezuela', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(161, 'Yaman', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(162, 'Yunani', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(163, 'Yordania ', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(164, 'Zambia ', '2024-02-13 18:53:39', '2024-02-13 18:53:39'),
(165, 'Zimbabwe', '2024-02-13 18:53:39', '2024-02-13 18:53:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_product` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `address` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_07_071023_create_posts_table', 1),
(6, '2024_01_10_121104_create_members_table', 1),
(7, '2024_01_11_082843_create_countries_table', 1),
(8, '2024_01_11_100444_create_categories_table', 1),
(9, '2024_01_11_130838_create_category_products_table', 1),
(10, '2024_01_12_032948_create_abouts_table', 1),
(11, '2024_01_12_113729_create_products_table', 1),
(12, '2024_01_17_005517_create_shopping_carts_table', 1),
(13, '2024_01_17_011624_create_transactions_table', 1),
(14, '2024_01_17_012451_create_reports_table', 1),
(15, '2024_01_17_041825_create_shippingcosts_table', 1),
(16, '2024_02_12_222503_create_images_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `stock` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_member` varchar(255) NOT NULL,
  `id_product` varchar(255) NOT NULL,
  `id_transaction` varchar(255) NOT NULL,
  `transactionmonth` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `shippingcosts`
--

CREATE TABLE `shippingcosts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_country` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `shopping_carts`
--

CREATE TABLE `shopping_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_product` varchar(255) NOT NULL,
  `id_category` varchar(255) NOT NULL,
  `id_member` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_member` varchar(255) NOT NULL,
  `id_product` varchar(255) NOT NULL,
  `allprice` varchar(255) NOT NULL,
  `shippingcost` varchar(255) NOT NULL,
  `totalcost` varchar(255) NOT NULL,
  `transactionmonth` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `category_products`
--
ALTER TABLE `category_products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `shippingcosts`
--
ALTER TABLE `shippingcosts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `shopping_carts`
--
ALTER TABLE `shopping_carts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `category_products`
--
ALTER TABLE `category_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `shippingcosts`
--
ALTER TABLE `shippingcosts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `shopping_carts`
--
ALTER TABLE `shopping_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
