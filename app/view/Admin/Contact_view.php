			<?php 
				foreach ($data as $key => $contact) {
					extract($contact);
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
                    <h1 class="page-header">Contact</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                	<form action="<?php echo AURL?>/ContactEdit" method="POST" role="form">                 
                        <div class="form-group">
                            <label for="">Contact Mesaj Başlığı</label>
                            <input type="text" name='title' class="form-control" id="" placeholder="Xidmətin adı" value="<?php echo $contact_message_title;?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Contact Mesaj Başlığı (ENG)</label>
                            <input type="text" name='title_eng' class="form-control" id="" placeholder="Xidmətin adı" value="<?php echo $contact_message_title_eng;?>" required>
                        </div>

                        <div class="form-group">
                            <label for="">Contact Mesaj</label>
                            <textarea name="message" placeholder="" id="summernote" class="form-control my-editor" rows="10" required="required"><?php echo decode($contact_message);?></textarea>
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
                            <label for="">Contact Mesaj (ENG)</label>
                            <textarea name="message_eng" placeholder="" id="summernote_eng" class="form-control my-editor" rows="10" required="required"><?php echo decode($contact_message_eng);?></textarea>
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
                            <label for="">Ünvan</label>
                            <textarea name="address" placeholder="Ünvan" id="address" class="form-control" rows="10" required="required"><?php echo decode($contact_address);?></textarea>
                            
                        </div>
                          <script>
                            $('#address').summernote({
                                  height: 150,                 // set editor height
                                  minHeight: null,             // set minimum height of editor
                                  maxHeight: null,             // set maximum height of editor
                                  focus: true                  // set focus to editable area after initializing summernote
                                });
                          </script>
                                   
                        <div class="form-group">
                            <label for="">Əlaqə Nömrəsi</label>
                            <input type="text" name="phone" id="" class="form-control" value="<?php echo decode($contact_phone); ?>" title="">                               
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" id="inputEmail" class="form-control" value="<?php echo decode($contact_email); ?>" title="">
                        </div>
                        <button type="submit" class="btn btn-primary">Tamamla!</button>
                    </form>
                    <div class="h30"></div>
               	</div>
            </div>