<!DOCTYPE html>
<html>
<head>
    <title>Menu Materi Pemrograman PHP</title>
</head>
<body>
    <form method="get">
        <p>Materi Pemrograman PHP</p>
        <p>[1] Penggunaan IF</p>
        <p>[2] Penggunaan SWITCH..CASE</p>
        <p>[3] Penggunaan Looping</p>
        <p>[4] Penggunaan Array</p>
        <label for="pilihan">Pilih Materi yang ingin anda pelajari:</label>
        <input type="number" id="pilihan" name="pilihan" min="1" max="4">
        [1|2|3|4]
        <button type="submit" name="btnSubmit">Submit</button>
    </form>

    <?php
    if (isset($_GET['btnSubmit'])) {
        $pilihan = $_GET["pilihan"];
        switch ($pilihan) {
            case 1:
                nilaiAkhirDanGrade();
                break;
            case 2:
                kalkulator();
                break;
            case 3:
                bilanganHabisBagi3();
                break;
            case 4:
                perkalianMatriks();
                break;
            default:
                echo "Pilihan tidak valid";
                break;
        }
    }

    function nilaiAkhirDanGrade() {
        if (isset($_POST['btnSubmitPilihan1'])) {
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
        <?php if (isset($_GET['pilihan'])): ?>
            <?php if ($_GET['pilihan'] == '1'): ?>
                <form method="post">
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
                                <button type="submit" name="btnSubmitPilihan1">Kirim</button>
                            </td>
                        </tr>
                    </table>
                </form>

                <center>
                    <p>NILAI AKADEMIK <strong><?= (isset($_POST['btnSubmitPilihan1'])) ? $mataKuliah : "............................."; ?></strong></p>
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <th><?= (isset($_POST['btnSubmitPilihan1'])) ? $nama : "............................."; ?></th>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td>:</td>
                            <th><?= (isset($_POST['btnSubmitPilihan1'])) ? $nim : "............................."; ?></th>
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
                                        <th><?= (isset($_POST['btnSubmitPilihan1'])) ? $jumlahKehadiran : "............................."; ?></th>
                                    </tr>
                                    <tr>
                                        <td>Nilai Tugas</td>
                                        <td>:</td>
                                        <th><?= (isset($_POST['btnSubmitPilihan1'])) ? $nilaiTugas : "............................."; ?></th>
                                    </tr>
                                    <tr>
                                        <td>Nilai UAS</td>
                                        <td>:</td>
                                        <th><?= (isset($_POST['btnSubmitPilihan1'])) ? $nilaiUas : "............................."; ?></th>
                                    </tr>
                                    <tr>
                                        <td>Grade</td>
                                        <td>:</td>
                                        <th><?= (isset($_POST['btnSubmitPilihan1'])) ? $grade : "............................."; ?></th>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td>NILAI Kehadiran</td>
                                        <td>:</td>
                                        <th><?= (isset($_POST['btnSubmitPilihan1'])) ? $nilaiKehadiran : "............................."; ?></th>
                                    </tr>
                                    <tr>
                                        <td>Nilai UTS</td>
                                        <td>:</td>
                                        <th><?= (isset($_POST['btnSubmitPilihan1'])) ? $nilaiUts : "............................."; ?></th>
                                    </tr>
                                    <tr>
                                        <td>Nilai Akhir</td>
                                        <td>:</td>
                                        <th><?= (isset($_POST['btnSubmitPilihan1'])) ? $bobotNilaiAkhir : "............................."; ?></th>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <th><?= (isset($_POST['btnSubmitPilihan1'])) ? $keterangan : "............................."; ?></th>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </center>
            <?php endif ?>
        <?php endif ?>
    <?php
    }

    function kalkulator() {
        if (isset($_POST['btnSubmitPilihan2'])) {
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
        <?php if (isset($_GET['pilihan'])): ?>
            <?php if ($_GET['pilihan'] == '2'): ?>
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
                            <td><button type="submit" name="btnSubmitPilihan2">Submit</button></td>
                        </tr>
                    </table>
                    <?php if (isset($_POST['btnSubmitPilihan2'])): ?>
                        <hr>
                        <label>Hasil</label>
                        <input type="number" value="<?= $hasil; ?>">
                    <?php endif ?>
                </form>
            <?php endif ?>
        <?php endif ?>
    <?php
    }

    function bilanganHabisBagi3() {
        if (isset($_POST['btnSubmitPilihan3'])) {
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

        <?php if (isset($_GET['pilihan'])): ?>
            <?php if ($_GET['pilihan'] == '3'): ?>
                <form method="POST">
                    <div>
                        <label>Nilai Awal:</label>
                        <input type="number" name="nilai_awal">
                    </div>
                    <div>
                        <label>Nilai Akhir:</label>
                        <input type="number" name="nilai_akhir">
                    </div>
                    <div><button type="submit" name="btnSubmitPilihan3">Hitung</button></div>
                </form>
            <?php endif ?>
        <?php endif ?>
    <?php 
    }
  
    function perkalianMatriks() {
        if (isset($_POST['btnSubmitPilihan4'])) {
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

        <?php if (isset($_GET['pilihan'])): ?>
            <?php if ($_GET['pilihan'] == '4'): ?>
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
                    <input type="submit" name="btnSubmitPilihan4" value="Hitung">
                </form>
            <?php endif ?>
        <?php endif ?>
    <?php 
    }
    ?>


</body>
</html>
