<?php

require 'koneksi.php';
$artikel = query("SELECT * FROM artikel");

?>
<!DOCTYPE html>
<html>
<head>
  <title>Halaman Artikel</title>
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
  padding: 0px;
  margin: 0px;
  background: #66ff66;
  position: static;
  width: 100%;
  border-radius: 8px;
}

.body {
  transform: translateY(10px);
  text-align: left;
  color: #ffffff
  background: #008080;
  width: 70%;
  padding: 10px;
  border-radius: 10px;
  border-color: #33ccff;
  border-style: solid;

}
</style>
<body>
  <h1>Daftar Artikel</h1>
  <a href="login.php">Login</a>
  <div class="body">
  <table>
    <tr>
      <th>Judul</th>
      <th>Penulis</th>
      <th>Isi</th>
    </tr>
  <?php  foreach ($artikel as $row) : ?>
    <tr>
      <td><?= $row["judul"]?></td>
      <td><?= $row["penulis"]?></td>
      <td><?= $row["isi"]?></td>
    </tr>
  <?php endforeach; ?>
  </table>
</div>
</body>
</html>
