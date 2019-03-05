			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Xidmət əlavə edin</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
					<form action="<?php echo AURL?>/ServicesAdd" method="POST" role="form">					
						<div class="form-group">
							<label for="">Xidmətin adı</label>
							<input type="text" name='name' class="form-control" id="" placeholder="Xidmətin adı" value="" required>
						</div>

						<!-- <div class="form-group">
							<label for="">Xidmət haqqında</label>
							<textarea name="desc" placeholder="Xidmət Haqqında" id="Desc" class="form-control my-editor" rows="10" required="required"></textarea>
							
						</div> -->
								<!-- <div class="" id="app">
								  <vue-html-editor model="{{@ text}}"></vue-html-editor>
								  <div style="margin-top:40px">
								    <div> The HTML contents are as follows:</div>
								    <hr>
								    <div >{{{text}}}</div>
								  </div>
								</div> -->	
								<div id="summernote">
									<p>Hello Summernote</p>
								</div>
									 	
						<button type="submit" class="btn btn-primary">Tamamla!</button>
					</form>

                </div>
            </div>