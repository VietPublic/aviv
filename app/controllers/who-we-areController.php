<?php
/**
 * Service Controller - all actions on service  <page
 */
$active = 'who-we-are';
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
				
				$page = getSelectedPage('who-we-are');
				
				$subtitle = "Who we are";
				break;

	/*****************************************************************/
	/*			Default page if no action							 */
	default: 
				$subtitle = "";
				break;
}

$currentPage = "who-we-are";

//Load language from file
if(file_exists(LANG_PATH.$lng."Lang.php")) include(LANG_PATH.$lng."Lang.php");
else include(LANG_PATH."srLang.php");

//Current possition on front page
$currPos = "app".DS;
$selectedLng = ($lng ? $lng.DS : '');

/**
 * Page title for layout
 * The idea is to set title and subtitle for other subpages inside same page
 */
$title = "Aviv - " . $subtitle;