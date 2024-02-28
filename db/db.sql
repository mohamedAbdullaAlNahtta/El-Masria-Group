-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 04:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `el-masria-group`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_user`
--

CREATE TABLE `client_user` (
  `id` int(18) NOT NULL,
  `national_ID` varchar(14) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone_number` varchar(11) NOT NULL,
  `reg_status` enum('registered','not registered','in progress') NOT NULL DEFAULT 'not registered'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_user`
--

INSERT INTO `client_user` (`id`, `national_ID`, `full_name`, `email`, `phone_number`, `reg_status`) VALUES
(1, '12345678912345', 'ahmed mohamed ahmed1', 'ahmed.mohamed.ahmed1@email.com', '01093001070', 'in progress'),
(2, '12345678912378', 'ahmed mohamed ahmed2', 'ahmed.mohamed.ahmed2@email.com', '01093001070', 'in progress'),
(4, '96541236548956', 'mohamedelnahtta', 'asdf@SDD.CVF', '01093001070', 'not registered'),
(5, '96541236548969', 'mohamedelnahtta2', 'asdfdgf@SDfD.C1213f', '01093001070', 'not registered');

-- --------------------------------------------------------

--
-- Table structure for table `gui_lanuage`
--

CREATE TABLE `gui_lanuage` (
  `id` int(11) NOT NULL,
  `lang` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gui_lanuage`
--

INSERT INTO `gui_lanuage` (`id`, `lang`) VALUES
(1, 'en'),
(2, 'ar');

-- --------------------------------------------------------

--
-- Table structure for table `gui_theme`
--

CREATE TABLE `gui_theme` (
  `id` int(11) NOT NULL,
  `theme` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gui_theme`
--

INSERT INTO `gui_theme` (`id`, `theme`) VALUES
(1, 'dark'),
(2, 'white');

-- --------------------------------------------------------

--
-- Table structure for table `leaveamessage`
--

CREATE TABLE `leaveamessage` (
  `id` int(11) NOT NULL,
  `companyId` varchar(250) NOT NULL,
  `extensionNumber` varchar(250) NOT NULL,
  `extensionName` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaveamessage`
--

INSERT INTO `leaveamessage` (`id`, `companyId`, `extensionNumber`, `extensionName`) VALUES
(1, '134', '7951', 'El Masreen Leave a message');

-- --------------------------------------------------------

--
-- Table structure for table `module_menu`
--

CREATE TABLE `module_menu` (
  `id` varchar(250) NOT NULL,
  `id_parent` varchar(250) DEFAULT NULL,
  `icon` varchar(250) NOT NULL,
  `link` varchar(250) DEFAULT NULL,
  `name` varchar(250) NOT NULL,
  `type` enum('tab','men') NOT NULL DEFAULT 'tab',
  `order_no` int(11) NOT NULL,
  `level` int(18) NOT NULL,
  `nahtta_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `module_menu`
--

INSERT INTO `module_menu` (`id`, `id_parent`, `icon`, `link`, `name`, `type`, `order_no`, `level`, `nahtta_order`) VALUES
('Access Denied', NULL, '', 'index?module=Access_Denied', 'Access Denied', 'tab', 4, 0, 4),
('Blocked Users', 'Security', 'mdi mdi-server-remove', 'index?module=Blocked_Users', 'Blocked Users', 'tab', 1, 2, 41),
('Change language', 'Setting', 'fa fa-language', 'index?module=Change_Language', 'Change language', 'tab', 6, 1, 28),
('Change Password', 'Setting', 'mdi mdi-account-key', 'index?module=Change_Password ', 'Change Password', 'tab', 3, 1, 25),
('Change Profile Image', 'Setting', 'mdi mdi-account-card-details', 'index?module=Change_Profile_Image', 'Change Profile Image', 'tab', 2, 1, 24),
('Change theme', 'Setting', 'mdi mdi-theme-light-dark', 'index?module=Change_Theme', 'Change theme', 'tab', 5, 1, 27),
('Client Registration', 'System Administration', 'mdi mdi-account-convert', 'index?module=Client_Registration', 'Client Registration', 'tab', 1, 1, 33),
('Dashboard', NULL, 'mdi mdi-gauge', 'index?module=home', 'Dashboard', 'tab', 5, 0, 5),
('Dues', 'Payment Reports', 'mdi mdi-calendar-clock', 'index?module=Dues', 'Dues', 'tab', 2, 1, 14),
('log Management', 'Setting', 'mdi mdi-account-multiple-outline', 'index?module=log_Management', 'log Management', 'tab', 1, 1, 23),
('Login History', 'Setting', 'mdi mdi-account-convert', 'index?module=Login_History', 'Login History', 'tab', 0, 1, 22),
('Manage Extensions Profile', 'Setting', 'mdi mdi-account-settings-variant', 'index?module=Manage_Extensions_Profile', 'Manage Extensions Profile', 'tab', 4, 1, 26),
('Paid Values', 'Payment Reports', 'mdi mdi-calendar-check', 'index?module=Paid_Values', 'Paid Values', 'tab', 1, 1, 13),
('Payment Reports', NULL, 'mdi mdi-calendar-text', '#', 'Payment Reports', 'men', 8, 0, 11),
('Reset User Password', 'Security', 'mdi mdi-account-key', 'index?module=Reset_User_Password', 'Reset User Password', 'tab', 0, 2, 41),
('Review Payments', 'Payment Reports', 'mdi mdi-calendar', 'index?module=Review_Payments', 'Review Payments', 'tab', 0, 1, 12),
('Security', 'System Administration', 'mdi mdi-security', '#', 'Security', 'men', 3, 1, 40),
('Setting', NULL, 'mdi mdi-settings', '#', 'Setting', 'men', 11, 0, 21),
('System Administration', NULL, 'mdi mdi-camera-front-variant', '#', 'System Administration', 'tab', 12, 0, 32),
('User Management', 'System Administration', 'mdi mdi-account-multiple', 'index?module=User_Management', 'User Management', 'tab', 0, 1, 36),
('Users Activity Logs', 'Security', 'mdi mdi-account-convert', 'index?module=Users_Activity_Logs', 'Users Activity Logs', 'tab', 2, 2, 42);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `secureH` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `companyId` varchar(250) NOT NULL,
  `user_role_id` int(11) NOT NULL DEFAULT 1,
  `userType` varchar(1) NOT NULL DEFAULT 'C',
  `systemtype` varchar(250) NOT NULL DEFAULT 'web',
  `gui_language` int(11) NOT NULL DEFAULT 1,
  `gui_theme` int(11) NOT NULL DEFAULT 1,
  `Status` varchar(1) NOT NULL DEFAULT 'A',
  `creationDate` datetime NOT NULL,
  `createdBy` varchar(250) NOT NULL,
  `client_id` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `name`, `username`, `secureH`, `password`, `companyId`, `user_role_id`, `userType`, `systemtype`, `gui_language`, `gui_theme`, `Status`, `creationDate`, `createdBy`, `client_id`) VALUES
(1, 'Eng Muhammad ElNahtta', 'muhammad.elnahtta', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '5f4dcc3b5aa765d61d8327deb882cf99', '1', 2, 'P', 'web', 1, 1, 'A', '2023-12-07 09:22:14', 'Muhammad.AlNahtta', 0),
(9, 'admin', 'Administrator', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '5f4dcc3b5aa765d61d8327deb882cf99', '1', 3, 'P', 'web', 1, 1, 'A', '2023-12-07 09:22:14', 'Muhammad.AlNahtta', 0),
(13, 'Muhammad Soliman', 'Muhammad.Soliman', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '5f4dcc3b5aa765d61d8327deb882cf99', '1', 3, 'P', 'web', 1, 1, 'A', '2023-12-07 09:22:14', 'Muhammad.AlNahtta', 0),
(14, 'Nabile', 'Nabile', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '5f4dcc3b5aa765d61d8327deb882cf99', '1', 3, 'P', 'web', 1, 1, 'A', '2023-12-07 09:22:14', 'Muhammad.AlNahtta', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_blocked`
--

CREATE TABLE `users_blocked` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `systemtype` varchar(250) NOT NULL,
  `IP` varchar(255) NOT NULL,
  `blockDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_blocked`
--

INSERT INTO `users_blocked` (`id`, `username`, `systemtype`, `IP`, `blockDate`) VALUES
(32, 'Nabile', 'web', '127.0.0.1', '2023-12-07 12:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `users_login_sessions`
--

CREATE TABLE `users_login_sessions` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `systemtype` varchar(250) NOT NULL,
  `token` varchar(250) NOT NULL,
  `loginTme` datetime DEFAULT NULL,
  `logOutTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_login_sessions`
--

INSERT INTO `users_login_sessions` (`id`, `username`, `systemtype`, `token`, `loginTme`, `logOutTime`) VALUES
(449, 'muhammad.elnahtta', 'web', 'ab6ad9a86d1fac4f700f7865d106fba4nTc0C6wLHQea73e0311a94086158046acc045c4eeb6c66ad6f', '2023-12-07 03:51:37', '2023-12-07 08:23:32'),
(450, 'muhammad.elnahtta', 'web', 'd926447a7de96acc9575891b7b968775HtSY7q8LHS1078b7911876f8f2ad348d43628dfb03a6277782', '2023-12-07 08:23:34', '2023-12-07 10:15:57'),
(451, 'muhammad.elnahtta', 'web', '6c691bbd19afb9e71a72af9f0c4a768aAG5NNZY2v9dead138d169fcf194796ab071c3e4ca810ef8377', '2023-12-07 10:19:57', '2023-12-07 10:26:34'),
(452, 'muhammad.elnahtta', 'web', '39685b4975f08a331726bfd4ab239eccTvRmUnWDSt8357017cc9f4a9307aef74b06a4d4c41acf680b0', '2023-12-07 10:28:23', '2023-12-07 10:30:10'),
(453, 'muhammad.elnahtta', 'web', '5623bc150519d810db34d81ca1954ffeNOCeukvkQ97a252ede82489f0992f866dfb3b6a63788363cff', '2023-12-07 11:34:47', '2023-12-07 11:44:43'),
(454, 'muhammad.elnahtta', 'web', '1a86f1006c8f6807589b145778c92621cHyAKk3cdR43f8a88674571a3e3daa92ee13d4d9b894bd792d', '2023-12-07 11:36:53', '2023-12-07 11:55:03'),
(455, 'muhammad.elnahtta', 'web', '4c7c4d0313e23d211302359c39880f7dEZahriNHAV938b53b324bf4df53a0be6d2cabbf228590595fa', '2023-12-07 11:54:54', '2023-12-07 12:46:20'),
(456, 'muhammad.elnahtta', 'web', '43da96d3ba256d9377c1bcf213b044b4oHmXYFbXzD83f5d2b15ad14f92b1d54ad3cb8b5464bb3cb158', '2023-12-07 12:57:18', '2023-12-11 11:36:43'),
(457, 'muhammad.elnahtta', 'web', 'aea110ac8a0e1b5e1544f6a855144ddeAIzylJAFJ0a5af4bc44da4232213c3d1dae8722b1299fa7fb7', '2023-12-11 11:36:38', '2023-12-24 13:56:02'),
(458, 'muhammad.elnahtta', 'web', 'a208d0b88042cea2e8ef27588aeb672dZDnSQxumZK7faaf706666f95ccab28fcee205a06cad7b627cc', '2023-12-24 13:55:57', '2024-02-11 18:45:12'),
(459, 'muhammad.soliman', 'web', '37282aede68ed107107e1937d8950e4bMuotE9vrDu1969cab8734441a91991f9d9158f9bb82b6bf985', '2024-02-11 18:43:39', NULL),
(460, 'administrator', 'web', '5569fd9d4854f75893277ba5133594a7OYPx8M4B9b87a30a5cafd08aab22dc1893f55098d80880ed72', '2024-02-11 18:45:39', '2024-02-11 18:48:42'),
(461, 'muhammad.elnahtta', 'web', '7a0fa4d61f9871382f2e2e017d57ce2dgEBmkjqwaped70c753fcdb8596c3b68804870da41c6b65e6e2', '2024-02-11 18:48:56', '2024-02-21 03:19:52'),
(462, 'muhammad.elnahtta', 'web', 'f8745f2556243e396383c9cb45c8ba10YmyM6phm8Kc0ba33ed43068e89eb8c5d0fd6b203a9c98a103e', '2024-02-21 03:19:48', '2024-02-26 03:22:33'),
(463, 'muhammad.elnahtta', 'web', 'e8109e4d3e57a9acd66116e8bcec9c33lSSmcl1v7M8211af9a31a92ea5ea8c2b356d06af63288f58cb', '2024-02-26 03:22:26', '2024-02-28 16:04:57'),
(464, 'muhammad.elnahtta', 'web', '37ce22e926fbd6e4c607070ea89809909fRBzxjNot72e25cfdc827184f068ad233e7945a3d75fdfd86', '2024-02-28 16:05:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_logs`
--

CREATE TABLE `users_logs` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `systemtype` varchar(250) NOT NULL,
  `userIP` varchar(250) NOT NULL,
  `action` varchar(250) NOT NULL,
  `description` longtext NOT NULL,
  `status` varchar(250) NOT NULL,
  `actionDateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `userAgent` varchar(250) NOT NULL,
  `browserName` varchar(250) NOT NULL,
  `browserVersion` varchar(250) NOT NULL,
  `browserPlatform` varchar(250) NOT NULL,
  `browserPattern` varchar(250) NOT NULL,
  `actionApproval` varchar(250) NOT NULL DEFAULT 'Not Approved'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_logs`
--

INSERT INTO `users_logs` (`id`, `username`, `systemtype`, `userIP`, `action`, `description`, `status`, `actionDateTime`, `userAgent`, `browserName`, `browserVersion`, `browserPlatform`, `browserPattern`, `actionApproval`) VALUES
(1190, 'muhammad.elnahtta', 'web', '127.0.0.1', 'log in', '', 'Success', '2023-12-07 03:51:37', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1191, 'muhammad.elnahtta', 'web', '127.0.0.1', 'destroy other session token', '', 'Success', '2023-12-07 03:51:41', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1192, 'muhammad.elnahtta', 'web', '127.0.0.1', 'change theme', '', 'Success', '2023-12-07 08:07:47', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1193, 'muhammad.elnahtta', 'web', '127.0.0.1', 'change theme', '', 'Success', '2023-12-07 08:07:58', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1194, 'muhammad.elnahtta', 'web', '127.0.0.1', 'change language', '', 'Success', '2023-12-07 08:08:06', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1195, 'muhammad.elnahtta', 'web', '127.0.0.1', 'change language', '', 'Success', '2023-12-07 08:20:55', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1196, 'muhammad.elnahtta', 'web', '127.0.0.1', 'change language', '', 'Success', '2023-12-07 08:21:57', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1197, 'muhammad.elnahtta', 'web', '127.0.0.1', 'change user profile image', '', 'Success', '2023-12-07 08:23:31', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1198, 'muhammad.elnahtta', 'web', '127.0.0.1', 'log out', '', 'Success', '2023-12-07 08:23:32', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1199, 'muhammad.elnahtta', 'web', '127.0.0.1', 'log in', '', 'Success', '2023-12-07 08:23:35', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1200, 'muhammad.elnahtta', 'web', '127.0.0.1', 'change language', '', 'Success', '2023-12-07 09:42:04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1201, 'muhammad.elnahtta', 'web', '127.0.0.1', 'change language', '', 'Success', '2023-12-07 09:43:22', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1202, 'muhammad.elnahtta', 'web', '127.0.0.1', 'change language', '', 'Success', '2023-12-07 09:50:46', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1203, 'muhammad.elnahtta', 'web', '127.0.0.1', 'change language', '', 'Success', '2023-12-07 09:51:30', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1204, 'muhammad.elnahtta', 'web', '127.0.0.1', 'log out', '', 'Success', '2023-12-07 10:15:57', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1205, 'muhammad.elnahtta', 'web', '127.0.0.1', 'log in', 'Wrong Password', 'Failed', '2023-12-07 10:16:01', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1206, 'muhammad.elnahtta', 'web', '127.0.0.1', 'log in', 'Wrong Password', 'Failed', '2023-12-07 10:19:04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1207, 'muhammad.elnahtta', 'web', '127.0.0.1', 'log in', '', 'Success', '2023-12-07 10:19:57', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1208, 'muhammad.elnahtta', 'web', '127.0.0.1', 'change password', '', 'Success', '2023-12-07 10:26:00', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1209, 'muhammad.elnahtta', 'web', '127.0.0.1', 'log out', '', 'Success', '2023-12-07 10:26:34', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1210, 'muhammad.elnahtta', 'web', '127.0.0.1', 'log in', '', 'Success', '2023-12-07 10:28:24', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1211, 'muhammad.elnahtta', 'web', '127.0.0.1', 'change password', '', 'Success', '2023-12-07 10:29:44', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1212, 'muhammad.elnahtta', 'web', '127.0.0.1', 'log out', '', 'Success', '2023-12-07 10:30:09', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1213, 'muhammad.elnahtta', 'web', '127.0.0.1', 'log in', '', 'Success', '2023-12-07 11:34:48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1214, 'muhammad.elnahtta', 'web', '::1', 'log in', 'Wrong Password', 'Failed', '2023-12-07 11:36:35', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', 'Google Chrome', '119.0.0.0', 'windows', '#(?<browser>Version|Chrome|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1215, 'muhammad.elnahtta', 'web', '::1', 'log in', '', 'Success', '2023-12-07 11:36:53', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', 'Google Chrome', '119.0.0.0', 'windows', '#(?<browser>Version|Chrome|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1216, 'muhammad.elnahtta', 'web', '::1', 'destroy other session token', '', 'Success', '2023-12-07 11:44:43', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', 'Google Chrome', '119.0.0.0', 'windows', '#(?<browser>Version|Chrome|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1217, 'muhammad.elnahtta', 'web', '127.0.0.1', 'log out', '', 'Success', '2023-12-07 11:44:52', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1218, 'muhammad.elnahtta', 'web', '127.0.0.1', 'log in', '', 'Success', '2023-12-07 11:54:55', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1219, 'muhammad.elnahtta', 'web', '127.0.0.1', 'destroy other session token', '', 'Success', '2023-12-07 11:55:03', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1220, 'muhammad.elnahtta', 'web', '::1', 'log out', '', 'Success', '2023-12-07 11:55:06', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', 'Google Chrome', '119.0.0.0', 'windows', '#(?<browser>Version|Chrome|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1221, 'muhammad.elnahtta', 'web', '127.0.0.1', 'log out', '', 'Success', '2023-12-07 12:46:19', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1222, 'nabile', 'web', '127.0.0.1', 'log in', 'Wrong Password', 'Failed', '2023-12-07 12:46:30', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1223, 'nabile', 'web', '127.0.0.1', 'log in', 'Wrong Password', 'Failed', '2023-12-07 12:46:38', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1224, 'nabile', 'web', '127.0.0.1', 'log in', 'Wrong Password', 'Failed', '2023-12-07 12:46:45', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1225, 'nabile', 'web', '127.0.0.1', 'log in', 'Wrong Password', 'Failed', '2023-12-07 12:46:54', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1226, 'nabile', 'web', '127.0.0.1', 'log in', 'Wrong Password', 'Failed', '2023-12-07 12:47:01', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1227, 'System', 'web', '127.0.0.1', 'Block User', ' System Block User :Nabile due to 5 trials of falied login', 'Success', '2023-12-07 12:47:09', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1228, 'Nabile', 'web', '127.0.0.1', 'User Blocked', ' System Block User :Nabile due to 5 trials of falied login', 'Success', '2023-12-07 12:47:09', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1229, 'nabile', 'web', '127.0.0.1', 'log in', 'Account has been blocked', 'Failed', '2023-12-07 12:47:09', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1230, 'muhammad.elnahtta', 'web', '::1', 'log in', 'Wrong Password', 'Failed', '2023-12-07 12:57:09', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', 'Google Chrome', '119.0.0.0', 'windows', '#(?<browser>Version|Chrome|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1231, 'muhammad.elnahtta', 'web', '::1', 'log in', '', 'Success', '2023-12-07 12:57:18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', 'Google Chrome', '119.0.0.0', 'windows', '#(?<browser>Version|Chrome|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1232, '', 'web', '127.0.0.1', 'log out', '', 'Success', '2023-12-11 11:34:30', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1233, 'muhammad.elnahtta', 'web', '127.0.0.1', 'log in', 'Wrong Password', 'Failed', '2023-12-11 11:34:48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1234, 'muhammad.elnahtta', 'web', '127.0.0.1', 'log in', 'Wrong Password', 'Failed', '2023-12-11 11:34:57', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1235, 'muhammad.elnahtta', 'web', '127.0.0.1', 'log in', 'Wrong Password', 'Failed', '2023-12-11 11:36:17', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1236, 'muhammad.elnahtta', 'web', '127.0.0.1', 'log in', '', 'Success', '2023-12-11 11:36:39', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1237, 'muhammad.elnahtta', 'web', '127.0.0.1', 'destroy other session token', '', 'Success', '2023-12-11 11:36:43', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1238, 'super admin', 'web', '127.0.0.1', 'log out', '', 'Success', '2023-12-24 13:55:25', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1239, 'muhammad.elnahtta', 'web', '127.0.0.1', 'log in', '', 'Success', '2023-12-24 13:55:58', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1240, 'muhammad.elnahtta', 'web', '127.0.0.1', 'destroy other session token', '', 'Success', '2023-12-24 13:56:02', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1241, 'Muhammad.Soliman', 'web', '::1', 'log in', '', 'Success', '2024-02-11 18:43:39', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'Google Chrome', '121.0.0.0', 'windows', '#(?<browser>Version|Chrome|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1242, 'muhammad.soliman', 'web', '::1', 'change language', '', 'Success', '2024-02-11 18:44:06', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'Google Chrome', '121.0.0.0', 'windows', '#(?<browser>Version|Chrome|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1243, 'muhammad.soliman', 'web', '::1', 'change language', '', 'Success', '2024-02-11 18:44:17', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'Google Chrome', '121.0.0.0', 'windows', '#(?<browser>Version|Chrome|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1244, 'muhammad.elnahtta', 'web', '127.0.0.1', 'log out', '', 'Success', '2024-02-11 18:45:12', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1245, '', 'web', '127.0.0.1', 'log out', '', 'Success', '2024-02-11 18:45:22', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1246, 'Administrator', 'web', '127.0.0.1', 'log in', '', 'Success', '2024-02-11 18:45:39', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1247, 'Administrator', 'web', '127.0.0.1', 'log out', '', 'Success', '2024-02-11 18:48:42', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1248, 'muhammad.elnahtta', 'web', '127.0.0.1', 'log in', '', 'Success', '2024-02-11 18:48:56', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1249, 'muhammad.elnahtta', 'web', '127.0.0.1', 'log out', '', 'Success', '2024-02-21 03:15:24', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1250, 'muhammad.elnahtta', 'web', '127.0.0.1', 'log in', '', 'Success', '2024-02-21 03:19:48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1251, 'muhammad.elnahtta', 'web', '127.0.0.1', 'destroy other session token', '', 'Success', '2024-02-21 03:19:52', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1252, '', 'web', '127.0.0.1', 'log out', '', 'Success', '2024-02-26 03:18:37', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1253, '', 'web', '127.0.0.1', 'log out', '', 'Success', '2024-02-26 03:18:57', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1254, 'muhammad.elnahtta', 'web', '127.0.0.1', 'log in', '', 'Success', '2024-02-26 03:22:27', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1255, 'muhammad.elnahtta', 'web', '127.0.0.1', 'destroy other session token', '', 'Success', '2024-02-26 03:22:33', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1256, 'muhammad.elnahtta', 'web', '127.0.0.1', 'log out', '', 'Success', '2024-02-28 16:04:57', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1257, 'muhammad.elnahtta', 'web', '127.0.0.1', 'log in', '', 'Success', '2024-02-28 16:05:16', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1258, 'muhammad.elnahtta', 'web', '127.0.0.1', 'change language', '', 'Success', '2024-02-28 16:19:48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1259, 'muhammad.elnahtta', 'web', '127.0.0.1', 'change language', '', 'Success', '2024-02-28 16:20:45', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1260, 'muhammad.elnahtta', 'web', '127.0.0.1', 'change language', '', 'Success', '2024-02-28 16:54:46', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1261, 'muhammad.elnahtta', 'web', '127.0.0.1', 'change language', '', 'Success', '2024-02-28 17:03:58', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1262, 'muhammad.elnahtta', 'web', '127.0.0.1', 'change language', '', 'Success', '2024-02-28 17:08:13', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved'),
(1263, 'muhammad.elnahtta', 'web', '127.0.0.1', 'change language', '', 'Success', '2024-02-28 17:09:46', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved');

-- --------------------------------------------------------

--
-- Table structure for table `users_profiles`
--

CREATE TABLE `users_profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Profile_image` varchar(250) NOT NULL,
  `Job_Title` varchar(250) NOT NULL,
  `job_description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_profiles`
--

INSERT INTO `users_profiles` (`id`, `user_id`, `Profile_image`, `Job_Title`, `job_description`) VALUES
(1, 1, 'assets/images/User_profile_img/5a9fd0f10360264ccadf48177b961d00.jpg', 'Senior Software Developer', ''),
(2, 4, 'assets/images/User_profile_img/MarwaAwad.png', 'Software Developer', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `userIP` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `loginTime` datetime NOT NULL DEFAULT current_timestamp(),
  `logoutTime` datetime NOT NULL,
  `loginStatus` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `status` enum('Active','Deactivate') NOT NULL DEFAULT 'Active',
  `creationDate` datetime NOT NULL DEFAULT current_timestamp(),
  `createdBy` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `name`, `description`, `status`, `creationDate`, `createdBy`) VALUES
(1, 'Forbidden', 'Forbidden', 'Active', '2022-08-15 11:28:28', 'Muhammad El Nahtta'),
(2, 'Super Admin', 'Super Admin', 'Active', '2022-05-23 15:31:42', 'Muhammad El Nahtta'),
(3, 'Admin', 'Admin', 'Active', '2022-05-23 15:31:42', 'Muhammad El Nahtta'),
(4, 'Technical Team', 'Technical Support Team', 'Active', '2022-05-23 15:32:33', 'Muhammad El Nahtta'),
(5, 'Sales Team', 'Sales Support Team', 'Active', '2022-05-23 15:32:33', 'Muhammad El Nahtta'),
(6, 'client', 'client', 'Active', '2023-12-24 17:09:16', 'Muhammad El Nahtta');

-- --------------------------------------------------------

--
-- Table structure for table `user_role_module_menu`
--

CREATE TABLE `user_role_module_menu` (
  `user_role_id` int(11) NOT NULL,
  `module_menu_id` varchar(250) NOT NULL,
  `access_type` enum('read','write') NOT NULL DEFAULT 'read'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role_module_menu`
--

INSERT INTO `user_role_module_menu` (`user_role_id`, `module_menu_id`, `access_type`) VALUES
(1, 'Access Denied', 'write'),
(2, 'Blocked Users', 'write'),
(2, 'Change language', 'write'),
(2, 'Change Password', 'write'),
(2, 'Change Profile Image', 'write'),
(2, 'Change theme', 'write'),
(2, 'Client Registration', 'write'),
(2, 'Dashboard', 'write'),
(2, 'Dues', 'read'),
(2, 'log Management', 'write'),
(2, 'Login History', 'write'),
(2, 'Paid Values', 'write'),
(2, 'Payment Reports', 'write'),
(2, 'Reset User Password', 'write'),
(2, 'Review Payments', 'write'),
(2, 'Security', 'write'),
(2, 'Setting', 'write'),
(2, 'System Administration', 'write'),
(2, 'Users Activity Logs', 'write'),
(3, 'Change language', 'write'),
(3, 'Change Password', 'write'),
(3, 'Change Profile Image', 'write'),
(3, 'Change theme', 'write'),
(3, 'Client Registration', 'write'),
(3, 'Dashboard', 'write'),
(3, 'Dues', 'read'),
(3, 'log Management', 'write'),
(3, 'Login History', 'write'),
(3, 'Paid Values', 'read'),
(3, 'Payment Reports', 'write'),
(3, 'Review Payments', 'write'),
(3, 'Setting', 'write'),
(3, 'System Administration', 'read'),
(6, 'Change language', 'read'),
(6, 'Change Password', 'read'),
(6, 'Change Profile Image', 'read'),
(6, 'Change theme', 'read'),
(6, 'Dashboard', 'read'),
(6, 'Dues', 'read'),
(6, 'log Management', 'read'),
(6, 'Login History', 'read'),
(6, 'Paid Values', 'read'),
(6, 'Payment Reports', 'write'),
(6, 'Review Payments', 'read'),
(6, 'Setting', 'read');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_user`
--
ALTER TABLE `client_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `national_ID` (`national_ID`);

--
-- Indexes for table `gui_lanuage`
--
ALTER TABLE `gui_lanuage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gui_theme`
--
ALTER TABLE `gui_theme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaveamessage`
--
ALTER TABLE `leaveamessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_menu`
--
ALTER TABLE `module_menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `users_blocked`
--
ALTER TABLE `users_blocked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_login_sessions`
--
ALTER TABLE `users_login_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_logs`
--
ALTER TABLE `users_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_profiles`
--
ALTER TABLE `users_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role_module_menu`
--
ALTER TABLE `user_role_module_menu`
  ADD PRIMARY KEY (`user_role_id`,`module_menu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_user`
--
ALTER TABLE `client_user`
  MODIFY `id` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gui_lanuage`
--
ALTER TABLE `gui_lanuage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gui_theme`
--
ALTER TABLE `gui_theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leaveamessage`
--
ALTER TABLE `leaveamessage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `users_blocked`
--
ALTER TABLE `users_blocked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users_login_sessions`
--
ALTER TABLE `users_login_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=465;

--
-- AUTO_INCREMENT for table `users_logs`
--
ALTER TABLE `users_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1264;

--
-- AUTO_INCREMENT for table `users_profiles`
--
ALTER TABLE `users_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41414;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
