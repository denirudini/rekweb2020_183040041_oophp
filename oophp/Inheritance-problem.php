<?php

class Produk {
	public $judul ,
			$penulis ,
			$penerbit,
			$harga,
			$jmlHalaman,
			$waktuMain,
			$tipe;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;

	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap() {
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		if( $this->tipe == "komik") {
			$str .= " - {$this->jmlHalaman} Halaman.";
		}else if( $this->tipe == "Game") {
			$str .= " ~ {$this->waktuMain} Jam.";
		}
		return $str;

	}
}

class CetakInfoProduk {
	public function cetak( Produk $Produk ) {
		$str = "{$Produk->judul} | {$Produk->getLabel()} (Rp. {$Produk->harga})";
		return $str;
	}

}

$Produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 100, 0, "Komik");
$Produk2 = new Produk( "Uncharted", "Neil Druckman", "Sony Computer", 400000, 0, 50, "Game");

echo $Produk1->getInfoLengkap();

