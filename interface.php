<?php
interface InfoProduk
{
  public function getInfoProduk();
}

// Parent
abstract class Produk
{
  protected $judul,
    $penulis,
    $penerbit,
    $harga,
    $diskon;

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

  abstract public function getInfo();

  public function getLabel()
  {
    return "$this->penulis,$this->penerbit";
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
class Komik extends Produk implements InfoProduk
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
    $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman"; // karena parent:: ngambil dri method abstrak yang tidak punya impelementasi
    return $str;
  }

  public function getInfo()
  {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $str;
  }
}


// Child
class Game extends Produk implements InfoProduk
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
    $str = "Game : " .  $this->getInfo() . " ~ {$this->waktuMain} Jam";
    return $str;
  }

  public function getInfo()
  {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $str;
  }
}


//
class CetakInfoProduk
{
  public $daftarProduk = array(); //Menyimpan produk yang akan dicetak

  public function tambahProduk(Produk $produk)
  {
    $this->daftarProduk[] = $produk;
  }

  public function cetak()
  {
    $str = "Daftar Produk : <br>";

    foreach ($this->daftarProduk as $p) {
      $str .= "- {$p->getInfoProduk()} <br>";
    }

    return $str;
  }
}

// object
$produk1 = new Komik("Komik", "Fajar", "Jakarta", "1000", 100);
$produk2 = new Game("Game", "Fajar", "Sony", "2000", 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();
