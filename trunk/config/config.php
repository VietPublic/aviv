<?php
//Site
define('SITE', 'http://aviv');//http://localhost

//App root
define('APP_ROOT', '');//

define('IN_DEV', true);

//DB params
define('DB_HOST', 'localhost');
define('DB_NAME', 'aviv');
define('DB_USER', 'root');
define('DB_PASS', '');

define('BASE_PATH', SITE.DS.APP_ROOT);

//Name default MVC
define('CONTROLLER_PATH', 'controllers');
define('MODEL_PATH', 'models');
define('VIEW_PATH', 'views');

//Public paths
define('IMAGE_PATH', BASE_PATH.'public'.DS.'images'.DS);
define('CSS_PATH', BASE_PATH.'public'.DS.'css'.DS);
define('JS_PATH', BASE_PATH.'public'.DS.'js'.DS);
define('UPLOAD_PATH', 'public'.DS.'images'.DS.'uploads'.DS);

define('LANG_PATH', 'lang'.DS);