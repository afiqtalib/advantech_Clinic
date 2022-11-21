-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 09:08 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appId` int(3) NOT NULL,
  `patientIc` bigint(12) NOT NULL,
  `scheduleId` int(10) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'process'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appId`, `patientIc`, `scheduleId`, `status`) VALUES
(107, 680214085022, 88, 'done'),
(108, 980325083344, 93, 'done'),
(109, 980325083344, 94, 'done'),
(110, 980325083344, 91, 'done'),
(111, 990209125185, 95, 'done'),
(112, 980407085306, 109, 'done'),
(116, 980407085306, 110, 'process'),
(117, 921216015032, 111, 'process'),
(118, 214080481, 117, 'process'),
(119, 670213087659, 123, 'process'),
(120, 214080481, 130, 'process');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `icDoctor` bigint(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `doctorId` int(3) NOT NULL,
  `doctorFirstName` varchar(50) NOT NULL,
  `doctorLastName` varchar(50) NOT NULL,
  `doctorAddress` varchar(100) NOT NULL,
  `doctorPhone` varchar(15) NOT NULL,
  `doctorEmail` varchar(20) NOT NULL,
  `doctorDOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`icDoctor`, `password`, `doctorId`, `doctorFirstName`, `doctorLastName`, `doctorAddress`, `doctorPhone`, `doctorEmail`, `doctorDOB`) VALUES
(553, '1234', 553, 'Ong Voon', 'Gyee', 'Melaka', '60198887676', 'ong.voon@gmail.com', '1995-01-12'),
(671002086379, '123', 123, 'Wong Ah', 'Kow', 'Perak', '60123453621', 'wongahkow@gmail.com', '1967-10-02'),
(920422016741, '1234', 963, 'Leung Kheng ', 'Jung', 'Negeri Sembilan', '0125875513', 'leuk.keng@gmail.com', '1990-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `doctorschedule`
--

CREATE TABLE `doctorschedule` (
  `scheduleId` int(11) NOT NULL,
  `scheduleDate` date NOT NULL,
  `scheduleDay` varchar(15) NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `bookAvail` varchar(10) NOT NULL,
  `doctorname` varchar(255) NOT NULL,
  `dr_id` varchar(20) NOT NULL,
  `icstaff` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorschedule`
--

INSERT INTO `doctorschedule` (`scheduleId`, `scheduleDate`, `scheduleDay`, `startTime`, `endTime`, `bookAvail`, `doctorname`, `dr_id`, `icstaff`) VALUES
(88, '2022-02-01', 'Tuesday', '18:30:00', '19:31:00', 'Booked', 'Dr Leuk Kheng Jung', '963', 5022),
(89, '2022-02-02', 'Wednesday', '09:50:00', '22:50:00', 'notavail', 'Dr Ong Voon Gyee', '553', 5022),
(90, '2022-02-02', 'Wednesday', '09:50:00', '22:50:00', 'Booked', 'Dr Ong Voon Gyee', '553', 5022),
(91, '2022-02-02', 'Wednesday', '09:55:00', '10:55:00', 'Booked', 'Dr Wong Ah Kow', '123', 5022),
(92, '2022-02-02', 'Monday', '09:55:00', '10:55:00', 'Booked', 'Dr Wong Ah Kow', '123', 5022),
(93, '2022-02-02', 'Wednesday', '09:55:00', '10:55:00', 'Booked', 'Dr Leuk Kheng Jung', '963', 5022),
(94, '2022-02-02', 'Wednesday', '09:55:00', '10:55:00', 'Booked', 'Dr Leuk Kheng Jung', '963', 5022),
(95, '2022-02-02', 'Wednesday', '12:10:00', '13:00:00', 'Booked', 'Dr Ong Voon Gyee', '553', 5022),
(97, '2022-02-03', 'Thursday', '10:00:00', '11:00:00', 'Booked', 'Dr Wong Ah Kow', '123', 5022),
(98, '2022-02-03', 'Thursday', '10:00:00', '11:00:00', 'Booked', 'Dr Ong Voon Gyee', '553', 5022),
(99, '2022-02-03', 'Thursday', '11:00:00', '12:00:00', 'Booked', 'Dr Leuk Kheng Jung', '963', 5022),
(100, '2022-02-03', 'Thursday', '13:00:00', '14:00:00', 'Booked', 'Dr Ong Voon Gyee', '553', 5022),
(101, '2022-02-04', 'Friday', '01:30:00', '02:30:00', 'Booked', 'Dr Leuk Kheng Jung', '963', 5022),
(102, '2022-02-05', 'Saturday', '12:00:00', '01:00:00', 'Booked', 'Dr Ong Voon Gyee', '553', 123),
(103, '2022-02-05', 'Saturday', '11:55:00', '12:55:00', 'Booked', 'Dr Ong Voon Gyee', '553', 5022),
(104, '2022-02-05', 'Saturday', '14:00:00', '15:00:00', 'Booked', 'Dr Leuk Kheng Jung', '963', 5022),
(105, '2022-02-06', 'Sunday', '15:00:00', '16:00:00', 'available', 'Dr Leuk Kheng Jung', '963', 5022),
(106, '2022-02-06', 'Sunday', '15:00:00', '16:00:00', 'available', 'Dr Wong Ah Kow', '123', 5022),
(107, '2022-02-06', 'Sunday', '15:00:00', '16:00:00', 'available', 'Dr Ong Voon Gyee', '553', 5022),
(108, '2022-02-06', 'Sunday', '10:00:00', '11:00:00', 'Booked', 'Dr Ong Voon Gyee', '553', 123),
(109, '2022-02-19', 'Saturday', '12:00:00', '01:00:00', 'Booked', 'Dr Leuk Kheng Jung', '963', 123),
(110, '2022-02-19', 'Saturday', '02:00:00', '03:00:00', 'Booked', 'Dr Wong Ah Kow', '123', 123),
(111, '2022-02-19', 'Saturday', '05:00:00', '06:00:00', 'Booked', 'Dr Ong Voon Gyee', '553', 123),
(112, '2022-02-23', 'Wednesday', '11:15:00', '12:14:00', 'available', 'Dr  Leung Kheng  Jung', '963', 5022),
(113, '2022-02-23', 'Wednesday', '11:14:00', '12:14:00', 'available', 'Dr  Leung Kheng  Jung', '963', 5022),
(114, '2022-02-14', 'Monday', '10:00:00', '11:00:00', 'available', 'Dr  Leung Kheng  Jung', '963', 123),
(115, '2022-02-14', 'Monday', '03:00:00', '04:00:00', 'available', 'Dr  Wong Ah Kow', '123', 123),
(116, '2022-02-14', 'Monday', '06:00:00', '07:00:00', 'available', 'Dr  Ong Voon Gyee', '553', 123),
(117, '2022-02-15', 'Tuesday', '09:00:00', '10:00:00', 'Booked', 'Dr  Ong Voon Gyee', '553', 123),
(118, '2022-02-16', 'Tuesday', '09:00:00', '10:00:00', 'available', 'Dr  Wong Ah Kow', '123', 123),
(119, '2022-02-15', 'Tuesday', '09:00:00', '10:00:00', 'available', 'Dr  Wong Ah Kow', '123', 123),
(121, '2022-02-15', 'Tuesday', '11:00:00', '12:00:00', 'available', 'Dr  Wong Ah Kow', '123', 123),
(122, '2022-02-15', 'Tuesday', '11:00:00', '12:00:00', 'available', 'Dr  Ong Voon Gyee', '553', 123),
(123, '2022-02-15', 'Tuesday', '11:00:00', '12:00:00', 'Booked', 'Dr  Leung Kheng  Jung', '963', 123),
(124, '2022-02-15', 'Tuesday', '02:00:00', '03:00:00', 'available', 'Dr  Ong Voon Gyee', '553', 123),
(125, '2022-02-15', 'Tuesday', '02:00:00', '03:00:00', 'available', 'Dr  Wong Ah Kow', '123', 123),
(126, '2022-02-15', 'Tuesday', '02:00:00', '03:00:00', 'available', 'Dr  Leung Kheng  Jung', '963', 123),
(127, '2022-02-15', 'Tuesday', '04:00:00', '05:00:00', 'available', 'Dr  Ong Voon Gyee', '553', 123),
(128, '2022-02-15', 'Tuesday', '04:00:00', '05:00:00', 'available', 'Dr  Wong Ah Kow', '123', 123),
(129, '2022-02-15', 'Tuesday', '04:00:00', '05:00:00', 'available', 'Dr  Leung Kheng  Jung', '963', 123),
(130, '2022-02-22', 'Tuesday', '09:00:00', '10:00:00', 'Booked', 'Dr  Ong Voon Gyee', '553', 5022),
(131, '2022-02-22', 'Tuesday', '09:00:00', '10:00:00', 'available', 'Dr  Wong Ah Kow', '123', 5022),
(132, '2022-02-22', 'Tuesday', '09:00:00', '10:00:00', 'available', 'Dr  Leung Kheng  Jung', '963', 5022),
(133, '2022-02-22', 'Tuesday', '11:00:00', '12:00:00', 'available', 'Dr  Ong Voon Gyee', '553', 5022),
(134, '2022-02-22', 'Tuesday', '11:00:00', '12:00:00', 'available', 'Dr  Wong Ah Kow', '123', 5022),
(135, '2022-02-22', 'Tuesday', '11:00:00', '12:00:00', 'available', 'Dr  Leung Kheng  Jung', '963', 5022),
(136, '2022-02-22', 'Tuesday', '14:00:00', '15:00:00', 'available', 'Dr  Ong Voon Gyee', '553', 5022),
(137, '2022-02-22', 'Tuesday', '14:00:00', '15:00:00', 'available', 'Dr  Wong Ah Kow', '123', 5022),
(138, '2022-02-22', 'Tuesday', '14:00:00', '15:00:00', 'available', 'Dr  Leung Kheng  Jung', '963', 5022),
(139, '2022-02-22', 'Tuesday', '16:00:00', '17:00:00', 'available', 'Dr  Ong Voon Gyee', '553', 5022),
(140, '2022-02-22', 'Tuesday', '16:00:00', '17:00:00', 'available', 'Dr  Wong Ah Kow', '123', 5022),
(141, '2022-02-22', 'Tuesday', '16:00:00', '17:00:00', 'available', 'Dr  Leung Kheng  Jung', '963', 5022),
(142, '2022-02-22', 'Tuesday', '04:00:00', '05:00:00', 'available', 'Dr  Leung Kheng  Jung', '963', 123);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `icPatient` bigint(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `patientFirstName` varchar(20) NOT NULL,
  `patientLastName` varchar(20) NOT NULL,
  `patientMaritialStatus` varchar(10) NOT NULL,
  `patientDOB` date NOT NULL,
  `patientGender` varchar(10) NOT NULL,
  `patientAddress` varchar(100) NOT NULL,
  `patientPhone` varchar(15) NOT NULL,
  `patientEmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`icPatient`, `password`, `patientFirstName`, `patientLastName`, `patientMaritialStatus`, `patientDOB`, `patientGender`, `patientAddress`, `patientPhone`, `patientEmail`) VALUES
(214080481, '0481', 'Mohd', 'Hakimi', 'married', '2000-02-14', 'male', '66, Fasa 2B Tambahan, 32040, Seri Manjung, Perak.  ', '60173132424', 'kimi.00@gmail.com'),
(670213087659, '7659', 'Muiz Syafiq', 'Yazid', 'married', '1999-09-18', 'female', 'Lot 112, Kampung Bogak, Pulau Pangkor, Perak', '60197133793', 'muiz.syafiq88@yahoo.com'),
(680214085022, '5022', 'Rosidah', 'Jalal', 'married', '1982-02-14', 'female', '1132 (S) Kuarters JKR, Jln Dato Seri Kamaruddin,32040, Seri Manjung, Perak. ', '199668257', 'r@gmail.com'),
(870305015133, '5133', 'Izzul Azidan ', 'Mohd Yazid', '', '1987-03-05', 'male', '', '', 'izzul.azidan44@yahoo.com'),
(901214105384, '5382', 'Nurin ', 'Amirah', '', '1998-12-14', 'female', '', '', 'nurin _90@gmail.com'),
(920517105553, '123', 'Mohd', 'Mazlan', 'single', '1992-05-17', 'male', 'NO 153 BLOK MURNI\r\nKOLEJ CANSELOR UNIVERSITI PUTRA MALAYSIA', '173567758', 'lan.psis@gmail.com'),
(921216015032, '5032', 'Nurul Nabila', 'Zulkeflee', 'married', '1992-12-16', 'female', '1148, Kg Serdang, Sitiawan, Perak.', '198717909', 'nabila.lee77@yahoo.com'),
(950808017636, '7636', 'Normaizura ', 'Mohd Nor ', '', '1995-08-08', 'female', '', '', 'ainzura77@yahoo.com'),
(980314085382, '12345', 'Alisa', 'Khairi', 'single', '1998-03-14', 'female', '1132 Fasa 2A, Jln 2/a, 32040, Seri Manjung, Perak', '134717240', 'alisa@gmail.com'),
(980325083344, '3344', 'Izyan', 'Farhana ', '', '1998-03-25', 'female', 'Sabah', '193335555', 'izyan11@gmail,com'),
(980407085306, '5306', 'Nurul ', 'Adha', 'single', '1998-04-04', 'female', 'Titi Serong, Sitiawan, Perak', '126667575', 'adha_981@gmail.com'),
(980718085566, '5566', 'Imanina', 'Jamil', 'single', '1998-07-18', 'female', 'No 123, Fasa 2D, 32040, Seri Manjung Perak.', '145758113', 'nina98@gmailcom'),
(990209125185, '5185', 'Khairul ', 'Ezaidi', 'single', '1999-02-09', 'male', 'no 2, fasa 2b,36000, Teluk Intan ', '1119491806', 'k@gmail.com'),
(990314085044, '5044', 'Alya ', 'Qistina', 'single', '1999-03-14', 'female', 'Perak', '123456788', 'alya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `icstaff` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `staffFirstName` varchar(50) NOT NULL,
  `staffLastName` varchar(50) NOT NULL,
  `staffAddress` varchar(100) NOT NULL,
  `staffPhone` varchar(30) NOT NULL,
  `staffEmail` varchar(100) NOT NULL,
  `staffDOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`icstaff`, `password`, `staffFirstName`, `staffLastName`, `staffAddress`, `staffPhone`, `staffEmail`, `staffDOB`) VALUES
('5022', '5022', 'Alisa', 'Khairi', 'Perak', '0124567890', 'aw@gmail.com', '0000-00-00'),
('770213095146', '5146', 'Nur Najihah', 'Isa', 'No 123, Taman Manik 36000, Teluk Intan, Perak. ', '0198887878', 'Najib86@gmail.com', '2022-02-13'),
('980314085326', '5326', 'Alisa', 'Putri', 'Perak', '0193322444', 'afy@gmail.com', '0000-00-00'),
('981107075098', '5098', 'Nurhamizah', 'Mohd Fathil', 'Penang', '0176165555', 'mizah@gmail.com', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appId`),
  ADD UNIQUE KEY `scheduleId_2` (`scheduleId`),
  ADD KEY `patientIc` (`patientIc`),
  ADD KEY `scheduleId` (`scheduleId`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`icDoctor`);

--
-- Indexes for table `doctorschedule`
--
ALTER TABLE `doctorschedule`
  ADD PRIMARY KEY (`scheduleId`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`icPatient`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`icstaff`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `doctorschedule`
--
ALTER TABLE `doctorschedule`
  MODIFY `scheduleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_4` FOREIGN KEY (`patientIc`) REFERENCES `patient` (`icPatient`),
  ADD CONSTRAINT `appointment_ibfk_5` FOREIGN KEY (`scheduleId`) REFERENCES `doctorschedule` (`scheduleId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
