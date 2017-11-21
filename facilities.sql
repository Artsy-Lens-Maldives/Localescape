-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2017 at 04:02 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tt`
--

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Shower', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Bathtub', '2017-11-22 08:00:00', '2017-11-22 08:00:00'),
(3, 'Free toiletries', '2017-11-22 08:00:00', '2017-11-23 08:00:00'),
(4, 'Toilet', '2017-11-23 08:00:00', '2017-11-30 08:00:00'),
(5, 'Hairdryer', '2017-11-22 08:00:00', '2017-11-29 08:00:00'),
(6, 'Bathroom', '2017-11-16 08:00:00', '2017-11-23 08:00:00'),
(7, 'Satellite channels', '2017-11-22 08:00:00', '2017-11-23 08:00:00'),
(8, 'Flat-screen TV', '2017-11-15 08:00:00', '2017-11-30 08:00:00'),
(9, 'TV', '2017-11-22 08:00:00', '2017-11-29 08:00:00'),
(10, 'Desk', '2017-11-22 08:00:00', '2017-11-29 08:00:00'),
(11, 'Sofa', '2017-11-24 08:00:00', '2017-11-23 08:00:00'),
(12, 'Sitting area', '2017-11-08 08:00:00', '2017-11-30 08:00:00'),
(13, 'Dining area', '2017-11-22 08:00:00', '2017-11-29 08:00:00'),
(14, 'Room Service', '2017-11-14 08:00:00', '2017-11-22 08:00:00'),
(15, 'Packed Lunches', '2017-11-15 08:00:00', '2017-11-30 08:00:00'),
(16, 'Car Rental', '2017-11-22 08:00:00', '2017-11-29 08:00:00'),
(17, 'Shuttle Service', '2017-11-30 08:00:00', '2017-11-30 08:00:00'),
(18, 'Airport Shuttle', '2017-11-22 08:00:00', '2017-11-22 08:00:00'),
(19, '24-Hour Front Desk', '2017-11-22 08:00:00', '2017-11-22 08:00:00'),
(20, 'Tour Desk', '2017-11-22 08:00:00', '2017-11-30 08:00:00'),
(21, 'Ticket Service', '2017-11-14 08:00:00', '2017-11-23 08:00:00'),
(22, 'Baggage Storage', '2017-11-22 08:00:00', '2017-11-29 08:00:00'),
(23, 'Concierge Service', '2017-11-22 08:00:00', '2017-11-22 08:00:00'),
(24, 'Laundry', '2017-11-22 08:00:00', '2017-11-22 08:00:00'),
(25, 'Dry Cleaning', '2017-11-22 08:00:00', '2017-11-22 08:00:00'),
(26, 'Safe', '2017-11-15 08:00:00', '2017-11-23 08:00:00'),
(27, 'Non-smoking Rooms', '2017-11-23 08:00:00', '2017-11-30 08:00:00'),
(28, 'Family Rooms', '2017-11-22 08:00:00', '2017-11-29 08:00:00'),
(29, 'Elevator', '2017-11-22 08:00:00', '2017-11-23 08:00:00'),
(30, 'Airport Shuttle', '2017-11-08 08:00:00', '2017-11-23 08:00:00'),
(31, '24-Hour Front Desk', '2017-11-23 08:00:00', '2017-11-30 08:00:00'),
(32, 'Soundproof Rooms', '2017-11-30 08:00:00', '2017-11-30 08:00:00'),
(33, 'Heating', '2017-11-22 08:00:00', '2017-11-30 08:00:00'),
(34, 'Iron ', '2017-11-29 08:00:00', '2017-11-30 08:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
