-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 08:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `free_dalkiainc_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `job_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `job_title`, `job_description`, `created_at`, `deleted_at`) VALUES
(1, 'Bid Engineer', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti dolores reprehenderit, error veniam soluta odio vero quas, quam quod reiciendis voluptatum? At voluptatum accusamus labore esse, est nam nostrum maxime.', '2024-05-01 06:33:34', '2024-05-01 06:33:34'),
(2, 'Site Engineer', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti dolores reprehenderit, error veniam soluta odio vero quas, quam quod reiciendis voluptatum? At voluptatum accusamus labore esse, est nam nostrum maxime.', '2024-05-01 06:33:34', '2024-05-01 06:33:34');

-- --------------------------------------------------------

--
-- Table structure for table `certification_awards`
--

CREATE TABLE `certification_awards` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certification_awards`
--

INSERT INTO `certification_awards` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'PHILIPPINE GREEN BUILDING COUNCIL MEMBER', 'The Philippine Green Building Council (PHILGBC) is a national non-stock, non-profit organization that promotes sharing of knowledge on green building best practices to the industry to ensure a sustainable environment. Â PHILGBC represents more than 300 corporations and hundreds of individuals working together in the promotion of green buildings in the Philippines. The PHILGBC is an established member of the World Green Building Council (WorldGBC), and a member organization of the International Initiative for the Sustainable Built Environment (iiSBE).', '1.jpg', '2024-05-01 02:04:01', '2024-05-01 06:09:23'),
(2, 'NFRC – ACE CERTIFIED', 'Four employees of Dalkia Incorporated are NFRC – ACE Certified. It is an individual who has attended an Approved Calculation Entity Training Workshop, completed and passed all necessary examinations, and has obtained a Certificate of Approval which qualifies him or her to carry out performance calculations of fenestration products and issue label certificates using the Component Modeling Approach Software Tool (CMAST).', '2.jpg', '2024-05-01 02:04:01', '2024-05-01 06:09:23'),
(3, 'DALKIA | USGBC CERTIFIED MEMBER', 'Dalkia Incorporated is USGBC certified member since July 15, 2015 up to present.', '3.jpg', '2024-05-01 02:04:01', '2024-05-01 06:09:23'),
(4, 'GOLDEN GLOBE AWARDS FOR BUSINESS EXCELLENCE 2017', 'TheÂ Golden Globe Annual Awards for Business ExcellenceÂ award-giving body is celebrating their “10th Year” Anniversary this 2017, and what better way to celebrate but to continue to recognize well deserving brands and personalities from different sectors of business including government service.', '4.jpg', '2024-05-01 02:04:01', '2024-05-01 06:09:23'),
(5, 'QUALITY BOND | DOW CORNING MEMBER', 'We have also been recently awarded as the 5th local contractor in the country to receive the quality bond membership from Dow Corning', '5.jpg', '2024-05-01 02:04:01', '2024-05-01 06:09:23'),
(6, 'DALKIA INC IS NOW ISO CERTIFIED 9001 : 2015', 'Dalkia Inc. has been certified to meet the requirements of ISO 9001:2015 last November 2016. Audited and certified by Jones Unson Solutions, Dalkia Inc is now accredited with Certificate Registration No. 44 100 17 93 0008 under the scope Â“Design and Build of Curtain Walls, Windows & Metal CladdingÂ”', '6.jpg', '2024-05-01 02:04:01', '2024-05-01 06:09:23');

-- --------------------------------------------------------

--
-- Table structure for table `company_history`
--

CREATE TABLE `company_history` (
  `id` int(11) NOT NULL,
  `year` year(4) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_history`
--

INSERT INTO `company_history` (`id`, `year`, `description`, `created_at`, `updated_at`) VALUES
(1, '2022', 'Completed 92 projects since the day of incorporation', '2024-05-01 01:43:47', '2024-05-01 01:43:47'),
(2, '2023', '15 on-going projects ending year 2023', '2024-05-01 01:43:47', '2024-05-01 01:43:47'),
(3, '2024', '8 newly awarded projects since January', '2024-05-01 01:43:47', '2024-05-01 01:43:47');

-- --------------------------------------------------------

--
-- Table structure for table `company_information`
--

CREATE TABLE `company_information` (
  `id` int(11) NOT NULL,
  `company_overview` text DEFAULT NULL,
  `mission` text DEFAULT NULL,
  `vision` text DEFAULT NULL,
  `quality_policy` text DEFAULT NULL,
  `brief_description` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `contact_number` text DEFAULT NULL,
  `email_address` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_information`
--

INSERT INTO `company_information` (`id`, `company_overview`, `mission`, `vision`, `quality_policy`, `brief_description`, `address`, `contact_number`, `email_address`, `created_at`, `updated_at`) VALUES
(1, 'DALKIA Incorporated is a corporation established to cater the demand in the design, fabrication, and installation of Curtain Walls, Windows, Doors and Metal Cladding for all types of buildings.\n\nDriven by passion to work and aspiration, DALKIA Incorporated is aiming high to become a contractor that offers a complete services and a solution provider in the building facade industry.\n\nDALKIA Incorporated is empowered by the Faith, Experience, Determination and Skills of the people and every individual behind the Company together with the unwavering supports and partnership of reliable suppliers to deliver a complete and successful performance in every undertaking.\n\nThat is why and how DALKIA Incorporated makes a difference.', 'Deliver with passion all our undertakings to the fullest expectation of the client while adhering to the safety of all the people and the environment we are working with.', 'Become a leading and highly regarded contracting company in building facade construction.', 'Dalkia Incorporated shall pursue sustainable growth by continuously developing products and providing reliable services of quality, safe, top of the line, and superior range of curtain walls, windows & metal cladding.​\n\nOur endeavors shall focus on:​\n\n1. Developing and sustaining constructive relationship with our clients thru effective customer care all throughout the engagement\n2. Continuously enhancing the competency of our employees through trainings to meet current and future industry demands\n3. Providing quality products by adapting a systematic procurement procedure and partnering with reliable suppliers of quality materials\n4. Maintaining our status as a leader in our field of expertise by using “Top of the Line” equipments and software in our design, engineering and fabrication and by acquiring certification and recognition from international organizations on operational excellence and green building initiatives\n5. Ensuring the improvement of our quality management system by communication our quality policy to all levels of our organization by measuring our products and services against industry standards, and\n6. Meeting customer, regulatory, statutory and the ISO 9001:2015 standard requirements', 'DALKIA Inc. designs and installs building facades, aiming to be a top industry solution with reliable service and delivery.', 'W4 RDC Business Complex Mercedes Ave., Brgy. San Andres, Cainta Rizal', 'Phone : (632) 655-0030/477-1585', 'info@dalkiainc.com', '2024-05-01 01:52:31', '2024-05-01 05:47:46');

-- --------------------------------------------------------

--
-- Table structure for table `company_services`
--

CREATE TABLE `company_services` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_services`
--

INSERT INTO `company_services` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Design Consultancy', 'We plan together for successful projects, providing expert guidance and collaborative design solutions.', '1.png', '2024-05-01 01:55:40', '2024-05-01 01:55:40'),
(2, 'Detailed Design & Engineering', 'From concept to completion, our precise plans and engineering ensure seamless construction.', '2.png', '2024-05-01 01:55:40', '2024-05-01 01:55:40'),
(3, 'Procurement, Assembly & Installation', 'We handle it all - sourcing, assembly, and installation for exceptional construction outcomes.', '3.png', '2024-05-01 01:55:40', '2024-05-01 01:55:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_category_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `floor` varchar(45) DEFAULT NULL,
  `scope_of_work` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL COMMENT 'ONGOING,COMPLETED',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_category_id`, `name`, `description`, `floor`, `scope_of_work`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '10 WEST CAMPUS', NULL, '17', 'Design, Supply & Installation Of Unitized Doors & Windows', '1.jpg', 'ONGOING', '2024-05-01 02:00:59', '2024-05-01 06:21:06'),
(2, 1, 'ACC CORPORATE CENTER', NULL, '24', 'Design, Supply & Installation Of Doors, Windows & Curtainwall', '2.jpg', 'ONGOING', '2024-05-01 02:00:59', '2024-05-01 06:21:06'),
(3, 2, 'AEROPARK BLDG. A & B', NULL, '12 & 11', 'Design, Supply & Installation Of Curtainwall & ACP Cladding', '3.jpg', 'ONGOING', '2024-05-01 02:00:59', '2024-05-01 06:21:06'),
(4, 3, 'ALHI CORPORATE OFFICE', NULL, 'Two 12 Storeys + 6 Level Podium', 'Supply & Installation Of Curtainwall, Windows, Storefronts, Glass Canopy, Railings & Louvers', '4.jpg', 'COMPLETED', '2024-05-01 02:00:59', '2024-05-01 06:21:06'),
(5, 4, 'AVIDA ASTEN TOWER 1 & 2', NULL, '32 Each Building', 'Design, Supply & Installation Of Doors, Windows, Storefronts And Curtain Walls', '5.jpg', 'COMPLETED', '2024-05-01 02:00:59', '2024-05-01 06:21:06'),
(6, 5, 'AVIDA VERTE TOWER 1', NULL, '29', 'Design, Supply & Installation Of Doors, Windows, Storefronts And Curtain Walls', '6.jpg', 'COMPLETED', '2024-05-01 02:00:59', '2024-05-01 06:21:06');

-- --------------------------------------------------------

--
-- Table structure for table `project_category`
--

CREATE TABLE `project_category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_category`
--

INSERT INTO `project_category` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Commercial and Office Buildings', '2024-05-01 06:20:18', '2024-05-01 06:20:18'),
(2, 'Residentials Buildings', '2024-05-01 06:20:18', '2024-05-01 06:20:18'),
(3, 'Hotels and Hospitals', '2024-05-01 06:20:18', '2024-05-01 06:20:18'),
(4, 'Industrial', '2024-05-01 06:20:18', '2024-05-01 06:20:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Arjay Diangzon', 'admin@gmail.com', NULL, '$2y$12$0MPQrQpzAzofUTGCqt8wDOwITvKkLKAGy6eGxJ0i1FTNatpQbWv8u', NULL, '2024-04-30 18:31:54', '2024-04-30 18:31:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certification_awards`
--
ALTER TABLE `certification_awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_history`
--
ALTER TABLE `company_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_information`
--
ALTER TABLE `company_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_services`
--
ALTER TABLE `company_services`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_category`
--
ALTER TABLE `project_category`
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
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `certification_awards`
--
ALTER TABLE `certification_awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company_history`
--
ALTER TABLE `company_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company_information`
--
ALTER TABLE `company_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_services`
--
ALTER TABLE `company_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project_category`
--
ALTER TABLE `project_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
