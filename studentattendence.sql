-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 11:36 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentattendence`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `d_id` int(18) NOT NULL,
  `d_name` varchar(20) NOT NULL,
  `hod_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`d_id`, `d_name`, `hod_name`) VALUES
(11, 'Applied Science', 'Vinod kaur'),
(13, 'Computer Science', 'Vinod Sharma'),
(18, 'ME', 'Pannu Singh'),
(21, 'EE', 'Nariender');

-- --------------------------------------------------------

--
-- Table structure for table `section_detail`
--

CREATE TABLE `section_detail` (
  `sec_id` int(10) NOT NULL,
  `section` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_detail`
--

INSERT INTO `section_detail` (`sec_id`, `section`) VALUES
(1, 'A1'),
(4, 'A2');

-- --------------------------------------------------------

--
-- Table structure for table `sem_detail`
--

CREATE TABLE `sem_detail` (
  `sem_id` int(20) NOT NULL,
  `sem` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem_detail`
--

INSERT INTO `sem_detail` (`sem_id`, `sem`) VALUES
(1, '1st'),
(2, '2nd'),
(3, '3rd'),
(4, '4th'),
(5, '5th'),
(6, '6th'),
(7, '7th'),
(8, '8th');

-- --------------------------------------------------------

--
-- Table structure for table `student_detail`
--

CREATE TABLE `student_detail` (
  `roll_no` int(25) NOT NULL,
  `stud_name` varchar(30) NOT NULL,
  `dep_fk` int(18) NOT NULL,
  `sem_fk` int(20) NOT NULL,
  `sec_fk` int(10) NOT NULL,
  `total` int(20) NOT NULL,
  `attend` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_detail`
--

INSERT INTO `student_detail` (`roll_no`, `stud_name`, `dep_fk`, `sem_fk`, `sec_fk`, `total`, `attend`) VALUES
(140100, 'Aanchal Mahajan', 13, 7, 1, 0, 0),
(140101, 'Aakansha Billowria ', 13, 7, 1, 0, 0),
(140102, 'Aasha ', 13, 7, 1, 0, 0),
(140103, 'Disha Vakani', 13, 7, 1, 0, 0),
(140104, 'Esha Gupta', 13, 7, 1, 0, 0),
(140105, 'Harvinder Singh', 13, 7, 1, 0, 0),
(140106, 'Jyoti Kumari', 13, 7, 1, 0, 0),
(140107, 'kamal', 13, 7, 1, 0, 0),
(140108, 'Luicy ', 13, 7, 1, 0, 0),
(140109, 'Poonam', 13, 7, 4, 0, 0),
(140110, 'Preeti Sharma', 13, 7, 4, 0, 0),
(140111, 'Sachin', 13, 7, 4, 0, 0),
(140112, 'Sambhav Mahajan', 13, 7, 4, 0, 0),
(140113, 'Shubam Rajput', 13, 7, 4, 0, 0),
(140114, 'Raj', 13, 7, 4, 0, 0),
(140115, 'Rahul', 13, 7, 4, 0, 0),
(140116, 'Tanu Rajput', 13, 7, 4, 0, 0),
(150100, 'Amisha Mahajan', 13, 5, 1, 3, 3),
(150101, 'Anita Hasndani', 13, 5, 1, 3, 3),
(150102, 'Aarti Mehra', 13, 5, 1, 3, 1),
(150103, 'Gurpreet kaur', 13, 5, 1, 3, 2),
(150104, 'Gurleen kaur', 13, 5, 1, 3, 3),
(150105, 'Harsh Vardhan', 13, 5, 1, 3, 2),
(150106, 'Lucky', 13, 5, 1, 3, 2),
(150107, 'Lakhvinder Singh', 13, 5, 1, 3, 2),
(150108, 'Krishna', 13, 5, 1, 3, 3),
(150109, 'komal', 13, 5, 1, 3, 1),
(150110, 'Kunal Rajput', 13, 5, 4, 0, 0),
(150111, 'Mohini Luthra', 13, 5, 4, 0, 0),
(150112, 'Mohit Sangotra', 13, 5, 4, 0, 0),
(150113, 'Naina Mahajan', 13, 5, 4, 0, 0),
(150114, 'Neetika Goeinka', 13, 5, 4, 0, 0),
(150115, 'Nisha Rajput', 13, 5, 4, 0, 0),
(150116, 'Pankaj', 13, 5, 4, 0, 0),
(150117, 'Tanishka', 13, 7, 4, 0, 0),
(160100, 'Aasha ', 13, 3, 1, 1, 1),
(160101, 'Aarti Mehra', 13, 3, 1, 1, 1),
(160102, 'Aanku ', 13, 3, 1, 1, 1),
(160103, 'Anaya Sharma', 13, 3, 1, 1, 0),
(160104, 'Ankit', 13, 3, 1, 1, 1),
(160105, 'Bhavna Singh', 13, 3, 1, 1, 1),
(160106, 'Bhavnish Sharma', 13, 3, 1, 1, 0),
(160107, 'Chahat', 13, 3, 1, 1, 1),
(160108, 'Deepika Sharma', 13, 3, 1, 1, 1),
(160109, 'Neha Manhotra', 13, 3, 1, 1, 0),
(160110, 'Manisha Verma', 13, 3, 4, 0, 0),
(160111, 'Mohit Sangotra', 13, 3, 4, 0, 0),
(160112, 'Pooja Mahajan', 13, 3, 4, 0, 0),
(160113, 'Parul Chauhan', 13, 3, 4, 0, 0),
(160114, 'Shruti  Joshi', 13, 3, 4, 0, 0),
(160115, 'Shakshi Rana', 13, 3, 4, 0, 0),
(160116, 'Shalini Manhotra', 13, 3, 4, 0, 0),
(170100, 'Sharman', 11, 1, 1, 4, 4),
(170101, 'Preeti Sharma', 11, 1, 1, 4, 3),
(170102, 'Shruti  Joshi', 11, 1, 1, 4, 1),
(170103, 'Akansha Mehra', 11, 1, 1, 4, 3),
(170104, 'Ankit Sharma', 11, 1, 1, 4, 3),
(170105, 'Nisha Rajput', 11, 1, 1, 4, 1),
(170106, 'Rohit Chadha', 11, 1, 1, 4, 2),
(170107, 'Meenakshi Mahajan', 11, 1, 1, 4, 2),
(170108, 'Prisha Billowria', 11, 1, 1, 4, 1),
(170109, 'Neetika Goeinka', 11, 1, 4, 0, 0),
(170110, 'Kiran Gupta', 11, 1, 4, 0, 0),
(170111, 'Luicy ', 11, 1, 4, 0, 0),
(170112, 'Kunal Rajput', 11, 1, 4, 0, 0),
(170113, 'Sakshi Rajput', 11, 1, 4, 0, 0),
(170114, 'Manish Sharma', 11, 1, 4, 0, 0),
(170115, 'Ritika Verma', 11, 1, 4, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject_alotted`
--

CREATE TABLE `subject_alotted` (
  `id` int(20) NOT NULL,
  `dname_fk` int(18) NOT NULL,
  `tname_fk` int(40) NOT NULL,
  `sem_fk` int(20) NOT NULL,
  `sec_fk` int(10) NOT NULL,
  `subject_fk` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_alotted`
--

INSERT INTO `subject_alotted` (`id`, `dname_fk`, `tname_fk`, `sem_fk`, `sec_fk`, `subject_fk`) VALUES
(17, 11, 10, 1, 1, 22),
(20, 13, 10, 3, 1, 32),
(21, 13, 10, 5, 1, 38),
(22, 13, 10, 3, 4, 33),
(23, 13, 2, 3, 4, 32),
(24, 13, 5, 3, 4, 34),
(25, 13, 2, 5, 1, 39),
(26, 13, 2, 7, 1, 40),
(27, 11, 4, 1, 1, 23),
(28, 13, 5, 5, 1, 36);

-- --------------------------------------------------------

--
-- Table structure for table `subject_detail`
--

CREATE TABLE `subject_detail` (
  `sub_id` int(20) NOT NULL,
  `dep_fk` int(18) NOT NULL,
  `sem_fk` int(20) NOT NULL,
  `sub_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_detail`
--

INSERT INTO `subject_detail` (`sub_id`, `dep_fk`, `sem_fk`, `sub_name`) VALUES
(20, 11, 1, 'Mathematics-1'),
(21, 11, 1, 'Physics'),
(22, 11, 1, 'C language'),
(23, 11, 1, 'English'),
(32, 13, 3, 'C++'),
(33, 13, 3, 'Data Structure'),
(34, 13, 3, 'COALP'),
(36, 13, 5, 'Big Data Analytics '),
(38, 13, 5, 'Software Engineering'),
(39, 13, 5, 'Java'),
(40, 13, 7, 'AI'),
(41, 13, 5, 'Software Engineering'),
(42, 11, 1, 'Human Value'),
(43, 13, 5, 'DAA'),
(44, 13, 7, 'Functional English-3'),
(45, 11, 1, 'EME'),
(46, 11, 1, 'Physics Lab');

-- --------------------------------------------------------

--
-- Table structure for table `t`
--

CREATE TABLE `t` (
  `t_id` int(40) NOT NULL,
  `username` varchar(50) NOT NULL,
  `qualification` varchar(80) DEFAULT NULL,
  `password` varchar(80) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t`
--

INSERT INTO `t` (`t_id`, `username`, `qualification`, `password`, `dob`, `gender`) VALUES
(1, 'Admin Master', 'M.tech', '$2y$10$QWMnH3siBvGMIU/IPG5rPeIGeDxsMAtXg1qcCJgM.fFehcD96miFm', '1990-03-12', 'Male'),
(2, 'Paramvir Singh', 'M.tech', '$2y$10$ZF13nF4Im5caz9tpUBNBM.xz.JjRgJtzwcDp3SbIdBdMgsHZs0t2K', '1990-03-12', 'Male'),
(4, 'Rajini Verma', 'M.A', '$2y$10$OYI47be2LUywYYo.b2Ukg.78GkI7QXr9B2f8UlkY6n44RzL7toBYu', '1985-03-12', 'Female'),
(5, 'Sanjiv Sharma', 'M.tech', '$2y$10$aQeEjoPqpv7O/KhvIUixE.bvTAvXA7COSoWkj3jKwEsuUpcVM0oBa', '1986-09-23', 'Male'),
(10, 'Sneha ', 'M.tech', '$2y$10$hMXizD9QpBgg1W.hTB670ecPW3AMGnUcHFPDUAifSv7R65TKw5Il6', '1992-02-12', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`d_id`),
  ADD UNIQUE KEY `UNIQUE` (`d_name`);

--
-- Indexes for table `section_detail`
--
ALTER TABLE `section_detail`
  ADD PRIMARY KEY (`sec_id`),
  ADD UNIQUE KEY `unique` (`section`);

--
-- Indexes for table `sem_detail`
--
ALTER TABLE `sem_detail`
  ADD PRIMARY KEY (`sem_id`),
  ADD UNIQUE KEY `sem` (`sem`);

--
-- Indexes for table `student_detail`
--
ALTER TABLE `student_detail`
  ADD PRIMARY KEY (`roll_no`),
  ADD KEY `dep_fk` (`dep_fk`),
  ADD KEY `sem_fk` (`sem_fk`),
  ADD KEY `sec_fk` (`sec_fk`);

--
-- Indexes for table `subject_alotted`
--
ALTER TABLE `subject_alotted`
  ADD PRIMARY KEY (`id`),
  ADD KEY `d_id` (`dname_fk`),
  ADD KEY `tname_fk` (`tname_fk`),
  ADD KEY `sem_fk` (`sem_fk`),
  ADD KEY `sec_fk` (`sec_fk`),
  ADD KEY `subject_fk` (`subject_fk`);

--
-- Indexes for table `subject_detail`
--
ALTER TABLE `subject_detail`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `dep_fk` (`dep_fk`),
  ADD KEY `subject_detail_ibfk_2` (`sem_fk`);

--
-- Indexes for table `t`
--
ALTER TABLE `t`
  ADD PRIMARY KEY (`t_id`),
  ADD UNIQUE KEY `UNIQUE` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `d_id` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `section_detail`
--
ALTER TABLE `section_detail`
  MODIFY `sec_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sem_detail`
--
ALTER TABLE `sem_detail`
  MODIFY `sem_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `subject_alotted`
--
ALTER TABLE `subject_alotted`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `subject_detail`
--
ALTER TABLE `subject_detail`
  MODIFY `sub_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `t`
--
ALTER TABLE `t`
  MODIFY `t_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_detail`
--
ALTER TABLE `student_detail`
  ADD CONSTRAINT `student_detail_ibfk_1` FOREIGN KEY (`sem_fk`) REFERENCES `sem_detail` (`sem_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_detail_ibfk_2` FOREIGN KEY (`dep_fk`) REFERENCES `department` (`d_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_detail_ibfk_3` FOREIGN KEY (`sec_fk`) REFERENCES `section_detail` (`sec_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject_alotted`
--
ALTER TABLE `subject_alotted`
  ADD CONSTRAINT `FOREIGN KEY` FOREIGN KEY (`dname_fk`) REFERENCES `department` (`d_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_alotted_ibfk_1` FOREIGN KEY (`tname_fk`) REFERENCES `t` (`t_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_alotted_ibfk_2` FOREIGN KEY (`sem_fk`) REFERENCES `sem_detail` (`sem_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_alotted_ibfk_3` FOREIGN KEY (`sec_fk`) REFERENCES `section_detail` (`sec_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_alotted_ibfk_4` FOREIGN KEY (`subject_fk`) REFERENCES `subject_detail` (`sub_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject_detail`
--
ALTER TABLE `subject_detail`
  ADD CONSTRAINT `subject_detail_ibfk_1` FOREIGN KEY (`dep_fk`) REFERENCES `department` (`d_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_detail_ibfk_2` FOREIGN KEY (`sem_fk`) REFERENCES `sem_detail` (`sem_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
