-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 23 fév. 2023 à 17:00
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lthk_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `address`
--

CREATE TABLE `address` (
  `address_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `society` varchar(50) DEFAULT NULL,
  `address_street` varchar(100) NOT NULL,
  `address_option` varchar(100) DEFAULT NULL,
  `address_zipcode` int(5) NOT NULL,
  `address_city` varchar(100) NOT NULL,
  `address_county` varchar(50) NOT NULL,
  `address_country` varchar(50) NOT NULL,
  `address_info` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `address`
--

INSERT INTO `address` (`address_id`, `user_id`, `last_name`, `first_name`, `phone`, `society`, `address_street`, `address_option`, `address_zipcode`, `address_city`, `address_county`, `address_country`, `address_info`) VALUES
(1, 1, 'SMITH', 'Brouette', '01 23 45 69 67', '', '18 rue de la chèvre naine', '', 86666, 'Poitiers', '86', 'France', ''),
(2, 42, 'Doe', 'Toto', '01 89 76 43 23', '666', '10 rue du glandu', '', 13000, 'Marseille', 'Bouches-du-Rhône ', 'France', NULL),
(6, 11, 'Uiop', 'Azerty', '0606060606', NULL, '15 rue de la flûte', NULL, 66666, 'Zqsd', 'ds', 'Suisse', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `blog_articles`
--

CREATE TABLE `blog_articles` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(100) NOT NULL,
  `blog_image` varchar(250) NOT NULL,
  `blog_resume` varchar(200) NOT NULL,
  `blog_description` text NOT NULL,
  `blog_day` int(2) NOT NULL,
  `blog_month` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `blog_articles`
--

INSERT INTO `blog_articles` (`blog_id`, `blog_title`, `blog_image`, `blog_resume`, `blog_description`, `blog_day`, `blog_month`) VALUES
(1, 'Booster l\'estime de soi - Vol. 1', 'blog-lthk.png', 'Lance lui des défis ! 									<br> 									<br> 									Donne lui des responsabilités. ( mettre sa 									couche à la poubelle , s\'habille...', '  Lance lui des défis ! Laisse lui le choix, prendre une decision (bon ok pas toujours !!).\n              Laisse le surmonter ses erreurs positivement, en apprenant les conséquences de son choix !\n              Laisse le mariner un peu face à un problème... Il sera si fier de lui après avoir réglé le problème\n              tout seul (bon, évidemment, on l\'aide si c\'est trop la galère ! ) !\n              <br>\n              Donne lui des responsabilités (mettre sa couche à la poubelle, s\'habiller, seul, débarrasser la\n              table...). C\'est bien pour lui mais aussi pour nous haha). Il a le droit de se tromper ! Et toi aussi\n              !\n              Encourage le dès que tu peux ! Laisse le s\'ennuyer... Pour qu\'il développe son imaginaire, sa\n              créativité !\n              <br>\n              <br>\n              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt\n              voluptate necessitatibus labore nisi nobis eius, laboriosam earum aliquid eligendi similique. Commodi\n              libero similique, ullam unde aperiam inventore dolor laudantium error.', 10, 'Août'),
(2, 'Booster l\'estime de soi - Vol. 2', 'blog-lthk.png', 'Lance lui des défis ! 									<br> 									<br> 									Donne lui des responsabilités. ( mettre sa 									couche à la poubelle , s\'habille...', '  Lance lui des défis ! Laisse lui le choix, prendre une decision (bon ok pas toujours !!).\n              Laisse le surmonter ses erreurs positivement, en apprenant les conséquences de son choix !\n              Laisse le mariner un peu face à un problème... Il sera si fier de lui après avoir réglé le problème\n              tout seul (bon, évidemment, on l\'aide si c\'est trop la galère ! ) !\n              <br>\n              Donne lui des responsabilités (mettre sa couche à la poubelle, s\'habiller, seul, débarrasser la\n              table...). C\'est bien pour lui mais aussi pour nous haha). Il a le droit de se tromper ! Et toi aussi\n              !\n              Encourage le dès que tu peux ! Laisse le s\'ennuyer... Pour qu\'il développe son imaginaire, sa\n              créativité !\n              <br>\n              <br>\n              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt\n              voluptate necessitatibus labore nisi nobis eius, laboriosam earum aliquid eligendi similique. Commodi\n              libero similique, ullam unde aperiam inventore dolor laudantium error.', 18, 'Août'),
(3, 'Booster l\'estime de soi - Vol. 3', 'blog-lthk.png', 'Lance lui des défis ! 									<br> 									<br> 									Donne lui des responsabilités. ( mettre sa 									couche à la poubelle , s\'habille...', '  Lance lui des défis ! Laisse lui le choix, prendre une decision (bon ok pas toujours !!).\n              Laisse le surmonter ses erreurs positivement, en apprenant les conséquences de son choix !\n              Laisse le mariner un peu face à un problème... Il sera si fier de lui après avoir réglé le problème\n              tout seul (bon, évidemment, on l\'aide si c\'est trop la galère ! ) !\n              <br>\n              Donne lui des responsabilités (mettre sa couche à la poubelle, s\'habiller, seul, débarrasser la\n              table...). C\'est bien pour lui mais aussi pour nous haha). Il a le droit de se tromper ! Et toi aussi\n              !\n              Encourage le dès que tu peux ! Laisse le s\'ennuyer... Pour qu\'il développe son imaginaire, sa\n              créativité !\n              <br>\n              <br>\n              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt\n              voluptate necessitatibus labore nisi nobis eius, laboriosam earum aliquid eligendi similique. Commodi\n              libero similique, ullam unde aperiam inventore dolor laudantium error.', 24, 'Août');

-- --------------------------------------------------------

--
-- Structure de la table `contact_message`
--

CREATE TABLE `contact_message` (
  `message_id` int(11) NOT NULL,
  `message_name` varchar(50) NOT NULL,
  `message_subject` varchar(100) NOT NULL,
  `message_email` varchar(100) NOT NULL,
  `message_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact_message`
--

INSERT INTO `contact_message` (`message_id`, `message_name`, `message_subject`, `message_email`, `message_content`) VALUES
(1, 'azerty uiop', '123', 'azerty@gmail.com', 'gjrekoknkodsngo^s');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `order_date` varchar(15) NOT NULL,
  `order_ref` varchar(50) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `shipping_mode` varchar(20) NOT NULL,
  `alt_address` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `order_date`, `order_ref`, `total_price`, `shipping_mode`, `alt_address`) VALUES
(15, 1, '14-10-2022', '202210141020-1', '6008.99', 'envoi classique', 1),
(16, 1, '14-10-2022', '202210141023-1', '48.95', 'envoi classique', 1),
(17, 42, '14-10-2022', '202210141025-42', '8.99', 'envoi classique', 0),
(19, 42, '14-10-2022', '20221014103006-42', '38.99', 'envoi classique', 0),
(20, 1, '14-10-2022', '20221014153145-1', '48.98', 'envoi classique', 1),
(21, 11, '14-10-2022', '20221014163446-11', '7507.49', 'envoi Express', 0),
(30, 1, '20-10-2022', '20221020103716-1', '24.98', 'envoi Express', 1),
(31, 1, '20-10-2022', '20221020104302-1', '614.99', 'envoi Express', 1),
(32, 1, '20-10-2022', '20221020104523-1', '508.49', 'envoi classique', 1),
(33, 1, '21-10-2022', '20221021102753-1', '3541.46', 'envoi Express', 1),
(34, 1, '24-10-2022', '20221024085012-1', '1114.55', 'envoi classique', 1),
(35, 1, '24-10-2022', '20221024110734-1', '17.48', 'envoi Express', 1),
(36, 1, '24-10-2022', '20221024111419-1', '24.95', 'envoi Express', 1),
(37, 1, '24-10-2022', '20221024111643-1', '39.98', 'envoi Express', 1),
(38, 1, '25-10-2022', '20221025144921-1', '78.92', 'envoi classique', 1),
(39, 1, '26-10-2022', '20221026110421-1', '2226.77', 'envoi classique', 1),
(40, 1, '26-10-2022', '20221026110811-1', '2226.77', 'envoi classique', 1),
(41, 1, '26-10-2022', '20221026111318-1', '16658.33', 'envoi Express', 1),
(42, 1, '26-10-2022', '20221026111339-1', '16658.33', 'envoi Express', 1),
(43, 1, '26-10-2022', '20221026111451-1', '16658.33', 'envoi Express', 1),
(44, 1, '26-10-2022', '20221026111644-1', '16658.33', 'envoi Express', 1),
(45, 1, '26-10-2022', '20221026111937-1', '16658.33', 'envoi Express', 1),
(46, 1, '26-10-2022', '20221026111952-1', '16658.33', 'envoi Express', 1),
(47, 1, '26-10-2022', '20221026112411-1', '16658.33', 'envoi Express', 1),
(48, 1, '26-10-2022', '20221026112448-1', '16658.33', 'envoi Express', 1),
(49, 11, '14-11-2022', '20221114164612-11', '12503.99', 'envoi classique', 0),
(50, 11, '16-11-2022', '20221116145923-11', '131.42', 'envoi classique', 0),
(51, 1, '23-11-2022', '20221123113530-1', '1007.99', 'envoi classique', 1);

-- --------------------------------------------------------

--
-- Structure de la table `order_detail`
--

CREATE TABLE `order_detail` (
  `cart_id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `quantity` int(10) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `order_detail`
--

INSERT INTO `order_detail` (`cart_id`, `order_id`, `user_id`, `product_id`, `product_name`, `quantity`, `product_price`, `product_total`) VALUES
(42, 40, 1, 2, 'Mon Pack Organisation', 222, '9.00', '2217.78'),
(43, 48, 1, 3, 'Les routines OMF !', 666, '24.99', '16643.34'),
(44, 49, 11, 3, 'Les routines OMF !', 500, '24.99', '12495.00'),
(45, 50, 11, 1, 'Ma fiche routine / rituel OMF', 1, '2.49', '2.49'),
(46, 50, 11, 2, 'Mon Pack Organisation', 2, '9.99', '19.98'),
(47, 50, 11, 3, 'Les routines OMF !', 4, '24.99', '99.96'),
(48, 51, 1, 2, 'Mon Pack Organisation', 100, '9.99', '999.00');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_image` varchar(250) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_description` text NOT NULL,
  `product_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_image`, `product_price`, `product_description`, `product_status`) VALUES
(1, 'Ma fiche routine / rituel OMF', 'product-lthk-1.png', '2.49', '          Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum. There are many variations of           passages of Lorem Ipsum available, but the majority have alteration in some injected or words which           don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to           be sure there isn\'t anything embarrang hidden in the middle of text.</p>         <ul class=\"product-description__list\">           <li>Nam at elit nec neque suscipit gravida.</li>           <li>Aenean egestas orci eu maximus tincidunt.</li>           <li>Curabitur vel turpis id tellus cursus laoreet.</li>         </ul>         <p>Aliquam et facilisis arcuut olestie augue. Suspendisse sodales tortor nunc quis auctor ligula posuere           cursus duis aute irure dolor in reprehenderit in voluptate velit esse cill doloreeu fugiat nulla           pariatur excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit           anim id est laborum. Vivaus sed delly molestie sapien. Aliquam et facilisis arcuut molestie augue.', 'PROMO'),
(2, 'Mon Pack Organisation', 'product-lthk-2.png', '9.99', '          Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum. There are many variations of           passages of Lorem Ipsum available, but the majority have alteration in some injected or words which           don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to           be sure there isn\'t anything embarrang hidden in the middle of text.</p>         <ul class=\"product-description__list\">           <li>Nam at elit nec neque suscipit gravida.</li>           <li>Aenean egestas orci eu maximus tincidunt.</li>           <li>Curabitur vel turpis id tellus cursus laoreet.</li>         </ul>         <p>Aliquam et facilisis arcuut olestie augue. Suspendisse sodales tortor nunc quis auctor ligula posuere           cursus duis aute irure dolor in reprehenderit in voluptate velit esse cill doloreeu fugiat nulla           pariatur excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit           anim id est laborum. Vivaus sed delly molestie sapien. Aliquam et facilisis arcuut molestie augue.', NULL),
(3, 'Les routines OMF !', 'product-lthk-3.png', '24.99', '          Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum. There are many variations of           passages of Lorem Ipsum available, but the majority have alteration in some injected or words which           don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to           be sure there isn\'t anything embarrang hidden in the middle of text.</p>         <ul class=\"product-description__list\">           <li>Nam at elit nec neque suscipit gravida.</li>           <li>Aenean egestas orci eu maximus tincidunt.</li>           <li>Curabitur vel turpis id tellus cursus laoreet.</li>         </ul>         <p>Aliquam et facilisis arcuut olestie augue. Suspendisse sodales tortor nunc quis auctor ligula posuere           cursus duis aute irure dolor in reprehenderit in voluptate velit esse cill doloreeu fugiat nulla           pariatur excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit           anim id est laborum. Vivaus sed delly molestie sapien. Aliquam et facilisis arcuut molestie augue.', 'NOUVEAU'),
(4, 'PDF Bouche à télécharger', 'product-lthk-4.png', '2.49', '          Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum. There are many variations of           passages of Lorem Ipsum available, but the majority have alteration in some injected or words which           don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to           be sure there isn\'t anything embarrang hidden in the middle of text.</p>         <ul class=\"product-description__list\">           <li>Nam at elit nec neque suscipit gravida.</li>           <li>Aenean egestas orci eu maximus tincidunt.</li>           <li>Curabitur vel turpis id tellus cursus laoreet.</li>         </ul>         <p>Aliquam et facilisis arcuut olestie augue. Suspendisse sodales tortor nunc quis auctor ligula posuere           cursus duis aute irure dolor in reprehenderit in voluptate velit esse cill doloreeu fugiat nulla           pariatur excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit           anim id est laborum. Vivaus sed delly molestie sapien. Aliquam et facilisis arcuut molestie augue.', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `shipping_address`
--

CREATE TABLE `shipping_address` (
  `address_id` int(10) NOT NULL,
  `address_name` varchar(50) NOT NULL,
  `user_id` int(10) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `society` varchar(50) DEFAULT NULL,
  `address_street` varchar(100) NOT NULL,
  `address_option` varchar(100) DEFAULT NULL,
  `address_zipcode` int(5) NOT NULL,
  `address_city` varchar(100) NOT NULL,
  `address_county` varchar(50) NOT NULL,
  `address_country` varchar(50) NOT NULL,
  `address_info` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `shipping_address`
--

INSERT INTO `shipping_address` (`address_id`, `address_name`, `user_id`, `last_name`, `first_name`, `phone`, `society`, `address_street`, `address_option`, `address_zipcode`, `address_city`, `address_county`, `address_country`, `address_info`) VALUES
(1, 'Travail', 1, 'SMITH', 'Brouetteazerty', '01 06 06 06 06', 'SVI Prosis', '28 route de Monts', '', 37300, 'Joué-les-Tours', '37', 'France', ''),
(15, 'Domicile 1', 62, 'ffd', 'fd', 'fdfdfd', '', '', '', 0, 'fsfd', 'dffds', 'Belgique', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'Brouette', 'brouette@gmail.com', '$2y$10$DDwmTEiYbHjkHjsYW69UKe17kHNt0nfl14OISupQ5iul4gYjwHvJ2'),
(11, 'Azerty', 'azerty@gmail.com', '$2y$10$fSJvTh5L5es.KgV4eF0VEuskfxMld87Iz4Yu3R7e8RmGE1T8YcX9G'),
(42, 'Toto', 'toto@gmail.com', '$2y$10$ZsA4hPAN8pVjjmT6XgmuLOoYHtknXAUGWbyD7sW3YrVyX.cLIH9Ty'),
(62, 'test', 'test@gmail.com', '$2y$10$mQbJIDfhHljoqjB69Nbaq.zUJb6y3VTdUVk7g7qsECA7N2rfSpVta');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`),
  ADD UNIQUE KEY `user_id_2` (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `blog_articles`
--
ALTER TABLE `blog_articles`
  ADD PRIMARY KEY (`blog_id`);

--
-- Index pour la table `contact_message`
--
ALTER TABLE `contact_message`
  ADD PRIMARY KEY (`message_id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `product_name` (`order_date`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `order_ref` (`order_ref`);

--
-- Index pour la table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `product_name` (`product_id`),
  ADD KEY `unity_price` (`product_price`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `order_id_2` (`order_id`),
  ADD KEY `user_id_2` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Index pour la table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD PRIMARY KEY (`address_id`),
  ADD UNIQUE KEY `user_id_2` (`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_3` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `blog_articles`
--
ALTER TABLE `blog_articles`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `contact_message`
--
ALTER TABLE `contact_message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `shipping_address`
--
ALTER TABLE `shipping_address`
  MODIFY `address_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Contraintes pour la table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `orders` (`user_id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Contraintes pour la table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD CONSTRAINT `shipping_address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
