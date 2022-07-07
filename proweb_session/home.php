<?php
	session_start();

	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jenis = $_POST['jenis'];

	echo "$nama <br> $alamat <br> $jenis";

	$_SESSION['nama'] =  $nama;
?>
<br>
<a href="index.php">Halaman Utama</a><br>
<a href="destroy.php">Destroy Session</a>