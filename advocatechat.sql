-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2022 at 06:09 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advocatechat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `advocaterequests`
--

CREATE TABLE `advocaterequests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` int(11) NOT NULL,
  `advocateid` int(11) NOT NULL,
  `subject` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `issue` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advocaterequests`
--

INSERT INTO `advocaterequests` (`id`, `userid`, `advocateid`, `subject`, `issue`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'wdehhwdndmsa d aseehdwqiheeds adsyagdtwewqeygw dsuhdaosd wuewqhhdfsiw yteyrruhwbqwvqw', 'approve', NULL, '2022-08-09 03:20:33'),
(2, 1, 1, 'Property Legal Opinion', 'sdfasoewrw sidfuisdwa dwewqedsbvd sdjassdlasdnsad', 'pending', NULL, '2022-08-09 04:13:01'),
(3, 1, 1, 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'rftewrfsdf', 'request resend', NULL, '2022-08-09 05:09:08');

-- --------------------------------------------------------

--
-- Table structure for table `advocates`
--

CREATE TABLE `advocates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phno` bigint(20) NOT NULL,
  `enrollno` bigint(20) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'wait for approval',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advocates`
--

INSERT INTO `advocates` (`id`, `name`, `email`, `phno`, `enrollno`, `username`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'azna', 'azna.aa@irohub.com', 9865741235, 2596874136, 'azna', 'azna', 'approved', NULL, '2022-08-09 01:20:43'),
(2, 'akhila thankachan', 'akhila@gm.in', 986547123, 25968741345, 'akhila', '123', 'wait for approval', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `caserequests`
--

CREATE TABLE `caserequests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` int(11) NOT NULL,
  `advocateid` int(11) NOT NULL DEFAULT 0,
  `subject` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `issue` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `caserequests`
--

INSERT INTO `caserequests` (`id`, `userid`, `advocateid`, `subject`, `issue`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Property Legal Opinion', 'The legal opinion is meant to favor the buyer\'s interest. These legal opinions can tell the buyer if the buyer is a worthy one or not. A good lawyer can provide the buyer with the best details of the paperwork. A competent lawyer also saves the buyer from future tangles that comes with the property investment.', 'approve', NULL, '2022-08-09 03:14:00'),
(2, 1, 1, 'Court Marriage', 'zhgaIUJSZ ASGDQWPEIQ DWQDQOIEISQWNNBQHGWVQWHS QHAYWDWDNWBDUYhwddiweydyewdn bsw swdhcwe', 'request resend', NULL, '2022-08-09 04:10:59'),
(3, 1, 0, 'Refund of Security Deposit', 'zhgaIUJSZ ASGDQWPEIQ DWQDQOIEISQWNNBQHGWVQWHS QHAYWDWDNWBDUYhwddiweydyewdn bsw swdhcwe', 'pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `casestatuses`
--

CREATE TABLE `casestatuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `advocateid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `caseid` int(11) NOT NULL,
  `requesttype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `casestatuses`
--

INSERT INTO `casestatuses` (`id`, `advocateid`, `userid`, `caseid`, `requesttype`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'law', 'Case Submitted', NULL, '2022-08-09 04:44:59'),
(2, 1, 1, 1, 'advocate', 'advocate admitted', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_28_035631_create_admins_table', 1),
(6, '2022_07_28_035708_create_advocates_table', 1),
(7, '2022_07_28_035727_create_services_table', 1),
(8, '2022_07_28_035750_create_userregistrations_table', 1),
(11, '2022_07_28_052115_create_caserequests_table', 2),
(12, '2022_07_28_052447_create_advocaterequests_table', 2),
(13, '2022_07_18_063441_create_services_table', 3),
(14, '2022_07_25_043936_create_userregistrations_table', 4),
(15, '2022_08_09_084000_create_casestatuses_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_descrption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `type`, `service_descrption`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mutual Divorce', 'MATRIMONIAL', 'Divorce by Mutual Consent or Mutual Divorce is when both husband and wife mutually agree that they cannot live together anymore and that the best solution being Divorce, they would present a Mutual Divorce petition jointly before the honourable court, wit', 'Available', NULL, '2022-07-27 17:30:51'),
(2, 'Court Marriage', 'MATRIMONIAL', 'Court Marriage in India is solemnised under the special marriage act, 1954. The marriage can be solemnised in a court in the presence of a Marriage Officer and three witnesses. Court marriage can be performed between two Indians irrespective of their cast', 'Available', NULL, NULL),
(3, 'Alimony', 'MATRIMONIAL', 'If the alimony is being paid on a monthly basis, the Supreme Court of India has set 25% of the husband\'s net monthly salary as the benchmark amount that should be granted to the wife. There is no such benchmark for one-time settlement, but usually, the am', 'Available', NULL, NULL),
(4, 'Restitution of Conjugal Rights', 'MATRIMONIAL', 'What Is Restitution Of Conjugal Rights? Conjugal Rights Restitution is a legal entitlement that is based on Section 9 of the Hindu Marriage Act. The aggrieved party may apply to the district court for restitution of conjugal rights if the husband or wife ', 'Available', NULL, NULL),
(5, 'Succession Certificate', 'CIVIL/PROPERTY', 'Succession Certificate is granted to the legal heirs of a deceased person who dies without leaving a will. The main aim of a succession certificate is to facilitate the collection of debts on succession and afford protection to the parties paying debts to', 'Available', NULL, NULL),
(6, 'Property Registration', 'CIVIL/PROPERTY', 'The law of registration of documents is contained in the Indian Registration Act, 1908. This law provides for the registration of various documents, to ensure conservation of evidence, prevention of fraud and assurance of title.', 'Available', NULL, NULL),
(7, 'Sale Deed Drafting', 'CIVIL/PROPERTY', 'it is enforced on account of provisions of India\'s Registration Act and is drafted on a Non-Judicial Stamp whose value differs from state to state.', 'Available', NULL, NULL),
(8, 'Property Legal Opinion', 'CIVIL/PROPERTY', 'The legal opinion is meant to favor the buyer\'s interest. These legal opinions can tell the buyer if the buyer is a worthy one or not. A good lawyer can provide the buyer with the best details of the paperwork. A competent lawyer also saves the buyer from', 'Available', NULL, NULL),
(9, 'Cheque Bounce', 'CIVIL/DEBT', 'According to Section 138 of the Act, the dishonour of cheque is a criminal offence and is punishable by imprisonment up to two years or with monetary penalty or with both. If payee decides to proceed legally, then the drawer should be given a chance of re', 'Available', NULL, NULL),
(10, 'Recovery of Dues', 'CIVIL/DEBT', 'Where the matter How to recover pending dues concerns penalties or any other uncertain amount, one cannot file a summary suit. Another option is the Negotiable Instruments Act, 1881, which only deals with the recovery of money arising from instruments suc', 'Available', NULL, NULL),
(11, 'Debt Recovery', 'CIVIL/DEBT', 'Bank and Financial Institutions Bill, 1993 was introduced in the. Parliament. ... Act may be called the Recovery of Debts Due to Banks and Financial.', 'Available', NULL, NULL),
(12, 'Refund of Security Deposit', 'CIVIL/DEBT', 'The security deposit is non-taxable and should be refunded after inspecting the property when the tenant vacates the premises.', 'Available', NULL, NULL),
(13, 'Collective Investment Scheme', 'CIVIL/DEBT', 'Takim stet justo elitr sea eirmod vero ipsum. Sed Stet clita sit duo dolor stet at at. Tempor dolor sit ipsum', 'Available', NULL, NULL),
(14, 'Consumer Complaints', 'OTHERS', 'A suit between parties to a marriage for decree of nullity, restitution of conjugal rights, judicial separation or dissolution of marriage.', 'Available', NULL, NULL),
(15, 'MoU/Agreements/Contracts', 'OTHERS', 'The marriage registration application must be submitted within 45 days from the date of solemnization of the Marriage.', 'Available', NULL, NULL),
(16, 'Immigration/Visa', 'OTHERS', 'Takim stet justo elitr sea eirmod vero ipsum. Sed Stet clita sit duo dolor stet at at. Tempor dolor sit ipsum', 'Available', NULL, NULL),
(17, 'Cyber Law', 'OTHERS', 'Takim stet justo elitr sea eirmod vero ipsum. Sed Stet clita sit duo dolor stet at at. Tempor dolor sit ipsum', 'Available', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userregistrations`
--

CREATE TABLE `userregistrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phno` bigint(20) NOT NULL,
  `adhaarnumber` bigint(20) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'wait for approval',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userregistrations`
--

INSERT INTO `userregistrations` (`id`, `name`, `email`, `phno`, `adhaarnumber`, `username`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'azna', 'azna.aa@irohub.com', 9865741235, 123654789963, 'azna', 'azna', 'wait for approval', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advocaterequests`
--
ALTER TABLE `advocaterequests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advocates`
--
ALTER TABLE `advocates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caserequests`
--
ALTER TABLE `caserequests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `casestatuses`
--
ALTER TABLE `casestatuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistrations`
--
ALTER TABLE `userregistrations`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advocaterequests`
--
ALTER TABLE `advocaterequests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `advocates`
--
ALTER TABLE `advocates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `caserequests`
--
ALTER TABLE `caserequests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `casestatuses`
--
ALTER TABLE `casestatuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `userregistrations`
--
ALTER TABLE `userregistrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
