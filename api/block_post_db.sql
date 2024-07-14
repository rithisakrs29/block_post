-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2024 at 03:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `block_post_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `profile_photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `FullName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `profile_photo`, `created_at`, `FullName`) VALUES
(1, 'rithisak', 'P@$$w0rd', 'onrithisak@gmail.com', NULL, '2024-06-09 03:02:23', 'ON Rithisak'),
(2, 'dara', '123456789', 'dara@gmail.com', NULL, '2024-06-09 07:15:54', 'Dara'),
(3, 'vichet', '1234', 'vichet@gmail.com', NULL, '2024-06-11 03:38:58', 'Dara Vichet'),
(6, 'mayurik', '11111111', 'ma@gmail.com', 'admin_photo/6667e533d4138.jpg', '2024-06-11 05:48:35', 'nononono'),
(7, 'kosal', 'ssssssss', 'kosal@gmail.com', 'admin_photo/666825a59a71b.jpg', '2024-06-11 10:23:33', 'Kosal');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `content`, `created_at`) VALUES
(1, 1, 2, 'hello', '2024-07-08 14:29:41'),
(2, 1, 2, 'hello', '2024-07-08 14:29:47'),
(3, 1, 2, 'hello', '2024-07-08 14:29:49'),
(4, 1, 2, 'hello', '2024-07-08 14:29:50'),
(5, 1, 2, 'hello', '2024-07-08 14:29:51'),
(6, 1, 2, 'hello', '2024-07-08 14:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, 'Euro 2024: Cristiano Ronaldo says Portugal \'deserve\' to win', 'Cristiano Ronaldo said that Portugal\'s current generation of players deserves to win the 2024 European Championship.\r\n\r\nManchester United captain Bruno Fernandes, Paris Saint-Germain\'s Vitinha, and Manchester City pair Bernardo Silva and Rúben Dias are among the high-profile players in the Portuguese team aiming to win this year in Germany.\r\n\r\nThe five time Ballon d\'Or winner said: \"I believe that this generation deserves to win a competition of this magnitude. Semifinals? I hope we can go further.\r\n\r\n\"We have to go step by step, live in the moment, be calm, work as well as we have until now, believe that it is possible. We know it\'s a short competition, but the team is ready.\"', 'http://localhost:8080/learn_php/block_post_php/users/photo_post/ronaldo.jpg', '2024-06-15 13:35:53', '2024-07-13 03:05:20'),
(2, 2, 'Lionel Messi', 'plays as a forward for and captains both Major League Soccer club Inter Miami and the Argentina national team. Widely regarded as one of the greatest players of all time, Messi has won a record eight Ballon d\'Or awards, a record six European Golden Shoes, and was named the world\'s best player for a record eight times by FIFA.[note 2] Until 2021, he had spent his entire professional career with Barcelona, where he won a club-record 34 trophies, including ten La Liga titles, seven Copa del Rey titles, and the UEFA Champions League four times. With his country, he won the 2021 Copa América and the 2022 FIFA World Cup. A prolific goalscorer and creative playmaker, Messi holds the records for most goals (474), hat-tricks (36), and assists in La Liga (192). He has the most international goals by a South American male (106). Messi has scored over 800 senior career goals for club and country, and the most goals for a single club (672).', 'http://localhost:8080/learn_php/block_post_php/users/photo_post/666d9eeada9f5.jpg', '2024-06-15 14:02:18', '2024-07-13 03:04:59'),
(3, 1, 'សម្តេចធិបតី និងលោកជំទាវបណ្ឌិត ចាត់ក្រុមគ្រូពេទ្យ TYDA ចុះពិនិត្យ និងព្យាបាលជំងឺជូនប្រជាពលរដ្ឋរស់នៅសហគមន៍ស្ថិតក្នុងខណ្ឌពោធិ៍សែនជ័យ', 'នាព្រឹកថ្ងៃទី៣០ ខែមិថុនា ឆ្នាំ២០២៤នេះ លោកជំទាវបណ្ឌិត ពេជ ចន្ទមុន្នី ហ៊ុនម៉ាណែត បានចាត់អោយក្រុមគ្រូពេទ្យស្ម័គ្រចិត្តយុវជនសម្ដេចតេជោ (TYDA) ចុះពិនិត្យ និងព្យាបាលជំងឺជូនប្រជាពលរដ្ឋក្នុងសហគមន៍ក្រីក្រសរុបចំនួន ៣.២៤៨ ករណី រួមមាន៖ ជំងឺទូទៅ, ជំងឺមាត់ធ្មេញ, ពិនិត្យអេកូ និងរោគស្រ្តី, ជំងឺបេះដូង, ជំងឺភ្នែក, វះកាត់តូច, ជំងឺឫសដូងបាត, ជំងឺសន្លាក់, ជំងឺសើរស្បែក, ជំងឺត្រចៀក ច្រមុះ បំពងក, ថតកាំរស្មីX , ពិនិត្យឈាម, ក្នុងនោះករណីជំងឺធ្ងន់ធ្ងរត្រូវបញ្ជូនទៅព្យាបាលបន្តមានចំនួន ៦៧ ករណី ដែលប្រព្រឹត្តទៅនៅក្នុងបរិវេណ វិទ្យាល័យ ហ៊ុនសែន ប៊ុនរ៉ានី អរុណវតី ភូមិត្រពាំងអណ្តូង សង្កាត់ត្រពាំងក្រសាំង ខណ្ឌពោធិ៍សែនជ័យ រាជធានីភ្នំពេញ ដោយមានការចូលរួមផងពីសំណាក់អាជ្ញាធរដែនដីគ្រប់លំដាប់ថ្នាក់, យុវជនអ.ម.ត, យុវជនស.ស.យ.ក, យុវជនកាកបាទក្រហមកម្ពុជា, យុវជនកាយរិទ្ធជាតិកម្ពុជា ព្រមទាំងក្រុមការងារពាក់ព័ន្ធជាច្រើនរូបទៀត ។\r\n\r\nប្រជាពលរដ្ឋដែលអញ្ជើញមកទទួលសេវាពិនិត្យ និងព្យាបាលសុខភាពទាំងអស់ បានសម្តែងក្តីសប្បាយរីករាយ និងថ្លែងអំណរគុណជាអនេក ចំពោះ សម្តេចធិបតី និងលោកជំទាវបណ្ឌិត ដែលបានចង្អុលបង្ហាញដល់ក្រុមគ្រូពេទ្យជំនាញ ចុះមកពិនិត្យ និងព្យាបាលជូនពួកគាត់ ។\r\n\r\nរាល់ការចំណាយទាំងអស់ក្នុងសកម្មភាពនេះ គឺឧបត្ថម្ភគាំទ្រដោយសម្ដេចតេជោ ហ៊ុន សែន និងសម្ដេចកិតិ្តព្រឹទ្ធបណ្ឌិត ប៊ុន រ៉ានី ហ៊ុនសែន រួមជាមួយសម្តេចមហាបវរធិបតី ហ៊ុន ម៉ាណែត និងលោកជំទាវបណ្ឌិត ពេជ ចន្ទមុន្នី ហ៊ុនម៉ាណែតផ្ទាល់ ៕', 'http://localhost:8080/learn_php/block_post_php/users/photo_post/66815e6251043.jpg', '2024-06-30 13:32:18', '2024-07-13 03:04:43'),
(4, 1, 'Bootstrap 5.3.3', 'Bootstrap v5.3.3 is here with bug fixes, documentation improvements, and more follow-up enhancements for color modes. Keep reading for the highlights!\r\n\r\nHighlights\r\nFixed a breaking change introduced with color modes where it was required to manually import variables-dark.scss when building Bootstrap with Sass. Now, _variables.scss will automatically import _variables-dark.scss. If you were already importing _variables-dark.scss manually, you should keep doing it as it won’t break anything and will be the way to go in v6.\r\nFixed a regression in the selector engine that wasn’t able to handle multiple IDs anymore.\r\nColor modes\r\nBadges now use the .text-bg-* text utilities to be certain that the text is always readable (especially when the customized colors are different in light and dark modes).\r\nFixed our color-modes.js script to handle the case where the OS is set to light mode and the auto color mode is used on the website. If you copied the script from our docs, you should apply this change to your own script.\r\nFixed color schemes description in the color modes documentation to show that color-scheme() only accept light and dark values as parameters.', 'http://localhost:8080/learn_php/block_post_php/users/photo_post/df.jpg', '2024-07-12 10:54:41', '2024-07-12 10:54:41'),
(5, 1, 'Bootstrap 5.3.3', 'Bootstrap v5.3.3 is here with bug fixes, documentation improvements, and more follow-up enhancements for color modes. Keep reading for the highlights!\r\n\r\nHighlights\r\nFixed a breaking change introduced with color modes where it was required to manually import variables-dark.scss when building Bootstrap with Sass. Now, _variables.scss will automatically import _variables-dark.scss. If you were already importing _variables-dark.scss manually, you should keep doing it as it won’t break anything and will be the way to go in v6.\r\nFixed a regression in the selector engine that wasn’t able to handle multiple IDs anymore.\r\nColor modes\r\nBadges now use the .text-bg-* text utilities to be certain that the text is always readable (especially when the customized colors are different in light and dark modes).\r\nFixed our color-modes.js script to handle the case where the OS is set to light mode and the auto color mode is used on the website. If you copied the script from our docs, you should apply this change to your own script.\r\nFixed color schemes description in the color modes documentation to show that color-scheme() only accept light and dark values as parameters.', 'http://localhost:8080/learn_php/block_post_php/users/photo_post/df.jpg', '2024-07-12 11:27:26', '2024-07-12 11:27:26'),
(6, 1, 'Bootstrap 5.3.3', 'Bootstrap v5.3.3 is here with bug fixes, documentation improvements, and more follow-up enhancements for color modes. Keep reading for the highlights!\r\n\r\nHighlights\r\nFixed a breaking change introduced with color modes where it was required to manually import variables-dark.scss when building Bootstrap with Sass. Now, _variables.scss will automatically import _variables-dark.scss. If you were already importing _variables-dark.scss manually, you should keep doing it as it won’t break anything and will be the way to go in v6.\r\nFixed a regression in the selector engine that wasn’t able to handle multiple IDs anymore.\r\nColor modes\r\nBadges now use the .text-bg-* text utilities to be certain that the text is always readable (especially when the customized colors are different in light and dark modes).\r\nFixed our color-modes.js script to handle the case where the OS is set to light mode and the auto color mode is used on the website. If you copied the script from our docs, you should apply this change to your own script.\r\nFixed color schemes description in the color modes documentation to show that color-scheme() only accept light and dark values as parameters.', 'http://localhost:8080/learn_php/block_post_php/users/photo_post/df.jpg', '2024-07-12 11:28:31', '2024-07-12 11:28:31'),
(7, 1, 'Bootstrap 5.3.3', 'Bootstrap v5.3.3 is here with bug fixes, documentation improvements, and more follow-up enhancements for color modes. Keep reading for the highlights!  Highlights Fixed a breaking change introduced with color modes where it was required to manually import variables-dark.scss when building Bootstrap with Sass. Now, _variables.scss will automatically import _variables-dark.scss. If you were already importing _variables-dark.scss manually, you should keep doing it as it won’t break anything and will be the way to go in v6. Fixed a regression in the selector engine that wasn’t able to handle multiple IDs anymore. Color modes Badges now use the .text-bg-* text utilities to be certain that the text is always readable (especially when the customized colors are different in light and dark modes). Fixed our color-modes.js script to handle the case where the OS is set to light mode and the auto color mode is used on the website. If you copied the script from our docs, you should apply this change to your own script. Fixed color schemes description in the color modes documentation to show that color-scheme() only accept light and dark values as parameters.', 'http://localhost:8080/learn_php/block_post_php/users../photo_post/66911739efb5e.jpg', '2024-07-12 11:44:57', '2024-07-12 11:44:57'),
(8, 1, 'JS components', 'Curious which components explicitly require our JavaScript and Popper? If you’re at all unsure about the general page structure, keep reading for an example page template.\r\n\r\nAlerts for dismissing\r\nButtons for toggling states and checkbox/radio functionality\r\nCarousel for all slide behaviors, controls, and indicators\r\nCollapse for toggling visibility of content', 'http://localhost:8080/learn_php/block_post_php/users../photo_post/66911e8707b6a.jpg', '2024-07-12 12:16:07', '2024-07-12 12:16:07'),
(9, 1, 'Important globals', 'Bootstrap employs a handful of important global styles and settings, all of which are almost exclusively geared towards the normalization of cross browser styles. Let’s dive in.', 'http://localhost:8080/learn_php/block_post_php/users../photo_post/66912088a3b13.jpg', '2024-07-12 12:24:40', '2024-07-12 12:24:40'),
(10, 1, 'hello world', 'hello world', 'http://localhost:8080/learn_php/block_post_php/users/photo_post/df.jpg', '2024-07-14 12:40:54', '2024-07-14 12:40:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `profile_photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `FullName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `profile_photo`, `created_at`, `FullName`) VALUES
(1, 'rithisak', 'onrithisak', 'rithisak@gmail.com', 'http://localhost:8080/learn_php/block_post_php/users/photo_profile/sak.png', '2024-06-11 12:00:38', 'ON Rithisak'),
(2, 'ronaldo', '11111111', 'ronaldo@gmail.com', 'http://localhost:8080/learn_php/block_post_php/users/df_pf.jpg', '2024-06-12 09:25:38', 'Cristiano Ronaldo'),
(3, 'fan', '11111111', 'fan@gmail.com', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRipHy4eZddF2bCOpA5Afi4AOOtr8chWbixfw&s', '2024-07-14 12:49:25', 'Ronaldo Fan'),
(5, 'messi', '11111111', 'messi@gmail.com', 'https://hips.hearstapps.com/hmg-prod/images/lionel-messi-celebrates-after-their-sides-third-goal-by-news-photo-1686170172.jpg', '2024-07-14 12:55:27', 'Lionel Messi'),
(6, 'neymar', '11111111', 'neymar@gmail.com', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrfC5TPxkYkOZGUqB4g7UTuasWX1hs38X5uw&s', '2024-07-14 13:00:12', 'Neymar Jr'),
(7, 'uefa', 'uefa', 'champion@gamil.com', 'https://s.cafebazaar.ir/images/icons/com.uefa.ucl-29009352-9aef-44c3-9bbf-e7a0520af585_512x512.png?x-img=v1/resize,h_256,w_256,lossless_false/optimize', '2024-07-14 13:05:08', 'UEFA Champions League'),
(8, 'marcelo', 'marcelo', 'marcelo@gmail.com', 'https://e00-marca.uecdn.es/assets/multimedia/imagenes/2020/05/01/15883615046354.jpg', '2024-07-14 13:07:47', 'Marcelo'),
(9, 'pepe', 'pepe', 'pepe@gmail.com', 'https://static.toiimg.com/thumb/msid-95842380,width-1280,height-720,resizemode-4/95842380.jpg', '2024-07-14 13:10:23', 'PEPE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD UNIQUE KEY `username_2` (`username`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
