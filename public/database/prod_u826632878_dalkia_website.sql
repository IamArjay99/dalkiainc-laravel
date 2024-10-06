-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 06, 2024 at 07:22 AM
-- Server version: 10.11.9-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u826632878_dalkia_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `object` varchar(100) NOT NULL,
  `table_name` varchar(100) DEFAULT NULL,
  `table_id` int(11) DEFAULT NULL,
  `description` text NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_reports`
--

CREATE TABLE `applicant_reports` (
  `id` int(11) NOT NULL,
  `career_id` int(11) DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `resume` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant_reports`
--

INSERT INTO `applicant_reports` (`id`, `career_id`, `job_title`, `full_name`, `email_address`, `subject`, `message`, `resume`, `created_at`, `updated_at`) VALUES
(1, 3, 'PROJECT MANAGER', 'John Doe', 'johndoe@gmail.com', 'Applying for Project Manager', 'Applying for a Project Manager position', 'john-doe1718189502.pdf', '2024-06-12 18:51:42', '2024-06-12 18:51:42'),
(2, 3, 'PROJECT MANAGER', 'John Doe', 'johndoe@gmail.com', 'Applying for Project Manager', 'Applying for a Project Manager position', 'john-doe1718247093.pdf', '2024-06-13 10:51:33', '2024-06-13 10:51:33');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `job_description` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `job_title`, `job_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'PRODUCTION SECTION SUPERVISOR', 'As a Production Section Supervisor, you will oversee and coordinate the activities of production workers to ensure efficient production output. Your responsibilities will include scheduling shifts, monitoring production processes, ensuring adherence to quality standards, and implementing measures to improve productivity and safety. You will also be responsible for training and evaluating production team members to optimize their performance.', 1, '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(2, 'HUMAN RESOURCES OFFICER', 'The Human Resources Officer plays a key role in managing various HR functions within the organization. Responsibilities include recruitment and selection, employee relations, performance management, training and development, compensation and benefits administration, and HR policy implementation. You will be tasked with fostering a positive work environment and ensuring compliance with labor laws and company policies.', 1, '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(3, 'PROJECT MANAGER', 'As a Project Manager, you will be responsible for planning, organizing, and managing the execution of construction projects from start to finish. This includes coordinating resources, monitoring progress, managing budgets and timelines, and ensuring quality deliverables. You will serve as the primary point of contact for clients and stakeholders, ensuring effective communication and stakeholder management throughout the project lifecycle.', 1, '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(4, 'PROJECT IN CHARGE / PROJECT ENGINEER', 'The Project In Charge (or Project Engineer) oversees technical aspects of construction projects. Responsibilities include interpreting project drawings and specifications, coordinating with subcontractors and suppliers, managing project schedules and budgets, ensuring compliance with building codes and regulations, and resolving technical issues that arise during construction. You will work closely with the Project Manager to ensure project goals are achieved efficiently.', 1, '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(5, 'FACADE DESIGNER', 'As a Facade Designer, you will be responsible for designing the exterior building envelope (facade) of construction projects. This includes creating detailed facade drawings, selecting materials, evaluating structural requirements, and ensuring designs meet aesthetic and functional requirements. Collaboration with architects, engineers, and clients is crucial to develop innovative and sustainable facade solutions.', 1, '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(6, 'SAFETY OFFICER', 'The Safety Officer is responsible for promoting and maintaining a safe working environment on construction sites. This involves implementing safety programs, conducting regular inspections and audits, identifying potential hazards, ensuring compliance with safety regulations, and providing safety training to workers. You will play a critical role in preventing accidents and promoting a culture of safety among all project stakeholders.', 1, '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(7, 'STRUCTURAL FACADE ENGINEER', 'As a Structural Facade Engineer, your role focuses on the structural integrity and performance of building facades. You will design and analyze facade systems to ensure they meet structural requirements, wind loads, and other environmental factors. Responsibilities include coordinating with architects and engineers, conducting structural calculations, reviewing design drawings, and overseeing facade construction to ensure quality and safety standards are upheld.', 1, '2024-06-12 09:58:33', '2024-06-12 09:58:33');

-- --------------------------------------------------------

--
-- Table structure for table `certification_awards`
--

CREATE TABLE `certification_awards` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '0 - Inactive\n1 - Active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certification_awards`
--

INSERT INTO `certification_awards` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'PHILIPPINE GREEN BUILDING COUNCIL MEMBER1', 'The Philippine Green Building Council (PHILGBC) is a national non-stock, non-profit organization that promotes the sharing of knowledge on green building best practices with the industry to ensure a sustainable environment. PHILGBC represents more than 300 corporations and hundreds of individuals working together in the promotion of green buildings in the Philippines. The PHILGBC is an established member of the World Green Building Council (WorldGBC) and a member organization of the International Initiative for the Sustainable Built Environment (iiSBE).', '1.jpg', 1, '2024-06-12 09:58:33', '2024-07-16 16:39:44'),
(2, 'NFRC – ACE CERTIFIED', 'Four employees of Dalkia Incorporated are NFRC-ACE certified. It is an individual who has attended an approved calculation entity training workshop, completed and passed all necessary examinations, and obtained a Certificate of Approval, which qualifies him or her to carry out performance calculations of fenestration products and issue label certificates using the Component Modeling Approach Software Tool (CMAST).', '2.jpg', 1, '2024-06-12 09:58:33', '2024-07-16 16:40:37'),
(3, 'DALKIA | USGBC CERTIFIED MEMBER', 'Dalkia Incorporated has been a USGBC-certified member since July 15, 2015, up to the present.', '3.jpg', 1, '2024-06-12 09:58:33', '2024-07-16 16:41:33'),
(4, 'GOLDEN GLOBE AWARDS FOR BUSINESS EXCELLENCE 2017', 'The Golden Globe Annual Awards for Business Excellence award-giving body is celebrating their “10th Year” anniversary this year, and what better way to celebrate than to continue to recognize well-deserving brands and personalities from different sectors of business, including government service.', '4.jpg', 1, '2024-06-12 09:58:33', '2024-07-16 16:42:20'),
(6, 'DALKIA INC IS NOW ISO CERTIFIED 9001 : 2015', 'Dalkia Inc. is certified to meet the requirements of ISO 9001:2015 in November 2016. Audited and certified by Jones Unson Solutions, Dalkia Inc. is now accredited with Certificate Registration No. 44 100 17 93 0008 under the scope “Design and Build of Curtain Walls, Windows, and Metal Cladding.”', 'DALKIA INC IS NOW ISO CERTIFIED 9001 : 20151721119087.png', 1, '2024-06-12 09:58:33', '2024-07-16 16:38:07');

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
(1, '2012', '<ul><li>October – Establishment of the company&nbsp;</li><li>November – Acquisition of Fabrication Machines&nbsp;</li><li>December – Testing and Commissioning of Fabrication Plant in Cainta, Rizal</li></ul>', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(2, '2015', '<ul><li>Certified National Fenestration Rating Council-Approved Calculation Entity</li><li>Acquired ISO 9001:2015 certification</li><li>Became a member of US Green Building</li><li>Acquisition of 1 unit of a 3-axis CNC Machining Center&nbsp;</li><li>Acquisition of 1 unit of 50-meter Curtainwall Glazing Conveyor</li></ul>', '2024-06-12 09:58:33', '2024-07-16 15:50:55'),
(3, '2016', '<ul><li>Expand Production and Warehouse area from 4,100 sq.m to 25,600 sq.m</li><li>Acquisition of an additional 2 units of a 4-axis CNC Machining Center&nbsp;</li><li>Acquisition of an additional 2 units of Double Head Aluminum of Cutting Machine.&nbsp;</li><li>Composite Panel Processing Center&nbsp;</li></ul>', '2024-06-12 09:58:33', '2024-07-16 15:30:21'),
(4, '2017', '<ul><li>Became a member of the Philippine Green Building Council</li></ul>', '2024-06-12 09:58:33', '2024-07-16 15:52:19'),
(5, '2020', '<ul><li>Establishment of 15,000 sq.m production and warehouse facilities in Cebu.</li></ul>', '2024-06-12 09:58:33', '2024-07-16 15:52:44'),
(6, '2021', '<ul><li>June 1 – Acquired Patent registration of Window System (P.R # 2-2021-050613)</li></ul>', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(7, '2022', '<ul><li>Completed 92 projects since the day of incorporation</li></ul>', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(9, '2024', '<ul><li>15 newly awarded projects as of January-June.</li></ul>', '2024-06-12 09:58:33', '2024-07-12 10:38:23');

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
  `business_hours` varchar(45) DEFAULT NULL,
  `facebook_link` text DEFAULT NULL,
  `instagram_link` text DEFAULT NULL,
  `twitter_link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_information`
--

INSERT INTO `company_information` (`id`, `company_overview`, `mission`, `vision`, `quality_policy`, `brief_description`, `address`, `contact_number`, `email_address`, `business_hours`, `facebook_link`, `instagram_link`, `twitter_link`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>DALKIA Incorporated</strong> is a corporation established to cater the demand in the design, fabrication, and installation of Curtain Walls, Windows, Doors and Metal Cladding for all types of buildings. Driven by passion to work and aspiration,&nbsp;</p><p>&nbsp;</p><p>DALKIA Incorporated is aiming high to become a contractor that offers a complete services and a solution provider in the building facade industry. DALKIA Incorporated is empowered by the Faith, Experience, Determination and Skills of the people and every individual behind the Company together with the unwavering supports and partnership of reliable suppliers to deliver a complete and successful performance in every undertaking.</p><p>&nbsp;</p><p>That is why and how DALKIA Incorporated makes a difference.&nbsp;</p>', 'Deliver with passion all our undertakings to the fullest expectation of the client while adhering to the safety of all the people and the environment we are working with.', 'Become a leading and highly regarded contracting company in building facade construction.', '<p><strong>Dalkia Incorporated</strong> shall pursue sustainable growth by continuously developing products and providing reliable services of quality, safe, top of the line, and superior range of curtain walls, windows &amp; metal cladding.​&nbsp;<br><br>Our endeavors shall focus on:​&nbsp;</p><ol><li>Developing and sustaining constructive relationship with our clients thru effective customer care all throughout the engagement&nbsp;</li><li>Continuously enhancing the competency of our employees through trainings to meet current and future industry demands&nbsp;</li><li>Providing quality products by adapting a systematic procurement procedure and partnering with reliable suppliers of quality materials&nbsp;</li><li>Maintaining our status as a leader in our field of expertise by using “Top of the Line” equipments and software in our design, engineering and fabrication and by acquiring certification and recognition from international organizations on operational excellence and green building initiatives&nbsp;</li><li>Ensuring the improvement of our quality management system by communication our quality policy to all levels of our organization by measuring our products and services against industry standards, and&nbsp;</li><li>Meeting customer, regulatory, statutory and the ISO 9001:2015 standard requirements</li></ol>', '<p><strong>DALKIA Inc. </strong>designs and installs building facades, aiming to be a top industry solution with reliable service and delivery.</p>', 'Warehouse 4 RDC Business Complex, Mercedes Avenue, Brgy. San Andres, Cainta, Rizal 1900 Philippines', '(632) 655-0030/477-1585', 'info@dalkiainc.com', '8:00 AM - 5:30 PM', 'https://www.facebook.com/dalkiainc', '#', '#', '2024-06-12 09:58:33', '2024-08-16 08:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `company_services`
--

CREATE TABLE `company_services` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_services`
--

INSERT INTO `company_services` (`id`, `title`, `description`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Design Consultancy', 'We plan together for successful projects, providing expert guidance and collaborative design solutions.', 1, 'design.jpg', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(2, 'Detailed Design & Engineering', 'From concept to completion, our precise plans and engineering ensure seamless construction.', 1, 'engineering.png', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(3, 'Procurement, Assembly & Installation', 'We handle it all - sourcing, assembly, and installation for exceptional construction outcomes.', 1, 'installation.jpg', '2024-06-12 09:58:33', '2024-06-13 10:40:04');

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
-- Table structure for table `inquiry_reports`
--

CREATE TABLE `inquiry_reports` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiry_reports`
--

INSERT INTO `inquiry_reports` (`id`, `full_name`, `email_address`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'johndoe@gmail.com', 'Inquire', 'Inquiring about your services', '2024-06-12 18:52:56', '2024-06-12 18:52:56'),
(2, 'John Doe', 'johndoe@gmail.com', 'Inquire', 'Test', '2024-06-13 10:56:11', '2024-06-13 10:56:11'),
(3, 'Amandaarrimism2', 'amandajehage1@gmail.com', 'Hey stud, ready for love?', 'Hey darling, want to hang out? -  https://is.gd/2xVU7z?mot', '2024-06-17 07:49:21', '2024-06-17 07:49:21'),
(4, 'Mike Bradberry', 'mikeappevebes@gmail.com', 'Increase sales for your local business', 'This service is perfect for boosting your local business\' visibility on the map in a specific location. \r\n \r\nWe provide Google Maps listing management, optimization, and promotion services that cover everything needed to rank in the Google 3-Pack. \r\n \r\nMore info: \r\nhttps://www.speed-seo.co/ranking-in-the-maps-means-sales/ \r\n \r\nThanks and Regards \r\nMike Bradberry\r\n \r\nhttps://www.speed-seo.co/whatsapp-us/', '2024-06-23 15:57:28', '2024-06-23 15:57:28'),
(5, 'Mike Lewin', 'mikeappevebes@gmail.com', 'FREE fast ranks for dalkiainc.website', 'Hi there \r\n \r\nJust checked your dalkiainc.website baclink profile, I noticed a moderate percentage of toxic links pointing to your website \r\n \r\nWe will investigate each link for its toxicity and perform a professional clean up for you free of charge. \r\n \r\nStart recovering your ranks today: \r\nhttps://www.badlinkscleanup.com/ \r\n \r\n \r\nRegards \r\nMike Lewin\r\n \r\nDigital SEO Experts \r\nhttps://www.badlinkscleanup.com/whatsapp-us/', '2024-06-26 21:32:38', '2024-06-26 21:32:38'),
(6, 'Mike Dickinson', 'peterappevebes@gmail.com', 'Whitehat SEO for dalkiainc.website', 'Hi there \r\n \r\nI have just checked  dalkiainc.website for  the current search visibility and saw that your website could use an upgrade. \r\n \r\nWe will enhance your ranks organically and safely, using only state of the art AI and whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nMore info: \r\nhttps://www.digital-x-seo.com/monthly-seo/ \r\n \r\nRegards \r\nMike Dickinson\r\n \r\nDigital X SEO Experts \r\nhttps://www.digital-x-seo.com/whatsapp-us/', '2024-07-02 18:27:39', '2024-07-02 18:27:39'),
(7, 'Jeffreymax', 'g.gafarov+9847@seskanogfu.bizml.ru', 'Mjewdjwjdw jwksqkowjfjj kkepwlw3jreklm kwldewkdjr3kdw2o keo2kswlkforejw', 'Ofedkwdkjwkjdkwjdkjw jdwidjwijdwfw fjdkqwasqfoewofjewof ojqwejfqwkdokjwofjewofjewoi dalkiainc.website', '2024-07-12 00:39:37', '2024-07-12 00:39:37'),
(8, 'Jeffreymax', 'yasen.krasen.13+94307@mail.ru', 'Mjewdjwjdw jwksqkowjfjj kkepwlw3jreklm kwldewkdjr3kdw2o keo2kswlkforejw', 'Ofedkwdkjwkjdkwjdkjw jdwidjwijdwfw fjdkqwasqfoewofjewof ojqwejfqwkdokjwofjewofjewoi dalkiainc.website', '2024-07-13 20:16:30', '2024-07-13 20:16:30'),
(9, 'Mike Clifford', 'mikeappevebes@gmail.com', 'Social ads country traffic', 'Hello, \r\n \r\nHey, I\'m Mike from Monkey Digital. We offer a highly popular service that costs only 10$ per 5000 social ads visits. \r\n \r\nMore info:  \r\nhttps://www.monkeydigital.co/get-started/ \r\n \r\nTracking will be sent the same day, the advertisement goes live within a few hours, effective and cheap marketing, try it out, it will be worth every penny. \r\n \r\nRegards \r\nMonkey Digital \r\nhttps://www.monkeydigital.co/whatsapp-us/', '2024-07-20 23:27:25', '2024-07-20 23:27:25'),
(10, 'Mike Foster', 'mikeappevebes@gmail.com', 'Improve your website`s ranks totally free', 'Hi there, \r\n \r\nWhile checking your dalkiainc.website for its ranks, I have noticed that there are some toxic links pointing towards it. \r\n \r\nGrab your free clean up and improve ranks in no time \r\nhttps://www.hilkomseo.net/free-cleanup/ \r\n \r\nIt really works, get a free backlinks clean up with us today \r\n \r\n \r\nRegards \r\nMike Foster\r\n \r\nWhatsapp: https://www.hilkomseo.net/whatapp-us/', '2024-07-26 02:55:08', '2024-07-26 02:55:08'),
(11, 'dramaformama', 'comeinplease@getinthebackofthevan.com', 'Prepared to change your digital fortune?', 'Discover the future of gaming with Musk Empire - an innovative Web3 experience! Build your business empire free of in-app purchases. Enhance your investments to amplify your hourly profits. Play, accumulate, and in time exchange in-game currency for real money. Join the Empire of Musk now and craft your virtual wealth! Link https://tinyurl.com/muskemp', '2024-07-27 23:56:11', '2024-07-27 23:56:11'),
(12, 'Mike Crossman', 'peterappevebes@gmail.com', 'Whitehat SEO for dalkiainc.website', 'Greetings \r\n \r\nI have just took an in depth look on your  dalkiainc.website for the ranking keywords and saw that your website could use an upgrade. \r\n \r\nWe will improve your ranks organically and safely, using only state of the art AI and whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nMore info: \r\nhttps://www.cyber-digitalx.net/monthly-seo/ \r\n \r\nRegards \r\nMike Crossman\r\n \r\nDigital X SEO Experts \r\nhttps://www.cyber-digitalx.net/whatsapp-us/', '2024-07-29 23:43:35', '2024-07-29 23:43:35'),
(13, 'Spring Finance LTD', 'loan@cgcredits.com', 'Loan Finance', 'Is your company looking for short-term or long-term finance or debt consolidation? We offers finance with reasonable interest rates as low as 2.5% on the loan-to-value ratio. Contact us now via email at loan@cgcredits.com or WhatsApp  +44 7404911756 for  more information. \r\n \r\nThank you, \r\nSpring Finance LTD', '2024-08-02 12:18:06', '2024-08-02 12:18:06'),
(14, 'Anthonymut', 'gonzalezruben@me.com', 'Surprise Win an iPhone 16 Pro Max', 'Cheers Win an iPhone 16 Pro Max http://www.spmario.com/patio-tuhou/jump.cgi?https://telegra.ph/iphone-07-06-5?3420', '2024-08-04 01:45:29', '2024-08-04 01:45:29'),
(15, 'Anthonymut', 'diamondprincess279@yahoo.com', 'Immediate Withdrawal Required! Claim Your $77,000 Now!', 'Urgent Cash Alert: $77,000 Ready for Withdrawal—Claim Yours Now! https://script.google.com/macros/s/AKfycbxaV5cLs8jwi29cRk10cer6dS-FtXxUJ-NwBazMe8e2LLAIvnPFOSzwqIVbxY5ICKSjWg/exec', '2024-08-05 13:21:27', '2024-08-05 13:21:27'),
(16, 'Anthonymut', 'gregors910@aussiebroadband.com.au', 'COLLECT YOUR $50,000 PRIZE BEFORE IT\'S TOO LATE', 'URGENT ALERT: CLAIM YOUR $50,000 NOW https://bestdealsokcomcfa94.zapwp.com/q:lossless/retina:false/webp:false/w:1/url:https://telegra.ph/xlerty-06-04?0830', '2024-08-07 02:02:32', '2024-08-07 02:02:32'),
(17, 'Rogeliofoppy', 'nynairboi@icloud.com', 'GRAB YOUR $50,000 PRIZE: CLAIM URGENTLY', 'Urgent Call: Collect Your $50,000 Jackpot Now https://script.google.com/macros/s/AKfycbzPzy4C_0GfEiJZrCn7oBpqnyG0cXAMw8XcaVrzsXQw_lZVzP8NvKvABZECjJiKv-4ljw/exec', '2024-08-07 22:36:06', '2024-08-07 22:36:06'),
(18, 'Love is waiting for you today. - http://xurl.es/p0gwt', 'bdana6036@gmail.com', 'Meet someone special now. - http://xurl.es/p0gwt', 'Discover your perfect partner now. - http://xurl.es/p0gwt', '2024-08-08 11:07:41', '2024-08-08 11:07:41'),
(19, 'JamesHic', 'kbasnett@bigpond.net.au', 'Creating a Balanced Portfolio for $50,000 Weekly Passive Crypto Income', 'Earn $50,000 Per Week on Binance: Passive Crypto Income Guide http://designbezgalstuka.com/go.php?https://telegra.ph/xlerty-06-04?0830', '2024-08-09 09:12:34', '2024-08-09 09:12:34'),
(20, 'Mike Turner', 'mikeappevebes@gmail.com', 'Social ads country traffic', 'Hello, \r\n \r\nHey, I\'m Mike from Monkey Digital. We offer a highly popular service that costs only 10$ per 5000 social ads visits. \r\n \r\nMore info:  \r\nhttps://www.country-targeted-traffic.com/get-started/ \r\n \r\nTracking will be sent the same day, the advertisement goes live within a few hours, effective and cheap marketing, try it out, it will be worth every penny. \r\n \r\nRegards \r\nMonkey Digital \r\nhttps://www.country-targeted-traffic.com/whatsapp-us/', '2024-08-12 16:21:31', '2024-08-12 16:21:31'),
(21, 'JamesHic', 'carlasieling@hotmail.com', 'ACT NOW: COLLECT YOUR $50,000 CASH PRIZE', 'LIMITED OFFER: CLAIM YOUR $50,000 NOW https://script.google.com/macros/s/AKfycbyMzAL_nU2ZtN-93gx37mk7J_Zba_2373cbS528rWbCYwqkL5qUsAnj-2IEpJEPzd90eg/exec', '2024-08-15 05:17:14', '2024-08-15 05:17:14'),
(22, 'Mike MacDonald', 'mikeappevebes@gmail.com', 'Improve your website`s ranks totally free', 'Hi there, \r\n \r\nWhile checking your dalkiainc.website for its ranks, I have noticed that there are some toxic links pointing towards it. \r\n \r\nGrab your free clean up and improve ranks in no time \r\nhttps://www.hilkomseo.net/free-cleanup/ \r\n \r\nIt really works, get a free backlinks clean up with us today \r\n \r\n \r\nRegards \r\nMike MacDonald\r\n \r\nWhatsapp:https://www.hilkomseo.net/whatapp-us/', '2024-08-22 23:08:13', '2024-08-22 23:08:13'),
(23, 'sTEVE c..', 'pat@aneesho.com', 'dESIGN WORK', 'Do you need help with graphic design - brochures, banners, flyers, advertisements, social media posts, logos etc.?\r\n\r\nWe charge a low fixed monthly fee. Let me know if you\'re interested and would like to see our portfolio.', '2024-08-30 18:16:03', '2024-08-30 18:16:03'),
(24, 'Mike Keat', 'peterappevebes@gmail.com', 'Whitehat SEO for dalkiainc.website', 'Good Day \r\n \r\nI have just verified your SEO on  dalkiainc.website for  the current search visibility and saw that your website could use a boost. \r\n \r\nWe will improve your ranks organically and safely, using only state of the art AI and whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nMore info: \r\nhttps://www.cyber-digitalx.net/monthly-seo/ \r\n \r\nRegards \r\nMike Keat\r\n \r\nDigital X SEO Experts \r\nhttps://www.cyber-digitalx.net/whatsapp-us/', '2024-08-31 10:51:47', '2024-08-31 10:51:47'),
(25, 'Kato', 'k.greenham@effipreneur.nl', 'FYI page erro on dalkiainc.website', 'Hi, When I was doing reseach for a client and I noticed a little issue on Dalkiainc website and thought you\'d like to know. \r\n\r\nWe frequently use https://websitecheckhealth.com to ensure our site is running smoothly and find it extremely useful.\r\n\r\nIf you have any questions or need assistance, feel free to reach out!', '2024-09-11 04:42:48', '2024-09-11 04:42:48'),
(26, 'Mike WifKinson', 'mikeappevebes@gmail.com', 'Social ads country traffic', 'Hello, \r\n \r\nHey, I\'m Mike from Monkey Digital. We offer a highly popular service that costs only 10$ per 5000 social ads visits. \r\n \r\nMore info:  \r\nhttps://www.seomonkey.net/country-visits/ \r\n \r\nTracking will be sent the same day, the advertisement goes live within a few hours, effective and cheap marketing, try it out, it will be worth every penny. \r\n \r\nRegards \r\nMonkey Digital \r\nhttps://www.seomonkey.net/whatsapp-us/', '2024-09-12 07:28:21', '2024-09-12 07:28:21'),
(27, 'Tedinift', 'kayleighbpsteamship@gmail.com', 'Hi  i write about your   price for reseller', 'Прывітанне, я хацеў даведацца Ваш прайс.', '2024-09-14 18:13:49', '2024-09-14 18:13:49'),
(28, 'Antonella Kannan', 'bbsizlimeuj@dont-reply.me', 'Without looking ahead It was driving in the money nor', 'Without looking ahead It was driving in the money nor', '2024-09-19 18:32:47', '2024-09-19 18:32:47'),
(29, 'Antonella Kannan', 'bbsizlimeuj@dont-reply.me', 'Without looking ahead It was driving in the money nor', 'Without looking ahead It was driving in the money nor', '2024-09-19 18:32:54', '2024-09-19 18:32:54'),
(30, 'Antonella Kannan', 'bbsizlimeuj@dont-reply.me', 'Without looking ahead It was driving in the money nor', 'Without looking ahead It was driving in the money nor', '2024-09-19 18:33:01', '2024-09-19 18:33:01'),
(31, 'Antonella Kannan', 'bbsizlimeuj@dont-reply.me', 'Without looking ahead It was driving in the money nor', 'Without looking ahead It was driving in the money nor', '2024-09-19 18:33:10', '2024-09-19 18:33:10'),
(32, 'Antonella Kannan', 'bbsizlimeuj@dont-reply.me', 'Without looking ahead It was driving in the money nor', 'Without looking ahead It was driving in the money nor', '2024-09-19 18:33:17', '2024-09-19 18:33:17'),
(33, 'Antonella Kannan', 'bbsizlimeuj@dont-reply.me', 'Without looking ahead It was driving in the money nor', 'Without looking ahead It was driving in the money nor', '2024-09-19 18:33:24', '2024-09-19 18:33:24'),
(34, 'Antonella Kannan', 'bbsizlimeuj@dont-reply.me', 'Without looking ahead It was driving in the money nor', 'Without looking ahead It was driving in the money nor', '2024-09-19 18:33:30', '2024-09-19 18:33:30'),
(35, '<strong><a href=\"https://pr-site.com\">primer-1</a></strong>', 'thomaskingial13@gmail.com', '<strong><a href=\"https://pr-site.com\">primer-6</a></strong>', '<strong><a href=\"https://pr-site.com\">primer-8</a></strong>', '2024-09-26 13:07:58', '2024-09-26 13:07:58');

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
  `client` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `floor` varchar(45) DEFAULT NULL,
  `scope_of_work` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL COMMENT 'ONGOING,COMPLETED',
  `showcase` int(11) DEFAULT NULL,
  `project_type` varchar(45) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_category_id`, `name`, `client`, `description`, `floor`, `scope_of_work`, `image`, `status`, `showcase`, `project_type`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 2, 'Alveo Veranda', 'Makati Development Corporation', NULL, 'N/A', 'Punch Windows, Skylight, Canopy, Glass Railings, Storefronts, Trellis, Frameless Glass Door and Framed Glass Walls', 'Alveo Veranda1720428052.jpg', 'COMPLETED', 0, 'Major', '2017-11-06', '2024-04-20', '2024-06-12 09:58:33', '2024-08-15 16:28:43'),
(2, 5, 'West Aeropark Quad 1 Phase 1', 'Global Gateway Development Corporation', NULL, '18', 'Unitized Curtainwall, ACP Cladding, Glass Railing, Storefront, Glass Canopy, and Structural Steel Works', 'West Aeropark Quad 1 Phase 11718259726.jpg', 'COMPLETED', 1, 'Major', '2018-07-18', '2023-03-01', '2024-06-12 09:58:33', '2024-08-15 16:27:58'),
(3, 5, 'Marian Chapel', 'Filinvest Land Inc.', NULL, 'N/A', 'Roofing System & Skylights', 'Marian Chapel1720428078.jpg', 'COMPLETED', 0, 'Major', '2019-05-06', '2021-04-01', '2024-06-12 09:58:33', '2024-08-15 16:24:33'),
(4, 1, 'Parkway Corporate Center', 'Filinvest Land Inc.', NULL, 'N/A', 'Doors, Windows & Unitized Curtainwall', 'Parkway Corporate Center1720599348.jpg', 'COMPLETED', 1, 'Major', '2017-02-02', '2018-03-20', '2024-06-12 09:58:33', '2024-07-10 16:15:48'),
(5, 1, 'Estancia Mall Expansion', 'Ortigas & Company Inc.', NULL, 'N/A', 'Doors, Windows, Curtainwall and ACP Cladding', 'Estancia Mall Expansion.jpg', 'COMPLETED', 0, 'Major', '2019-05-06', '2020-02-01', '2024-06-12 09:58:33', '2024-07-11 09:00:37'),
(6, 1, 'Alhi Corporate Office', 'Posh Properties Development Inc.', NULL, 'N/A', 'Unitized Curtainwall, ACP Cladding, Storefront, Louvers', 'Alhi Corporate Office.jpg', 'COMPLETED', 0, 'Major', '2019-01-21', '2020-07-01', '2024-06-12 09:58:33', '2024-07-10 15:58:31'),
(7, 1, 'One Le Grand Tower', 'Megaworld Corporation', NULL, 'N/A', 'Unitized Curtainwall, Ribbon, Windows, Storefront, Louvers', 'One Le Grand Tower1720598793.jpg', 'COMPLETED', 1, 'Major', '2019-01-15', '2020-04-20', '2024-06-12 09:58:33', '2024-07-10 16:06:33'),
(8, 3, 'Kingsford Hotel', 'Megaworld Corporation', NULL, 'N/A', 'Doors and Windows, Storefronts and Curtainwall, ACP Canopy', 'Kingsford Hotel.jpg', 'COMPLETED', 0, 'Major', '2020-01-29', '2020-03-20', '2024-06-12 09:58:33', '2024-07-10 16:11:50'),
(9, 5, 'Axis Towers (1,2,3 & 4)', 'Filinvest Land Inc.', NULL, 'N/A', 'Untitized Curtainwall, Storefront, Railing, Glass Canopy, and ACP Cladding', 'Axis Towers (1,2,3 & 4)1718259793.png', 'COMPLETED', 1, 'Major', '2019-08-01', '2019-08-01', '2024-06-12 09:58:33', '2024-06-13 14:23:13'),
(10, 2, 'Avida Asten Towers (1,2 & 3)', 'Avida Land Corp.', NULL, 'N/A', 'Doors and Windows', 'Avida Asten Towers (1,2 & 3).jpg', 'COMPLETED', 0, 'Major', '2015-12-03', '2019-12-01', '2024-06-12 09:58:33', '2024-08-15 16:31:08'),
(11, 2, 'Solstice Towers (1 & 2)', 'Alveo Land Corp.', NULL, 'N/A', 'Doors and Windows, Storefronts and Curtainwalls', 'Solstice Towers (1 & 2).jpg', 'COMPLETED', 0, 'Major', '2016-09-07', '2019-07-20', '2024-06-12 09:58:33', '2024-08-15 16:30:16'),
(12, 1, 'Platinum Tower', 'Skyrise Development Corporation', NULL, 'N/A', 'Unitized Curtainwall, ACP Cladding & Storefronts, Doors and Windows', 'Platinum Tower.jpg', 'COMPLETED', 0, 'Major', '2019-10-07', '2019-10-07', '2024-06-12 09:58:33', '2024-07-11 09:42:12'),
(13, 3, 'Seda BGC', 'Makati Development Corporation', 'N/A', 'N/A', 'Doors and Windows, Storefronts and Canopies, ACP Cladding', 'Seda BGC.jpg', 'COMPLETED', 0, 'Major', '2019-09-01', '2019-09-01', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(14, 1, 'BGC Corporate Centere 2 (JABBA)', 'Ayala Land Inc.', NULL, 'N/A', 'Unitized Curtainwall and ACP Wall Cladding', 'BGC Corporate Centere 2 (JABBA)1718259840.jpg', 'COMPLETED', 1, 'Major', '2019-07-05', '2020-05-01', '2024-06-12 09:58:33', '2024-08-15 16:25:55'),
(15, 1, 'Circuit Lane Enhancement Phase 1', 'Makati Development Corporation', NULL, 'N/A', 'Louvers & Glass Canopies', 'Circuit Lane Enhancement Phase 1.jpg', 'COMPLETED', 0, 'Major', '2019-09-01', '2019-09-01', '2024-06-12 09:58:33', '2024-06-13 14:27:26'),
(16, 1, 'Udenna Tower', 'Udenna Corporation', 'N/A', 'N/A', 'Unitized Curtainwall, Shopfronts, ACP & Cladding', 'Udenna Tower.jpg', 'COMPLETED', 0, 'Major', '2019-06-01', '2019-06-01', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(17, 2, 'Avila Tower Circulo Verte', 'Ortigas & Company Inc.', NULL, 'N/A', 'Doors, Windows, Storefronts & Louvers', 'Avila Tower Circulo Verte.jpg', 'COMPLETED', 0, 'Major', '2019-06-01', '2019-06-01', '2024-06-12 09:58:33', '2024-06-13 14:27:47'),
(18, 1, 'Skyrise 4B Annex', 'Skyrise Development Corporation', NULL, 'N/A', 'Doors, Windows, Storefronts & Curtainwall', 'Skyrise 4B Annex.jpg', 'COMPLETED', 0, 'Major', '2019-06-01', '2019-06-01', '2024-06-12 09:58:33', '2024-06-12 18:41:41'),
(19, 2, 'Escala Salcedo Tower', 'Makati Development Corporation', 'N/A', 'N/A', '36 Storey Residential Bdlg. (Doors, Windows, Storefronts & Curtainwall)', 'default.png', 'COMPLETED', 0, 'Major', '2019-01-01', '2019-01-01', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(20, 2, 'Beacon Tower 1', 'Geostate Development Corporation', 'N/A', 'N/A', 'Unitized Doors and Windows', 'Beacon Tower 1.jpg', 'COMPLETED', 0, 'Major', '2019-05-01', '2019-05-01', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(21, 2, 'Kroma Tower', 'Makati Development Corporation', 'N/A', 'N/A', 'Doors, Window, Storefronts & Curtainwall', 'Kroma Tower.jpg', 'COMPLETED', 0, 'Major', '2019-06-01', '2019-06-01', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(22, 2, '100 West', 'Filinvest Land Inc.', NULL, 'N/A', 'Curtainwalls & Windows', '100 West.jpg', 'COMPLETED', 0, 'Major', '2018-12-01', '2018-12-01', '2024-06-12 09:58:33', '2024-06-13 10:48:10'),
(23, 2, 'Lerato Tower 3', 'Makati Development Corporation', 'N/A', 'N/A', 'Unitized Doors and Windows', 'Lerato Tower 3.jpg', 'COMPLETED', 0, 'Major', '2018-10-01', '2018-10-01', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(24, 1, 'Robinsons Cyberscapes Gamma', 'Robinsons Land Corporation', 'N/A', 'N/A', '32 Storey Office Bldg. (Doors, Windows, Storefronts & Curtainwall)', 'Robinsons Cyberscapes Gamma.jpg', 'COMPLETED', 0, 'Major', '2019-01-01', '2019-01-01', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(25, 1, 'Skytech IT Park', 'Mabalacat Realty Development Corporation', 'N/A', 'N/A', '6 Storey Office Bldg. (Shopfronts & Unitized Curtainwall)', 'Skytech IT Park.jpg', 'COMPLETED', 0, 'Major', '2018-03-01', '2018-03-01', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(26, 2, 'Sandstone Portico Tower 1', 'Makati Development Corporation', 'N/A', 'N/A', 'Doors, Windows, Storefront & Curtainwall', 'Sandstone Portico Tower 1.jpg', 'COMPLETED', 0, 'Major', '2018-04-01', '2018-04-01', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(27, 4, 'B/E Aerospace', 'Kajima Philippines', 'N/A', 'N/A', 'Doors, Windows, Curtainwall & ACP Cladding', 'BE Aerospace.jpg', 'COMPLETED', 0, 'Major', '2018-03-01', '2018-03-01', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(28, 1, '10 West Campus', 'Megawide Construction Corporation', NULL, 'N/A', 'Unitized Doors and Windows', '10 West Campus1718259900.jpg', 'COMPLETED', 1, 'Major', '2018-03-01', '2018-03-01', '2024-06-12 09:58:33', '2024-06-13 14:25:00'),
(29, 1, 'Circuit BPO 1', 'Makati Development Corporation', 'N/A', 'N/A', 'Doors and Windows', 'Circuit BPO 1.jpg', 'COMPLETED', 0, 'Major', '2017-11-01', '2017-11-01', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(30, 2, 'Avida Verte Tower 1', 'Makati Development Corporation', 'N/A', 'N/A', 'Doors, Windows, & Storefronts', 'Avida Verte Tower 1.jpg', 'COMPLETED', 0, 'Major', '2017-11-01', '2017-11-01', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(31, 4, 'JTI Project Flex', 'Sta. Clara Development Corporation', 'N/A', 'N/A', 'Triple Glazed Thermal Breaked Unitized Windows', 'JTI Project Flex.jpg', 'COMPLETED', 0, 'Major', '2017-10-01', '2017-10-01', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(32, 1, 'IBP Tower', 'Ortigas & Company Inc.', 'N/A', 'N/A', 'Unitized Windows, & Shopfronts', 'IBP Tower.jpg', 'COMPLETED', 0, 'Major', '2017-01-01', '2017-01-01', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(33, 2, 'The Signature', 'Filinvest Land Inc.', NULL, 'N/A', 'Unitized Doors and Windows', 'The Signature.jpg', 'COMPLETED', 0, 'Major', '2017-01-01', '2017-01-01', '2024-06-12 09:58:33', '2024-06-13 14:28:21'),
(34, 1, 'Southpark Arvo Mall', 'Makati Development Corporation', 'N/A', 'N/A', 'Doors, Windows, Storefronts & Facial Mirrors', 'Southpark Arvo Mall.jpg', 'COMPLETED', 0, 'Major', '2015-09-01', '2015-09-01', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(35, 1, 'Le Grand BPO Towers (A, B & C)', 'Megaworld Corporation', 'N/A', 'N/A', 'Doors, Windows, Storefronts & Curtainwall', 'Le Grand BPO Towers (A, B & C).jpg', 'COMPLETED', 0, 'Major', '2016-04-01', '2016-04-01', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(36, 1, 'Le Grand BPO Towers (D, E & F)', 'Megaworld Corporation', 'N/A', 'N/A', 'Doors, Windows, Storefronts & Curtainwall', 'Le Grand BPO Towers (D, E & F).jpg', 'COMPLETED', 0, 'Major', '2016-04-01', '2016-04-01', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(37, 2, 'Vinia Residences', 'Filinvest Land Inc.', 'N/A', 'N/A', 'Shopfronts, Doors, Windows & Curtainwall', 'Vinia Residences.jpg', 'COMPLETED', 0, 'Major', '2016-04-01', '2016-04-01', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(38, 5, 'HQ-14 Gomez', 'N/A', 'N/A', 'N/A', 'N/A', 'default.png', 'COMPLETED', 0, 'Major', '2020-01-01', '2020-01-01', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(39, 1, 'Loreta Building 2', 'Loreta Realty & Development', 'N/A', 'N/A', 'Unitized Curtainwall, Shopfronts & Railings', 'Loreta Building 2.jpg', 'COMPLETED', 0, 'Major', '2015-04-01', '2015-04-01', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(40, 4, 'INC Museum', 'New Era University', 'N/A', 'N/A', 'Doors, Windows & Stick Type Curtainwall', 'INC Museum.jpg', 'COMPLETED', 0, 'Major', '2014-07-01', '2014-07-01', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(41, 3, 'The Medical City', 'SC Megaworld', 'N/A', 'N/A', 'Unitized Curtainwall, Windows, Canopy & Louvers', 'The Medical City.jpg', 'COMPLETED', 0, 'Major', '2014-06-01', '2014-06-01', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(42, 5, 'Entertainment City Link Bridge', 'Travellers International Hotel Group, Inc.', NULL, 'N/A', 'Aluminum and Glazing Works', 'Entertainment City Link Bridge1720421388.png', 'ONGOING', 0, 'Major', '2024-08-10', '2024-10-23', '2024-06-12 09:58:33', '2024-08-15 14:11:47'),
(43, 2, 'Astela Tower 1 and Podium', 'Alveo Land Corp.', NULL, 'N/A', 'Aluminum and Glazing Works', 'Astela Tower 1 and Podium1720421720.png', 'ONGOING', 0, 'Major', '2024-10-26', '2027-03-13', '2024-06-12 09:58:33', '2024-08-15 11:35:10'),
(44, 2, 'Cerca Nuveo Tower 1', 'Alveo Land Corp', NULL, 'N/A', 'Glass Doors, Storefronts, and Glass Windows', 'Cerca Nuveo Tower 11720426699.png', 'ONGOING', 0, 'Major', '2024-02-14', '2025-03-31', '2024-06-12 09:58:33', '2024-08-15 14:13:02'),
(45, 3, '80-Key 3 Star Boracay Hotel', 'Golden TW Realty and Development Corporation', NULL, 'N/A', 'Aluminum and Glazing Works', '80-Key 3 Star Boracay Hotel1720426757.png', 'ONGOING', 0, 'Major', '2023-10-03', '2026-10-01', '2024-06-12 09:58:33', '2024-08-15 16:19:54'),
(46, 1, 'Glorietta Reinvention', 'Ayala Land Corporation', NULL, 'N/A', 'Various Façade Works', 'Glorietta Reinvention1720426815.png', 'ONGOING', 0, 'Major', '2023-09-18', '2025-01-20', '2024-06-12 09:58:33', '2024-07-10 14:51:20'),
(47, 1, 'Alo Technohubs-Evo City BPO Towers', 'Ayala Land Inc.', NULL, 'N/A', 'Glass Doors and Windows', 'Alo Technohubs-Evo City BPO Towers1720427159.png', 'ONGOING', 0, 'Major', '2023-06-01', '2025-03-20', '2024-06-12 09:58:33', '2024-08-15 16:20:55'),
(48, 1, 'Alo Technohubs-Nuvali Towers', 'Ayala Land Inc.', NULL, 'N/A', 'Complete Glass and Aluminum Works', 'Alo Technohubs-Nuvali Towers1720427176.png', 'COMPLETED', 0, 'Major', '2023-06-09', '2024-07-20', '2024-06-12 09:58:33', '2024-09-11 09:36:38'),
(49, 1, 'Alo Technohubs-Atria Towers', 'Ayala Land Inc.', NULL, 'N/A', 'Unitized Window, Storefronts, Slats', 'Alo Technohubs-Atria Towers1720427206.png', 'ONGOING', 0, 'Major', '2023-06-01', '2024-11-20', '2024-06-12 09:58:33', '2024-07-10 14:56:36'),
(50, 2, 'Solinea Tower 5', 'Alveo Land Corp.', NULL, 'N/A', 'Aluminum and Glazing Works', 'Solinea Phase 3 Tower 51720427100.png', 'ONGOING', 0, 'Major', '2023-08-05', '2025-05-03', '2024-06-12 09:58:33', '2024-08-15 16:19:24'),
(51, 2, 'The Gentry', 'Alveo Land Corp.', NULL, 'N/A', 'Various Façade Works', 'The Gentry1720427272.png', 'ONGOING', 0, 'Major', '2023-11-01', '2024-08-20', '2024-06-12 09:58:33', '2024-07-10 14:44:39'),
(52, 1, 'Arca South Pie BPO Towers', 'Ayala Land Corporation', NULL, 'N/A', 'Curtainwall and ACP Cladding', 'Arca South Pie BPO Towers1720427251.png', 'ONGOING', 0, 'Major', '2024-03-20', '2025-03-20', '2024-06-12 09:58:33', '2024-08-15 14:12:34'),
(53, 5, 'Parklinks North Tower', 'Ayala Land Inc. & Alveo Land Corp.', NULL, 'N/A', 'Glass and Aluminum Works', 'Parklinks North Tower1720427294.png', 'ONGOING', 0, 'Major', '2022-12-14', '2024-11-20', '2024-06-12 09:58:33', '2024-08-15 16:20:18'),
(54, 2, 'Mergent Residences', 'Alveo Land Corp.', NULL, 'N/A', 'Unitized Windows, Storefronts and Slats', 'Mergent Residences1720427316.png', 'ONGOING', 0, 'Major', '2022-12-27', '2025-01-20', '2024-06-12 09:58:33', '2024-08-15 16:21:19'),
(55, 2, 'Travertine Portico', 'Ayala Land Inc.', NULL, 'N/A', 'Unitized Windows, Door and Storefronts', 'Travertine Portico1720427370.png', 'COMPLETED', 0, 'Major', '2022-12-01', '2022-12-01', '2024-06-12 09:58:33', '2024-09-11 09:52:27'),
(56, 2, 'Parkford Suites Legaspi', 'Alveo Land Corp.', NULL, 'N/A', 'Unitized Curtainwall, ACP Cladding, Glass Railing, Storefront, Glass Canopy', 'Parkford Suites Legaspi1720427945.png', 'ONGOING', 0, 'Major', '2022-02-22', '2024-09-20', '2024-06-12 09:58:33', '2024-08-15 16:22:01'),
(57, 5, 'Project Luna Data Centre', 'A Flow Data Centres by Ayala Land Logistics Holdings', NULL, 'N/A', 'Facade Work Package', 'Project Luna Data Centre1720488986.png', 'ONGOING', 0, 'Major', '2024-01-25', '2024-12-31', '2024-07-09 09:36:26', '2024-08-15 14:13:16'),
(58, 1, 'Greenbelt Reinvention', 'Ayala Corporation', NULL, 'N/A', 'Aluminum and Glazing Works', 'Greenbelt Reinvention1720515728.jpg', 'ONGOING', 0, 'Major', '2024-08-29', '2024-12-17', '2024-07-09 10:45:57', '2024-08-15 11:53:55'),
(59, 2, 'Callisto Tower 1 and 2', 'Makati Development Corporation', NULL, '38', 'Glass Windows', 'Callisto Tower 1 and 21720518345.jpg', 'COMPLETED', 0, 'Major', '2019-09-23', '2024-06-28', '2024-07-09 17:45:45', '2024-08-15 16:25:15'),
(60, 1, 'One Filinvest', 'Filinvest Development Corporation', NULL, 'N/A', 'Supply, Installation and Delivery of Simulated Stone and Metallic Finish ACP', 'One Filinvest1720573334.png', 'COMPLETED', 0, 'Major', '2019-09-06', '2024-06-10', '2024-07-10 09:02:14', '2024-07-10 09:02:14'),
(61, 1, '387 Gil Puyat', 'Filinvest Development Corporation', NULL, '18', 'Glass and Aluminum Facade', 'default.png', 'COMPLETED', 0, 'Major', '2021-11-22', '2022-03-07', '2024-07-10 10:32:56', '2024-09-11 17:28:49'),
(62, 1, 'Southern Star Watch Tower', 'Ecozone Properties Inc.', NULL, '6', 'Unitized Curtainwall, Glass Canopy and Framings, Glass Doors/Windows and Aluminum (LEED Certified Project)', 'Southern Star Watch Tower1726046964.jpg', 'COMPLETED', 0, 'Major', '2022-04-24', '2024-06-10', '2024-07-10 11:02:45', '2024-09-11 17:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `project_category`
--

CREATE TABLE `project_category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_category`
--

INSERT INTO `project_category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Commercial and Office Buildings', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(2, 'Residential Buildings', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(3, 'Hotels and Hospitals', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(4, 'Industrial', '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(5, 'Others', '2024-06-12 09:58:33', '2024-06-12 09:58:33');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(11) NOT NULL,
  `key` varchar(100) DEFAULT NULL,
  `value` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `key`, `value`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'WEBSITE_MAINTENANCE', '0', '0 - No, 1 - Yes', 1, '2024-06-12 09:58:33', '2024-06-12 09:58:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(45) NOT NULL DEFAULT 'admin',
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '0 - Inactive\n1 - Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'System Administrator', 'admin@dalkiainc.com', '2024-06-12 09:58:33', 'System Administrator', '$2y$12$lG.uaMBvE/L9B0OZ/Lpqsuq4oJ/L/Px4eRxpIWVAm6R5NZy7FAmKS', NULL, 1, '2024-06-12 09:58:33', '2024-06-12 09:58:33'),
(2, 'Super Administrator', 'superadmin@dalkiainc.com', '2024-06-12 09:58:33', 'Super Administrator', '$2y$12$MCEPgLb3TqlADy3EO1GJK.s8VA.k6Iuilj1Pe/Fhac6644mGXXxka', NULL, 1, '2024-06-12 09:58:33', '2024-06-12 09:58:33');

-- --------------------------------------------------------

--
-- Table structure for table `website_users`
--

CREATE TABLE `website_users` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `ip_address` varchar(100) DEFAULT NULL,
  `browser` varchar(100) DEFAULT NULL,
  `page_views` bigint(20) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_users`
--

INSERT INTO `website_users` (`id`, `date`, `ip_address`, `browser`, `page_views`, `created_at`, `updated_at`) VALUES
(1, '2024-06-12', '127.0.0.1', 'Google Chrome', 37, '2024-06-12 09:58:36', '2024-06-12 10:34:20'),
(2, '2024-06-12', '112.204.124.102', 'Google Chrome', 16, '2024-06-12 10:36:31', '2024-06-12 10:53:01'),
(3, '2024-06-12', '112.204.124.102', 'Google Chrome', 16, '2024-06-12 10:36:31', '2024-06-12 10:53:01'),
(4, '2024-06-12', '2604:2dc0:100:55dd::', 'Google Chrome', 2, '2024-06-12 10:44:25', '2024-06-12 10:44:25'),
(5, '2024-06-12', '110.93.82.143', 'Unknown', 8, '2024-06-12 10:46:28', '2024-06-12 10:47:34'),
(6, '2024-06-12', '112.204.124.102', 'Apple Safari', 7, '2024-06-12 12:16:11', '2024-06-12 12:21:12'),
(7, '2024-06-12', '1.37.67.134', 'Apple Safari', 1, '2024-06-12 12:16:13', '2024-06-12 12:16:13'),
(8, '2024-06-12', '52.167.144.234', 'Google Chrome', 1, '2024-06-12 13:11:52', '2024-06-12 13:11:52'),
(9, '2024-06-12', '84.33.102.16', 'Google Chrome', 1, '2024-06-12 13:24:29', '2024-06-12 13:24:29'),
(10, '2024-06-12', '84.16.45.93', 'Mozilla Firefox', 1, '2024-06-12 13:24:32', '2024-06-12 13:24:32'),
(11, '2024-06-12', '65.154.226.171', 'Google Chrome', 1, '2024-06-12 13:26:21', '2024-06-12 13:26:21'),
(12, '2024-06-12', '167.99.41.47', 'Google Chrome', 1, '2024-06-12 13:29:18', '2024-06-12 13:29:18'),
(13, '2024-06-12', '170.106.159.160', 'Apple Safari', 1, '2024-06-12 13:43:21', '2024-06-12 13:43:21'),
(14, '2024-06-13', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-06-12 16:00:02', '2024-06-12 16:00:02'),
(15, '2024-06-13', '2604:2dc0:100:4f07::', 'Google Chrome', 13, '2024-06-12 16:05:20', '2024-06-12 16:51:13'),
(16, '2024-06-13', '43.134.89.111', 'Apple Safari', 1, '2024-06-12 16:09:02', '2024-06-12 16:09:02'),
(17, '2024-06-13', '2604:2dc0:100:55dd::', 'Google Chrome', 2, '2024-06-12 16:20:57', '2024-06-12 16:20:58'),
(18, '2024-06-13', '135.148.195.5', 'Google Chrome', 1, '2024-06-12 22:13:07', '2024-06-12 22:13:07'),
(19, '2024-06-13', '192.36.109.98', 'Apple Safari', 1, '2024-06-12 22:17:06', '2024-06-12 22:17:06'),
(20, '2024-06-13', '112.204.124.102', 'Apple Safari', 6, '2024-06-12 22:50:39', '2024-06-12 22:54:42'),
(21, '2024-06-13', '35.84.182.190', 'Unknown', 1, '2024-06-12 23:52:00', '2024-06-12 23:52:00'),
(22, '2024-06-13', '66.249.79.107', 'Google Chrome', 1, '2024-06-12 23:58:08', '2024-06-12 23:58:08'),
(23, '2024-06-13', '2a12:5940:5433::2', 'Google Chrome', 1, '2024-06-13 00:59:47', '2024-06-13 00:59:47'),
(24, '2024-06-13', '112.204.124.102', 'Google Chrome', 39, '2024-06-13 01:04:46', '2024-06-13 05:38:07'),
(25, '2024-06-13', '167.71.131.170', 'Google Chrome', 1, '2024-06-13 02:42:18', '2024-06-13 02:42:18'),
(26, '2024-06-13', '122.3.117.64', 'Google Chrome', 9, '2024-06-13 03:03:53', '2024-06-13 07:27:29'),
(27, '2024-06-13', '175.176.16.65', 'Apple Safari', 1, '2024-06-13 03:04:52', '2024-06-13 03:04:52'),
(28, '2024-06-13', '43.130.47.136', 'Apple Safari', 1, '2024-06-13 03:09:10', '2024-06-13 03:09:10'),
(29, '2024-06-13', '52.167.144.204', 'Google Chrome', 1, '2024-06-13 04:51:56', '2024-06-13 04:51:56'),
(30, '2024-06-13', '46.17.174.172', 'Mozilla Firefox', 1, '2024-06-13 06:58:38', '2024-06-13 06:58:38'),
(31, '2024-06-13', '128.90.170.32', 'Mozilla Firefox', 1, '2024-06-13 12:21:01', '2024-06-13 12:21:01'),
(32, '2024-06-13', '51.222.253.19', 'Unknown', 1, '2024-06-13 12:35:06', '2024-06-13 12:35:06'),
(33, '2024-06-13', '43.159.128.172', 'Apple Safari', 1, '2024-06-13 14:25:36', '2024-06-13 14:25:36'),
(34, '2024-06-13', '49.51.206.130', 'Apple Safari', 1, '2024-06-13 15:54:14', '2024-06-13 15:54:14'),
(35, '2024-06-14', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-06-13 16:00:02', '2024-06-13 16:00:02'),
(36, '2024-06-14', '46.17.174.192', 'Google Chrome', 1, '2024-06-13 18:11:34', '2024-06-13 18:11:34'),
(37, '2024-06-14', '216.244.66.245', 'Unknown', 1, '2024-06-13 22:05:20', '2024-06-13 22:05:20'),
(38, '2024-06-14', '208.80.194.42', 'Internet Explorer', 1, '2024-06-13 22:52:44', '2024-06-13 22:52:44'),
(39, '2024-06-14', '112.204.124.102', 'Apple Safari', 1, '2024-06-14 00:42:29', '2024-06-14 00:42:29'),
(40, '2024-06-14', '198.235.24.29', 'Unknown', 1, '2024-06-14 00:53:36', '2024-06-14 00:53:36'),
(41, '2024-06-14', '2a12:5940:5433::2', 'Apple Safari', 1, '2024-06-14 00:53:48', '2024-06-14 00:53:48'),
(42, '2024-06-14', '43.133.77.230', 'Apple Safari', 1, '2024-06-14 02:40:42', '2024-06-14 02:40:42'),
(43, '2024-06-14', '138.246.253.15', 'Unknown', 1, '2024-06-14 08:06:58', '2024-06-14 08:06:58'),
(44, '2024-06-14', '54.36.149.76', 'Unknown', 1, '2024-06-14 09:49:54', '2024-06-14 09:49:54'),
(45, '2024-06-14', '40.77.167.3', 'Google Chrome', 1, '2024-06-14 10:54:19', '2024-06-14 10:54:19'),
(46, '2024-06-14', '35.91.35.152', 'Google Chrome', 1, '2024-06-14 11:22:50', '2024-06-14 11:22:50'),
(47, '2024-06-14', '35.94.68.243', 'Google Chrome', 1, '2024-06-14 11:22:53', '2024-06-14 11:22:53'),
(48, '2024-06-14', '112.204.124.102', 'Google Chrome', 7, '2024-06-14 13:40:10', '2024-06-14 13:40:58'),
(49, '2024-06-14', '2a06:4880:b000::cd', 'Unknown', 1, '2024-06-14 14:43:17', '2024-06-14 14:43:17'),
(50, '2024-06-14', '54.36.148.99', 'Unknown', 1, '2024-06-14 15:10:07', '2024-06-14 15:10:07'),
(51, '2024-06-14', '45.128.133.231', 'Google Chrome', 1, '2024-06-14 15:19:38', '2024-06-14 15:19:38'),
(52, '2024-06-15', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-06-14 16:00:02', '2024-06-14 16:00:02'),
(53, '2024-06-15', '170.106.171.77', 'Apple Safari', 1, '2024-06-14 16:00:50', '2024-06-14 16:00:50'),
(54, '2024-06-15', '35.171.144.152', 'Google Chrome', 1, '2024-06-14 16:56:40', '2024-06-14 16:56:40'),
(55, '2024-06-15', '51.222.253.2', 'Unknown', 1, '2024-06-14 17:16:22', '2024-06-14 17:16:22'),
(56, '2024-06-15', '54.36.148.32', 'Unknown', 1, '2024-06-14 18:13:08', '2024-06-14 18:13:08'),
(57, '2024-06-15', '54.36.148.228', 'Unknown', 1, '2024-06-14 19:08:37', '2024-06-14 19:08:37'),
(58, '2024-06-15', '43.131.48.214', 'Apple Safari', 1, '2024-06-14 19:28:54', '2024-06-14 19:28:54'),
(59, '2024-06-15', '54.36.149.70', 'Unknown', 1, '2024-06-14 20:01:54', '2024-06-14 20:01:54'),
(60, '2024-06-15', '54.36.148.124', 'Unknown', 1, '2024-06-14 20:55:22', '2024-06-14 20:55:22'),
(61, '2024-06-15', '2a06:4880:9000::9c', 'Unknown', 1, '2024-06-14 21:22:38', '2024-06-14 21:22:38'),
(62, '2024-06-15', '54.36.148.88', 'Unknown', 1, '2024-06-14 21:52:48', '2024-06-14 21:52:48'),
(63, '2024-06-15', '54.36.148.38', 'Unknown', 1, '2024-06-14 22:39:14', '2024-06-14 22:39:14'),
(64, '2024-06-15', '2a12:5940:5433::2', 'Google Chrome', 1, '2024-06-14 22:56:30', '2024-06-14 22:56:30'),
(65, '2024-06-15', '54.36.148.226', 'Unknown', 1, '2024-06-14 23:29:39', '2024-06-14 23:29:39'),
(66, '2024-06-15', '54.36.149.92', 'Unknown', 1, '2024-06-15 00:31:36', '2024-06-15 00:31:36'),
(67, '2024-06-15', '43.131.248.209', 'Apple Safari', 1, '2024-06-15 01:14:27', '2024-06-15 01:14:27'),
(68, '2024-06-15', '51.222.253.18', 'Unknown', 1, '2024-06-15 01:37:06', '2024-06-15 01:37:06'),
(69, '2024-06-15', '51.222.253.14', 'Unknown', 1, '2024-06-15 02:46:13', '2024-06-15 02:46:13'),
(70, '2024-06-15', '68.183.205.135', 'Google Chrome', 1, '2024-06-15 02:52:27', '2024-06-15 02:52:27'),
(71, '2024-06-15', '51.222.253.16', 'Unknown', 1, '2024-06-15 03:57:26', '2024-06-15 03:57:26'),
(72, '2024-06-15', '51.222.253.9', 'Unknown', 1, '2024-06-15 05:08:03', '2024-06-15 05:08:03'),
(73, '2024-06-15', '51.222.253.17', 'Unknown', 2, '2024-06-15 06:10:56', '2024-06-15 09:30:44'),
(74, '2024-06-15', '175.176.21.174', 'Apple Safari', 2, '2024-06-15 11:23:32', '2024-06-15 11:25:39'),
(75, '2024-06-15', '54.36.149.40', 'Unknown', 1, '2024-06-15 12:51:27', '2024-06-15 12:51:27'),
(76, '2024-06-15', '40.77.167.5', 'Google Chrome', 1, '2024-06-15 14:09:12', '2024-06-15 14:09:12'),
(77, '2024-06-15', '2001:4ca0:108:42::15', 'Unknown', 1, '2024-06-15 15:38:20', '2024-06-15 15:38:20'),
(78, '2024-06-15', '51.222.253.11', 'Unknown', 1, '2024-06-15 15:47:46', '2024-06-15 15:47:46'),
(79, '2024-06-16', '2a02:4780:6:c0de::10', 'Unknown', 2, '2024-06-15 16:00:02', '2024-06-16 04:01:36'),
(80, '2024-06-16', '43.159.129.209', 'Apple Safari', 1, '2024-06-15 16:01:58', '2024-06-15 16:01:58'),
(81, '2024-06-16', '49.51.179.103', 'Apple Safari', 1, '2024-06-15 16:43:44', '2024-06-15 16:43:44'),
(82, '2024-06-16', '51.222.253.3', 'Unknown', 1, '2024-06-15 18:34:17', '2024-06-15 18:34:17'),
(83, '2024-06-16', '43.131.48.214', 'Apple Safari', 1, '2024-06-15 19:33:29', '2024-06-15 19:33:29'),
(84, '2024-06-16', '43.135.181.13', 'Apple Safari', 1, '2024-06-16 01:15:54', '2024-06-16 01:15:54'),
(85, '2024-06-16', '2a12:5940:5433::2', 'Google Chrome', 1, '2024-06-16 01:56:26', '2024-06-16 01:56:26'),
(86, '2024-06-16', '152.32.100.117', 'Apple Safari', 2, '2024-06-16 02:20:11', '2024-06-16 02:20:28'),
(87, '2024-06-16', '66.249.79.170', 'Google Chrome', 1, '2024-06-16 08:18:55', '2024-06-16 08:18:55'),
(88, '2024-06-16', '216.244.66.245', 'Unknown', 1, '2024-06-16 12:03:13', '2024-06-16 12:03:13'),
(89, '2024-06-16', '35.94.111.96', 'Google Chrome', 2, '2024-06-16 13:12:16', '2024-06-16 13:12:18'),
(90, '2024-06-16', '51.222.253.10', 'Unknown', 1, '2024-06-16 14:22:46', '2024-06-16 14:22:46'),
(91, '2024-06-16', '49.51.206.130', 'Apple Safari', 1, '2024-06-16 15:59:57', '2024-06-16 15:59:57'),
(92, '2024-06-17', '20.15.133.185', 'Google Chrome', 1, '2024-06-16 16:51:29', '2024-06-16 16:51:29'),
(93, '2024-06-17', '43.131.248.209', 'Apple Safari', 1, '2024-06-16 17:16:54', '2024-06-16 17:16:54'),
(94, '2024-06-17', '193.233.233.29', 'Google Chrome', 1, '2024-06-16 17:28:07', '2024-06-16 17:28:07'),
(95, '2024-06-17', '216.244.66.245', 'Unknown', 1, '2024-06-16 18:08:37', '2024-06-16 18:08:37'),
(96, '2024-06-17', '51.222.253.19', 'Unknown', 1, '2024-06-16 21:01:18', '2024-06-16 21:01:18'),
(97, '2024-06-17', '37.99.48.128', 'Google Chrome', 2, '2024-06-16 23:49:18', '2024-06-16 23:49:25'),
(98, '2024-06-17', '43.155.152.154', 'Apple Safari', 1, '2024-06-17 01:04:51', '2024-06-17 01:04:51'),
(99, '2024-06-17', '161.35.46.172', 'Google Chrome', 1, '2024-06-17 02:19:53', '2024-06-17 02:19:53'),
(100, '2024-06-17', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-06-17 04:01:36', '2024-06-17 04:01:36'),
(101, '2024-06-17', '93.158.91.29', 'Google Chrome', 1, '2024-06-17 05:38:23', '2024-06-17 05:38:23'),
(102, '2024-06-17', '89.22.101.69', 'Google Chrome', 1, '2024-06-17 10:25:43', '2024-06-17 10:25:43'),
(103, '2024-06-17', '52.26.131.232', 'Google Chrome', 1, '2024-06-17 14:22:34', '2024-06-17 14:22:34'),
(104, '2024-06-17', '45.128.133.231', 'Google Chrome', 2, '2024-06-17 14:51:40', '2024-06-17 14:51:52'),
(105, '2024-06-17', '34.221.101.255', 'Google Chrome', 1, '2024-06-17 14:54:44', '2024-06-17 14:54:44'),
(106, '2024-06-18', '43.159.128.149', 'Apple Safari', 1, '2024-06-17 16:02:49', '2024-06-17 16:02:49'),
(107, '2024-06-18', '42.83.147.53', 'Google Chrome', 1, '2024-06-17 16:41:53', '2024-06-17 16:41:53'),
(108, '2024-06-18', '2a12:5940:5433::2', 'Google Chrome', 1, '2024-06-17 17:58:49', '2024-06-17 17:58:49'),
(109, '2024-06-18', '43.130.37.62', 'Apple Safari', 1, '2024-06-17 18:59:27', '2024-06-17 18:59:27'),
(110, '2024-06-18', '129.226.158.26', 'Apple Safari', 1, '2024-06-17 20:03:54', '2024-06-17 20:03:54'),
(111, '2024-06-18', '43.159.128.172', 'Apple Safari', 1, '2024-06-18 01:05:50', '2024-06-18 01:05:50'),
(112, '2024-06-18', '43.130.31.48', 'Apple Safari', 1, '2024-06-18 03:04:02', '2024-06-18 03:04:02'),
(113, '2024-06-18', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-06-18 04:01:36', '2024-06-18 04:01:36'),
(114, '2024-06-18', '93.158.98.56', 'Google Chrome', 1, '2024-06-18 11:47:50', '2024-06-18 11:47:50'),
(115, '2024-06-18', '111.172.249.49', 'Apple Safari', 1, '2024-06-18 12:05:57', '2024-06-18 12:05:57'),
(116, '2024-06-19', '2a06:4880:3000::40', 'Unknown', 1, '2024-06-18 16:59:51', '2024-06-18 16:59:51'),
(117, '2024-06-19', '170.106.104.42', 'Apple Safari', 1, '2024-06-18 19:35:29', '2024-06-18 19:35:29'),
(118, '2024-06-19', '2a12:5940:5433::2', 'Apple Safari', 1, '2024-06-18 23:23:52', '2024-06-18 23:23:52'),
(119, '2024-06-19', '43.155.152.154', 'Apple Safari', 1, '2024-06-19 01:05:37', '2024-06-19 01:05:37'),
(120, '2024-06-19', '199.45.155.76', 'Unknown', 1, '2024-06-19 01:24:46', '2024-06-19 01:24:46'),
(121, '2024-06-19', '167.71.54.240', 'Google Chrome', 1, '2024-06-19 02:05:52', '2024-06-19 02:05:52'),
(122, '2024-06-19', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-06-19 04:01:36', '2024-06-19 04:01:36'),
(123, '2024-06-19', '137.226.113.44', 'Unknown', 2, '2024-06-19 07:46:36', '2024-06-19 07:46:37'),
(124, '2024-06-19', '171.79.87.232', 'Google Chrome', 2, '2024-06-19 12:50:18', '2024-06-19 12:50:19'),
(125, '2024-06-19', '85.208.96.197', 'Unknown', 1, '2024-06-19 13:16:09', '2024-06-19 13:16:09'),
(126, '2024-06-20', '85.208.96.205', 'Unknown', 1, '2024-06-19 16:58:42', '2024-06-19 16:58:42'),
(127, '2024-06-20', '43.157.66.187', 'Apple Safari', 1, '2024-06-19 17:18:29', '2024-06-19 17:18:29'),
(128, '2024-06-20', '43.153.216.189', 'Apple Safari', 1, '2024-06-19 18:35:57', '2024-06-19 18:35:57'),
(129, '2024-06-20', '43.130.37.62', 'Apple Safari', 1, '2024-06-19 18:58:05', '2024-06-19 18:58:05'),
(130, '2024-06-20', '135.148.195.1', 'Google Chrome', 1, '2024-06-19 20:42:29', '2024-06-19 20:42:29'),
(131, '2024-06-20', '87.236.176.76', 'Unknown', 1, '2024-06-19 22:15:33', '2024-06-19 22:15:33'),
(132, '2024-06-20', '51.222.253.11', 'Unknown', 1, '2024-06-19 23:12:22', '2024-06-19 23:12:22'),
(133, '2024-06-20', '170.106.171.77', 'Apple Safari', 1, '2024-06-20 01:03:40', '2024-06-20 01:03:40'),
(134, '2024-06-20', '2a12:5940:5433::2', 'Google Chrome', 1, '2024-06-20 02:36:44', '2024-06-20 02:36:44'),
(135, '2024-06-20', '46.17.174.172', 'Mozilla Firefox', 1, '2024-06-20 02:58:58', '2024-06-20 02:58:58'),
(136, '2024-06-20', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-06-20 04:01:36', '2024-06-20 04:01:36'),
(137, '2024-06-20', '185.191.171.13', 'Unknown', 1, '2024-06-20 05:51:38', '2024-06-20 05:51:38'),
(138, '2024-06-20', '40.77.167.50', 'Google Chrome', 1, '2024-06-20 06:13:11', '2024-06-20 06:13:11'),
(139, '2024-06-20', '94.247.160.201', 'Google Chrome', 1, '2024-06-20 08:11:25', '2024-06-20 08:11:25'),
(140, '2024-06-20', '92.64.83.232', 'Google Chrome', 1, '2024-06-20 08:11:27', '2024-06-20 08:11:27'),
(141, '2024-06-20', '43.153.93.68', 'Apple Safari', 1, '2024-06-20 15:53:54', '2024-06-20 15:53:54'),
(142, '2024-06-21', '43.133.77.230', 'Apple Safari', 1, '2024-06-20 18:47:38', '2024-06-20 18:47:38'),
(143, '2024-06-21', '150.109.16.20', 'Apple Safari', 1, '2024-06-20 19:11:42', '2024-06-20 19:11:42'),
(144, '2024-06-21', '2a12:5940:5433::2', 'Google Chrome', 1, '2024-06-20 19:30:39', '2024-06-20 19:30:39'),
(145, '2024-06-21', '51.222.253.15', 'Unknown', 1, '2024-06-20 21:39:14', '2024-06-20 21:39:14'),
(146, '2024-06-21', '122.3.117.64', 'Google Chrome', 10, '2024-06-21 00:04:31', '2024-06-21 00:11:46'),
(147, '2024-06-21', '51.222.253.10', 'Unknown', 1, '2024-06-21 00:34:58', '2024-06-21 00:34:58'),
(148, '2024-06-21', '67.205.190.87', 'Google Chrome', 1, '2024-06-21 01:08:53', '2024-06-21 01:08:53'),
(149, '2024-06-21', '208.80.194.41', 'Internet Explorer', 1, '2024-06-21 02:43:56', '2024-06-21 02:43:56'),
(150, '2024-06-21', '43.133.66.151', 'Apple Safari', 1, '2024-06-21 02:50:28', '2024-06-21 02:50:28'),
(151, '2024-06-21', '43.155.138.79', 'Apple Safari', 1, '2024-06-21 03:04:35', '2024-06-21 03:04:35'),
(152, '2024-06-21', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-06-21 04:01:36', '2024-06-21 04:01:36'),
(153, '2024-06-21', '52.167.144.238', 'Google Chrome', 1, '2024-06-21 05:05:58', '2024-06-21 05:05:58'),
(154, '2024-06-21', '51.222.253.16', 'Unknown', 2, '2024-06-21 05:38:49', '2024-06-21 07:29:15'),
(155, '2024-06-21', '122.11.132.114', 'Google Chrome', 3, '2024-06-21 06:20:24', '2024-06-21 06:22:49'),
(156, '2024-06-21', '106.227.49.113', 'Apple Safari', 1, '2024-06-21 06:56:17', '2024-06-21 06:56:17'),
(157, '2024-06-21', '84.17.49.205', 'Google Chrome', 2, '2024-06-21 08:23:34', '2024-06-21 08:23:37'),
(158, '2024-06-21', '40.77.167.32', 'Google Chrome', 1, '2024-06-21 11:12:57', '2024-06-21 11:12:57'),
(159, '2024-06-21', '45.128.133.231', 'Google Chrome', 1, '2024-06-21 12:14:25', '2024-06-21 12:14:25'),
(160, '2024-06-21', '138.246.253.15', 'Unknown', 1, '2024-06-21 15:42:06', '2024-06-21 15:42:06'),
(161, '2024-06-22', '54.36.148.80', 'Unknown', 1, '2024-06-21 18:08:34', '2024-06-21 18:08:34'),
(162, '2024-06-22', '2a01:4f8:192:4496::2', 'Unknown', 1, '2024-06-21 18:22:17', '2024-06-21 18:22:17'),
(163, '2024-06-22', '43.159.129.209', 'Apple Safari', 1, '2024-06-21 19:15:35', '2024-06-21 19:15:35'),
(164, '2024-06-22', '113.141.91.58', 'Apple Safari', 1, '2024-06-21 20:20:18', '2024-06-21 20:20:18'),
(165, '2024-06-22', '54.36.149.76', 'Unknown', 1, '2024-06-21 21:30:31', '2024-06-21 21:30:31'),
(166, '2024-06-22', '2a12:5940:5433::2', 'Google Chrome', 1, '2024-06-21 23:27:53', '2024-06-21 23:27:53'),
(167, '2024-06-22', '35.171.144.152', 'Google Chrome', 5, '2024-06-21 23:33:46', '2024-06-22 00:39:35'),
(168, '2024-06-22', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-06-22 04:01:36', '2024-06-22 04:01:36'),
(169, '2024-06-22', '223.236.239.236', 'Mozilla Firefox', 2, '2024-06-22 09:15:29', '2024-06-22 09:15:31'),
(170, '2024-06-22', '175.176.17.80', 'Apple Safari', 1, '2024-06-22 14:18:40', '2024-06-22 14:18:40'),
(171, '2024-06-22', '152.32.100.117', 'Apple Safari', 1, '2024-06-22 15:20:45', '2024-06-22 15:20:45'),
(172, '2024-06-22', '49.51.206.130', 'Apple Safari', 1, '2024-06-22 15:50:35', '2024-06-22 15:50:35'),
(173, '2024-06-23', '2001:4ca0:108:42::15', 'Unknown', 1, '2024-06-22 16:37:52', '2024-06-22 16:37:52'),
(174, '2024-06-23', '43.130.37.62', 'Apple Safari', 1, '2024-06-22 19:06:37', '2024-06-22 19:06:37'),
(175, '2024-06-23', '51.222.253.13', 'Unknown', 1, '2024-06-23 00:33:15', '2024-06-23 00:33:15'),
(176, '2024-06-23', '2a12:5940:5433::2', 'Apple Safari', 1, '2024-06-23 01:33:36', '2024-06-23 01:33:36'),
(177, '2024-06-23', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-06-23 01:55:02', '2024-06-23 01:55:02'),
(178, '2024-06-23', '43.134.37.211', 'Apple Safari', 1, '2024-06-23 02:49:39', '2024-06-23 02:49:39'),
(179, '2024-06-23', '5.133.192.105', 'Google Chrome', 1, '2024-06-23 03:09:03', '2024-06-23 03:09:03'),
(180, '2024-06-23', '144.126.219.112', 'Google Chrome', 1, '2024-06-23 03:44:40', '2024-06-23 03:44:40'),
(181, '2024-06-23', '51.222.253.15', 'Unknown', 1, '2024-06-23 04:33:33', '2024-06-23 04:33:33'),
(182, '2024-06-23', '196.196.53.44', 'Google Chrome', 2, '2024-06-23 07:57:26', '2024-06-23 07:57:38'),
(183, '2024-06-23', '51.222.253.12', 'Unknown', 1, '2024-06-23 08:00:11', '2024-06-23 08:00:11'),
(184, '2024-06-23', '51.222.253.2', 'Unknown', 1, '2024-06-23 11:57:23', '2024-06-23 11:57:23'),
(185, '2024-06-23', '43.130.32.224', 'Apple Safari', 1, '2024-06-23 15:51:23', '2024-06-23 15:51:23'),
(186, '2024-06-24', '104.168.53.148', 'Google Chrome', 1, '2024-06-23 16:49:40', '2024-06-23 16:49:40'),
(187, '2024-06-24', '43.133.77.230', 'Apple Safari', 1, '2024-06-23 19:00:14', '2024-06-23 19:00:14'),
(188, '2024-06-24', '182.44.8.254', 'Apple Safari', 1, '2024-06-23 19:02:19', '2024-06-23 19:02:19'),
(189, '2024-06-24', '170.106.101.31', 'Apple Safari', 1, '2024-06-24 01:13:17', '2024-06-24 01:13:17'),
(190, '2024-06-24', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-06-24 01:55:02', '2024-06-24 01:55:02'),
(191, '2024-06-24', '185.12.248.5', 'Google Chrome', 1, '2024-06-24 02:03:10', '2024-06-24 02:03:10'),
(192, '2024-06-24', '43.163.0.99', 'Apple Safari', 3, '2024-06-24 02:56:56', '2024-06-24 03:19:17'),
(193, '2024-06-24', '147.182.244.143', 'Google Chrome', 1, '2024-06-24 04:41:15', '2024-06-24 04:41:15'),
(194, '2024-06-24', '170.106.104.42', 'Apple Safari', 1, '2024-06-24 06:53:59', '2024-06-24 06:53:59'),
(195, '2024-06-24', '34.214.123.253', 'Google Chrome', 1, '2024-06-24 10:48:13', '2024-06-24 10:48:13'),
(196, '2024-06-24', '35.87.16.202', 'Google Chrome', 1, '2024-06-24 11:12:38', '2024-06-24 11:12:38'),
(197, '2024-06-25', '43.130.37.62', 'Apple Safari', 1, '2024-06-24 16:03:53', '2024-06-24 16:03:53'),
(198, '2024-06-25', '43.134.142.8', 'Apple Safari', 1, '2024-06-24 16:47:18', '2024-06-24 16:47:18'),
(199, '2024-06-25', '182.42.111.213', 'Apple Safari', 1, '2024-06-24 18:25:57', '2024-06-24 18:25:57'),
(200, '2024-06-25', '65.154.226.169', 'Google Chrome', 1, '2024-06-24 18:49:16', '2024-06-24 18:49:16'),
(201, '2024-06-25', '43.134.37.211', 'Apple Safari', 1, '2024-06-24 19:00:36', '2024-06-24 19:00:36'),
(202, '2024-06-25', '122.3.117.64', 'Google Chrome', 1, '2024-06-24 23:59:47', '2024-06-24 23:59:47'),
(203, '2024-06-25', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-06-25 01:55:02', '2024-06-25 01:55:02'),
(204, '2024-06-25', '164.92.114.144', 'Google Chrome', 1, '2024-06-25 02:23:47', '2024-06-25 02:23:47'),
(205, '2024-06-25', '42.83.147.54', 'Google Chrome', 1, '2024-06-25 02:27:54', '2024-06-25 02:27:54'),
(206, '2024-06-25', '43.133.38.182', 'Apple Safari', 1, '2024-06-25 02:57:07', '2024-06-25 02:57:07'),
(207, '2024-06-25', '35.92.217.106', 'Google Chrome', 1, '2024-06-25 12:18:58', '2024-06-25 12:18:58'),
(208, '2024-06-25', '52.27.189.62', 'Google Chrome', 1, '2024-06-25 12:20:55', '2024-06-25 12:20:55'),
(209, '2024-06-26', '43.133.66.151', 'Apple Safari', 1, '2024-06-25 16:06:54', '2024-06-25 16:06:54'),
(210, '2024-06-26', '43.130.31.48', 'Apple Safari', 3, '2024-06-25 19:11:26', '2024-06-26 03:15:11'),
(211, '2024-06-26', '129.226.158.26', 'Apple Safari', 1, '2024-06-25 20:32:16', '2024-06-25 20:32:16'),
(212, '2024-06-26', '43.155.136.16', 'Apple Safari', 1, '2024-06-26 01:51:17', '2024-06-26 01:51:17'),
(213, '2024-06-26', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-06-26 01:55:02', '2024-06-26 01:55:02'),
(214, '2024-06-26', '157.245.80.52', 'Google Chrome', 1, '2024-06-26 03:09:46', '2024-06-26 03:09:46'),
(215, '2024-06-26', '40.77.167.28', 'Google Chrome', 1, '2024-06-26 04:15:45', '2024-06-26 04:15:45'),
(216, '2024-06-26', '2001:4ba0:cafe:b2c::1', 'Google Chrome', 1, '2024-06-26 04:37:18', '2024-06-26 04:37:18'),
(217, '2024-06-26', '137.226.113.44', 'Unknown', 2, '2024-06-26 07:45:59', '2024-06-26 07:46:00'),
(218, '2024-06-26', '199.244.88.222', 'Google Chrome', 1, '2024-06-26 08:44:09', '2024-06-26 08:44:09'),
(219, '2024-06-26', '64.23.238.18', 'Google Chrome', 1, '2024-06-26 09:19:15', '2024-06-26 09:19:15'),
(220, '2024-06-26', '2a05:d018:1d9d:e702:98b0:5717:1b3:aa5e', 'Unknown', 1, '2024-06-26 10:56:52', '2024-06-26 10:56:52'),
(221, '2024-06-26', '104.248.204.195', 'Unknown', 1, '2024-06-26 11:25:18', '2024-06-26 11:25:18'),
(222, '2024-06-26', '196.196.53.44', 'Google Chrome', 2, '2024-06-26 13:32:36', '2024-06-26 13:32:46'),
(223, '2024-06-27', '170.106.101.31', 'Apple Safari', 1, '2024-06-26 16:09:37', '2024-06-26 16:09:37'),
(224, '2024-06-27', '43.155.136.16', 'Apple Safari', 2, '2024-06-26 16:41:19', '2024-06-26 16:41:31'),
(225, '2024-06-27', '46.17.174.172', 'Mozilla Firefox', 1, '2024-06-26 17:32:33', '2024-06-26 17:32:33'),
(226, '2024-06-27', '170.106.104.42', 'Apple Safari', 1, '2024-06-26 19:17:30', '2024-06-26 19:17:30'),
(227, '2024-06-27', '51.222.253.7', 'Unknown', 1, '2024-06-26 20:31:38', '2024-06-26 20:31:38'),
(228, '2024-06-27', '43.134.170.46', 'Apple Safari', 1, '2024-06-26 20:59:13', '2024-06-26 20:59:13'),
(229, '2024-06-27', '195.211.77.142', 'Google Chrome', 2, '2024-06-26 21:48:04', '2024-06-26 21:48:23'),
(230, '2024-06-27', '51.222.253.9', 'Unknown', 1, '2024-06-27 00:17:39', '2024-06-27 00:17:39'),
(231, '2024-06-27', '43.159.129.209', 'Apple Safari', 1, '2024-06-27 01:16:05', '2024-06-27 01:16:05'),
(232, '2024-06-27', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-06-27 01:55:02', '2024-06-27 01:55:02'),
(233, '2024-06-27', '150.109.13.194', 'Apple Safari', 1, '2024-06-27 08:39:16', '2024-06-27 08:39:16'),
(234, '2024-06-27', '51.222.253.11', 'Unknown', 1, '2024-06-27 11:02:53', '2024-06-27 11:02:53'),
(235, '2024-06-27', '2600:1900:4050:5754:0:1::', 'Google Chrome', 3, '2024-06-27 12:16:48', '2024-06-27 12:24:14'),
(236, '2024-06-27', '175.176.20.38', 'Apple Safari', 6, '2024-06-27 14:55:11', '2024-06-27 14:57:47'),
(237, '2024-06-27', '44.223.101.123', 'Google Chrome', 1, '2024-06-27 15:00:26', '2024-06-27 15:00:26'),
(238, '2024-06-27', '18.209.238.247', 'Google Chrome', 1, '2024-06-27 15:00:28', '2024-06-27 15:00:28'),
(239, '2024-06-28', '170.106.159.160', 'Apple Safari', 1, '2024-06-27 16:13:24', '2024-06-27 16:13:24'),
(240, '2024-06-28', '43.134.66.205', 'Apple Safari', 2, '2024-06-27 16:30:43', '2024-06-28 01:52:20'),
(241, '2024-06-28', '43.155.136.16', 'Apple Safari', 2, '2024-06-27 16:31:38', '2024-06-28 01:50:43'),
(242, '2024-06-28', '43.163.3.58', 'Apple Safari', 2, '2024-06-27 16:34:51', '2024-06-27 19:48:15'),
(243, '2024-06-28', '150.109.13.194', 'Apple Safari', 2, '2024-06-27 16:36:32', '2024-06-27 19:48:20'),
(244, '2024-06-28', '43.128.100.206', 'Apple Safari', 1, '2024-06-27 17:00:22', '2024-06-27 17:00:22'),
(245, '2024-06-28', '43.159.128.149', 'Apple Safari', 1, '2024-06-27 19:25:16', '2024-06-27 19:25:16'),
(246, '2024-06-28', '44.203.229.40', 'Google Chrome', 1, '2024-06-27 20:13:06', '2024-06-27 20:13:06'),
(247, '2024-06-28', '18.215.187.213', 'Google Chrome', 1, '2024-06-27 20:13:08', '2024-06-27 20:13:08'),
(248, '2024-06-28', '43.133.77.230', 'Apple Safari', 1, '2024-06-27 21:24:55', '2024-06-27 21:24:55'),
(249, '2024-06-28', '51.222.253.11', 'Unknown', 2, '2024-06-27 21:42:26', '2024-06-28 00:27:43'),
(250, '2024-06-28', '49.51.206.130', 'Apple Safari', 1, '2024-06-28 01:29:04', '2024-06-28 01:29:04'),
(251, '2024-06-28', '66.249.79.197', 'Google Chrome', 1, '2024-06-28 01:34:40', '2024-06-28 01:34:40'),
(252, '2024-06-28', '66.249.79.196', 'Unknown', 1, '2024-06-28 01:36:23', '2024-06-28 01:36:23'),
(253, '2024-06-28', '43.163.1.85', 'Apple Safari', 1, '2024-06-28 01:51:36', '2024-06-28 01:51:36'),
(254, '2024-06-28', '43.163.6.35', 'Apple Safari', 1, '2024-06-28 01:53:42', '2024-06-28 01:53:42'),
(255, '2024-06-28', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-06-28 01:55:02', '2024-06-28 01:55:02'),
(256, '2024-06-28', '129.226.158.26', 'Apple Safari', 1, '2024-06-28 03:04:15', '2024-06-28 03:04:15'),
(257, '2024-06-28', '159.203.174.4', 'Google Chrome', 1, '2024-06-28 04:17:21', '2024-06-28 04:17:21'),
(258, '2024-06-28', '204.15.64.226', 'Internet Explorer', 2, '2024-06-28 05:01:47', '2024-06-28 05:03:37'),
(259, '2024-06-28', '138.246.253.15', 'Unknown', 1, '2024-06-28 08:27:55', '2024-06-28 08:27:55'),
(260, '2024-06-28', '23.106.192.110', 'Google Chrome', 1, '2024-06-28 08:29:40', '2024-06-28 08:29:40'),
(261, '2024-06-28', '51.222.253.5', 'Unknown', 1, '2024-06-28 08:32:28', '2024-06-28 08:32:28'),
(262, '2024-06-28', '128.90.170.25', 'Mozilla Firefox', 1, '2024-06-28 09:18:21', '2024-06-28 09:18:21'),
(263, '2024-06-28', '128.90.157.31', 'Mozilla Firefox', 1, '2024-06-28 13:00:00', '2024-06-28 13:00:00'),
(264, '2024-06-28', '45.128.133.231', 'Google Chrome', 2, '2024-06-28 13:21:13', '2024-06-28 13:21:15'),
(265, '2024-06-29', '43.130.37.62', 'Apple Safari', 1, '2024-06-28 16:13:21', '2024-06-28 16:13:21'),
(266, '2024-06-29', '43.163.3.58', 'Apple Safari', 2, '2024-06-28 16:35:42', '2024-06-28 20:37:19'),
(267, '2024-06-29', '43.155.136.16', 'Apple Safari', 4, '2024-06-28 16:36:38', '2024-06-28 17:02:49'),
(268, '2024-06-29', '66.249.79.169', 'Google Chrome', 1, '2024-06-28 16:43:04', '2024-06-28 16:43:04'),
(269, '2024-06-29', '43.131.243.208', 'Apple Safari', 3, '2024-06-28 17:04:31', '2024-06-28 19:50:44'),
(270, '2024-06-29', '43.133.66.151', 'Apple Safari', 1, '2024-06-28 19:14:37', '2024-06-28 19:14:37'),
(271, '2024-06-29', '43.163.1.85', 'Apple Safari', 1, '2024-06-28 19:51:00', '2024-06-28 19:51:00'),
(272, '2024-06-29', '43.135.181.13', 'Apple Safari', 1, '2024-06-28 21:38:33', '2024-06-28 21:38:33'),
(273, '2024-06-29', '52.167.144.204', 'Google Chrome', 1, '2024-06-28 21:53:58', '2024-06-28 21:53:58'),
(274, '2024-06-29', '142.93.133.14', 'Google Chrome', 1, '2024-06-29 00:50:00', '2024-06-29 00:50:00'),
(275, '2024-06-29', '93.158.91.29', 'Google Chrome', 1, '2024-06-29 01:08:13', '2024-06-29 01:08:13'),
(276, '2024-06-29', '43.135.166.178', 'Apple Safari', 1, '2024-06-29 01:18:49', '2024-06-29 01:18:49'),
(277, '2024-06-29', '43.155.160.173', 'Apple Safari', 1, '2024-06-29 01:46:48', '2024-06-29 01:46:48'),
(278, '2024-06-29', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-06-29 01:55:02', '2024-06-29 01:55:02'),
(279, '2024-06-29', '150.109.16.20', 'Apple Safari', 1, '2024-06-29 03:01:13', '2024-06-29 03:01:13'),
(280, '2024-06-29', '52.167.144.139', 'Google Chrome', 1, '2024-06-29 05:06:06', '2024-06-29 05:06:06'),
(281, '2024-06-29', '51.222.253.15', 'Unknown', 1, '2024-06-29 11:29:04', '2024-06-29 11:29:04'),
(282, '2024-06-30', '43.159.128.172', 'Apple Safari', 1, '2024-06-29 16:13:25', '2024-06-29 16:13:25'),
(283, '2024-06-30', '43.133.38.182', 'Apple Safari', 1, '2024-06-29 19:15:19', '2024-06-29 19:15:19'),
(284, '2024-06-30', '2001:4ca0:108:42::15', 'Unknown', 1, '2024-06-29 19:25:49', '2024-06-29 19:25:49'),
(285, '2024-06-30', '35.85.42.92', 'Google Chrome', 1, '2024-06-29 19:40:30', '2024-06-29 19:40:30'),
(286, '2024-06-30', '34.217.69.108', 'Google Chrome', 1, '2024-06-29 19:54:36', '2024-06-29 19:54:36'),
(287, '2024-06-30', '170.106.159.160', 'Apple Safari', 1, '2024-06-30 01:18:38', '2024-06-30 01:18:38'),
(288, '2024-06-30', '51.222.253.2', 'Unknown', 1, '2024-06-30 02:35:10', '2024-06-30 02:35:10'),
(289, '2024-06-30', '205.169.39.42', 'Google Chrome', 1, '2024-06-30 02:40:37', '2024-06-30 02:40:37'),
(290, '2024-06-30', '43.133.77.230', 'Apple Safari', 1, '2024-06-30 03:01:17', '2024-06-30 03:01:17'),
(291, '2024-06-30', '2a01:4f9:c012:6365::1', 'Google Chrome', 2, '2024-06-30 06:27:11', '2024-06-30 06:27:12'),
(292, '2024-06-30', '205.169.39.29', 'Google Chrome', 1, '2024-06-30 06:27:21', '2024-06-30 06:27:21'),
(293, '2024-06-30', '2a03:b0c0:3:d0::dc2:2001', 'Google Chrome', 1, '2024-06-30 06:27:22', '2024-06-30 06:27:22'),
(294, '2024-06-30', '2a03:b0c0:3:d0::12ae:2001', 'Google Chrome', 1, '2024-06-30 06:27:23', '2024-06-30 06:27:23'),
(295, '2024-06-30', '104.197.69.115', 'Google Chrome', 1, '2024-06-30 06:27:24', '2024-06-30 06:27:24'),
(296, '2024-06-30', '205.169.39.170', 'Google Chrome', 2, '2024-06-30 06:27:29', '2024-06-30 06:27:40'),
(297, '2024-06-30', '138.199.15.159', 'Google Chrome', 1, '2024-06-30 06:27:49', '2024-06-30 06:27:49'),
(298, '2024-06-30', '129.226.146.179', 'Apple Safari', 1, '2024-06-30 09:45:44', '2024-06-30 09:45:44'),
(299, '2024-06-30', '52.24.39.216', 'Google Chrome', 2, '2024-06-30 12:44:16', '2024-06-30 12:44:17'),
(300, '2024-06-30', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-06-30 15:14:36', '2024-06-30 15:14:36'),
(301, '2024-06-30', '51.222.253.4', 'Unknown', 1, '2024-06-30 15:36:07', '2024-06-30 15:36:07'),
(302, '2024-07-01', '43.130.7.211', 'Apple Safari', 1, '2024-06-30 16:12:15', '2024-06-30 16:12:15'),
(303, '2024-07-01', '47.88.101.3', 'Google Chrome', 1, '2024-06-30 18:31:55', '2024-06-30 18:31:55'),
(304, '2024-07-01', '47.88.6.178', 'Google Chrome', 1, '2024-06-30 18:31:55', '2024-06-30 18:31:55'),
(305, '2024-07-01', '51.222.253.16', 'Unknown', 1, '2024-06-30 18:59:57', '2024-06-30 18:59:57'),
(306, '2024-07-01', '43.159.141.180', 'Apple Safari', 1, '2024-06-30 19:24:28', '2024-06-30 19:24:28'),
(307, '2024-07-01', '43.155.166.202', 'Apple Safari', 1, '2024-06-30 20:05:19', '2024-06-30 20:05:19'),
(308, '2024-07-01', '43.159.128.172', 'Apple Safari', 1, '2024-06-30 22:24:12', '2024-06-30 22:24:12'),
(309, '2024-07-01', '43.163.6.124', 'Apple Safari', 1, '2024-07-01 01:10:53', '2024-07-01 01:10:53'),
(310, '2024-07-01', '51.222.253.19', 'Unknown', 1, '2024-07-01 05:06:03', '2024-07-01 05:06:03'),
(311, '2024-07-01', '104.164.173.164', 'Google Chrome', 1, '2024-07-01 07:03:58', '2024-07-01 07:03:58'),
(312, '2024-07-01', '51.222.253.7', 'Unknown', 1, '2024-07-01 08:32:13', '2024-07-01 08:32:13'),
(313, '2024-07-01', '18.226.186.157', 'Unknown', 1, '2024-07-01 13:45:01', '2024-07-01 13:45:01'),
(314, '2024-07-01', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-01 15:14:35', '2024-07-01 15:14:35'),
(315, '2024-07-01', '2001:4860:7:70e::e8', 'Google Chrome', 1, '2024-07-01 15:23:38', '2024-07-01 15:23:38'),
(316, '2024-07-02', '18.201.119.92', 'Unknown', 1, '2024-07-01 16:00:59', '2024-07-01 16:00:59'),
(317, '2024-07-02', '43.130.32.224', 'Apple Safari', 1, '2024-07-01 16:10:03', '2024-07-01 16:10:03'),
(318, '2024-07-02', '43.155.166.202', 'Apple Safari', 4, '2024-07-01 16:44:54', '2024-07-01 17:24:15'),
(319, '2024-07-02', '24.199.113.41', 'Google Chrome', 1, '2024-07-02 01:26:22', '2024-07-02 01:26:22'),
(320, '2024-07-02', '37.19.223.107', 'Google Chrome', 2, '2024-07-02 10:27:37', '2024-07-02 10:27:44'),
(321, '2024-07-02', '52.12.233.83', 'Google Chrome', 1, '2024-07-02 12:25:34', '2024-07-02 12:25:34'),
(322, '2024-07-02', '35.94.151.35', 'Google Chrome', 1, '2024-07-02 12:25:37', '2024-07-02 12:25:37'),
(323, '2024-07-02', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-02 15:14:35', '2024-07-02 15:14:35'),
(324, '2024-07-03', '142.234.202.147', 'Mozilla Firefox', 1, '2024-07-02 19:04:49', '2024-07-02 19:04:49'),
(325, '2024-07-03', '66.249.79.170', 'Unknown', 1, '2024-07-02 20:27:45', '2024-07-02 20:27:45'),
(326, '2024-07-03', '205.210.31.81', 'Unknown', 1, '2024-07-02 21:10:38', '2024-07-02 21:10:38'),
(327, '2024-07-03', '175.6.217.4', 'Apple Safari', 1, '2024-07-02 23:57:48', '2024-07-02 23:57:48'),
(328, '2024-07-03', '89.149.24.2', 'Google Chrome', 2, '2024-07-03 00:20:14', '2024-07-03 00:20:20'),
(329, '2024-07-03', '134.122.97.111', 'Google Chrome', 1, '2024-07-03 00:57:49', '2024-07-03 00:57:49'),
(330, '2024-07-03', '51.222.253.9', 'Unknown', 1, '2024-07-03 01:19:34', '2024-07-03 01:19:34'),
(331, '2024-07-03', '94.247.172.129', 'Unknown', 1, '2024-07-03 06:35:04', '2024-07-03 06:35:04'),
(332, '2024-07-03', '137.226.113.44', 'Unknown', 2, '2024-07-03 07:46:05', '2024-07-03 07:46:06'),
(333, '2024-07-03', '42.83.147.55', 'Google Chrome', 2, '2024-07-03 10:32:57', '2024-07-03 10:32:58'),
(334, '2024-07-03', '122.3.117.64', 'Google Chrome', 15, '2024-07-03 10:47:29', '2024-07-03 11:53:15'),
(335, '2024-07-03', '3.219.138.134', 'Unknown', 1, '2024-07-03 10:47:47', '2024-07-03 10:47:47'),
(336, '2024-07-03', '170.106.82.193', 'Apple Safari', 1, '2024-07-03 12:42:26', '2024-07-03 12:42:26'),
(337, '2024-07-03', '51.222.253.7', 'Unknown', 1, '2024-07-03 14:23:36', '2024-07-03 14:23:36'),
(338, '2024-07-03', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-03 15:14:35', '2024-07-03 15:14:35'),
(339, '2024-07-04', '13.213.56.239', 'Apple Safari', 1, '2024-07-03 18:13:48', '2024-07-03 18:13:48'),
(340, '2024-07-04', '52.27.189.62', 'Google Chrome', 1, '2024-07-03 21:36:35', '2024-07-03 21:36:35'),
(341, '2024-07-04', '34.220.238.114', 'Google Chrome', 1, '2024-07-03 21:39:52', '2024-07-03 21:39:52'),
(342, '2024-07-04', '3.68.89.5', 'Google Chrome', 1, '2024-07-04 00:47:49', '2024-07-04 00:47:49'),
(343, '2024-07-04', '64.227.157.15', 'Google Chrome', 1, '2024-07-04 01:25:34', '2024-07-04 01:25:34'),
(344, '2024-07-04', '8.218.182.141', 'Google Chrome', 1, '2024-07-04 05:54:05', '2024-07-04 05:54:05'),
(345, '2024-07-04', '8.218.239.199', 'Google Chrome', 1, '2024-07-04 08:10:49', '2024-07-04 08:10:49'),
(346, '2024-07-04', '8.218.155.234', 'Google Chrome', 1, '2024-07-04 08:14:51', '2024-07-04 08:14:51'),
(347, '2024-07-04', '54.36.149.21', 'Unknown', 1, '2024-07-04 08:44:53', '2024-07-04 08:44:53'),
(348, '2024-07-04', '152.32.210.145', 'Google Chrome', 11, '2024-07-04 12:02:59', '2024-07-04 12:03:13'),
(349, '2024-07-04', '152.32.210.145', 'Unknown', 4, '2024-07-04 12:03:00', '2024-07-04 12:03:10'),
(350, '2024-07-04', '34.251.141.53', 'Unknown', 1, '2024-07-04 12:30:42', '2024-07-04 12:30:42'),
(351, '2024-07-04', '51.89.227.251', 'Mozilla Firefox', 1, '2024-07-04 12:55:23', '2024-07-04 12:55:23'),
(352, '2024-07-04', '43.153.110.177', 'Apple Safari', 1, '2024-07-04 13:20:04', '2024-07-04 13:20:04'),
(353, '2024-07-04', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-04 15:14:35', '2024-07-04 15:14:35'),
(354, '2024-07-04', '54.36.148.164', 'Unknown', 1, '2024-07-04 15:26:00', '2024-07-04 15:26:00'),
(355, '2024-07-05', '3.249.22.125', 'Unknown', 1, '2024-07-04 19:56:43', '2024-07-04 19:56:43'),
(356, '2024-07-05', '54.36.148.82', 'Unknown', 1, '2024-07-04 20:05:36', '2024-07-04 20:05:36'),
(357, '2024-07-05', '46.17.174.172', 'Mozilla Firefox', 1, '2024-07-04 20:34:47', '2024-07-04 20:34:47'),
(358, '2024-07-05', '5.133.192.128', 'Google Chrome', 1, '2024-07-05 00:21:10', '2024-07-05 00:21:10'),
(359, '2024-07-05', '64.226.97.82', 'Google Chrome', 1, '2024-07-05 00:35:52', '2024-07-05 00:35:52'),
(360, '2024-07-05', '52.167.144.209', 'Google Chrome', 1, '2024-07-05 01:48:53', '2024-07-05 01:48:53'),
(361, '2024-07-05', '49.7.227.204', 'Apple Safari', 1, '2024-07-05 02:31:07', '2024-07-05 02:31:07'),
(362, '2024-07-05', '93.158.90.73', 'Apple Safari', 1, '2024-07-05 08:53:50', '2024-07-05 08:53:50'),
(363, '2024-07-05', '138.246.253.15', 'Unknown', 1, '2024-07-05 09:04:55', '2024-07-05 09:04:55'),
(364, '2024-07-05', '52.225.75.213', 'Unknown', 1, '2024-07-05 15:12:09', '2024-07-05 15:12:09'),
(365, '2024-07-05', '52.225.75.213', 'Unknown', 1, '2024-07-05 15:12:09', '2024-07-05 15:12:09'),
(366, '2024-07-05', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-05 15:14:35', '2024-07-05 15:14:35'),
(367, '2024-07-06', '3.238.120.99', 'Unknown', 7, '2024-07-05 16:24:37', '2024-07-05 16:37:44'),
(368, '2024-07-06', '54.36.148.181', 'Unknown', 1, '2024-07-05 21:16:29', '2024-07-05 21:16:29'),
(369, '2024-07-06', '54.36.148.208', 'Unknown', 1, '2024-07-05 22:42:17', '2024-07-05 22:42:17'),
(370, '2024-07-06', '54.36.149.26', 'Unknown', 1, '2024-07-06 00:22:53', '2024-07-06 00:22:53'),
(371, '2024-07-06', '54.36.148.157', 'Unknown', 1, '2024-07-06 01:37:33', '2024-07-06 01:37:33'),
(372, '2024-07-06', '54.36.148.168', 'Unknown', 1, '2024-07-06 02:56:05', '2024-07-06 02:56:05'),
(373, '2024-07-06', '51.222.253.8', 'Unknown', 2, '2024-07-06 03:13:04', '2024-07-06 03:14:32'),
(374, '2024-07-06', '51.222.253.3', 'Unknown', 2, '2024-07-06 06:44:19', '2024-07-06 10:55:11'),
(375, '2024-07-06', '51.222.253.1', 'Unknown', 1, '2024-07-06 08:50:13', '2024-07-06 08:50:13'),
(376, '2024-07-06', '34.222.167.242', 'Google Chrome', 1, '2024-07-06 12:01:55', '2024-07-06 12:01:55'),
(377, '2024-07-06', '54.185.142.99', 'Google Chrome', 1, '2024-07-06 12:02:00', '2024-07-06 12:02:00'),
(378, '2024-07-06', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-06 15:14:36', '2024-07-06 15:14:36'),
(379, '2024-07-07', '54.36.148.25', 'Unknown', 1, '2024-07-06 16:13:08', '2024-07-06 16:13:08'),
(380, '2024-07-07', '2001:4ca0:108:42::15', 'Unknown', 1, '2024-07-06 18:53:02', '2024-07-06 18:53:02'),
(381, '2024-07-07', '143.198.38.244', 'Google Chrome', 1, '2024-07-07 02:40:30', '2024-07-07 02:40:30'),
(382, '2024-07-07', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-07 04:42:52', '2024-07-07 04:42:52'),
(383, '2024-07-07', '52.167.144.137', 'Google Chrome', 1, '2024-07-07 05:56:11', '2024-07-07 05:56:11'),
(384, '2024-07-07', '149.56.160.186', 'Unknown', 11, '2024-07-07 10:20:56', '2024-07-07 10:21:09'),
(385, '2024-07-07', '149.56.160.186', 'Google Chrome', 1, '2024-07-07 10:21:13', '2024-07-07 10:21:13'),
(386, '2024-07-07', '149.56.150.124', 'Unknown', 1, '2024-07-07 10:21:41', '2024-07-07 10:21:41'),
(387, '2024-07-07', '54.36.149.82', 'Unknown', 1, '2024-07-07 11:26:09', '2024-07-07 11:26:09'),
(388, '2024-07-07', '2001:4860:7:618::e8', 'Google Chrome', 1, '2024-07-07 13:24:12', '2024-07-07 13:24:12'),
(389, '2024-07-08', '42.236.12.211', 'Google Chrome', 1, '2024-07-07 17:49:30', '2024-07-07 17:49:30'),
(390, '2024-07-08', '42.236.12.195', 'Google Chrome', 1, '2024-07-07 17:58:48', '2024-07-07 17:58:48'),
(391, '2024-07-08', '3.0.91.16', 'Google Chrome', 1, '2024-07-07 19:00:14', '2024-07-07 19:00:14'),
(392, '2024-07-08', '195.211.77.142', 'Google Chrome', 2, '2024-07-07 19:06:24', '2024-07-07 19:06:51'),
(393, '2024-07-08', '45.148.10.59', 'Google Chrome', 1, '2024-07-07 20:50:20', '2024-07-07 20:50:20'),
(394, '2024-07-08', '87.236.176.161', 'Unknown', 1, '2024-07-08 02:15:58', '2024-07-08 02:15:58'),
(395, '2024-07-08', '43.128.100.220', 'Apple Safari', 1, '2024-07-08 04:10:28', '2024-07-08 04:10:28'),
(396, '2024-07-08', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-08 04:42:52', '2024-07-08 04:42:52'),
(397, '2024-07-08', '122.3.117.64', 'Google Chrome', 7, '2024-07-08 06:17:21', '2024-07-08 08:43:38'),
(398, '2024-07-08', '3.219.138.134', 'Unknown', 1, '2024-07-08 06:18:14', '2024-07-08 06:18:14'),
(399, '2024-07-08', '46.17.174.172', 'Mozilla Firefox', 1, '2024-07-08 08:38:01', '2024-07-08 08:38:01'),
(400, '2024-07-08', '42.83.147.53', 'Google Chrome', 1, '2024-07-08 11:25:19', '2024-07-08 11:25:19'),
(401, '2024-07-09', '43.133.77.230', 'Apple Safari', 1, '2024-07-08 16:43:58', '2024-07-08 16:43:58'),
(402, '2024-07-09', '18.139.115.239', 'Google Chrome', 1, '2024-07-08 17:06:19', '2024-07-08 17:06:19'),
(403, '2024-07-09', '122.3.117.64', 'Google Chrome', 4, '2024-07-09 00:52:55', '2024-07-09 10:04:05'),
(404, '2024-07-09', '167.172.38.157', 'Google Chrome', 1, '2024-07-09 02:00:20', '2024-07-09 02:00:20'),
(405, '2024-07-09', '54.202.218.183', 'Google Chrome', 1, '2024-07-09 03:35:45', '2024-07-09 03:35:45'),
(406, '2024-07-09', '35.91.24.255', 'Google Chrome', 1, '2024-07-09 03:45:37', '2024-07-09 03:45:37'),
(407, '2024-07-09', '150.109.16.20', 'Apple Safari', 1, '2024-07-09 04:32:15', '2024-07-09 04:32:15'),
(408, '2024-07-09', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-09 04:42:52', '2024-07-09 04:42:52'),
(409, '2024-07-09', '54.36.149.69', 'Unknown', 1, '2024-07-09 05:02:26', '2024-07-09 05:02:26'),
(410, '2024-07-09', '42.236.12.213', 'Google Chrome', 1, '2024-07-09 12:29:09', '2024-07-09 12:29:09'),
(411, '2024-07-09', '42.236.17.104', 'Google Chrome', 1, '2024-07-09 12:50:23', '2024-07-09 12:50:23'),
(412, '2024-07-09', '42.236.101.244', 'Google Chrome', 1, '2024-07-09 12:50:35', '2024-07-09 12:50:35'),
(413, '2024-07-09', '31.171.152.132', 'Google Chrome', 2, '2024-07-09 15:53:22', '2024-07-09 15:53:25'),
(414, '2024-07-10', '66.249.79.198', 'Unknown', 1, '2024-07-09 16:28:56', '2024-07-09 16:28:56'),
(415, '2024-07-10', '66.249.79.198', 'Google Chrome', 1, '2024-07-09 16:29:22', '2024-07-09 16:29:22'),
(416, '2024-07-10', '2001:4860:7:70e::f3', 'Google Chrome', 1, '2024-07-09 17:21:51', '2024-07-09 17:21:51'),
(417, '2024-07-10', '43.134.37.211', 'Apple Safari', 1, '2024-07-09 17:28:56', '2024-07-09 17:28:56'),
(418, '2024-07-10', '54.36.149.96', 'Unknown', 1, '2024-07-09 17:35:25', '2024-07-09 17:35:25'),
(419, '2024-07-10', '54.36.148.248', 'Unknown', 1, '2024-07-09 20:23:42', '2024-07-09 20:23:42'),
(420, '2024-07-10', '20.15.133.185', 'Google Chrome', 1, '2024-07-09 23:23:22', '2024-07-09 23:23:22'),
(421, '2024-07-10', '84.239.54.68', 'Unknown', 1, '2024-07-09 23:44:20', '2024-07-09 23:44:20'),
(422, '2024-07-10', '66.249.79.169', 'Google Chrome', 1, '2024-07-10 01:17:22', '2024-07-10 01:17:22'),
(423, '2024-07-10', '68.183.112.54', 'Google Chrome', 1, '2024-07-10 03:01:49', '2024-07-10 03:01:49'),
(424, '2024-07-10', '199.244.88.226', 'Google Chrome', 1, '2024-07-10 04:13:59', '2024-07-10 04:13:59'),
(425, '2024-07-10', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-10 04:42:52', '2024-07-10 04:42:52'),
(426, '2024-07-10', '18.237.79.22', 'Apple Safari', 1, '2024-07-10 05:41:06', '2024-07-10 05:41:06'),
(427, '2024-07-10', '54.69.189.18', 'Apple Safari', 1, '2024-07-10 06:12:49', '2024-07-10 06:12:49'),
(428, '2024-07-10', '134.122.6.72', 'Google Chrome', 1, '2024-07-10 06:46:53', '2024-07-10 06:46:53'),
(429, '2024-07-10', '137.226.113.44', 'Unknown', 2, '2024-07-10 07:45:45', '2024-07-10 07:45:45'),
(430, '2024-07-10', '178.157.64.29', 'Google Chrome', 1, '2024-07-10 10:19:13', '2024-07-10 10:19:13'),
(431, '2024-07-10', '2001:8f8:1471:ffd2:5093:e53:416a:e9d7', 'Google Chrome', 1, '2024-07-10 14:22:21', '2024-07-10 14:22:21'),
(432, '2024-07-11', '54.36.149.68', 'Unknown', 1, '2024-07-10 17:23:25', '2024-07-10 17:23:25'),
(433, '2024-07-11', '135.148.195.5', 'Mozilla Firefox', 1, '2024-07-10 21:00:49', '2024-07-10 21:00:49'),
(434, '2024-07-11', '5.133.192.94', 'Google Chrome', 1, '2024-07-10 23:42:05', '2024-07-10 23:42:05'),
(435, '2024-07-11', '54.36.148.28', 'Unknown', 1, '2024-07-10 23:45:33', '2024-07-10 23:45:33'),
(436, '2024-07-11', '122.3.117.64', 'Google Chrome', 13, '2024-07-11 01:42:37', '2024-07-11 07:13:05'),
(437, '2024-07-11', '142.93.191.98', 'Unknown', 1, '2024-07-11 03:07:29', '2024-07-11 03:07:29'),
(438, '2024-07-11', '178.128.226.169', 'Google Chrome', 1, '2024-07-11 03:33:34', '2024-07-11 03:33:34'),
(439, '2024-07-11', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-11 04:42:52', '2024-07-11 04:42:52'),
(440, '2024-07-11', '122.3.117.64', 'Apple Safari', 3, '2024-07-11 06:19:42', '2024-07-11 06:30:58'),
(441, '2024-07-11', '175.176.18.238', 'Apple Safari', 10, '2024-07-11 06:30:57', '2024-07-11 07:02:11'),
(442, '2024-07-11', '54.149.111.18', 'Google Chrome', 1, '2024-07-11 08:52:31', '2024-07-11 08:52:31'),
(443, '2024-07-11', '180.190.121.187', 'Apple Safari', 2, '2024-07-11 09:59:26', '2024-07-11 09:59:29'),
(444, '2024-07-12', '46.246.122.117', 'Google Chrome', 2, '2024-07-11 16:39:33', '2024-07-11 16:39:48'),
(445, '2024-07-12', '138.68.137.247', 'Google Chrome', 1, '2024-07-11 17:43:23', '2024-07-11 17:43:23'),
(446, '2024-07-12', '182.40.104.255', 'Apple Safari', 1, '2024-07-11 19:06:39', '2024-07-11 19:06:39'),
(447, '2024-07-12', '51.222.253.13', 'Unknown', 1, '2024-07-11 19:17:05', '2024-07-11 19:17:05'),
(448, '2024-07-12', '157.245.62.78', 'Google Chrome', 1, '2024-07-11 23:58:07', '2024-07-11 23:58:07'),
(449, '2024-07-12', '138.197.109.81', 'Unknown', 1, '2024-07-12 00:02:08', '2024-07-12 00:02:08'),
(450, '2024-07-12', '128.199.45.220', 'Unknown', 1, '2024-07-12 00:15:44', '2024-07-12 00:15:44'),
(451, '2024-07-12', '54.36.149.33', 'Unknown', 1, '2024-07-12 01:13:25', '2024-07-12 01:13:25'),
(452, '2024-07-12', '130.255.162.249', 'Mozilla Firefox', 1, '2024-07-12 02:03:06', '2024-07-12 02:03:06'),
(453, '2024-07-12', '122.3.117.64', 'Google Chrome', 1, '2024-07-12 02:28:33', '2024-07-12 02:28:33'),
(454, '2024-07-12', '112.204.117.185', 'Google Chrome', 7, '2024-07-12 02:30:43', '2024-07-12 02:32:31'),
(455, '2024-07-12', '64.226.73.5', 'Google Chrome', 1, '2024-07-12 02:36:05', '2024-07-12 02:36:05'),
(456, '2024-07-12', '40.77.167.49', 'Google Chrome', 1, '2024-07-12 02:41:43', '2024-07-12 02:41:43'),
(457, '2024-07-12', '143.198.6.122', 'Google Chrome', 1, '2024-07-12 03:06:06', '2024-07-12 03:06:06'),
(458, '2024-07-12', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-12 04:42:52', '2024-07-12 04:42:52'),
(459, '2024-07-12', '54.36.149.39', 'Unknown', 1, '2024-07-12 09:58:54', '2024-07-12 09:58:54'),
(460, '2024-07-12', '143.198.0.245', 'Google Chrome', 1, '2024-07-12 11:33:39', '2024-07-12 11:33:39'),
(461, '2024-07-12', '54.36.149.60', 'Unknown', 1, '2024-07-12 12:14:19', '2024-07-12 12:14:19'),
(462, '2024-07-12', '188.166.22.61', 'Google Chrome', 1, '2024-07-12 13:49:27', '2024-07-12 13:49:27'),
(463, '2024-07-12', '165.232.147.51', 'Google Chrome', 1, '2024-07-12 14:03:42', '2024-07-12 14:03:42'),
(464, '2024-07-12', '51.222.253.16', 'Unknown', 1, '2024-07-12 14:32:13', '2024-07-12 14:32:13'),
(465, '2024-07-12', '138.246.253.15', 'Unknown', 1, '2024-07-12 15:05:06', '2024-07-12 15:05:06'),
(466, '2024-07-13', '2001:4ba0:cafe:c13::1', 'Google Chrome', 1, '2024-07-12 20:34:12', '2024-07-12 20:34:12'),
(467, '2024-07-13', '139.59.1.172', 'Google Chrome', 1, '2024-07-13 01:07:21', '2024-07-13 01:07:21'),
(468, '2024-07-13', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-13 04:42:52', '2024-07-13 04:42:52'),
(469, '2024-07-13', '54.162.139.84', 'Unknown', 1, '2024-07-13 08:41:05', '2024-07-13 08:41:05'),
(470, '2024-07-13', '46.246.8.142', 'Google Chrome', 2, '2024-07-13 12:16:29', '2024-07-13 12:16:34'),
(471, '2024-07-14', '52.167.144.206', 'Google Chrome', 1, '2024-07-13 19:34:14', '2024-07-13 19:34:14'),
(472, '2024-07-14', '2001:4ca0:108:42::15', 'Unknown', 1, '2024-07-13 20:14:22', '2024-07-13 20:14:22'),
(473, '2024-07-14', '40.77.167.235', 'Google Chrome', 1, '2024-07-14 02:05:01', '2024-07-14 02:05:01'),
(474, '2024-07-14', '207.46.13.127', 'Google Chrome', 1, '2024-07-14 02:29:03', '2024-07-14 02:29:03'),
(475, '2024-07-14', '181.214.173.86', 'Google Chrome', 2, '2024-07-14 02:37:48', '2024-07-14 02:37:52'),
(476, '2024-07-14', '171.79.9.106', 'Mozilla Firefox', 2, '2024-07-14 11:02:05', '2024-07-14 11:02:12'),
(477, '2024-07-14', '51.222.253.8', 'Unknown', 1, '2024-07-14 11:40:05', '2024-07-14 11:40:05'),
(478, '2024-07-14', '34.208.234.14', 'Google Chrome', 1, '2024-07-14 12:09:20', '2024-07-14 12:09:20'),
(479, '2024-07-14', '35.91.8.16', 'Google Chrome', 1, '2024-07-14 12:09:32', '2024-07-14 12:09:32'),
(480, '2024-07-14', '42.236.12.195', 'Google Chrome', 1, '2024-07-14 14:36:00', '2024-07-14 14:36:00'),
(481, '2024-07-14', '42.236.12.229', 'Google Chrome', 1, '2024-07-14 14:52:04', '2024-07-14 14:52:04'),
(482, '2024-07-14', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-14 15:02:17', '2024-07-14 15:02:17'),
(483, '2024-07-15', '157.245.81.99', 'Google Chrome', 1, '2024-07-15 00:20:46', '2024-07-15 00:20:46'),
(484, '2024-07-15', '128.90.170.18', 'Mozilla Firefox', 1, '2024-07-15 07:05:48', '2024-07-15 07:05:48'),
(485, '2024-07-15', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-15 15:02:17', '2024-07-15 15:02:17'),
(486, '2024-07-15', '44.234.115.64', 'Unknown', 1, '2024-07-15 15:41:03', '2024-07-15 15:41:03'),
(487, '2024-07-16', '157.55.39.205', 'Google Chrome', 1, '2024-07-15 16:34:02', '2024-07-15 16:34:02'),
(488, '2024-07-16', '51.222.253.2', 'Unknown', 2, '2024-07-15 17:11:32', '2024-07-16 03:23:09'),
(489, '2024-07-16', '123.187.240.242', 'Apple Safari', 1, '2024-07-15 18:50:53', '2024-07-15 18:50:53'),
(490, '2024-07-16', '51.222.253.4', 'Unknown', 1, '2024-07-15 20:23:32', '2024-07-15 20:23:32'),
(491, '2024-07-16', '157.55.39.200', 'Google Chrome', 1, '2024-07-15 21:54:16', '2024-07-15 21:54:16'),
(492, '2024-07-16', '51.222.253.10', 'Unknown', 1, '2024-07-16 05:46:29', '2024-07-16 05:46:29'),
(493, '2024-07-16', '170.106.82.193', 'Apple Safari', 1, '2024-07-16 07:10:26', '2024-07-16 07:10:26'),
(494, '2024-07-16', '122.3.117.64', 'Google Chrome', 1, '2024-07-16 07:39:21', '2024-07-16 07:39:21'),
(495, '2024-07-16', '37.19.223.225', 'Google Chrome', 2, '2024-07-16 08:17:31', '2024-07-16 08:17:33');
INSERT INTO `website_users` (`id`, `date`, `ip_address`, `browser`, `page_views`, `created_at`, `updated_at`) VALUES
(496, '2024-07-16', '54.149.189.152', 'Google Chrome', 1, '2024-07-16 10:35:56', '2024-07-16 10:35:56'),
(497, '2024-07-16', '54.36.148.51', 'Unknown', 1, '2024-07-16 11:03:52', '2024-07-16 11:03:52'),
(498, '2024-07-16', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-16 15:02:16', '2024-07-16 15:02:16'),
(499, '2024-07-17', '34.0.212.197', 'Google Chrome', 2, '2024-07-16 16:44:59', '2024-07-16 16:45:06'),
(500, '2024-07-17', '34.79.172.58', 'Mozilla Firefox', 1, '2024-07-16 17:33:22', '2024-07-16 17:33:22'),
(501, '2024-07-17', '54.36.148.110', 'Unknown', 1, '2024-07-16 19:01:47', '2024-07-16 19:01:47'),
(502, '2024-07-17', '103.56.5.159', 'Google Chrome', 2, '2024-07-16 22:50:35', '2024-07-16 22:50:35'),
(503, '2024-07-17', '5.133.192.140', 'Google Chrome', 1, '2024-07-16 23:51:03', '2024-07-16 23:51:03'),
(504, '2024-07-17', '143.198.237.219', 'Google Chrome', 1, '2024-07-17 00:48:25', '2024-07-17 00:48:25'),
(505, '2024-07-17', '54.36.148.37', 'Unknown', 1, '2024-07-17 03:56:06', '2024-07-17 03:56:06'),
(506, '2024-07-17', '15.235.50.228', 'Google Chrome', 1, '2024-07-17 06:23:49', '2024-07-17 06:23:49'),
(507, '2024-07-17', '43.130.62.164', 'Apple Safari', 1, '2024-07-17 07:17:36', '2024-07-17 07:17:36'),
(508, '2024-07-17', '137.226.113.44', 'Unknown', 2, '2024-07-17 07:44:44', '2024-07-17 07:44:45'),
(509, '2024-07-17', '51.222.253.18', 'Unknown', 1, '2024-07-17 09:13:36', '2024-07-17 09:13:36'),
(510, '2024-07-17', '45.94.31.93', 'Google Chrome', 1, '2024-07-17 09:29:08', '2024-07-17 09:29:08'),
(511, '2024-07-17', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-17 15:02:18', '2024-07-17 15:02:18'),
(512, '2024-07-18', '135.148.195.3', 'Google Chrome', 1, '2024-07-17 16:54:42', '2024-07-17 16:54:42'),
(513, '2024-07-18', '46.17.174.172', 'Mozilla Firefox', 1, '2024-07-17 19:20:11', '2024-07-17 19:20:11'),
(514, '2024-07-18', '129.226.158.26', 'Apple Safari', 1, '2024-07-17 20:29:16', '2024-07-17 20:29:16'),
(515, '2024-07-18', '2a06:4880:b000::d5', 'Unknown', 1, '2024-07-17 21:57:58', '2024-07-17 21:57:58'),
(516, '2024-07-18', '2a06:4880:3000::3a', 'Unknown', 1, '2024-07-18 04:23:13', '2024-07-18 04:23:13'),
(517, '2024-07-18', '42.83.147.54', 'Google Chrome', 1, '2024-07-18 04:58:01', '2024-07-18 04:58:01'),
(518, '2024-07-18', '54.36.149.58', 'Unknown', 1, '2024-07-18 05:23:31', '2024-07-18 05:23:31'),
(519, '2024-07-18', '157.55.39.201', 'Google Chrome', 1, '2024-07-18 05:55:16', '2024-07-18 05:55:16'),
(520, '2024-07-18', '54.36.148.215', 'Unknown', 1, '2024-07-18 10:18:45', '2024-07-18 10:18:45'),
(521, '2024-07-18', '110.166.71.39', 'Apple Safari', 1, '2024-07-18 10:35:43', '2024-07-18 10:35:43'),
(522, '2024-07-18', '51.222.253.1', 'Unknown', 1, '2024-07-18 12:33:39', '2024-07-18 12:33:39'),
(523, '2024-07-18', '51.222.253.12', 'Unknown', 1, '2024-07-18 14:17:49', '2024-07-18 14:17:49'),
(524, '2024-07-18', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-18 15:02:17', '2024-07-18 15:02:17'),
(525, '2024-07-19', '186.179.59.240', 'Unknown', 1, '2024-07-18 17:56:12', '2024-07-18 17:56:12'),
(526, '2024-07-19', '3.88.114.12', 'Google Chrome', 1, '2024-07-18 17:56:20', '2024-07-18 17:56:20'),
(527, '2024-07-19', '43.133.77.230', 'Apple Safari', 1, '2024-07-18 21:25:46', '2024-07-18 21:25:46'),
(528, '2024-07-19', '157.55.39.6', 'Google Chrome', 1, '2024-07-18 21:37:28', '2024-07-18 21:37:28'),
(529, '2024-07-19', '209.127.111.186', 'Google Chrome', 1, '2024-07-18 22:22:53', '2024-07-18 22:22:53'),
(530, '2024-07-19', '209.127.110.62', 'Unknown', 1, '2024-07-19 00:34:37', '2024-07-19 00:34:37'),
(531, '2024-07-19', '3.92.88.179', 'Google Chrome', 1, '2024-07-19 00:34:46', '2024-07-19 00:34:46'),
(532, '2024-07-19', '64.23.174.213', 'Google Chrome', 1, '2024-07-19 01:15:29', '2024-07-19 01:15:29'),
(533, '2024-07-19', '42.236.101.248', 'Google Chrome', 1, '2024-07-19 02:19:11', '2024-07-19 02:19:11'),
(534, '2024-07-19', '42.236.17.86', 'Google Chrome', 1, '2024-07-19 05:05:53', '2024-07-19 05:05:53'),
(535, '2024-07-19', '2a06:4880:7000::7e', 'Unknown', 1, '2024-07-19 09:52:17', '2024-07-19 09:52:17'),
(536, '2024-07-19', '46.17.174.192', 'Google Chrome', 1, '2024-07-19 12:46:58', '2024-07-19 12:46:58'),
(537, '2024-07-19', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-19 15:02:17', '2024-07-19 15:02:17'),
(538, '2024-07-20', '66.249.70.194', 'Google Chrome', 1, '2024-07-19 23:06:04', '2024-07-19 23:06:04'),
(539, '2024-07-20', '66.249.70.193', 'Google Chrome', 2, '2024-07-19 23:07:07', '2024-07-20 09:55:37'),
(540, '2024-07-20', '66.249.70.195', 'Unknown', 1, '2024-07-19 23:09:32', '2024-07-19 23:09:32'),
(541, '2024-07-20', '52.167.144.215', 'Google Chrome', 1, '2024-07-19 23:17:18', '2024-07-19 23:17:18'),
(542, '2024-07-20', '66.249.70.198', 'Google Chrome', 1, '2024-07-20 00:10:53', '2024-07-20 00:10:53'),
(543, '2024-07-20', '38.154.186.48', 'Unknown', 1, '2024-07-20 08:46:56', '2024-07-20 08:46:56'),
(544, '2024-07-20', '54.242.32.251', 'Google Chrome', 1, '2024-07-20 08:47:08', '2024-07-20 08:47:08'),
(545, '2024-07-20', '2a02:247a:26d:1000::1', 'Google Chrome', 1, '2024-07-20 08:52:33', '2024-07-20 08:52:33'),
(546, '2024-07-20', '54.149.167.235', 'Google Chrome', 1, '2024-07-20 10:50:22', '2024-07-20 10:50:22'),
(547, '2024-07-20', '34.217.51.227', 'Google Chrome', 1, '2024-07-20 10:50:22', '2024-07-20 10:50:22'),
(548, '2024-07-20', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-20 15:02:17', '2024-07-20 15:02:17'),
(549, '2024-07-20', '37.19.223.236', 'Google Chrome', 2, '2024-07-20 15:27:23', '2024-07-20 15:27:30'),
(550, '2024-07-21', '51.222.253.4', 'Unknown', 1, '2024-07-20 16:29:17', '2024-07-20 16:29:17'),
(551, '2024-07-21', '43.131.62.4', 'Apple Safari', 1, '2024-07-20 18:08:05', '2024-07-20 18:08:05'),
(552, '2024-07-21', '68.183.91.66', 'Google Chrome', 1, '2024-07-21 02:25:22', '2024-07-21 02:25:22'),
(553, '2024-07-21', '205.169.39.18', 'Google Chrome', 1, '2024-07-21 06:02:49', '2024-07-21 06:02:49'),
(554, '2024-07-21', '205.169.39.2', 'Google Chrome', 1, '2024-07-21 06:20:43', '2024-07-21 06:20:43'),
(555, '2024-07-21', '43.135.129.233', 'Apple Safari', 1, '2024-07-21 07:05:05', '2024-07-21 07:05:05'),
(556, '2024-07-21', '51.222.253.2', 'Unknown', 1, '2024-07-21 11:36:52', '2024-07-21 11:36:52'),
(557, '2024-07-22', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-21 20:19:58', '2024-07-21 20:19:58'),
(558, '2024-07-22', '42.236.17.211', 'Google Chrome', 1, '2024-07-21 23:33:16', '2024-07-21 23:33:16'),
(559, '2024-07-22', '42.236.12.220', 'Google Chrome', 1, '2024-07-21 23:33:53', '2024-07-21 23:33:53'),
(560, '2024-07-22', '18.237.7.19', 'Apple Safari', 1, '2024-07-22 00:43:24', '2024-07-22 00:43:24'),
(561, '2024-07-22', '54.149.142.232', 'Apple Safari', 1, '2024-07-22 00:54:43', '2024-07-22 00:54:43'),
(562, '2024-07-22', '42.236.17.21', 'Google Chrome', 1, '2024-07-22 03:37:50', '2024-07-22 03:37:50'),
(563, '2024-07-22', '2001:4860:7:40c::f5', 'Google Chrome', 1, '2024-07-22 05:37:22', '2024-07-22 05:37:22'),
(564, '2024-07-22', '159.203.142.122', 'Google Chrome', 1, '2024-07-22 06:30:11', '2024-07-22 06:30:11'),
(565, '2024-07-22', '93.158.90.43', 'Mozilla Firefox', 1, '2024-07-22 09:06:53', '2024-07-22 09:06:53'),
(566, '2024-07-22', '2604:2dc0:100:55dd::', 'Google Chrome', 1, '2024-07-22 13:07:46', '2024-07-22 13:07:46'),
(567, '2024-07-22', '2604:2dc0:100:55dd::', 'Google Chrome', 1, '2024-07-22 13:07:46', '2024-07-22 13:07:46'),
(568, '2024-07-22', '51.222.253.19', 'Unknown', 1, '2024-07-22 15:10:56', '2024-07-22 15:10:56'),
(569, '2024-07-23', '45.61.91.47', 'Google Chrome', 1, '2024-07-22 19:01:58', '2024-07-22 19:01:58'),
(570, '2024-07-23', '209.147.81.149', 'Apple Safari', 1, '2024-07-22 19:02:00', '2024-07-22 19:02:00'),
(571, '2024-07-23', '209.147.81.151', 'Apple Safari', 1, '2024-07-22 19:02:00', '2024-07-22 19:02:00'),
(572, '2024-07-23', '134.73.19.229', 'Google Chrome', 1, '2024-07-22 19:02:01', '2024-07-22 19:02:01'),
(573, '2024-07-23', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-22 20:19:59', '2024-07-22 20:19:59'),
(574, '2024-07-23', '2604:2dc0:100:4f07::', 'Google Chrome', 14, '2024-07-22 20:47:27', '2024-07-22 21:20:36'),
(575, '2024-07-23', '2604:2dc0:100:55dd::', 'Google Chrome', 2, '2024-07-22 20:54:01', '2024-07-22 20:54:01'),
(576, '2024-07-23', '93.158.91.13', 'Google Chrome', 1, '2024-07-23 00:05:45', '2024-07-23 00:05:45'),
(577, '2024-07-23', '51.222.253.20', 'Unknown', 1, '2024-07-23 00:36:20', '2024-07-23 00:36:20'),
(578, '2024-07-23', '165.232.105.76', 'Google Chrome', 1, '2024-07-23 01:18:10', '2024-07-23 01:18:10'),
(579, '2024-07-23', '85.208.96.212', 'Unknown', 1, '2024-07-23 03:35:57', '2024-07-23 03:35:57'),
(580, '2024-07-23', '51.222.253.15', 'Unknown', 1, '2024-07-23 05:18:44', '2024-07-23 05:18:44'),
(581, '2024-07-23', '185.191.171.17', 'Unknown', 1, '2024-07-23 06:09:13', '2024-07-23 06:09:13'),
(582, '2024-07-23', '61.133.66.39', 'Google Chrome', 1, '2024-07-23 07:59:11', '2024-07-23 07:59:11'),
(583, '2024-07-23', '27.115.124.38', 'Google Chrome', 1, '2024-07-23 07:59:38', '2024-07-23 07:59:38'),
(584, '2024-07-23', '27.115.124.70', 'Google Chrome', 1, '2024-07-23 07:59:38', '2024-07-23 07:59:38'),
(585, '2024-07-23', '2001:4860:7:601::fd', 'Google Chrome', 1, '2024-07-23 15:09:34', '2024-07-23 15:09:34'),
(586, '2024-07-24', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-23 20:20:01', '2024-07-23 20:20:01'),
(587, '2024-07-24', '148.251.11.147', 'Unknown', 14, '2024-07-23 23:16:35', '2024-07-24 00:25:58'),
(588, '2024-07-24', '137.226.113.44', 'Unknown', 2, '2024-07-24 07:44:36', '2024-07-24 07:44:37'),
(589, '2024-07-24', '159.223.195.110', 'Google Chrome', 1, '2024-07-24 08:32:05', '2024-07-24 08:32:05'),
(590, '2024-07-24', '64.226.105.182', 'Google Chrome', 1, '2024-07-24 08:52:06', '2024-07-24 08:52:06'),
(591, '2024-07-24', '34.222.68.210', 'Google Chrome', 1, '2024-07-24 10:25:07', '2024-07-24 10:25:07'),
(592, '2024-07-24', '34.211.29.39', 'Google Chrome', 1, '2024-07-24 10:25:08', '2024-07-24 10:25:08'),
(593, '2024-07-24', '207.46.13.155', 'Google Chrome', 1, '2024-07-24 10:43:58', '2024-07-24 10:43:58'),
(594, '2024-07-24', '51.222.253.20', 'Unknown', 1, '2024-07-24 11:06:48', '2024-07-24 11:06:48'),
(595, '2024-07-24', '219.140.42.137', 'Google Chrome', 1, '2024-07-24 14:46:03', '2024-07-24 14:46:03'),
(596, '2024-07-24', '123.6.49.44', 'Google Chrome', 1, '2024-07-24 15:48:47', '2024-07-24 15:48:47'),
(597, '2024-07-24', '27.115.124.118', 'Google Chrome', 1, '2024-07-24 15:48:50', '2024-07-24 15:48:50'),
(598, '2024-07-24', '106.63.26.28', 'Apple Safari', 1, '2024-07-24 15:48:51', '2024-07-24 15:48:51'),
(599, '2024-07-24', '27.115.124.38', 'Google Chrome', 1, '2024-07-24 15:49:02', '2024-07-24 15:49:02'),
(600, '2024-07-24', '43.130.31.48', 'Apple Safari', 1, '2024-07-24 15:56:11', '2024-07-24 15:56:11'),
(601, '2024-07-25', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-24 20:19:58', '2024-07-24 20:19:58'),
(602, '2024-07-25', '142.93.245.75', 'Google Chrome', 1, '2024-07-25 00:47:03', '2024-07-25 00:47:03'),
(603, '2024-07-25', '66.249.79.170', 'Unknown', 1, '2024-07-25 01:15:14', '2024-07-25 01:15:14'),
(604, '2024-07-25', '66.249.79.169', 'Google Chrome', 1, '2024-07-25 01:20:17', '2024-07-25 01:20:17'),
(605, '2024-07-25', '51.222.253.4', 'Unknown', 1, '2024-07-25 02:16:37', '2024-07-25 02:16:37'),
(606, '2024-07-25', '193.46.243.66', 'Unknown', 1, '2024-07-25 04:06:49', '2024-07-25 04:06:49'),
(607, '2024-07-25', '152.32.140.198', 'Google Chrome', 2, '2024-07-25 05:57:45', '2024-07-25 05:58:43'),
(608, '2024-07-26', '42.236.12.241', 'Google Chrome', 1, '2024-07-25 18:52:37', '2024-07-25 18:52:37'),
(609, '2024-07-26', '37.19.223.29', 'Google Chrome', 2, '2024-07-25 18:55:07', '2024-07-25 18:55:14'),
(610, '2024-07-26', '42.236.101.211', 'Google Chrome', 1, '2024-07-25 19:45:33', '2024-07-25 19:45:33'),
(611, '2024-07-26', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-25 20:19:59', '2024-07-25 20:19:59'),
(612, '2024-07-26', '165.154.20.152', 'Google Chrome', 15, '2024-07-26 00:31:24', '2024-07-26 00:31:51'),
(613, '2024-07-26', '165.154.20.152', 'Unknown', 4, '2024-07-26 00:31:24', '2024-07-26 00:31:36'),
(614, '2024-07-26', '110.248.19.222', 'Google Chrome', 1, '2024-07-26 00:37:32', '2024-07-26 00:37:32'),
(615, '2024-07-26', '88.198.45.216', 'Google Chrome', 2, '2024-07-26 02:28:02', '2024-07-26 02:28:03'),
(616, '2024-07-26', '207.46.13.107', 'Google Chrome', 1, '2024-07-26 05:54:00', '2024-07-26 05:54:00'),
(617, '2024-07-26', '138.246.253.15', 'Unknown', 1, '2024-07-26 06:45:23', '2024-07-26 06:45:23'),
(618, '2024-07-26', '45.138.16.142', 'Apple Safari', 1, '2024-07-26 10:09:10', '2024-07-26 10:09:10'),
(619, '2024-07-26', '170.106.82.193', 'Apple Safari', 1, '2024-07-26 10:24:18', '2024-07-26 10:24:18'),
(620, '2024-07-26', '46.17.174.172', 'Mozilla Firefox', 1, '2024-07-26 10:28:40', '2024-07-26 10:28:40'),
(621, '2024-07-27', '54.36.148.247', 'Unknown', 1, '2024-07-26 16:18:30', '2024-07-26 16:18:30'),
(622, '2024-07-27', '54.36.148.163', 'Unknown', 1, '2024-07-26 18:25:21', '2024-07-26 18:25:21'),
(623, '2024-07-27', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-26 20:19:58', '2024-07-26 20:19:58'),
(624, '2024-07-27', '2409:8a00:1ad1:53d0:6d68:3f8:bdab:518e', 'Unknown', 1, '2024-07-26 20:56:54', '2024-07-26 20:56:54'),
(625, '2024-07-27', '58.211.23.183', 'Mozilla Firefox', 1, '2024-07-26 23:14:50', '2024-07-26 23:14:50'),
(626, '2024-07-27', '121.237.36.27', 'Apple Safari', 1, '2024-07-26 23:20:26', '2024-07-26 23:20:26'),
(627, '2024-07-27', '121.237.36.28', 'Google Chrome', 1, '2024-07-26 23:23:48', '2024-07-26 23:23:48'),
(628, '2024-07-27', '51.222.253.18', 'Unknown', 1, '2024-07-26 23:25:41', '2024-07-26 23:25:41'),
(629, '2024-07-27', '54.36.149.56', 'Unknown', 1, '2024-07-27 00:01:13', '2024-07-27 00:01:13'),
(630, '2024-07-27', '58.211.23.183', 'Unknown', 1, '2024-07-27 00:01:56', '2024-07-27 00:01:56'),
(631, '2024-07-27', '58.211.23.183', 'Google Chrome', 1, '2024-07-27 00:02:48', '2024-07-27 00:02:48'),
(632, '2024-07-27', '45.55.44.36', 'Google Chrome', 1, '2024-07-27 00:24:48', '2024-07-27 00:24:48'),
(633, '2024-07-27', '54.36.149.12', 'Unknown', 1, '2024-07-27 00:45:14', '2024-07-27 00:45:14'),
(634, '2024-07-27', '123.14.250.123', 'Internet Explorer', 1, '2024-07-27 01:01:36', '2024-07-27 01:01:36'),
(635, '2024-07-27', '34.217.34.129', 'Google Chrome', 1, '2024-07-27 01:35:31', '2024-07-27 01:35:31'),
(636, '2024-07-27', '54.36.148.110', 'Unknown', 1, '2024-07-27 01:38:02', '2024-07-27 01:38:02'),
(637, '2024-07-27', '54.202.141.99', 'Google Chrome', 1, '2024-07-27 01:48:15', '2024-07-27 01:48:15'),
(638, '2024-07-27', '46.4.33.48', 'Unknown', 1, '2024-07-27 02:24:07', '2024-07-27 02:24:07'),
(639, '2024-07-27', '54.36.149.31', 'Unknown', 1, '2024-07-27 02:25:34', '2024-07-27 02:25:34'),
(640, '2024-07-27', '54.36.149.78', 'Unknown', 1, '2024-07-27 06:36:04', '2024-07-27 06:36:04'),
(641, '2024-07-27', '125.75.66.97', 'Apple Safari', 1, '2024-07-27 09:11:27', '2024-07-27 09:11:27'),
(642, '2024-07-27', '2001:4ba0:cafe:b2c::1', 'Google Chrome', 1, '2024-07-27 14:34:03', '2024-07-27 14:34:03'),
(643, '2024-07-27', '93.100.159.142', 'Google Chrome', 2, '2024-07-27 15:56:10', '2024-07-27 15:56:15'),
(644, '2024-07-28', '2001:4ca0:108:42::15', 'Unknown', 1, '2024-07-27 19:07:54', '2024-07-27 19:07:54'),
(645, '2024-07-28', '2a02:4780:6:c0de::10', 'Unknown', 2, '2024-07-27 20:19:58', '2024-07-28 13:54:48'),
(646, '2024-07-28', '51.222.253.18', 'Unknown', 1, '2024-07-27 21:29:53', '2024-07-27 21:29:53'),
(647, '2024-07-28', '192.36.109.90', 'Apple Safari', 1, '2024-07-27 22:28:58', '2024-07-27 22:28:58'),
(648, '2024-07-28', '51.222.253.15', 'Unknown', 1, '2024-07-27 23:03:22', '2024-07-27 23:03:22'),
(649, '2024-07-28', '110.53.47.6', 'Google Chrome', 1, '2024-07-28 02:30:32', '2024-07-28 02:30:32'),
(650, '2024-07-28', '51.222.253.6', 'Unknown', 1, '2024-07-28 04:21:56', '2024-07-28 04:21:56'),
(651, '2024-07-28', '199.244.88.218', 'Google Chrome', 1, '2024-07-28 05:20:51', '2024-07-28 05:20:51'),
(652, '2024-07-28', '51.222.253.4', 'Unknown', 1, '2024-07-28 06:05:24', '2024-07-28 06:05:24'),
(653, '2024-07-28', '51.15.183.136', 'Mozilla Firefox', 1, '2024-07-28 06:31:38', '2024-07-28 06:31:38'),
(654, '2024-07-28', '51.222.253.11', 'Unknown', 1, '2024-07-28 07:53:32', '2024-07-28 07:53:32'),
(655, '2024-07-28', '54.36.148.99', 'Unknown', 1, '2024-07-28 11:07:36', '2024-07-28 11:07:36'),
(656, '2024-07-28', '54.213.236.8', 'Apple Safari', 1, '2024-07-28 11:38:07', '2024-07-28 11:38:07'),
(657, '2024-07-28', '52.39.95.163', 'Apple Safari', 1, '2024-07-28 12:26:49', '2024-07-28 12:26:49'),
(658, '2024-07-28', '2a06:4880:7000::7f', 'Unknown', 1, '2024-07-28 14:42:49', '2024-07-28 14:42:49'),
(659, '2024-07-28', '42.236.17.41', 'Google Chrome', 1, '2024-07-28 15:26:34', '2024-07-28 15:26:34'),
(660, '2024-07-28', '42.236.17.31', 'Google Chrome', 1, '2024-07-28 15:38:15', '2024-07-28 15:38:15'),
(661, '2024-07-29', '42.236.17.7', 'Google Chrome', 1, '2024-07-28 16:21:50', '2024-07-28 16:21:50'),
(662, '2024-07-29', '42.236.17.119', 'Google Chrome', 1, '2024-07-28 16:21:56', '2024-07-28 16:21:56'),
(663, '2024-07-29', '106.119.167.146', 'Apple Safari', 1, '2024-07-28 20:20:08', '2024-07-28 20:20:08'),
(664, '2024-07-29', '5.133.192.105', 'Google Chrome', 1, '2024-07-29 00:16:55', '2024-07-29 00:16:55'),
(665, '2024-07-29', '164.90.160.182', 'Google Chrome', 1, '2024-07-29 01:20:30', '2024-07-29 01:20:30'),
(666, '2024-07-29', '54.36.148.212', 'Unknown', 1, '2024-07-29 01:41:12', '2024-07-29 01:41:12'),
(667, '2024-07-29', '54.36.148.192', 'Unknown', 1, '2024-07-29 03:49:13', '2024-07-29 03:49:13'),
(668, '2024-07-29', '42.226.254.126', 'Google Chrome', 1, '2024-07-29 04:18:39', '2024-07-29 04:18:39'),
(669, '2024-07-29', '43.153.110.177', 'Apple Safari', 1, '2024-07-29 06:42:18', '2024-07-29 06:42:18'),
(670, '2024-07-29', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-29 13:54:49', '2024-07-29 13:54:49'),
(671, '2024-07-29', '138.199.30.27', 'Google Chrome', 2, '2024-07-29 15:43:34', '2024-07-29 15:43:41'),
(672, '2024-07-30', '180.102.134.69', 'Apple Safari', 1, '2024-07-29 19:01:11', '2024-07-29 19:01:11'),
(673, '2024-07-30', '78.111.102.76', 'Google Chrome', 2, '2024-07-30 01:36:03', '2024-07-30 01:36:04'),
(674, '2024-07-30', '2607:5300:60:7e27::1', 'Google Chrome', 1, '2024-07-30 02:45:37', '2024-07-30 02:45:37'),
(675, '2024-07-30', '15.235.114.125', 'Unknown', 1, '2024-07-30 07:10:08', '2024-07-30 07:10:08'),
(676, '2024-07-30', '54.36.149.77', 'Unknown', 1, '2024-07-30 08:31:35', '2024-07-30 08:31:35'),
(677, '2024-07-30', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-30 13:54:48', '2024-07-30 13:54:48'),
(678, '2024-07-31', '42.83.147.53', 'Google Chrome', 1, '2024-07-30 19:23:13', '2024-07-30 19:23:13'),
(679, '2024-07-31', '123.160.223.73', 'Google Chrome', 1, '2024-07-30 20:51:03', '2024-07-30 20:51:03'),
(680, '2024-07-31', '123.160.223.74', 'Google Chrome', 1, '2024-07-30 20:51:07', '2024-07-30 20:51:07'),
(681, '2024-07-31', '128.199.10.177', 'Google Chrome', 1, '2024-07-31 00:55:53', '2024-07-31 00:55:53'),
(682, '2024-07-31', '131.226.109.30', 'Google Chrome', 1, '2024-07-31 02:23:31', '2024-07-31 02:23:31'),
(683, '2024-07-31', '35.161.230.174', 'Google Chrome', 1, '2024-07-31 02:56:40', '2024-07-31 02:56:40'),
(684, '2024-07-31', '35.171.144.152', 'Google Chrome', 1, '2024-07-31 03:01:30', '2024-07-31 03:01:30'),
(685, '2024-07-31', '35.93.206.212', 'Google Chrome', 1, '2024-07-31 03:12:08', '2024-07-31 03:12:08'),
(686, '2024-07-31', '54.36.148.167', 'Unknown', 1, '2024-07-31 05:59:06', '2024-07-31 05:59:06'),
(687, '2024-07-31', '137.226.113.44', 'Unknown', 2, '2024-07-31 07:43:59', '2024-07-31 07:44:00'),
(688, '2024-07-31', '111.7.106.105', 'Google Chrome', 1, '2024-07-31 07:45:12', '2024-07-31 07:45:12'),
(689, '2024-07-31', '111.7.106.104', 'Google Chrome', 1, '2024-07-31 07:45:14', '2024-07-31 07:45:14'),
(690, '2024-07-31', '54.36.148.120', 'Unknown', 1, '2024-07-31 10:27:28', '2024-07-31 10:27:28'),
(691, '2024-07-31', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-07-31 13:54:50', '2024-07-31 13:54:50'),
(692, '2024-07-31', '128.90.170.18', 'Mozilla Firefox', 1, '2024-07-31 15:20:31', '2024-07-31 15:20:31'),
(693, '2024-08-01', '135.148.195.1', 'Google Chrome', 1, '2024-07-31 16:32:27', '2024-07-31 16:32:27'),
(694, '2024-08-01', '66.249.79.196', 'Google Chrome', 1, '2024-07-31 20:50:01', '2024-07-31 20:50:01'),
(695, '2024-08-01', '66.249.79.193', 'Unknown', 1, '2024-07-31 20:51:27', '2024-07-31 20:51:27'),
(696, '2024-08-01', '66.249.79.197', 'Unknown', 1, '2024-07-31 20:52:35', '2024-07-31 20:52:35'),
(697, '2024-08-01', '66.249.79.197', 'Google Chrome', 1, '2024-07-31 20:54:01', '2024-07-31 20:54:01'),
(698, '2024-08-01', '101.36.106.78', 'Google Chrome', 2, '2024-08-01 02:12:48', '2024-08-01 02:13:45'),
(699, '2024-08-01', '66.249.79.169', 'Google Chrome', 1, '2024-08-01 02:46:38', '2024-08-01 02:46:38'),
(700, '2024-08-01', '1.193.169.17', 'Google Chrome', 1, '2024-08-01 05:08:19', '2024-08-01 05:08:19'),
(701, '2024-08-01', '18.222.252.142', 'Unknown', 1, '2024-08-01 08:37:54', '2024-08-01 08:37:54'),
(702, '2024-08-01', '34.221.7.251', 'Google Chrome', 1, '2024-08-01 10:56:51', '2024-08-01 10:56:51'),
(703, '2024-08-01', '35.92.198.249', 'Google Chrome', 1, '2024-08-01 10:56:52', '2024-08-01 10:56:52'),
(704, '2024-08-01', '35.162.198.87', 'Google Chrome', 1, '2024-08-01 10:56:54', '2024-08-01 10:56:54'),
(705, '2024-08-01', '42.236.12.227', 'Google Chrome', 1, '2024-08-01 13:20:07', '2024-08-01 13:20:07'),
(706, '2024-08-01', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-01 13:54:48', '2024-08-01 13:54:48'),
(707, '2024-08-01', '42.236.12.213', 'Google Chrome', 1, '2024-08-01 14:28:12', '2024-08-01 14:28:12'),
(708, '2024-08-01', '42.236.12.245', 'Google Chrome', 1, '2024-08-01 14:58:46', '2024-08-01 14:58:46'),
(709, '2024-08-01', '42.236.17.34', 'Google Chrome', 1, '2024-08-01 15:44:12', '2024-08-01 15:44:12'),
(710, '2024-08-01', '54.36.148.19', 'Unknown', 1, '2024-08-01 15:51:10', '2024-08-01 15:51:10'),
(711, '2024-08-02', '184.154.76.20', 'Internet Explorer', 3, '2024-08-01 19:42:29', '2024-08-01 19:45:32'),
(712, '2024-08-02', '184.154.76.20', 'Unknown', 11, '2024-08-01 19:42:41', '2024-08-01 19:45:46'),
(713, '2024-08-02', '54.148.7.185', 'Google Chrome', 1, '2024-08-01 21:18:18', '2024-08-01 21:18:18'),
(714, '2024-08-02', '54.202.178.210', 'Google Chrome', 1, '2024-08-01 21:26:22', '2024-08-01 21:26:22'),
(715, '2024-08-02', '46.17.174.172', 'Mozilla Firefox', 1, '2024-08-02 00:30:59', '2024-08-02 00:30:59'),
(716, '2024-08-02', '8.41.221.58', 'Mozilla Firefox', 2, '2024-08-02 02:27:22', '2024-08-02 02:27:25'),
(717, '2024-08-02', '43.133.77.230', 'Apple Safari', 1, '2024-08-02 03:06:33', '2024-08-02 03:06:33'),
(718, '2024-08-02', '54.36.148.20', 'Unknown', 1, '2024-08-02 03:54:53', '2024-08-02 03:54:53'),
(719, '2024-08-02', '205.169.39.47', 'Google Chrome', 1, '2024-08-02 03:58:22', '2024-08-02 03:58:22'),
(720, '2024-08-02', '181.215.176.103', 'Google Chrome', 2, '2024-08-02 04:18:05', '2024-08-02 04:18:10'),
(721, '2024-08-02', '198.235.24.81', 'Unknown', 1, '2024-08-02 09:11:44', '2024-08-02 09:11:44'),
(722, '2024-08-02', '194.26.192.182', 'Google Chrome', 1, '2024-08-02 12:47:57', '2024-08-02 12:47:57'),
(723, '2024-08-02', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-02 13:54:48', '2024-08-02 13:54:48'),
(724, '2024-08-03', '52.167.144.138', 'Google Chrome', 1, '2024-08-02 16:11:57', '2024-08-02 16:11:57'),
(725, '2024-08-03', '128.90.157.1', 'Mozilla Firefox', 1, '2024-08-02 19:19:06', '2024-08-02 19:19:06'),
(726, '2024-08-03', '184.154.76.20', 'Internet Explorer', 1, '2024-08-02 19:33:22', '2024-08-02 19:33:22'),
(727, '2024-08-03', '54.36.148.33', 'Unknown', 1, '2024-08-02 20:42:59', '2024-08-02 20:42:59'),
(728, '2024-08-03', '2001:4ba0:cafe:b2c::1', 'Google Chrome', 1, '2024-08-03 00:19:30', '2024-08-03 00:19:30'),
(729, '2024-08-03', '51.222.253.16', 'Unknown', 1, '2024-08-03 00:37:16', '2024-08-03 00:37:16'),
(730, '2024-08-03', '43.134.37.211', 'Apple Safari', 1, '2024-08-03 01:34:15', '2024-08-03 01:34:15'),
(731, '2024-08-03', '51.222.253.7', 'Unknown', 1, '2024-08-03 03:09:38', '2024-08-03 03:09:38'),
(732, '2024-08-03', '40.77.167.136', 'Google Chrome', 1, '2024-08-03 06:11:24', '2024-08-03 06:11:24'),
(733, '2024-08-03', '43.130.3.122', 'Apple Safari', 1, '2024-08-03 09:14:14', '2024-08-03 09:14:14'),
(734, '2024-08-03', '54.36.148.93', 'Unknown', 1, '2024-08-03 09:31:48', '2024-08-03 09:31:48'),
(735, '2024-08-03', '54.189.142.173', 'Google Chrome', 1, '2024-08-03 12:51:09', '2024-08-03 12:51:09'),
(736, '2024-08-03', '54.149.74.186', 'Google Chrome', 1, '2024-08-03 12:51:10', '2024-08-03 12:51:10'),
(737, '2024-08-03', '111.172.4.102', 'Google Chrome', 2, '2024-08-03 13:54:42', '2024-08-03 13:54:52'),
(738, '2024-08-03', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-03 13:54:48', '2024-08-03 13:54:48'),
(739, '2024-08-04', '49.51.36.179', 'Apple Safari', 1, '2024-08-03 17:07:00', '2024-08-03 17:07:00'),
(740, '2024-08-04', '45.94.31.237', 'Google Chrome', 1, '2024-08-03 17:20:53', '2024-08-03 17:20:53'),
(741, '2024-08-04', '194.32.122.63', 'Google Chrome', 2, '2024-08-03 17:45:27', '2024-08-03 17:45:33'),
(742, '2024-08-04', '184.154.76.20', 'Internet Explorer', 2, '2024-08-03 19:27:30', '2024-08-03 19:27:36'),
(743, '2024-08-04', '184.154.76.20', 'Unknown', 2, '2024-08-03 19:27:44', '2024-08-03 19:27:48'),
(744, '2024-08-04', '54.36.148.74', 'Unknown', 1, '2024-08-03 20:13:11', '2024-08-03 20:13:11'),
(745, '2024-08-04', '51.222.253.5', 'Unknown', 1, '2024-08-03 21:58:20', '2024-08-03 21:58:20'),
(746, '2024-08-04', '5.133.192.88', 'Google Chrome', 1, '2024-08-04 00:44:37', '2024-08-04 00:44:37'),
(747, '2024-08-04', '157.230.99.5', 'Google Chrome', 1, '2024-08-04 01:07:06', '2024-08-04 01:07:06'),
(748, '2024-08-04', '51.222.253.18', 'Unknown', 1, '2024-08-04 04:10:00', '2024-08-04 04:10:00'),
(749, '2024-08-04', '54.36.149.41', 'Unknown', 1, '2024-08-04 07:16:43', '2024-08-04 07:16:43'),
(750, '2024-08-04', '120.239.44.91', 'Google Chrome', 1, '2024-08-04 09:15:34', '2024-08-04 09:15:34'),
(751, '2024-08-05', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-04 18:13:50', '2024-08-04 18:13:50'),
(752, '2024-08-05', '195.211.77.142', 'Google Chrome', 2, '2024-08-04 19:07:48', '2024-08-04 19:08:32'),
(753, '2024-08-05', '184.154.76.20', 'Internet Explorer', 1, '2024-08-04 20:05:57', '2024-08-04 20:05:57'),
(754, '2024-08-05', '184.154.76.20', 'Unknown', 1, '2024-08-04 20:06:05', '2024-08-04 20:06:05'),
(755, '2024-08-05', '42.236.12.196', 'Google Chrome', 1, '2024-08-04 21:40:08', '2024-08-04 21:40:08'),
(756, '2024-08-05', '42.236.17.70', 'Google Chrome', 1, '2024-08-04 21:40:18', '2024-08-04 21:40:18'),
(757, '2024-08-05', '129.226.146.179', 'Apple Safari', 1, '2024-08-04 23:10:33', '2024-08-04 23:10:33'),
(758, '2024-08-05', '42.236.101.248', 'Google Chrome', 1, '2024-08-04 23:46:51', '2024-08-04 23:46:51'),
(759, '2024-08-05', '42.236.101.215', 'Google Chrome', 1, '2024-08-05 02:13:33', '2024-08-05 02:13:33'),
(760, '2024-08-05', '2.60.65.150', 'Google Chrome', 1, '2024-08-05 03:54:17', '2024-08-05 03:54:17'),
(761, '2024-08-05', '54.36.148.22', 'Unknown', 1, '2024-08-05 04:19:01', '2024-08-05 04:19:01'),
(762, '2024-08-05', '194.32.122.59', 'Google Chrome', 2, '2024-08-05 05:21:25', '2024-08-05 05:21:31'),
(763, '2024-08-05', '43.159.140.136', 'Apple Safari', 1, '2024-08-05 07:02:22', '2024-08-05 07:02:22'),
(764, '2024-08-06', '66.249.72.134', 'Google Chrome', 1, '2024-08-05 16:35:24', '2024-08-05 16:35:24'),
(765, '2024-08-06', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-05 18:13:50', '2024-08-05 18:13:50'),
(766, '2024-08-06', '120.216.107.46', 'Google Chrome', 1, '2024-08-05 20:40:11', '2024-08-05 20:40:11'),
(767, '2024-08-06', '43.130.62.164', 'Apple Safari', 1, '2024-08-05 22:18:08', '2024-08-05 22:18:08'),
(768, '2024-08-06', '100.26.248.22', 'Google Chrome', 1, '2024-08-06 04:08:32', '2024-08-06 04:08:32'),
(769, '2024-08-06', '54.36.149.3', 'Unknown', 1, '2024-08-06 04:30:56', '2024-08-06 04:30:56'),
(770, '2024-08-06', '90.188.140.173', 'Google Chrome', 1, '2024-08-06 04:53:16', '2024-08-06 04:53:16'),
(771, '2024-08-06', '49.7.227.204', 'Apple Safari', 1, '2024-08-06 10:03:39', '2024-08-06 10:03:39'),
(772, '2024-08-06', '34.217.111.178', 'Apple Safari', 1, '2024-08-06 10:42:05', '2024-08-06 10:42:05'),
(773, '2024-08-06', '35.87.147.120', 'Apple Safari', 1, '2024-08-06 11:09:01', '2024-08-06 11:09:01'),
(774, '2024-08-07', '196.196.53.141', 'Google Chrome', 2, '2024-08-06 18:02:31', '2024-08-06 18:02:36'),
(775, '2024-08-07', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-06 18:13:51', '2024-08-06 18:13:51'),
(776, '2024-08-07', '54.36.149.80', 'Unknown', 1, '2024-08-06 20:10:00', '2024-08-06 20:10:00'),
(777, '2024-08-07', '49.51.204.74', 'Apple Safari', 1, '2024-08-06 20:50:02', '2024-08-06 20:50:02'),
(778, '2024-08-07', '66.249.70.198', 'Google Chrome', 1, '2024-08-06 21:00:17', '2024-08-06 21:00:17'),
(779, '2024-08-07', '106.119.167.146', 'Apple Safari', 1, '2024-08-06 21:42:01', '2024-08-06 21:42:01'),
(780, '2024-08-07', '165.227.83.45', 'Google Chrome', 1, '2024-08-07 04:56:13', '2024-08-07 04:56:13'),
(781, '2024-08-07', '137.226.113.44', 'Unknown', 2, '2024-08-07 07:44:22', '2024-08-07 07:44:23'),
(782, '2024-08-07', '54.36.149.104', 'Unknown', 1, '2024-08-07 09:14:00', '2024-08-07 09:14:00'),
(783, '2024-08-07', '159.203.98.206', 'Google Chrome', 1, '2024-08-07 09:59:20', '2024-08-07 09:59:20'),
(784, '2024-08-07', '54.174.127.79', 'Google Chrome', 1, '2024-08-07 10:13:02', '2024-08-07 10:13:02'),
(785, '2024-08-07', '165.231.182.34', 'Google Chrome', 2, '2024-08-07 14:36:05', '2024-08-07 14:36:11'),
(786, '2024-08-07', '2001:d08:d4:85c6:95bc:abb6:b068:44a6', 'Google Chrome', 2, '2024-08-07 15:32:20', '2024-08-07 15:32:26'),
(787, '2024-08-08', '46.17.174.172', 'Mozilla Firefox', 1, '2024-08-07 17:24:45', '2024-08-07 17:24:45'),
(788, '2024-08-08', '51.222.253.5', 'Unknown', 1, '2024-08-07 17:59:41', '2024-08-07 17:59:41'),
(789, '2024-08-08', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-07 18:13:50', '2024-08-07 18:13:50'),
(790, '2024-08-08', '37.19.223.212', 'Google Chrome', 2, '2024-08-07 18:56:17', '2024-08-07 18:56:19'),
(791, '2024-08-08', '2001:4860:7:40c::fe', 'Google Chrome', 1, '2024-08-07 20:24:34', '2024-08-07 20:24:34'),
(792, '2024-08-08', '79.173.88.142', 'Google Chrome', 1, '2024-08-07 20:47:51', '2024-08-07 20:47:51'),
(793, '2024-08-08', '39.154.23.97', 'Google Chrome', 1, '2024-08-07 23:56:21', '2024-08-07 23:56:21'),
(794, '2024-08-08', '51.222.253.2', 'Unknown', 1, '2024-08-08 00:02:53', '2024-08-08 00:02:53'),
(795, '2024-08-08', '209.38.76.112', 'Google Chrome', 1, '2024-08-08 02:13:51', '2024-08-08 02:13:51'),
(796, '2024-08-08', '89.110.88.203', 'Google Chrome', 2, '2024-08-08 03:07:40', '2024-08-08 03:07:45'),
(797, '2024-08-08', '124.236.100.56', 'Google Chrome', 2, '2024-08-08 05:04:02', '2024-08-08 05:04:25'),
(798, '2024-08-08', '93.158.90.69', 'Google Chrome', 1, '2024-08-08 08:13:52', '2024-08-08 08:13:52'),
(799, '2024-08-08', '185.191.171.2', 'Unknown', 1, '2024-08-08 08:19:23', '2024-08-08 08:19:23'),
(800, '2024-08-08', '2001:4860:7:505::f4', 'Google Chrome', 1, '2024-08-08 10:47:20', '2024-08-08 10:47:20'),
(801, '2024-08-08', '124.105.186.11', 'Apple Safari', 1, '2024-08-08 11:15:34', '2024-08-08 11:15:34'),
(802, '2024-08-08', '42.236.17.227', 'Google Chrome', 1, '2024-08-08 14:46:34', '2024-08-08 14:46:34'),
(803, '2024-08-08', '42.236.17.194', 'Google Chrome', 1, '2024-08-08 15:44:28', '2024-08-08 15:44:28'),
(804, '2024-08-09', '42.236.17.116', 'Google Chrome', 1, '2024-08-08 16:06:59', '2024-08-08 16:06:59'),
(805, '2024-08-09', '42.236.17.222', 'Google Chrome', 1, '2024-08-08 16:49:31', '2024-08-08 16:49:31'),
(806, '2024-08-09', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-08 18:13:51', '2024-08-08 18:13:51'),
(807, '2024-08-09', '3.253.241.141', 'Unknown', 1, '2024-08-08 20:32:04', '2024-08-08 20:32:04'),
(808, '2024-08-09', '54.36.148.179', 'Unknown', 1, '2024-08-08 21:21:14', '2024-08-08 21:21:14'),
(809, '2024-08-09', '20.15.133.185', 'Google Chrome', 1, '2024-08-08 21:52:42', '2024-08-08 21:52:42'),
(810, '2024-08-09', '34.247.33.188', 'Unknown', 1, '2024-08-08 22:16:52', '2024-08-08 22:16:52'),
(811, '2024-08-09', '194.32.122.64', 'Google Chrome', 2, '2024-08-09 01:12:31', '2024-08-09 01:12:38'),
(812, '2024-08-09', '112.204.122.68', 'Google Chrome', 1, '2024-08-09 03:40:55', '2024-08-09 03:40:55'),
(813, '2024-08-09', '54.36.148.183', 'Unknown', 1, '2024-08-09 04:23:49', '2024-08-09 04:23:49'),
(814, '2024-08-09', '43.163.6.124', 'Apple Safari', 1, '2024-08-09 08:44:50', '2024-08-09 08:44:50'),
(815, '2024-08-09', '35.213.241.137', 'Google Chrome', 2, '2024-08-09 09:07:31', '2024-08-09 09:07:33'),
(816, '2024-08-09', '15.235.50.228', 'Google Chrome', 1, '2024-08-09 09:07:34', '2024-08-09 09:07:34'),
(817, '2024-08-09', '2001:4ba0:cafe:c13::1', 'Google Chrome', 1, '2024-08-09 10:19:23', '2024-08-09 10:19:23'),
(818, '2024-08-09', '149.56.160.195', 'Unknown', 11, '2024-08-09 10:55:25', '2024-08-09 10:55:37'),
(819, '2024-08-09', '149.56.160.195', 'Google Chrome', 1, '2024-08-09 10:55:42', '2024-08-09 10:55:42'),
(820, '2024-08-09', '54.36.148.173', 'Unknown', 1, '2024-08-09 11:20:18', '2024-08-09 11:20:18'),
(821, '2024-08-09', '144.217.135.145', 'Unknown', 1, '2024-08-09 11:35:29', '2024-08-09 11:35:29'),
(822, '2024-08-09', '106.74.26.129', 'Google Chrome', 2, '2024-08-09 13:29:28', '2024-08-09 13:29:37'),
(823, '2024-08-09', '106.74.24.66', 'Google Chrome', 2, '2024-08-09 14:50:09', '2024-08-09 14:50:28'),
(824, '2024-08-10', '15.235.50.228', 'Google Chrome', 1, '2024-08-09 16:41:09', '2024-08-09 16:41:09'),
(825, '2024-08-10', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-09 18:13:50', '2024-08-09 18:13:50'),
(826, '2024-08-10', '170.106.159.160', 'Apple Safari', 1, '2024-08-09 20:02:09', '2024-08-09 20:02:09'),
(827, '2024-08-10', '149.56.160.179', 'Unknown', 11, '2024-08-09 20:55:03', '2024-08-09 20:55:15'),
(828, '2024-08-10', '149.56.160.179', 'Google Chrome', 1, '2024-08-09 20:55:20', '2024-08-09 20:55:20'),
(829, '2024-08-10', '149.56.160.157', 'Unknown', 1, '2024-08-09 20:55:46', '2024-08-09 20:55:46'),
(830, '2024-08-10', '40.77.167.5', 'Google Chrome', 1, '2024-08-09 23:58:54', '2024-08-09 23:58:54'),
(831, '2024-08-10', '120.229.113.17', 'Google Chrome', 1, '2024-08-09 23:59:39', '2024-08-09 23:59:39'),
(832, '2024-08-10', '5.133.192.133', 'Google Chrome', 1, '2024-08-10 00:53:06', '2024-08-10 00:53:06'),
(833, '2024-08-10', '34.219.11.218', 'Apple Safari', 1, '2024-08-10 04:33:59', '2024-08-10 04:33:59'),
(834, '2024-08-10', '34.217.111.178', 'Apple Safari', 1, '2024-08-10 04:57:28', '2024-08-10 04:57:28'),
(835, '2024-08-10', '113.62.169.130', 'Apple Safari', 1, '2024-08-10 08:15:31', '2024-08-10 08:15:31'),
(836, '2024-08-10', '39.173.116.7', 'Google Chrome', 1, '2024-08-10 08:35:11', '2024-08-10 08:35:11'),
(837, '2024-08-11', '49.51.36.179', 'Apple Safari', 1, '2024-08-10 16:57:00', '2024-08-10 16:57:00'),
(838, '2024-08-11', '2a02:4780:6:c0de::10', 'Unknown', 2, '2024-08-10 18:13:50', '2024-08-11 00:17:12'),
(839, '2024-08-11', '184.72.145.180', 'Mozilla Firefox', 1, '2024-08-10 23:35:37', '2024-08-10 23:35:37'),
(840, '2024-08-11', '183.199.180.154', 'Google Chrome', 1, '2024-08-10 23:38:21', '2024-08-10 23:38:21'),
(841, '2024-08-11', '54.36.148.38', 'Unknown', 1, '2024-08-11 01:08:54', '2024-08-11 01:08:54'),
(842, '2024-08-11', '35.88.48.171', 'Google Chrome', 1, '2024-08-11 06:33:39', '2024-08-11 06:33:39'),
(843, '2024-08-11', '91.92.247.86', 'Unknown', 2, '2024-08-11 07:34:54', '2024-08-11 07:34:55'),
(844, '2024-08-11', '42.236.17.203', 'Google Chrome', 1, '2024-08-11 12:52:42', '2024-08-11 12:52:42'),
(845, '2024-08-11', '54.36.148.218', 'Unknown', 1, '2024-08-11 13:29:13', '2024-08-11 13:29:13'),
(846, '2024-08-11', '42.236.12.238', 'Google Chrome', 1, '2024-08-11 14:31:02', '2024-08-11 14:31:02'),
(847, '2024-08-11', '42.236.12.218', 'Google Chrome', 1, '2024-08-11 14:44:22', '2024-08-11 14:44:22'),
(848, '2024-08-11', '42.236.17.59', 'Google Chrome', 1, '2024-08-11 14:44:57', '2024-08-11 14:44:57'),
(849, '2024-08-12', '34.78.37.246', 'Mozilla Firefox', 1, '2024-08-11 22:03:46', '2024-08-11 22:03:46'),
(850, '2024-08-12', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-12 00:17:12', '2024-08-12 00:17:12'),
(851, '2024-08-12', '34.140.129.189', 'Mozilla Firefox', 25, '2024-08-12 01:22:44', '2024-08-12 01:23:35'),
(852, '2024-08-12', '64.226.86.160', 'Google Chrome', 1, '2024-08-12 01:25:25', '2024-08-12 01:25:25'),
(853, '2024-08-12', '54.36.148.114', 'Unknown', 1, '2024-08-12 07:54:07', '2024-08-12 07:54:07'),
(854, '2024-08-12', '181.214.173.94', 'Google Chrome', 2, '2024-08-12 08:21:30', '2024-08-12 08:21:35'),
(855, '2024-08-12', '111.172.5.50', 'Google Chrome', 1, '2024-08-12 08:46:29', '2024-08-12 08:46:29'),
(856, '2024-08-12', '138.199.36.241', 'Google Chrome', 2, '2024-08-12 10:55:35', '2024-08-12 10:55:37'),
(857, '2024-08-13', '54.36.149.32', 'Unknown', 1, '2024-08-12 16:06:06', '2024-08-12 16:06:06'),
(858, '2024-08-13', '43.133.77.230', 'Apple Safari', 1, '2024-08-12 18:57:41', '2024-08-12 18:57:41'),
(859, '2024-08-13', '66.249.70.198', 'Google Chrome', 1, '2024-08-12 19:11:29', '2024-08-12 19:11:29'),
(860, '2024-08-13', '66.249.70.196', 'Unknown', 1, '2024-08-12 19:13:26', '2024-08-12 19:13:26'),
(861, '2024-08-13', '66.249.70.197', 'Google Chrome', 1, '2024-08-12 21:11:20', '2024-08-12 21:11:20'),
(862, '2024-08-13', '54.36.148.209', 'Unknown', 1, '2024-08-12 21:48:25', '2024-08-12 21:48:25'),
(863, '2024-08-13', '106.35.223.63', 'Google Chrome', 1, '2024-08-12 23:23:28', '2024-08-12 23:23:28'),
(864, '2024-08-13', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-13 00:17:12', '2024-08-13 00:17:12'),
(865, '2024-08-13', '66.249.70.201', 'Unknown', 1, '2024-08-13 01:15:57', '2024-08-13 01:15:57'),
(866, '2024-08-13', '45.145.154.100', 'Google Chrome', 2, '2024-08-13 02:00:25', '2024-08-13 02:00:57'),
(867, '2024-08-13', '54.245.132.16', 'Google Chrome', 1, '2024-08-13 02:55:18', '2024-08-13 02:55:18'),
(868, '2024-08-13', '42.83.147.56', 'Google Chrome', 1, '2024-08-13 03:53:29', '2024-08-13 03:53:29'),
(869, '2024-08-13', '34.221.19.70', 'Google Chrome', 1, '2024-08-13 05:51:29', '2024-08-13 05:51:29'),
(870, '2024-08-13', '43.130.39.101', 'Apple Safari', 1, '2024-08-13 09:00:11', '2024-08-13 09:00:11'),
(871, '2024-08-13', '66.249.70.192', 'Google Chrome', 1, '2024-08-13 09:27:44', '2024-08-13 09:27:44'),
(872, '2024-08-13', '2001:4860:7:504::fb', 'Google Chrome', 1, '2024-08-13 09:59:50', '2024-08-13 09:59:50'),
(873, '2024-08-13', '103.162.202.133', 'Google Chrome', 2, '2024-08-13 10:00:29', '2024-08-13 10:03:05'),
(874, '2024-08-14', '103.150.191.145', 'Mozilla Firefox', 2, '2024-08-13 17:32:25', '2024-08-13 17:32:25'),
(875, '2024-08-14', '185.12.250.104', 'Google Chrome', 1, '2024-08-13 23:24:33', '2024-08-13 23:24:33'),
(876, '2024-08-14', '66.249.70.197', 'Google Chrome', 1, '2024-08-13 23:26:07', '2024-08-13 23:26:07'),
(877, '2024-08-14', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-14 00:17:12', '2024-08-14 00:17:12'),
(878, '2024-08-14', '40.77.167.30', 'Google Chrome', 1, '2024-08-14 01:20:12', '2024-08-14 01:20:12'),
(879, '2024-08-14', '66.249.70.201', 'Google Chrome', 1, '2024-08-14 02:23:20', '2024-08-14 02:23:20'),
(880, '2024-08-14', '43.153.4.55', 'Apple Safari', 1, '2024-08-14 03:31:46', '2024-08-14 03:31:46'),
(881, '2024-08-14', '137.226.113.44', 'Unknown', 2, '2024-08-14 07:44:07', '2024-08-14 07:44:07'),
(882, '2024-08-14', '66.249.70.193', 'Google Chrome', 1, '2024-08-14 08:26:15', '2024-08-14 08:26:15'),
(883, '2024-08-14', '54.36.148.13', 'Unknown', 1, '2024-08-14 09:07:30', '2024-08-14 09:07:30'),
(884, '2024-08-14', '54.251.65.49', 'Google Chrome', 3, '2024-08-14 09:38:54', '2024-08-14 09:39:27'),
(885, '2024-08-14', '43.159.63.75', 'Apple Safari', 1, '2024-08-14 09:54:29', '2024-08-14 09:54:29'),
(886, '2024-08-15', '135.148.195.16', 'Mozilla Firefox', 1, '2024-08-14 18:49:01', '2024-08-14 18:49:01'),
(887, '2024-08-15', '117.183.208.12', 'Google Chrome', 1, '2024-08-14 21:00:12', '2024-08-14 21:00:12'),
(888, '2024-08-15', '165.231.182.10', 'Google Chrome', 2, '2024-08-14 21:17:12', '2024-08-14 21:17:18'),
(889, '2024-08-15', '66.249.70.197', 'Google Chrome', 1, '2024-08-14 23:05:27', '2024-08-14 23:05:27'),
(890, '2024-08-15', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-15 00:17:12', '2024-08-15 00:17:12'),
(891, '2024-08-15', '8.219.59.78', 'Google Chrome', 2, '2024-08-15 01:07:11', '2024-08-15 01:07:11'),
(892, '2024-08-15', '8.219.196.178', 'Google Chrome', 4, '2024-08-15 01:07:11', '2024-08-15 01:07:12'),
(893, '2024-08-15', '54.36.149.96', 'Unknown', 1, '2024-08-15 01:22:47', '2024-08-15 01:22:47'),
(894, '2024-08-15', '122.3.117.64', 'Google Chrome', 5, '2024-08-15 02:40:34', '2024-08-15 08:32:45'),
(895, '2024-08-15', '2a03:2880:15ff::face:b00c', 'Unknown', 1, '2024-08-15 08:47:23', '2024-08-15 08:47:23'),
(896, '2024-08-15', '54.36.148.78', 'Unknown', 1, '2024-08-15 09:34:03', '2024-08-15 09:34:03'),
(897, '2024-08-15', '2a00:6800:3:78a::1', 'Google Chrome', 1, '2024-08-15 12:56:37', '2024-08-15 12:56:37'),
(898, '2024-08-15', '2001:4860:7:50c::fe', 'Google Chrome', 1, '2024-08-15 12:57:37', '2024-08-15 12:57:37'),
(899, '2024-08-15', '42.236.12.225', 'Google Chrome', 1, '2024-08-15 15:24:05', '2024-08-15 15:24:05'),
(900, '2024-08-15', '42.236.12.197', 'Google Chrome', 1, '2024-08-15 15:58:51', '2024-08-15 15:58:51'),
(901, '2024-08-16', '42.236.12.213', 'Google Chrome', 1, '2024-08-15 16:40:51', '2024-08-15 16:40:51'),
(902, '2024-08-16', '198.20.67.203', 'Internet Explorer', 2, '2024-08-15 17:13:02', '2024-08-15 17:13:12'),
(903, '2024-08-16', '46.17.174.172', 'Mozilla Firefox', 1, '2024-08-15 20:38:28', '2024-08-15 20:38:28'),
(904, '2024-08-16', '43.159.128.172', 'Apple Safari', 1, '2024-08-15 22:39:05', '2024-08-15 22:39:05'),
(905, '2024-08-16', '66.249.70.100', 'Google Chrome', 1, '2024-08-16 00:07:23', '2024-08-16 00:07:23'),
(906, '2024-08-16', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-16 00:17:12', '2024-08-16 00:17:12'),
(907, '2024-08-16', '122.3.117.64', 'Google Chrome', 3, '2024-08-16 00:49:20', '2024-08-16 06:15:24'),
(908, '2024-08-16', '180.190.110.217', 'Apple Safari', 3, '2024-08-16 00:57:21', '2024-08-16 02:16:25'),
(909, '2024-08-16', '66.249.70.102', 'Google Chrome', 1, '2024-08-16 01:31:57', '2024-08-16 01:31:57'),
(910, '2024-08-16', '64.23.162.240', 'Google Chrome', 1, '2024-08-16 02:05:38', '2024-08-16 02:05:38'),
(911, '2024-08-16', '66.249.70.132', 'Google Chrome', 1, '2024-08-16 02:22:53', '2024-08-16 02:22:53'),
(912, '2024-08-16', '5.133.192.167', 'Google Chrome', 1, '2024-08-16 02:40:38', '2024-08-16 02:40:38'),
(913, '2024-08-16', '184.154.76.20', 'Internet Explorer', 1, '2024-08-16 09:43:56', '2024-08-16 09:43:56'),
(914, '2024-08-16', '184.154.76.20', 'Unknown', 2, '2024-08-16 09:44:07', '2024-08-16 09:44:14'),
(915, '2024-08-16', '2001:4860:7:632::fc', 'Google Chrome', 1, '2024-08-16 11:56:51', '2024-08-16 11:56:51'),
(916, '2024-08-17', '4.172.248.235', 'Unknown', 1, '2024-08-16 16:29:51', '2024-08-16 16:29:51'),
(917, '2024-08-17', '54.36.148.204', 'Unknown', 1, '2024-08-16 17:39:52', '2024-08-16 17:39:52'),
(918, '2024-08-17', '40.77.167.79', 'Google Chrome', 1, '2024-08-16 17:58:11', '2024-08-16 17:58:11'),
(919, '2024-08-17', '54.36.148.74', 'Unknown', 1, '2024-08-16 19:20:32', '2024-08-16 19:20:32'),
(920, '2024-08-17', '49.51.206.130', 'Apple Safari', 1, '2024-08-16 22:58:43', '2024-08-16 22:58:43'),
(921, '2024-08-17', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-17 00:17:12', '2024-08-17 00:17:12'),
(922, '2024-08-17', '112.207.168.202', 'Apple Safari', 1, '2024-08-17 00:44:16', '2024-08-17 00:44:16'),
(923, '2024-08-17', '54.36.148.32', 'Unknown', 1, '2024-08-17 02:33:10', '2024-08-17 02:33:10'),
(924, '2024-08-17', '54.36.148.253', 'Unknown', 1, '2024-08-17 05:26:35', '2024-08-17 05:26:35'),
(925, '2024-08-17', '2001:4860:7:30e::f2', 'Google Chrome', 1, '2024-08-17 09:07:29', '2024-08-17 09:07:29'),
(926, '2024-08-17', '54.186.253.55', 'Google Chrome', 1, '2024-08-17 09:26:10', '2024-08-17 09:26:10'),
(927, '2024-08-17', '54.191.71.89', 'Google Chrome', 1, '2024-08-17 09:42:16', '2024-08-17 09:42:16'),
(928, '2024-08-17', '54.36.148.124', 'Unknown', 1, '2024-08-17 09:51:35', '2024-08-17 09:51:35'),
(929, '2024-08-17', '128.90.170.14', 'Mozilla Firefox', 1, '2024-08-17 10:52:36', '2024-08-17 10:52:36'),
(930, '2024-08-17', '43.135.181.13', 'Apple Safari', 1, '2024-08-17 11:45:39', '2024-08-17 11:45:39'),
(931, '2024-08-17', '54.36.148.241', 'Unknown', 1, '2024-08-17 15:51:09', '2024-08-17 15:51:09'),
(932, '2024-08-18', '198.20.67.203', 'Internet Explorer', 1, '2024-08-17 16:13:21', '2024-08-17 16:13:21'),
(933, '2024-08-18', '54.36.149.15', 'Unknown', 1, '2024-08-17 17:45:10', '2024-08-17 17:45:10'),
(934, '2024-08-18', '2600:1900:0:2d01::d00', 'Google Chrome', 1, '2024-08-17 17:47:48', '2024-08-17 17:47:48'),
(935, '2024-08-18', '54.36.149.18', 'Unknown', 1, '2024-08-17 20:10:10', '2024-08-17 20:10:10'),
(936, '2024-08-18', '157.55.39.52', 'Google Chrome', 1, '2024-08-17 20:17:50', '2024-08-17 20:17:50'),
(937, '2024-08-18', '54.36.148.120', 'Unknown', 1, '2024-08-18 00:14:16', '2024-08-18 00:14:16'),
(938, '2024-08-18', '2a03:2880:f803::', 'Unknown', 1, '2024-08-18 01:17:00', '2024-08-18 01:17:00'),
(939, '2024-08-18', '138.197.138.108', 'Google Chrome', 1, '2024-08-18 03:39:18', '2024-08-18 03:39:18'),
(940, '2024-08-18', '66.249.70.192', 'Google Chrome', 1, '2024-08-18 07:38:28', '2024-08-18 07:38:28'),
(941, '2024-08-18', '112.207.168.202', 'Apple Safari', 1, '2024-08-18 09:25:15', '2024-08-18 09:25:15'),
(942, '2024-08-18', '54.36.149.101', 'Unknown', 1, '2024-08-18 10:50:45', '2024-08-18 10:50:45'),
(943, '2024-08-18', '170.106.171.77', 'Apple Safari', 1, '2024-08-18 11:01:21', '2024-08-18 11:01:21'),
(944, '2024-08-18', '42.236.17.86', 'Google Chrome', 1, '2024-08-18 14:01:17', '2024-08-18 14:01:17'),
(945, '2024-08-18', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-18 14:32:47', '2024-08-18 14:32:47'),
(946, '2024-08-18', '42.236.17.18', 'Google Chrome', 1, '2024-08-18 14:42:33', '2024-08-18 14:42:33'),
(947, '2024-08-18', '42.236.17.12', 'Google Chrome', 1, '2024-08-18 15:20:13', '2024-08-18 15:20:13'),
(948, '2024-08-19', '42.236.17.221', 'Google Chrome', 1, '2024-08-18 16:33:27', '2024-08-18 16:33:27'),
(949, '2024-08-19', '43.131.249.153', 'Apple Safari', 1, '2024-08-19 00:03:51', '2024-08-19 00:03:51'),
(950, '2024-08-19', '180.190.110.201', 'Apple Safari', 1, '2024-08-19 00:30:31', '2024-08-19 00:30:31'),
(951, '2024-08-19', '122.3.117.64', 'Google Chrome', 2, '2024-08-19 00:56:41', '2024-08-19 07:05:23'),
(952, '2024-08-19', '157.55.39.48', 'Google Chrome', 1, '2024-08-19 01:55:46', '2024-08-19 01:55:46'),
(953, '2024-08-19', '54.36.149.21', 'Unknown', 1, '2024-08-19 04:50:19', '2024-08-19 04:50:19'),
(954, '2024-08-19', '66.249.66.169', 'Google Chrome', 1, '2024-08-19 05:29:07', '2024-08-19 05:29:07'),
(955, '2024-08-19', '216.24.216.166', 'Google Chrome', 2, '2024-08-19 05:58:02', '2024-08-19 05:58:04'),
(956, '2024-08-19', '54.36.149.24', 'Unknown', 1, '2024-08-19 06:35:26', '2024-08-19 06:35:26'),
(957, '2024-08-19', '66.249.71.4', 'Google Chrome', 1, '2024-08-19 06:39:45', '2024-08-19 06:39:45'),
(958, '2024-08-19', '175.176.16.107', 'Apple Safari', 1, '2024-08-19 10:38:31', '2024-08-19 10:38:31'),
(959, '2024-08-19', '54.36.148.86', 'Unknown', 1, '2024-08-19 13:53:22', '2024-08-19 13:53:22'),
(960, '2024-08-19', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-19 14:32:47', '2024-08-19 14:32:47'),
(961, '2024-08-20', '54.36.148.55', 'Unknown', 1, '2024-08-19 18:14:40', '2024-08-19 18:14:40'),
(962, '2024-08-20', '54.36.149.0', 'Unknown', 1, '2024-08-19 20:03:49', '2024-08-19 20:03:49'),
(963, '2024-08-20', '69.160.160.60', 'Google Chrome', 15, '2024-08-19 21:03:50', '2024-08-19 21:04:08'),
(964, '2024-08-20', '35.82.12.179', 'Unknown', 1, '2024-08-19 21:52:06', '2024-08-19 21:52:06'),
(965, '2024-08-20', '122.3.117.64', 'Google Chrome', 1, '2024-08-20 00:45:02', '2024-08-20 00:45:02'),
(966, '2024-08-20', '2001:67c:6ec:2913:145:220:91:19', 'Mozilla Firefox', 1, '2024-08-20 01:16:39', '2024-08-20 01:16:39'),
(967, '2024-08-20', '66.249.66.160', 'Google Chrome', 1, '2024-08-20 01:20:46', '2024-08-20 01:20:46'),
(968, '2024-08-20', '54.36.148.30', 'Unknown', 1, '2024-08-20 01:28:23', '2024-08-20 01:28:23'),
(969, '2024-08-20', '159.65.251.199', 'Google Chrome', 1, '2024-08-20 01:34:54', '2024-08-20 01:34:54'),
(970, '2024-08-20', '51.195.112.210', 'Google Chrome', 1, '2024-08-20 01:59:31', '2024-08-20 01:59:31'),
(971, '2024-08-20', '66.249.71.197', 'Google Chrome', 2, '2024-08-20 04:12:25', '2024-08-20 12:41:11'),
(972, '2024-08-20', '54.36.148.70', 'Unknown', 1, '2024-08-20 04:46:02', '2024-08-20 04:46:02'),
(973, '2024-08-20', '123.53.251.38', 'Google Chrome', 1, '2024-08-20 07:49:11', '2024-08-20 07:49:11'),
(974, '2024-08-20', '2a03:2880:ff:28::face:b00c', 'Unknown', 1, '2024-08-20 09:20:53', '2024-08-20 09:20:53'),
(975, '2024-08-20', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-20 14:32:47', '2024-08-20 14:32:47'),
(976, '2024-08-21', '198.20.67.203', 'Internet Explorer', 1, '2024-08-20 16:25:16', '2024-08-20 16:25:16'),
(977, '2024-08-21', '198.20.67.203', 'Unknown', 1, '2024-08-20 16:25:29', '2024-08-20 16:25:29'),
(978, '2024-08-21', '2a03:2880:f803:1a::', 'Unknown', 1, '2024-08-20 16:28:21', '2024-08-20 16:28:21'),
(979, '2024-08-21', '140.228.24.10', 'Google Chrome', 1, '2024-08-20 18:28:18', '2024-08-20 18:28:18'),
(980, '2024-08-21', '44.242.159.239', 'Unknown', 1, '2024-08-20 19:14:04', '2024-08-20 19:14:04'),
(981, '2024-08-21', '54.36.149.2', 'Unknown', 1, '2024-08-20 22:56:25', '2024-08-20 22:56:25'),
(982, '2024-08-21', '54.36.148.206', 'Unknown', 1, '2024-08-21 01:46:22', '2024-08-21 01:46:22'),
(983, '2024-08-21', '2a03:2880:13ff:b::face:b00c', 'Unknown', 1, '2024-08-21 01:56:56', '2024-08-21 01:56:56'),
(984, '2024-08-21', '2405:8d40:444e:2d8a:7f:a4c6:7102:b24f', 'Google Chrome', 1, '2024-08-21 02:45:56', '2024-08-21 02:45:56'),
(985, '2024-08-21', '165.232.98.246', 'Google Chrome', 1, '2024-08-21 06:33:02', '2024-08-21 06:33:02'),
(986, '2024-08-21', '68.183.137.51', 'Google Chrome', 1, '2024-08-21 07:17:17', '2024-08-21 07:17:17'),
(987, '2024-08-21', '42.83.147.56', 'Google Chrome', 2, '2024-08-21 08:29:00', '2024-08-21 08:29:01'),
(988, '2024-08-21', '54.36.149.7', 'Unknown', 1, '2024-08-21 09:00:41', '2024-08-21 09:00:41');
INSERT INTO `website_users` (`id`, `date`, `ip_address`, `browser`, `page_views`, `created_at`, `updated_at`) VALUES
(989, '2024-08-21', '4.206.221.178', 'Unknown', 1, '2024-08-21 10:00:58', '2024-08-21 10:00:58'),
(990, '2024-08-21', '54.36.148.199', 'Unknown', 1, '2024-08-21 11:05:31', '2024-08-21 11:05:31'),
(991, '2024-08-21', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-21 14:32:47', '2024-08-21 14:32:47'),
(992, '2024-08-21', '194.39.218.10', 'Google Chrome', 1, '2024-08-21 15:49:04', '2024-08-21 15:49:04'),
(993, '2024-08-22', '2a03:2880:27ff:4::face:b00c', 'Unknown', 1, '2024-08-21 16:09:58', '2024-08-21 16:09:58'),
(994, '2024-08-22', '2a00:6800:3:78a::1', 'Google Chrome', 1, '2024-08-21 23:54:24', '2024-08-21 23:54:24'),
(995, '2024-08-22', '64.23.196.161', 'Google Chrome', 1, '2024-08-22 00:37:02', '2024-08-22 00:37:02'),
(996, '2024-08-22', '135.148.195.3', 'Mozilla Firefox', 1, '2024-08-22 03:40:30', '2024-08-22 03:40:30'),
(997, '2024-08-22', '124.105.186.11', 'Apple Safari', 1, '2024-08-22 04:19:52', '2024-08-22 04:19:52'),
(998, '2024-08-22', '124.105.186.11', 'Google Chrome', 1, '2024-08-22 04:19:54', '2024-08-22 04:19:54'),
(999, '2024-08-22', '39.154.11.240', 'Google Chrome', 1, '2024-08-22 05:03:49', '2024-08-22 05:03:49'),
(1000, '2024-08-22', '2a03:2880:f803:1a::', 'Unknown', 1, '2024-08-22 07:50:10', '2024-08-22 07:50:10'),
(1001, '2024-08-22', '52.167.144.166', 'Google Chrome', 1, '2024-08-22 08:15:00', '2024-08-22 08:15:00'),
(1002, '2024-08-22', '2a03:2880:11ff:73::face:b00c', 'Unknown', 1, '2024-08-22 13:47:04', '2024-08-22 13:47:04'),
(1003, '2024-08-22', '2a03:2880:22ff:9::face:b00c', 'Unknown', 1, '2024-08-22 14:15:10', '2024-08-22 14:15:10'),
(1004, '2024-08-22', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-22 14:32:47', '2024-08-22 14:32:47'),
(1005, '2024-08-22', '110.166.71.39', 'Apple Safari', 1, '2024-08-22 14:42:33', '2024-08-22 14:42:33'),
(1006, '2024-08-22', '84.17.49.9', 'Google Chrome', 2, '2024-08-22 15:08:11', '2024-08-22 15:08:17'),
(1007, '2024-08-23', '198.20.67.203', 'Internet Explorer', 2, '2024-08-22 16:09:52', '2024-08-22 16:09:59'),
(1008, '2024-08-23', '198.20.67.203', 'Unknown', 3, '2024-08-22 16:10:04', '2024-08-22 16:10:07'),
(1009, '2024-08-23', '111.231.12.66', 'Google Chrome', 1, '2024-08-22 20:25:47', '2024-08-22 20:25:47'),
(1010, '2024-08-23', '36.41.75.167', 'Apple Safari', 1, '2024-08-23 04:49:03', '2024-08-23 04:49:03'),
(1011, '2024-08-23', '219.157.29.207', 'Google Chrome', 1, '2024-08-23 09:14:20', '2024-08-23 09:14:20'),
(1012, '2024-08-23', '18.237.132.227', 'Google Chrome', 1, '2024-08-23 09:37:15', '2024-08-23 09:37:15'),
(1013, '2024-08-23', '54.218.136.48', 'Google Chrome', 1, '2024-08-23 09:49:20', '2024-08-23 09:49:20'),
(1014, '2024-08-23', '54.36.149.70', 'Unknown', 1, '2024-08-23 11:52:41', '2024-08-23 11:52:41'),
(1015, '2024-08-23', '46.17.174.172', 'Mozilla Firefox', 1, '2024-08-23 12:31:16', '2024-08-23 12:31:16'),
(1016, '2024-08-23', '2a03:2880:f800:1d::', 'Unknown', 1, '2024-08-23 14:12:46', '2024-08-23 14:12:46'),
(1017, '2024-08-23', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-23 14:32:47', '2024-08-23 14:32:47'),
(1018, '2024-08-23', '54.36.148.19', 'Unknown', 1, '2024-08-23 15:58:31', '2024-08-23 15:58:31'),
(1019, '2024-08-24', '54.36.148.207', 'Unknown', 1, '2024-08-23 22:29:05', '2024-08-23 22:29:05'),
(1020, '2024-08-24', '93.158.91.25', 'Google Chrome', 1, '2024-08-23 23:23:34', '2024-08-23 23:23:34'),
(1021, '2024-08-24', '138.197.172.103', 'Google Chrome', 1, '2024-08-24 00:39:58', '2024-08-24 00:39:58'),
(1022, '2024-08-24', '54.36.149.7', 'Unknown', 1, '2024-08-24 01:54:59', '2024-08-24 01:54:59'),
(1023, '2024-08-24', '43.153.93.68', 'Apple Safari', 1, '2024-08-24 03:57:53', '2024-08-24 03:57:53'),
(1024, '2024-08-24', '185.191.171.13', 'Unknown', 1, '2024-08-24 05:32:23', '2024-08-24 05:32:23'),
(1025, '2024-08-24', '216.74.123.181', 'Google Chrome', 1, '2024-08-24 05:48:02', '2024-08-24 05:48:02'),
(1026, '2024-08-24', '121.19.209.68', 'Google Chrome', 1, '2024-08-24 06:03:35', '2024-08-24 06:03:35'),
(1027, '2024-08-24', '91.107.202.96', 'Google Chrome', 1, '2024-08-24 06:20:26', '2024-08-24 06:20:26'),
(1028, '2024-08-24', '91.107.202.96', 'Google Chrome', 1, '2024-08-24 06:20:26', '2024-08-24 06:20:26'),
(1029, '2024-08-24', '85.208.96.202', 'Unknown', 1, '2024-08-24 06:21:50', '2024-08-24 06:21:50'),
(1030, '2024-08-24', '5.75.241.183', 'Google Chrome', 1, '2024-08-24 06:53:19', '2024-08-24 06:53:19'),
(1031, '2024-08-24', '43.130.16.140', 'Apple Safari', 1, '2024-08-24 11:45:52', '2024-08-24 11:45:52'),
(1032, '2024-08-24', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-24 14:32:47', '2024-08-24 14:32:47'),
(1033, '2024-08-25', '66.249.79.196', 'Google Chrome', 1, '2024-08-24 19:52:14', '2024-08-24 19:52:14'),
(1034, '2024-08-25', '46.17.174.192', 'Google Chrome', 1, '2024-08-24 23:07:40', '2024-08-24 23:07:40'),
(1035, '2024-08-25', '23.88.77.150', 'Google Chrome', 5, '2024-08-24 23:21:38', '2024-08-24 23:21:58'),
(1036, '2024-08-25', '23.88.77.150', 'Mozilla Firefox', 5, '2024-08-24 23:21:47', '2024-08-24 23:21:58'),
(1037, '2024-08-25', '23.88.77.150', 'Apple Safari', 3, '2024-08-24 23:21:47', '2024-08-24 23:21:58'),
(1038, '2024-08-25', '35.92.153.107', 'Apple Safari', 1, '2024-08-24 23:57:16', '2024-08-24 23:57:16'),
(1039, '2024-08-25', '35.91.254.157', 'Apple Safari', 1, '2024-08-24 23:58:55', '2024-08-24 23:58:55'),
(1040, '2024-08-25', '54.36.148.50', 'Unknown', 1, '2024-08-25 00:48:29', '2024-08-25 00:48:29'),
(1041, '2024-08-25', '54.36.149.34', 'Unknown', 1, '2024-08-25 02:57:32', '2024-08-25 02:57:32'),
(1042, '2024-08-25', '2001:4860:7:628::fe', 'Google Chrome', 1, '2024-08-25 09:34:21', '2024-08-25 09:34:21'),
(1043, '2024-08-25', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-25 09:47:30', '2024-08-25 09:47:30'),
(1044, '2024-08-25', '43.159.141.180', 'Apple Safari', 1, '2024-08-25 13:54:35', '2024-08-25 13:54:35'),
(1045, '2024-08-26', '116.136.218.108', 'Google Chrome', 1, '2024-08-25 16:01:52', '2024-08-25 16:01:52'),
(1046, '2024-08-26', '42.236.17.114', 'Google Chrome', 1, '2024-08-25 17:34:20', '2024-08-25 17:34:20'),
(1047, '2024-08-26', '2a06:4880:9000::99', 'Unknown', 1, '2024-08-25 18:21:21', '2024-08-25 18:21:21'),
(1048, '2024-08-26', '2a03:2880:27ff:d::face:b00c', 'Unknown', 1, '2024-08-25 18:22:48', '2024-08-25 18:22:48'),
(1049, '2024-08-26', '66.249.79.196', 'Google Chrome', 1, '2024-08-25 20:49:05', '2024-08-25 20:49:05'),
(1050, '2024-08-26', '66.249.79.198', 'Unknown', 1, '2024-08-25 20:52:52', '2024-08-25 20:52:52'),
(1051, '2024-08-26', '49.51.233.46', 'Apple Safari', 1, '2024-08-25 23:15:02', '2024-08-25 23:15:02'),
(1052, '2024-08-26', '157.245.108.202', 'Google Chrome', 1, '2024-08-26 00:48:24', '2024-08-26 00:48:24'),
(1053, '2024-08-26', '2a06:4880:9000::ae', 'Unknown', 1, '2024-08-26 02:31:29', '2024-08-26 02:31:29'),
(1054, '2024-08-26', '121.237.36.27', 'Unknown', 1, '2024-08-26 04:01:35', '2024-08-26 04:01:35'),
(1055, '2024-08-26', '121.237.36.27', 'Apple Safari', 1, '2024-08-26 04:02:24', '2024-08-26 04:02:24'),
(1056, '2024-08-26', '121.237.36.28', 'Google Chrome', 1, '2024-08-26 04:02:48', '2024-08-26 04:02:48'),
(1057, '2024-08-26', '54.36.148.15', 'Unknown', 1, '2024-08-26 04:44:41', '2024-08-26 04:44:41'),
(1058, '2024-08-26', '185.196.10.112', 'Mozilla Firefox', 1, '2024-08-26 07:39:37', '2024-08-26 07:39:37'),
(1059, '2024-08-26', '117.9.144.196', 'Google Chrome', 1, '2024-08-26 09:13:48', '2024-08-26 09:13:48'),
(1060, '2024-08-26', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-26 09:47:31', '2024-08-26 09:47:31'),
(1061, '2024-08-26', '2a03:2880:13ff:15::face:b00c', 'Unknown', 1, '2024-08-26 11:12:39', '2024-08-26 11:12:39'),
(1062, '2024-08-27', '2a06:4880:7000::90', 'Unknown', 1, '2024-08-26 20:50:12', '2024-08-26 20:50:12'),
(1063, '2024-08-27', '162.55.132.97', 'Unknown', 1, '2024-08-26 21:31:52', '2024-08-26 21:31:52'),
(1064, '2024-08-27', '51.222.253.14', 'Unknown', 1, '2024-08-26 23:53:45', '2024-08-26 23:53:45'),
(1065, '2024-08-27', '45.139.66.155', 'Unknown', 1, '2024-08-27 00:27:22', '2024-08-27 00:27:22'),
(1066, '2024-08-27', '54.159.31.33', 'Google Chrome', 1, '2024-08-27 00:27:29', '2024-08-27 00:27:29'),
(1067, '2024-08-27', '34.213.222.193', 'Google Chrome', 1, '2024-08-27 06:02:52', '2024-08-27 06:02:52'),
(1068, '2024-08-27', '54.212.204.97', 'Google Chrome', 1, '2024-08-27 06:12:17', '2024-08-27 06:12:17'),
(1069, '2024-08-27', '51.222.253.16', 'Unknown', 1, '2024-08-27 07:25:56', '2024-08-27 07:25:56'),
(1070, '2024-08-27', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-27 09:47:30', '2024-08-27 09:47:30'),
(1071, '2024-08-27', '43.130.32.245', 'Apple Safari', 1, '2024-08-27 11:49:52', '2024-08-27 11:49:52'),
(1072, '2024-08-27', '40.84.221.238', 'Unknown', 1, '2024-08-27 15:21:56', '2024-08-27 15:21:56'),
(1073, '2024-08-27', '40.84.221.229', 'Unknown', 1, '2024-08-27 15:22:03', '2024-08-27 15:22:03'),
(1074, '2024-08-27', '40.84.221.231', 'Unknown', 1, '2024-08-27 15:22:03', '2024-08-27 15:22:03'),
(1075, '2024-08-28', '2a03:2880:f800:5::', 'Unknown', 1, '2024-08-27 16:20:22', '2024-08-27 16:20:22'),
(1076, '2024-08-28', '120.242.155.176', 'Google Chrome', 1, '2024-08-27 17:54:56', '2024-08-27 17:54:56'),
(1077, '2024-08-28', '52.54.186.212', 'Google Chrome', 1, '2024-08-27 18:18:52', '2024-08-27 18:18:52'),
(1078, '2024-08-28', '192.36.109.123', 'Google Chrome', 1, '2024-08-27 19:05:03', '2024-08-27 19:05:03'),
(1079, '2024-08-28', '2a03:2880:f800:1a::', 'Unknown', 1, '2024-08-27 20:45:15', '2024-08-27 20:45:15'),
(1080, '2024-08-28', '2a03:2880:f800:19::', 'Unknown', 2, '2024-08-27 22:08:42', '2024-08-28 02:43:48'),
(1081, '2024-08-28', '54.162.40.62', 'Google Chrome', 1, '2024-08-27 23:51:49', '2024-08-27 23:51:49'),
(1082, '2024-08-28', '183.207.45.126', 'Google Chrome', 27, '2024-08-27 23:58:24', '2024-08-27 23:58:37'),
(1083, '2024-08-28', '209.97.142.192', 'Google Chrome', 1, '2024-08-28 01:20:21', '2024-08-28 01:20:21'),
(1084, '2024-08-28', '43.131.248.209', 'Apple Safari', 1, '2024-08-28 05:58:39', '2024-08-28 05:58:39'),
(1085, '2024-08-28', '2a02:247a:26d:1000::1', 'Google Chrome', 1, '2024-08-28 06:24:36', '2024-08-28 06:24:36'),
(1086, '2024-08-28', '3.93.193.76', 'Google Chrome', 1, '2024-08-28 09:02:05', '2024-08-28 09:02:05'),
(1087, '2024-08-28', '91.194.226.234', 'Google Chrome', 1, '2024-08-28 09:32:45', '2024-08-28 09:32:45'),
(1088, '2024-08-28', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-28 09:47:30', '2024-08-28 09:47:30'),
(1089, '2024-08-28', '42.83.147.53', 'Google Chrome', 2, '2024-08-28 09:55:57', '2024-08-28 09:55:57'),
(1090, '2024-08-28', '117.183.127.4', 'Google Chrome', 1, '2024-08-28 10:30:09', '2024-08-28 10:30:09'),
(1091, '2024-08-28', '67.85.105.29', 'Unknown', 2, '2024-08-28 13:37:09', '2024-08-28 13:37:10'),
(1092, '2024-08-28', '78.47.67.175', 'Google Chrome', 1, '2024-08-28 15:20:00', '2024-08-28 15:20:00'),
(1093, '2024-08-29', '157.90.156.220', 'Google Chrome', 1, '2024-08-28 16:33:23', '2024-08-28 16:33:23'),
(1094, '2024-08-29', '43.134.170.46', 'Apple Safari', 1, '2024-08-28 16:51:53', '2024-08-28 16:51:53'),
(1095, '2024-08-29', '121.237.36.28', 'Google Chrome', 1, '2024-08-28 16:58:13', '2024-08-28 16:58:13'),
(1096, '2024-08-29', '116.202.110.31', 'Google Chrome', 1, '2024-08-28 17:05:16', '2024-08-28 17:05:16'),
(1097, '2024-08-29', '128.140.84.199', 'Google Chrome', 1, '2024-08-28 18:29:43', '2024-08-28 18:29:43'),
(1098, '2024-08-29', '49.12.240.163', 'Google Chrome', 1, '2024-08-28 18:48:58', '2024-08-28 18:48:58'),
(1099, '2024-08-29', '78.47.143.56', 'Google Chrome', 1, '2024-08-28 20:32:02', '2024-08-28 20:32:02'),
(1100, '2024-08-29', '167.235.202.147', 'Google Chrome', 1, '2024-08-28 21:12:43', '2024-08-28 21:12:43'),
(1101, '2024-08-29', '49.12.77.196', 'Google Chrome', 1, '2024-08-28 21:36:28', '2024-08-28 21:36:28'),
(1102, '2024-08-29', '128.140.119.202', 'Google Chrome', 1, '2024-08-28 22:14:33', '2024-08-28 22:14:33'),
(1103, '2024-08-29', '168.119.242.87', 'Google Chrome', 1, '2024-08-28 23:04:31', '2024-08-28 23:04:31'),
(1104, '2024-08-29', '49.13.128.215', 'Google Chrome', 1, '2024-08-28 23:11:19', '2024-08-28 23:11:19'),
(1105, '2024-08-29', '5.75.241.149', 'Google Chrome', 1, '2024-08-28 23:32:22', '2024-08-28 23:32:22'),
(1106, '2024-08-29', '91.107.221.40', 'Google Chrome', 1, '2024-08-28 23:58:48', '2024-08-28 23:58:48'),
(1107, '2024-08-29', '51.222.253.8', 'Unknown', 1, '2024-08-29 00:03:39', '2024-08-29 00:03:39'),
(1108, '2024-08-29', '66.249.79.171', 'Google Chrome', 1, '2024-08-29 00:07:43', '2024-08-29 00:07:43'),
(1109, '2024-08-29', '43.159.140.236', 'Apple Safari', 1, '2024-08-29 05:04:34', '2024-08-29 05:04:34'),
(1110, '2024-08-29', '104.164.173.141', 'Google Chrome', 1, '2024-08-29 05:33:39', '2024-08-29 05:33:39'),
(1111, '2024-08-29', '154.28.229.112', 'Google Chrome', 20, '2024-08-29 05:33:41', '2024-08-29 05:33:53'),
(1112, '2024-08-29', '205.169.39.11', 'Google Chrome', 1, '2024-08-29 05:33:48', '2024-08-29 05:33:48'),
(1113, '2024-08-29', '2a03:b0c0:3:d0::1237:b001', 'Google Chrome', 1, '2024-08-29 05:33:49', '2024-08-29 05:33:49'),
(1114, '2024-08-29', '2a03:b0c0:3:d0::fef:2001', 'Google Chrome', 1, '2024-08-29 05:33:49', '2024-08-29 05:33:49'),
(1115, '2024-08-29', '34.72.176.129', 'Google Chrome', 1, '2024-08-29 05:33:50', '2024-08-29 05:33:50'),
(1116, '2024-08-29', '205.169.39.26', 'Google Chrome', 1, '2024-08-29 05:34:07', '2024-08-29 05:34:07'),
(1117, '2024-08-29', '205.169.39.193', 'Google Chrome', 1, '2024-08-29 05:34:16', '2024-08-29 05:34:16'),
(1118, '2024-08-29', '193.138.7.194', 'Google Chrome', 1, '2024-08-29 05:34:21', '2024-08-29 05:34:21'),
(1119, '2024-08-29', '44.199.202.63', 'Unknown', 3, '2024-08-29 05:34:27', '2024-08-29 05:34:28'),
(1120, '2024-08-29', '205.169.39.5', 'Google Chrome', 1, '2024-08-29 05:35:21', '2024-08-29 05:35:21'),
(1121, '2024-08-29', '154.28.229.6', 'Google Chrome', 1, '2024-08-29 08:00:53', '2024-08-29 08:00:53'),
(1122, '2024-08-29', '154.28.229.217', 'Google Chrome', 1, '2024-08-29 08:00:53', '2024-08-29 08:00:53'),
(1123, '2024-08-29', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-29 09:47:30', '2024-08-29 09:47:30'),
(1124, '2024-08-29', '207.241.225.114', 'Unknown', 1, '2024-08-29 09:54:46', '2024-08-29 09:54:46'),
(1125, '2024-08-29', '51.222.253.9', 'Unknown', 1, '2024-08-29 13:42:48', '2024-08-29 13:42:48'),
(1126, '2024-08-29', '42.236.12.238', 'Google Chrome', 1, '2024-08-29 13:53:26', '2024-08-29 13:53:26'),
(1127, '2024-08-29', '42.236.17.219', 'Google Chrome', 1, '2024-08-29 13:53:51', '2024-08-29 13:53:51'),
(1128, '2024-08-29', '74.208.11.33', 'Unknown', 1, '2024-08-29 14:01:13', '2024-08-29 14:01:13'),
(1129, '2024-08-29', '42.236.17.125', 'Google Chrome', 1, '2024-08-29 15:09:57', '2024-08-29 15:09:57'),
(1130, '2024-08-30', '51.222.253.11', 'Unknown', 1, '2024-08-29 16:12:21', '2024-08-29 16:12:21'),
(1131, '2024-08-30', '47.89.193.239', 'Google Chrome', 1, '2024-08-29 17:55:27', '2024-08-29 17:55:27'),
(1132, '2024-08-30', '43.159.141.180', 'Apple Safari', 1, '2024-08-29 18:42:00', '2024-08-29 18:42:00'),
(1133, '2024-08-30', '199.244.88.218', 'Google Chrome', 1, '2024-08-29 19:47:45', '2024-08-29 19:47:45'),
(1134, '2024-08-30', '51.222.253.17', 'Unknown', 1, '2024-08-29 20:46:58', '2024-08-29 20:46:58'),
(1135, '2024-08-30', '142.93.187.249', 'Google Chrome', 1, '2024-08-30 00:34:50', '2024-08-30 00:34:50'),
(1136, '2024-08-30', '93.158.91.19', 'Google Chrome', 1, '2024-08-30 01:41:34', '2024-08-30 01:41:34'),
(1137, '2024-08-30', '2405:8d40:4480:af08:7b2a:91c1:8552:40cb', 'Google Chrome', 2, '2024-08-30 03:37:54', '2024-08-30 03:38:24'),
(1138, '2024-08-30', '2a03:2880:3ff:71::face:b00c', 'Unknown', 1, '2024-08-30 03:38:19', '2024-08-30 03:38:19'),
(1139, '2024-08-30', '122.3.117.64', 'Google Chrome', 6, '2024-08-30 03:38:45', '2024-08-30 03:45:25'),
(1140, '2024-08-30', '2a03:2880:f800::', 'Unknown', 1, '2024-08-30 04:06:14', '2024-08-30 04:06:14'),
(1141, '2024-08-30', '38.60.208.248', 'Google Chrome', 1, '2024-08-30 05:53:00', '2024-08-30 05:53:00'),
(1142, '2024-08-30', '54.172.78.31', 'Google Chrome', 1, '2024-08-30 05:53:00', '2024-08-30 05:53:00'),
(1143, '2024-08-30', '46.61.56.157', 'Google Chrome', 1, '2024-08-30 05:53:07', '2024-08-30 05:53:07'),
(1144, '2024-08-30', '46.17.174.172', 'Mozilla Firefox', 1, '2024-08-30 06:36:21', '2024-08-30 06:36:21'),
(1145, '2024-08-30', '20.171.206.155', 'Unknown', 1, '2024-08-30 07:17:18', '2024-08-30 07:17:18'),
(1146, '2024-08-30', '20.191.45.212', 'Unknown', 1, '2024-08-30 07:34:51', '2024-08-30 07:34:51'),
(1147, '2024-08-30', '37.19.223.104', 'Google Chrome', 2, '2024-08-30 07:53:54', '2024-08-30 07:53:56'),
(1148, '2024-08-30', '104.247.184.213', 'Mozilla Firefox', 1, '2024-08-30 08:29:15', '2024-08-30 08:29:15'),
(1149, '2024-08-30', '223.185.29.94', 'Google Chrome', 3, '2024-08-30 09:12:38', '2024-08-30 10:16:06'),
(1150, '2024-08-30', '207.241.235.164', 'Unknown', 1, '2024-08-30 09:39:18', '2024-08-30 09:39:18'),
(1151, '2024-08-30', '2a03:2880:f800:19::', 'Unknown', 1, '2024-08-30 09:41:21', '2024-08-30 09:41:21'),
(1152, '2024-08-30', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-30 09:47:31', '2024-08-30 09:47:31'),
(1153, '2024-08-30', '2604:2dc0:100:55dd::', 'Google Chrome', 2, '2024-08-30 10:32:18', '2024-08-30 10:32:18'),
(1154, '2024-08-30', '138.246.253.15', 'Unknown', 1, '2024-08-30 13:09:37', '2024-08-30 13:09:37'),
(1155, '2024-08-31', '54.36.148.112', 'Unknown', 1, '2024-08-30 17:57:34', '2024-08-30 17:57:34'),
(1156, '2024-08-31', '2604:2dc0:100:55dd::', 'Google Chrome', 2, '2024-08-30 19:33:23', '2024-08-30 19:33:24'),
(1157, '2024-08-31', '2604:2dc0:100:4f07::', 'Google Chrome', 14, '2024-08-30 19:33:38', '2024-08-30 20:05:00'),
(1158, '2024-08-31', '66.249.66.64', 'Google Chrome', 1, '2024-08-30 20:09:53', '2024-08-30 20:09:53'),
(1159, '2024-08-31', '54.36.149.32', 'Unknown', 1, '2024-08-30 20:10:22', '2024-08-30 20:10:22'),
(1160, '2024-08-31', '167.114.3.106', 'Google Chrome', 4, '2024-08-31 00:00:49', '2024-08-31 00:01:25'),
(1161, '2024-08-31', '57.129.4.123', 'Google Chrome', 2, '2024-08-31 00:01:01', '2024-08-31 00:01:03'),
(1162, '2024-08-31', '54.37.10.247', 'Google Chrome', 2, '2024-08-31 00:01:01', '2024-08-31 00:01:15'),
(1163, '2024-08-31', '51.75.162.18', 'Google Chrome', 3, '2024-08-31 00:01:10', '2024-08-31 00:01:20'),
(1164, '2024-08-31', '51.38.135.19', 'Google Chrome', 1, '2024-08-31 00:01:20', '2024-08-31 00:01:20'),
(1165, '2024-08-31', '161.35.198.49', 'Google Chrome', 1, '2024-08-31 01:06:56', '2024-08-31 01:06:56'),
(1166, '2024-08-31', '91.194.226.234', 'Google Chrome', 1, '2024-08-31 01:23:43', '2024-08-31 01:23:43'),
(1167, '2024-08-31', '124.236.100.56', 'Apple Safari', 1, '2024-08-31 02:02:55', '2024-08-31 02:02:55'),
(1168, '2024-08-31', '54.36.149.3', 'Unknown', 1, '2024-08-31 02:25:25', '2024-08-31 02:25:25'),
(1169, '2024-08-31', '181.214.173.81', 'Google Chrome', 2, '2024-08-31 02:51:44', '2024-08-31 02:51:51'),
(1170, '2024-08-31', '98.80.142.7', 'Unknown', 2, '2024-08-31 03:28:50', '2024-08-31 04:27:53'),
(1171, '2024-08-31', '112.207.168.202', 'Apple Safari', 1, '2024-08-31 07:20:13', '2024-08-31 07:20:13'),
(1172, '2024-08-31', '52.167.144.200', 'Google Chrome', 1, '2024-08-31 08:22:24', '2024-08-31 08:22:24'),
(1173, '2024-08-31', '157.55.39.56', 'Google Chrome', 1, '2024-08-31 09:28:30', '2024-08-31 09:28:30'),
(1174, '2024-08-31', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-08-31 09:47:30', '2024-08-31 09:47:30'),
(1175, '2024-08-31', '2a03:2880:f800:e::', 'Unknown', 1, '2024-08-31 09:48:40', '2024-08-31 09:48:40'),
(1176, '2024-08-31', '13.59.34.111', 'Unknown', 1, '2024-08-31 13:54:48', '2024-08-31 13:54:48'),
(1177, '2024-08-31', '104.152.52.58', 'Unknown', 1, '2024-08-31 13:59:58', '2024-08-31 13:59:58'),
(1178, '2024-08-31', '51.222.253.16', 'Unknown', 1, '2024-08-31 14:39:13', '2024-08-31 14:39:13'),
(1179, '2024-09-01', '104.152.52.69', 'Unknown', 1, '2024-08-31 18:43:03', '2024-08-31 18:43:03'),
(1180, '2024-09-01', '54.69.170.138', 'Google Chrome', 1, '2024-08-31 20:38:31', '2024-08-31 20:38:31'),
(1181, '2024-09-01', '34.222.84.36', 'Google Chrome', 1, '2024-08-31 20:58:21', '2024-08-31 20:58:21'),
(1182, '2024-09-01', '2001:4ca0:108:42::15', 'Unknown', 1, '2024-08-31 21:51:54', '2024-08-31 21:51:54'),
(1183, '2024-09-01', '70.95.242.77', 'Unknown', 2, '2024-09-01 00:44:45', '2024-09-01 00:44:46'),
(1184, '2024-09-01', '165.232.181.224', 'Google Chrome', 1, '2024-09-01 01:15:54', '2024-09-01 01:15:54'),
(1185, '2024-09-01', '52.167.144.24', 'Google Chrome', 1, '2024-09-01 10:55:08', '2024-09-01 10:55:08'),
(1186, '2024-09-01', '42.236.17.231', 'Google Chrome', 1, '2024-09-01 10:55:14', '2024-09-01 10:55:14'),
(1187, '2024-09-01', '42.236.17.10', 'Google Chrome', 1, '2024-09-01 12:06:24', '2024-09-01 12:06:24'),
(1188, '2024-09-01', '42.236.17.34', 'Google Chrome', 1, '2024-09-01 12:26:34', '2024-09-01 12:26:34'),
(1189, '2024-09-01', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-01 12:52:36', '2024-09-01 12:52:36'),
(1190, '2024-09-02', '184.154.139.51', 'Internet Explorer', 2, '2024-09-01 18:10:55', '2024-09-01 18:11:05'),
(1191, '2024-09-02', '184.154.139.51', 'Unknown', 2, '2024-09-01 18:10:58', '2024-09-01 18:11:07'),
(1192, '2024-09-02', '18.237.72.179', 'Google Chrome', 1, '2024-09-01 21:11:30', '2024-09-01 21:11:30'),
(1193, '2024-09-02', '54.212.1.250', 'Google Chrome', 1, '2024-09-01 21:20:13', '2024-09-01 21:20:13'),
(1194, '2024-09-02', '3.112.36.181', 'Apple Safari', 1, '2024-09-02 00:03:00', '2024-09-02 00:03:00'),
(1195, '2024-09-02', '164.90.210.219', 'Google Chrome', 1, '2024-09-02 00:29:37', '2024-09-02 00:29:37'),
(1196, '2024-09-02', '54.36.149.80', 'Unknown', 1, '2024-09-02 00:53:47', '2024-09-02 00:53:47'),
(1197, '2024-09-02', '51.222.253.14', 'Unknown', 1, '2024-09-02 02:52:56', '2024-09-02 02:52:56'),
(1198, '2024-09-02', '120.229.248.198', 'Google Chrome', 1, '2024-09-02 05:05:06', '2024-09-02 05:05:06'),
(1199, '2024-09-02', '170.106.101.31', 'Apple Safari', 1, '2024-09-02 06:26:48', '2024-09-02 06:26:48'),
(1200, '2024-09-02', '51.222.253.19', 'Unknown', 1, '2024-09-02 07:13:35', '2024-09-02 07:13:35'),
(1201, '2024-09-02', '52.167.144.187', 'Google Chrome', 1, '2024-09-02 08:24:34', '2024-09-02 08:24:34'),
(1202, '2024-09-02', '2a03:2880:22ff:b::face:b00c', 'Unknown', 1, '2024-09-02 10:17:15', '2024-09-02 10:17:15'),
(1203, '2024-09-02', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-02 12:52:38', '2024-09-02 12:52:38'),
(1204, '2024-09-03', '93.158.90.40', 'Mozilla Firefox', 1, '2024-09-02 16:18:03', '2024-09-02 16:18:03'),
(1205, '2024-09-03', '138.197.130.178', 'Google Chrome', 1, '2024-09-03 01:16:24', '2024-09-03 01:16:24'),
(1206, '2024-09-03', '123.15.191.253', 'Google Chrome', 1, '2024-09-03 05:31:47', '2024-09-03 05:31:47'),
(1207, '2024-09-03', '43.130.7.211', 'Apple Safari', 1, '2024-09-03 07:24:42', '2024-09-03 07:24:42'),
(1208, '2024-09-03', '2a00:6800:3:b78::1', 'Google Chrome', 1, '2024-09-03 08:24:34', '2024-09-03 08:24:34'),
(1209, '2024-09-03', '2a03:2880:f800:d::', 'Unknown', 1, '2024-09-03 09:13:33', '2024-09-03 09:13:33'),
(1210, '2024-09-03', '84.17.48.68', 'Google Chrome', 2, '2024-09-03 11:40:27', '2024-09-03 11:40:30'),
(1211, '2024-09-03', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-03 12:52:36', '2024-09-03 12:52:36'),
(1212, '2024-09-03', '51.222.253.11', 'Unknown', 1, '2024-09-03 15:53:13', '2024-09-03 15:53:13'),
(1213, '2024-09-04', '51.222.253.15', 'Unknown', 1, '2024-09-03 18:37:59', '2024-09-03 18:37:59'),
(1214, '2024-09-04', '18.200.251.1', 'Google Chrome', 1, '2024-09-03 18:52:00', '2024-09-03 18:52:00'),
(1215, '2024-09-04', '3.255.157.222', 'Unknown', 1, '2024-09-03 18:54:45', '2024-09-03 18:54:45'),
(1216, '2024-09-04', '2a05:d018:1d9d:e702:93c5:2e9f:2403:43f1', 'Unknown', 1, '2024-09-03 19:22:16', '2024-09-03 19:22:16'),
(1217, '2024-09-04', '52.167.144.210', 'Google Chrome', 1, '2024-09-03 21:08:56', '2024-09-03 21:08:56'),
(1218, '2024-09-04', '128.90.170.14', 'Mozilla Firefox', 1, '2024-09-03 21:28:21', '2024-09-03 21:28:21'),
(1219, '2024-09-04', '51.255.218.113', 'Google Chrome', 1, '2024-09-04 01:10:22', '2024-09-04 01:10:22'),
(1220, '2024-09-04', '164.92.156.133', 'Google Chrome', 1, '2024-09-04 02:11:32', '2024-09-04 02:11:32'),
(1221, '2024-09-04', '42.83.147.34', 'Google Chrome', 1, '2024-09-04 06:39:49', '2024-09-04 06:39:49'),
(1222, '2024-09-04', '38.207.136.162', 'Google Chrome', 2, '2024-09-04 08:21:07', '2024-09-04 08:22:30'),
(1223, '2024-09-04', '49.51.179.103', 'Apple Safari', 1, '2024-09-04 09:16:21', '2024-09-04 09:16:21'),
(1224, '2024-09-04', '159.65.224.77', 'Google Chrome', 1, '2024-09-04 12:09:49', '2024-09-04 12:09:49'),
(1225, '2024-09-04', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-04 12:52:36', '2024-09-04 12:52:36'),
(1226, '2024-09-05', '43.133.38.182', 'Apple Safari', 1, '2024-09-04 21:33:54', '2024-09-04 21:33:54'),
(1227, '2024-09-05', '46.17.174.172', 'Mozilla Firefox', 2, '2024-09-04 23:54:19', '2024-09-05 03:36:54'),
(1228, '2024-09-05', '122.3.117.64', 'Google Chrome', 1, '2024-09-05 00:46:23', '2024-09-05 00:46:23'),
(1229, '2024-09-05', '64.23.232.132', 'Google Chrome', 1, '2024-09-05 00:55:49', '2024-09-05 00:55:49'),
(1230, '2024-09-05', '103.49.92.188', 'Google Chrome', 2, '2024-09-05 03:21:45', '2024-09-05 03:22:23'),
(1231, '2024-09-05', '5.133.192.108', 'Google Chrome', 1, '2024-09-05 04:58:56', '2024-09-05 04:58:56'),
(1232, '2024-09-05', '175.176.19.104', 'Apple Safari', 1, '2024-09-05 06:21:17', '2024-09-05 06:21:17'),
(1233, '2024-09-05', '2a03:2880:f800:1a::', 'Unknown', 1, '2024-09-05 06:35:13', '2024-09-05 06:35:13'),
(1234, '2024-09-05', '84.17.48.68', 'Google Chrome', 2, '2024-09-05 06:35:31', '2024-09-05 06:35:34'),
(1235, '2024-09-05', '40.77.167.38', 'Google Chrome', 1, '2024-09-05 09:32:32', '2024-09-05 09:32:32'),
(1236, '2024-09-05', '135.148.195.7', 'Google Chrome', 1, '2024-09-05 10:21:51', '2024-09-05 10:21:51'),
(1237, '2024-09-05', '43.153.110.177', 'Apple Safari', 1, '2024-09-05 10:36:21', '2024-09-05 10:36:21'),
(1238, '2024-09-05', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-05 12:52:36', '2024-09-05 12:52:36'),
(1239, '2024-09-05', '152.32.96.213', 'Apple Safari', 1, '2024-09-05 13:17:04', '2024-09-05 13:17:04'),
(1240, '2024-09-05', '51.89.227.251', 'Mozilla Firefox', 1, '2024-09-05 14:18:22', '2024-09-05 14:18:22'),
(1241, '2024-09-05', '42.236.17.23', 'Google Chrome', 1, '2024-09-05 15:54:00', '2024-09-05 15:54:00'),
(1242, '2024-09-06', '20.191.45.212', 'Unknown', 1, '2024-09-06 00:30:26', '2024-09-06 00:30:26'),
(1243, '2024-09-06', '3.252.159.249', 'Unknown', 1, '2024-09-06 01:02:27', '2024-09-06 01:02:27'),
(1244, '2024-09-06', '34.252.192.94', 'Unknown', 1, '2024-09-06 02:58:43', '2024-09-06 02:58:43'),
(1245, '2024-09-06', '51.222.253.6', 'Unknown', 1, '2024-09-06 03:44:14', '2024-09-06 03:44:14'),
(1246, '2024-09-06', '66.249.72.132', 'Google Chrome', 1, '2024-09-06 04:22:33', '2024-09-06 04:22:33'),
(1247, '2024-09-06', '66.249.71.3', 'Unknown', 1, '2024-09-06 04:24:14', '2024-09-06 04:24:14'),
(1248, '2024-09-06', '51.222.253.14', 'Unknown', 2, '2024-09-06 04:49:02', '2024-09-06 05:55:20'),
(1249, '2024-09-06', '66.249.71.3', 'Google Chrome', 1, '2024-09-06 05:53:50', '2024-09-06 05:53:50'),
(1250, '2024-09-06', '138.246.253.15', 'Unknown', 1, '2024-09-06 06:39:00', '2024-09-06 06:39:00'),
(1251, '2024-09-06', '66.249.72.133', 'Google Chrome', 1, '2024-09-06 06:42:05', '2024-09-06 06:42:05'),
(1252, '2024-09-06', '51.222.253.10', 'Unknown', 1, '2024-09-06 06:48:07', '2024-09-06 06:48:07'),
(1253, '2024-09-06', '51.222.253.20', 'Unknown', 1, '2024-09-06 07:42:15', '2024-09-06 07:42:15'),
(1254, '2024-09-06', '66.249.71.36', 'Google Chrome', 1, '2024-09-06 07:52:46', '2024-09-06 07:52:46'),
(1255, '2024-09-06', '66.249.71.38', 'Unknown', 1, '2024-09-06 07:56:19', '2024-09-06 07:56:19'),
(1256, '2024-09-06', '66.249.72.197', 'Google Chrome', 1, '2024-09-06 07:57:34', '2024-09-06 07:57:34'),
(1257, '2024-09-06', '51.222.253.1', 'Unknown', 1, '2024-09-06 08:32:58', '2024-09-06 08:32:58'),
(1258, '2024-09-06', '157.55.39.201', 'Google Chrome', 1, '2024-09-06 09:07:16', '2024-09-06 09:07:16'),
(1259, '2024-09-06', '51.222.253.13', 'Unknown', 1, '2024-09-06 09:29:32', '2024-09-06 09:29:32'),
(1260, '2024-09-06', '66.249.71.2', 'Google Chrome', 1, '2024-09-06 10:11:44', '2024-09-06 10:11:44'),
(1261, '2024-09-06', '51.222.253.9', 'Unknown', 1, '2024-09-06 11:25:30', '2024-09-06 11:25:30'),
(1262, '2024-09-06', '43.157.66.187', 'Apple Safari', 1, '2024-09-06 12:13:36', '2024-09-06 12:13:36'),
(1263, '2024-09-06', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-06 12:52:36', '2024-09-06 12:52:36'),
(1264, '2024-09-06', '51.222.253.19', 'Unknown', 1, '2024-09-06 12:57:40', '2024-09-06 12:57:40'),
(1265, '2024-09-06', '51.222.253.18', 'Unknown', 1, '2024-09-06 13:54:19', '2024-09-06 13:54:19'),
(1266, '2024-09-06', '64.227.69.138', 'Google Chrome', 1, '2024-09-06 14:30:33', '2024-09-06 14:30:33'),
(1267, '2024-09-06', '51.222.253.5', 'Unknown', 1, '2024-09-06 15:56:11', '2024-09-06 15:56:11'),
(1268, '2024-09-07', '42.83.147.53', 'Google Chrome', 1, '2024-09-06 21:40:05', '2024-09-06 21:40:05'),
(1269, '2024-09-07', '51.222.253.9', 'Unknown', 1, '2024-09-06 22:42:58', '2024-09-06 22:42:58'),
(1270, '2024-09-07', '207.46.13.87', 'Google Chrome', 1, '2024-09-06 23:34:14', '2024-09-06 23:34:14'),
(1271, '2024-09-07', '159.223.126.178', 'Google Chrome', 1, '2024-09-07 00:40:55', '2024-09-07 00:40:55'),
(1272, '2024-09-07', '43.157.40.112', 'Apple Safari', 1, '2024-09-07 01:00:08', '2024-09-07 01:00:08'),
(1273, '2024-09-07', '188.165.87.103', 'Mozilla Firefox', 1, '2024-09-07 01:36:38', '2024-09-07 01:36:38'),
(1274, '2024-09-07', '188.165.87.102', 'Mozilla Firefox', 1, '2024-09-07 01:36:49', '2024-09-07 01:36:49'),
(1275, '2024-09-07', '37.187.215.243', 'Mozilla Firefox', 2, '2024-09-07 03:08:20', '2024-09-07 03:10:58'),
(1276, '2024-09-07', '183.211.100.126', 'Google Chrome', 1, '2024-09-07 04:38:50', '2024-09-07 04:38:50'),
(1277, '2024-09-07', '51.222.253.16', 'Unknown', 1, '2024-09-07 06:45:03', '2024-09-07 06:45:03'),
(1278, '2024-09-07', '51.254.49.102', 'Mozilla Firefox', 1, '2024-09-07 06:59:37', '2024-09-07 06:59:37'),
(1279, '2024-09-07', '120.82.82.203', 'Google Chrome', 1, '2024-09-07 07:57:13', '2024-09-07 07:57:13'),
(1280, '2024-09-07', '157.245.37.40', 'Mozilla Firefox', 1, '2024-09-07 09:25:43', '2024-09-07 09:25:43'),
(1281, '2024-09-07', '194.5.236.162', 'Google Chrome', 1, '2024-09-07 10:05:56', '2024-09-07 10:05:56'),
(1282, '2024-09-07', '2a03:2880:f803:4::', 'Unknown', 1, '2024-09-07 11:47:20', '2024-09-07 11:47:20'),
(1283, '2024-09-07', '207.46.13.7', 'Google Chrome', 1, '2024-09-07 12:12:02', '2024-09-07 12:12:02'),
(1284, '2024-09-07', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-07 12:52:36', '2024-09-07 12:52:36'),
(1285, '2024-09-07', '54.36.148.110', 'Unknown', 1, '2024-09-07 13:06:40', '2024-09-07 13:06:40'),
(1286, '2024-09-07', '128.199.10.36', 'Google Chrome', 1, '2024-09-07 13:22:42', '2024-09-07 13:22:42'),
(1287, '2024-09-07', '64.227.74.62', 'Unknown', 1, '2024-09-07 13:24:01', '2024-09-07 13:24:01'),
(1288, '2024-09-07', '128.199.10.36', 'Unknown', 1, '2024-09-07 13:30:53', '2024-09-07 13:30:53'),
(1289, '2024-09-07', '43.159.129.209', 'Apple Safari', 1, '2024-09-07 13:47:05', '2024-09-07 13:47:05'),
(1290, '2024-09-07', '104.131.56.106', 'Unknown', 1, '2024-09-07 13:47:54', '2024-09-07 13:47:54'),
(1291, '2024-09-08', '54.36.148.226', 'Unknown', 1, '2024-09-07 17:18:27', '2024-09-07 17:18:27'),
(1292, '2024-09-08', '2001:4ca0:108:42::15', 'Unknown', 1, '2024-09-07 18:32:50', '2024-09-07 18:32:50'),
(1293, '2024-09-08', '54.36.148.89', 'Unknown', 1, '2024-09-07 20:20:34', '2024-09-07 20:20:34'),
(1294, '2024-09-08', '128.199.6.157', 'Google Chrome', 1, '2024-09-07 20:35:06', '2024-09-07 20:35:06'),
(1295, '2024-09-08', '45.55.58.105', 'Google Chrome', 1, '2024-09-07 21:55:16', '2024-09-07 21:55:16'),
(1296, '2024-09-08', '54.36.148.53', 'Unknown', 1, '2024-09-07 22:10:42', '2024-09-07 22:10:42'),
(1297, '2024-09-08', '188.143.169.41', 'Mozilla Firefox', 1, '2024-09-08 00:14:44', '2024-09-08 00:14:44'),
(1298, '2024-09-08', '54.36.148.223', 'Unknown', 1, '2024-09-08 00:35:33', '2024-09-08 00:35:33'),
(1299, '2024-09-08', '54.36.148.43', 'Unknown', 1, '2024-09-08 01:05:02', '2024-09-08 01:05:02'),
(1300, '2024-09-08', '54.36.148.193', 'Unknown', 1, '2024-09-08 03:08:18', '2024-09-08 03:08:18'),
(1301, '2024-09-08', '54.36.148.129', 'Unknown', 1, '2024-09-08 03:21:20', '2024-09-08 03:21:20'),
(1302, '2024-09-08', '157.55.39.48', 'Google Chrome', 1, '2024-09-08 05:32:38', '2024-09-08 05:32:38'),
(1303, '2024-09-08', '192.36.109.90', 'Google Chrome', 1, '2024-09-08 12:46:25', '2024-09-08 12:46:25'),
(1304, '2024-09-08', '188.165.87.99', 'Mozilla Firefox', 1, '2024-09-08 13:34:11', '2024-09-08 13:34:11'),
(1305, '2024-09-08', '188.165.87.100', 'Mozilla Firefox', 1, '2024-09-08 13:36:47', '2024-09-08 13:36:47'),
(1306, '2024-09-08', '175.4.213.190', 'Google Chrome', 1, '2024-09-08 14:59:44', '2024-09-08 14:59:44'),
(1307, '2024-09-08', '37.187.215.249', 'Mozilla Firefox', 1, '2024-09-08 15:07:40', '2024-09-08 15:07:40'),
(1308, '2024-09-09', '51.254.49.108', 'Mozilla Firefox', 1, '2024-09-08 16:49:17', '2024-09-08 16:49:17'),
(1309, '2024-09-09', '39.173.116.7', 'Google Chrome', 1, '2024-09-08 18:09:38', '2024-09-08 18:09:38'),
(1310, '2024-09-09', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-08 19:48:22', '2024-09-08 19:48:22'),
(1311, '2024-09-09', '149.56.150.15', 'Unknown', 11, '2024-09-08 22:15:28', '2024-09-08 22:15:40'),
(1312, '2024-09-09', '149.56.150.15', 'Google Chrome', 1, '2024-09-08 22:15:45', '2024-09-08 22:15:45'),
(1313, '2024-09-09', '144.217.135.140', 'Unknown', 1, '2024-09-08 22:16:04', '2024-09-08 22:16:04'),
(1314, '2024-09-09', '42.236.17.213', 'Google Chrome', 1, '2024-09-08 22:22:45', '2024-09-08 22:22:45'),
(1315, '2024-09-09', '42.236.17.119', 'Google Chrome', 1, '2024-09-08 22:28:42', '2024-09-08 22:28:42'),
(1316, '2024-09-09', '42.236.17.47', 'Google Chrome', 1, '2024-09-08 23:10:08', '2024-09-08 23:10:08'),
(1317, '2024-09-09', '42.236.101.235', 'Google Chrome', 1, '2024-09-08 23:25:10', '2024-09-08 23:25:10'),
(1318, '2024-09-09', '138.197.32.165', 'Google Chrome', 1, '2024-09-09 00:43:01', '2024-09-09 00:43:01'),
(1319, '2024-09-09', '157.55.39.7', 'Google Chrome', 1, '2024-09-09 05:12:01', '2024-09-09 05:12:01'),
(1320, '2024-09-09', '43.159.129.209', 'Apple Safari', 1, '2024-09-09 06:02:23', '2024-09-09 06:02:23'),
(1321, '2024-09-09', '2a03:2880:13ff:20::face:b00c', 'Unknown', 1, '2024-09-09 10:05:27', '2024-09-09 10:05:27'),
(1322, '2024-09-09', '2001:4ba0:cafe:c13::1', 'Google Chrome', 1, '2024-09-09 10:53:34', '2024-09-09 10:53:34'),
(1323, '2024-09-09', '84.17.48.84', 'Unknown', 1, '2024-09-09 14:26:46', '2024-09-09 14:26:46'),
(1324, '2024-09-10', '43.131.62.4', 'Apple Safari', 1, '2024-09-09 16:53:07', '2024-09-09 16:53:07'),
(1325, '2024-09-10', '194.67.204.55', 'Internet Explorer', 1, '2024-09-09 17:11:32', '2024-09-09 17:11:32'),
(1326, '2024-09-10', '156.239.36.116', 'Mozilla Firefox', 1, '2024-09-09 18:56:12', '2024-09-09 18:56:12'),
(1327, '2024-09-10', '54.36.148.3', 'Unknown', 1, '2024-09-09 19:16:45', '2024-09-09 19:16:45'),
(1328, '2024-09-10', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-09 19:48:22', '2024-09-09 19:48:22'),
(1329, '2024-09-10', '24.144.88.178', 'Google Chrome', 1, '2024-09-10 00:31:56', '2024-09-10 00:31:56'),
(1330, '2024-09-10', '46.17.174.192', 'Google Chrome', 1, '2024-09-10 02:52:48', '2024-09-10 02:52:48'),
(1331, '2024-09-10', '62.109.4.125', 'Opera', 1, '2024-09-10 08:03:59', '2024-09-10 08:03:59'),
(1332, '2024-09-10', '62.109.4.125', 'Internet Explorer', 1, '2024-09-10 08:04:00', '2024-09-10 08:04:00'),
(1333, '2024-09-10', '156.239.55.30', 'Google Chrome', 2, '2024-09-10 09:00:28', '2024-09-10 09:00:28'),
(1334, '2024-09-10', '51.222.253.4', 'Unknown', 1, '2024-09-10 11:11:28', '2024-09-10 11:11:28'),
(1335, '2024-09-10', '152.32.96.213', 'Apple Safari', 1, '2024-09-10 14:22:46', '2024-09-10 14:22:46'),
(1336, '2024-09-10', '52.167.144.229', 'Google Chrome', 1, '2024-09-10 15:59:31', '2024-09-10 15:59:31'),
(1337, '2024-09-11', '40.77.167.17', 'Google Chrome', 1, '2024-09-10 17:51:58', '2024-09-10 17:51:58'),
(1338, '2024-09-11', '92.204.174.89', 'Google Chrome', 2, '2024-09-10 19:05:30', '2024-09-10 19:05:36'),
(1339, '2024-09-11', '198.71.51.188', 'Unknown', 1, '2024-09-10 19:36:29', '2024-09-10 19:36:29'),
(1340, '2024-09-11', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-10 19:48:22', '2024-09-10 19:48:22'),
(1341, '2024-09-11', '156.239.55.226', 'Mozilla Firefox', 2, '2024-09-10 20:42:43', '2024-09-10 20:42:55'),
(1342, '2024-09-11', '66.249.79.196', 'Google Chrome', 2, '2024-09-10 21:20:54', '2024-09-10 21:32:29'),
(1343, '2024-09-11', '66.249.79.198', 'Unknown', 1, '2024-09-10 21:34:21', '2024-09-10 21:34:21'),
(1344, '2024-09-11', '87.103.246.30', 'Internet Explorer', 1, '2024-09-10 23:24:49', '2024-09-10 23:24:49'),
(1345, '2024-09-11', '122.3.117.64', 'Google Chrome', 4, '2024-09-11 01:32:28', '2024-09-11 09:29:29'),
(1346, '2024-09-11', '165.22.222.234', 'Google Chrome', 1, '2024-09-11 01:49:36', '2024-09-11 01:49:36'),
(1347, '2024-09-11', '64.23.146.166', 'Google Chrome', 1, '2024-09-11 02:29:22', '2024-09-11 02:29:22'),
(1348, '2024-09-11', '66.249.79.198', 'Google Chrome', 1, '2024-09-11 03:53:42', '2024-09-11 03:53:42'),
(1349, '2024-09-11', '52.167.144.203', 'Google Chrome', 1, '2024-09-11 05:15:47', '2024-09-11 05:15:47'),
(1350, '2024-09-11', '66.249.79.169', 'Google Chrome', 1, '2024-09-11 06:21:20', '2024-09-11 06:21:20'),
(1351, '2024-09-11', '137.226.113.44', 'Unknown', 2, '2024-09-11 07:44:51', '2024-09-11 07:44:51'),
(1352, '2024-09-11', '93.158.91.19', 'Google Chrome', 1, '2024-09-11 08:06:15', '2024-09-11 08:06:15'),
(1353, '2024-09-11', '40.77.167.60', 'Google Chrome', 1, '2024-09-11 10:01:27', '2024-09-11 10:01:27'),
(1354, '2024-09-11', '129.226.146.179', 'Apple Safari', 1, '2024-09-11 15:37:46', '2024-09-11 15:37:46'),
(1355, '2024-09-12', '2001:4860:7:50c::fe', 'Google Chrome', 1, '2024-09-11 16:05:55', '2024-09-11 16:05:55'),
(1356, '2024-09-12', '44.243.65.36', 'Unknown', 1, '2024-09-11 18:56:53', '2024-09-11 18:56:53'),
(1357, '2024-09-12', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-11 19:48:21', '2024-09-11 19:48:21'),
(1358, '2024-09-12', '46.17.174.172', 'Mozilla Firefox', 1, '2024-09-11 21:35:24', '2024-09-11 21:35:24'),
(1359, '2024-09-12', '37.19.223.117', 'Google Chrome', 2, '2024-09-11 23:28:20', '2024-09-11 23:28:25'),
(1360, '2024-09-12', '157.245.213.156', 'Google Chrome', 1, '2024-09-12 00:59:44', '2024-09-12 00:59:44'),
(1361, '2024-09-12', '52.167.144.180', 'Google Chrome', 1, '2024-09-12 04:25:08', '2024-09-12 04:25:08'),
(1362, '2024-09-12', '40.77.167.121', 'Google Chrome', 1, '2024-09-12 06:47:52', '2024-09-12 06:47:52'),
(1363, '2024-09-12', '43.159.63.75', 'Apple Safari', 1, '2024-09-12 08:51:35', '2024-09-12 08:51:35'),
(1364, '2024-09-12', '2a03:2880:13ff::face:b00c', 'Unknown', 1, '2024-09-12 11:00:58', '2024-09-12 11:00:58'),
(1365, '2024-09-12', '51.222.253.16', 'Unknown', 1, '2024-09-12 12:49:29', '2024-09-12 12:49:29'),
(1366, '2024-09-12', '135.148.195.14', 'Google Chrome', 1, '2024-09-12 13:04:22', '2024-09-12 13:04:22'),
(1367, '2024-09-13', '54.36.149.34', 'Unknown', 1, '2024-09-12 17:40:47', '2024-09-12 17:40:47'),
(1368, '2024-09-13', '58.47.2.184', 'Google Chrome', 1, '2024-09-12 18:25:31', '2024-09-12 18:25:31'),
(1369, '2024-09-13', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-12 19:48:21', '2024-09-12 19:48:21'),
(1370, '2024-09-13', '42.236.12.232', 'Google Chrome', 1, '2024-09-12 23:51:59', '2024-09-12 23:51:59'),
(1371, '2024-09-13', '170.106.171.77', 'Apple Safari', 1, '2024-09-12 23:56:47', '2024-09-12 23:56:47'),
(1372, '2024-09-13', '143.198.46.56', 'Google Chrome', 1, '2024-09-13 01:24:10', '2024-09-13 01:24:10'),
(1373, '2024-09-13', '42.236.12.199', 'Google Chrome', 1, '2024-09-13 02:01:17', '2024-09-13 02:01:17'),
(1374, '2024-09-13', '42.236.17.215', 'Google Chrome', 1, '2024-09-13 02:01:28', '2024-09-13 02:01:28'),
(1375, '2024-09-13', '122.3.117.64', 'Google Chrome', 1, '2024-09-13 02:21:15', '2024-09-13 02:21:15'),
(1376, '2024-09-13', '54.36.149.3', 'Unknown', 1, '2024-09-13 05:39:56', '2024-09-13 05:39:56'),
(1377, '2024-09-13', '2a06:4880:1000::22', 'Unknown', 1, '2024-09-13 07:33:45', '2024-09-13 07:33:45'),
(1378, '2024-09-13', '52.167.144.189', 'Google Chrome', 1, '2024-09-13 08:40:20', '2024-09-13 08:40:20'),
(1379, '2024-09-13', '138.246.253.15', 'Unknown', 1, '2024-09-13 09:20:00', '2024-09-13 09:20:00'),
(1380, '2024-09-13', '35.161.4.215', 'Google Chrome', 1, '2024-09-13 10:16:27', '2024-09-13 10:16:27'),
(1381, '2024-09-13', '52.41.27.228', 'Google Chrome', 1, '2024-09-13 10:37:27', '2024-09-13 10:37:27'),
(1382, '2024-09-13', '188.143.169.41', 'Mozilla Firefox', 1, '2024-09-13 10:50:15', '2024-09-13 10:50:15'),
(1383, '2024-09-13', '152.32.96.213', 'Apple Safari', 1, '2024-09-13 11:36:31', '2024-09-13 11:36:31'),
(1384, '2024-09-13', '2a03:2880:16ff:71::face:b00c', 'Unknown', 1, '2024-09-13 13:55:53', '2024-09-13 13:55:53'),
(1385, '2024-09-13', '84.17.48.84', 'Unknown', 1, '2024-09-13 14:08:34', '2024-09-13 14:08:34'),
(1386, '2024-09-14', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-13 19:48:21', '2024-09-13 19:48:21'),
(1387, '2024-09-14', '40.77.167.65', 'Google Chrome', 1, '2024-09-13 23:52:38', '2024-09-13 23:52:38'),
(1388, '2024-09-14', '161.35.176.137', 'Google Chrome', 1, '2024-09-14 00:38:30', '2024-09-14 00:38:30'),
(1389, '2024-09-14', '151.248.1.103', 'Apple Safari', 1, '2024-09-14 06:09:55', '2024-09-14 06:09:55'),
(1390, '2024-09-14', '54.36.148.34', 'Unknown', 1, '2024-09-14 09:19:00', '2024-09-14 09:19:00'),
(1391, '2024-09-14', '92.255.85.164', 'Google Chrome', 2, '2024-09-14 10:13:48', '2024-09-14 10:13:53'),
(1392, '2024-09-14', '54.36.148.215', 'Unknown', 1, '2024-09-14 10:19:53', '2024-09-14 10:19:53'),
(1393, '2024-09-14', '2a03:2880:f800:6::', 'Unknown', 1, '2024-09-14 10:42:12', '2024-09-14 10:42:12'),
(1394, '2024-09-14', '2a03:2880:f800:17::', 'Unknown', 1, '2024-09-14 11:35:52', '2024-09-14 11:35:52'),
(1395, '2024-09-14', '43.159.141.180', 'Apple Safari', 1, '2024-09-14 11:39:42', '2024-09-14 11:39:42'),
(1396, '2024-09-14', '54.36.148.37', 'Unknown', 1, '2024-09-14 12:11:35', '2024-09-14 12:11:35'),
(1397, '2024-09-14', '112.12.201.19', 'Google Chrome', 1, '2024-09-14 12:55:58', '2024-09-14 12:55:58'),
(1398, '2024-09-14', '54.36.149.104', 'Unknown', 1, '2024-09-14 13:03:41', '2024-09-14 13:03:41'),
(1399, '2024-09-14', '54.36.148.231', 'Unknown', 1, '2024-09-14 13:22:47', '2024-09-14 13:22:47'),
(1400, '2024-09-14', '54.36.148.33', 'Unknown', 1, '2024-09-14 13:57:29', '2024-09-14 13:57:29'),
(1401, '2024-09-14', '54.36.149.83', 'Unknown', 1, '2024-09-14 15:20:07', '2024-09-14 15:20:07'),
(1402, '2024-09-14', '102.129.143.88', 'Google Chrome', 2, '2024-09-14 15:26:06', '2024-09-14 15:26:12'),
(1403, '2024-09-15', '2001:4ca0:108:42::15', 'Unknown', 1, '2024-09-14 16:44:49', '2024-09-14 16:44:49'),
(1404, '2024-09-15', '54.36.149.66', 'Unknown', 1, '2024-09-14 16:53:39', '2024-09-14 16:53:39'),
(1405, '2024-09-15', '54.36.149.87', 'Unknown', 1, '2024-09-14 19:18:50', '2024-09-14 19:18:50'),
(1406, '2024-09-15', '2a02:4780:6:c0de::10', 'Unknown', 2, '2024-09-14 19:48:22', '2024-09-15 03:26:14'),
(1407, '2024-09-15', '2a06:dd00:10:0:8e02:f27b:5cd7:4582', 'Unknown', 1, '2024-09-14 20:44:15', '2024-09-14 20:44:15'),
(1408, '2024-09-15', '54.36.149.42', 'Unknown', 1, '2024-09-14 20:46:14', '2024-09-14 20:46:14'),
(1409, '2024-09-15', '40.77.167.23', 'Google Chrome', 1, '2024-09-15 00:08:15', '2024-09-15 00:08:15'),
(1410, '2024-09-15', '209.38.45.86', 'Google Chrome', 1, '2024-09-15 01:45:11', '2024-09-15 01:45:11'),
(1411, '2024-09-15', '54.36.149.64', 'Unknown', 1, '2024-09-15 02:02:51', '2024-09-15 02:02:51'),
(1412, '2024-09-15', '43.130.47.136', 'Apple Safari', 1, '2024-09-15 06:09:47', '2024-09-15 06:09:47'),
(1413, '2024-09-15', '52.47.197.102', 'Mozilla Firefox', 1, '2024-09-15 07:31:03', '2024-09-15 07:31:03'),
(1414, '2024-09-15', '54.36.148.249', 'Unknown', 1, '2024-09-15 08:54:25', '2024-09-15 08:54:25'),
(1415, '2024-09-15', '2a03:2880:f800:e::', 'Unknown', 1, '2024-09-15 09:56:51', '2024-09-15 09:56:51'),
(1416, '2024-09-15', '2a03:2880:15ff:71::face:b00c', 'Unknown', 1, '2024-09-15 11:28:21', '2024-09-15 11:28:21'),
(1417, '2024-09-16', '54.36.148.178', 'Unknown', 1, '2024-09-15 16:21:14', '2024-09-15 16:21:14'),
(1418, '2024-09-16', '54.36.148.177', 'Unknown', 1, '2024-09-15 17:45:14', '2024-09-15 17:45:14'),
(1419, '2024-09-16', '54.36.148.252', 'Unknown', 1, '2024-09-15 21:09:14', '2024-09-15 21:09:14'),
(1420, '2024-09-16', '170.106.171.77', 'Apple Safari', 1, '2024-09-15 22:26:34', '2024-09-15 22:26:34'),
(1421, '2024-09-16', '183.197.173.193', 'Google Chrome', 1, '2024-09-15 22:27:30', '2024-09-15 22:27:30'),
(1422, '2024-09-16', '54.36.148.186', 'Unknown', 1, '2024-09-15 23:48:38', '2024-09-15 23:48:38'),
(1423, '2024-09-16', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-16 03:26:13', '2024-09-16 03:26:13'),
(1424, '2024-09-16', '40.77.167.24', 'Google Chrome', 1, '2024-09-16 03:58:36', '2024-09-16 03:58:36'),
(1425, '2024-09-16', '54.200.55.185', 'Google Chrome', 1, '2024-09-16 06:47:46', '2024-09-16 06:47:46'),
(1426, '2024-09-16', '40.77.167.1', 'Google Chrome', 1, '2024-09-16 07:05:41', '2024-09-16 07:05:41'),
(1427, '2024-09-16', '35.94.198.164', 'Google Chrome', 1, '2024-09-16 07:20:35', '2024-09-16 07:20:35'),
(1428, '2024-09-16', '2a03:2880:f800:12::', 'Unknown', 1, '2024-09-16 11:24:58', '2024-09-16 11:24:58'),
(1429, '2024-09-16', '43.131.248.209', 'Apple Safari', 1, '2024-09-16 13:05:38', '2024-09-16 13:05:38'),
(1430, '2024-09-16', '42.236.17.240', 'Google Chrome', 1, '2024-09-16 15:53:55', '2024-09-16 15:53:55'),
(1431, '2024-09-17', '42.236.12.247', 'Google Chrome', 1, '2024-09-16 17:36:31', '2024-09-16 17:36:31'),
(1432, '2024-09-17', '2a00:6800:3:b9f::1', 'Google Chrome', 1, '2024-09-16 19:06:18', '2024-09-16 19:06:18'),
(1433, '2024-09-17', '165.227.38.181', 'Google Chrome', 1, '2024-09-17 00:41:39', '2024-09-17 00:41:39'),
(1434, '2024-09-17', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-17 03:26:13', '2024-09-17 03:26:13'),
(1435, '2024-09-17', '182.117.60.40', 'Google Chrome', 1, '2024-09-17 04:20:49', '2024-09-17 04:20:49'),
(1436, '2024-09-17', '43.159.128.149', 'Apple Safari', 1, '2024-09-17 07:20:15', '2024-09-17 07:20:15'),
(1437, '2024-09-17', '2406:2d40:9285:ab10:9cf6:a493:2efc:7c16', 'Google Chrome', 1, '2024-09-17 07:32:16', '2024-09-17 07:32:16'),
(1438, '2024-09-17', '40.77.167.60', 'Google Chrome', 1, '2024-09-17 07:45:55', '2024-09-17 07:45:55'),
(1439, '2024-09-17', '51.222.253.13', 'Unknown', 1, '2024-09-17 08:23:18', '2024-09-17 08:23:18'),
(1440, '2024-09-17', '54.36.148.7', 'Unknown', 1, '2024-09-17 09:28:29', '2024-09-17 09:28:29'),
(1441, '2024-09-17', '54.36.148.137', 'Unknown', 1, '2024-09-17 09:48:51', '2024-09-17 09:48:51'),
(1442, '2024-09-17', '20.42.10.191', 'Unknown', 2, '2024-09-17 09:52:00', '2024-09-17 12:11:17'),
(1443, '2024-09-17', '84.17.60.50', 'Google Chrome', 2, '2024-09-17 10:01:45', '2024-09-17 10:01:51'),
(1444, '2024-09-17', '66.249.66.89', 'Unknown', 1, '2024-09-17 10:05:56', '2024-09-17 10:05:56'),
(1445, '2024-09-17', '66.249.66.89', 'Google Chrome', 1, '2024-09-17 10:06:48', '2024-09-17 10:06:48'),
(1446, '2024-09-17', '93.158.91.31', 'Google Chrome', 1, '2024-09-17 11:42:45', '2024-09-17 11:42:45'),
(1447, '2024-09-18', '54.213.248.14', 'Google Chrome', 1, '2024-09-17 16:37:29', '2024-09-17 16:37:29'),
(1448, '2024-09-18', '18.205.41.114', 'Unknown', 1, '2024-09-17 21:29:08', '2024-09-17 21:29:08'),
(1449, '2024-09-18', '66.249.66.88', 'Google Chrome', 1, '2024-09-17 21:51:30', '2024-09-17 21:51:30'),
(1450, '2024-09-18', '43.133.38.182', 'Apple Safari', 1, '2024-09-17 22:48:43', '2024-09-17 22:48:43'),
(1451, '2024-09-18', '117.22.131.81', 'Google Chrome', 1, '2024-09-17 23:06:52', '2024-09-17 23:06:52'),
(1452, '2024-09-18', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-18 03:26:13', '2024-09-18 03:26:13'),
(1453, '2024-09-18', '40.77.167.56', 'Google Chrome', 1, '2024-09-18 04:14:45', '2024-09-18 04:14:45'),
(1454, '2024-09-18', '82.16.60.236', 'Unknown', 2, '2024-09-18 04:57:16', '2024-09-18 04:57:18'),
(1455, '2024-09-18', '39.148.112.158', 'Google Chrome', 1, '2024-09-18 05:55:02', '2024-09-18 05:55:02'),
(1456, '2024-09-18', '185.234.64.125', 'Google Chrome', 2, '2024-09-18 08:17:34', '2024-09-18 08:18:58'),
(1457, '2024-09-18', '167.71.1.226', 'Google Chrome', 1, '2024-09-18 09:12:20', '2024-09-18 09:12:20'),
(1458, '2024-09-18', '128.90.174.5', 'Mozilla Firefox', 1, '2024-09-18 10:16:05', '2024-09-18 10:16:05'),
(1459, '2024-09-18', '2a03:2880:13ff:1e::face:b00c', 'Unknown', 1, '2024-09-18 12:03:34', '2024-09-18 12:03:34'),
(1460, '2024-09-18', '137.184.15.116', 'Google Chrome', 1, '2024-09-18 12:25:36', '2024-09-18 12:25:36'),
(1461, '2024-09-18', '205.169.39.19', 'Google Chrome', 1, '2024-09-18 13:57:48', '2024-09-18 13:57:48'),
(1462, '2024-09-18', '46.17.174.172', 'Mozilla Firefox', 1, '2024-09-18 13:57:59', '2024-09-18 13:57:59'),
(1463, '2024-09-19', '34.220.215.93', 'Apple Safari', 1, '2024-09-18 16:32:14', '2024-09-18 16:32:14'),
(1464, '2024-09-19', '35.165.168.166', 'Apple Safari', 1, '2024-09-18 16:47:24', '2024-09-18 16:47:24'),
(1465, '2024-09-19', '20.69.17.254', 'Google Chrome', 6, '2024-09-18 18:58:57', '2024-09-19 11:37:41'),
(1466, '2024-09-19', '84.17.47.96', 'Google Chrome', 2, '2024-09-18 19:23:09', '2024-09-18 19:23:12'),
(1467, '2024-09-19', '134.209.187.251', 'Google Chrome', 1, '2024-09-19 00:16:13', '2024-09-19 00:16:13'),
(1468, '2024-09-19', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-19 03:26:13', '2024-09-19 03:26:13'),
(1469, '2024-09-19', '122.3.117.64', 'Google Chrome', 13, '2024-09-19 03:31:23', '2024-09-19 03:36:35'),
(1470, '2024-09-19', '2001:fd8:505:19d6:1:1:5ff0:2c47', 'Google Chrome', 3, '2024-09-19 03:34:34', '2024-09-19 03:43:07'),
(1471, '2024-09-19', '66.249.66.64', 'Google Chrome', 1, '2024-09-19 04:56:08', '2024-09-19 04:56:08'),
(1472, '2024-09-19', '205.169.39.2', 'Google Chrome', 1, '2024-09-19 06:49:14', '2024-09-19 06:49:14'),
(1473, '2024-09-19', '66.249.66.89', 'Google Chrome', 1, '2024-09-19 07:34:16', '2024-09-19 07:34:16'),
(1474, '2024-09-19', '52.167.144.215', 'Google Chrome', 1, '2024-09-19 08:30:39', '2024-09-19 08:30:39'),
(1475, '2024-09-19', '2a03:2880:f800:10::', 'Unknown', 1, '2024-09-19 08:59:35', '2024-09-19 08:59:35'),
(1476, '2024-09-19', '40.77.167.230', 'Google Chrome', 1, '2024-09-19 09:28:13', '2024-09-19 09:28:13');
INSERT INTO `website_users` (`id`, `date`, `ip_address`, `browser`, `page_views`, `created_at`, `updated_at`) VALUES
(1477, '2024-09-19', '2a14:7c2:14d1::1', 'Google Chrome', 8, '2024-09-19 10:32:46', '2024-09-19 10:33:56'),
(1478, '2024-09-19', '2a03:2880:f800:9::', 'Unknown', 1, '2024-09-19 11:27:33', '2024-09-19 11:27:33'),
(1479, '2024-09-19', '205.169.39.15', 'Google Chrome', 1, '2024-09-19 11:41:25', '2024-09-19 11:41:25'),
(1480, '2024-09-19', '40.84.221.211', 'Unknown', 1, '2024-09-19 12:53:52', '2024-09-19 12:53:52'),
(1481, '2024-09-19', '40.84.221.211', 'Unknown', 1, '2024-09-19 12:53:52', '2024-09-19 12:53:52'),
(1482, '2024-09-19', '40.84.221.211', 'Unknown', 1, '2024-09-19 12:53:52', '2024-09-19 12:53:52'),
(1483, '2024-09-19', '40.84.221.211', 'Unknown', 1, '2024-09-19 12:53:52', '2024-09-19 12:53:52'),
(1484, '2024-09-20', '40.77.190.96', 'Google Chrome', 1, '2024-09-19 16:59:00', '2024-09-19 16:59:00'),
(1485, '2024-09-20', '66.249.73.68', 'Google Chrome', 1, '2024-09-19 18:38:41', '2024-09-19 18:38:41'),
(1486, '2024-09-20', '42.83.147.34', 'Google Chrome', 1, '2024-09-19 18:44:10', '2024-09-19 18:44:10'),
(1487, '2024-09-20', '51.222.253.12', 'Unknown', 1, '2024-09-19 20:35:02', '2024-09-19 20:35:02'),
(1488, '2024-09-20', '8.142.168.136', 'Unknown', 1, '2024-09-19 20:43:46', '2024-09-19 20:43:46'),
(1489, '2024-09-20', '35.171.144.152', 'Google Chrome', 4, '2024-09-19 22:11:19', '2024-09-20 00:18:00'),
(1490, '2024-09-20', '170.106.82.193', 'Apple Safari', 1, '2024-09-19 22:32:34', '2024-09-19 22:32:34'),
(1491, '2024-09-20', '137.226.113.44', 'Unknown', 2, '2024-09-19 22:33:51', '2024-09-19 22:33:52'),
(1492, '2024-09-20', '51.222.253.11', 'Unknown', 1, '2024-09-20 01:36:36', '2024-09-20 01:36:36'),
(1493, '2024-09-20', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-20 03:26:13', '2024-09-20 03:26:13'),
(1494, '2024-09-20', '20.94.215.56', 'Google Chrome', 3, '2024-09-20 03:58:27', '2024-09-20 03:58:29'),
(1495, '2024-09-20', '66.249.73.69', 'Google Chrome', 1, '2024-09-20 05:16:59', '2024-09-20 05:16:59'),
(1496, '2024-09-20', '46.17.174.172', 'Mozilla Firefox', 1, '2024-09-20 06:36:14', '2024-09-20 06:36:14'),
(1497, '2024-09-20', '138.246.253.15', 'Unknown', 1, '2024-09-20 08:37:04', '2024-09-20 08:37:04'),
(1498, '2024-09-20', '221.229.106.25', 'Apple Safari', 1, '2024-09-20 12:16:11', '2024-09-20 12:16:11'),
(1499, '2024-09-21', '51.8.102.181', 'Unknown', 1, '2024-09-21 00:40:53', '2024-09-21 00:40:53'),
(1500, '2024-09-21', '165.22.187.193', 'Google Chrome', 1, '2024-09-21 01:26:25', '2024-09-21 01:26:25'),
(1501, '2024-09-21', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-21 03:26:13', '2024-09-21 03:26:13'),
(1502, '2024-09-21', '51.222.253.18', 'Unknown', 1, '2024-09-21 06:27:58', '2024-09-21 06:27:58'),
(1503, '2024-09-21', '51.8.102.11', 'Unknown', 1, '2024-09-21 06:38:59', '2024-09-21 06:38:59'),
(1504, '2024-09-21', '43.135.166.178', 'Apple Safari', 1, '2024-09-21 09:31:40', '2024-09-21 09:31:40'),
(1505, '2024-09-21', '2a03:2880:f800:2::', 'Unknown', 1, '2024-09-21 10:25:38', '2024-09-21 10:25:38'),
(1506, '2024-09-21', '51.222.253.2', 'Unknown', 1, '2024-09-21 10:30:17', '2024-09-21 10:30:17'),
(1507, '2024-09-21', '2a03:2880:ff:32::face:b00c', 'Unknown', 1, '2024-09-21 11:31:33', '2024-09-21 11:31:33'),
(1508, '2024-09-21', '2a03:2880:16ff:3::face:b00c', 'Unknown', 1, '2024-09-21 11:35:06', '2024-09-21 11:35:06'),
(1509, '2024-09-21', '51.222.253.19', 'Unknown', 1, '2024-09-21 14:35:49', '2024-09-21 14:35:49'),
(1510, '2024-09-22', '2001:4ca0:108:42::15', 'Unknown', 1, '2024-09-21 22:49:57', '2024-09-21 22:49:57'),
(1511, '2024-09-22', '51.222.253.17', 'Unknown', 1, '2024-09-22 02:59:13', '2024-09-22 02:59:13'),
(1512, '2024-09-22', '43.135.149.154', 'Apple Safari', 1, '2024-09-22 05:50:17', '2024-09-22 05:50:17'),
(1513, '2024-09-22', '54.200.116.149', 'Apple Safari', 1, '2024-09-22 06:45:31', '2024-09-22 06:45:31'),
(1514, '2024-09-22', '52.42.36.99', 'Apple Safari', 1, '2024-09-22 06:57:28', '2024-09-22 06:57:28'),
(1515, '2024-09-22', '54.36.148.229', 'Unknown', 1, '2024-09-22 06:58:58', '2024-09-22 06:58:58'),
(1516, '2024-09-22', '54.36.148.69', 'Unknown', 1, '2024-09-22 08:17:15', '2024-09-22 08:17:15'),
(1517, '2024-09-22', '54.36.148.151', 'Unknown', 1, '2024-09-22 08:56:19', '2024-09-22 08:56:19'),
(1518, '2024-09-22', '54.36.148.150', 'Unknown', 1, '2024-09-22 09:45:34', '2024-09-22 09:45:34'),
(1519, '2024-09-22', '117.155.156.143', 'Google Chrome', 1, '2024-09-22 09:46:59', '2024-09-22 09:46:59'),
(1520, '2024-09-22', '54.36.149.16', 'Unknown', 1, '2024-09-22 11:21:29', '2024-09-22 11:21:29'),
(1521, '2024-09-22', '2001:4ba0:cafe:b2c::1', 'Google Chrome', 1, '2024-09-22 14:19:06', '2024-09-22 14:19:06'),
(1522, '2024-09-22', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-22 15:11:10', '2024-09-22 15:11:10'),
(1523, '2024-09-23', '192.36.109.131', 'Apple Safari', 1, '2024-09-22 16:02:49', '2024-09-22 16:02:49'),
(1524, '2024-09-23', '183.134.59.130', 'Unknown', 1, '2024-09-22 17:47:42', '2024-09-22 17:47:42'),
(1525, '2024-09-23', '42.236.17.19', 'Google Chrome', 1, '2024-09-22 20:06:54', '2024-09-22 20:06:54'),
(1526, '2024-09-23', '42.236.101.217', 'Google Chrome', 1, '2024-09-22 20:41:16', '2024-09-22 20:41:16'),
(1527, '2024-09-23', '42.236.17.12', 'Google Chrome', 1, '2024-09-22 21:58:34', '2024-09-22 21:58:34'),
(1528, '2024-09-23', '138.197.146.16', 'Google Chrome', 1, '2024-09-23 01:41:06', '2024-09-23 01:41:06'),
(1529, '2024-09-23', '51.222.253.14', 'Unknown', 1, '2024-09-23 06:57:39', '2024-09-23 06:57:39'),
(1530, '2024-09-23', '2001:4860:7:50c::fe', 'Google Chrome', 1, '2024-09-23 08:43:55', '2024-09-23 08:43:55'),
(1531, '2024-09-23', '2001:4860:7:50c::f7', 'Google Chrome', 1, '2024-09-23 11:40:12', '2024-09-23 11:40:12'),
(1532, '2024-09-23', '128.90.157.2', 'Mozilla Firefox', 1, '2024-09-23 12:15:14', '2024-09-23 12:15:14'),
(1533, '2024-09-23', '2a03:2880:f803:7::', 'Unknown', 1, '2024-09-23 12:41:14', '2024-09-23 12:41:14'),
(1534, '2024-09-23', '51.8.102.211', 'Unknown', 1, '2024-09-23 13:00:04', '2024-09-23 13:00:04'),
(1535, '2024-09-23', '64.226.59.252', 'Google Chrome', 1, '2024-09-23 13:05:20', '2024-09-23 13:05:20'),
(1536, '2024-09-23', '2001:4860:7:40c::ea', 'Google Chrome', 1, '2024-09-23 13:18:16', '2024-09-23 13:18:16'),
(1537, '2024-09-23', '49.51.206.130', 'Apple Safari', 1, '2024-09-23 13:54:39', '2024-09-23 13:54:39'),
(1538, '2024-09-23', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-23 15:11:11', '2024-09-23 15:11:11'),
(1539, '2024-09-23', '5.133.192.146', 'Google Chrome', 1, '2024-09-23 15:23:06', '2024-09-23 15:23:06'),
(1540, '2024-09-24', '40.77.188.134', 'Google Chrome', 1, '2024-09-23 20:47:01', '2024-09-23 20:47:01'),
(1541, '2024-09-24', '51.222.253.20', 'Unknown', 1, '2024-09-23 23:57:46', '2024-09-23 23:57:46'),
(1542, '2024-09-24', '51.222.253.15', 'Unknown', 1, '2024-09-24 01:34:59', '2024-09-24 01:34:59'),
(1543, '2024-09-24', '175.176.79.20', 'Google Chrome', 1, '2024-09-24 01:36:12', '2024-09-24 01:36:12'),
(1544, '2024-09-24', '51.222.253.3', 'Unknown', 1, '2024-09-24 05:24:17', '2024-09-24 05:24:17'),
(1545, '2024-09-24', '2a03:2880:f803:1b::', 'Unknown', 1, '2024-09-24 10:11:11', '2024-09-24 10:11:11'),
(1546, '2024-09-24', '66.249.79.197', 'Google Chrome', 1, '2024-09-24 14:47:46', '2024-09-24 14:47:46'),
(1547, '2024-09-24', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-24 15:11:10', '2024-09-24 15:11:10'),
(1548, '2024-09-25', '51.222.253.19', 'Unknown', 1, '2024-09-24 18:29:44', '2024-09-24 18:29:44'),
(1549, '2024-09-25', '43.159.128.68', 'Apple Safari', 1, '2024-09-24 22:45:11', '2024-09-24 22:45:11'),
(1550, '2024-09-25', '178.128.207.56', 'Google Chrome', 1, '2024-09-25 00:10:39', '2024-09-25 00:10:39'),
(1551, '2024-09-25', '112.201.98.117', 'Google Chrome', 4, '2024-09-25 02:39:19', '2024-09-25 02:45:27'),
(1552, '2024-09-25', '66.249.79.228', 'Unknown', 1, '2024-09-25 02:48:54', '2024-09-25 02:48:54'),
(1553, '2024-09-25', '2001:4860:7:40c::f8', 'Google Chrome', 1, '2024-09-25 05:28:15', '2024-09-25 05:28:15'),
(1554, '2024-09-25', '43.159.63.75', 'Apple Safari', 1, '2024-09-25 13:11:59', '2024-09-25 13:11:59'),
(1555, '2024-09-25', '122.164.24.150', 'Apple Safari', 2, '2024-09-25 14:50:13', '2024-09-25 14:50:22'),
(1556, '2024-09-25', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-25 15:11:10', '2024-09-25 15:11:10'),
(1557, '2024-09-26', '51.222.253.1', 'Unknown', 1, '2024-09-25 22:15:51', '2024-09-25 22:15:51'),
(1558, '2024-09-26', '51.222.253.4', 'Unknown', 1, '2024-09-25 23:35:28', '2024-09-25 23:35:28'),
(1559, '2024-09-26', '85.208.96.211', 'Unknown', 1, '2024-09-26 00:00:10', '2024-09-26 00:00:10'),
(1560, '2024-09-26', '46.19.137.50', 'Google Chrome', 1, '2024-09-26 00:26:17', '2024-09-26 00:26:17'),
(1561, '2024-09-26', '212.111.80.107', 'Google Chrome', 2, '2024-09-26 05:07:57', '2024-09-26 05:08:02'),
(1562, '2024-09-26', '43.135.166.178', 'Apple Safari', 1, '2024-09-26 07:03:19', '2024-09-26 07:03:19'),
(1563, '2024-09-26', '34.217.27.193', 'Apple Safari', 1, '2024-09-26 07:33:14', '2024-09-26 07:33:14'),
(1564, '2024-09-26', '85.208.96.195', 'Unknown', 1, '2024-09-26 07:41:09', '2024-09-26 07:41:09'),
(1565, '2024-09-26', '52.32.38.113', 'Apple Safari', 1, '2024-09-26 07:57:33', '2024-09-26 07:57:33'),
(1566, '2024-09-26', '199.244.88.230', 'Google Chrome', 1, '2024-09-26 11:19:23', '2024-09-26 11:19:23'),
(1567, '2024-09-26', '51.222.253.5', 'Unknown', 1, '2024-09-26 13:37:54', '2024-09-26 13:37:54'),
(1568, '2024-09-26', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-26 15:11:10', '2024-09-26 15:11:10'),
(1569, '2024-09-26', '198.20.67.203', 'Internet Explorer', 2, '2024-09-26 15:23:48', '2024-09-26 15:24:06'),
(1570, '2024-09-26', '198.20.67.203', 'Unknown', 2, '2024-09-26 15:23:50', '2024-09-26 15:23:55'),
(1571, '2024-09-26', '167.94.146.50', 'Unknown', 1, '2024-09-26 15:54:48', '2024-09-26 15:54:48'),
(1572, '2024-09-27', '199.45.155.96', 'Unknown', 1, '2024-09-26 16:15:11', '2024-09-26 16:15:11'),
(1573, '2024-09-27', '66.249.73.70', 'Google Chrome', 1, '2024-09-26 21:03:04', '2024-09-26 21:03:04'),
(1574, '2024-09-27', '43.157.40.112', 'Apple Safari', 1, '2024-09-26 21:34:18', '2024-09-26 21:34:18'),
(1575, '2024-09-27', '143.110.255.13', 'Google Chrome', 1, '2024-09-27 00:37:20', '2024-09-27 00:37:20'),
(1576, '2024-09-27', '51.222.253.20', 'Unknown', 1, '2024-09-27 04:45:46', '2024-09-27 04:45:46'),
(1577, '2024-09-27', '122.3.117.64', 'Google Chrome', 1, '2024-09-27 04:58:15', '2024-09-27 04:58:15'),
(1578, '2024-09-27', '66.249.73.229', 'Google Chrome', 2, '2024-09-27 09:36:09', '2024-09-27 10:20:33'),
(1579, '2024-09-27', '2a03:2880:13ff:32::face:b00c', 'Unknown', 1, '2024-09-27 10:02:33', '2024-09-27 10:02:33'),
(1580, '2024-09-27', '138.246.253.15', 'Unknown', 1, '2024-09-27 10:13:53', '2024-09-27 10:13:53'),
(1581, '2024-09-27', '66.249.71.36', 'Unknown', 1, '2024-09-27 10:21:19', '2024-09-27 10:21:19'),
(1582, '2024-09-27', '51.222.253.12', 'Unknown', 1, '2024-09-27 10:39:24', '2024-09-27 10:39:24'),
(1583, '2024-09-27', '42.236.17.9', 'Google Chrome', 1, '2024-09-27 10:54:19', '2024-09-27 10:54:19'),
(1584, '2024-09-27', '51.222.253.11', 'Unknown', 1, '2024-09-27 14:56:49', '2024-09-27 14:56:49'),
(1585, '2024-09-27', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-27 15:11:10', '2024-09-27 15:11:10'),
(1586, '2024-09-28', '51.222.253.10', 'Unknown', 1, '2024-09-27 20:08:53', '2024-09-27 20:08:53'),
(1587, '2024-09-28', '38.179.19.167', 'Google Chrome', 1, '2024-09-27 20:17:06', '2024-09-27 20:17:06'),
(1588, '2024-09-28', '128.90.174.5', 'Mozilla Firefox', 1, '2024-09-27 21:26:33', '2024-09-27 21:26:33'),
(1589, '2024-09-28', '2001:4ba0:cafe:b2c::1', 'Google Chrome', 1, '2024-09-28 04:05:12', '2024-09-28 04:05:12'),
(1590, '2024-09-28', '43.201.26.104', 'Google Chrome', 1, '2024-09-28 05:34:24', '2024-09-28 05:34:24'),
(1591, '2024-09-28', '205.169.39.20', 'Google Chrome', 1, '2024-09-28 06:31:54', '2024-09-28 06:31:54'),
(1592, '2024-09-28', '35.92.12.112', 'Google Chrome', 1, '2024-09-28 07:33:19', '2024-09-28 07:33:19'),
(1593, '2024-09-28', '20.15.133.174', 'Google Chrome', 1, '2024-09-28 07:53:00', '2024-09-28 07:53:00'),
(1594, '2024-09-28', '35.86.174.57', 'Google Chrome', 1, '2024-09-28 08:11:32', '2024-09-28 08:11:32'),
(1595, '2024-09-28', '43.159.128.149', 'Apple Safari', 1, '2024-09-28 08:42:22', '2024-09-28 08:42:22'),
(1596, '2024-09-28', '93.158.95.213', 'Mozilla Firefox', 1, '2024-09-28 13:06:57', '2024-09-28 13:06:57'),
(1597, '2024-09-28', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-28 15:11:10', '2024-09-28 15:11:10'),
(1598, '2024-09-28', '115.60.54.227', 'Google Chrome', 1, '2024-09-28 15:30:52', '2024-09-28 15:30:52'),
(1599, '2024-09-29', '182.85.42.163', 'Google Chrome', 1, '2024-09-28 19:14:30', '2024-09-28 19:14:30'),
(1600, '2024-09-29', '2001:4ca0:108:42::15', 'Unknown', 1, '2024-09-28 19:18:14', '2024-09-28 19:18:14'),
(1601, '2024-09-29', '143.198.229.30', 'Google Chrome', 1, '2024-09-29 00:14:48', '2024-09-29 00:14:48'),
(1602, '2024-09-29', '129.226.213.145', 'Apple Safari', 1, '2024-09-29 05:17:30', '2024-09-29 05:17:30'),
(1603, '2024-09-29', '112.204.112.130', 'Google Chrome', 5, '2024-09-29 07:31:33', '2024-09-29 08:09:45'),
(1604, '2024-09-29', '2a02:4780:6:1234::1', 'Google Chrome', 2, '2024-09-29 07:59:18', '2024-09-29 07:59:23'),
(1605, '2024-09-29', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-29 11:18:45', '2024-09-29 11:18:45'),
(1606, '2024-09-29', '46.17.174.172', 'Mozilla Firefox', 1, '2024-09-29 12:06:38', '2024-09-29 12:06:38'),
(1607, '2024-09-29', '175.176.79.49', 'Google Chrome', 2, '2024-09-29 12:16:37', '2024-09-29 12:16:42'),
(1608, '2024-09-29', '51.222.253.14', 'Unknown', 1, '2024-09-29 14:10:03', '2024-09-29 14:10:03'),
(1609, '2024-09-29', '51.222.253.9', 'Unknown', 1, '2024-09-29 15:58:33', '2024-09-29 15:58:33'),
(1610, '2024-09-30', '66.249.73.230', 'Google Chrome', 1, '2024-09-29 17:02:36', '2024-09-29 17:02:36'),
(1611, '2024-09-30', '52.12.240.121', 'Google Chrome', 1, '2024-09-29 17:13:55', '2024-09-29 17:13:55'),
(1612, '2024-09-30', '51.222.253.17', 'Unknown', 1, '2024-09-29 17:20:17', '2024-09-29 17:20:17'),
(1613, '2024-09-30', '18.237.30.212', 'Google Chrome', 1, '2024-09-29 17:25:48', '2024-09-29 17:25:48'),
(1614, '2024-09-30', '42.236.12.224', 'Google Chrome', 1, '2024-09-29 18:40:44', '2024-09-29 18:40:44'),
(1615, '2024-09-30', '5.133.192.128', 'Google Chrome', 1, '2024-09-29 19:23:40', '2024-09-29 19:23:40'),
(1616, '2024-09-30', '51.222.253.8', 'Unknown', 1, '2024-09-29 19:29:53', '2024-09-29 19:29:53'),
(1617, '2024-09-30', '51.222.253.3', 'Unknown', 2, '2024-09-29 20:01:11', '2024-09-29 21:32:03'),
(1618, '2024-09-30', '91.92.248.147', 'Unknown', 1, '2024-09-29 21:02:58', '2024-09-29 21:02:58'),
(1619, '2024-09-30', '42.236.17.107', 'Google Chrome', 1, '2024-09-29 21:05:10', '2024-09-29 21:05:10'),
(1620, '2024-09-30', '122.3.117.64', 'Google Chrome', 1, '2024-09-30 06:35:52', '2024-09-30 06:35:52'),
(1621, '2024-09-30', '2a03:2880:f803:9::', 'Unknown', 1, '2024-09-30 10:35:46', '2024-09-30 10:35:46'),
(1622, '2024-09-30', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-09-30 11:18:45', '2024-09-30 11:18:45'),
(1623, '2024-10-01', '91.194.226.235', 'Google Chrome', 1, '2024-09-30 17:20:27', '2024-09-30 17:20:27'),
(1624, '2024-10-01', '13.59.34.111', 'Unknown', 1, '2024-09-30 19:05:18', '2024-09-30 19:05:18'),
(1625, '2024-10-01', '2001:4860:7:512::', 'Google Chrome', 1, '2024-10-01 03:02:54', '2024-10-01 03:02:54'),
(1626, '2024-10-01', '52.167.144.208', 'Google Chrome', 1, '2024-10-01 07:23:46', '2024-10-01 07:23:46'),
(1627, '2024-10-01', '52.167.144.182', 'Google Chrome', 1, '2024-10-01 07:24:46', '2024-10-01 07:24:46'),
(1628, '2024-10-01', '66.249.71.2', 'Google Chrome', 3, '2024-10-01 09:33:43', '2024-10-01 09:45:37'),
(1629, '2024-10-01', '66.249.72.101', 'Unknown', 2, '2024-10-01 09:40:47', '2024-10-01 09:43:36'),
(1630, '2024-10-01', '66.249.79.106', 'Google Chrome', 1, '2024-10-01 09:41:28', '2024-10-01 09:41:28'),
(1631, '2024-10-01', '66.249.71.2', 'Unknown', 1, '2024-10-01 09:44:48', '2024-10-01 09:44:48'),
(1632, '2024-10-01', '66.249.72.100', 'Unknown', 2, '2024-10-01 09:45:05', '2024-10-01 09:46:57'),
(1633, '2024-10-01', '66.249.72.100', 'Google Chrome', 1, '2024-10-01 09:47:43', '2024-10-01 09:47:43'),
(1634, '2024-10-01', '66.249.72.101', 'Google Chrome', 1, '2024-10-01 09:49:25', '2024-10-01 09:49:25'),
(1635, '2024-10-01', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-10-01 11:18:45', '2024-10-01 11:18:45'),
(1636, '2024-10-01', '182.44.9.147', 'Apple Safari', 1, '2024-10-01 11:57:39', '2024-10-01 11:57:39'),
(1637, '2024-10-02', '170.106.180.139', 'Apple Safari', 1, '2024-10-01 16:02:34', '2024-10-01 16:02:34'),
(1638, '2024-10-02', '54.36.148.124', 'Unknown', 1, '2024-10-02 00:05:20', '2024-10-02 00:05:20'),
(1639, '2024-10-02', '143.198.48.53', 'Google Chrome', 1, '2024-10-02 02:15:48', '2024-10-02 02:15:48'),
(1640, '2024-10-02', '137.184.176.9', 'Google Chrome', 1, '2024-10-02 02:52:33', '2024-10-02 02:52:33'),
(1641, '2024-10-02', '180.110.203.108', 'Apple Safari', 1, '2024-10-02 04:38:36', '2024-10-02 04:38:36'),
(1642, '2024-10-02', '43.155.136.16', 'Apple Safari', 1, '2024-10-02 04:53:27', '2024-10-02 04:53:27'),
(1643, '2024-10-02', '54.36.148.151', 'Unknown', 1, '2024-10-02 10:46:53', '2024-10-02 10:46:53'),
(1644, '2024-10-02', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-10-02 11:18:45', '2024-10-02 11:18:45'),
(1645, '2024-10-02', '54.36.148.118', 'Unknown', 1, '2024-10-02 12:00:02', '2024-10-02 12:00:02'),
(1646, '2024-10-02', '54.36.148.115', 'Unknown', 1, '2024-10-02 13:49:23', '2024-10-02 13:49:23'),
(1647, '2024-10-03', '54.36.149.63', 'Unknown', 1, '2024-10-02 16:57:45', '2024-10-02 16:57:45'),
(1648, '2024-10-03', '47.238.127.7', 'Google Chrome', 3, '2024-10-02 22:50:00', '2024-10-02 22:50:00'),
(1649, '2024-10-03', '47.238.96.111', 'Google Chrome', 2, '2024-10-02 22:50:00', '2024-10-02 22:50:00'),
(1650, '2024-10-03', '47.238.96.217', 'Google Chrome', 1, '2024-10-02 22:50:00', '2024-10-02 22:50:00'),
(1651, '2024-10-03', '46.17.174.172', 'Mozilla Firefox', 1, '2024-10-02 23:59:02', '2024-10-02 23:59:02'),
(1652, '2024-10-03', '142.93.59.46', 'Google Chrome', 1, '2024-10-03 00:39:29', '2024-10-03 00:39:29'),
(1653, '2024-10-03', '43.135.134.127', 'Apple Safari', 1, '2024-10-03 05:01:56', '2024-10-03 05:01:56'),
(1654, '2024-10-03', '54.36.148.152', 'Unknown', 1, '2024-10-03 05:54:55', '2024-10-03 05:54:55'),
(1655, '2024-10-03', '42.236.12.220', 'Google Chrome', 1, '2024-10-03 11:04:44', '2024-10-03 11:04:44'),
(1656, '2024-10-03', '42.236.17.97', 'Google Chrome', 1, '2024-10-03 11:04:47', '2024-10-03 11:04:47'),
(1657, '2024-10-03', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-10-03 11:18:45', '2024-10-03 11:18:45'),
(1658, '2024-10-03', '54.36.148.74', 'Unknown', 1, '2024-10-03 12:00:59', '2024-10-03 12:00:59'),
(1659, '2024-10-03', '42.83.147.34', 'Google Chrome', 2, '2024-10-03 12:31:44', '2024-10-03 12:31:44'),
(1660, '2024-10-03', '42.236.17.41', 'Google Chrome', 1, '2024-10-03 14:13:13', '2024-10-03 14:13:13'),
(1661, '2024-10-04', '2a06:4880:1000::13', 'Unknown', 1, '2024-10-03 16:17:44', '2024-10-03 16:17:44'),
(1662, '2024-10-04', '207.46.13.102', 'Google Chrome', 1, '2024-10-03 16:57:25', '2024-10-03 16:57:25'),
(1663, '2024-10-04', '54.36.148.51', 'Unknown', 1, '2024-10-03 19:54:48', '2024-10-03 19:54:48'),
(1664, '2024-10-04', '2a02:c206:3015:63::1', 'Google Chrome', 1, '2024-10-03 22:25:33', '2024-10-03 22:25:33'),
(1665, '2024-10-04', '122.3.117.64', 'Google Chrome', 2, '2024-10-04 02:40:40', '2024-10-04 02:44:31'),
(1666, '2024-10-04', '34.48.13.202', 'Unknown', 1, '2024-10-04 09:06:35', '2024-10-04 09:06:35'),
(1667, '2024-10-04', '54.36.148.200', 'Unknown', 1, '2024-10-04 09:26:20', '2024-10-04 09:26:20'),
(1668, '2024-10-04', '138.246.253.15', 'Unknown', 1, '2024-10-04 10:28:06', '2024-10-04 10:28:06'),
(1669, '2024-10-04', '2a03:2880:f803:b::', 'Unknown', 1, '2024-10-04 11:06:18', '2024-10-04 11:06:18'),
(1670, '2024-10-04', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-10-04 11:18:45', '2024-10-04 11:18:45'),
(1671, '2024-10-04', '51.222.253.2', 'Unknown', 1, '2024-10-04 12:42:04', '2024-10-04 12:42:04'),
(1672, '2024-10-04', '51.222.253.10', 'Unknown', 1, '2024-10-04 14:03:40', '2024-10-04 14:03:40'),
(1673, '2024-10-05', '2a06:4880:d000::e8', 'Unknown', 1, '2024-10-04 17:35:53', '2024-10-04 17:35:53'),
(1674, '2024-10-05', '64.227.171.18', 'Google Chrome', 1, '2024-10-05 00:43:32', '2024-10-05 00:43:32'),
(1675, '2024-10-05', '66.249.64.69', 'Google Chrome', 1, '2024-10-05 09:43:15', '2024-10-05 09:43:15'),
(1676, '2024-10-05', '66.249.64.67', 'Unknown', 1, '2024-10-05 09:44:12', '2024-10-05 09:44:12'),
(1677, '2024-10-05', '66.249.64.67', 'Google Chrome', 1, '2024-10-05 09:44:18', '2024-10-05 09:44:18'),
(1678, '2024-10-05', '51.222.253.13', 'Unknown', 1, '2024-10-05 10:42:29', '2024-10-05 10:42:29'),
(1679, '2024-10-05', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-10-05 11:18:45', '2024-10-05 11:18:45'),
(1680, '2024-10-05', '34.0.151.13', 'Google Chrome', 2, '2024-10-05 11:53:58', '2024-10-05 11:54:05'),
(1681, '2024-10-05', '51.222.253.16', 'Unknown', 1, '2024-10-05 15:17:48', '2024-10-05 15:17:48'),
(1682, '2024-10-06', '2001:4ca0:108:42::15', 'Unknown', 1, '2024-10-05 19:52:52', '2024-10-05 19:52:52'),
(1683, '2024-10-06', '5.133.192.133', 'Google Chrome', 1, '2024-10-05 23:19:44', '2024-10-05 23:19:44'),
(1684, '2024-10-06', '2a02:4780:6:c0de::10', 'Unknown', 1, '2024-10-06 06:35:52', '2024-10-06 06:35:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicant_reports`
--
ALTER TABLE `applicant_reports`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `inquiry_reports`
--
ALTER TABLE `inquiry_reports`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `website_users`
--
ALTER TABLE `website_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicant_reports`
--
ALTER TABLE `applicant_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `certification_awards`
--
ALTER TABLE `certification_awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company_history`
--
ALTER TABLE `company_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
-- AUTO_INCREMENT for table `inquiry_reports`
--
ALTER TABLE `inquiry_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `project_category`
--
ALTER TABLE `project_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `website_users`
--
ALTER TABLE `website_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1685;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
