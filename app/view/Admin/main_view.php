           <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Ana Səhifə!</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <form action="<?php echo AURL;?>/MainEdit" method="POST" role="form">
                    	<legend>Ana Səhifə düzəlişləri</legend>
                    	<?php 
                    	if(isset($_GET['message']) && $_GET['message'] == 'ok'){
                    		?>
	                    	<div class="alert alert-success">
	                    		Ana səhifə <b>Sloqan Yazısı</b> və <b>Text</b> müvəffəqiyyətlə dəyişdirdiniz!
	                    	</div>
                    	<?php }?>
                    	<div class="form-group">
                    		<label for="">Ana Səhifə Sloqanı</label>
                            <textarea name="sloqan" id="summernote" class="form-control" rows="10" required="required"><?php echo decode($data['main_sloqan']);?></textarea>
                        </div>

                          <script>
                            $('#summernote').summernote({
                                  height: 150,                 // set editor height
                                  minHeight: null,             // set minimum height of editor
                                  maxHeight: null,             // set maximum height of editor
                                  focus: true                  // set focus to editable area after initializing summernote
                                });
                          </script>
                    	
                    	<div class="form-group">
		                    <label for="">Sloqan altındakı qısa text. (3-4 cümlə)</label>
		                    <textarea name="text" id="summernote2" class="form-control" rows="10" required="required"><?php echo decode($data['main_text']);?></textarea>
                        </div>

                          <script>
                            $('#summernote2').summernote({
                                  height: 150,                 // set editor height
                                  minHeight: null,             // set minimum height of editor
                                  maxHeight: null,             // set maximum height of editor
                                  focus: true                  // set focus to editable area after initializing summernote
                                });
                          </script>
                    	
                    <div class="form-group">
                        <label for="">Ana Səhifə Sloqanı (ENG)</label>
                            <textarea name="sloqan_eng" id="summernote_eng" class="form-control" rows="10" required="required"><?php echo decode($data['main_sloqan_eng']);?></textarea>
                        </div>

                          <script>
                            $('#summernote_eng').summernote({
                                  height: 150,                 // set editor height
                                  minHeight: null,             // set minimum height of editor
                                  maxHeight: null,             // set maximum height of editor
                                  focus: true                  // set focus to editable area after initializing summernote
                                });
                          </script>

                          <div class="form-group">
                        <label for="">Sloqan altındakı qısa text. (3-4 cümlə) (ENG)</label>
                        <textarea name="text_eng" id="summernote2_eng" class="form-control" rows="10" required="required"><?php echo decode($data['main_text_eng']);?></textarea>
                        </div>

                          <script>
                            $('#summernote2_eng').summernote({
                                  height: 150,                 // set editor height
                                  minHeight: null,             // set minimum height of editor
                                  maxHeight: null,             // set maximum height of editor
                                  focus: true                  // set focus to editable area after initializing summernote
                                });
                          </script>

                    	<button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->