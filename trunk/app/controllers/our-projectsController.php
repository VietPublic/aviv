<?php
/**
 * Service Controller - all actions on service  <page
 */

switch($url['route']['action']){
	
	/*****************************************************************/
	/*			Home page											 */
	case 'zvezdara': 
				//Current language
				if(isset($params[1]) && !empty($params[1])){
					
					switch($params[1]){
						default:
						case 'srb': $lng = 'srb';
									break;
						case 'eng': $lng = 'eng';
									break;
					}
				}else $lng = 'srb';
				
				//Get current language
				//$currentLng = getCurrentLanguage($lng);
				
				
				$subtitle = "Our projects - Zvezdara";
				break;

	case 'retailParkPancevo': 
				//Current language
				if(isset($params[1]) && !empty($params[1])){
					
					switch($params[1]){
						default:
						case 'srb': $lng = 'srb';
									break;
						case 'eng': $lng = 'eng';
									break;
					}
				}else $lng = 'srb';
				
				//Get current language
				//$currentLng = getCurrentLanguage($lng);
				
				
				$subtitle = "Our projects - Retail Park Pancevo";
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