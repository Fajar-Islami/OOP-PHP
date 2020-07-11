<?php

// define('NAMA', 'Menggunakan DEFINE : Fajar Islami'); // Tidak bisa simpan kedalam sebuah kelas, jadi harus di simpan diluar, tidak bisa untuk OOP
// echo NAMA;

// echo "<br>";

// const CATATAN = "Menggunakan  Const"; // Bisa simpan didalam sebuah kelas, untuk OOP
// echo CATATAN;


// class Coba
// {
//   const Nama = 'Fajar';
// }

// echo Coba::Nama;

// echo __LINE__; // Menampilkan dimana constant ini ditulis
// echo "<br>";
// echo __FILE__; // Menampilkan file constant ini 
// echo "<br>";

// function coba()
// {
//   return __FUNCTION__;
// }

// echo coba();


class Coba
{
  public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
