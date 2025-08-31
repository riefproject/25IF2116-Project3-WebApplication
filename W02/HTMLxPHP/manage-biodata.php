<?php
require_once 'koneksi-db.php';

function e($s){ return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }

// Logika pencarian
$search = $_GET['search'] ?? '';
$query = "SELECT nim, nama, jenis_kelamin, tanggal_lahir FROM mahasiswa";
if ($search) {
    $search_term = $mysqli->real_escape_string($search);
    // Cari berdasarkan nama atau nim
    $query .= " WHERE nama LIKE '%$search_term%' OR nim LIKE '%$search_term%'";
}
$query .= " ORDER BY nama ASC";

// Eksekusi query
$res = $mysqli->query($query);
if (!$res) {
    die('Query gagal: ' . $mysqli->error);
}

$title = 'Kelola Biodata Mahasiswa';
$basePath = '';
require_once 'layouts/header.php';
?>

<h1 class="page-title">Kelola Biodata Mahasiswa</h1>
<p class="mb-3">Lakukan manajemen data mahasiswa melalui halaman ini.</p>

<!-- Form Pencarian -->
<div class="card mb-3">
    <div class="card-header">
        <h2 class="card-title">Pencarian</h2>
    </div>
    <div class="card-body">
        <form method="get" action="">
            <div class="form-group">
                <input class="form-control" type="text" name="search" placeholder="Cari berdasarkan NIM atau Nama..." value="<?= e($search) ?>">
            </div>
            <button class="btn btn-primary" type="submit">Cari</button>
            <?php if ($search): ?>
                <a href="manage-biodata.php" class="btn btn-outline">Reset</a>
            <?php endif; ?>
        </form>
    </div>
</div>

<!-- Tabel Data Mahasiswa -->
<div class="card">
  <div class="card-header">
    <h2>Daftar Mahasiswa</h2>
    <a href="biodata-db.php" class="btn btn-success btn-sm">Tambah Data Baru</a>
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
          // Tampilkan data jika ada
          if ($res->num_rows > 0):
            while ($row = $res->fetch_assoc()):
              $jk = $row['jenis_kelamin'] === 'L' ? 'Laki-laki' : 'Perempuan';
              $jkClass = $row['jenis_kelamin'] === 'L' ? 'badge-blue' : 'badge-pink';
          ?>
            <tr>
              <td><?= $i++ ?></td>
              <td><?= e($row['nim']) ?></td>
              <td><?= e($row['nama']) ?></td>
              <td style="text-align: center;"><span class="badge <?= $jkClass ?>"><?= e($jk) ?></span></td>
              <td><?= e($row['tanggal_lahir']) ?></td>
              <td style="text-align: center;">
                <div class="action-buttons">
                  <a href="edit-biodata.php?nim=<?= urlencode($row['nim']) ?>" class="btn btn-warning btn-sm">Edit</a>
                  <a href="delete-biodata.php?nim=<?= urlencode($row['nim']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                </div>
              </td>
            </tr>
          <?php endwhile; else: ?>
            <!-- Tampilkan pesan jika data kosong -->
            <tr>
                <td colspan="6" style="text-align: center;">Tidak ada data yang ditemukan.</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="card-actions">
    <a href="index.php" class="btn btn-primary">Kembali ke Home</a>
</div>

<?php require_once 'layouts/footer.php'; ?>
