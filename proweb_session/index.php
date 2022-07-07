<?php  
	session_start()
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
</head>
<body>

	<?php 
		if (isset($_SESSION['nama']))
		echo 'Nama Sebelumnya : ' .$_SESSION['nama'];
	?>

	<form name="myform" method="POST" action="home.php">
		Nama <input type="text" name="nama" value=""><br><br>
		Alamat <textarea name="alamat"></textarea><br>
		Jenis Kelamin <select name="jenis">
			<option value="L">Laki-laki</option>
			<option value="P">Perempuan</option>
		</select>
		<br><input type="submit" name="proses" value="simpan">
	</form>

</body>
</html>