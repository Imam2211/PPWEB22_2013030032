<?php 
	class gadget{
		function __construct(){
			echo "SELAMAT DATANG <br><br>" ;//TAMPIL PADA SETIAP FUNGSI
		}

		public $color = 'red';


		function layar($size = 8, $jenis = 'Amoled'){  //DEFAULT//
			echo "Ukuran : ".$size;
			echo "<br>Jenis : ".$jenis;
			echo "<br>Warna : ".$this->color = 'green';//MENGGANTI WARNA
			echo "<br>";
		}
		function processor($speed, $vendor){
			echo "Kecepatan : ".$speed;
			echo "<br>Vendor : ".$vendor;
			echo "<br><br>";
		}
	}

	$hp = new gadget;
	$hp->layar(6, 'Amoled');//SESUAI URUTAN
	$hp->processor(1800, 'Snapdragon');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gadget</title>
</head>
<body>

</body>
</html>