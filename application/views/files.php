<!DOCTYPE html>
<html>
<head>
	<title>Codeigniter - Upload multiple images using dropzone.js</title>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="<?=base_url()?>/assets/css/bootstrap.min.css">
	<link href="<?=base_url()?>/assets/css/dropzone.min.css" rel="stylesheet">
	<script src="<?=base_url()?>/assets/js/dropzone.min.js"></script>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="dropzone-upload-image" enctype="multipart/form-data" class="dropzone" id="image-upload" method="POST">
				<div>
					<center><h3>Click here to upload multiple image</h3></center>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	Dropzone.options.imageUpload = {
        maxFilesize:1,
        acceptedFiles: ".jpeg,.jpg,.png,.gif"
    };
</script>

</body>
</html>
