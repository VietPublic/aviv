<?php
function getAllNews(){
	db_connect();
	$other = array();
	
	$query = sprintf("SELECT * FROM `news`");
	$res = mysql_query($query);
	if(mysql_num_rows($res) <= 0) return false;
	
	while($row = mysql_fetch_assoc($res)){
	
		//Other
		$query = sprintf("SELECT * FROM `news_images` WHERE `news_id`='%s'",
						mysql_real_escape_string($row['id'])
						);
		$res_other = mysql_query($query);
		$tmp = array();
		if(mysql_num_rows($res_other) > 0) while($row_other = mysql_fetch_assoc($res_other)) $tmp[] = $row_other;
			
		$row['other'] = $tmp;
		
		$other[] = $row;
	}
	return $other;
	
}