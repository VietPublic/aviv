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
				array(	'url' 			=> '/^our-projects\/?(eng\/?|srb\/?)?$/', 
						'controller' 	=> 'our-projects', 
					  	'action' 		=> 'index', 
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
				)
);