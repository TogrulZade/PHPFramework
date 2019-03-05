<div class="container" style="margin-top: 70px;">
	<div class="row">
		<section>
			<div class="text-center col-md-6 float-none m-auto">
				<h2><strong>SAFEROAD AİLƏSİNƏ QOŞUL</strong></h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo obcaecati, enim tempora error consequuntur cupiditate minus, facilis, quos ducimus itaque sed labore unde molestiae placeat atque porro accusamus ullam assumenda.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptates doloremque in, aliquid fugiat. Dicta consequuntur cumque, consectetur veniam nesciunt ipsum dolore in fuga, tempore atque iure nobis ea reiciendis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus corrupti iste necessitatibus vel officiis saepe architecto fugit, ducimus sed dignissimos quod totam ratione perferendis quidem! Obcaecati eligendi, fugit incidunt eveniet!
				</p>
			</div>
		</section>
			
			<div class="col-md-12 text-center">
				<?php 
					if(isset($_GET['message'])){
						if($_GET['message'] == 'ok'){
							echo '<div class="alert alert-success time" id="time">Müraciətiniz müvəffəqiyyətlə tamamlandı</div>';
						}elseif($_GET['message'] == 'no'){
							echo '<div class="alert alert-danger time" id="time">Bazada səhvlik yarandı</div>';
						}elseif($_GET['message'] == 'noUpload'){
							echo '<div class="alert alert-danger time" id="time">Sekil Yuklenmedi</div>';
						}
					}
				?>
			</div>
			<div class="col-md-12" style="">
				<legend class="text-center" style="padding: 20px 0;">
					<h3><strong>Müraciət Formu</strong></h3>
				</legend>
			</div>
		<form action="<?php URL?>Join/JoinAction" method="POST" role="form" enctype="multipart/form-data">
			<div class="col-md-6">
			
				<div class="form-group">
					<label for="">Adınız, Soyadınız</label>
					<input type="text" name="name" class="form-control" id="" placeholder="Adınız, Soyadınız" required>
				</div>

				<div class="form-group">
					<label for="">Maşınınızın Markası</label>
					<input type="text" name="marka" class="form-control" id="" placeholder="Maşınınızın Markası" required>
				</div>

				<div class="form-group">
					<label for="">Maşının tutumu (nəfər)</label>
					<input type="text" name="tutum" class="col-md-3 form-control" id="" placeholder="Misal üçün, 20 nəfər">
				</div>
			
				<div class="form-group">
					<label for="">Əlaqə nömrəniz</label>
					<input type="text" name="phone" class="form-control" id="" placeholder="Əlaqə Nömrəsi" required>
				</div>
			</div>
			<div class="col-md-3">			
				<div class="form-group">
					<label for="">Ön hissə</label>
					<input type="file" name="on" class="form-control" id="" placeholder="Input field">
				</div>

				<div class="form-group">
					<label for="">Arxa hissə</label>
					<input type="file" name="arxa" class="form-control" id="" placeholder="Input field">
				</div>

				<div class="form-group">
					<label for="">İçəridən görüntü #1</label>
					<input type="file" name="ic1" class="form-control" id="" placeholder="Input field">
				</div>
			</div>

			<div class="col-md-3">
				<div class="form-group">
					<label for="">İçəridən görüntü #2</label>
					<input type="file" name="ic2" class="form-control" id="" placeholder="Input field">
				</div>
				<div class="form-group">
					<label for="">İçəridən görüntü #3</label>
					<input type="file" name="ic3" class="form-control" id="">
				</div>

				<div class="form-group">
					<label for="">İçəridən görüntü #4</label>
					<input type="file" name="ic4" class="form-control" id="">
				</div>

			</div>
			<div class="col-md-6" style="padding: 10px;">
				<button type="submit" class="btn btn-block btn-primary">Bizə Qoşul</button>
			</div>
		</form>
		</div>
	</div>
</div>