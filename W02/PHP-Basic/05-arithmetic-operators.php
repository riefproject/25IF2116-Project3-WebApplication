<?php

// Catatan: Operator Aritmatika

$angka1 = 10;
$angka2 = 5;

// Penjumlahan (+), Pengurangan (-), Perkalian (*), Pembagian (/)
// Berfungsi seperti pada umumnya.
echo "10 + 5 = " . ($angka1 + $angka2) . "<br>";
echo "10 / 5 = " . ($angka1 / $angka2) . "<br>";

// Modulus (%): sisa hasil bagi.
// Berguna untuk cek ganjil/genap.
echo "10 % 3 = " . ($angka1 % 3) . "<br>"; // 10 dibagi 3 adalah 3 sisa 1.

// Eksponensial (**): pangkat.
// Diperkenalkan di PHP 5.6.
echo "5 ** 3 = " . ($angka2 ** 3) . "<br>"; // 5 pangkat 3

// Urutan operasi (presedensi) sama seperti matematika: (), **, * / %, + -
$hasil_campuran = ($angka1 + $angka2) * 3;
echo "(10 + 5) * 3 = " . $hasil_campuran . "<br>";

?>
