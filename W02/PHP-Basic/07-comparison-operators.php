<?php

// Catatan: Operator Perbandingan

$a = 10;
$b = 5;
$c = "10"; // Ini string, bukan integer

// Poin Penting di PHP: Perbedaan `==` dan `===`.

// `==` (Sama Dengan): Hanya membandingkan nilai (loose comparison).
// Akan melakukan konversi tipe data jika perlu.
echo "a == c (10 == \"10\"): ";
var_dump($a == $c); // true, karena string "10" dikonversi ke integer 10.

// `===` (Identik): Membandingkan nilai DAN tipe data (strict comparison).
// Tidak ada konversi tipe data. Ini lebih aman dan direkomendasikan.
echo "a === c (10 === \"10\"): ";
var_dump($a === $c); // false, karena integer tidak identik dengan string.

// `!=` (Tidak Sama) dan `!==` (Tidak Identik) adalah kebalikannya.
echo "a != c (10 != \"10\"): ";
var_dump($a != $c); // false
echo "a !== c (10 !== \"10\"): ";
var_dump($a !== $c); // true

// Operator lainnya (>, <, >=, <=) berfungsi seperti biasa dan melakukan konversi tipe.
echo "a >= c (10 >= \"10\"): ";
var_dump($a >= $c); // true

// Spaceship Operator (`<=>`) - PHP 7+
// Mengembalikan -1 (kiri < kanan), 0 (sama), atau 1 (kiri > kanan).
// Berguna untuk fungsi sorting.
echo "a <=> b (10 <=> 5): ";
var_dump($a <=> $b); // 1
echo "a <=> c (10 <=> \"10\"): ";
var_dump($a <=> $c); // 0 (dianggap sama karena perbandingan loose)

?>
