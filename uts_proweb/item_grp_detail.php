<?php 
include "koneksi.php";

$id = $_GET['id'];
$sql = "SELECT * FROM item_grp WHERE id='$id'";
$res = $conn->query($sql);
$row = $res->fetch_array(MYSQLI_BOTH);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Item - Detil</title>
</head>
<body>
<h2>Detil Data Item</h2>
<a href="item_grp.php">LIHAT</a> | <a href="item_grp_add.php">TAMBAH</a>
<br>
<form action="item_grp_proc.php" method="post">
	ID<br>
	<input type="text" name="id" value="<?php echo $row['id']?>">
	<br>
	upline<br>
	<input type="text" name="upline" value="<?= $row['upline']?>"><br>
	level<br>
	<input type="text" name="level" value="<?= $row['level']?>"><br>
	nama<br>
	<input type="text" name="nama" value="<?= $row['nama']?>"><br>
	keterangan<br>
	<input type="text" name="keterangan" value="<?= $row['keterangan']?>"><br>
	aktif<br>
	<input type="text" name="aktif" value="<?= $row['aktif']?>"><br>
	crt<br>
	<input type="text" name="crt" value="<?= $row['crt']?>"><br>
	crt_date<br>
	<input type="text" name="crt_date" value="<?= $row['crt_date']?>"><br>
	upd<br>
	<input type="text" name="upd" value="<?= $row['upd']?>"><br>
	upd_date<br>
	<input type="text" name="upd_date" value="<?= $row['upd_date']?>"><br>

	<input type="submit" name="update" value="PERBAHARUI">
	<input type="submit" name="delete" value="HAPUS" onclick="return confirm('Yakin Menghapus Data Ini?')">
</form>
</body>
</html>