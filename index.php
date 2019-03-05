<?php 
session_start();
define("ACCESS","true");

include("app/functions/config.php");
include("system/driver.php");
require('app/controller/header.php');
require('system/url.php');

$url = new URL();
?>