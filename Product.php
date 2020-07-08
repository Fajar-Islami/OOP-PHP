<?php

// Jualan produk
class Produk
{
  public $judul = "judul",
    $penulis = 'Penulis',
    $penerbit  = "Penerbit",
    $harga = 0;

  public function getLabel()
  {
    return "$this->penulis,$this->penerbit";
  }
}

// $produk1 = new Produk();
// $produk1->judul = 'Naruto';
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = 'Rumble';
// $produk2->tambah = 'Rumble';
// var_dump($produk2);


$produk3 = new Produk();
$produk3->judul = 'Hidup';
$produk3->penulis = 'Fajar';
$produk3->penerbit = 'Jakarta';
$produk3->harga = '3000';
// var_dump($produk3);

// echo "Komik : $produk3->judul,$produk3->Penulis,$produk3->Penerbit";
// echo "<br>";
// echo "<br>";

$produk4 = new Produk();
$produk4->judul = 'Mati';
$produk4->penulis = 'Fajar';
$produk4->penerbit = 'Bandung';
$produk4->harga = '90000';


echo "Buku 1 : " . $produk3->getLabel();
echo "<br>";
echo "<br>";
echo "Buku 2 : " . $produk4->getLabel();
