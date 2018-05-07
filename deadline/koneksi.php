<?php

$database = mysqli_connect("localhost", "root", "", "web");
  function query($query) {
  global $database;
    $result = mysqli_query($database, $query);
    $rows   = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows [] = $row;
  }
  return $rows;
}

  function tambah($post) {
  global $database;
    $id      =  $post["id"];
    $judul   = htmlspecialchars($post["judul"]);
    $penulis = htmlspecialchars($post["penulis"]);
    $isi     = htmlspecialchars($post["isi"]);

    $query  = "INSERT INTO artikel VALUES ('', '$judul', '$penulis', '$isi')";

  mysqli_query($database, $query);
  return mysqli_affected_rows($database);
}

  function hapus($id) {
  global $database;

  mysqli_query($database, "DELETE FROM artikel WHERE id = $id ");
  return mysqli_affected_rows($database);
}

  function ubah($data){
  global $database;
    $id      =  $data["id"];
    $judul   =  htmlspecialchars($data["judul"]);
    $penulis =  htmlspecialchars($data["penulis"]);
    $isi     =  htmlspecialchars($data["isi"]);

    $query   = "UPDATE artikel SET judul = '$judul', penulis = '$penulis', isi = '$isi' WHERE id = $id";

  mysqli_query($database, $query);
  return mysqli_affected_rows($database);
}


 ?>
