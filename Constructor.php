<?php

// Jualan produk
class Produk1
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
}

$produk1 = new Produk1("Hidup", "Fajar", "Jakarta", "1");
$produk2 = new Produk1("Mati", "Fajar", "Jakarta", "2000");
$produk3 = new Produk1("Melayang");

echo "Buku 1 : " . $produk1->getLabel();
echo "<br>";
echo "Buku 2 : " . $produk2->getLabel();
echo "<br>";
echo "Buku 3 : " . $produk3->getLabel();
echo "<br>";
