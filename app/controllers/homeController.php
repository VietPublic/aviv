<?php
/**
 * Service Controller - all actions on service  <page
 */

switch($url['route']['action']){
	
	/*****************************************************************/
	/*			Home page											 */
	case 'index': 
				//Current language
				$lng = substr($params[1], 0, 3);
				
				//Get current language
				//$currentLng = getCurrentLanguage($lng);
				
				
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