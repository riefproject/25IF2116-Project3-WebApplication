<?php

// Catatan: Struktur Kontrol Switch

$hari = "Jumat";

switch ($hari) {
    case "Senin":
        echo "Awal pekan.<br>";
        break; // `break` wajib ada untuk keluar dari switch. 
    
    // "Fall through": beberapa case bisa menjalankan blok kode yang sama.
    case "Selasa":
    case "Rabu":
    case "Kamis":
        echo "Hari kerja.<br>";
        break;

    case "Jumat":
        echo "Menuju akhir pekan!<br>";
        break;

    default: // `default` dieksekusi jika tidak ada case yang cocok.
        echo "Akhir pekan!<br>";
        break;
}

// Poin Penting: Switch di PHP menggunakan perbandingan `==` (loose comparison).
$angka = '2'; // string
switch ($angka) {
    case 2: // integer
        // Blok ini akan dieksekusi karena '2' == 2 adalah true.
        echo "Switch melakukan loose comparison.<br>";
        break;
}

?>