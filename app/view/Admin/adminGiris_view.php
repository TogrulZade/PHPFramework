 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Panelə Giriş</title>
	<link rel="stylesheet" href="<?php echo URL;?>include/css/style.css">
	<link rel="stylesheet" href="<?php echo URL;?>include/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo URL;?>include/css/short.css">
	<link rel="stylesheet" href="<?php echo URL;?>include/css/animate.css">
</head>
<body>
<div class="container" style="margin-top: 70px;">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 login-box">
			<form action="<?php echo URL?>adminGiris/control" method="POST" role="form">
			<?php if(isset($_GET['message']) && $_GET['message'] == 'notmatch'){
				// redirect(AURL.'giris',3);
				?>
			<div id="time" class="alert alert-danger time">
				Login və ya şifrə yalnışdır!
			</div>
			<?php 
				}
			?>
				<legend>Admin Panelə Giriş</legend>
			
				<div class="form-group">
					<label for="">Login</label>
					<input type="text" class="form-control" name="login" id="" placeholder="Login">
					
					<label for="">Şifrə</label>
					<input type="password" name="password" class="form-control" id="" placeholder="Login">
				</div>
			
				<button type="submit" class="btn btn-primary">Daxil OL</button>
			</form>
		</div>
	</div>
</div>

<script src='<?php echo URL;?>include/js/jquery.min.js'></script>
<script src='<?php echo URL;?>include/js/bootstrap.min.js'></script>
<script src='<?php echo URL;?>include/js/js.js'></script>
</body>
</html>
