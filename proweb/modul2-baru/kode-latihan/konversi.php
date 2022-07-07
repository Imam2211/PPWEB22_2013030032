<?php
class konversi{

        public $nilai;
    
        function nilai($x){
            $this -> nilai=$x;
        }
    
        function rumus(){
            if($this->nilai<=100 && $this->nilai>=85){
                $jumlah = 'A';
            }
            elseif($this->nilai<85 && $this->nilai>=75){
                $jumlah = 'B';
            }
            elseif($this->nilai<75 && $this->nilai>=60){
                $jumlah = 'C';
            }
            elseif($this->nilai<60 && $this->nilai>=45){
                $jumlah = 'D';
            }
            else {
                $jumlah = 'E';
            }
            return $jumlah;
        }
    
        function Form_konversi()
        {
            echo '<form method="GET">';
            echo "<h1>Konversi Nilai</h1>";
            echo '<input type="text" name="nilai" placeholder="masukan nilai ">  ';
            echo '<input type="submit" name="cek" value = "konversi" >';
            echo '</form>';
        }
    }

$grade = new konversi;
$grade->Form_konversi();

    if (isset($_GET['cek'])){
        echo 'Nilai : '.$_GET['nilai'];
        echo "<br>Dikonversi : ";
        $x=$grade ->nilai($_GET["nilai"]);
        echo $grade->rumus();
    }

?>