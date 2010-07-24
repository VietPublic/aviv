<?php
/**
 * Service Controller - all actions on service  <page
 */
session_start();
//Check $_SESSION['cms-user']
if(!isset($_SESSION['cms']) && $url['route']['action'] == 'home'){
	//Go back to login page
	header("Location: ".BASE_PATH.'login'.DS);
	exit;
}

switch($url['route']['action']){
	
	/*****************************************************************/
	/*			Home page											 */
	case 'login': 

				//Check if user is logged in already
				if(isset($_SESSION['cms']) && !empty($_SESSION['cms'])){
					
					if($user = getUser($_SESSION['cms'], true)){
						//Go on home page
						header("Location: ".BASE_PATH.'cms'.DS.'home'.DS);
						exit;
					}
				}
		
				$subtitle = "CMS admin panel";
				break;

	/*****************************************************************/
	/*			Home page											 */
	case 'submit': 

				if($_SESSION['cms'] = getUser($params, false)){
					//Go on home page
					header("Location: ".BASE_PATH.'cms'.DS.'home'.DS);
					exit;
				}else{
					header("Location: ".BASE_PATH.'login'.DS.'?q=error');
					exit;
				}
				
				$subtitle = "";
				break;
				
	/*****************************************************************/
	/*			Home page											 */
	case 'home': 

				$subtitle = "CMS admin panel";
				
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