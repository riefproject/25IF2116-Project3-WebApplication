<?php
// Catatan: Superglobal $_GET

// Superglobals adalah variabel array bawaan PHP yang bisa diakses dari scope manapun.
// $_GET berisi data yang dikirim melalui URL (query string).
// Contoh: .../get-request.php?nama=Budi&umur=25

echo "<h3>Isi dari \$_GET:</h3>";
echo "<pre>";
print_r($_GET);
echo "</pre><hr>";

// PENTING: Selalu validasi dan bersihkan data dari user.
// 1. Periksa apakah data ada dengan `isset()`.
// 2. Bersihkan data untuk mencegah serangan XSS dengan `htmlspecialchars()`.

if (isset($_GET['nama']) && isset($_GET['umur'])) {
    $nama = htmlspecialchars($_GET['nama']);
    $umur = htmlspecialchars($_GET['umur']);

    echo "<h1>Selamat Datang, $nama!</h1>";
    echo "<p>Anda berumur $umur tahun.</p>";
} else {
    echo "<p>Klik link di bawah untuk mencoba:</p>";
}

// Membuat link dengan query string
echo "<hr>";
echo "<a href='get-request.php?nama=Siti&umur=22'>Link dengan data Siti</a><br>";
echo "<a href='get-request.php?nama=Joko&umur=30'>Link dengan data Joko</a><br>";

?>