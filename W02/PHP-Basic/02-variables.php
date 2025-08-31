<?php

// Catatan: Variabel di PHP
// Ciri khas utama: semua variabel diawali dengan simbol dolar ($).

$nama = "Budi"; // Tipe data string
$umur = 25;   // Tipe data integer

// `echo` digunakan untuk menampilkan output.
// Tanda titik (.) adalah operator untuk menggabungkan string (konkatenasi).
echo "Nama: " . $nama . "<br>";
echo "Umur: " . $umur . " tahun<br>";

// PHP adalah bahasa "loosely typed", tipe data variabel bisa berubah.
$umur = "dua puluh enam"; // Tipe data berubah dari integer menjadi string.
echo "Umur sekarang: " . $umur . " tahun<br>";

// Penamaan variabel bersifat case-sensitive.
$NAMA = "Siti";
echo "Nama lain: " . $NAMA . "<br>"; // $NAMA dan $nama adalah dua variabel yang berbeda.

?>