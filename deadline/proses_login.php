<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>proses</title>
</head>
<body>
 <?php
   $email=$_POST['email'];
   $password=$_POST['password'];

   if ($email == "") {
     header("location:login.php");
  } else {
      $pdo  = new PDO('mysql:host=localhost;dbname=web','root','');
      $exec = $pdo->prepare("SELECT * FROM user WHERE email = :email AND password = :password");
      $exec->execute([
        'email' => $email,
        'password' => $password
    ]);

    $exec->setFetchMode(PDO::FETCH_ASSOC);
    $data = $exec->fetchAll();
    if (count($data) > 0) {
      $data = $data[0];
      header("location: home.php");
    }else{
      header("location: login.php?error=1");
    }
    exit;

    if ($data=="") {
      header("location:login.php");
    } else {
      $query = 'SELECT * from user where Password ="'.$password.'"';
      $hasil_p = mysql_query($query);
      $data_p = mysql_fetch_array($hasil);
      $data_p[0];

   if ($data_p=="") {
     header("location:home.php");
   }else {
     session_start();
     $_SESSION["user"] = $email;
     header("location:home.php");
    }
  }
  mysql_close($connect);
  }

  ?>

</body>
</html>
