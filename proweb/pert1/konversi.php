<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
        <h2>NILAI</h2>

        <form method="post" >
            Nilai Angka <input id="input" type="initial-scale" name="nilai" /><br />
            <input type="submit" name="submit" value="Submit" /> <br />
            Nilai Huruf <input type="text" name="huruf" />
        </form> 

    <?php
        if(isset($_POST['submit'])){ 
                $nilai=$_POST['nilai'];

                if ($nilai<40)
                {
                     echo "$nilai E"; 
                }
                else if($nilai<55)
                {
                     echo "$nilai D"; 
                }
                else if($nilai<60)
                {
                     echo "$nilai C"; 
                }
                else if($nilai>70)
                {
                    echo "$nilai B"; 
                }
                else if($nilai>80)
                {
                    echo "$nilai B+"; 
                }
                else if ($nilai=100)
                {
                    echo "$nilai A"; 
                }
            }
    ?>
</body>
</html>
<html> 
