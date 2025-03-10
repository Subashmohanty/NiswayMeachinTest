-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2025 at 06:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country_code` varchar(5) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `country_code`, `mobile`, `created_at`) VALUES
(10, 'Kökten Adal', '+90', '333 8859342', '2025-03-10 15:58:30'),
(11, 'Hamma Abdurrezak', '+90', '333 1563682', '2025-03-10 15:58:30'),
(12, 'Güleycan Şensal', '+90', '333 2557114', '2025-03-10 15:58:30'),
(13, 'Suadiye Ratip', '+90', '333 9163726', '2025-03-10 15:58:30'),
(14, 'Barik Nurşide', '+90', '333 3323749', '2025-03-10 15:58:30'),
(15, 'Hanifi Emineeylem', '+90', '333 2763531', '2025-03-10 15:58:30'),
(16, 'Nakiye Oğulkan', '+90', '333 6168924', '2025-03-10 15:58:30'),
(17, 'Hamsiye Cerit', '+90', '333 3544579', '2025-03-10 15:58:30'),
(18, 'Mahfi Hülâgü', '+90', '333 8937773', '2025-03-10 15:58:30'),
(19, 'Esmeray Nurihayat', '+90', '333 1688759', '2025-03-10 15:58:30'),
(20, 'Şennur Nazifer', '+90', '333 5326326', '2025-03-10 15:58:30'),
(21, 'Çetinok Seden', '+90', '333 1614182', '2025-03-10 15:58:30'),
(22, 'Vuslat Erimşah', '+90', '333 9551194', '2025-03-10 15:58:30'),
(23, 'Şeküre Ruhiye', '+90', '333 8792165', '2025-03-10 15:58:30'),
(24, 'İmran Ümmehan', '+90', '333 6971156', '2025-03-10 15:58:30'),
(25, 'Yavuzbay Hiçsönmez', '+90', '333 8839473', '2025-03-10 15:58:30'),
(26, 'Nevzete Abdulgafur', '+90', '333 1453851', '2025-03-10 15:58:30'),
(27, 'Aksüyek Sal', '+90', '333 2481491', '2025-03-10 15:58:30'),
(28, 'Ferhat Kılıçaslan', '+90', '333 6861354', '2025-03-10 15:58:30'),
(29, 'Fereç Tomurcuk', '+90', '333 4141534', '2025-03-10 15:58:30'),
(30, 'Balkız Alabegüm', '+90', '333 8826359', '2025-03-10 15:58:30'),
(31, 'Adulle Nesim', '+90', '333 5364556', '2025-03-10 15:58:30'),
(32, 'Sevdal Bilhan', '+90', '333 8634743', '2025-03-10 15:58:30'),
(33, 'Hariz Budunal', '+90', '333 1193335', '2025-03-10 15:58:30'),
(34, 'Alnıak Atız', '+90', '333 5676454', '2025-03-10 15:58:30'),
(35, 'Haşmet Taşgan', '+90', '333 6185991', '2025-03-10 15:58:30'),
(36, 'Salli Necife', '+90', '333 6692117', '2025-03-10 15:58:30'),
(37, 'Türeli Selçen', '+90', '333 5588146', '2025-03-10 15:58:30'),
(38, 'Boray Ümit', '+90', '333 7741455', '2025-03-10 15:58:30'),
(39, 'Aktemür Akbora', '+90', '333 4139141', '2025-03-10 15:58:30'),
(40, 'Yediveren Muhammetali', '+90', '333 8483755', '2025-03-10 15:58:30'),
(41, 'Baltaş Tonguç', '+90', '333 3724797', '2025-03-10 15:58:30'),
(42, 'Tepegöz Ferize', '+90', '333 9528318', '2025-03-10 15:58:30'),
(43, 'Selen Arısal', '+90', '333 9524786', '2025-03-10 15:58:30'),
(44, 'Abdulcabbar Mahizar', '+90', '333 6782359', '2025-03-10 15:58:30'),
(45, 'İyem Emre', '+90', '333 8238835', '2025-03-10 15:58:30'),
(46, 'Muazzam Lâmia', '+90', '333 1348678', '2025-03-10 15:58:30'),
(47, 'İlten Eripek', '+90', '333 3758172', '2025-03-10 15:58:30'),
(48, 'Zerrin Resul', '+90', '333 9276424', '2025-03-10 15:58:30'),
(49, 'İlalan Telmize', '+90', '333 3563723', '2025-03-10 15:58:30'),
(50, 'Hamise Sertan', '+90', '333 8263265', '2025-03-10 15:58:30'),
(51, 'Zubeyde Berk', '+90', '333 7281496', '2025-03-10 15:58:30'),
(52, 'Feda Balsarı', '+90', '333 4969618', '2025-03-10 15:58:30'),
(53, 'Müsemme Civanşir', '+90', '333 2556491', '2025-03-10 15:58:30'),
(54, 'Aydınyol Fitnet', '+90', '333 7783478', '2025-03-10 15:58:30'),
(55, 'Çoğa Bigüm', '+90', '333 4133666', '2025-03-10 15:58:30'),
(56, 'Şehrinaz Raşide', '+90', '333 2677248', '2025-03-10 15:58:30'),
(57, 'Naif Rukhiya', '+90', '333 8252766', '2025-03-10 15:58:30'),
(58, 'Azat Nilden', '+90', '333 9324656', '2025-03-10 15:58:30'),
(59, 'Gamze Korday', '+90', '333 9442367', '2025-03-10 15:58:30'),
(60, 'Test11', '1', '1234567890', '2025-03-10 16:27:00'),
(62, 'Test1', '', '134567888', '2025-03-10 16:53:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
