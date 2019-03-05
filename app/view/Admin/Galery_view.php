      <div class="row">
                <div class="col-lg-12">
                <?php 
                    $message =isset($_GET['message']) ? $_GET['message'] : '';
                        if($message == 'ok'){
                            echo '<div class="page-header alert alert-success time" id="time">Galereya müvəffəqiyyətlə əlavə edildi!</div>';
                        }if($message == 'no'){
                            echo '<div class="page-header alert alert-success time" id="time">Galereya əlavə edilə bilmədi!</div>';
                        }elseif($message == 'delok'){
                            echo '<div class="page-header alert alert-success time" id="time">Galereya müvəffəqiyyətlə silindi!</div>';
                        }elseif($message == 'delno'){
                            echo '<div class="page-header alert alert-danger time" id="time">Galereya silinə bilmədi!</div>';
                        }elseif($message == 'change_ok'){
                            echo '<div class="page-header alert alert-success time" id="time">Galereya müvəffəqiyyətlə dəyişdirildi!</div>';
                        }elseif($message == 'error_update'){
                            echo '<div class="page-header alert alert-danger time" id="time">Galereya dəyişdirilə bilinmədi! Bazada səhvlik yarandı!</div>';
                        }
                    ?>
                    <h1 class="page-header col-md-4">Galereya</h1>
                    <div class="col-md-2 page-header pull-right">
                      <a href="<?php echo AURL?>/GaleryAdd" class="pull-right btn btn-success"><i class="fa fa-folder"></i> Yeni Galereya</a>
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
                            <img src="<?php echo URL.$galery_img;?>" alt="" style="width: 100%;height:150px;">
                          <h3><?php echo $galery_name;?></h3>
                          <div class="caption">
                            <p>
                              <a href="<?php echo AURL.'/GaleryEdit?GID='.$galery_id;?>" class="btn btn-primary">Düzəlt</a>
                              <a href="<?php echo AURL.'/GaleryDelete?GID='.$galery_id;?>" class="btn btn-danger">Galereyanı Sil</a>
                            </p>
                          </div>
                        </div>
                      </div>
                  <?php
                  }
                  ?>
                </div>
            </div>