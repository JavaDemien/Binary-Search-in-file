<?php
require_once('./classes/BinarySearch.php');
require_once('./classes/KeyGenerator.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Binary Search By Key</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="text/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="js/main.js"></script>

<body>

	<div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form class="contact2-form validate-form" id="ajax_form" action="controler.php" method="POST" enctype="multipart/form-data">
					<span class="contact2-form-title">
						Binary Search By Key
					</span>

					<div class="wrap-input2 validate-input" data-validate="Name is required">
						<input class="input2" type="text" name="key" required>
						<span class="focus-input2" data-placeholder="Enter the searchable key"></span>
					</div>
					<div class="file-upload">
						<button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add File</button>

						<div class="text-upload-wrap">
							<input class="file-upload-input" type='file' name='file' onchange="readURL(this);" accept="text/plain" />
							<div class="drag-text">
								<h3>Drag and drop a file or select add file</h3>
							</div>
						</div>
						<div class="file-upload-content">
							<h3 class="file-upload-text" data-test=''>Your file <span></span> is uploaded</h1>
							<div class="text-title-wrap">
								<button type="button" onclick="removeUpload()" class="remove-text">Remove <span class="text-title">uploaded file</span></button>
							</div>
						</div>
					</div>
					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="file-upload"></div>
							<button id="btn" class="file-upload-btn">
								Find the key
							</button>
						</div>
					</div>
					<div>
						<h1 id="result_form"></h1>
					</div>
				</form>
				
			</div>
		</div>
	</div>
</body>
</html>
