<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
    <link rel="stylesheet" href="home.css">

  <body>
    <?php if (isset($_GET['error'])): ?>
      <script>
        alert("Gagal Login!!!");
      </script>
    <?php endif; ?>

    <div class="Loginbox" style="border-bottom:5px solid red; border-top:2px solid red;">

      <img src="logo.png" alt="" class="avatar">
      <h2>Login Dulu Gan!!!</h2>

      <form class="" action="proses_login.php" method="post">

        <p>Username/Nama </p>
          <input type="text" required name="Nama" value="" autocomplete="off" placeholder="">
        <p>Password</p>
            <input type="Password" required name="Password" value="" autocomplete="off" placeholder="">
            <button type="submit" name="button">Log-in</button><br><br>

        <div class="opp-log">
          <a href="index.html">
            <button type="button" name="button" class="Tamu" style="width:32.5%; border:1px solid black; border-radius:0; font-size:8pt; background-color:none;">Masuk sebagai tamu</button>
          </a>
          <a href="Lupa.php">
            <button type="button" name="button" class="Tamu" style="width:32.5%; border:1px solid black; border-radius:0; font-size:8pt; background-color:none;">Lupa Kata Sandi?</button>
          </a>
          <a href="tambah_akun.php">
            <button type="button" name="button" class="Tamu" style="width:32.5%; border:1px solid black; border-radius:0; font-size:8pt; background-color:none;">Belum punya akun?</button>
          </a>
        </div>
          <!-- <a href="Lupa.php"></a><br>
          <a href=tambah_akun.php> </a> -->
        </form>

    </div>
  </body>
</html>
