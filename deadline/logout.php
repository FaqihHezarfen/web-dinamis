<!DDOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Halaman Keluar</title>
</head>
<body>

  <?php
    session_start();
    session_unset();
    session_destroy();

    header("location:index.php");
  ?>
</body>
</html>
