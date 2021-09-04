<?php
if (isset($_POST['submit'])) {

   if(isset($_POST['uname']) && !empty($_POST['pass']))
   {
      $uname  = $_POST['uname'];
      $pass   = $_POST['pass'];

      if ($uname == 'admin' && $pass == 'admin') {
         session_start();
         $_SESSION["login"] = "uspjesno";
         $_SESSION["broj"] = "dva";

          header('Location: ../ponuda.php?msg=prijava');
      }
      else{
      header('Location: ../index.php?msg=greska');
   }
   }

   
}
else
{
	echo "greska";
}

?>