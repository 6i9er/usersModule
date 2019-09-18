-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 18, 2019 at 06:09 PM
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
(1, '83ade8a0-3152-11e9-9fcc-87dc80876a6f', 'الادوار', 'roles', '2019-02-15 12:50:07', '2019-02-25 02:27:48', NULL),
(2, '649a6ae0-38d5-11e9-b0b9-8903604bbdf6', 'المستخدمين', 'users', '2019-02-25 02:14:37', '2019-02-25 02:14:37', NULL),
(3, 'd63286e0-38d5-11e9-bacd-3ba35b3696d0', 'الفروع', 'Branches', '2019-02-25 02:17:48', '2019-02-25 02:19:38', NULL),
(4, 'f5137bb0-38d5-11e9-a000-0b8077b65403', 'الشركات', 'Companies', '2019-02-25 02:18:40', '2019-02-25 02:19:10', NULL),
(5, 'f0a2c9d0-38d6-11e9-a7bf-896b225558d4', 'الاقسام', 'categories', '2019-02-25 02:25:42', '2019-02-25 02:25:42', NULL),
(6, '0f9fff20-38d7-11e9-985a-8b82d2f257d5', 'الاقسام الفرعيه', 'sub categories', '2019-02-25 02:26:34', '2019-02-25 02:26:34', NULL),
(7, '2eef1a20-38d7-11e9-bf83-ebc07d833ac8', 'المنتجات', 'products', '2019-02-25 02:27:26', '2019-02-25 02:27:26', NULL),
(8, '4d83a960-38d7-11e9-8499-b9ed8b44ce28', 'العروض', 'offers', '2019-02-25 02:28:18', '2019-02-25 02:28:18', NULL),
(9, '7f6597f0-6526-11e9-9ac6-0d251b60947e', 'اتصل بنا', 'contact us', '2019-04-22 11:46:03', '2019-04-22 11:46:03', NULL),
(10, '958ceca0-6526-11e9-a29d-7b304fd58922', 'متابعات', 'subscribes', '2019-04-22 11:46:40', '2019-04-22 11:46:40', NULL),
(11, 'bea831f0-6526-11e9-803e-198da463d011', 'سلايدر', 'sliders', '2019-04-22 11:47:49', '2019-04-22 11:47:49', NULL),
(12, '27a307c0-652a-11e9-b4ad-edde8096bf79', 'الطلبات', 'orders', '2019-04-22 12:12:13', '2019-04-22 12:12:13', NULL),
(13, 'd7f32e60-6530-11e9-bc10-8131c8686a80', 'الرئيسيه', 'home', '2019-04-22 13:00:06', '2019-04-22 13:00:06', NULL),
(14, 'f8211890-6530-11e9-9f84-65340addbe90', 'فريق العمل', 'teamwork', '2019-04-22 13:01:00', '2019-04-22 13:01:00', NULL);

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
(1, '976af180-3152-11e9-aa65-bdd8741162ad', 'اضافه', 'add', 1, 'addRoles', '2019-02-15 14:50:40', '2019-02-15 14:50:40', NULL),
(2, 'a75fbbf0-3152-11e9-b8df-b18ddc337217', 'تعديل', 'edit', 1, 'editRoles', '2019-02-15 14:51:07', '2019-02-15 14:51:07', NULL),
(5, 'd6e90870-3152-11e9-a80f-31bf2297053c', 'عرض', 'list', 1, 'listRoles', '2019-02-15 14:52:27', '2019-02-15 14:52:27', NULL),
(6, '030018f0-6527-11e9-a186-7d29d66e5a63', 'جذف دور', 'delete role', 1, 'deleteRoles', '2019-04-22 13:49:43', '2019-04-22 13:49:57', NULL),
(7, '87dfab20-6527-11e9-9261-ab4e4304d31d', 'اضافه', 'add', 2, 'addUsers', '2019-04-22 13:53:26', '2019-04-22 13:53:26', NULL),
(8, '9499d5a0-6527-11e9-bcbe-43506f8c8829', 'تعديل', 'edit', 2, 'editusers', '2019-04-22 13:53:48', '2019-04-22 13:54:57', NULL),
(9, 'a33ec010-6527-11e9-872b-1dc90b101492', 'حذف', 'delete', 2, 'deleteUsers', '2019-04-22 13:54:12', '2019-04-22 13:54:12', NULL),
(10, 'afa31b00-6527-11e9-8abb-67f24edf0c00', 'عرض', 'list', 2, 'listUsers', '2019-04-22 13:54:33', '2019-04-22 13:54:33', NULL),
(11, 'd61c4020-6527-11e9-b7e4-9971c93dc066', 'اضافه', 'add', 11, 'addSliders', '2019-04-22 13:55:38', '2019-04-22 13:55:38', NULL),
(12, 'dfb1c690-6527-11e9-bee0-ebf0e637f68a', 'تعديل', 'edit', 11, 'editSliders', '2019-04-22 13:55:54', '2019-04-22 13:55:54', NULL),
(13, 'ef7b74e0-6527-11e9-948c-19b862cd3a9e', 'عرض', 'list', 11, 'listSliders', '2019-04-22 13:56:20', '2019-04-22 13:56:20', NULL),
(14, '0291e440-6528-11e9-95d7-4be18db5e455', 'حذف', 'delete', 11, 'deleteSliders', '2019-04-22 13:56:52', '2019-04-22 13:56:52', NULL),
(15, '19eaf370-6528-11e9-a2f1-d956941d9876', 'عرض', 'list', 10, 'listSibscribes', '2019-04-22 13:57:31', '2019-04-22 13:57:31', NULL),
(16, '26ef6b90-6528-11e9-bbc1-e7b417d20610', 'حذف', 'delete', 10, 'deleteSubscribes', '2019-04-22 13:57:53', '2019-04-22 13:57:53', NULL),
(17, '94dac5e0-6528-11e9-ae11-f71659878438', 'اضافه', 'add', 3, 'addBranches', '2019-04-22 14:00:58', '2019-04-22 14:00:58', NULL),
(18, '9f225480-6528-11e9-8e64-b3c28665123f', 'تعديل', 'edit', 3, 'editBranches', '2019-04-22 14:01:15', '2019-04-22 14:01:15', NULL),
(19, 'b51847a0-6528-11e9-a6b0-d300d40aa849', 'حذف', 'delete', 3, 'deleteBranches', '2019-04-22 14:01:52', '2019-04-22 14:01:52', NULL),
(20, 'c1274140-6528-11e9-8c2b-0d6065e9bef5', 'عرض', 'list', 3, 'listBranches', '2019-04-22 14:02:12', '2019-04-22 14:02:12', NULL),
(21, 'dc894ac0-6528-11e9-8575-67f3101e0207', 'عرض', 'list', 9, 'listContacts', '2019-04-22 14:02:58', '2019-04-22 14:02:58', NULL),
(22, 'e7788a60-6528-11e9-a643-897ef1db8a48', 'تعديل', 'edit', 9, 'editContacts', '2019-04-22 14:03:16', '2019-04-22 14:03:16', NULL),
(23, 'fea45f50-6528-11e9-ae26-77d1fc8c917c', 'اضافه', 'add', 4, 'addCompanies', '2019-04-22 14:03:55', '2019-04-22 14:03:55', NULL),
(24, '0ac98140-6529-11e9-baa2-65a81f7f90b1', 'تعديل', 'edit', 4, 'editCompanies', '2019-04-22 14:04:16', '2019-04-22 14:04:16', NULL),
(25, '18b22440-6529-11e9-ab14-cd5f85d903cc', 'عرض', 'list', 4, 'listCompanies', '2019-04-22 14:04:39', '2019-04-22 14:04:39', NULL),
(26, '24a91030-6529-11e9-8f4e-7bf3bb0217f0', 'حذف', 'delete', 4, 'deleteCompanies', '2019-04-22 14:04:59', '2019-04-22 14:04:59', NULL),
(27, '34328100-6529-11e9-b066-471f1b88618b', 'اضافه', 'add', 5, 'addCategories', '2019-04-22 14:05:25', '2019-04-22 14:05:25', NULL),
(28, '3f92e9d0-6529-11e9-a5fa-55ef0956eecf', 'تعديل', 'edit', 5, 'editCategories', '2019-04-22 14:05:44', '2019-04-22 14:05:44', NULL),
(29, '4d32eb80-6529-11e9-bd98-195e41a15960', 'عرض', 'list', 5, 'listcategories', '2019-04-22 14:06:07', '2019-04-22 14:06:07', NULL),
(30, '58c62280-6529-11e9-87ce-d520e407cfb7', 'حذف', 'delete', 5, 'deleteCategories', '2019-04-22 14:06:26', '2019-04-22 14:06:42', NULL),
(31, '6e502b40-6529-11e9-9e42-83e3862b2188', 'اضافه', 'add', 6, 'addSubCategories', '2019-04-22 14:07:03', '2019-04-22 14:07:03', NULL),
(32, '7b616420-6529-11e9-bc0a-17b323755150', 'تعديل', 'edit', 6, 'editSubCategories', '2019-04-22 14:07:24', '2019-04-22 14:07:24', NULL),
(33, '8cbbf060-6529-11e9-9fe2-5b1be0d0bcf6', 'عرض', 'list', 6, 'listSubCategories', '2019-04-22 14:07:54', '2019-04-22 14:07:54', NULL),
(34, '97b36430-6529-11e9-886d-d558fb3d1610', 'حذف', 'delete', 6, 'deleteSubCategories', '2019-04-22 14:08:12', '2019-04-22 14:08:12', NULL),
(35, 'b6c6dd80-6529-11e9-9974-a75e9f876c46', 'اضافه', 'add', 7, 'addProducts', '2019-04-22 14:09:04', '2019-04-22 14:09:04', NULL),
(36, 'c4922610-6529-11e9-8129-57962d65bb34', 'تعديل', 'edit', 7, 'editProducts', '2019-04-22 14:09:27', '2019-04-22 14:09:27', NULL),
(37, 'd171d2e0-6529-11e9-a0f0-fd3c095c0295', 'عرض', 'list', 7, 'listProducts', '2019-04-22 14:09:49', '2019-04-22 14:09:49', NULL),
(38, 'e1109420-6529-11e9-9aea-dfe7ba53e347', 'حذف', 'delete', 7, 'deleteProducts', '2019-04-22 14:10:15', '2019-04-22 14:10:15', NULL),
(39, 'f84bc910-6529-11e9-8a85-0106f7879309', 'اضافه', 'add', 8, 'addOffers', '2019-04-22 14:10:54', '2019-04-22 14:10:54', NULL),
(40, '048ecf40-652a-11e9-b102-0f428002af27', 'تعديل', 'edit', 8, 'editOffers', '2019-04-22 14:11:15', '2019-04-22 14:11:15', NULL),
(41, '0d7cad10-652a-11e9-8727-33f8f50b4290', 'عرض', 'list', 8, 'listOffers', '2019-04-22 14:11:30', '2019-04-22 14:11:30', NULL),
(42, '19b8f1e0-652a-11e9-8730-cf655a36a8aa', 'حذف', 'delete', 8, 'deleteOffers', '2019-04-22 14:11:50', '2019-04-22 14:11:50', NULL),
(43, '37c28c70-652a-11e9-9042-b52d252394ef', 'اضافه', 'add', 12, 'addOrders', '2019-04-22 14:12:41', '2019-04-22 14:12:41', NULL),
(44, '45d000c0-652a-11e9-9b83-e927f9096ec6', 'تعديل', 'edit', 12, 'editOrders', '2019-04-22 14:13:04', '2019-04-22 14:13:04', NULL),
(45, '5d319560-652a-11e9-bfa9-8bf1cb64e442', 'حذف', 'delete', 12, 'deleteOrders', '2019-04-22 14:13:43', '2019-04-22 14:13:43', NULL),
(46, '68809f70-652a-11e9-920d-957bbdac63c4', 'عرض', 'list', 12, 'listOrders', '2019-04-22 14:14:02', '2019-04-22 14:14:02', NULL),
(47, '06301620-6531-11e9-b6b3-e5da161faa6d', 'عرض', 'list', 13, 'listHome', '2019-04-22 15:01:24', '2019-04-22 15:01:24', NULL),
(48, '1b311ac0-6531-11e9-81ed-a517d381a1ff', 'اضافه', 'add', 14, 'addTeamworks', '2019-04-22 15:01:59', '2019-04-22 15:01:59', NULL),
(49, '2b7fdb90-6531-11e9-84a4-41a7a93b800c', 'تعديل', 'edit', 14, 'editTeamworks', '2019-04-22 15:02:26', '2019-04-22 15:02:26', NULL),
(50, '36987880-6531-11e9-b865-13ffc7bceffe', 'عرض', 'list', 14, 'listTeamworks', '2019-04-22 15:02:45', '2019-04-22 15:02:45', NULL),
(51, '4499cb40-6531-11e9-b8b6-31a092cdd36a', 'حذف', 'delete', 14, 'deleteTeamworks', '2019-04-22 15:03:09', '2019-04-22 15:03:09', NULL),
(52, 'c39bb4b0-6532-11e9-938e-6db37091de1b', 'موافقه', 'accept', 12, 'acceptOrders', '2019-04-22 15:13:51', '2019-04-22 15:13:51', NULL),
(53, 'd7a9dfd0-6532-11e9-8d42-817099b1fbf5', 'رفض', 'cancel', 12, 'cancelOrders', '2019-04-22 15:14:25', '2019-04-22 15:14:25', NULL),
(54, '15425fc0-6533-11e9-9eb9-a7eb19511a94', 'توصيل', 'deliver', 12, 'deliverOrders', '2019-04-22 15:16:08', '2019-04-22 15:16:08', NULL);

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
(1, 'a1e25270-d87c-11e9-9ded-1beeeb30e043', 'fullPermission', 'fullPermission', '2019-09-16 10:22:21', '2019-09-18 10:51:53', NULL),
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
(24, '4d5ca2f0-d918-11e9-8ba3-63a75c2e218a', 1, 1, '2019-09-17 04:56:41', '2019-09-18 10:51:53', '2019-09-18 10:51:53'),
(25, '4d6102e0-d918-11e9-92a9-311292f81f2f', 1, 2, '2019-09-17 04:56:41', '2019-09-18 10:51:53', '2019-09-18 10:51:53'),
(26, '4d661ec0-d918-11e9-94fa-1920aa35a387', 1, 3, '2019-09-17 04:56:41', '2019-09-18 10:51:53', '2019-09-18 10:51:53'),
(27, '4d6ba670-d918-11e9-97e6-1393d717b260', 1, 4, '2019-09-17 04:56:41', '2019-09-18 10:51:53', '2019-09-18 10:51:53'),
(28, '4d71fe40-d918-11e9-940a-37318bb32931', 1, 5, '2019-09-17 04:56:41', '2019-09-18 10:51:53', '2019-09-18 10:51:53'),
(29, '4d7c10e0-d918-11e9-a632-4d7f8f362c72', 1, 6, '2019-09-17 04:56:41', '2019-09-18 10:51:53', '2019-09-18 10:51:53'),
(30, '4d8638a0-d918-11e9-b5a5-d39bd92faa2b', 1, 7, '2019-09-17 04:56:41', '2019-09-18 10:51:53', '2019-09-18 10:51:53'),
(31, '4d8b4040-d918-11e9-98dd-192050f80034', 1, 8, '2019-09-17 04:56:41', '2019-09-18 10:51:53', '2019-09-18 10:51:53'),
(32, '4d913e60-d918-11e9-8afe-73a42f32c714', 1, 9, '2019-09-17 04:56:41', '2019-09-18 10:51:53', '2019-09-18 10:51:53'),
(33, '4d974150-d918-11e9-aac3-cde0b21d2310', 1, 10, '2019-09-17 04:56:41', '2019-09-18 10:51:53', '2019-09-18 10:51:53'),
(34, '4d9c9d80-d918-11e9-8737-5bfcea1820e4', 1, 11, '2019-09-17 04:56:41', '2019-09-18 10:51:53', '2019-09-18 10:51:53'),
(35, '4da18880-d918-11e9-b4bd-63ee17de0c23', 1, 12, '2019-09-17 04:56:41', '2019-09-18 10:51:53', '2019-09-18 10:51:53'),
(36, '4da66e60-d918-11e9-9f8a-23df4ccfa570', 1, 13, '2019-09-17 04:56:41', '2019-09-18 10:51:53', '2019-09-18 10:51:53'),
(37, '16f601b0-da13-11e9-ac49-0714475fc459', 1, 1, '2019-09-18 10:51:53', '2019-09-18 10:51:53', NULL),
(38, '16fc9e30-da13-11e9-95b0-15dc942e124a', 1, 2, '2019-09-18 10:51:53', '2019-09-18 10:51:53', NULL),
(39, '1701a380-da13-11e9-b492-ab8fa5161271', 1, 5, '2019-09-18 10:51:53', '2019-09-18 10:51:53', NULL),
(40, '1706bcd0-da13-11e9-be28-0b962db5d2c1', 1, 6, '2019-09-18 10:51:53', '2019-09-18 10:51:53', NULL),
(41, '170ca960-da13-11e9-a0db-ad6877ceab68', 1, 7, '2019-09-18 10:51:53', '2019-09-18 10:51:53', NULL),
(42, '1712de40-da13-11e9-af68-55a94e5c66da', 1, 8, '2019-09-18 10:51:53', '2019-09-18 10:51:53', NULL),
(43, '171c9090-da13-11e9-81f2-5b3cd628c534', 1, 9, '2019-09-18 10:51:53', '2019-09-18 10:51:53', NULL),
(44, '1726bf60-da13-11e9-952f-d77bdc432bc1', 1, 10, '2019-09-18 10:51:53', '2019-09-18 10:51:53', NULL),
(45, '172caf40-da13-11e9-ba50-41c8c8b76bd8', 1, 11, '2019-09-18 10:51:53', '2019-09-18 10:51:53', NULL),
(46, '17337ca0-da13-11e9-afec-8d6f0f875ff6', 1, 12, '2019-09-18 10:51:54', '2019-09-18 10:51:54', NULL),
(47, '1739f400-da13-11e9-8d76-e5886394bc85', 1, 13, '2019-09-18 10:51:54', '2019-09-18 10:51:54', NULL),
(48, '1740dc10-da13-11e9-b8a2-f328a440bb8c', 1, 14, '2019-09-18 10:51:54', '2019-09-18 10:51:54', NULL),
(49, '17475ee0-da13-11e9-a966-5974a23bd315', 1, 15, '2019-09-18 10:51:54', '2019-09-18 10:51:54', NULL),
(50, '174c8460-da13-11e9-8b2f-7bad5e3b9822', 1, 16, '2019-09-18 10:51:54', '2019-09-18 10:51:54', NULL),
(51, '17521c70-da13-11e9-b9b9-e191dc7bf782', 1, 17, '2019-09-18 10:51:54', '2019-09-18 10:51:54', NULL),
(52, '17584710-da13-11e9-b55c-b1e8943898a4', 1, 18, '2019-09-18 10:51:54', '2019-09-18 10:51:54', NULL),
(53, '175e0140-da13-11e9-a743-c3370aa80709', 1, 19, '2019-09-18 10:51:54', '2019-09-18 10:51:54', NULL),
(54, '176465b0-da13-11e9-ac7a-158f02d547dc', 1, 20, '2019-09-18 10:51:54', '2019-09-18 10:51:54', NULL),
(55, '176b1180-da13-11e9-a21a-afbc59bc192c', 1, 21, '2019-09-18 10:51:54', '2019-09-18 10:51:54', NULL),
(56, '1771cd40-da13-11e9-a6fc-e918bd3581ef', 1, 22, '2019-09-18 10:51:54', '2019-09-18 10:51:54', NULL),
(57, '17789f80-da13-11e9-93d7-09e2b30cc788', 1, 23, '2019-09-18 10:51:54', '2019-09-18 10:51:54', NULL),
(58, '177ffd00-da13-11e9-bcf1-ab15c26d8036', 1, 24, '2019-09-18 10:51:54', '2019-09-18 10:51:54', NULL),
(59, '17867410-da13-11e9-8398-4b8c52400acd', 1, 25, '2019-09-18 10:51:54', '2019-09-18 10:51:54', NULL),
(60, '178cbf20-da13-11e9-afda-d9be8d6e67d5', 1, 26, '2019-09-18 10:51:54', '2019-09-18 10:51:54', NULL),
(61, '1793ad30-da13-11e9-8cda-df09dfcdfc16', 1, 27, '2019-09-18 10:51:54', '2019-09-18 10:51:54', NULL),
(62, '179a6cf0-da13-11e9-9741-f78b1a540222', 1, 28, '2019-09-18 10:51:54', '2019-09-18 10:51:54', NULL),
(63, '179f16b0-da13-11e9-a2ed-3557e79e99e2', 1, 29, '2019-09-18 10:51:54', '2019-09-18 10:51:54', NULL),
(64, '17a41ff0-da13-11e9-8a60-1950f92b0c6b', 1, 30, '2019-09-18 10:51:54', '2019-09-18 10:51:54', NULL),
(65, '17aa3fb0-da13-11e9-8913-c304f75ace90', 1, 31, '2019-09-18 10:51:54', '2019-09-18 10:51:54', NULL),
(66, '17b0b110-da13-11e9-8fa7-f573b6331293', 1, 32, '2019-09-18 10:51:54', '2019-09-18 10:51:54', NULL),
(67, '17b76b90-da13-11e9-bdfd-df5edef85226', 1, 33, '2019-09-18 10:51:54', '2019-09-18 10:51:54', NULL),
(68, '17be3450-da13-11e9-a4a3-61f536655d3d', 1, 34, '2019-09-18 10:51:54', '2019-09-18 10:51:54', NULL),
(69, '17c4dd50-da13-11e9-becf-5d1b644735c3', 1, 35, '2019-09-18 10:51:54', '2019-09-18 10:51:54', NULL),
(70, '17cbbc80-da13-11e9-bb7b-35935d2e714f', 1, 36, '2019-09-18 10:51:54', '2019-09-18 10:51:54', NULL),
(71, '17d1f600-da13-11e9-848a-9371c514aac8', 1, 37, '2019-09-18 10:51:55', '2019-09-18 10:51:55', NULL),
(72, '17d70f40-da13-11e9-8549-43db9850969e', 1, 38, '2019-09-18 10:51:55', '2019-09-18 10:51:55', NULL),
(73, '17dd04a0-da13-11e9-88f9-49fb54e518d6', 1, 39, '2019-09-18 10:51:55', '2019-09-18 10:51:55', NULL),
(74, '17e32990-da13-11e9-a23e-2135be1b059b', 1, 40, '2019-09-18 10:51:55', '2019-09-18 10:51:55', NULL),
(75, '17e8b550-da13-11e9-b1b1-577dfa173840', 1, 41, '2019-09-18 10:51:55', '2019-09-18 10:51:55', NULL),
(76, '17f28000-da13-11e9-bffe-c5a381800ccb', 1, 42, '2019-09-18 10:51:55', '2019-09-18 10:51:55', NULL),
(77, '17f943e0-da13-11e9-9606-afd2fa2d3d90', 1, 43, '2019-09-18 10:51:55', '2019-09-18 10:51:55', NULL),
(78, '17fff8e0-da13-11e9-b210-53b581d8f006', 1, 44, '2019-09-18 10:51:55', '2019-09-18 10:51:55', NULL),
(79, '18051fd0-da13-11e9-9498-fdfee29da6dc', 1, 45, '2019-09-18 10:51:55', '2019-09-18 10:51:55', NULL),
(80, '180c2470-da13-11e9-87e9-c5798a506d31', 1, 46, '2019-09-18 10:51:55', '2019-09-18 10:51:55', NULL),
(81, '1812a210-da13-11e9-9bfe-4f90080a37f8', 1, 47, '2019-09-18 10:51:55', '2019-09-18 10:51:55', NULL),
(82, '181c7630-da13-11e9-8327-c5d0257faedc', 1, 48, '2019-09-18 10:51:55', '2019-09-18 10:51:55', NULL),
(83, '182373e0-da13-11e9-975d-7dfdd72d68a8', 1, 49, '2019-09-18 10:51:55', '2019-09-18 10:51:55', NULL),
(84, '182a33b0-da13-11e9-a87e-0b10751ec609', 1, 50, '2019-09-18 10:51:55', '2019-09-18 10:51:55', NULL),
(85, '182f7380-da13-11e9-8dd4-5dec826e7398', 1, 51, '2019-09-18 10:51:55', '2019-09-18 10:51:55', NULL),
(86, '1835e5f0-da13-11e9-af09-c7e4fa991a17', 1, 52, '2019-09-18 10:51:55', '2019-09-18 10:51:55', NULL),
(87, '183aeb60-da13-11e9-9fa1-f3ffe4cb4c0d', 1, 53, '2019-09-18 10:51:55', '2019-09-18 10:51:55', NULL),
(88, '18401970-da13-11e9-8fe0-01d53cbd095c', 1, 54, '2019-09-18 10:51:55', '2019-09-18 10:51:55', NULL);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `ltm_translations`
--
ALTER TABLE `ltm_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `role_permissions`
--
ALTER TABLE `role_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
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
