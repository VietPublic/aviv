-- phpMyAdmin SQL Dump
-- version 3.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 28, 2010 at 11:40 PM
-- Server version: 5.0.83
-- PHP Version: 5.2.10-2ubuntu6.4

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
  `id` int(11) NOT NULL auto_increment,
  `content` text collate utf8_unicode_ci NOT NULL,
  `modif` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `content`, `modif`) VALUES
(2, 'Name: Dusan NovakovicEmail: ndusan@gmail.comCompany: MalmoPhone: Message: sdfsfsdf;jlk', '2010-07-27 20:54:29'),
(3, 'Name: gdfgf<br/>Email: sdfasd<br/>Company: sdfa<br/>Phone: <br/>Message: qsd<br/>', '2010-07-27 20:55:31'),
(4, '<b>Name</b>: sadf<br/><b>Email</b>: dfs<br/><b>Company</b>: fas<br/><b>Phone</b>: <br/><b>Message</b>: afas', '2010-07-27 20:56:13');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL auto_increment,
  `title_sr` varchar(255) collate utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) collate utf8_unicode_ci NOT NULL,
  `content_sr` text collate utf8_unicode_ci NOT NULL,
  `content_en` text collate utf8_unicode_ci NOT NULL,
  `main_image` varchar(255) collate utf8_unicode_ci NOT NULL,
  `modif` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `news`
--


-- --------------------------------------------------------

--
-- Table structure for table `news_images`
--

DROP TABLE IF EXISTS `news_images`;
CREATE TABLE IF NOT EXISTS `news_images` (
  `id` int(11) NOT NULL auto_increment,
  `image` varchar(255) collate utf8_unicode_ci NOT NULL,
  `news_id` int(11) NOT NULL,
  `modif` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `news_images`
--


-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL auto_increment,
  `title_sr` varchar(255) collate utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) collate utf8_unicode_ci NOT NULL,
  `content_sr` text collate utf8_unicode_ci NOT NULL,
  `content_en` text collate utf8_unicode_ci NOT NULL,
  `page` varchar(255) collate utf8_unicode_ci NOT NULL,
  `modif` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title_sr`, `title_en`, `content_sr`, `content_en`, `page`, `modif`) VALUES
(1, 'zvezdara', 'dsfds', '<p>Untitled document</p>\r\n<p>ddasfdas</p>\r\n<p><strong>Dusan</strong></p>\r\n<p><strong>fsdfaf</strong></p>', '<p>Untitled document</p>\r\n<p>dsfdaf</p>', 'home', '2010-07-27 23:28:21'),
(2, 'xx', 'xx', '<p>xxx</p>', '<table border="0">\r\n<tbody>\r\n<tr>\r\n<td>zdffsfsdfadsfsdfafad</td>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>sdfadsfsadf</td>\r\n<td>sdfsdfsdfa</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<hr />\r\n<p>dhjksdfhjdsfsdfja;lfkds</p>', 'who-we-are', '2010-07-27 23:49:32'),
(3, 'our goals', 'sadf', '<p>sdafa</p>', '<p>sdf</p>', 'our-goals', '2010-07-26 23:44:14');

-- --------------------------------------------------------

--
-- Table structure for table `pages_images`
--

DROP TABLE IF EXISTS `pages_images`;
CREATE TABLE IF NOT EXISTS `pages_images` (
  `id` int(11) NOT NULL auto_increment,
  `page_id` int(11) NOT NULL,
  `image` varchar(255) collate utf8_unicode_ci NOT NULL,
  `modif` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Dumping data for table `pages_images`
--

INSERT INTO `pages_images` (`id`, `page_id`, `image`, `modif`) VALUES
(33, 2, 'radio-paradise.jpg', '2010-07-27 23:35:22'),
(32, 2, 'radio-paradise.jpg', '2010-07-27 23:35:22'),
(31, 2, 'radio-paradise.jpg', '2010-07-27 23:35:22'),
(30, 2, 'radio-paradise.jpg', '2010-07-27 23:35:22'),
(29, 3, 'radio-paradise.jpg', '2010-07-27 20:19:45'),
(28, 1, 'radio-paradise.jpg', '2010-07-27 18:53:21'),
(27, 1, 'radio-paradise.jpg', '2010-07-27 18:53:21');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL auto_increment,
  `title_sr` varchar(255) collate utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) collate utf8_unicode_ci NOT NULL,
  `content_sr` text collate utf8_unicode_ci NOT NULL,
  `content_en` text collate utf8_unicode_ci NOT NULL,
  `modif` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `content2_sr` text collate utf8_unicode_ci NOT NULL,
  `content2_en` text collate utf8_unicode_ci NOT NULL,
  `link` varchar(255) collate utf8_unicode_ci NOT NULL,
  `video` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `projects`
--


-- --------------------------------------------------------

--
-- Table structure for table `projects_images`
--

DROP TABLE IF EXISTS `projects_images`;
CREATE TABLE IF NOT EXISTS `projects_images` (
  `id` int(11) NOT NULL auto_increment,
  `project_id` int(11) NOT NULL,
  `image` varchar(255) collate utf8_unicode_ci NOT NULL,
  `modif` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `projects_images`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL auto_increment,
  `firstname` varchar(255) collate utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) collate utf8_unicode_ci NOT NULL,
  `username` varchar(255) collate utf8_unicode_ci NOT NULL,
  `password` varchar(255) collate utf8_unicode_ci NOT NULL,
  `modif` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `modif`) VALUES
(1, 'Dusan', 'Novakovic', 'ndusan', '*B7286508889280A09977E1CD4A2BDC42283108A0', '2010-07-25 17:51:33');

