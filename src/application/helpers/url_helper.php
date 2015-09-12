<?php

class Url_helper {

	
	
	function segment($seg)
	{
		if(!is_int($seg)) return false;
		
		$parts = explode('/', $_SERVER['REQUEST_URI']);
	    return isset($parts[$seg]) ? $parts[$seg] : false;
	}

	function redirect($location) {
		header("Location: $location");
		//js fallback
		print '<script language="javascript">window.location="'.$location.'"</script>';	
	}
	
}

?>