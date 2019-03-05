<?php
if(session_status() == PHP_SESSION_NONE){
	session_start();
}
function set_session($session_name = array()){
	foreach ($session_name as $key => $name) {
		if(isset($_SESSION[$key]) == ''){
			$_SESSION[$key] = $name;	
		}
		return $_SESSION[$key];
	}
}

function session($session_name = ''){
	if(empty($_SESSION[$session_name])){
		return $_SESSION[$session_name];
	}else{
		return false;
	}
}
?>