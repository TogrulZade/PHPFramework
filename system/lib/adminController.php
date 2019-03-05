<?php 

class AdminController 
{
	protected $load;

	public function __construct(){
		$this->load = new Load();	
		$this->Auth();
	}

	public function Auth()
	{
		session::init();
		if(session::get('login') == ''){
			header("Location: ".URL."adminGiris");
			exit();
		}	
	}

}
 ?>