<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>

<body>
    <h2>NILAI</h2>

    <form method="post" action="">
        Nilai Angka <input id="input" type="initial-scale" name="nilai" /><br />
        <input type="submit" name="submit" value="Submit" />
        <br>
    </form>

    <?php
    echo "Nilai Huruf "; 
    if (isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];

        if ($nilai <= 40) {
            $nilai = "E";
            echo "<input type='text' value='$nilai'>";
        } else if ($nilai <= 55) {
            $nilai = "D";
            echo "<input type='text' value='$nilai'>";
        } else if ($nilai <= 60) {
            $nilai = "C";
            echo "<input type='text' value='$nilai'>";
        } else if ($nilai >= 70) {
            $nilai = "C+";
            echo "<input type='text' value='$nilai'>";
        } else if ($nilai > 80) {
            $nilai = " B+";
            echo "<input type='text' value='$nilai'>";
        } else if ($nilai >= 95) {
            $nilai = "A";
            echo "<input type='text' value='$nilai'>";
        }
    }
    ?>
</body>

</html>
<html>