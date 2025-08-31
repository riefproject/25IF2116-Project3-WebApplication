<?php
// Catatan: Include dan Require

// `include` dan `require` menyisipkan kode dari file lain.
// Ini adalah dasar untuk membuat template website (header, footer, dll).

// Perbedaan Utama:
// - `require`: Jika file tidak ditemukan, script berhenti (Fatal Error).
//              Gunakan untuk file-file krusial (koneksi DB, fungsi inti).
// - `include`: Jika file tidak ditemukan, script lanjut dengan peringatan (Warning).
//              Gunakan untuk file-file non-krusial (template minor, widget).

echo "<h1>Halaman Utama</h1>";

require 'parts/header.php';
include 'parts/content.php';

// `require_once` dan `include_once` memastikan file hanya disisipkan satu kali.
// Ini mencegah error redeklarasi fungsi/variabel. Sangat direkomendasikan.
require_once 'parts/variables.php';
echo "<p>Versi Aplikasi: $app_version</p>";

// Variabel dari file yang di-include ($appName dari header.php) bisa diakses di sini.
echo "<p>Nama aplikasi dari header: $appName</p>";

require 'parts/footer.php';

?>
