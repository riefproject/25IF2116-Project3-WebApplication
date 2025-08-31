<?php
// Catatan: Superglobal $_POST

// $_POST adalah superglobal array yang menampung data dari form HTML
// yang dikirim dengan `method="post"`.

// Keunggulan POST: data tidak tampil di URL dan tidak ada batasan panjang.

echo "<h1>Halaman Proses Form</h1>";

// Cara paling umum untuk cek apakah form sudah di-submit adalah
// dengan memeriksa keberadaan (isset) tombol submit di dalam $_POST.
if (isset($_POST['submit_button'])) {

    echo "<p>Form telah di-submit!</p>";

    // Sama seperti $_GET, selalu validasi dan bersihkan data.
    $nama = isset($_POST['nama_lengkap']) ? htmlspecialchars($_POST['nama_lengkap']) : '[tidak diisi]';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '[tidak diisi]';

    echo "<h2>Data yang Diterima:</h2>";
    echo "<ul>";
    echo "<li>Nama: $nama</li>";
    echo "<li>Email: $email</li>";
    echo "</ul>";

} else {
    echo "<p>Akses halaman ini melalui <a href='form-handling.php'>form</a>.</p>";
}

?>
<hr>
<a href="form-handling.php">Kembali ke Form</a>
