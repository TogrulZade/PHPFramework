<?php 
class nav_model extends Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function navbar($value='')
	{
		$nav = $this->db->select("SELECT * FROM nav ORDER by no ASC");
		return $nav; 
	}
}
 ?>