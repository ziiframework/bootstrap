<?php

// ensure we get report on all possible php errors
error_reporting(-1);

define('YII_ENABLE_ERROR_HANDLER', false);
define('YII_DEBUG', true);
$_SERVER['SCRIPT_NAME'] = '/' . __DIR__;
$_SERVER['SCRIPT_FILENAME'] = __FILE__;

require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/../vendor/ziiframework/zii/src/Yii.php');

Yii::setAlias('@yiiunit/extensions/bootstrap', __DIR__);
Yii::setAlias('@yii/bootstrap', dirname(__DIR__) . '/src');
