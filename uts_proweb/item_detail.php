<?php 
include "koneksi.php";

$id = $_GET['id'];
$sql = "SELECT * FROM item WHERE id='$id'";
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
<a href="item.php">LIHAT</a> | <a href="item_add.php">TAMBAH</a>
<br>
<form action="item_proc.php" method="post">
	ID<br>
	<input type="text" name="id" value="<?php echo $row['id']?>">
	<br>
	item_grp_id<br>
	<select name="item_grp_id">
		<?php 
			$sql = "SELECT * FROM item_grp";
			$res_item_grp = $conn->query($sql);
			while($item_grp = $res_item_grp->fetch_array(MYSQLI_BOTH)){
				if($item_grp['id']==$row['item_grp_id'])
					$select = 'selected="selected"';
				else
					$select = '';
				echo "<option value='".$item_grp['id']."' $select>".$item_grp['id']." - ".$item_grp['nama']."</option>";
			}
		?>
	</select><br>
	barcode<br>
	<input type="text" name="barcode" value="<?= $row['barcode']?>"><br>
	harga<br>
	<input type="text" name="harga" value="<?= $row['harga']?>"><br>
	nama<br>
	<input type="text" name="nama" value="<?= $row['nama']?>"><br>
	satuan_id<br>
	<select name="satuan_id">
		<?php 
			$sql = "SELECT * FROM satuan";
			$res_satuan = $conn->query($sql);
			while($satuan = $res_satuan->fetch_array(MYSQLI_BOTH)){
				if($satuan['id']==$row['satuan_id'])
					$select = 'selected="selected"';
				else
					$select = '';
				echo "<option value='".$satuan['id']."' $select>".$satuan['nama']."</option>";
			}
		?>
	</select><br>
	hpp<br>
	<input type="text" name="hpp" value="<?= $row['hpp']?>"><br>
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