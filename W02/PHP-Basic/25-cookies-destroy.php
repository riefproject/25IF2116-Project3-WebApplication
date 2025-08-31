<?php
// Cara menghapus cookie adalah dengan men-set-nya lagi
// dengan waktu kedaluwarsa di masa lalu.
setcookie("user_preference", "", time() - 3600, "/");
?>
<!DOCTYPE html>
<html>
<body>
    <h1>Cookie Dihapus</h1>
    <p><a href="cookies.php">Kembali ke halaman cookie.</a></p>
</body>
</html>
