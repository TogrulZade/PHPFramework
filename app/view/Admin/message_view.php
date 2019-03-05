<?php 
	if($data['status'] == 1){$messageClass = 'success';}
	elseif($data['status'] == 0){$messageClass = 'warning';}
	elseif($data['status'] < 0){$messageClass = 'danger';}
?>

		<div class="page-header col-md-6 col-md-offset-3">
			<div class="alert alert-<?php echo $messageClass;?>">
				<?php echo $data['message'];?>
			</div>
		</div>
