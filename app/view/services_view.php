<?php
$dil = session::get("lang");
extract($data['service']);
?>
<section class="">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12" style="margin-top: 150px;">
				<h3><?php echo ($dil == "az") ? $serv_name : $serv_name_eng;?></h3>
			</div>

			<div class="col-md-6 text-justify">
				<div id="cars" style="width: 100%; height: 50vh;" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<?php
							foreach ($data["images"] as $key_img => $img) {
								if($key_img == 0){
									$active = 'active';
								}else{
									$active ='';
							}
						?>
						<li data-target="#cars" data-slide-to="<?php echo $key_img;?>" class="<?php echo $active;?>"></li>
						<?php 
						}
						?>
					</ol>
	<div class="carousel-inner">
	
<?php
foreach ($data["images"] as $key_img => $img) {
	if($key_img == 0){
		$active = 'active';
	}else{
		$active ='';
	}
?>
		<div class="item <?php echo $active;?>">
			<img data-src="" src="<?php echo URL.'include/img/'.$img['img_url'];?>" style="width: 100%; height: 50vh;">
			<div class="container">
				<div class="carousel-caption">

				</div>
			</div>
		</div>
<?php
}

?>
		
	</div>
	<a class="left carousel-control" href="#cars" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<a class="right carousel-control" href="#cars" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>

		<div class="service-description" style="margin-top:20px;">
			<p>
				<?php echo decode(($dil == "az") ? $serv_desc : $serv_desc_eng);?>
			</p>
		</div>
	</div>

	<div class="col-md-3" style="margin-bottom: 20px;">
		<div class="sifaris-form" style="border: 1px dashed #444; border-radius: 4px;">
			
		<div class="form-header" style="margin-bottom: 10px;font-size: 17px;font-weight: 600;display: flex; justify-content: center; align-items: center; width: 100%;height: 50px;background: #444; color: #fff;">Sifariş Formu</div>
			<form action="" method="POST" role="form" style="padding: 12px;">
			
			<?php 
				if(isset($data['error']) and !is_array($data['error'])){
					echo "<div class='alert alert-danger'>".$data['error']."</div>";
				}elseif(isset($data['success'])){
					echo "<div class='alert alert-success'>".$data['success']."</div>";
				}
			?>

			<div class="btn-group" style="margin-bottom: 10px;" data-toggle="buttons">
			  <label class="btn btn-info fiziki active">
			    <input type="radio" autocomplete="off" id="fiziki" checked> Fiziki şəxs
			  </label>
			  <label class="btn btn-info huquqi">
			    <input type="radio" autocomplete="off" value="Huq" id="huquqi"> Hüquqi şəxs
			  </label>
			</div>
				<div class="form-group company hidden">
					<label for="">Müəssisənin adı</label>
					<input type="text" class="form-control" name="company" id="" placeholder="Müəssisənin adı" value="">
				</div>

				<div class="form-group">
					<label for="">Əlaqəli şəxsin adı,soyadı</label>
					<input type="text" class="form-control" name="name" id="" placeholder="Adınız Soyadınız" >
				</div>

				<div class="form-group">
					<label for="">Neçə nəfər üçün?</label>
					<input type="number" class="form-control" name="nefer" id="" placeholder="Misal üçün, 20" >
				</div>

				<div class="form-group">
					<label for="">Sifarişin başlama tarixi</label>
					<input type="date" name="begin_date" id="begin-date-sifaris" class="form-control datepicker" value=""  title="">
				</div>

				<div class="form-group">
					<label for="">Başlama saatı</label>
				
					<div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
					    <input type="text" class="form-control" name="begin_time" id="" value="">
					    <span class="input-group-addon">
					        <span class="glyphicon glyphicon-time"></span>
					    </span>
					</div>
				</div>
				<div class="form-group">
					<label for="">Sifarişin bitmə tarixi</label>
					<input type="date" name="end_date" id="end-date-sifaris" class="form-control datepicker" value="" title="" >
				</div>

				<div class="form-group">
					<label for="">Bitmə saatı</label>
					<div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
					    <input type="text" class="form-control" name="end_time" id="" value="" >
					    <span class="input-group-addon">
					        <span class="glyphicon glyphicon-time"></span>
					    </span>
					</div>
				</div>

				<div class="form-group">
					<label for="">Əlaqə nömrəsi</label>
					<input type="text" name="phone" class="form-control" id="" placeholder="(0xx) xxx xx xx" >
				</div>

				<div class="form-group">
					<label for="">Email</label>
					<div class="input-group">
					<span class="input-group-addon">
					   <span class="">@</span>
					 </span>

					<input type="text" name="email" class="form-control" id="" placeholder="Email ünvanı" >
				</div>
				</div>
				<input type="hidden" name="type" value='personal'>
				<input type="hidden" name="order" value='<?php echo $serv_id;?>'>
				<button type="submit" class="btn btn-info">Sifariş et!</button>
			</form>
		</div>
	</div>

	<div class="col-xs-12 hidden mt-20"></div>
		<div id="turn" class="turnSlide">
			<div id="sld1" class="turn" data-col="3">
				<ul class="turn-ul">
					<li class="item wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="600ms">
						<?php 
					foreach ($data["comment"] as $key => $comm) {
						
					?>
				<div class="comment-box">
					<div class="comment-header" style="padding: 1px;text-align: center;background: #FAEC0D; color: #444;clear: both;font-weight: 700;"><h4><span>Fikirlər</span></h4></div>

					<div class="comment-content" style="padding: 5px;text-align: justify;">
						<h4><strong><?php echo $comm['comment_user'];?></strong></h2>
						<div class="comment-profile" style="float: left;margin: 5px;"><img src="<?php echo URL.'include/img/3.jpg';?>" style="width: 60px;height: 60px; border-radius: 50%;" alt=""></div>
						<div class="">
							<?php 
								echo $comm['comment_text'];
							?>
						</div>
					</div>
					<!--
				<div class="btn-group pull-right" style="margin-bottom: 20px;">
					<a href="" class="btn btn-info" style="margin-right: 5px;"><span class="glyphicon glyphicon-menu-left"></span></a>
					<a href="" class="btn btn-info"><span class="glyphicon glyphicon-menu-right"></span></a>
					
				</div>
				-->
				</div>
				<?php }?>
					</li>
			<!-- <div class="col-md-3">
				
				
			</div> -->
		</div>
	</div>
</section>