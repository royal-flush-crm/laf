<?php

define('APP_ROOT', dirname(__DIR__));
define('CONFIG_PATH', APP_ROOT . '/config');

defined('APP_ENV')
    || define('APP_ENV', getenv('APP_ENV') ? getenv('APP_ENV') : 'development');

$autoload = APP_ROOT . '/vendor/autoload.php';
if (file_exists($autoload)) {
    Yaf_Loader::import($autoload);
}

$app = new Yaf_Application(CONFIG_PATH . '/application.ini', APP_ENV);
$app->bootstrap()->run();
