<?php
/**
 * Print path for js file
 * @param $file
 * @return String
 */
function js($file){
	return "<script type='text/javascript' src='".JS_PATH.$file."'></script>\n";
}
/**
 * Print path for css file
 * @param unknown_type $file
 * @return String
 */
function css($file){
	return "<link type='text/css' rel='stylesheet' href='".CSS_PATH.$file."'></link>\n";
}

/**
 * Upload file to folder public/images/uploads
 * @param int $fileId
 * @param string $file
 * @param string $tmpFile
 * @return boolean
 */
function uploadFile($file, $type, $id, $w, $h){
	
	$allOk = true;
	
	$path = UPLOAD_PATH.$type.DS.$id."-".$file['name'];

	//Upload file
	if(!resizeImage($w, $h, UPLOAD_PATH.$type.DS, $file, $id)) $allOk = false;

	if(!move_uploaded_file($file['tmp_name'], $path)) $allOk = false;
	
	if($allOk) return true;
	else return false;
}

/**
 * Remove file from folder public/images/uploads
 * @param $fileName
 * @return boolean
 */
function removeFile($fileName){
	$path = UPLOAD_PATH.$fileName;

	@unlink($path);
	return true;
}

/**
 * Sent email
 * @param string $form
 * @param string $email
 * @return boolean
 */
function sendEmail($form, $email){
	
	if(isset($email['email'])):
		$header = 'MIME-Version: 1.0' . "\n" . 'Content-type: text/plain; charset=UTF-8'
		. "\n" . "From: noreplay@aviv.com <noreplay@aviv.com>\n"; 
		
		//Send email
		mail($email['email'], 'Contact form from website - Aviv.com', $form, $header);
	
	endif;
	
	return true;
}

/**
 * Resize image
 * @param String $originalImage
 * @param int $toWidth
 * @param int $toHeight
 * @return String
 */
function resizeImage($width, $height, $path, $image, $userId){

	//Check extension
	$allowedMimes = array('image/jpg', 'image/jpeg', 'image/png', 'image/gif');
	
	if($image['error'] == 0){

		$imageInfo = getimagesize($image['tmp_name']);

		if(!isset($imageInfo['mime']) || !in_array($imageInfo['mime'], $allowedMimes)) return false;
		
		//Get width and heigh
		list($w, $h) = getimagesize($image['tmp_name']);
		
		$xscale = $w / $width;
    	$yscale = $h / $height;
		
		 if ($yscale > $xscale){
	        $new_width = round($w * (1/$yscale));
	        $new_height = round($h * (1/$yscale));
	    }
	    else {
	        $new_width = round($w * (1/$xscale));
	        $new_height = round($h * (1/$xscale));
	    }
    	
		$tmp = imagecreatetruecolor($new_width, $new_height);
		
		$filename = $path.'thumb'.DS.$userId."-".$image['name'];
		
		switch($imageInfo['mime']){
			
			case 'image/jpg': case 'image/jpeg': //JPG or JPEG
				
				$src = imagecreatefromjpeg($image['tmp_name']);
				
				imagecopyresampled($tmp, $src, 0, 0, 0, 0, $new_width, $new_height, $w, $h);
				imagejpeg($tmp, $filename);
			break;
			case 'image/png': //PNG
				
				$src = imagecreatefrompng($image['tmp_name']);
				
				imagecopyresampled($tmp, $src, 0, 0, 0, 0, $new_width, $new_height, $w, $h);
				imagepng($tmp, $filename);
			break;
			case 'image/gif': //GIF
				
				$src = imagecreatefromgif($image['tmp_name']);
				
				imagecopyresampled($tmp, $src, 0, 0, 0, 0, $new_width, $new_height, $w, $h);
				imagegif($tmp, $filename);
			break;
			
			default: //Error 
			break;
		}
		
		imagedestroy($src);
		imagedestroy($tmp);
		
	}else return false;
	
	return true;
}
