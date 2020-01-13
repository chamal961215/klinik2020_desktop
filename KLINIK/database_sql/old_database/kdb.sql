-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2020 at 12:16 PM
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
-- Database: `kdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `PatientId` int(10) NOT NULL,
  `PatientType` varchar(50) DEFAULT NULL,
  `BloodType` enum('O+','O-','A+','A-','B+','B-','AB+','AB-') DEFAULT NULL,
  `Height` int(10) DEFAULT NULL,
  `Weight` int(10) DEFAULT NULL,
  `NextClinicDate` datetime DEFAULT NULL,
  `LastViewedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(64) NOT NULL,
  `title` enum('Dr.','Ms.','Mrs.','Mr.') NOT NULL,
  `nic` varchar(15) NOT NULL,
  `staff_id` varchar(15) DEFAULT NULL,
  `address` varchar(200) NOT NULL,
  `user_type` enum('Admin','Doctor','Assistant') NOT NULL,
  `contact_no` int(15) NOT NULL,
  `enrollment_key` varchar(10) DEFAULT NULL,
  `user_enroll_status` enum('Pending','Confirmed','Deleted') DEFAULT NULL,
  `slmc_no` varchar(15) DEFAULT NULL,
  `is_deleted` enum('yes') DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `title`, `nic`, `staff_id`, `address`, `user_type`, `contact_no`, `enrollment_key`, `user_enroll_status`, `slmc_no`, `is_deleted`, `last_login`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$12$umtmistK7ISxt2NwzSluyehDH/26efgY9uNlYpWnH3z2PR/hmsNl.', 'Mr.', '963500556V', NULL, 'K hospital', 'Admin', 771234567, NULL, 'Confirmed', NULL, NULL, NULL),
(3, 'Nirupika', 'ruchira@gmailcom', '111', 'Mrs.', '125633161v', '1996253', 'No:116 Karapitiya rd wakwella', 'Assistant', 774903737, '1998', 'Confirmed', NULL, NULL, NULL),
(4, 'Karanasinghe', 'navodikaefac@gmail.com', '123456', 'Dr.', '9628333098V', NULL, 'No:5, wakwella , hapugala galle.', 'Doctor', 774567892, 'enroll@me', 'Confirmed', '000123', NULL, NULL),
(5, 'peyja', 'peyja@gmail.com', '000', 'Mr.', '123458489V', '1235689', 'nbnmmsunkinw', 'Assistant', 2147483647, 'peyja', 'Confirmed', NULL, NULL, NULL),
(6, 'Muvindu', 'mw.vidu@gmail.com', '0000', 'Dr.', '953483459V', NULL, 'No:77,Pinna kaleywaththa, Diwulapitiya', 'Doctor', 779543774, '123456', 'Confirmed', '123456', NULL, NULL),
(7, 'Yasas', 'yasaskuluthilaka@gmail.com', '0000', 'Mr.', '951650854V', '12345678', 'No:104/189B, kavindha, hikgahalandha waththa kalagedihena.', 'Assistant', 770551424, '123456', 'Confirmed', NULL, 'yes', NULL),
(8, 'Praveen Chamal', 'chamal1@gmail.com', '123', 'Dr.', '12345', NULL, 'No:116/B, Railway station Rd, Puttalam.', 'Doctor', 322267194, '1', 'Confirmed', '123', NULL, NULL),
(9, 'Ravana', 'ravana.rox@gmail.com', '0000', 'Dr.', '0000000000', NULL, 'Hela dheshaya', 'Doctor', 89235602, 'yakku bola', 'Confirmed', '19623', NULL, NULL),
(10, 'Hanumantha', 'hanumantha@yahoo.com', '12', 'Mr.', '9625004452V', '1996253', 'dhabadhiva', 'Assistant', 1224546, 'ohm', 'Confirmed', NULL, NULL, NULL),
(12, 'ashan malith', 'ashan1996@gmail.com', '$2y$10$1mIwbmYj233NsgKFH1f2Lu4TjDP3Qe7KXPRh0qO5RaSTKbppW4nMm', 'Dr.', 'a', NULL, 'No:116/B, Railway station Rd, Puttalam.', 'Doctor', 763941416, '123', 'Confirmed', '1536562', NULL, NULL),
(13, 'Hemanthi Perera', 'droopy.scooby@gmail.com', '$2y$10$4R573hE.J45/Oj3PrNc.Yuq5ar9OaF0VSIEB8hHoI.IoxUv/0PERK', 'Mr.', '9625004452V', 'aa', 'No:116/B, Railway station Rd, Puttalam.', 'Assistant', 763941416, '123456', 'Confirmed', NULL, NULL, NULL),
(14, 'tikkka', 'chamal99@gmail.com', '', 'Dr.', '1334', NULL, 'No:116/B, Railway station Rd, Puttalam.', 'Doctor', 763941416, '123', 'Pending', '1536562', NULL, NULL),
(15, 'aa', 'admin@gmail.coma', '', 'Mr.', 'aaa', 'a', 'addegrrtddaaaaaa', 'Assistant', 0, 'a', 'Pending', NULL, NULL, NULL),
(20, 'Dadigamage Ruchira Praveen Chamal', 'eng.chamalsss@gmail.com', '', 'Dr.', '9625004452V', NULL, 'No:116/B, Railway station Rd, Puttalam.', 'Doctor', 763941416, 'sss', 'Pending', '1536562', NULL, NULL),
(21, 'Dadigamage Ruchira Praveen Chamal', 'eng.chamalccc@gmail.com', '', 'Mrs.', '9625004452V', '1996253', 'No:116/B, Railway station Rd, Puttalam.', 'Assistant', 763941416, '123456', 'Pending', NULL, 'yes', NULL),
(22, 'madhushanka rgd', 'rgmdilshan96@gmail.com', '$2y$10$QNQkBJdeXZ5sGZZVWgzBaOJhJEBYDLqskqO8il.HP29jfIt7R0rH.', 'Dr.', '962824410V', NULL, 'no:427/galahitiyawa ,ganemulla', 'Doctor', 755169497, '1338323', 'Confirmed', '12345', NULL, NULL),
(23, 'Aysha', 'sandu@gmail.com', '$2y$10$wELoUIhiaH3710QXCXbTAus5qpExUdbU42c4b7JC09YlJfrVknw8i', 'Ms.', '951650854V', '123', '25,wakwella,galle', 'Assistant', 714596639, '2973', 'Confirmed', NULL, NULL, NULL),
(26, 'Sathisth Jeewadhayan', 'sj@gmail.com', '', 'Dr.', '1234648v', NULL, 'No:11/67,waikkala.', 'Doctor', 76, 'sj', 'Pending', '1123596', NULL, NULL),
(27, 'Pasindhu Madhawa', 'pmjayasinghe@gmail.com', '$2y$10$sPnjxm9HwQ51eJ/K1Q0S0uc8BORJEKZEjTLpl48ImQSoY4xhFkrlS', 'Dr.', '9629290533V', NULL, 'naththadndiya', 'Doctor', 771562199, 'pm1996', 'Confirmed', '555555', NULL, NULL),
(28, 'Dadigamage Ruchira Praveen Chamal', 'eng.chamal11111111111111@gmail.com', '', 'Dr.', '1334', NULL, 'No:116/B, Railway station Rd, Puttalam.', 'Doctor', 763941416, 'a', 'Pending', '1536562', NULL, NULL),
(29, 'Dadigamage Ruchira Praveen Chamal', 'eng.chamal777@gmail.com', '', 'Dr.', 'aaa', NULL, 'No:116/B, Railway station Rd, Puttalam.', 'Doctor', 763941416, 'aaaawe', 'Pending', '1536562', NULL, NULL),
(30, 'Dadigamage Ruchira Praveen Chamal', 'eng.chamal333333@gmail.com', '', 'Dr.', '9625004452V', NULL, 'No:116/B, Railway station Rd, Puttalam.', 'Doctor', 763941416, '123456', 'Pending', '1234444', NULL, NULL),
(31, 'Dadigamage Ruchira Praveen Chamal', 'eng.chamal@gmail.com333', '', 'Dr.', 'a', NULL, 'No:116/B, Railway station Rd, Puttalam.', 'Doctor', 763941416, 'aaaawe', 'Pending', '1536562', NULL, NULL),
(32, 'Dadigamage Ruchira Praveen Chamal', 'eng.chamal11111111111111111111@gmail.com', '', 'Dr.', '1334', NULL, 'No:116/B, Railway station Rd, Puttalam.', 'Doctor', 763941416, 'aaaawe', 'Pending', '1234444', NULL, NULL),
(33, 'Dadigamage Ruchira Praveen Chamal', 'eng.chamal@gmail.com11233', '', 'Dr.', '1334', NULL, 'No:116/B, Railway station Rd, Puttalam.', 'Doctor', 763941416, 'aaaawe', 'Pending', '1234444', NULL, NULL),
(34, 'Dadigamage Ruchira Praveen Chamal', 'eng.chamal@gmail.comasfsdewfz', '', 'Dr.', '9625004452V', NULL, 'No:116/B, Railway station Rd, Puttalam.', 'Doctor', 763941416, 'sss', 'Pending', '1234444', NULL, NULL),
(35, 'D R P Chamal', 'eng.chamal@gmail.com', '$2y$10$DW58FOAalyJD4eHDV5iIb.qdG//mFcz1L8ETxtGtIbQ6.kmzBCFfq', 'Dr.', '963500556V', NULL, 'No:116/B, Railway station Rd, Puttalam.', 'Doctor', 763941416, '2020', 'Confirmed', '1536562', NULL, NULL),
(36, 'Ashan Malith', 'chamal1996@gmail.com', '$2y$10$p8Hbleqa7NW6OXTHXXGIQezFFD9V4ttOEWKlVZJ5RHB7cZEIKO1QC', 'Mr.', '9425004452V', '1235689', 'No:116/B, Railway station Rd, Puttalam.', 'Assistant', 763941416, '2020', 'Confirmed', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
