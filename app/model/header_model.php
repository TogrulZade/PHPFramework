<?php 
/**
* 
*/
class Header_model extends Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function navbar($value='')
	{
		$nav = $this->db->select("SELECT * FROM nav ORDER by no ASC",'',"fetchAll");
		return array("links"=>$nav);
	}

	public function settings()
	{
		$settings = $this->db->selectAll("settings");
		return array("settings"=>$settings);
	}
}
 ?>