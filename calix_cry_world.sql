-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 09:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calix_cry_world`
--

-- --------------------------------------------------------

--
-- Table structure for table `airdrop_coins`
--

CREATE TABLE `airdrop_coins` (
  `sno` int(50) NOT NULL,
  `coin_name` varchar(500) NOT NULL,
  `coin_img` text NOT NULL,
  `coin_tagline` varchar(2000) NOT NULL,
  `airdrop_description` text NOT NULL,
  `airdrop_steps` text NOT NULL,
  `whitepaper` varchar(500) NOT NULL,
  `tokens` varchar(500) NOT NULL,
  `est_value` varchar(50) NOT NULL,
  `end_date` date NOT NULL,
  `referral_available` varchar(10) NOT NULL,
  `referral_link` varchar(500) NOT NULL,
  `blockchain` varchar(50) NOT NULL,
  `website_link` varchar(500) NOT NULL,
  `airdrop_join_link` varchar(500) NOT NULL,
  `publish_date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `airdrop_coins`
--

INSERT INTO `airdrop_coins` (`sno`, `coin_name`, `coin_img`, `coin_tagline`, `airdrop_description`, `airdrop_steps`, `whitepaper`, `tokens`, `est_value`, `end_date`, `referral_available`, `referral_link`, `blockchain`, `website_link`, `airdrop_join_link`, `publish_date`, `status`) VALUES
(1, 'Pink BNB 2nd Promo', 'https://calixworld.com/wp-content/uploads/2023/04/crypto-pink-bnb-1.webp', 'PNB3 is The Worlds first AI-Based Cryptocurrency media portal.', 'PNB3 is The Worlds first AI-Based Cryptocurrency media portal. Its designed to collect large amounts of data about the cryptocurrency industry, label training data and analyze the data for correlations and patterns, and use these patterns to make predictions about future states.\n\nThis system consists of 3 major layers, user interface(UI), crawler, and Artificial intelligence(AI). Each layer has different roles to give users the best and fastest experience. Pink BNB is giveaway a total amount of $10.000 worth of PNB tokens to random 2.000 users, for completing listed tasks.Additional Referral rewards:Top 1: $30 in PNB tokensTop 2-10: $25 in PNB tokensTop 11-50: $20 in PNB tokensTop 51-100: $15 in PNB tokensTop 101-200: $10 in PNB tokens', '<span style=\"color: var(--wp--preset--color--black); font-family: var(--wp--preset--font-family--kumbh-sans); font-size: var(--wp--preset--typography--font-size--big); font-weight: var(--wp--custom--typography--font-weight--bold);\">Step by step guide</span>\n<div class=\"provider-steps\">\n<div id=\"task1\" class=\"step\">\n<div class=\"step-number\">1. Chat with the <a href=\"https://t.me/pinkbnb\" target=\"_blank\" rel=\"sponsored noopener noreferrer\">Pink BNB\'s Telegram Bot</a></div>\n</div>\n<div id=\"task2\" class=\"step\">\n<div class=\"step-number\">2. Join <a href=\"https://t.me/pinkbnb\" target=\"_blank\" rel=\"sponsored noopener noreferrer\">Pink BNB\'s Telegram Group</a></div>\n</div>\n<div id=\"task3\" class=\"step\">\n<div class=\"step-number\">3. Join <a href=\"https://t.me/pnbworld\" target=\"_blank\" rel=\"sponsored noopener noreferrer\">Pink BNB\'s Telegram Announcement Channel</a></div>\n</div>\n<div id=\"task4\" class=\"step\">\n<div class=\"step-number\">4. Follow <a href=\"https://twitter.com/pnbworld\" target=\"_blank\" rel=\"sponsored noopener noreferrer\">Pink BNB\'s Twitter Page</a> and retweet the pinned tweet</div>\n</div>\n<div id=\"task5\" class=\"step\">\n<div class=\"step-number\">5. Submit your details to the Bot</div>\n</div>\n</div>', 'https://twitter.com/calixworldcrypt', '2000 TEST', '$15', '2023-04-28', 'yes', 'https://twitter.com/calixworldcrypt', 'Ethereum', 'https://twitter.com/calixworldcrypt', 'https://twitter.com/calixworldcrypt', '2023-04-16', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `airdrop_coin_social`
--

CREATE TABLE `airdrop_coin_social` (
  `sno` int(50) NOT NULL,
  `airdrop_sno` varchar(500) DEFAULT NULL,
  `website_link` varchar(500) DEFAULT NULL,
  `join_link` varchar(500) DEFAULT NULL,
  `twitter_link` varchar(500) DEFAULT NULL,
  `medium_link` varchar(500) DEFAULT NULL,
  `youtube_link` varchar(500) DEFAULT NULL,
  `facebook_link` varchar(500) DEFAULT NULL,
  `instagram_link` varchar(500) DEFAULT NULL,
  `discord_link` varchar(500) DEFAULT NULL,
  `telegram_link` varchar(500) DEFAULT NULL,
  `blog_link` varchar(500) DEFAULT NULL,
  `github_link` varchar(500) DEFAULT NULL,
  `reddit_link` varchar(500) DEFAULT NULL,
  `linkedin_link` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `airdrop_coin_social`
--

INSERT INTO `airdrop_coin_social` (`sno`, `airdrop_sno`, `website_link`, `join_link`, `twitter_link`, `medium_link`, `youtube_link`, `facebook_link`, `instagram_link`, `discord_link`, `telegram_link`, `blog_link`, `github_link`, `reddit_link`, `linkedin_link`) VALUES
(1, '1', 'https://calixworld.com', 'https://calixworld.com', 'https://twitter.com/calixworldcrypt', '', '', '', '', 'https://discord.gg/bNUdHQFF3d', 'https://t.me/calixcryptoworld', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `full_name` varchar(500) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `register_date` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airdrop_coins`
--
ALTER TABLE `airdrop_coins`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `airdrop_coin_social`
--
ALTER TABLE `airdrop_coin_social`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airdrop_coins`
--
ALTER TABLE `airdrop_coins`
  MODIFY `sno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `airdrop_coin_social`
--
ALTER TABLE `airdrop_coin_social`
  MODIFY `sno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
