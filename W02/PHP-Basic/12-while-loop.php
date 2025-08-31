<?php

// Catatan: Perulangan While

// While loop akan terus berjalan selama kondisi bernilai true.
// Pastikan kondisi bisa berhenti untuk menghindari infinite loop.

$counter = 1;
while ($counter <= 5) {
    echo "Perulangan while ke-" . $counter . "<br>";
    $counter++; // Bagian yang akan menghentikan loop.
}

// While juga punya sintaks alternatif:
// while(...): ... endwhile;

?>