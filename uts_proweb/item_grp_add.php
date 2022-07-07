 <?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Item Grup - add</title>
</head>
<body>
<h2>Tambah Data Item Grup</h2>
<a href="item.php">LIHAT</a> | <a href="item_add.php">TAMBAH</a>
<br>
<form action="item_grp_proc.php" method="post">
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

    <input type="submit" name="proses" value="SIMPAN">
</form>
</body>
</html>