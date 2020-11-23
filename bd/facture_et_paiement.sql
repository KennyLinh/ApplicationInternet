-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 23 nov. 2020 à 03:16
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `facture_et_paiement`
--

-- --------------------------------------------------------

--
-- Structure de la table `apropos`
--

CREATE TABLE `apropos` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL COMMENT 'ID department',
  `code` varchar(7) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'codes department',
  `name` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'names department'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='departments';

--
-- Déchargement des données de la table `departments`
--

INSERT INTO `departments` (`id`, `code`, `name`) VALUES
(1, 'BKS00', 'Books'),
(2, 'VGC00', 'Video Games & Consoles'),
(3, 'MTV00', 'Music,Movies & TV Shows'),
(4, 'ECO00', 'Electronics, Computers & Office'),
(5, 'HGT00', 'Home, Garden & Tools'),
(6, 'PSP00', 'Pet Supplies'),
(7, 'GFM00', 'Grocery & Whole Foods Market'),
(8, 'HTB00', 'Health & Beauty'),
(9, 'TKB00', 'Toys,Kids, Baby & STEM'),
(10, 'CSJ00', 'Clothing,Shoes & Jewelry'),
(11, 'HMD00', 'Handmade'),
(12, 'SPO00', 'Sports & Outdoors'),
(13, 'AMI00', 'Automotive & Industrial'),
(16, 'test12', 'test12');

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = Active, 0 = Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `files`
--

INSERT INTO `files` (`id`, `name`, `path`, `created`, `modified`, `status`) VALUES
(1, 'automotive&industrial.jpg', 'files/add/', '2020-11-17 00:00:00', '2020-11-17 00:00:00', 1),
(3, 'books.jpg', 'files/add/', '2020-11-17 00:00:00', '2020-11-17 00:00:00', 1),
(4, 'clothes-fashion.png', 'files/add/', '2020-11-17 00:00:00', '2020-11-17 00:00:00', 1),
(5, 'consoles.jpg', 'files/add/', '2020-11-17 00:00:00', '2020-11-17 00:00:00', 1),
(6, 'electronis-computers.jpeg', 'files/add/', '2020-11-17 00:00:00', '2020-11-17 00:00:00', 1),
(7, 'grocery-foodmarket.jpg', 'files/add/', '2020-11-17 00:00:00', '2020-11-17 00:00:00', 1),
(8, 'handmade.jpg', 'files/add/', '2020-11-17 00:00:00', '2020-11-17 00:00:00', 1),
(9, 'health&beauty.jpg', 'files/add/', '2020-11-17 00:00:00', '2020-11-17 00:00:00', 1),
(10, 'home.jpg', 'files/add/', '2020-11-17 00:00:00', '2020-11-17 00:00:00', 1),
(11, 'kids-toys.jpg', 'files/add/', '2020-11-17 00:00:00', '2020-11-17 00:00:00', 1),
(12, 'musicmovies.jpg', 'files/add/', '2020-11-17 00:00:00', '2020-11-17 00:00:00', 1),
(13, 'pet-supplies.png', 'files/add/', '2020-11-17 00:00:00', '2020-11-17 00:00:00', 1),
(14, 'sports.jpg', 'files/add/', '2020-11-17 00:00:00', '2020-11-17 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `i18n`
--

CREATE TABLE `i18n` (
  `id` int(11) NOT NULL,
  `locale` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `model` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `i18n`
--

INSERT INTO `i18n` (`id`, `locale`, `model`, `foreign_key`, `field`, `content`) VALUES
(5, 'fr_CA', 'Products', 1, 'name', 'Moi fr_CA'),
(6, 'fr_CA', 'Products', 1, 'product', 'Félicitations pour le premier order! fr_CA'),
(7, 'fr_CA', 'Orders', 1, 'title', 'Premier order fr_CA'),
(8, 'fr_CA', 'Orders', 1, 'body', 'Voici le premier order fr_CA'),
(9, 'fr_CA', 'Products', 2, 'name', 'Toi fr_CA'),
(10, 'fr_CA', 'Products', 2, 'product', 'Ton productaire fr_CA'),
(11, 'fr_CA', 'Orders', 2, 'title', 'Essai de slug'),
(12, 'fr_CA', 'Orders', 2, 'body', 'Voici un order pour tester le slug'),
(13, 'fr_CA', 'Orders', 4, 'title', 'Titre plus long'),
(14, 'fr_CA', 'Orders', 4, 'body', 'Un order plus long est accepté'),
(15, 'fr_CA', 'Tags', 1, 'title', 'Éducation'),
(16, 'fr_CA', 'Tags', 2, 'title', 'Ville de Laval'),
(17, 'fr_CA', 'Tags', 3, 'title', 'International'),
(18, 'fr_CA', 'Orders', 5, 'title', 'Tout sur Wikipedia'),
(19, 'fr_CA', 'Orders', 6, 'title', 'Tout sur Montmorency'),
(20, 'fr_CA', 'Orders', 7, 'title', 'Tout sur CakePHP'),
(21, 'fr_CA', 'Orders', 5, 'body', 'Tout ce que vous avez toujours voulu savoir sur Wikipedia'),
(22, 'fr_CA', 'Orders', 6, 'body', 'Tout ce que vous avez toujours voulu savoir sur le collège Montmorency'),
(23, 'fr_CA', 'Orders', 7, 'body', 'Tout ce que vous avez toujours voulu savoir sur CakePHP');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subsubject_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `body` text,
  `published` tinyint(1) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `subsubject_id`, `title`, `slug`, `body`, `published`, `created`, `modified`) VALUES
(18, 1, 1, 'test', 'test', 'test', 1, '2020-11-20 07:03:22', '2020-11-20 07:03:22');

-- --------------------------------------------------------

--
-- Structure de la table `orders_files`
--

CREATE TABLE `orders_files` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `orders_files`
--

INSERT INTO `orders_files` (`id`, `order_id`, `file_id`) VALUES
(5, 14, 10),
(6, 16, 9),
(9, 18, 3);

-- --------------------------------------------------------

--
-- Structure de la table `orders_tags`
--

CREATE TABLE `orders_tags` (
  `order_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `orders_tags`
--

INSERT INTO `orders_tags` (`order_id`, `tag_id`) VALUES
(18, 3);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created`, `modified`) VALUES
(1, 'Admin', 'Il peut tout faire !', '2020-11-18', '2020-11-18'),
(2, 'membre', 'droit utilisateur - normale', '2020-11-18', '2020-11-18');

-- --------------------------------------------------------

--
-- Structure de la table `selections`
--

CREATE TABLE `selections` (
  `id` int(11) NOT NULL COMMENT 'ID selection',
  `department_id` int(11) NOT NULL COMMENT 'department id',
  `code` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'code selection',
  `name` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'name selection'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='selections';

--
-- Déchargement des données de la table `selections`
--

INSERT INTO `selections` (`id`, `department_id`, `code`, `name`) VALUES
(1, 1, '10000', 'Books'),
(2, 1, '11000', 'Kindle Books'),
(3, 1, '12000', 'Audible Audiobooks'),
(4, 2, '20000', 'PC Gaming'),
(5, 2, '21000', 'Console Gaming'),
(6, 3, '30000', 'Movies & TV Shows'),
(7, 3, '31000', 'Music'),
(8, 4, '40000', 'Computers'),
(9, 4, '41000', 'Electronics'),
(10, 5, '50000', 'Home'),
(11, 5, '51000', 'Tools & Home Improvement'),
(12, 6, '60000', 'Pet Supplies'),
(13, 7, '70000', 'Grocery'),
(14, 7, '71000', 'Foods Market'),
(15, 8, '80000', 'Health'),
(16, 8, '81000', 'Beauty'),
(17, 9, '90000', 'Toys & Games'),
(18, 9, '91000', 'Baby'),
(19, 10, '100000', 'Women'),
(20, 10, '101000', 'Men'),
(21, 10, '102000', 'Kids & Baby'),
(22, 10, '103000', 'Accessories'),
(23, 11, '110000', 'Handmade'),
(24, 12, '120000', 'Sports'),
(25, 12, '121000', 'Outdoors'),
(26, 13, '130000', 'Automotive'),
(27, 13, '131000', 'Industrial & Scientific'),
(29, 1, 'test', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `subsubjects`
--

CREATE TABLE `subsubjects` (
  `id` int(11) NOT NULL COMMENT 'ID subsubject',
  `department_id` int(11) NOT NULL COMMENT 'department_id',
  `selection_id` int(11) NOT NULL COMMENT 'selection_id',
  `code` varchar(9) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'code subsubjects',
  `name` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'name subsubjects'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='subsubjects';

--
-- Déchargement des données de la table `subsubjects`
--

INSERT INTO `subsubjects` (`id`, `department_id`, `selection_id`, `code`, `name`) VALUES
(1, 1, 1, '10001', 'Books in French'),
(2, 1, 1, '10002', 'Textbooks'),
(3, 1, 1, '11001', 'Children Books'),
(4, 1, 2, '11002', 'Kindle Books in French'),
(5, 1, 2, '11003', 'Kindle Unlimited'),
(6, 1, 3, '11004', 'Prime Reading'),
(7, 1, 3, '12001', 'Audible Membership'),
(8, 2, 4, '20001', 'Roms'),
(9, 2, 4, '20002', 'PC Builds'),
(10, 2, 4, '20003', 'PC Parts'),
(11, 2, 5, '21001', 'Consoles Accessories'),
(12, 2, 5, '21002', 'Consoles games'),
(13, 2, 5, '21003', 'Consoles Membership cards'),
(14, 3, 6, '30001', 'Blu-ray'),
(15, 3, 6, '30002', 'Movies'),
(16, 3, 6, '30003', 'TV Shows'),
(17, 3, 7, '31001', 'Canadian Music'),
(18, 3, 7, '31002', 'Music in French'),
(19, 3, 7, '31003', 'Rap albums'),
(20, 3, 7, '31004', 'Best Artist of the year'),
(21, 3, 7, '31005', 'Instruments'),
(22, 3, 7, '31006', 'Jazz albums'),
(23, 3, 7, '31007', 'Orchestral Albums'),
(24, 4, 9, '40001', 'TV & Home Theatre'),
(25, 4, 9, '40002', 'Headphones & Speakers'),
(26, 4, 9, '40003', 'Camera,Photo & Video'),
(27, 4, 9, '40004', 'Cell Phones & Accessories'),
(28, 4, 9, '40005', 'Bluetooth & Wireless Speakers'),
(29, 4, 9, '40006', 'Car Electronics'),
(30, 4, 9, '40007', 'Wearable Technology'),
(31, 4, 8, '41001', 'Computer & Tablet Accessories'),
(32, 4, 8, '41002', 'Monitors'),
(33, 4, 8, '41003', 'Laptops'),
(34, 4, 8, '41004', 'Tablets'),
(35, 4, 8, '41005', 'Desktops'),
(36, 4, 8, '41006', 'Hard Drives,Storage & Memory'),
(37, 4, 8, '41007', 'Networking'),
(38, 4, 8, '41008', 'Software'),
(39, 4, 8, '41009', 'PC Components'),
(40, 4, 8, '41010', 'Printer & Ink'),
(41, 4, 8, '41011', 'Office & School Supplies'),
(42, 5, 10, '50001', 'Furniture'),
(43, 5, 10, '50002', 'Home Décor'),
(44, 5, 10, '50003', 'Bedding'),
(45, 5, 10, '50004', 'Household Supplies'),
(46, 5, 10, '50005', 'All patio & Garden'),
(47, 5, 11, '51001', 'All Tools & Home Improvement'),
(48, 5, 11, '51002', 'Power Tools & Accessories'),
(49, 5, 11, '51003', 'Hand Tools'),
(50, 5, 11, '51004', 'Electrical'),
(51, 5, 11, '51005', 'Kitchen & Bath Fixtures'),
(52, 5, 11, '51006', 'Hardware'),
(53, 5, 11, '51007', 'Home Improvement'),
(54, 6, 12, '60001', 'Dog Supplies'),
(55, 6, 12, '60002', 'Cat Supplies'),
(56, 6, 12, '60003', 'Bird Supplies'),
(57, 6, 12, '60004', 'Fish & Aquatic pets Supplies'),
(58, 6, 12, '60005', 'Wild Life Animal Supplies'),
(59, 7, 13, '70001', 'Grocery'),
(60, 7, 13, '70002', 'Natural & Organic'),
(61, 7, 14, '70003', 'International Food Market'),
(62, 7, 14, '70004', 'Whole Foods Market'),
(63, 8, 16, '80001', 'Luxury Beauty'),
(64, 8, 15, '80002', 'Health & Personal Care'),
(65, 8, 16, '80003', 'Parfum'),
(66, 8, 16, '80004', 'Make-up'),
(67, 9, 17, '90001', 'Arts & Crafts'),
(68, 9, 17, '90002', 'Building Toys'),
(69, 9, 17, '90003', 'Outdoor play'),
(70, 9, 17, '90004', 'Games'),
(71, 9, 17, '90005', 'Action Figures'),
(72, 9, 18, '91001', 'Baby Care'),
(73, 9, 18, '91002', 'Nursery'),
(74, 9, 18, '91003', 'Strollers'),
(75, 9, 18, '91004', 'Car Seats'),
(76, 9, 18, '91005', 'Baby & Toddler Toys'),
(77, 10, 19, '100001', 'Women Clothing'),
(78, 10, 19, '100002', 'Women Shoes'),
(79, 10, 19, '100003', 'Handbags & Wallets'),
(80, 10, 20, '101001', 'Men Clothing'),
(81, 10, 20, '101002', 'Men Shoes'),
(82, 10, 20, '101003', 'Men Arm & Waist Accessories'),
(83, 10, 21, '102001', 'Girls Kids|Baby '),
(84, 10, 21, '102002', 'Boys Kids|Baby'),
(85, 10, 22, '103001', 'Jewelry'),
(86, 10, 22, '103002', 'Luggage and Travel Gear'),
(87, 10, 22, '103003', 'Watches & Sunglasses'),
(88, 11, 23, '110001', 'Artwork'),
(89, 11, 23, '110002', 'Furniture homemade'),
(90, 11, 23, '110003', 'Clothing,Shoes & Accessories'),
(91, 11, 23, '110004', 'Toys & Gaming'),
(92, 12, 24, '120001', 'Fitness Accessories'),
(93, 12, 24, '120002', 'Sports Items'),
(94, 12, 25, '121001', 'Camping & Outdoor Gear'),
(95, 13, 26, '130001', 'Tires & Wheels'),
(96, 13, 26, '130002', 'Automotive Tools'),
(97, 13, 26, '130003', 'Replacement Parts'),
(98, 13, 27, '131001', 'Lab & Scientific'),
(99, 13, 27, '131002', 'Health & Safety'),
(103, 2, 5, 'CG1337', 'Playstation 5');

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`id`, `title`, `created`, `modified`) VALUES
(1, 'Pick-Up', '2020-09-27 16:37:54', '2020-09-27 16:42:08'),
(2, 'Delivery', '2020-09-27 16:38:31', '2020-09-27 16:42:16'),
(3, 'Business orders', '2020-09-27 16:38:48', '2020-09-27 16:42:24');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `role_id`, `email`, `password`, `created`, `modified`) VALUES
(1, 1, 'admin@admin.com', '$2y$10$xr.356u4LxNeZk5nwDG1N.DbL.03jjPNlJK9h6CzsS7QpyBR/4XBa', '2020-11-18 07:09:41', '2020-11-18 07:09:41'),
(2, 1, 'cakephp@example.com', '$2y$10$JGMb902cqOP0XnKUCvo3rOefmLG4MmHqy2M.gdk9kN/viJp360m7C', '2020-10-17 00:00:00', '2020-10-17 00:00:00'),
(3, 2, 'linhkenny@live.ca', 'kenny', '2020-10-17 00:00:00', '2020-10-17 00:00:00'),
(8, 2, 'test@test.com', '$2y$10$tyy.n73hDmy7bSHGJ38yVedjbl/3WpDcUDtttrzDwueQ9kgNtbZN.', '2020-10-19 00:00:00', '2020-10-19 00:00:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `apropos`
--
ALTER TABLE `apropos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `i18n`
--
ALTER TABLE `i18n`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `I18N_LOCALE_FIELD` (`locale`,`model`,`foreign_key`,`field`),
  ADD KEY `I18N_FIELD` (`model`,`foreign_key`,`field`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `user_key` (`user_id`),
  ADD KEY `orders_subsubecjects` (`subsubject_id`);

--
-- Index pour la table `orders_files`
--
ALTER TABLE `orders_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `file_id` (`file_id`);

--
-- Index pour la table `orders_tags`
--
ALTER TABLE `orders_tags`
  ADD PRIMARY KEY (`order_id`,`tag_id`),
  ADD KEY `tag_key` (`tag_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_products_fk` (`order_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `selections`
--
ALTER TABLE `selections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Index pour la table `subsubjects`
--
ALTER TABLE `subsubjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `selection_id` (`selection_id`);

--
-- Index pour la table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_users_roles` (`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID department', AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `i18n`
--
ALTER TABLE `i18n`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `orders_files`
--
ALTER TABLE `orders_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `selections`
--
ALTER TABLE `selections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID selection', AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `subsubjects`
--
ALTER TABLE `subsubjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID subsubject', AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT pour la table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_subsubecjects` FOREIGN KEY (`subsubject_id`) REFERENCES `subsubjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `orders_tags`
--
ALTER TABLE `orders_tags`
  ADD CONSTRAINT `orders_tags_ibfk_1` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`),
  ADD CONSTRAINT `orders_tags_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `order_products_fk` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `selections`
--
ALTER TABLE `selections`
  ADD CONSTRAINT `selection_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `subsubjects`
--
ALTER TABLE `subsubjects`
  ADD CONSTRAINT `subsubject_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subsubject_ibfk_2` FOREIGN KEY (`selection_id`) REFERENCES `selections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
