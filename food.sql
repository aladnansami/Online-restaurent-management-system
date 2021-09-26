-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2021 at 08:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `id` int(11) NOT NULL,
  `orderid` int(6) NOT NULL,
  `deliEmail` varchar(25) NOT NULL,
  `assign_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`id`, `orderid`, `deliEmail`, `assign_at`) VALUES
(1, 0, '', '2021-09-10 01:13:57'),
(2, 9, 'delivery@gmail.com', '2021-09-10 01:18:18'),
(3, 14, 'delivery@gmail.com', '2021-09-10 02:10:49'),
(4, 15, 'salsabil@gmail.com', '2021-09-10 11:55:43'),
(5, 18, 'salsabil@gmail.com', '2021-09-10 20:29:14'),
(6, 20, 'delivery@gmail.com', '2021-09-11 13:56:17');

-- --------------------------------------------------------

--
-- Table structure for table `bookedseat`
--

CREATE TABLE `bookedseat` (
  `id` int(11) NOT NULL,
  `table_id` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `booked_for` datetime DEFAULT NULL,
  `booked_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookedseat`
--

INSERT INTO `bookedseat` (`id`, `table_id`, `email`, `booked_for`, `booked_at`) VALUES
(46, '001-(4 people)', 'tahrimkabir321@gmail.com', '2021-09-24 17:53:00', '2021-09-09 17:53:33'),
(47, '001-(4 people)', 'tahrimkabir321@gmail.com', '2021-09-09 20:54:00', '2021-09-09 17:54:28'),
(48, '001-(4 people)', 'tahrimkabir321@gmail.com', '2021-10-02 17:55:00', '2021-09-09 17:55:05'),
(49, '001-(4 people)', 'tahrimkabir321@gmail.com', '2021-09-11 17:55:00', '2021-09-09 17:55:39'),
(50, '001-(4 people)', 'tahrimkabir321@gmail.com', '2021-09-11 17:56:00', '2021-09-09 17:56:38'),
(51, '001-(4 people)', 'tahrimkabir321@gmail.com', '2021-09-25 17:58:00', '2021-09-09 17:58:27'),
(52, '001-(4 people)', 'tahrimkabir321@gmail.com', '2021-10-03 17:58:00', '2021-09-09 17:58:57'),
(53, '001-(4 people)', 'tahrimkabir321@gmail.com', '2021-10-02 17:59:00', '2021-09-09 17:59:16'),
(54, '001-(4 people)', 'tahrimkabir321@gmail.com', '2021-09-25 18:00:00', '2021-09-09 18:00:27'),
(55, '001-(4 people)', 'tahrimkabir321@gmail.com', '2021-09-18 18:00:00', '2021-09-09 18:00:50'),
(56, '001-(4 people)', 'tahrimkabir321@gmail.com', '2021-09-17 18:01:00', '2021-09-09 18:01:09'),
(57, '001-(4 people)', 'tahrimkabir321@gmail.com', '2021-09-19 18:01:00', '2021-09-09 18:01:43'),
(58, '002-(5 people)', 'tahrimkabir321@gmail.com', '2021-10-02 18:12:00', '2021-09-09 18:12:44'),
(59, '002-(5 people)', 'disunisu@gmail.com', '2021-09-24 03:40:00', '2021-09-09 23:40:32'),
(60, '001-(4 people)', 'disunisu@gmail.com', '2021-09-11 02:09:00', '2021-09-10 02:09:08'),
(61, '001-(4 people)', 'disunisu@gmail.com', '2021-09-25 15:22:00', '2021-09-11 12:19:35'),
(62, '001-(4 people)', 'disunisu@gmail.com', '2021-09-24 21:58:00', '2021-09-11 21:58:22'),
(63, '002-(5 people)', 'tahrimkabir321@gmail.com', '2021-10-23 11:53:00', '2021-09-13 11:53:15'),
(64, '001-(4 people)', 'tahrimkabir321@gmail.com', '2021-09-13 14:53:00', '2021-09-13 11:53:25'),
(65, '002-(5 people)', 'tahrimkabir321@gmail.com', '2021-09-13 14:00:00', '2021-09-13 11:53:43'),
(66, '001-(4 people)', 'tahrimkabir321@gmail.com', '2021-09-13 14:00:00', '2021-09-13 11:53:53'),
(67, '001-(4 people)', 'tahrimkabir321@gmail.com', '2021-09-14 02:00:00', '2021-09-13 11:54:13'),
(68, '002-(5 people)', 'tahrimkabir321@gmail.com', '2021-09-14 02:00:00', '2021-09-13 11:56:16'),
(69, '001-(4 people)', 'tahrimkabir321@gmail.com', '2021-09-14 02:00:00', '2021-09-13 11:58:02'),
(70, '001-(4 people)', 'tahrimkabir321@gmail.com', '2021-09-14 02:10:00', '2021-09-13 11:58:19'),
(71, '001-(4 people)', 'tahrimkabir321@gmail.com', '0000-00-00 00:00:00', '2021-09-13 11:58:20'),
(72, '001-(4 people)', 'tahrimkabir321@gmail.com', '2021-09-14 02:20:00', '2021-09-13 11:58:38');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `fid` int(25) NOT NULL,
  `category` varchar(25) NOT NULL,
  `food` varchar(25) NOT NULL,
  `price` int(11) NOT NULL,
  `cart_by` varchar(30) NOT NULL,
  `cart_at` datetime NOT NULL DEFAULT current_timestamp(),
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `fid`, `category`, `food`, `price`, `cart_by`, `cart_at`, `image`) VALUES
(32, 29, 'Breakfast', 'Mango Juice', 20, 'aladnan21@gmail.com', '2021-09-09 13:17:54', 'menu-9.jpg'),
(35, 35, 'Lunch', 'Fruit with butter', 167, 'aladnan21@gmail.com', '2021-09-09 13:18:03', 'menu-8.jpg'),
(36, 36, 'Breakfast', 'Chicken Burgar', 189, 'aladnan21@gmail.com', '2021-09-09 16:52:02', 'dish-1.png'),
(37, 42, 'Evening', 'Chiken Momo', 340, 'aladnan21@gmail.com', '2021-09-09 16:52:08', 'about-img.png'),
(38, 43, 'Breakfast', 'Full Chiken Fry', 400, 'aladnan21@gmail.com', '2021-09-09 16:52:12', 'home-img-2.png'),
(48, 28, 'Breakfast', 'Dosa', 120, 'nazerinkabir@gmail.com', '2021-09-11 13:51:54', 'menu-3.jpg'),
(49, 29, 'Breakfast', 'Mango Juice', 20, 'nazerinkabir@gmail.com', '2021-09-11 13:52:05', 'menu-9.jpg'),
(93, 33, 'Breakfast', 'Butter cup cake', 70, 'disunisu@gmail.com', '2021-09-11 23:40:16', 'menu-6.jpg'),
(94, 28, 'Breakfast', 'Dosa', 120, 'disunisu@gmail.com', '2021-09-12 00:32:25', 'menu-3.jpg'),
(145, 35, 'Lunch', 'Fruit with butter', 167, 'tahrimkabir321@gmail.com', '2021-09-14 11:03:10', 'menu-8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(35) NOT NULL,
  `add_by` varchar(25) NOT NULL,
  `add_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `add_by`, `add_at`) VALUES
(1, 'Breakfast', 'admin', '2021-09-07 13:06:24'),
(2, 'Lunch', 'admin', '2021-09-07 13:50:15'),
(3, 'Dinner', 'admin', '2021-09-07 13:50:22'),
(4, 'Afternoon', 'admin', '2021-09-07 13:50:36'),
(5, 'Evening', 'admin', '2021-09-07 13:50:47'),
(6, 'Buffet', 'admin', '2021-09-07 13:50:54'),
(7, 'Desart', 'admin', '2021-09-07 20:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `category` varchar(25) NOT NULL,
  `food` varchar(25) NOT NULL,
  `ordered_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deleveryman`
--

CREATE TABLE `deleveryman` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(11) NOT NULL,
  `delivery_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deleveryman`
--

INSERT INTO `deleveryman` (`id`, `name`, `email`, `password`, `delivery_at`) VALUES
(1, 'deliveryBoy', 'delivery@gmail.com', '12345', '2021-09-08 16:55:28'),
(2, 'Salsabil', 'salsabil@gmail.com', '12345', '2021-09-08 19:44:31');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `category` varchar(25) NOT NULL,
  `food` varchar(25) NOT NULL,
  `price` int(6) NOT NULL,
  `image` varchar(256) NOT NULL,
  `add_by` varchar(25) NOT NULL,
  `add_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `category`, `food`, `price`, `image`, `add_by`, `add_at`) VALUES
(28, 'Breakfast', 'Dosa', 120, 'menu-3.jpg', 'admin', '2021-09-07 21:45:44'),
(29, 'Breakfast', 'Mango Juice', 20, 'menu-9.jpg', 'admin', '2021-09-07 21:46:09'),
(33, 'Breakfast', 'Butter cup cake', 70, 'menu-6.jpg', 'admin', '2021-09-07 21:47:57'),
(34, 'Dinner', 'Spicy Chicken Pizza', 0, 'home-img-3.png', 'admin', '2021-09-07 21:48:35'),
(35, 'Lunch', 'Fruit with butter', 167, 'menu-8.jpg', 'admin', '2021-09-07 21:49:16'),
(36, 'Breakfast', 'Chicken Burgar', 189, 'dish-1.png', 'admin', '2021-09-07 21:49:43'),
(37, 'Buffet', 'Chicken Fry', 300, 'dish-6.png', 'admin', '2021-09-08 00:44:11'),
(38, 'Evening', 'Noodles', 240, 'home-img-1.png', 'admin', '2021-09-08 19:12:33'),
(39, 'Breakfast', '3 Fruits Juice', 120, 'menu-7.jpg', 'admin', '2021-09-08 19:13:12'),
(40, 'Buffet', 'Naga Chiken Pizza', 450, 'menu-1.jpg', 'admin', '2021-09-08 19:14:09'),
(41, 'Lunch', 'Nagets', 200, 'dish-2.png', 'admin', '2021-09-08 19:15:01'),
(42, 'Evening', 'Chiken Momo', 340, 'about-img.png', 'admin', '2021-09-08 19:15:31'),
(43, 'Breakfast', 'Full Chiken Fry', 400, 'home-img-2.png', 'admin', '2021-09-08 19:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `category` varchar(25) NOT NULL,
  `food` varchar(25) NOT NULL,
  `quantity` int(6) NOT NULL,
  `totalprice` int(11) NOT NULL,
  `order_by` varchar(30) NOT NULL,
  `address` varchar(256) NOT NULL,
  `order_at` datetime NOT NULL DEFAULT current_timestamp(),
  `image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `review` varchar(256) NOT NULL,
  `uimage` varchar(256) NOT NULL,
  `fimage` varchar(256) NOT NULL,
  `review_by` varchar(25) NOT NULL,
  `review_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `review`, `uimage`, `fimage`, `review_by`, `review_at`) VALUES
(17, 'Beef Burgar had a great taste and the delivery was very early just can not be imagined.', '135624573_1116423752150095_7976323508753132574_n.jpg', 'dish-1.png', 'disunisu@gmail.com', '2021-09-09 21:20:27'),
(30, 'We, the 3-----', '135624573_1116423752150095_7976323508753132574_n.jpg', 'IMG_20200525_115036.jpg', 'disunisu@gmail.com', '2021-09-09 23:23:51'),
(31, 'Just awesome, booked seat via online and happy eating', '', 'menu-8.jpg', '', '2021-09-11 12:46:47'),
(32, '<h1>HELLO</h1>', '135624573_1116423752150095_7976323508753132574_n.jpg', '', 'disunisu@gmail.com', '2021-09-11 13:10:59'),
(33, '<script>alert(\"HELLO\")</script>', '135624573_1116423752150095_7976323508753132574_n.jpg', '', 'disunisu@gmail.com', '2021-09-11 13:12:20'),
(34, 'uhhhhhhhhhhhhhhhj', 'unnamed (2).jpg', '', 'nazerinkabir@gmail.com', '2021-09-11 14:08:08'),
(35, 'vbhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhvbvj,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,llllllllllllllllllllllllllllllllm', 'unnamed (2).jpg', '135066951_1102750290178589_5565647488034239178_n.jpg', 'nazerinkabir@gmail.com', '2021-09-11 14:08:58');

-- --------------------------------------------------------

--
-- Table structure for table `seeorders`
--

CREATE TABLE `seeorders` (
  `id` int(11) NOT NULL,
  `fid` int(6) NOT NULL,
  `cartid` int(11) NOT NULL,
  `category` varchar(25) NOT NULL,
  `food` varchar(30) NOT NULL,
  `quantity` int(6) NOT NULL,
  `totalprice` int(6) NOT NULL,
  `address` varchar(100) NOT NULL,
  `order_by` varchar(25) NOT NULL,
  `image` varchar(256) NOT NULL,
  `order_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seeorders`
--

INSERT INTO `seeorders` (`id`, `fid`, `cartid`, `category`, `food`, `quantity`, `totalprice`, `address`, `order_by`, `image`, `order_at`) VALUES
(12, 39, 0, 'Evening', 'Chiken Momo', 24, 8160, 'Demra,Dhaka', 'tahrimkabir321@gmail.com', 'about-img.png', '2021-09-09 17:14:30'),
(13, 40, 0, 'Breakfast', 'Full Chiken Fry', 15, 6000, 'Demra Dhaka', 'tahrimkabir321@gmail.com', 'home-img-2.png', '2021-09-09 17:15:33'),
(14, 40, 0, 'Breakfast', 'Full Chiken Fry', 15, 6000, 'Demra,Dhaka', 'tahrimkabir321@gmail.com', 'home-img-2.png', '2021-09-09 17:16:24'),
(15, 41, 0, 'Breakfast', 'Dosa', 13, 1560, 'Demra,Dhaka', 'disunisu@gmail.com', 'menu-3.jpg', '2021-09-09 23:39:43'),
(16, 44, 0, 'Breakfast', 'Dosa', 3, 360, 'Demra,Dhaka', 'disunisu@gmail.com', 'menu-3.jpg', '2021-09-10 02:08:03'),
(17, 47, 0, 'Breakfast', 'Dosa', 4, 480, 'Demra,Dhaka', 'disunisu@gmail.com', 'menu-3.jpg', '2021-09-10 02:20:02'),
(18, 47, 0, 'Breakfast', 'Dosa', 4, 480, 'Demra,Dhaka', 'disunisu@gmail.com', 'menu-3.jpg', '2021-09-10 02:24:09'),
(19, 47, 0, 'Breakfast', 'Dosa', 7, 840, 'Demra,Dhaka', 'disunisu@gmail.com', 'menu-3.jpg', '2021-09-11 12:22:28'),
(20, 48, 0, 'Breakfast', 'Dosa', 3, 360, 'Demra,Dhaka', 'nazerinkabir@gmail.com', 'menu-3.jpg', '2021-09-11 13:54:12'),
(21, 56, 0, 'Breakfast', 'Chicken Burgar', 5, 945, 'Demra,Dhaka', 'tahrimkabir321@gmail.com', 'dish-1.png', '2021-09-11 19:24:53'),
(22, 56, 0, 'Breakfast', 'Chicken Burgar', 6, 1134, 'Mohammadpur, Dhaka', 'tahrimkabir321@gmail.com', 'dish-1.png', '2021-09-11 19:33:38'),
(23, 57, 0, 'Breakfast', 'Full Chiken Fry', 4, 1600, 'Demra,Dhaka', 'tahrimkabir321@gmail.com', 'home-img-2.png', '2021-09-11 19:38:17'),
(24, 63, 0, 'Breakfast', 'Mango Juice', 6, 120, 'Demra,Dhaka', 'tahrimkabir321@gmail.com', 'menu-9.jpg', '2021-09-11 19:42:10'),
(25, 67, 0, 'Lunch', 'Nagets', 6, 1200, 'Demra,Dhaka', 'tahrimkabir321@gmail.com', 'dish-2.png', '2021-09-11 19:42:54'),
(26, 65, 0, 'Breakfast', 'Chicken Burgar', 7, 1323, 'Mohammadpur, Dhaka', 'tahrimkabir321@gmail.com', 'dish-1.png', '2021-09-11 19:43:07'),
(27, 66, 0, 'Evening', 'Chiken Momo', 8, 2720, 'Mohammadpur, Dhaka', 'tahrimkabir321@gmail.com', 'about-img.png', '2021-09-11 19:43:25'),
(28, 65, 0, 'Breakfast', 'Chicken Burgar', 5, 945, 'Demra,Dhaka', 'tahrimkabir321@gmail.com', 'dish-1.png', '2021-09-11 19:43:47'),
(29, 72, 0, 'Breakfast', 'Mango Juice', 6, 120, 'Mohammadpur, Dhaka', 'tahrimkabir321@gmail.com', 'menu-9.jpg', '2021-09-11 19:45:34'),
(30, 47, 0, 'Breakfast', 'Dosa', 10, 1200, 'Demra,Dhaka', 'disunisu@gmail.com', 'menu-3.jpg', '2021-09-11 19:50:43'),
(31, 73, 0, 'Breakfast', 'Butter cup cake', 12, 840, 'Demra,Dhaka', 'disunisu@gmail.com', 'menu-6.jpg', '2021-09-11 19:50:57'),
(32, 74, 0, 'Dinner', 'Spicy Chicken Pizza', 10, 0, 'Demra,Dhaka', 'disunisu@gmail.com', 'home-img-3.png', '2021-09-11 19:51:12'),
(33, 75, 0, 'Lunch', 'Fruit with butter', 11, 1837, 'Demra Dhaka', 'disunisu@gmail.com', 'menu-8.jpg', '2021-09-11 19:52:04'),
(34, 75, 0, 'Lunch', 'Fruit with butter', 5, 835, 'Demra,Dhaka', 'disunisu@gmail.com', 'menu-8.jpg', '2021-09-11 19:55:54'),
(35, 75, 0, 'Lunch', 'Fruit with butter', 9, 1503, 'Demra,Dhaka', 'disunisu@gmail.com', 'menu-8.jpg', '2021-09-11 20:00:09'),
(36, 86, 0, 'Breakfast', 'Dosa', 4, 480, 'Demra,Dhaka', 'rahatuddin@gmail.com', 'menu-3.jpg', '2021-09-11 22:19:46'),
(39, 80, 80, 'Breakfast', 'Mango Juice', 16, 320, 'Demra,Dhaka', 'disunisu@gmail.com', 'menu-9.jpg', '2021-09-11 23:01:35'),
(40, 29, 80, 'Breakfast', 'Mango Juice', 4, 80, 'Demra,Dhaka', 'disunisu@gmail.com', 'menu-9.jpg', '2021-09-11 23:04:56'),
(41, 29, 87, 'Breakfast', 'Mango Juice', 4, 80, 'Demra,Dhaka', 'disunisu@gmail.com', 'menu-9.jpg', '2021-09-11 23:10:27'),
(42, 29, 87, 'Breakfast', 'Mango Juice', 7, 140, 'Demra,Dhaka', 'disunisu@gmail.com', 'menu-9.jpg', '2021-09-11 23:13:13'),
(43, 29, 87, 'Breakfast', 'Mango Juice', 3, 60, 'Demra Dhaka', 'disunisu@gmail.com', 'menu-9.jpg', '2021-09-11 23:14:37'),
(44, 29, 88, 'Breakfast', 'Mango Juice', 14, 280, 'Demra,Dhaka', 'disunisu@gmail.com', 'menu-9.jpg', '2021-09-11 23:38:17'),
(45, 29, 89, 'Breakfast', 'Mango Juice', 9, 180, 'Demra,Dhaka', 'disunisu@gmail.com', 'menu-9.jpg', '2021-09-11 23:38:46'),
(46, 29, 92, 'Breakfast', 'Mango Juice', 3, 60, 'Demra,Dhaka', 'disunisu@gmail.com', 'menu-9.jpg', '2021-09-11 23:40:29'),
(47, 29, 95, 'Breakfast', 'Mango Juice', 5, 100, 'Demra,Dhaka', 'disunisu@gmail.com', 'menu-9.jpg', '2021-09-12 00:32:45'),
(48, 29, 72, 'Breakfast', 'Mango Juice', 12, 240, 'Demra,Dhaka', 'tahrimkabir321@gmail.com', 'menu-9.jpg', '2021-09-12 03:22:51'),
(49, 28, 96, 'Breakfast', 'Dosa', 5, 600, 'Demra,Dhaka', 'tahrimkabir321@gmail.com', 'menu-3.jpg', '2021-09-12 03:24:29'),
(50, 41, 102, 'Lunch', 'Nagets', 11, 2200, 'Demra,Dhaka', 'tahrimkabir321@gmail.com', 'dish-2.png', '2021-09-12 03:32:57'),
(51, 40, 104, 'Buffet', 'Naga Chiken Pizza', 6, 2700, 'Demra,Dhaka', 'tahrimkabir321@gmail.com', 'menu-1.jpg', '2021-09-12 03:42:23'),
(52, 43, 103, 'Breakfast', 'Full Chiken Fry', 4, 1600, 'Mohammadpur, Dhaka', 'tahrimkabir321@gmail.com', 'home-img-2.png', '2021-09-12 03:42:40'),
(53, 36, 100, 'Breakfast', 'Chicken Burgar', 6, 1134, 'Demra,Dhaka', 'tahrimkabir321@gmail.com', 'dish-1.png', '2021-09-12 03:56:32'),
(54, 33, 97, 'Breakfast', 'Butter cup cake', 11, 770, 'Mohammadpur, Dhaka', 'tahrimkabir321@gmail.com', 'menu-6.jpg', '2021-09-12 04:34:43'),
(55, 42, 101, 'Evening', 'Chiken Momo', 9, 3060, 'Demra,Dhaka', 'tahrimkabir321@gmail.com', 'about-img.png', '2021-09-12 12:20:56'),
(56, 29, 105, 'Breakfast', 'Mango Juice', 10, 200, 'Demra,Dhaka', 'tahrimkabir321@gmail.com', 'menu-9.jpg', '2021-09-12 13:43:20'),
(57, 33, 106, 'Breakfast', 'Butter cup cake', 5, 350, 'Demra,Dhaka', 'tahrimkabir321@gmail.com', 'menu-6.jpg', '2021-09-12 18:47:10'),
(58, 36, 110, 'Breakfast', 'Chicken Burgar', 11, 2079, 'Demra,Dhaka', 'tahrimkabir321@gmail.com', 'dish-1.png', '2021-09-12 19:31:12'),
(59, 29, 125, 'Breakfast', 'Mango Juice', 4, 80, 'Demra,Dhaka', 'tahrimkabir321@gmail.com', 'menu-9.jpg', '2021-09-13 11:50:41'),
(60, 33, 128, 'Breakfast', 'Butter cup cake', 6, 420, 'Demra,Dhaka', 'tahrimkabir321@gmail.com', 'menu-6.jpg', '2021-09-13 12:02:42'),
(61, 36, 135, 'Breakfast', 'Chicken Burgar', 5, 945, 'Demra,Dhaka', 'tahrimkabir321@gmail.com', 'dish-1.png', '2021-09-14 10:32:10'),
(62, 35, 134, 'Lunch', 'Fruit with butter', 11, 1837, 'Demra,Dhaka', 'tahrimkabir321@gmail.com', 'menu-8.jpg', '2021-09-14 10:32:34'),
(63, 33, 143, 'Breakfast', 'Butter cup cake', 15, 1050, 'Demra,Dhaka', 'tahrimkabir321@gmail.com', 'menu-6.jpg', '2021-09-14 11:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` int(11) NOT NULL,
  `seatNo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `seatNo`) VALUES
(1, '001-(4 people)'),
(2, '002-(5 people)');

-- --------------------------------------------------------

--
-- Table structure for table `tracker`
--

CREATE TABLE `tracker` (
  `id` int(11) NOT NULL,
  `deliEmail` varchar(30) NOT NULL,
  `orderid` int(6) NOT NULL,
  `order_by` varchar(30) NOT NULL,
  `deli_city` varchar(30) NOT NULL,
  `deli_country` varchar(30) NOT NULL,
  `deli_region` varchar(30) NOT NULL,
  `present_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tracker`
--

INSERT INTO `tracker` (`id`, `deliEmail`, `orderid`, `order_by`, `deli_city`, `deli_country`, `deli_region`, `present_at`) VALUES
(1, 'salsabil@gmail.com', 15, 'disunisu@gmail.com', 'Matuail', 'Bangladesh', 'Dhaka Division', '2021-09-10 19:56:54'),
(14, 'salsabil@gmail.com', 15, 'disunisu@gmail.com', 'Matuail', 'Bangladesh', 'Dhaka Division', '2021-09-10 20:44:30'),
(15, 'salsabil@gmail.com', 17, 'disunisu@gmail.com', 'Matuail', 'Bangladesh', 'Dhaka Division', '2021-09-10 20:44:30'),
(16, 'salsabil@gmail.com', 15, 'disunisu@gmail.com', 'Matuail', 'Bangladesh', 'Dhaka Division', '2021-09-10 20:44:32'),
(17, 'salsabil@gmail.com', 17, 'disunisu@gmail.com', 'Matuail', 'Bangladesh', 'Dhaka Division', '2021-09-10 20:44:32'),
(18, 'salsabil@gmail.com', 18, 'disunisu@gmail.com', 'Matuail', 'Bangladesh', 'Dhaka Division', '2021-09-10 20:53:22'),
(19, 'delivery@gmail.com', 14, 'tahrimkabir321@gmail.com', 'Matuail', 'Bangladesh', 'Dhaka Division', '2021-09-10 22:16:22'),
(20, 'delivery@gmail.com', 20, 'nazerinkabir@gmail.com', 'Matuail', 'Bangladesh', 'Dhaka Division', '2021-09-11 13:57:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `image` varchar(256) NOT NULL,
  `password` varchar(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `image`, `password`, `created_at`) VALUES
(2, 'MD.', 'Al-Adnan', 'aladnan21@gmail.com', '', '12345', '2021-09-08 00:32:43'),
(3, 'Tahrim', 'Nisha', 'tahrim2513@student.nstu.edu.bd', '', '12345', '2021-09-09 19:48:23'),
(4, 'Disa', 'Moni', 'disa@gmail.com', '', '12345', '2021-09-09 19:53:24'),
(5, 'disu', 'nisu', 'disunisu@gmail.com', '135624573_1116423752150095_7976323508753132574_n.jpg', '12345', '2021-09-09 19:55:39'),
(6, 'Tahrim', 'Kabir', 'tahrimkabir321@gmail.com', 'Bichanakandi(Tahrim).jpg', '12345', '2021-09-11 13:47:42'),
(7, 'Nazerin', 'Kabir', 'nazerinkabir@gmail.com', 'unnamed (2).jpg', '12345', '2021-09-11 13:50:49'),
(8, 'Khairus', 'Kabir', 'khairusshamadulkabir@gmail.com', 'unnamed - 2020-11-23T102530.572.jpg', 'Password', '2021-09-11 14:01:25'),
(9, 'Rahat', 'Uddin', 'rahatuddin@gmail.com', 'unnamed (70).jpg', 'Password', '2021-09-11 22:09:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookedseat`
--
ALTER TABLE `bookedseat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deleveryman`
--
ALTER TABLE `deleveryman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seeorders`
--
ALTER TABLE `seeorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracker`
--
ALTER TABLE `tracker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assign`
--
ALTER TABLE `assign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bookedseat`
--
ALTER TABLE `bookedseat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deleveryman`
--
ALTER TABLE `deleveryman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `seeorders`
--
ALTER TABLE `seeorders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tracker`
--
ALTER TABLE `tracker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
