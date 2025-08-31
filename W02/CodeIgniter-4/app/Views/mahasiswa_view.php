<?php 
$title = 'Data Mahasiswa';
echo view('layouts/header', ['title' => $title]);
?>
    <h1 class="page-title">Data Mahasiswa</h1>

    <?php if (session()->getFlashdata('message')): ?>
        <div class="alert alert-success">
            <?= esc(session()->getFlashdata('message')) ?>
        </div>
    <?php endif; ?>

    <div class="d-flex justify-between align-center mb-3">
        <form action="/mahasiswa" method="get" class="search-form">
            <input type="text" name="keyword" class="form-control" placeholder="Cari mahasiswa...">
            <button type="submit" class="btn btn-primary">Cari</button>
        </form>
        <a href="/mahasiswa/create" class="btn btn-success" style="min-width: 140px;">+ Tambah Data</a>
    </div>

    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Daftar Mahasiswa</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mahasiswa as $mhs): ?>
                            <tr>
                                <td><?= esc($mhs['nim']) ?></td>
                                <td><?= esc($mhs['nama']) ?></td>
                                <td><?= esc($mhs['jenis_kelamin']) == 'L' ? 'Laki-laki' : 'Perempuan' ?></td>
                                <td><?= esc($mhs['tanggal_lahir']) ?></td>
                                <td>
                                    <div class="action-buttons">
                                        <a href="/mahasiswa/detail/<?= $mhs['nim'] ?>" class="btn btn-primary btn-sm">Detail</a>
                                        <a href="/mahasiswa/edit/<?= $mhs['nim'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="/mahasiswa/delete/<?= $mhs['nim'] ?>" method="post" style="display:inline;">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <?php if (count($mahasiswa) == 0): ?>
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data mahasiswa</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php echo view('layouts/footer'); ?>