<?php

// SESSION adalah cara untuk menyimpan informasi dalam variabel untuk digunakan di beberapa halaman.
// Berbeda dengan Cookie, informasi Session tidak disimpan di komputer pengguna, melainkan di server.

// 1. Memulai Session
// Untuk menggunakan session, Anda WAJIB memanggil fungsi session_start() di bagian paling atas
// dari setiap halaman yang ingin menggunakan session. Tidak boleh ada output (seperti echo, HTML)
// sebelum fungsi ini dipanggil.
session_start();

// 2. Menyimpan Data ke dalam Session
// $_SESSION adalah array asosiatif tempat kita bisa menyimpan data.
echo "<h1>Belajar PHP Session</h1>";

// Simpan beberapa data ke dalam session
$_SESSION["username"] = "budi_santoso";
$_SESSION["email"] = "budi.s@example.com";
$_SESSION["login_time"] = time(); // time() mengembalikan timestamp saat ini

// Contoh counter sederhana
// Periksa apakah session counter sudah ada, jika belum, buat dengan nilai 0.
if (!isset($_SESSION['page_views'])) {
    $_SESSION['page_views'] = 1;
} else {
    // Jika sudah ada, tambahkan nilainya.
    $_SESSION['page_views']++;
}

echo "<p>Data session telah dibuat/diperbarui.</p>";

// 3. Mengakses Data Session
// Kita bisa langsung mengaksesnya dari variabel $_SESSION
if (isset($_SESSION["username"])) {
    echo "<p>Selamat datang kembali, " . htmlspecialchars($_SESSION["username"]) . "!</p>";
    echo "<p>Anda telah me-refresh halaman ini sebanyak " . $_SESSION['page_views'] . " kali.</p>";
}

// 4. Menghapus Data Session
// Untuk menghapus satu item dari session:
// unset($_SESSION['email']);

// Untuk menghapus semua data session:
// session_unset(); // Menghapus semua variabel session
// session_destroy(); // Menghancurkan session itu sendiri

echo "<hr>";
echo "<h2>Navigasi</h2>";
echo "<p>Refresh halaman ini untuk melihat counter 'page_views' bertambah.</p>";

echo "<p><a href='sessions-destroy.php'>Klik di sini</a> untuk menghapus session dan logout.</p>";


// Menampilkan semua data session untuk debugging
echo "<hr>";
echo "<?php
// Catatan: Superglobal $_SESSION

// Session adalah cara menyimpan data di server yang bisa diakses di beberapa halaman.
// Berguna untuk data login, keranjang belanja, dll.

// PENTING: `session_start()` harus dipanggil di paling atas script,
// sebelum ada output apapun (HTML, echo, spasi putih).
session_start();

echo "<h1>Belajar PHP Session</h1>";

// Menyimpan data ke session. $_SESSION adalah array asosiatif.
$_SESSION["username"] = "budi_santoso";
$_SESSION["role"] = "admin";

// Contoh counter kunjungan halaman.
if (!isset($_SESSION['page_views'])) {
    $_SESSION['page_views'] = 1;
} else {
    $_SESSION['page_views']++;
}

echo "<p>Selamat datang, " . htmlspecialchars($_SESSION["username"]) . "!</p>";
echo "<p>Anda telah mengunjungi halaman ini " . $_SESSION['page_views'] . " kali.</p>";

// Untuk menghapus session, lihat `sessions-destroy.php`.
?>
<hr>
<p><a href="sessions-destroy.php">Logout (Hapus Session)</a></p>
<h3>Isi Lengkap $_SESSION:</h3>
<pre><?php print_r($_SESSION); ?></pre>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Sessions</title>
    <style>
        body { font-family: sans-serif; }
        pre { background-color: #f4f4f4; padding: 10px; border: 1px solid #ddd; }
    </style>
</head>
<body>
</body>
</html>