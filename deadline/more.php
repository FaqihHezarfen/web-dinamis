<?php

require 'koneksi.php';

$id = $_GET["id"];

$artikel = query("SELECT * FROM artikel WHERE id = $id")[0];
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Read</title>
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

  .text{
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
  <div class="text">
  <h1>RUANG KANGGO DESA</h1>
    <br><h1><?= $artikel["judul"]; ?></h1><br>
      <p>penulis berita:<?= $artikel["penulis"]; ?></p><br>
      <h4><?= $artikel["isi"]; ?></h4><br>
    <a href="home.php">keluar</a>
  </div>
</body>
</html>
