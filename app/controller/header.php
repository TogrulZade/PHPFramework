<?php 
if(!defined("ACCESS")) die("Kill!");
class Header extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function Header()
	{
		$Header_model = $this->load->model("header");
		// Navigation
		$navbar = $Header_model->navbar();
		// Site settings
		$settings = $Header_model->settings();
		$data = array_merge($navbar,$settings);
		$this->load->view("header",$data);
	}
}
 ?>