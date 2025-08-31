<?php 
$title = 'Detail Mahasiswa';
echo view('layouts/header', ['title' => $title]);
?>
    <h1 class="page-title">Detail Mahasiswa</h1>
    
    <div class="card mb-3">
        <div class="card-header">
            <h2 class="card-title">Informasi Mahasiswa</h2>
        </div>
        <div class="card-body">
            <div class="detail-grid">
                <div class="detail-label">NIM</div>
                <div><?= esc($mahasiswa['nim']) ?></div>
                
                <div class="detail-label">Nama</div>
                <div><?= esc($mahasiswa['nama']) ?></div>
                
                <div class="detail-label">Jenis Kelamin</div>
                <div><?= esc($mahasiswa['jenis_kelamin']) == 'L' ? 'Laki-laki' : 'Perempuan' ?></div>
                
                <div class="detail-label">Tanggal Lahir</div>
                <div><?= esc($mahasiswa['tanggal_lahir']) ?></div>
            </div>
        </div>
        <div class="card-footer">
            <a href="/mahasiswa" class="btn btn-primary">Kembali ke daftar</a>
        </div>
    </div>

<?php echo view('layouts/footer'); ?>