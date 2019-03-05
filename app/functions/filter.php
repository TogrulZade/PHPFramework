<?php 
	

	// function cut($text = '', $to){
	// 	if(strlen($text)<$to){
	// 		$to = mb_strlen($text);
	// 		$text = mb_substr($text,0,$to);
	// 	}else{
	// 		$pos  = mb_strpos($text, ' ', $to);
	// 		$text = mb_substr($text,0,$pos);
	// 	}
	// 	return $text;
	// }


	function cut($text = '', $to){
	$text = substr($text,0,$to);
	return $text;
	}


	function decode($data = ""){
		return stripslashes(htmlspecialchars_decode($data));
	}

	function text($data){
		return stripslashes($data);
	}
 ?>