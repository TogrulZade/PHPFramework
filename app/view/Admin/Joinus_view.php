			<?php 
				foreach ($data as $key => $join) {
					extract($join);
				}
			?>
			<div class="row">
                <div class="col-lg-12">
                <?php 
                    $message =isset($_GET['message']) ? $_GET['message'] : '';
                        if($message == 'change_ok'){
                            echo '<div class="page-header alert alert-success animated fadeIn time" id="time">Mətn müvəffəqiyyətlə dəyişdirildi!</div>';
                        }elseif($message == 'error_update'){
                            echo '<div class="page-header alert alert-danger time" id="time">Mətn dəyişdirilə bilinmədi! Bazada səhvlik yarandı!</div>';
                        }
                    ?>
                    <h1 class="page-header">Bizə Qoşulmaq istəyənlər</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                	<form action="<?php echo AURL?>/JoinusEdit" method="POST" role="form">                 
                        <div class="form-group">
                            <label for="">Bizə Qoşul Mətni</label>
                            <input type="text" name='sloqan' class="form-control" id="" placeholder="" value="<?php echo $join_sloqan;?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Bizə Qoşul Mətni (ENG)</label>
                            <input type="text" name='sloqan_eng' class="form-control" id="" placeholder="" value="<?php echo $join_sloqan_eng;?>" required>
                        </div>

                        <div class="form-group">
                            <label for="">Bizə Qoşul mətni</label>
                            <textarea name="text" placeholder="" id="summernote" class="form-control my-editor" rows="10" required="required"><?php echo decode($join_text);?></textarea>
                            
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
                            <label for="">Bizə Qoşul mətni (ENG)</label>
                            <textarea name="text_eng" placeholder="" id="summernote_eng" class="form-control my-editor" rows="10" required="required"><?php echo decode($join_text_eng);?>
                                
                            </textarea>
                            
                        </div>
                          <script>
                            $('#summernote_eng').summernote({
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