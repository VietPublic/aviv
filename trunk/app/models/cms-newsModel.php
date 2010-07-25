<?php

function addNews($params){
	//DB connect
	db_connect();
	
	if(isset($params['id']) && !empty($params['id'])){
		
		//Update
		
	}else{
		
		//Insert
		$query = sprintf("INSERT INTO `news` SET `title_sr`='%s', `title_en`='%s', `content_sr`='%s', `content_en`='%s', `main_image`='%s'",
						mysql_real_escape_string($params['news']['sr']['title']),
						mysql_real_escape_string($params['news']['en']['title']),
						mysql_real_escape_string($params['news']['sr']['content']),
						mysql_real_escape_string($params['news']['en']['content']),
						mysql_real_escape_string($params['main_image']['name'])
						);
		mysql_query($query);
		$newsId = mysql_insert_id();				
		
		//Update images
		$other = array();
		foreach($params['file']['name'] as $key => $name){
			if($params['file']['error'][$key] == 0){
				$query = sprintf("INSERT INTO `news_images` SET `image`='%s', `news_id`='%s'",
									mysql_real_escape_string($name),
									mysql_real_escape_string($newsId)
									);
				mysql_query($query);
				$other[] = array('file' => array('name' => $name, 'tmp_name' => $params['file']['tmp_name'][$key]), 'id' => mysql_insert_id());
			}
		}
		return array('news_id' => $newsId, 'other' => $other);
	}
}

function getAllNews(){
	db_connect();
	
	$query = sprintf("SELECT * FROM `news` ORDER BY `id` DESC");
	$res = mysql_query($query);
	if(mysql_num_rows($res) <= 0) return false;
	$output = array();
	
	while($row = mysql_fetch_assoc($res)) $output[] = $row;
	return $output;
}

function getNews($newsId){
	db_connect();
	$output = array();
	
	$query = sprintf("SELECT * FROM `news` WHERE `id`='%s'",
					mysql_real_escape_string($newsId)
					);
	$res = mysql_query($query);
	
	$output = array_merge($output, mysql_fetch_assoc($res));
	
	//Other
	$query = sprintf("SELECT * FROM `news_images` WHERE `news_id`='%s'",
					mysql_real_escape_string($newsId)
					);
	$res = mysql_query($query);
	$tmp = array();
	if(mysql_num_rows($res) > 0) while($row = mysql_fetch_assoc($res)) $tmp[] = $row;
	
	$output = array_merge($output, array('other' => $tmp));
	return $output;
}