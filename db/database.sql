-- MySQL dump 10.13  Distrib 8.0.32, for Linux (x86_64)
--
-- Host: localhost    Database: calix_cry_world
-- ------------------------------------------------------
-- Server version	8.0.32-0ubuntu0.20.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `advertisement`
--

DROP TABLE IF EXISTS `advertisement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `advertisement` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `ads_location` varchar(255) DEFAULT NULL,
  `banner_title` varchar(255) DEFAULT NULL,
  `banner_img` varchar(255) DEFAULT NULL,
  `banner_link` text NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `advertisement`
--

LOCK TABLES `advertisement` WRITE;
/*!40000 ALTER TABLE `advertisement` DISABLE KEYS */;
INSERT INTO `advertisement` VALUES (2,'bottom_banner','Bottom Banner ','644a2d63787b6.jpg','https://www.bottom.com','Active'),(3,'top_banner','Top Banner Test','644a2cd68f0b3.jpg','https://www.top.com','Active'),(4,'airdrop_desc','Airdrop Description','6446c72cc3094.jpg','https://www.airdropdesc.com','Active'),(5,'airdrop_list_blog','Airdrop List Blogs','644a2e759c359.jpg','https://listblog.com','Active'),(6,'req_contact_left','Request Contact','6446cb2361384.jpg','https://www.left.com','Active'),(7,'req_contact_right','Request Contact Right','6446cb311c644.jpg','https://www.right.com','Active');
/*!40000 ALTER TABLE `advertisement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `airdrop_coin_social`
--

DROP TABLE IF EXISTS `airdrop_coin_social`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `airdrop_coin_social` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `airdrop_sno` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `website_link` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `join_link` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `twitter_link` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `medium_link` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `youtube_link` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `facebook_link` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `instagram_link` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `discord_link` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telegram_link` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `blog_link` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `github_link` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reddit_link` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `linkedin_link` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `airdrop_coin_social`
--

LOCK TABLES `airdrop_coin_social` WRITE;
/*!40000 ALTER TABLE `airdrop_coin_social` DISABLE KEYS */;
INSERT INTO `airdrop_coin_social` VALUES (1,'1','https://calixworld.com','https://calixworld.com','https://twitter.com/calixworldcrypt','https://calixworld.com','','','','https://discord.gg/bNUdHQFF3d','https://t.me/calixcryptoworld','','','',''),(2,'2','https://calixworld.com','https://calixworld.com','https://twitter.com/calixworldcrypt','https://calixworld.com','https://calixworld.com','','','https://discord.gg/bNUdHQFF3d','https://t.me/calixcryptoworld',NULL,NULL,NULL,NULL),(3,'3','https://calixworld.com','https://calixworld.com','https://twitter.com/calixworldcrypt','','','','https://calixworld.com','https://discord.gg/bNUdHQFF3d','https://t.me/calixcryptoworld',NULL,NULL,NULL,'https://calixworld.com'),(4,'4','https://calixworld.com','https://calixworld.com','https://twitter.com/calixworldcrypt','','','','https://calixworld.com','https://discord.gg/bNUdHQFF3d','https://t.me/calixcryptoworld',NULL,NULL,NULL,'https://calixworld.com'),(5,'5','https://calixworld.com','https://calixworld.com','https://twitter.com/calixworldcrypt','','','','https://calixworld.com','https://discord.gg/bNUdHQFF3d','https://t.me/calixcryptoworld',NULL,NULL,NULL,'https://calixworld.com'),(6,'6','https://calixworld.com','https://calixworld.com','https://twitter.com/calixworldcrypt','','','','https://calixworld.com','https://discord.gg/bNUdHQFF3d','https://t.me/calixcryptoworld',NULL,NULL,NULL,'https://calixworld.com'),(7,'28','https://www.testhh.com','https://www.testhh.com','https://www.testhh.com',NULL,'https://www.testhh.com','https://www.testhh.com',NULL,'https://www.testhh.com',NULL,NULL,'https://www.testhh.com',NULL,NULL);
/*!40000 ALTER TABLE `airdrop_coin_social` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `airdrop_coins`
--

DROP TABLE IF EXISTS `airdrop_coins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `airdrop_coins` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `coin_name` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `coin_img` text COLLATE utf8mb4_general_ci NOT NULL,
  `coin_tagline` varchar(2000) COLLATE utf8mb4_general_ci NOT NULL,
  `airdrop_description` text COLLATE utf8mb4_general_ci NOT NULL,
  `airdrop_steps` text COLLATE utf8mb4_general_ci NOT NULL,
  `whitepaper` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `tokens` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `est_value` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `end_date` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `referral_available` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `referral_link` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `blockchain` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `website_link` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `airdrop_join_link` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `publish_date` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `airdrop_coins`
--

LOCK TABLES `airdrop_coins` WRITE;
/*!40000 ALTER TABLE `airdrop_coins` DISABLE KEYS */;
INSERT INTO `airdrop_coins` VALUES (1,'Dash Coin','6442e1bc02aad.png','Bitcoin - Open source P2P money','<p>Bitcoin is a protocol which implements a highly available, public, permanent, and decentralized ledger. In order to add to the ledger, a user must prove they control an entry in the ledger. The protocol specifies that the entry indicates an amount of a token, bitcoin with a minuscule</p><p><br></p><p>adadad</p><p><br></p>','asdsda','https://www.bitcoin.org','1000 BTC','10','2023-05-10','Yes','https://www.bitcoin.org','https://www.bitcoin.org','https://www.bitcoin.org','https://www.bitcoin.org','','active'),(2,'Test 1 Airdrop','6444e861ea2c4.jpg','PNB3 is The Worlds first AI-Based Cryptocurrency media portal.','PNB3 is The Worlds first AI-Based Cryptocurrency media portal. Its designed to collect large amounts of data about the cryptocurrency industry, label training data and analyze the data for correlations and patterns, and use these patterns to make predictions about future states.\r\n\r\nThis system consists of 3 major layers, user interface(UI), crawler, and Artificial intelligence(AI). Each layer has different roles to give users the best and fastest experience. Pink BNB is giveaway a total amount of $10.000 worth of PNB tokens to random 2.000 users, for completing listed tasks.Additional Referral rewards:Top 1: $30 in PNB tokensTop 2-10: $25 in PNB&nbsp;tokensTop 11-50: $20 in PNB&nbsp;tokensTop 51-100: $15 in PNB&nbsp;tokensTop 101-200: $10 in PNB&nbsp;tokens','testasd','https://twitter.com/calixworldcrypt','2000 TEST','15','2023-05-17','Yes','https://twitter.com/calixworldcrypt','Ethereum','https://twitter.com/calixworldcrypt','https://twitter.com/calixworldcrypt','','active'),(4,'Bitcoin','assets/img/coins/bitcoin.png','Bitcoin - Open source P2P money','Bitcoin is a protocol which implements a highly available, public, permanent, and decentralized ledger. In order to add to the ledger, a user must prove they control an entry in the ledger. The protocol specifies that the entry indicates an amount of a token, bitcoin with a minuscule','steps','https://www.bitcoin.org','1000 BTC','10','2023-05-10','Yes','https://www.bitcoin.org','https://www.bitcoin.org','https://www.bitcoin.org','https://www.bitcoin.org','','active'),(5,'Litecoin','assets/img/coins/bitcoin.png','Bitcoin - Open source P2P money','Bitcoin is a protocol which implements a highly available, public, permanent, and decentralized ledger. In order to add to the ledger, a user must prove they control an entry in the ledger. The protocol specifies that the entry indicates an amount of a token, bitcoin with a minuscule','steps','https://www.bitcoin.org','1000 BTC','10','2023-05-10','No','https://www.bitcoin.org','https://www.bitcoin.org','https://www.bitcoin.org','https://www.bitcoin.org','','active'),(6,'Dash Coin','assets/img/coins/bitcoin.png','Bitcoin - Open source P2P money','Bitcoin is a protocol which implements a highly available, public, permanent, and decentralized ledger. In order to add to the ledger, a user must prove they control an entry in the ledger. The protocol specifies that the entry indicates an amount of a token, bitcoin with a minuscule','steps','https://www.bitcoin.org','1000 BTC','10','2023-05-10','Yes','https://www.bitcoin.org','https://www.bitcoin.org','https://www.bitcoin.org','https://www.bitcoin.org','','active'),(28,'Test K','6442e42f77769.png','Test K Project Tagline','<p>Write Description of Airdrop</p><p><br></p><p><a href=\"https://www.testk.com\" target=\"_blank\">https://www.testk.com</a><br></p>','https://www.testk.com','https://www.testk.com','1000 TK','10','05/20/2023','Yes','https://www.testk.com','Solana','https://www.testk.com','https://www.testk.com','','active');
/*!40000 ALTER TABLE `airdrop_coins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_posts`
--

DROP TABLE IF EXISTS `blog_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog_posts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `feature_image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `content` text COLLATE utf8mb4_general_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `updated_at` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `likes` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_posts`
--

LOCK TABLES `blog_posts` WRITE;
/*!40000 ALTER TABLE `blog_posts` DISABLE KEYS */;
INSERT INTO `blog_posts` VALUES (1,'Test Blog Updates','64456787e3816.jpg','<p>Lorem ipsum condimentum ligula. Fusce fringilla magna non sapien dictum, eget\r\n                                        faucibus\r\n                                        dui maximus. Donec fringilla vel mi consequat tempor. </p>\r\n                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis diam erat.\r\n                                        Duvelit\r\n                                        lecspoe a blandit sit amet, tempor at lorem. Donec ultricies, lorem sed ultrices\r\n                                        interdum, leo luctfiiius sem, vel vulputate diam ipsum sed lorem. Donec tempor\r\n                                        arcu\r\n                                        nisl, et molestie massa hhisque ut. Nunc at rutrum leo. Mauris metus mauris,\r\n                                        tridd. </p>\r\n                                    <p>Mauris tempus erat laoreet turpis lobortis, eu tincidunt erat fermentum. Aliquam\r\n                                        nonh\r\n                                        edunt urna. Integer tincidunt nec nisl vitae ullamcorper. Proin sed ultrices\r\n                                        erat.\r\n                                        Praesent vdd warius ultricemassa at faucibus. Aenean dignissim, orci sed\r\n                                        faucibus\r\n                                        pharetra, dui mi dir ssim tortor, sit amet ntum mi ligula sit amet augue.\r\n                                        Pellentesqs\r\n                                        placerat. </p>\r\n                                    <img src=\"assets/img/images/single-news.jpg\" class=\"img-fluid\" alt=\"News\">\r\n                                    <div class=\"row\">\r\n                                        <div class=\"col-lg-6\">\r\n                                            <h5>The Guest Series Test</h5>\r\n                                            <p> Mauris tempus erat laoreet turpis lobortis, eu tincidunt erat fermentum.\r\n                                                Aliquam\r\n                                                non tidunt urna. Integer tincidunt nec nisl vitae Proin sed ultrices\r\n                                                erat. </p>\r\n                                        </div>\r\n                                        <div class=\"col-lg-6\">\r\n                                            <h5>How and why</h5>\r\n                                            <p>Aenean dignissim, orci sed faucibus nissim tortor, sit amet condimentum\r\n                                                mi ligula sit amet augue. </p>\r\n                                        </div>\r\n                                    </div>\r\n                                    <blockquote class=\"blockquote\">\r\n                                        Integer tincidunt nec nisl vitae ullamcorper. Proin sed ultrices erat. Praesent\r\n                                        varius ultrices massa at faucibus.\r\n                                    </blockquote>','Admin','2023-04-19 08:50:44','2023-04-23','airdrop, blog, test','2','Inactive'),(2,'Test Post Blog','644568d098d99.jpg','<p>Lorem ipsum condimentum ligula. Fusce fringilla magna non sapien dictum, eget\r\n                                        faucibus\r\n                                        dui maximus. Donec fringilla vel mi consequat tempor. </p>\r\n                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis diam erat.\r\n                                        Duvelit\r\n                                        lecspoe a blandit sit amet, tempor at lorem. Donec ultricies, lorem sed ultrices\r\n                                        interdum, leo luctfiiius sem, vel vulputate diam ipsum sed lorem. Donec tempor\r\n                                        arcu\r\n                                        nisl, et molestie massa hhisque ut. Nunc at rutrum leo. Mauris metus mauris,\r\n                                        tridd. </p>\r\n                                    <p>Mauris tempus erat laoreet turpis lobortis, eu tincidunt erat fermentum. Aliquam\r\n                                        nonh\r\n                                        edunt urna. Integer tincidunt nec nisl vitae ullamcorper. Proin sed ultrices\r\n                                        erat.\r\n                                        Praesent vdd warius ultricemassa at faucibus. Aenean dignissim, orci sed\r\n                                        faucibus\r\n                                        pharetra, dui mi dir ssim tortor, sit amet ntum mi ligula sit amet augue.\r\n                                        Pellentesqs\r\n                                        placerat. </p>\r\n                                    <img src=\"assets/img/images/single-news.jpg\" class=\"img-fluid\" alt=\"News\">\r\n                                    <div class=\"row\">\r\n                                        <div class=\"col-lg-6\">\r\n                                            <h5>The Guest Series</h5>\r\n                                            <p> Mauris tempus erat laoreet turpis lobortis, eu tincidunt erat fermentum.\r\n                                                Aliquam\r\n                                                non tidunt urna. Integer tincidunt nec nisl vitae Proin sed ultrices\r\n                                                erat. </p>\r\n                                        </div>\r\n                                        <div class=\"col-lg-6\">\r\n                                            <h5>How and why</h5>\r\n                                            <p>Aenean dignissim, orci sed faucibus nissim tortor, sit amet condimentum\r\n                                                mi ligula sit amet augue. </p>\r\n                                        </div>\r\n                                    </div>\r\n                                    <blockquote class=\"blockquote\">\r\n                                        Integer tincidunt nec nisl vitae ullamcorper. Proin sed ultrices erat. Praesent\r\n                                        varius ultrices massa at faucibus.\r\n                                    </blockquote>','Admin','2023-04-19 09:10:08','2023-04-23','test, post2, blog','10','Active'),(9,'Blog Test','64455fc11c4ee.jpg','Blog test Title<br>Write Blog Content Here.','Admin','2023-04-23','2023-04-23','Test, blog','1','Active');
/*!40000 ALTER TABLE `blog_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_form`
--

DROP TABLE IF EXISTS `contact_form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact_form` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `reference` int NOT NULL,
  `full_name` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `social_link` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `description_contact` text COLLATE utf8mb4_general_ci NOT NULL,
  `publish_date` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `update_date` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_form`
--

LOCK TABLES `contact_form` WRITE;
/*!40000 ALTER TABLE `contact_form` DISABLE KEYS */;
INSERT INTO `contact_form` VALUES (1,32960129,'asdajsh','adsj@asd.com','https:www.htthhf.com','uhasdaida dasi','2023-04-19','2023-04-23','Processing'),(2,27738045,'asdajsh','adsj@asd.com','https:www.htthhf.com','uhasdaida dasi','2023-04-19','2023-04-23','Resolved'),(3,77122821,'asdajsh','adsj@asd.com','https:www.htthhf.com','uhasdaida dasi','2023-04-19','2023-04-23','Resolved'),(4,61515223,'Ramesh','ramesh@ram.com','https://t.me/rameshkk','This is a test message','2023-04-23','2023-04-23','Submitted'),(5,80352437,'Mahesh','mahesh@gmail.com','https://t.me/mahesh','This is a mahesh for testing message only for testing.','2023-04-25','2023-04-25','Submitted'),(6,73802417,'satyy','satyy@gm.co','https://sattyy.co','this is test message only','2023-04-26','2023-04-26','Submitted'),(7,26232567,'meto','meto@fka.com','https://www.memee.com','meto test','2023-04-26','2023-04-26','Submitted'),(8,18514618,'meto','meto@fka.com','https://www.memee.com','meto test','2023-04-26','2023-04-26','Submitted');
/*!40000 ALTER TABLE `contact_form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `info_pages`
--

DROP TABLE IF EXISTS `info_pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `info_pages` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `page_title` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `content` text COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info_pages`
--

LOCK TABLES `info_pages` WRITE;
/*!40000 ALTER TABLE `info_pages` DISABLE KEYS */;
INSERT INTO `info_pages` VALUES (1,'About Us','<p style=\"line-height: 1.8;\">Welcome to <span style=\"font-weight: bold;\">Airdrop Listo</span>, your go-to platform for the latest updates and news about crypto airdrops. We are a team of crypto enthusiasts who are passionate about the cryptocurrency space and strive to provide our users with the most up-to-date information regarding airdrops.</p><p style=\"line-height: 1.8;\">Our mission is to make it easy for crypto enthusiasts to find and participate in airdrops by aggregating all the relevant information in one place. We understand how time-consuming and challenging it can be to keep track of all the different airdrops available in the market. That\'s why we created this platform to provide a comprehensive list of airdrops, their requirements, and how to participate.</p><p style=\"line-height: 1.8;\">At&nbsp;<span style=\"font-weight: 700; background-color: transparent; color: inherit;\">Airdrop Listo</span><span style=\"background-color: transparent; color: inherit;\">, we pride ourselves on providing accurate and reliable information to our users. We constantly monitor the crypto market and work tirelessly to keep our website updated with the latest airdrop listings. Our team consists of experienced researchers and analysts who are well-versed in the cryptocurrency space and can provide insights into the potential of various airdrops.</span></p><p style=\"line-height: 1.8;\">We believe in the power of community and encourage users to engage with us and each other by leaving comments and feedback. Our goal is to create a supportive community where users can share their experiences, ask questions, and learn from one another.</p><p style=\"line-height: 1.8;\">Thank you for visiting&nbsp;<span style=\"font-weight: 700;\">Airdrop Listo</span>. We hope you find our platform informative and helpful in your crypto journey.</p>','about-us','Active'),(3,'Privacy Policy','<div>Thank you for visiting our website&nbsp;<span style=\"font-weight: bold;\">Airdrop Listo</span>. This privacy policy outlines how we handle your personal information and data. By using our website, you agree to the terms and conditions of this privacy policy.</div><div><br></div><div><span style=\"font-weight: bold;\">Data Collection and Usage</span></div><div>We collect personal information such as your name and email address when you sign up for our newsletter or participate in any of our activities. We may use this information to communicate with you and provide you with relevant information about our services and products. We do not sell or rent your personal information to any third parties.</div><div>We also collect non-personal information, such as your IP address, browser type, and device information, to help us improve our website and provide a better user experience. We may use cookies or similar technologies to collect this data.</div><div><br></div><div><span style=\"font-weight: bold;\">Data Protection</span></div><div>We take reasonable measures to protect your personal information and data from unauthorized access, misuse, or disclosure. We use industry-standard encryption technologies to protect your data during transmission and storage.</div><div><br></div><div><span style=\"font-weight: bold;\">Third-Party Websites</span></div><div>Our website may contain links to third-party websites or services that are not under our control. We are not responsible for the privacy practices or content of these websites.</div><div><br></div><div><span style=\"font-weight: bold;\">Data Retention</span></div><div>We retain your personal information for as long as necessary to fulfill the purposes for which it was collected or as required by law. We will delete your personal information upon your request, unless retention is necessary for legal or business purposes.</div><div><br></div><div><span style=\"font-weight: bold;\">Children’s Privacy</span></div><div>Our website is not intended for use by children under the age of 13. We do not knowingly collect personal information from children under the age of 13.</div><div><br></div><div><span style=\"font-weight: bold;\">Changes to Privacy Policy</span></div><div>We reserve the right to modify or update this privacy policy at any time. We will notify you of any changes by posting the updated policy on our website.</div><div><br></div><div>If you have any questions or concerns about this privacy policy, please contact us <a href=\"http://#\" target=\"_blank\">Click Here</a></div>','privacy-policy','Active'),(4,'Terms & Conditions','<p><span style=\"background-color: transparent; color: inherit;\">Welcome to&nbsp;</span><span style=\"font-weight: 700;\">Airdrop Listo</span><span style=\"background-color: transparent; color: inherit;\">. These terms and conditions outline the rules and regulations for using our website. By accessing our website, you accept and agree to these terms and conditions.</span><br></p><p><span style=\"font-weight: bold;\">Intellectual Property</span></p><p>The content, design, and layout of our website are protected by intellectual property laws and are owned by us or our licensors. You may not reproduce, distribute, modify, or use any part of our website without our prior written consent.</p><p><span style=\"font-weight: bold;\">User Conduct</span></p><p>You agree to use our website only for lawful purposes and in accordance with these terms and conditions. You are responsible for your conduct while using our website and must not engage in any activity that could damage or interfere with our website or its functionality.</p><p><span style=\"font-weight: bold;\">Disclaimer</span></p><p>We make no representations or warranties regarding the accuracy, reliability, or completeness of the information on our website. We disclaim any liability for any loss or damage arising from your reliance on the information on our website.</p><p><span style=\"font-weight: bold;\">Limitation of Liability</span></p><p>We shall not be liable for any indirect, special, incidental, or consequential damages arising from the use of our website or the information on it. Our liability to you for any direct damages shall be limited to the amount you paid to us, if any.</p><p><span style=\"font-weight: bold;\">Third-Party Websites</span></p><p>Our website may contain links to third-party websites or services that are not under our control. We are not responsible for the content or privacy practices of these websites.</p><p><span style=\"font-weight: bold;\">Changes to Terms and Conditions</span></p><p>We reserve the right to modify or update these terms and conditions at any time. We will notify you of any changes by posting the updated terms and conditions on our website.</p><p><span style=\"font-weight: bold;\">Governing Law</span></p><p>These terms and conditions shall be governed by and construed in accordance with the laws of [state/country], without regard to its conflict of law provisions.</p><p></p><p>If you have any questions or concerns about these terms and conditions, please contact us at [contact email].</p>','terms-conditions','Active');
/*!40000 ALTER TABLE `info_pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `new_airdrop_requests`
--

DROP TABLE IF EXISTS `new_airdrop_requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `new_airdrop_requests` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `reference` int NOT NULL,
  `coin_name` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `project_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `designation` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ico_start_date` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ico_end_date` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `total_airdrop_value` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `individual_reward_value` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `referral_bonus` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `coin_rate_against_usd` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `project_telegram_link` varchar(450) COLLATE utf8mb4_general_ci NOT NULL,
  `project_twitter_link` varchar(450) COLLATE utf8mb4_general_ci NOT NULL,
  `project_discord_link` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `project_contact_telegram_id` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `more_information` text COLLATE utf8mb4_general_ci NOT NULL,
  `create_date` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `update_date` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'submitted',
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `new_airdrop_requests`
--

LOCK TABLES `new_airdrop_requests` WRITE;
/*!40000 ALTER TABLE `new_airdrop_requests` DISABLE KEYS */;
INSERT INTO `new_airdrop_requests` VALUES (1,41058469,'test','test','test@test.com','founder','04/04/2023','27/04/2023','120','1','0','0.5','https://www.test.com','https://www.test.com','https://www.test.com','https://www.test.com','www.test.com','','2023-04-23','Rejected'),(2,12371285,'Moon Coin','Moon Coin LLP','mooncoin@gmail.com','it-team','11/04/2023','26/04/2023','1500','10','0','0.01','http://www.mooncoin.com','http://www.mooncoin.com','http://www.mooncoin.com','https://t.me/mooncoin','This is a moon coin project ready to airdrop $10 for each individual on register of platform and participate with airdrop.','2023-04-23','2023-04-23','Submitted'),(3,11622543,'Moon Coin','Moon Coin LLP','mooncoin@gmail.com','it-team','11/04/2023','26/04/2023','1500','10','Yes','0.01','http://www.mooncoin.com','http://www.mooncoin.com','http://www.mooncoin.com','https://t.me/mooncoin','This is a moon coin project ready to airdrop $10 for each individual on register of platform and participate with airdrop.','2023-04-23','2023-04-23','Processing'),(4,31131509,'Moon Coin','Moon Coin LLP','mooncoin@gmail.com','it-team','11/04/2023','26/04/2023','1500','10','Yes','0.01','http://www.mooncoin.com','http://www.mooncoin.com','http://www.mooncoin.com','https://t.me/mooncoin','This is a moon coin project ready to airdrop $10 for each individual on register of platform and participate with airdrop.','2023-04-23','2023-04-23','Listed'),(5,12903485,'Moon Coin','Moon Coin LLP','mooncoin@gmail.com','it-team','11/04/2023','26/04/2023','1500','10','Yes','0.01','http://www.mooncoin.com','http://www.mooncoin.com','http://www.mooncoin.com','https://t.me/mooncoin','This is a moon coin project ready to airdrop $10 for each individual on register of platform and participate with airdrop.','2023-04-23','2023-04-23','Submitted'),(6,29513084,'Litecoin','Litecoin LLP','litecoin@gmail.com','Co-Founder','12/04/2023','24/04/2023','1000','5','No','0.5','https://www.calixworld.com/airdroop/submit.php','https://www.calixworld.com/airdroop/submit.php','https://www.calixworld.com/airdroop/submit.php','https://www.calixworld.com/airdroop/submit.php','https://www.calixworld.com/airdroop/submit.php\r\n\r\nthis is a test content','2023-04-26','2023-04-26','Submitted');
/*!40000 ALTER TABLE `new_airdrop_requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preheader_ads`
--

DROP TABLE IF EXISTS `preheader_ads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `preheader_ads` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `ads_location` varchar(255) DEFAULT NULL,
  `banner_title` varchar(255) DEFAULT NULL,
  `banner_img` varchar(255) DEFAULT NULL,
  `banner_link` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preheader_ads`
--

LOCK TABLES `preheader_ads` WRITE;
/*!40000 ALTER TABLE `preheader_ads` DISABLE KEYS */;
INSERT INTO `preheader_ads` VALUES (1,'','<h2 class=\"h5\">JOIN WITH US &amp; GET <span>20% - 50% BONUS</span></h2>','6446d739d381f.png','https://www.preheader.com','Active');
/*!40000 ALTER TABLE `preheader_ads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscribers`
--

DROP TABLE IF EXISTS `subscribers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscribers` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `date_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscribers`
--

LOCK TABLES `subscribers` WRITE;
/*!40000 ALTER TABLE `subscribers` DISABLE KEYS */;
INSERT INTO `subscribers` VALUES (20,'asd@gm.co','2023-04-24 20:59:36'),(21,'test@gm.com','2023-04-24 21:11:00'),(22,'adad@gm.co','2023-04-24 21:11:09'),(23,'adadad@gm.co','2023-04-24 21:11:12'),(26,'fraed@gm.co','2023-04-24 21:11:30'),(27,'adas@mm.co','2023-04-24 21:13:49'),(28,'fraasded@gm.co','2023-04-24 21:14:53'),(29,'asd@dm.co','2023-04-24 21:15:46'),(30,'aasdsd@dm.co','2023-04-24 21:16:01'),(31,'aasdsd@dam.co','2023-04-24 21:16:04'),(32,'aasdsdasd@dam.co','2023-04-24 21:16:11'),(33,'sads@gmm.co','2023-04-26 21:11:37');
/*!40000 ALTER TABLE `subscribers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `test` (
  `test_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
INSERT INTO `test` VALUES ('airdrop_imgs/download.png');
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `sno` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `full_name` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `register_date` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'admin','admin','$argon2id$v=19$m=2048,t=4,p=2$U3BNa3B0WE80R3RRNmRtUg$je/UcbHmPmDdTeLrfBKhTkzwTKeSuPU6djvGuopKt1o','2023-04-26','Active'),(4,'kranthi','kranthi','$argon2id$v=19$m=65536,t=4,p=1$dE9XRnZuR0czc3A0cm1nTg$KrMBzoUAfv8DLZQdACWk3GGrQMPApg/akki59Up8g+0','2023-04-26','Active');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-28  6:41:55
