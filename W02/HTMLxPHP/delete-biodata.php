<?php
require_once 'koneksi-db.php';

// Pastikan NIM ada di URL
if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    // Siapkan query penghapusan data
    $stmt = $mysqli->prepare("DELETE FROM mahasiswa WHERE nim = ?");
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($mysqli->error));
    }

    // Ikat parameter NIM ke query
    $stmt->bind_param("s", $nim);

    // Eksekusi query
    if ($stmt->execute()) {
        // Arahkan kembali ke halaman utama jika berhasil
        header("Location: manage-biodata.php?status=deleted");
        exit();
    } else {
        die('Execute failed: ' . htmlspecialchars($stmt->error));
    }

    $stmt->close();
} else {
    die('NIM tidak ditemukan untuk dihapus.');
}

$mysqli->close();
?>
