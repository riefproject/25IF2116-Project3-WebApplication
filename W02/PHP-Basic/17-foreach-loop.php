<?php

// Catatan: Perulangan Foreach

// `foreach` adalah perulangan yang dioptimalkan untuk array.
// Ini cara paling umum dan aman untuk iterasi semua jenis array di PHP.

// 1. Foreach untuk mendapatkan nilai (value)
$buah = ["Apel", "Jeruk", "Mangga"];
echo "Daftar Buah:<br>";
foreach ($buah as $item) {
    echo "- " . $item . "<br>";
}

// 2. Foreach untuk mendapatkan kunci (key) dan nilai (value)
$data_mahasiswa = [
    "nama" => "Budi Hartono",
    "nim" => "12345678",
];
echo "<br>Data Mahasiswa:<br>";
foreach ($data_mahasiswa as $kunci => $nilai) {
    echo "- " . ucfirst($kunci) . ": " . $nilai . "<br>";
}

// 3. Modifikasi array di dalam loop menggunakan referensi (&)
// Poin Penting: Gunakan `&` pada value untuk memodifikasi array asli.
$angka = [1, 2, 3, 4, 5];
foreach ($angka as &$nilai) {
    $nilai *= 2; // Setiap elemen di array $angka akan dikalikan 2.
}

// Praktik yang baik adalah menghapus referensi setelah loop selesai.
unset($nilai);

echo "<br>Angka setelah dikalikan dua: " . implode(", ", $angka) . "<br>";

?>