<?php

$pdo  = new PDO('mysql:host=localhost;dbname=web','root','');
$exec = $pdo->prepare('SELECT nama,password from user where email=:email');
$exec->execute([
  'email' => $_POST['username']
]);

if ($exec->rowCount() > 0) {
  $exec->setFetchMode(PDO::FETCH_ASSOC);
  $datas = $exec->fetchAll();
    foreach ($datas as $data) {
       $data['nama'];
       $data['password'];
    }

}else {
  echo"<script>
        alert('Akun anda tidak ditemukan');
        document.location.href= 'lupa.php';
      </script>";
 }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
</head>
  <link rel="stylesheet" href="css/Login.css">
<body>
 <div class="konten">
  <div class="kepala">
    <h2 class="judul">Berikut adalah akun anda</h2>
  </div>
   <div class="tulisan">
    <form action="login.php" method="post">
      <div class="grup">
       <label for="email">Username</label>
       <input type="text" required name="nama" autocomplete="off" value="<?= $data['nama'];  ?>" placeholder="Masukkan Username Anda">
     </div>
     <div class="grup">
       <label for="password">Password</label>
       <input type="text" required name="password" autocomplete="off" value="<?= $data['password'];  ?>" placeholder="Masukkan password Anda">
     </div>
     <div class="grup">
      <input type="submit" name="button" value="kembali login"  href="login.php">
     </div>
    </form>
  </div>
 </div>
</body>
</html>
