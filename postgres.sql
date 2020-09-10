DROP TABLE IF EXISTS commandes;
CREATE TABLE IF NOT EXISTS commandes (
  prod_comm varchar(255) NOT NULL,
  qte_prod_comm int NOT NULL,
  prix_prod_comm int NOT NULL,
  nom_comm varchar(255) NOT NULL
) ;

--
-- Dumping data for table commandes
--

INSERT INTO commandes (prod_comm, qte_prod_comm, prix_prod_comm, nom_comm) VALUES
('Dell inspiron', 12, 1, 'anis');

-- --------------------------------------------------------

--
-- Table structure for table devis
--

DROP TABLE IF EXISTS devis;
CREATE TABLE IF NOT EXISTS devis (
  nom varchar(255) NOT NULL,
  prix int NOT NULL,
  produit varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  accepte varchar(255) NOT NULL
) ;

--
-- Dumping data for table devis
--

INSERT INTO devis (nom, prix, produit, email, accepte) VALUES
('Anis', 0, '5 Acer  10 hp ', 'anis007@live.fr', 'false');

-- --------------------------------------------------------

--
-- Table structure for table etoiles
--

DROP TABLE IF EXISTS etoiles;
CREATE TABLE IF NOT EXISTS etoiles (
  nom varchar(255) NOT NULL,
  valeur int NOT NULL
) ;

--
-- Dumping data for table etoiles
--

INSERT INTO etoiles (nom, valeur) VALUES
('Dell inspiron', 4),
('Dell inspiron', 3),
('Dell inspiron	', 4),
('Dell inspiron', 4),
('Dell inspiron', 5),
('Dell inspiron', 4);

-- --------------------------------------------------------

--
-- Table structure for table historiques
--

DROP TABLE IF EXISTS historiques;
CREATE TABLE IF NOT EXISTS historiques (
  nom varchar(255) NOT NULL,
  produit varchar(255) NOT NULL,
  qte int NOT NULL,
  date timestamp(0) NOT NULL DEFAULT current_timestamp
);

--
-- Dumping data for table historiques
--

INSERT INTO historiques (nom, produit, qte, date) VALUES
('anis', 'Dell inspiron', 12, '2013-05-03 16:37:37'),
('anis', 'Dell inspiron', 12, '2013-05-03 19:46:23'),
('anis', 'Dell inspiron', 12, '2013-05-03 21:07:45'),
('anis', 'Dell inspiron', 12, '2013-05-14 19:22:37'),
('anis', 'Acer ', 12, '2013-05-14 19:22:37'),
('anis', 'Dell inspiron', 12, '2013-05-14 21:20:45'),
('anis', 'Acer ', 12, '2013-05-14 21:20:45'),
('anis', 'Dell inspiron', 12, '2013-05-14 21:30:04'),
('anis', 'Acer ', 12, '2013-05-14 21:30:04'),
('anis', 'Dell inspiron', 12, '2013-05-14 21:32:58'),
('anis', 'Acer ', 12, '2013-05-14 21:32:58'),
('anis', 'Dell inspiron', 12, '2013-05-14 21:35:39'),
('anis', 'Acer ', 12, '2013-05-14 21:35:39'),
('anis', 'Dell inspiron', 12, '2013-05-14 21:48:33'),
('anis', 'Acer ', 12, '2013-05-14 21:48:33'),
('anis', 'Dell inspiron', 12, '2013-05-14 21:58:48'),
('anis', 'Acer ', 12, '2013-05-14 21:58:48'),
('anis', 'Dell inspiron', 12, '2013-05-14 21:59:54'),
('anis', 'Acer ', 12, '2013-05-14 21:59:54'),
('anis', 'Dell inspiron', 12, '2013-05-14 22:01:16'),
('anis', 'Acer ', 12, '2013-05-14 22:01:16'),
('anis', 'Dell inspiron', 12, '2013-05-14 22:02:49'),
('anis', 'Acer ', 12, '2013-05-14 22:02:50'),
('anis', 'Dell inspiron', 12, '2013-05-14 22:04:11'),
('anis', 'Acer ', 12, '2013-05-14 22:04:11'),
('anis', 'Dell inspiron', 12, '2013-05-14 22:05:14'),
('anis', 'Acer ', 12, '2013-05-14 22:05:14'),
('anis', 'Dell inspiron', 12, '2013-05-14 22:06:49'),
('anis', 'Acer ', 12, '2013-05-14 22:06:49'),
('anis', 'Dell inspiron', 12, '2013-05-14 22:08:29'),
('anis', 'Acer ', 12, '2013-05-14 22:08:29'),
('anis', 'Dell inspiron', 12, '2013-05-14 22:11:18'),
('anis', 'Acer ', 12, '2013-05-14 22:11:18'),
('anis', 'Dell inspiron', 12, '2013-05-20 20:41:12'),
('anis', 'Acer ', 12, '2013-05-20 20:41:12'),
('anis', 'Dell inspiron', 12, '2013-05-25 09:18:33'),
('anis', 'Acer ', 12, '2013-05-25 09:18:33'),
('anis', 'Dell inspiron', 12, '2013-06-03 09:37:09'),
('anis', 'Acer ', 12, '2013-06-03 09:37:09'),
('anis', 'Dell inspiron', 1, '2013-06-03 23:32:07'),
('anis', 'Acer ', 12, '2013-06-03 23:32:07'),
('anis', 'Dell inspiron', 1, '2013-06-03 23:35:38'),
('anis', 'Acer ', 12, '2013-06-03 23:35:38'),
('anis', 'Dell inspiron', 1, '2013-06-03 23:42:12'),
('anis', 'Acer ', 12, '2013-06-03 23:42:12'),
('anis', 'Acer ', 12, '2013-06-03 23:48:42'),
('anis', 'Acer ', 12, '2013-06-03 23:51:37'),
('anis', 'Acer ', 12, '2013-06-04 00:08:06'),
('anis', 'Acer ', 12, '2013-06-04 00:08:25'),
('anis', 'Acer ', 12, '2013-06-04 00:09:26'),
('anis', 'Dell inspiron', 2, '2013-06-04 14:23:19'),
('anis', 'Dell inspiron', 2, '2013-06-04 15:55:14'),
('anis', 'Acer ', 12, '2013-06-04 15:57:41'),
('anis', 'Dell inspiron', 12, '2013-06-13 15:39:36'),
('anis', 'Dell inspiron', 12, '2020-09-04 14:53:08'),
('anis', 'Dell inspiron', 12, '2020-09-04 15:00:37'),
('anis', 'Dell inspiron', 12, '2020-09-04 15:01:19'),
('anis', 'Dell inspiron', 12, '2020-09-04 15:03:10');

-- --------------------------------------------------------

--
-- Table structure for table medias
--

DROP TABLE IF EXISTS medias;
CREATE SEQUENCE medias_seq;

CREATE TABLE IF NOT EXISTS medias (
  id int NOT NULL DEFAULT NEXTVAL ('medias_seq'),
  name varchar(255) NOT NULL,
  url varchar(255) NOT NULL,
  source_id int NOT NULL,
  PRIMARY KEY (id)
)  ;

ALTER SEQUENCE medias_seq RESTART WITH 4;

--
-- Dumping data for table medias
--

INSERT INTO medias (id, name, url, source_id) VALUES
(1, 'hi', '2013/04/1n4001.jpg', 0),
(2, 'hi', '2013/04/1n4001.jpg', 0),
(3, 'jj', '2013/04/02.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table notifications
--

DROP TABLE IF EXISTS notifications;
CREATE TABLE IF NOT EXISTS notifications (
  nom varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  prix int NOT NULL,
  quantite int NOT NULL,
  produit varchar(255) NOT NULL
) ;

--
-- Dumping data for table notifications
--

INSERT INTO notifications (nom, email, prix, quantite, produit) VALUES
('anis', 'anis007@live.fr', 1, 7, 'Acer '),
('anis', 'anis007@live.fr', 1, 10, 'Hp pavillon');

-- --------------------------------------------------------

--
-- Table structure for table pages
--

DROP TABLE IF EXISTS pages;
CREATE TABLE IF NOT EXISTS pages (
  id int NOT NULL,
  name text NOT NULL,
  content text NOT NULL
) ;

--
-- Dumping data for table pages
--

INSERT INTO pages (id, name, content) VALUES
(1, 'Ordinateurs', '<li><a href="/pages/recherche/toshiba">Toshiba</a><br>rn</li>rn<li><a href="/pages/recherche/Acer">Acer</a><br></li>rn<li><a href="/pages/recherche/asus">Asus</a><br></li>rn<li><a href="/pages/recherche/dell">dell</a><br></li>rn<li><a href="/pages/recherche/hp">Hp</a><br></li>rn<li><a href="/pages/recherche/lg">LG</a><br></li>rn<li><a href="/pages/recherche/samsung">Samsung</a><br></li>rn<li><a href="/pages/recherche/sony">Sony</a><br></li>rn<li><a href="/pages/recherche/versus">Versus</a></li>'),
(2, 'Tablettes', ''),
(3, 'Reseau', ''),
(3, 'Stockages', ''),
(4, 'Imprimentes', ''),
(5, 'Accessoires', ''),
(6, 'Bureautiques', ''),
(7, 'Onduleurs', '');

-- --------------------------------------------------------

--
-- Table structure for table paniers
--

DROP TABLE IF EXISTS paniers;
CREATE TABLE IF NOT EXISTS paniers (
  id int NOT NULL,
  "user" varchar(255) NOT NULL,
  qte int NOT NULL,
  name varchar(255) NOT NULL,
  prix int NOT NULL
) ;

--
-- Dumping data for table paniers
--

INSERT INTO paniers (id, "user", qte, name, prix) VALUES
(14, 'anis', 1, 'Dell inspiron', 1);

-- --------------------------------------------------------

--
-- Table structure for table produits
--

DROP TABLE IF EXISTS produits;
CREATE TABLE IF NOT EXISTS produits (
  id int NOT NULL,
  nom text NOT NULL,
  prix varchar(20) NOT NULL,
  reseau text NOT NULL,
  stokage int NOT NULL,
  cartegraphique text NOT NULL,
  memoire int NOT NULL,
  processeur text NOT NULL,
  ecran int NOT NULL,
  type text NOT NULL,
  name varchar(255) NOT NULL,
  url varchar(255) NOT NULL,
  categorie varchar(255) NOT NULL,
  remise varchar(255) NOT NULL,
  nprix int NOT NULL,
  qte_stock varchar(255) NOT NULL
) ;

--
-- Dumping data for table produits
--

INSERT INTO produits (id, nom, prix, reseau, stokage, cartegraphique, memoire, processeur, ecran, type, name, url, categorie, remise, nprix, qte_stock) VALUES
(14, 'Dell inspiron', '1', 'Nvidia', 0, 'Nvidia', 0, '', 17, '', 'dell', '2013/04/3-2.jpg', '', 'sfv', 1215, ''),
(0, 'Acer ', '1', '', 0, 'Nvidia', 0, '', 17, '', 'Acer', '2013/04/2.jpg', '', 'true', 12, ''),
(0, 'Hp pavillon', '1', 'Ethernet', 0, 'Gforce', 0, '', 21, '', 'hp', '2013/04/1.jpg', '', '', 0, ''),
(0, 'Asus', '1', 'Ethernet', 0, 'Gforce', 0, '', 21, '', 'asus', '2013/04/4.jpg', '', '', 0, ''),
(0, 'DELL', '1', 'Ethernet', 0, 'Gforce', 0, '', 21, '', 'dell', '2013/04/7.jpg', '', '', 0, ''),
(0, 'Sony', '1', 'Ethernet', 0, 'Gforce', 0, '', 21, '', 'sony', '2013/04/5.jpg', '', '', 0, ''),
(0, 'Hp compaq', '1', 'Ethernet', 0, 'NVIDIA', 0, '', 15, '', 'HP compaq', '2013/04/download.jpg', '', '', 0, ''),
(0, 'Toshiba', '1', 'Ethernet', 0, 'ATI', 0, '', 15, '', 'toshiba', '2013/04/images-1.jpg', '', '', 0, ''),
(0, 'LG', '1', 'Ethernet', 0, 'ATI', 0, '', 17, '', 'LG', '2013/04/images-2.jpg', '', '', 0, ''),
(0, 'Samsung', '1', 'Ethernet', 0, 'ATI', 0, '', 19, '', 'samsung', '2013/04/images.jpg', '', '', 0, ''),
(0, 'Asus', '1', 'Ethernet', 0, 'ATI', 0, '', 15, '', 'asus', '2013/04/images-2.jpg', '', '', 0, ''),
(0, 'Versus', '1', 'Ethernet', 0, 'Gforce', 0, '', 15, '', 'versus', '2013/04/M3N4NEWSNET-4683-1.jpg', '', '', 0, ''),
(0, 'Versus', '1', 'Ethernet', 0, 'Gforce', 0, '', 15, '', 'versus', '2013/04/M3N4NEWSNET-4683-1.jpg', '', '', 0, ''),
(0, 'Acer ', '1', '', 0, 'Nvidia', 0, '', 17, '', 'Acer', '2013/04/2.jpg', '', '', 0, ''),
(0, 'Hp pavillon', '1', 'Ethernet', 0, 'Gforce', 0, '', 21, '', 'hp', '2013/04/1.jpg', '', '', 0, ''),
(0, 'Asus', '1', 'Ethernet', 0, 'Gforce', 0, '', 21, '', 'asus', '2013/04/4.jpg', '', '', 0, ''),
(0, 'Sony', '1', 'Ethernet', 0, 'Gforce', 0, '', 21, '', 'sony', '2013/04/5.jpg', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table users
--

DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
  id int NOT NULL,
  username text NOT NULL,
  password varchar(255) NOT NULL,
  role varchar(255) NOT NULL,
  email varchar(255) NOT NULL
) ;

CREATE INDEX id ON users (id);

--
-- Dumping data for table users
--

INSERT INTO users (id, username, password, role, email) VALUES
(0, 'anis', 'anis', 'admin', ''),
(0, 'anis', 'd4b101f640a23621cd16b228bc9d4fe3547bdf1d', 'user', 'anis@hotmail.fr');

-- --------------------------------------------------------

--
-- Table structure for table utilisateurs
--

DROP TABLE IF EXISTS utilisateurs;
CREATE SEQUENCE utilisateurs_seq;

CREATE TABLE IF NOT EXISTS utilisateurs (
  id int NOT NULL DEFAULT NEXTVAL ('utilisateurs_seq'),
  name varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  PRIMARY KEY (id)
)  ;

ALTER SEQUENCE utilisateurs_seq RESTART WITH 8;

--
-- Dumping data for table utilisateurs
--

INSERT INTO utilisateurs (id, name, password, email) VALUES
(1, 'anis', 'anis', 'anis@hotmail.fr'),
(6, 'user7167', '7167', 'anis@hotmail.fr'),
(7, 'user8825', '6524341b411c77cdbd9dbc15f522c7b3', 'anis@hotmail.fr');
COMMIT;
