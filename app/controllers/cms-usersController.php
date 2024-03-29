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
				
				$users = getUsers();
				$subtitle = "Users";
				break;

	/*****************************************************************/
	/*			Home page											 */
	case 'submit': 
				
				if(addUser($params)) header("Location: ".BASE_PATH.'cms'.DS.'users'.DS.'?q=success');
				else header("Location: ".BASE_PATH.'cms'.DS.'users'.DS.'?q=error');
				$subtitle = "";
				break;
				
	/*****************************************************************/
	/*			Home page											 */
	case 'edit': 
				
				$user = getUser($params['id']);
				$subtitle = "Edit user";
				break;

	/*****************************************************************/
	/*			Home page											 */
	case 'add': 
				
				$subtitle = "Add user";
				break;
				
	/*****************************************************************/
	/*			Home page											 */
	case 'delete': 
				
				removeUser($params['id']);
				header("Location: ".BASE_PATH.'cms'.DS.'users'.DS.'?q=success');
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