<?php
require_once 'koneksi-db.php';

function e($s){ return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }

$nim_to_edit = $_GET['nim'] ?? null;
$mahasiswa = null;

// Ambil data mahasiswa yang akan diedit berdasarkan NIM dari URL
if ($nim_to_edit) {
    $stmt = $mysqli->prepare("SELECT nim, nama, jenis_kelamin, tanggal_lahir FROM mahasiswa WHERE nim = ?");
    $stmt->bind_param("s", $nim_to_edit);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows === 1) {
        $mahasiswa = $result->fetch_assoc();
    } else {
        die('Mahasiswa tidak ditemukan.');
    }
    $stmt->close();
}

// Tangani pembaruan data saat form disubmit (metode POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $original_nim = $_POST['original_nim']; // NIM asli sebelum diedit

    // Siapkan query update
    $stmt = $mysqli->prepare("UPDATE mahasiswa SET nim = ?, nama = ?, jenis_kelamin = ?, tanggal_lahir = ? WHERE nim = ?");
    $stmt->bind_param("sssss", $nim, $nama, $jenis_kelamin, $tanggal_lahir, $original_nim);

    // Eksekusi dan arahkan kembali jika berhasil
    if ($stmt->execute()) {
        header("Location: manage-biodata.php?status=updated");
        exit();
    } else {
        die('Update gagal: ' . $stmt->error);
    }
    $stmt->close();
}

// Jika tidak ada data mahasiswa yang ditemukan, hentikan proses
if (!$mahasiswa) {
    die('NIM untuk diedit tidak valid.');
}

$title = 'Edit Biodata Mahasiswa';
$basePath = '';
require_once 'layouts/header.php';
?>

<h1 class="page-title">Edit Biodata Mahasiswa</h1>
<p class="mb-3">Ubah data mahasiswa yang sudah ada.</p>

<!-- Form untuk mengedit data -->
<div class="card">
  <div class="card-header">
    <h2 class="card-title">Form Edit Data</h2>
  </div>
  <div class="card-body">
    <form method="post" action="edit-biodata.php">
      <!-- Simpan NIM asli untuk klausa WHERE di query UPDATE -->
      <input type="hidden" name="original_nim" value="<?= e($mahasiswa['nim']) ?>">
      
      <div class="form-group">
        <label class="form-label" for="nim">NIM</label>
        <input class="form-control" id="nim" type="text" name="nim" value="<?= e($mahasiswa['nim']) ?>" required>
      </div>
      
      <div class="form-group">
        <label class="form-label" for="nama">Nama</label>
        <input class="form-control" id="nama" type="text" name="nama" value="<?= e($mahasiswa['nama']) ?>" required>
      </div>
      
      <div class="form-group">
        <label class="form-label" for="jenis_kelamin">Jenis Kelamin</label>
        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
          <option value="">- Pilih -</option>
          <option value="L" <?= ($mahasiswa['jenis_kelamin'] == 'L') ? 'selected' : '' ?>>Laki-laki</option>
          <option value="P" <?= ($mahasiswa['jenis_kelamin'] == 'P') ? 'selected' : '' ?>>Perempuan</option>
        </select>
      </div>
      
      <div class="form-group">
        <label class="form-label" for="tanggal_lahir">Tanggal Lahir</label>
        <input class="form-control" id="tanggal_lahir" type="date" name="tanggal_lahir" value="<?= e($mahasiswa['tanggal_lahir']) ?>" required>
      </div>
      
      <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
      <a href="manage-biodata.php" class="btn btn-outline">Batal</a>
    </form>
  </div>
</div>

<?php require_once 'layouts/footer.php'; ?>
