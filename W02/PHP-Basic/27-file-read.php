<?php
// Catatan: Membaca File

$namafile = 'contoh-file.txt';

// Selalu cek apakah file ada dan bisa diakses sebelum beroperasi.
if (!file_exists($namafile)) {
    // Jika tidak ada, buat file contoh agar script tidak error.
    file_put_contents($namafile, "Baris pertama.<br>Baris kedua.<br>");
    echo "<p>File contoh '$namafile' telah dibuat. Refresh halaman.</p>";
    exit;
}

// Cara termudah: `file_get_contents()`
// Membaca seluruh file ke dalam satu string. Tidak efisien untuk file besar.
echo "<h2>Isi file via file_get_contents():</h2>";
$isi_file = file_get_contents($namafile);
echo "<pre>" . htmlspecialchars($isi_file) . "</pre>";

// Cara lain: `file()`
// Membaca file ke dalam array, setiap baris menjadi satu elemen.
echo "<hr><h2>Isi file via file():</h2>";
$baris_array = file($namafile, FILE_IGNORE_NEW_LINES); // flag untuk hapus karakter newline
print_r($baris_array);

?>