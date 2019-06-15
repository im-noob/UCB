-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 15, 2019 at 11:43 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ucb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_tab`
--

CREATE TABLE `contact_us_tab` (
  `contact_us_id` int(255) UNSIGNED NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_us_tab`
--

INSERT INTO `contact_us_tab` (`contact_us_id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'aarav kumar', 'aaravonly4you@gmail.com', 'server closed without my information', 'open it', '2019-06-05 13:19:06', '2019-06-05 13:19:06'),
(2, 'aarav kumar', 'aaravonly4you@gmail.com', 'server closed without my information', 'qwe', '2019-06-05 13:27:06', '2019-06-05 13:27:06'),
(3, 'AMRITESH KUMAR', 'aaravonly4you@gmail.com', 'qwer', 'asdf', '2019-06-05 13:30:13', '2019-06-05 13:30:13');

-- --------------------------------------------------------

--
-- Table structure for table `galary_pic_tab`
--

CREATE TABLE `galary_pic_tab` (
  `galary_pic_id` int(255) UNSIGNED NOT NULL,
  `pic` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `short_desc` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `galary_pic_tab`
--

INSERT INTO `galary_pic_tab` (`galary_pic_id`, `pic`, `title`, `short_desc`, `created_at`, `updated_at`) VALUES
(1, 'img/portfolio/app1.jpeg', 'Event 1', 'Great Event', '2019-06-04 19:38:05', '2019-06-04 19:38:05'),
(2, 'img/portfolio/app2.jpeg', 'Event 2', 'Great Event', '2019-06-04 19:38:05', '2019-06-04 19:38:05'),
(3, 'img/portfolio/app3.jpeg', 'Event 3', 'Great Event', '2019-06-04 19:38:05', '2019-06-04 19:38:05'),
(4, 'img/portfolio/app4.jpeg', 'Event 4', 'Great Event', '2019-06-04 19:38:05', '2019-06-04 19:38:05'),
(5, 'img/portfolio/app5.jpeg', 'Event 5', 'Great Event', '2019-06-04 19:38:05', '2019-06-04 19:38:05'),
(6, 'img/portfolio/app6.jpeg', 'Event 6', 'Great Event', '2019-06-04 19:38:05', '2019-06-04 19:38:05'),
(7, 'img/portfolio/app7.jpeg', 'Event 7', 'Great Event', '2019-06-04 19:38:05', '2019-06-04 19:38:05'),
(8, 'img/portfolio/app8.jpeg', 'Event 8', 'Great Event', '2019-06-04 19:38:05', '2019-06-04 19:38:05'),
(9, 'img/portfolio/app9.jpeg', 'Event 9', 'Great Event', '2019-06-04 19:38:06', '2019-06-04 19:38:06'),
(10, 'img/portfolio/app10.jpeg', 'Event 10', 'Great Event', '2019-06-04 19:38:06', '2019-06-04 19:38:06'),
(11, 'img/portfolio/app11.jpeg', 'Event 11', 'Great Event', '2019-06-04 19:38:06', '2019-06-04 19:38:06'),
(12, 'img/portfolio/app12.jpeg', 'Event 12', 'Great Event', '2019-06-04 19:38:06', '2019-06-04 19:38:06');

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notice_tab`
--

CREATE TABLE `notice_tab` (
  `notice_id` int(255) UNSIGNED NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `post` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `post_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notice_tab`
--

INSERT INTO `notice_tab` (`notice_id`, `title`, `post`, `post_type`, `created_at`, `updated_at`) VALUES
(1, 'Top 3 student List Announced of BCA 2017-19', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n\r\n  <ol>\r\n    <li>Rahul Raj</li>\r\n    <li>Suman Kumar</li>\r\n    <li>Amit Kumar</li>\r\n  </ol>  \r\n\r\n</body>\r\n</html>\r\n', '3', '2019-06-04 20:06:05', '2019-06-05 13:38:10'),
(2, 'Result Announced BCA 2017-19', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n\r\n<p>All the student who achived Good Marks Best Wishes From Our End</p>\r\n<br>\r\n\r\n<img style=\"    margin-bottom: 20px;\"  src=\"https://english.cdn.zeenews.com/sites/default/files/2019/05/28/790813-keralafile.jpg\" alt=\"Result\" >\r\n<br>\r\n<a style=\"\r\n    margin-top: 15px;\r\n\" href=\"http://webscte.org/pdf16/rank_pharmacy.pdf\"> Click Here To Download PDF</a>\r\n</body>\r\n</html>\r\n', '3', '2019-06-04 20:06:05', '2019-06-06 18:52:56'),
(3, 'Notice For BCA 2017-19', '<!DOCTYPE html>\r\n<html>\r\n<body>\r\n\r\n\r\n<a href=\"http://webscte.org/pdf17/Notice-Result-Publication-Diploma-Engineering-and-Technology(2+4).pdf\"> Click Here To Download Notice </a>\r\n</body>\r\n</html>\r\n', '4', '2019-06-04 20:06:06', '2019-06-05 13:38:38');

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
('aaravonly4you@gmail.com', '$2y$10$UpL0JJO6rym3RNTpwVEQ3e7sRe6RboqKeoyLdV03GQ6zrVQejIwa6', '2019-06-04 12:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `slider_pic_tab`
--

CREATE TABLE `slider_pic_tab` (
  `slider_pic_id` int(255) UNSIGNED NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subtitle` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pic` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `short_desc` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider_pic_tab`
--

INSERT INTO `slider_pic_tab` (`slider_pic_id`, `title`, `subtitle`, `pic`, `short_desc`, `created_at`, `updated_at`) VALUES
(1, 'UNIVERSITY CENTER OF BIO-INFORMATICS', 'SUB DIV (BIO-INFORMATICS)', 'img/intro-carousel/1.jpeg', 'TILKAMANJHI BHAGALPUR UNIVERSITY', '2019-06-04 19:30:17', '2019-06-04 19:30:17'),
(2, 'UNIVERSITY CENTER OF BIO-INFORMATICS', 'SUB DIV (BIO-INFORMATICS)', 'img/intro-carousel/2.jpeg', 'TILKAMANJHI BHAGALPUR UNIVERSITY', '2019-06-04 19:30:17', '2019-06-04 19:30:17'),
(3, 'UNIVERSITY CENTER OF BIO-INFORMATICS', 'SUB DIV (BIO-INFORMATICS)', 'img/intro-carousel/3.jpeg', 'TILKAMANJHI BHAGALPUR UNIVERSITY', '2019-06-04 19:30:17', '2019-06-04 19:30:17'),
(4, 'UNIVERSITY CENTER OF BIO-INFORMATICS', 'SUB DIV (BIO-INFORMATICS)', 'img/intro-carousel/4.jpeg', 'TILKAMANJHI BHAGALPUR UNIVERSITY', '2019-06-04 19:30:17', '2019-06-04 19:30:17'),
(5, 'UNIVERSITY CENTER OF BIO-INFORMATICS', 'SUB DIV (BIO-INFORMATICS)', 'img/intro-carousel/5.jpeg', 'TILKAMANJHI BHAGALPUR UNIVERSITY', '2019-06-04 19:30:17', '2019-06-04 19:30:17');

-- --------------------------------------------------------

--
-- Table structure for table `team_tab`
--

CREATE TABLE `team_tab` (
  `team_id` int(255) UNSIGNED NOT NULL,
  `pic` varchar(5000) COLLATE utf8_unicode_ci DEFAULT 'img/noimage.png',
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `degination` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `team_tab`
--

INSERT INTO `team_tab` (`team_id`, `pic`, `name`, `degination`, `created_at`, `updated_at`) VALUES
(1, 'img/noimage.png', 'Rakesh Ranjan', 'Coordinator', '2019-06-04 19:51:40', '2019-06-04 19:51:40'),
(2, 'img/noimage.png', 'Pranav Kumar', 'Lecturer', '2019-06-04 19:51:40', '2019-06-04 19:51:40'),
(3, 'img/noimage.png', 'Subhash Chandra Roy', 'Lecturer', '2019-06-04 19:51:40', '2019-06-04 19:51:40');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials_tab`
--

CREATE TABLE `testimonials_tab` (
  `testimonials_id` int(255) UNSIGNED NOT NULL,
  `pic` varchar(5000) COLLATE utf8_unicode_ci DEFAULT 'img/noimage.png',
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `degination` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `testimonials_tab`
--

INSERT INTO `testimonials_tab` (`testimonials_id`, `pic`, `name`, `degination`, `message`, `created_at`, `updated_at`) VALUES
(1, 'img/noimage.png', 'Amritesh Kumar', 'Student', 'Great College', '2019-06-04 19:48:25', '2019-06-04 19:48:25'),
(2, 'img/noimage.png', 'Nishant Kumar', 'Student', 'Nice College', '2019-06-04 19:48:25', '2019-06-04 19:48:25'),
(3, 'img/noimage.png', 'Birendra Kumar', 'Student', 'Beautiful College', '2019-06-04 19:48:25', '2019-06-04 19:48:25'),
(4, 'img/noimage.png', 'Neha Kumari', 'Student', 'NIce Teacher', '2019-06-04 19:48:25', '2019-06-04 19:48:25'),
(5, 'img/noimage.png', 'Sashi Raj', 'Student', 'Great Campus', '2019-06-04 19:48:25', '2019-06-04 19:48:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'aarav kumar', 'aaravonly4you@gmail.com', NULL, '$2y$10$ywhhTRdrqDj5A9agb3maaevv6ZQvK1ixwhsTcoI0lxcH/QWS5/iR2', '0PemhinbE64DjvlglcpjJY4dCH4RW8D3X6v9s1sXfFjnZy7Kkn5dHRK11ulU', '2019-06-04 12:24:21', '2019-06-04 12:24:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us_tab`
--
ALTER TABLE `contact_us_tab`
  ADD PRIMARY KEY (`contact_us_id`);

--
-- Indexes for table `galary_pic_tab`
--
ALTER TABLE `galary_pic_tab`
  ADD PRIMARY KEY (`galary_pic_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_tab`
--
ALTER TABLE `notice_tab`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `slider_pic_tab`
--
ALTER TABLE `slider_pic_tab`
  ADD PRIMARY KEY (`slider_pic_id`);

--
-- Indexes for table `team_tab`
--
ALTER TABLE `team_tab`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `testimonials_tab`
--
ALTER TABLE `testimonials_tab`
  ADD PRIMARY KEY (`testimonials_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us_tab`
--
ALTER TABLE `contact_us_tab`
  MODIFY `contact_us_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galary_pic_tab`
--
ALTER TABLE `galary_pic_tab`
  MODIFY `galary_pic_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notice_tab`
--
ALTER TABLE `notice_tab`
  MODIFY `notice_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider_pic_tab`
--
ALTER TABLE `slider_pic_tab`
  MODIFY `slider_pic_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `team_tab`
--
ALTER TABLE `team_tab`
  MODIFY `team_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials_tab`
--
ALTER TABLE `testimonials_tab`
  MODIFY `testimonials_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
