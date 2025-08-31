<?php

// Catatan: Array Multi-dimensi

// Array multi-dimensi adalah array yang berisi array lain.
// Paling umum adalah array 2 dimensi untuk merepresentasikan data tabular.

// Cara terbaik adalah menggunakan array numerik untuk baris,
// dan array asosiatif untuk kolom agar kode mudah dibaca.
$mahasiswa = [
    [
        "nama" => "Budi",
        "nim" => "12345",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Siti",
        "nim" => "67890",
        "jurusan" => "Sistem Informasi"
    ],
];

// Mengakses elemen menjadi sangat deskriptif.
echo "Nama mahasiswa pertama: " . $mahasiswa[0]["nama"] . "<br>";
echo "NIM mahasiswa kedua: " . $mahasiswa[1]["nim"] . "<br>";

// Menambah data baru.
$mahasiswa[] = [
    "nama" => "Joko",
    "nim" => "54321",
    "jurusan" => "Manajemen Bisnis"
];

// Iterasi menggunakan `foreach` bersarang.
echo "<br>--- Daftar Semua Mahasiswa ---<br>";
foreach ($mahasiswa as $data) {
    echo "Nama: " . $data["nama"] . ", NIM: " . $data["nim"] . "<br>";
}

?>