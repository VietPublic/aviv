-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2010 at 06:34 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `aviv`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `modif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `contacts`
--


-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_sr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content_sr` text COLLATE utf8_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8_unicode_ci NOT NULL,
  `main_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title_sr`, `title_en`, `content_sr`, `content_en`, `main_image`, `modif`) VALUES
(1, 'Retail Park Pancevo – first retail park in Serbia', 'Retail Park Pancevo – first retail park in Serbia', '<p>Opening of DIS hypermarket announced successfully completed first phase of the future Retail Park Pancevo.<br /><br />On 7,3 ha plot beside hypermarket there will be fashion, shoe&rsquo;s, sports outlets, furniture stores, home d&eacute;cor and furnishing, white and brown goods, restaurants, coffee shops, cosmetic stores, entertainment etc. which will be completed in few phases.<br /><br />Envisaged is construction of total 30.000 m2 GBA with 700 parking places and open playground for kids.<br /><br />Location of the retail park gives great accessibility from all directions.<br /><br />Having this concept of shopping Retail Park put Pancevo at first place among other cities in the country.</p>', '<p>Opening of DIS hypermarket announced successfully completed first phase of the future Retail Park Pancevo.<br /><br />On 7,3 ha plot beside hypermarket there will be fashion, shoe&rsquo;s, sports outlets, furniture stores, home d&eacute;cor and furnishing, white and brown goods, restaurants, coffee shops, cosmetic stores, entertainment etc. which will be completed in few phases.<br /><br />Envisaged is construction of total 30.000 m2 GBA with 700 parking places and open playground for kids.<br /><br />Location of the retail park gives great accessibility from all directions.<br /><br />Having this concept of shopping Retail Park put Pancevo at first place among other cities in the country.</p>', 'news_gallery_small_01.jpg', '2010-07-29 19:36:05'),
(2, 'vezdara – residential-commercial complex in Belgrade', 'vezdara – residential-commercial complex in Belgrade', '<p>Municipality of Zvezdara, Zivka Davidovica 86<br />Construction starts in September 2010!<br /><br />Adding to the mix is the wide range of partnerships in areas of acquisition, development, management and financing that we have cultivated over the many years through our multiple projects.</p>', '<p>Municipality of Zvezdara, Zivka Davidovica 86<br />Construction starts in September 2010!<br /><br />Adding to the mix is the wide range of partnerships in areas of acquisition, development, management and financing that we have cultivated over the many years through our multiple projects.</p>', 'news_gallery_small_02.jpg', '2010-07-29 19:37:24'),
(3, 'vxcfdsfdsfdsfds', 'dfdsfdsfdsfds', '<p>&nbsp;</p>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'news_gallery_small_01.jpg', '2010-07-29 19:50:57'),
(4, 'Lorem Ipsum is simply dummy text ', 'Lorem Ipsum is simply dummy text ', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'news_big_17.jpg', '2010-07-29 19:51:30'),
(5, 'randomised words which don''t look even slightly believable. If you are going to use a passage ', 'randomised words which don''t look even slightly believable. If you are going to use a passage ', '<p>randomised words which don''t look even slightly believable. If you are going to use a passagerandomised words which don''t look even slightly believable. If you are going to use a passagerandomised words which don''t look even slightly believable. If you are going to use a passagerandomised words which don''t look even slightly believable. If you are going to use a passagerandomised words which don''t look even slightly believable. If you are going to use a passagerandomised words which don''t look even slightly believable. If you are going to use a passagerandomised words which don''t look even slightly believable. If you are going to use a passage</p>', '<p>randomised words which don''t look even slightly believable. If you are going to use a passagerandomised words which don''t look even slightly believable. If you are going to use a passagerandomised words which don''t look even slightly believable. If you are going to use a passagerandomised words which don''t look even slightly believable. If you are going to use a passagerandomised words which don''t look even slightly believable. If you are going to use a passagerandomised words which don''t look even slightly believable. If you are going to use a passage</p>', 'news_big_17.jpg', '2010-07-29 19:52:15');

-- --------------------------------------------------------

--
-- Table structure for table `news_images`
--

DROP TABLE IF EXISTS `news_images`;
CREATE TABLE IF NOT EXISTS `news_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_id` int(11) NOT NULL,
  `modif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `news_images`
--

INSERT INTO `news_images` (`id`, `image`, `news_id`, `modif`) VALUES
(1, 'news_big_01.jpg', 1, '2010-07-29 19:36:05'),
(2, 'news_big_02.jpg', 1, '2010-07-29 19:36:05'),
(3, 'news_big_03.jpg', 1, '2010-07-29 19:36:05'),
(4, 'news_big_04.jpg', 1, '2010-07-29 19:36:05'),
(5, 'news_big_05.jpg', 1, '2010-07-29 19:36:05'),
(6, 'zvezdara_img_big_01.jpg', 2, '2010-07-29 19:37:24'),
(7, 'zvezdara_img_big_02.jpg', 2, '2010-07-29 19:37:24'),
(8, 'zvezdara_img_big_03.jpg', 2, '2010-07-29 19:37:24'),
(9, 'zvezdara_img_big_04.jpg', 2, '2010-07-29 19:37:24'),
(10, 'news_big_18.jpg', 3, '2010-07-29 19:50:57');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_sr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content_sr` text COLLATE utf8_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8_unicode_ci NOT NULL,
  `page` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title_sr`, `title_en`, `content_sr`, `content_en`, `page`, `modif`) VALUES
(1, '', '', '', '', 'home', '2010-07-29 01:12:54'),
(2, '', '', '', '', 'who-we-are', '2010-07-29 01:13:04'),
(3, '', '', '', '', 'our-goals', '2010-07-29 01:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `pages_images`
--

DROP TABLE IF EXISTS `pages_images`;
CREATE TABLE IF NOT EXISTS `pages_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pages_images`
--


-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_sr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content_sr` text COLLATE utf8_unicode_ci NOT NULL,
  `content_en` text COLLATE utf8_unicode_ci NOT NULL,
  `modif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content2_sr` text COLLATE utf8_unicode_ci NOT NULL,
  `content2_en` text COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title_sr`, `title_en`, `content_sr`, `content_en`, `modif`, `content2_sr`, `content2_en`, `link`, `video`) VALUES
(1, 'Retail Park Pancevo', 'Retail Park Pancevo', '<p><strong>FEATURES</strong><br /><br />* Plot size: 7,3 ha<br /><br />* 30.000 m2 of gross retail area<br />fashion stores, sports equipment, hypermarket, DIY,home d&eacute;cor and furnishing, children&rsquo;s toy shops,<br />electronic stores, furniture, food court, services...<br /><br />* 700 parking places</p>', '<p><strong>FEATURES</strong><br /> <br /> * Plot size: 7,3 ha<br /> <br /> * 30.000 m2 of gross retail area<br /> fashion stores, sports equipment, hypermarket, DIY,home d&eacute;cor and furnishing, children&rsquo;s toy shops,<br /> electronic stores, furniture, food court, services...<br /> <br /> * 700 parking places</p>', '2010-07-29 20:04:27', '<p><strong>LOCATION</strong><br /><br />Retail park Pancevo is situated in the city zone, 1 km from the city center.<br />Located in the middle of the big residential area.It has 2 fronts which provide great accessibility and visibility from the regional road Belgrade-Vrsac and Milosa Obrenovica Street.<br /><br /><strong>CATCHMENT AREA</strong><br /><br />* 10 minute drive - 80.000 inhabitants<br /><br />* 20 minute drive - 200.000 inhabitants<br /><br />* 30 minute drive - 600.000 inabitants</p>', '<p><strong>LOCATION</strong><br /><br />Retail park Pancevo is situated in the city zone, 1 km from the city center.<br />Located in the middle of the big residential area.It has 2 fronts which provide great accessibility and visibility from the regional road Belgrade-Vrsac and Milosa Obrenovica Street.<br /><br /><strong>CATCHMENT AREA</strong><br /><br />* 10 minute drive - 80.000 inhabitants<br /><br />* 20 minute drive - 200.000 inhabitants<br /><br />* 30 minute drive - 600.000 inabitants</p>', 'retail-park-pancevo', 'http://www.youtube.com/watch?v=Yt5M-oqYyKM');

-- --------------------------------------------------------

--
-- Table structure for table `projects_images`
--

DROP TABLE IF EXISTS `projects_images`;
CREATE TABLE IF NOT EXISTS `projects_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `projects_images`
--

INSERT INTO `projects_images` (`id`, `project_id`, `image`, `modif`) VALUES
(1, 1, 'pancevo_img_big_01.jpg', '2010-07-29 20:04:27'),
(2, 1, 'pancevo_img_big_02.jpg', '2010-07-29 20:04:27'),
(3, 1, 'pancevo_img_big_03.jpg', '2010-07-29 20:04:27'),
(4, 1, 'pancevo_img_big_04.jpg', '2010-07-29 20:04:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `modif`) VALUES
(1, 'Dusan', 'Novakovic', 'ndusan', '*B7286508889280A09977E1CD4A2BDC42283108A0', '2010-07-25 17:51:33');
