<?php 
	/**
	* 
	*/
	class Join_Model extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function JoinAction($params)
		{
			$sql = 'INSERT into joinCar SET name=:name,marka=:marka,phone=:phone,tutum=:tutum,on_hisse=:on_hisse,arxa=:arxa,ic1=:ic1,ic2=:ic2,ic3=:ic3,ic4=:ic4';
			$insert = $this->db->insert($sql,$params);
			return $insert;
		}
	}
?>