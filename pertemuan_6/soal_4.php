<?php
// Mendefinisikan array 2 dimensi
$nilai = array(
  array(90, 80, 75),
  array(70, 85, 80),
  array(60, 75, 90)
);

// Menampilkan nilai pada baris ke-2, kolom ke-1
echo "Nilai pada baris ke-2, kolom ke-1: " . $nilai[1][0] . "<br>";

// Menampilkan semua nilai
echo "Semua nilai: <br>";
for ($i = 0; $i < 3; $i++) {
  for ($j = 0; $j < 3; $j++) {
    echo $nilai[$i][$j] . " | ";
  }
  echo "<br>";
}
?>
