<?php

require_once 'koneksi-db.php';

function e($s){ return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }

// Ambil semua data
$res = $mysqli->query("SELECT nim, nama, jenis_kelamin, tanggal_lahir FROM mahasiswa ORDER BY nama ASC");
if (!$res) {
    die('Query gagal: ' . $mysqli->error);
}

$title = 'List Biodata Mahasiswa';
$basePath = '';
require_once 'layouts/header.php';
?>

<h1 class="page-title">List Biodata Mahasiswa</h1>
<p class="mb-3">Daftar lengkap data mahasiswa dari database</p>

    <div class="card">
      <div class="card-header">
        <h2>Daftar Mahasiswa</h2>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="data-table">
            <thead>
              <tr>
                <th>#</th>
                <th>NIM</th>
                <th>Nama</th>
                <th style="text-align: center;">Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th style="text-align: center;">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i=1;
              while ($row = $res->fetch_assoc()):
                $jk = $row['jenis_kelamin'] === 'L' ? 'Laki-laki' : 'Perempuan';
                $jkClass = $row['jenis_kelamin'] === 'L' ? 'badge-blue' : 'badge-pink';
              ?>
                <tr>
                  <td><?= $i++ ?></td>
                  <td><?= e($row['nim']) ?></td>
                  <td><?= e($row['nama']) ?></td>
                  <td class="text-center"><span class="badge <?= $jkClass ?>"><?= e($jk) ?></span></td>
                  <td><?= e($row['tanggal_lahir']) ?></td>
                  <td class="text-center">
                    <div class="action-buttons">
                      <a href="detail-biodata.php?nim=<?= urlencode($row['nim']) ?>" class="btn btn-primary btn-sm">Lihat Detail</a>
                    </div>
                  </td>
                </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="card-actions">
        <a href="biodata-db.php" class="btn btn-success">Tambah Data Baru</a>
        <a href="index.php" class="btn btn-primary">Kembali ke Home</a>
    </div>

<?php require_once 'layouts/footer.php'; ?>
