<?php 

function redirect($url,$time = 0,$message = ''){
	if($time == 0){
		header("Location:".$url);
	}else{
		header("Refresh: {$time};url={$url}");
		echo $message;
	}
}

?>