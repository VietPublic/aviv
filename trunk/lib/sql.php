<?php
/*
 * Connection to database
 * @return (bool) resource
 */
function db_connect() {
	$con = @mysql_connect(DB_HOST, DB_USER, DB_PASS);
	if(!$con){
		return false;
	}else{
		if(!mysql_select_db(DB_NAME, $con)){
			return false;
		}
		mysql_query("SET NAMES 'UTF-8'");
		mysql_query("SET CHARACTER_SET_CLIENT=UTF-8");
		mysql_query("SET CHARACTER_SET_RESULTS=UTF-8");
		mysql_query("SET CHARACTER_SET_CONNECTION=UTF-8");
		return $con;
	}
}

	
/**
 * turns mysql resource into array
 * @param resource $result
 * @return array 
 */
  function result_to_array($result)
{
  $result_array = array();
	for ($i=0; $row = @mysql_fetch_array($result) ; $i++)
	{
	   $result_array[$i] = $row; 
	}
	
	return $result_array;
}

function tokenGenerator($minlength=10, $maxlength=15, $useupper=false, $usespecial=false, $usenumbers=true){
	$key = '';
	$charset = "abcdefghijklmnopqrstuvwxyz";
	if ($useupper) $charset .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	if ($usenumbers) $charset .= "0123456789";
	if ($usespecial) $charset .= "~@#$%^*()_+-={}|]["; // Note: using all special characters this reads: "~!@#$%^&*()_+`-={}|\\]?[\":;'><,./";
	if ($minlength > $maxlength) $length = mt_rand ($maxlength, $minlength);
	else $length = mt_rand ($minlength, $maxlength);
	for ($i=0; $i<$length; $i++) $key .= $charset[(mt_rand(0,(strlen($charset)-1)))];
	return $key;
}

/**
 * Return current language
 * @param string $lng
 * @return array
 */
function getCurrentLanguage($lng=''){
	//Connect database
	db_connect();
	
	if(empty($lng)){
		//No language has been selected by user so we use current from system
		$query = sprintf("SELECT * FROM `languages` WHERE `status`=1 AND `primary`=1");
	}else{
		//Langauge has been selected so we put that one as current
		$query = sprintf("SELECT * FROM `languages` WHERE `status`=1 AND `icon`='%s'",
						mysql_real_escape_string($lng.'.png')
						);
	}

	$res = mysql_query($query);
	if(mysql_num_rows($res) <= 0) return false;
	return mysql_fetch_assoc($res);
}

function getLatestNews(){
	db_connect();
	
	$query = sprintf("SELECT * FROM `news` 
						ORDER BY `id` DESC LIMIT 0, 2");
	$res = mysql_query($query);
	
	if(mysql_num_rows($res) <= 0) return false;
	$output = array();
	
	while($row = mysql_fetch_assoc($res)) $output[] = $row;
	return $output;
	
}

function getSelectedPage($page){
	db_connect();
	
	$query = sprintf("SELECT * FROM `pages` WHERE `page`='%s'",
					mysql_real_escape_string($page)
					);
	$res = mysql_query($query);
	if(mysql_num_rows($res) <= 0) return false;
	
	$row = mysql_fetch_assoc($res);
	
	//Other
	$query = sprintf("SELECT * FROM `pages_images` WHERE `page_id`='%s'",
					mysql_real_escape_string($row['id'])
					);
	$res_other = mysql_query($query);
	$other = array();
	if(mysql_num_rows($res_other) > 0)
		while($row_other = mysql_fetch_assoc($res_other)) $other[] = $row_other;
		
	$row['other'] = $other;
	return $row;
}

function getFrontProjects(){
	db_connect();
	
	$query = sprintf("SELECT * FROM `projects`");
	
	$res = mysql_query($query);
	if(mysql_num_rows($res) <= 0) return false;
	
	$output = array();
	
	while($row = mysql_fetch_assoc($res)) $output[] = $row;
	return $output;
}

function getSelectedProject($projectLink){
	db_connect();
	
	$query = sprintf("SELECT * FROM `projects` WHERE `link`='%s'",
					mysql_real_escape_string($projectLink)
					);
	$res = mysql_query($query);
	if(mysql_num_rows($res) <= 0) return false;
	
	$row = mysql_fetch_assoc($res);
	
	//Other
	$query = sprintf("SELECT * FROM `projects_images` WHERE `project_id`='%s' ORDER BY `image` ASC",
					mysql_real_escape_string($row['id'])
					);
	$res_other = mysql_query($query);
	$other = array();
	if(mysql_num_rows($res_other) > 0)
		while($row_other = mysql_fetch_assoc($res_other)) $other[] = $row_other;
		
	$row['other'] = $other;
	return $row;
}


