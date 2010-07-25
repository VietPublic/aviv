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

				$news = getAllNews();
				$subtitle = "";
				break;

	/*****************************************************************/
	/*			Home page											 */
	case 'add': 
				
				$js = 'cms-news.js';
				$subtitle = "Add news";
				break;			

	/*****************************************************************/
	/*			Home page											 */
	case 'edit': 
				$news = getNews($params['id']);
				$js = 'cms-news.js';
				$subtitle = "Edit news";
				break;	
				
	/*****************************************************************/
	/*			Home page											 */
	case 'submit': 
				
				if($response = addNews($params)){
					
					//Check if it's update or insert
					if(isset($params['id']) && !empty($params)){
						//Update
						
					}else{
						//Insert
						
						//Upload original & thumb
						uploadFile($params['main_image'], 'news', $response['news_id']);
						
						if(isset($response['other']) && !empty($response['other'])){
							
							foreach($response['other'] as $img){
								uploadFile($img['file'], 'news', $response['news_id']."-".$img['id']);
							}
						}
					}
					header("Location: ".BASE_PATH.'cms'.DS.'news'.DS.'?q=success');
				} 
				else header("Location: ".BASE_PATH.'cms'.DS.'news'.DS.'?q=error');
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