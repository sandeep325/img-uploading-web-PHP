-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 05:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `img_data`
--

CREATE TABLE `img_data` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_data`
--

INSERT INTO `img_data` (`id`, `name`, `email`, `img`) VALUES
(14, 'Sanju', 'sanju@gmail.com', 'upload/IMG_20200220_220403.jpg'),
(19, 'Jacqueline', 'jack@gmail.com', 'upload/IMG_20200412_173351.jpg'),
(20, 'Jacqueline', 'jack12@gmail.com', 'upload/IMG_20200412_173601.jpg'),
(21, 'Hrithik Roshan', 'hrithik@gmail.com', 'upload/IMG_20200412_173406.jpg'),
(22, 'Mahesh babu', 'mahesh@gmail.com', 'upload/IMG_20200412_174348.jpg'),
(23, 'Sandeep', 'san19A@email.com', 'upload/IMG_20200326_112451_055.jpg'),
(24, 'hritik roshan', 'hritik321@gmail.com', 'upload/HR.jpg'),
(25, 'radhika pandit', 'radhika31@gmail.com', 'upload/radhika pandit.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img_data`
--
ALTER TABLE `img_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `img_data`
--
ALTER TABLE `img_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
