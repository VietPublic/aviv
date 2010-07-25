<?php

function addUser($params){
	//DB connect
	db_connect();
	
	if(isset($params['id']) && !empty($params['id'])){

		//Update
		$query = sprintf("UPDATE `users` SET `firstname`='%s', `lastname`='%s' WHERE `id`='%s'",
						mysql_real_escape_string($params['users']['firstname']),
						mysql_real_escape_string($params['users']['lastname']),
						mysql_real_escape_string($params['id'])
						);	
		mysql_query($query);
		
		//Set new password if needed
		if(isset($params['users']['password']) && !empty($params['users']['password'])){
			$query = sprintf("UPDATE `users` SET `password`=PASSWORD('%s') WHERE `id`='%s'",
							mysql_real_escape_string($params['users']['password']),
							mysql_real_escape_string($params['id'])
							);
			mysql_query($query);			
		}
		
	}else{
		
		//Insert
		$query = sprintf("INSERT INTO `users` SET `firstname`='%s', `lastname`='%s', `username`='%s', `password`=PASSWORD('%s')",
						mysql_real_escape_string($params['users']['firstname']),
						mysql_real_escape_string($params['users']['lastname']),
						mysql_real_escape_string($params['users']['username']),
						mysql_real_escape_string($params['users']['password'])
						);
		mysql_query($query);	
	}
	return true;
	
}

function getUsers(){
	//DB connect
	db_connect();
	
	$query = sprintf("SELECT * FROM `users`");
	$res = mysql_query($query);
	if(mysql_num_rows($res) <= 0) return false;
	$output = array();
	while($row = mysql_fetch_assoc($res)) $output[] = $row;
	
	return $output;
}

function getUser($userId){
	//DB connect
	db_connect();
	
	$query = sprintf("SELECT * FROM `users` WHERE `id`='%s'",
					mysql_real_escape_string($userId)
					);
	$res = mysql_query($query);
	if(mysql_num_rows($res) <= 0)return false;
	return mysql_fetch_assoc($res); 
}

function removeUser($userId){
	//DB connect
	db_connect();
	
	$query = sprintf("DELETE FROM `users` WHERE `id`='%s'",
					mysql_real_escape_string($userId)
					);
	mysql_query($query);
	return true;
}