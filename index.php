<?php

// change the following paths if necessary
$yii = dirname(__FILE__) . '/vendor/yiisoft/yii/framework/yii.php';
$config = dirname(__FILE__) . '/protect/config/main.php';

// Select application mode:
if (
    $_SERVER['REMOTE_ADDR'] === '127.0.0.1' || $_SERVER['REMOTE_ADDR'] === '192.168.10.64' || $_SERVER['REMOTE_ADDR'] === '192.168.10.123'
) {
    $mode = true;
    $trace_level = 4;
} else {
    $mode = false;
    $trace_level = 0;
}

defined('YII_DEBUG') or define('YII_DEBUG', $mode);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', $trace_level);

require_once($yii);
Yii::createWebApplication($config)->run();
