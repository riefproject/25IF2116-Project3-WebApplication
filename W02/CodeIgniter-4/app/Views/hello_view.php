<?php 
$title = 'Hello World';
echo view('layouts/header', ['title' => $title]);
?>

<div class="card">
    <div class="card-header">
        <h2 class="card-title">Basic Controller Output</h2>
    </div>
    <div class="card-body">
        <div class="alert alert-success" style="justify-content: center; display: flex; align-items: center;">
            <h1 class="text-center"><?= $message ?></h1>
        </div>
    </div>
    <div class="card-footer">
        <a href="<?= base_url('/') ?>" class="btn btn-primary">Kembali ke Home</a>
    </div>
</div>

<?php echo view('layouts/footer'); ?>
