<?php

require 'proses_signup.php';

if (isset($_POST["submit"]) ) {
  $nama = $_POST["nama"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $query = "INSERT INTO user VALUES ('', '$nama', '$email', '$password')";
mysqli_query($database, $query);
if (($_POST) > 0) {
   echo " \<script>
            alert('dadi');
            document.location.href = 'home.php';
          </script>";
  } else {
     echo "<script>
            alert('ora dadi');
            document.location.href = 'login.php';
          </script>";
    }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RUANG KANGGO DESA</title>
  </head>
    <link rel="stylesheet" href="css/login.css">

  <body>
    <?php if (isset($_GET['error'])): ?>
      <script>
        alert("Akun anda gagal dibuat, silahkan coba kembali");
      </script>
    <?php endif; ?>

    <div class="konten">
        <div class="kepala">
            <h2 class="judul">Sign Up</h2>
        </div>
        <div class="tulisan">
            <form method="post">

              <div class="grup">
                  <label for="nama">Username</label>
                  <input type="text" required name="nama" autocomplete="off" placeholder="Masukkan Username Anda">
              </div>
                <div class="grup">
                    <label for="email">E-mail Address</label>
                    <input type="text" required name="email" autocomplete="off" placeholder="Masukkan Alamat Email Anda">
                </div>
                <div class="grup">
                    <label for="password">Password</label>
                    <input type="password" required name="password" autocomplete="off" placeholder="Masukkan password Anda">
                </div>
                <div class="grup">
                    <input type="submit" name="submit" value="Sign In">
                </div>
                <div class="grup2">
                  <a class="text1" href="login.php" style="text-decoration:none;">Sudah punya akun?</a>
                </div>
            </form>
        </div>
    </div>

  </body>
</html>
