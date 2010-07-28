<?php
function getProjects(){
	db_connect();
	
	$response = array();
	$query = sprintf("SELECT * FROM `projects` ORDER BY `id` DESC");

	$res = mysql_query($query);
	if(mysql_num_rows($res) <= 0) return false;
	while($row = mysql_fetch_assoc($res)) $response[] = $row;
	
	return $response;
	
}

function getProject($id){
	db_connect();
	
	$response = array();
	$query = sprintf("SELECT * FROM `projects` WHERE `id`='%s'",
					mysql_real_escape_string($id)
					);

	$res = mysql_query($query);
	if(mysql_num_rows($res) <= 0) return false;
	$response = mysql_fetch_assoc($res);
	
	$query = sprintf("SELECT * FROM `projects_images` WHERE `project_id`='%s'",
					mysql_real_escape_string($id)
					);

	$tmp = array();
	$res = mysql_query($query);
	if(mysql_num_rows($res) > 0){
		while($row = mysql_fetch_assoc($res)) $tmp[] = $row;
	}
	$response = array_merge($response, array('other' => $tmp));
		
	return $response;
	
}

function setProject($params){
	db_connect();
	
	$pageId = $params['set']['id']; 
	
	//Set main elements
	$query = sprintf("UPDATE `projects` SET `title_sr`='%s', `title_en`='%s', `content_sr`='%s', `content_en`='%s', `content2_sr`='%s', `content2_en`='%s', `video`='%s' WHERE `id`='%s'",
					mysql_real_escape_string($params['project']['title_sr']),
					mysql_real_escape_string($params['project']['title_en']),
					mysql_real_escape_string($params['project']['content_sr']),
					mysql_real_escape_string($params['project']['content_en']),
					mysql_real_escape_string($params['project']['content2_sr']),
					mysql_real_escape_string($params['project']['content2_en']),
					mysql_real_escape_string($params['project']['video']),
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
	return array('set' => $output, 'link' => $params['set']['real_link']);
	
}

function deleteProjectImage($params){
	db_connect();
	
	$query = sprintf("SELECT `projects_images`.*, `projects`.`link`, `projects`.`id` AS `project_id` FROM `projects_images` 
						INNER JOIN `projects` ON `projects`.`id`=`projects_images`.`project_id`
						WHERE `projects_images`.`id`='%s'",
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

function deleteProject($params){
	db_connect();
	
	$query = sprintf("SELECT * FROM `projects` WHERE `id`='%s'",
					mysql_real_escape_string($params['id'])
					);
	$res = mysql_query($query);
	$row = mysql_fetch_assoc($res);
	
	//Delete
	$query = sprintf("DELETE FROM `projects_images` WHERE `project_id`='%s'",
					mysql_real_escape_string($params['id'])
					);
	mysql_query($query);
	$query = sprintf("DELETE FROM `projects` WHERE `id`='%s'",
					mysql_real_escape_string($params['id'])
					);
	mysql_query($query);
	
	return $row;
}

function setLink($string, $stringId, $action = 'add'){
	
	//Remove space and &
	$string = str_replace(" ", "-", $string);
	$string = str_replace("&", "-", $string);
	$string = strtolower($string);
	
	db_connect();
	switch($action){
		case 'add':
			$query = sprintf("SELECT * FROM `projects` WHERE `link`='%s'",
							mysql_real_escape_string($string)
							);
			$res = mysql_query($query);
			if(mysql_num_rows($res) > 0) return array('id' => false, 'real_link' => false);
			
			//Add link
			$query = sprintf("INSERT INTO `projects` SET `link`='%s'",
							mysql_real_escape_string($string)
							);
			mysql_query($query);
			return array('id' => mysql_insert_id(), 'real_link' => $string);
			
		break;
		
		case 'edit':
			$query = sprintf("SELECT * FROM `projects` WHERE `id`='%s'",
							mysql_real_escape_string($stringId)
							);
			$res = mysql_query($query);
			$row = mysql_fetch_assoc($res);
			return array('id' => $row['id'], 'real_link' => $row['link']);			
	}
}

function createProject($params){
	db_connect();
	
	//Create 
	$params = array_merge($params, array('set' => setLink($params['project']['link'], 0)));
	
	return setProject($params);
}

function updateProject($params){
	db_connect();
	
	//Create 
	$params = array_merge($params, array('set' => setLink(null, $params['id'], 'edit')));
	return setProject($params);
}

