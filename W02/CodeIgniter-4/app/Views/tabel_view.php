<?php 
$title = 'Tabel HTML';
echo view('layouts/header', ['title' => $title]);
?>

<h1 class="page-title">Tabel HTML</h1>

<div class="card">
    <div class="card-header">
        <h2 class="card-title">Contoh Tabel</h2>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Kolom 1</th>
                        <th>Kolom 2</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tableData as $row): ?>
                        <tr>
                            <td><?= esc($row['kolom1']) ?></td>
                            <td><?= esc($row['kolom2']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer">
        <a href="<?= base_url('/') ?>" class="btn btn-primary">Kembali ke Home</a>
    </div>
</div>

<?php echo view('layouts/footer'); ?>