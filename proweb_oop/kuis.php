<?php
     class volume{
          public $phi = 3.14;
          function bola($l,$t,$p){
               $vol = $p*$l*$t;
               return $vol;
          }
          function balok($r){
               $vol = 4/3*$this->phi*pow($r,3);
               return $vol;
          }
     function Form_luasbola(){
            echo '<form method="GET">';
            echo "<h1>Bola</h1>";
            echo 'diameter = <input type="text" name="r" placeholder="masukan diameter "> <br>';
            echo '<br> <input type="submit" name="cek" >';
            echo '</form>';
        }
    }

$bola = new volume;
$bola -> Form_luasbola();

if (isset($_GET['r'])){
    $r = $_GET['r'];
    echo "diameter= ".$r." Cm<br>";
    echo $bola -> balok($r).' Cm<sup>3</sup>';
}
?>