<?php

class Produk {
	public $judul = "judul",
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = 0;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;

	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
}

$Produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000);
$Produk2 = new Produk( "Uncharted", "Neil Druckman", "Sony Computer", 400000);
$Produk3 = new Produk("Dragon Ball");

echo "Komik : " . $Produk1->getLabel();
echo "<br>";
echo "Game : " . $Produk2->getLabel();
echo "<br>";
var_dump($Produk3);