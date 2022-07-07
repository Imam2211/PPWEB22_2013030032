<?php 
include "koneksi.php";

//tambah data
if(isset($_POST['proses']) && $_POST['proses']=='SIMPAN'){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$keterangan = $_POST['keterangan'];
	$aktif = $_POST['aktif'];
	$crt = $_POST['crt'];
	$crt_date = $_POST['crt_date'];
	$upd = $_POST['upd'];
	$upd_date = $_POST['upd_date'];

	$sql  = "INSERT INTO satuan
			(id,nama,keterangan,aktif,crt,crt_date,upd,upd_date)
			VALUES 
			('$id','$nama','$keterangan','$aktif','$crt','$crt_date','$upd','$upd_date')";
	if(!$res = $conn->query($sql))
		echo $sql;
	else{
		header("Location: satuan.php");
	}
}

//update data
if(isset($_POST['update']) && $_POST['update']=='PERBAHARUI'){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$keterangan = $_POST['keterangan'];				
	$aktif = $_POST['aktif'];
	$crt = $_POST['crt'];
	$crt_date = $_POST['crt_date'];
	$upd = $_POST['upd'];
	$upd_date = $_POST['upd_date'];

	$sql = "UPDATE satuan
				SET
				nama		='$nama',
				satuan_id	='$keterangan',
				aktif 		='$aktif',
				crt			='$crt',
				crt_date	='$crt_date',
				upd			='$upd',
				upd_date	='$upd_date'
			WHERE id='$id'";
	if(!$res = $conn->query($sql))
		echo $sql;
	else
		header("Location: satuan.php");
}

//hapus data
if(isset($_POST['delete']) && $_POST['delete']=='HAPUS'){
	echo "hapus";
	$id = $_POST['id'];
	$sql = "DELETE FROM satuan
			WHERE id='$id'";
	if(!$res = $conn->query($sql))
		echo $sql;
	else
		header("Location: satuan.php");
}
?>