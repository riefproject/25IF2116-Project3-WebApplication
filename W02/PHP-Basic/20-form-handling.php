<?php
// Catatan: Form Handling
// File ini hanya berisi HTML dan form.
// Atribut `action` menunjuk ke script yang akan memproses data (`post-request.php`).
// Atribut `method` di-set ke "POST" agar data dikirim via $_POST.
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Form Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box; /* Important */
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Form Pendaftaran Mahasiswa</h1>
        <form action="post-request.php" method="POST">
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap:</label>
                <!-- Atribut `name` akan menjadi `key` di array $_POST -->
                <input type="text" id="nama_lengkap" name="nama_lengkap" required>
            </div>

            <div class="form-group">
                <label for="email">Alamat Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan:</label>
                <select id="jurusan" name="jurusan">
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Manajemen Bisnis">Manajemen Bisnis</option>
                    <option value="Desain Grafis">Desain Grafis</option>
                </select>
            </div>

            <!-- Tombol submit ini juga punya `name` agar bisa dideteksi di sisi server -->
            <button type="submit" name="submit_button">Daftar</button>
        </form>
    </div>

</body>
</html>