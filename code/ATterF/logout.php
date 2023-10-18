
<?php
session_start();

unset($_SESSION['username']);
unset($_SESSION['level']);

if (session_destroy() == true ){
      header('Location: index.php');
} else {
      echo "Gagal logout.";
}
