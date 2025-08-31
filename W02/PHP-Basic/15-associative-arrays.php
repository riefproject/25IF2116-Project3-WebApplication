<?php

// Catatan: Array Asosiatif

// Array asosiatif menggunakan string sebagai kunci (key) bukan angka.
// Ini adalah salah satu fitur paling kuat di PHP, mirip seperti object di JS atau dictionary di Python.
// Sintaks: "key" => "value"

$mahasiswa = [
    "nama" => "Budi Hartono",
    "nim" => "12345678",
    "jurusan" => "Teknik Informatika",
];

// Mengakses elemen menggunakan kuncinya.
echo "Nama Mahasiswa: " . $mahasiswa["nama"] . "<br>";

// Menambah atau mengubah elemen itu mudah.
$mahasiswa["jurusan"] = "Sistem Informasi"; // Mengubah
$mahasiswa["angkatan"] = 2022; // Menambah elemen baru

echo "Jurusan baru: " . $mahasiswa["jurusan"] . "<br>";
echo "Angkatan: " . $mahasiswa["angkatan"] . "<br>";

// `foreach` adalah cara paling umum untuk iterasi array jenis ini.
echo "<br>Data Mahasiswa:<br>";
foreach ($mahasiswa as $key => $value) {
    echo "- " . ucfirst($key) . ": " . $value . "<br>";
}

?>