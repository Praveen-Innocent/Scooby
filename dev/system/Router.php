<?php

Route();
function Route()
{

    
    // Set our defaults
    $controller = Config::$defaultController;
    $action = 'index';
    $url = '';
	
	// Get request url and script url
	$request_url = (isset($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : '';
	$script_url  = (isset($_SERVER['PHP_SELF'])) ? $_SERVER['PHP_SELF'] : '';
    	
	// Get our url path and trim the / of the left and the right
	if($request_url != $script_url) $url = trim(preg_replace('/'. str_replace('/', '\/', str_replace('index.php', '', $script_url)) .'/', '', $request_url, 1), '/');
    
	// Split the url into segments
	$segments = explode('/', $url);
	// Do our default checks
	if(isset($segments[1]) && $segments[1] != '') $controller = $segments[1];
	if(isset($segments[2]) && $segments[2] != '') $action = $segments[2];

	// Get our controller file
    $path = APP_DIR . 'controllers/' . $controller . '.controller.php';
	if(file_exists($path)){
        require_once($path);
	} else {
        $controller = Config::$errorController;
        require_once(APP_DIR . 'controllers/' . $controller . '.controller.php');
	}
    
    // Check the action exists
    if(!method_exists($controller, $action)){
        $controller =  Config::$errorController;
        require_once(APP_DIR . 'controllers/' . $controller . '.controller.php');
        $action = 'index';
    }
	
	// Create object and call method
	$obj = new $controller;
    die(call_user_func_array(array($obj, $action), array_slice($segments, 2)));
}

?>
