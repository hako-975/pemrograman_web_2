<!DOCTYPE html>
<html>
<head>
	<title>Perkalian Matriks</title>
</head>
<body>
	<h2>Perkalian Matriks</h2>
	<form method="post">
		<h3>Matriks Pertama (2x3)</h3>
		<table>
			<tr>
				<td><input type="number" name="m11"></td>
				<td><input type="number" name="m12"></td>
				<td><input type="number" name="m13"></td>
			</tr>
			<tr>
				<td><input type="number" name="m21"></td>
				<td><input type="number" name="m22"></td>
				<td><input type="number" name="m23"></td>
			</tr>
		</table>
		<h3>Matriks Kedua (3x3)</h3>
		<table>
			<tr>
				<td><input type="number" name="n11"></td>
				<td><input type="number" name="n12"></td>
				<td><input type="number" name="n13"></td>
			</tr>
			<tr>
				<td><input type="number" name="n21"></td>
				<td><input type="number" name="n22"></td>
				<td><input type="number" name="n23"></td>
			</tr>
			<tr>
				<td><input type="number" name="n31"></td>
				<td><input type="number" name="n32"></td>
				<td><input type="number" name="n33"></td>
			</tr>
		</table>
		<br>
		<input type="submit" name="submit" value="Hitung">
	</form>
	<br>
	<?php
	// proses perkalian matriks
	if (isset($_POST['submit'])) {
		// inisialisasi matriks pertama
		$matrix1 = array(
			array($_POST['m11'], $_POST['m12'], $_POST['m13']),
			array($_POST['m21'], $_POST['m22'], $_POST['m23'])
		);

		// inisialisasi matriks kedua
		$matrix2 = array(
			array($_POST['n11'], $_POST['n12'], $_POST['n13']),
			array($_POST['n21'], $_POST['n22'], $_POST['n23']),
			array($_POST['n31'], $_POST['n32'], $_POST['n33'])
		);

		// inisialisasi matriks hasil
		$result = array(
			array(0, 0, 0),
			array(0, 0, 0)
		);

		// menghitung hasil perkalian matriks
		for ($i=0; $i<2; $i++) {
			for ($j=0; $j<3; $j++) {
				$result[$i][$j] = 0;
				for ($k=0; $k<3; $k++) {
					$result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
				}
			}
		}

		// menampilkan matriks hasil
		echo "<h3>Hasil Perkalian</h3>";
		echo "<table>";
		for ($i=0; $i<2; $i++) {
			echo "<tr>";
			for ($j=0; $j<3; $j++) {
				echo "<td>".$result[$i][$j]."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	?>