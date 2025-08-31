<?php
// Catatan: Menulis ke File

$namafile = 'log.txt';

// `file_put_contents()` adalah cara termudah untuk menulis ke file.

// Mode default: menimpa (overwrite) seluruh isi file.
// Jika file tidak ada, akan dibuat.
$konten = "Log dibuat pada " . date('Y-m-d H:i:s') . "<br>";
file_put_contents($namafile, $konten);
echo "<p>File '$namafile' telah ditimpa.</p>";

// Mode append: menambahkan konten ke akhir file.
// Gunakan flag `FILE_APPEND`.
$log_baru = "[INFO] Halaman diakses.<br>";
file_put_contents($namafile, $log_baru, FILE_APPEND);
echo "<p>Log baru telah ditambahkan ke '$namafile'.</p>";

echo "<hr><h2>Isi File '$namafile' Sekarang:</h2>";
echo "<pre>" . htmlspecialchars(file_get_contents($namafile)) . "</pre>";

?>