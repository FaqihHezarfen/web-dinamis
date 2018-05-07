<!-- DELETE -->
<?php

require 'koneksi.php';

$id = $_GET["id"];
 if (hapus($id) >0) {
  echo "<script>
          alert('Artikel anda berhasil dihapus');
          document.location.href = 'home.php';
        </script>";
  } else {
     echo "<script>
            alert('Artikel anda tidak dapat dihapus');
          </script>";
}

 ?>
