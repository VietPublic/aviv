<?php
function getContacts(){
	//DB
	db_connect();
	
	$query = sprintf("SELECT * FROM `contacts` ORDER BY `id` DESC");
	$res = mysql_query($query);
	if(mysql_num_rows($res) <= 0) return false;
	$output = array();
	
	while($row = mysql_fetch_assoc($res)) $output[] = $row;
	
	return $output;
}

function deleteContact($params){
	//DB
	db_connect();
	
	$query = sprintf("DELETE FROM `contacts` WHERE `id`='%s'",
					mysql_real_escape_string($params['id'])
					);
	mysql_query($query);
	return true;
}