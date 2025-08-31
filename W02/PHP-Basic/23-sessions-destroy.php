<?php
// Memulai session agar bisa dimanipulasi.
session_start();

// Menghapus semua variabel di dalam session.
session_unset();

// Menghancurkan session itu sendiri.
session_destroy();
?>
<!DOCTYPE html>
<html>
<body>
    <h1>Session Telah Dihapus</h1>
    <p><a href="sessions.php">Kembali ke halaman session</a> untuk membuat session baru.</p>
</body>
</html>
