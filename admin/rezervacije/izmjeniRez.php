<?php 

if(!require_once('../konekcija.php'))
   {
       die("Učitavanje filea za konekciju nije uspjelo");
   }


if (isset($_POST['izmeni-rez']) )
{

   if(isset($_POST['id']) && !empty($_POST['ime']) && isset($_POST['prezime']) )
   {
      $id            = $_POST['id'];
      $ime           = $_POST['ime'];
      $prezime       = $_POST['prezime'];
      $broj_telefona = $_POST['broj_telefona'];
      $broj_osoba    = $_POST['broj_osoba'];
      $id_lokacije   = $_POST['id_lokacije'];

   }

}
   $prepare = $conn->prepare("UPDATE rezervacije SET ime = ?, prezime = ?, broj_telefona = ?, broj_osoba = ?, id_lokacije = ? WHERE id = ?");
   $prepare->bind_param("sssiii",  $ime, $prezime, $broj_telefona, $broj_osoba, $id_lokacije, $id );
 
   $prepare->execute();
   if(!$prepare->error)
   {	

       header("Refresh:0; url=../rezervisani.php?msg=updated");
   }
   else
   {
       header("Refresh:0; url=../rezervisani.php?msg=empty");
   }



?>