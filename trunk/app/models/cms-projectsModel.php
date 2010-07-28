<?php
function getProject($linkId = null){
	db_connect();
	
	$response = array();
	if(isset($linkId) && !empty($linkId)){
		$query = sprintf("SELECT * FROM `projects` WHERE `id`='%s'",
						mysql_real_escape_string($linkId)
						);
	
		$res = mysql_query($query);
		if(mysql_num_rows($res) <= 0) return false;
		$response = mysql_fetch_assoc($res);
		
		//Other
		$query = sprintf("SELECT * FROM `projects_images` WHERE `project_id`='%s'",
						mysql_real_escape_string($response['id'])
						);
		$res = mysql_query($query);
		if(mysql_num_rows($res) > 0)
			while($row = mysql_fetch_assoc($res)) $response['other'][] = $row;
		
		return $response;
		
	}else{
		$query = sprintf("SELECT * FROM `projects`");
		$res = mysql_query($query);
		if(mysql_num_rows($res) <= 0) return false;
		while($row = mysql_fetch_assoc($res)) $response[] = $row ;
		
		return $response;
	}
	
}

function setProject($params){
	db_connect();
	
	$pageId = $params['id']; 
	
	//Set main elements
	$query = sprintf("UPDATE `projects` SET `title_sr`='%s', `title_en`='%s', `content_sr`='%s', `content_en`='%s' WHERE `id`='%s'",
					mysql_real_escape_string($params['project']['title_sr']),
					mysql_real_escape_string($params['project']['title_en']),
					mysql_real_escape_string($params['project']['content_sr']),
					mysql_real_escape_string($params['project']['content_en']),
					mysql_real_escape_string($pageId)
					); 
	mysql_query($query);
	
	$output = array();
	
	//Set additional files if set
	if(isset($params['file']['name']) && !empty($params['file']['name'])){
		$query = sprintf("SELECT * FROM `projects` WHERE `id`='%s'",
						mysql_real_escape_string($pageId)
						);
		$res = mysql_query($query);
		$row = mysql_fetch_assoc($res);
		
		foreach($params['file']['name'] as $key => $f){
			if($params['file']['error'][$key] == 0){
				$query = sprintf("INSERT INTO `projects_images` SET `image`='%s', `project_id`='%s'",
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

function deleteProject($params){
	db_connect();
	
	$query = sprintf("SELECT * FROM `projects_images` WHERE `id`='%s'",
					mysql_real_escape_string($params['id'])
					);
	$res = mysql_query($query);
	$row = mysql_fetch_assoc($res);
	
	//Delete
	$query = sprintf("DELETE FROM `projects_images` WHERE `id`='%s'",
					mysql_real_escape_string($params['id'])
					);
	mysql_query($query);
	
	return $row;
}

function setLink($string, $stringId, $action = 'add'){
	
	//Remove space and &
	$string = str_replace(" ", "-", $string);
	$string = str_replace("&", "-", $string);
	
	db_connect();
	switch($action){
		case 'add':
			$query = sprintf("SELECT * FROM `projects` WHERE `link`='%s'",
							mysql_real_escape_string($string)
							);
			$res = mysql_query($query);
			if(mysql_num_rows($res) > 0) return false;
			
			//Add link
			$query = sprintf("INSERT INTO `projects` SET `link`='%s'",
							mysql_real_escape_string($string)
							);
			mysql_query($query);
			$id = mysql_insert_id();
			
		break;
		
		case 'edit':
			$query = sprintf("SELECT * FROM `projects` WHERE `link`='%s'",
							mysql_real_escape_string($string)
							);
			$res = mysql_query($query);
			if(mysql_num_rows($res) > 0) return false;
			
			//Add link
			$query = sprintf("UPDATE `projects` SET `link`='%s' WHERE `id`='%s'",
							mysql_real_escape_string($string),
							mysql_real_escape_string($stringId)
							);
			mysql_query($query);
			return true;			
	}
}

function createProject($params){
	db_connect();
	
	//Create 
	$params = array_merge($params, array('id' => setLink($params['link'], 0)));
	print_r($params);
	return setProject($params);
}

function updateProject($params){
	db_connect();
	
	//Create 
	$params = array_merge($params, array('id' => setLink($params['link'], $params['id'], 'edit')));
	return setProject($params);
}

