<?php 
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
