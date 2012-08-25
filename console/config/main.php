<?php
// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.

$root=dirname(__FILE__).'/../..';
$params=array_merge(
	require($root.'/common/config/params.php'),
	require($root.'/console/config/params.php'),
	require($root.'/console/config/params-local.php')
);


return array(
	'name'=>'My Console Application',
	'basePath'=>$root.'/console',
	'params'=>$params,
	// preloading 'log' component
	'preload'=>array('log'),
	
	'import'=>array(
		'site.common.components.*',
        'site.common.models.*',
        'application.components.*',
		'application.models.*',
	),
	
	'commandMap'=>array(
		'migrate'=>array(
	            'class'=>'system.cli.commands.MigrateCommand',
	            'migrationPath'=>'site.common.migrations',
	            'migrationTable'=>'tbl_migration',
	     ),
	),
	
	// application components
	'components'=>array(
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		
		'urlManager' => array(
			'urlFormat' => 'path',
			'showScriptName' => false,
            'rules' => require($root.'/frontend/config/urls.php'),
            'baseUrl' => '',
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
		
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),
	),
);

