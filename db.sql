-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 08:51 AM
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
('Dashboard', NULL, 'mdi mdi-gauge', 'index?module=home', 'Dashboard', 'tab', 5, 0, 5),
('log Management', 'Setting', 'mdi mdi-account-multiple-outline', 'index?module=log_Management', 'log Management', 'tab', 1, 1, 23),
('Login History', 'Setting', 'mdi mdi-account-convert', 'index?module=Login_History', 'Login History', 'tab', 0, 1, 22),
('Manage Extensions Profile', 'Setting', 'mdi mdi-account-settings-variant', 'index?module=Manage_Extensions_Profile', 'Manage Extensions Profile', 'tab', 4, 1, 26),
('Reset User Password', 'Security', 'mdi mdi-account-key', 'index?module=Reset_User_Password', 'Reset User Password', 'tab', 0, 2, 41),
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
  `createdBy` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `name`, `username`, `secureH`, `password`, `companyId`, `user_role_id`, `userType`, `systemtype`, `gui_language`, `gui_theme`, `Status`, `creationDate`, `createdBy`) VALUES
(1, 'Eng Muhammad ElNahtta', 'muhammad.elnahtta', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '5f4dcc3b5aa765d61d8327deb882cf99', '1', 2, 'P', 'web', 2, 1, 'A', '2023-12-07 09:22:14', 'Muhammad.AlNahtta'),
(9, 'admin', 'Administrator', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '5f4dcc3b5aa765d61d8327deb882cf99', '1', 2, 'P', 'web', 1, 1, 'A', '2023-12-07 09:22:14', 'Muhammad.AlNahtta'),
(13, 'Muhammad Soliman', 'Muhammad.Soliman', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '5f4dcc3b5aa765d61d8327deb882cf99', '1', 2, 'P', 'web', 1, 1, 'A', '2023-12-07 09:22:14', 'Muhammad.AlNahtta'),
(14, 'Nabile', 'Nabile', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '5f4dcc3b5aa765d61d8327deb882cf99', '1', 2, 'C', 'web', 1, 1, 'A', '2023-12-07 09:22:14', 'Muhammad.AlNahtta');

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
(450, 'muhammad.elnahtta', 'web', 'd926447a7de96acc9575891b7b968775HtSY7q8LHS1078b7911876f8f2ad348d43628dfb03a6277782', '2023-12-07 08:23:34', NULL);

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
(1202, 'muhammad.elnahtta', 'web', '127.0.0.1', 'change language', '', 'Success', '2023-12-07 09:50:46', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0', 'Mozilla Firefox', '119.0', 'windows', '#(?<browser>Version|Firefox|other)[/ ]+(?<version>[0-9.|a-zA-Z.]*)#', 'Not Approved');

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
(5, 'Sales Team', 'Sales Support Team', 'Active', '2022-05-23 15:32:33', 'Muhammad El Nahtta');

-- --------------------------------------------------------

--
-- Table structure for table `user_role_module_menu`
--

CREATE TABLE `user_role_module_menu` (
  `user_role_id` int(11) NOT NULL,
  `module_menu_id` varchar(250) NOT NULL,
  `access_type` enum('read','write') NOT NULL
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
(2, 'Dashboard', 'write'),
(2, 'log Management', 'write'),
(2, 'Login History', 'write'),
(2, 'Reports', 'write'),
(2, 'Request', 'write'),
(2, 'Setting', 'write');

--
-- Indexes for dumped tables
--

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
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `users_blocked`
--
ALTER TABLE `users_blocked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users_login_sessions`
--
ALTER TABLE `users_login_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=451;

--
-- AUTO_INCREMENT for table `users_logs`
--
ALTER TABLE `users_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1203;

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
