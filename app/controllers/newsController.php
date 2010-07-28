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
				
				// number of rows to show per page
			    $rowsperpage = PER_PAGE;
		
			    $page = (isset($params['page']) && ctype_digit($params['page'])) ? $params['page'] : 1;
			    
			    $numOfLists = getNumOfNews();
			                
			    // find out total pages
                $totalpages = ($numOfLists <= $rowsperpage) ? 1 : ceil($numOfLists / $rowsperpage);
                            
			    // if current page is greater than total pages...
                if ($page > $totalpages) $page = $totalpages;
                            
                // if current page is less than first page...
                if ($page < 1) $page = 1;
                            
			    // the offset of the list, based on current page 
                $offset = ($page - 1) * $rowsperpage;
                            
			    //Get contact(s) from selected list(s)
			    $news = getAllCreatedNews($offset, $rowsperpage);

				$subtitle = "News";
				
				$dontShow = true;
				break;

	/*****************************************************************/
	/*			Default page if no action							 */
	default: 
				$subtitle = "";
				break;
}
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