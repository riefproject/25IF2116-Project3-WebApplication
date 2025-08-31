<?php

// Catatan: Perulangan For

// Sintaks perulangan `for` di PHP identik dengan bahasa C atau Java.
// for (inisialisasi; kondisi; increment)

echo "Perulangan menaik:<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Iterasi ke-" . $i . "<br>";
}

echo "<br>Perulangan menurun:<br>";
for ($j = 5; $j > 0; $j--) {
    echo "Iterasi ke-" . $j . "<br>";
}

// Sama seperti if-else, `for` juga punya sintaks alternatif.
// for(...): ... endfor;

?>
