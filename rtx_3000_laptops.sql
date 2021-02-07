SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE images (
  imgId int(11) UNSIGNED NOT NULL,
  laptopId int(11) NOT NULL,
  imgName varchar(100) CHARACTER SET latin1 NOT NULL,
  imgPath varchar(150) CHARACTER SET latin1 NOT NULL,
  imgDate timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE laptops (
  laptopId int(11) NOT NULL,
  laptopMaker varchar(30) NOT NULL,
  laptopModel varchar(30) NOT NULL,
  laptopSpecs text DEFAULT NULL,
  laptopGpu int(4) NOT NULL,
  laptopCpu varchar(6) NOT NULL,
  laptopRam int(2) NOT NULL,
  laptopStorage varchar(5) NOT NULL,
  laptopScreen int(3) NOT NULL,
  laptopImage varchar(50) NOT NULL,
  laptopThumbnail varchar(50) NOT NULL,
  laptopPrice decimal(10,0) NOT NULL,
  series int(11) NOT NULL,
  releaseDate date NOT NULL,
  lastGenRating int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE userpreference (
  prefId int(11) UNSIGNED NOT NULL,
  likeText text CHARACTER SET latin1 NOT NULL,
  dislikeText text CHARACTER SET latin1 NOT NULL,
  prefDate timestamp NOT NULL DEFAULT current_timestamp(),
  laptopId int(11) NOT NULL,
  userId int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE users (
  userId int(10) UNSIGNED NOT NULL,
  userFirstname varchar(15) NOT NULL,
  userLastname varchar(25) NOT NULL,
  userEmail varchar(40) NOT NULL,
  userPassword varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE images
  ADD PRIMARY KEY (imgId),
  ADD KEY laptopId (laptopId) USING BTREE;

ALTER TABLE laptops
  ADD PRIMARY KEY (laptopId);

ALTER TABLE userpreference
  ADD PRIMARY KEY (prefId),
  ADD KEY FK_pref_laptops (laptopId) USING BTREE,
  ADD KEY FK_pref_users (userId) USING BTREE;

ALTER TABLE users
  ADD PRIMARY KEY (userId),
  ADD UNIQUE KEY userEmail (userEmail) USING BTREE;


ALTER TABLE images
  MODIFY imgId int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE laptops
  MODIFY laptopId int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE userpreference
  MODIFY prefId int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE users
  MODIFY userId int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
