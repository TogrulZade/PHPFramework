<?php
class URL
{
	public function __construct()
	{
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url,"/");
		$url = explode("/",$url);

		$controller = isset($url[0]) ? $url[0] : null;
		$model = isset($url[1]) ? $url[1] : null;
		$param = isset($url[2]) ? $url[2] : null;

		
		if(file_exists("app/controller/".$controller.".php"))
		{
			include "app/controller/".$controller.".php";
			if(!class_exists($controller)){
				echo "Class Tapilmadi";
			}else{
				$c = new $controller;
				if(isset($model)){
					if(method_exists($c,$model)){
						if(isset($param)){
							$c->$model($param);
						}elseif(isset($model)){
							$c->$model();
						}
					}else{
						## Modul tapilmadi;
						redirect(URL.$controller);
					}
				}else{
					$c->Index();
				}
		}
		}else{
			include "app/controller/index.php";
			$c = new Index();
			$c->Index();
		}
	}
}
?>