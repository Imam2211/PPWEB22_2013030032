 <?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Item - add</title>
</head>
<body>
<h2>Tambah Data Item</h2>
<a href="item.php">LIHAT</a> | <a href="item_add.php">TAMBAH</a>
<br>
<form action="item_proc.php" method="post">
    ID<br>
    <input type="text" name="id"><br>
    item_grp_id<br>
    <select name="item_grp_id">
        <?php 
            $sql = "SELECT * FROM item";
            $res = $conn->query($sql);
            while($rows = $res->fetch_array(MYSQLI_BOTH)){
                echo "<option value='".$rows['id']."'>".$rows['id']." - ".$rows['nama']."</option>";
            }
        ?>
    </select><br>
    barcode<br>
    <input type="text" name="barcode"><br>
    harga<br>
    <input type="text" name="harga"><br>
    nama<br>
    <input type="text" name="nama"><br>
    satuan_id<br>
    <select name="satuan_id">
        <?php 
            $sql = "SELECT * FROM satuan";
            $res1 = $conn->query($sql);
            while($rows1 = $res1->fetch_array(MYSQLI_BOTH)){
                echo "<option value='".$rows1['id']."'>".$rows1['nama']."</option>";
            }
            
        ?>
    </select><br>
    hpp<br>
    <input type="text" name="hpp"><br>
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