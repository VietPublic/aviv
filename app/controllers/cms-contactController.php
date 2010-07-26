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
	
				$contact = getContacts();
				$subtitle = "Contacts";
				break;

	/*****************************************************************/
	/*			Home page											 */
	case 'delete': 

				$contact = deleteContact($params);
				header("Location: ".BASE_PATH.'cms'.DS.'contact'.DS.'?q=success');
				$subtitle = "";
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