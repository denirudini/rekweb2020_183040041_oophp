<?php

// require_once 'Produk/infoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';

spl_autoload_register(function( $class ) {
	$class = explode('\\', $class);
	$class = end($class);
	require_once __DIR__ . '/Produk/' . $class . '.php';
});

spl_autoload_register(function( $class ) {
		$class = explode('\\', $class);
	$class = end($class);
	require_once __DIR__ . '/Service/' . $class . '.php';
});