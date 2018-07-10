-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2017 at 09:11 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamestore`
--
CREATE DATABASE IF NOT EXISTS `gamestore` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gamestore`;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartNum` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `totalPrice` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `postID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `phoneNumber` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `system` varchar(255) NOT NULL,
  `imageURL` varchar(355) NOT NULL,
  `description` varchar(355) NOT NULL,
  `numPlayers` varchar(255) NOT NULL,
  `trailer` varchar(355) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `name`, `genre`, `price`, `system`, `imageURL`, `description`, `numPlayers`, `trailer`) VALUES
(1, 'Call Of Duty: Black Ops 3', 'Shooter', 24.99, 'Xbox One', 'https://images-eds-ssl.xboxlive.com/image?url=8Oaj9Ryq1G1_p3lLnXlsaZgGzAie6Mnu24_PawYuDYIoH77pJ.X5Z.MqQPibUVTcjH7Y0zrFAw6OK32H4ByBTK3XKBmgscHXo2gFp5bhlVOcqzN2FTlIeD._X9pRr_hromNn9pZ1R93GAfJeL40iJI_.TTiKQLK4_IfroPCt1UbhgCB1RM_dctJvSiUstO50S02In248863_5Af2u4uRu5m4FwXjv4iL0T8c0uHXJrU-&format=png&h=294&w=215', 'Blast your way through a deceptively complex campaign, then engage in multiplayer mayhem, zombie survival, and an additional revamped campaign', 'Local: 1-4 players, Online Multiplayer: 2-12 players', 'https://youtube.com/embed/vIg5dAeudvQ'),
(2, 'Grand Theft Auto V', 'Adventure', 59.99, 'Xbox One', 'http://i.ebayimg.com/00/s/ODI4WDY0MA==/z/JD4AAOSw~FNUapx1/$_3.JPG?set_id=2', 'Enter the lives of three very different criminals, Michael, Franklin and Trevor, as they risk everything in a series of daring and dangerous heists that could set them up for life.', 'Local: 1 player, Online Multiplayer: 2-16 players', 'https://youtube.com/embed/hvoD7ehZPcM'),
(3, 'Minecraft', 'Casual', 19.99, 'Xbox One', 'https://images-eds-ssl.xboxlive.com/image?url=8Oaj9Ryq1G1_p3lLnXlsaZgGzAie6Mnu24_PawYuDYIoH77pJ.X5Z.MqQPibUVTcRY.yavzo7nYP0X88I63UeJxs_ICOvM1iX20FQwMAmM_FMmBzpXYeZrrGzp6ljxQRlc3W0ST2osI.LOzw4pAwdNBPyb0w00CA_Pk7Ntd7LhyyxBg3pLXbVwt2ZEbsfsAFs9a5QT2KhnckaOxZCa6pWq6cjL8inZVSV9mjqU77.9U-', 'Build with your imagination! Minecraft, the best-selling game on Xbox 360, is now available on Xbox One. Create and explore your very own world where the only limit is what you can imagine - just be sure to build a shelter before night comes to keep yourself safe from monsters.', 'Local: 1-4 players, Online Multiplayer: 2-8 players', 'https://youtube.com/embed/MmB9b5njVbA'),
(4, 'Fallout 4', 'Role-Playing', 39.99, 'Xbox One', 'https://images-eds-ssl.xboxlive.com/image?url=8Oaj9Ryq1G1_p3lLnXlsaZgGzAie6Mnu24_PawYuDYIoH77pJ.X5Z.MqQPibUVTcto_xGgZXFpv3kns1dMmbHyC1UVfHWXSaUjG9y_ggFfEUG9ghZu4rR.SDZlhVz4Eh2xZczpof8dRfklTZg0Os7Gp4K7P5Fm5AugMCfFKuz9L1Wn9yGhaFPq03bRjw7F9mnGnZRQyMX_DIx5tCoS9vNjCaemvVY71fFvWqLlfbmVA-', 'Bethesda Game Studios, the award-winning creators of Fallout 3 and The Elder Scrolls V: Skyrim, welcome you to the world of Fallout 4 - their most ambitious game ever, and the next generation of open-world gaming.', 'Local: 1 player', 'https://youtube.com/embed/k3IlHBBGCIw'),
(5, 'Titanfall 2', 'Shooter', 59.99, 'Xbox One', 'https://images-eds-ssl.xboxlive.com/image?url=8Oaj9Ryq1G1_p3lLnXlsaZgGzAie6Mnu24_PawYuDYIoH77pJ.X5Z.MqQPibUVTcwjanr5otL7RvQp1M6J.FZq_hWzIP3BHgKf9WloxKGNim6uIg1dymCiAU95ncKVXSHiVpyrmVYVnQl5DgCono.AyfxA75om99_WqPChtO47wgbbVU04y80_Qo35a_MTYBxQGTudyy37hR975h1M61n3qmOOl8cGPybFI7TAw9VlY-&format=png&h=294&w=215', 'Pilot and Titan unite as never before in Respawn Entertainment\'s highly anticipated Titanfall® 2. Experience a single player campaign that explores the unique bond between man and machine. Dominate the competition in multiplayer action, featuring six all-new Titans.', 'Local: 1 player, Online Multiplayer: 2-16 players', 'https://youtube.com/embed/Wtu3fUs9i7M'),
(6, 'Super Smash Bros', 'Fighting', 39.99, 'Nintendo 3DS', 'http://i.ebayimg.com/thumbs/images/g/41oAAOSw~OdVbwiD/s-l225.jpg', 'Super Smash Bros. for Nintendo 3DS is the first portable entry in the renowned series, in which game worlds collide. Up to four players battle each other locally or online using some of Nintendo\'s most well-known and iconic characters across beautifully designed stages inspired by classic portable Nintendo games.', 'Local: 1-4 players, Online Multiplayer: 1-4 players', 'https://youtube.com/embed/xvudMu-5kIU'),
(7, 'The Legend of Zelda: Ocarina Of Time 3D', 'Adventure', 19.99, 'Nintendo 3DS', 'https://images-na.ssl-images-amazon.com/images/I/81ETnWT1QlL._SX425_.jpg', 'The Legend of Zelda: Ocarina of Time 3D brings a completely re-mastered version of an epic entry in the beloved The Legend of Zelda game series to Nintendo\'s newest hand-held system, Nintendo 3DS. ', 'Local: 1 player', 'https://youtube.com/embed/PX6RndmM1CU'),
(8, 'Mario Kart 7', 'Racing', 31.99, 'Nintendo 3DS', 'http://www.toysrus.com/graphics/tru_prod_images/Mario-Kart-7-for-Nintendo--pTRU1-11279587dt.jpg', 'The newest installment of the fan-favorite Mario Kart franchise brings Mushroom Kingdom racing fun into glorious 3D. For the first time, drivers explore new competitive kart possibilities, such as soaring through the skies or plunging to the depths of the sea.', 'Local: 1-8 players, Online Multiplayer: 2-8 players', 'https://youtube.com/embed/88OsV_NI_rE'),
(9, 'Pokemon Sun', 'Role-Playing', 39.99, 'Nintendo 3DS', 'http://pisces.bbystatic.com/image2/BestBuy_US/images/products/5051/5051800_sd.jpg;maxHeight=550;maxWidth=642', 'In the Pokémon Sun and Pokémon Moon games, embark on an adventure as a Pokémon Trainer and catch, battle and trade all-new Pokémon on the tropical islands of the Alola Region. Engage in intense battles, and unleash new powerful moves. ', 'Local: 1-4 players, Online Multiplayer: 2-4 players', 'https://youtube.com/embed/Iylfh-7uQkc'),
(10, 'Fire Emblem Awakening', 'Strategy', 49.99, 'Nintendo 3DS', 'https://beebom.com/wp-content/uploads/2016/01/fe-awakening-e1451671534148.jpg', 'Fire Emblem Awakening offers a unique blend of in-battle strategy, vast character customization, and lush 3D cinematic graphics that appeal to a wide range of gamers. In this game, you\'ll join Chrom, brother to Ylisse\'s empress and commander of its forces, in a fantasy world teetering on the brink of war.', 'Local: 1-2 players', 'https://youtube.com/embed/n-BB3KbVUYI'),
(11, 'FTL: Faster Than Light', 'Strategy', 9.99, 'PC', 'https://d1fcuo2xbwj8qa.cloudfront.net/cdn_pictures/deals/25701/large/ftl-faster-than-light-pc-download-.jpg?1354725053', 'This "spaceship simulation roguelike-like" allows you to take your ship and crew on an adventure through a randomly generated galaxy filled with glory and bitter defeat.', 'Local: 1 player', 'https://youtube.com/embed/jr3QHJJnAUA'),
(12, 'Middle-Earth: Shadow of Mordor', 'Adventure', 19.99, 'PC', 'http://assets2.ignimgs.com/2014/09/15/shadowofmordorpcjpg-3a4c6d.jpg', 'Fight through Mordor and uncover the truth of the spirit that compels you, discover the origins of the Rings of Power, build your legend and ultimately confront the evil of Sauron in this new chronicle of Middle-earth.', 'Local: 1 player', 'https://youtube.com/embed/4rbOTQhasnM'),
(13, 'Mass Effect 2', 'RPG', 19.99, 'PC', 'https://s2.thcdn.com/productimg/0/600/600/76/10049776-1344444413-939674.png', 'Recruit. Explore. Control.Two years after Commander Shepard repelled invading Reapers bent on the destruction of organic life, a mysterious new enemy has emerged. On the fringes of known space, something is silently abducting entire human colonies.', 'Local: 1 player', 'https://youtube.com/embed/Y2O-0-fQOOs'),
(14, 'Terraria', 'Adventure', 5.99, 'PC', 'https://vignette1.wikia.nocookie.net/terraria/images/d/da/CE_Cover-UK.jpg/revision/latest?cb=20120223222150', 'Dig, fight, explore, build! Nothing is impossible in this action-packed adventure game. Four Pack also available!', 'Local: 1 player, Online Multiplayer: 2-24 players', 'https://youtube.com/embed/w2bFxdmwWKc'),
(15, 'Knights Of The Old Republic: The Sith Lords', 'RPG', 9.99, 'PC', 'https://images-na.ssl-images-amazon.com/images/I/71eueA5gaFL.jpg', ' years after the events of the award winning original, the Sith are on the verge of crushing the Old Republic. As a lone Jedi, will you follow the light side or succumb to the dark?', 'Local: 1 player', 'https://youtube.com/embed/2ff0ziipxLg'),
(16, 'MLB The Show 17', 'Sports', 59.99, 'PS4', 'https://cdn2.vox-cdn.com/uploads/chorus_asset/file/7358083/mlb-the-show-17-box-art_1524.jpg', 'MLB The Show 17 delivers the most realistic and personal baseball gaming experience on consoles. This year The Show offers exciting gameplay improvements and a greater ability to personalize your baseball experience.', 'Local: 1-4 players, Online Multiplayer: 2-8 players', 'https://youtube.com/embed/Uhs1Djmg0Fk'),
(17, 'Borderlands: The Handsome Collection', 'Shooter', 29.99, 'PS4', 'http://pristavkivsem.ru/uploadedFiles/eshopimages/big/Borderlands-The-Handsome-Collection-(PS4).jpg', 'Borderlands: The Handsome Collection is the essential Borderlands compilation and includes the definitive versions of both Borderlands 2 and Borderlands: The Pre-Sequel, built specifically for next-gen consoles.', 'Local: 1-4 players, Online Multiplayer: 2-4 players', 'https://youtube.com/embed/RHbPBIpRQaA'),
(18, 'NBA 2k17', 'Sports', 59.99, 'PS4', 'http://sm.ign.com/ign_nl/release/default/nba-2k-17-ps4-packshot_fsn8.jpg', 'Following the record-breaking launch of NBA 2K16, the NBA 2K franchise continues to stake its claim as the most authentic sports video game with NBA 2K17. As the franchise that "all sports video games should aspire to be" (GamesRadar), NBA 2K17 will take the game to new heights and continue to blur the lines between video game and reality.', 'Local: 1-4 players, Online Multiplayer: 2-10 players', 'https://youtube.com/embed/t89CaiUHZWc'),
(19, 'FIFA 17', 'Sports', 59.99, 'PS4', 'http://cdn-r1.unilad.co.uk/wp-content/uploads/2016/07/FIFA17ps42DPFTglo.jpg', 'Powered by Frostbite, FIFA 17 transforms the way you play, compete, and emotionally connect with the game. FIFA 17 immerses you in authentic football experiences by leveraging the sophistication of a new game engine, while introducing you to football players full of depth and emotion, and taking you to brand new worlds accessible only in the game.', 'Local: 1-4 players, Online Multiplayer: 2-22 players', 'https://youtube.com/embed/-3fjoe5Njpc'),
(20, 'Horizon Zero Dawn', 'Action', 59.99, 'PS4', 'http://www.gamestop.com/common/images/lbox/123788b.jpg', 'Horizon Zero Dawn is an exhilarating new action role playing game exclusively for the PlayStation®4 System, developed by the award-winning Guerrilla Games, creators of PlayStation\'s venerated Killzone franchise.', 'Local: 1 player', 'https://youtube.com/embed/sYD7era8u0k');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `purchaseID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `paymentMethod` varchar(32) NOT NULL,
  `cardNumber` int(16) DEFAULT NULL,
  `securityCode` int(3) DEFAULT NULL,
  `shippingAddress` varchar(32) NOT NULL,
  `shippingState` varchar(32) NOT NULL,
  `shippingCity` varchar(32) NOT NULL,
  `shippingZipCode` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `employeeID` int(11) NOT NULL,
  `firstName` varchar(32) NOT NULL,
  `lastName` varchar(32) NOT NULL,
  `position` varchar(32) NOT NULL,
  `weeklyHours` varchar(32) NOT NULL,
  `salary` double NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`employeeID`, `firstName`, `lastName`, `position`, `weeklyHours`, `salary`, `description`) VALUES
(1, 'Chris', 'Anderson', 'CEO', '40', 90000, 'DESCRIPTION'),
(2, 'Brian', 'Rawls', 'CFO', '40', 80000, 'DESCRIPTION'),
(3, 'Narayanan', 'Veliyath', 'Web Developer', '40', 55000, 'DESCRIPTION'),
(4, 'David', 'Brown', 'Web Developer', '40', 60000, 'DESCRIPTION'),
(5, 'Troy', 'Brown', 'Customer Service Representative', '40', 55000, 'DESCRIPTION');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartNum`),
  ADD KEY `customerID` (`customerID`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`postID`),
  ADD KEY `customerID` (`customerID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`purchaseID`),
  ADD KEY `productID` (`productID`),
  ADD KEY `customerID` (`customerID`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`employeeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartNum` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
