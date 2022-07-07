<?php 

    $angka1 = @$_POST['angka1'];
    $angka2 = @$_POST['angka2'];
    $hasil = @$_POST['hasil'];

    if(isset ($_POST['tambah']))
    {
      $hasil = $angka1 + $angka2;
    };

    if(isset ($_POST['kurang']))
    {
      $hasil = $angka1 - $angka2;
    };

    if(isset ($_POST['bagi']))
    {
      $hasil = $angka1 / $angka2;
    };

    if(isset ($_POST['kali']))
    {
      $hasil = $angka1 * $angka2;
    };

    if(isset ($_POST['mod']))
    {
      $hasil = $angka1 % $angka2;
    };
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kalkulator</title>
</head>
<body>

<form method="post">
    <table align="center">
      <tr>
        <td align="center"><h1 colspan="3">KALKULATOR SEDERHANA</h1></td>
      </tr>

        <tr>
            <td>
              <input type="text" name="angka1" value="<?= $angka1 ?>">
              <input type="text" name="angka2" value="<?= $angka2  ?>">
              <?php echo " = "  ?>
              <input type="text" name="hasil" value="<?= $hasil ?>">
            </td>
        </tr>
         <tr>
            <td>
              <input type="submit" name="tambah" value="+">
              <input type="submit" name="kurang" value="-">
              <input type="submit" name="bagi" value="/">
              <input type="submit" name="kali" value="x">
              <input type="submit" name="mod" value="mod">
            </td>
        </tr>

    </table>
</form>

</body>
</html>
