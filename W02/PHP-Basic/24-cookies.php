<?php
// Catatan: Superglobal $_COOKIE

// Cookie adalah data yang disimpan di browser pengguna, bukan di server.
// Berguna untuk mengingat preferensi non-kritis (misal: tema dark/light).

// PENTING: `setcookie()` harus dipanggil sebelum ada output apapun ke browser.
$cookie_name = "user_preference";
$cookie_value = "dark_mode";
$expiration = time() + (86400 * 30); // 86400 detik = 1 hari

setcookie($cookie_name, $cookie_value, $expiration, "/"); // Path "/" = berlaku di seluruh situs.

?>
<!DOCTYPE html>
<html>
<body>
    <h1>Belajar PHP Cookies</h1>
    <p>Cookie 'user_preference' telah di-set.</p>
    <p>Refresh halaman ini untuk melihat nilainya di bawah.</p>
    <hr>
    <?php
    if (isset($_COOKIE[$cookie_name])) {
        echo "Preferensi tema Anda (dari cookie): " . htmlspecialchars($_COOKIE[$cookie_name]);
    } else {
        echo "Cookie 'user_preference' tidak ditemukan. Coba refresh.";
    }
    ?>
    <h3>Isi Lengkap $_COOKIE:</h3>
    <pre><?php print_r($_COOKIE); ?></pre>
    <p><a href="cookies-destroy.php">Hapus Cookie</a></p>
</body>
</html>