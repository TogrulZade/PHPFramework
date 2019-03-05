			<?php 
				extract($data["data"]);
				
				// print_r($data['galery']);
			?>
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Xidmətlər!</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
					<form action="<?php echo AURL?>/ServicesEdit" method="POST" role="form">					
						<div class="form-group">
							<label for="">Galereya seçin</label>
							<select name="galery" id="inputGalery" class="form-control" required="required">
							<?php 

								foreach ($data["galery"] as $key => $galery) {
								extract($galery);
								$selected = ($serv_galery == $galery_id) ? 'selected' : '';
								echo "<option value=\"$galery_id\" $selected>$galery_name</option>";
								}
							?>
							</select>
						</div>
						<div class="form-group">
							<label for="">Xidmətin adı</label>
							<input type="text" name='name' class="form-control" id="" placeholder="Xidmətin adı" value="<?php echo $serv_name;?>" required>
						</div>

						<div class="form-group">
							<label for="">Xidmətin adı (ENG)</label>
							<input type="text" name='name_eng' class="form-control" id="" placeholder="Xidmətin adı" value="<?php echo $serv_name_eng;?>" required>
						</div>

						<div class="form-group">
							<label for="">Xidmət haqqında</label>
							<textarea name="desc" id="summernote" class="form-control" rows="10" required="required"><?php echo text($serv_desc);?></textarea>
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
							<label for="">Xidmət haqqında ENG</label>
							<textarea name="desc_eng" id="summernote_eng" class="form-control" rows="10" required="required"><?php echo text($serv_desc_eng);?></textarea>
						</div>
						<script>
                            $('#summernote_eng').summernote({
                                  height: 150,                 // set editor height
                                  minHeight: null,             // set minimum height of editor
                                  maxHeight: null,             // set maximum height of editor
                                  focus: true                  // set focus to editable area after initializing summernote
                                });
                          </script>
						
						<input type="hidden" name="SID" value="<?php echo $_GET['SID']?>">
						<button type="submit" class="btn btn-primary">Düzəliş et!</button>
					</form>
                </div>
            </div>	
