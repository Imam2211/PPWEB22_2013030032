 <?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mhs - add</title>
</head>
<body>
<h2>Tambah Data Satuan</h2>
<a href="satuan.php">LIHAT</a> | <a href="satuan_add.php">TAMBAH</a>
<br>
<form action="satuan_proc.php" method="post">
	ID<br>
	<input type="text" name="id"><br>
	nama<br>
	<input type="text" name="nama"><br>
	keterangan<br>
	<input type="text" name="keterangan"><br>
	aktif<br>
	<input type="text" name="aktif"><br>
	crt<br>
	<input type="text" name="crt"><br>
	crt_date<br>
	<input type="text" name="crt_date"><br>
	upd<br>
	<input type="text" name="upd"><br>
	upd_date<br>
	<input type="text" name="upd_date"><br>
	<!--satuan<br>
	<select name="item_id">
		<?php 
			$sql = "SELECT * FROM item";
			$res = $conn->query($sql);
			while($rows = $res->fetch_array(MYSQLI_BOTH)){
				echo "<option value='".$rows['id']."'>".$rows['nama']."</option>";
			}
		?>
	</select><br>-->

	<input type="submit" name="proses" value="SIMPAN">
</form>
</body>
</html>