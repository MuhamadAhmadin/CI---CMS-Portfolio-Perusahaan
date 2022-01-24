-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2022 at 08:43 AM
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
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(5) UNSIGNED NOT NULL,
  `kode_dokter` varchar(25) DEFAULT NULL,
  `nama` varchar(129) DEFAULT NULL,
  `gender` char(1) DEFAULT 'L',
  `alamat` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `kode_dokter`, `nama`, `gender`, `alamat`, `created_at`) VALUES
(1, 'DOK001', 'Dra. Inggit Marghita', 'P', 'Majalengka', '2021-12-19 15:13:37'),
(2, 'DOK002', 'Dr. Muh. Ahmadin', 'L', 'Cirebon', '2021-12-19 15:14:12');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(5) UNSIGNED NOT NULL,
  `filename_original` varchar(255) DEFAULT NULL,
  `filename_encrypted` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `filename_original`, `filename_encrypted`, `created_at`) VALUES
(1, 'entry stopped.png', '20220113/1642093767_e73dd6bc8a17b0b2f40c.png', '2022-01-14 00:09:27'),
(2, '3.jpg', '20220123/1643001514_f2ba98576ef28919ecdc.jpg', '2022-01-24 12:18:34');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id` int(5) UNSIGNED NOT NULL,
  `no_kamar` varchar(25) DEFAULT NULL,
  `lantai` varchar(25) DEFAULT NULL,
  `max_orang` int(11) DEFAULT 1,
  `kelas` varchar(25) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id`, `no_kamar`, `lantai`, `max_orang`, `kelas`, `created_at`) VALUES
(2, 'KMR002', '2', 3, 'VVIP', '2021-12-19 14:32:29'),
(3, 'KMR03', '3', 5, 'VIP', '2021-12-19 14:34:46'),
(5, 'Voluptate sint dolo', 'Iure sequi aliquam d', 0, 'VIP', '2021-12-19 15:00:42');

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
(3, '2021-12-19-061202', 'App\\Database\\Migrations\\User', 'default', 'App', 1639899106, 1),
(4, '2021-12-19-064259', 'App\\Database\\Migrations\\Kamar', 'default', 'App', 1639899106, 1),
(5, '2021-12-19-075422', 'App\\Database\\Migrations\\Dokter', 'default', 'App', 1639901155, 2),
(6, '2021-12-19-082109', 'App\\Database\\Migrations\\Pasien', 'default', 'App', 1639902349, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(5) UNSIGNED NOT NULL,
  `no_pasien` varchar(129) DEFAULT NULL,
  `nik` varchar(25) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `gender` char(2) DEFAULT 'L',
  `alamat` text DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `keluhan` varchar(255) DEFAULT NULL,
  `tanggal_datang` date DEFAULT NULL,
  `harga_jasa` int(11) NOT NULL DEFAULT 0,
  `dokter_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `no_pasien`, `nik`, `nama`, `gender`, `alamat`, `telepon`, `keluhan`, `tanggal_datang`, `harga_jasa`, `dokter_id`, `created_at`) VALUES
(1, 'PST001', '3210128178123', 'Muhamad Ahmadin', 'L', 'Plumbon, Cirebon', '089661030388', 'Mengalami k3ecapean ngoding', '2021-12-19', 100000, 1, '2021-12-19 15:57:45'),
(2, 'PST002', '312812912234', 'Guinvere', 'P', 'Land of Dawn', '081912723', 'Butuh siraman cinta', '2021-12-19', 200000, 2, '2021-12-19 15:58:36');

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
(1, 'Muhamad Ahmadin', 'ahmadinations@gmail.com', '$2y$10$9J6fXNUu6h2KPqd5LbQ0se2jVdw3w87znduq5vDSDV2SKwnthp0Ti', '2021-12-19 16:31:47'),
(2, 'Inggit Marghita', 'inggitmarghita11@gmail.com', '$2y$10$Ujb0cXA7AKn9fERCj5Xf/.NfK3yE6MztFFXmrG3exdRcWps6I7dkm', '2021-12-19 16:33:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
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
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
