<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Sistem Akademik' ?></title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="header-content">
                <a href="<?= base_url('/') ?>" class="site-title">Sistem Akademik</a>
                <button class="nav-toggle" id="navToggle">☰</button>
                <nav>
                    <ul class="nav-menu" id="navMenu">
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('/') ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('mahasiswa') ?>">Mahasiswa</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('tabel') ?>">Tabel</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('tabellooping') ?>">Tabel Looping</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('helloworld') ?>">Hello World</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
