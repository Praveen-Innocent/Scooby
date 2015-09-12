<?php

class Main extends Controller {
	
	function index()
	{	
		$user = $this->loadModel('userModel');
		
		$this->loadHelper('url_helper');
		

		
		if($user->isLoggedIn()) 
		{	
			Url_helper::redirect("home");
		}
		else Url_helper::redirect("login");

	}


	
    
}

?>
