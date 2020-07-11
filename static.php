<?php
// 

// class ContohStatic
// {
//   public static $angka = 1;

//   public static function halo()
//   {
//     return "Halo." . self::$angka++ . " kali"; //mengambil property angka
//   }
// }

// echo ContohStatic::$angka; //Cara akses property/ method yang keyword static
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();


class Contoh
{
  public static $angka = 1;

  public function halo()
  {
    return "Halo." . self::$angka++ . " kali .<br>"; //mengambil property angka
  }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<hr>";
$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
