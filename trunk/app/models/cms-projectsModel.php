<?php
function getProject($page){
	db_connect();
	
	switch($page){
		
		default: case 'zvezdara':
			$page = "zvezdara";
			
		break;
		case 'retail-park-pancevo':
			$page = "retail-park-pancevo";
			
		break;
	}
	$response = array();
	$query = sprintf("SELECT * FROM `projects` WHERE `page`='%s'",
					mysql_real_escape_string($page)
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
}

function setProject($params){
	db_connect();
	
	switch($params['p']){
		
		default: case 'zvezdara':
			$page = "zvezdara";
			
		break;
		case 'retail-park-pancevo':
			$page = "retail-park-pancevo";
			
		break;
	}
	
	//Set main elements
	$query = sprintf("UPDATE `projects` SET `title_sr`='%s', `title_en`='%s', `content_sr`='%s', `content_en`='%s' WHERE `page`='%s'",
					mysql_real_escape_string($params['project']['title_sr']),
					mysql_real_escape_string($params['project']['title_en']),
					mysql_real_escape_string($params['project']['content_sr']),
					mysql_real_escape_string($params['project']['content_en']),
					mysql_real_escape_string($page)
					); 
	mysql_query($query);
	
	$output = array();
	
	//Set additional files if set
	if(isset($params['file']['name']) && !empty($params['file']['name'])){
		$query = sprintf("SELECT * FROM `projects` WHERE `page`='%s'",
						mysql_real_escape_string($page)
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