<?php 
	if (isset($_POST['btnSubmit'])) {
		$nilai1 = $_POST['nilai1'];
		$operator = $_POST['operator'];
		$nilai2 = $_POST['nilai2'];

		switch ($operator) {
			case '+':
				$hasil = $nilai1 + $nilai2;
				break;
			case '-':
				$hasil = $nilai1 - $nilai2;
				break;
			case '*':
				$hasil = $nilai1 * $nilai2;
				break;
			case '/':
				$hasil = $nilai1 / $nilai2;
				break;
		}
	}

 ?>

<html>
<head>
	<title>Soal 1</title>
</head>
<body>
	<form method="POST">
		<table>
			<tr>
				<td>Nilai 1</td>
				<td></td>
				<td>Nilai 2</td>
			</tr>
			<tr>
				<td><input type="number" name="nilai1"></td>
				<td>
					<select name="operator">
						<option value="+">+</option>
						<option value="-">-</option>
						<option value="*">*</option>
						<option value="/">/</option>
					</select>
				</td>
				<td><input type="number" name="nilai2"></td>
				<td><button type="submit" name="btnSubmit">Submit</button></td>
			</tr>
		</table>
		<?php if (isset($_POST['btnSubmit'])): ?>
			<hr>
			<label>Hasil</label>
			<input type="number" value="<?= $hasil; ?>">
		<?php endif ?>
	</form>
</body>
</html>