<?php 
 /* 
 File Handling - Upload 
 */
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>File Handling</title>
</head>
<body>
	<form action="upload_file.php" method="post" enctype="multipart/form-data">
 		 Select File to upload:
  		<input type="file" name="fileToUpload" >
 		
 		<input type="submit" value="Upload File" name="submit">
</form>
</body>
</html>