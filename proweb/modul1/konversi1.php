<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KONVERSI</title>
</head>

<body>
    <h2>NILAI</h2>

    <form method="post" action="">
        Nilai Angka : <input id="input" type="initial-scale" name="nilai" /><br />
        <input type="submit" name="konversi" value="Submit" />
        <br><br>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];

        if ($nilai <= 40) {
            $nilai = "E";
            echo "Dikonversi : " ; 
            echo "<input type='text' value='$nilai'>";
        } 
        else if ($nilai <= 55) {
            $nilai = "D";
            echo "Dikonversi : " ; 
            echo "<input type='text' value='$nilai'>";
        } 
        else if ($nilai <= 60) {
            $nilai = "C";
            echo "<input type='text' value='$nilai'>";
        } 
        else if ($nilai <= 70) {
            $nilai = "B";
            echo "Dikonversi : " ; 
            echo "<input type='text' value='$nilai'>";
        } 
        else if ($nilai <= 85) {
            $nilai = " B+";
            echo "Dikonversi : " ; 
            echo "<input type='text' value='$nilai'>";

        } else if ($nilai <= 100) {
            $nilai = "A";
            echo "Dikonversi : " ; 
            echo "<input type='text' value='$nilai'>";
        }
        else if($nilai > 100){
            echo "<h4 style='color:red'>masukkan angka 1 - 100!!!</h4>";
        }
    }
    ?>
</body>

</html>
<html>