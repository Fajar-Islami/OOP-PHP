<?php

// Parent
class Produk
{
  public $judul,
    $penulis,
    $penerbit,
    $harga;

  public function __construct(
    $judul = "judul",
    $penulis = 'Penulis',
    $penerbit  = "Penerbit",
    $harga = 0
  ) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel()
  {
    return "$this->penulis,$this->penerbit";
  }

  public function getInfoProduk()
  {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $str;
  }
}

// Child
class Komik extends Produk
{
  public $jmlHalaman;

  public function __construct(
    $judul = "judul",
    $penulis = 'Penulis',
    $penerbit  = "Penerbit",
    $harga = 0,
    $jmlHalaman = 0
  ) {
    parent::__construct(
      $judul,
      $penulis,
      $penerbit,
      $harga = 0
    );
    $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfoProduk()
  {
    $str = "Komik : " . parent::getInfoProduk() . "- {$this->jmlHalaman} Halaman"; //overiding parent::
    return $str;
  }
}

// Child
class Game extends Produk
{
  public $waktuMain;

  public function __construct(
    $judul = "judul",
    $penulis = 'Penulis',
    $penerbit  = "Penerbit",
    $harga = 0,
    $waktuMain = 0
  ) {
    parent::__construct(
      $judul,
      $penulis,
      $penerbit,
      $harga
    );
    $this->waktuMain = $waktuMain;
  }

  public function getInfoProduk()
  {
    $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam";
    return $str;
  }
}

class CetakInfoProduk
{
  public function cetak(Produk $produk) //hanya menerima parameter yang jenisnya kelas Produk || membuat object sbg tipe data
  {
    return $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
  }
}

$produk1 = new Komik("Komik", "Fajar", "Jakarta", "10000", 100);
$produk2 = new Game("Game", "Fajar", "Sony", "2000", 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
