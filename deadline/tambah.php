<?php

require 'koneksi.php';

if (isset($_POST["submit"]) ) {
  $judul = $_POST["judul"];
  $penulis = $_POST["penulis"];
  $isi = $_POST["isi"];
  $query = "INSERT INTO artikel VALUES ('', '$judul', '$penulis', '$isi')";
mysqli_query($database, $query);
if (($_POST) > 0) {
  echo "<script>
          alert('Artikel baru anda sudah ditambahkan');
          document.location.href = 'home.php';
        </script>";
  } else {
      echo "<script>
              alert('Artikel anda gagal ditambahkan');
              document.location.href = 'home.php';
            </script>";
    }
}


 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Create</title>
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

  table {
    border-radius: 10px;
    border-style: solid;
    border-color: #66ff66;
    background: transparant;
    position: static;
    width: 100%;
    height: 100px;
    border-radius: 8px;
  }
</style>
<body>
  <h1></h1>

  <form action="" method="post">
    <table>
      <tr>
        <td><label for="id" hidden="">id</label></td>
      </tr>
      <tr>
        <td><label for="judul">judul</label></td>
        <td>:</td>
        <td><input type="text" name="judul"required></td>
      </tr>
      <tr>
        <td><label for="penulis">Nama Penulis</label></td>
        <td>:</td>
        <td><input type="text" name="penulis"required></td>
      </tr>
      <tr>
        <td><label for="isi">isi</label></td>
        <td>:</td>
        <td><textarea type="text" name="isi" required></textarea></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><button type="submit" name="submit">kirim</button></td>
      </tr>
   </table>
 </form>
</body>
</html>
