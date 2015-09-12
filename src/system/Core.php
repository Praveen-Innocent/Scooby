<?php

function _setEnivironment() {
	$ENV_FILE = ROOT_DIR .'ENV.php';
	if(file_exists($ENV_FILE)){
	        require_once($ENV_FILE);
		} else {
	        define('ENVIRONMENT', 'PROD');
	}
}

function _init() {

if (defined('ENVIRONMENT'))
{
	_loadConfig();
	switch (ENVIRONMENT)
	{
		case 'DEV':
			error_reporting(E_ALL);
			_configOverride();
		break;
	
		case 'TESTING':
		case 'PROD':
			error_reporting(0);
		break;

		default:
			exit('The application environment is not set correctly.');
	}
}
}

function _loadConfig() {
	require(ROOT_DIR .'config/config.php');
}

function _configOverride()  {
	$configFile = ROOT_DIR .'config/'.ENVIRONMENT.'/configOverride.php';
	if(file_exists($configFile)){
        require_once($configFile);
	} 
	ConfigOverride :: __override();	

}


?>
