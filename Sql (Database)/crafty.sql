-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 30, 2023 at 08:18 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crafty`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` varchar(50) NOT NULL,
  `prod` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `price` int NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `prod`, `price`, `email`) VALUES
('6425e0e18c1f68.07483735', 'Couple handmade frames', 1150, 'ompandya@gmail.com'),
('6425e3075e2434.47557897', 'Golden decor scrapbook', 1500, 'admin'),
('6425e614604652.17296803', 'Photographed explosion bo', 900, 'admin'),
('6425e6c3311164.76881467', 'Multi layered explosion b', 1200, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `name` varchar(25) NOT NULL,
  `catagory` varchar(15) NOT NULL,
  `img` varchar(50) NOT NULL,
  `price` int NOT NULL,
  `dis` varchar(200) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`name`, `catagory`, `img`, `price`, `dis`) VALUES
('Multi layered explosion b', 'Explosion box', '6425e699256568.85164645.png', 1200, 'A multi layered explosion box with customized photographs.. The dimensions are measured and size are precise..\r\n'),
('Birthday gift', 'Explosion box', '642594d2b4bfe9.19973280.png', 890, 'The simple and attractive birthday themed explosion box...\r\nThe perfect gift for the people you love..!!\r\nSize and dimensions are customized accordingly..\r\n'),
('Attractive explosion box', 'Explosion box', '6425e4805e30c7.93852551.png', 850, 'The simple look explosion box to gift your friends/family and colleages..!! The stunning design captures the attraction of customers.. The size and dimensions are customized accordingly..	\r\n'),
('Black rose explosion box', 'Explosion box', '6425e3f9af7329.43029048.png', 1200, 'Black colored roses are customized over the explosion box.. The dimensions are measured and size are precise to make it worth attractive.. The finely quoted black roses increases the attraction of con'),
('Sequence explosion box', 'Explosion box', '6425e51e42e5a4.18851233.png', 750, 'Sequenced explosion box with affective color combinations.. Two layered explosion box with perfect dimensions.. Size can be customized..\r\n'),
('Valentine themed explosio', 'Explosion box', '6425e577702379.33829538.png', 900, 'The amazing gift for the loved one.. Perfect valentine explosion box with customized photographs and dimension... Attractive papers are used to enhance excitement..\r\n'),
('Black explosion box', 'Explosion box', '642590798f2296.44001983.png', 1100, 'The black colored unique and attractive explosion box..\r\nThe dimensions are customized and size are measured accurately..\r\nThe unique designed explosion box to catch the attraction of customers..'),
('Photographed explosion bo', 'Explosion box', '6425e5e5b6b802.87380075.png', 900, 'Amazingly couple photographed explosion box.. The photographs are customized and dimensions are measured accurately..\r\n'),
('Cute couple explosion box', 'Explosion box', '6425e65d7bda73.09132576.png', 850, 'The perfect gift for the couples... 2*2 dimensions box with customized photographs.. The attractive colored explosion box..!!!	\r\n'),
('Couple handmade frames', 'Handmade frames', '64259ae39f8078.22854460.png', 1150, 'Handmade frames for newlly married or engaged couples..\r\nThe size of the frame and photographs are customized accordinglly.!!\r\n'),
('Pink colored frame', 'Handmade frames', '64259b88f1c3a0.66976947.png', 650, 'The simple pink colored handmade frame..\r\nAttractive in looks and easily adjustible..\r\nThe most preffered color of female customers..'),
('Heart shaped frame', 'Handmade frames', '64259ee1a2f5c3.06777521.png', 1250, 'The perfect couple photo frame to shower some love on your better half..\r\nThe size and dimensions are precise and customized..!!\r\nCouple themed handmade frame.. '),
('Vintage frame', 'Handmade frames', '64259f67e7d452.74157469.png', 1100, 'The most demanded vintage handmade frames..\r\nThe size of the photographs and mirror is customized accordinglly..\r\n'),
('Unique frame', 'Handmade frames', '6425a0646c77e8.46739455.png', 1500, 'The circle shaped unique frame..\r\nSize of the photographs and frame is customized accordingly..\r\nAttractive product to catch the view of customers..\r\n'),
('Simple frame', 'Handmade frames', '6425a0e0814543.66450183.png', 450, 'The cute and simple frame to gift your friend/family or collegues..\r\nMost attractive and size of the photographs are customized..\r\n'),
('Super vintage frame', 'Handmade frames', '6425a16860c3c1.81451254.png', 990, 'The most stylish and demanded handmade frame..\r\nVintage frames are so in use and size of the frame and photographs are customized accordinglly..\r\nThe cute gestures are given and framed..\r\nThe attracti'),
('Flowered frame', 'Handmade frames', '6425a5253ffd67.78137973.png', 780, 'The simple frame with flowers decoration..\r\nSize of the photographs and frame are customized accordinglly..\r\n'),
('Round tray frame', 'Handmade frames', '6425a4a2378e96.66649903.png', 750, 'Tray shaped frame with customized photographs..\r\nThe color combinations are precise..\r\nSize is customized and dimensions are preciselly done..  '),
('Rounded frame', 'Handmade frames', '6425a5917b2146.82777334.jpg', 1200, 'The amazingly done rounded frame with attractive colors..\r\nThe size of the photographs and the number of photographs inserted are customized..\r\n '),
('Simple tag book', 'Tag books', '6425a6b15de5e9.49603597.png', 500, 'The simple and attractive tag book..\r\nAn amazing dimensions and size with perfect photographs..\r\n '),
('Attractive tag book', 'Tag books', '6425a7631541b1.66672232.png', 960, 'The most attractive and with bunch of memories collection of the photographs..\r\nTag book with customized size and dimensions'),
('Note tag book', 'Tag books', '6425a8909654f9.58570223.png', 450, 'You can simplly add written notes to the tag book and store it forever..\r\nSize of the pages are customized and precise...\r\n'),
('Vintage tag book', 'Tag books', '6425ab7d31f000.81599174.png', 900, 'Old vintage tag book with customized dimensions..\r\nThe tag book with precise corners and customized stuff..\r\n'),
('Journal tag book', 'Tag books', '6425acdf09a9a5.65420336.png', 900, 'The journal tag books are attractive and size precised..\r\nThe dimensions and corners are measured accurately..'),
('Pompom tag book', 'Tag books', '6425ad42425711.82056081.png', 800, 'The pompom is customized according to the prefference of the customers...\r\nThe size and dimensions are set accordinglly..\r\n'),
('Friendship tag book', 'Tag books', '6425ada1352e19.76223033.png', 1050, 'The best suited tag book for the best friends..\r\nSize of the photographs and dimensions are precise and customized..\r\n'),
('Birthday tag book', 'Tag books', '6425adf04de9d8.41504781.png', 900, 'The birthday gift with so many customized photographs..\r\nSize and dimensions are precise and neat..\r\n  '),
('Valentine tag book', 'Tag books', '6425ae5ce812d1.32651772.png', 1100, 'The valentine surprise for the loved one..\r\nThe customized photographs and stickers..\r\n'),
('DIY themed tag book', 'Tag books', '6425af0460a662.58881413.png', 900, 'The simple and attractive DIY themed tag book..\r\nWith customized size and dimensions..\r\nTag book with accurate corners.. '),
('Golden decor scrapbook', 'Scrapbook', '6425b3b2243dd6.82980279.png', 1500, 'Golden decor scrapbook with customized photographs..\r\nSize of the pages and dimensions are customized accordinglly..\r\nFinely decorated scrap book with attractive art work...\r\n'),
('Unique scrapbook', 'Scrapbook', '6425b4094764d1.68368212.png', 1200, 'The unique patterned scrap book..\r\nThe color combinations with attractive art..\r\n'),
('Mini bagpack scrapbook', 'Scrapbook', '6425b509296454.75702281.png', 1800, 'Unique design of mini bag pack scrap book..\r\nThe amazing scrap book with creative design..\r\nThe size and dimensions are precise and accurate..'),
('Scrap book', 'Scrapbook', '6425b56ee239e9.78702990.png', 1000, 'The amazing and precise scrap book..\r\nSize and dimensions are predefined..\r\n  '),
('Simple Scrap book', 'Scrapbook', '6425b61659bd92.27926483.png', 950, 'The simple and attractive scrap book..\r\nDimensions and size are predefined..\r\nThe customized scrap book..'),
('Birthday scrap book', 'Scrapbook', '6425b6831c89d6.20836594.png', 1200, 'The perfect birthday gift..\r\nScrap book with customized size of photographs and book borders..\r\n'),
('Purple scrap book', 'Scrapbook', '6425b842720a64.10880206.png', 1500, 'The trendy purple colored scrapbook..\r\nThe size of the photographs are customized..\r\nSize of the scrap book is customized..\r\n'),
('Red colored attractive sc', 'Scrapbook', '6425b8bb5905e2.82900250.png', 1150, 'The red colored attractive scrap book..\r\nSize of the scrap book is customized...\r\nThe number of pages and dimensions are predefined..');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `name` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(25) NOT NULL,
  `number` bigint NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(30) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `number`, `email`, `pass`) VALUES
('hetvi', 7043342743, 'hetvi@gmail.com', '1234567'),
('om ', 9157305530, 'ompandya@gmail.com', '1234567');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
