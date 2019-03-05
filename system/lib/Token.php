<?php 
	/**
	* For CSRF Attack
	*/
	class Token
	{
		public static function generate()
		{
			session::init();
			if(Session::get("token") == ""){
				return Session::set(array("token"=>date("H:i:s")."-".md5(uniqid(mt_rand(),true))));
			}
		}

		public static function check($token)
		{
			session::init();
			$tokenName = $_SESSION['token'];
			if(Session::exists("token") && $token === Session::get("token")){
				Session::delete("token");
				return true;
			}
			return false;
		}
	}
 ?>