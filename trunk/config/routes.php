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
				array(	'url' 			=> '/^cms\/home\/?$/', 
						'controller' 	=> 'cms-home', 
					  	'action' 		=> 'home', 
					  	'layout' 		=> 'cms'
				)
);