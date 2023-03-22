<?php

// Mendefinisikan data dalam array
$data = array(
    array('alas' => 10, 'tinggi' => 5),
    array('alas' => 8, 'tinggi' => 6),
    array('alas' => 12, 'tinggi' => 3),
    array('alas' => 6, 'tinggi' => 9),
    array('alas' => 15, 'tinggi' => 4)
);

// Fungsi untuk menghitung luas segitiga
function hitungLuasSegitiga($alas, $tinggi)
{
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}

// Membuat tabel untuk menampilkan data dan hasil perhitungan
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>Alas</th><th>Tinggi</th><th>Luas</th></tr>";
for ($i = 0; $i < count($data); $i++) {
    $alas = $data[$i]['alas'];
    $tinggi = $data[$i]['tinggi'];
    $luas = hitungLuasSegitiga($alas, $tinggi);
    echo "<tr><td>" . $alas . "</td><td>" . $tinggi . "</td><td>" . $luas . "</td></tr>";
}
echo "</table>";
?>
