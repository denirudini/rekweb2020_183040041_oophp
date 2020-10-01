<?php

require_once 'App/init.php';


$Produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 100);
$Produk2 = new Game( "Uncharted", "Neil Druckman", "Sony Computer", 400000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $Produk1 );
$cetakProduk->tambahProduk( $Produk2 );
echo $cetakProduk->cetak();