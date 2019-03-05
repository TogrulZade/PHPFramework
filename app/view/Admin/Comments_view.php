<?php 
	foreach ($data as $key => $contact) {
		extract($contact);
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
    <h1 class="page-header">Comments</h1>
    </div>
    <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
    <div class="col-lg-12">
    <form action="<?php echo AURL?>/CommentEdit" method="POST" role="form">                 
        <div class="form-group">
            <label for="">Contact Mesaj Başlığı</label>
            <input type="text" name='title' class="form-control" id="" placeholder="Xidmətin adı" value="" required>
        </div>
        <div class="form-group">
            <label for="">Contact Mesaj Başlığı (ENG)</label>
            <input type="text" name='title_eng' class="form-control" id="" placeholder="Xidmətin adı" value="" required>
        </div>

        <div class="form-group">
            <label for="">Contact Mesaj</label>
            <textarea name="message" placeholder="" id="summernote" class="form-control my-editor" rows="10" required="required"> </textarea>
        </div>
          <script>
            $('#summernote').summernote({
                  height: 150,                 // set editor height
                  minHeight: null,             // set minimum height of editor
                  maxHeight: null,             // set maximum height of editor
                  focus: true                  // set focus to editable area after initializing summernote
                });
          </script>