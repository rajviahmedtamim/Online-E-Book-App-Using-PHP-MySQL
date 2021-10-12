-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2021 at 03:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `pdf_book`
--

CREATE TABLE `pdf_book` (
  `id` int(11) NOT NULL,
  `chapter_name` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pdf_book`
--

INSERT INTO `pdf_book` (`id`, `chapter_name`, `pdf`) VALUES
(1, 'English', 'Advising Schedule Fall-2021_d977ef274360f46b6fcc8a636d4072fb.pdf'),
(2, 'Math', 'Course-Offer-for-Fall-2021_1c13c9219c06a36e33d2682454352444.pdf'),
(3, 'afdgbdfb', '100 Software Company info.pdf'),
(4, 'Math', 'Value_Chain_Analysis_on_Bhairab_Shoe_Clu.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pdf_book`
--
ALTER TABLE `pdf_book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pdf_book`
--
ALTER TABLE `pdf_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
