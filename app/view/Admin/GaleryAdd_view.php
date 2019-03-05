            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Yeni Galereya</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <form action="<?php echo AURL?>/GaleryAddAction" method="POST" role="form" enctype="multipart/form-data">
                    
                        <div class="form-group">
                            <label for="">Galereyanın Adı</label>
                            <input type="text" name='name' class="form-control" id="" placeholder="Galereyanın adı" value="">
                        </div>
                        <div class="form-group">
                            <label for="">Şəkil seçin!</label>
                            <input type="file" name='photo' class="form-control" id="fileToUpload" placeholder="Xidmətin adı" value="">
                        </div>
                                
                        <input type="hidden" name="go" value="addgalery">
                        <button type="submit" class="btn btn-primary">Tamamla!</button>
                    </form>

                </div>
            </div>