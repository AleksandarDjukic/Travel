
<?php
if(!require_once('../konekcija.php'))
   {
       die("Učitavanje filea za konekciju nije uspjelo");
   }
if (isset($_POST['deleteSubmit']) )
{
   if(isset($_POST['id']))
   {    
      $id = $_POST['id'];  
      $prepare = $conn->prepare("DELETE FROM rezervacije WHERE id = ?");
      $prepare->bind_param("i", $id);
      $prepare->execute();
        if(!$prepare->error)
        {
          header("Refresh:0; url=../rezervisani.php?msg=deleted");
        }
        else
        {
          echo "Nismo uspjeli";
        }
    }
  else echo "Greska";
}
