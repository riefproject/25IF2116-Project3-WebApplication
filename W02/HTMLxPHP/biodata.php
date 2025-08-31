<?php

$isPost = ($_SERVER['REQUEST_METHOD'] === 'POST');

function e($s) { return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }

$title = 'Form Biodata (POST)';
$basePath = '';
require_once 'layouts/header.php';
?>

<h1 class="page-title">Form Biodata</h1>
<p class="mb-3">Form untuk menampilkan data menggunakan metode POST</p>

<div class="card">
  <div class="card-header">
    <h2 class="card-title">Input Data</h2>
  </div>
      <div class="card-body">
        <form method="post" action="">
          <div class="form-group">
            <label class="form-label" for="nim">NIM</label>
            <input class="form-control" id="nim" type="text" name="nim" required>
          </div>
          
          <div class="form-group">
            <label class="form-label" for="nama">Nama</label>
            <input class="form-control" id="nama" type="text" name="nama" required>
          </div>
          
          <div class="form-group">
            <label class="form-label" for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
              <option value="">- Pilih -</option>
              <option value="L">Laki-laki</option>
              <option value="P">Perempuan</option>
            </select>
          </div>
          
          <div class="form-group">
            <label class="form-label" for="tanggal_lahir">Tanggal Lahir</label>
            <input class="form-control" id="tanggal_lahir" type="date" name="tanggal_lahir" required>
          </div>
          
          <button class="btn btn-primary" type="submit">Kirim Data</button>
        </form>
      </div>
    </div>

    <?php if ($isPost): ?>
      <div class="card mt-3">
        <div class="card-header">
          <h2>Hasil dari Request POST</h2>
        </div>
        <div class="card-body">
          <ul class="detail-list">
            <li class="detail-item">
              <div class="detail-label">NIM</div>
              <div class="detail-value"><?= e($_POST['nim']) ?></div>
            </li>
            <li class="detail-item">
              <div class="detail-label">Nama</div>
              <div class="detail-value"><?= e($_POST['nama']) ?></div>
            </li>
            <li class="detail-item">
              <div class="detail-label">Jenis Kelamin</div>
              <div class="detail-value">
                <?= e($_POST['jenis_kelamin']) == 'L' ? 'Laki-laki' : 'Perempuan' ?>
              </div>
            </li>
            <li class="detail-item">
              <div class="detail-label">Tanggal Lahir</div>
              <div class="detail-value"><?= e($_POST['tanggal_lahir']) ?></div>
            </li>
          </ul>
        </div>
      </div>
    <?php endif; ?>

    <div class="card-actions">
      <a href="biodata-db.php" class="btn btn-success">Simpan ke DB</a>
      <a href="list-biodata.php" class="btn btn-primary">Lihat Data</a>
      <a href="index.php" class="btn btn-outline">Kembali ke Home</a>
    </div>

<?php require_once 'layouts/footer.php'; ?>
