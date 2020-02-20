-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 20, 2020 at 04:14 AM
-- Server version: 10.1.44-MariaDB-0+deb9u1
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_paste`
--

-- --------------------------------------------------------

--
-- Table structure for table `code_options`
--

CREATE TABLE `code_options` (
  `id` int(11) NOT NULL,
  `option` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `code_options`
--

INSERT INTO `code_options` (`id`, `option`, `name`, `created_at`, `updated_at`) VALUES
(1, 'css', 'CSS', '2020-02-20 02:55:52', '2020-02-20 02:55:52'),
(2, 'html', 'HTML', '2020-02-20 02:56:09', '2020-02-20 02:56:09'),
(3, 'js', 'JavaScript', '2020-02-20 02:56:27', '2020-02-20 02:56:27');

-- --------------------------------------------------------

--
-- Table structure for table `paste_data`
--

CREATE TABLE `paste_data` (
  `id` int(11) NOT NULL,
  `uniqe_id` varchar(255) NOT NULL,
  `user_addr` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `paste` longtext NOT NULL,
  `public` enum('yes','no') DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `debug` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`debug`) VALUES
(0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `code_options`
--
ALTER TABLE `code_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paste_data`
--
ALTER TABLE `paste_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `code_options`
--
ALTER TABLE `code_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paste_data`
--
ALTER TABLE `paste_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
