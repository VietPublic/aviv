<?php
/**
 * Set error reporting
 * @return no type
 */
function setReports(){
	if(IN_DEV){
		error_reporting(E_ALL);
		ini_set('display_errors', 'On');
	}else{
		error_reporting(E_ALL);
		ini_set('display_errors', 'Off');
		ini_set('log_errors', 'On');
		ini_set('error_log', 'tmp'.DS.'logs'.DS.'errors.log');
	}
}

/**
 * heck for Magic Quotes and remove them
 * @param $val
 * @return $val
 */
function stripSlashesDeep($val){
	$val = is_array($val) ? array_map('stripSlashesDeep', $val) : stripslashes($val);
	return $val;
}

/**
 * Collect all data and put it in one array
 * @return array $params
 */
function parseParams(){
	$params = array();
	
	if(ini_get('magic_quotes_gpc') == 1){
		
		//$_POST
		if(!empty($_POST)) $params = array_merge($params, stripSlashesDeep($_POST));
		
		//$_GET
		if(!empty($_GET)) $params = array_merge($params, stripSlashesDeep($_GET));
		
		//$_FILES
		if(!empty($_FILES)) $params = array_merge($params, stripSlashesDeep($_FILES));
	
	}else{
		
		//$_POST
		if(!empty($_POST)) $params = array_merge($params, $_POST);
		
		//$_GET
		if(!empty($_GET)) $params = array_merge($params, $_GET);
		
		//$_FILES
		if(!empty($_FILES)) $params = array_merge($params, $_FILES);
		
	}
	
	return $params;
}

/**
 * Unregister all globals
 * @return none
 */
function unregisterGlobals(){
	if(ini_get('register_globals')){
		$globals = array('_SESSION', '_POST', '_GET', '_COOKIE', '_REQUEST', '_SERVER', '_ENV', '_FILES');
		foreach($globals as $global)
			foreach($global as $key => $val)
				if($val == $GLOBALS[$key]) unset($GLOBALS[$key]);
	}
}

/**
 * Go through all routes and look for next step
 * @param $routes
 * @return array
 */
function routing($routes){
	//Current URI
	$url = $_SERVER['REQUEST_URI'];
	//Prevent problems
	$url = str_replace(APP_ROOT, '', $url);
	//Remove first /
	$url = substr_replace($url,'', 0, 1);
	$params = parseParams();

	//Remove ?elements
	$url = str_replace('?'.$_SERVER['QUERY_STRING'], '', $url);
	$foundRoute = false;
	
	foreach($routes as $urls => $route){
		
		if(preg_match($route['url'], $url, $matches)){
			$params = array_merge($params, $matches);
			$foundRoute = true;
			break;	
		}
	}

	//If there is no route founded
	if(!$foundRoute){
		//This should be reported!!!
		header("Location: ".BASE_PATH);
		exit;
	}	
	
	return array('route' => $route, 'params' => $params);
}

/**
 * Get Required Files
 * @return version
 */
function gzipOutput() {
    $ua = $_SERVER['HTTP_USER_AGENT'];

    if (0 !== strpos($ua, 'Mozilla/4.0 (compatible; MSIE ') || false !== strpos($ua, 'Opera')) return false;

    $version = (float)substr($ua, 30); 
    return ($version < 6 || ($version == 6  && false === strpos($ua, 'SV1')));
}

/**
 * Hook
 * @param $routes
 * @param $default
 * @return none
 */
function hook($routes){
	
	$url = routing($routes);
	
	//Data
	$params = $url['params'];
	
	//Controller
	$controller = $url['route']['controller'];
	//Action
	$action = $url['route']['action'];
	
	//Model
	include('app'.DS.MODEL_PATH.DS.$controller.'Model.php');
	
	//Contorller
	include('app'.DS.CONTROLLER_PATH.DS.$controller.'Controller.php');
	
	//Load layout
	switch($url['route']['layout']){
		//No view
		case 'empty':
						include('app'.DS.VIEW_PATH.DS.'layout'.DS.'emptyView.php');
						break;
		//login view
		case 'login':
						include('app'.DS.VIEW_PATH.DS.'layout'.DS.'loginView.php');
						break;
		//CMS view
		case 'cms':
						include('app'.DS.VIEW_PATH.DS.'layout'.DS.'cmsView.php');
						break;
		//User view
		case 'user':
						include('app'.DS.VIEW_PATH.DS.'layout'.DS.'userView.php');
						break;
	}
	
	
}

/** Get Required Files**/ 
gzipOutput() || ob_start("ob_gzhandler");

//Call functions 
setReports();
unregisterGlobals();
hook($routes);