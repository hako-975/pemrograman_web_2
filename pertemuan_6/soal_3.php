<?php
// inisialisasi matriks A dan B
$A = array(
    array(1, 2, 3),
    array(4, 5, 6)
);
$B = array(
    array(7, 8, 9),
    array(10, 11, 12),
    array(13, 14, 15)
);

// inisialisasi matriks hasil dengan nilai 0
$C = array(
    array(0, 0, 0),
    array(0, 0, 0)
);

// melakukan operasi perkalian matriks
for ($i=0; $i<2; $i++) {
    for ($j=0; $j<3; $j++) {
        for ($k=0; $k<3; $k++) {
            $C[$i][$j] += $A[$i][$k] * $B[$k][$j];
        }
    }
}

// menampilkan matriks A, B, dan hasil perkalian
echo "Matriks A:<br>";
for ($i=0; $i<2; $i++) {
    for ($j=0; $j<3; $j++) {
        echo $A[$i][$j] . " | ";
    }
    echo "<br>";
}

echo "<br>Matriks B:<br>";
for ($i=0; $i<3; $i++) {
    for ($j=0; $j<3; $j++) {
        echo $B[$i][$j] . " | ";
    }
    echo "<br>";
}

echo "<br>Hasil Perkalian Matriks A dan B:<br>";
for ($i=0; $i<2; $i++) {
    for ($j=0; $j<3; $j++) {
        echo $C[$i][$j] . " | ";
    }
    echo "<br>";
}
?>
