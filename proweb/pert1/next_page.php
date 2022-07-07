<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>Nrxt Page</h2>
	<?php  
		echo 'Nama Prodi : '.$_SESSION['prodi'];
	?><br>
	<a href="destroy_session.php">destroy</a>
</body>
</html>