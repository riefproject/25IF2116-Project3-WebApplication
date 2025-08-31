<?php

// Catatan: Operator Penugasan (Assignment)

// Penugasan dasar (=)
$x = 10;
echo "Nilai awal x: " . $x . "<br>";

// Shorthand operators: cara singkat untuk melakukan operasi pada variabel itu sendiri.
// Ini umum di banyak bahasa pemrograman.

// $x = $x + 5;
$x += 5;
echo "Setelah x += 5: " . $x . "<br>"; // 15

// $x = $x * 2;
$x *= 2;
echo "Setelah x *= 2: " . $x . "<br>"; // 30

// Khusus di PHP, operator titik (.) untuk konkatenasi string juga punya shorthand.
$kalimat = "Halo";
$kalimat .= " Dunia!"; // $kalimat = $kalimat . " Dunia!";
echo $kalimat . "<br>";

?>
