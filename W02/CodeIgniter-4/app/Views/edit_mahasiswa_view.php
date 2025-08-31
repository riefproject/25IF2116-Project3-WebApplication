<?php 
$title = 'Edit Data Mahasiswa';
echo view('layouts/header', ['title' => $title]);
?>
    <h1 class="page-title">Edit Data Mahasiswa</h1>
    
    <div class="card mb-3">
        <div class="card-header">
            <h2 class="card-title">Form Edit Mahasiswa</h2>
        </div>
        <div class="card-body">
            <form action="/mahasiswa/update/<?= $mahasiswa['nim'] ?>" method="post" id="form-edit">
                <?= csrf_field() ?>
                <input type="hidden" name="_method" value="PUT">
                
                <div class="form-group">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" name="nim" id="nim" class="form-control" value="<?= esc($mahasiswa['nim']) ?>" readonly>
                </div>
                
                <div class="form-group">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="<?= esc($mahasiswa['nama']) ?>">
                </div>
                
                <div class="form-group">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                        <option value="L" <?= ($mahasiswa['jenis_kelamin'] === 'L') ? 'selected' : '' ?>>Laki-laki</option>
                        <option value="P" <?= ($mahasiswa['jenis_kelamin'] === 'P') ? 'selected' : '' ?>>Perempuan</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="<?= esc($mahasiswa['tanggal_lahir']) ?>">
                </div>
                
            </form>
        </div>
        <div class="card-footer d-flex justify-between">
            <a href="/mahasiswa" class="btn btn-primary">Kembali</a>
            <button type="submit" form="form-edit" class="btn btn-success">Update</button>
        </div>
    </div>

<?php echo view('layouts/footer'); ?>