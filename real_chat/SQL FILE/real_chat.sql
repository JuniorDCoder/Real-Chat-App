-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 01, 2021 at 06:41 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE `tbl_message` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` text NOT NULL,
  `outgoing_msg_id` text NOT NULL,
  `text_message` text NOT NULL,
  `curr_date` text NOT NULL,
  `curr_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `text_message`, `curr_date`, `curr_time`) VALUES
(1, '1476479542', '993628918', 'Hi', 'November 2, 2021 ', '12:30 am'),
(2, '993628918', '1476479542', 'Hello bro how are you? ðŸ˜Š\n', 'November 2, 2021 ', '12:31 am'),
(3, '1476479542', '993628918', 'Ya bro im fine', 'November 2, 2021 ', '12:34 am'),
(4, '993628918', '1476479542', 'What are you doing now?\n', 'November 2, 2021 ', '12:38 am'),
(5, '1476479542', '993628918', 'Sitting on a chair', 'November 2, 2021 ', '12:38 am'),
(6, '993628918', '1476479542', 'oh', 'November 2, 2021 ', '12:38 am'),
(7, '993628918', '1476479542', 'You can come at my house now', 'November 2, 2021 ', '12:40 am'),
(8, '1476479542', '993628918', 'Ok brother, im coming...', 'November 2, 2021 ', '12:41 am');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `unique_id` text NOT NULL,
  `img` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `unique_id`, `img`, `username`, `email`, `pass`, `status`) VALUES
(1, '993628918', 'uploads/5a788ef99d.png', 'Robart', 'robart@gmail.com', '$2y$10$Un4e4OysRaXiUa9d/8x1LuuyuysChCrPnc6KVOMkGXKgj3KVVzG7O', 'Active'),
(2, '1476479542', 'uploads/b2c20e2d9b.png', 'William', 'william@gmail.com', '$2y$10$5XM33B/CMUXrTV.niEjjnudzz/auaGkrp20IEZ2Qd4KiapG9J4re.', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
