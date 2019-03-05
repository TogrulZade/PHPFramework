<!-- Orta Hisse -->
<!-- Main Section -->
<section id="Main" class="main" style="margin-top:120px;">
<?php
$dil = session::get('lang');
foreach ($data as $key => $main) {
	if(is_array($main)){
		extract($main);
	}
}
?>

	<div class="item item-sloqan">
		<?php echo decode(($dil == "az") ? $main_sloqan : $main_sloqan_eng);?>
	</div>
	<div class="item item-subtext">
		<?php echo decode(($dil == "az") ? $main_text : $main_text_eng);?>
	</div>
</section>

<!-- End Main Section -->
<?php 
foreach ($data['about'] as $key => $about) {
}
	extract($about);
	// print_r($data['about']);
	
	$haqqimizda = ($dil == 'az') ? $about_text_az : $about_text_en; 
 
?>
<section id="About" class="about">
	<div class="container" style="padding:0;">
		<div class="row" style="">

		<!-- Item -->
		<div class="item wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="100ms" style="position:relative;float: left;margin: 40px auto; padding-bottom: 40px;background: #fff; box-shadow: 0 0 1px 1px rgba(0,0,0,.3)">
		<div>

			<div class="text-center wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="100ms" style="margin: 40px auto;">
				<h2><strong><?php echo ABOUT;?></strong></h2>
			</div>		
		</div>
		<div class="row">
			<div class="col-md-8 text-center float-none wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="200ms" style="margin: auto;">
				<?php
				 echo decode($haqqimizda);?>
			</div>
		</div>
		</div>
		<!-- // Item -->
		</div>
		<div class="col-md-8 hidden-sm hidden-xs about-img" style="">
			<!-- <img src="include/img/6.jpg" alt=""> -->
		</div>

	</div>

	</div>
</section>

<!-- Services Section -->
<section id="Service" class="service navService">
<div class="container" style="">
	<div class="row serv mt-20" style="">
<div class="text-center"><h2 style="padding-bottom: 10px;"><strong><?php echo OUR_SERVICES;?></strong></h2></div>	
<?php
	foreach ($data['services'] as $key => $services) {
		if(is_array($services)){
			extract($services);
	?>

		<div class="col-md-4 text-justify">
			<div class="row">

				<div class="service-box wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
					<img src="<?php echo URL."include/img/".$serv_img;?>" style="text-align: center;width: 100%; height: 200px;" alt="">
					<div class="service-name text-center"><h3><?php echo $serv_name;?></h3></div>
					<div class="service-content">

						<?php
							$serv_clean_desc = mb_substr($serv_clean_desc,0,250);
							echo text($serv_clean_desc);
						?>
					</div>
				</div>

			<div class="row">
				<div class="col-md-12 mt-20 mb-20">
					<a href="<?php echo URL.'services/index/'.$serv_id;?>" class="pull-right btn btn-info">Daha ətraflı</a>
				</div>
			</div>
		</div>
		</div>
		<?php
				}
			}
?>



</div>
	<!-- </div> -->
</section>

<!-- End Services Section -->


<!-- <section class="map">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-10" style="border-bottom: 1px solid #2c3e50;">
				<h3 class="text-center">Şəhər və rayonlar arasında məsafəni ölçün!</h3>
			</div>
		</div>
	</div>
</section> -->





<?php
	foreach ($data['Contact'] as $key => $contact) {
		extract($contact);
	}
?>

<section class="vacancy" id="Vacancy">
	<div class="container p0">
		<div class="row wow fadeInDown">
			<div class="col-md-12 mt-10">
				<h2 class="text-center" style="">
					<strong><?php echo  VACANCY;?></strong>
				</h2>
			</div>
			<div class="vac col-md-12 mt-20">
				<?php
					foreach ($data['vacancy'] as $key => $vacancy) {
						if(is_array($vacancy)){
							extract($vacancy);
					}
				?>
				<div class="col-md-4 vac-item wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="100ms"" style="z-index:1000!important;margin-bottom: 20px;">
					<div class="col-md-12 vac-head text-center" style="background: #2c3e50; padding: 5px;color: #fff;">
						<h4><?php echo ($dil == "az") ? $vacancy_name : $vacancy_name_eng;?></h4>
					</div>
						<div class="col-md-12" style="background: #fff;">
							<ul style="padding: 0;margin:0;">
								<?php
									echo text(cut(($dil == "az") ? $vacancy_clean_text : $vacancy_clean_text_eng,250));
								?>
							</ul>
						</div>
					<div class="col-md-12" style="padding: 0;">
						<a href="" class="btn btn-block btn-main">Daha Ətraflı</a>
					</div>
				</div>

				<?php } ?>
				<!-- <div style="clear: both;"></div> -->
			</div>


		</div>
	</div>
</section>

<section id="Contact" class="contact">
	<div class="container">
		<div class="row" style="">
			<?php echo $data['message'];?>
			<div class="col-md-3 col-md-offset-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1000ms" style="margin-bottom: 30px;">
				<h2 class="text-right" style="font-weight: 700;text-transform: uppercase;"><?php echo CONTACT_US;?></h2>
			</div>
		</div>

		<div class="row" style="font-size: 15px;">
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="100ms" style="">
				<h3 class="text-uppercase"><strong><?php echo ($dil == "az") ? $contact_message_title : $contact_message_title_eng;?></strong></h3>
				<?php echo decode(($dil == "az") ? $contact_message : $contact_message_eng); ?>
			</div>

			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="100ms" style="">
				<h3 class="text-uppercase"><strong><?php echo COMPANY_ADDRESS;?></strong></h3>
				<?php echo decode($contact_address); ?>
			</div>
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="100ms" style="">
				<h3 class="text-uppercase"><strong><?php echo CONTACT;?></strong></h3>
				<p><span class="glyphicon glyphicon-earphone"></span>
					<?php echo decode($contact_phone); ?>
				</p>
				<p><span class="glyphicon glyphicon-envelope"></span>
				<?php echo decode($contact_email);?>
				</p>
			</div>
			<div class="col-md-12 mt-20"></div>
			<div class="col-md-7 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1100ms" style="height: 45vh; position: relative;">
				<!-- <h3>BURADA XƏRİTƏ OLACAQ!</h3> -->
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.107612849324!2d49.86460861493283!3d40.40646676418834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d51be3c9ad1%3A0x87533dbf43799689!2zMThBIMaPaG3JmWQgUsmZY8mZYmxpLCBCYWvEsSwgQXrJmXJiYXljYW4!5e0!3m2!1saz!2s!4v1469365717242" frameborder="0" style="border:0;width: 100%;height: 45vh;" allowfullscreen></iframe>
			</div>
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="100ms">
				<form action="<?php echo URL.'index';?>" method="POST" role="form">
					<legend class="text-uppercase"><strong><?php echo SEND_MESSAGE;?></strong></legend>

					<div class="form-group">
						<input type="text" name="contact_name" class="form-control" id="" placeholder="<?php echo YOUR_NAME;?>" required>
					</div>

					<div class="form-group">
						<input type="email" name="contact_email" class="form-control" id="" placeholder="<?php echo YOUR_EMAIL;?>" required>
					</div>

					<div class="form-group">
						<textarea name="contact_message" id="input" class="form-control" rows="3" required="required" placeholder="<?php echo YOUR_MESSAGE;?>"></textarea>
					</div>

					<input type="hidden" name="go" value="sendcontact">
					<?php 
					Token::generate();
					?>
					<input type="hidden" name="token" value="<?php echo Session::get("token");?>">
					<button type="submit" class="btn btn-primary"><?php echo SEND_NOW;?></button>
				</form>
			</div>



		</div>
	</div>
</section>
<!-- End Orta hisse -->