<?php 

/**
* Session funksiyası
*/
class Session
{
	
	function __construct()
	{

	}

	public static function init()
	{
		# Session başlat
		if(session_id() === ''){
			session_start();
		}
	}

	public static function destroy()
	{
		# Session sonladır
		session_destroy();
	}

	public static function exists($name)
	{
		return (isset($_SESSION[$name])) ? true : false;
	}

	public static function set($session_name = array()){
		$session_name = !empty($session_name) ? $session_name : '';
		if(is_array($session_name)){
			## Eger session array ile gonderilibse:
			foreach ($session_name as $key => $name) {
					$_SESSION[$key] = $name;
			}
		}
	}

	public static function get($session_name){
		$session_name = !empty($session_name) ? $session_name : '';
		if(is_array($session_name)){
			## Eger session array ile gonderilibse:
			foreach ($session_name as $key => $name) {
				if(empty($_SESSION[$key])){
					return false;
				}else{
					return $_SESSION[$key];
				}
			}
		}else{
			if(empty($_SESSION[$session_name])){
				return false;
			}else{
				return $_SESSION[$session_name];
			}
		}
		
	}
	public static function delete($name)
	{
		if(self::exists($name)){
			unset($_SESSION[$name]);
		}
	}
}

?>