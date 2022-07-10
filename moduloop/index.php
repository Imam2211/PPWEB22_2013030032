<?php
include 'koneksi.php';
if(isset($_POST['submit'])){
	$nama = $_POST['nama'];
}
else
	$nama = '';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>mhs</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>
<body>
	<?php include 'header.php';?>
	<br>
	<div class="container-fluid">
	<?php include 'menu.php';?><br><br>

	<form action="" method="post">
				Cari mhs <input type="text" name="nama" value="<?= $nama?>" placeholder="nama"> 
				<input type="submit" name="submit" value="Cari">
				<br>
			</form>
	<table class="table table-bordered" width='100%' border='2'>
		<thead class="table-dark" align="center"  >
			<tr>
				<th width='5%'>No.</th>
				<th width='15%'>NPM</th>
				<th width='25%'>Nama</th>
				<th>Alamat</th>
			</tr>
		</thead>
		<tbody align="center">
			<br>

			<?php
			$sql = "SELECT * FROM mhs WHERE nama LIKE '%$nama%'";
			$res = $conn->query($sql);
			if($res->num_rows > 0){
			$i = 0;
			while($dat = $res->fetch_assoc()){
				$i++;
				echo "<tr>
				<td>$i</td>
				<td><a href='mhs_detil.php?npm=".$dat['npm']."'>".
				$dat["npm"]."</a></td>
				<td>".$dat["nama"]."</td>
				<td>".$dat["alamat"]."</td>
				</tr>";
				}
			}
			?>
		</tbody>
	</div>
	</table>
</body>
</html>