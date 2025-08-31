<?php

// Catatan: Fungsi-Fungsi Umum untuk String

$kalimat = "Saya sedang belajar PHP di kelas Proyek 3";
echo "Kalimat asli: '" . $kalimat . "'<br><br>";

// strlen(): menghitung panjang string (jumlah byte, bukan karakter multibyte)
echo "Panjang kalimat: " . strlen($kalimat) . " karakter.<br>";

// str_word_count(): menghitung jumlah kata
echo "Jumlah kata: " . str_word_count($kalimat) . " kata.<br>";

// strpos(): mencari posisi kemunculan pertama sebuah substring.
// Penting: return 0 jika ditemukan di awal, dan `false` jika tidak ditemukan.
// Perlu dicek dengan `=== false`.
$posisi = strpos($kalimat, "PHP");
if ($posisi !== false) {
    echo "4. Posisi kata 'PHP': " . $posisi . "<br>";
}

// str_replace(): mengganti semua kemunculan sebuah substring.
$kalimat_baru = str_replace("PHP", "JavaScript", $kalimat);
echo "5. Setelah diganti: " . $kalimat_baru . "<br>";

// strtoupper(), strtolower(), ucwords(): manipulasi case.
echo "6. Huruf besar: " . strtoupper($kalimat) . "<br>";
echo "7. Huruf kecil: " . strtolower($kalimat) . "<br>";
echo "8. Judul: " . ucwords($kalimat) . "<br>";

// substr(): mengambil potongan string (substring).
// substr(string, start_index, optional_length)
$kata_belajar = substr($kalimat, 12, 7);
echo "9. Mengambil kata 'belajar': " . $kata_belajar . "<br>";

?>