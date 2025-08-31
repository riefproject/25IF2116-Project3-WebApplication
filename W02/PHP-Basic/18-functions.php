<?php


// Fungsi adalah blok kode yang dapat digunakan kembali berkali-kali.
// Ini membantu membuat kode lebih terstruktur, mudah dibaca, dan efisien (prinsip DRY - Don't Repeat Yourself).

// 1. Mendefinisikan dan Memanggil Fungsi Sederhana
// Fungsi ini tidak menerima input (parameter) dan tidak mengembalikan nilai.
function sapa() {
    echo "Halo! Selamat pagi!<br>";
}

// Memanggil fungsi
echo "Memanggil fungsi sapa():<br>";
sapa();
sapa();

// 2. Fungsi dengan Parameter (Argumen)
// Parameter adalah variabel yang menampung nilai yang dikirimkan ke fungsi saat dipanggil.
function sapaNama($nama) { // $nama adalah parameter
    echo "Halo, " . $nama . "! Apa kabar?<br>";
}

// Memanggil fungsi dengan memberikan argumen
echo "<br>Memanggil fungsi dengan parameter:<br>";
sapaNama("Budi"); // "Budi" adalah argumen
sapaNama("Siti");

// 3. Fungsi dengan Nilai Default untuk Parameter
function sapaDefault($nama = "Pengunjung") {
    echo "Selamat datang, " . $nama . "!<br>";
}

echo "<br>Memanggil fungsi dengan nilai default:<br>";
sapaDefault(); // Tidak memberikan argumen, jadi nilai default "Pengunjung" yang dipakai
sapaDefault("Admin"); // Memberikan argumen, jadi nilai default diabaikan

// 4. Fungsi yang Mengembalikan Nilai (Return Value)
// Menggunakan keyword 'return' untuk mengirim hasil kembali dari fungsi.
function tambah($angka1, $angka2) {
    $hasil = $angka1 + $angka2;
    return $hasil;
    // Kode setelah return tidak akan dieksekusi
}

echo "<br>Memanggil fungsi yang mengembalikan nilai:<br>";
$penjumlahan = tambah(10, 5);
echo "Hasil dari 10 + 5 adalah " . $penjumlahan . "<br>";
echo "Hasil dari 7 + 3 adalah " . tambah(7, 3) . "<br>";

// 5. Type Hinting & Return Type Declaration (PHP 7+)
// Cara untuk membuat kode lebih jelas dan mencegah error tipe data.
function kalikan(int $a, int $b): int {
    return $a * $b;
}

$perkalian = kalikan(5, 4);
echo "<br>Hasil perkalian (dengan type hinting) 5 * 4 adalah " . $perkalian . "<br>";
// kalikan("5", "4"); // Ini akan otomatis dikonversi jika memungkinkan (mode non-strict)
// kalikan("lima", "empat"); // Ini akan menyebabkan error

// 6. Variable Scope
// Variabel yang didefinisikan di dalam fungsi hanya bisa diakses di dalam fungsi itu sendiri (local scope).
$x = 10; // Global scope
function cobaScope() {
    $y = 20; // Local scope
    // echo $x; // Ini akan menghasilkan error karena $x tidak terdefinisi di scope ini
    echo "Variabel y di dalam fungsi: " . $y . "<br>";
}

echo "<br>Demonstrasi variable scope:<br>";
cobaScope();
echo "Variabel x di luar fungsi: " . $x . "<br>";
// echo $y; // Ini akan menghasilkan error karena $y tidak terdefinisi di scope ini

?>
