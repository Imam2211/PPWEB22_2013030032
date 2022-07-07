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
    <h2>Item Grup</h2>
    <a href="item_grp.php">LIHAT</a> | <a href="item_grp_add.php">TAMBAH</a>
    <br>
<?php include 'koneksi.php';?>
<table width='100%' border='1'>
 <thead>
 <tr>
    <th width='5%'>No.</th>
    <th width='5%'>Act</th>
     <th width='5%'>id</th>
     <th width='5%'>upline</th>
     <th width='10%'>level</th>
     <th width='5%'>nama</th>
     <th width='5%'>keterangan</th>
     <th width='5%'>aktif</th>
     <th width='5%'>crt</th>
     <th width='15%'>crt_date</th>
     <th width='5%'>upd</th>
     <th width='5%'>upd_date</th>
 </tr>
 </thead>
 <tbody>
<?php
    $sql = "SELECT * FROM item_grp";
    $res = $conn->query($sql);
    $jml_data = $res -> num_rows;
    echo "Ditemukan $jml_data data";
        if($res->num_rows > 0){
            $i = 0;
            while($dat = $res->fetch_array(MYSQLI_ASSOC)){
            $i++;
             echo "<tr>
             <td>$i</td>
             <td>
             <a href='item_grp_detail.php?id=".$dat['id']."'>Edit</a></td>
             <td>".$dat["id"]."</td>
             <td>".$dat["upline"]."</td>
             <td>".$dat["level"]."</td>
             <td>".$dat["nama"]."</td>
             <td>".$dat["keterangan"]."</td>
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
