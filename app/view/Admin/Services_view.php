            <div class="row">
                <div class="col-lg-12">
                    <?php 
                    $message =isset($_GET['message']) ? $_GET['message'] : '';
                        if($message == 'ok'){
                            echo '<div class="page-header alert alert-success time" id="time">Xidmət müvəffəqiyyətlə əlavə edildi!</div>';
                        }elseif($message == 'delok'){
                            echo '<div class="page-header alert alert-success time" id="time">Xidmət müvəffəqiyyətlə silindi!</div>';
                        }elseif($message == 'change_ok'){
                            echo '<div class="page-header alert alert-success time" id="time">Xidmət müvəffəqiyyətlə dəyişdirildi!</div>';
                        }elseif($message == 'error_update'){
                            echo '<div class="page-header alert alert-danger time" id="time">Xidmət dəyişdirilə bilinmədi! Bazada səhvlik yarandı!</div>';
                        }
                    ?>
                    <h1 class="page-header col-lg-4 inline-block">Xidmətlər!</h1>
                    <div class="col-lg-4 col-lg-offset-4 inline-block">
                        <a href="<?php echo AURL?>/ServicesAdd" class="btn bull-right pull-right  page-header btn-danger"><span class="glyphicon glyphicon-plus-sign"></span> XİDMƏT ƏLAVƏ EDİN</a>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                <!-- Service Boxes -->
                <?php 
                    foreach ($data as $key => $value) {
                        extract($value);
                    
                ?>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <div class="thumbnail" style="min-height: 400px;">
                            <img data-src="#" style="height:200px;" src="<?php echo URL;?>include/img/<?php echo $serv_img;?>" alt="">
                            <div class="caption">
                                <h3><?php echo $serv_name;?></h3>
                                <p>
                                    <?php echo decode(cut($serv_clean_desc,120));?>
                                </p>
                                <p>
                                    <a href="<?php echo AURL?>/ServicesEdit?SID=<?php echo $serv_id;?>" class="btn btn-primary">Düzəlt</a>
                                    <a href="<?php echo AURL?>/ServicesDelete?SID=<?php echo $serv_id;?>" class="btn btn-danger">Xidməti Sil</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <!-- /.End Service Boxes -->
                </div>
            </div>
            <!-- /.row -->