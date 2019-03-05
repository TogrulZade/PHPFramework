<?php 

/**
* 
*/
class AdminHeader extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function AdminHeader()
	{
		$this->load->view('AdminHeader');
	}
}

 ?>