<?php

function saveContact($params){
	db_connect();
	
	$string = "<b>Name</b>: ".$params['contact']['name']."<br/>";
	$string.= "<b>Email</b>: ".$params['contact']['email']."<br/>";
	$string.= "<b>Company</b>: ".$params['contact']['company']."<br/>";
	$string.= "<b>Phone</b>: ".$params['contact']['phone']."<br/>";
	$string.= "<b>Message</b>: ".$params['contact']['message'];
	
	$query = sprintf("INSERT INTO `contacts` SET `content`='%s'",
					mysql_real_escape_string($string)
					);
	mysql_query($query);
	return true;
	
}