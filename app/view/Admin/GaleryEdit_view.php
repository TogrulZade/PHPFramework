<div class="row">
	<div class="col-lg-12">
		<?php 
		$GID = (isset($_GET['GID'])) ? $_GET['GID'] : '';

			if(isset($_GET['message'])){
			if($_GET['message'] == 'ok'){
				echo "<div id='time' class='page-header alert alert-success'>Şəkil müvəffəqiyyətlə silindi!</div>";
			}elseif($_GET['message'] == 'no'){
				echo "<div id='time' class='page-header alert alert-danger'>Baza ilə əlaqə kəsildi. Yenidən cəhd edin!</div>";
			}
		}
		?>
		<h1 class="page-header col-md-4">Galereyanı Düzəlt</h1>
		<div class="col-md-2 page-header pull-right">
	      <a href="<?php echo AURL?>/GaleryPicAdd?GID=<?php echo $GID;?>" class="pull-right btn btn-success"><i class="fa fa-plus"></i> Yeni Şəkil</a>
	    </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<?php 
          foreach ($data as $key => $galery) {
            extract($galery);
            ?>
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div class="thumbnail">
                    <img src="<?php echo URL.$img_url;?>" alt="" style="width: 100%;height:150px;">
                  <div class="caption">
                    <p>
                      
                  <a href="<?php echo AURL.'/GaleryPicDelete?PID='.$img_id.'&GID='.$_GET["GID"];?>" class="btn btn-block btn-danger">Şəkli Sil</a>
                    </p>
                  </div>
                </div>
              </div>
          <?php
          }
          ?>
	</div>
</div>