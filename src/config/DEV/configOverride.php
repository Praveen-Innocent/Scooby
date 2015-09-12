<?php

class ConfigOverride {
	
 	public static function __override() {
		
		Config :: $Host = 'localhost';
   		Config :: $User = 'root';
   		Config :: $Password = '123';
		Config :: $Database = 'schoolneuron';
		
		//URLs
		Config :: $URL = 'http://localhost/Scooby/src/';
		Config :: $js_url = 'http://localhost/Scooby/src/static/js/';
		Config :: $css_url = 'http://localhost/Scooby/src/static/css/';
		Config :: $images_url = 'http://localhost/Scooby/src/';
	}
	
	
}

?>
