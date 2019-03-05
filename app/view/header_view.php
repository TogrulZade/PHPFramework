<?php
$address = isset($_GET['url']) ? $_GET['url'] : null;
		$address = rtrim($address,"/");
		$address = explode("/",$address);

		$controller = isset($address[0]) ? $address[0] : null;
		$model = isset($address[1]) ? $address[1] : null;
		$param = isset($address[2]) ? $address[2] : null;
if($controller !=="" || $controller !="index"){
	$index_url = URL;
	$about_url = URL."about";
	$contact_url = URL."contact";
	$vacancy_url = URL."vacancy";
}
session::init();
$LS = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'az';
$lang = isset($_GET['lang']) ? $_GET['lang'] : $LS;
session::set(array('lang'=>$lang));
$fayl = session::get('lang');
include 'system/lang/'.$fayl.'.php';

// Settings
foreach ($data['settings'] as $key => $settings) {
	extract($settings);
	if($lang == 'az')$title = $settings['site_title'];
	elseif($lang == 'en')$title = $settings['site_title_en'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title;?></title>
	<link rel="stylesheet" href="<?php echo URL;?>include/css/animate.css">
	<link rel="stylesheet" href="<?php echo URL;?>include/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo URL;?>include/css/style.css">
	<link rel="stylesheet" href="<?php echo URL;?>include/css/btn.css">
	<link rel="stylesheet" href="<?php echo URL;?>include/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo URL;?>include/css/css.css">
	<link rel="stylesheet" href="<?php echo URL;?>include/css/short.css">
	<link rel="stylesheet" href="<?php echo URL;?>include/css/default.css">
	<link rel="stylesheet" href="<?php echo URL;?>include/css/bootstrap-clockpicker.min.css">
	<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
	<meta charset="UTF-8">

</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="min-height: 100px;display:flex;justify-content: center;flex-direction: column;align-items: center;">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header" style="margin-top:10px;">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex2-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand logo" href="<?php echo URL.'Index';?>"><img src="<?php echo URL;?>include/img/logo.png" style="width: 
			120px;height:70px;" alt="<?php echo $site_name;?>"></a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex2-collapse">

				<div style="float:right;margin-top:10px;">
				<ul style="list-style: none;">
					
					<li><span class="glyphicon glyphicon-earphone" style="display:inline-block;color: #fff;"> 055-431-88-71</span> </li>

					<li><span class="glyphicon glyphicon-earphone" style="display:inline-block;color: #fff;"> 070-431-88-71</span> </li>
				</ul>
				<ul class="nav navbar-nav  icon" style="float:left;margin-top:-10px;">
					<li><a class="" href="?lang=<?php echo ($lang == 'az') ? 'en' : 'az';?>"><?php echo ($lang == 'az') ? 'EN' : 'AZ';?></a></li>
					<li>
						<a class="icon" target="_blank" href="https://www.facebook.com/saferoad.az/">
							<i class="fa fa-facebook"></i>
						</a>
					</li>

					<li>
						<a class="icon" href="#">
							<i class="fa fa-instagram"></i>
						</a>
					</li>

					<li>
						<a href="#">
							<i class="fa fa-twitter-square"></i>
						</a>
					</li>
					<li>
						<a class="icon" href="#">
							<i class="fa fa-youtube"></i>
						</a>
					</li>

					
				</ul>
				</div>
				<div style="float:right;margin-top:10px;">
					<a href="#" class="btn btn-danger">Bizə Qoşul</a>	
				</div>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>

		<nav style="margin-top: 100px;background: #33CEE5!important;border: none;" class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
				
				</ul>
				
				<ul class="nav navbar-nav navbar-right icon">
					<?php 
					foreach ($data['links'] as $key => $a) {
						extract($a);
						if($lang == 'en')$link = $a["nav_en_name"];
						if($lang == 'az')$link = $a["nav_name"];
						echo "<li class=''><a href=".URL.$url.">$link</a></li>";
						// print_r($a);
					}
				?>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>