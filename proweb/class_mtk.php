<?php
    /*1. Class Balok
      2. Class Bola
      3. Class Konversi NIlai
    */
    class balok {
        private $p;
        private $l;
        private $t;

        function luas_balok($p,$l) {
            $this -> p = $p;
            $this -> l = $l;
            echo "Luas = ".$p." x ".$l." = ".$this->p * $this->l." Cm<sup>2</sup>";
        }

        function volume_balok($p,$l,$t) {
            $this -> p = $p;
            $this -> l = $l;
            $this -> t = $t;
            echo "Volume = ".$p." x ".$l." x ".$t." = " .$this->p * $this->l * $this->t ." Cm<sup>3</sup>";
        }

        function Form_luasbalok() {
            echo ' <a href="index.php"><h2>Back to Index </h2></a>';
            echo '<form method="GET">';
            echo "<h1> Luas Balok</h1>";
            echo '<br>Panjang : ';
            echo '<input type="text" name="p" placeholder="masukan nilai "> cm<br>';
            echo '<br>Lebar : ';
            echo '<input type="text" name="l" placeholder="masukan nilai ">  cm<br>';
            echo '<p style="margin-left:65px"><input type="submit" name="submit" value="hitung" >';
            echo '</form>';
        }

        function Form_volumebalok() {
            echo '<form method="GET">';
            echo "<h1>Volume Balok</h1>";
            echo '<br>Panjang : ';
            echo '<input type="text" name="p" placeholder="masukan nilai ">  cm<br>';
            echo '<br>Lebar : ';
            echo '<input type="text" name="l" placeholder="masukan nilai ">  cm<br>';
            echo '<br>Tinggi : ';
            echo '<input type="text" name="t" placeholder="masukan nilai ">  cm<br>';
            echo '<p style="margin-left:65px"><input type="submit" name="volume" value="hitung" >';
            echo '</form>';
        }
    }

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
            echo ' <a href="index.php"><h2>Back to Index </h2></a>';
            echo '<form method="GET">';
            echo "<h1>Bola</h1>";
            echo 'Jari-jari = <input type="text" name="r" placeholder="masukan jari-jari "> <br>';
            echo '<br> <input type="submit" name="cek" >';
            echo '</form>';
        }
    }

    class konversi{

        public $nilai;
    
        function nilai($nl){
            $this -> nilai=$nl;
        }
    
        function rumus(){
            if($this->nilai<=100 && $this->nilai>=80){
                $jumlah = 'A';
            }
            elseif($this->nilai<=79 && $this->nilai>=70){
                $jumlah = 'B';
            }
            elseif($this->nilai<=69 && $this->nilai>=60){
                $jumlah = 'C';
            }
            elseif($this->nilai<=59 && $this->nilai>=50){
                $jumlah = 'D';
            }
            else {
                $jumlah = 'E';
            }
            return $jumlah;
        }
    
        function Form_konversi()
        {
            echo ' <a href="index.php"><h2>Back to Index </h2></a>';
      
            echo '<form method="GET">';
            echo "<h1>Konversi Nilai</h1>";
            echo '<input type="text" name="nilai" placeholder="masukan nilai ">  ';
            echo '<input type="submit" name="cek" >';
            echo '</form>';
        }
    }
?>