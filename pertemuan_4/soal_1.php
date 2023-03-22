<!-- 
1. Break digunakan untuk menghentikan eksekusi pengulangan dan keluar dari loop secara langsung. Ketika pernyataan break dijalankan, program akan melanjutkan eksekusi dari baris kode yang berada setelah loop.

Continue digunakan untuk melompati satu iterasi pengulangan dan melanjutkan ke iterasi berikutnya. Ketika pernyataan continue dijalankan, baris kode di bawahnya dalam loop tidak akan dieksekusi pada iterasi saat ini, tetapi loop akan terus berlanjut pada iterasi berikutnya.
 -->

<!-- 2. -->
<?php 
	echo "Tabel Perkalian<br>";
	echo "========================= <br>";
	// for
	// $nilai1 = 12;
	// for($nilai2=15; $nilai2 <= 45; $nilai2+=2) 
	// {
	// 	$hasil = $nilai1 * $nilai2;
	// 	echo $nilai1 . " * " . $nilai2 . " = " . $hasil;
	// 	echo "<br>";
	// }

	// while
	$nilai1 = 12;
	$nilai2 = 15;
	while ($nilai2 <= 45) {
		$hasil = $nilai1 * $nilai2;
		echo $nilai1 . " * " . $nilai2 . " = " . $hasil;
		echo "<br>";
		$nilai2 += 2;
	}
 ?>
