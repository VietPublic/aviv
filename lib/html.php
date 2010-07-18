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
 * Get all files inside dir small
 * @return array
 */
function getImagesFromDir(){

	$dir_array = array();
	$dirs = dir('public'.DS.'images'.DS.'banners'.DS.'small');
	while($dir = $dirs->read()){
	   if($dir!='.' and $dir!='..' and $dir!='.svn') $dir_array[] = $dir;
	}
	return $dir_array;
}

/**
 * Upload file to folder public/images/uploads
 * @param int $fileId
 * @param string $file
 * @param string $tmpFile
 * @return boolean
 */
function uploadFile($fileId, $file, $tmpFile){
	$path = UPLOAD_PATH.$fileId."-".$file;
	
	if(move_uploaded_file($tmpFile, $path)) return true;
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
		. "\n" . "From: noreplay@likvidamedel.se <noreplay@likvidamedel.se>\n"; 
		
		//Send email
		mail($email['email'], 'Contact form from website - Likvidamedel.se', $form, $header);
	
	endif;
	
	return true;
}

/**
 * Create PDF file
 * @param array $output
 * @return boolean
 */
function toPDFAndSend($output, $email){
	//Connect to db
	db_connect();
	
	$pdf = new PDF_Invoice( 'P', 'mm', 'A4' );
	$pdf->AddPage();
	//Add header
//	$pdf->Image('pdf-header.png', 0, 0, 220, 50);
//	//Add footer
//	$pdf->Image(PDF_IMAGE_PATH.'pdf-footer.png', 0, 250, 220, 40);
	
	//Set how page should look like :-)
	
	
	$fileName = date('Y-m-d_H:m:s')."-information.pdf";

	$pdf->Output(UPLOAD_PATH.$fileName);
	

	$subject = "Likvida medel: Information";
	$fileatt = UPLOAD_PATH.$fileName;
	$fileatt_name = "Information.pdf"; // Filename that will be used for the file as the attachment  
	
	$fileatt_type = "application/pdf"; // File Type
	
	
	//To PDF
	/************************************************
	 * New code for sending email
	 */
	require_once ("Mail.php");
	require_once ("Mail/mime.php");
	$text = "Application form is in attachment";

	$recipients = $email;
	$headers["To"]  = $email;
	$headers["From"] = "noreplay@likvidamedel.se";
	$headers["Subject"] = $subject;
	//$headers["Content-type"] =  'text/html; charset=utf-8';
	$crlf = "\n";
	$mime = new Mail_mime($crlf);

	$mime->setTXTBody($text);
	$mime->setHTMLBody($text);
	if($fileatt) $mime->addAttachment($fileatt, $fileatt_type);
	
	$message = $mime->get(array('text_charset' => 'UTF-8'));
	$message = $mime->get(array('html_charset' => 'UTF-8'));
	$message = $mime->get(array('head_charset' => 'UTF-8'));
	$headers = $mime->headers($headers);
	$params["host"]    = 'mail.likvidamedel.eu';
	$params["auth"]    = TRUE; // note: there are *no delimiters*
	$params["auth"]    = PLAIN; 
	$params["username"]    = 'salesprogram@likvidamedel.se';
	$params["password"]    = 'kGy7j1s';
	$params["localhost"]= 'likvidamedel.se';
	//$params["debug"]    = "True"; 

	$mail_message =& Mail::factory('smtp', $params);
	//Send copy of email to salesperson
	@$mail_message->send($_SESSION['salesprogram-user']['email'], $headers, $message);
	
	if($mail_message->send($recipients, $headers, $message)) return true;
	else return false;
}