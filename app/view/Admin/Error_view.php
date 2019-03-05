            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Error 404</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-danger">
                       <?php 
                            echo $data['ERROR'];
                       ?>
                    </div>

                    <p>
                        <a href="<?php echo AURL.$data['back_button']?>" class="btn btn-danger">Geri Qayıt!</a>
                    </p>
                </div>
            </div>