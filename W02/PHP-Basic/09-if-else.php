<?php

// Catatan: Struktur Kontrol If-Else

// Struktur if, if-else, dan if-elseif-else sama seperti bahasa C.
$nilai_ujian = 78;
$grade = "";

if ($nilai_ujian >= 90) {
    $grade = "A";
} elseif ($nilai_ujian >= 80) { // elseif bisa ditulis `else if` (dengan spasi)
    $grade = "B";
} else {
    $grade = "E";
}
echo "Grade Anda: " . $grade . "<br>";


// PHP menyediakan sintaks alternatif untuk struktur kontrol, berguna saat di dalam HTML.
?>
<!-- Contoh sintaks alternatif (akan lebih jelas saat dicampur HTML) -->
<?php if ($grade == "A"): ?>
    <!-- <p>Luar biasa!</p> -->
<?php elseif ($grade == "B"): ?>
    <!-- <p>Bagus!</p> -->
<?php else: ?>
    <!-- <p>Perlu ditingkatkan.</p> -->
<?php endif; ?>

<?php

// Ternary Operator: shorthand untuk if-else sederhana.
// (kondisi) ? nilai_jika_true : nilai_jika_false;
$jenis_kelamin = "Pria";
$panggilan = ($jenis_kelamin == "Pria") ? "Bapak" : "Ibu";
echo "Panggilan: " . $panggilan . "<br>";

?>
