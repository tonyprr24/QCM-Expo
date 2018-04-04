-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 11 jan. 2018 à 17:50
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `quizzbts`
--

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id` smallint(3) UNSIGNED NOT NULL,
  `sentence` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `sentence`) VALUES
(1, 'Tu cherches une école pour poursuivre tes études :'),
(2, 'On te propose un stage mais il faut travailler le samedi :'),
(3, 'Quand tu étais enfant, tu préférais jouer à :'),
(4, 'Tu es dans le bureau de ton maitre de stage, il s\'est absenté quelques minutes. son téléphone sonne :'),
(5, 'Sur ton bureau, c\'est :'),
(6, 'Dans la rue, une personne cherche désespérément son chemin :'),
(7, 'Et ton compte bancaire, comment tu le gères ?'),
(8, 'Un prof vous donne un exposé de groupe à faire :'),
(9, 'L\'argent, tu le gagnes comment ?'),
(10, 'Pour toi, un bon vendeur c\'est :'),
(11, 'Tes principales qualités :'),
(12, 'Pour les vacances, tu optes pour :'),
(13, 'Le bénévolat dans l\'humanitaire, pourquoi pas ?');

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

CREATE TABLE `reponses` (
  `id` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  `sentence` varchar(300) NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reponses`
--

INSERT INTO `reponses` (`id`, `id_question`, `sentence`, `id_type`) VALUES
(1, 1, 'Faire des kilomètres en voiture, train ou bus, ça ne te fait pas peur, tu adores bouger.', 2),
(2, 1, 'Le critère de distance, tu en tiens compte mais tu es prêt(e) à bouger.', 2),
(3, 1, 'Tu choisis l\'école la plus proche de chez toi.', 1),
(4, 2, 'Pas de problème, tu t\'organises.', 1),
(5, 2, 'Pas question, le week-end c\'est sacré.', 3),
(6, 2, 'Tu acceptes mais en négociant une prime supplémentaire.', 2),
(7, 3, 'Au marchand (la marchande).', 1),
(8, 3, 'Au Monopoly.', 2),
(9, 3, 'Aux jeux vidéo.', 2),
(10, 4, 'Tu laisse sonner.', 3),
(11, 4, 'Tu attends quelques sonneries avant de répondre, si ça se trouve c\'est important.', 2),
(12, 4, 'Tu décroches spontanément et prends le message.', 1),
(13, 5, 'Rangé. Tes cours sont classés régulièrement.', 1),
(14, 5, 'En chantier, mais tu t\'y retrouves très bien.', 2),
(15, 5, 'Beyrouth ! T\'abandonnes.', 3),
(16, 6, 'Tu fais comme si tu ne l\'avais pas vue, chacun ses problèmes.', 3),
(17, 6, 'Tu vas vers elle, tu l\'aides, voire tu l\'accompagnes.', 2),
(18, 6, 'Tu attends qu\'elle te demande de l\'aide et tu lui réponds.', 1),
(19, 7, 'Tu fais tes comptes de temps en temps quand tu sens que ça va coincer.', 1),
(20, 7, 'Tu fais tes comptes régulièrement, tu sais de combien tu disposes à tout moment, tu places ton argent sur des livrets.', 2),
(21, 7, 'Tu laisses tes parents s\'occuper de ça.', 3),
(22, 8, 'Super, t\'adores le travail d\'équipe, c\'est plus sympa !', 1),
(23, 8, 'Tu te débrouilles pour avoir le moins à faire possible et te mets en binôme avec le premier de la classe.', 2),
(24, 8, 'Tu choisis la partie qui t\'intéresse, préfères bosser seul(e) et proposes de faire l\'exposé oral devant la classe.', 2),
(25, 9, 'Tu choisis le job qui bouge le plus, où tu vas rencontrer plein de monde et gagner plus avec des primes et des commissions qu\'avec un fixe.', 2),
(26, 9, 'Tu comptes sur le tirage du loto ou le chèque de tes grands parents.', 3),
(27, 9, 'Tu cherches des jobs dans les magasins ou restaurants près de chez toi.', 1),
(28, 10, 'Un beau parleur qui a réponse à tout.', 3),
(29, 10, 'Quelqu\'un qui sait poser les bonnes questions et écouter pour comprendre le client.', 3),
(30, 10, 'Un arnaqueur « vendeur de tapis ».', 3),
(31, 11, 'La réflexion et la rigueur.', 3),
(32, 11, 'L\'organisation et le sens du service.', 1),
(33, 11, 'La ténacité et le goût du contact.', 2),
(34, 12, 'Un club avec activités et farniente.', 3),
(35, 12, 'Tu préfères rester chez toi pour te reposer.', 3),
(36, 12, 'Sac à dos pour un trek en Amérique du Sud.', 2),
(37, 13, 'Tu proposes de t\'occuper de l\'intendance et de l\'accueil des réfugiés.', 1),
(38, 13, 'Pour toi pas de doute : sans argent, on ne peut rien faire sur le terrain, tu choisis de faire de la collecte de fonds.', 2),
(39, 13, 'Les installations techniques c\'est ton truc, tu vas mettre en place la pompe à eau.', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` smallint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `reponses`
--
ALTER TABLE `reponses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
