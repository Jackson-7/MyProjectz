-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 05:34 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `360_fit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'admin',
  `type` varchar(50) NOT NULL DEFAULT 'admin',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `phone`, `pass`, `role`, `type`, `created_at`) VALUES
(1, 'manish', 'manishalva20.ma@gmail.com', '9844351967', '123456789', 'admin', 'admin', '2021-04-09 10:41:31'),
(3, 'Doc Physician', 'doc_phy@g.com', '9876543210', '123456789', 'Doctor', 'Family Physician', '2021-04-09 14:16:25'),
(4, 'Doc Physio', 'doc_physio@g.com', '9876543210', '123456789', 'Doctor', 'Physiotherapist', '2021-04-09 14:17:30'),
(5, 'Doc Psychiatrist', 'doc_psy@g.com', '9876543210', '123456789', 'Doctor', 'Psychiatrist', '2021-04-09 14:19:10'),
(6, 'Doc Allergist', 'doc_allergist@g.com', '9876543210', '123456789', 'Doctor', 'Allergist', '2021-04-09 14:23:12'),
(7, 'Doc Derma', 'doc_derma@gmail.com', '9876543210', '9876543210', 'Doctor', 'Dermatologist', '2021-04-09 14:24:13'),
(8, 'Doc Pediatric', 'doc_pediatric@gmail.com', '9876543210', '123456789', 'Doctor', 'Pediatrician', '2021-04-09 14:25:50'),
(9, 'Ayurveda', 'ayurveda@g.com', '9876543210', '123456789', 'Ayurveda', 'Ayurveda', '2021-04-09 14:26:44'),
(10, 'Nutrition', 'nutrition@g.com', '9876543210', '123456789', 'Nutrition', 'Nutrition', '2021-04-09 14:27:45'),
(11, 'Therapist', 'therapist@gmail.com', '9876543210', '123456789', 'Therapist', 'Therapist', '2021-04-09 14:28:47'),
(12, 'Trainee', 'trainee@g.com', '9876543210', '123456789', 'Trainee', 'Trainee', '2021-04-09 14:29:41');

-- --------------------------------------------------------

--
-- Table structure for table `ayurveda`
--

CREATE TABLE `ayurveda` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `madic_in` varchar(100) NOT NULL,
  `medic_his` varchar(100) NOT NULL,
  `synmptoms` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `schedule` datetime NOT NULL,
  `pay_id` varchar(200) NOT NULL,
  `pay_info` varchar(100) NOT NULL DEFAULT 'pending',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `filed_by` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ayurveda`
--

INSERT INTO `ayurveda` (`id`, `email`, `full_name`, `madic_in`, `medic_his`, `synmptoms`, `phone`, `schedule`, `pay_id`, `pay_info`, `created_at`, `status`, `filed_by`) VALUES
(4, 'manish.ma.alva@gmail.com', 'Alva', 'dia', 'all', 'all', '9844351967', '2021-04-09 14:25:00', '', 'successful', '2021-04-07 14:25:53', 'Accepted', 'manish.ma.alva@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `doc_con`
--

CREATE TABLE `doc_con` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `madic_in` varchar(200) NOT NULL,
  `medic_his` varchar(200) NOT NULL,
  `symptom` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `schedule` datetime NOT NULL,
  `pay_id` varchar(300) DEFAULT NULL,
  `pay_info` varchar(100) NOT NULL DEFAULT 'pending',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `filed_by` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doc_con`
--

INSERT INTO `doc_con` (`id`, `email`, `full_name`, `phone`, `madic_in`, `medic_his`, `symptom`, `type`, `schedule`, `pay_id`, `pay_info`, `created_at`, `status`, `filed_by`) VALUES
(9, 'manish.ma.alva@gmail.com', 'Alva', '9844351967', 'dia', 'all', 'all', 'Physiotherapist', '2021-04-10 12:21:00', '30afdf0adc414072a28f4e50697327e2', 'successful', '2021-04-07 13:28:16', 'Accepted', 'manish.ma.alva@gmail.com'),
(10, 'manish.ma.alva@gmail.com', 'Alva', '9844351967', 'dia', 'all', 'all', 'Physiotherapist', '2021-04-09 13:40:00', NULL, 'pending', '2021-04-08 13:40:42', 'pending', NULL),
(11, 'manish.ma.alva@gmail.com', 'Alva', '9844351967', 'dia', 'all', 'all', 'Psychiatrist', '2021-04-10 13:41:00', '9eb80be1545949148f383b28209e6a3b', 'successful', '2021-04-08 13:41:40', 'pending', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `franchise_detail`
--

CREATE TABLE `franchise_detail` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `full_name` varchar(300) NOT NULL,
  `c_name` varchar(300) NOT NULL,
  `c_website` varchar(500) NOT NULL,
  `net_worth` varchar(100) NOT NULL,
  `investment` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `filed_by` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `franchise_detail`
--

INSERT INTO `franchise_detail` (`id`, `email`, `full_name`, `c_name`, `c_website`, `net_worth`, `investment`, `country`, `state`, `city`, `phone`, `submitted_at`, `filed_by`) VALUES
(12, 'manish.ma.alva@gmail.com', 'Manish Alva', 'Groth gym', 'www.ggym.com', '2000000', '40 Lakhs - 60 Lakhs', 'india', 'karnataka', 'mangalore', 2147483647, '2021-04-08 04:51:14', 'manish.ma.alva@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `gymplan`
--

CREATE TABLE `gymplan` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `paln` varchar(200) NOT NULL,
  `Schedule` datetime NOT NULL,
  `pay_id` varchar(200) NOT NULL,
  `pay_info` varchar(100) NOT NULL DEFAULT 'pending',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `filed_by` varchar(200) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gymplan`
--

INSERT INTO `gymplan` (`id`, `email`, `full_name`, `phone`, `paln`, `Schedule`, `pay_id`, `pay_info`, `created_at`, `filed_by`, `status`) VALUES
(1, 'manish.ma.alva@gmail.com', 'Manish Alva', '9844351967', 'Personal Training', '2021-04-10 12:33:00', '', 'successful', '2021-04-08 11:33:57', 'manish.ma.alva@gmail.com', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `nutrition`
--

CREATE TABLE `nutrition` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `medic_in` varchar(200) NOT NULL,
  `medic_his` varchar(200) NOT NULL,
  `body_wei` varchar(50) NOT NULL,
  `schedule` datetime NOT NULL,
  `pay_id` varchar(200) NOT NULL,
  `pay_info` varchar(100) NOT NULL DEFAULT 'pending',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `filed_by` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nutrition`
--

INSERT INTO `nutrition` (`id`, `email`, `full_name`, `phone`, `medic_in`, `medic_his`, `body_wei`, `schedule`, `pay_id`, `pay_info`, `created_at`, `status`, `filed_by`) VALUES
(1, 'manish.ma.alva@gmail.com', 'Alva', '9844351967', 'dia', 'all', '55', '2021-04-09 14:22:00', '', 'successful', '2021-04-07 14:22:11', 'Accepted', 'manish.ma.alva@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `id` int(11) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `pro_price` varchar(50) NOT NULL,
  `size` varchar(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `c_name` varchar(50) DEFAULT NULL,
  `c_phone` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'cart',
  `pay_info` varchar(100) NOT NULL DEFAULT 'pending',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `filed_by` varchar(200) DEFAULT NULL,
  `pay_id` varchar(200) NOT NULL,
  `ran_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`id`, `pro_name`, `pro_price`, `size`, `qty`, `image`, `c_name`, `c_phone`, `address`, `status`, `pay_info`, `created_at`, `filed_by`, `pay_id`, `ran_id`) VALUES
(2, 'Dumbbell Set', '40000', '15Kg', 2, 'images/dumbell_set_max_5.jpg', 'Jackson', '9844351967', NULL, 'cart', 'pending', '2021-03-13 17:28:16', 'manish.ma.alva@gmail.com', '9920210408', '6120210409'),
(4, 'Dumbbell Set', '40000', '20Kg', 4, 'images/dumbell_set_max_5.jpg', 'Manish', '9844351967', NULL, 'cart', 'pending', '2021-04-08 12:52:10', 'manish.ma.alva@gmail.com', '9920210408', '6120210409');

-- --------------------------------------------------------

--
-- Table structure for table `payment_log`
--

CREATE TABLE `payment_log` (
  `id` int(11) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `page` varchar(50) DEFAULT NULL,
  `pay_id` varchar(300) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_log`
--

INSERT INTO `payment_log` (`id`, `email`, `page`, `pay_id`, `created_at`) VALUES
(1, 'jacksonferrao@j.com', 'doc_con', '510aac6e21a342cc90809071cfb0aade', '2021-04-07 13:33:50'),
(2, 'jacksonferrao@j.com', 'doc_con', '30afdf0adc414072a28f4e50697327e2', '2021-04-07 13:34:07'),
(3, 'manish.ma.alva@gmail.com', 'cart', '', '2021-04-08 13:25:14'),
(4, 'manish.ma.alva@gmail.com', 'cart', '', '2021-04-08 13:32:13'),
(5, 'manish.ma.alva@gmail.com', 'order_list', '', '2021-04-08 13:39:33'),
(6, 'manish.ma.alva@gmail.com', 'order_list', '', '2021-04-08 13:39:47'),
(7, 'manish.ma.alva@gmail.com', 'doc_con', '9eb80be1545949148f383b28209e6a3b', '2021-04-08 13:42:15'),
(8, 'manish.ma.alva@gmail.com', 'order_list', '', '2021-04-09 19:07:15'),
(9, 'manish.ma.alva@gmail.com', 'order_list', '', '2021-04-09 19:07:41'),
(10, 'manish.ma.alva@gmail.com', 'order_list', '', '2021-04-09 19:22:50'),
(11, 'manish.ma.alva@gmail.com', 'order_list', '', '2021-04-09 19:31:54'),
(12, 'manish.ma.alva@gmail.com', 'order_list', '', '2021-04-09 19:32:35');

-- --------------------------------------------------------

--
-- Table structure for table `ssign_up`
--

CREATE TABLE `ssign_up` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `img` varchar(300) DEFAULT NULL,
  `phoneno` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `role` varchar(100) NOT NULL DEFAULT 'user',
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ssign_up`
--

INSERT INTO `ssign_up` (`id`, `fname`, `lname`, `email`, `password`, `img`, `phoneno`, `created_at`, `role`, `address`) VALUES
(14, 'Jackson', 'Ferrao', 'macksonferrao@gmail.com', '1234567890', 'upload/1610797117733.png', '1234567890', '2021-02-03 14:44:06', 'user', NULL),
(15, 'Jackson', 'Potter', 'jack@gmail.com', '1234567890', 'upload/juli.jpg', '2147483647', '2021-02-03 15:04:37', 'user', NULL),
(23, 'Jackson', 'Ferrao', 'hi@gmail.com', '1234567890', 'upload/juli.jpg', '8278493841', '2021-02-04 19:52:10', 'admin', NULL),
(24, 'Manish', 'Alva', 'manish.ma.alva@gmail.com', '123456789', 'upload/christian.jpg', '9844351967', '2021-04-07 18:52:35', 'user', 'kolya');

-- --------------------------------------------------------

--
-- Table structure for table `therapy`
--

CREATE TABLE `therapy` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `medic_in` varchar(200) NOT NULL,
  `medic_his` varchar(200) NOT NULL,
  `synmptoms` varchar(200) NOT NULL,
  `schedule` datetime NOT NULL,
  `pay_id` varchar(200) NOT NULL,
  `pay_info` varchar(100) NOT NULL DEFAULT 'pending',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `filed_by` varchar(200) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `therapy`
--

INSERT INTO `therapy` (`id`, `email`, `full_name`, `phone`, `medic_in`, `medic_his`, `synmptoms`, `schedule`, `pay_id`, `pay_info`, `created_at`, `filed_by`, `status`) VALUES
(2, 'manish.ma.alva@gmail.com', 'Alva', '9844351967', 'dia', 'all', 'all', '2021-04-09 14:20:00', '', 'successful', '2021-04-07 14:20:31', 'manish.ma.alva@gmail.com', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `trainee_detail`
--

CREATE TABLE `trainee_detail` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `pre_batch` varchar(300) NOT NULL,
  `center` varchar(300) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `filed_by` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainee_detail`
--

INSERT INTO `trainee_detail` (`id`, `email`, `full_name`, `c_name`, `age`, `pre_batch`, `center`, `phone`, `created_at`, `filed_by`) VALUES
(2, 'manish.ma.alva@gmail.com', 'Manish Alva', 'Groth Gym', 25, 'Weekday-Evening (2 Months)', '2', '9844351967', '2021-04-07 12:29:38', 'manish.ma.alva@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `ayurveda`
--
ALTER TABLE `ayurveda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_con`
--
ALTER TABLE `doc_con`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `franchise_detail`
--
ALTER TABLE `franchise_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gymplan`
--
ALTER TABLE `gymplan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nutrition`
--
ALTER TABLE `nutrition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_log`
--
ALTER TABLE `payment_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ssign_up`
--
ALTER TABLE `ssign_up`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phoneno` (`phoneno`);

--
-- Indexes for table `therapy`
--
ALTER TABLE `therapy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainee_detail`
--
ALTER TABLE `trainee_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ayurveda`
--
ALTER TABLE `ayurveda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doc_con`
--
ALTER TABLE `doc_con`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `franchise_detail`
--
ALTER TABLE `franchise_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gymplan`
--
ALTER TABLE `gymplan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nutrition`
--
ALTER TABLE `nutrition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment_log`
--
ALTER TABLE `payment_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ssign_up`
--
ALTER TABLE `ssign_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `therapy`
--
ALTER TABLE `therapy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trainee_detail`
--
ALTER TABLE `trainee_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
