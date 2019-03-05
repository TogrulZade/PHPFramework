			<div class="row">
                <div class="col-lg-12">
                <?php 
                    $message =isset($_GET['message']) ? $_GET['message'] : '';
                        if($message == 'ok'){
                            echo '<div class="page-header alert alert-success time" id="time">Vakansiya müvəffəqiyyətlə əlavə edildi!</div>';
                        }if($message == 'no'){
                            echo '<div class="page-header alert alert-success time" id="time">Vakansiya əlavə edilə bilmədi!</div>';
                        }elseif($message == 'delok'){
                            echo '<div class="page-header alert alert-success time" id="time">Vakansiya müvəffəqiyyətlə silindi!</div>';
                        }elseif($message == 'delno'){
                            echo '<div class="page-header alert alert-danger time" id="time">Vakansiya silinə bilmədi!</div>';
                        }elseif($message == 'change_ok'){
                            echo '<div class="page-header alert alert-success time" id="time">Vakansiya müvəffəqiyyətlə dəyişdirildi!</div>';
                        }elseif($message == 'error_update'){
                            echo '<div class="page-header alert alert-danger time" id="time">Vakansiya dəyişdirilə bilinmədi! Bazada səhvlik yarandı!</div>';
                        }
                    ?>
                    <h1 class="page-header col-md-4">Vakansiyalar</h1>
                    <div class="col-md-2 page-header pull-right">
                    	<a href="<?php echo AURL?>/VakansiyaAdd" class="pull-right btn btn-success"><i class="fa fa-bullhorn"></i> Vakansiya Elan et!</a>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                <?php 
                	foreach ($data as $key => $vakansiya) {
 						
 					 
                ?>
                <!-- Vacancy -->
                	<div class="col-md-4 vac-item">
                			<div class="caption">
								<div class="vac-head text-center" style="background: #2c3e50;padding: 5px 10px; color: #fff;">
									<h4><?php echo $vakansiya['vacancy_name'];?></h4>
								</div>
								<div class="vac-text" >
									<div class="row" style="padding: 10px;background: #fff;">
										<div class="col-md-12">
										<?php echo text(cut($vakansiya['vacancy_clean_text'],200))."...";?>
										</div>
									</div>
								</div>
								
								<p>
									<a href="<?php echo AURL?>/VakansiyaEdit?VID=<?php echo $vakansiya['vacancy_id']?>" class="btn btn-primary"><i class="fa fa-edit"></i> Düzəliş et</a>
									<a href="<?php echo AURL?>/VakansiyaDelete?VID=<?php echo $vakansiya['vacancy_id']?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> Vakansiyanı Sil</a>
								</p>

							</div>
					</div>
					<!-- /. Vacancy -->
					<?php } ?>
                </div>
            </div>