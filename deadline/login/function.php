<?php
// mengkoneksikan ke Databases
global $conn;
$conn = mysqli_connect("localhost", "root", "", "web");

function query($query) {
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}



function tambah($post){
  global $conn;

  $Nama = htmlspecialchars($post["Nama"]);
  $Email = htmlspecialchars($post["Email"]);

  // query insert data
  $query = "INSERT INTO user
              VALUES
              ('$Nama','$Email','')
              ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
  }

// HAPUS
function hapus($Email){
   global $conn;
   mysqli_query($conn,"DELETE FROM user WHERE Email = $Email");
   echo mysqli_affected_rows($conn);
   exit;
}

function ubah($data){
  global $conn;
  $ID     = $data["ID"];
  $Nama   = htmlspecialchars($data["Nama"]);
  $Email  = htmlspecialchars($data["Email"]);

  // query UPDATE data
  $query = "UPDATE user SET
              Nama    = '$Nama'
              Email   = '$Email'
              WHERE ID = $ID
              ";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);

}

 ?>
