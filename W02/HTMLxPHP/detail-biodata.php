<?php

require_once 'koneksi-db.php';

function e($s){ return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }

// Check if NIM is provided
if (!isset($_GET['nim'])) {
    die('NIM tidak ditemukan.');
}

$nim = $_GET['nim'];

// Get student data
$stmt = $mysqli->prepare("SELECT nim, nama, jenis_kelamin, tanggal_lahir FROM mahasiswa WHERE nim = ?");
$stmt->bind_param("s", $nim);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die('Data mahasiswa tidak ditemukan.');
}

$mahasiswa = $result->fetch_assoc();
$jk = $mahasiswa['jenis_kelamin'] === 'L' ? 'Laki-laki' : 'Perempuan';
$jkClass = $mahasiswa['jenis_kelamin'] === 'L' ? 'badge-blue' : 'badge-pink';

$title = 'Detail Biodata Mahasiswa';
$basePath = '';
require_once 'layouts/header.php';
?>

<h1 class="page-title">Detail Biodata Mahasiswa</h1>
<p class="mb-3">Informasi lengkap data mahasiswa</p>
    
    <div class="card">
      <div class="card-header">
        <h2 class="card-title"><?= e($mahasiswa['nama']) ?></h2>
      </div>
      <div class="card-body">
        <ul class="detail-list">
          <li class="detail-item">
            <div class="detail-label">NIM</div>
            <div class="detail-value"><?= e($mahasiswa['nim']) ?></div>
          </li>
          <li class="detail-item">
            <div class="detail-label">Nama</div>
            <div class="detail-value"><?= e($mahasiswa['nama']) ?></div>
          </li>
          <li class="detail-item">
            <div class="detail-label">Jenis Kelamin</div>
            <div class="detail-value">
              <span class="badge <?= $jkClass ?>"><?= e($jk) ?></span>
            </div>
          </li>
          <li class="detail-item">
            <div class="detail-label">Tanggal Lahir</div>
            <div class="detail-value"><?= e($mahasiswa['tanggal_lahir']) ?></div>
          </li>
        </ul>
      </div>
    </div>

    <div class="card-actions">
        <a href="list-biodata.php" class="btn btn-primary">Kembali ke Daftar</a>
        <a href="biodata-db.php" class="btn btn-success">Tambah Data Baru</a>
    </div>

<?php require_once 'layouts/footer.php'; ?>

