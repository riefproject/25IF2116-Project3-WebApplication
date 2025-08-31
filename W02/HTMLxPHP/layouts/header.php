<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Aplikasi Biodata Mahasiswa' ?></title>
    <link rel="stylesheet" href="<?= $basePath ?? '' ?>css/style.css">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="header-content">
                <a href="<?= $basePath ?? '' ?>index.php" class="site-title">Aplikasi Biodata Mahasiswa</a>
                <button class="nav-toggle" id="navToggle">☰</button>
                <nav>
                    <ul class="nav-menu" id="navMenu">
                        <li class="nav-item"><a class="nav-link" href="<?= $basePath ?? '' ?>index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= $basePath ?? '' ?>biodata.php">Form Biodata</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= $basePath ?? '' ?>biodata-db.php">Input Database</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= $basePath ?? '' ?>list-biodata.php">List Mahasiswa</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
