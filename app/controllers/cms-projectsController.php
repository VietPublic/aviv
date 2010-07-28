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
				$projects = getProjects();
				$subtitle = "Projects";
				
				break;

	/*****************************************************************/
	/*			Home page											 */
	case 'submit': 
				if(isset($params['id']) && !empty($params['id'])) $other = updateProject($params);
				else $other = createProject($params);
				
				//Make folders if don't exists
				if(!is_dir(UPLOAD_PATH.$other['link'])){
					mkdir(UPLOAD_PATH.$other['link']);
					mkdir(UPLOAD_PATH.$other['link'].DS.'thumb');	
				}
				if(isset($other['set']) && !empty($other['set'])){
					foreach($other['set'] as $o) uploadFile($o['file'], $other['link'], $o['id'], 183, 108);
				}
				header("Location: ".BASE_PATH.'cms'.DS.'projects'.DS.'?q=success');
				$subtitle = "";
				break;
			
	/*****************************************************************/
	/*			Home page											 */
	case 'deleteImage': 

				$image = deleteProjectImage($params);
				
				unlink($_SERVER['DOCUMENT_ROOT'].UPLOAD_PATH.$image['link'].DS.$image['id']."-".$image['image']);
				unlink($_SERVER['DOCUMENT_ROOT'].UPLOAD_PATH.$image['link'].DS.'thumb'.DS.$image['id']."-".$image['image']);
				header("Location: ".BASE_PATH.'cms'.DS.'projects'.DS.$image['project_id'].DS.'edit'.DS.'?q=success');
				$subtitle = "";
				break;

	/*****************************************************************/
	/*			Home page											 */
	case 'edit': 
				
				$project = getProject($params['id']);

				$subtitle = "Edit project";
				break;
			
	/*****************************************************************/
	/*			Home page											 */
	case 'show': 
				
				$project = getProject($params['id']);

				$subtitle = "Details about project";
				break;

	/*****************************************************************/
	/*			Home page											 */
	case 'delete': 
				
				$project = deleteProject($params);
				header("Location: ".BASE_PATH.'cms'.DS.'projects'.DS.'?q=success');	
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