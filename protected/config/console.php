<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Nyktralivet',
	// application components
	'components'=>array(
		
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		
		// uncomment the following to use a MySQL database
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=nyktralivet-150277.mysql.binero.se;dbname=150277-nyktralivet',
			'emulatePrepare' => true,
			'username' => '150277_aj62390',
			'password' => 'tomteverkstad',
			'charset' => 'utf8',
		),
		*/
	),
);