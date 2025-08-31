<?php 
$title = 'Tambah Data Mahasiswa';
echo view('layouts/header', ['title' => $title]);
?>
    <h1 class="page-title">Tambah Data Mahasiswa</h1>

    <?php if (session()->getFlashdata('errors')):
        $errors = session()->getFlashdata('errors');
        if (is_array($errors)):
    ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach ($errors as $error):
                    if (is_string($error)):
                ?>
                    <li><?= esc($error) ?></li>
                <?php
                    endif;
                endforeach;
                ?>
            </ul>
        </div>
    <?php
        endif;
    endif;
    ?>

    <div class="card mb-3">
        <div class="card-header">
            <h2 class="card-title">Form Data Mahasiswa</h2>
        </div>
        <div class="card-body">
            <form action="/mahasiswa/store" method="post" id="form-mahasiswa">
                <?= csrf_field() ?>
                <div class="form-group">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" name="nim" id="nim" class="form-control" value="<?= old('nim') ?>">
                </div>
                
                <div class="form-group">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="<?= old('nama') ?>">
                </div>
                
                <div class="form-group">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="L" <?= (old('jenis_kelamin') === 'L') ? 'selected' : '' ?>>Laki-laki</option>
                        <option value="P" <?= (old('jenis_kelamin') === 'P') ? 'selected' : '' ?>>Perempuan</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="<?= old('tanggal_lahir') ?>">
                </div>
            </form>
        </div>
        <div class="card-footer d-flex justify-between">
            <a href="/mahasiswa" class="btn btn-primary">Kembali</a>
            <button type="submit" form="form-mahasiswa" class="btn btn-success">Simpan</button>
        </div>
    </div>

<?php echo view('layouts/footer'); ?>