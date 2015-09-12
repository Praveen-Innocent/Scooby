<?php

class Home extends Controller {
	
	function index()
	{	
		$user = $this->loadModel('userModel');
		$this->loadHelper('url_helper');
		
		if(!$user->isLoggedIn()) 
		{	
			Url_helper::redirect("login");
		}
		$template = $this->loadView('home');
		$template->render();
	}

    
}

?>
