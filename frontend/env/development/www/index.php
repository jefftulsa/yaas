<?php

defined('YII_DEBUG') or define('YII_DEBUG',true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

$root=dirname(__FILE__).'/..';
$common=$root.'/../common';
$config=$root.'/config/main-local.php';

require_once($common.'/lib/yii/framework/yii.php');

Yii::createWebApplication($config)->run();
