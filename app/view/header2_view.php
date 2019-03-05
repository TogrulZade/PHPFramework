<?php
session::init();
$LS = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'az';
$lang = isset($_GET['lang']) ? $_GET['lang'] : $LS;
session::set(array('lang'=>$lang));
$fayl = session::get('lang');
include 'system/lang/'.$fayl.'.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo SITE_TITLE;?></title>
	<link rel="stylesheet" href="<?php echo URL;?>include/css/animate.css">
	<link rel="stylesheet" href="<?php echo URL;?>include/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo URL;?>include/css/style.css">
	<link rel="stylesheet" href="<?php echo URL;?>include/css/btn.css">
	<link rel="stylesheet" href="<?php echo URL;?>include/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo URL;?>include/css/short.css">
	<link rel="stylesheet" href="<?php echo URL;?>include/css/default.css">
	<link rel="stylesheet" href="<?php echo URL;?>include/css/bootstrap-clockpicker.min.css">
	<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
	<meta charset="UTF-8">

</head>
<body>
	<nav>
		<div class="container">
			<div class="innerNav">
				<div class="logo"><a href="<?php echo URL;?>">
					<?php echo SITE_NAME;?></a>
				</div>
					<div class="menu">
						<ul class="maxMenu">
							<?php
								foreach ($data as $key => $value) {
									if($lang == 'en'){
											$link = $value['nav_en_name'];}else{$link = $value['nav_name'];
										}
										if($value["nav_id"] == 1){
											$onPage = 'onPage';
										?>
										<li><a class="<?php echo $onPage." ".$value["active"];?>" href="#"><?php echo $link;?></a></li>
										<?php
											}else{
										?>
										<li><a class="<?php echo $value["active"]; ?>" href="#"><?php echo $link;?></a></li>
											<?php
										}
									}
								?>
							<?php if($_SESSION['lang'] == 'en'){?><li><a href="?lang=az">AZ</a></li>
							<?php }elseif($_SESSION['lang'] == 'az'){?><li><a href="?lang=en"><?php echo "EN";} ?></a></li>
						</ul>
						<ul class="pull-right">
							<li class=""><a style="font-size: 22px!important;" href=""><span class="fa fa-facebook-square"></span></a></li>
							<li class=""><a style="font-size: 22px!important;" href=""><i class="fa fa-twitter-square"></i></a></li>
							<li class=""><a style="font-size: 22px!important;" href=""><i class="fa fa-instagram"></i></a></li>
						</ul>
						<ul style="float:right!important;" class="minMenu"><li><a class="" href="#">Menu</a></li></ul>
					</div>
			</div>
		</div>
	</nav>
