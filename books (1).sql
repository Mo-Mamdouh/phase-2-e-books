-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 09:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phase`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagePath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `created_at`, `updated_at`, `imagePath`, `title`, `author`, `description`, `price`) VALUES
(1, '2020-06-11 03:06:23', '2020-06-11 03:06:23', 'https://m.media-amazon.com/images/I/51g0LdfhtvL.jpg', 'Harry Potter and the goblet of fire', 'J.K. Rowlin', 'There will be three tasks, spaced throughout the school year, and they will test the champions in many different ways...their magical prowess - their daring - their powers of deduction - and, of course, their ability to cope with danger.', 20.00),
(2, '2020-06-11 03:06:24', '2020-06-11 03:06:24', 'https://images-na.ssl-images-amazon.com/images/I/81E9oNSK3bL.jpg', 'Fire & Blood: 300 Years Before A Game of Thrones', 'George R. R. Martin', 'With all the fire and fury fans have come to expect from internationally best-selling author George R. R. Martin, this is the first volume of the definitive two-part history of the Targaryens in Westeros.', 16.00),
(3, '2020-06-11 03:06:24', '2020-06-11 03:06:24', 'https://images-na.ssl-images-amazon.com/images/I/51MlxNgCsyL._SX308_BO1,204,203,200_.jpg', 'And Then There Were None ', 'Agatha christie', '\"Ten . . .\"\n                    Ten strangers are lured to an isolated island mansion off the Devon coast by a mysterious \"U. N. Owen.\"\n                    \n                    \"Nine . . .\"\n                    At dinner a recorded message accuses each of them in turn of having a guilty secret, and by the end of the night one of the guests is dead.\n                    \n                    ', 2.00),
(4, '2020-06-11 03:06:24', '2020-06-11 03:06:24', 'https://images-na.ssl-images-amazon.com/images/I/51MlxNgCsyL._SX308_BO1,204,203,200_.jpg', 'Murder on the Orient Express', 'agatha christie', 'Just after midnight, the famous Orient Express is stopped in its tracks by a snowdrift. By morning, the millionaire Samuel Edward Ratchett lies dead in his compartment, stabbed a dozen times, his door locked from the inside. Without a shred of doubt, one of his fellow passengers is the murderer.Isolated by the storm, detective Hercule Poirot must find the killer among a dozen of the dead mans enemies, before the murderer decides to strike again.', 12.00),
(5, '2020-06-11 03:06:24', '2020-06-11 03:06:24', 'https://m.media-amazon.com/images/I/51g0LdfhtvL.jpg', 'Harry Potter and the goblet of fire', 'J.K. Rowlin', 'There will be three tasks, spaced throughout the school year, and they will test the champions in many different ways...their magical prowess - their daring - their powers of deduction - and, of course, their ability to cope with danger.', 20.00),
(6, '2020-06-11 03:06:24', '2020-06-11 03:06:24', 'https://images-na.ssl-images-amazon.com/images/I/81E9oNSK3bL.jpg', 'Fire & Blood: 300 Years Before A Game of Thrones', 'George R. R. Martin', 'With all the fire and fury fans have come to expect from internationally best-selling author George R. R. Martin, this is the first volume of the definitive two-part history of the Targaryens in Westeros.', 16.00),
(7, '2020-06-11 03:06:24', '2020-06-11 03:06:24', 'https://images-na.ssl-images-amazon.com/images/I/51MlxNgCsyL._SX308_BO1,204,203,200_.jpg', 'And Then There Were None ', 'Agatha christie', '\"Ten . . .\"\n                                    Ten strangers are lured to an isolated island mansion off the Devon coast by a mysterious \"U. N. Owen.\"\n                                    \n                                    \"Nine . . .\"\n                                    At dinner a recorded message accuses each of them in turn of having a guilty secret, and by the end of the night one of the guests is dead.\n                                    \n                                    ', 2.00),
(8, '2020-06-11 03:06:24', '2020-06-11 03:06:24', 'https://images-na.ssl-images-amazon.com/images/I/51MlxNgCsyL._SX308_BO1,204,203,200_.jpg', 'Murder on the Orient Express', 'agatha christie', 'Just after midnight, the famous Orient Express is stopped in its tracks by a snowdrift. By morning, the millionaire Samuel Edward Ratchett lies dead in his compartment, stabbed a dozen times, his door locked from the inside. Without a shred of doubt, one of his fellow passengers is the murderer.Isolated by the storm, detective Hercule Poirot must find the killer among a dozen of the dead mans enemies, before the murderer decides to strike again.', 12.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
