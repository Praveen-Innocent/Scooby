<?php

class Loading extends Controller {
	
	function index()
	{	
	
		$template = $this->loadView('loading');
		$template->render();
	}

    
}

?>
