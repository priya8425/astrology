-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2023 at 02:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `astrology`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_unique_id` varchar(250) DEFAULT NULL,
  `admin_name` varchar(300) DEFAULT NULL,
  `admin_email_id` varchar(255) DEFAULT NULL,
  `admin_status` enum('Active','InActive') DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL,
  `admin_otp` int(20) DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `created_on` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `creation_ip` varchar(200) DEFAULT NULL,
  `modified_by` varchar(200) DEFAULT NULL,
  `modified_on` timestamp(6) NULL DEFAULT NULL ON UPDATE current_timestamp(6),
  `modified_ip` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_unique_id`, `admin_name`, `admin_email_id`, `admin_status`, `admin_password`, `admin_otp`, `created_by`, `created_on`, `creation_ip`, `modified_by`, `modified_on`, `modified_ip`) VALUES
(1, 'USER12345', 'priya yadav', 'yadavpriya1425@gmail.com', 'Active', '81dc9bdb52d04dc20036dbd8313ed055', 158307, NULL, '0000-00-00 00:00:00.000000', NULL, NULL, '2023-02-27 12:11:54.887892', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appointment_details`
--

CREATE TABLE `appointment_details` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` int(12) DEFAULT NULL,
  `service` varchar(1000) DEFAULT NULL,
  `appointment_time` time(6) NOT NULL DEFAULT current_timestamp(),
  `message` mediumtext DEFAULT NULL,
  `created_on` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `creation_ip` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `modified_on` timestamp(6) NULL DEFAULT NULL ON UPDATE current_timestamp(6),
  `modified_ip` varchar(100) DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment_details`
--

INSERT INTO `appointment_details` (`id`, `name`, `email`, `mobile`, `service`, `appointment_time`, `message`, `created_on`, `creation_ip`, `modified_by`, `modified_on`, `modified_ip`, `created_by`) VALUES
(1, 'sujata', 'suja12342@gmail.com', NULL, '2', '19:10:52.000000', 'testing', '2023-03-08 13:40:52.289925', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_details`
--

CREATE TABLE `blog_details` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(2000) DEFAULT NULL,
  `blog_description` mediumtext DEFAULT NULL,
  `file_type` enum('image','video') DEFAULT NULL,
  `image_file` varchar(200) DEFAULT NULL,
  `image_file_path` varchar(100) DEFAULT NULL,
  `video_file` varchar(1000) DEFAULT NULL,
  `video_file_path` varchar(100) DEFAULT NULL,
  `blog_status` enum('Active','InActive') DEFAULT NULL,
  `created_by` int(100) DEFAULT NULL,
  `created_on` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `creation_ip` int(100) DEFAULT NULL,
  `modified_by` int(100) DEFAULT NULL,
  `modified_on` timestamp(6) NULL DEFAULT NULL ON UPDATE current_timestamp(6),
  `modified_ip` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_details`
--

INSERT INTO `blog_details` (`blog_id`, `blog_title`, `blog_description`, `file_type`, `image_file`, `image_file_path`, `video_file`, `video_file_path`, `blog_status`, `created_by`, `created_on`, `creation_ip`, `modified_by`, `modified_on`, `modified_ip`) VALUES
(5, 'testing', '																														<span style=\"color: rgb(0, 0, 0); font-family: \"Open Sans\", sans-serif; background-color: rgba(0, 0, 0, 0.075);\">Aldus PageMaker </span><span style=\"background-color: rgba(0, 0, 0, 0.075); color: rgb(0, 0, 0); font-family: \"Open Sans\", sans-serif;\">text of the printing and typesetting industry.like Aldus PageMaker including versions of </span><span style=\"background-color: rgba(0, 0, 0, 0.075); color: rgb(0, 0, 0); font-family: \"Open Sans\", sans-serif;\">text of the </span><span style=\"background-color: rgba(0, 0, 0, 0.075); color: rgb(0, 0, 0); font-family: \"Open Sans\", sans-serif;\">Lorem Ipsum.</span>																														', 'image', 'pexel9.jpg', 'dist/blog_img/pexel9.jpg', NULL, NULL, 'Active', 0, '2023-03-06 13:11:44.453670', 0, 0, '2023-03-16 12:37:12.477755', 0),
(6, 'blog-1', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, sans-serif;\">simply dummy text of the printing and typesetting industry.like Aldus PageMaker including versions of&nbsp;</span><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, sans-serif;\">text of the&nbsp;</span><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, sans-serif;\">Lorem Ipsum.</span>', 'video', NULL, NULL, 'pexels.mp4', 'dist/blog_video/pexels.mp4', 'Active', 0, '2023-03-06 13:12:20.449677', 0, 0, '2023-03-16 12:31:19.503730', 0),
(8, 'Consectetur Adipiscing Elit Sedeiusmod Tempor Incididunt', '															<span style=\"color: rgb(0, 0, 0); font-family: \"Open Sans\", sans-serif;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.like Aldus PageMaker including versions of Lorem Ipsum.</span>															', 'image', 'astrologer-blog3.jpg', 'dist/blog_img/astrologer-blog3.jpg', NULL, NULL, 'Active', 0, '2023-03-15 06:20:47.478028', 0, 0, '2023-03-16 12:31:48.151490', 0),
(9, 'liConsectetur Adipiscing Elit Sedeiusmod Tempor Incididunt', '																																																																											<span style=\"color: rgb(0, 0, 0); font-family: \"Open Sans\", sans-serif;\"> is simply </span><span style=\"color: rgb(0, 0, 0); font-family: \"Open Sans\", sans-serif;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.like Aldus PageMaker including versions of Lorem Ipsum.</span>																																																																											', 'image', 'astrologer-blog4.jpg', 'dist/blog_img/astrologer-blog4.jpg', 'pexels - Copy.mp4', 'dist/blog_video/pexels - Copy.mp4', 'Active', 0, '2023-03-15 06:26:12.093906', 0, 0, '2023-03-16 12:35:43.354933', 0),
(11, 'blog Title', '															<span open=\"\" sans\",=\"\" sans-serif;=\"\" background-color:=\"\" rgba(0,=\"\" 0,=\"\" 0.075);\"=\"\" style=\"color: rgb(0, 0, 0); font-family: \" sans-serif;\"=\"\">PageMaker&nbsp;</span><span open=\"\" sans\",=\"\" sans-serif;\"=\"\" style=\"color: rgb(0, 0, 0); font-family: \" sans-serif;=\"\" background-color:=\"\" rgba(0,=\"\" 0,=\"\" 0.075);\"=\"\">text of&nbsp; and typesetting industry like Aldus PageMaker including versions of&nbsp;</span><span open=\"\" sans\",=\"\" sans-serif;\"=\"\" style=\"color: rgb(0, 0, 0); font-family: \" sans-serif;=\"\" background-color:=\"\" rgba(0,=\"\" 0,=\"\" 0.075);\"=\"\">text of the&nbsp;</span><span open=\"\" sans\",=\"\" sans-serif;\"=\"\" style=\"color: rgb(0, 0, 0); font-family: \" sans-serif;=\"\" background-color:=\"\" rgba(0,=\"\" 0,=\"\" 0.075);\"=\"\">Lorem Ipsum industry like Aldus.</span>															', 'image', 'blog5.jpg', 'dist/blog_img/blog5.jpg', NULL, NULL, 'Active', 0, '2023-03-16 12:39:18.432902', 0, 0, '2023-03-16 12:42:54.861736', 0),
(12, 'Adipiscing Elit Sedeiusmod Tempor Incididunt', '<span open=\"\" sans\",=\"\" sans-serif;\"=\"\" style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, sans-serif;\">simply&nbsp;</span><span open=\"\" sans\",=\"\" sans-serif;\"=\"\" style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, sans-serif;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry.like Aldus PageMaker including versions of Lorem Ipsum.</span>', 'image', 'astrologer-blog1.jpg', 'dist/blog_img/astrologer-blog1.jpg', NULL, NULL, 'Active', 0, '2023-03-16 12:42:02.239400', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment_details`
--

CREATE TABLE `comment_details` (
  `comment_id` int(11) NOT NULL,
  `blog_id` int(11) DEFAULT NULL,
  `comment_by` varchar(1000) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `comment_message` varchar(5000) DEFAULT NULL,
  `comment_on` timestamp(6) NULL DEFAULT current_timestamp(6),
  `comment_status` enum('Active','InActive') DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_on` timestamp(6) NULL DEFAULT current_timestamp(6),
  `creation_ip` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `modified_on` timestamp(6) NULL DEFAULT NULL ON UPDATE current_timestamp(6),
  `modified_ip` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment_details`
--

INSERT INTO `comment_details` (`comment_id`, `blog_id`, `comment_by`, `email`, `comment_message`, `comment_on`, `comment_status`, `created_by`, `created_on`, `creation_ip`, `modified_by`, `modified_on`, `modified_ip`) VALUES
(1, 5, 'kajal', 'kajal123@gmail.com', 'testingg', '2023-03-15 07:50:45.005651', NULL, NULL, '2023-03-15 07:50:45.005651', NULL, NULL, '2023-03-15 10:19:57.486237', NULL),
(3, 10, 'hhhh', 'divya13@gmail.com', 'hhh', '2023-03-15 10:50:09.313601', NULL, NULL, '2023-03-15 10:50:09.313601', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(3000) DEFAULT NULL,
  `message` varchar(5000) DEFAULT NULL,
  `created_by` varchar(200) NOT NULL,
  `created_on` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `creation_ip` varchar(100) DEFAULT NULL,
  `modified_by` varchar(200) DEFAULT NULL,
  `modified_on` timestamp(6) NULL DEFAULT NULL ON UPDATE current_timestamp(6),
  `modified_ip` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `name`, `email`, `subject`, `message`, `created_by`, `created_on`, `creation_ip`, `modified_by`, `modified_on`, `modified_ip`) VALUES
(3, 'sneha', 'sneha@123', 'testing', 'hiiii', '', '2023-02-27 12:23:02.337748', NULL, NULL, NULL, NULL),
(8, 'priya', 'yadavpriya1425@gmail.com', 'testing', 'astro', '', '2023-03-05 17:36:50.434705', NULL, NULL, NULL, NULL),
(9, 'kajal', 'yadavpriya1425@gmail.com', 'hii', 'jjj', '', '2023-03-08 13:30:31.065052', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials_details`
--

CREATE TABLE `testimonials_details` (
  `id` int(11) NOT NULL,
  `testimonial_name` varchar(255) NOT NULL,
  `testimonial_email` varchar(255) DEFAULT NULL,
  `testimonial_message` varchar(500) NOT NULL,
  `testimonial_status` enum('Active','InActive') DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `created_on` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `creation_ip` varchar(200) DEFAULT NULL,
  `modified_by` varchar(200) DEFAULT NULL,
  `modified_on` timestamp(6) NULL DEFAULT NULL ON UPDATE current_timestamp(6),
  `modified_ip` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials_details`
--

INSERT INTO `testimonials_details` (`id`, `testimonial_name`, `testimonial_email`, `testimonial_message`, `testimonial_status`, `created_by`, `created_on`, `creation_ip`, `modified_by`, `modified_on`, `modified_ip`) VALUES
(4, 'Ankit', 'Ankit1234@gmail.com', 'temor erat  elitr rebum at clita.', 'Active', NULL, '2023-03-06 05:55:49.748060', NULL, 'USER12345', '2023-03-06 12:11:19.158746', '::1'),
(5, 'shreya', 'shr1234@gmail.com', 'hello', NULL, NULL, '2023-03-08 13:34:04.855424', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_unique_id` (`admin_unique_id`),
  ADD UNIQUE KEY `admin_email_id` (`admin_email_id`);

--
-- Indexes for table `appointment_details`
--
ALTER TABLE `appointment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_details`
--
ALTER TABLE `blog_details`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `comment_details`
--
ALTER TABLE `comment_details`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials_details`
--
ALTER TABLE `testimonials_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment_details`
--
ALTER TABLE `appointment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_details`
--
ALTER TABLE `blog_details`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comment_details`
--
ALTER TABLE `comment_details`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testimonials_details`
--
ALTER TABLE `testimonials_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
