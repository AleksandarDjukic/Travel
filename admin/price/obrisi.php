
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
      $prepare = $conn->prepare("DELETE FROM price WHERE id = ?");
      $prepare->bind_param("i", $id);
      $prepare->execute();
        if(!$prepare->error)
        {
          header("Refresh:0; url=../price.php?msg=deleted");
        }
        else
        {
          header("Refresh:0; url=../price.php?msg=error");
        }
    }
  else echo "Greska";
}
