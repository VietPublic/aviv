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
				$subtitle = "News";
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
	case 'show': 
				$news = getNews($params['id']);
				$subtitle = "Show news";
				break;	
				
	/*****************************************************************/
	/*			Home page											 */
	case 'submit': 
				
				if($response = addNews($params)){
					
					//Check if it's update or insert
					if(isset($params['id']) && !empty($params)){
						//Update
						
						//Upload original & thumb
						if(isset($params['main_image']) && !empty($params['main_image'])) uploadFile($params['main_image'], 'news', $response['news_id']);
						
						if(isset($response['other']) && !empty($response['other'])){
							
							foreach($response['other'] as $img){
								uploadFile($img['file'], 'news', $response['news_id']."-".$img['id']);
							}
						}
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
	/*			Home page											 */
	case 'delete': 
		
				if(isset($params['q']) && !empty($params['q'])){
					//Delete some of images
					
					switch($params['q']){
						
						case 'main_image':
							
							$image = deleteMainImage($params['id']);
							unlink($_SERVER['DOCUMENT_ROOT'].UPLOAD_PATH.'news'.DS.$image['id']."-".$image['main_image']);
							unlink($_SERVER['DOCUMENT_ROOT'].UPLOAD_PATH.'news'.DS.'thumb'.DS.$image['id']."-".$image['main_image']);
						break;
						case 'other':
							$image = deleteOtherImage($params['id'], $params['other_id']);
							unlink($_SERVER['DOCUMENT_ROOT'].UPLOAD_PATH.'news'.DS.$image['news_id']."-".$image['id']."-".$image['image']);
							unlink($_SERVER['DOCUMENT_ROOT'].UPLOAD_PATH.'news'.DS.'thumb'.DS.$image['news_id']."-".$image['id']."-".$image['image']);
						break;
						default: //error
					}
					header("Location: ".BASE_PATH.'cms'.DS.'news'.DS.$params['id'].DS.'edit'.DS.'?q=success');
					exit;
				}else{
					//Delete news
					$images = deleteNews($params['id']);
					
					unlink($_SERVER['DOCUMENT_ROOT'].UPLOAD_PATH.'news'.DS.$images['main_image']['id']."-".$images['main_image']['main_image']);
					unlink($_SERVER['DOCUMENT_ROOT'].UPLOAD_PATH.'news'.DS.'thumb'.DS.$images['main_image']['id']."-".$images['main_image']['main_image']);
					if(isset($images['other']) && !empty($images['other']))
						foreach($images['other'] as $o){
							unlink($_SERVER['DOCUMENT_ROOT'].UPLOAD_PATH.'news'.DS.$o['news_id']."-".$o['id']."-".$o['image']);
							unlink($_SERVER['DOCUMENT_ROOT'].UPLOAD_PATH.'news'.DS.'thumb'.DS.$o['news_id']."-".$o['id']."-".$o['image']);
						}
					header("Location: ".BASE_PATH.'cms'.DS.'news'.DS.'?q=success');
					exit;
				}
				
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