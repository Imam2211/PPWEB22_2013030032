<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PROWEB</title>
	<style type="text/css">
		#nama{
			color: red;
			font-style: oblique;
		}
	</style>
</head>
<body>

<h1 style="font-family: fantasy;">Dasar PHP</h1>
	<?php 
		echo "<h3 id='nama'> M. Imam Fathulloh Al Bahri </h3> ";
		//komentar 1 /* komentar 2 */
		//Variabel PHP ($)
		$angka1 = 30 ;
		$angka2 = 10 ;
		echo " nilai angka1 = $angka1 " ;
		echo '<br>nilai angka2 = '.$angka2 ;
		//penjumlahan
		$total = $angka1 + $angka2 ;
		echo "<br><br> angka1 + angka2 = $total " ;
	?>

</body>
</html>