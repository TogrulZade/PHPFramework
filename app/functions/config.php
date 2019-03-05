<?php
define("SITE_NAME", "Site");
define("SITE_URL", "http://domenname.az/");
define("URL", "http://domenname.az/");
define("AURL", "http://domenname.az/admin/");
define("SITE_TITLE", "Welcome to Site");

$config['modul'] = array();
$config['controller'] = array('AdminHeader');
$config['function'] = array('filter_validate','input','error','filter','functions');
$config['lib'] = array('controller','database','model','load','session','AdminController','Token');

?>
