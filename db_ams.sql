-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 08:09 AM
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
-- Database: `db_ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `id` int(11) NOT NULL,
  `company_name` varchar(300) NOT NULL,
  `category` varchar(300) NOT NULL,
  `accessory_name` varchar(300) NOT NULL,
  `manufacturer` varchar(300) NOT NULL,
  `model_no` varchar(300) NOT NULL,
  `status` varchar(300) NOT NULL DEFAULT 'Brand New',
  `supplier` varchar(300) NOT NULL,
  `location` varchar(300) NOT NULL,
  `purchase_date` date NOT NULL,
  `purchase_cost` decimal(20,2) NOT NULL,
  `order_no` int(11) NOT NULL,
  `min_quantity` int(11) NOT NULL,
  `file` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `company_name`, `category`, `accessory_name`, `manufacturer`, `model_no`, `status`, `supplier`, `location`, `purchase_date`, `purchase_cost`, `order_no`, `min_quantity`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Company 2', 'Furniture', 'Mohagony Culch', 'Delida Pty', 'Timber', 'pending', 'Supplier 2', 'Location 2', '2021-07-14', '4578.95', 233, 2, '20210722075602.jpg', '2021-07-22 04:56:02', '2021-07-22 04:56:02');

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` int(11) NOT NULL,
  `company_name` varchar(300) NOT NULL,
  `asset_tag` varchar(300) NOT NULL,
  `asset_name` varchar(300) NOT NULL,
  `serial_no` varchar(300) NOT NULL,
  `model` varchar(300) NOT NULL,
  `status` varchar(300) NOT NULL DEFAULT 'Brand New',
  `supplier` varchar(300) NOT NULL,
  `location` varchar(300) NOT NULL,
  `purchase_date` date NOT NULL,
  `purchase_cost` decimal(20,2) NOT NULL,
  `order_no` int(11) NOT NULL,
  `warranty` int(11) NOT NULL,
  `file` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `company_name`, `asset_tag`, `asset_name`, `serial_no`, `model`, `status`, `supplier`, `location`, `purchase_date`, `purchase_cost`, `order_no`, `warranty`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Company 1', 'ghtr34', 'Keyboard', '99BX-UIY7-YH77-9IUY', 'Model 1', 'Status 1', 'Supplier 2', 'Location 1', '2021-07-16', '345.55', 2, 12, 'ghtr3420210721190626.jpg', '2021-07-21 16:06:26', '2021-07-21 16:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `asset_requests`
--

CREATE TABLE `asset_requests` (
  `id` int(11) NOT NULL,
  `company_name` varchar(300) NOT NULL,
  `asset_name` varchar(300) NOT NULL,
  `serial_no` varchar(300) NOT NULL,
  `manager_first_name` varchar(300) NOT NULL,
  `status` varchar(300) NOT NULL DEFAULT 'Brand New',
  `manager_last_name` varchar(300) NOT NULL,
  `manager_email` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asset_requests`
--

INSERT INTO `asset_requests` (`id`, `company_name`, `asset_name`, `serial_no`, `manager_first_name`, `status`, `manager_last_name`, `manager_email`, `created_at`, `updated_at`) VALUES
(1, 'Company 1', 'Keyboard', '99BX-UIY7-YH77-9IUY', 'Garenosi Motlalepuo', 'denied', 'John', 'gmotlalepuo@gmail.com', '2021-07-29 06:01:50', '2021-07-28 17:09:43'),
(2, 'Company 2', 'Keyboard', '99BX-UIY7-YHPP-9IUY', 'Garenosi', 'approved', 'John', 'gmotlalepuo@gmail.com', '2021-07-29 06:02:32', '2021-07-28 17:09:43');

-- --------------------------------------------------------

--
-- Table structure for table `components`
--

CREATE TABLE `components` (
  `id` int(11) NOT NULL,
  `company_name` varchar(300) NOT NULL,
  `category` varchar(300) NOT NULL,
  `component_name` varchar(300) NOT NULL,
  `manufacturer` varchar(300) NOT NULL,
  `model_no` varchar(300) NOT NULL,
  `status` varchar(300) NOT NULL DEFAULT 'Brand New',
  `item_no` varchar(300) NOT NULL,
  `location` varchar(300) NOT NULL,
  `purchase_date` date NOT NULL,
  `purchase_cost` decimal(20,2) NOT NULL,
  `order_no` int(11) NOT NULL,
  `min_quantity` int(11) NOT NULL,
  `file` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `components`
--

INSERT INTO `components` (`id`, `company_name`, `category`, `component_name`, `manufacturer`, `model_no`, `status`, `item_no`, `location`, `purchase_date`, `purchase_cost`, `order_no`, `min_quantity`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Company 2', 'Office Machinery', 'Hp Mouse', 'Delida Pty', 'HP21223', 'pending', '544322', 'Location 3', '2021-07-09', '122.95', 2133, 2, '20210722102115.jpg', '2021-07-22 07:21:15', '2021-07-22 07:21:15');

-- --------------------------------------------------------

--
-- Table structure for table `consumables`
--

CREATE TABLE `consumables` (
  `id` int(11) NOT NULL,
  `company_name` varchar(300) NOT NULL,
  `category` varchar(300) NOT NULL,
  `consumable_name` varchar(300) NOT NULL,
  `manufacturer` varchar(300) NOT NULL,
  `model_no` varchar(300) NOT NULL,
  `status` varchar(300) NOT NULL DEFAULT 'Brand New',
  `item_no` varchar(300) NOT NULL,
  `location` varchar(300) NOT NULL,
  `purchase_date` date NOT NULL,
  `purchase_cost` decimal(20,2) NOT NULL,
  `order_no` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `min_quantity` int(11) NOT NULL,
  `file` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumables`
--

INSERT INTO `consumables` (`id`, `company_name`, `category`, `consumable_name`, `manufacturer`, `model_no`, `status`, `item_no`, `location`, `purchase_date`, `purchase_cost`, `order_no`, `quantity`, `min_quantity`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Company 1', 'Clothing', 'Office Uniform', 'Delida Pty', 'hit9yt', 'pending', '5443', 'Location 3', '2021-07-15', '3578.75', 211, 6, 2, '20210722090940.jpg', '2021-07-25 16:09:42', '2021-07-22 06:09:40');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `company_name` varchar(300) NOT NULL,
  `manager` varchar(300) NOT NULL,
  `dept_name` varchar(300) NOT NULL,
  `location` varchar(300) NOT NULL,
  `file` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `company_name`, `manager`, `dept_name`, `location`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Company 1', 'John Snow', 'Procurement and supplies', 'Gaborone Private Hospital', '20210722060138.jpg', '2021-07-22 03:01:38', '2021-07-22 03:01:38'),
(2, 'Company 2', 'Karabo Pheto', 'Human Resources', 'Jwaneng', '20210722061236.jpg', '2021-07-22 03:12:36', '2021-07-22 03:12:36');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL,
  `message` varchar(7000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Garenosi Motlalepuo', 'gmotlalepuo@gmail.com', 75432223, 'Tried zipping a 10MB file but it refused to send.', '2021-04-17 05:36:01', '2021-04-17 05:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `passports`
--

CREATE TABLE `passports` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `omang` int(11) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'pending',
  `finger_print` varchar(300) NOT NULL,
  `passport_photo` varchar(300) NOT NULL,
  `omang_copy` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `gender` varchar(100) NOT NULL,
  `residential_address` varchar(100) NOT NULL,
  `place_of_birth` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `birth_certificate_copy` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passports`
--

INSERT INTO `passports` (`id`, `name`, `email`, `omang`, `status`, `finger_print`, `passport_photo`, `omang_copy`, `created_at`, `updated_at`, `gender`, `residential_address`, `place_of_birth`, `date_of_birth`, `birth_certificate_copy`) VALUES
(7, 'Tshepo Papitso', 'tshepo@gmail.com', 54322162, 'ready for collection', 'tshepo20210414014622.pdf', 'tshepo20210414014622.pdf', 'tshepo20210414014622.pdf', '2021-04-22 05:39:07', '2021-04-13 22:46:22', 'male', 'Nkoyaphiri', 'Palapye', '1996-03-04', 'tshepo20210414014622.pdf'),
(8, 'Pako Thero', 'pako@gmail.com', 54322162, 'pending', 'tshepo20210414014622.pdf', 'tshepo20210414014622.pdf', 'tshepo20210414014622.pdf', '2021-04-13 22:46:22', '2021-04-13 22:46:22', 'female', 'Nkoyaphiri', 'Mahalapye', '1996-03-04', 'tshepo20210414014622.pdf'),
(9, 'Katlo Nato', 'nato@gmail.com', 43211543, 'pending', 'Tshepo Papitso20210417062040.pdf', 'Tshepo Papitso20210417062040.pdf', 'Tshepo Papitso20210417062040.pdf', '2021-04-17 06:46:03', '2021-04-17 03:20:40', 'female', 'Masetlheng', 'Tlokweng', '1995-07-08', 'Tshepo Papitso20210417062040.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('tambona975@gmail.com', '$2y$10$q8kWCF.9wBY.68zhUn.HB.6aqEkVXrkmVrVzM2YYp34nV5XVZQk3W', '2019-12-17 09:51:50'),
('tumi@botsogo.co.bw', '$2y$10$/fTZRe5iEHKDuLpk38afHOG3rwahhZRdorErV6N7qDqXtbWewiYuy', '2020-03-01 22:18:20');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `company_name` varchar(300) NOT NULL,
  `manager` varchar(300) NOT NULL,
  `dept_name` varchar(300) NOT NULL,
  `location` varchar(300) NOT NULL,
  `file` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `company_name`, `manager`, `dept_name`, `location`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Company 1', 'John Snow', 'Procurement and supplies', 'Gaborone Private Hospital', '20210722060138.jpg', '2021-07-22 03:01:38', '2021-07-22 03:01:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) NOT NULL,
  `f_name` varchar(191) DEFAULT NULL,
  `l_name` varchar(300) NOT NULL,
  `company_name` varchar(300) NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(191) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_role` varchar(200) DEFAULT 'customer',
  `file` varchar(300) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `f_name`, `l_name`, `company_name`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `user_role`, `file`, `gender`) VALUES
(84, 'gmotlalepuo@gmail.com', 'Garenosi Motlalepuo', 'John', 'Company 1', '2021-07-21 19:44:37', '$2y$10$h0GtEO6kBJCw0p9JOvM6xe1ezCoc5JiQ.qqYth40a56GDzn2.ljGW', NULL, '2021-04-13 22:19:38', '2021-04-13 22:19:38', 'staff', NULL, 'male'),
(1, 'info@admin.co.bw', 'Admin', 'CEDA', 'Citizen Entrepreneur Development Agency', '2021-07-21 19:44:37', '$2y$10$OB1h.iOVpiKGIGxjo7GvNulM4lhnNFB5/DRAeuJt9tXCEHyrdmEQi', NULL, NULL, NULL, 'admin', NULL, 'N/A'),
(88, 'maikutlo98@gmail.com', 'Pearl', 'Maikutlo', 'Company 1', '2021-07-25 16:28:08', '$2y$10$ej3bML0i6LjQL4g5QmfimeOVr3/67lbH/QxcEL30BZShnVFtG0s3i', NULL, '2021-07-21 16:53:27', '2021-07-21 16:53:27', 'employee', 'Pearl20210721195327.jpg', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset_requests`
--
ALTER TABLE `asset_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `components`
--
ALTER TABLE `components`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consumables`
--
ALTER TABLE `consumables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passports`
--
ALTER TABLE `passports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`,`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `asset_requests`
--
ALTER TABLE `asset_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `components`
--
ALTER TABLE `components`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `consumables`
--
ALTER TABLE `consumables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `passports`
--
ALTER TABLE `passports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
