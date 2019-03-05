            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Xidmət əlavə edin</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <form action="<?php echo AURL?>/ServicesAdd" method="POST" role="form" enctype="multipart/form-data">                 
                        <div class="form-group">
                            <label for="">Xidmətin adı</label>
                            <input type="text" name='name' class="form-control" id="" placeholder="Xidmətin adı" value="" required>
                        </div>

                        <div class="form-group">
                            <label for="">Xidmətin Şəkli</label>
                            <input type="file" name='fileToUpload' class="form-control" id="fileToUpload" placeholder="Xidmətin adı" value="" required>
                        </div>

                        <div class="form-group">
                            <label for="">Xidmət haqqında</label>
                            <textarea name="desc" placeholder="Xidmət Haqqında" id="summernote" class="form-control my-editor" rows="10" required="required"></textarea>
                            
                        </div>
                                  <script>
                                    $('#summernote').summernote({
                                          height: 150,                 // set editor height
                                          minHeight: null,             // set minimum height of editor
                                          maxHeight: null,             // set maximum height of editor
                                          focus: true                  // set focus to editable area after initializing summernote
                                        });
                                  </script>
                                        
                        <button type="submit" class="btn btn-primary">Tamamla!</button>
                    </form>

                </div>
            </div>