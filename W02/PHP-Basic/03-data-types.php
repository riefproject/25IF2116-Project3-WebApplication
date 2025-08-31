<?php

// Catatan: Tipe Data di PHP

// String: bisa menggunakan kutip tunggal ('') atau ganda ("").
// Perbedaan penting: kutip ganda bisa melakukan "parsing" variabel, kutip tunggal tidak.
$nama = "Siti";
echo "Halo, $nama!<br>"; // Output: Halo, Siti!
echo 'Halo, $nama!<br>'; // Output: Halo, $nama!<br>
// Integer, Float, Boolean: sama seperti bahasa lain.
$umur = 22;
$harga = 15000.50;
$is_mahasiswa = true;

// NULL: tipe data spesial untuk variabel tanpa nilai.
$data = NULL;

// var_dump() adalah fungsi yang sangat berguna untuk debugging.
// Ia menampilkan informasi terstruktur tentang variabel, termasuk tipe dan nilainya.
echo "Inspeksi variabel \$is_mahasiswa:<br>";
var_dump($is_mahasiswa);

echo "<br>Inspeksi variabel \$data:<br>";
var_dump($data);

// Fenomena "Type Juggling" atau "Loose Typing" di PHP.
// PHP otomatis mengkonversi tipe data saat operasi dilakukan.
$angka_string = "123"; // Ini adalah string
$hasil = $angka_string + 2; // String "123" diperlakukan sebagai integer 123
echo "<br>Hasildari '123' + 2 adalah: $hasil<br>"; // Output: 125
var_dump($hasil); // Tipe datanya menjadi integer

?>
