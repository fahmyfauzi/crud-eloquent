-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 12:10 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crud_eloquent`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `umur`, `alamat`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Umaya Setiawan', 23, 'Psr. Sutoyo No. 357, Mojokerto 59303, Kalsel', NULL, '2021-11-23 04:09:29', '2021-11-23 11:09:29'),
(2, 'Viktor Edison Sitorus', 30, 'Jln. Basmol Raya No. 253, Malang 53541, Bengkulu', NULL, NULL, NULL),
(3, 'Lala Cornelia Nasyiah', 24, 'Psr. Babadan No. 683, Bau-Bau 52475, Bengkulu', NULL, NULL, NULL),
(4, 'Lembah Mustofa Sinaga', 33, 'Ki. Batako No. 916, Gorontalo 50944, Kepri', NULL, NULL, NULL),
(5, 'Janet Yuniar', 20, 'Gg. Bagas Pati No. 617, Kendari 79964, Lampung', NULL, NULL, NULL),
(6, 'Vanya Permata M.M.', 38, 'Kpg. Peta No. 582, Palu 51431, Bengkulu', NULL, NULL, NULL),
(7, 'Teguh Prasasta M.TI.', 38, 'Psr. Banceng Pondok No. 684, Bengkulu 17232, Kalbar', NULL, NULL, NULL),
(8, 'Ajeng Puspita', 22, 'Kpg. Bata Putih No. 672, Bandar Lampung 71654, Bengkulu', NULL, NULL, NULL),
(9, 'Gambira Mustofa', 33, 'Dk. Bahagia  No. 800, Pasuruan 49025, Pabar', NULL, NULL, NULL),
(10, 'Jefri Suryono', 22, 'Jr. Pasirkoja No. 597, Surakarta 95811, Sumsel', NULL, NULL, NULL),
(11, 'Gatot Mustofa M.M.', 21, 'Dk. Wahidin Sudirohusodo No. 457, Surakarta 79826, Maluku', NULL, NULL, NULL),
(12, 'Eva Rahmawati', 32, 'Jr. Juanda No. 85, Pekalongan 73452, Maluku', NULL, NULL, NULL),
(13, 'Lala Laksita', 30, 'Ki. Kali No. 732, Bontang 57514, Kepri', NULL, NULL, NULL),
(14, 'Emas Pangeran Sihotang S.H.', 23, 'Jln. Cikapayang No. 567, Serang 86705, Bengkulu', NULL, NULL, NULL),
(15, 'Hamima Umi Kuswandari', 27, 'Kpg. Gremet No. 251, Pekanbaru 30451, NTT', NULL, NULL, NULL),
(16, 'Bakda Cahya Nashiruddin', 32, 'Ds. Suprapto No. 344, Tidore Kepulauan 20462, Sulsel', NULL, NULL, NULL),
(17, 'Vivi Wulandari', 37, 'Jln. Padma No. 176, Binjai 42210, Kepri', NULL, NULL, NULL),
(18, 'Samiah Victoria Fujiati', 35, 'Dk. Gegerkalong Hilir No. 118, Administrasi Jakarta Pusat 18456, Kalbar', NULL, NULL, NULL),
(19, 'Ajimin Latupono', 27, 'Ds. Sudiarto No. 837, Subulussalam 42105, Kalsel', NULL, NULL, NULL),
(20, 'Victoria Oktaviani S.I.Kom', 32, 'Ds. Bambu No. 467, Cimahi 45003, Jatim', NULL, NULL, NULL),
(21, 'Gangsa Tarihoran S.Pd', 21, 'Psr. Baan No. 720, Bitung 43584, Papua', NULL, NULL, NULL),
(22, 'Jail Eka Sirait S.IP', 29, 'Gg. Barat No. 841, Tasikmalaya 28066, Sulut', NULL, NULL, NULL),
(23, 'Tiara Prastuti S.Pd', 39, 'Ki. Babah No. 882, Sungai Penuh 89905, DIY', NULL, NULL, NULL),
(24, 'Wahyu Eluh Widodo S.Gz', 36, 'Jln. Kali No. 423, Tual 79359, Kaltim', NULL, NULL, NULL),
(25, 'Gabriella Haryanti', 38, 'Jr. Arifin No. 295, Magelang 51757, Kaltara', NULL, NULL, NULL),
(26, 'Zulaikha Nurdiyanti', 32, 'Ki. Arifin No. 987, Depok 77863, Kalteng', NULL, NULL, NULL),
(27, 'Rahmi Latika Utami', 24, 'Jln. Rajawali Timur No. 218, Palu 32017, Pabar', NULL, NULL, NULL),
(28, 'Ihsan Nardi Winarno M.M.', 20, 'Jln. Ters. Buah Batu No. 547, Bima 46936, NTT', NULL, NULL, NULL),
(29, 'Raden Kusumo S.Kom', 32, 'Psr. Basoka No. 33, Yogyakarta 55172, Maluku', NULL, NULL, NULL),
(30, 'Putri Yuniar', 24, 'Ki. Moch. Ramdan No. 453, Jambi 58734, Bengkulu', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
