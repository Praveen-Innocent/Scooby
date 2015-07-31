<?php
/*
 * Scooby v1
 * Author: Praveen Innocent
 */

//Start the Session
if (!isset($_SESSION)) session_start();

// Defines
define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('APP_DIR', ROOT_DIR .'application/');

require(ROOT_DIR .'system/Core.php');
//Load & Set App Enviroment
_setEnivironment();
init();

require(ROOT_DIR .'system/Loader.php');

// Define base URL
define('BASE_URL', Config::$URL);

init();
?>
