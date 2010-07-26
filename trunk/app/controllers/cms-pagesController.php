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

$js = "tiny_mce".DS."tiny_mce.js";
$js2 = "cms-pages.js";

switch($url['route']['action']){
	
	/*****************************************************************/
	/*			Home page											 */
	case 'index': 
				if(!isset($params['p']) || empty($params['p'])) header("Location: ".BASE_PATH.'cms'.DS.'home'.DS.'?q=error');
				$page = getPage($params['p']);
				$subtitle = "Pages";
				break;

	/*****************************************************************/
	/*			Home page											 */
	case 'submit': 

				if(!isset($params['p']) || empty($params['p'])) header("Location: ".BASE_PATH.'cms'.DS.'home'.DS.'?q=error');
				
				$other = setPage($params);
				if(isset($other) && !empty($other)){
					foreach($other as $o) uploadFile($o['file'], $params['p'], $o['id']);
				}
				header("Location: ".BASE_PATH.'cms'.DS.'pages'.DS.'?p='.$params['p'].'&q=success');
				$subtitle = "";
				break;
			
	/*****************************************************************/
	/*			Home page											 */
	case 'delete': 

				if(!isset($params['p']) || empty($params['p'])) header("Location: ".BASE_PATH.'cms'.DS.'home'.DS.'?q=error');
				
				$image = deletePage($params);
				unlink($_SERVER['DOCUMENT_ROOT'].UPLOAD_PATH.$params['p'].DS.$image['id']."-".$image['image']);
				unlink($_SERVER['DOCUMENT_ROOT'].UPLOAD_PATH.$params['p'].DS.'thumb'.DS.$image['id']."-".$image['image']);
				header("Location: ".BASE_PATH.'cms'.DS.'pages'.DS.'?p='.$params['p'].'&q=success');
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