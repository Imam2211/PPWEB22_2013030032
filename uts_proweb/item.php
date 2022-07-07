<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>UTS Proweb</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Item</h2>
    <a href="item.php">LIHAT</a> | <a href="item_add.php">TAMBAH</a>
    <br>
<?php include 'koneksi.php';?>
<table width='100%' border='1'>
 <thead>
 <tr>
    <th width='5%'>No.</th>
    <th width='5%'>Act</th>
     <th width='5%'>id</th>
     <th width='5%'>item_grp_id</th>
     <th width='10%'>barcode</th>
     <th width='10%'>harga</th>
     <th width='5%'>nama</th>
     <th width='5%'>satuan_id</th>
     <th width='15%'>hpp</th>
     <th width='5%'>aktif</th>
     <th width='5%'>crt</th>
     <th width='15%'>crt_date</th>
     <th width='5%'>upd</th>
     <th width='15%'>upd_date</th>
 </tr>
 </thead>
 <tbody>
<?php
    $sql = "SELECT * FROM item";
    $res = $conn->query($sql);
    $jml_data = $res -> num_rows;
    echo "Ditemukan $jml_data data";
        if($res->num_rows > 0){
            $i = 0;
            while($dat = $res->fetch_array(MYSQLI_ASSOC)){
            $i++;
             echo "<tr>
             <td>$i</td>
             <td align='center'>
             <a href='item_detail.php?id=".$dat['id']."'><img alt='edit' width='15px' src='icon/edit.png' /></a></td>
             <td>".$dat["id"]."</td>
             <td>".$dat["item_grp_id"]."</td>
             <td>".$dat["barcode"]."</td>
             <td>".$dat["harga"]."</td>
             <td>".$dat["nama"]."</td>
             <td>".$dat["satuan_id"]."</td>
             <td>".$dat["hpp"]."</td>
             <td>".$dat["aktif"]."</td>
             <td>".$dat["crt"]."</td>
             <td>".$dat["crt_date"]."</td>
             <td>".$dat["upd"]."</td>
             <td>".$dat["upd_date"]."</td>
             </tr>";
}
}
?>
 </tbody>
</table>
</body>
</html>
