<?php 
	if($data['status'] == 1){$messageClass = 'success';}
	elseif($data['status'] == 0){$messageClass = 'warning';}
	elseif($data['status'] < 0){$messageClass = 'danger';}
?>
<div class="container" style="margin-top: 80px;height: 61vh;">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="alert alert-<?php echo $messageClass;?>">
				<?php echo $data['message'];?>
			</div>
		</div>
	</div>
</div>