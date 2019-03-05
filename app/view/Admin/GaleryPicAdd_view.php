            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Galereyaya şəkil əlavə edin</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <form action="<?php echo AURL?>/GaleryPicAddAction?GID=<?php echo $_GET['GID']?>" method="POST" role="form" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="">Şəkil seçin!</label>
                            <input type="file" name='on' class="form-control" id="fileToUpload" placeholder="Xidmətin adı" value="">
                        </div>
                        <div class="form-group">
                            <label for="">Şəkil seçin!</label>
                            <input type="file" name='arxa' class="form-control" id="fileToUpload" placeholder="Xidmətin adı" value="">
                        </div>
                        <div class="form-group">
                            <label for="">Şəkil seçin!</label>
                            <input type="file" name='ic1' class="form-control" id="fileToUpload" placeholder="Xidmətin adı" value="">
                        </div>
                        <div class="form-group">
                            <label for="">Şəkil seçin!</label>
                            <input type="file" name='ic2' class="form-control" id="fileToUpload" placeholder="Xidmətin adı" value="">
                        </div>
                        <div class="form-group">
                            <label for="">Şəkil seçin!</label>
                            <input type="file" name='ic3' class="form-control" id="fileToUpload" placeholder="Xidmətin adı" value="">
                        </div>
                        <div class="form-group">
                            <label for="">Şəkil seçin!</label>
                            <input type="file" name='ic4' class="form-control" id="fileToUpload" placeholder="Xidmətin adı" value="">
                        </div>

                                        
                        <button type="submit" class="btn btn-primary">Tamamla!</button>
                    </form>

                </div>
            </div>