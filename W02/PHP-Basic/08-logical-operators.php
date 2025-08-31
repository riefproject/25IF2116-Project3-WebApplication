<?php

// Catatan: Operator Logika

// `&&` (and) dan `||` (or) berfungsi seperti pada umumnya.
// `&&` punya presedensi (urutan eksekusi) lebih tinggi dari `and`.
// `||` punya presedensi lebih tinggi dari `or`.
// Sebaiknya selalu gunakan `&&` dan `||` untuk menghindari kebingungan.

$umur = 20;
$punya_sim = true;

// Kondisi true jika KEDUA ekspresi true.
if ($umur >= 17 && $punya_sim) {
    echo "Boleh menyetir.<br>";
}

// `!` (not): Membalik nilai boolean.
$sedang_hujan = false;
if (!$sedang_hujan) {
    echo "Cuaca cerah, ayo pergi!<br>";
}

// `xor`: True jika salah satu true, tapi tidak keduanya. Jarang digunakan.
$lampu1_nyala = true;
$lampu2_nyala = false;
if ($lampu1_nyala xor $lampu2_nyala) {
    echo "Hanya satu dari dua lampu yang menyala.<br>";
}

?>
