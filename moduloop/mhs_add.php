<!DOCTYPE html>
<html>
<head>
<title>mhs add</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<?php include 'header.php';?><br>
	<div class="container-fluid">
	<?php include 'menu.php';?>
	<br>
	<form name="myform" action="mhs_proc.php" method="POST">
		NPM
		<br><input type="text" name="npm" id="npm" placeholder="Masukkan Npm">
		<br>Nama
		<br><input type="text" name="nama" id="nama" size="30" placeholder="Masukkan Nama">
		<br>Alamat
		<br><input type="text" name="alamat" id="alamat" size="50" placeholder="Masukkan alamat">
		<br>
		<br><input type="submit" name="submit_add" id="submit_add" class="btn btn-primary" value="SIMPAN">
	</form>
</div>
</body>
</html>