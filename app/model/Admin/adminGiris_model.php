<?php 

/**
* 
*/
class adminGiris_Model extends Model
{
	
	public function __construct()
	{
		parent::__construct();
	}


	public function check($array = '')
	{
		$sql = "SELECT * FROM admin WHERE admin_login = :login && admin_password = :password";
		$check = $this->db->select($sql,$array);
		return $check;
	}

}



 ?>