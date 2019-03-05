			<?php 
				extract($data);
			// print_r($data);
			?>
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Vakansiyalar!</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
					<form action="<?php echo AURL?>/VakansiyaEditAction" method="POST" role="form">					
						<div class="form-group">
							<label for="">Vakansiyanın adı</label>
							<input type="text" name='name' class="form-control" id="" placeholder="Vakansiyanın adı" value="<?php echo $vacancy_name;?>" required>
						</div>

						<div class="form-group">
							<label for="">Vakansiyanın adı  (ENG)</label>
							<input type="text" name='name_eng' class="form-control" id="" placeholder="About Vacancy" value="<?php echo $vacancy_name_eng;?>" required>
						</div>

						<div class="form-group">
							<label for="">Vakansiya haqqında</label>
							<textarea name="text" id="summernote" class="form-control" rows="10" required="required"><?php echo text($vacancy_text);?></textarea>
						</div>
						<script>
                            $('#summernote').summernote({
                                  height: 250,                 // set editor height
                                  minHeight: null,             // set minimum height of editor
                                  maxHeight: null,             // set maximum height of editor
                                  focus: true                  // set focus to editable area after initializing summernote
                                });
                          </script>
						
						<div class="form-group">
							<label for="">Vakansiya haqqında (ENG)</label>
							<textarea name="text_eng" id="summernote_eng" class="form-control" rows="10" required="required"><?php echo text($vacancy_text_eng);?></textarea>
						</div>

						<script>
                            $('#summernote_eng').summernote({
                                  height: 250,                 // set editor height
                                  minHeight: null,             // set minimum height of editor
                                  maxHeight: null,             // set maximum height of editor
                                  focus: true                  // set focus to editable area after initializing summernote
                                });
                          </script>
						
						<input type="hidden" name="VID" value="<?php echo $_GET['VID']?>">
						<button type="submit" class="btn btn-primary">Düzəliş et!</button>
					</form>

                </div>
            </div>	
