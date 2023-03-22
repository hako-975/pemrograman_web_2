<html>
<head>
	<title>Soal 1 Cara 2</title>
</head>
<body>
	<form method="post">
		<table>
			<?php for ($i = 0; $i < 5; $i++): ?>
				<tr>
					<td>Data ke-<?= $i+1; ?></td>
				</tr>
				<tr>
					<td>Alas</td>
					<td>:</td>
					<td><input type="number" name="alas[]"></td>
				</tr>
				<tr>
					<td>Tinggi</td>
					<td>:</td>
					<td><input type="number" name="tinggi[]"></td>
				</tr>
			<?php endfor ?>
			<tr>
				<td>
					<button type="submit" name="btnProses">Proses</button>
				</td>
			</tr>
		</table>
		
		<table border='1' cellpadding='10' cellspacing='0'>
			<tr>
				<th>No.</th>
				<th>Alas</th>
				<th>Tinggi</th>
				<th>Luas</th>
			</tr>
		<?php if (isset($_POST['btnProses'])) : ?>
			<?php for ($i=0; $i < 5; $i++) : 
				$alas = $_POST['alas'];
				$tinggi = $_POST['tinggi'];
				$luas = 0.5 * $alas[$i] * $tinggi[$i];
			?> 
				<tr>
					<td><?= $i+1; ?>.</td>
					<td><?= $alas[$i]; ?></td>
					<td><?= $tinggi[$i]; ?></td>
					<td><?= $luas; ?></td>
				</tr>
			<?php endfor ?>
		<?php endif ?>
		</table>
	</form>
</body>
</html>