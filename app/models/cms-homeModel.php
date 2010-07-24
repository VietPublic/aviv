<?php

function getUser($params, $session){
	//Connect db
	db_connect();
	
	//If session
	if($session){
		
		$query = sprintf("SELECT * FROM `users` WHERE `id`='%s'",
						mysql_real_escape_string($params['id'])
						);
		$res = mysql_query($query);
		if(mysql_num_rows($res) <= 0) return false;
		
		return mysql_fetch_assoc($res);
	}else{
		$query = sprintf("SELECT * FROM `users` WHERE `username`='%s' AND `password`=PASSWORD('%s')",
						mysql_real_escape_string($params['login']['username']),
						mysql_real_escape_string($params['login']['password'])
						);
			
		$res = mysql_query($query);
		if(mysql_num_rows($res) <= 0) return false;
		
		return mysql_fetch_assoc($res);
		
	}
}