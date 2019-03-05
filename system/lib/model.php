<?php 
class Model
{
	protected $db = array();
	protected $filter_validate;	
	public function __construct()
	{
		$dsn = 'mysql:dbname=mydb;host=localhost';
		$user = 'root';
		$password = '';
		try {
			$this->db = new Database($dsn,$user,$password);
		} catch (Exception $e) {
			echo "Baza Ilə əlaqə qurula bilmədi.";
			exit();
		}
	}
	// public function nav(){
	// 	$sql = "SELECT * FROM nav";
	// 	$sth = $this->db->select("SELECT * FROM nav");
	// 	return $sth;
	// }
}
 ?>