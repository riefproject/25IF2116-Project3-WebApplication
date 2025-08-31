<?php
$title = 'Home - Sistem Akademik';
echo view('layouts/header', ['title' => $title]);
?>

<h1 class="page-title">Belajar CodeIgniter 4 (CI4)</h1>
<p class="mb-3">Implementasi tugas praktikum menggunakan framework CodeIgniter 4 dengan pola MVC</p>

<div class="card-grid">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Contoh Controller CI4</h2>
        </div>
        <div class="card-body">
            <p>Contoh implementasi controller dasar di CodeIgniter 4 sesuai dengan instruksi tugas.</p>
            <div class="card-actions card-actions-grid">
                <a href="<?= base_url('helloworld') ?>" class="btn btn-primary">Hello World</a>
                <a href="<?= base_url('tabel') ?>" class="btn btn-outline">Tabel HTML</a>
                <a href="<?= base_url('tabellooping') ?>" class="btn btn-outline">Tabel dengan Looping</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Model-View-Controller (MVC)</h2>
        </div>
        <div class="card-body">
            <p>Implementasi pola MVC untuk menampilkan dan mengelola data mahasiswa dari database.</p>
            <div class="card-actions card-actions-grid">
                <a href="<?= base_url('mahasiswa') ?>" class="btn btn-primary">Lihat Data Mahasiswa</a>
                <a href="<?= base_url('mahasiswa/create') ?>" class="btn btn-outline">Input Data Baru</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h2 class="card-title">CRUD Mahasiswa</h2>
        </div>
        <div class="card-body">
            <p>Fitur Create, Read, Update, Delete, dan Search untuk data mahasiswa di database.</p>
            <ul class="feature-list mb-3">
                <li>Display data dengan link detail</li>
                <li>Form input dan update data</li>
                <li>Hapus data mahasiswa</li>
                <li>Pencarian data mahasiswa</li>
            </ul>
            <div class="card-actions card-actions-grid">
                <a href="<?= base_url('mahasiswa') ?>" class="btn btn-primary">Kelola Data</a>
                <a href="<?= base_url('mahasiswa/create') ?>" class="btn btn-outline">Tambah Data</a>
            </div>
        </div>
    </div>
</div>

<?php echo view('layouts/footer'); ?>
