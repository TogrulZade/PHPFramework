<?php

/**
* 
*/
class Nav extends Controller 
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function Index($value='')
	{
		$this->navbar();		
	}

	public function navbar($value='')
	{
		$nav_model = $this->load->model('nav');
		$navbar = $nav_model->navbar();
		$this->load->view("nav",$navbar);
	}
}


?>