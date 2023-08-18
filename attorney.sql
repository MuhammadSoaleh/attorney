-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2023 at 09:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attorney`
--

-- --------------------------------------------------------

--
-- Table structure for table `avvo_com_legal_sample`
--

CREATE TABLE `avvo_com_legal_sample` (
  `address` varchar(225) DEFAULT NULL,
  `categories` varchar(225) DEFAULT NULL,
  `image_count` varchar(225) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `payment_option` varchar(225) DEFAULT NULL,
  `phone` varchar(205) DEFAULT NULL,
  `profile_id` varchar(225) DEFAULT NULL,
  `profile_url` varchar(225) DEFAULT NULL,
  `uniq_id` varchar(322) DEFAULT NULL,
  `video_count` varchar(225) DEFAULT NULL,
  `website` varchar(225) DEFAULT NULL,
  `date` varchar(225) DEFAULT NULL,
  `HR` varchar(225) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `age` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `avvo_com_legal_sample`
--

INSERT INTO `avvo_com_legal_sample` (`address`, `categories`, `image_count`, `name`, `payment_option`, `phone`, `profile_id`, `profile_url`, `uniq_id`, `video_count`, `website`, `date`, `HR`, `image`, `age`) VALUES
('SONY Pictures Entertainment 10202 Washington Blvd Culver City, CA 90232', 'Home  ,  Business Attorneys  ,  California  ,  Culver City  ', '', 'Leah Esther Weil', '', 'Office: 310-244-4692', '90232-ca-leah-weil-351662', 'http://www.avvo.com/attorneys/90232-ca-leah-weil-351662.html', 'f6a72495a2014c3ed62f3055c29487b8', '', '/attorneys/90232-ca-leah-weil-351662/share.html', '5/15/2000', 'attorney', 'image', '22'),
('10202 W Washington Blvd Culver City, CA 90232', 'Home  ,  Employment / Labor Attorneys  ,  California  ,  Culver City  ', '', 'Lee Anne Steinberg', '', 'Office: 310-244-6807', '90232-ca-lee-steinberg-370767', 'http://www.avvo.com/attorneys/90232-ca-lee-steinberg-370767.html', '39720e2beaabbb89b11eaca3abf117a2', '', '/attorneys/90232-ca-lee-steinberg-370767/share.html', '5/15/2000', 'attorney', 'image', '23'),
('9770 Culver Blvd Culver City, CA 90232', 'Home  ,  Employment / Labor Attorneys  ,  California  ,  Culver City  ', '', 'Lisa Anne Vidra', '', 'Office: 310-253-5660', '90232-ca-lisa-vidra-108758', 'http://www.avvo.com/attorneys/90232-ca-lisa-vidra-108758.html', '27217fed1b2fd4b56b9000d6a2f748a3', '', '/attorneys/90232-ca-lisa-vidra-108758/share.html', '5/15/2000', 'attorney', 'image', '28'),
('10202 Washington Blvd Culver City, CA 90232', 'Home  ,  Intellectual Property Law Attorneys  ,  California  ,  Culver City  ', '', 'Luis Edward Allen', '', 'Office: 310-244-7851', '90232-ca-luis-allen-313328', 'http://www.avvo.com/attorneys/90232-ca-luis-allen-313328.html', '124b247c0f7f8d4e784eadc2865c85d9', '', '', '5/15/2000', 'attorney', 'image', '30'),
('10202 W Washington Blvd Culver City, CA 90232', 'Home  ,  Employment / Labor Attorneys  ,  California  ,  Culver City  ', '', 'Mary Courtney Burke', '', 'Office: 310-244-8288', '90232-ca-mary-burke-325872', 'http://www.avvo.com/attorneys/90232-ca-mary-burke-325872.html', '8faa21b0cfe105aa03f278c9acb41d47', '', '', '5/15/2000', 'attorney', 'image', '35'),
('Sony Pictures Ent SPP-5406 10202 Washington Blvd Culver City, CA 90232', 'Home  ,  Intellectual Property Law Attorneys  ,  California  ,  Culver City  ', '', 'Michael Leonard Frisby', '', 'Office: 310-244-8997', '90232-ca-michael-frisby-309062', 'http://www.avvo.com/attorneys/90232-ca-michael-frisby-309062.html', 'a010887cb1c84177da27e3f8a4410c07', '', '/attorneys/90232-ca-michael-frisby-309062/share.html', '5/15/2000', 'attorney', 'image', '40'),
('10202 W Washington Blvd Culver City, CA 90232', 'Home  ,  Intellectual Property Law Attorneys  ,  California  ,  Culver City  ', '', 'Misara C Shao', '', 'Office: 310-244-7250', '90232-ca-misara-shao-304823', 'http://www.avvo.com/attorneys/90232-ca-misara-shao-304823.html', '61731966bd954f23bc2efc2acf944af7', '', '', '5/15/2000', 'attorney', 'image', '45'),
('10202 Washington Blvd Culver City, CA 90232', 'Home  ,  Business Attorneys  ,  California  ,  Culver City  ', '', 'Ophir David Finkelthal', '', 'Office: 310-244-8117', '90232-ca-ophir-finkelthal-1219510', 'http://www.avvo.com/attorneys/90232-ca-ophir-finkelthal-1219510.html', '8736a4865682b296b611d02f40bf2249', '', '/attorneys/90232-ca-ophir-finkelthal-1219510/share.html', '5/15/2000', 'attorney', 'image', '28'),
('Sony Pictures Ent SPP 6206 10202 Washington Blvd Culver City, CA 90232', 'Home  ,  Intellectual Property Law Attorneys  ,  California  ,  Culver City  ', '', 'Patricia S. Ostrowski', '', 'Office: 310-244-4477', '90232-ca-patricia-ostrowski-186268', 'http://www.avvo.com/attorneys/90232-ca-patricia-ostrowski-186268.html', 'ddaee8b6311f679c4bf1c100d8115d18', '', '/attorneys/90232-ca-patricia-ostrowski-186268/share.html', '5/15/2000', 'attorney', 'image', '29'),
('10202 W Washington Blvd Culver City, CA 90232', 'Home  ,  Intellectual Property Law Attorneys  ,  California  ,  Culver City  ', '', 'Rodney Stephen Davis', '', 'Office: 310-244-5853', '90232-ca-rodney-davis-380585', 'http://www.avvo.com/attorneys/90232-ca-rodney-davis-380585.html', '4f34aa7f32c75da82c89f11e2fdf8855', '', '/attorneys/90232-ca-rodney-davis-380585/share.html', '5/15/2000', 'attorney', 'image', '27'),
('Sony Pictures Entertainment 10202 W Washington SPP 5634 Culver City, CA 90232', 'Home  ,  Intellectual Property Law Attorneys  ,  California  ,  Culver City  ', '', 'Sarah Elisabeth Kiefer', '', 'Office: 310-244-7071', '90232-ca-sarah-kiefer-191526', 'http://www.avvo.com/attorneys/90232-ca-sarah-kiefer-191526.html', 'ca5e284a7020ef5a9a9617c75948c9b5', '', '/attorneys/90232-ca-sarah-kiefer-191526/share.html', '5/15/2000', 'attorney', 'image', '35'),
('Thalberg 2527 10202 Washington Blvd Culver City, CA 90232', 'Home  ,  Antitrust / Trade Attorneys  ,  California  ,  Culver City  ', '', 'Sean William Jaquez', '', 'Office: 310-244-2600', '90232-ca-sean-jaquez-88253', 'http://www.avvo.com/attorneys/90232-ca-sean-jaquez-88253.html', '467c9fc5301381c7118899373e634162', '', '/attorneys/90232-ca-sean-jaquez-88253/share.html', '5/15/2000', 'attorney', 'image', '36'),
('Sony Pictures Entertainment SPP 1118 10202 Washington Blvd Culver City, CA 90232', 'Home  ,  Business Attorneys  ,  California  ,  Culver City  ', '', 'Sharon Ann Borak', '', 'Office: 310-244-6361', '90232-ca-sharon-borak-127882', 'http://www.avvo.com/attorneys/90232-ca-sharon-borak-127882.html', '8756dbeb638a515e1e59564d6ca94c24', '', '', '5/15/2000', 'attorney', 'image', '37'),
('4261 Baldwin Avenue Culver City, CA 90232', 'Home  ,  Family Law Attorneys  ,  California  ,  Culver City  ', '', 'Stanford Lauchlin Cameron', '', 'Office: 310-720-0821', '90232-ca-stanford-cameron-289515', 'http://www.avvo.com/attorneys/90232-ca-stanford-cameron-289515.html', '253cd253571553f886209b8de735a937', '', '/attorneys/90232-ca-stanford-cameron-289515/share.html', '5/15/2000', 'attorney', 'image', '38'),
('Attn: Alex Im,Turner Bldg 312a 10202 W Washington Blvd Culver City, CA 90232', 'Home  ,  Tax Lawyers  ,  California  ,  Culver City  ', '', 'Sung Alexander Im', '', 'Office: 310-244-8127', '90232-ca-sung-im-55677', 'http://www.avvo.com/attorneys/90232-ca-sung-im-55677.html', '2d973eeb93af2d200b200ddc53ba1425', '', '/attorneys/90232-ca-sung-im-55677/share.html', '5/15/2000', 'attorney', 'image', '39'),
('10202 Washington Blvd Culver City, CA 90232', 'Home  ,  Intellectual Property Law Attorneys  ,  California  ,  Culver City  ', '', 'Suzanne Lyn Emerson', '', 'Office: 310-244-4619', '90232-ca-suzanne-emerson-53822', 'http://www.avvo.com/attorneys/90232-ca-suzanne-emerson-53822.html', '2eae669770535ddbc392b1bbabb889a9', '', '/attorneys/90232-ca-suzanne-emerson-53822/share.html', '5/15/2000', 'attorney', 'image', '40'),
('Sony Pictures TV Inc 10202 W Washington Blvd Culver City, CA 90232', 'Home  ,  Intellectual Property Law Attorneys  ,  California  ,  Culver City  ', '', 'Suzanne Prete', '', 'Office: 310-244-4000', '90232-ca-suzanne-prete-262938', 'http://www.avvo.com/attorneys/90232-ca-suzanne-prete-262938.html', '5f15d3e0d99bfdec5b2850d908891138', '', '/attorneys/90232-ca-suzanne-prete-262938/share.html', '5/15/2000', 'attorney', 'image', '41'),
('10202 W Washington Blvd Culver City, CA 90232', 'Home  ,  Antitrust / Trade Attorneys  ,  California  ,  Culver City  ', '', 'Vicki R. Solmon', '', 'Office: 310-244-8527', '90232-ca-vicki-solmon-260028', 'http://www.avvo.com/attorneys/90232-ca-vicki-solmon-260028.html', '9387326bd429ee3b2603c308574cd56e', '', '/attorneys/90232-ca-vicki-solmon-260028/share.html', '5/15/2000', 'attorney', 'image', '42'),
('SONY Pictures Entertainment 10202 Washington Blvd Culver City, CA 90232', 'Home  ,  Business Attorneys  ,  California  ,  Culver City  ', '', 'Leah Esther Weil', '', 'Office: 310-244-4692', '90232-ca-leah-weil-351662', 'http://www.avvo.com/attorneys/90232-ca-leah-weil-351662.html', 'f6a72495a2014c3ed62f3055c29487b8', '', '/attorneys/90232-ca-leah-weil-351662/share.html', '5/15/2000', 'attorney', 'image', '22'),
('10202 W Washington Blvd Culver City, CA 90232', 'Home  ,  Employment / Labor Attorneys  ,  California  ,  Culver City  ', '', 'Lee Anne Steinberg', '', 'Office: 310-244-6807', '90232-ca-lee-steinberg-370767', 'http://www.avvo.com/attorneys/90232-ca-lee-steinberg-370767.html', '39720e2beaabbb89b11eaca3abf117a2', '', '/attorneys/90232-ca-lee-steinberg-370767/share.html', '5/15/2000', 'attorney', 'image', '23'),
('9770 Culver Blvd Culver City, CA 90232', 'Home  ,  Employment / Labor Attorneys  ,  California  ,  Culver City  ', '', 'Lisa Anne Vidra', '', 'Office: 310-253-5660', '90232-ca-lisa-vidra-108758', 'http://www.avvo.com/attorneys/90232-ca-lisa-vidra-108758.html', '27217fed1b2fd4b56b9000d6a2f748a3', '', '/attorneys/90232-ca-lisa-vidra-108758/share.html', '5/15/2000', 'attorney', 'image', '28'),
('10202 Washington Blvd Culver City, CA 90232', 'Home  ,  Intellectual Property Law Attorneys  ,  California  ,  Culver City  ', '', 'Luis Edward Allen', '', 'Office: 310-244-7851', '90232-ca-luis-allen-313328', 'http://www.avvo.com/attorneys/90232-ca-luis-allen-313328.html', '124b247c0f7f8d4e784eadc2865c85d9', '', '', '5/15/2000', 'attorney', 'image', '30'),
('10202 W Washington Blvd Culver City, CA 90232', 'Home  ,  Employment / Labor Attorneys  ,  California  ,  Culver City  ', '', 'Mary Courtney Burke', '', 'Office: 310-244-8288', '90232-ca-mary-burke-325872', 'http://www.avvo.com/attorneys/90232-ca-mary-burke-325872.html', '8faa21b0cfe105aa03f278c9acb41d47', '', '', '5/15/2000', 'attorney', 'image', '35'),
('Sony Pictures Ent SPP-5406 10202 Washington Blvd Culver City, CA 90232', 'Home  ,  Intellectual Property Law Attorneys  ,  California  ,  Culver City  ', '', 'Michael Leonard Frisby', '', 'Office: 310-244-8997', '90232-ca-michael-frisby-309062', 'http://www.avvo.com/attorneys/90232-ca-michael-frisby-309062.html', 'a010887cb1c84177da27e3f8a4410c07', '', '/attorneys/90232-ca-michael-frisby-309062/share.html', '5/15/2000', 'attorney', 'image', '40'),
('10202 W Washington Blvd Culver City, CA 90232', 'Home  ,  Intellectual Property Law Attorneys  ,  California  ,  Culver City  ', '', 'Misara C Shao', '', 'Office: 310-244-7250', '90232-ca-misara-shao-304823', 'http://www.avvo.com/attorneys/90232-ca-misara-shao-304823.html', '61731966bd954f23bc2efc2acf944af7', '', '', '5/15/2000', 'attorney', 'image', '45'),
('10202 Washington Blvd Culver City, CA 90232', 'Home  ,  Business Attorneys  ,  California  ,  Culver City  ', '', 'Ophir David Finkelthal', '', 'Office: 310-244-8117', '90232-ca-ophir-finkelthal-1219510', 'http://www.avvo.com/attorneys/90232-ca-ophir-finkelthal-1219510.html', '8736a4865682b296b611d02f40bf2249', '', '/attorneys/90232-ca-ophir-finkelthal-1219510/share.html', '5/15/2000', 'attorney', 'image', '28'),
('Sony Pictures Ent SPP 6206 10202 Washington Blvd Culver City, CA 90232', 'Home  ,  Intellectual Property Law Attorneys  ,  California  ,  Culver City  ', '', 'Patricia S. Ostrowski', '', 'Office: 310-244-4477', '90232-ca-patricia-ostrowski-186268', 'http://www.avvo.com/attorneys/90232-ca-patricia-ostrowski-186268.html', 'ddaee8b6311f679c4bf1c100d8115d18', '', '/attorneys/90232-ca-patricia-ostrowski-186268/share.html', '5/15/2000', 'attorney', 'image', '29'),
('10202 W Washington Blvd Culver City, CA 90232', 'Home  ,  Intellectual Property Law Attorneys  ,  California  ,  Culver City  ', '', 'Rodney Stephen Davis', '', 'Office: 310-244-5853', '90232-ca-rodney-davis-380585', 'http://www.avvo.com/attorneys/90232-ca-rodney-davis-380585.html', '4f34aa7f32c75da82c89f11e2fdf8855', '', '/attorneys/90232-ca-rodney-davis-380585/share.html', '5/15/2000', 'attorney', 'image', '27'),
('Sony Pictures Entertainment 10202 W Washington SPP 5634 Culver City, CA 90232', 'Home  ,  Intellectual Property Law Attorneys  ,  California  ,  Culver City  ', '', 'Sarah Elisabeth Kiefer', '', 'Office: 310-244-7071', '90232-ca-sarah-kiefer-191526', 'http://www.avvo.com/attorneys/90232-ca-sarah-kiefer-191526.html', 'ca5e284a7020ef5a9a9617c75948c9b5', '', '/attorneys/90232-ca-sarah-kiefer-191526/share.html', '5/15/2000', 'attorney', 'image', '35'),
('Thalberg 2527 10202 Washington Blvd Culver City, CA 90232', 'Home  ,  Antitrust / Trade Attorneys  ,  California  ,  Culver City  ', '', 'Sean William Jaquez', '', 'Office: 310-244-2600', '90232-ca-sean-jaquez-88253', 'http://www.avvo.com/attorneys/90232-ca-sean-jaquez-88253.html', '467c9fc5301381c7118899373e634162', '', '/attorneys/90232-ca-sean-jaquez-88253/share.html', '5/15/2000', 'attorney', 'image', '36'),
('Sony Pictures Entertainment SPP 1118 10202 Washington Blvd Culver City, CA 90232', 'Home  ,  Business Attorneys  ,  California  ,  Culver City  ', '', 'Sharon Ann Borak', '', 'Office: 310-244-6361', '90232-ca-sharon-borak-127882', 'http://www.avvo.com/attorneys/90232-ca-sharon-borak-127882.html', '8756dbeb638a515e1e59564d6ca94c24', '', '', '5/15/2000', 'attorney', 'image', '37'),
('4261 Baldwin Avenue Culver City, CA 90232', 'Home  ,  Family Law Attorneys  ,  California  ,  Culver City  ', '', 'Stanford Lauchlin Cameron', '', 'Office: 310-720-0821', '90232-ca-stanford-cameron-289515', 'http://www.avvo.com/attorneys/90232-ca-stanford-cameron-289515.html', '253cd253571553f886209b8de735a937', '', '/attorneys/90232-ca-stanford-cameron-289515/share.html', '5/15/2000', 'attorney', 'image', '38'),
('Attn: Alex Im,Turner Bldg 312a 10202 W Washington Blvd Culver City, CA 90232', 'Home  ,  Tax Lawyers  ,  California  ,  Culver City  ', '', 'Sung Alexander Im', '', 'Office: 310-244-8127', '90232-ca-sung-im-55677', 'http://www.avvo.com/attorneys/90232-ca-sung-im-55677.html', '2d973eeb93af2d200b200ddc53ba1425', '', '/attorneys/90232-ca-sung-im-55677/share.html', '5/15/2000', 'attorney', 'image', '39'),
('10202 Washington Blvd Culver City, CA 90232', 'Home  ,  Intellectual Property Law Attorneys  ,  California  ,  Culver City  ', '', 'Suzanne Lyn Emerson', '', 'Office: 310-244-4619', '90232-ca-suzanne-emerson-53822', 'http://www.avvo.com/attorneys/90232-ca-suzanne-emerson-53822.html', '2eae669770535ddbc392b1bbabb889a9', '', '/attorneys/90232-ca-suzanne-emerson-53822/share.html', '5/15/2000', 'attorney', 'image', '40'),
('Sony Pictures TV Inc 10202 W Washington Blvd Culver City, CA 90232', 'Home  ,  Intellectual Property Law Attorneys  ,  California  ,  Culver City  ', '', 'Suzanne Prete', '', 'Office: 310-244-4000', '90232-ca-suzanne-prete-262938', 'http://www.avvo.com/attorneys/90232-ca-suzanne-prete-262938.html', '5f15d3e0d99bfdec5b2850d908891138', '', '/attorneys/90232-ca-suzanne-prete-262938/share.html', '5/15/2000', 'attorney', 'image', '41'),
('10202 W Washington Blvd Culver City, CA 90232', 'Home  ,  Antitrust / Trade Attorneys  ,  California  ,  Culver City  ', '', 'Vicki R. Solmon', '', 'Office: 310-244-8527', '90232-ca-vicki-solmon-260028', 'http://www.avvo.com/attorneys/90232-ca-vicki-solmon-260028.html', '9387326bd429ee3b2603c308574cd56e', '', '/attorneys/90232-ca-vicki-solmon-260028/share.html', '5/15/2000', 'attorney', 'image', '42'),
('$address', NULL, NULL, '$name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$hr', NULL, '$age');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ID` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `select_topic` varchar(225) NOT NULL,
  `message` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ID`, `name`, `email`, `select_topic`, `message`) VALUES
(1, 'Soaleh', 'muhammad_ehsan_91@yahoo.com', 'Topic Two', '15348');

-- --------------------------------------------------------

--
-- Table structure for table `index`
--

CREATE TABLE `index` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(225) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `message` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `index`
--

INSERT INTO `index` (`ID`, `firstname`, `lastname`, `email`, `message`) VALUES
(0, '', '', 'psoaleh63@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `indexemail`
--

CREATE TABLE `indexemail` (
  `ID` int(11) NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `indexemail`
--

INSERT INTO `indexemail` (`ID`, `email`) VALUES
(1, 'psoaleh63@gmail.com'),
(2, 'wajheejamil@wordpress.com');

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE `meeting` (
  `ID` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `place` varchar(225) NOT NULL,
  `lawyer` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`ID`, `name`, `age`, `gender`, `email`, `date`, `time`, `place`, `lawyer`) VALUES
(1, 'Soaleh', 22, 'male', 'muhammad_ehsan_91@yahoo.com', '2023-07-12', '15:34:00', 'royal palace', ''),
(2, 'Soaleh', 22, 'male', 'muhammad_ehsan_91@yahoo.com', '2023-07-12', '16:21:00', 'royal palace', 'criminal');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `r_id` int(11) NOT NULL,
  `r_name` varchar(225) DEFAULT NULL,
  `r_email` varchar(225) DEFAULT NULL,
  `r_password` varchar(225) DEFAULT NULL,
  `admin` varchar(225) DEFAULT NULL,
  `attorney` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`r_id`, `r_name`, `r_email`, `r_password`, `admin`, `attorney`) VALUES
(1, 'Soaleh', 'psoaleh63@gmail.com', 'Lion24', 'admin', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `index`
--
ALTER TABLE `index`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `indexemail`
--
ALTER TABLE `indexemail`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `indexemail`
--
ALTER TABLE `indexemail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
