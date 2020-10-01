<?php

class Produk {
	public $judul = "judul",
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = 0;

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
}

// $Produk1 = new Produk();
// $Produk1->judul = "Naruto";
// var_dump($Produk1);

// $Produk2 = new Produk();
// $Produk2->judul = " Uncharted";
// $Produk2->tambah = "Football";
// var_dump($Produk2);

$Produk3 = new Produk();
$Produk3-> judul = "Naruto";
$Produk3-> penulis = "Masashi Kishimoto";
$Produk3-> penerbit = "Shonen Jump";
$Produk3-> harga = 300000;

$Produk4 = new Produk();
$Produk4-> judul = "Uncharted";
$Produk4-> penulis = "Neil Druckman";
$Produk4-> penerbit = "Sony Computer";
$Produk4-> harga = 400000;


echo "Komik : " . $Produk3->getLabel();
echo "<br>";
echo "Game : " . $Produk4->getLabel();