<?php

class Load
{
	
	public function __construct()
	{

	}

	public function set($key=false,$value=false)
	{
		$value = array($key,$value);
		return $value;
	}

	public function view($filename,$data = '', $default = false){
		include('app/view/'.$filename."_view.php");
	}

	public function model($filename,$params = false){
		include('app/model/'.$filename."_model.php");
		// $filename = $filename.'_model';
		$filename = explode('/',$filename);
			foreach ($filename as $key => $model) {}
		$class = $model."_model";
		return new $class();
	}

	public function func($filename,$data = false){
		include('app/functions/'.$filename.".php");
	}

	public function file($filename,$data = false){
		include($filename.".php");
	}
}
?>