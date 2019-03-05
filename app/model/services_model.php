<?php 

/**
* 
*/
class services_model extends Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function services($par=false)
	{
		$service = $this->db->select("SELECT * FROM services WHERE serv_id=:id",array("id"=>$par));				
		$comment = $this->db->select("SELECT * FROM comment",array("comment_service"=>$par),"fetchAll");
		$images = $this->db->select("SELECT * FROM images WHERE img_galery=:img_galery",array("img_galery"=>$service['serv_galery']),'fetchAll');

		if($service['serv_id'] > 0){
			$data = array("service"=>$service,"comment"=>$comment,"images"=>$images);
			return $data;
		}else{
			// print_r($service);
		}
	}

	public function comment($par=false)
	{
		$comment = $this->db->select("SELECT * FROM comment",array("comment_service"=>$par));
		return $comment;
	}

	public function order($array)
	{
		$sql = "INSERT INTO `order` (`order_name`,`sifarisci`,`order_company`,`order_begin_date`,`order_phone`,`order_email`,`order_end_date`,`order_begin_time`,`order_end_time`,`order_now_time`,`order_now_date`,`order_serv`,`order_now_clock`) VALUES (:order_name,:sifarisci,:order_company,:order_begin_date,:order_phone,:order_email,:order_end_date,:order_begin_time,:order_end_time,:order_now_time,:order_now_date,:order_serv,:order_now_clock)";

		$insert = $this->db->insert($sql,$array);
		return $insert;
	}

	public function check($table,$params)
	{
		$check = $this->db->check($table,$params);
		return $check;
	}
	public function comment_slide($sid,$to=1)
	{
		$step  = 1;
		if($to == 0)$to=1;
		$from = $to - $step;

		$sql = "SELECT * FROM comment WHERE comment_service:=sid ORDER by comment_id LIMIT $from,$to";
		$q = $this->db->select($sql,array("cid"=>$cid,"page"=>$page));
		return $q;
	}
}

 ?>