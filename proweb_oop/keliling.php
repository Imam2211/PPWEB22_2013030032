<?php
class matematika{ 
     private $phi = 3.14;
     function tambah($a,$b){
          $c = $a + $b;
          return $c;
     }
     function kuadrat($x){
          return $x * $x;
     }
     function keliling_lingkaran($r){
          $kel = 2 * $this->phi  * $r;
          return $kel;
     }
     function luas_lingkaran($r){
          $luas = $this->phi * $this->kuadrat($r);
          return $luas;
     }     
}
$math = new matematika();
$jari = 10;
$kel_lingkaran = $math->keliling_lingkaran($jari);
$luas_lingkaran = $math->luas_lingkaran($jari);

echo "Menghitung Keliling dan Luas Lingkaran<br>";
echo "Jari-Jari : ".$jari."<br><br>";
echo "Keliling = ".($kel_lingkaran)."<br>";
echo "Luas = ".$luas_lingkaran;
?> 