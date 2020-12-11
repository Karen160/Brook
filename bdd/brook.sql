-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 01 juin 2020 à 09:11
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `brook`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(3) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `date_publication` date NOT NULL,
  `membre_id` int(3) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `titre`, `date_publication`, `membre_id`, `pseudo`, `contenu`, `image`) VALUES
(1, 'L\'histoire de Laboon', '2020-05-24', 1, 'Admin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Morbi non arcu risus quis varius. Quisque egestas diam in arcu cursus. Eget magna fermentum iaculis eu non. Viverra nibh cras pulvinar mattis nunc sed blandit libero. Maecenas ultricies mi eget mauris pharetra. Egestas sed sed risus pretium quam vulputate dignissim suspendisse. Et leo duis ut diam quam nulla. Enim eu turpis egestas pretium. At ultrices mi tempus imperdiet nulla malesuada. Imperdiet dui accumsan sit amet nulla facilisi. Mauris pharetra et ultrices neque ornare aenean. Ipsum suspendisse ultrices gravida dictum fusce ut placerat orci. Dictum sit amet justo donec enim diam. Sapien faucibus et molestie ac feugiat. Quis risus sed vulputate odio. Nisl nunc mi ipsum faucibus vitae aliquet nec. Egestas dui id ornare arcu odio. Cursus in hac habitasse platea.\r\n\r\nEgestas purus viverra accumsan in nisl. Porttitor leo a diam sollicitudin tempor id eu nisl. Feugiat sed lectus vestibulum mattis ullamcorper velit sed ullamcorper. Pellentesque habitant morbi tristique senectus. Risus quis varius quam quisque id diam. Suspendisse faucibus interdum posuere lorem ipsum dolor. Tortor pretium viverra suspendisse potenti. Dictum sit amet justo donec enim diam vulputate ut. Magna eget est lorem ipsum dolor sit amet consectetur. Ut lectus arcu bibendum at varius vel pharetra vel. Donec enim diam vulputate ut pharetra sit. Felis bibendum ut tristique et egestas quis. Luctus accumsan tortor posuere ac ut consequat semper viverra nam. Est ante in nibh mauris cursus mattis molestie a. Nunc sed blandit libero volutpat sed cras. Turpis egestas integer eget aliquet nibh praesent.\r\n\r\nSagittis eu volutpat odio facilisis mauris sit. Mauris pharetra et ultrices neque ornare aenean euismod elementum nisi. Quis auctor elit sed vulputate mi sit amet mauris. Id interdum velit laoreet id donec ultrices tincidunt arcu. Habitant morbi tristique senectus et netus. Lacus luctus accumsan tortor posuere ac ut consequat semper. Scelerisque varius morbi enim nunc faucibus a pellentesque sit amet. Accumsan sit amet nulla facilisi morbi. Massa vitae tortor condimentum lacinia. Volutpat ac tincidunt vitae semper quis lectus nulla at. Tellus pellentesque eu tincidunt tortor aliquam nulla facilisi cras. Non pulvinar neque laoreet suspendisse. Dignissim convallis aenean et tortor at risus viverra adipiscing at. Ut tristique et egestas quis ipsum suspendisse. Non odio euismod lacinia at quis risus. Amet aliquam id diam maecenas ultricies mi eget mauris. Proin sed libero enim sed faucibus turpis in eu mi. Viverra accumsan in nisl nisi scelerisque eu ultrices.', 'https://tse3.mm.bing.net/th?id=OIP.sz1QRBNLPe7PGlfc8UGQJwHaEK&pid=Api'),
(2, 'Luffy et Nami en prison', '2020-05-24', 1, 'Admin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Molestie at elementum eu facilisis sed odio morbi quis. Purus sit amet luctus venenatis lectus magna. Morbi tristique senectus et netus et. Magna sit amet purus gravida quis blandit turpis cursus in. Praesent semper feugiat nibh sed pulvinar proin gravida. Viverra maecenas accumsan lacus vel facilisis volutpat est velit. Quam vulputate dignissim suspendisse in est ante in nibh mauris. Amet consectetur adipiscing elit ut aliquam purus sit. Amet risus nullam eget felis eget nunc lobortis mattis aliquam. Mauris a diam maecenas sed enim ut sem viverra. Id interdum velit laoreet id donec. Nisi lacus sed viverra tellus in hac. Imperdiet proin fermentum leo vel orci. Lorem ipsum dolor sit amet consectetur adipiscing elit. Feugiat sed lectus vestibulum mattis. Sed augue lacus viverra vitae. Pellentesque elit eget gravida cum sociis.\r\n<br>\r\nVel elit scelerisque mauris pellentesque. Elit sed vulputate mi sit. Iaculis eu non diam phasellus vestibulum lorem sed risus. Commodo odio aenean sed adipiscing diam. Tellus mauris a diam maecenas sed enim. Nulla facilisi morbi tempus iaculis urna. Feugiat sed lectus vestibulum mattis ullamcorper velit sed ullamcorper. Luctus venenatis lectus magna fringilla urna porttitor rhoncus. In hac habitasse platea dictumst. Ultrices neque ornare aenean euismod elementum nisi quis. Consectetur lorem donec massa sapien faucibus et molestie. Eget egestas purus viverra accumsan in nisl nisi scelerisque. Nunc scelerisque viverra mauris in aliquam. Elit ullamcorper dignissim cras tincidunt. Neque vitae tempus quam pellentesque. Est lorem ipsum dolor sit amet consectetur adipiscing. Lacinia at quis risus sed vulputate odio. Aliquam ut porttitor leo a. Morbi tristique senectus et netus et malesuada.\r\n<br>\r\nMattis nunc sed blandit libero. Vitae congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Vulputate mi sit amet mauris commodo quis imperdiet. Imperdiet dui accumsan sit amet. Lobortis scelerisque fermentum dui faucibus in ornare quam viverra orci. Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis. Id cursus metus aliquam eleifend mi in. Cras tincidunt lobortis feugiat vivamus. Eget sit amet tellus cras adipiscing enim eu turpis. Erat velit scelerisque in dictum non consectetur a. Id interdum velit laoreet id donec ultrices. Lacus vel facilisis volutpat est. Consequat nisl vel pretium lectus quam id. Eget duis at tellus at urna condimentum mattis.\r\n<br>\r\nEu non diam phasellus vestibulum lorem sed risus. Orci ac auctor augue mauris augue. Pharetra pharetra massa massa ultricies. Aliquet risus feugiat in ante metus dictum at tempor commodo. Lobortis mattis aliquam faucibus purus in massa tempor. Nulla malesuada pellentesque elit eget gravida cum sociis natoque penatibus. Senectus et netus et malesuada. Venenatis lectus magna fringilla urna porttitor. Tortor aliquam nulla facilisi cras fermentum. Augue mauris augue neque gravida in fermentum et. Felis eget velit aliquet sagittis. Condimentum id venenatis a condimentum. Pharetra sit amet aliquam id. Donec et odio pellentesque diam volutpat commodo sed egestas. Neque volutpat ac tincidunt vitae semper quis lectus nulla.\r\n<br>\r\nMauris vitae ultricies leo integer. Pretium aenean pharetra magna ac placerat vestibulum lectus mauris. Nunc sed blandit libero volutpat sed cras ornare arcu. Mi quis hendrerit dolor magna eget est. Eget nulla facilisi etiam dignissim diam quis enim. Id aliquet risus feugiat in ante metus dictum at. Euismod in pellentesque massa placerat duis ultricies lacus sed. Tellus rutrum tellus pellentesque eu. Turpis egestas maecenas pharetra convallis posuere morbi leo. In arcu cursus euismod quis viverra.', 'https://tse2.mm.bing.net/th?id=OIP.9YrmTKlk8OwqPvE3tTCs_QHaEK&pid=Api'),
(3, 'Brook prend-il des médicaments ?', '2020-05-24', 1, 'Admin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse. A scelerisque purus semper eget duis at tellus. In metus vulputate eu scelerisque. Arcu vitae elementum curabitur vitae nunc. At elementum eu facilisis sed odio morbi. Odio facilisis mauris sit amet massa vitae tortor condimentum lacinia. Purus in mollis nunc sed id semper risus in hendrerit. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Nibh mauris cursus mattis molestie a. Semper auctor neque vitae tempus. At tellus at urna condimentum mattis. Proin sagittis nisl rhoncus mattis. Eget est lorem ipsum dolor sit amet consectetur. Dignissim suspendisse in est ante in nibh mauris cursus mattis. Libero nunc consequat interdum varius sit amet mattis vulputate enim. Ornare arcu odio ut sem nulla.\r\n<br> <br>\r\nFames ac turpis egestas sed tempus urna et. Quis vel eros donec ac odio tempor. Phasellus faucibus scelerisque eleifend donec pretium vulputate sapien. Faucibus turpis in eu mi bibendum neque egestas congue. Tellus molestie nunc non blandit massa enim. Aliquet nec ullamcorper sit amet risus nullam eget felis eget. Sit amet purus gravida quis blandit turpis cursus. Non curabitur gravida arcu ac. Nisi vitae suscipit tellus mauris a diam maecenas sed. Nibh venenatis cras sed felis eget. Eu ultrices vitae auctor eu augue. Laoreet non curabitur gravida arcu ac tortor dignissim. Volutpat est velit egestas dui. Erat pellentesque adipiscing commodo elit at imperdiet. Porta non pulvinar neque laoreet suspendisse. Leo in vitae turpis massa sed elementum tempus. Vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique.', 'https://tse4.mm.bing.net/th?id=OIP.iCIveBvB9j_D4fsW2iZSeAHaEK&pid=Api'),
(4, 'Nami et l\'argent', '2020-05-24', 1, 'Admin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Commodo ullamcorper a lacus vestibulum sed arcu non odio euismod. Risus commodo viverra maecenas accumsan lacus vel facilisis. Sit amet consectetur adipiscing elit pellentesque habitant morbi. Eu nisl nunc mi ipsum faucibus vitae. Nunc faucibus a pellentesque sit amet porttitor eget. Facilisi cras fermentum odio eu. Dictum fusce ut placerat orci nulla pellentesque dignissim. Neque volutpat ac tincidunt vitae semper. Egestas pretium aenean pharetra magna ac placerat vestibulum lectus mauris. Vel turpis nunc eget lorem dolor sed viverra ipsum nunc.\r\n<br><br>\r\nDui vivamus arcu felis bibendum ut tristique. Faucibus a pellentesque sit amet porttitor. Libero justo laoreet sit amet cursus sit amet dictum sit. Sollicitudin nibh sit amet commodo. Vitae tortor condimentum lacinia quis vel eros. Quis ipsum suspendisse ultrices gravida dictum fusce ut. Purus in mollis nunc sed id. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus. Fermentum et sollicitudin ac orci phasellus egestas tellus rutrum. Non blandit massa enim nec dui nunc. Erat velit scelerisque in dictum non consectetur. Amet commodo nulla facilisi nullam vehicula ipsum a arcu cursus. Suspendisse faucibus interdum posuere lorem ipsum dolor. Sed viverra tellus in hac habitasse platea. Euismod lacinia at quis risus sed vulputate. Nunc faucibus a pellentesque sit amet porttitor eget. Blandit cursus risus at ultrices mi tempus imperdiet nulla. Adipiscing elit duis tristique sollicitudin nibh sit amet commodo nulla. Sit amet consectetur adipiscing elit duis. Aliquam ultrices sagittis orci a scelerisque purus semper eget duis.\r\n<br>\r\nPharetra convallis posuere morbi leo urna molestie at elementum. Vestibulum lorem sed risus ultricies tristique. Nulla aliquet porttitor lacus luctus accumsan. Phasellus vestibulum lorem sed risus ultricies. Felis eget velit aliquet sagittis id consectetur purus ut faucibus. Nulla posuere sollicitudin aliquam ultrices sagittis. Bibendum at varius vel pharetra vel turpis nunc eget lorem. Quam id leo in vitae turpis massa. At volutpat diam ut venenatis tellus in. Purus viverra accumsan in nisl nisi. Et netus et malesuada fames ac turpis egestas integer eget. Eget est lorem ipsum dolor sit amet. Scelerisque in dictum non consectetur a erat. Eget nunc scelerisque viverra mauris in aliquam. Sit amet risus nullam eget felis. Turpis in eu mi bibendum neque egestas congue. Dignissim cras tincidunt lobortis feugiat vivamus at augue eget. Dui faucibus in ornare quam.\r\n<br><br>\r\nAuctor eu augue ut lectus arcu. Imperdiet proin fermentum leo vel orci porta non. Sit amet facilisis magna etiam tempor orci eu. Placerat orci nulla pellentesque dignissim enim. Semper viverra nam libero justo laoreet sit amet cursus. Cras sed felis eget velit. Mauris ultrices eros in cursus turpis massa. Auctor urna nunc id cursus metus aliquam eleifend mi in. Luctus accumsan tortor posuere ac ut consequat. Quam vulputate dignissim suspendisse in est. Hac habitasse platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Purus in mollis nunc sed id semper. Blandit volutpat maecenas volutpat blandit aliquam etiam erat velit scelerisque.', 'https://tse1.mm.bing.net/th?id=OIP.XcATFbsaNH-Ebb_UtONSbAHaEK&pid=Api'),
(5, 'Luffy et ses attaques dévastatrices', '2020-05-24', 1, 'Admin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim blandit volutpat maecenas volutpat blandit aliquam etiam erat. Amet nisl purus in mollis nunc sed id semper. Habitant morbi tristique senectus et netus et. Magna fringilla urna porttitor rhoncus dolor purus non enim. Nunc id cursus metus aliquam. Massa sapien faucibus et molestie ac. Quam vulputate dignissim suspendisse in est ante in nibh. Suspendisse potenti nullam ac tortor vitae purus faucibus. Bibendum est ultricies integer quis. Mattis ullamcorper velit sed ullamcorper. Et malesuada fames ac turpis egestas integer eget aliquet. Sit amet nisl purus in mollis. Suspendisse sed nisi lacus sed viverra tellus in hac habitasse. Quam id leo in vitae turpis massa sed elementum tempus. Cras pulvinar mattis nunc sed blandit. In est ante in nibh mauris cursus mattis.', 'https://tse4.mm.bing.net/th?id=OIP.eBvnYTnbgjnuWEyA-qy0-wAAAA&pid=Api');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(3) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_envoi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `nom`, `prenom`, `email`, `date_envoi`) VALUES
(1, 'Azoulay', 'Karen', 'karenazoulay@gmail.com', '2020-05-22'),
(2, 'Liu', 'Nathalie', 'liunatha@free.fr', '2020-05-22'),
(3, 'Alex', 'Carou', 'alex.cara@yahoo.com', '2020-05-27');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id_image` int(3) NOT NULL,
  `image` text NOT NULL,
  `alt` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id_image`, `image`, `alt`, `pseudo`) VALUES
(1, 'https://tse2.mm.bing.net/th?id=OIP.TyzNivjxv5O360x6WCzI9wHaEK&pid=Api', 'Brook avec son violon', 'admin'),
(2, 'https://tse4.mm.bing.net/th?id=OIP.mg_dacJq7reYPgN3jYK48QHaEE&pid=Api', 'Brook qui salut', 'admin'),
(4, 'https://tse4.mm.bing.net/th?id=OIP.iCIveBvB9j_D4fsW2iZSeAHaEK&pid=Api', 'Brook avec des médicaments', 'admin'),
(5, 'https://tse4.mm.bing.net/th?id=OIP.bz0Y7ahhiudpGYC_BEElfwHaEK&pid=Api', 'Brook joyeux', 'admin'),
(6, 'https://tse3.mm.bing.net/th?id=OIP.XrLIC6AR4Svfs6tCvI13KwHaEK&pid=Api', 'Brook crie', 'admin'),
(7, 'https://tse3.mm.bing.net/th?id=OIP.sz1QRBNLPe7PGlfc8UGQJwHaEK&pid=Api', 'Brook avec sa baleine Laboon', 'admin'),
(8, 'https://tse1.mm.bing.net/th?id=OIP.N-8GwVLsAzqs-XZjnf_a3wHaER&pid=Api', 'Brook qui sourit', 'admin'),
(9, 'https://tse1.mm.bing.net/th?id=OIP.sXYcCjnm2Eu4_GjjvzJaBgHaEK&pid=Api', 'Brook chante avec son violon', 'admin'),
(10, 'https://tse1.mm.bing.net/th?id=OIP.uTbIEAdb6gQaNY6oTwnxvwHaEK&pid=Api', 'Brook chante avec sa guitare', 'admin'),
(11, 'https://tse4.mm.bing.net/th?id=OIP.FpxAwwL1MIrS0t76NigNAgHaEK&pid=Api', 'Brook chante avec son âme', 'admin'),
(12, 'https://tse1.mm.bing.net/th?id=OIP.0zgR_afBX7HL-M6Mrj2jSwHaEK&pid=Api', 'Brook pleure', 'admin'),
(13, 'https://tse2.mm.bing.net/th?id=OIP.hTo-c8r7Qs8P2kDfm4ThYAHaEK&pid=Api', 'Brook en plein combat', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_membre` int(3) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_membre` date NOT NULL,
  `statut` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `nom`, `prenom`, `pseudo`, `mdp`, `email`, `date_membre`, `statut`) VALUES
(1, 'Azoulay', 'Karen', 'admin', '$2y$10$gNv7zw8ZdHyQ3Y/A9L3cFOrPd2.5q6om9rcFY/S3.7ODAkEiWRAdW', 'karenazoulay92@gmail.com', '2020-01-01', 3),
(2, 'Liu', 'Nathalie', 'nath', '$2y$10$adL6r/ZEhEM2IVVUnMpgA.e8vciN3PoWHvt0GRVBwKOvfRhpcaFby', 'nathalieliu@gmail.com', '2020-05-22', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
