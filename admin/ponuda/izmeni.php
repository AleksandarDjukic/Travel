<?php 

if(!require_once('../konekcija.php'))
   {
       die("Učitavanje filea za konekciju nije uspjelo");
   }


if (isset($_POST['izmeni']) )
{

   if(isset($_POST['naslov']) && !empty($_POST['drzava']) && isset($_POST['grad']) && !empty($_POST['cena']))
   {
      $id       = $_POST['id'];
      $naslov   = $_POST['naslov'];
      $drzava   = $_POST['drzava'];
      $grad     = $_POST['grad'];
      $cena     = $_POST['cena'];
      $opis     = $_POST['opis'];
      $jezik    = $_POST['jezik'];
      $smjestaj = $_POST['smjestaj'];
      $obroci   = $_POST['obroci'];
      $valuta   = $_POST['valuta'];
      $v_zona   = $_POST['v_zona'];
      $polazak  = $_POST['polazak'];
      $povratak = $_POST['povratak'];
      $slika1   = $_POST['slika1'];
      $slika2   = $_POST['slika2'];


   }

}
   $prepare = $conn->prepare("UPDATE lokacija SET naslov = ?, drzava = ?, grad = ?, cena = ?, opis = ?, jezik = ?, smjestaj = ?, obroci = ?, valuta = ?, v_zona = ? ,polazak = ?, povratak = ?, slika1 = ?, slika2 = ? WHERE id = ?");
   $prepare->bind_param("sssissssssssssi",  $naslov, $drzava, $grad, $cena ,$opis ,$jezik, $smjestaj, $obroci, $valuta, $v_zona, $polazak, $povratak, $slika1, $slika2, $id );
 
   $prepare->execute();
   if(!$prepare->error)
   {	

       header("Refresh:0; url=../ponuda.php?msg=success");
   }
   else
   {
       header("Refresh:0; url=../ponuda.php?msg=error");
   }



?>