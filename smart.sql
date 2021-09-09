-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2021 at 01:24 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` bigint(20) NOT NULL,
  `surname` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `last_name` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `first_name` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `national_id` bigint(20) NOT NULL,
  `email_address` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `contact_number` bigint(20) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `surname`, `last_name`, `first_name`, `national_id`, `email_address`, `contact_number`, `join_date`) VALUES
(6, 'Bett', 'Bett', 'Filbert', 65757, ' lariesbett8@gmail.com', 700373370, '2021-08-15 16:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `job_id` bigint(20) NOT NULL,
  `surname` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `last_name` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `first_name` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `national_id` bigint(20) NOT NULL,
  `email` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `telephone` bigint(20) NOT NULL,
  `salary` bigint(20) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `job_code` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `specialization` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `patients_served` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`job_id`, `surname`, `last_name`, `first_name`, `national_id`, `email`, `telephone`, `salary`, `join_date`, `job_code`, `specialization`, `patients_served`) VALUES
(19, 'Lagat', 'Njoroge', 'Hilla', 3675925, 'lariesbett8@gmail.com', 700373370, 600009, '2021-09-05 20:41:56', 'DOC1230', 'Cardiology', 0),
(20, 'Lagat', 'jeptoo', 'Jane', 36759259, 'lariesbett8@gmail.com', 700373370, 60000, '2021-09-05 20:41:33', 'DOC1230', 'Anesthesiology', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nurses`
--

CREATE TABLE `nurses` (
  `job_id` bigint(20) NOT NULL,
  `surname` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `last_name` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `first_name` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `national_id` bigint(20) NOT NULL,
  `email_address` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `telephone_number` bigint(20) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `job_code` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `salary` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurses`
--

INSERT INTO `nurses` (`job_id`, `surname`, `last_name`, `first_name`, `national_id`, `email_address`, `telephone_number`, `join_date`, `job_code`, `salary`) VALUES
(11, 'Bett', 'Kipkemboi', 'Emanuel', 65757, ' lariesbett8@gmail.com', 700373370, '2021-08-17 19:45:48', 'NUR1230', 6000097);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_id` bigint(20) NOT NULL,
  `surname` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `age` bigint(20) NOT NULL,
  `national_id` bigint(20) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `telephone_number` bigint(20) NOT NULL,
  `companion_name` varchar(255) NOT NULL,
  `c_national_id` bigint(20) NOT NULL,
  `c_relationship` varchar(255) NOT NULL,
  `contact_number` bigint(20) NOT NULL,
  `facility` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `diagnosis` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `drugs_administered` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `visit_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `surname`, `last_name`, `first_name`, `age`, `national_id`, `email_address`, `telephone_number`, `companion_name`, `c_national_id`, `c_relationship`, `contact_number`, `facility`, `diagnosis`, `drugs_administered`, `visit_date`) VALUES
(9, 'Atieno', 'Millicent', 'Adoubu', 98, 36759259, ' lariesbett8@gmail.com', 700373370, 'Willy ', 3677856, ' parent ', 700373370, 'Smart Health Care Facility', 'Sore Throat. Sore throats are common in children and can be painful. /Ear Pain. .../Urinary Tract Infection. .../Skin Infection. ', '', '2021-09-09 10:51:43'),
(10, 'Kariuki', 'Ouma', 'Emanuel', 66, 67778878, 'lariesbett8@gmail.com', 700373370, 'Willy Kinuthia ', 3677856, ' parent ', 700373370, 'Smart Health Care Facility', 'Urinary Tract Infection. .../\r\nSkin Infection. .../\r\nBronchitis. .../\r\nBronchiolitis. .../\r\nPain. .../\r\nCommon Cold.', ' Diazepam 5 mg capsule/tablet.\r\nSalbutamol 0.1 mg/dose inhaler.\r\nCeftriaxone 1 g/vial injection.', '2021-09-09 10:47:47'),
(11, 'Atieno', 'Millicent', 'Adoubu', 23, 36745789, ' millicentatieno8@gmail.com', 7902342370, ' James Omondi ', 36778222, ' Father ', 712789122, '', 'Bronchitis. .../\r\nBronchiolitis. .../\r\nPain. .../\r\nCommon Cold./', 'Altura2\r\nmetroHafla\r\nsentrozil', '2021-09-09 10:48:18'),
(12, 'Atieno', 'Millicent', 'Adoubu', 23, 36759276, ' millicentatieno8@gmail.com', 254700373379, ' James Omondi ', 36778562, ' Father ', 73912902, 'Smart Health Care Facility', 'Urinary Tract Infection. .../\r\nSkin Infection. .../\r\nBronchitis. .../\r\nBronchiolitis. .../\r\nPain. .../\r\nCommon Cold.', 'fgfdgs', '2021-09-09 10:48:50'),
(13, 'Benedict', 'James', 'Mwaura', 44, 33759259, ' jamesmwaura@gmail.com', 254700373370, ' Willy Njoroge ', 36778564, ' Cousin ', 7373444, 'Smart Health Care Facility', 'Urinary Tract Infection. .../\r\nSkin Infection. .../\r\nBronchitis. .../\r\nBronchiolitis. .../\r\nPain. .../\r\nCommon Cold./', '', '2021-09-09 10:49:21'),
(14, 'Kirwa', 'Chirchir', 'Abdul', 17, 0, ' kinyuasbett8@gmail.com', 254700373372, 'Khalwale Muthethia ', 3778564, ' Brother ', 79329922, 'Smart Health Care Facility', 'Skin Infection. .../\r\nBronchitis. .../\r\nBronchiolitis. .../\r\nPain. .../\r\nCommon Cold./', '', '2021-09-09 10:49:48');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacists`
--

CREATE TABLE `pharmacists` (
  `job_id` bigint(20) NOT NULL,
  `surname` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `last_name` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `first_name` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `national_id` bigint(20) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `telephone_number` bigint(20) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `salary` bigint(20) NOT NULL,
  `job_code` varchar(255) CHARACTER SET armscii8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmacists`
--

INSERT INTO `pharmacists` (`job_id`, `surname`, `last_name`, `first_name`, `national_id`, `email_address`, `telephone_number`, `join_date`, `salary`, `job_code`) VALUES
(9, 'Atieno', 'Bett', 'Emanuel', 3675925, ' lariesbett8@gmail.com', 700373370, '2021-08-17 19:51:00', 6000099, 'PHAR1230');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `passwd` varchar(50) DEFAULT NULL,
  `user_group` varchar(50) DEFAULT NULL,
  `approval` varchar(255) CHARACTER SET armscii8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `middle_name`, `last_name`, `email`, `username`, `passwd`, `user_group`, `approval`) VALUES
(1, 'Hillary', 'Kipkemboi', 'Bett', '', 'laries', 'laries', 'admin', ''),
(4, 'Emanuel', 'Kemboi', 'Kipchumba', '', 'eflon', 'eflon', 'doctor', ''),
(5, 'Evans', 'Kuria', 'Kamau', '', 'kuria', 'kuria2', 'pharmacist', ''),
(6, 'Caroline', 'Jebet', 'Rono', '', 'caro24', 'caro24', 'nurse', ''),
(7, 'Sandra', 'Kemboi', 'Jebet', 'sandralagat@gmail.com', 'sandra', 'sandra', 'nurse', ''),
(8, 'Betty', 'Kipruto', 'Jeruto', 'betty@gmail.com', 'betty', 'betty', 'nurse', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `nurses`
--
ALTER TABLE `nurses`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `pharmacists`
--
ALTER TABLE `pharmacists`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `job_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `nurses`
--
ALTER TABLE `nurses`
  MODIFY `job_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pharmacists`
--
ALTER TABLE `pharmacists`
  MODIFY `job_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
