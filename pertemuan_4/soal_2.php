<?php 
	if (isset($_POST['btnHitung'])) {
		$nilai_awal = $_POST['nilai_awal'];
		$nilai_akhir = $_POST['nilai_akhir'];

		$jumlah = 0;
		$sum = 0; 
		echo "Nilai awal: " . $nilai_awal . "<br>";
		echo "Nilai akhir: " . $nilai_akhir . "<br>";
		$deret = array();
		for ($nilai_awal; $nilai_awal <= $nilai_akhir; $nilai_awal++) { 
			if ($nilai_awal % 2 == 1) {
				if ($nilai_awal % 3 == 0) {
					$deret[] = $nilai_awal;
					$sum += $nilai_awal;
					$jumlah++;
				}
			}
		}

		echo "Maka deret bilangan yang tampil: ";
		for ($i=0; $i < $jumlah; $i++) { 
			echo $deret[$i] . ", ";
		}

		echo "<br>";
		echo "Jumlah bilangan: " . $jumlah;
		echo "<br>";

		echo "Jumlah nilai bilangan: ";
		for ($i=0; $i < $jumlah; $i++) { 
			echo $deret[$i] . "+";
		}

		echo " = $sum";
		echo "<br>";
		echo "<br>";
	}

 ?>

<html>
<body>
	<form method="POST">
		<div>
			<label>Nilai Awal:</label>
			<input type="number" name="nilai_awal">
		</div>
		<div>
			<label>Nilai Akhir:</label>
			<input type="number" name="nilai_akhir">
		</div>
		<div><button type="submit" name="btnHitung">Hitung</button></div>
	</form>
</body>
</html>