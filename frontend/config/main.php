<?php
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

$root=dirname(__FILE__).'/../..';
//merging together our frontend params with our common application params
$params=array_merge(
	require($root.'/common/config/params.php'),
	require($root.'/frontend/config/params.php'),
	require($root.'/frontend/config/params-local.php')
);

return array(
	'name'=>'My Frontend Web Application',
	'basePath'=>$root.'/frontend',
	
	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>$params,
	
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes from this applicaton and our common application
	'import'=>array(
		'site.common.components.*',
		'site.common.models.*',
		'application.components.*',
		'application.models.*',
	),
	
	// define any needed application modules here
	'modules'=>array(
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// enable URLs in path-format
		'urlManager' => array(
			'urlFormat' => 'path',
			'showScriptName' => false,
			'rules' => require($root.'/frontend/config/urls.php'),
			'urlSuffix' => '/',
		),
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=testdrive',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		*/
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),
);