<?php

class produk
{
	public $judul = "judul",
	       $penulis = "penulis",
	       $penerbit = "penerbit",
	       $harga = "harga";

	public function __construct($judul  , $penulis  , $penerbit  , $harga )
	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel() 
	{
		return "$this->penulis, $this->penerbit" ;
	}
}
$produk1 = new produk ("Naruto" , "Masashi Kishimoto" , "Shonen Jump" , 30000);
$produk2 = new produk ("Uncharted" , "Nell Druckmann" , "Sony Computer" , 250000);

echo "komik : ". $produk1->getLabel();
echo "<br>" ;
echo "game : ". $produk2->getLabel();
echo "<br>" ;

?>