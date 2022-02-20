-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2022 at 06:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(5) UNSIGNED NOT NULL,
  `filename_original` varchar(255) DEFAULT NULL,
  `filename_encrypted` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `filename_original`, `filename_encrypted`, `created_at`) VALUES
(1, 'bnn.png', '20220124/1643051126_55f039be86da032aa665.png', '2022-01-25 02:05:26'),
(2, 'polri.png', '20220124/1643082392_5896fc200362fb0de51a.png', '2022-01-25 10:46:32'),
(3, 'irwasum_polri.png', '20220128/1643429651_9fda2f773230d47c7070.png', '2022-01-29 11:14:11'),
(4, 'korpolairud.png', '20220128/1643429672_ada6819cb07eeaf6d456.png', '2022-01-29 11:14:32'),
(5, 'sdm_polri.png', '20220128/1643429676_76257802b7cb7657cef8.png', '2022-01-29 11:14:36'),
(6, 'unswagati.png', '20220128/1643429681_ba3e8a37aba351150c96.png', '2022-01-29 11:14:41'),
(7, 'polantas.png', '20220128/1643429688_e939fc64170f709da622.png', '2022-01-29 11:14:48'),
(8, 'logo.png', '20220204/1643977379_f230873e721ba45667f4.png', '2022-02-04 19:22:59');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(2, 'MUHAMAD AHMADIN', 'charkubalita@gmail.com', 'Beli web', 'beli web pake laravel kak', '2022-01-25 12:14:43'),
(3, 'Inggit Marghita', 'inggitmarg@gmail.com', 'Berapa ya web + hosting?', 'kalo beli web sama hostingnya 3bulan brp kak?', '2022-01-25 12:16:01'),
(6, 'Gordon', 'gordon@gmail.com', 'Aplikasi', 'Pesan aplikasi android dan web brp?', '2022-01-29 11:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-12-19-061202', 'App\\Database\\Migrations\\User', 'default', 'App', 1643021872, 1),
(2, '2021-12-19-075422', 'App\\Database\\Migrations\\Tim', 'default', 'App', 1643021872, 1),
(3, '2021-12-19-082109', 'App\\Database\\Migrations\\Portfolio', 'default', 'App', 1643021872, 1),
(4, '2022-01-09-065712', 'App\\Database\\Migrations\\Client', 'default', 'App', 1643021873, 1),
(5, '2022-01-25-045817', 'App\\Database\\Migrations\\ContactForm', 'default', 'App', 1643086812, 2);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(5) UNSIGNED NOT NULL,
  `app_name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `category` varchar(129) DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `project_date` date DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `app_name`, `slug`, `category`, `client_name`, `description`, `project_date`, `thumbnail`, `created_at`) VALUES
(1, 'E-Audit BNN', 'e-audit-bnn', 'web', 'Badan Narkotika Nasional', 'Aplikasi Elektronik Audit Internal BNN Berbasis Web Dibuat menggunakan Codeigniter 4', '2022-01-24', '20220124/1643054139_b1bd6b99f74947237bc5.png', '2022-01-25 02:55:39'),
(2, 'Dumas Presisi', 'dumas-presisi', 'web', 'Mabes Polri', 'Aplikasi Pengaduan Masyarakat Terintegrasi merupakan bentuk penerapan pengawasan yang disampaikan oleh masyarakat, instansi pemerintah, atau pihak lain kepada Polri berupa sumbangan pikiran, saran, gagasan, atau keluhan/pengaduan yang bersifat membangun.  Melalui aplikasi Dumas Presisi juga masyarakat bisa mengetahui sejauh mana perkembangan penanganan kasus yang dilaporkan. \"Aplikasi Dumas Presisi dapat diunduh di Play Store atau Google Play Store di smartphone masing-masing. Sekarang masyarakat lebih mudah menyampaikan laporan secara online', '2022-01-24', '20220124/1643054558_033ed4107122639edac9.png', '2022-01-25 03:02:38'),
(3, 'Ruang Dosen', 'ruang-dosen', 'app', 'Publik', 'Ruang Dosen adalah Aplikasi belajar mengajar untuk dunia pendidikan Indonesia persembangan dari anak bangsa Bengkel Web Indonesia', '2022-01-24', '20220124/1643054741_37eda397c4df9ff377ec.png', '2022-01-25 03:05:41'),
(6, 'Duta Prokes Polda Sumbar', 'duta-prokes-polda-sumbar', 'web', 'Polda Sumbar', 'Duta Prokes Polda Sumbar adalah aplikasi geographical information system yang memiliki modul manajemen lokasi, data pasien covid, hingga titik panas dan titik-titik objek vital lainnya.', '2022-01-28', '20220128/1643429489_c49de0b9b1b2eccb1268.png', '2022-01-29 11:11:29'),
(7, 'PNPSI Hotel', 'pnpsi-hotel', 'web', 'Padepokan Pencak Silat Indonesia', 'PNPSI Hotel Booking adalah website dan aplikasi pemesanan hotel .', '2022-01-28', '20220128/1643429586_86b00afaef340f664c79.png', '2022-01-29 11:13:06'),
(8, 'Ditpolairud ASIK', 'ditpolairud-asik', 'app', 'Polda Aceh', 'Aplikasi POLAIRUD ASIK ini adalah sebuah aplikasi dan sistem informasi yang disuguhkan untuk masyarakat Provinsi Aceh pada khususnya dan umumnya Masyarakat Indonesia dan Dunia. Dalam Aplikasi POLAIRUD ASIK ini berisi konten diantaranya adalah ; 1. Profile\r\n2. Informasi dan Berita\r\n3. Informasi penting untuk mengetahui cuaca, posisi ikan dan lokasi kapal di perarian Aceh\r\n4. Sebagai media pengaduan masyarakat yang ingin disampaikan ke Polda Aceh\r\n5. Informasi Sosial media Polairud\r\n6. Koleksi Video Polairud Aceh\r\n7. Koleksi Galeri Foto Polairud Aceh', '2022-01-28', '20220128/1643429633_22f658720a1d9f0eb9a4.jpg', '2022-01-29 11:13:53');

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE `tim` (
  `id` int(5) UNSIGNED NOT NULL,
  `nama` varchar(129) DEFAULT NULL,
  `jabatan` varchar(129) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tim`
--

INSERT INTO `tim` (`id`, `nama`, `jabatan`, `twitter`, `facebook`, `instagram`, `linkedin`, `photo`, `created_at`) VALUES
(1, 'Yono Maulana', 'CEO & Founder', 'twitter.com', 'facebook.com', '', 'linkedind.com', '20220124/1643086042_5a9bc6dfbe84a4dd07c9.png', '2022-01-25 11:47:22'),
(2, 'Muhamad Ahmadin', 'Web Developer', 'https://twitter.com/MuhamadAhmadin', 'https://facebook.com/MuhamadAhmadin', 'https://instagram.com/ahmadinations', 'https://linkedin.com/in/muhamadahmadin', '20220124/1643086130_8b3088a299857dd753d0.png', '2022-01-25 11:48:50'),
(3, 'Aghits Nidallah', 'Web Developer', 'twitte.com', '', '', '', '20220124/1643086162_d0aa814dc4bb10020812.png', '2022-01-25 11:49:22'),
(4, 'Darsono', 'Web Developer', '', '', '', '', '20220124/1643086172_6a4779d3d499cb9ecae1.png', '2022-01-25 11:49:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'Muhamad Ahmadin', 'ahmadinations@gmail.com', '$2y$10$3O62RGHcOfL2JU3mrpvUpeg9S/Wt0Xee18fYf6xAk6uphuF18h4mS', '2022-01-25 02:02:48'),
(2, 'Ahmadin', 'admin', '$2y$10$ymErLMZZjW3YypsQ.WEQiOf8ojchAGGihA.wGBsWYRX9ZXSAYceRO', '2022-01-29 11:07:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
