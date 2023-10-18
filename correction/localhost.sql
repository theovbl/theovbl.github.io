-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 18 oct. 2023 à 16:24
-- Version du serveur : 10.6.12-MariaDB-0ubuntu0.22.04.1
-- Version de PHP : 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `catbar`
--
CREATE DATABASE IF NOT EXISTS `catbar` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `catbar`;

-- --------------------------------------------------------

--
-- Structure de la table `cat`
--

CREATE TABLE `cat` (
  `id` bigint(20) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `photo` longtext NOT NULL,
  `description` text NOT NULL,
  `sexe` text NOT NULL,
  `veto` tinyint(1) NOT NULL DEFAULT 0,
  `transfer` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cat`
--

INSERT INTO `cat` (`id`, `prenom`, `color`, `photo`, `description`, `sexe`, `veto`, `transfer`) VALUES
(144629591234853, 'ratatouille', 'chartreuse', 'russie.png', 'je veux etre avec dédé', 'm', 0, 0),
(283590814080387, 'garfield', 'bleu', 'usa.png', 'ddd', 'm', 0, 0),
(661600725010763, 'blanca', 'marron', 'timbre.png', 'ddd', 'f', 0, 0),
(667860583072571, 'poupette', 'bleu', 'total.png', 'ddddd', 'f', 0, 0),
(741864389107134, 'lola', 'chartreuse', 'usa.png', 'e', 'm', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_cat` bigint(15) NOT NULL,
  `date` datetime NOT NULL,
  `comment` varchar(255) NOT NULL,
  `tab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `id_client`, `id_cat`, `date`, `comment`, `tab`) VALUES
(1, 1, 144629591234853, '2023-10-14 00:00:00', '', 1),
(2, 1, 144629591234853, '2023-10-12 00:00:00', '', 2),
(3, 2, 667860583072571, '2023-10-12 00:00:00', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'theo', 'tv@fh', '$argon2id$v=19$m=65536,t=4,p=1$ZmhTQk0vRnRqVC9QZEFPZA$QtC4cLf/A9ojcFKfwkmhbsjfsdm8HnpnR9lnVCpC14g', 3),
(2, 'coco', 'coco@gdg', '$argon2id$v=19$m=65536,t=4,p=1$SlpmemFKNFdkNHViZFdYOA$MBxfauxnCNrXv3OTpzI61s59B6QG6zTlVIsxU9WXIGM', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Base de données : `cours`
--
CREATE DATABASE IF NOT EXISTS `cours` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cours`;

-- --------------------------------------------------------

--
-- Structure de la table `annuaire`
--

CREATE TABLE `annuaire` (
  `id_annuaire` int(3) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `telephone` int(10) NOT NULL,
  `profession` varchar(30) DEFAULT NULL,
  `ville` varchar(30) DEFAULT NULL,
  `codepostal` int(5) DEFAULT NULL,
  `adresse` varchar(30) DEFAULT NULL,
  `date_de_naissance` date DEFAULT NULL,
  `sexe` enum('m','f') NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `annuaire`
--

INSERT INTO `annuaire` (`id_annuaire`, `nom`, `prenom`, `telephone`, `profession`, `ville`, `codepostal`, `adresse`, `date_de_naissance`, `sexe`, `description`) VALUES
(2, 'HDGGDG', 'GDGDG', 876788668, 'DDD', 'D', NULL, 'd', NULL, 'f', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `atm`
--

CREATE TABLE `atm` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `identifiant` text NOT NULL,
  `password` text NOT NULL,
  `confirm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `atm`
--

INSERT INTO `atm` (`id`, `code`, `firstname`, `lastname`, `identifiant`, `password`, `confirm`) VALUES
(1, 4587, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `cat`
--

CREATE TABLE `cat` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `genre` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cat`
--

INSERT INTO `cat` (`id`, `nom`, `username`, `email`, `genre`, `password`) VALUES
(1, 'virbel', 'coco', 'gdgd@jfhf', 'g', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Structure de la table `formulaire`
--

CREATE TABLE `formulaire` (
  `id` int(11) NOT NULL,
  `prenom` text NOT NULL,
  `nom` text NOT NULL,
  `pseudo` text NOT NULL,
  `date` text NOT NULL,
  `number` int(11) NOT NULL,
  `adresse` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `confirm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `mail` text NOT NULL,
  `message` text NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `name`, `mail`, `message`, `number`) VALUES
(3, '', '', '', 0),
(4, 'jjjjjjjjjjj', '', '', 0),
(5, 'jjjjjjjjjjjjjjjjjjjjjjjjjj', '', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `ok`
--

CREATE TABLE `ok` (
  `id` int(11) NOT NULL,
  `yourname` text NOT NULL,
  `yourmail` text NOT NULL,
  `yourmessage` text NOT NULL,
  `givemeanumber` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ok`
--

INSERT INTO `ok` (`id`, `yourname`, `yourmail`, `yourmessage`, `givemeanumber`) VALUES
(1, 'hdjdjdjhjh', 'bggddg', 'bbcbdb', 'bbdbb'),
(2, 'jidjdjdj', 'jfhfh@hmail.com', 'jhfghf', '086568');

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `quantity` text NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `stock`
--

INSERT INTO `stock` (`id`, `name`, `description`, `quantity`, `price`) VALUES
(1, 'jfhf', 'djdh', '-1', '67'),
(2, 'ff', 'djdh', '776', '67'),
(3, 'ff', 'djdh', '776', '67'),
(4, 'hfh', 'djdh', '1', '56'),
(5, '56', 'djdh', '2', '57'),
(6, 'coco', 'djdh', '1', '67'),
(7, 'coco', 'djdh', '-5', '90'),
(8, 'coco', 'djdh', '-5', '90'),
(9, 'coco', 'djdh', '12', '99'),
(10, 'coco', 'djdh', '12', '99'),
(11, 'gdg', 'djdh', '8', '34'),
(12, 'gdg', 'djdh', '8', '34'),
(13, 'gdg', 'djdh', '2', '678'),
(14, 'hdh', 'djdh', '2', '68'),
(15, 'hdh', 'djdh', '2', '68');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `prenom` text NOT NULL,
  `nom` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `genre` text NOT NULL,
  `password` text NOT NULL,
  `token` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `prenom`, `nom`, `username`, `email`, `genre`, `password`, `token`) VALUES
(1, 'hgg', 'gfhfh', 'hdhdh', '', 'm', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', ''),
(2, 'theo', 'virbel', 'batman', '', 'm', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', ''),
(3, 'theo', 'virbel', 'coco', 'coco@gmail.com', 'm', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'lu28Pgd2iSLDoDwxyLH79PmUvrsZ3bcDQQN6WIPhFz6k_smWhD'),
(4, 'lola', 'morin', 'coco@gmail.com', 'tvirbel@gmail.com', 'm', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '4nmKcEnD0q7WP7qsXQOoesz3qJn1B61oVbNjAg0iGWN2Z0ehSo'),
(5, 'theo', 'virbel', 'batmobile', 'tvirbel@gmail.com', 'm', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', ''),
(6, 'theo', 'virbel', 'tvirbel', 'theo.virbel@gmail.com', 'm', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', ''),
(7, 'theo', 'virbel', 'bat', 't@gmail.com', 'm', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', ''),
(8, 'dede', 'pmu', 'dededu54', 'dede@con.fr', 'm', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', ''),
(9, 'lola', 'cola', 'cocacola', 'cola@gmail.com', 'm', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL),
(10, 'theo', 'virbel', 'luigietbatman', 'virbeltheo@gmail.com', 'm', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `firstname`, `lastname`, `email`, `password`, `gender`) VALUES
(15, 'coca', 'cola', 'coco@gmail.com', '1358a3cee90e0142f43b71059081d6d5', 'others');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annuaire`
--
ALTER TABLE `annuaire`
  ADD PRIMARY KEY (`id_annuaire`);

--
-- Index pour la table `atm`
--
ALTER TABLE `atm`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formulaire`
--
ALTER TABLE `formulaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ok`
--
ALTER TABLE `ok`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annuaire`
--
ALTER TABLE `annuaire`
  MODIFY `id_annuaire` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `atm`
--
ALTER TABLE `atm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `formulaire`
--
ALTER TABLE `formulaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `ok`
--
ALTER TABLE `ok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Base de données : `d`
--
CREATE DATABASE IF NOT EXISTS `d` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `d`;
--
-- Base de données : `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Structure de la table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Structure de la table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Structure de la table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Settings related to Designer';

--
-- Déchargement des données de la table `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('Theo', '{\"angular_direct\":\"direct\",\"snap_to_grid\":\"off\",\"relation_lines\":\"true\"}');

-- --------------------------------------------------------

--
-- Structure de la table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Structure de la table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Structure de la table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Structure de la table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Recently accessed tables';

--
-- Déchargement des données de la table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('Theo', '[{\"db\":\"cours\",\"table\":\"annuaire\"},{\"db\":\"cours\",\"table\":\"atm\"},{\"db\":\"cours\",\"table\":\"utilisateur\"},{\"db\":\"cours\",\"table\":\"users\"},{\"db\":\"cours\",\"table\":\"annulaire\"},{\"db\":\"catbar\",\"table\":\"cat\"},{\"db\":\"catbar\",\"table\":\"reservation\"},{\"db\":\"catbar\",\"table\":\"users\"},{\"db\":\"cours\",\"table\":\"stock\"},{\"db\":\"cours\",\"table\":\"ok\"}]');

-- --------------------------------------------------------

--
-- Structure de la table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Structure de la table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Tables'' UI preferences';

--
-- Déchargement des données de la table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('Theo', 'cours', 'utilisateur', '{\"sorted_col\":\"`gender`  DESC\"}', '2023-09-11 13:40:46');

-- --------------------------------------------------------

--
-- Structure de la table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Déchargement des données de la table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('Theo', '2023-10-18 14:18:08', '{\"lang\":\"fr\",\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Structure de la table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Structure de la table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Users and their assignments to user groups';

--
-- Déchargement des données de la table `pma__users`
--

INSERT INTO `pma__users` (`username`, `usergroup`) VALUES
('Theo', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Index pour la table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Index pour la table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Index pour la table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Index pour la table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Index pour la table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Index pour la table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Index pour la table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Index pour la table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Index pour la table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Index pour la table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Index pour la table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Index pour la table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Index pour la table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
