<footer>
	<div class="container">
		<div class="row wow fadeInDown">
			<div class="col-md-4 text-justify">
				<p>
				<form action="<?php echo URL.'Index/follow' ?>" method="POST" role="form">
					<div class="form-group">
						<label for="">Bizi izləyin</label>
						<input type="email" name="email" class="form-control" id="" placeholder="Email Ünvanınız" required>
					</div>
				
					
					<input type="hidden" name="follow" value='follow'>
					<button type="submit" class="btn btn-block btn-primary">Bizi İzləyin</button>
				</form>
				</p>
			</div>
			<div class="col-md-4 text-justify">
				<label>Lorem İpsum</label>
				<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam corrupti nisi quam? Ab culpa voluptatem dolorem laboriosam aperiam fugiat cum velit, quam nihil necessitatibus quisquam temporibus ut, quas aliquam fugit!
				</p>
			</div>

			<div class="col-md-4">
				<p>
					<a href="#">Ana Səhifə</a>
				</p>
				<p>
					<a href="#">Xidmətlərimiz</a>
				</p>
				<p>
					<a href="#">Bizimlə Əlaqə</a>
				</p>
			</div>
			<div class="col-md-12">
				<div class="text-left">
					Copyright <a href="http://facebook.com/TogrulZade">Toğrul Sadıqzadə</a>
				</div>
			</div>
		</div>
	</div>
</footer>


<!-- Scripts -->
<script src="<?php echo URL;?>include/js/jquery.js"></script>
<script src="<?php echo URL;?>include/js/jquery.easing.js"></script>
<script src="<?php echo URL;?>include/js/bootstrap.js"></script>
<script src="<?php echo URL;?>include/js/js.js"></script>
<script src="<?php echo URL;?>include/js/wow.min.js" charset="utf-8"></script>
<script src="<?php echo URL;?>include/js/bootstrap-clockpicker.min.js"></script>
<script src="<?php echo URL;?>include/js/zebra_datepicker.js"></script>
<script src="<?php echo URL;?>include/js/highlight.js"></script>

<script type="text/javascript">

$('.clockpicker').clockpicker({
    placement: 'top',
    align: 'left',
    donetext: 'Done'
});

</script>
<script>
	new WOW().init();
</script>
<!-- End Scripts -->
</body>
</html>