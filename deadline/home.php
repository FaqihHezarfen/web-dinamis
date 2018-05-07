<?php

require 'koneksi.php';
$artikel = query("SELECT * FROM artikel");

?>
<!DOCTYPE html>
<html>
<head>
  <title>RUANG KANGGO DESA</title>
  <link rel="stylesheet" href="css/home.css">
</head>

<body>
  <h1>DAFTAR ARTIKEL</h1>
  <div class="textup">
    <div class="grup">
      <a  class="T1"href="logout.php" onclick="return confirm('Apakah anda yakin anda akan keluar?)')">Logout</a>
    </div>
    <div class="grup">
      <a  class="T1"href="tambah.php">Buat artikel baru anda</a>
    </div>
  </div>
  <div class="body">
    <table>
  <?php  foreach ($artikel as $row) : ?>
    <div class="tabel">
      <tr>
        <th><?= substr($row["judul"],0,100)?></th>
      </tr>
      <tr>
        <th><?= substr($row["penulis"],0,50)?></th>
      </tr>
      <tr>
        <th><?= substr($row["isi"],0,200)?></th>
      </tr>
      <tr>
    </div class="tabel">
        <td>
          <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
          <a href="hapus.php?id=<?= $row["id"]; ?>">Hapus</a>
          <a href="more.php?id=<?= $row["id"] ?>">read</a>
        </td>
      </tr>
  <?php endforeach; ?>
    </table>
  </div>
</body>
</html>
