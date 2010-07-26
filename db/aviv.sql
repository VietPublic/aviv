-- phpMyAdmin SQL Dump
-- version 3.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 27, 2010 at 12:39 AM
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contacts`
--


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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=43 ;

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
(1, 'zvezdara', 'dsfds', '<p>ddasfdas</p>', '<p>dsfdaf</p>', 'home', '2010-07-27 00:00:08'),
(2, 'xx', 'xx', '<p>xxx</p>', '<p>xx</p>', 'who-we-are', '2010-07-26 23:45:39'),
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Dumping data for table `pages_images`
--


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
  `page` varchar(255) collate utf8_unicode_ci NOT NULL,
  `modif` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title_sr`, `title_en`, `content_sr`, `content_en`, `page`, `modif`) VALUES
(1, 'asf', 'dsaf', '<p>sadf</p>', '<p>sdf</p>', 'zvezdara', '2010-07-27 00:06:32'),
(2, '', '', '', '', 'retail-park-pancevo', '2010-07-27 00:06:22');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

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

