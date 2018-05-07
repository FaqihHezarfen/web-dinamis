<?php

require 'koneksi.php';

$id = $_GET["id"];

$artikel = query("SELECT * FROM artikel WHERE id = $id")[0];

if (isset($_POST["submit"]) ) {
    if (ubah($_POST) > 0) {
      echo " <script>
              alert('Artikel anda berhasil diubah');
              document.location.href = 'home.php';
            </script>";
    } else {
        echo "<script>
                alert('Artikel anda tidak dapat diubah');
                document.location.href = 'home.php';
              </script>";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>update</title>
</head>
<style>

body {
  margin: 0;
  padding: 0;
  background: url("css/bg.jpg") no-repeat fixed;
  -webkit-background-size: 100% 100%;
  -moz-background-size: 100% 100%;
  -o-background-size: 100% 100%;
  background-size: 100% 100%;
  font-family: sans-serif;
}

</style>
<body>
  <h1>UBAH</h1>
  <form action="" method="post">
    <input for="id" type="hidden" name="id" value="<?= $artikel["id"]; ?>">
    <table>
      <tr>
        <td><label for="judul">judul</label></td>
        <td>:</td>
        <td><input type="text" name="judul" required value="<?= $artikel["judul"]; ?>"></td>
      </tr>
      <tr>
        <td><label for="penulis">Nama Penulis</label></td>
        <td>:</td>
        <td><input type="text" name="penulis" required value="<?= $artikel["penulis"]; ?>"></td>
      </tr>
      <tr>
        <td><label for="isi">isi</label></td>
        <td>:</td>
        <td><textarea name="isi" required value="<?= $artikel["isi"]; ?>"></textarea></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><button type="submit" name="submit">ubah</button></td>
      </tr>
   </table>
 </form>
</body>
</html>
