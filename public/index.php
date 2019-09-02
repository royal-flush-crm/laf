<?php

define('APP_ROOT', dirname(__DIR__));

$app = new Yaf\Application(APP_ROOT.'/config/application.ini');
$app->bootstrap()->run();
