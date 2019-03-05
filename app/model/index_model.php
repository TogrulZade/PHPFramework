<?php 
/**
* 
*/
class index_model extends Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$sql = "SELECT * FROM sloqan WHERE `page` = :page";
		$q = $tis->db->select($sql,array(":page"=>'main'));
		$row = $q->execute();
		return $row;
	}

	public function main($page = '')
	{
		$sql = "SELECT * FROM `main`";
		$row = $this->db->select($sql);
		return array('main'=>$row);
	}

	public function services()
	{
		$sql = 'SELECT * FROM services';
		$services = $this->db->select($sql,'','fetchAll');
		return array("services"=>$services);
	}

	public function vacancy()
	{
		$sql = 'SELECT * FROM vacancy';
		$vacancy = $this->db->select($sql,'','fetchAll');
		return array("vacancy"=>$vacancy);
	}

	public function joinUs($page = '')
	{
		$sql = "SELECT * FROM `joinus`";
		$row = $this->db->select($sql);
		return array("joinUs"=>$row);
	}

	public function Contact($page = '')
	{
		$row = $this->db->selectAll("contact");
		return array("Contact"=>$row);
	}

	public function About($page = '')
	{
		$row = $this->db->selectAll("about");
		return array("about"=>$row);
	}

	public function contactMessage($array)
	{
		$sql = "INSERT INTO messages (cname,cemail,cmessage) VALUES(:cname,:cemail,:cmessage)";

		$send = $this->db->insert($sql,$array);
		return $send;
	}

	public function checkfollow($params)
	{
		$follow = $this->db->check('follows',$params);
		return $follow;
	}

	public function follow($params)
	{
		$sql = 'INSERT into follows 
		SET email = :email,`date`=:date, `time` = :time';
		$follow = $this->db->insert($sql,$params);
		return $follow;
	}


	public function cList()
	{
		$sql = 'SELECT * FROM messages';
		$List = $this->db->select($sql,'','fetchAll');
		return $List;
	}
	public function nav(){
		$sql = "SELECT * FROM nav";
		$sth = $this->db->select("SELECT * FROM nav");
		return $sth;
	}

	public function adduser(){
		$login = "Login";
		$params = array(":user"=>$login,':ad'=>'Rasim',':pass'=>'159789');
		$k = $this->db->insert("users",$params);
		echo $k;
	}

	public function slogan()
	{
		$sql = "SELECT * FROM slogan";
		$row = $this->db->select($sql);
		return $row;
	}

}
 ?>