<?php

defined('YII_DEBUG') or define('YII_DEBUG',false);

$root=dirname(__FILE__).'/..';
$common=$root.'/../common';
$config=$root.'/config/main.php';

require_once($common.'/lib/yii/framework/yii.php');

Yii::createWebApplication($config)->run();
