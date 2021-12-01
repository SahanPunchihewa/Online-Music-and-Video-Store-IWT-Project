-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 06:15 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zik_music`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `music_id` int(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `video_id`, `music_id`) VALUES
(3, 0, 2),
(4, 0, 20),
(5, 20, 0),
(6, 0, 13),
(7, 13, 0),
(8, 0, 9),
(9, 9, 0),
(10, 0, 0),
(11, 0, 0),
(12, 0, 0),
(13, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `subject` varchar(70) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(1, 'Akash Alvin', 'akashal@info.com', '0731234132', 'service', 'good service'),
(2, 'dasunika', 'dasunikawijesooriya@gmail.com', '07684556789', 'feedback', 'hi ZikMUSIC'),
(3, 'mohomad ganster', 'ganster@yahoo.com', '0110965678', 'about service', 'Good product, good prices, good service. Can\'t ask for more.'),
(4, 'zenash akshi', 'senashhh@gamil.com', '0758934529', 'great service', 'Great service, fast delivery, and the products they have are of the highest quality. \r\n\r\n'),
(5, 'kanish zomx', 'kanish@gamil.com', '09998765433', 'Great selection of truly high quality…', 'Great selection of truly high quality music and sound equipment. '),
(6, 'veron ashik', 'ashik123@gmail.com', '099980000', 'product', 'Always have had great quality and service from Music store professional, a longer than normal wait for an out of stock item, but thats no problem, especially given the current virus situation, \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Type` enum('m','v') NOT NULL,
  `Discription` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `mid` int(11) NOT NULL,
  `title` varchar(70) NOT NULL,
  `discription` varchar(1000) NOT NULL,
  `price` varchar(10) NOT NULL,
  `discount` varchar(10) NOT NULL,
  `mname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`mid`, `title`, `discription`, `price`, `discount`, `mname`) VALUES
(1, 'We were young', 'Song\r\nAlone, Pt. II\r\nArtist\r\nAlan Walker, Ava Max\r\nLicensed to YouTube by\r\nSME (on behalf of MER Recordings); CMRRA, LatinAutor - Warner Chappell, LatinAutor - SonyATV, LatinAutor, ASCAP, BMI - Broadcast Music Inc., LatinAutorPerf, Kobalt Music Publishing, Sony ATV Publishing, Polaris Hub AB, UNIAO BRASILEIRA DE EDITORAS DE MUSICA - UBEM, Warner Chappell, and 14 music rights societies\r\n', '5$', ' 2$', 'Screenshot (9).png'),
(2, 'Posters on the wall', 'Song\r\nAlone, Pt. II\r\nArtist\r\nAlan Walker, Ava Max\r\nLicensed to YouTube by\r\nSME (on behalf of MER Recordings); CMRRA, LatinAutor - Warner Chappell, LatinAutor - SonyATV, LatinAutor, ASCAP, BMI - Broadcast Music Inc., LatinAutorPerf, Kobalt Music Publishing, Sony ATV Publishing, Polaris Hub AB, UNIAO BRASILEIRA DE EDITORAS DE MUSICA - UBEM, Warner Chappell, and 14 music rights societies\r\n', '3$', ' 0$', 'AUD-20180307-WA0004.mp3'),
(3, 'Praying we\'re the ones', 'Song\r\nAlone, Pt. II\r\nArtist\r\nAlan Walker, Ava Max\r\nLicensed to YouTube by\r\nSME (on behalf of MER Recordings); CMRRA, LatinAutor - Warner Chappell, LatinAutor - SonyATV, LatinAutor, ASCAP, BMI - Broadcast Music Inc., LatinAutorPerf, Kobalt Music Publishing, Sony ATV Publishing, Polaris Hub AB, UNIAO BRASILEIRA DE EDITORAS DE MUSICA - UBEM, Warner Chappell, and 14 music rights societies\r\n', '4$', ' 1$', '_Bhula Dena Aashiqui 2_ Full Video Song ᴴᴰ _ Aditya Roy Kapur, Shraddha Kapoor ( 160kbps ).mp3'),
(4, 'That the teacher wouldn\'t call', 'Song\r\nAlone, Pt. II\r\nArtist\r\nAlan Walker, Ava Max\r\nLicensed to YouTube by\r\nSME (on behalf of MER Recordings); CMRRA, LatinAutor - Warner Chappell, LatinAutor - SonyATV, LatinAutor, ASCAP, BMI - Broadcast Music Inc., LatinAutorPerf, Kobalt Music Publishing, Sony ATV Publishing, Polaris Hub AB, UNIAO BRASILEIRA DE EDITORAS DE MUSICA - UBEM, Warner Chappell, and 14 music rights societies\r\n', '5$', ' 1$', '_Tum Hi Ho Aashiqui 2_ Full Video Song HD _ Aditya Roy Kapur, Shraddha Kapoor _ Music - Mithoon ( 16'),
(5, 'We would stare at each other', 'Song\r\nAlone, Pt. II\r\nArtist\r\nAlan Walker, Ava Max\r\nLicensed to YouTube by\r\nSME (on behalf of MER Recordings); CMRRA, LatinAutor - Warner Chappell, LatinAutor - SonyATV, LatinAutor, ASCAP, BMI - Broadcast Music Inc., LatinAutorPerf, Kobalt Music Publishing, Sony ATV Publishing, Polaris Hub AB, UNIAO BRASILEIRA DE EDITORAS DE MUSICA - UBEM, Warner Chappell, and 14 music rights societies\r\n', '6$', ' 2$', 'Justin Bieber - Baby ft. Ludacris ( 128kbps ).mp3'),
(7, 'I was on the outside', 'Song\r\nAlone, Pt. II\r\nArtist\r\nAlan Walker, Ava Max\r\nLicensed to YouTube by\r\nSME (on behalf of MER Recordings); CMRRA, LatinAutor - Warner Chappell, LatinAutor - SonyATV, LatinAutor, ASCAP, BMI - Broadcast Music Inc., LatinAutorPerf, Kobalt Music Publishing, Sony ATV Publishing, Polaris Hub AB, UNIAO BRASILEIRA DE EDITORAS DE MUSICA - UBEM, Warner Chappell, and 14 music rights societies\r\n', '5$', ' 1$', 'AUD-20180302-WA0183.opus'),
(8, 'We all need that someone', 'Song\r\nAlone, Pt. II\r\nArtist\r\nAlan Walker, Ava Max\r\nLicensed to YouTube by\r\nSME (on behalf of MER Recordings); CMRRA, LatinAutor - Warner Chappell, LatinAutor - SonyATV, LatinAutor, ASCAP, BMI - Broadcast Music Inc., LatinAutorPerf, Kobalt Music Publishing, Sony ATV Publishing, Polaris Hub AB, UNIAO BRASILEIRA DE EDITORAS DE MUSICA - UBEM, Warner Chappell, and 14 music rights societies\r\n', '4$', ' 0$', '‪_City Hunter MV_ I Love You, I Want You, I Need You - Apple Mango (City Hunter OST Part.7) ( 128kbp'),
(9, 'We all need that someone', 'Song\r\nAlone, Pt. II\r\nArtist\r\nAlan Walker, Ava Max\r\nLicensed to YouTube by\r\nSME (on behalf of MER Recordings); CMRRA, LatinAutor - Warner Chappell, LatinAutor - SonyATV, LatinAutor, ASCAP, BMI - Broadcast Music Inc., LatinAutorPerf, Kobalt Music Publishing, Sony ATV Publishing, Polaris Hub AB, UNIAO BRASILEIRA DE EDITORAS DE MUSICA - UBEM, Warner Chappell, and 14 music rights societies\r\n', '4$', ' 0.5$', '_Bhula Dena Aashiqui 2_ Full Video Song ᴴᴰ _ Aditya Roy Kapur, Shraddha Kapoor ( 160kbps ).mp3'),
(10, 'A friend through the highs and the lows', 'Song\r\nAlone, Pt. II\r\nArtist\r\nAlan Walker, Ava Max\r\nLicensed to YouTube by\r\nSME (on behalf of MER Recordings); CMRRA, LatinAutor - Warner Chappell, LatinAutor - SonyATV, LatinAutor, ASCAP, BMI - Broadcast Music Inc., LatinAutorPerf, Kobalt Music Publishing, Sony ATV Publishing, Polaris Hub AB, UNIAO BRASILEIRA DE EDITORAS DE MUSICA - UBEM, Warner Chappell, and 14 music rights societies\r\n', '6$', ' 0.6$', '_Bhula Dena Aashiqui 2_ Full Video Song ᴴᴰ _ Aditya Roy Kapur, Shraddha Kapoor ( 160kbps ).mp3'),
(11, 'A friend through the highs and the lows', 'Song\r\nAlone, Pt. II\r\nArtist\r\nAlan Walker, Ava Max\r\nLicensed to YouTube by\r\nSME (on behalf of MER Recordings); CMRRA, LatinAutor - Warner Chappell, LatinAutor - SonyATV, LatinAutor, ASCAP, BMI - Broadcast Music Inc., LatinAutorPerf, Kobalt Music Publishing, Sony ATV Publishing, Polaris Hub AB, UNIAO BRASILEIRA DE EDITORAS DE MUSICA - UBEM, Warner Chappell, and 14 music rights societies\r\n', '4$', ' 0$', '_Tum Hi Ho Aashiqui 2_ Full Video Song HD _ Aditya Roy Kapur, Shraddha Kapoor _ Music - Mithoon ( 16'),
(12, 'Your forgivin\' eyes', 'Song\r\nAlone, Pt. II\r\nArtist\r\nAlan Walker, Ava Max\r\nLicensed to YouTube by\r\nSME (on behalf of MER Recordings); CMRRA, LatinAutor - Warner Chappell, LatinAutor - SonyATV, LatinAutor, ASCAP, BMI - Broadcast Music Inc., LatinAutorPerf, Kobalt Music Publishing, Sony ATV Publishing, Polaris Hub AB, UNIAO BRASILEIRA DE EDITORAS DE MUSICA - UBEM, Warner Chappell, and 14 music rights societies\r\n', '6.6$', ' 1$', '‪_City Hunter MV_ I Love You, I Want You, I Need You - Apple Mango (City Hunter OST Part.7) ( 128kbp'),
(13, 'Right when I need it', 'Song\r\nAlone, Pt. II\r\nArtist\r\nAlan Walker, Ava Max\r\nLicensed to YouTube by\r\nSME (on behalf of MER Recordings); CMRRA, LatinAutor - Warner Chappell, LatinAutor - SonyATV, LatinAutor, ASCAP, BMI - Broadcast Music Inc., LatinAutorPerf, Kobalt Music Publishing, Sony ATV Publishing, Polaris Hub AB, UNIAO BRASILEIRA DE EDITORAS DE MUSICA - UBEM, Warner Chappell, and 14 music rights societies\r\n', '', ' ', '‪_City Hunter MV_ I Love You, I Want You, I Need You - Apple Mango (City Hunter OST Part.7) ( 128kbp');

-- --------------------------------------------------------

--
-- Table structure for table `paymeny`
--

CREATE TABLE `paymeny` (
  `PID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Cno` int(11) NOT NULL,
  `Cmonth` int(11) NOT NULL,
  `Cyear` int(11) NOT NULL,
  `cvv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `fid` int(11) NOT NULL,
  `pic` int(40) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pno` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`fid`, `pic`, `fname`, `lname`, `gender`, `dob`, `email`, `pno`) VALUES
(7, 0, 'ANUSHA', 'OSHAN', 'MALE', '1998-10-28', 'anushaoshan@gmail.com', '0789245671');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `vid` int(11) NOT NULL,
  `title` varchar(70) NOT NULL,
  `discription` varchar(1000) NOT NULL,
  `price` varchar(10) NOT NULL,
  `discount` varchar(10) NOT NULL,
  `vname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`vid`, `title`, `discription`, `price`, `discount`, `vname`) VALUES
(13, 'I Can\'t Be Myself', 'UMG (on behalf of RBMG/Def Jam); Sony ATV Publishing, Polaris Hub AB, CMRRA, Reservoir Media (Publishing), ASCAP, AMRA, LatinAutorPerf, UMPI, Kobalt Music Publishing, and 4 music rights societies\r\n', '6$', ' 0.5$', 'Countdown Timer 10 seconds with Sound Effect 4K Free Download.mp4'),
(18, 'Hold On', 'Artist\r\nTartaruga Records\r\nAlbum\r\nFalling\r\nLicensed to YouTube by\r\nMedia Cube Music (on behalf of Tartaruga Records); Sony ATV Publishing, and 1 music rights societies', '7$', ' 2$', 'Countdown Timer 10 seconds with Sound Effect 4K Free Download.mp4'),
(19, 'HITATHTHIII', 'UMG (on behalf of RBMG/Def Jam); LatinAutor - UMPG, Abramus Digital, LatinAutor - Warner Chappell, CMRRA, ASCAP, AMRA, BMG Rights Management (US), LLC, UMPG Publishing, UMPI, Warner', '5$', ' 1s', 'Countdown Timer 10 seconds with Sound Effect 4K Free Download.mp4'),
(20, 'LUSI FANCE', 'Artist\r\nTartaruga Records\r\nAlbum\r\nFalling\r\nLicensed to YouTube by\r\nMedia Cube Music (on behalf of Tartaruga Records); Sony ATV Publishing, and 1 music rights societies', '6$', ' 1.2$', 'Countdown Timer 10 seconds with Sound Effect 4K Free Download.mp4'),
(21, 'I will be there for you\r\n', 'Artist\r\nTartaruga Records\r\nAlbum\r\nFalling\r\nLicensed to YouTube by\r\nMedia Cube Music (on behalf of Tartaruga Records); Sony ATV Publishing, and 1 music rights societies', '7$', ' 2$', 'Countdown Timer 10 seconds with Sound Effect 4K Free Download.mp4'),
(22, 'Midnight \'til morning', 'Artist\r\nTartaruga Records\r\nAlbum\r\nFalling\r\nLicensed to YouTube by\r\nMedia Cube Music (on behalf of Tartaruga Records); Sony ATV Publishing, and 1 music rights societies\r\n', '5$', ' 0$', 'Countdown Timer 10 seconds with Sound Effect 4K Free Download.mp4'),
(23, 'SOMEONE', 'Artist\r\nTartaruga Records\r\nAlbum\r\nFalling\r\nLicensed to YouTube by\r\nMedia Cube Music (on behalf of Tartaruga Records); Sony ATV Publishing, and 1 music rights societies\r\n', '6.6$', ' 0.6$', 'Countdown Timer 10 seconds with Sound Effect 4K Free Download.mp4'),
(24, 'MIDNIGHT', 'Artist\r\nTartaruga Records\r\nAlbum\r\nFalling\r\nLicensed to YouTube by\r\nMedia Cube Music (on behalf of Tartaruga Records); Sony ATV Publishing, and 1 music rights societies\r\n', '5.9$', ' 0.4$', 'Countdown Timer 10 seconds with Sound Effect 4K Free Download.mp4'),
(25, 'SOMEBODY', 'Artist\r\nTartaruga Records\r\nAlbum\r\nFalling\r\nLicensed to YouTube by\r\nMedia Cube Music (on behalf of Tartaruga Records); Sony ATV Publishing, and 1 music rights societies\r\n', '5.7$', ' 7.8$', 'Countdown Timer 10 seconds with Sound Effect 4K Free Download.mp4'),
(26, 'FEEL', 'Artist\r\nTartaruga Records\r\nAlbum\r\nFalling\r\nLicensed to YouTube by\r\nMedia Cube Music (on behalf of Tartaruga Records); Sony ATV Publishing, and 1 music rights societies\r\n', '8$', '2$ ', 'Countdown Timer 10 seconds with Sound Effect 4K Free Download.mp4'),
(27, 'MORNING', 'Artist\r\nTartaruga Records\r\nAlbum\r\nFalling\r\nLicensed to YouTube by\r\nMedia Cube Music (on behalf of Tartaruga Records); Sony ATV Publishing, and 1 music rights societies\r\n', '6.4$', ' 0.7$', 'Countdown Timer 10 seconds with Sound Effect 4K Free Download.mp4'),
(28, 'TELLME', 'Artist\r\nTartaruga Records\r\nAlbum\r\nFalling\r\nLicensed to YouTube by\r\nMedia Cube Music (on behalf of Tartaruga Records); Sony ATV Publishing, and 1 music rights societies\r\n', '6.5$', ' 0$', 'Countdown Timer 10 seconds with Sound Effect 4K Free Download.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `paymeny`
--
ALTER TABLE `paymeny`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `paymeny`
--
ALTER TABLE `paymeny`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
