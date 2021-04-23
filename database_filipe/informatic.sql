-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 23 avr. 2021 à 15:56
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `informatic`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categories` int(11) NOT NULL,
  `name_categories` varchar(50) NOT NULL,
  `post_cat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categories`, `name_categories`, `post_cat`) VALUES
(1, 'Desktops', ''),
(2, 'Laptops', ''),
(8, 'Computer Components', '6ed44c147b7d04eafad2fcb3931bf82b12174aee0.jpg'),
(9, 'Peripheral Devices', '9b948b01c0491724a87320917dbaa4b251c377890.png');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id_products` int(11) NOT NULL,
  `name_products` varchar(11) NOT NULL,
  `relese_date_products` date NOT NULL,
  `discription_products` varchar(255) NOT NULL,
  `post_products` varchar(150) NOT NULL,
  `price_products` double NOT NULL,
  `id_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id_products`, `name_products`, `relese_date_products`, `discription_products`, `post_products`, `price_products`, `id_cat`) VALUES
(27, 'hp-omen-des', '2021-04-16', 'Budget Desktop for those who want a simle but powerfull pc.', '9634975f1b386ec66c9528433848e4e6b63120f90.jpg', 1500, 1),
(28, 'acer po5 61', '2021-04-22', 'Big Boi gaming pc', '1382d004edaf3f58b7801880b31dd85bd4e7fc6e0.jpg', 1500, 1),
(29, 'Spartan PC', '2021-04-02', 'Spartan pc', 'e7c1f3d3ca1f38d3bb10101974fd5bea3795f7d50.jpg', 2000, 1),
(30, 'pc-gamer-ra', '2021-04-04', 'RainBow', '3ba840157a3337901cf02b19d1e5b158b88b5ba60.jpg', 1500, 1),
(31, 'PC-gamer-di', '2021-04-10', 'PC Gamer', '4764b0f957133cbdb82592d125dde72d8d7573fe0.png', 2000, 1),
(32, 'PC Gamer Ve', '2021-04-03', 'Version two', '4725fc887b38610d373e06a2bc4ab12a41aae01c0.jpg', 2000, 1),
(33, 'Laptop Game', '2021-04-03', 'Laptop data', '211e3132afdd0a8412247572481d004d04cb1e740.jpg', 1000, 2),
(34, 'Laptop Game', '2021-04-03', 'Laptop data', '211e3132afdd0a8412247572481d004d04cb1e741.jpg', 1000, 2),
(35, 'Laptop Game', '2021-04-10', 'Version 1', '39ff3ded4a4ad04edc41600082d1b2d3389b69f40.jpg', 1500, 2),
(36, 'Laptop Big ', '2021-04-02', 'Laptop big boi', '227f2136f44e66eec4443157c273d05b39d6db2f0.jpg', 1500, 2),
(37, 'Laptop YOLO', '2021-04-04', 'yolo 420', 'f861416a631cb4dbfe098f71c2549c76542a44b30.jpg', 4200, 2),
(38, 'Motherboard', '2021-04-02', 'Motherboard', 'af34947298baaaaaf1df7ecf770dc66d55f39e6b0.jpg', 200, 8),
(39, 'Ram', '2021-04-09', 'Ram', '69958a0a35c0c865ac7dbc1872cc13c87b377eb50.jpg', 200, 8),
(40, 'Ryzen AMD', '2021-04-11', 'AMD CPU', '0972b12e066fec0b35ab2a888a15a60a9beb480a0.jpg', 200, 8),
(41, 'Gaming Scre', '2021-04-04', 'Screen', '11885be83ad1f123b296a2c4ced3bd9a929cf3000.jpg', 600, 8);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `fname_user` varchar(50) NOT NULL,
  `lname_user` varchar(50) NOT NULL,
  `email_user` varchar(150) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `fname_user`, `lname_user`, `email_user`, `password`) VALUES
(1, 'filipe', 'filipe', 'filipe.campos@gmail.com', '$2y$10$aDZvK8Kuoyo8niPKBMDqueq.riLq1M2.Tfzr1ZXGMbaTSoBh/hp0q'),
(2, 'filipe1', 'filipe2', 'filipecampos@gmail.com', '$2y$10$MggQJF.uLccxEj0zzxYWo.GGcbIi.aycpWecUOCoSl8rgPiNCeiw6'),
(3, 'filipe3', 'filipe3', 'filipeampos@gmail.com', '$2y$10$rbFsBH3hZ2u0rJXD6UYXmuizPoqtuIahVoNhd4z6xvMHxOI5hu7uy'),
(4, 'filipe5', 'filipe5', 'filipeasdasd@gmail.com', '$2y$10$I3MdcwbI..E5ViOQUieZduld.FbaxBzcAZzx0gisOjL47ltjduOci'),
(5, 'filipe6', 'filipe6', 'filipe@gmail.com', '$2y$10$EIsvajgTcddOBP/Q.HoPsOG8BJnWv1n9D7e.VU3/8zppyWq0YZdyi'),
(6, 'abc', 'filipe', 'abc@gmail.com', '$2y$10$z1MoCdbFlgjpMOm82v0Ig.ySQqVB.Uv/A7A0z6nXw0DZzVBLaR5Z2'),
(7, 'abcd', 'abcd', 'abcf@gmail.com', '$2y$10$CqWqUQV6P8X5Oq85SKgFpe21uyrZKiImhuxQL7ECOQ2S/HpqjXHnu');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categories`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_products`),
  ADD KEY `category` (`id_cat`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id_products` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `category` FOREIGN KEY (`id_cat`) REFERENCES `categories` (`id_categories`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
