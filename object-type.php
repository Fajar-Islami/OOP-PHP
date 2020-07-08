<?php

// Jualan produk
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
}

class CetakInfoProduk
{
  public function cetak(Produk $produk) //hanya menerima parameter yang jenisnya kelas Produk || membuat object sbg tipe data
  {
    return $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
  }
}

$produk1 = new Produk("Hidup", "Fajar", "Jakarta", "10000");
$produk2 = new Produk("Mati", "Fajar", "Jakarta", "2000");

echo "Buku 1 : " . $produk1->getLabel();
echo "<br>";
echo "Buku 2 : " . $produk2->getLabel();
echo "<br>";

// Instansiasi produk baru
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
