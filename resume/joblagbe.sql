-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 04:55 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joblagbe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user_name`, `user_pass`, `user_email`) VALUES
(1, 'Salauddin', 'password', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone_number` int(13) NOT NULL,
  `address` text NOT NULL,
  `resume` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `fullname`, `email`, `password`, `phone_number`, `address`, `resume`) VALUES
(1, 'EASIN', 'MD. Salauddin Sarker', 'admin@gmail.com', 'password', 351345, 'sdghsdfh', ''),
(2, 'EASIN', 'MD. Salauddin Sarker', 'salauddin@gmail.com', 'password', 1718659533, 'Demra, Dhaka', ''),
(3, 'EASIN', 'MD. Salauddin Sarker', 'user@gmail.com', 'password', 351345, 'Dhaka, Bangladesh', ''),
(4, 'AL AMIN', 'MD. Salauddin Sarker', 'admin@gmail.com', 'password', 351345, 'sDFASDFSDFFDA', 0x313830323031312e646f6378),
(5, 'Md. Salauddin Sarker', 'Md. Salauddin Sarker', 'salauddin112494@gmai', '1234', 2147483647, 'Noyapara Masjid Road, Borobanga, Staff quarter, Demra, Dhaka', '');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(45) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `company` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `salary` int(20) NOT NULL,
  `p_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `description`, `company`, `location`, `salary`, `p_img`) VALUES
(26, 'Junior Field Officer', 'Junior Field Officer achieve business target given by organization. Target potential customers and assess opportunities for sales. Arrange meetings with potential customers and promote the products & services. Maintain good relationship with Agent.', 'JobaapBD', 'Dhaka', 25000, '1.png'),
(27, 'AGM / DGM (Finance & Accounts)', 'Lead and Co-ordinating the preparation of Financial Statements. Developing Standard of Procedures for Financial Processes such as P2P, O2C etc. Financial Risk Assessment of the organization to ensure a sustainable growth.', 'Fakir Knitwears Ltd', 'Gazipur', 30000, '2.jpg'),
(30, 'Student Counselor', 'Developing and implement an all-encompassing educational and counseling plan. Fostering equal opportunity practices and encourage students’ association.Paying attention to cultural or societal differences in dealing with the students.', 'Euro Link ', 'Rajshahi', 20000, '5.jpeg'),
(33, 'ইংরেজী সহকারী শিক্ষক', ' সুন্দর বাচনভঙ্গী ও শুদ্ধ উচ্চারণে কথা বলা ।  শিক্ষাকতা পেশায় অভিজ্ঞ ও দক্ষ প্রার্থীদের অগ্রাধিকার দেয়া হবে ।   চাকুরীর মেয়াদ এক বছর পূর্ণ হবার পর বছরে ২টি ঈদ বোনাস প্রদান  (বেতনের সমপরিমাণ)', 'Prochesta School', 'Chittagong', 26000, '8.gif'),
(34, 'Computer Composer', 'Provides data by operating a computer. Determines sequence of operations by studying production schedule. Performs defined tasks per documented instructions/processes. ', 'Sharif Graphics Design ', 'Rangpur', 20000, '9.jpg'),
(35, 'Assistant Director (Finance & Admin)', 'To produce accurate & timely report on financial information. To assist Dept. Head, as well as Secretary & CEO to raise fund for respective field. To maintain baking relationship and execute overall Banking activities (Internal and External) and save the banking related all documents such as Cheque book, Deposit slip and others etc. of the Institute; To reconcile of Bank Statement, as well as statement of mobile financial services.', 'Institute of Chartered Secretaries of Bangladesh (ICSB)', 'Rajshahi', 25000, '3.jpg'),
(36, 'Head Of Training', 'Reviews existing training programs; suggests enhancements and modifications to improve engagement, learning, and retention and/or to meet the changing needs of clientele, the organization, or the industry. Ensures that training materials and programs are current, accurate, and effective.', 'New Way Consultancy (NWC)', 'Dhaka', 30000, '4.png'),
(37, 'Data Entry Operator', 'Insert customer and account data by inputting text based and numerical information from source documents within time limits. Compile, verify accuracy and sort information according to priorities to prepare source data for computer entry. Review data for deficiencies or errors, correct any incompatibilities if possible and check output. Research and obtain further information for incomplete documents.', 'Butterfly Immigration Service', 'Sylhet', 20000, '6.jpeg'),
(38, 'Quality Control Engineer – Civil', 'They supervise product manufacturing and are involved in every stage of the construction process. The primary responsibility of the QA/QC Civil Engineer is to supervise functions and ensure that operations for client needs are satisfactory and meet industry and internal quality standards.', ' An international Engineering and Project Management firm', 'Rajshahi', 30000, '7.jpg'),
(39, 'অফিস অ্যাসিস্ট্যান্স কাম কনসালট্যান্ট', 'যুক্তরাজ্যে ছাত্র/ছাত্রীদের ভর্তি এবং ভিসা প্রক্রিয়া সম্পর্কিত ছাত্র এবং ভিসা প্রার্থীদের আপ-টু-ডেট তথ্য সরবরাহ করা। যুক্তরাজ্যে বিভিন্ন বিশ্ববিদ্যালয়ে ভর্তির জন্য আবেদনপত্র প্রস্তুত করা/ বিশ্ববিদ্যালয়ের আন্তর্জাতিক অফিস/ ভর্তি অফিসে ভর্তি সংক্রান্ত অন্যান্য আনুষ্ঠানিকতা বজায় রাখা। ক্লায়েন্টদের সাথে ব্যক্তিগতভাবে এবং ফোনে শুভেচ্ছা জানানো। ক্লায়েন্টদের সাথে ভাল যোগাযোগ বজায় রাখা এবং একটি শক্তিশালী সম্পর্ক গড়ে তোলা।', 'RK Consultancy', 'Dhaka', 25000, '10.jpg'),
(40, 'পরিচ্ছন্নতা কর্মী', 'অফিস  কক্ষগুলো পরিষ্কার করে রাখা। একজন অফিস ক্লিনারের কাজ অফিসের রুম,আসবাব, টয়লেট সব সময় পরিষ্কার পরিচ্ছন্ন রাখা। অফিসের চেয়ার-টেবিল-ডেস্ক-শেলফ-ফ্যান থেকে শুরু করে অফিসের সামনের জায়গাও তার কাজের আওতাধীন।', 'Social And Financial Enrichment Foundation (SAFE Foundation)', 'Rajshahi', 20000, '11.jpg'),
(41, 'In House Lawyer (Full Time)', 'Commercial and residential property contract disputes. Business disputes. Debt recovery. Professional negligence.', 'LAW & EQUITY ', 'Sylhet', 25000, '12.png'),
(42, 'Operation Retail Officer', 'SALES ACHIVEMENT. PEOPLE MANAGEMENT. STORE GENERAL ADMINISTRATION. LOCAL STORE MARKETING and VISUAL MERNCHANDISING.', 'Bulu Enterprise ( Agent Banking )', 'Dhaka', 30000, '14.jpg'),
(43, 'Web Designer', 'Creating website designs. Producing sample sites. Meeting with clients to discuss requirements and/or project progress. Demonstrating and receiving feedback about draft sites. Keeping up to date with recent technological and software developments. Developing skills and expertise in appropriate software/programming languages such as HTML and Javascript.', 'Digital Locker House ', 'Sylhet', 25000, '15.jpeg'),
(44, 'টিকিট - সংগ্রাহক', 'বাংলাদেশ রেলওয়ে ৩১ জানুয়ারি ২০২৩ তারিখে নতুন নিয়োগ বিজ্ঞপ্তি প্রকাশ করেছে যার মোট পদ সংখ্যা ১৩৩ টি ।  পদগুলোতে নারী ও পুরুষ উভয়েই আবেদন করতে পারবেন। বাংলাদেশের পাসকল জেলার আগ্রহী চাকরি প্রার্থীগণ অনলাইনে মাধ্যমে আবেদন করতে পারবেন। ', 'Bangladesh Railway ', 'Dhaka', 30000, 'govt job.png'),
(45, 'অফিস সহায়ক', 'অফিসের কাজে সহায়তা করা। অর্থাৎ অফিসের কাজকর্ম যেগুলো রয়েছে সেগুলো সহায়ক।  অফিসের আসবাবপত্র এবং রেকর্ড সমূহের সুন্দরভাবে বিন্যাস সাধন করা এবং পরিষ্কার পরিচ্ছন্ন রাখা।  অফিসের ফাইল এবং কাগজপত্র নির্দেশক্রমে একস্থান হতে অন্য স্থানে কিংবা অন্য অফিসে স্থানান্তরিত করা। ', 'Bforest.Dhakadiv (CFCC) CFCC', 'Dhaka', 30000, 'govt job.png'),
(46, 'অফিস সহায়ক', 'অফিসের কাজে সহায়তা করা। অর্থাৎ অফিসের কাজকর্ম যেগুলো রয়েছে সেগুলো সহায়ক।  অফিসের আসবাবপত্র এবং রেকর্ড সমূহের সুন্দরভাবে বিন্যাস সাধন করা এবং পরিষ্কার পরিচ্ছন্ন রাখা।  অফিসের ফাইল এবং কাগজপত্র নির্দেশক্রমে একস্থান হতে অন্য স্থানে কিংবা অন্য অফিসে স্থানান্তরিত করা। ', 'Directorate General of Drug Administration (DGDA)', 'Rajshahi', 25000, 'govt job.png'),
(47, 'পরিচ্ছন্নতা কর্মী', 'অফিস  কক্ষগুলো পরিষ্কার করে রাখা। একজন অফিস ক্লিনারের কাজ অফিসের রুম,আসবাব, টয়লেট সব সময় পরিষ্কার পরিচ্ছন্ন রাখা। অফিসের চেয়ার-টেবিল-ডেস্ক-শেলফ-ফ্যান থেকে শুরু করে অফিসের সামনের জায়গাও তার কাজের আওতাধীন।', 'DC Office Nilphamari (DCNILPHAMARI) ', ' Nilphamari', 30000, 'govt job.png'),
(48, 'কুক', 'রান্না করা আর রান্নার কাজে তদারকি করা। ইস্যুকৃত খাবারের দায়িত্ব নেওয়া। খাবার পরিবেশন করা। মেস পরিস্কার পরিচ্ছন্ন ও দায়িত্বপূর্ণ এলাকা পরিস্কার রাখা।', 'Bangladesh Tea Board (TEABOARD) ', 'Dhaka', 20000, 'govt job.png');

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `job_seeker_id` int(11) NOT NULL,
  `cover_letter` text NOT NULL,
  `application_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job_postings`
--

CREATE TABLE `job_postings` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `salary` decimal(10,2) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `date_posted` date NOT NULL,
  `company` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_postings`
--

INSERT INTO `job_postings` (`id`, `title`, `description`, `location`, `type`, `salary`, `employer_id`, `date_posted`, `company`) VALUES
(0, 'Salauddin the CEO', 'Salauddin the CEO', 'Salauddin the CEO', '', '1231231.00', 0, '0000-00-00', 'Salauddin the CEO');

-- --------------------------------------------------------

--
-- Table structure for table `job_seekers`
--

CREATE TABLE `job_seekers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `resume` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_seekers`
--

INSERT INTO `job_seekers` (`id`, `name`, `email`, `password`, `phone_number`, `address`, `resume`) VALUES
(0, 'EASIN', 'user1@gmail.com', 'password', '01521260707', 'Dhaka', ''),
(1, 'Salauddin', 'salauddin@gmail.com', 'password', '0152122222', 'Dhaka', 0x73736463);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_id` (`job_id`),
  ADD KEY `job_seeker_id` (`job_seeker_id`);

--
-- Indexes for table `job_seekers`
--
ALTER TABLE `job_seekers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD CONSTRAINT `job_applications_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `job_postings` (`id`),
  ADD CONSTRAINT `job_applications_ibfk_2` FOREIGN KEY (`job_seeker_id`) REFERENCES `job_seekers` (`id`);

--
-- Constraints for table `job_postings`
--
ALTER TABLE `job_postings`
  ADD CONSTRAINT `job_postings_ibfk_1` FOREIGN KEY (`employer_id`) REFERENCES `employers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
