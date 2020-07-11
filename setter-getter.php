<?php

// Parent
class Produk
{
  private $judul,
    $penulis,
    $penerbit,
    $harga,
    $diskon; //dipakai di kelas ini saja (produk)

  // protected $diskon = 0; // bisa dipakai di kelas childnya (Game)

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

  public function getHarga()
  {
    return $this->harga - ($this->harga * $this->diskon / 100);
  }

  public function getJudul()
  {
    return $this->judul;
  }

  public function setJudul($judul)
  {
    // supaya bisa validasi
    if (!is_string($judul)) {
      throw new Exception("Judul harus string");
    }
    $this->judul = $judul;
  }

  public function getPenulis()
  {
    return $this->penulis;
  }

  public function setPenulis($penulis)
  {
    // supaya bisa validasi
    if (!is_string($penulis)) {
      throw new Exception("Jpenulis harus string");
    }
    $this->penulis = $penulis;
  }

  public function getPenerbit()
  {
    return $this->penerbit;
  }

  public function setPenerbit($penerbit)
  {
    // supaya bisa validasi
    if (!is_string($penerbit)) {
      throw new Exception("penerbit harus string");
    }
    $this->penerbit = $penerbit;
  }

  public function getDiskon()
  {
    return $this->diskon;
  }

  public function setDiskon($diskon)
  {
    $this->diskon = $diskon;
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
      $harga
    );
    $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfoProduk()
  {
    $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman"; //overiding parent::
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

$produk1 = new Komik("Komik", "Fajar", "Jakarta", "1000", 100);
$produk2 = new Game("Game", "Fajar", "Sony", "2000", 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo "<hr>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$produk1->setJudul("Judul Baru");
echo $produk1->getJudul(); //cuma bisa dipanggil melalui methodnya