<?php
/**
 * Service Controller - all actions on service  <page
 */

switch($url['route']['action']){
	
	/*****************************************************************/
	/*			Home page											 */
	case 'index': 
				//Current language
				if(isset($params[1]) && !empty($params[1])){
					
					switch(substr($params[1], 0, 2)){
						default:
						case 'sr': $lng = 'sr';
									break;
						case 'en': $lng = 'en';
									break;
					}
				}else $lng = 'sr';
				
				$subtitle = "Contact";
				break;

	/*****************************************************************/
	/*			Home page											 */
	case 'submit': 
				
				$subtitle = "";
				break;				
				
	/*****************************************************************/
	/*			Default page if no action							 */
	default: 
				$subtitle = "";
				break;
}

//Current possition on front page
$currPos = "app".DS;
$selectedLng = ($lng ? $lng.DS : '');

/**
 * Page title for layout
 * The idea is to set title and subtitle for other subpages inside same page
 */
$title = "Aviv - " . $subtitle;