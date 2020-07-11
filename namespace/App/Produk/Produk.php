<?php 


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
