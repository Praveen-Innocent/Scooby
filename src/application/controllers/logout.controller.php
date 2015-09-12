<?php

class Logout extends Controller {
	
	function index()
	{	
		$this->loadHelper('url_helper');
		session_start(); 
		session_unset();
		session_destroy();
		Url_helper::redirect("login");
	}

    
}

?>
