<?php
include 'koneksi.php';
$npm = $_GET['npm'];

$sql = "SELECT * FROM mhs WHERE npm='$npm'";
$res = $conn->query($sql);
$dat = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
<title>mhs edit</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<?php include 'header.php';?>
	<br>
	<div class="container-fluid">
	<?php include 'menu.php';?>
	<br>
	<form name="myform" action="mhs_proc.php" method="POST">
		NPM
		<br><input type="text" name="npm" id="npm" value="<?php echo $dat['npm']?>">
		<br>Nama
		<br><input type="text" name="nama" id="nama" size="30" value="<?= $dat['nama']?>">
		<br>Alamat
		<br><input type="text" name="alamat" id="alamat" size="50" value="<?= $dat['alamat']?>">
		<br>
		<br><input type="submit" name="submit_edit" id="submit_edit" class="btn btn-primary" value="SIMPAN">
		<input type="submit" name="submit_delete" id="submit_delete" class="btn btn-danger" value="HAPUS">
	</form>
</div>
</body>
</html>