-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 10:04 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--
DROP DATABASE IF EXISTS movie; 
CREATE DATABASE movie; 
USE movie; 
-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `actorID` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `actorImage` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`actorID`, `firstname`, `lastname`, `actorImage`) VALUES
(1, 'Jackie ', 'Chan', 'public/images/Actors/jackieChan.jpg'),
(2, 'Vin', 'Diesel', 'public/images/Actors/vinDiesel.jpg'),
(3, 'Bruce ', 'Wayne', 'public/images/Actors/bruceWayne.jpg'),
(4, 'Marlon', 'Brando', 'public/images/Actors/marlonBrando.jpg'),
(5, 'Noel ', 'Appleby', 'public/images/Actors/noelAppleby.jpg'),
(6, 'Tom', 'Hanks', 'public/images/Actors/tomHanks.jpg'),
(7, 'Keanu', 'Reeves', 'public/images/Actors/keanuReeves.jpg'),
(8, 'Robert De', 'Niro', 'public/images/Actors/robertDeNiro.jpg'),
(9, 'Sam', 'Worthington', 'public/images/Actors/samWorthington.jpg'),
(10, 'Tom', 'Skeritt', 'public/images/Actors/tomSkeritt.jpg'),
(11, 'Ellen', 'Pompeo', 'public/images/Actors/ellenPompeo.jpg'),
(12, 'Sebastian', 'Stan', 'public/images/Actors/sebastianStan.jpg'),
(13, 'Kelly Marie', 'Tran', 'public/images/Actors/kellyMarieTran.png'),
(14, 'Liam', 'Neeson', 'public/images/Actors/liamNeeson.jpg'),
(15, 'Matthew', 'McConaughey', 'public/images/Actors/matthewMcConaughey.jpg'),
(16, 'Arnold', 'Schwarzenegger', 'public/images/Actors/arnoldS.jpg'),
(18, 'Aaron Taylor', 'Johnson', 'public/images/Actors/aaronJohnson.jpg'),
(19, 'CJ', 'Adams', 'public/images/Actors/cjAdams.jpg'),
(20, 'Miyu', 'Irino', 'public/images/Actors/miyuIrino.jpg'),
(21, 'Will', 'Smith', 'public/images/Actors/willSmith.jpg'),
(22, 'Tom', 'Holland', 'public/images/Actors/tomHolland.jpg'),
(23, 'Milla', 'Jovovich', 'public/images/Actors/millaJovovich.jpg'),
(24, 'Margot', 'Robbie', 'public/images/Actors/margotRobbie.jpg'),
(25, 'Chris', 'Tucker', 'public/images/Actors/chrisTucker.jpg'),
(26, 'Ken ', 'Leung', 'public/images/Actors/kenLeung.jpg'),
(27, 'Heath', 'Ledger', 'public/images/Actors/heathLedger.jpg'),
(28, 'Aaron', 'Eckhart', 'public/images/Actors/aaronEckhart.jpeg'),
(30, 'Al', 'Pacino', 'public/images/Actors/alPacino.jpg'),
(31, 'James', 'Caan', 'public/images/Actors/jamesCaan.jpg'),
(32, 'Ian', 'McKellen', 'public/images/Actors/ianMcKellen.jpg'),
(33, 'Orlando', 'Bloom', 'public/images/Actors/orlandoBloom.jpg'),
(34, 'Robin', 'Wright', 'public/images/Actors/robinWright.jpg'),
(35, 'Gary', 'Sinise', 'public/images/Actors/garySinise.jpg'),
(36, 'Laurence', 'Fishburne', 'public/images/Actors/laurenceFishburne.jpg'),
(37, 'Carrie-Anne', 'Moss', 'public/images/Actors/carrieAnne.jpg'),
(38, 'Ben', 'Stiller', 'public/images/Actors/benStiller.jpg'),
(39, 'Blythe', 'Danner', 'public/images/Actors/blytheDanner.jpg'),
(40, 'Zoe', 'Saldana', 'public/images/Actors/zoeSaldana.jpg'),
(41, 'Sigourney', 'Weaver', 'public/images/Actors/sigourneyWeaver.jpg'),
(42, 'John', 'Hurt', 'public/images/Actors/johnHurt.jpg'),
(43, 'Izaac', 'Wang', 'public/images/Actors/izaacWang.jpg'),
(44, 'Gemma', 'Chan', 'public/images/Actors/gemmaChan.jpg'),
(45, 'Ralph', 'Fiennes', 'public/images/Actors/ralphFiennes.jpg'),
(46, 'Ben', 'Kingsley', 'public/images/Actors/benKingsley.jpg'),
(47, 'David', 'Morse', 'public/images/Actors/davidMorse.jpg'),
(48, 'Michael Clark', 'Duncan', 'public/images/Actors/michaelClarkDuncan.jpg'),
(49, 'Anne', 'Hathaway', 'public/images/Actors/anneHathaway.jpg'),
(50, 'Jessica', 'Chastain', 'public/images/Actors/jessicaChastain.jpg'),
(51, 'Linda', 'Hamilton', 'public/images/Actors/lindaHamilton.jpg'),
(52, 'Edward', 'Furlong', 'public/images/Actors/edwardFurlong.jpg'),
(53, 'Elizabeth', 'Olsen', 'public/images/Actors/elizabethOlsen.jpg'),
(54, 'Bryan', 'Cranston', 'public/images/Actors/bryanCranston.jpg'),
(55, 'Saori', 'Ayami', 'public/images/Actors/saoriAyami.jpg'),
(56, 'Aoi', 'Yuki', 'public/images/Actors/aoiYuki.jpg'),
(57, 'Jared', 'Leto', 'public/images/Actors/jaredLeto.jpg'),
(58, 'Daisy', 'Ridley', 'public/images/Actors/daisyRidley.jpg'),
(59, 'Demian', 'Bichir', 'public/images/Actors/demianBichir.jpg'),
(60, 'Tony', 'Jaa', 'public/images/Actors/tonyJaa.jpg'),
(61, 'Ron', 'Perlman', 'public/images/Actors/ronPerlman.jpg'),
(62, 'Rosie', 'Perez', 'public/images/Actors/rosiePerez.jpg'),
(63, 'Mary Elizabeth', 'Winstead', 'public/images/Actors/marieWinstead.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `directorID` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `directorImage` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`directorID`, `firstname`, `lastname`, `directorImage`) VALUES
(1, 'Michael', 'Bay', 'public/images/Directors/michaelBay.jpg'),
(5, 'Brett', 'Ratner', 'public/images/Directors/brettRatner.jpg'),
(6, 'Christopher', 'Nolan', 'public/images/Directors/christopherNolan.jpg'),
(7, 'Francis Ford', 'Coppola', 'public/images/Directors/francisFordCoppola.jpg'),
(8, 'Peter ', 'Jackson', 'public/images/Directors/peterJackson.jpg'),
(9, 'Robert', 'Zemeckis', 'public/images/Directors/robertZemeckis.jpg'),
(10, 'Lana', 'Wachowski', 'public/images/Directors/lanaWachowski.jpg'),
(11, 'Jay', 'Roach', 'public/images/Directors/jayRoach.jpg'),
(12, 'James', 'Cameron', 'public/images/Directors/jamesCameron.jpg'),
(13, 'Ridley', 'Scott', 'public/images/Directors/ridleyScott.jpg'),
(14, 'Argyris', 'Papadimitropoulos', 'public/images/Directors/Papadimitropoulos.jpg'),
(15, 'Don', 'Hall', 'public/images/Directors/donHall.jpg'),
(16, 'Steven', 'Spielberg', 'public/images/Directors/stevenSpielberg.jpg'),
(17, 'Frank', 'Darabont', 'public/images/Directors/frankDaborant.jpg'),
(19, 'Gareth', 'Edwards', 'public/images/Directors/garethEdwards.jpg'),
(20, 'Naoko', 'Yamada', 'public/images/Directors/naokoYamada.jpg'),
(21, 'David', 'Ayer', 'public/images/Directors/davidAyer.jpg'),
(22, 'Doug', 'Liman', 'public/images/Directors/dougLiman.jpg'),
(23, 'Paul', 'Anderson', 'public/images/Directors/paulAnderson.jpg'),
(24, 'Cathy', 'Yan', 'public/images/Directors/cathyYan.jpg'),
(25, 'Ross', 'LaManna', 'public/images/Directors/rossLamanna.png'),
(26, 'Jonathan', 'Nolan', 'public/images/Directors/jonathanNolan.png'),
(27, 'Mario', 'Puzo', 'public/images/Directors/marioPuzo.jpg'),
(28, 'Fran', 'Walsh', 'public/images/Directors/franWalsh.jpg'),
(29, 'Winston', 'Groom', 'public/images/Directors/winstonGroom.jpg'),
(30, 'Lily', 'Wachowski', 'public/images/Directors/lilyWachowski.jpg'),
(31, 'Greg', 'Gilena', 'public/images/Directors/gregGilenna.jpg'),
(32, 'Dan', 'OBannon', 'public/images/Directors/danOBannon.jpg'),
(33, 'Carlos Lopez', 'Estrada', 'public/images/Directors/carlosLopezEstrada.jpg'),
(34, 'Thomas ', 'Keneally', 'public/images/Directors/thomasKeneally.jpg'),
(35, 'Stephen', 'King', 'public/images/Directors/stephenKing.jpg'),
(36, 'William', 'Wisher', 'public/images/Directors/williamWisher.jpg'),
(37, 'Ishiro', 'Honda', 'public/images/Directors/ishiroHonda.jpg'),
(38, 'Yoshitoki', 'Oima', 'public/images/Directors/yoshitokiOima.jpg'),
(39, 'John', 'Ostrander', 'public/images/Directors/johnOstrander.jpg'),
(40, 'Patrick', 'Ness', 'public/images/Directors/patrickNess.jpg'),
(41, 'Kaname', 'Fujioka', 'public/images/Directors/kanameFujioka.png'),
(42, 'Christina', 'Hodson', 'public/images/Directors/christinaHodson.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genreID` int(10) NOT NULL,
  `genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genreID`, `genre`) VALUES
(3, 'Action'),
(4, 'Adventure'),
(5, 'Romance'),
(7, 'Drama'),
(8, 'Comedy'),
(9, 'Crime'),
(10, 'Mystery'),
(11, 'Fantasy'),
(12, 'Horror'),
(13, 'Thriller'),
(14, 'Animation'),
(15, 'Biography'),
(16, 'Sci-Fi');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movieID` int(10) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `budget` decimal(15,2) DEFAULT NULL,
  `revenue` decimal(15,2) DEFAULT NULL,
  `duration` time DEFAULT NULL,
  `rating` decimal(2,1) DEFAULT NULL,
  `genreID` int(11) DEFAULT NULL,
  `genreID2` int(11) DEFAULT NULL,
  `directorID` int(11) DEFAULT NULL,
  `directorID2` int(11) DEFAULT NULL,
  `actorID` int(11) DEFAULT NULL,
  `actorID2` int(11) DEFAULT NULL,
  `actorID3` int(11) DEFAULT NULL,
  `releasedID` int(11) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `hyperlink` varchar(255) DEFAULT NULL,
  `movieImage` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movieID`, `title`, `budget`, `revenue`, `duration`, `rating`, `genreID`, `genreID2`, `directorID`, `directorID2`, `actorID`, `actorID2`, `actorID3`, `releasedID`, `description`, `hyperlink`, `movieImage`) VALUES
(10, 'Rush hour', '33000000.00', '244721064.00', '01:38:00', '7.0', 3, 8, 5, 25, 1, 25, 26, 5, 'Cultures clash and tempers flares as the two cops named Detective Inspector Lee a Hong Kong Detective and Detective James Carter FBI, a big-mouthed work-alone Los Angeles cop who are from different worlds discovers one thing in common: they can\'t stand each other. With time running out, they must join forces to catch the criminals and save the eleven-year-old Chinese girl of the Chinese consul named Soo Yung.', 'https://www.imdb.com/title/tt0120812/?ref_=fn_al_tt_1', 'public/images/Movie posters/rushHour.jpg'),
(11, 'The Dark Knight', '185000000.00', '1005973645.00', '02:32:00', '9.0', 3, 9, 6, 25, 3, 27, 28, 7, 'Set within a year after the events of Batman Begins (2005), Batman, Lieutenant James Gordon, and new District Attorney Harvey Dent successfully begin to round up the criminals that plague Gotham City, until a mysterious and sadistic criminal mastermind known only as \"The Joker\" appears in Gotham, creating a new wave of chaos. Batman\'s struggle against The Joker becomes deeply personal, forcing him to \"confront everything he believes\" and improve his technology to stop him.', 'https://www.imdb.com/title/tt0468569/?ref_=fn_al_tt_1', 'public/images/Movie posters/darkKnight.jpg'),
(12, 'The Godfather', '6000000.00', '246120986.00', '02:55:00', '9.2', 9, 7, 7, 27, 4, 30, 31, 8, 'The Godfather \"Don\" Vito Corleone is the head of the Corleone mafia family in New York. He is at the event of his daughter\'s wedding. Michael, Vito\'s youngest son and a decorated WW II Marine is also present at the wedding. Michael seems to be uninterested in being a part of the family business. Vito is a powerful man, and is kind to all those who give him respect but is ruthless against those who do not. But when a powerful and treacherous rival wants to sell drugs and needs the Don\'s influence', 'https://www.imdb.com/title/tt0068646/?ref_=fn_al_tt_1', 'public/images/Movie posters/godfather.jpg'),
(13, 'The Lord of the Rings: The Return of the King', '94000000.00', '1142456987.00', '03:21:00', '8.9', 3, 4, 8, 28, 5, 32, 33, 9, 'The final confrontation between the forces of good and evil fighting for control of the future of Middle-earth. Frodo and Sam reach Mordor in their quest to destroy the One Ring, while Aragorn leads the forces of good against Sauron\'s evil army at the stone city of Minas Tirith.', 'https://www.imdb.com/title/tt0167260/?ref_=fn_al_tt_1', 'public/images/Movie posters/lotr.jpg'),
(14, 'Forest Gump', '55000000.00', '678226113.00', '02:22:00', '8.8', 7, 5, 9, 29, 6, 34, 35, 10, 'Forrest Gump is a simple man with a low I.Q. but good intentions. He is running through childhood with his best and only friend Jenny. His \'mama\' teaches him the ways of life and leaves him to choose his destiny. Forrest joins the army for service in Vietnam, finding new friends called Dan and Bubba, he wins medals, creates a famous shrimp fishing fleet, inspires people to jog, starts a ping-pong craze, creates the smiley, writes bumper stickers and songs, donates to people and meets the president several times. However, this is all irrelevant to Forrest who can only think of his childhood sweetheart Jenny Curran, who has messed up her life. Although in the end all he wants to prove is that anyone can love anyone.', 'https://www.imdb.com/title/tt0109830/?ref_=fn_al_tt_1', 'public/images/Movie posters/forestGump.jpg'),
(15, 'The Matrix', '63000000.00', '466364682.00', '02:16:00', '8.7', 3, 16, 10, 30, 7, 36, 37, 11, 'Thomas A. Anderson is a man living two lives. By day he is an average computer programmer and by night a hacker known as Neo. Neo has always questioned his reality, but the truth is far beyond his imagination. Neo finds himself targeted by the police when he is contacted by Morpheus, a legendary computer hacker branded a terrorist by the government. As a rebel against the machines, Neo must confront the agents: super-powerful computer programs devoted to stopping Neo and the entire human rebellion.', 'https://www.imdb.com/title/tt0133093/?ref_=fn_al_tt_1', 'public/images/Movie posters/matrix.jpg'),
(16, 'Meet the Fockers', '80000000.00', '522657936.00', '01:55:00', '6.3', 8, 5, 11, 31, 8, 38, 39, 12, 'Having given permission to male nurse Greg Focker to marry his daughter, ex-CIA man Jack Byrnes and his wife travel to Miami to Greg\'s parents, who this time around are Mr. and Mrs. Focker, who are as different from them as can be. As asked in the first movie, what sort of people name their son Gaylord M. Focker?', 'https://www.imdb.com/title/tt0290002/?ref_=nv_sr_srsg_0', 'public/images/Movie posters/meetTheFockers.jpg'),
(17, 'Avatar', '237000000.00', '2833736063.00', '02:42:00', '7.8', 11, 3, 12, 31, 9, 40, 41, 13, 'When his brother is killed in a robbery, paraplegic Marine Jake Sully decides to take his place in a mission on the distant world of Pandora. There he learns of greedy corporate figurehead Parker Selfridge\'s intentions of driving off the native humanoid \"Na\'vi\" in order to mine for the precious material scattered throughout their rich woodland. In exchange for the spinal surgery that will fix his legs, Jake gathers knowledge, of the Indigenous Race and their Culture, for the cooperating military unit spearheaded by gung-ho Colonel Quaritch, while simultaneously attempting to infiltrate the Na\'vi people with the use of an \"avatar\" identity. While Jake begins to bond with the native tribe and quickly falls in love with the beautiful alien Neytiri, the restless Colonel moves forward with his ruthless extermination tactics, forcing the soldier to take a stand - and fight back in an epic battle for the fate of Pandora.', 'https://www.imdb.com/title/tt0499549/?ref_=fn_al_tt_1', 'public/images/Movie posters/avatar.jpg'),
(18, 'Alien', '11000000.00', '106285522.00', '01:57:00', '8.4', 12, 16, 13, 32, 10, 41, 42, 14, 'In the distant future, the crew of the commercial spaceship Nostromo are on their way home when they pick up a distress call from a distant moon. The crew are under obligation to investigate and the spaceship descends on the moon afterwards. After a rough landing, three crew members leave the spaceship to explore the area on the moon. At the same time as they discover a hive colony of some unknown creature, the ship\'s computer deciphers the message to be a warning, not a distress call. When one of the eggs is disturbed, the crew realizes that they are not alone on the spaceship and they must deal with the consequences.', 'https://www.imdb.com/title/tt0078748/?ref_=fn_al_tt_1', 'public/images/Movie posters/alien.jpg'),
(19, 'Raya and the Last Dragon', '8502498.00', '68408628.00', '01:47:00', '7.5', 14, 3, 15, 33, 13, 43, 44, 15, 'Long ago, in the fantasy world of Kumandra, humans and dragons lived together in harmony. However, when sinister monsters known as the Druun threatened the land, the dragons sacrificed themselves to save humanity. Now, 500 years later, those same monsters have returned, and it\'s up to a lone warrior to track down the last dragon and stop the Druun for good.', 'https://www.imdb.com/title/tt5109280/?ref_=fn_al_tt_1', 'public/images/Movie posters/raya.jpg'),
(20, 'Schindler\'s List', '22000000.00', '322161245.00', '03:15:00', '8.9', 15, 7, 16, 34, 14, 45, 46, 16, 'Oskar Schindler is a vain and greedy German businessman who becomes an unlikely humanitarian amid the barbaric German Nazi reign when he feels compelled to turn his factory into a refuge for Jews. Based on the true story of Oskar Schindler who managed to save about 1100 Jews from being gassed at the Auschwitz concentration camp, it is a testament to the good in all of us.', 'https://www.imdb.com/title/tt0108052/?ref_=fn_al_tt_1', 'public/images/Movie posters/schindlersList.jpg'),
(21, 'The Green Mile', '60000000.00', '286801374.00', '03:09:00', '8.6', 9, 7, 17, 35, 6, 47, 48, 11, 'Death Row guards at a penitentiary, in the 1930\'s, have a moral dilemma with their job when they discover one of their prisoners, a convicted murderer, has a special gift.', 'https://www.imdb.com/title/tt0120689/?ref_=fn_al_tt_1', 'public/images/Movie posters/greenMile.jpg'),
(22, 'Interstellar', '165000000.00', '701729127.00', '02:49:00', '8.6', 16, 4, 6, 26, 15, 49, 50, 17, 'Earth\'s future has been riddled by disasters, famines, and droughts. There is only one way to ensure mankind\'s survival: Interstellar travel. A newly discovered wormhole in the far reaches of our solar system allows a team of astronauts to go where no man has gone before, a planet that may have the right environment to sustain human life.', 'https://www.imdb.com/title/tt0816692/?ref_=fn_al_tt_1', 'public/images/Movie posters/interstellar.jpg'),
(23, 'Terminator 2:Judgement Day', '102000000.00', '520881154.00', '02:17:00', '8.5', 3, 16, 12, 36, 16, 51, 52, 18, 'Over 10 years have passed since the first machine called The Terminator tried to kill Sarah Connor and her unborn son, John. The man who will become the future leader of the human resistance against the Machines is now a healthy young boy. However, another Terminator, called the T-1000, is sent back through time by the supercomputer Skynet. This new Terminator is more advanced and more powerful than its predecessor and its mission is to kill John Connor when he\'s still a child. However, in the Internet and John do not have to face the threat of the T-1000 alone. Another Terminator (identical to the same model that tried and failed to kill Sarah Connor in 1984) is also sent back through time to protect them. Now, the battle for tomorrow has begun.', 'https://www.imdb.com/title/tt0103064/?ref_=nv_sr_srsg_0', 'public/images/Movie posters/terminator2.jpg'),
(35, 'Godzilla', '160000000.00', '524976069.00', '02:03:00', '6.4', 3, 4, 19, 37, 18, 53, 54, 17, 'In 1999, the Janjira nuclear plant was mysteriously destroyed with most hands lost including supervisor Joe Brody\'s colleague and wife, Sandra. Years later, Joe\'s son, Ford, a US Navy ordnance disposal officer, must go to Japan to help his estranged father who obsessively searches for the truth of the incident. In doing so, father and son discover the disaster\'s secret cause on the wreck\'s very grounds. This enables them to witness the reawakening of a terrible threat to all of Humanity, which is made all the worse with a second secret revival elsewhere. Against this cataclysm, the only hope for the world may be Godzilla, but the challenge for the King of the Monsters will be great even as Humanity struggles to understand the destructive ally they have.', 'https://www.imdb.com/title/tt0831387/?ref_=fn_al_tt_1', 'public/images/Movie posters/godzilla.jpg'),
(36, 'A Silent Voice', '121732.00', '30490447.00', '02:10:00', '8.1', 14, 7, 20, 38, 20, 55, 56, 20, 'The story revolves around Shôko Nishimiya, a grade school student who has impaired hearing. She transfers into a new school, where she is bullied by her classmates, especially Shôya Ishida. It gets to the point where she transfers to another school and as a result, Shôya is ostracized and bullied himself, with no friends to speak to and no plans for the future. Years later, he epicly sets himself on a path to redemption.', 'https://www.imdb.com/title/tt5323662/?pf_rd_m=A2FGELUUNOQJNL&pf_rd_p=e31d89dd-322d-4646-8962-327b42fe94b1&pf_rd_r=J1DPP23V1PPMVD5ZYXGP&pf_rd_s=center-1&pf_rd_t=15506&pf_rd_i=top&ref_=chttp_tt_249', 'public/images/Movie posters/silentVoice.jpg'),
(37, 'Suicide Squad', '175000000.00', '746846894.00', '02:03:00', '6.0', 3, 4, 21, 39, 21, 24, 57, 20, 'It feels good to be bad...Assemble a team of the world\'s most dangerous, incarcerated Super Villains, provide them with the most powerful arsenal at the government\'s disposal, and send them off on a mission to defeat an enigmatic, insuperable entity. U.S. intelligence officer Amanda Waller has determined only a secretly convened group of disparate, despicable individuals with next to nothing to lose will do. However, once they realize they weren\'t picked to succeed but chosen for their patent culpability when they inevitably fail, will the Suicide Squad resolve to die trying, or decide it\'s every man for himself?', 'https://www.imdb.com/title/tt1386697/?pf_rd_m=A2FGELUUNOQJNL&pf_rd_p=ea4e08e1-c8a3-47b5-ac3a-75026647c16e&pf_rd_r=Q9VDP2THSD97HQNZ7FZT&pf_rd_s=center-1&pf_rd_t=15506&pf_rd_i=moviemeter&ref_=chtmvm_tt_35', 'public/images/Movie posters/suicideSquad.jpg'),
(38, 'Chaos Walking', '125000000.00', '17497848.00', '01:49:00', '5.8', 4, 16, 22, 40, 22, 58, 59, 1, 'In the not-too-distant future, Todd Hewitt (Tom Holland) discovers Viola (Daisy Ridley), a mysterious girl who crash lands on his planet, where all the women have disappeared and the men are afflicted by \"the Noise\" - a force that puts all their thoughts on display. In this dangerous landscape, Viola\'s life is threatened - and as Todd vows to protect her, he will have to discover his own inner power and unlock the planet\'s dark secrets. From the director of The Bourne Identity and Edge of Tomorrow and based on the best-selling novel The Knife of Never Letting Go, Daisy Ridley and Tom Holland star with Mads Mikkelsen, Demián Bichir, Cynthia Erivo, Nick Jonas, Kurt Sutter, and David Oyelowo in Chaos Walking.', 'https://www.imdb.com/title/tt2076822/?pf_rd_m=A2FGELUUNOQJNL&pf_rd_p=ea4e08e1-c8a3-47b5-ac3a-75026647c16e&pf_rd_r=Q9VDP2THSD97HQNZ7FZT&pf_rd_s=center-1&pf_rd_t=15506&pf_rd_i=moviemeter&ref_=chtmvm_tt_44', 'public/images/Movie posters/chaosWalking.jpg'),
(39, 'Monster Hunter', '60000000.00', '33328092.00', '01:43:00', '5.3', 3, 4, 23, 41, 23, 60, 61, 15, 'While on a peril-laden mission to track a missing team of soldiers, the hard-as-nails U.S. Army Ranger, Captain Natalie Artemis, and her elite brothers-in-arms find themselves transported to an alternate universe. There, trapped in a barren desert-world rife with formidable adversaries and subterranean sand-dwelling beasts, for the first time, Captain Artemis and her squad are shocked to discover that their otherwise destructive military weapons are now entirely inadequate to take down the enemy. But, unexpectedly, in their desperate battle for survival, the team stumbles upon a mysterious local huntsman, whose superior combat skills allow him to stay one step ahead of the mighty creatures. Is there an escape from the prison realm? Above all, what does it take to become a fearless monster hunter?', 'https://www.imdb.com/title/tt6475714/?pf_rd_m=A2FGELUUNOQJNL&pf_rd_p=ea4e08e1-c8a3-47b5-ac3a-75026647c16e&pf_rd_r=Q9VDP2THSD97HQNZ7FZT&pf_rd_s=center-1&pf_rd_t=15506&pf_rd_i=moviemeter&ref_=chtmvm_tt_57', 'public/images/Movie posters/monsterHunter.jpg'),
(40, 'Birds of Prey', '84500000.00', '201858461.00', '01:49:00', '6.1', 3, 4, 24, 42, 24, 62, 63, 15, 'A twisted tale told by Harley Quinn herself, when Gotham\'s most nefariously narcissistic villain, Roman Sionis, and his zealous right-hand, Zsasz, put a target on a young girl named Cass, the city is turned upside down looking for her. Harley, Huntress, Black Canary and Renee Montoya\'s paths collide, and the unlikely foursome have no choice but to team up to take Roman down.', 'https://www.imdb.com/title/tt7713068/?pf_rd_m=A2FGELUUNOQJNL&pf_rd_p=ea4e08e1-c8a3-47b5-ac3a-75026647c16e&pf_rd_r=Q9VDP2THSD97HQNZ7FZT&pf_rd_s=center-1&pf_rd_t=15506&pf_rd_i=moviemeter&ref_=chtmvm_tt_77', 'public/images/Movie posters/bop.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `released`
--

CREATE TABLE `released` (
  `releasedID` int(10) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `released`
--

INSERT INTO `released` (`releasedID`, `year`) VALUES
(1, 2021),
(2, 2018),
(5, 1998),
(6, 2000),
(7, 2008),
(8, 1972),
(9, 2003),
(10, 1994),
(11, 1999),
(12, 2004),
(13, 2009),
(14, 1979),
(15, 2020),
(16, 1993),
(17, 2014),
(18, 1991),
(20, 2016);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`actorID`);

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`directorID`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genreID`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movieID`),
  ADD KEY `genreID` (`genreID`),
  ADD KEY `directorID` (`directorID`),
  ADD KEY `actorID` (`actorID`),
  ADD KEY `releasedID` (`releasedID`),
  ADD KEY `movie_ibfk_5` (`genreID2`),
  ADD KEY `directorID2` (`directorID2`),
  ADD KEY `actorID2` (`actorID2`),
  ADD KEY `actorID3` (`actorID3`);

--
-- Indexes for table `released`
--
ALTER TABLE `released`
  ADD PRIMARY KEY (`releasedID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actor`
--
ALTER TABLE `actor`
  MODIFY `actorID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `director`
--
ALTER TABLE `director`
  MODIFY `directorID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genreID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movieID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `released`
--
ALTER TABLE `released`
  MODIFY `releasedID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `actorID2` FOREIGN KEY (`actorID2`) REFERENCES `actor` (`actorID`),
  ADD CONSTRAINT `actorID3` FOREIGN KEY (`actorID3`) REFERENCES `actor` (`actorID`),
  ADD CONSTRAINT `directorID2` FOREIGN KEY (`directorID2`) REFERENCES `director` (`directorID`),
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`genreID`) REFERENCES `genre` (`genreID`),
  ADD CONSTRAINT `movie_ibfk_2` FOREIGN KEY (`directorID`) REFERENCES `director` (`directorID`),
  ADD CONSTRAINT `movie_ibfk_3` FOREIGN KEY (`actorID`) REFERENCES `actor` (`actorID`),
  ADD CONSTRAINT `movie_ibfk_4` FOREIGN KEY (`releasedID`) REFERENCES `released` (`releasedID`),
  ADD CONSTRAINT `movie_ibfk_5` FOREIGN KEY (`genreID2`) REFERENCES `genre` (`genreID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
