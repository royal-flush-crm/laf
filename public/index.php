<?php

define('APP_ROOT', dirname(__DIR__));

$app = new Yaf\Application(APP_ROOT.'/config/application.ini');
try {
    $app->bootstrap()->run();
} catch (Yaf\Exception\LoadFailed\Action $e) {
    echo '方法输入错误';
    exit();
} catch (Yaf\Exception\LoadFailed\Controller $e) {
    echo '控制器输入错误';
    exit();
}

