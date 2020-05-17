<?php
// $_SESSION['folder'] = 'username';

	$upload_errors = array(
							UPLOAD_ERR_OK 				=> "No errors.",
							UPLOAD_ERR_INI_SIZE  		=> "Larger than upload_max_filesize.",
							UPLOAD_ERR_FORM_SIZE 		=> "Larger than form MAX_FILE_SIZE.",
							UPLOAD_ERR_PARTIAL 			=> "Partial upload.",
							UPLOAD_ERR_NO_FILE 			=> "No file.",
							UPLOAD_ERR_NO_TMP_DIR 		=> "No temporary directory.",
							UPLOAD_ERR_CANT_WRITE 		=> "Can't write to disk.",
							UPLOAD_ERR_EXTENSION 		=> "File upload stopped by extension.");

	if($_SERVER['REQUEST_METHOD'] == "POST"){

		$tmp_file = $_FILES['file_upload']['tmp_name'];

		$target_file = basename($_FILES['file_upload']['name']);

		$upload_dir = $_SESSION['username'];

		if(move_uploaded_file($tmp_file, $upload_dir . "/" . $target_file)){
			$message = "<div class=\"alert alert-success d-flex justify-content-center \" role=\"alert\">File uploaded successfully</div>";
		} else {
			$error = $_FILES['file_upload']['error'];
			$message = "<p class=\"message alert alert-danger\" role=\"alert\">" . $upload_errors[$error] . "</p>";
		}
	}

	?>

	<?php if(!empty($message)) {echo "<p>{$message}</p>";} ?>