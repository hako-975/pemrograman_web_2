<?php
// contoh fungsi string dan format type data
 $kalimat = " Pemrograman PHP ";
 $a=15.23;
 $b=25.17;
 $c=$a+$b;
  Printf("Hasil strtoupper : %s <br>", strtoupper($kalimat));   //format type data string
  Printf("Hasil strtolower : %s <br>", strtolower($kalimat));
  Printf("Hasil ucfirst : %s <br>", ucfirst($kalimat));
  Printf("Hasil ucwords : %s <br>", ucwords($kalimat));
  Print("Aslinya : $kalimat <br>");
  Printf("Hasil ltrim : %s  <br>", ltrim($kalimat));
  Printf("Hasil rtrim : %s  <br>", rtrim($kalimat));
  Printf("Hasil trim : %s  <br>", trim($kalimat));
  Printf("Hasil substr : %s <br>",substr($kalimat, 4, 4));
  Printf("Hasil substr : %s <br>",substr($kalimat, 6, -3));
  print "$a + $b = $c <br>";       // tanpa format type data
  printf ("$a + $b = %5.2f <br>",$c);         // format dengan type data float  %f
  printf ("%d + %d = %d <br>",$a,$b,$c);    // format dengan type data integer   %d
?>    