-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 07:59 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `anti_ragging_complaint`
--

CREATE TABLE `anti_ragging_complaint` (
  `victim_id` int(10) NOT NULL,
  `victim_category` varchar(70) NOT NULL,
  `victim_name` varchar(200) NOT NULL,
  `victim_mobileNo` int(20) NOT NULL,
  `victim_email` text NOT NULL,
  `victim_gender` varchar(10) NOT NULL,
  `victim_caste` varchar(30) NOT NULL,
  `victim_state` varchar(40) NOT NULL,
  `victim_clg_name` varchar(50) NOT NULL,
  `victim_clg_pin` int(7) NOT NULL,
  `victim_address` varchar(200) NOT NULL,
  `victim_ragging_details` varchar(600) NOT NULL,
  `victim_clg_id` varchar(7) NOT NULL,
  `Status` varchar(30) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anti_ragging_complaint`
--

INSERT INTO `anti_ragging_complaint` (`victim_id`, `victim_category`, `victim_name`, `victim_mobileNo`, `victim_email`, `victim_gender`, `victim_caste`, `victim_state`, `victim_clg_name`, `victim_clg_pin`, `victim_address`, `victim_ragging_details`, `victim_clg_id`, `Status`) VALUES
(1, 'jdfkhseuj', 'Samiksha', 2147483647, 'samlok@gmail.com', 'Gender', 'tyu	', 'Maharashtra', 'jkug', 410401, 'Kaveri hostel lonavala', 'WebAll the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over ', '445679', ''),
(3, 'jdfkhseuj', 'Samiksha', 2147483647, 'samlok@gmail.com', 'Gender', 'tyu	', 'Maharashtra', 'jkug', 410401, 'Kaveri hostel lonavala', 'WebAll the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over ', '445670', ''),
(5, 'jdfkhseuj', 'Samiksha', 2147483647, 'samlok@gmail.com', 'female', 'abc	', 'Maharashtra', 'jkug', 410401, 'Kaveri hostel lonavala', 'WebAll the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over ', '445677', ''),
(7, 'jdfkhseuj', 'Samiksha', 2147483647, 'samlok@gmail.com', 'female', 'ry	', 'Maharashtra', 'abc', 410401, 'Kaveri hostel lonavala', 'WebAll the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over ', '445671', ''),
(8, 'jdfkhseuj', 'Samiksha', 2147483647, 'samlok@gmail.com', 'female', 'ry	', 'Maharashtra', 'abc', 410401, 'Kaveri hostel lonavala', 'WebAll the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over ', '445672', 'final report generated'),
(9, 'hhjv', 'fsf', 2147483647, 'satyansh123@gmail.com', 'Gender', 'abc	', 'Maharashtra', 'abc', 400086, '1/7,ANUBHAVTA SHIVNATH GOSAVI CHWAL,PARSHIWADI', 'gr6ujgkhjn ', '789076', 'final report generated'),
(10, 'jdfkhseuj', 'Samiksha', 2147483647, 'samlok@gmail.com', 'female', 'hgfukt	', 'Maharashtra', 'SIT Lonavala', 410401, 'Kaveri hostel lonavala', 'giyktchj', '8789087', 'Pending'),
(11, 'Ragging', 'Rutuja Mindhe', 2147483647, 'rutujamindhe@gmail.com', 'female', 'open	', 'Maharashtra', 'Sinhgad Institute of Technology', 40086, 'Nakshatra Phase-II Purna Nagar', 'had an emergency issue ', '7216543', 'Pending'),
(17, 'sexual harrasement', 'hello Moto', 2147483647, 'samikshalokhande.siotit@gmail.com', 'female', 'CLOSE	', 'Maharashtra', 'JSPM', 411019, 'Nakshatra Phase-II Purna Nagar, Shivsai Chowk CDC chikhali', 'had an emergency issue ', '980987B', 'Pending'),
(19, 'sexual harrasement', 'hello Moto', 2147483647, 'samikshalokhande.siotit@gmail.com', 'female', 'CLOSE	', 'Maharashtra', 'JSPM', 411019, 'Nakshatra Phase-II Purna Nagar, Shivsai Chowk CDC chikhali', 'had an emergency issue ', '980987v', 'Pending'),
(22, 'sexual harrasement', 'hello Moto', 2147483647, 'samikshalokhande.siotit@gmail.com', 'female', 'CLOSE	', 'Maharashtra', 'JSPM', 411019, 'Nakshatra Phase-II Purna Nagar, Shivsai Chowk CDC chikhali', 'had an emergency issue ', '980987R', 'Pending'),
(24, 'sexual harrasement', 'hello Moto', 2147483647, 'samikshalokhande.siotit@gmail.com', 'female', 'CLOSE	', 'Maharashtra', 'JSPM', 411019, 'Nakshatra Phase-II Purna Nagar, Shivsai Chowk CDC chikhali', 'had an emergency issue ', '980987P', 'Pending'),
(25, 'sexual harrasement', 'hello Moto', 2147483647, 'rutujamindhe@gmail.com', 'female', 'CLOSE	', 'Maharashtra', 'JSPM', 411019, 'Nakshatra Phase-II Purna Nagar, Shivsai Chowk CDC chikhali', 'had an emergency issue ', '980987L', 'Pending'),
(26, 'sexual harrasement', 'hello Moto', 2147483647, 'rutujamindhe@gmail.com', 'female', 'CLOSE	', 'Maharashtra', 'JSPM', 411019, 'Nakshatra Phase-II Purna Nagar, Shivsai Chowk CDC chikhali', 'had an emergency issue ', '980987M', 'Pending'),
(28, 'sexual harrasement', 'hello Moto', 2147483647, 'rutujamindhe@gmail.com', 'female', 'CLOSE	', 'Maharashtra', 'JSPM', 411019, 'Nakshatra Phase-II Purna Nagar, Shivsai Chowk CDC chikhali', 'had an emergency issue ', '980987N', 'Pending'),
(29, 'sexual harrasement', 'hello Moto', 2147483647, 'rutujamindhe@gmail.com', 'female', 'CLOSE	', 'Maharashtra', 'JSPM', 411019, 'Nakshatra Phase-II Purna Nagar, Shivsai Chowk CDC chikhali', 'had an emergency issue ', '980987O', 'Pending'),
(30, 'sexual harrasement', 'hello Moto', 2147483647, 'rutujamindhe@gmail.com', 'female', 'CLOSE	', 'Maharashtra', 'JSPM', 411019, 'Nakshatra Phase-II Purna Nagar, Shivsai Chowk CDC chikhali', 'had an emergency issue ', '980987C', 'Pending'),
(32, 'sexual harrasement', 'hello Moto', 2147483647, 'rutujamindhe@gmail.com', 'female', 'CLOSE	', 'Maharashtra', 'JSPM', 411019, 'Nakshatra Phase-II Purna Nagar, Shivsai Chowk CDC chikhali', 'had an emergency issue ', '980987D', 'Pending'),
(34, 'sexual harrasement', 'hello Moto', 2147483647, 'rutujamindhe@gmail.com', 'female', 'CLOSE	', 'Maharashtra', 'JSPM', 411019, 'Nakshatra Phase-II Purna Nagar, Shivsai Chowk CDC chikhali', 'had an emergency issue ', '980987E', 'Pending'),
(35, 'sexual harrasement', 'hello Moto', 2147483647, 'rutujamindhe@gmail.com', 'female', 'CLOSE	', 'Maharashtra', 'JSPM', 411019, 'Nakshatra Phase-II Purna Nagar, Shivsai Chowk CDC chikhali', 'had an emergency issue ', '980987F', 'Pending'),
(44, 'sexual harassment', 'Pooja Bhatt', 2147483647, 'samikshalokhande.siotit@gmail.com', 'female', 'SC	', 'Maharashtra', 'SKN', 411019, 'Nakshatra Phase-II Purna Nagar, Shivsai Chowk CDC chikhali', 'cdfghybjunkjhgfdsdfghjjhngbvfcdfvgbhnjmkijmhngfbvdcsxdcfvgbthynjumkyjhngbfvd', '7216543', 'Pending'),
(45, 'sexual harrasement', 'Pooja Bhatt', 2147483647, 'samikshalokhande.siotit@gmail.com', 'female', 'open	', 'Maharashtra', 'JSPM', 411019, 'Nakshatra Phase-II Purna Nagar, Shivsai Chowk CDC chikhali', 'kdjsboefuljea', '7216543', 'In Progress'),
(46, 'sexual harassment', 'Samiksha Ravindra Lokhande Lokhande', 2147483647, 'rupali4601@gmail.com', 'female', 'open	', 'Maharashtra', 'SIT', 411019, 'Nakshatra Phase-II Purna Nagar, Shivsai Chowk CDC chikhali', 'sdzxfcghjkljhgrdtyuhjk', '7216543', 'Pending'),
(47, 'sexual harassment', 'Samiksha Ravindra Lokhande Lokhande', 2147483647, 'samikshalokhande.siotit@gmail.com', 'female', 'open	', 'Maharashtra', 'SIT', 411019, 'Nakshatra Phase-II Purna Nagar, Shivsai Chowk CDC chikhali', 'wqertfgyhjkmsdfcgvhbjnfghj', '5465415', 'Pending'),
(48, 'sexual harassment', 'Samiksha Ravindra Lokhande Lokhande', 2147483647, 'samikshalokhande.siotit@gmail.com', 'female', 'open	', 'Maharashtra', 'SIT', 411019, 'Nakshatra Phase-II Purna Nagar, Shivsai Chowk CDC chikhali', 'wqertfgyhjkmsdfcgvhbjnfghj', '5465415', 'Pending'),
(49, 'sexual harassment', 'Samiksha Ravindra Lokhande Lokhande', 2147483647, 'samikshalokhande.siotit@gmail.com', 'female', 'open	', 'Maharashtra', 'SIT', 411019, 'Nakshatra Phase-II Purna Nagar, Shivsai Chowk CDC chikhali', 'wqertfgyhjkmsdfcgvhbjnfghj', '5465415', 'Pending'),
(50, 'sexual harrasement', 'Samiksha Lokhande', 2147483647, 'rupali4601@gmail.com', 'male', 'open	', 'Maharashtra', 'JSPM', 400086, 'Nakshatra Phase-II Purna Nagar', 'cdfghybjunkjhgfdsdfghjjhngbvfcdfvgbhnjmkijmhngfbvdcsxdcfvgbthynjumkyjhngbfvd', '7216543', 'Pending'),
(51, 'sexual harrasement', 'Samiksha Lokhande', 2147483647, 'rupali4601@gmail.com', 'male', 'open	', 'Maharashtra', 'JSPM', 400086, 'Nakshatra Phase-II Purna Nagar', 'cdfghybjunkjhgfdsdfghjjhngbvfcdfvgbhnjmkijmhngfbvdcsxdcfvgbthynjumkyjhngbfvd', '7216543', 'Pending'),
(52, 'sexual harrasement', 'Samiksha Lokhande', 2147483647, 'rupali4601@gmail.com', 'male', 'open	', 'Maharashtra', 'JSPM', 400086, 'Nakshatra Phase-II Purna Nagar', 'cdfghybjunkjhgfdsdfghjjhngbvfcdfvgbhnjmkijmhngfbvdcsxdcfvgbthynjumkyjhngbfvd', '7216543', 'Pending'),
(53, 'sexual harrasement', 'Samiksha Lokhande', 2147483647, 'rupali4601@gmail.com', 'female', 'skdgabe	', 'Maharashtra', 'JSPM', 400086, 'Nakshatra Phase-II Purna Nagar', 'kdjsboefuljea', '7216543', 'Pending'),
(54, 'sexual harrasement', 'Samiksha Lokhande', 2147483647, 'rupali4601@gmail.com', 'female', 'skdgabe	', 'Maharashtra', 'JSPM', 400086, 'Nakshatra Phase-II Purna Nagar', 'kdjsboefuljea', '7216543', 'Pending'),
(55, 'sexual harrasement', 'Samiksha Lokhande', 2147483647, 'rupali4601@gmail.com', 'female', 'CLOSE	', 'Maharashtra', 'sit', 400086, 'Nakshatra Phase-II Purna Nagar', 'cgvhbjnkm.,sdfg', '7216543', 'Pending'),
(56, 'sexual harrasement', 'Samiksha Lokhande', 2147483647, 'rupali4601@gmail.com', 'female', 'CLOSE	', 'Maharashtra', 'sit', 400086, 'Nakshatra Phase-II Purna Nagar', 'cgvhbjnkm.,sdfg', '7216543', 'Pending'),
(57, 'sexual harrasement', 'Samiksha Lokhande', 2147483647, 'rupali4601@gmail.com', 'female', 'CLOSE	', 'Maharashtra', 'sit', 400086, 'Nakshatra Phase-II Purna Nagar', 'cgvhbjnkm.,sdfg', '7216543', 'Pending'),
(58, 'sexual harrasement', 'Samiksha Lokhande', 2147483647, 'rupali4601@gmail.com', 'female', 'CLOSE	', 'Maharashtra', 'sit', 400086, 'Nakshatra Phase-II Purna Nagar', 'cgvhbjnkm.,sdfg', '7216543', 'Pending'),
(59, 'sexual harrasement', 'Samiksha Lokhande', 2147483647, 'rupali4601@gmail.com', 'female', 'ah	', 'Maharashtra', 'JSPM', 400086, 'Nakshatra Phase-II Purna Nagar', 'asfdghjkl', '7216543', 'Pending'),
(60, 'sexual harrasement', 'Samiksha Lokhande', 2147483647, 'rupali4601@gmail.com', 'female', 'ah	', 'Maharashtra', 'JSPM', 400086, 'Nakshatra Phase-II Purna Nagar', 'asfdghjkl', '7216543', 'Pending'),
(61, 'sexual harrasement', 'Samiksha Lokhande', 2147483647, 'rupali4601@gmail.com', 'female', 'ah	', 'Maharashtra', 'JSPM', 400086, 'Nakshatra Phase-II Purna Nagar', 'asfdghjkl', '7216543', 'Pending'),
(62, 'sexual harrasement', 'Samiksha Lokhande', 2147483647, 'rupali4601@gmail.com', 'female', 'ah	', 'Maharashtra', 'JSPM', 400086, 'Nakshatra Phase-II Purna Nagar', 'asfdghjkl', '7216543', 'Pending'),
(63, 'sexual harrasement', 'Samiksha Lokhande', 2147483647, 'rupali4601@gmail.com', 'female', 'ah	', 'Maharashtra', 'JSPM', 400086, 'Nakshatra Phase-II Purna Nagar', 'asfdghjkl', '7216543', 'Pending'),
(64, 'sexual harrasement', 'Samiksha Lokhande', 2147483647, 'rupali4601@gmail.com', 'Gender', 'SC	', 'Maharashtra', 'Sinhgad Institute of Technology', 400086, 'Nakshatra Phase-II Purna Nagar', 'dfghjkyutretyuiok', '7216543', 'Pending'),
(65, 'sexual harrasement', 'Samiksha Lokhande', 2147483647, 'rupali4601@gmail.com', 'Gender', 'SC	', 'Maharashtra', 'Sinhgad Institute of Technology', 400086, 'Nakshatra Phase-II Purna Nagar', 'dfghjkyutretyuiok', '7216543', 'Pending'),
(66, 'sexual harrasement', 'Samiksha Lokhande', 2147483647, 'rupali4601@gmail.com', 'Gender', 'SC	', 'Maharashtra', 'Sinhgad Institute of Technology', 400086, 'Nakshatra Phase-II Purna Nagar', 'dfghjkyutretyuiok', '7216543', 'Pending'),
(67, 'sexual harrasement', 'Samiksha Lokhande', 2147483647, 'rupali4601@gmail.com', 'female', 'open	', 'Maharashtra', 'JSPM', 400086, 'Nakshatra Phase-II Purna Nagar', 'asdfghjk', '7216543', 'Pending'),
(68, 'sexual harrasement', 'Samiksha Lokhande', 2147483647, 'rupali4601@gmail.com', 'female', 'open	', 'Maharashtra', 'JSPM', 400086, 'Nakshatra Phase-II Purna Nagar', 'asdfghjk', '7216543', 'Pending'),
(69, 'sexual harrasement', 'Samiksha Lokhande', 2147483647, 'rupali4601@gmail.com', 'female', 'open	', 'Maharashtra', 'JSPM', 400086, 'Nakshatra Phase-II Purna Nagar', 'vbnm,./', '7216543', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `committe`
--

CREATE TABLE `committe` (
  `c_name` varchar(50) NOT NULL,
  `c_id` int(10) NOT NULL,
  `c_pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `committe`
--

INSERT INTO `committe` (`c_name`, `c_id`, `c_pass`) VALUES
('Rupali', 1, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `c_id` int(11) NOT NULL,
  `a_no` bigint(12) NOT NULL,
  `location` varchar(50) NOT NULL,
  `type_crime` varchar(50) NOT NULL,
  `d_o_c` date NOT NULL,
  `description` varchar(7000) NOT NULL,
  `inc_status` varchar(50) DEFAULT 'Unassigned',
  `pol_status` varchar(50) DEFAULT 'null',
  `p_id` varchar(50) DEFAULT 'Null',
  `fakecomplaint` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`c_id`, `a_no`, `location`, `type_crime`, `d_o_c`, `description`, `inc_status`, `pol_status`, `p_id`, `fakecomplaint`) VALUES
(1, 123214521452, 'Tollygunge', 'Robbery', '2018-12-06', 'My Home has been Robbed.', 'Assigned', 'ChargeSheet Filed', 't101', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_name` varchar(50) NOT NULL,
  `f_email` varchar(50) NOT NULL,
  `f_message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_name`, `f_email`, `f_message`) VALUES
('zxcvb', 'satyansh123@gmail.com', 'xvcbn');

-- --------------------------------------------------------

--
-- Table structure for table `head`
--

CREATE TABLE `head` (
  `h_id` varchar(50) NOT NULL,
  `h_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `head`
--

INSERT INTO `head` (`h_id`, `h_pass`) VALUES
('head@kp', 'head');

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `p_name` varchar(50) NOT NULL,
  `p_id` varchar(50) NOT NULL,
  `spec` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `p_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`p_name`, `p_id`, `spec`, `location`, `p_pass`) VALUES
('Rutuja', '1', 'murder', 'Tollygunge', '123456'),
('Manish Singh', 'a101', 'Murder', 'Anandapur', 'manish'),
('Jay Singh', 'a102', 'All', 'Anandapur', 'jay'),
('Suvendu Ghosh', 't101', 'Robbery', 'Tollygunge', 'suvendu');

-- --------------------------------------------------------

--
-- Table structure for table `police_station`
--

CREATE TABLE `police_station` (
  `i_id` varchar(50) NOT NULL,
  `i_name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `i_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police_station`
--

INSERT INTO `police_station` (`i_id`, `i_name`, `location`, `i_pass`) VALUES
('1', 'Samiksha', 'Pune', '123456'),
('shah@anandapur', 'Shahbaz', 'Anandapur', 'shahbaz'),
('shivam@tollygunge', 'Shivam', 'Tollygunge', 'shivam');

-- --------------------------------------------------------

--
-- Table structure for table `update_case`
--

CREATE TABLE `update_case` (
  `c_id` int(11) NOT NULL,
  `d_o_u` timestamp NOT NULL DEFAULT current_timestamp(),
  `case_update` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `update_case`
--

INSERT INTO `update_case` (`c_id`, `d_o_u`, `case_update`) VALUES
(1, '2018-12-17 10:32:06', 'Criminal Verified'),
(1, '2018-12-17 10:32:12', 'Criminal Caught'),
(1, '2018-12-17 10:32:15', 'Criminal Interrogated'),
(1, '2018-12-17 10:32:21', 'Criminal Accepted the Crime'),
(1, '2018-12-17 10:32:26', 'Criminal Charged'),
(1, '2018-12-17 10:32:51', 'The case has been moved to Court.'),
(1, '2018-12-17 10:32:59', 'Criminal Verified');

-- --------------------------------------------------------

--
-- Table structure for table `update_victim_case`
--

CREATE TABLE `update_victim_case` (
  `victim_id` int(11) NOT NULL,
  `d_o_u` datetime NOT NULL DEFAULT current_timestamp(),
  `victim_case_update` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `update_victim_case`
--

INSERT INTO `update_victim_case` (`victim_id`, `d_o_u`, `victim_case_update`) VALUES
(0, '2023-02-15 19:30:21', 'sdsd'),
(0, '2023-02-15 19:32:02', 'tyu'),
(0, '2023-02-15 19:32:11', 'Criminal Verified'),
(0, '2023-02-15 19:32:13', 'Criminal Verified'),
(0, '2023-02-15 19:32:16', 'Criminal Accepted the Crime'),
(0, '2023-02-16 22:00:08', 'close'),
(0, '2023-02-16 22:00:27', 'Criminal Verified'),
(0, '2023-02-16 22:00:32', 'Criminal Caught'),
(0, '2023-02-16 22:17:29', 'Criminal Verified'),
(0, '2023-02-16 22:25:52', 'Criminal Verified'),
(0, '2023-02-16 22:28:07', 'Criminal Verified'),
(8, '2023-02-16 23:32:51', 'Criminal Interrogated'),
(8, '2023-02-16 23:33:00', 'jkfauf'),
(8, '2023-02-16 23:33:08', 'hv'),
(8, '2023-02-16 23:33:23', 'Criminal Verified'),
(8, '2023-02-16 23:55:40', 'hv'),
(8, '2023-02-16 23:56:25', 'Criminal Verified'),
(8, '2023-02-16 23:56:38', 'Criminal Verified'),
(9, '2023-02-17 00:07:36', 'Criminal Verified'),
(9, '2023-02-17 00:07:41', 'Criminal Verified'),
(9, '2023-02-17 00:23:25', 'abcd'),
(8, '2023-02-17 00:27:00', 'abcd'),
(0, '2023-02-17 23:47:42', 'abcd'),
(0, '2023-02-17 23:47:51', 'Criminal Verified'),
(0, '2023-02-17 23:47:56', 'hv'),
(45, '2023-03-19 15:17:56', 'Criminal Interrogated'),
(45, '2023-03-19 15:18:02', 'Criminal Charged'),
(45, '2023-03-20 10:51:06', 'Criminal Interrogated');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_name` varchar(50) NOT NULL,
  `u_id` varchar(50) NOT NULL,
  `u_pass` varchar(50) NOT NULL,
  `u_addr` varchar(100) NOT NULL,
  `a_no` bigint(12) NOT NULL,
  `gen` varchar(15) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `Banned` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_name`, `u_id`, `u_pass`, `u_addr`, `a_no`, `gen`, `mob`, `Banned`) VALUES
('Satyansh Kumar', 'satyansh123@gmail.com', 'satyansh', 'Ranchi', 123214521452, 'Male', 9854123654, 0),
('Samiksha Lokhande', 'samikshalokhande.siotit@gmail.com', '123456', 'lonaavala', 879789890980, 'Female', 9930623713, 0),
('hello moto', 'rutujamindhe@gmail.com', '123456', 'mumbai', 879789890986, 'Female', 8668525661, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v`
-- (See below for the actual view)
--
CREATE TABLE `v` (
`c_id` int(11)
,`fakecomplaint` int(11)
,`Banned` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `v`
--
DROP TABLE IF EXISTS `v`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v`  AS   (select `complaint`.`c_id` AS `c_id`,`complaint`.`fakecomplaint` AS `fakecomplaint`,`user`.`Banned` AS `Banned` from (`complaint` join `user`) where `complaint`.`a_no` = `user`.`a_no`)  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anti_ragging_complaint`
--
ALTER TABLE `anti_ragging_complaint`
  ADD PRIMARY KEY (`victim_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `police_station`
--
ALTER TABLE `police_station`
  ADD PRIMARY KEY (`i_id`),
  ADD UNIQUE KEY `location` (`location`);

--
-- Indexes for table `update_case`
--
ALTER TABLE `update_case`
  ADD UNIQUE KEY `d_o_u` (`d_o_u`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`a_no`),
  ADD UNIQUE KEY `u_id` (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anti_ragging_complaint`
--
ALTER TABLE `anti_ragging_complaint`
  MODIFY `victim_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
