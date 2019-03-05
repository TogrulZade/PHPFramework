<?php 

class Controller
{
	public $site_name = 'Site name';
	public $site_title = 'Welcome to Site';
	public $site_address = 'http://sitename.az';
	protected $load;
	public $value;
	protected $filter_validate;

	public $config = array();


	public function __construct($config = array())
	{
		
		$this->load = new Load();
	}

	public function error(){
		// header("location:".$this->site_address);
		echo "Error";
	}

	public function xss($value=false)		
	{
		if($value){
			return htmlspecialchars($value);	
		}else{
			return false;
		}
	}

}
 ?>