-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 08:54 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_details`
--

CREATE TABLE `academic_details` (
  `stud_id` int(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sem1_cgpa` float NOT NULL,
  `sem2_cgpa` float NOT NULL,
  `sem3_cgpa` float NOT NULL,
  `sem4_cgpa` float NOT NULL,
  `sem5_cgpa` float NOT NULL,
  `sem6_cgpa` float NOT NULL,
  `avg_cgpa` float NOT NULL,
  `sem4_kt` int(10) NOT NULL,
  `sem5_kt` int(10) NOT NULL,
  `sem6_kt` int(10) NOT NULL,
  `gap` int(5) NOT NULL,
  `gap_certi` varchar(30) DEFAULT NULL,
  `is_academic_completed` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `username`, `password`) VALUES
(1, 'vesit_placement', 'abcd@1234');

-- --------------------------------------------------------

--
-- Table structure for table `applied_student`
--

CREATE TABLE `applied_student` (
  `apply_id` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `c_id` int(10) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_name` varchar(20) NOT NULL,
  `city` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_name`, `city`) VALUES
('Google', 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `c_id` int(5) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `for_dept` varchar(5) NOT NULL,
  `vacancies` int(10) NOT NULL,
  `eligibility_creteria` float NOT NULL,
  `intake` int(10) NOT NULL,
  `description` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `max_salary` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_name` varchar(20) NOT NULL,
  `stree` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_name`, `stree`, `city`) VALUES
('Rinku', 'M.G ROAD', 'Mumbai'),
('Sharan', 'Sion', 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_no` int(11) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_des` varchar(2000) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `venue` varchar(20) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_no`, `event_name`, `event_des`, `date`, `time`, `venue`, `updated_at`, `created_at`) VALUES
(7, 'Placement Campaign', 'V.E.S. Institute of Technology was established in 1984, with the aim of providing professional education in the field of Engineering. It has been imparting quality education in the field of technology for the last 28 years which has been getting top preference by students in admission. The Institute is recognized by AICTE (All India Council of Technical Education) and affiliated to the Mumbai University.', '2/12/2019', '5:00 PM', 'Auditorium', '2019-06-21 18:29:02', '2019-06-21 18:29:02'),
(8, 'Placement Campaign', 'V.E.S.I.T Training and Placement Cell caters for enhancing not only the employability skills but also the overall development of the student’s personality. On Campus and Pre-placement training programmes such as Aptitude Tests are conducted along with Seminars based on the overall Campus Recruitment Process, Skill Set Analysis, Steering the Interview and Transactional Analysis. These activities enable us to identify the strengths and weakness of an individual candidate and help us select strategies for improvement.', '30/12/2019', '5:00 PM', 'Amphi', '2019-06-21 18:29:25', '2019-06-21 18:29:25');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `stud_id` int(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `branch` varchar(50) NOT NULL,
  `email_otp` int(10) DEFAULT NULL,
  `email_status` tinyint(1) NOT NULL DEFAULT '0',
  `acct_status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`stud_id`, `email`, `password`, `branch`, `email_otp`, `email_status`, `acct_status`, `created_at`, `updated_at`) VALUES
(1, '2017.kuldeep.khalsa@ves.ac.in', '$2y$10$esghlQIlr/vhNlNsesLbiu7tAkpIXxixJKcQVANAXtf3zHRnmP7mq', 'CMPN', 4273, 1, 1, '2019-12-01 17:56:06.696576', '2019-12-01 12:25:19.000000');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `stud_id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `branch` varchar(50) NOT NULL,
  `is_resume` varchar(3) DEFAULT NULL,
  `resume_path` varchar(50) DEFAULT NULL,
  `is_photo` varchar(3) DEFAULT NULL,
  `photo_path` varchar(50) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`stud_id`, `email`, `branch`, `is_resume`, `resume_path`, `is_photo`, `photo_path`, `updated_at`, `created_at`) VALUES
(1, '2017.kuldeep.khalsa@ves.ac.in', 'CMPN', NULL, NULL, NULL, NULL, '2019-12-01 20:01:26', '2019-12-01 14:30:48');

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `Sr_no` int(11) NOT NULL,
  `branch` varchar(11) NOT NULL,
  `total_students` int(11) NOT NULL,
  `applied_students` int(11) NOT NULL,
  `placed_students` int(11) NOT NULL,
  `for_higher_studies` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`Sr_no`, `branch`, `total_students`, `applied_students`, `placed_students`, `for_higher_studies`) VALUES
(1, 'CMPN', 180, 100, 80, 20),
(2, 'IT', 80, 60, 55, 20),
(3, 'MCA', 170, 100, 95, 80),
(4, 'ETRX', 120, 100, 75, 20),
(5, 'EXTC', 120, 90, 45, 30),
(6, 'INST', 80, 80, 75, 10);

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `stud_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `mother_name` varchar(20) NOT NULL,
  `phone_personal` bigint(20) NOT NULL,
  `phone_guardian` bigint(20) DEFAULT NULL,
  `phone_parent` bigint(20) NOT NULL,
  `dob` date DEFAULT NULL,
  `uid` varchar(20) DEFAULT NULL,
  `blood_group` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `alter_mail` varchar(30) DEFAULT NULL,
  `shift` varchar(30) DEFAULT NULL,
  `year_of_joining` int(10) DEFAULT NULL,
  `address_line_1` varchar(40) DEFAULT NULL,
  `address_line_2` varchar(40) DEFAULT NULL,
  `address_corres` varchar(100) NOT NULL,
  `student_details_completed` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_details`
--
ALTER TABLE `academic_details`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `applied_student`
--
ALTER TABLE `applied_student`
  ADD PRIMARY KEY (`apply_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_name`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_name`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_no`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`Sr_no`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`stud_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_details`
--
ALTER TABLE `academic_details`
  MODIFY `stud_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applied_student`
--
ALTER TABLE `applied_student`
  MODIFY `apply_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `c_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `stud_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `Sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
