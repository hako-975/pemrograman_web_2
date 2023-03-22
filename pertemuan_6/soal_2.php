<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<h1>Data Mahasiswa</h1>
	<form method="post">
		<table>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>NIM</th>
			</tr>
			<?php
				// menampilkan form untuk memasukkan data
				for ($i=1; $i <= 3; $i++) { 
					echo "<tr>";
					echo "<td>".$i."</td>";
					echo "<td><input type='text' name='nama[]'></td>";
					echo "<td><input type='text' name='nim[]'></td>";
					echo "</tr>";
				}
			?>
		</table>
		<input type="submit" name="submit" value="Tambah Data">
	</form>

	<?php
		// memeriksa apakah form telah disubmit
		if(isset($_POST['submit'])) {
			// memeriksa apakah data nama dan NIM tidak kosong
			if(!empty($_POST['nama']) && !empty($_POST['nim'])) {
				// menggabungkan data nama dan NIM menjadi array asosiatif
				$mahasiswa = array();
				foreach ($_POST['nama'] as $key => $value) {
					$mahasiswa[] = array(
						'nama' => $_POST['nama'][$key],
						'nim' => $_POST['nim'][$key]
					);
				}

				// menampilkan data mahasiswa
				echo "<h2>Data Mahasiswa</h2>";
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>No.</th>";
				echo "<th>Nama</th>";
				echo "<th>NIM</th>";
				echo "</tr>";
				$no = 1;
				foreach ($mahasiswa as $m) {
					echo "<tr>";
					echo "<td>".$no++."</td>";
					echo "<td>".$m['nama']."</td>";
					echo "<td>".$m['nim']."</td>";
					echo "</tr>";
				}
				echo "</table>";
			} else {
				echo "<p style='color:red;'>Data nama dan NIM harus diisi!</p>";
			}
		}
	?>
</body>
</html>
