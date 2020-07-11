<?php

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';

// require_once 'Service/User.php';

//Supaya gk usah require lagi / auto loading
spl_autoload_register(function ($class) {

  // explode = Memecah string sebuah string berdasarkan pemisah tertentu  (\)
  $class = explode('\\', $class);
  //  --> App\Produk\User = ["App","Produk","User"]

  $class = end($class);
  // Mengambil elemen terakhir dari array

  require_once __DIR__ . '/Produk/' . $class . ".php";
});


spl_autoload_register(function ($class) {

  // explode = Memecah string sebuah string berdasarkan pemisah tertentu  (\)
  $class = explode('\\', $class);
  //  --> App\Produk\User = ["App","Produk","User"]

  $class = end($class);
  // Mengambil elemen terakhir dari array

  require_once __DIR__ . '/Service/' . $class . ".php";
});
