<?php
		if($config['lib']){
			foreach ($config['lib'] as $key => $auto_lib) {
				include('system/lib/'.$auto_lib.'.php');
			}
		}

		if($config['controller']){
			foreach ($config['controller'] as $key => $auto_controller) {
				include('app/controller/'.$auto_controller.'.php');
			}
		}

		if($config['function']){
			foreach ($config['function'] as $key => $auto_function) {
				include('app/functions/'.$auto_function.'.php');
			}
		}

	
 ?>