-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2017 at 03:21 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `disease_id` varchar(5) NOT NULL,
  `disease_name` varchar(25) NOT NULL,
  `symptoms` varchar(50) NOT NULL,
  `severity` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`disease_id`, `disease_name`, `symptoms`, `severity`) VALUES
('1', 'fever', 'Increased Body Temperature', 'Medium');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_details`
--

CREATE TABLE `doctor_details` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(25) NOT NULL,
  `specialisation` varchar(25) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_details`
--

INSERT INTO `doctor_details` (`doctor_id`, `doctor_name`, `specialisation`, `contact`, `email`) VALUES
(1, 'Arjun', 'Cardiologist', '5587742145', 'arjun@gmail.com'),
(2, 'Uday', 'Neurologist', '5587745265', 'uday@gmail.com'),
(3, 'Kumar', 'Pediatritian', '7874589852', 'kumar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `medicine_id` int(11) NOT NULL,
  `medicine_name` varchar(25) NOT NULL,
  `disease` varchar(25) NOT NULL,
  `dosage` varchar(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`medicine_id`, `medicine_name`, `disease`, `dosage`, `description`) VALUES
(1, 'crocin', 'fever', '240 mg', 'Common Paracetamol tablet');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `email`, `password`, `salt`) VALUES
(1, 'admin', 'admin@admin.com', '446dec5f7b65b62d0f2430016536762676d69b5409d20d871b73bf8dfcdac5b35e0168cb778ce2143054fa723946817d85422e21a9f3780f53a9b412c660d7fb', '3dc38454f954149555d44e52d5f1788b901501bce1b2b335bc06fedd467095829114707e7de1279944cc853990a5dfea6e0ca48164f2d0e0802a16c2fbd24159'),
(2, 'rahul', 'rahul@rahul.com', 'c03630dc4dd6391c503b20d41c9bbebe01d319875f73c2c307fbca87773495bdcdff591993aa4af4cfa2804494e147ca904fd7ec491ce5dbf8d05a093d5e3193', 'b917c76bd3a1dadc530d3d5f198e99456382407357e22003de4ce479efe51e3b0716f100196ea1294fac78323fe31623d60e341ce721b42268947094875753d9'),
(3, 'aditya', 'aditya@aditya.com', '4f9c8173878e00c5f01158eae4dd9b5630038c3fb3b139b18413a831b6fd9e43f66cce265961074638350f54b19596dfb351ba2da3c8b93eb735f209591c5829', '8cbcdaa6e780ba942dd7703af652db43bc6553da503984d209afbec2d540643773af90f532059924df93eef3f906703f8f0cc06c200d494794401caaf6a9836e'),
(4, 'shreya', 'shreya@shreya.com', 'd52b3af1cad624bbf459d8648fb06cf8d33a31ed5195140138249243618b732b81c40af990977547b7767e7c57c8aa0fdd002c356eb7744cc5f71cdd84dedda7', 'e9d91ff4ef1a44e648ce6dbce13cb600e4e189e86024a93bf5b50d0e7e054b70ec306b09d35d23b8dee6f70ec46f443d25f2df5aa487cc4e57332b7a7454ecc2');

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `patient_id` int(5) NOT NULL,
  `patient_name` varchar(25) NOT NULL,
  `disease` varchar(25) NOT NULL,
  `medicine_name` varchar(25) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`patient_id`, `patient_name`, `disease`, `medicine_name`, `contact`, `email`) VALUES
(1, 'Rahul', 'fever', 'crocin', '9988998897', 'rahul@rahul.com'),
(2, 'aditya', 'Common Cold', 'cetzine', '9977556688', 'aditya@aditya.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`disease_id`);

--
-- Indexes for table `doctor_details`
--
ALTER TABLE `doctor_details`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`medicine_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor_details`
--
ALTER TABLE `doctor_details`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
