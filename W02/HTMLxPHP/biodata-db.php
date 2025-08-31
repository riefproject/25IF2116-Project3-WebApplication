<?php

require_once 'koneksi-db.php';
$msg = ''; $err = '';

function e($s){ return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nim           = trim($_POST['nim'] ?? '');
    $nama          = trim($_POST['nama'] ?? '');
    $jenisKelamin  = $_POST['jenis_kelamin'] ?? '';
    $tglLahir      = $_POST['tanggal_lahir'] ?? '';

    if ($nim === '' || $nama === '' || !in_array($jenisKelamin, ['L','P'], true) || $tglLahir === '') {
        $err = 'Semua field wajib diisi dengan benar.';
    } else {
        // Validasi tanggal sederhana (format YYYY-MM-DD)
        $d = DateTime::createFromFormat('Y-m-d', $tglLahir);
        $validDate = $d && $d->format('Y-m-d') === $tglLahir;

        if (!$validDate) {
            $err = 'Format tanggal lahir tidak valid.';
        } else {
            // Insert pakai prepared statement
            $sql = "INSERT INTO mahasiswa (nim, nama, jenis_kelamin, tanggal_lahir)
                    VALUES (?, ?, ?, ?)";
            $stmt = $mysqli->prepare($sql);
            if (!$stmt) {
                $err = 'Gagal menyiapkan query: ' . $mysqli->error;
            } else {
                $stmt->bind_param('ssss', $nim, $nama, $jenisKelamin, $tglLahir);
                if ($stmt->execute()) {
                    $msg = 'Data berhasil disimpan.';
                } else {
                    if ($mysqli->errno === 1062) {
                        $err = 'NIM sudah terdaftar (duplikat PK).';
                    } else {
                        $err = 'Gagal menyimpan data: ' . $mysqli->error;
                    }
                }
                $stmt->close();
            }
        }
    }
}
?>
<?php
$title = 'Form Simpan Biodata ke DB';
$basePath = '';
require_once 'layouts/header.php';
?>

<h1 class="page-title">Form Biodata Mahasiswa</h1>
<p class="mb-3">Simpan data mahasiswa ke database MySQL</p>

    <?php if ($msg): ?>
      <div class="alert alert-success">
        <span class="alert-icon">✓</span>
        <span class="alert-message"><?= e($msg) ?></span>
      </div>
    <?php endif; ?>
    
    <?php if ($err): ?>
      <div class="alert alert-danger">
        <span class="alert-icon">⚠</span>
        <span class="alert-message"><?= e($err) ?></span>
      </div>
    <?php endif; ?>

    <div class="card">
      <div class="card-header">
        <h2>Form Input Data</h2>
      </div>
      <div class="card-body">
        <form method="post" action="" class="form">
          <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim" required value="<?= e($_POST['nim'] ?? '') ?>" class="form-control">
          </div>
          
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required value="<?= e($_POST['nama'] ?? '') ?>" class="form-control">
          </div>
          
          <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select id="jenis_kelamin" name="jenis_kelamin" required class="form-control">
              <option value="">- Pilih -</option>
              <option value="L" <?= (($_POST['jenis_kelamin'] ?? '')==='L'?'selected':'') ?>>Laki-laki</option>
              <option value="P" <?= (($_POST['jenis_kelamin'] ?? '')==='P'?'selected':'') ?>>Perempuan</option>
            </select>
          </div>
          
          <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required value="<?= e($_POST['tanggal_lahir'] ?? '') ?>" class="form-control">
          </div>
          
          <div class="form-group">
            <button class="btn btn-primary" type="submit">Simpan Data</button>
          </div>
        </form>
      </div>
    </div>

    <div class="card-actions">
      <a href="list-biodata.php" class="btn btn-primary">Lihat Daftar Mahasiswa</a>
      <a href="index.php" class="btn btn-outline">Kembali ke Home</a>
    </div>

<?php require_once 'layouts/footer.php'; ?>
</body>
</html>
