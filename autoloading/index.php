<?php

require_once  'App/init.php';

$produk1 = new Komik("Komik", "Fajar", "Jakarta", "1000", 100);
$produk2 = new Game("Game", "Fajar", "Sony", "2000", 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();

echo "<hr>";
new Coba;
