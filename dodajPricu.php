<?php 

if(!require_once('admin/konekcija.php'))
   {
       die("Učitavanje filea za konekciju nije uspjelo");
   }


if (isset($_POST['dodaj_pricu']) )
{

   if(isset($_POST['naslov_price']) && !empty($_POST['autor']) && isset($_POST['slika']) && !empty($_POST['sadrzaj']))
   {
      $naslov   = $_POST['naslov_price'];
      $autor   = $_POST['autor'];
      $sadrzaj    = $_POST['sadrzaj'];
      $slika     = $_POST['slika'];
   }

}

   $prepare = $conn->prepare("INSERT INTO price (naslov, autor, sadrzaj, slika) VALUES ( ? , ? , ? , ? )");
   $prepare->bind_param("ssss",  $naslov, $autor, $sadrzaj, $slika);
 
   $prepare->execute();
   if(!$prepare->error)
   {	

       header("Refresh:0; url=price.php?msg=succes");
   }
   else
   {
       header("Refresh:0; url=napisi.php?msg=error");
   }



?>