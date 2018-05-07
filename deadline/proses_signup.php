<?php

$database = mysqli_connect("localhost", "root", "", "web");

function tambah($POST){
global $database;
  $nama     = htmlspecialchars($POST["nama"]);
  $email    = htmlspecialchars($POST["email"]);
  $password = htmlspecialchars($POST["password"]);

  $query = "INSERT INTO user VALUES ('$nama','$email', '$password','')";

mysqli_query($database, $query);
return mysqli_affected_rows($database);

  }
 ?>
