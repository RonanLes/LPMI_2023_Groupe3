-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 20 fév. 2024 à 14:00
-- Version du serveur : 5.7.36
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `php`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`) VALUES
(1, 'LucasLoPotiroi', 'VigneProtect');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produit` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `categorie` int(11) DEFAULT NULL,
  `TAG` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categorie` (`categorie`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `produit`, `img`, `prix`, `description`, `categorie`, `TAG`) VALUES
(1, 'Costume de soubrette', 'https://cdn.vegaooparty.com/images/rep_art/gra/174/7/174771/deguisement-soubrette-sexy-a-corsage-femme_174771.jpg', 2000, 'Super costume de soubrette, parfait pour les soirées !', 1, 1),
(2, 'Chien2', 'https://ik.imagekit.io/yynn3ntzglc/cms/large_Une_gauche_focus_shiba_inu_262311c87a_B6Oh-EmIV.jpg', 100, 'Un gros chien', 2, 2),
(3, 'Jouet enfant', 'https://cache.natureetdecouvertes.com/Medias/Images/Articles/91190520/6943478004238-boite-outils-pour-enfant-jouet-hape_P1.jpg', 10, 'Un jouet pour enfant', 3, 0),
(4, 'Souris', 'https://www.grosbill.com/images_produits/8da397ef-b191-4d6a-b51c-63f317ce44f2.jpg', 60, 'Une souris pour ordinateur', 4, 0),
(5, 'Clavier', 'https://magasin.avh.asso.fr/img/cms/Geemarc/2019KBSV3_BLK_Fr01.JPG', 120, 'Un clavier pour ordinateur', 4, 0),
(6, 'Ecran', 'https://www.cdiscount.com/pdt2/x/e/n/1/700x700/ls24a336nhuxen/rw/ecran-pc-samsung-s24a336nhu-24-fhd-dalle.jpg', 400, 'Un écran pour ordinateur', 4, 0),
(7, 'Avatar', 'https://m.media-amazon.com/images/I/81VZMkd8RFL._AC_UF1000,1000_QL80_.jpg', 30, 'Le film Avatar', 6, 0),
(8, 'Star Wars', 'https://m.media-amazon.com/images/I/81sLXnfuBXL._AC_UF1000,1000_QL80_.jpg', 90, 'La saga Star Wars', 6, 0),
(9, 'Casquette', 'https://www.casquette-print.fr/wp-content/uploads/2022/03/CASQUETTE-TRUCKER-Yupoong-Front-tissu-personnalisee-6006-2.png', 25, 'Une casquette en tissu', 1, 0),
(10, 'Veste', 'https://s1.rockagogostatic.com/ref/pls/pls19/blouson-cuir-homme-rock-moto-mec-marque-osx-harrison-pr.jpg', 50, 'Une veste en cuir', 1, 0),
(11, 'Chaussures', 'https://tbs-tbs-storage.omn.proximis.com/Imagestorage/images/740/740/64e716b3a11af_PHENIS_D8152_2.jpg', 40, 'Des chaussures de bonne qualité', 1, 0),
(12, 'Ampoule', 'https://moncieletoile.com/402-large_default/ampoule-e27-led-10-watts.jpg', 8, 'Une grosse ampoule', 5, 0),
(13, 'Lampe', 'https://medias.lampe-avenue.fr/13526-thickbox_eal/lampe-de-bureau-articulee-blanche.jpg', 12, 'Une lampe très puissante', 5, 0),
(14, 'Marteau', 'https://www.atmb-services.fr/pub/catalog/gros_oeuvre/6605.jpg', 15, 'Un marteau', 5, 0),
(15, 'Scie', 'https://cdn.dictum.com/media/image/7b/1a/0b/712091_01_P_WE_8_Turbo_Cut_Fuchsschwanz_450_WZ_jpg_600x600.jpg', 18, 'Une scie', 5, 0),
(16, 'Mikado', 'https://www.bonbon-foliz.com/7796-large_default/mikado-pocket.jpg', 6, 'Des mikados', 2, 0),
(17, 'Cookies', 'https://assets.afcdn.com/recipe/20190529/93153_w1024h768c1cx2220cy1728cxt0cyt0cxb4441cyb3456.jpg', 8, 'Des cookies avec du chocolat', 2, 0),
(18, 'Casque', 'https://m.media-amazon.com/images/I/417tlrQNvsL.jpg', 12, 'Un casque audio', 4, 0),
(19, 'Gourde', 'https://boutique.ffrandonnee.fr/content/images/thumbs/0005063_gourde-pop.jpeg', 45, 'Une gourde en plastique', 7, 0),
(20, 'Bouteille', 'https://www.welcomeoffice.com/WO_Products_Images/XLarge/378003_JPG.jpg', 20, 'Une bouteille d\'eau', 2, 0),
(21, 'plaque acier', 'https://www.stock-ath.be/Images/Articles/FMETALSE/100010211.jpg', 45, '4mm d\'épaisseur', 8, 0),
(22, 'Aluminium', 'https://upload.wikimedia.org/wikipedia/commons/5/5d/Aluminium-4.jpg', 60, 'Une plaque', 8, 0),
(23, 'Baton', 'https://djoliba.com/1988-large_default/baton-de-pluie-cactus-120-cm.jpg', 2, 'Un bâton', 8, 0),
(24, 'Pierre', 'https://www.mineraux.fr/wp-content/uploads/2020/12/pierre-meteorite-caracteristiques.jpg', 4, 'De la pierre', 8, 0),
(25, 'Bois', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Wood_grain.jpg/800px-Wood_grain.jpg', 6, 'Du bois', 8, 0),
(26, 'Ficelle', 'https://static.wesco.fr/media/catalog/product/cache/7ccc10e5a8277e9f8854785247b9d41d/5/6/56209_180906_pd.jpg', 46, 'De la ficelle', 8, 0),
(27, 'Os en plastique', 'https://www.sparklers-club.com/ressources/produits/63444-1-paire-d-os-en-plastique-22cm.jpg', 65, 'Un os en plastique', 3, 0),
(28, 'Collier', 'https://www.bijourama.com/media/produits/maison-de-la-bijouterie/img/collier-femme--uw0uvv4y--plaque-or_3237553_1140x1140.jpg', 132, 'Un joli collier', 9, 0),
(29, 'Bracelet', 'https://www.juliendorcel.com/53146-thumbnail_product/bracelet-or.jpg', 46, 'Un beau bracelet', 9, 0),
(30, 'Hibou', 'https://media.gerbeaud.net/2020/03/640/hibou-grand-duc.jpg', 5000, 'Un super hibou', 10, 0),
(31, 'Chien', 'https://ik.imagekit.io/yynn3ntzglc/cms/large_Une_gauche_focus_shiba_inu_262311c87a_B6Oh-EmIV.jpg', 2000, 'Un super chien', 10, 0);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'Vetement'),
(2, 'Nourriture'),
(3, 'Jouet'),
(4, 'Informatique'),
(5, 'Outillage'),
(6, 'Film'),
(7, 'Accessoire'),
(8, 'Ressource'),
(9, 'Bijoux'),
(10, 'Animal');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) DEFAULT NULL,
  `prenom` varchar(25) DEFAULT NULL,
  `login` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

DROP TABLE IF EXISTS `TAG`;
CREATE TABLE IF NOT EXISTS `TAG` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
