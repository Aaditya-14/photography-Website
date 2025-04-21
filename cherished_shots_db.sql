-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2024 at 08:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cherished_shots_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Prayash@gmail.com', 'Prayash123');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `sent_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `experiences_skills`
--

CREATE TABLE `experiences_skills` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experiences_skills`
--

INSERT INTO `experiences_skills` (`id`, `title`, `description`, `created_at`) VALUES
(2, 'Professional Experience', 'Captured over 200 weddings, delivering high-quality and emotional moments through stunning photography. Collaborated with couples to create personalized photo shoots that tell the unique story of their special day.', '2024-09-15 17:06:08'),
(3, 'Freelance Portrait Photographer ', 'Specialized in portrait photography for clients in various industries, including fashion, corporate, and personal branding. Delivered photos that highlight the subject’s character, style, and energy.', '2024-09-15 17:06:35'),
(4, 'Event Photography', 'Photographed numerous corporate events, festivals, and concerts, capturing candid moments and professional highlights. Consistently praised for delivering event photography that is both artistic and informative.', '2024-09-15 17:06:55'),
(5, 'Skills', 'My skills include a deep proficiency in handling DSLR cameras, notably Canon and Nikon models, ensuring high-quality and precise image capture. I excel in photo editing, with advanced capabilities in Adobe Lightroom and Photoshop, enabling me to enhance and retouch images creatively. My strong understanding of creative composition, lighting, and angles allows me to produce unique and captivating photographs. Effective client communication is another cornerstone of my work, ensuring that each project aligns with clients’ visions, whether for personal portraits or large-scale events. My background in photojournalism further supports my ability to capture genuine, unposed moments, adding depth and authenticity to my work.', '2024-09-15 17:07:26'),
(6, 'Awards & Recognition', 'My work has earned recognition, including the Best Wedding Photographer Award in 2022 for outstanding wedding photography and being featured as one of the Top 50 Photographers to Follow in 2021 by a national photography magazine. I hold a Bachelor of Arts in Photography from the University of Arts, completed in 2018, which has provided a solid foundation for my ongoing professional development and creative exploration.', '2024-09-15 17:07:57');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image_title`, `image_path`, `upload_date`, `category`) VALUES
(1, 'flower 1', '4k-wallpaper-beautiful-beautiful-flowers-bloom.jpg', '2024-09-28 06:35:33', 'flower'),
(2, 'flower2', 'thumb-1920-1341820.png', '2024-09-28 06:35:00', 'flower'),
(3, 'Flower 3', 'ai-generated-vibrant-colored-flowers-bloom-in-a-meadow-generated-by-ai-photo.jpg', '2024-09-28 06:35:20', 'flower'),
(4, 'Animal 1', '99782486db37c43e4809df17fe661f05.jpg', '2024-09-28 06:36:04', 'animal'),
(5, 'Animal 2', 'wallpaper-background-jaguar-wildlife.jpg', '2024-09-28 06:36:21', 'animal'),
(6, 'Animal 3', 'download.jpeg', '2024-09-28 06:36:43', 'animal'),
(7, 'Nature 1', 'nature-3082832_1280.jpg', '2024-09-28 06:37:24', 'nature'),
(8, 'Nature 2', '4k-nature-waterfall-vca0x9gctkousu5t.jpg', '2024-09-28 06:37:52', 'nature'),
(9, 'Nature 3', 'thumb-1920-1356260.jpeg', '2024-09-28 06:38:23', 'nature');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_items`
--

CREATE TABLE `portfolio_items` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences_skills`
--
ALTER TABLE `experiences_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_items`
--
ALTER TABLE `portfolio_items`
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
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `experiences_skills`
--
ALTER TABLE `experiences_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `portfolio_items`
--
ALTER TABLE `portfolio_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
