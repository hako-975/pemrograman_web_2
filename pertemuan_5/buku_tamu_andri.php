<html>
  <head>
    <title>Buku Tamu</title>
  </head>
  <body>
    <h2>Buku Tamu Andri</h2>
    <form method="post">
      <table cellpadding="10" cellspacing="0">
        <tr>
          <td>Nama:</td>
          <td>
            <input type="text" name="nama">
          </td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="text" name="email"></td>
        </tr>
        <tr>
          <td>Komentar:</td>
          <td>
            <textarea name="komentar"></textarea>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <button type="submit" name="submit">Simpan</button>
          </td>
        </tr>
      </table>
    </form>

    <?php
      if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $komentar = $_POST['komentar'];

        $file = 'bukutamu.dat';
        $handle = fopen($file, 'a');
        fwrite($handle, "Nama: ". $nama."\n". "Email: ". $email."\n"."Komentar: ".$komentar."\n\n");
        fclose($handle);

        echo "<p>Data telah disimpan.</p>";
      }
    ?>
  </body>
</html>
