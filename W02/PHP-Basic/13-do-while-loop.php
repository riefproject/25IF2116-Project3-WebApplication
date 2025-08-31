<?php

// Catatan: Perulangan Do-While

// Perbedaan utama dengan `while`: blok `do` dijamin berjalan minimal satu kali,
// baru kemudian kondisi `while` diperiksa.

$counter = 10;

do {
    // Kode ini tetap berjalan sekali, meskipun kondisinya (10 < 5) dari awal sudah false.
    echo "Ini berjalan sekali.<br>";
} while ($counter < 5);


// Kapan berguna? Saat kita perlu melakukan aksi dulu baru cek kondisi.
// Contoh: menampilkan menu, meminta input, lalu validasi input tersebut.

?>