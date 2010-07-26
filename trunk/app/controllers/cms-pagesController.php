<?php
/**
 * Service Controller - all actions on service  <page
 */
session_start();
//Check $_SESSION['cms-user']
if(!isset($_SESSION['cms'])){
	//Go back to login page
	header("Location: ".BASE_PATH.'login'.DS);
	exit;
}

switch($url['route']['action']){
	
	/*****************************************************************/
	/*			Home page											 */
	case 'index': 
				if(!isset($params['p']) || empty($params['p'])) header("Location: ".BASE_PATH.'cms'.DS.'home'.DS.'?q=error');
				$news = getPage($params['p']);
				$subtitle = "Pages";
				break;

			
	/*****************************************************************/
	/*			Default page if no action							 */
	default: 
				$subtitle = "";
				break;
}

/**
 * Page title for layout
 * The idea is to set title and subtitle for other subpages inside same page
 */
$title = "Aviv - " . $subtitle;