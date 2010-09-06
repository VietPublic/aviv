<?php
//Site
define('SITE', 'http://www.avivarlon.rs/dev');//http://localhost

//App root
define('APP_ROOT', '');//

define('IN_DEV', false);

//DB params
define('DB_HOST', 'localhost');
define('DB_NAME', 'avivarlon');
define('DB_USER', 'avivarlon');
define('DB_PASS', 'd83ErTQ3');

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

//How many elements per page will be retrived from DB
define('PER_PAGE', 2);
//How many links will be visible on navigation bar
define('SHOW_PER_PAGE', 2);

