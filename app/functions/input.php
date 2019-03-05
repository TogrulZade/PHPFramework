<?php 	
/**
* 
*/
class input
{

public $input;
public function p($value='', $mode = true)
{
	if($mode == true){
		return htmlspecialchars($_POST[$value]);
	}else{
		return strip_tags($_POST[$value]); 
	}
}

public function g($value='', $mode = true)
{
	if($mode == true){
		return htmlspecialchars(addslashes(strip_tags($_GET[$value])));
	}else{
		return strip_tags(addslashes($_GET[$value])); 
	}
}

}

 ?>