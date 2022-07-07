<?php
class balok {
        private $p;
        private $l;
        private $t;
        function luas_permukaan_balok($p,$l,$t) {
            $this -> p = $p;
            $this -> l = $l;
            $this -> t = $t;
            $luas_permukaan=2*($p*$l+$p*$t+$l*$t);
            echo"Luas permukaan balok =" .$luas_permukaan." Cm<sup>2</sup>";
        }
        function volume_balok($p,$l,$t) {
            $this -> p = $p;
            $this -> l = $l;
            $this -> t = $t;
            echo "Volume = ".$p." x ".$l." x ".$t." = " .$this->p * $this->l * $this->t ." Cm<sup>3</sup>";
        }
        function Form_balok() {
            echo '<form method="GET">';
            echo "<h1> Luas Balok</h1>";
            echo '<br>Panjang : ';
            echo '<input type="text" name="p" placeholder="masukan nilai "> cm<br>';
            echo '<br>Lebar : ';
            echo '<input type="text" name="l" placeholder="masukan nilai ">  cm<br>';
            echo '<br>tinggi : ';
            echo '<input type="text" name="t" placeholder="masukan nilai ">  cm<br>';
            echo '<p style="margin-left:65px"><input type="submit" name="submit" value="hitung" >';
            echo '</form>';
        }    
    }
$balok = new balok;
$balok -> Form_balok();
    if (isset($_GET['submit'])){
        $p = $_GET['p'];
        $l = $_GET['l'];
         $t = $_GET['t'];
        echo "Panjang   = ".$p." Cm<br>";
        echo "Lebar     = ".$l." Cm<br>";
        echo "tinggi     = ".$t." Cm<br>";
        echo  $balok->luas_permukaan_balok($p,$l,$t);
        echo "<br>";
        echo  $balok->volume_balok($p,$l,$t);
    }  
?>