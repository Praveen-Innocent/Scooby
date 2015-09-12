<?php

class Login extends Controller {
	
	function index()
	{	
		$user = $this->loadModel('userModel');
		$this->loadPlugin('strings');
		$this->loadHelper('url_helper');
		$template = $this->loadView('login');

		$template->set('msg','');
		if($user->isLoggedIn()) 
		{	
			Url_helper::redirect("home");
		}

		if(isset($_POST['login']))
		{
			$username=$_POST['email'];
			$password =$_POST['pass'];
			
			$res=$user->Login($username,$password);
			if(!$res){
				
				$template->set('msg',"Authentication Failed!");
				
				}
				else  {
					 	$token = randomString(32);
						$url = "loading"; 
						Url_helper::redirect($url);
				}
					 
		}

		
		$template->render();
	}

    
}

?>
