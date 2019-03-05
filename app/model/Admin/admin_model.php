<?php 
if(!defined("ACCESS")) die("Kill!");

class Admin_model extends Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function Order()
	{
		// $orders = $this->db->selectAll("order");
		$orders = $this->db->join("LEFT","order","services","order_serv","serv_id",null,"order_id","DESC");
		return array("order"=>$orders);
	}

	public function Dashboard()
	{
		// $orders = $this->db->join("LEFT","order","services","order_serv","serv_id",null,"order_id","DESC");
		$contact = $this->db->get("messages","","rowCount");
		$orders = $this->db->get("`order`","","rowCount");
		return array("order"=>$orders,"contact"=>$contact);
	}

	public function orderRead()
	{
		$sql = 'UPDATE `order` SET `order_read` = 1';
		$update = $this->db->update($sql);
		return $update;
	}
	public function check($table = '',$params = array())
	{
		$check = $this->db->check($table,$params);
		return $check;
	}

	public function insertTo($table,$params = '')
	{
		$insert = $this->db->insertTo($table,$params);
		return $insert;
	}

	public function MainEdit($array)
	{
		## Main Page duzelis et!
		$sql = 'UPDATE `main` SET `main_sloqan` = :sloqan, `main_text` = :text, `main_sloqan_eng` = :main_sloqan_eng, `main_text_eng` = :main_text_eng';
		$update = $this->db->update($sql,$array);
		return $update;
	}

	public function Main()
	{
		## Main Page melumatlarini cek!
		$sql = "SELECT * FROM main";
		$q = $this->db->select($sql);
		return $q;
	}

	public function Comments()
	{
		## Main Page melumatlarini cek!
		$sql = "SELECT * FROM comment";
		$q = $this->db->select($sql);
		return $q;
	}

	public function galery()
	{
		$galery = $this->db->selectAll("galery");
		return $galery;
	}

	public function GaleryEdit($params)
	{
		$get = $this->db->get("images",$params,"fetchAll");
		return $get;
	}

	public function GaleryPicDelete($PID)
	{
		$sil = $this->db->delete("images",array("img_id" => $PID));
		return $sil;
	}

	public function GaleryDelete($GID)
	{
		$sil = $this->db->delete("galery",array("galery_id" => $GID));
		return $sil;
	}

	public function GaleryImages()
	{
		$sql = "SELECT * FROM galery g LEFT JOIN images im ON g.galery_id = im.img_galery GROUP by g.galery_id";
		$galery = $this->db->select($sql,'','fetchAll');
		return $galery;

	}

	public function Services()
	{
		$sql = "SELECT * FROM services";
		$q = $this->db->select($sql,'','fetchAll');
		return $q;
	}

	public function checkService($table,$params)
	{
		# Gonderilen table-da parametr var mi?
		$check = $this->db->check($table,$params);
		return $check;
	}

	public function thatService($table,$params)
	{
		# Gonderilen table-da parametr var mi?
		$check = $this->db->get($table,$params);
		return $check;
	}

	public function ServicesEdit($params,$where)
	{
		# Gonderilen table-da parametr var mi?
		$sql = 'UPDATE services SET serv_name = :serv_name, serv_desc = :serv_desc, serv_clean_desc=:serv_clean_desc,serv_name_eng = :serv_name_eng, serv_desc_eng = :serv_desc_eng, serv_clean_desc_eng = :serv_clean_desc_eng,serv_galery=:serv_galery WHERE serv_id = :serv_id';
		$update = $this->db->update($sql,$params,$where);
		return $update;
	}

	public function ServicesAdd($params)
	{
		# Gonderilen table-da parametr var mi?
		$sql = 'INSERT INTO services(serv_name,serv_desc,serv_clean_desc,serv_img) VALUES (:serv_name,:serv_desc,:serv_clean_desc,:serv_img)';
		$insert = $this->db->insert($sql,$params);
		return $insert;
	}


	public function ServicesDelete($SID)
	{
		# code...
		$sil = $this->db->delete("services",array("serv_id" => $SID));
		return $sil;
	}

	public function Vakansiya()
	{
		# code...
		$vakansiya = $this->db->selectAll("vacancy");
		return $vakansiya;
	}

	public function VakansiyaEdit($params)
	{
		# Gonderilen ID Nomresine sahib vakansiyani getir.
		$vakansiya = $this->db->get("vacancy",$params);
		return $vakansiya;
	}

	public function VakansiyaEditAction($params,$where)
	{
		# code...
		$sql = 'UPDATE vacancy SET vacancy_name=:vacancy_name,vacancy_name_eng=:vacancy_name_eng, vacancy_text=:vacancy_text,vacancy_text_eng=:vacancy_text_eng, vacancy_clean_text=:vacancy_clean_text,vacancy_clean_text_eng=:vacancy_clean_text_eng WHERE vacancy_id=:vacancy_id';
		$update = $this->db->update($sql,$params,$where);
		return $update;
	}

	public function VakansiyaDelete($VID)
	{
		# code...
		$sil = $this->db->delete("vacancy",array("vacancy_id" => $VID));
		return $sil;
	}

	public function VakansiyaAddAction($params)
	{
		$sql = 'INSERT INTO vacancy(vacancy_name,vacancy_text,vacancy_clean_text) VALUES (:vacancy_name,:vacancy_text,:vacancy_clean_text)';
		$insert = $this->db->insert($sql,$params);
		return $insert;	
	}

	public function Join()
	{
		$join = $this->db->selectAll("joinus");
		return $join;
	}

	public function JoinEdit($params)
	{
		# code...
		$sql = 'UPDATE joinus SET join_sloqan=:join_sloqan, join_text=:join_text, join_sloqan_eng=:join_sloqan_eng,join_text_eng = :join_text_eng';
		$update = $this->db->update($sql,$params);
		return $update;

	}

	public function Contact()
	{
		$contact = $this->db->selectAll("contact");
		return $contact;
	}

	public function ContactEdit($params)
	{
		$sql = 'UPDATE contact SET contact_message_title=:contact_message_title,contact_message_title_eng=:contact_message_title_eng,contact_message = :contact_message,contact_message_eng = :contact_message_eng,contact_address=:contact_address,contact_phone=:contact_phone,contact_email = :contact_email';
		$update = $this->db->update($sql,$params);
		return $update;
	}

	public function About()
	{
		$About = $this->db->selectAll("About");
		return $About;
	}

	public function AboutEdit($params)
	{
		# code...
		$sql = 'UPDATE about SET about_text_az=:about_text_az,about_text_en=:about_text_en';
		$update = $this->db->update($sql,$params);
		return $update;

	}
}

 ?>