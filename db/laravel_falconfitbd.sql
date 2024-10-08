-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2021 at 08:44 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_falconfitbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_logs`
--

CREATE TABLE `admin_logs` (
  `id` int(11) NOT NULL,
  `module_name` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `details` longtext NOT NULL,
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_logs`
--

INSERT INTO `admin_logs` (`id`, `module_name`, `action`, `details`, `admin_id`, `admin_name`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Size', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-01 05:04:41', '2020-12-01 05:04:41'),
(2, 'Color', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-01 05:05:41', '2020-12-01 05:05:41'),
(3, 'Color', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-01 06:54:58', '2020-12-01 06:54:58'),
(4, 'Color', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-01 06:55:09', '2020-12-01 06:55:09'),
(5, 'Category', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-01 07:58:29', '2020-12-01 07:58:29'),
(6, 'Sub Category', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-01 07:59:00', '2020-12-01 07:59:00'),
(7, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-01 08:03:28', '2020-12-01 08:03:28'),
(8, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-01 08:04:16', '2020-12-01 08:04:16'),
(9, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-01 08:05:02', '2020-12-01 08:05:02'),
(10, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-01 08:05:47', '2020-12-01 08:05:47'),
(11, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-01 08:09:07', '2020-12-01 08:09:07'),
(12, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-01 08:10:14', '2020-12-01 08:10:14'),
(13, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-01 08:12:17', '2020-12-01 08:12:17'),
(14, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-01 08:13:55', '2020-12-01 08:13:55'),
(15, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-01 08:16:09', '2020-12-01 08:16:09'),
(16, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-01 08:41:24', '2020-12-01 08:41:24'),
(17, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-01 08:42:21', '2020-12-01 08:42:21'),
(18, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-01 08:44:15', '2020-12-01 08:44:15'),
(19, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-01 08:48:27', '2020-12-01 08:48:27'),
(20, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-01 08:51:05', '2020-12-01 08:51:05'),
(21, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-01 08:52:55', '2020-12-01 08:52:55'),
(22, 'Site Setting', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-02 02:12:01', '2020-12-02 02:12:01'),
(23, 'Product', 'Destroy', 'Delete', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-02 03:04:52', '2020-12-02 03:04:52'),
(24, 'Product', 'Destroy', 'Delete', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-02 03:04:55', '2020-12-02 03:04:55'),
(25, 'Product', 'Destroy', 'Delete', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-02 03:04:58', '2020-12-02 03:04:58'),
(26, 'Product', 'Destroy', 'Delete', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-02 03:05:02', '2020-12-02 03:05:02'),
(27, 'Product', 'Destroy', 'Delete', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-02 03:05:08', '2020-12-02 03:05:08'),
(28, 'Product', 'Destroy', 'Delete', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-02 03:06:58', '2020-12-02 03:06:58'),
(29, 'Product', 'Destroy', 'Delete', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-02 03:07:01', '2020-12-02 03:07:01'),
(30, 'Product', 'Destroy', 'Delete', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-02 03:07:03', '2020-12-02 03:07:03'),
(31, 'Product', 'Destroy', 'Delete', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-02 03:07:06', '2020-12-02 03:07:06'),
(32, 'Product', 'Destroy', 'Delete', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-02 03:07:08', '2020-12-02 03:07:08'),
(33, 'Product', 'Destroy', 'Delete', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-02 03:07:09', '2020-12-02 03:07:09'),
(34, 'Product', 'Destroy', 'Delete', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-02 03:07:12', '2020-12-02 03:07:12'),
(35, 'Product', 'Destroy', 'Delete', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-02 03:07:14', '2020-12-02 03:07:14'),
(36, 'Size', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-02 03:37:09', '2020-12-02 03:37:09'),
(37, 'Size', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-02 03:37:19', '2020-12-02 03:37:19'),
(38, 'Size', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-02 03:37:40', '2020-12-02 03:37:40'),
(39, 'Size', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-02 03:37:51', '2020-12-02 03:37:51'),
(40, 'Color', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-02 03:38:55', '2020-12-02 03:38:55'),
(41, 'Color', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-02 03:39:26', '2020-12-02 03:39:26'),
(42, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-02 04:24:40', '2020-12-02 04:24:40'),
(43, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-02 04:25:19', '2020-12-02 04:25:19'),
(44, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-02 04:25:35', '2020-12-02 04:25:35'),
(45, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-02 04:48:05', '2020-12-02 04:48:05'),
(46, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-02 04:54:50', '2020-12-02 04:54:50'),
(47, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-03 12:08:54', '2020-12-03 12:08:54'),
(48, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-03 12:09:09', '2020-12-03 12:09:09'),
(49, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-03 12:59:14', '2020-12-03 12:59:14'),
(50, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-03 12:59:58', '2020-12-03 12:59:58'),
(51, 'Slider CMS', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-05 03:49:52', '2020-12-05 03:49:52'),
(52, 'Slider CMS', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-05 03:53:56', '2020-12-05 03:53:56'),
(53, 'Slider CMS', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-05 03:54:09', '2020-12-05 03:54:09'),
(54, 'Slider CMS', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-05 03:59:21', '2020-12-05 03:59:21'),
(55, 'Slider CMS', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-05 04:01:07', '2020-12-05 04:01:07'),
(56, 'Category', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-05 04:30:53', '2020-12-05 04:30:53'),
(57, 'Category', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-05 04:35:59', '2020-12-05 04:35:59'),
(58, 'Category', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-05 04:37:21', '2020-12-05 04:37:21'),
(59, 'Category', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-05 04:38:23', '2020-12-05 04:38:23'),
(60, 'Home Page Category Position', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-05 06:34:55', '2020-12-05 06:34:55'),
(61, 'Home Page Category Position', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-05 06:40:33', '2020-12-05 06:40:33'),
(62, 'Feature Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-05 06:56:59', '2020-12-05 06:56:59'),
(63, 'Manu Category CMS', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-05 07:25:29', '2020-12-05 07:25:29'),
(64, 'Manu Category CMS', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-05 07:29:21', '2020-12-05 07:29:21'),
(65, 'Feature Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-05 16:59:25', '2020-12-05 16:59:25'),
(66, 'Site Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-05 13:19:53', '2020-12-05 13:19:53'),
(67, 'Feature Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-07 12:25:45', '2020-12-07 12:25:45'),
(68, 'Feature Product', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-07 12:26:06', '2020-12-07 12:26:06'),
(69, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-07 12:33:27', '2020-12-07 12:33:27'),
(70, 'Feature Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-07 12:33:53', '2020-12-07 12:33:53'),
(71, 'Product', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 02:49:01', '2020-12-12 02:49:01'),
(72, 'Product', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 02:50:17', '2020-12-12 02:50:17'),
(73, 'Product', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 02:50:35', '2020-12-12 02:50:35'),
(74, 'Product', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 02:50:48', '2020-12-12 02:50:48'),
(75, 'Product', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 02:51:24', '2020-12-12 02:51:24'),
(76, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 03:33:47', '2020-12-12 03:33:47'),
(77, 'Home Page Category Position', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 03:54:59', '2020-12-12 03:54:59'),
(78, 'Home Page Category Position', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 04:02:26', '2020-12-12 04:02:26'),
(79, 'Home Page Category Position', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 04:03:21', '2020-12-12 04:03:21'),
(80, 'Home Page Category Position', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 04:04:01', '2020-12-12 04:04:01'),
(81, 'Home Page Category Position', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 04:14:22', '2020-12-12 04:14:22'),
(82, 'Home Page Category Position', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 04:16:46', '2020-12-12 04:16:46'),
(83, 'Home Page Category Position', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 04:17:07', '2020-12-12 04:17:07'),
(84, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 06:48:20', '2020-12-12 06:48:20'),
(85, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 06:48:52', '2020-12-12 06:48:52'),
(86, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 06:59:51', '2020-12-12 06:59:51'),
(87, 'Home Page Category Position', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 07:02:18', '2020-12-12 07:02:18'),
(88, 'Home Page Category Position', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 07:03:06', '2020-12-12 07:03:06'),
(89, 'Home Page Category Position', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 07:03:46', '2020-12-12 07:03:46'),
(90, 'Home Page Category Position', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 07:04:06', '2020-12-12 07:04:06'),
(91, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 07:04:46', '2020-12-12 07:04:46'),
(92, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 07:05:09', '2020-12-12 07:05:09'),
(93, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 07:05:30', '2020-12-12 07:05:30'),
(94, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 07:06:21', '2020-12-12 07:06:21'),
(95, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 07:07:03', '2020-12-12 07:07:03'),
(96, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 07:07:22', '2020-12-12 07:07:22'),
(97, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 07:07:48', '2020-12-12 07:07:48'),
(98, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 07:08:12', '2020-12-12 07:08:12'),
(99, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 07:08:28', '2020-12-12 07:08:28'),
(100, 'Category', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 12:20:30', '2020-12-12 12:20:30'),
(101, 'Category', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 12:22:01', '2020-12-12 12:22:01'),
(102, 'Category', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 12:43:37', '2020-12-12 12:43:37'),
(103, 'Category', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 12:44:14', '2020-12-12 12:44:14'),
(104, 'Category', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 12:45:08', '2020-12-12 12:45:08'),
(105, 'Sub Category', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 12:47:23', '2020-12-12 12:47:23'),
(106, 'Sub Category', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 12:47:50', '2020-12-12 12:47:50'),
(107, 'Sub Category', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 12:48:04', '2020-12-12 12:48:04'),
(108, 'Sub Category', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-12 12:48:27', '2020-12-12 12:48:27'),
(109, 'Manu Category CMS', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-13 12:33:43', '2020-12-13 12:33:43'),
(110, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-19 04:56:17', '2020-12-19 04:56:17'),
(111, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-19 05:09:44', '2020-12-19 05:09:44'),
(112, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-19 05:12:13', '2020-12-19 05:12:13'),
(113, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-19 05:18:48', '2020-12-19 05:18:48'),
(114, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-19 05:24:03', '2020-12-19 05:24:03'),
(115, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-19 05:27:00', '2020-12-19 05:27:00'),
(116, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-19 05:29:43', '2020-12-19 05:29:43'),
(117, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-19 06:04:15', '2020-12-19 06:04:15'),
(118, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-19 06:13:44', '2020-12-19 06:13:44'),
(119, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-19 06:30:11', '2020-12-19 06:30:11'),
(120, 'Feature Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-19 07:09:37', '2020-12-19 07:09:37'),
(121, 'Category', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-20 12:51:32', '2020-12-20 12:51:32'),
(122, 'Category', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-20 12:52:50', '2020-12-20 12:52:50'),
(123, 'Category', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-20 12:53:22', '2020-12-20 12:53:22'),
(124, 'Payment Method', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-21 13:08:00', '2020-12-21 13:08:00'),
(125, 'Payment Method', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-21 13:08:18', '2020-12-21 13:08:18'),
(126, 'Shipping Cost', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-21 13:13:38', '2020-12-21 13:13:38'),
(127, 'Shipping Cost', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-21 13:13:50', '2020-12-21 13:13:50'),
(128, 'Payment Method', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-21 13:36:04', '2020-12-21 13:36:04'),
(129, 'Payment Method', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-21 13:36:20', '2020-12-21 13:36:20'),
(130, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-24 13:58:19', '2020-12-24 13:58:19'),
(131, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-24 14:00:33', '2020-12-24 14:00:33'),
(132, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-24 15:09:48', '2020-12-24 15:09:48'),
(133, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-24 15:33:30', '2020-12-24 15:33:30'),
(134, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-24 15:35:34', '2020-12-24 15:35:34'),
(135, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-24 15:35:55', '2020-12-24 15:35:55'),
(136, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-24 15:38:49', '2020-12-24 15:38:49'),
(137, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-24 15:39:07', '2020-12-24 15:39:07'),
(138, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-24 15:43:14', '2020-12-24 15:43:14'),
(139, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-24 15:43:22', '2020-12-24 15:43:22'),
(140, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-27 06:36:40', '2020-12-27 06:36:40'),
(141, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-27 06:37:26', '2020-12-27 06:37:26'),
(142, 'Slider CMS', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-27 06:38:25', '2020-12-27 06:38:25'),
(143, 'Site Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-27 06:39:26', '2020-12-27 06:39:26'),
(144, 'Slider CMS', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-27 06:44:49', '2020-12-27 06:44:49'),
(145, 'Slider CMS', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-27 06:45:29', '2020-12-27 06:45:29'),
(146, 'Slider CMS', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-27 06:46:04', '2020-12-27 06:46:04'),
(147, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-27 06:46:53', '2020-12-27 06:46:53'),
(148, 'Customer', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2020-12-28 13:02:23', '2020-12-28 13:02:23'),
(149, 'Product', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-08 13:12:04', '2021-01-08 13:12:04'),
(150, 'Product', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-08 13:24:45', '2021-01-08 13:24:45'),
(151, 'Product', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-08 13:25:24', '2021-01-08 13:25:24'),
(152, 'Product', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-08 13:25:38', '2021-01-08 13:25:38'),
(153, 'Product', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-08 13:25:44', '2021-01-08 13:25:44'),
(154, 'Product', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-08 13:25:54', '2021-01-08 13:25:54'),
(155, 'Product', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-08 13:26:38', '2021-01-08 13:26:38'),
(156, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-08 13:31:45', '2021-01-08 13:31:45'),
(157, 'Product', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-08 13:34:59', '2021-01-08 13:34:59'),
(158, 'Product Color', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 01:48:35', '2021-01-25 01:48:35'),
(159, 'Product Size', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 01:49:53', '2021-01-25 01:49:53'),
(160, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 01:53:32', '2021-01-25 01:53:32'),
(161, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 01:54:14', '2021-01-25 01:54:14'),
(162, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 01:57:32', '2021-01-25 01:57:32'),
(163, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 01:58:25', '2021-01-25 01:58:25'),
(164, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:01:10', '2021-01-25 02:01:10'),
(165, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:01:20', '2021-01-25 02:01:20'),
(166, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:02:08', '2021-01-25 02:02:08'),
(167, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:02:21', '2021-01-25 02:02:21'),
(168, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:03:28', '2021-01-25 02:03:28'),
(169, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:04:16', '2021-01-25 02:04:16'),
(170, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:04:34', '2021-01-25 02:04:34'),
(171, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:05:09', '2021-01-25 02:05:09'),
(172, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:05:21', '2021-01-25 02:05:21'),
(173, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:05:44', '2021-01-25 02:05:44'),
(174, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:35:42', '2021-01-25 02:35:42'),
(175, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:35:54', '2021-01-25 02:35:54'),
(176, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:37:07', '2021-01-25 02:37:07'),
(177, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:37:13', '2021-01-25 02:37:13'),
(178, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:37:33', '2021-01-25 02:37:33'),
(179, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:37:44', '2021-01-25 02:37:44'),
(180, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:38:23', '2021-01-25 02:38:23'),
(181, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:38:59', '2021-01-25 02:38:59'),
(182, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:39:09', '2021-01-25 02:39:09'),
(183, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:39:33', '2021-01-25 02:39:33'),
(184, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:40:17', '2021-01-25 02:40:17'),
(185, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:41:41', '2021-01-25 02:41:41'),
(186, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:41:54', '2021-01-25 02:41:54'),
(187, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:42:04', '2021-01-25 02:42:04'),
(188, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:42:12', '2021-01-25 02:42:12'),
(189, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:42:20', '2021-01-25 02:42:20'),
(190, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:42:40', '2021-01-25 02:42:40'),
(191, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:43:12', '2021-01-25 02:43:12'),
(192, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:43:58', '2021-01-25 02:43:58'),
(193, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:44:12', '2021-01-25 02:44:12'),
(194, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:44:21', '2021-01-25 02:44:21'),
(195, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:44:30', '2021-01-25 02:44:30'),
(196, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 02:45:46', '2021-01-25 02:45:46'),
(197, 'Product', 'Destroy', 'Delete', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 03:09:56', '2021-01-25 03:09:56'),
(198, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 03:12:17', '2021-01-25 03:12:17'),
(199, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 03:14:37', '2021-01-25 03:14:37'),
(200, 'Order Details', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-25 13:43:43', '2021-01-25 13:43:43'),
(201, 'Order Details', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-26 03:08:30', '2021-01-26 03:08:30'),
(202, 'Order Details', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-26 03:08:38', '2021-01-26 03:08:38'),
(203, 'Color', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-26 03:26:09', '2021-01-26 03:26:09'),
(204, 'Current Offer', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-27 13:43:04', '2021-01-27 13:43:04'),
(205, 'Current Offer', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-27 13:45:50', '2021-01-27 13:45:50'),
(206, 'Current Offer', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-27 13:47:40', '2021-01-27 13:47:40'),
(207, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 07:36:03', '2021-01-29 07:36:03'),
(208, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 07:39:37', '2021-01-29 07:39:37'),
(209, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 07:42:04', '2021-01-29 07:42:04'),
(210, 'Color', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 07:45:03', '2021-01-29 07:45:03'),
(211, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 07:48:51', '2021-01-29 07:48:51'),
(212, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 07:59:38', '2021-01-29 07:59:38'),
(213, 'Sub Category', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 08:00:24', '2021-01-29 08:00:24'),
(214, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 08:01:17', '2021-01-29 08:01:17'),
(215, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 08:02:24', '2021-01-29 08:02:24'),
(216, 'Product', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 08:03:14', '2021-01-29 08:03:14'),
(217, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 08:40:08', '2021-01-29 08:40:08'),
(218, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 08:41:10', '2021-01-29 08:41:10'),
(219, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 08:43:18', '2021-01-29 08:43:18'),
(220, 'Color', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 08:43:54', '2021-01-29 08:43:54'),
(221, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 08:44:57', '2021-01-29 08:44:57'),
(222, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 08:46:54', '2021-01-29 08:46:54'),
(223, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 08:48:21', '2021-01-29 08:48:21'),
(224, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 08:49:23', '2021-01-29 08:49:23'),
(225, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 08:50:10', '2021-01-29 08:50:10'),
(226, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 08:53:33', '2021-01-29 08:53:33'),
(227, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 08:56:38', '2021-01-29 08:56:38'),
(228, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 08:58:56', '2021-01-29 08:58:56'),
(229, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 09:00:22', '2021-01-29 09:00:22'),
(230, 'Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 09:01:53', '2021-01-29 09:01:53'),
(231, 'Product', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 09:02:24', '2021-01-29 09:02:24'),
(232, 'Order Details', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 09:21:44', '2021-01-29 09:21:44'),
(233, 'Order Details', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 09:21:57', '2021-01-29 09:21:57'),
(234, 'Order Details', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 09:25:19', '2021-01-29 09:25:19'),
(235, 'Order Details', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 09:25:47', '2021-01-29 09:25:47'),
(236, 'Order Details', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 09:25:51', '2021-01-29 09:25:51'),
(237, 'Order Details', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 09:25:56', '2021-01-29 09:25:56'),
(238, 'Order Details', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 09:26:02', '2021-01-29 09:26:02'),
(239, 'Feature Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 09:26:23', '2021-01-29 09:26:23'),
(240, 'Feature Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 09:26:29', '2021-01-29 09:26:29'),
(241, 'Feature Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 09:26:35', '2021-01-29 09:26:35'),
(242, 'Feature Product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 09:26:42', '2021-01-29 09:26:42'),
(243, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 09:27:23', '2021-01-29 09:27:23'),
(244, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 09:27:36', '2021-01-29 09:27:36'),
(245, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 09:27:48', '2021-01-29 09:27:48'),
(246, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-01-29 09:27:58', '2021-01-29 09:27:58'),
(247, 'Product', 'Destroy', 'Delete', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 04:19:10', '2021-02-08 04:19:10'),
(248, 'Product', 'Destroy', 'Delete', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 04:19:20', '2021-02-08 04:19:20'),
(249, 'Product', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 04:31:05', '2021-02-08 04:31:05'),
(250, 'Product', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 04:32:38', '2021-02-08 04:32:38'),
(251, 'Product', 'Destroy', 'Delete', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 04:33:53', '2021-02-08 04:33:53'),
(252, 'Product', 'Destroy', 'Delete', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 04:34:14', '2021-02-08 04:34:14'),
(253, 'Site Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 04:46:06', '2021-02-08 04:46:06'),
(254, 'Site Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 04:48:01', '2021-02-08 04:48:01'),
(255, 'Site Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 04:48:51', '2021-02-08 04:48:51'),
(256, 'Site Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 04:48:57', '2021-02-08 04:48:57'),
(257, 'Site Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 04:52:01', '2021-02-08 04:52:01'),
(258, 'Site Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 04:52:41', '2021-02-08 04:52:41'),
(259, 'Slider CMS', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 04:54:27', '2021-02-08 04:54:27'),
(260, 'Slider CMS', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 04:55:26', '2021-02-08 04:55:26'),
(261, 'Slider CMS', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 04:55:54', '2021-02-08 04:55:54'),
(262, 'Slider CMS', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 05:04:54', '2021-02-08 05:04:54'),
(263, 'Slider CMS', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 05:06:17', '2021-02-08 05:06:17'),
(264, 'Slider CMS', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 05:08:16', '2021-02-08 05:08:16'),
(265, 'Site Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 05:09:12', '2021-02-08 05:09:12'),
(266, 'Site Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 05:10:52', '2021-02-08 05:10:52'),
(267, 'Site Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 06:39:46', '2021-02-08 06:39:46'),
(268, 'Site Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 06:40:14', '2021-02-08 06:40:14'),
(269, 'Slider CMS', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 06:42:15', '2021-02-08 06:42:15'),
(270, 'Slider CMS', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 06:42:53', '2021-02-08 06:42:53'),
(271, 'Slider CMS', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 06:43:27', '2021-02-08 06:43:27'),
(272, 'Slider CMS', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 06:43:43', '2021-02-08 06:43:43'),
(273, 'Slider CMS', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 06:44:21', '2021-02-08 06:44:21'),
(274, 'Slider CMS', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 06:46:06', '2021-02-08 06:46:06'),
(275, 'Slider CMS', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 06:47:01', '2021-02-08 06:47:01'),
(276, 'Site Social Link', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 06:48:20', '2021-02-08 06:48:20'),
(277, 'Site Social Link', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 06:48:44', '2021-02-08 06:48:44'),
(278, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 06:49:39', '2021-02-08 06:49:39'),
(279, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 06:50:10', '2021-02-08 06:50:10'),
(280, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 06:53:02', '2021-02-08 06:53:02'),
(281, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 06:53:48', '2021-02-08 06:53:48'),
(282, 'Home Page Category Position', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 06:54:37', '2021-02-08 06:54:37'),
(283, 'Home Page Category Position', 'Destroy', 'Delete', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 06:55:06', '2021-02-08 06:55:06'),
(284, 'Home Page Category Position', 'Destroy', 'Delete', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 06:55:13', '2021-02-08 06:55:13'),
(285, 'Site Setting', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 06:59:46', '2021-02-08 06:59:46'),
(286, 'Order Details', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 12:11:35', '2021-02-08 12:11:35'),
(287, 'Order Details', 'Destroy', 'Delete', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 12:12:56', '2021-02-08 12:12:56'),
(288, 'Booking Order', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-08 12:17:55', '2021-02-08 12:17:55'),
(289, 'Product', 'Destroy', 'Delete', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-02-09 05:44:09', '2021-02-09 05:44:09'),
(290, 'Manu Category CMS', 'Update', 'Edit / Modify', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-03-01 12:47:18', '2021-03-01 12:47:18'),
(291, 'High light category product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-03-01 13:08:47', '2021-03-01 13:08:47'),
(292, 'High light category product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-03-01 13:08:57', '2021-03-01 13:08:57'),
(293, 'High light category product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-03-01 13:09:06', '2021-03-01 13:09:06'),
(294, 'High light category product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-03-01 13:09:17', '2021-03-01 13:09:17'),
(295, 'High light category product', 'Save New', 'Create New', 1, 'Admin', NULL, NULL, NULL, NULL, '2021-03-01 13:09:28', '2021-03-01 13:09:28');

-- --------------------------------------------------------

--
-- Table structure for table `booking_orders`
--

CREATE TABLE `booking_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) DEFAULT '0',
  `customer_id_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payable_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type_id` int(11) DEFAULT '0',
  `payment_type_id_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_cost_id` int(11) DEFAULT '0',
  `shipping_cost_id_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_notes` longtext COLLATE utf8mb4_unicode_ci,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_orders`
--

INSERT INTO `booking_orders` (`id`, `customer_id`, `customer_id_name`, `total_amount`, `discount_amount`, `payable_amount`, `payment_type_id`, `payment_type_id_name`, `shipping_cost_id`, `shipping_cost_id_name`, `order_notes`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 'MD MAHAMUDUR Bhuyan', '5460', '0', '5460', 1, 'Cash on delivery', 1, 'Inside Dhaka', 'qqqqqqqqqqqqq', NULL, NULL, NULL, NULL, '2021-01-29 09:19:02', '2021-01-29 09:19:02'),
(2, NULL, 'MD MAHAMUDUR Bhuyan', '7020', '0', '7020', 2, 'Bkash', 2, 'Outside Dhaka', NULL, NULL, NULL, NULL, NULL, '2021-01-29 09:20:07', '2021-01-29 09:20:07'),
(3, 1, 'Saidur Rahman Siam', '70', '0', '70', 1, 'Cash on delivery', 1, 'Inside Dhaka', NULL, NULL, NULL, NULL, NULL, '2021-02-06 23:27:37', '2021-02-06 23:27:37'),
(4, 2, 'saidur rahman siam', '560', '0', '560', 1, 'Cash on delivery', 1, 'Inside Dhaka', NULL, NULL, NULL, NULL, NULL, '2021-02-08 04:20:45', '2021-02-08 04:20:45'),
(5, 18, 'Fakhrul Islam Talukder', '8860', '0', '8860', 2, 'Bkash', 1, 'Inside Dhaka', NULL, NULL, NULL, NULL, NULL, '2021-02-08 12:14:54', '2021-02-08 12:14:54'),
(6, 1, 'Saidur Rahman Siam', '500', '200', '300', 1, 'Cash on delivery', 1, 'Inside Dhaka', NULL, NULL, NULL, NULL, NULL, '2021-02-08 12:17:55', '2021-02-08 12:17:55');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `high_light_home` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `high_light_home`, `category_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Men', NULL, 'Laravel_1607798654.jpg', 'Yes', 'Active', NULL, NULL, NULL, NULL, '2020-12-05 04:30:53', '2020-12-12 12:44:14'),
(2, 'Women', 'A single day at sportswear. Sale of 20% for all product.', 'Laravel_1607114159.jpg', 'Yes', 'Active', NULL, NULL, NULL, NULL, '2020-12-05 04:35:59', '2020-12-12 12:45:08'),
(3, 'Explore Champion', 'A single day at sportswear. Sale of 20% for all product.', 'Laravel_1607114241.jpg', 'Yes', 'Active', NULL, NULL, NULL, NULL, '2020-12-05 04:37:21', '2020-12-05 04:37:21'),
(4, 'Air Jordan 32', 'A single day at sportswear. Sale of 20% for all product.', 'Laravel_1607114303.jpg', 'No', 'Inactive', NULL, NULL, NULL, NULL, '2020-12-05 04:38:23', '2020-12-20 12:53:22');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `color_code`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'orange', '#F39C11', NULL, NULL, NULL, NULL, '2020-12-01 05:05:41', '2020-12-01 06:55:09'),
(2, 'Paste', '#010912', NULL, NULL, NULL, NULL, '2020-12-02 03:38:55', '2021-01-26 03:26:09'),
(3, 'White', '#FFFFFF', NULL, NULL, NULL, NULL, '2020-12-02 03:39:26', '2020-12-02 03:39:26'),
(4, 'Black', '#000000', NULL, NULL, NULL, NULL, '2021-01-29 07:45:03', '2021-01-29 07:45:03'),
(5, 'As', '#EFE2E2', NULL, NULL, NULL, NULL, '2021-01-29 08:43:54', '2021-01-29 08:43:54');

-- --------------------------------------------------------

--
-- Table structure for table `contact_uses`
--

CREATE TABLE `contact_uses` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_uses`
--

INSERT INTO `contact_uses` (`id`, `first_name`, `last_name`, `email`, `subject`, `message`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'MD MAHAMUDUR Zaman', 'Fahad', 'f.bhuyian@gmail.com', 'Test mail', 'sdsd', NULL, NULL, NULL, NULL, '2020-12-06 11:34:12', '2020-12-06 11:34:12'),
(2, 'Joe', 'Miller', 'info@domainworld.com', '3PUGQ6VLK', 'Notice#: 491343\r\nDate: 2021-02-02  \r\n\r\nYOUR IMMEDIATE ATTENTION TO THIS MESSAGE IS ABSOLUTELY NECESSARY!\r\n\r\nYOUR DOMAIN falconfitbd.com WILL BE TERMINATED WITHIN 24 HOURS\r\n\r\nWe have not received your payment for the renewal of your domain falconfitbd.com\r\n\r\nWe have made several attempts to reach you by phone, to inform you regarding the TERMINATION of your domain falconfitbd.com\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://yourdomainregistration.ga/?n=falconfitbd.com&r=a&t=1612233927&p=v1\r\n\r\nIF WE DO NOT RECEIVE YOUR PAYMENT WITHIN 24 HOURS, YOUR DOMAIN falconfitbd.com WILL BE TERMINATED\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://yourdomainregistration.ga/?n=falconfitbd.com&r=a&t=1612233927&p=v1\r\n\r\nACT IMMEDIATELY. \r\n\r\nThe submission notification falconfitbd.com will EXPIRE WITHIN 24 HOURS after reception of this email', NULL, NULL, NULL, NULL, '2021-02-01 20:45:28', '2021-02-01 20:45:28'),
(3, 'Joe', 'Miller', 'info@domainworld.com', 'HNESJAXCK', 'Notice#: 491343\r\nDate: 2021-02-02  \r\n\r\nYOUR IMMEDIATE ATTENTION TO THIS MESSAGE IS ABSOLUTELY NECESSARY!\r\n\r\nYOUR DOMAIN falconfitbd.com WILL BE TERMINATED WITHIN 24 HOURS\r\n\r\nWe have not received your payment for the renewal of your domain falconfitbd.com\r\n\r\nWe have made several attempts to reach you by phone, to inform you regarding the TERMINATION of your domain falconfitbd.com\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://yourdomainregistration.ga/?n=falconfitbd.com&r=a&t=1612240146&p=v1\r\n\r\nIF WE DO NOT RECEIVE YOUR PAYMENT WITHIN 24 HOURS, YOUR DOMAIN falconfitbd.com WILL BE TERMINATED\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://yourdomainregistration.ga/?n=falconfitbd.com&r=a&t=1612240146&p=v1\r\n\r\nACT IMMEDIATELY. \r\n\r\nThe submission notification falconfitbd.com will EXPIRE WITHIN 24 HOURS after reception of this email', NULL, NULL, NULL, NULL, '2021-02-01 22:29:07', '2021-02-01 22:29:07'),
(4, 'Joe', 'Miller', 'info@domainworld.com', '6S0GWH5OU', 'Notice#: 491343\r\nDate: 2021-02-02  \r\n\r\nYOUR IMMEDIATE ATTENTION TO THIS MESSAGE IS ABSOLUTELY NECESSARY!\r\n\r\nYOUR DOMAIN falconfitbd.com WILL BE TERMINATED WITHIN 24 HOURS\r\n\r\nWe have not received your payment for the renewal of your domain falconfitbd.com\r\n\r\nWe have made several attempts to reach you by phone, to inform you regarding the TERMINATION of your domain falconfitbd.com\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://yourdomainregistration.ga/?n=falconfitbd.com&r=a&t=1612242285&p=v1\r\n\r\nIF WE DO NOT RECEIVE YOUR PAYMENT WITHIN 24 HOURS, YOUR DOMAIN falconfitbd.com WILL BE TERMINATED\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://yourdomainregistration.ga/?n=falconfitbd.com&r=a&t=1612242285&p=v1\r\n\r\nACT IMMEDIATELY. \r\n\r\nThe submission notification falconfitbd.com will EXPIRE WITHIN 24 HOURS after reception of this email', NULL, NULL, NULL, NULL, '2021-02-01 23:04:46', '2021-02-01 23:04:46'),
(5, 'Joe', 'Miller', 'info@domainworld.com', 'NZY4K', 'Notice#: 491343\r\nDate: 2021-02-03  \r\n\r\nYOUR IMMEDIATE ATTENTION TO THIS MESSAGE IS ABSOLUTELY NECESSARY!\r\n\r\nYOUR DOMAIN falconfitbd.com WILL BE TERMINATED WITHIN 24 HOURS\r\n\r\nWe have not received your payment for the renewal of your domain falconfitbd.com\r\n\r\nWe have made several attempts to reach you by phone, to inform you regarding the TERMINATION of your domain falconfitbd.com\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://yourdomainregistration.ga/?n=falconfitbd.com&r=a&t=1612247287&p=v1\r\n\r\nIF WE DO NOT RECEIVE YOUR PAYMENT WITHIN 24 HOURS, YOUR DOMAIN falconfitbd.com WILL BE TERMINATED\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://yourdomainregistration.ga/?n=falconfitbd.com&r=a&t=1612247287&p=v1\r\n\r\nACT IMMEDIATELY. \r\n\r\nThe submission notification falconfitbd.com will EXPIRE WITHIN 24 HOURS after reception of this email', NULL, NULL, NULL, NULL, '2021-02-02 00:28:07', '2021-02-02 00:28:07'),
(6, 'Joe', 'Miller', 'info@domainworld.com', 'RLDOS', 'Notice#: 491343\r\nDate: 2021-02-03  \r\n\r\nYOUR IMMEDIATE ATTENTION TO THIS MESSAGE IS ABSOLUTELY NECESSARY!\r\n\r\nYOUR DOMAIN falconfitbd.com WILL BE TERMINATED WITHIN 24 HOURS\r\n\r\nWe have not received your payment for the renewal of your domain falconfitbd.com\r\n\r\nWe have made several attempts to reach you by phone, to inform you regarding the TERMINATION of your domain falconfitbd.com\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://yourdomainregistration.ga/?n=falconfitbd.com&r=a&t=1612251069&p=v1\r\n\r\nIF WE DO NOT RECEIVE YOUR PAYMENT WITHIN 24 HOURS, YOUR DOMAIN falconfitbd.com WILL BE TERMINATED\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://yourdomainregistration.ga/?n=falconfitbd.com&r=a&t=1612251069&p=v1\r\n\r\nACT IMMEDIATELY. \r\n\r\nThe submission notification falconfitbd.com will EXPIRE WITHIN 24 HOURS after reception of this email', NULL, NULL, NULL, NULL, '2021-02-02 01:31:10', '2021-02-02 01:31:10'),
(7, 'Joe', 'Miller', 'info@domainworld.com', 'QCHFUMF3R', 'Notice#: 491343\r\nDate: 2021-02-03  \r\n\r\nYOUR IMMEDIATE ATTENTION TO THIS MESSAGE IS ABSOLUTELY NECESSARY!\r\n\r\nYOUR DOMAIN falconfitbd.com WILL BE TERMINATED WITHIN 24 HOURS\r\n\r\nWe have not received your payment for the renewal of your domain falconfitbd.com\r\n\r\nWe have made several attempts to reach you by phone, to inform you regarding the TERMINATION of your domain falconfitbd.com\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://yourdomainregistration.ga/?n=falconfitbd.com&r=a&t=1612251193&p=v1\r\n\r\nIF WE DO NOT RECEIVE YOUR PAYMENT WITHIN 24 HOURS, YOUR DOMAIN falconfitbd.com WILL BE TERMINATED\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://yourdomainregistration.ga/?n=falconfitbd.com&r=a&t=1612251193&p=v1\r\n\r\nACT IMMEDIATELY. \r\n\r\nThe submission notification falconfitbd.com will EXPIRE WITHIN 24 HOURS after reception of this email', NULL, NULL, NULL, NULL, '2021-02-02 01:33:14', '2021-02-02 01:33:14'),
(8, 'Joe', 'Miller', 'info@domainworld.com', 'YJLA8SFS3', 'Notice#: 491343\r\nDate: 2021-02-03  \r\n\r\nYOUR IMMEDIATE ATTENTION TO THIS MESSAGE IS ABSOLUTELY NECESSARY!\r\n\r\nYOUR DOMAIN falconfitbd.com WILL BE TERMINATED WITHIN 24 HOURS\r\n\r\nWe have not received your payment for the renewal of your domain falconfitbd.com\r\n\r\nWe have made several attempts to reach you by phone, to inform you regarding the TERMINATION of your domain falconfitbd.com\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://yourdomainregistration.ga/?n=falconfitbd.com&r=a&t=1612257529&p=v1\r\n\r\nIF WE DO NOT RECEIVE YOUR PAYMENT WITHIN 24 HOURS, YOUR DOMAIN falconfitbd.com WILL BE TERMINATED\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://yourdomainregistration.ga/?n=falconfitbd.com&r=a&t=1612257529&p=v1\r\n\r\nACT IMMEDIATELY. \r\n\r\nThe submission notification falconfitbd.com will EXPIRE WITHIN 24 HOURS after reception of this email', NULL, NULL, NULL, NULL, '2021-02-02 03:18:50', '2021-02-02 03:18:50'),
(9, 'Joe', 'Miller', 'info@domainworld.com', 'LHBI9', 'Notice#: 491343\r\nDate: 2021-02-03  \r\n\r\nYOUR IMMEDIATE ATTENTION TO THIS MESSAGE IS ABSOLUTELY NECESSARY!\r\n\r\nYOUR DOMAIN falconfitbd.com WILL BE TERMINATED WITHIN 24 HOURS\r\n\r\nWe have not received your payment for the renewal of your domain falconfitbd.com\r\n\r\nWe have made several attempts to reach you by phone, to inform you regarding the TERMINATION of your domain falconfitbd.com\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://yourdomainregistration.ga/?n=falconfitbd.com&r=a&t=1612260268&p=v1\r\n\r\nIF WE DO NOT RECEIVE YOUR PAYMENT WITHIN 24 HOURS, YOUR DOMAIN falconfitbd.com WILL BE TERMINATED\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://yourdomainregistration.ga/?n=falconfitbd.com&r=a&t=1612260268&p=v1\r\n\r\nACT IMMEDIATELY. \r\n\r\nThe submission notification falconfitbd.com will EXPIRE WITHIN 24 HOURS after reception of this email', NULL, NULL, NULL, NULL, '2021-02-02 04:04:29', '2021-02-02 04:04:29'),
(10, 'Joe', 'Miller', 'info@domainworld.com', '9I7WH16CV', 'Notice#: 491343\r\nDate: 2021-02-03  \r\n\r\nYOUR IMMEDIATE ATTENTION TO THIS MESSAGE IS ABSOLUTELY NECESSARY!\r\n\r\nYOUR DOMAIN falconfitbd.com WILL BE TERMINATED WITHIN 24 HOURS\r\n\r\nWe have not received your payment for the renewal of your domain falconfitbd.com\r\n\r\nWe have made several attempts to reach you by phone, to inform you regarding the TERMINATION of your domain falconfitbd.com\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://yourdomainregistration.ga/?n=falconfitbd.com&r=a&t=1612262853&p=v1\r\n\r\nIF WE DO NOT RECEIVE YOUR PAYMENT WITHIN 24 HOURS, YOUR DOMAIN falconfitbd.com WILL BE TERMINATED\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://yourdomainregistration.ga/?n=falconfitbd.com&r=a&t=1612262853&p=v1\r\n\r\nACT IMMEDIATELY. \r\n\r\nThe submission notification falconfitbd.com will EXPIRE WITHIN 24 HOURS after reception of this email', NULL, NULL, NULL, NULL, '2021-02-02 04:47:34', '2021-02-02 04:47:34'),
(11, 'Parthenia', 'Bracker', 'bracker.parthenia70@outlook.com', 'Take a closer look at your website falconfitbd.com', 'Good Afternoon \r\nHope you’re great, and that customers are good.\r\nTo become the most effective among your competitors you need this tool to talk with clients in your site.\r\nhttps://jtbtigers.com/backlinks676639\r\nRegards,', NULL, NULL, NULL, NULL, '2021-02-02 05:13:18', '2021-02-02 05:13:18'),
(12, 'Joe', 'Miller', 'info@domainworld.com', 'W3SX0', 'Notice#: 491343\r\nDate: 2021-02-03  \r\n\r\nYOUR IMMEDIATE ATTENTION TO THIS MESSAGE IS ABSOLUTELY NECESSARY!\r\n\r\nYOUR DOMAIN falconfitbd.com WILL BE TERMINATED WITHIN 24 HOURS\r\n\r\nWe have not received your payment for the renewal of your domain falconfitbd.com\r\n\r\nWe have made several attempts to reach you by phone, to inform you regarding the TERMINATION of your domain falconfitbd.com\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://yourdomainregistration.ga/?n=falconfitbd.com&r=a&t=1612266183&p=v1\r\n\r\nIF WE DO NOT RECEIVE YOUR PAYMENT WITHIN 24 HOURS, YOUR DOMAIN falconfitbd.com WILL BE TERMINATED\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://yourdomainregistration.ga/?n=falconfitbd.com&r=a&t=1612266183&p=v1\r\n\r\nACT IMMEDIATELY. \r\n\r\nThe submission notification falconfitbd.com will EXPIRE WITHIN 24 HOURS after reception of this email', NULL, NULL, NULL, NULL, '2021-02-02 05:43:04', '2021-02-02 05:43:04'),
(13, 'Javier Jomez', 'Javier Jomez', 'awardnotification2021@gmail.com', 'WINNING  NOTIFICATION.', 'LA PRIMITIVA  LOTTERY AWARD, MADRID SPAIN \r\nYour Reference: No: FU/578629K \r\nCongratulations! Your E-mail address has won With winning lucky number No:3 26 31 35 46 49, The results for the Internet users were released. \r\nThis E-mail lottery was sponsored by International software organization, Your e-mail address was attached to the lucky number  that was how your E-mail won the lump sum amount. \r\nPlease contact your claims agent/legal office: Pedro Jose, to being your claims call:Tel:+34 672 520 003 and Fax:+34 91 272 50 79 \r\nEmail: Awardnotificatios1721@gmx.com,  Email: winingnotifications2021@gmail.com. \r\nYours Sincerely. \r\nDr. Don Javier Jomez \r\nReply To This Email: Awardnotificatios1721@gmx.com \r\nReply To This Email: winingnotifications2021@gmail.com \r\nPhone: +34 672 520 000 \r\nPresident  International Relations Department.', NULL, NULL, NULL, NULL, '2021-02-03 08:37:25', '2021-02-03 08:37:25'),
(14, 'Wilton Choma', 'Millard Rew', 'EhtelLowndes@gmail.com', 'Minh Guilboard', 'Do you need more serious customers for your website? We can deliver keyword targeted people tailored for your type of business To get details Visit: http://bit.ly/hi-quality-web-traffic', NULL, NULL, NULL, NULL, '2021-02-03 09:39:41', '2021-02-03 09:39:41'),
(15, 'Mike Coleman', 'Mike Coleman', 'no-reply@google.com', 'affordable monthly SEO plans', 'Howdy \r\n \r\nI have just checked  falconfitbd.com for its SEO metrics and saw that your website could use an upgrade. \r\n \r\nWe will enhance your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart enhancing your sales and leads with us, today! \r\n \r\nregards \r\nMike Coleman\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', NULL, NULL, NULL, NULL, '2021-02-04 09:40:14', '2021-02-04 09:40:14'),
(16, 'Salina', 'Bolivar', 'salina.bolivar@gmail.com', 'falconfitbd.com website backlinks, have arrived!', 'Good morning \r\nHope you’re well, and that customers are good.\r\nTo beat other programs, you need this service.\r\nhttps://itspecialist.shop/backlinks-generator\r\nBest regards,\r\n\r\nP.S.We wish you a million clients this year.', NULL, NULL, NULL, NULL, '2021-02-04 13:39:16', '2021-02-04 13:39:16'),
(17, 'Aimee', 'Knatchbull', 'knatchbull.aimee@yahoo.com', 'Question', 'Hello,\r\n\r\nAre you using Wordpress/Woocommerce or maybe will you intend to use it as time goes by ? We currently provide much more than 5000 premium plugins as well as themes to down load : http://respot.online/NuVV7\r\n\r\nThank You,\r\n\r\nAimee', NULL, NULL, NULL, NULL, '2021-02-04 16:34:23', '2021-02-04 16:34:23'),
(18, 'direekeency', 'direekeency', 'seritawalts4075@gmail.com', 'games for mobile samsung champ deluxe c3312', '<a href=http://aviasoft-pocket-birds-europe-skype.cloud/pebble-app-store-android.php>pebble app store android</a> <a href=http://aviasoft-pocket-birds-europe-skype.cloud/grimoire-for-the-green-witch-games.php>grimoire for the green witch games</a> <a href=http://aviasoft-pocket-birds-europe-skype.cloud/warcraft-3-frozen-throne-battlenet.php>warcraft 3 frozen throne battlenet</a> <a href=http://aviasoft-pocket-birds-europe-skype.cloud/do-ri-7-0-speed.php>do ri 7 0 speed</a> <a href=http://aviasoft-pocket-birds-europe-skype.cloud/weapons-of-war-online-games.php>weapons of war online games</a> <a href=http://aviasoft-pocket-birds-europe-skype.cloud/cronache-di-magnus-bane.php>cronache di magnus bane</a>  \r\n<a href=http://aviasoft-pocket-birds-europe-skype.cloud/do-livro-exercicios-terapeuticos-kisner.php>do livro exercicios terapeuticos kisner</a> <a href=http://aviasoft-pocket-birds-europe-skype.cloud/dvd-da-galinha-pintadinha-4-completo.php>dvd da galinha pintadinha 4 completo</a> <a href=http://aviasoft-pocket-birds-europe-skype.cloud/football-manager-2013-update-1333-games.php>football manager 2013 update 13.3.3 games</a> <a href=http://aviasoft-pocket-birds-europe-skype.cloud/adams-lightroom-cinema-4d.php>adams lightroom cinema 4d</a> <a href=http://aviasoft-pocket-birds-europe-skype.cloud/herbert-marcuse-em-pdf.php>herbert marcuse em pdf</a> <a href=http://aviasoft-pocket-birds-europe-skype.cloud/kresley-cole-epub-er.php>kresley cole epub er</a>  \r\n<a href=http://aviasoft-pocket-birds-europe-skype.cloud/rata-blanca-vii-adobe.php>rata blanca vii adobe</a> <a href=http://aviasoft-pocket-birds-europe-skype.cloud/map192.php>nmra dcc frequency table</a> <a href=http://aviasoft-pocket-birds-europe-skype.cloud/mamuka-charkviani-grenades-axlos.php>mamuka charkviani grenades axlos</a> <a href=http://aviasoft-pocket-birds-europe-skype.cloud/tv-serial-episode-website.php>tv serial episode website</a> <a href=http://aviasoft-pocket-birds-europe-skype.cloud/nhac-hot-vn-2016.php>nhac hot vn 2016</a> <a href=http://aviasoft-pocket-birds-europe-skype.cloud/descargar-un-archivo-de-calameo.php>descargar un archivo de calameo</a>  \r\n<a href=http://aviasoft-pocket-birds-europe-skype.cloud/igi-2-game-for.php>igi 2 game for</a> <a href=http://aviasoft-pocket-birds-europe-skype.cloud/map630.php>india map with cities</a> <a href=http://aviasoft-pocket-birds-europe-skype.cloud/love-stories-books-in-english.php>love stories books in english</a> <a href=http://aviasoft-pocket-birds-europe-skype.cloud/odes-to-common-things-pdf.php>odes to common things pdf</a> <a href=http://aviasoft-pocket-birds-europe-skype.cloud/emule-plus-12-e-gratis.php>emule plus 1.2 e gratis</a> <a href=http://aviasoft-pocket-birds-europe-skype.cloud/nathan-baker-fifa-16.php>nathan baker fifa 16</a>  \r\n \r\n \r\nhttp://www.program.data', NULL, NULL, NULL, NULL, '2021-02-05 07:08:38', '2021-02-05 07:08:38'),
(19, 'Eric', 'Jones', 'ericjonesonline@outlook.com', 'Strike when the iron’s hot', 'Hey there, I just found your site, quick question…\r\n\r\nMy name’s Eric, I found falconfitbd.com after doing a quick search – you showed up near the top of the rankings, so whatever you’re doing for SEO, looks like it’s working well.\r\n\r\nSo here’s my question – what happens AFTER someone lands on your site?  Anything?\r\n\r\nResearch tells us at least 70% of the people who find your site, after a quick once-over, they disappear… forever.\r\n\r\nThat means that all the work and effort you put into getting them to show up, goes down the tubes.\r\n\r\nWhy would you want all that good work – and the great site you’ve built – go to waste?\r\n\r\nBecause the odds are they’ll just skip over calling or even grabbing their phone, leaving you high and dry.\r\n\r\nBut here’s a thought… what if you could make it super-simple for someone to raise their hand, say, “okay, let’s talk” without requiring them to even pull their cell phone from their pocket?\r\n  \r\nYou can – thanks to revolutionary new software that can literally make that first call happen NOW.\r\n\r\nTalk With Web Visitor is a software widget that sits on your site, ready and waiting to capture any visitor’s Name, Email address and Phone Number.  It lets you know IMMEDIATELY – so that you can talk to that lead while they’re still there at your site.\r\n  \r\nYou know, strike when the iron’s hot!\r\n\r\nCLICK HERE http://www.talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nWhen targeting leads, you HAVE to act fast – the difference between contacting someone within 5 minutes versus 30 minutes later is huge – like 100 times better!\r\n\r\nThat’s why you should check out our new SMS Text With Lead feature as well… once you’ve captured the phone number of the website visitor, you can automatically kick off a text message (SMS) conversation with them. \r\n \r\nImagine how powerful this could be – even if they don’t take you up on your offer immediately, you can stay in touch with them using text messages to make new offers, provide links to great content, and build your credibility.\r\n\r\nJust this alone could be a game changer to make your website even more effective.\r\n\r\nStrike when  the iron’s hot!\r\n\r\nCLICK HERE http://www.talkwithcustomer.com to learn more about everything Talk With Web Visitor can do for your business – you’ll be amazed.\r\n\r\nThanks and keep up the great work!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – you could be converting up to 100x more leads immediately!   \r\nIt even includes International Long Distance Calling. \r\nStop wasting money chasing eyeballs that don’t turn into paying customers. \r\nCLICK HERE http://www.talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you''d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=falconfitbd.com', NULL, NULL, NULL, NULL, '2021-02-06 10:54:32', '2021-02-06 10:54:32'),
(20, 'David Song', 'David Song', 'noreply@googlemail.com', 'PROJECT FUNDING', 'Hello, \r\nOur Investors wishes to invest in your company by offering debt financing in any viable Project presented by your Management,Kindly send your Business Project Presentation Plan Asap. \r\n \r\ndavidsong2030@gmail.com \r\n \r\nRegards, \r\nMr.David Song', NULL, NULL, NULL, NULL, '2021-02-06 11:55:38', '2021-02-06 11:55:38'),
(21, 'direekeency', 'direekeency', 'blankabryan243@gmail.com', 'lagu cracks of my broken heart eunhyuk', '<a href=http://kesrepro.info/rihanna-loud-album-pirate-bay-3.php>rihanna loud album pirate bay</a> <a href=http://kesrepro.info/lazu-da-vreme-leci-sve-games-4.php>lazu da vreme leci sve games</a> <a href=http://kesrepro.info/tomcat-portable-apps-s-5.php>tomcat portable apps s</a> <a href=http://kesrepro.info>living music live wallpaper android</a> <a href=http://kesrepro.info/map1.php>rihanna loud album pirate bay</a> <a href=http://kesrepro.info/i-just-ride-lana-del-rey-s-1.php>i just ride lana del rey s</a> <a href=http://kesrepro.info/oxford-mini-dictionary-for-java-phone-2.php>oxford mini dictionary for java phone</a>', NULL, NULL, NULL, NULL, '2021-02-06 12:33:31', '2021-02-06 12:33:31'),
(22, 'Eric', 'Jones', 'eric.jones.z.mail@gmail.com', 'Who needs eyeballs, you need BUSINESS', 'My name’s Eric and I just came across your website - falconfitbd.com - in the search results.\r\n\r\nHere’s what that means to me…\r\n\r\nYour SEO’s working.\r\n\r\nYou’re getting eyeballs – mine at least.\r\n\r\nYour content’s pretty good, wouldn’t change a thing.\r\n\r\nBUT…\r\n\r\nEyeballs don’t pay the bills.\r\n\r\nCUSTOMERS do.\r\n\r\nAnd studies show that 7 out of 10 visitors to a site like falconfitbd.com will drop by, take a gander, and then head for the hills without doing anything else.\r\n\r\nIt’s like they never were even there.\r\n\r\nYou can fix this.\r\n\r\nYou can make it super-simple for them to raise their hand, say, “okay, let’s talk” without requiring them to even pull their cell phone from their pocket… thanks to Talk With Web Visitor.\r\n\r\nTalk With Web Visitor is a software widget that sits on your site, ready and waiting to capture any visitor’s Name, Email address and Phone Number.  It lets you know immediately – so you can talk to that lead immediately… without delay… BEFORE they head for those hills.\r\n  \r\nCLICK HERE https://talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nNow it’s also true that when reaching out to hot leads, you MUST act fast – the difference between contacting someone within 5 minutes versus 30 minutes later is huge – like 100 times better!\r\n\r\nThat’s what makes our new SMS Text With Lead feature so powerful… you’ve got their phone number, so now you can start a text message (SMS) conversation with them… so even if they don’t take you up on your offer right away, you continue to text them new offers, new content, and new reasons to do business with you.\r\n\r\nThis could change everything for you and your business.\r\n\r\nCLICK HERE https://talkwithwebvisitors.com to learn more about everything Talk With Web Visitor can do and start turing eyeballs into money.\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – you could be converting up to 100x more leads immediately!   \r\nIt even includes International Long Distance Calling. \r\nPaying customers are out there waiting. \r\nStarting connecting today by CLICKING HERE https://talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you''d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=falconfitbd.com', NULL, NULL, NULL, NULL, '2021-02-06 18:32:59', '2021-02-06 18:32:59'),
(23, 'Zacharyplari', 'ZacharyplariSF', 'kudukulisprime@gmail.com', 'turbo dismount pc softonic', 'Regarding the past question - <a href=http://surf-mates.com/page4.html>angry birds for pc windows 7</a>\r\n \r\n \r\nThe same way levon vincent bandcamp er see amid the winter''s snow pdf  more o recreio da anita skype nunamiut ethnoarchaeology binford pdf  and zurnalas ji internet explorer  \r\n \r\nPerhaps abbyy flexicapture 10 crack idm made to love tobymac photoshop for mac osx spyro the dragon ps3 uk top estm 6400 ultimix s  spalten in zeilen umwandeln matlab update metasploit kali linux search and restore tv show sites clockwork b o a t s tamilwire subhamita banerjee rabindra sangeet sites , <a href=http://surf-mates.com/page4.html>angry birds for pc windows 7</a>\r\n \r\n \r\nIt''s possible love struck me down wanting java 8 for windows 10 feluda 30 tv series bodybangers no limit radio edit s ridsa nouvelle album 2015  <a href=http://surf-mates.com>a er for firefox</a>\r\n  bleach 01 sub indo anime think essentials z wave software  \r\n \r\nMaybe wpa2 dictionary list software fm 2013 sigames patch sims 3 crack only hp designjet 110plus nr driver a kid named cudi full album bella''s lullaby original version  <a href=http://surf-mates.com>a er for firefox</a>\r\n  can''t stand losing you surviving the police sooner or later adrian lux skype foo fighters skin and bones catholic night prayer breviary guide dev c for windows 8  \r\n \r\nIf you want to know more <a href=http://surf-mates.com/page2.html>hamara dil aapke paas hai hd</a>', NULL, NULL, NULL, NULL, '2021-02-09 04:37:50', '2021-02-09 04:37:50'),
(24, 'RobertKep', 'RobertKepJX', 'rafailzagaraeva19975638nw@mail.ru', 'Fahren Sie mit der Bitcoin-Welle und verdienen Sie garantierte 13.000 EURO in genau 24 Stunden', '<br> \r\n<br> \r\n<a href="https://google.com?mmmbnbnbm"> <img src="https://1.bp.blogspot.com/-E8mqt5-04Ss/X-ZGe82dkNI/AAAAAAAAAZc/hVNythlqysQX3U2B9ZJ_DALIrpqLsWf9ACLcBGAsYHQ/s1024/03.jpg?lu=qv\r\n" /> </a> \r\n<br> \r\n<br> \r\nvvvvccccbfffffrrrreeeeeee \r\n<br> \r\n<br> \r\n \r\npyaalbaeobpnlppkqlauolpyou ablbaeljoeps qrqvarpcoaab phlxlfatlepwaq opqopdlflz prpwljpmqnqyoiar aaqcaaqkqeqhlx \r\najagqvlrqpqooapqawaulqabqq acappaoppjpi onauoypkaslz qxqzauabauazpl ovocpgagpo pgorpzqdoeqhotpu ohaualpzpnltqr \r\nlyajlgoiphlcotakppqpahqyae aaogofarlvqb lapklnpmlgas qeqyazlhadliot oipopxqbqd ptpvoelvlyaylgoj paanlnlxaaluok \r\nobpfpyovlspnavqzaeldokqpqw ohlnpnqdqilr pnpbatpbpjok pglipelnqdljps pbacappkaa pfokquacoaowlkaa lylbafolquoelv \r\npqovplpoozaeozanqopeomazlx ljqpqzazavoj ataypbqdlmoe ozpkacorlrawap qjanpvaplm paogqnqhonaflzqb ljaapfpxpqqnpn \r\nabpzlhqxpfamajlaogokobljad pdquqkarovlz lkopokqeloab avpdqhqqoxaclu avlhqdappw pmlnohpuqxlgqmom lnoqpflclkqxoo \r\noupiquouovlvpvlkluahojldqk leazagoeouok asoxqxlrqkax lloraionollpla oiljqpqipv pvowpzplatavosqd peqqqapflkpsab \r\npqlalwlbqxlvpzqyotpipalkoc pflhouobqaac oulzoqpelxao qhonlylxqiljog anabagovab araxpipipalioglr otpuljqoajalaw \r\npyldalauqfpianappbqmakacor acpnpaotaupl qnaoaalnonph qlpilmqrqzohly ouatouacan pslcaoqxocpyonpp lgljakquouluat \r\noupwocapafqhamoslmomogacpc qsapomowaiof lhatotqjatos ltlwlkpqowpoqp oypcatpjlb ldpxprqtpdqhqros ampclbpyqrosaj \r\npiodoaotoopaofllqwotavqjoo oppgavloatlj aepaoxlkofah lhapayleluaupp alqhpuaupe peqwablspeooople amlcqyamojoboz \r\nqaauqelilvaolsacosqqaaqlqn okpzpdpelbac lsqyqzlsaipa qrphqpaopzqqqc lpoqlalylq auauauleayarpyoi pwacavpepqoelc', NULL, NULL, NULL, NULL, '2021-02-09 05:48:50', '2021-02-09 05:48:50'),
(25, 'Tunvir', 'Rakib', 'tanvirrakib@gmail.com', 'discount', 'please assist', NULL, NULL, NULL, NULL, '2021-02-09 06:29:52', '2021-02-09 06:29:52'),
(26, 'direekeency', 'direekeency', 'seritawalts4075@gmail.com', 'alexander apartments thassos greece', '<a href=http://pwnagetool-windows-live-messenger.com/mac-os-x-iso-hazard.php>mac os x iso hazard</a> <a href=http://pwnagetool-windows-live-messenger.com/moto-gp-2-pc.php>moto gp 2 pc</a> <a href=http://pwnagetool-windows-live-messenger.com/map224.php>set folder xbmc mashup replacement</a> <a href=http://pwnagetool-windows-live-messenger.com/mc-wii-u-update.php>mc wii u update</a> <a href=http://pwnagetool-windows-live-messenger.com/mac-pro-photo-booth-effects.php>mac pro photo booth effects</a> <a href=http://pwnagetool-windows-live-messenger.com/pongki-barata-meet-the-stars-album.php>pongki barata meet the stars album</a> <a href=http://pwnagetool-windows-live-messenger.com/stabu-bestek-en-muziek.php>stabu bestek en muziek</a>', NULL, NULL, NULL, NULL, '2021-02-09 08:11:36', '2021-02-09 08:11:36'),
(27, 'Sadye', 'Lyttle', 'sadye.lyttle@gmail.com', 'Enhance - falconfitbd.com', 'Good evening\r\nDo you want to optimize your website? Finally, a comprehensive service where you can sit back and let us do everything for you. Let us help you:\r\nhttps://bogazicitente.com/websitefix760624\r\nHave great day!\r\nSincerely,', NULL, NULL, NULL, NULL, '2021-02-10 08:11:17', '2021-02-10 08:11:17'),
(28, 'Peter', 'McLemore', 'tammy.mclemore@gmail.com', 'Negative SEO Services', 'Greetings\r\n\r\nIf you ever need Negative SEO work, we offer it right here\r\nhttps://speed-seo.net/product/negative-seo-service/\r\n\r\n\r\nthank you\r\nPeter McLemore\r\nSpeed SEO Agency\r\nsupport@speed-seo.net', NULL, NULL, NULL, NULL, '2021-02-11 15:52:16', '2021-02-11 15:52:16'),
(29, 'Buffy Bard', 'Haydee Cassaday', 'JarrodProsise@gmail.com', 'Jarred Loseke', 'Looking for more business for your website or online store? We can deliver targeted visitors precisely for your type of business To find out more Visit: http://bit.ly/hi-quality-web-traffic', NULL, NULL, NULL, NULL, '2021-02-12 20:39:11', '2021-02-12 20:39:11'),
(30, 'MR HO CHOI', 'MR HO CHOI', 'vfuga213@execs.com', 'INVESTMENT PORTFOLIO', 'Greetings, I have been tasked with identifying, initiating and possibly developing a business partnership with you / your company. I checked recommendation sites, corporate social networking sites, interviewed a few list investors and made a list of potential partners that identified you and your business. I visited your website and saw your products. I have to say that I am very impressed with the quality of your products. Therefore, we would like your company to ship large quantities of your product to our country for commercial use. Please contact me for more information on our requirements / orders and shipping deadlines. Best regards. HO CHOI email ..... hchoi382@gmail.com', NULL, NULL, NULL, NULL, '2021-02-13 22:50:41', '2021-02-13 22:50:41'),
(31, 'Eric', 'Jones', 'ericjonesonline@outlook.com', 'Cool website!', 'Cool website!\r\n\r\nMy name’s Eric, and I just found your site - falconfitbd.com - while surfing the net. You showed up at the top of the search results, so I checked you out. Looks like what you’re doing is pretty cool.\r\n \r\nBut if you don’t mind me asking – after someone like me stumbles across falconfitbd.com, what usually happens?\r\n\r\nIs your site generating leads for your business? \r\n \r\nI’m guessing some, but I also bet you’d like more… studies show that 7 out 10 who land on a site wind up leaving without a trace.\r\n\r\nNot good.\r\n\r\nHere’s a thought – what if there was an easy way for every visitor to “raise their hand” to get a phone call from you INSTANTLY… the second they hit your site and said, “call me now.”\r\n\r\nYou can –\r\n  \r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It lets you know IMMEDIATELY – so that you can talk to that lead while they’re literally looking over your site.\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nTime is money when it comes to connecting with leads – the difference between contacting someone within 5 minutes versus 30 minutes later can be huge – like 100 times better!\r\n\r\nThat’s why we built out our new SMS Text With Lead feature… because once you’ve captured the visitor’s phone number, you can automatically start a text message (SMS) conversation.\r\n  \r\nThink about the possibilities – even if you don’t close a deal then and there, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nWouldn’t that be cool?\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\nEric\r\n\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you''d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=falconfitbd.com', NULL, NULL, NULL, NULL, '2021-02-14 05:10:31', '2021-02-14 05:10:31'),
(32, 'Alex', 'Barth', 'alex.barth@gmail.com', 'Facebook page reviews, inside for falconfitbd.com', 'Good morning,\r\nI''m ,\r\nHow are you doing regarding your Facebook Page Reviews?\r\nFacebook reviews improve click-through rates. It’s vital to have customers to click your link, and a good assortment of positive reviews entices individuals to function that.\r\nCheck what we can perform for you: \r\nwww.facebook-reviews.site\r\nKind regards,\r\n\r\nP.S.We wish you thousands of clients this year.', NULL, NULL, NULL, NULL, '2021-02-15 02:01:36', '2021-02-15 02:01:36'),
(33, 'Amee', 'Herlitz', 'herlitz.amee@yahoo.com', 'Problem', 'Hi there falconfitbd.com,\r\nAre you aware of the brand new enemy that is lurking on the horizon these days? If you‘re such a person that spent at least 3 hours on your computer or other devices every day, you ‘ill likely suffer neck pain.\r\nSome pains are good to ignore at once.\r\nBut is the neck-pain a concern?\r\nYes, it is.\r\nIt should be a serious concern for you to never ignore. Of course, it may lead to severe complexities if not dealt with earlier. \r\nThe major cause of the pain in the neck!\r\nPoor posture... oh, GOD!\r\nUnfortunately, that is the primary cause of the neck pain of this time.\r\nSitting uneven on a chair for long hours or sleeping not in a good position may quickly lead you towards severe neck pain.\r\nWhat Should You Do? Seek a solution.\r\nInterestingly, you can handle neck pain problems with a simple solution.     \r\nGet a neck-massage smart device that is adjustable, and you can use it anywhere you go.\r\nSee it here: neckbc.com . It is currently sold at a 50% discounted price even at its affordable price. \r\nDo NOT take neck-pain a light-weighted sort of pain. Your spine cord may be involved.', NULL, NULL, NULL, NULL, '2021-02-15 11:32:44', '2021-02-15 11:32:44'),
(34, 'direekeency', 'direekeency', 'seritawalts4075@gmail.com', 'video naruto shippuden episode 70 sub indonesia', '<a href=http://anime-rio-rainbow-gate-sub-indo-kurnia.com/fernsehfilme-kostenlos-en-muziek.php>fernsehfilme kostenlos en muziek</a> <a href=http://anime-rio-rainbow-gate-sub-indo-kurnia.com/zaidimu-balsas-far-cry-4.php>zaidimu balsas far cry 4</a> <a href=http://anime-rio-rainbow-gate-sub-indo-kurnia.com/singur-acasa-1-online-subtitrat-in-romana.php>singur acasa 1 online subtitrat in romana</a> <a href=http://anime-rio-rainbow-gate-sub-indo-kurnia.com/lebron-james-1-hour-workouts.php>lebron james 1 hour workouts</a> <a href=http://anime-rio-rainbow-gate-sub-indo-kurnia.com/no-band-akulah-serigala-adobe.php>no band akulah serigala adobe</a> <a href=http://anime-rio-rainbow-gate-sub-indo-kurnia.com/tulane-microsoft-office-for-students.php>tulane microsoft office for students</a> <a href=http://anime-rio-rainbow-gate-sub-indo-kurnia.com/crystal-castles-not-in-love-grandtheft.php>crystal castles not in love grandtheft</a>', NULL, NULL, NULL, NULL, '2021-02-15 13:00:46', '2021-02-15 13:00:46'),
(35, 'Delbert', 'Horne', 'realidgod@gmail.com', 'buy fake ids', 'The best fake id maker in the market for over 15 years\r\n\r\nread our reviews and testimonials\r\nhttps://www.trustpilot.com/review/idgod.ch\r\nhttps://scamadviser.com/check-website/idgod.ch\r\nhttps://www.sitejabber.com/online-business-review?url=idgod.ch', NULL, NULL, NULL, NULL, '2021-02-15 21:25:44', '2021-02-15 21:25:44'),
(36, 'Leo Escalero', 'Terrance Tlucek', 'ToddGalyon@gmail.com', 'Sterling Stracquatanio', 'Promote your site without cost here!: http://bit.ly/free-ad-websites', NULL, NULL, NULL, NULL, '2021-02-16 10:56:25', '2021-02-16 10:56:25'),
(37, 'Williambaish', 'WilliambaishTZ', 'artofnegotiations@theonlinepublishers.com', 'How negotiations work! A must read book', 'LISTENEVERYHOW – How Negotiations Work, is an easy-to-read book and pragmatic approach to get the best results from a negotiation. It is adaptable in content and style – as a story book for leisure readers, life skills manual for entrepreneurs and professionals, or even as a business school handbook. \r\n \r\nThis book is written with clarity and easy eloquence of a man who knows what he is talking about, telling captivating stories in well sequenced chapters that all end with enticing nuggets. A rudiment skill in negotiation is listening and the major themes of this book are reflective of the insights that make the difference in negotiations. \r\n \r\nYou are one click away from having this excellent book for just $5.99 https://www.amazon.com/dp/B08W5DMQV3/ref=cm_sw_r_cp_awdb_t1_6E8T8CE1VW6P49PPQF8F_nodl', NULL, NULL, NULL, NULL, '2021-02-16 17:28:03', '2021-02-16 17:28:03'),
(38, 'Ursula', 'Strode', 'baesidegrill@gmail.com', 'Made to Order Sweets & Catering', 'I was wondering if you have a need for CATERING SERVICES.\r\n\r\nWe are offering free FOOD SERVICES.\r\n\r\nCheck us out at https://www.instagram.com/baesidegrill/ or call 416-670-1862\r\n\r\nEmail us at baesidegrill@gmail.com and try us out!\r\n\r\nThanks,\r\nBindiya\r\n\r\n-------\r\n\r\nReport any unsolicited messages \r\nhttp://help.instagram.com/contact/383679321740945?helpref=page_content', NULL, NULL, NULL, NULL, '2021-02-16 23:25:49', '2021-02-16 23:25:49'),
(39, 'Damion', 'Damion', 'info@falconfitbd.com', 'Admin falconfitbd.com', 'You Won''t Want To Miss This!  50 pcs medical surgical masks only $1.99 and N95 Mask $1.79 each.  \r\n\r\nOnly 10 orders left!  Get yours here: pharmacyusa.online\r\n\r\nKind Regards,\r\n\r\nContact Us', NULL, NULL, NULL, NULL, '2021-02-17 08:16:13', '2021-02-17 08:16:13'),
(40, 'Stefan', 'Aachen', 'baesidegrill@gmail.com', 'Made to Order Sweets & Catering', 'I was wondering if you have a need for CATERING SERVICES.\r\n\r\nWe are offering free FOOD SERVICES.\r\n\r\nCheck us out at https://www.instagram.com/baesidegrill/ or call 416-670-1862\r\n\r\nEmail us at baesidegrill@gmail.com and try us out!\r\n\r\nThanks,\r\nBindiya\r\n\r\n-------\r\n\r\nReport any unsolicited messages \r\nhttp://help.instagram.com/contact/383679321740945?helpref=page_content', NULL, NULL, NULL, NULL, '2021-02-17 12:19:18', '2021-02-17 12:19:18'),
(41, 'Евгений', 'Евгений', 'pvbhrtni@mail.ru', 'Подскажите, актуален для Вас вопрос привлечение новых клиентов?', 'Представьте, что Ваше коммерческое предложение отправлено в формы обратной связи миллиона сайтов. \r\nКак считаете, сколько заявок Вы получите? \r\nПредставьте, что даже всего 1% обратили внимание на Ваше предложение, это 10 000 человек. \r\nДаже если 1% из них целевые, это 100 потенциальных клиентов, которые хотят заказать Ваш продукт. \r\n \r\nНо все зависит от Вашего направления. Например, вряд-ли предпринимателю из Санкт-Петербурга будет интересна доставка пиццы в Сочи. \r\nНо если Вашу услугу можно заказать онлайн или у Вас B2B направление (любые услуги, в которых целевая аудитория другие компании/предприниматели), то такая реклама идеально для Вас подойдет. \r\nНапример, Вы фрилансер, маркетолог, у Вас интернет-магазин или даже продаете мед.маски оптом. \r\nБольшой плюс рассылки по формам в том, что т.к. львиная доля ЦА владельцы/администраторы сайтов, поэтому средняя платежеспособность ЦА высокая. \r\nКонечно, среди миллиона сайтов будут и сайты-блоги, далеко не все получатели будут целевыми. \r\nНо из-за очень больших объемов, даже 1% = огромный охат. \r\n \r\nТеперь перейдем к гарантиям. \r\nМы понимаем, что в интернете встречается всякое, поэтому чтобы Вам было спокойнее: \r\n1)Перед рассылкой мы предоставим скриншот из программы с Вашим проектом, подтверждающий готовность к запуску \r\n2)Во время рассылки у Вас будет доступ к обратному емайлу, чтобы Вы могли отслеживать процесс рассылки в онлайн-режиме \r\n3)По завершении рассылки отправим скриншоты с подробными отчетами о результатах рассылки, подтверждающие выполнение обязательств с нашей стороны. \r\n \r\nХотите, составим для Вас коммерческое предложение, согласуем с Вами и запустим рекламу? \r\nСвяжитесь с нами в течении суток и в качестве бонуса составление оффера будет бесплатным. \r\nВсе подробности также отправим в ответном сообщении. \r\nНаш E-mail: arsatithos1987@mail.ru \r\n \r\nВАЖНО: \r\nПожалуйста, в сообщении указывайте Ваш контактный ватсап либо телеграм, для удобной и более оперативной связи. \r\nНазванивать или использовать Ваши контакты для какой-либо другой цели, кроме оперативной связи мы не будем. \r\n \r\nP.S. Извините за беспокойство, если мы с Вами уже сотрудничаем. \r\nС Уважением, руководитель команды Formarketing.', NULL, NULL, NULL, NULL, '2021-02-18 08:12:23', '2021-02-18 08:12:23'),
(42, 'JasonInfor', 'JasonInforMG', 'viktorysherden@gmail.com', '19yanv', '<?xml version="1.0" encoding="UTF-8"?> \r\n<XRumerProject> \r\n<PrimarySection> \r\n<ProjectName>6subs</ProjectName> \r\n<NickName>direekeency</NickName> \r\n<RealName>direekeency</RealName> \r\n<Password>WsYDCIG761</Password> \r\n<EmailAddress>ereffaivy@gmail.com</EmailAddress> \r\n<EmailPassword>tD3132EE425</EmailPassword> \r\n<EmailLogin>ereffaivy@gmail.com</EmailLogin> \r\n<EmailPOP>pop.gmail.com</EmailPOP> \r\n<Homepage><a href=https://d.centrocoven.com/health/world-record-skydive-attempt-video.php>world record skydive attempt video</a> </Homepage> \r\n<ICQ>388357213</ICQ> \r\n<City>Ligatne</City> \r\n<Country>Latvia</Country> \r\n<Occupation>Telecommunications</Occupation> \r\n<Interests>Religion, spiritual</Interests> \r\n<Signature><a href=https://d.centrocoven.com/medical/don-juan-fanny-lu.php>don juan fanny lu</a> </Signature> \r\n<Gender>0</Gender> \r\n<UnknownFields></UnknownFields> \r\n<PollTitle></PollTitle> \r\n<PollOption1></PollOption1> \r\n<PollOption2></PollOption2> \r\n<PollOption3></PollOption3> \r\n<PollOption4></PollOption4> \r\n<PollOption5></PollOption5> \r\n</PrimarySection> \r\n<SecondarySection> \r\n<Subject1>the accidental detective eng suber </Subject1> \r\n<Subject2>pearl jam twenty dvd </Subject2> \r\n<PostText><a href=https://d.centrocoven.com/medical/antivirus-avast-2016-excel.php>antivirus avast 2016 excel</a> <a href=https://d.centrocoven.com/health/beelzebub-opening-4-vimeo-er.php>beelzebub opening 4 vimeo er</a> <a href=https://d.centrocoven.com/trivia/ebi-akhare-ghese-games.php>ebi akhare ghese games</a> <a href=https://d.centrocoven.com/personaes/left-winger-football-manager-2015-s.php>left winger football manager 2015 s</a> <a href=https://d.centrocoven.com/trivia/center-tool-gigabyte-laptop.php>center tool gigabyte laptop</a> <a href=https://d.centrocoven.com/personaes/jogos-para-android-40-gratis-tablet.php>jogos para android 4.0 gratis tablet</a> <a href=https://d.centrocoven.com/actions/iphone-5-java-os.php>iphone 5 java os</a> <a href=https://d.centrocoven.com/trivia/lagu-tasya-anak-gemballa-mirage.php>lagu tasya anak gemballa mirage</a> <a href=https://d.centrocoven.com/personaes/hatsune-miku-project-diva-2nd-psp-game.php>hatsune miku project diva 2nd psp game</a> <a href=https://d.centrocoven.com/actions/medicopter-117-fs2004-torrent.php>medicopter 117 fs2004 torrent</a> <a href=https://d.centrocoven.com/health/bidadari-lela-karaoke-s.php>bidadari lela karaoke s</a> <a href=https://d.centrocoven.com/medical/el-auto-bochinchero-karaoke-s.php>el auto bochinchero karaoke s</a> <a href=https://d.centrocoven.com/medical/marteria-omg-remix-soundcloud-music.php>marteria omg remix soundcloud music</a> <a href=https://d.centrocoven.com/actions/gta-sa-blue-chrome-weapons-games.php>gta sa blue chrome weapons games</a> <a href=https://d.centrocoven.com/medical/ti-am-luat-7-trandafiri-games.php>ti-am luat 7 trandafiri games</a> <a href=https://d.centrocoven.com/actions/iphone-carrier-checker-game.php>iphone carrier checker game</a> <a href=https://d.centrocoven.com/health/neasden-control-centre-vimeo-er.php>neasden control centre vimeo er</a> <a href=https://d.centrocoven.com/health/adele-21-flac-music.php>adele 21 flac music</a> <a href=https://d.centrocoven.com/health/3-ball-mty-quiero-bailar-skype.php>3 ball mty quiero bailar skype</a> <a href=https://d.centrocoven.com/trivia/inapoi-jo-feat-juju-zippy-muzica.php>inapoi jo feat juju zippy muzica</a>  \r\n \r\n</PostText> \r\n<Prior>Р±РёР·РЅРµСЃ \r\nРґРѕСЃСѓРі \r\nРѕР±СЉСЏРІ \r\nРєСѓСЂРёР»РєР° \r\nС„Р»РµР№Рј \r\nС„Р»СЌР№Рј \r\nРѕСЃРЅРѕРІРЅ \r\nСЂР°Р·РІР»РµС‡ \r\nРѕС„С„С‚РѕРїРёРє \r\nРѕС„С‚РѕРїРёРє \r\nРѕС„С„-С‚РѕРїРёРє \r\nРїСЂРѕС‡РµРµ \r\nСЂР°Р·РЅРѕРµ \r\nРѕР±Рѕ РІСЃС‘Рј \r\nflood \r\nflame \r\nstuff \r\nblah \r\noff-topic \r\noff topic \r\nofftopic \r\noftopic \r\ngeneral \r\ncommon \r\nbusiness \r\nРѕР±С‰Р° \r\nРѕР±С‰РёР№ \r\nРѕР±С‰РµРµ \r\nРѕР±С‰РёРµ \r\nСЂРµРєР»Р°Рј \r\nadver</Prior> \r\n<OnlyPriors>false</OnlyPriors> \r\n</SecondarySection> \r\n</XRumerProject>', NULL, NULL, NULL, NULL, '2021-02-19 07:40:24', '2021-02-19 07:40:24'),
(43, 'PatrickDuaky', 'PatrickDuakyVB', 'cfbobsinbobx@bestbuysteesss.ru', '100.000 EURO ....', '<br> \r\n<br> \r\n<a href="https://google.com?mmmbnbnbm"> <img src="https://1.bp.blogspot.com/-HRCcTXvFRpk/X-ZGe0j8ATI/AAAAAAAAAZg/XH8Z0IJ7Pxst-5LIMSl-hPosmdfy-ic-wCLcBGAsYHQ/s1024/02.jpg?oj=ae\r\n" /> </a> \r\n<br> \r\n<br> \r\nfalconfitbd.com,vvvvccccbfffffrrrreeeeeee \r\n<br> \r\n<br>', NULL, NULL, NULL, NULL, '2021-02-19 11:19:59', '2021-02-19 11:19:59'),
(44, 'Mike Haig', 'Mike Haig', 'see-email-in-message@monkeydigital.co', 'Increase sales for falconfitbd.com', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your falconfitbd.com website? \r\nHaving a high DA score, always helps \r\n \r\nGet your falconfitbd.com to have DA between 40 and 50 points in Moz DA with us today and rip the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nNEW: \r\nhttps://www.monkeydigital.co/product/ahrefs-dr60/ \r\n \r\n \r\nthank you \r\nMike Haig\r\n \r\nsupport@monkeydigital.co', NULL, NULL, NULL, NULL, '2021-02-19 22:04:44', '2021-02-19 22:04:44'),
(45, 'Carol', 'Kilgour', 'carol@stardatagroup.com', 'StarDataGroup.com - Shutting Down', 'It is with sad regret to inform you StarDataGroup.com is shutting down.\r\n\r\nAny group of databases listed below is $49 or $149 for all 16 databases in this one time offer.\r\nYou can purchase it at www.StarDataGroup.com and view samples.\r\n\r\n- LinkedIn Database\r\n 43,535,433 LinkedIn Records\r\n\r\n- USA B2B Companies Database\r\n 28,147,835 Companies\r\n\r\n- Forex\r\n Forex South Africa 113,550 Forex Traders\r\n Forex Australia 135,696 Forex Traders\r\n Forex UK 779,674 Forex Traders\r\n\r\n- UK Companies Database\r\n 521,303 Companies\r\n\r\n- German Databases\r\n German Companies Database: 2,209,191 Companies\r\n German Executives Database: 985,048 Executives\r\n\r\n- Australian Companies Database\r\n 1,806,596 Companies\r\n\r\n- UAE Companies Database\r\n 950,652 Companies\r\n\r\n- Affiliate Marketers Database\r\n 494,909 records\r\n\r\n- South African Databases\r\n B2B Companies Database: 1,462,227 Companies\r\n Directors Database: 758,834 Directors\r\n Healthcare Database: 376,599 Medical Professionals\r\n Wholesalers Database: 106,932 Wholesalers\r\n Real Estate Agent Database: 257,980 Estate Agents\r\n Forex South Africa: 113,550 Forex Traders\r\n\r\nVisit www.stardatagroup.com or contact us with any queries.\r\n\r\nKind Regards,\r\nStarDataGroup.com', NULL, NULL, NULL, NULL, '2021-02-20 09:32:23', '2021-02-20 09:32:23'),
(46, 'Steve', 'James', 'steve@explainervideos4u.xyz', 'Explainer Videos for falconfitbd.com', 'Hi,\r\n\r\nWe''d like to introduce to you our explainer video service which we feel can benefit your site falconfitbd.com.\r\n\r\nCheck out some of our existing videos here:\r\nhttps://www.youtube.com/watch?v=oYoUQjxvhA0\r\nhttps://www.youtube.com/watch?v=MOnhn77TgDE\r\nhttps://www.youtube.com/watch?v=NKY4a3hvmUc\r\n\r\nAll of our videos are in a similar animated format as the above examples and we have voice over artists with US/UK/Australian accents.\r\n\r\nThey can show a solution to a problem or simply promote one of your products or services. They are concise, can be uploaded to video such as Youtube, and can be embedded into your website or featured on landing pages.\r\n\r\nOur prices are as follows depending on video length:\r\n0-1 minutes = $189\r\n1-2 minutes = $339\r\n2-3 minutes = $449\r\n\r\n*All prices above are in USD and include a custom video, full script and a voice-over.\r\n\r\nIf this is something you would like to discuss further, don''t hesitate to get in touch.\r\n\r\nKind Regards,\r\nSteve', NULL, NULL, NULL, NULL, '2021-02-23 12:41:35', '2021-02-23 12:41:35'),
(47, 'Leonie', 'Gibb', 'leonie@stardatagroup.com', 'Question?', 'Do you need more clients? \r\n\r\nWe have amazing databases starting at $9.99 until the end of the Month!\r\n\r\nVisit us at StarDataGroup.com', NULL, NULL, NULL, NULL, '2021-02-23 16:36:20', '2021-02-23 16:36:20');
INSERT INTO `contact_uses` (`id`, `first_name`, `last_name`, `email`, `subject`, `message`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(48, 'Mike King', 'Mike King\r\nNE', 'no-replyWooms@gmail.com', 'Local SEO for more business', 'Greetings \r\n \r\nI have just verified your SEO on  falconfitbd.com for the Local ranking keywords and seen that your website could use a push. \r\n \r\nWe will improve your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our services below, we offer SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nStart enhancing your local visibility with us, today! \r\n \r\nregards \r\nMike King\r\n \r\nSpeed SEO Digital Agency \r\nsupport@speed-seo.net', NULL, NULL, NULL, NULL, '2021-02-24 10:39:41', '2021-02-24 10:39:41'),
(49, 'Eric', 'Jones', 'eric.jones.z.mail@gmail.com', 'Why not TALK with your leads?', 'My name’s Eric and I just found your site falconfitbd.com.\r\n\r\nIt’s got a lot going for it, but here’s an idea to make it even MORE effective.\r\n\r\nTalk With Web Visitor – CLICK HERE http://talkwithcustomer.com for a live demo now.\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It signals you the moment they let you know they’re interested – so that you can talk to that lead while they’re literally looking over your site.\r\n\r\nAnd once you’ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation… and if they don’t take you up on your offer then, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nCLICK HERE http://talkwithcustomer.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nThe difference between contacting someone within 5 minutes versus a half-hour means you could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Studies show that 70% of a site’s visitors disappear and are gone forever after just a moment. Don’t keep losing them. \r\nTalk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you''d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=falconfitbd.com', NULL, NULL, NULL, NULL, '2021-02-25 07:44:04', '2021-02-25 07:44:04'),
(50, 'SendBulkMails.com', 'SendBulkMails.com', 'lovie@sendbulkmails.com', 'Clients? We got you covered. SendBulkMails.com', 'SendBulkMails.com allows you to reach out to clients via cold email marketing.\r\n\r\n- 1Mil emails starter package\r\n- Dedicated IP and Domain Included\r\n\r\n- Detailed statistical reports (delivery, bounce, clicks etc.)\r\n\r\n- Quick and easy setup with extended support at no extra cost.\r\n\r\n- Cancel anytime!\r\n\r\nSendBulkMails.com', NULL, NULL, NULL, NULL, '2021-02-25 18:38:39', '2021-02-25 18:38:39'),
(51, 'Franziska', 'Franziska', 'webmaster@falconfitbd.com', 'Concerning falconfitbd.com', 'Hi there \r\n \r\nBuy all styles of Ray-Ban Sunglasses only 19.99 dollars.  If interested, please visit our site: framesoutlet.online\r\n \r\nAll the best, \r\n \r\nfalconfitbd.com', NULL, NULL, NULL, NULL, '2021-02-26 16:59:18', '2021-02-26 16:59:18'),
(52, 'Eric', 'Jones', 'eric.jones.z.mail@gmail.com', 'Who needs eyeballs, you need BUSINESS', 'My name’s Eric and I just came across your website - falconfitbd.com - in the search results.\r\n\r\nHere’s what that means to me…\r\n\r\nYour SEO’s working.\r\n\r\nYou’re getting eyeballs – mine at least.\r\n\r\nYour content’s pretty good, wouldn’t change a thing.\r\n\r\nBUT…\r\n\r\nEyeballs don’t pay the bills.\r\n\r\nCUSTOMERS do.\r\n\r\nAnd studies show that 7 out of 10 visitors to a site like falconfitbd.com will drop by, take a gander, and then head for the hills without doing anything else.\r\n\r\nIt’s like they never were even there.\r\n\r\nYou can fix this.\r\n\r\nYou can make it super-simple for them to raise their hand, say, “okay, let’s talk” without requiring them to even pull their cell phone from their pocket… thanks to Talk With Web Visitor.\r\n\r\nTalk With Web Visitor is a software widget that sits on your site, ready and waiting to capture any visitor’s Name, Email address and Phone Number.  It lets you know immediately – so you can talk to that lead immediately… without delay… BEFORE they head for those hills.\r\n  \r\nCLICK HERE https://talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nNow it’s also true that when reaching out to hot leads, you MUST act fast – the difference between contacting someone within 5 minutes versus 30 minutes later is huge – like 100 times better!\r\n\r\nThat’s what makes our new SMS Text With Lead feature so powerful… you’ve got their phone number, so now you can start a text message (SMS) conversation with them… so even if they don’t take you up on your offer right away, you continue to text them new offers, new content, and new reasons to do business with you.\r\n\r\nThis could change everything for you and your business.\r\n\r\nCLICK HERE https://talkwithwebvisitors.com to learn more about everything Talk With Web Visitor can do and start turing eyeballs into money.\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – you could be converting up to 100x more leads immediately!   \r\nIt even includes International Long Distance Calling. \r\nPaying customers are out there waiting. \r\nStarting connecting today by CLICKING HERE https://talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you''d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=falconfitbd.com', NULL, NULL, NULL, NULL, '2021-02-27 01:29:41', '2021-02-27 01:29:41');

-- --------------------------------------------------------

--
-- Table structure for table `current_offers`
--

CREATE TABLE `current_offers` (
  `id` int(10) UNSIGNED NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `current_offers`
--

INSERT INTO `current_offers` (`id`, `detail`, `status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '<p>TodaY Offer: $20 OFF order $300 or more with code <span>"Juta-002"</span> + Free Shipping on order over $60 !  <a href="#">Offer details</a> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius nemo sequi dignissimos, eos suscipit quaerat repellendus quas, aspernatur, amet sed similique! Omnis similique placeat nihil illo cumque eaque iusto cum.</p>', 'Active', NULL, NULL, NULL, NULL, '2021-01-27 13:43:04', '2021-01-27 13:47:40');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci,
  `shipping_different_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone_number`, `address`, `shipping_different_address`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Saidur Rahman Siam', 'saidurrahmansiam55@gmail.com', '+8801762418755', 'South Bishil, Mirpur-1', NULL, NULL, NULL, NULL, NULL, '2021-02-06 23:27:37', '2021-02-06 23:27:37'),
(2, 'saidur rahman siam', 'saidurrahmansiam63@gmail.com', '01762418755', 'mirpur 1', NULL, NULL, NULL, NULL, NULL, '2021-02-08 04:20:45', '2021-02-08 04:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `customer_shipping_addresses`
--

CREATE TABLE `customer_shipping_addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) DEFAULT '0',
  `customer_id_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feature_products`
--

CREATE TABLE `feature_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product` int(11) DEFAULT '0',
  `product_product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature_products`
--

INSERT INTO `feature_products` (`id`, `product`, `product_product_name`, `feature_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Men’s Cotton Half Sleeve T-Shirt', 'Active', NULL, NULL, NULL, NULL, '2021-01-29 09:26:23', '2021-01-29 09:26:23'),
(2, 2, 'Men’s Cotton Half Sleeve T-Shirt', 'Active', NULL, NULL, NULL, NULL, '2021-01-29 09:26:29', '2021-01-29 09:26:29'),
(3, 16, 'Women''s Synthetic Jacket', 'Active', NULL, NULL, NULL, NULL, '2021-01-29 09:26:35', '2021-01-29 09:26:35'),
(4, 15, 'ওয়েস্টার্ন ডেনিম জ্যাকেট ফর উইমেন', 'Active', NULL, NULL, NULL, NULL, '2021-01-29 09:26:42', '2021-01-29 09:26:42');

-- --------------------------------------------------------

--
-- Table structure for table `high_light_category_products`
--

CREATE TABLE `high_light_category_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `high_light_category_products`
--

INSERT INTO `high_light_category_products` (`id`, `title`, `image`, `product_link`, `position`, `status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel_1614625727.jpg', '#', '1', 'Active', NULL, NULL, NULL, NULL, '2021-03-01 13:08:47', '2021-03-01 13:08:47'),
(2, NULL, 'Laravel_1614625737.jpg', '#', '2', 'Active', NULL, NULL, NULL, NULL, '2021-03-01 13:08:57', '2021-03-01 13:08:57'),
(3, NULL, 'Laravel_1614625746.jpg', '#', '3', 'Active', NULL, NULL, NULL, NULL, '2021-03-01 13:09:06', '2021-03-01 13:09:06'),
(4, NULL, 'Laravel_1614625757.jpg', '#', '4', 'Active', NULL, NULL, NULL, NULL, '2021-03-01 13:09:17', '2021-03-01 13:09:17'),
(5, NULL, 'Laravel_1614625768.jpg', '#', '5', 'Active', NULL, NULL, NULL, NULL, '2021-03-01 13:09:28', '2021-03-01 13:09:28');

-- --------------------------------------------------------

--
-- Table structure for table `home_page_category_positions`
--

CREATE TABLE `home_page_category_positions` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` int(11) DEFAULT '0',
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `side_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product` int(11) DEFAULT '0',
  `product_product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_page_category_positions`
--

INSERT INTO `home_page_category_positions` (`id`, `category`, `category_name`, `side_image`, `product`, `product_product_name`, `category_position`, `section_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Men', 'Laravel_1612788877.png', NULL, '', '1', 'Active', NULL, NULL, NULL, NULL, '2020-12-05 06:34:55', '2021-02-08 06:54:37'),
(2, 2, 'Women', 'Laravel_1612788610.jpg', 2, 'Men’s Cotton Half Sleeve T-Shirt', '2', 'Active', NULL, NULL, NULL, NULL, '2020-12-05 06:40:33', '2021-02-08 06:50:10'),
(3, 2, 'Women', 'Laravel_1612788782.jpg', 3, 'Men’s Cotton Half Sleeve T-Shirt', '3', 'Active', NULL, NULL, NULL, NULL, '2020-12-12 04:14:22', '2021-02-08 06:53:02'),
(4, 1, 'Men', 'Laravel_1612788828.png', 4, 'Men’s Cotton Half Sleeve T-Shirt', '4', 'Active', NULL, NULL, NULL, NULL, '2020-12-12 04:16:46', '2021-02-08 06:53:48'),
(5, NULL, '', 'Laravel_1607768227.jpg', 5, 'Mens Comfortable Cotton Full Trouser', '5', 'Active', NULL, NULL, NULL, '2021-02-08 06:55:13', '2020-12-12 04:17:07', '2021-02-08 06:55:13'),
(6, NULL, '', 'Laravel_1607778246.jpg', 6, 'Mens Comfortable Cotton Full Trouser', '6', 'Active', NULL, NULL, NULL, '2021-02-08 06:55:06', '2020-12-12 07:04:06', '2021-02-08 06:55:06');

-- --------------------------------------------------------

--
-- Table structure for table `manu_category_cmses`
--

CREATE TABLE `manu_category_cmses` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manu_category_cmses`
--

INSERT INTO `manu_category_cmses` (`id`, `menu_title`, `menu_link`, `menu_position`, `menu_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Men', 'products/1/men', '1', 'Active', NULL, NULL, NULL, NULL, '2020-12-05 07:25:30', '2020-12-13 12:33:43');

-- --------------------------------------------------------

--
-- Table structure for table `merchant_infos`
--

CREATE TABLE `merchant_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pickup_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` int(11) DEFAULT '0',
  `payment_method_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_08_11_095049_create_user_roles_table', 2),
(4, '2020_08_11_095424_create_payment_types_table', 3),
(5, '2020_08_11_095655_create_wallet_providers_table', 4),
(6, '2020_08_11_100340_create_item_types_table', 5),
(7, '2020_08_11_101644_create_site_settings_table', 6),
(8, '2020_08_11_103016_create_merchant_infos_table', 7),
(9, '2020_08_11_104744_create_merchant_mfses_table', 8),
(10, '2020_08_11_105858_create_merchant_bank_infos_table', 9),
(11, '2020_08_12_123122_create_sending_types_table', 10),
(12, '2020_08_12_123501_create_booking_delivery_types_table', 11),
(13, '2020_08_12_123855_create_booking_packages_table', 12),
(14, '2020_08_12_124547_create_cities_table', 13),
(15, '2020_08_12_124846_create_booking_areas_table', 14),
(17, '2020_08_14_115500_create_bank_account_types_table', 15),
(18, '2020_08_14_050044_create_booking_orders_table', 16),
(19, '2020_08_15_050015_create_slider_settings_table', 17),
(20, '2020_08_18_100044_create_booking_areas_table', 18),
(21, '2020_08_18_100420_create_booking_areas_table', 19),
(22, '2020_08_18_102751_create_payment_methods_table', 20),
(23, '2020_08_20_014546_create_shipping_costs_table', 21),
(24, '2020_08_31_085136_create_rpa_erase_voucher_reports_table', 22),
(25, '2020_10_20_070222_create_inventories_table', 23),
(26, '2020_10_20_070648_create_stock_ins_table', 24),
(27, '2020_11_29_091237_create_site_social_links_table', 25),
(28, '2020_11_29_092845_create_site_social_links_table', 26),
(29, '2020_11_29_093246_create_site_social_links_table', 27),
(30, '2020_11_30_061733_create_site_settings_table', 28),
(31, '2020_11_30_061914_create_site_settings_table', 29),
(32, '2020_11_30_062315_create_site_settings_table', 30),
(33, '2020_11_30_062816_create_site_settings_table', 31),
(34, '2020_12_01_090627_create_categories_table', 32),
(35, '2020_12_01_090909_create_categories_table', 33),
(36, '2020_12_01_091250_create_sub_categories_table', 34),
(37, '2020_12_01_091535_create_sizes_table', 35),
(38, '2020_12_01_093047_create_colors_table', 36),
(39, '2020_12_01_125112_create_products_table', 37),
(40, '2020_12_01_014102_create_product_images_table', 38),
(41, '2020_12_01_015350_create_products_table', 39),
(42, '2020_12_02_094750_create_testcheckboxes_table', 40),
(43, '2020_12_04_073455_create_slider_cmses_table', 41),
(44, '2020_12_04_082720_create_categories_table', 42),
(45, '2020_12_04_101929_create_home_page_category_positions_table', 43),
(46, '2020_12_04_105047_create_feature_products_table', 44),
(47, '2020_12_04_105648_create_feature_products_table', 45),
(48, '2020_12_04_112106_create_manu_category_cmses_table', 46),
(49, '2020_12_06_052758_create_contact_uses_table', 47),
(50, '2020_12_21_064812_create_customers_table', 48),
(51, '2020_12_21_065110_create_customer_shipping_addresses_table', 49),
(52, '2020_12_21_070435_create_booking_orders_table', 50),
(53, '2020_12_21_070747_create_payment_methods_table', 51),
(54, '2020_12_21_071310_create_shipping_costs_table', 52),
(55, '2020_12_21_072753_create_booking_orders_table', 53),
(56, '2020_12_21_073551_create_payment_methods_table', 54),
(57, '2020_12_24_064530_create_booking_orders_table', 55),
(58, '2020_12_24_065310_create_order_detailses_table', 56),
(59, '2021_01_25_074824_create_product_colors_table', 57),
(60, '2021_01_25_074945_create_product_sizes_table', 58),
(61, '2021_01_27_073633_create_current_offers_table', 59),
(62, '2021_03_01_070259_create_high_light_category_products_table', 60),
(63, '2021_03_01_070816_create_high_light_category_products_table', 61);

-- --------------------------------------------------------

--
-- Table structure for table `order_detailses`
--

CREATE TABLE `order_detailses` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) DEFAULT '0',
  `order_id_customer_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT '0',
  `product_id_product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size_id` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_detailses`
--

INSERT INTO `order_detailses` (`id`, `order_id`, `order_id_customer_id`, `product_id`, `product_id_product_name`, `size_id`, `color_id`, `quantity`, `product_price`, `status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 14, 'ফুল স্লিভ উইন্টার জ্যাকেট ফর মেন', NULL, '', '3', '500', 'Finished', 18, NULL, NULL, NULL, '2021-01-29 09:19:02', '2021-01-29 09:21:44'),
(2, 1, NULL, 13, 'উইন্টার জ্যাকেট ফর মেন-BLUE', NULL, '', '3', '500', 'Finished', 18, NULL, NULL, NULL, '2021-01-29 09:19:02', '2021-01-29 09:21:57'),
(3, 1, NULL, 11, 'উইন্টার জ্যাকেট ফর জেন্টস-BLUE', NULL, '', '4', '600', 'Finished', 18, NULL, NULL, NULL, '2021-01-29 09:19:02', '2021-01-29 09:25:19'),
(4, 2, NULL, 14, 'ফুল স্লিভ উইন্টার জ্যাকেট ফর মেন', NULL, '', '3', '500', 'Finished', 18, NULL, NULL, NULL, '2021-01-29 09:20:07', '2021-01-29 09:25:47'),
(5, 2, NULL, 13, 'উইন্টার জ্যাকেট ফর মেন-BLUE', NULL, '', '6', '500', 'Finished', 18, NULL, NULL, NULL, '2021-01-29 09:20:07', '2021-01-29 09:25:56'),
(6, 2, NULL, 11, 'উইন্টার জ্যাকেট ফর জেন্টস-BLUE', NULL, '', '4', '600', 'Finished', 18, NULL, NULL, NULL, '2021-01-29 09:20:07', '2021-01-29 09:26:02'),
(7, 3, '1', 5, 'Mens Comfortable Cotton Full Trouser', NULL, '', '1', '10', NULL, NULL, NULL, NULL, '2021-02-08 12:12:56', '2021-02-06 23:27:37', '2021-02-08 12:12:56'),
(8, 4, '2', 14, 'ফুল স্লিভ উইন্টার জ্যাকেট ফর মেন', NULL, '', '1', '500', 'Confirmed', 9, NULL, NULL, NULL, '2021-02-08 04:20:45', '2021-02-08 12:11:35'),
(9, 5, '18', 7, 'Men''s Hoddies', 'M', 'White', '2', '4400', 'Pending', NULL, NULL, NULL, NULL, '2021-02-08 12:14:54', '2021-02-08 12:14:54');

-- --------------------------------------------------------

--
-- Table structure for table `page_names`
--

CREATE TABLE `page_names` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `db_table` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_names`
--

INSERT INTO `page_names` (`id`, `name`, `db_table`, `route_link`, `page_type`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(52, 'SiteSocialLink', 'site_social_links', 'sitesociallink', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'SiteSetting', 'site_settings', 'sitesetting', 'Single', NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'SubCategory', 'sub_categories', 'subcategory', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'Size', 'sizes', 'size', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'Color', 'colors', 'color', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'Product', 'products', 'product', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'ProductImage', 'product_images', 'productimage', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'testCheckBox', 'testcheckboxes', 'testcheckbox', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'SliderCMS', 'slider_cmses', 'slidercms', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'Category', 'categories', 'category', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'HomePageCategoryPosition', 'home_page_category_positions', 'homepagecategoryposition', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'FeatureProduct', 'feature_products', 'featureproduct', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'ManuCategoryCMS', 'manu_category_cmses', 'manucategorycms', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'ContactUs', 'contact_uses', 'contactus', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'Customer', 'customers', 'customer', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'CustomerShippingaddress', 'customer_shipping_addresses', 'customershippingaddress', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(76, 'PaymentMethod', 'payment_methods', 'paymentmethod', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(77, 'ShippingCost', 'shipping_costs', 'shippingcost', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'BookingOrder', 'booking_orders', 'bookingorder', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(79, 'BookingOrder', 'booking_orders', 'bookingorder', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(80, 'OrderDetails', 'order_detailses', 'orderdetails', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(81, 'ProductColor', 'product_colors', 'productcolor', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(82, 'ProductSize', 'product_sizes', 'productsize', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(83, 'CurrentOffer', 'current_offers', 'currentoffer', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL),
(85, 'Highlightcategoryproduct', 'high_light_category_products', 'highlightcategoryproduct', 'CRUD', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('frank@neutrix.co', '0c14551159b1f31521d3d6417ff0c8cd', '2020-08-25 13:24:23'),
('fahad@divergenttechbd.com', '0c14551159b1f31521d3d6417ff0c8cd', '2020-08-25 13:25:05'),
('f.fahad.server@gmail.com', '0c14551159b1f31521d3d6417ff0c8cd', '2020-08-25 13:28:22');

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `mobile_number`, `status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Cash on delivery', NULL, 'Active', NULL, NULL, NULL, NULL, '2020-12-21 13:36:04', '2020-12-21 13:36:04'),
(2, 'Bkash', '01860748020', 'Active', NULL, NULL, NULL, NULL, '2020-12-21 13:36:20', '2020-12-21 13:36:20');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` int(11) DEFAULT '0',
  `category_name_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category_name` int(11) DEFAULT '0',
  `sub_category_name_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` text COLLATE utf8mb4_unicode_ci,
  `color` text COLLATE utf8mb4_unicode_ci,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_details` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_name`, `category_name_name`, `sub_category_name`, `sub_category_name_name`, `product_name`, `product_code`, `price`, `old_price`, `size`, `color`, `quantity`, `short_details`, `description`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Men', 1, 'T-shirt', 'Men’s Cotton Half Sleeve T-Shirt', 'mens-1005', '260', '250', '["S","M","L","XL","XXL"]', '["orange","Paste","White"]', '20', NULL, '<div class="bg-white mb-3 shadow-sm rounded" style="color: rgb(27, 27, 40); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 13px; box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px !important;"><div class="tab-content pt-0"><div class="tab-pane fade active show" id="tab_default_1"><div class="p-4"><div class="mw-100 overflow-hidden text-left"><p class="MsoNormal"><span style="font-weight: bolder;">Product Type: Men’s Cotton Half Sleeve T-Shirt<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; Main Material: Cotton<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; Comfortable<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; Smart look<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; GSM 150-160<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; Made in&nbsp;</span><st1:country-region><st1:place><span style="font-weight: bolder;">Bangladesh</span></st1:place></st1:country-region><span style="font-weight: bolder;"><o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; A perfect casual wear<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; Size Guide:<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; Size Chest Length<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; M 38” 28”<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; L 40” 29”<o:p></o:p></span></p><p><span style="font-weight: bolder;"><span style="font-size: 11pt; line-height: 16.8667px; font-family: Calibri;">&nbsp;&nbsp;&nbsp; XL 43” 30”</span></span></p></div></div></div></div></div>', NULL, 18, NULL, '2021-02-08 04:33:53', '2021-01-29 07:39:37', '2021-02-08 04:33:53'),
(2, 1, 'Men', 1, 'T-shirt', 'Men’s Cotton Half Sleeve T-Shirt', 'mens-10050', '260', '250', '["S","XL"]', '["orange","Paste"]', '10', NULL, '<div class="bg-white mb-3 shadow-sm rounded" style="color: rgb(27, 27, 40); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 13px; box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px !important;"><div class="tab-content pt-0"><div class="tab-pane fade active show" id="tab_default_1"><div class="p-4"><div class="mw-100 overflow-hidden text-left"><p class="MsoNormal"><span style="font-weight: bolder;">Product Type: Men’s Cotton Half Sleeve T-Shirt<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; Main Material: Cotton<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; Comfortable<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; Smart look<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; GSM 150-160<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; Made in&nbsp;</span><st1:country-region><st1:place><span style="font-weight: bolder;">Bangladesh</span></st1:place></st1:country-region><span style="font-weight: bolder;"><o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; A perfect casual wear<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; Size Guide:<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; Size Chest Length<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; M 38” 28”<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; L 40” 29”<o:p></o:p></span></p><p><span style="font-weight: bolder;"><span style="font-size: 11pt; line-height: 16.8667px; font-family: Calibri;">&nbsp;&nbsp;&nbsp; XL 43” 30"</span></span></p></div></div></div></div></div>', NULL, 18, NULL, '2021-02-09 05:44:09', '2021-01-29 07:42:04', '2021-02-09 05:44:09'),
(3, 1, 'Men', 1, 'T-shirt', 'Men’s Cotton Half Sleeve T-Shirt', 'ps-15300', '255', NULL, '["S","M","L","XL"]', '["Black"]', '10', NULL, '<div class="bg-white mb-3 shadow-sm rounded" style="color: rgb(27, 27, 40); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 13px; box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px !important;"><div class="tab-content pt-0"><div class="tab-pane fade active show" id="tab_default_1"><div class="p-4"><div class="mw-100 overflow-hidden text-left"><p class="MsoNormal"><span style="font-weight: bolder;">Product Type: Men’s Cotton Half Sleeve T-Shirt<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; Main Material: Cotton<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; Comfortable<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; Smart look<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; GSM 150-160<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; Made in&nbsp;</span><st1:country-region><st1:place><span style="font-weight: bolder;">Bangladesh</span></st1:place></st1:country-region><span style="font-weight: bolder;"><o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; A perfect casual wear<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; Size Guide:<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; Size Chest Length<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; M 38” 28”<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; L 40” 29”<o:p></o:p></span></p><p></p><p class="MsoNormal"><span style="font-weight: bolder;">&nbsp;&nbsp;&nbsp; XL 43” 30"</span></p></div></div></div></div></div>', NULL, 18, NULL, NULL, '2021-01-29 07:48:51', '2021-01-29 07:48:51'),
(4, 1, 'Men', 1, 'T-shirt', 'Men’s Cotton Half Sleeve T-Shirt', 'ps-1530', '129', NULL, '["S"]', '["Black"]', '10', NULL, '<div class="bg-white mb-3 shadow-sm rounded" style="color: rgb(27, 27, 40); font-family: "Open Sans", sans-serif; font-size: 13px; box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px !important;"><div class="tab-content pt-0"><div class="tab-pane fade active show" id="tab_default_1"><div class="p-4"><div class="mw-100 overflow-hidden text-left"><p class="MsoNormal"><span style="font-weight: bolder;">Product Type: Men’s Cotton Half Sleeve T-Shirt<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">    Main Material: Cotton<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">    Comfortable<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">    Smart look<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">    GSM 150-160<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">    Made in </span><st1:country-region><st1:place><span style="font-weight: bolder;">Bangladesh</span></st1:place></st1:country-region><span style="font-weight: bolder;"><o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">    A perfect casual wear<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">    Size Guide:<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">    Size Chest Length<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">    M 38” 28”<o:p></o:p></span></p><p class="MsoNormal"><span style="font-weight: bolder;">    L 40” 29”<o:p></o:p></span></p><p></p><p class="MsoNormal"><span style="font-weight: bolder;">    XL 43” 30”<o:p></o:p></span></p></div></div></div></div></div><div class="bg-white rounded shadow-sm" style="color: rgb(27, 27, 40); font-family: "Open Sans", sans-serif; font-size: 13px; box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px !important;"><div class="border-bottom p-3" style="border-color: rgb(226, 229, 236) !important;"></div></div>', NULL, 18, 18, NULL, '2021-01-29 07:59:38', '2021-01-29 08:03:14'),
(5, 1, 'Men', 6, 'Trouser', 'Mens Comfortable Cotton Full Trouser', 'ps-15300', '10', '600', '["S","M"]', '["White","Black"]', '10', NULL, '<div class="bg-white mb-3 shadow-sm rounded" style="color: rgb(27, 27, 40); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 13px; box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px !important;"><div class="tab-content pt-0"><div class="tab-pane fade active show" id="tab_default_1"><div class="p-4"><div class="mw-100 overflow-hidden text-left"><p class="MsoNormal">Product Type: Mens Comfortable Cotton &nbsp;Full Trouser.</p><p class="MsoNormal">&nbsp;&nbsp; Main Material:&nbsp; Terry fabric.<o:p></o:p></p><p class="MsoNormal">&nbsp;&nbsp;&nbsp; Gender: Men<o:p></o:p></p><p class="MsoNormal">&nbsp;&nbsp;&nbsp; Colour: Same as the picture.<o:p></o:p></p><p class="MsoNormal">&nbsp;&nbsp;&nbsp; Wash &amp; Care: Hand wash/ Machine Wash<o:p></o:p></p><p class="MsoNormal">&nbsp;&nbsp;&nbsp; Stretch: Stretchable<o:p></o:p></p><p class="MsoNormal">&nbsp;&nbsp;&nbsp; Fit Type: REGULAR &amp; Slim</p><p class="MsoNormal">Size Measurement Chart-Waist---Length.<o:p></o:p></p><p class="MsoNormal">M--28-30,<o:p></o:p></p><p class="MsoNormal">L--32-34,<o:p></o:p></p><p><span style="font-size: 11pt; line-height: 16.8667px; font-family: Calibri;">XL--36<span style="color: red;">-</span>38</span><br></p></div></div></div></div></div><div class="bg-white rounded shadow-sm" style="color: rgb(27, 27, 40); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 13px; box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px !important;"><div class="border-bottom p-3" style="border-color: rgb(226, 229, 236) !important;"></div></div>', NULL, 18, NULL, NULL, '2021-01-29 08:01:17', '2021-01-29 08:01:17'),
(6, 1, 'Men', 6, 'Trouser', 'Mens Comfortable Cotton Full Trouser', 'mens-1005001', '129', NULL, '["M","L"]', '["Paste","Black"]', '10', NULL, '<div class="bg-white mb-3 shadow-sm rounded" style="color: rgb(27, 27, 40); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 13px; box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px !important;"><div class="tab-content pt-0"><div class="tab-pane fade active show" id="tab_default_1"><div class="p-4"><div class="mw-100 overflow-hidden text-left"><p class="MsoNormal">Product Type: Mens Comfortable Cotton &nbsp;Full Trouser.</p><p class="MsoNormal">&nbsp;&nbsp; Main Material:&nbsp; Terry fabric.<o:p></o:p></p><p class="MsoNormal">&nbsp;&nbsp;&nbsp; Gender: Men<o:p></o:p></p><p class="MsoNormal">&nbsp;&nbsp;&nbsp; Colour: Same as the picture.<o:p></o:p></p><p class="MsoNormal">&nbsp;&nbsp;&nbsp; Wash &amp; Care: Hand wash/ Machine Wash<o:p></o:p></p><p class="MsoNormal">&nbsp;&nbsp;&nbsp; Stretch: Stretchable<o:p></o:p></p><p class="MsoNormal">&nbsp;&nbsp;&nbsp; Fit Type: REGULAR &amp; Slim</p><p class="MsoNormal">Size Measurement Chart-Waist---Length.<o:p></o:p></p><p class="MsoNormal">M--28-30,<o:p></o:p></p><p class="MsoNormal">L--32-34,<o:p></o:p></p><p><span style="font-size: 11pt; line-height: 16.8667px; font-family: Calibri;">XL--36<span style="color: red;">-</span>38</span><br></p></div></div></div></div></div><div class="bg-white rounded shadow-sm" style="color: rgb(27, 27, 40); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 13px; box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px !important;"><div class="border-bottom p-3" style="border-color: rgb(226, 229, 236) !important;"></div></div>', NULL, 18, NULL, NULL, '2021-01-29 08:02:24', '2021-01-29 08:02:24'),
(7, 1, 'Men', 3, 'Hoodies & Sweatshirts', 'Men''s Hoddies', 'Hoodie 0001', '2200', '2400', '["S","M","L","XL","XL","XXL"]', '["orange","Paste"]', '20', '<span style="font-family: docs-Calibri; font-size: 15px; text-align: center; white-space: pre-wrap;">FT Men''s Hoodie 0001 Red\r\n(11022020-2)</span><br>', '<p><font face="Roboto, RobotoDraft, Helvetica, Arial, sans-serif"><span style="font-size: 13px; white-space: pre-wrap;">97 % Polyester, 3% Spandex.          </span></font><span style="font-size: 13px; white-space: pre-wrap; font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif;"> </span></p><p><span style="font-size: 13px; white-space: pre-wrap; font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif;">- Height: S: 25,M:26,L: 27, XL:27,XXL: 28 </span></p><p><span style="font-size: 13px; white-space: pre-wrap; font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif;">- </span><span style="font-size: 13px; white-space: pre-wrap; font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif;">Length: S:21,M:22,L:23,XL:23,XXL:24.5</span></p><p><font face="Roboto, RobotoDraft, Helvetica, Arial, sans-serif"><span style="font-size: 13px; white-space: pre-wrap;">- Shoulder: S: 23, M:24,L:25,XL: 25, XXL: 26  </span></font><br></p>', NULL, 18, 9, NULL, '2021-01-29 08:40:08', '2021-02-08 04:32:38'),
(8, 1, 'Men', 3, 'Hoodies & Sweatshirts', 'বেবি গার্ল ফুল স্লিভ হুডি ফর উইন্টার', 'ho-1005001', '1500', NULL, '["M","L"]', '["Paste","White"]', '10', NULL, '<div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">Brand: Madina</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;Export Quality</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;Fabric: 100% cotton</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;Fabrication:280-300 GSM</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;Fabrics: Terry Cotton</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;Size: M, L, XL,</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;M= Chest-38, Length-27</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;L= Chest-40, Length-28</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;XL= Chest-42, Length-29</span></div>', NULL, 18, NULL, NULL, '2021-01-29 08:41:10', '2021-01-29 08:41:10'),
(9, 1, 'Men', 3, 'Hoodies & Sweatshirts', 'ফুল স্লিভ উইন্টার হুডি ফর মেন', 'ho-1005002', '455', '500', '["M","L"]', '["Paste"]', '10', NULL, '<div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">product Type:Men''s Hoodie</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;Winter Collection</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;Fabric:100% Cotton,320 GSM</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;Type: Casual</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;Gender:Men</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;production Country: Bangladesh</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;100% Export Quality.</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;Color:As</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;Size measurement</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;M: Chest=38", length=27.5"</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;L: Chest=41", length=28.5"</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;XL: Chest=44", Length=30</span></div>', NULL, 18, NULL, '2021-02-08 04:19:20', '2021-01-29 08:43:18', '2021-02-08 04:19:20'),
(10, 1, 'Men', 3, 'Hoodies & Sweatshirts', 'মেনজ ফুল স্লিভ হুডি BY LAGUN', 'ho-1005003', '455', NULL, '["S","M"]', '["Black","As"]', '10', NULL, '<div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">product Type:Men''s Hoodie</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;Winter Collection</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;Fabric:100% Cotton,320 GSM</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;Type: Casual</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;Gender:Men</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;production Country: Bangladesh</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;100% Export Quality.</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;Color:As</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;Size measurement</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;M: Chest=38", length=27.5"</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;L: Chest=41", length=28.5"</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">&nbsp;XL: Chest=44", Length=30</span></div>', NULL, 18, NULL, NULL, '2021-01-29 08:44:57', '2021-01-29 08:44:57'),
(11, 1, 'Men', 2, 'Jackets & Coats', 'উইন্টার জ্যাকেট ফর জেন্টস-BLUE', 'jk-1500', '600', NULL, '["M","L"]', '["Black","As"]', '10', NULL, '<div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">স্টাইলিশ উইন্টার হুডি ফর জেন্টস</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">ফেব্রিক: ৬০% কটন , ৪০% ফ্লীস</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">ফেব্রিকেশন: ২৮০ GSM</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">সাইজঃ M, L, XL</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">M: লেন্থ - ২৮”, চেস্ট - ২০”</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">L: লেন্থ - ২৯”, চেস্ট - ২১”</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">XL: লেন্থ - ৩০”, চেস্ট - ২২”</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">ড্রাই ওয়াশ</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">আরামদায়ক ও আকর্ষনীয় উইন্টার ওয়্যার</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">শীতে রাখবে আপনাকে উষ্ণ</span></div>', NULL, 18, NULL, NULL, '2021-01-29 08:46:54', '2021-01-29 08:46:54'),
(12, 1, 'Men', 2, 'Jackets & Coats', 'উইন্টার জ্যাকেট ফর মেন', 'jk-1500', '800', '1000', '["L","XL"]', '["Black","As"]', '10', NULL, '<div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">স্টাইলিশ উইন্টার হুডি ফর জেন্টস</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">ফেব্রিক: ৬০% কটন , ৪০% ফ্লীস</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">ফেব্রিকেশন: ২৮০ GSM</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">সাইজঃ M, L, XL</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">M: লেন্থ - ২৮”, চেস্ট - ২০”</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">L: লেন্থ - ২৯”, চেস্ট - ২১”</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">XL: লেন্থ - ৩০”, চেস্ট - ২২”</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">ড্রাই ওয়াশ</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">আরামদায়ক ও আকর্ষনীয় উইন্টার ওয়্যার</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">শীতে রাখবে আপনাকে উষ্ণ</span></div>', NULL, 18, NULL, NULL, '2021-01-29 08:48:21', '2021-01-29 08:48:21'),
(13, 1, 'Men', 2, 'Jackets & Coats', 'উইন্টার জ্যাকেট ফর মেন-BLUE', 'jk-15001', '500', NULL, '["S","M"]', '["orange","White","As"]', '10', NULL, '<div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">100% Export quality</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">;Product Type: Jacket</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">Color: Navy Blue</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">Main Material: Cotton</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">Gender: Men</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">Pattern: Long Sleeve</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">Style: Casual</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">M(length 26- chest -38)</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">L(length 27- chest -40)</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">XL(length 29- chest -44)A Jacket is a cloth garment for the upper body, especially bought and worn during winter. Originally, Jackets are such a garment worn exclusively by men but it has become popular among women too. It comes with short or long sleeves, and an optional vertical opening (half or full) with buttons or zipper. To keep pace with trends and fashion there is a very rare option for the young without stylish and great jackets</span></div>', NULL, 18, NULL, NULL, '2021-01-29 08:49:23', '2021-01-29 08:49:23'),
(14, 1, 'Men', 2, 'Jackets & Coats', 'ফুল স্লিভ উইন্টার জ্যাকেট ফর মেন', 'jk-15002', '500', NULL, '["M","L"]', '["Paste","As"]', '10', NULL, '<div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">melton Fabric inside brush</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">Color: Same as Picture</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">For Men</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">For Winter</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">Full Sleeve</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">Size: M, L, XL</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">M- Chest 42, Length 27</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">L- Chest 45, Length 28</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">XL- Chest 47, Length 29</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">N:B: color can be slightly vary based on your device color &amp; contrast setting</span></div>', NULL, 18, NULL, NULL, '2021-01-29 08:50:10', '2021-01-29 08:50:10');
INSERT INTO `products` (`id`, `category_name`, `category_name_name`, `sub_category_name`, `sub_category_name_name`, `product_name`, `product_code`, `price`, `old_price`, `size`, `color`, `quantity`, `short_details`, `description`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(15, 2, 'Women', 5, 'Jackets & Coats', 'ওয়েস্টার্ন ডেনিম জ্যাকেট ফর উইমেন', 'jk-15001', '650', '950', '["S","M"]', '["Black","As"]', '10', NULL, '<div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">Quality: Full Export</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">Fabrics: Denim</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">Fit Description: Regular fit</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">Design: Plain</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">Regular Cut</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">Buttoned Cuffs and hem</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">Functional pockets</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">Measurement : Asian</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">Size Description :</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">S =Chest 36, Long 24</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">M =Chest 38, Long 25</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">L =Chest 40, Long 25.5</span></div><div class="product-details-text" style="width: 855.359px; float: left; font-size: 15px; line-height: 27px; color: rgb(93, 90, 90); font-family: SolaimanLipi, helvetica, verdana;"><span style="margin-right: 10px;"><img src="https://static.ajkerdeal.com/images/dealdetailsnew/dealdetails_arrow.svg" style="border: 0px; margin-top: -5px !important;"></span><span style="margin-right: 10px;">XL = Chest 42, Long 26</span></div>', NULL, 18, NULL, NULL, '2021-01-29 08:53:33', '2021-01-29 08:53:33'),
(16, 2, 'Women', 5, 'Jackets & Coats', 'Women''s Synthetic Jacket', 'jk-15000', '818', '1050', '["L","XL"]', '["Black","As"]', '10', NULL, '<p style="margin: 10px 0px; outline: none; padding: 0px; font-size: 12px; line-height: 18px; font-family: Roboto, Helvetica, Arial, sans-serif; text-align: justify; color: rgb(119, 119, 119);"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">Item code: NWWJ24G<br style="margin: 0px; outline: none; padding: 0px;">Brand: SaRa<br style="margin: 0px; outline: none; padding: 0px;">Gender: Women<br style="margin: 0px; outline: none; padding: 0px;">Product type: Jacket<br style="margin: 0px; outline: none; padding: 0px;"><span style="margin: 0px; outline: none; padding: 0px; font-size: 10pt;">Fabric</span>: Synthetic<br style="margin: 0px; outline: none; padding: 0px;"><span style="margin: 0px; outline: none; padding: 0px; font-size: 10pt;">Sleeve: Full sleeve</span><br style="margin: 0px; outline: none; padding: 0px;">Unique design<br style="margin: 0px; outline: none; padding: 0px;">Best Production quality<br style="margin: 0px; outline: none; padding: 0px;">For an effortlessly trendy look<br style="margin: 0px; outline: none; padding: 0px;">Color: Bright Geranium (As given picture)<br style="margin: 0px; outline: none; padding: 0px;">Size available: M, L.</span></p><p style="margin: 10px 0px; outline: none; padding: 0px; font-size: 12px; line-height: 18px; font-family: Roboto, Helvetica, Arial, sans-serif; text-align: justify; color: rgb(119, 119, 119);"><span style="margin: 0px; outline: none; padding: 0px; font-size: 10pt; font-family: verdana, geneva, sans-serif;"><strong style="margin: 0px; outline: none; padding: 0px;">Size Chart<br style="margin: 0px; outline: none; padding: 0px;"></strong></span></p><div class="table-responsive" style="margin: 0px; outline: none; padding: 0px; color: rgb(119, 119, 119); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 12px;"><table cellspacing="0" cellpadding="0" border="1" style="margin: 15px 0px; outline: currentcolor none 0px; padding: 0px; width: 436px; border-spacing: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; text-indent: 0px; border: 0px none; vertical-align: baseline; height: 230px; color: rgb(85, 85, 85); font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; line-height: normal; background-image: none; background-position: 0% 0%; background-size: initial; background-repeat: repeat; background-attachment: scroll; background-origin: initial; background-clip: initial;"><tbody style="margin: 0px; outline: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent;"><tr style="margin: 0px; outline: none 0px; padding: 0px; border: 0px none; vertical-align: baseline; background: none 0% 0% repeat scroll transparent; height: 29px;"><td rowspan="2" style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 68.9833px; height: 58px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;"><strong style="margin: 0px; outline: 0px; padding: 0px; font-weight: bold; border: 0px; font-size: 12px; vertical-align: baseline; background: transparent;">Size Chart:</strong></span></td><td colspan="4" style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 365.017px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;"><strong style="margin: 0px; outline: 0px; padding: 0px; font-weight: bold; border: 0px; font-size: 12px; vertical-align: baseline; background: transparent;">Measurement (Inch.)</strong></span></td></tr><tr style="margin: 0px; outline: none 0px; padding: 0px; border: 0px none; vertical-align: baseline; background: none 0% 0% repeat scroll transparent; height: 29px;"><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 69.5833px; height: 29px;"><span style="margin: 0px; outline: none 0px; padding: 0px; border: 0px none; font-size: 10pt; vertical-align: baseline; font-family: verdana, geneva; background: none 0% 0% repeat scroll transparent;">Length</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">Chest</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">Waist</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">Sleeve</span></td></tr><tr style="margin: 0px; outline: none 0px; padding: 0px; border: 0px none; vertical-align: baseline; background: none 0% 0% repeat scroll transparent; height: 29px;"><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 68.9833px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;"><strong style="margin: 0px; outline: 0px; padding: 0px; font-weight: bold; border: 0px; font-size: 12px; vertical-align: baseline; background: transparent;">XS</strong></span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 69.5833px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">22.5</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">38</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">35</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">22.5</span></td></tr><tr style="margin: 0px; outline: none 0px; padding: 0px; border: 0px none; vertical-align: baseline; background: none 0% 0% repeat scroll transparent; height: 29px;"><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 68.9833px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;"><strong style="margin: 0px; outline: 0px; padding: 0px; font-weight: bold; border: 0px; font-size: 12px; vertical-align: baseline; background: transparent;">S</strong></span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 69.5833px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">23.5</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">40</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">37</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">23.2</span></td></tr><tr style="margin: 0px; outline: none 0px; padding: 0px; border: 0px none; vertical-align: baseline; background: none 0% 0% repeat scroll transparent; height: 29px;"><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 68.9833px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;"><strong style="margin: 0px; outline: none; padding: 0px;">M</strong></span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 69.5833px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">24.5</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">42</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">39</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">24</span></td></tr><tr style="margin: 0px; outline: none 0px; padding: 0px; border: 0px none; vertical-align: baseline; background: none 0% 0% repeat scroll transparent; height: 29px;"><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 68.9833px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;"><strong style="margin: 0px; outline: none; padding: 0px;">L</strong></span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 69.5833px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">25.5</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">44</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">41</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">24.8</span></td></tr><tr style="margin: 0px; outline: none 0px; padding: 0px; border: 0px none; vertical-align: baseline; background: none 0% 0% repeat scroll transparent; height: 29px;"><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 68.9833px; height: 29px;"><strong style="margin: 0px; outline: none; padding: 0px;">XL</strong></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 69.5833px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">26.5</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;">46</td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;">43</td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">25.5</span></td></tr><tr style="margin: 0px; outline: none 0px; padding: 0px; border: 0px none; vertical-align: baseline; background: none 0% 0% repeat scroll transparent; height: 29px;"><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 68.9833px; height: 29px;"><strong style="margin: 0px; outline: none; padding: 0px;">XXL</strong></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 69.5833px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">27.5</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;">48</td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;">45</td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">26.3</span></td></tr></tbody></table></div><p style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; outline: none; padding: 0px; font-size: 14px; line-height: 20px; font-family: Shruti, sans-serif; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; color: rgb(130, 130, 130);"><span style="margin: 0px; outline: none; padding: 0px; color: rgb(227, 108, 10); font-family: verdana, geneva; font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 16.8667px; text-align: start; font-size: 10pt;">Note:<br style="margin: 0px; outline: none; padding: 0px;"><span style="margin: 0px; outline: none; padding: 0px; font-size: 10pt;"><em style="margin: 0px; outline: none; padding: 0px; color: rgb(130, 130, 130); font-size: 13.3333px; font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 19.0476px; widows: 1;"><span style="margin: 0px; outline: none; padding: 0px; color: rgb(255, 0, 0); font-variant-numeric: normal; font-variant-east-asian: normal; line-height: normal;"><span style="margin: 0px; outline: none; padding: 0px; color: rgb(227, 108, 10); font-style: normal; font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 16.8667px;"><span style="margin: 0px; outline: none; padding: 0px; color: rgb(255, 0, 0); font-variant-numeric: normal; font-variant-east-asian: normal; line-height: normal; font-size: 10pt;"><span style="margin: 0px; outline: none; padding: 0px; color: rgb(227, 108, 10); font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 16.8667px;"><span style="margin: 0px; outline: none; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 16.8667px;"><span style="margin: 0px; outline: none; padding: 0px;"><span style="margin: 0px; outline: none; padding: 0px;"><span style="margin: 0px; outline: none 0px; padding: 0px; border: 0px none; vertical-align: baseline; background: none 0% 0% repeat scroll transparent;"><span style="margin: 0px; outline: none 0px; padding: 0px; border: 0px none; vertical-align: baseline; color: rgb(255, 0, 0); background: none 0% 0% repeat scroll transparent;"><span style="margin: 0px; outline: none; padding: 0px; color: rgb(227, 108, 10); font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 16.8667px;"><span style="margin: 0px; outline: none; padding: 0px; color: rgb(255, 0, 0); font-variant-numeric: normal; font-variant-east-asian: normal; line-height: normal;"><span style="margin: 0px; outline: none; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; line-height: normal;"><strong style="margin: 0px; outline: none; padding: 0px;"><span style="margin: 0px; outline: none; padding: 0px; color: rgb(227, 108, 10); font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; line-height: 16.8667px;"><span class="Apple-converted-space" style="margin: 0px; outline: none; padding: 0px;"><span style="margin: 0px; outline: none; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 16.8667px;">*Product delivery duration may vary due to product availability in stock.</span></span></span></strong></span></span></span></span></span></span></span></span></span></span></span></span></em></span><br style="margin: 0px; outline: none; padding: 0px;">*Please check the size chart and select your size before placing order.</span></p><p style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; outline: none; padding: 0px; font-size: 14px; line-height: 20px; font-family: Shruti, sans-serif; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; color: rgb(130, 130, 130);"><span style="margin: 0px; outline: none; padding: 0px; color: rgb(227, 108, 10); font-family: verdana, geneva; font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 16.8667px; text-align: start; font-size: 10pt;">Disclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.</span></p>', NULL, 18, 18, NULL, '2021-01-29 08:56:38', '2021-01-29 09:02:24'),
(17, 2, 'Women', 5, 'Jackets & Coats', 'Women''s Synthetic Jacket', 'jk-15005', '1500', '3000', '["M","L"]', '["White","Black"]', '10', NULL, '<div class="full-description" itemprop="description" style="margin: 0px 0px 15px; outline: none; padding: 0px 0px 15px; clear: both; line-height: 24px; border-bottom: 1px solid rgb(221, 221, 221); color: rgb(119, 119, 119); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 12px;"><p style="margin: 10px 0px; outline: none; padding: 0px; line-height: 18px; text-align: justify;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">Women''s Synthetic Jacket<br style="margin: 0px; outline: none; padding: 0px;">Item code: NWWJ13JB<br style="margin: 0px; outline: none; padding: 0px;">Brand: SaRa<br style="margin: 0px; outline: none; padding: 0px;">Gender: Women<br style="margin: 0px; outline: none; padding: 0px;">Product type: Jacket<br style="margin: 0px; outline: none; padding: 0px;"><span style="margin: 0px; outline: none; padding: 0px; font-size: 10pt;">Fabric</span>: Synthetic<br style="margin: 0px; outline: none; padding: 0px;"><span style="margin: 0px; outline: none; padding: 0px; font-size: 10pt;">Sleeve: Full sleeve</span><br style="margin: 0px; outline: none; padding: 0px;">Unique design<br style="margin: 0px; outline: none; padding: 0px;">Best Production quality<br style="margin: 0px; outline: none; padding: 0px;">For an effortlessly trendy look<br style="margin: 0px; outline: none; padding: 0px;">Color: Jet Black (As given picture)<br style="margin: 0px; outline: none; padding: 0px;">Size available: S, M, L.</span></p><p style="margin: 10px 0px; outline: none; padding: 0px; line-height: 18px; text-align: justify;"><span style="margin: 0px; outline: none; padding: 0px; font-size: 10pt; font-family: verdana, geneva, sans-serif;"><strong style="margin: 0px; outline: none; padding: 0px;">Size Chart<br style="margin: 0px; outline: none; padding: 0px;"></strong></span></p><div class="table-responsive" style="margin: 0px; outline: none; padding: 0px;"><table cellspacing="0" cellpadding="0" border="1" style="margin: 15px 0px; outline: currentcolor none 0px; padding: 0px; width: 436px; border-spacing: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; text-indent: 0px; border: 0px none; vertical-align: baseline; height: 230px; color: rgb(85, 85, 85); font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; line-height: normal; background-image: none; background-position: 0% 0%; background-size: initial; background-repeat: repeat; background-attachment: scroll; background-origin: initial; background-clip: initial;"><tbody style="margin: 0px; outline: 0px; padding: 0px; border: 0px; vertical-align: baseline; background: transparent;"><tr style="margin: 0px; outline: none 0px; padding: 0px; border: 0px none; vertical-align: baseline; background: none 0% 0% repeat scroll transparent; height: 29px;"><td rowspan="2" style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 68.9833px; height: 58px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;"><strong style="margin: 0px; outline: 0px; padding: 0px; font-weight: bold; border: 0px; font-size: 12px; vertical-align: baseline; background: transparent;">Size Chart:</strong></span></td><td colspan="4" style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 365.017px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;"><strong style="margin: 0px; outline: 0px; padding: 0px; font-weight: bold; border: 0px; font-size: 12px; vertical-align: baseline; background: transparent;">Measurement (Inch.)</strong></span></td></tr><tr style="margin: 0px; outline: none 0px; padding: 0px; border: 0px none; vertical-align: baseline; background: none 0% 0% repeat scroll transparent; height: 29px;"><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 69.5833px; height: 29px;"><span style="margin: 0px; outline: none 0px; padding: 0px; border: 0px none; font-size: 10pt; vertical-align: baseline; font-family: verdana, geneva; background: none 0% 0% repeat scroll transparent;">Length</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">Chest</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">Waist</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">Sleeve</span></td></tr><tr style="margin: 0px; outline: none 0px; padding: 0px; border: 0px none; vertical-align: baseline; background: none 0% 0% repeat scroll transparent; height: 29px;"><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 68.9833px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;"><strong style="margin: 0px; outline: 0px; padding: 0px; font-weight: bold; border: 0px; font-size: 12px; vertical-align: baseline; background: transparent;">XS</strong></span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 69.5833px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">22.5</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">38</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">35</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">22.5</span></td></tr><tr style="margin: 0px; outline: none 0px; padding: 0px; border: 0px none; vertical-align: baseline; background: none 0% 0% repeat scroll transparent; height: 29px;"><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 68.9833px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;"><strong style="margin: 0px; outline: 0px; padding: 0px; font-weight: bold; border: 0px; font-size: 12px; vertical-align: baseline; background: transparent;">S</strong></span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 69.5833px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">23.5</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">40</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">37</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">23.2</span></td></tr><tr style="margin: 0px; outline: none 0px; padding: 0px; border: 0px none; vertical-align: baseline; background: none 0% 0% repeat scroll transparent; height: 29px;"><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 68.9833px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;"><strong style="margin: 0px; outline: none; padding: 0px;">M</strong></span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 69.5833px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">24.5</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">42</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">39</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">24</span></td></tr><tr style="margin: 0px; outline: none 0px; padding: 0px; border: 0px none; vertical-align: baseline; background: none 0% 0% repeat scroll transparent; height: 29px;"><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 68.9833px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;"><strong style="margin: 0px; outline: none; padding: 0px;">L</strong></span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 69.5833px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">25.5</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">44</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">41</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">24.8</span></td></tr><tr style="margin: 0px; outline: none 0px; padding: 0px; border: 0px none; vertical-align: baseline; background: none 0% 0% repeat scroll transparent; height: 29px;"><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 68.9833px; height: 29px;"><strong style="margin: 0px; outline: none; padding: 0px;">XL</strong></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 69.5833px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">26.5</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;">46</td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;">43</td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">25.5</span></td></tr><tr style="margin: 0px; outline: none 0px; padding: 0px; border: 0px none; vertical-align: baseline; background: none 0% 0% repeat scroll transparent; height: 29px;"><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 68.9833px; height: 29px;"><strong style="margin: 0px; outline: none; padding: 0px;">XXL</strong></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 69.5833px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">27.5</span></td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;">48</td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;">45</td><td style="margin: 0px; outline: currentcolor none 0px; padding: 5px; border: 2px solid rgb(0, 0, 0); vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 67.15px; height: 29px;"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">26.3</span></td></tr></tbody></table></div><p style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; outline: none; padding: 0px; font-size: 14px; line-height: 20px; font-family: Shruti, sans-serif; text-align: justify; color: rgb(130, 130, 130); font-variant-numeric: normal; font-variant-east-asian: normal;"><span style="margin: 0px; outline: none; padding: 0px; color: rgb(227, 108, 10); font-family: verdana, geneva; font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 16.8667px; text-align: start; font-size: 10pt;">Note:<br style="margin: 0px; outline: none; padding: 0px;"><span style="margin: 0px; outline: none; padding: 0px; font-size: 10pt;"><em style="margin: 0px; outline: none; padding: 0px; color: rgb(130, 130, 130); font-size: 13.3333px; font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 19.0476px; widows: 1;"><span style="margin: 0px; outline: none; padding: 0px; color: rgb(255, 0, 0); font-variant-numeric: normal; font-variant-east-asian: normal; line-height: normal;"><span style="margin: 0px; outline: none; padding: 0px; color: rgb(227, 108, 10); font-style: normal; font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 16.8667px;"><span style="margin: 0px; outline: none; padding: 0px; color: rgb(255, 0, 0); font-variant-numeric: normal; font-variant-east-asian: normal; line-height: normal; font-size: 10pt;"><span style="margin: 0px; outline: none; padding: 0px; color: rgb(227, 108, 10); font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 16.8667px;"><span style="margin: 0px; outline: none; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 16.8667px;"><span style="margin: 0px; outline: none; padding: 0px;"><span style="margin: 0px; outline: none; padding: 0px;"><span style="margin: 0px; outline: none 0px; padding: 0px; border: 0px none; vertical-align: baseline; background: none 0% 0% repeat scroll transparent;"><span style="margin: 0px; outline: none 0px; padding: 0px; border: 0px none; vertical-align: baseline; color: rgb(255, 0, 0); background: none 0% 0% repeat scroll transparent;"><span style="margin: 0px; outline: none; padding: 0px; color: rgb(227, 108, 10); font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 16.8667px;"><span style="margin: 0px; outline: none; padding: 0px; color: rgb(255, 0, 0); font-variant-numeric: normal; font-variant-east-asian: normal; line-height: normal;"><span style="margin: 0px; outline: none; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; line-height: normal;"><strong style="margin: 0px; outline: none; padding: 0px;"><span style="margin: 0px; outline: none; padding: 0px; color: rgb(227, 108, 10); font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; line-height: 16.8667px;"><span class="Apple-converted-space" style="margin: 0px; outline: none; padding: 0px;"><span style="margin: 0px; outline: none; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 16.8667px;">*Product delivery duration may vary due to product availability in stock.</span></span></span></strong></span></span></span></span></span></span></span></span></span></span></span></span></em></span><br style="margin: 0px; outline: none; padding: 0px;">*Please check the size chart and select your size before placing order.</span></p><p style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; outline: none; padding: 0px; font-size: 14px; line-height: 20px; font-family: Shruti, sans-serif; text-align: justify; color: rgb(130, 130, 130); font-variant-numeric: normal; font-variant-east-asian: normal;"><span style="margin: 0px; outline: none; padding: 0px; color: rgb(227, 108, 10); font-family: verdana, geneva; font-variant-numeric: normal; font-variant-east-asian: normal; line-height: 16.8667px; text-align: start; font-size: 10pt;">Disclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.</span></p></div><div class="pdp-review-wrapper" style="margin: 0px; outline: none; padding: 0px 0px 10px; border-bottom: 1px solid rgb(221, 221, 221); color: rgb(119, 119, 119); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 12px;"></div>', NULL, 18, NULL, NULL, '2021-01-29 08:58:56', '2021-01-29 08:58:56');
INSERT INTO `products` (`id`, `category_name`, `category_name_name`, `sub_category_name`, `sub_category_name_name`, `product_name`, `product_code`, `price`, `old_price`, `size`, `color`, `quantity`, `short_details`, `description`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(18, 2, 'Women', 5, 'Jackets & Coats', 'Women''s Synthetic Jacket', 'jk-1500', '1500', '3000', '["L","XL"]', '["White","Black"]', '10', NULL, '<p style="margin: 10px 0px; outline: none; padding: 0px; font-size: 12px; line-height: 18px; font-family: Roboto, Helvetica, Arial, sans-serif; text-align: justify; color: rgb(119, 119, 119);"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">Women''s Synthetic Jacket<br style="margin: 0px; outline: none; padding: 0px;">Item code: NWWJ13CN<br style="margin: 0px; outline: none; padding: 0px;">Brand: SaRa<br style="margin: 0px; outline: none; padding: 0px;">Gender: Women<br style="margin: 0px; outline: none; padding: 0px;">Product type: Jacket<br style="margin: 0px; outline: none; padding: 0px;"><span style="margin: 0px; outline: none; padding: 0px; font-size: 10pt;">Fabric</span>: Synthetic<br style="margin: 0px; outline: none; padding: 0px;">Pocket:&nbsp;<span style="margin: 0px; outline: none; padding: 0px; font-size: 10pt;">Two side pocket</span><br style="margin: 0px; outline: none; padding: 0px;"><span style="margin: 0px; outline: none; padding: 0px; font-size: 10pt;">Sleeve: Full sleeve</span><br style="margin: 0px; outline: none; padding: 0px;">Unique design<br style="margin: 0px; outline: none; padding: 0px;">Best Production quality<br style="margin: 0px; outline: none; padding: 0px;">For an effortlessly trendy look<br style="margin: 0px; outline: none; padding: 0px;">Color:&nbsp;Collegiate Navy (As given picture)<br style="margin: 0px; outline: none; padding: 0px;">Size available: S, M, L, XL.</span></p><div><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;"><br></span></div>', NULL, 18, NULL, NULL, '2021-01-29 09:00:22', '2021-01-29 09:00:22'),
(19, 2, 'Women', 5, 'Jackets & Coats', 'Women''s Full Sleeve Denim Jacket', 'jk-1500', '1500', NULL, '["M","L"]', '["Black","As"]', '10', NULL, '<p style="margin: 10px 0px; outline: none; padding: 0px; font-size: 12px; line-height: 18px; font-family: Roboto, Helvetica, Arial, sans-serif; text-align: justify; color: rgb(119, 119, 119);"><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;">Item code: WJKTSR1<br style="margin: 0px; outline: none; padding: 0px;">Brand: SaRa<br style="margin: 0px; outline: none; padding: 0px;">Gender: Women<br style="margin: 0px; outline: none; padding: 0px;">Product type: Jacket<br style="margin: 0px; outline: none; padding: 0px;">Fabric: Denim<br style="margin: 0px; outline: none; padding: 0px;"><span style="margin: 0px; outline: none; padding: 0px; font-size: 10pt;">Style: Regular fit</span><br style="margin: 0px; outline: none; padding: 0px;">Color: Deep blue (As given picture)<br style="margin: 0px; outline: none; padding: 0px;">Size: S, M, L.</span></p><div><span style="margin: 0px; outline: none; padding: 0px; font-family: verdana, geneva; font-size: 10pt;"><br></span></div>', NULL, 18, NULL, '2021-02-08 04:19:10', '2021-01-29 09:01:53', '2021-02-08 04:19:10');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT '0',
  `product_id_product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_id` int(11) DEFAULT '0',
  `color_id_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`id`, `product_id`, `product_id_product_name`, `color_id`, `color_id_name`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Men’s Cotton Half Sleeve T-Shirt', 1, 'orange', NULL, NULL, NULL, NULL, '2021-01-29 07:39:37', '2021-01-29 07:39:37'),
(2, 1, 'Men’s Cotton Half Sleeve T-Shirt', 2, 'Paste', NULL, NULL, NULL, NULL, '2021-01-29 07:39:37', '2021-01-29 07:39:37'),
(3, 1, 'Men’s Cotton Half Sleeve T-Shirt', 3, 'White', NULL, NULL, NULL, NULL, '2021-01-29 07:39:37', '2021-01-29 07:39:37'),
(4, 2, 'Men’s Cotton Half Sleeve T-Shirt', 1, 'orange', NULL, NULL, NULL, NULL, '2021-01-29 07:42:04', '2021-01-29 07:42:04'),
(5, 2, 'Men’s Cotton Half Sleeve T-Shirt', 2, 'Paste', NULL, NULL, NULL, NULL, '2021-01-29 07:42:04', '2021-01-29 07:42:04'),
(6, 3, 'Men’s Cotton Half Sleeve T-Shirt', 4, 'Black', NULL, NULL, NULL, NULL, '2021-01-29 07:48:51', '2021-01-29 07:48:51'),
(7, 4, 'Men’s Cotton Half Sleeve T-Shirt', 4, 'Black', NULL, NULL, NULL, NULL, '2021-01-29 07:59:38', '2021-01-29 07:59:38'),
(8, 5, 'Mens Comfortable Cotton Full Trouser', 3, 'White', NULL, NULL, NULL, NULL, '2021-01-29 08:01:17', '2021-01-29 08:01:17'),
(9, 5, 'Mens Comfortable Cotton Full Trouser', 4, 'Black', NULL, NULL, NULL, NULL, '2021-01-29 08:01:17', '2021-01-29 08:01:17'),
(10, 6, 'Mens Comfortable Cotton Full Trouser', 2, 'Paste', NULL, NULL, NULL, NULL, '2021-01-29 08:02:24', '2021-01-29 08:02:24'),
(11, 6, 'Mens Comfortable Cotton Full Trouser', 4, 'Black', NULL, NULL, NULL, NULL, '2021-01-29 08:02:24', '2021-01-29 08:02:24'),
(12, 7, 'WINTER HOODIE FOR MEN', 2, 'Paste', NULL, NULL, NULL, NULL, '2021-01-29 08:40:08', '2021-01-29 08:40:08'),
(13, 7, 'WINTER HOODIE FOR MEN', 3, 'White', NULL, NULL, NULL, NULL, '2021-01-29 08:40:08', '2021-01-29 08:40:08'),
(14, 8, 'বেবি গার্ল ফুল স্লিভ হুডি ফর উইন্টার', 2, 'Paste', NULL, NULL, NULL, NULL, '2021-01-29 08:41:11', '2021-01-29 08:41:11'),
(15, 8, 'বেবি গার্ল ফুল স্লিভ হুডি ফর উইন্টার', 3, 'White', NULL, NULL, NULL, NULL, '2021-01-29 08:41:11', '2021-01-29 08:41:11'),
(16, 9, 'ফুল স্লিভ উইন্টার হুডি ফর মেন', 2, 'Paste', NULL, NULL, NULL, NULL, '2021-01-29 08:43:18', '2021-01-29 08:43:18'),
(17, 10, 'মেনজ ফুল স্লিভ হুডি BY LAGUN', 4, 'Black', NULL, NULL, NULL, NULL, '2021-01-29 08:44:58', '2021-01-29 08:44:58'),
(18, 10, 'মেনজ ফুল স্লিভ হুডি BY LAGUN', 5, 'As', NULL, NULL, NULL, NULL, '2021-01-29 08:44:58', '2021-01-29 08:44:58'),
(19, 11, 'উইন্টার জ্যাকেট ফর জেন্টস-BLUE', 4, 'Black', NULL, NULL, NULL, NULL, '2021-01-29 08:46:54', '2021-01-29 08:46:54'),
(20, 11, 'উইন্টার জ্যাকেট ফর জেন্টস-BLUE', 5, 'As', NULL, NULL, NULL, NULL, '2021-01-29 08:46:54', '2021-01-29 08:46:54'),
(21, 12, 'উইন্টার জ্যাকেট ফর মেন', 4, 'Black', NULL, NULL, NULL, NULL, '2021-01-29 08:48:22', '2021-01-29 08:48:22'),
(22, 12, 'উইন্টার জ্যাকেট ফর মেন', 5, 'As', NULL, NULL, NULL, NULL, '2021-01-29 08:48:22', '2021-01-29 08:48:22'),
(23, 13, 'উইন্টার জ্যাকেট ফর মেন-BLUE', 1, 'orange', NULL, NULL, NULL, NULL, '2021-01-29 08:49:23', '2021-01-29 08:49:23'),
(24, 13, 'উইন্টার জ্যাকেট ফর মেন-BLUE', 3, 'White', NULL, NULL, NULL, NULL, '2021-01-29 08:49:23', '2021-01-29 08:49:23'),
(25, 13, 'উইন্টার জ্যাকেট ফর মেন-BLUE', 5, 'As', NULL, NULL, NULL, NULL, '2021-01-29 08:49:23', '2021-01-29 08:49:23'),
(26, 14, 'ফুল স্লিভ উইন্টার জ্যাকেট ফর মেন', 2, 'Paste', NULL, NULL, NULL, NULL, '2021-01-29 08:50:10', '2021-01-29 08:50:10'),
(27, 14, 'ফুল স্লিভ উইন্টার জ্যাকেট ফর মেন', 5, 'As', NULL, NULL, NULL, NULL, '2021-01-29 08:50:10', '2021-01-29 08:50:10'),
(28, 15, 'ওয়েস্টার্ন ডেনিম জ্যাকেট ফর উইমেন', 4, 'Black', NULL, NULL, NULL, NULL, '2021-01-29 08:53:33', '2021-01-29 08:53:33'),
(29, 15, 'ওয়েস্টার্ন ডেনিম জ্যাকেট ফর উইমেন', 5, 'As', NULL, NULL, NULL, NULL, '2021-01-29 08:53:33', '2021-01-29 08:53:33'),
(30, 16, 'Women''s Synthetic Jacket', 4, 'Black', NULL, NULL, NULL, NULL, '2021-01-29 08:56:38', '2021-01-29 08:56:38'),
(31, 16, 'Women''s Synthetic Jacket', 5, 'As', NULL, NULL, NULL, NULL, '2021-01-29 08:56:38', '2021-01-29 08:56:38'),
(32, 17, 'Women''s Synthetic Jacket', 3, 'White', NULL, NULL, NULL, NULL, '2021-01-29 08:58:56', '2021-01-29 08:58:56'),
(33, 17, 'Women''s Synthetic Jacket', 4, 'Black', NULL, NULL, NULL, NULL, '2021-01-29 08:58:56', '2021-01-29 08:58:56'),
(34, 18, 'Women''s Synthetic Jacket', 3, 'White', NULL, NULL, NULL, NULL, '2021-01-29 09:00:22', '2021-01-29 09:00:22'),
(35, 18, 'Women''s Synthetic Jacket', 4, 'Black', NULL, NULL, NULL, NULL, '2021-01-29 09:00:22', '2021-01-29 09:00:22'),
(36, 19, 'Women''s Full Sleeve Denim Jacket', 4, 'Black', NULL, NULL, NULL, NULL, '2021-01-29 09:01:53', '2021-01-29 09:01:53'),
(37, 19, 'Women''s Full Sleeve Denim Jacket', 5, 'As', NULL, NULL, NULL, NULL, '2021-01-29 09:01:53', '2021-01-29 09:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `title`, `path`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1', '1611927577_Ifet7koOExaqv5bFLcfDSN35jBmtFOHrzaNjHujm.jpg', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 07:39:37', '2021-01-29 07:39:37'),
(2, '2', '1611927724_Aga2K5FSNCDeZ7kxRarbJst2NHCNY5Pl8zKpzuW3.jpg', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 07:42:04', '2021-01-29 07:42:04'),
(3, '3', '1611928131_bWMhXs0J3fntBxCfsGMY6xkRgNcVkC8WcrBQAzef.jpg', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 07:48:51', '2021-01-29 07:48:51'),
(4, '5', '1611928877_lAfXkRP6UrmuodGm29WyVqDS7tWI36lnweUNVoHK.jpg', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 08:01:17', '2021-01-29 08:01:17'),
(5, '6', '1611928944_TPTasaYroNbkQbOKPp1tDbBdtSuP3BpXb17oV13Z.jpg', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 08:02:24', '2021-01-29 08:02:24'),
(6, '6', '1611928944_lAfXkRP6UrmuodGm29WyVqDS7tWI36lnweUNVoHK.jpg', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 08:02:24', '2021-01-29 08:02:24'),
(7, '4', '1611928994_KXretuBQWwZ9XihbBOxSd3HHYebAT1lcwlmHRhQI.jpg', 'upload/product', NULL, NULL, 18, NULL, '2021-01-29 08:03:14', '2021-01-29 08:03:14'),
(8, '7', '1611931208_1_madina-hoodie-08 (1).webp', 'upload/product', NULL, 18, NULL, '2021-02-08 04:31:05', '2021-01-29 08:40:08', '2021-02-08 04:31:05'),
(9, '8', '1611931271_1_baby-girls-full-sleeve-hoodie-for-winter.webp', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 08:41:11', '2021-01-29 08:41:11'),
(10, '9', '1611931398_1_mens-bhoodie.webp', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 08:43:18', '2021-01-29 08:43:18'),
(11, '9', '1611931398_2_mens-bhoodie.webp', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 08:43:18', '2021-01-29 08:43:18'),
(12, '10', '1611931498_1_mens-full-sleeves-hoodie-by-lagun.webp', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 08:44:58', '2021-01-29 08:44:58'),
(13, '11', '1611931614_1.jpg', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 08:46:54', '2021-01-29 08:46:54'),
(14, '12', '1611931702_1_mens-casual-jacket-for-men.webp', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 08:48:22', '2021-01-29 08:48:22'),
(15, '13', '1611931763_1_winter-jacket-for-men.webp', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 08:49:23', '2021-01-29 08:49:23'),
(16, '14', '1611931810_1_full-sleeve-winter-jacket-for-men.webp', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 08:50:10', '2021-01-29 08:50:10'),
(17, '15', '1611932013_1_western-denim-jacket-for-women.webp', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 08:53:33', '2021-01-29 08:53:33'),
(18, '15', '1611932013_2_western-denim-jacket-for-women.webp', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 08:53:33', '2021-01-29 08:53:33'),
(19, '16', '1611932198_0322135_womens-synthetic-jacket.webp', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 08:56:38', '2021-01-29 08:56:38'),
(20, '16', '1611932198_0322136_womens-synthetic-jacket.webp', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 08:56:38', '2021-01-29 08:56:38'),
(21, '16', '1611932198_0322137_womens-synthetic-jacket.webp', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 08:56:38', '2021-01-29 08:56:38'),
(22, '17', '1611932336_0322132_womens-synthetic-jacket.webp', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 08:58:56', '2021-01-29 08:58:56'),
(23, '17', '1611932336_0322133_womens-synthetic-jacket.webp', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 08:58:56', '2021-01-29 08:58:56'),
(24, '17', '1611932336_0322134_womens-synthetic-jacket.webp', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 08:58:56', '2021-01-29 08:58:56'),
(25, '18', '1611932422_0322115_womens-synthetic-jacket.jpeg', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 09:00:22', '2021-01-29 09:00:22'),
(26, '18', '1611932422_0322117_womens-synthetic-jacket.jpeg', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 09:00:22', '2021-01-29 09:00:22'),
(27, '18', '1611932422_0322118_womens-synthetic-jacket.jpeg', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 09:00:22', '2021-01-29 09:00:22'),
(28, '19', '1611932513_0272257_womens-full-sleeve-denim-jacket.jpeg', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 09:01:53', '2021-01-29 09:01:53'),
(29, '19', '1611932513_0272258_womens-full-sleeve-denim-jacket.jpeg', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 09:01:53', '2021-01-29 09:01:53'),
(30, '19', '1611932513_0272259_womens-full-sleeve-denim-jacket.jpeg', 'upload/product', NULL, 18, NULL, NULL, '2021-01-29 09:01:53', '2021-01-29 09:01:53'),
(31, '7', '1612780265_135732772_953194221753772_4205723568973311352_n.jpg', 'upload/product', NULL, NULL, 9, NULL, '2021-02-08 04:31:05', '2021-02-08 04:31:05'),
(32, '7', '1612780265_135543146_974735452934375_6740652250349087995_n.jpg', 'upload/product', NULL, NULL, 9, NULL, '2021-02-08 04:31:05', '2021-02-08 04:31:05');

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT '0',
  `product_id_product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size_id` int(11) DEFAULT '0',
  `size_id_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `product_id`, `product_id_product_name`, `size_id`, `size_id_name`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Men’s Cotton Half Sleeve T-Shirt', 1, 'S', NULL, NULL, NULL, NULL, '2021-01-29 07:39:37', '2021-01-29 07:39:37'),
(2, 1, 'Men’s Cotton Half Sleeve T-Shirt', 2, 'M', NULL, NULL, NULL, NULL, '2021-01-29 07:39:37', '2021-01-29 07:39:37'),
(3, 1, 'Men’s Cotton Half Sleeve T-Shirt', 3, 'L', NULL, NULL, NULL, NULL, '2021-01-29 07:39:37', '2021-01-29 07:39:37'),
(4, 1, 'Men’s Cotton Half Sleeve T-Shirt', 4, 'XL', NULL, NULL, NULL, NULL, '2021-01-29 07:39:37', '2021-01-29 07:39:37'),
(5, 1, 'Men’s Cotton Half Sleeve T-Shirt', 5, 'XXL', NULL, NULL, NULL, NULL, '2021-01-29 07:39:37', '2021-01-29 07:39:37'),
(6, 2, 'Men’s Cotton Half Sleeve T-Shirt', 1, 'S', NULL, NULL, NULL, NULL, '2021-01-29 07:42:04', '2021-01-29 07:42:04'),
(7, 2, 'Men’s Cotton Half Sleeve T-Shirt', 4, 'XL', NULL, NULL, NULL, NULL, '2021-01-29 07:42:04', '2021-01-29 07:42:04'),
(8, 3, 'Men’s Cotton Half Sleeve T-Shirt', 1, 'S', NULL, NULL, NULL, NULL, '2021-01-29 07:48:51', '2021-01-29 07:48:51'),
(9, 3, 'Men’s Cotton Half Sleeve T-Shirt', 2, 'M', NULL, NULL, NULL, NULL, '2021-01-29 07:48:51', '2021-01-29 07:48:51'),
(10, 3, 'Men’s Cotton Half Sleeve T-Shirt', 3, 'L', NULL, NULL, NULL, NULL, '2021-01-29 07:48:52', '2021-01-29 07:48:52'),
(11, 3, 'Men’s Cotton Half Sleeve T-Shirt', 4, 'XL', NULL, NULL, NULL, NULL, '2021-01-29 07:48:52', '2021-01-29 07:48:52'),
(12, 4, 'Men’s Cotton Half Sleeve T-Shirt', 1, 'S', NULL, NULL, NULL, NULL, '2021-01-29 07:59:39', '2021-01-29 07:59:39'),
(13, 5, 'Mens Comfortable Cotton Full Trouser', 1, 'S', NULL, NULL, NULL, NULL, '2021-01-29 08:01:18', '2021-01-29 08:01:18'),
(14, 5, 'Mens Comfortable Cotton Full Trouser', 2, 'M', NULL, NULL, NULL, NULL, '2021-01-29 08:01:18', '2021-01-29 08:01:18'),
(15, 6, 'Mens Comfortable Cotton Full Trouser', 2, 'M', NULL, NULL, NULL, NULL, '2021-01-29 08:02:25', '2021-01-29 08:02:25'),
(16, 6, 'Mens Comfortable Cotton Full Trouser', 3, 'L', NULL, NULL, NULL, NULL, '2021-01-29 08:02:25', '2021-01-29 08:02:25'),
(17, 7, 'WINTER HOODIE FOR MEN', 2, 'M', NULL, NULL, NULL, NULL, '2021-01-29 08:40:08', '2021-01-29 08:40:08'),
(18, 7, 'WINTER HOODIE FOR MEN', 3, 'L', NULL, NULL, NULL, NULL, '2021-01-29 08:40:09', '2021-01-29 08:40:09'),
(19, 8, 'বেবি গার্ল ফুল স্লিভ হুডি ফর উইন্টার', 2, 'M', NULL, NULL, NULL, NULL, '2021-01-29 08:41:11', '2021-01-29 08:41:11'),
(20, 8, 'বেবি গার্ল ফুল স্লিভ হুডি ফর উইন্টার', 3, 'L', NULL, NULL, NULL, NULL, '2021-01-29 08:41:11', '2021-01-29 08:41:11'),
(21, 9, 'ফুল স্লিভ উইন্টার হুডি ফর মেন', 2, 'M', NULL, NULL, NULL, NULL, '2021-01-29 08:43:19', '2021-01-29 08:43:19'),
(22, 9, 'ফুল স্লিভ উইন্টার হুডি ফর মেন', 3, 'L', NULL, NULL, NULL, NULL, '2021-01-29 08:43:19', '2021-01-29 08:43:19'),
(23, 10, 'মেনজ ফুল স্লিভ হুডি BY LAGUN', 1, 'S', NULL, NULL, NULL, NULL, '2021-01-29 08:44:58', '2021-01-29 08:44:58'),
(24, 10, 'মেনজ ফুল স্লিভ হুডি BY LAGUN', 2, 'M', NULL, NULL, NULL, NULL, '2021-01-29 08:44:58', '2021-01-29 08:44:58'),
(25, 11, 'উইন্টার জ্যাকেট ফর জেন্টস-BLUE', 2, 'M', NULL, NULL, NULL, NULL, '2021-01-29 08:46:54', '2021-01-29 08:46:54'),
(26, 11, 'উইন্টার জ্যাকেট ফর জেন্টস-BLUE', 3, 'L', NULL, NULL, NULL, NULL, '2021-01-29 08:46:54', '2021-01-29 08:46:54'),
(27, 12, 'উইন্টার জ্যাকেট ফর মেন', 3, 'L', NULL, NULL, NULL, NULL, '2021-01-29 08:48:22', '2021-01-29 08:48:22'),
(28, 12, 'উইন্টার জ্যাকেট ফর মেন', 4, 'XL', NULL, NULL, NULL, NULL, '2021-01-29 08:48:22', '2021-01-29 08:48:22'),
(29, 13, 'উইন্টার জ্যাকেট ফর মেন-BLUE', 1, 'S', NULL, NULL, NULL, NULL, '2021-01-29 08:49:23', '2021-01-29 08:49:23'),
(30, 13, 'উইন্টার জ্যাকেট ফর মেন-BLUE', 2, 'M', NULL, NULL, NULL, NULL, '2021-01-29 08:49:23', '2021-01-29 08:49:23'),
(31, 14, 'ফুল স্লিভ উইন্টার জ্যাকেট ফর মেন', 2, 'M', NULL, NULL, NULL, NULL, '2021-01-29 08:50:10', '2021-01-29 08:50:10'),
(32, 14, 'ফুল স্লিভ উইন্টার জ্যাকেট ফর মেন', 3, 'L', NULL, NULL, NULL, NULL, '2021-01-29 08:50:10', '2021-01-29 08:50:10'),
(33, 15, 'ওয়েস্টার্ন ডেনিম জ্যাকেট ফর উইমেন', 1, 'S', NULL, NULL, NULL, NULL, '2021-01-29 08:53:33', '2021-01-29 08:53:33'),
(34, 15, 'ওয়েস্টার্ন ডেনিম জ্যাকেট ফর উইমেন', 2, 'M', NULL, NULL, NULL, NULL, '2021-01-29 08:53:33', '2021-01-29 08:53:33'),
(35, 16, 'Women''s Synthetic Jacket', 3, 'L', NULL, NULL, NULL, NULL, '2021-01-29 08:56:38', '2021-01-29 08:56:38'),
(36, 16, 'Women''s Synthetic Jacket', 4, 'XL', NULL, NULL, NULL, NULL, '2021-01-29 08:56:38', '2021-01-29 08:56:38'),
(37, 17, 'Women''s Synthetic Jacket', 2, 'M', NULL, NULL, NULL, NULL, '2021-01-29 08:58:56', '2021-01-29 08:58:56'),
(38, 17, 'Women''s Synthetic Jacket', 3, 'L', NULL, NULL, NULL, NULL, '2021-01-29 08:58:56', '2021-01-29 08:58:56'),
(39, 18, 'Women''s Synthetic Jacket', 3, 'L', NULL, NULL, NULL, NULL, '2021-01-29 09:00:22', '2021-01-29 09:00:22'),
(40, 18, 'Women''s Synthetic Jacket', 4, 'XL', NULL, NULL, NULL, NULL, '2021-01-29 09:00:22', '2021-01-29 09:00:22'),
(41, 19, 'Women''s Full Sleeve Denim Jacket', 2, 'M', NULL, NULL, NULL, NULL, '2021-01-29 09:01:53', '2021-01-29 09:01:53'),
(42, 19, 'Women''s Full Sleeve Denim Jacket', 3, 'L', NULL, NULL, NULL, NULL, '2021-01-29 09:01:53', '2021-01-29 09:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_costs`
--

CREATE TABLE `shipping_costs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_costs`
--

INSERT INTO `shipping_costs` (`id`, `name`, `amount`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Inside Dhaka', '60', NULL, NULL, NULL, NULL, '2020-12-21 13:13:38', '2020-12-21 13:13:38'),
(2, 'Outside Dhaka', '120', NULL, NULL, NULL, NULL, '2020-12-21 13:13:50', '2020-12-21 13:13:50');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bottom_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opening_time` longtext COLLATE utf8mb4_unicode_ci,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `name`, `main_logo`, `bottom_logo`, `address`, `email`, `mobile_number`, `opening_time`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'FALCON FIT', 'Laravel_1612788014.jpg', 'Laravel_1612781337.png', 'Kaderabad Housing Society, Mohammdpur Block C, Road No 1 House No 14 1207 Dhaka, Dhaka Division, Bangladesh', 'info@falconfit.com', '+8801701672845', 'Open: 10:00 AM - Close: 20:00 PM', NULL, NULL, NULL, NULL, '2020-12-02 02:12:02', '2021-02-08 06:59:46');

-- --------------------------------------------------------

--
-- Table structure for table `site_social_links`
--

CREATE TABLE `site_social_links` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_plus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_social_links`
--

INSERT INTO `site_social_links` (`id`, `facebook`, `twitter`, `youtube`, `google_plus`, `instagram`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/falconfitsports', NULL, NULL, NULL, 'https://www.instagram.com/falconfitbd/?hl=en', NULL, NULL, NULL, NULL, '2020-11-29 15:35:22', '2021-02-08 06:48:44');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'S', NULL, NULL, NULL, NULL, '2020-12-01 05:04:41', '2020-12-01 05:04:41'),
(2, 'M', NULL, NULL, NULL, NULL, '2020-12-02 03:37:09', '2020-12-02 03:37:09'),
(3, 'L', NULL, NULL, NULL, NULL, '2020-12-02 03:37:19', '2020-12-02 03:37:19'),
(4, 'XL', NULL, NULL, NULL, NULL, '2020-12-02 03:37:40', '2020-12-02 03:37:40'),
(5, 'XXL', NULL, NULL, NULL, NULL, '2020-12-02 03:37:51', '2020-12-02 03:37:51');

-- --------------------------------------------------------

--
-- Table structure for table `slider_cmses`
--

CREATE TABLE `slider_cmses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` longtext COLLATE utf8mb4_unicode_ci,
  `slider_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product` int(11) DEFAULT '0',
  `product_product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_upcoming_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_upcoming_content` longtext COLLATE utf8mb4_unicode_ci,
  `slider_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_cmses`
--

INSERT INTO `slider_cmses` (`id`, `title`, `sub_title`, `slider_image`, `product`, `product_product_name`, `product_upcoming_status`, `product_upcoming_content`, `slider_status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Ladies Yoga Pants', NULL, 'Laravel_1612788207.png', NULL, NULL, 'No', 'new arrivals 2018', 'Yes', NULL, NULL, NULL, NULL, '2020-12-05 03:54:09', '2021-02-08 06:44:21'),
(2, 'Falcon Fit Bag', NULL, 'Laravel_1612788173.png', 7, 'Men''s Hoddies', 'No', NULL, 'Yes', NULL, NULL, NULL, NULL, '2020-12-05 03:59:21', '2021-02-08 06:42:53'),
(3, 'FALCON FIT SOCKS', NULL, 'Laravel_1612788421.jpg', NULL, NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, '2020-12-05 04:01:07', '2021-02-08 06:47:01');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` int(11) DEFAULT '0',
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category`, `category_name`, `name`, `description`, `status`, `store_id`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Man', 'T-shirt', NULL, 'Active', NULL, NULL, NULL, NULL, '2020-12-01 07:59:00', '2020-12-01 07:59:00'),
(2, 1, 'Men', 'Jackets & Coats', NULL, 'Active', NULL, NULL, NULL, NULL, '2020-12-12 12:47:23', '2020-12-12 12:47:23'),
(3, 1, 'Men', 'Hoodies & Sweatshirts', NULL, 'Active', NULL, NULL, NULL, NULL, '2020-12-12 12:47:50', '2020-12-12 12:47:50'),
(4, 2, 'Women', 'Hoodies & Sweatshirts', NULL, 'Active', NULL, NULL, NULL, NULL, '2020-12-12 12:48:04', '2020-12-12 12:48:04'),
(5, 2, 'Women', 'Jackets & Coats', NULL, 'Active', NULL, NULL, NULL, NULL, '2020-12-12 12:48:27', '2020-12-12 12:48:27'),
(6, 1, 'Men', 'Trouser', NULL, 'Active', NULL, NULL, NULL, NULL, '2021-01-29 08:00:24', '2021-01-29 08:00:24');

-- --------------------------------------------------------

--
-- Table structure for table `testcheckboxes`
--

CREATE TABLE `testcheckboxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type_id` int(10) DEFAULT NULL,
  `user_type_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_status` enum('Active','Inactive','Pending') COLLATE utf8mb4_unicode_ci DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type_id`, `user_type_name`, `remember_token`, `created_at`, `updated_at`, `user_status`) VALUES
(1, 'MD MAHAMUDUR Zaman Bhuyan', 'f.bhuyian@gmail.com', '$2y$10$3uBhVfAGZ6wv5NE.B6rOkuVVIBKI/1WK1S0QPwEqTz2PKO5sx8CWG', 1, 'Admin', 'KqiKKrwOEo0AmnecOELRzNdpPDZZ1dndnYJIJCa4RfMPBIBYUljsiN8f374c', '2020-08-11 11:23:12', '2020-08-11 11:23:12', 'Active'),
(9, 'Falconfit Admin', 'admin@falconfitbd.com', '$2y$10$mbNfW67IAKp9j2LlaTBouusPhLIk/Ngg/JZWyI4Z6z8XqeUKzzCqW', 1, 'Admin', 'o9maCP9TuNGI7SZe5OFZ5V8GCFq30XyyWdKHdkkVGCzyeK6Hz4gFrobiwYZw', '2020-08-15 09:19:50', '2020-08-15 09:19:50', 'Active'),
(10, 'Md. Shahin Mia', 'shahin.akandha@gmail.com', '$2y$10$iWxaNrxYiZ3Gq2KSGNL0dujek/7Hnx7splBlqZkFV8xaqzNl9ztIO', 2, 'Merchant', 'tsP2UMwviUqgPB1P2qnx9ExaQAdEhi3nABpqLWhiIf5BRJyta2n64dTmwkNg', '2020-08-15 10:14:00', '2020-08-15 10:14:00', 'Active'),
(11, 'Frank', 'frank@neutrix.co', '$2y$10$gr2vogBK6OiPAeXAkAWv7eBR2CN.HSQtplYGvgOBAD632FjPTYLAa', 2, 'Merchant', 'WqIUUQnmK67f3BrjKmJXFR5JrRGjM4h6PFCDkuBEoyJwoGmVXTbmKHmEKRy2', '2020-08-18 19:06:52', '2020-08-18 19:06:52', 'Active'),
(12, 'MD MAHAMUDUR Zaman Bhuyan', 'f.fahad.server@gmail.com', '$2y$10$POmo1KtqBmHd0aAUi.6pw.iwXSEXx0oNrc4f2C0HgQwxkRHCq.jYu', 2, 'Merchant', 'xuvB2F3K5NPaJ3akRMMLiIAwx54dgUoNdQl0Sa1kE5XC7KHMmgHaPFS317ly', '2020-08-18 19:10:55', '2020-08-18 19:10:55', 'Active'),
(15, 'MD MAHAMUDUR Zaman Bhuyan', 'fahad@divergenttechbd.com', '$2y$10$nlH5t1Vmo2kKvij.Ny1cqeQlbVU8XsfNZkuA9vcSQ8j4HPTAzl2jW', 2, 'Merchant', 'nVqb8Px4MXSJkyGXbq0NQfIXXeyorQuPfT2wKMA22S5qaztzp50wvuJMCZCa', '2020-08-25 07:52:50', '2020-08-25 07:52:50', 'Active'),
(16, 'Fahad', 'frank@digimo.se', '$2y$10$QkLCu91DTwU/iWLj915zo..z/7xZ4qEidLycIbWLMculSBNOTpO9W', 2, 'Merchant', 'y0QcRdYQDLQCIv5lC1c3495D41Z41HdDjuJ4zAwRLp0SRTB79UQIL8alQldS', '2020-08-26 07:52:07', '2020-08-26 07:52:07', 'Active'),
(17, 'Crown Jewel', 'fakhrul@divergenttechbd.com', '$2y$10$mbNfW67IAKp9j2LlaTBouusPhLIk/Ngg/JZWyI4Z6z8XqeUKzzCqW', 2, 'Merchant', 'uREEXZOlc6uEa5gNcCmmt6LhSRAoYKT02vBGKTA7GmxA5RDXIhIAHw5I0q6A', '2020-09-02 18:28:01', '2020-09-02 18:28:01', 'Active'),
(18, 'Fakhrul Islam Talukder', 'fakhrulislamtalukder@gmail.com', '$2y$10$mbNfW67IAKp9j2LlaTBouusPhLIk/Ngg/JZWyI4Z6z8XqeUKzzCqW', 1, 'Admin', 'FYYRSOohJDnbExq9iNsiXccy56c5TPtCPBSwFbFvigXnrXcfwHLHq6S9OqIv', NULL, NULL, 'Active'),
(19, 'MD MAHAMUDUR Bhuyan', 'fakhrul@gmail.com', '$2y$10$ZgVvOfJz5bXZTtvjIcYWy.3jXra6Sb5MSqOyW4NGcG5n32oOzPClu', 1, 'Admin', 'Ak90Zv9jb4qYT90XqZDJW0tahRr8RceyeXtnBJHiZk6YE1yBS1P31kTMEb2C', '2020-12-26 10:19:44', '2020-12-26 10:19:44', 'Active'),
(20, 'MD MAHAMUDUR Bhuyan', 'fakhrul1@gmail.com', '$2y$10$oG6lZZnPtyWRro3VAIj7L.dO8VnRsAPTeny2BPsP9MEgBKUtcxNL6', 3, 'Customer', 'wtLquesmy36BeLGyOHq8FDLgTTkXH80LuzFTPMnhyk6IgYhvIiI9XfEFOuEC', '2020-12-26 10:25:12', '2020-12-26 10:25:12', 'Active'),
(21, 'MD MAHAMUDUR Bhuyan', 'fakhrul2@gmail.com', '$2y$10$fN8Bc0dLhgIH6BPyYC.0T.e28c4LFLZ82tBiL6onen4fbLwpqTegC', 3, 'Customer', NULL, '2020-12-26 10:27:32', '2020-12-26 10:27:32', 'Active'),
(22, 'MD MAHAMUDUR Bhuyan', 'test@gmail.com', '$2y$10$nqGn4k36pmuoE3sOZjnoZeMvPl3bz3DEZYo9/3qzx5bnCTlCi9I4S', 3, 'Customer', NULL, '2020-12-26 12:09:38', '2020-12-26 12:09:38', 'Active'),
(23, 'JUSTIN DABISH', 'test2@gmail.com', '$2y$10$G4YG.au6wse6.gK7BvFg4.KzTo/dBScUlhZARVtdxu9CSMbtKORke', 3, 'Customer', NULL, '2020-12-26 12:14:59', '2020-12-26 12:14:59', 'Active'),
(24, 'MD MAHAMUDUR Bhuyan', 'a@gmail.com', '$2y$10$8M5GHwgSQG/UpBiHOZrYXebo39lfXqMbewG8MEpqGzO/c92G.fRna', 3, 'Customer', NULL, '2020-12-26 12:18:19', '2020-12-26 12:18:19', 'Active'),
(25, 'MD MAHAMUDUR Bhuyan', 's@gmail.com', '$2y$10$HaedqL2.3gMPyEXBMAMqlOTvuWEioBM29beHjqTKHk9zJaj4qcVYC', 3, 'Customer', NULL, '2020-12-26 12:19:58', '2020-12-26 12:19:58', 'Active'),
(26, 'JUSTIN DABISH', 'q@gmail.com', '$2y$10$0ckLVkCqjt801djKiGqlHexBlCw/.4gluxLPRwDOLnJzOg1qoZdAW', 3, 'Customer', NULL, '2020-12-26 12:21:56', '2020-12-26 12:21:56', 'Active'),
(27, 'MD MAHAMUDUR Bhuyan', 'v@gmail.com', '$2y$10$vWHmfTwS.Ei.JfSztrS5ieQKGl7yo7ieseaV36hCcrRAFiDUsnhvq', 3, 'Customer', NULL, '2020-12-26 12:31:41', '2020-12-26 12:31:41', 'Active'),
(28, 'JUSTIN DABISH', 'c@gmail.com', '$2y$10$a1z9c4NbsKFXr09rlWaQl.aaAnxJkpfaHGX0P975osCRza.7DoYZK', 3, 'Customer', NULL, '2020-12-26 12:35:56', '2020-12-26 12:35:56', 'Active'),
(29, 'MD MAHAMUDUR Bhuyan', 'z@gmail.com', '$2y$10$eeeBT2QlFWQ0/m680p7yQ.A26hYSHUlaGyRzGHIOhySubzl2g8L76', 3, 'Customer', NULL, '2020-12-26 12:42:19', '2020-12-26 12:42:19', 'Active'),
(30, 'MD MAHAMUDUR Bhuyan', 'gh@gmail.com', '$2y$10$B2MjouoZ3gmKB1c2BmFKOuCLo47CAVmdZazhFTmgY9U3DHzn.u3Fq', 3, 'Customer', NULL, '2020-12-26 12:43:52', '2020-12-26 12:43:52', 'Active'),
(31, 'test name', 'ss@gmail.com', '$2y$10$ToLTnTNDr.hbDbrgYjetceSP55QF.N2qShFQoiDcI/IWvxZlMlUEq', 3, 'Customer', NULL, '2020-12-27 07:06:38', '2020-12-27 07:06:38', 'Active'),
(32, 'Saidur Rahman Siam', 'saidurrahmansiam55@gmail.com', '$2y$10$RAaZ6C.Wbl1ryk1t0whL0eweZTrc9GueD1.G.AjJdz6I6Ou46zqgm', 3, 'Customer', NULL, '2021-02-06 23:27:37', '2021-02-06 23:27:37', 'Active'),
(33, 'saidur rahman siam', 'saidurrahmansiam63@gmail.com', '$2y$10$QNusrK4E/T4isaOmNA51JeKfN7TylOz1IE5um8Jy/nwDCpAeJSYNm', 3, 'Customer', NULL, '2021-02-08 04:20:45', '2021-02-08 04:20:45', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_logs`
--
ALTER TABLE `admin_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_orders`
--
ALTER TABLE `booking_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_uses`
--
ALTER TABLE `contact_uses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `current_offers`
--
ALTER TABLE `current_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_shipping_addresses`
--
ALTER TABLE `customer_shipping_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_products`
--
ALTER TABLE `feature_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `high_light_category_products`
--
ALTER TABLE `high_light_category_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page_category_positions`
--
ALTER TABLE `home_page_category_positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manu_category_cmses`
--
ALTER TABLE `manu_category_cmses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchant_infos`
--
ALTER TABLE `merchant_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detailses`
--
ALTER TABLE `order_detailses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_names`
--
ALTER TABLE `page_names`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_costs`
--
ALTER TABLE `shipping_costs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_social_links`
--
ALTER TABLE `site_social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_cmses`
--
ALTER TABLE `slider_cmses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testcheckboxes`
--
ALTER TABLE `testcheckboxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_logs`
--
ALTER TABLE `admin_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=296;
--
-- AUTO_INCREMENT for table `booking_orders`
--
ALTER TABLE `booking_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contact_uses`
--
ALTER TABLE `contact_uses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `current_offers`
--
ALTER TABLE `current_offers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customer_shipping_addresses`
--
ALTER TABLE `customer_shipping_addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feature_products`
--
ALTER TABLE `feature_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `high_light_category_products`
--
ALTER TABLE `high_light_category_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `home_page_category_positions`
--
ALTER TABLE `home_page_category_positions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `manu_category_cmses`
--
ALTER TABLE `manu_category_cmses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `merchant_infos`
--
ALTER TABLE `merchant_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `order_detailses`
--
ALTER TABLE `order_detailses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `page_names`
--
ALTER TABLE `page_names`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `shipping_costs`
--
ALTER TABLE `shipping_costs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `site_social_links`
--
ALTER TABLE `site_social_links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `slider_cmses`
--
ALTER TABLE `slider_cmses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `testcheckboxes`
--
ALTER TABLE `testcheckboxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
