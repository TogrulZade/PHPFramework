			<?php 
				foreach ($data as $key => $about) {
					extract($about);
				}
                // print_r($data);
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
                    <h1 class="page-header">Haqqımızda</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                	<form action="<?php echo AURL?>/AboutEdit" method="POST" role="form">                 
                        <div class="form-group">
                            <label for="">Haqqımızda [AZ]</label>
                            <textarea name="textaz" id="aboutaz" class="form-control my-editor" rows="10" required="required"><?php echo decode($about_text_az);?></textarea>
                        </div>
                          <script>
                            $('#aboutaz').summernote({
                                  height: 150,                 // set editor height
                                  minHeight: null,             // set minimum height of editor
                                  maxHeight: null,             // set maximum height of editor
                                  focus: true                  // set focus to editable area after initializing summernote
                                });
                          </script>

                        <div class="form-group">
                            <label for="">Haqqımızda [EN]</label>
                            <textarea name="texten" id="abouten" class="form-control my-editor" rows="10" required="required"><?php echo decode($about_text_en);?></textarea>
                        </div>
                          <script>
                            $('#abouten').summernote({
                                  height: 150,                 // set editor height
                                  minHeight: null,             // set minimum height of editor
                                  maxHeight: null,             // set maximum height of editor
                                  focus: true                  // set focus to editable area after initializing summernote
                                });
                          </script>

                          
                        <button type="submit" class="btn btn-primary">Tamamla!</button>
                    </form>
                    <div class="h30"></div>
               	</div>
            </div>