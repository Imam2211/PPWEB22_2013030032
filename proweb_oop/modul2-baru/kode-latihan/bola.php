<?php
class bola{
        private $r;
        public  $pi = 3.14;
    
        function luas_bola($r) {
            $this -> r = $r;
            $kuadrat = $this -> r *$this -> r;
            $luas = 4 * $this->pi * $kuadrat;
            echo 'Luas = 4 x '.$this->pi.' x '.$this->r.'<sup>2</sup> = '.  ($luas).' Cm <sup>2</sup><br>';
        }
        function volume_bola($r){
            $this -> r = $r;
            $pangkat3 = $this -> r * $this -> r * $this -> r;
            $volume = 4/3 * $this->pi * $pangkat3;
            echo 'Volume = 4/3 x '.$this->pi.' x '.$this->r.'<sup>3</sup> =' . ($volume).' Cm<sup>3</sup>';
        }

        function Form_luasbola(){
            echo '<form method="GET">';
            echo "<h1>Bola</h1>";
            echo 'Jari-jari = <input type="text" name="r" placeholder="masukan jari-jari "> <br>';
            echo '<br> <input type="submit" name="cek" >';
            echo '</form>';
        }
    }

$bola = new bola;
$bola -> Form_luasbola();

if (isset($_GET['r'])){
    $r = $_GET['r'];
    echo "Jari-jari  &nbsp;= ".$r." Cm<br>";
    echo  $bola -> luas_bola($r);
    echo $bola -> volume_bola($r);
}
?>