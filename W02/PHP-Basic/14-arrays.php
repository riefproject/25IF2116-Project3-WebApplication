<?php

// Catatan: Array Numerik (Indexed Array)

// Sintaks modern (PHP 5.4+) menggunakan kurung siku `[]`.
$buah = ["Apel", "Jeruk", "Mangga", "Anggur"];

// Sintaks lama menggunakan `array()`.
$hewan = array("Kucing", "Anjing", "Burung");

// Mengakses elemen menggunakan indeks berbasis nol.
echo "Elemen pertama dari array buah: " . $buah[0] . "<br>";

// Untuk debugging, `print_r()` atau `var_dump()` lebih berguna daripada `echo`.
// `print_r()` menampilkan output yang lebih mudah dibaca manusia.
echo "<br>Isi array hewan:";
print_r($hewan);

// Menambah elemen baru di akhir array.
$buah[] = "Durian";

// `count()` untuk mendapatkan jumlah elemen.
echo "<br>Jumlah buah sekarang: " . count($buah) . "<br>";

// `unset()` untuk menghapus elemen.
// Perhatian: `unset()` tidak akan mengurutkan ulang indeks array.
unset($hewan[1]); // Menghapus "Anjing"
echo "<br>Array hewan setelah unset:";
print_r($hewan); // Indeks akan menjadi 0 dan 2.

?>