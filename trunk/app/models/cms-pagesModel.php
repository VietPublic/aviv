<?php
function getPage($page){
	db_connect();
	
	switch($page){
		
		default: case 'home':
			$page = "home";
			
		break;
		case 'who-we-are':
			$page = "who-we-are";
			
		break;
		case 'our-goals':
			$page = "our-goals";
			
		break;
	}
	
	$query = sprintf("SELECT * FROM `pages` WHERE `page`='%s'",
					mysql_real_escape_string($page)
					);
	$res = mysql_query($query);
	if(mysql_num_rows($res) <= 0) return false;
	
	return mysql_fetch_assoc($res);
}