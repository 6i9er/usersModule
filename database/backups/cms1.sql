-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 17, 2019 at 10:41 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.0.33-11+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms1`
--

-- --------------------------------------------------------

--
-- Table structure for table `group_permissions`
--

CREATE TABLE `group_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_permissions`
--

INSERT INTO `group_permissions` (`id`, `uuid`, `name_ar`, `name_en`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '82f475f0-d873-11e9-8d3b-d9cb987ec421', 'الصلاحيات', 'permissions', '2019-09-16 09:17:04', '2019-09-16 10:15:33', NULL),
(2, '8fe35c20-d873-11e9-ae73-e9372ff93062', 'مجموعات الصلاحيات', 'group Permissions', '2019-09-16 09:17:25', '2019-09-16 10:16:00', NULL),
(3, 'a4c7d640-d87b-11e9-ba84-6563f570968c', 'users', 'المستخدمين', '2019-09-16 10:15:16', '2019-09-16 10:15:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ltm_translations`
--

CREATE TABLE `ltm_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_permission_id` int(11) NOT NULL DEFAULT '0',
  `permission_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `uuid`, `name_ar`, `name_en`, `group_permission_id`, `permission_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'd66619d0-d87b-11e9-9bdd-d1268236e249', 'اضافه', 'add', 3, 'addUser', '2019-09-16 10:16:40', '2019-09-16 10:16:40', NULL),
(2, 'e6849c70-d87b-11e9-86cf-4585876aa3bc', 'edit', 'edit', 3, 'editUser', '2019-09-16 10:17:07', '2019-09-16 10:17:07', NULL),
(3, 'f32d71a0-d87b-11e9-93f5-3bf15af18970', 'block', 'block', 3, 'blockUser', '2019-09-16 10:17:28', '2019-09-16 10:17:28', NULL),
(4, 'ffe06940-d87b-11e9-883c-c9e7cadd4cd5', 'unblock', 'unblock', 3, 'unBlockUser', '2019-09-16 10:17:49', '2019-09-16 10:17:49', NULL),
(5, '0da9f5a0-d87c-11e9-b882-ebd6901e7c53', 'reset', 'reset', 3, 'resetPassword', '2019-09-16 10:18:12', '2019-09-16 10:18:12', NULL),
(6, '314d2010-d87c-11e9-b31c-855e8e45b0b5', 'add', 'add', 1, 'addPermission', '2019-09-16 10:19:12', '2019-09-16 10:19:12', NULL),
(7, '3b0a9500-d87c-11e9-a22e-a711bcf626a2', 'edit', 'edit', 1, 'editPermission', '2019-09-16 10:19:28', '2019-09-16 10:19:28', NULL),
(8, '449f4fb0-d87c-11e9-b1c2-c5a77ba23163', 'delete', 'delete', 1, 'deletePermission', '2019-09-16 10:19:45', '2019-09-16 10:19:45', NULL),
(9, '51f7caf0-d87c-11e9-b73c-cd305c7e25cf', 'add', 'add', 2, 'addGroupPermission', '2019-09-16 10:20:07', '2019-09-16 10:20:07', NULL),
(10, '5d579a20-d87c-11e9-b214-bb04265ed962', 'edit', 'edit', 2, 'editGroupPermission', '2019-09-16 10:20:26', '2019-09-16 10:20:26', NULL),
(11, '68ec4ed0-d87c-11e9-aae3-e762632fb06d', 'delete', 'delete', 2, 'deleteGroupPermission', '2019-09-16 10:20:45', '2019-09-16 10:20:45', NULL),
(12, '533dbd60-d87d-11e9-ba18-0942bfbab4f5', 'list', 'lisr', 3, 'listUsers', '2019-09-16 10:27:19', '2019-09-16 10:27:19', NULL),
(13, '5c34df60-d87d-11e9-9f21-f903ae1c9388', 'list', 'list', 1, 'listPermission', '2019-09-16 10:27:34', '2019-09-16 10:27:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `uuid`, `name_ar`, `name_en`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a1e25270-d87c-11e9-9ded-1beeeb30e043', 'fullPermission', 'fullPermission', '2019-09-16 10:22:21', '2019-09-17 04:56:41', NULL),
(2, 'b84e1400-d87c-11e9-9944-fddc80cf0299', 'usersFullPermission', 'usersFullPermission', '2019-09-16 10:22:59', '2019-09-16 10:23:14', NULL),
(3, 'd28fbb80-d87c-11e9-ae92-194df7b39857', 'permissionsFullPermission', 'permissionsFullPermission', '2019-09-16 10:23:43', '2019-09-16 10:23:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_permissions`
--

INSERT INTO `role_permissions` (`id`, `uuid`, `role_id`, `permission_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a1eac500-d87c-11e9-8b9f-755141e0ae70', 1, 1, '2019-09-16 10:22:21', '2019-09-17 04:56:41', '2019-09-17 04:56:41'),
(2, 'a1f24840-d87c-11e9-873a-0f32e989bc76', 1, 2, '2019-09-16 10:22:21', '2019-09-17 04:56:41', '2019-09-17 04:56:41'),
(3, 'a1f78e70-d87c-11e9-896d-ab2d135f229f', 1, 3, '2019-09-16 10:22:21', '2019-09-17 04:56:41', '2019-09-17 04:56:41'),
(4, 'a20146e0-d87c-11e9-ac5a-b76c85227e42', 1, 4, '2019-09-16 10:22:21', '2019-09-17 04:56:41', '2019-09-17 04:56:41'),
(5, 'a20c0670-d87c-11e9-a022-a16390d44a78', 1, 5, '2019-09-16 10:22:21', '2019-09-17 04:56:41', '2019-09-17 04:56:41'),
(6, 'a212b7e0-d87c-11e9-9d4f-61f2d43a15aa', 1, 6, '2019-09-16 10:22:21', '2019-09-17 04:56:41', '2019-09-17 04:56:41'),
(7, 'a2198fe0-d87c-11e9-9e7b-0308a965572b', 1, 7, '2019-09-16 10:22:21', '2019-09-17 04:56:41', '2019-09-17 04:56:41'),
(8, 'a22070c0-d87c-11e9-8621-3b67c621b54f', 1, 8, '2019-09-16 10:22:21', '2019-09-17 04:56:41', '2019-09-17 04:56:41'),
(9, 'a2271be0-d87c-11e9-a7a2-c969915e7924', 1, 9, '2019-09-16 10:22:21', '2019-09-17 04:56:41', '2019-09-17 04:56:41'),
(10, 'a22e3800-d87c-11e9-a365-1386f825f350', 1, 10, '2019-09-16 10:22:22', '2019-09-17 04:56:41', '2019-09-17 04:56:41'),
(11, 'a2349a50-d87c-11e9-969c-23da791a4ed5', 1, 11, '2019-09-16 10:22:22', '2019-09-17 04:56:41', '2019-09-17 04:56:41'),
(12, 'b854b5a0-d87c-11e9-9e95-537003a24c17', 2, 1, '2019-09-16 10:22:59', '2019-09-16 10:23:14', '2019-09-16 10:23:14'),
(13, 'b866ca70-d87c-11e9-9324-997fb93264a2', 2, 2, '2019-09-16 10:22:59', '2019-09-16 10:23:14', '2019-09-16 10:23:14'),
(14, 'b86e3390-d87c-11e9-8ac5-5343c0a146a0', 2, 3, '2019-09-16 10:22:59', '2019-09-16 10:23:14', '2019-09-16 10:23:14'),
(15, 'b87495d0-d87c-11e9-a278-e5b446f35f59', 2, 4, '2019-09-16 10:22:59', '2019-09-16 10:23:14', '2019-09-16 10:23:14'),
(16, 'c1bcb180-d87c-11e9-8ed2-7f21eda7f209', 2, 1, '2019-09-16 10:23:14', '2019-09-16 10:23:14', NULL),
(17, 'c1c12dd0-d87c-11e9-a803-71c98a2fa6b2', 2, 2, '2019-09-16 10:23:14', '2019-09-16 10:23:14', NULL),
(18, 'c1c67ee0-d87c-11e9-b3cc-1b17deb23eee', 2, 3, '2019-09-16 10:23:15', '2019-09-16 10:23:15', NULL),
(19, 'c1d02990-d87c-11e9-9740-c345c20116a7', 2, 4, '2019-09-16 10:23:15', '2019-09-16 10:23:15', NULL),
(20, 'c1dad4a0-d87c-11e9-bde3-61427cff0582', 2, 5, '2019-09-16 10:23:15', '2019-09-16 10:23:15', NULL),
(21, 'd296fc80-d87c-11e9-9bb3-91d5c3f6ce9c', 3, 6, '2019-09-16 10:23:43', '2019-09-16 10:23:43', NULL),
(22, 'd29dd550-d87c-11e9-b677-8fea4579f701', 3, 7, '2019-09-16 10:23:43', '2019-09-16 10:23:43', NULL),
(23, 'd2a6f6a0-d87c-11e9-8886-3335c21f2127', 3, 8, '2019-09-16 10:23:43', '2019-09-16 10:23:43', NULL),
(24, '4d5ca2f0-d918-11e9-8ba3-63a75c2e218a', 1, 1, '2019-09-17 04:56:41', '2019-09-17 04:56:41', NULL),
(25, '4d6102e0-d918-11e9-92a9-311292f81f2f', 1, 2, '2019-09-17 04:56:41', '2019-09-17 04:56:41', NULL),
(26, '4d661ec0-d918-11e9-94fa-1920aa35a387', 1, 3, '2019-09-17 04:56:41', '2019-09-17 04:56:41', NULL),
(27, '4d6ba670-d918-11e9-97e6-1393d717b260', 1, 4, '2019-09-17 04:56:41', '2019-09-17 04:56:41', NULL),
(28, '4d71fe40-d918-11e9-940a-37318bb32931', 1, 5, '2019-09-17 04:56:41', '2019-09-17 04:56:41', NULL),
(29, '4d7c10e0-d918-11e9-a632-4d7f8f362c72', 1, 6, '2019-09-17 04:56:41', '2019-09-17 04:56:41', NULL),
(30, '4d8638a0-d918-11e9-b5a5-d39bd92faa2b', 1, 7, '2019-09-17 04:56:41', '2019-09-17 04:56:41', NULL),
(31, '4d8b4040-d918-11e9-98dd-192050f80034', 1, 8, '2019-09-17 04:56:41', '2019-09-17 04:56:41', NULL),
(32, '4d913e60-d918-11e9-8afe-73a42f32c714', 1, 9, '2019-09-17 04:56:41', '2019-09-17 04:56:41', NULL),
(33, '4d974150-d918-11e9-aac3-cde0b21d2310', 1, 10, '2019-09-17 04:56:41', '2019-09-17 04:56:41', NULL),
(34, '4d9c9d80-d918-11e9-8737-5bfcea1820e4', 1, 11, '2019-09-17 04:56:41', '2019-09-17 04:56:41', NULL),
(35, '4da18880-d918-11e9-b4bd-63ee17de0c23', 1, 12, '2019-09-17 04:56:41', '2019-09-17 04:56:41', NULL),
(36, '4da66e60-d918-11e9-9f8a-23df4ccfa570', 1, 13, '2019-09-17 04:56:41', '2019-09-17 04:56:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`id`, `uuid`, `role_id`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'e1e3ad70-d87c-11e9-89aa-c5ae26b800bc', 1, 10, '2019-09-16 10:24:08', '2019-09-16 10:28:03', '2019-09-16 10:28:03'),
(2, 'e1e8a450-d87c-11e9-8196-bda72c37fc89', 2, 10, '2019-09-16 10:24:08', '2019-09-16 10:28:03', '2019-09-16 10:28:03'),
(3, 'e1edbef0-d87c-11e9-bf24-f578c98d67dd', 3, 10, '2019-09-16 10:24:08', '2019-09-16 10:28:03', '2019-09-16 10:28:03'),
(4, '6d944690-d87d-11e9-9808-ffeab9b6fc8c', 1, 10, '2019-09-16 10:28:03', '2019-09-16 10:28:03', NULL),
(5, '6d9aca10-d87d-11e9-81f4-17de34c502d6', 2, 10, '2019-09-16 10:28:03', '2019-09-16 10:28:03', NULL),
(6, '6da49ca0-d87d-11e9-93cd-b74642898a47', 3, 10, '2019-09-16 10:28:03', '2019-09-16 10:28:03', NULL),
(7, '92ef0f90-d916-11e9-9800-897fb4b66d0f', 1, 14, '2019-09-17 04:44:18', '2019-09-17 04:44:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `profile_pic` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1-admin 2--employee  3-client',
  `user_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0-inactive 1-active',
  `just_registered` tinyint(1) NOT NULL DEFAULT '0',
  `last_login` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `forget_token` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `phone`, `profile_pic`, `remember_token`, `uuid`, `user_type`, `user_status`, `just_registered`, `last_login`, `forget_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 'Mina', 'admin', 'admin@gmail.com', '$2y$10$nqIFewYIgxI3KFAAFHedUeL4M57giPcxHpjxUa./9dvsLtOT5mT0W', '', '', 'AHuNRObpboUmSQ2GWFpFmZQN4zV6Qxa6VSFmreAjPYH61m5ttpI70Yftad48', 'mina-default-123456789', 1, 1, 0, '', '1568632390-mina-default-123456789', NULL, '2019-09-16 10:28:03', NULL),
(11, 'bb', 'bbbb', 'bb@bb.bb', '$2y$10$WEWslI2p/sIexYs5CLF0ueVtrZj8PtdwLuxyqjSGyRA7QIr3sGXai', '', '', NULL, '24dc39c0-d7d2-11e9-a719-1b4009f91799', 2, 0, 1, '', '', '2019-09-15 14:01:57', '2019-09-15 14:05:28', NULL),
(12, 'ddd', 'asda', 'bb@bb.bbs', '$2y$10$oMYagXmFr/hAVIuD2Di9l.flMfMy13/Ys7UvTACGFAtecqZzNwi5q', '', '', NULL, 'ad76d670-d7d2-11e9-ac8f-a5be54f76820', 2, 0, 1, '', '', '2019-09-15 14:05:46', '2019-09-16 08:49:24', NULL),
(13, 'ddd', 'asdfggf', 'ddd@aaa.ss', '$2y$10$7yZRu..rd3Rq1Ha.NIcdsOMYDVJvFt.ODRUXoi7XfdPYt520F38Ue', '', '', NULL, 'cf780990-d7d2-11e9-ae3d-15f3e2e056ed', 2, 1, 1, '', '1568632456-cf780990-d7d2-11e9-ae3d-15f3e2e056ed', '2019-09-15 14:06:43', '2019-09-16 09:14:37', NULL),
(14, 'test', 'test', 'test@gmail.com', '$2y$10$KotYYswqx.P/.BgRF3/fc.nLCoYYFoujpj1Diw.Cdd00PvVBjzTUS', '', '', NULL, '92e807f0-d916-11e9-8522-b3e073bd6c14', 2, 1, 0, '', '1568702909-92e807f0-d916-11e9-8522-b3e073bd6c14', '2019-09-17 04:44:18', '2019-09-17 04:48:29', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `group_permissions`
--
ALTER TABLE `group_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ltm_translations`
--
ALTER TABLE `ltm_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
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
-- AUTO_INCREMENT for table `group_permissions`
--
ALTER TABLE `group_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ltm_translations`
--
ALTER TABLE `ltm_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `role_permissions`
--
ALTER TABLE `role_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `role_users`
--
ALTER TABLE `role_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
