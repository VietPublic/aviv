<?php
$routes = array(
				/*************************************************************
				*************************** Website **************************
				*************************************************************/
				//Homepage
				array(	'url' 			=> '/^\/?(eng\/?|srb\/?)?$/', 
						'controller' 	=> 'home', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'user'
				),
				//Who we are
				array(	'url' 			=> '/^who-we-are\/?(eng\/?|srb\/?)?$/', 
						'controller' 	=> 'who-we-are', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'user'
				),
				//Our goals
				array(	'url' 			=> '/^our-goals\/?(eng\/?|srb\/?)?$/', 
						'controller' 	=> 'our-goals', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'user'
				),
				//Our projects
				array(	'url' 			=> '/^our-projects\/retail-park-pancevo\/?(eng\/?|srb\/?)?$/', 
						'controller' 	=> 'our-projects', 
					  	'action' 		=> 'retailParkPancevo', 
					  	'layout' 		=> 'user'
				),
				array(	'url' 			=> '/^our-projects\/zvezdara\/?(eng\/?|srb\/?)?$/', 
						'controller' 	=> 'our-projects', 
					  	'action' 		=> 'zvezdara', 
					  	'layout' 		=> 'user'
				),
				//News
				array(	'url' 			=> '/^news\/?(eng\/?|srb\/?)?$/', 
						'controller' 	=> 'news', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'user'
				),
				//Contact
				array(	'url' 			=> '/^contact\/?(eng\/?|srb\/?)?$/', 
						'controller' 	=> 'contact', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'user'
				),
				//CMS system
				array(	'url' 			=> '/^login\/?$/', 
						'controller' 	=> 'cms-home', 
					  	'action' 		=> 'login', 
					  	'layout' 		=> 'login'
				),
				array(	'url' 			=> '/^submit\/?$/', 
						'controller' 	=> 'cms-home', 
					  	'action' 		=> 'submit', 
					  	'layout' 		=> 'empty'
				),
				array(	'url' 			=> '/^logout\/?$/', 
						'controller' 	=> 'cms-home', 
					  	'action' 		=> 'logout', 
					  	'layout' 		=> 'empty'
				),
				//CMS HOME
				array(	'url' 			=> '/^cms\/home\/?$/', 
						'controller' 	=> 'cms-home', 
					  	'action' 		=> 'home', 
					  	'layout' 		=> 'cms'
				),
				//CMS USERS
				array(	'url' 			=> '/^cms\/users\/?$/', 
						'controller' 	=> 'cms-users', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'cms'
				),
				array(	'url' 			=> '/^cms\/users\/add\/?$/', 
						'controller' 	=> 'cms-users', 
					  	'action' 		=> 'add', 
					  	'layout' 		=> 'cms'
				),
				array(	'url' 			=> '/^cms\/users\/submit\/?$/', 
						'controller' 	=> 'cms-users', 
					  	'action' 		=> 'submit', 
					  	'layout' 		=> 'empty'
				),
				array(	'url' 			=> '/^cms\/users\/(?P<id>\d+)\/edit\/?$/', 
						'controller' 	=> 'cms-users', 
					  	'action' 		=> 'edit', 
					  	'layout' 		=> 'cms'
				),
				array(	'url' 			=> '/^cms\/users\/(?P<id>\d+)\/submit\/?$/', 
						'controller' 	=> 'cms-users', 
					  	'action' 		=> 'submit', 
					  	'layout' 		=> 'empty'
				),
				//CMS NEWS
				array(	'url' 			=> '/^cms\/news\/?$/', 
						'controller' 	=> 'cms-news', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'cms'
				),
				array(	'url' 			=> '/^cms\/news\/add\/?$/', 
						'controller' 	=> 'cms-news', 
					  	'action' 		=> 'add', 
					  	'layout' 		=> 'cms'
				),
				array(	'url' 			=> '/^cms\/news\/add\/submit\/?$/', 
						'controller' 	=> 'cms-news', 
					  	'action' 		=> 'submit', 
					  	'layout' 		=> 'cms'
				),
				array(	'url' 			=> '/^cms\/news\/(?P<id>\d+)\/edit\/?$/', 
						'controller' 	=> 'cms-news', 
					  	'action' 		=> 'edit', 
					  	'layout' 		=> 'cms'
				),
				array(	'url' 			=> '/^cms\/news\/(?P<id>\d+)\/edit\/submit\/?$/', 
						'controller' 	=> 'cms-news', 
					  	'action' 		=> 'submit', 
					  	'layout' 		=> 'empty'
				),
				//CMS PAGES
				array(	'url' 			=> '/^cms\/pages\/?$/', 
						'controller' 	=> 'cms-pages', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'cms'
				),
				array(	'url' 			=> '/^cms\/pages\/submit\/?$/', 
						'controller' 	=> 'cms-pages', 
					  	'action' 		=> 'submit', 
					  	'layout' 		=> 'empty'
				),
				//CMS PROJECTS
				array(	'url' 			=> '/^cms\/projects\/?$/', 
						'controller' 	=> 'cms-projects', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'cms'
				),
				array(	'url' 			=> '/^cms\/projects\/submit\/?$/', 
						'controller' 	=> 'cms-projects', 
					  	'action' 		=> 'submit', 
					  	'layout' 		=> 'empty'
				),
				//CMS CONTACT
				array(	'url' 			=> '/^cms\/contact\/?$/', 
						'controller' 	=> 'cms-contact', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'cms'
				),
				array(	'url' 			=> '/^cms\/contact\/submit\/?$/', 
						'controller' 	=> 'cms-contact', 
					  	'action' 		=> 'submit', 
					  	'layout' 		=> 'empty'
				)
);