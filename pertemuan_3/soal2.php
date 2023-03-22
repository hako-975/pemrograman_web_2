<?php 
	if (isset($_POST['btnSubmit'])) {
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$mataKuliah = $_POST['mataKuliah'];
		$jumlahKehadiran = $_POST['jumlahKehadiran'];
		$nilaiTugas = $_POST['nilaiTugas'];
		$nilaiUts = $_POST['nilaiUts'];
		$nilaiUas = $_POST['nilaiUas'];

		// bobot kehadiran 10%
		$maksKehadiran = 18;
		$bobotKehadiran = ($jumlahKehadiran / $maksKehadiran) * 10;
		$nilaiKehadiran = ($jumlahKehadiran / $maksKehadiran) * 100;
		
		// bobot tugas 20%
		$bobotTugas = ($nilaiTugas / 100) * 20;

		// bobot uts 30%
		$bobotUts = ($nilaiUts / 100) * 30;

		// bobot uas 40%
		$bobotUas = ($nilaiUas / 100) * 40;

		$bobotNilaiAkhir = ($bobotKehadiran + $bobotTugas + $bobotUts + $bobotUas);

		if ($bobotNilaiAkhir >= 80) {
			$keterangan = "Lulus";
			$grade = "A";
		} elseif ($bobotNilaiAkhir >= 70) {
			$keterangan = "Lulus";
			$grade = "B";
		} elseif ($bobotNilaiAkhir >= 60) {
			$keterangan = "Tidak Lulus";
			$grade = "C";
		} elseif ($bobotNilaiAkhir >= 50) {
			$keterangan = "Tidak Lulus";
			$grade = "D";
		} else {
			$keterangan = "Tidak Lulus";
			$grade = "E";
		}
	}
 ?>

<html>
<head>
	<title>Soal 2</title>
	<style>
		th {
			text-align: left;
		}
	</style>
</head>
<body>
	<form method="POST">
		<table>
			<tr>
				<td><label for="nama">Nama</label></td>
				<td><input type="text" name="nama" placeholder="Masukkan Nama" id="nama"></td>
			</tr>
			<tr>
				<td><label for="nim">NIM</label></td>
				<td><input type="number" name="nim" placeholder="Masukkan NIM" id="nim"></td>
			</tr>
			<tr>
				<td><label for="mataKuliah">Mata Kuliah</label></td>
				<td><input type="text" name="mataKuliah" placeholder="Masukkan Mata Kuliah" id="mataKuliah"></td>
			</tr>
			<tr>
				<td><label for="jumlahKehadiran">Jumlah Kehadiran</label></td>
				<td><input type="number" name="jumlahKehadiran" placeholder="Masukkan jumlahKehadiran" id="jumlahKehadiran"></td>
			</tr>
			<tr>
				<td><label for="nilaiTugas">Nilai Tugas</label></td>
				<td><input type="number" name="nilaiTugas" placeholder="Masukkan nilaiTugas" id="nilaiTugas"></td>
			</tr>
			<tr>
				<td><label for="nilaiUts">Nilai UTS</label></td>
				<td><input type="number" name="nilaiUts" placeholder="Masukkan nilaiUts" id="nilaiUts"></td>
			</tr>
			<tr>
				<td><label for="nilaiUas">Nilai UAS</label></td>
				<td><input type="number" name="nilaiUas" placeholder="Masukkan nilaiUas" id="nilaiUas"></td>
			</tr>
			<tr>
				<td>
					<button type="submit" name="btnSubmit">Kirim</button>
				</td>
			</tr>
		</table>
	</form>

	<center>
		<p>NILAI AKADEMIK <strong><?= (isset($_POST['btnSubmit'])) ? $mataKuliah : "............................."; ?></strong></p>
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<th><?= (isset($_POST['btnSubmit'])) ? $nama : "............................."; ?></th>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<th><?= (isset($_POST['btnSubmit'])) ? $nim : "............................."; ?></th>
			</tr>
		</table>
		<br>
		<table>
			<tr>
				<td>
					<table>
						<tr>
							<td>Jumlah Kehadiran</td>
							<td>:</td>
							<th><?= (isset($_POST['btnSubmit'])) ? $jumlahKehadiran : "............................."; ?></th>
						</tr>
						<tr>
							<td>Nilai Tugas</td>
							<td>:</td>
							<th><?= (isset($_POST['btnSubmit'])) ? $nilaiTugas : "............................."; ?></th>
						</tr>
						<tr>
							<td>Nilai UAS</td>
							<td>:</td>
							<th><?= (isset($_POST['btnSubmit'])) ? $nilaiUas : "............................."; ?></th>
						</tr>
						<tr>
							<td>Grade</td>
							<td>:</td>
							<th><?= (isset($_POST['btnSubmit'])) ? $grade : "............................."; ?></th>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td>NILAI Kehadiran</td>
							<td>:</td>
							<th><?= (isset($_POST['btnSubmit'])) ? $nilaiKehadiran : "............................."; ?></th>
						</tr>
						<tr>
							<td>Nilai UTS</td>
							<td>:</td>
							<th><?= (isset($_POST['btnSubmit'])) ? $nilaiUts : "............................."; ?></th>
						</tr>
						<tr>
							<td>Nilai Akhir</td>
							<td>:</td>
							<th><?= (isset($_POST['btnSubmit'])) ? $bobotNilaiAkhir : "............................."; ?></th>
						</tr>
						<tr>
							<td>Keterangan</td>
							<td>:</td>
							<th><?= (isset($_POST['btnSubmit'])) ? $keterangan : "............................."; ?></th>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</center>
</body>
</html>