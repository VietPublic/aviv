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
	$response = array();
	$query = sprintf("SELECT * FROM `pages` WHERE `page`='%s'",
					mysql_real_escape_string($page)
					);
	$res = mysql_query($query);
	if(mysql_num_rows($res) <= 0) return false;
	$response = mysql_fetch_assoc($res);
	
	//Other
	$query = sprintf("SELECT * FROM `pages_images` WHERE `page_id`='%s'",
					mysql_real_escape_string($response['id'])
					);
	$res = mysql_query($query);
	if(mysql_num_rows($res) > 0)
		while($row = mysql_fetch_assoc($res)) $response['other'][] = $row;
	
	return $response;
}

function setPage($params){
	db_connect();
	
	switch($params['p']){
		
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
	
	//Set main elements
	$query = sprintf("UPDATE `pages` SET `title_sr`='%s', `title_en`='%s', `content_sr`='%s', `content_en`='%s' WHERE `page`='%s'",
					mysql_real_escape_string($params['page']['title_sr']),
					mysql_real_escape_string($params['page']['title_en']),
					mysql_real_escape_string($params['page']['content_sr']),
					mysql_real_escape_string($params['page']['content_en']),
					mysql_real_escape_string($page)
					); 
	mysql_query($query);
	
	$output = array();
	
	//Set additional files if set
	if(isset($params['file']['name']) && !empty($params['file']['name'])){
		$query = sprintf("SELECT * FROM `pages` WHERE `page`='%s'",
						mysql_real_escape_string($page)
						);
		$res = mysql_query($query);
		$row = mysql_fetch_assoc($res);
		
		foreach($params['file']['name'] as $key => $f){
			if($params['file']['error'][$key] == 0){
				$query = sprintf("INSERT INTO `pages_images` SET `image`='%s', `page_id`='%s'",
								mysql_real_escape_string($f),
								mysql_real_escape_string($row['id'])
								);
				mysql_query($query);
				$output[] = array('file' => array('name' => $params['file']['name'][$key], 'tmp_name' => $params['file']['tmp_name'][$key], 'error' => $params['file']['error'][$key], 'type' => $params['file']['type'][$key], 'size' => $params['file']['size'][$key]), 'id' => mysql_insert_id());
			}
		}
	}
	return $output;
	
}

function deletePage($params){
	db_connect();
	
	$query = sprintf("SELECT * FROM `pages_images` WHERE `id`='%s'",
					mysql_real_escape_string($params['id'])
					);
	$res = mysql_query($query);
	$row = mysql_fetch_assoc($res);
	
	//Delete
	$query = sprintf("DELETE FROM `pages_images` WHERE `id`='%s'",
					mysql_real_escape_string($params['id'])
					);
	mysql_query($query);
	
	return $row;
}