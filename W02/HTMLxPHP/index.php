<?php
$title = 'Home - Aplikasi Biodata Mahasiswa';
$basePath = '';
require_once 'layouts/header.php';
?>

<h1 class="page-title">Aplikasi Biodata Mahasiswa</h1>
<p class="mb-3">Contoh aplikasi PHP dengan HTML dan CSS</p>

        <div class="card-grid">
            <div class="card">
                <div class="card-header">
                    <h2>Input Biodata</h2>
                </div>
                <div class="card-body">
                    <p>Form input biodata mahasiswa menggunakan metode POST.</p>
                    <div class="card-actions card-actions-grid">
                        <a href="biodata.php" class="btn btn-primary">Form POST</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h2>Kelola Database</h2>
                </div>
                <div class="card-body">
                    <p>Form untuk menyimpan dan menampilkan data dari database MySQL.</p>
                    <div class="card-actions card-actions-grid">
                        <a href="biodata-db.php" class="btn btn-primary">Input Data</a>
                        <a href="list-biodata.php" class="btn btn-outline">Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>

<?php require_once 'layouts/footer.php'; ?>