<?php
session_start();
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 'deleted') {
        echo '<script>alert("obrisano")</script>';
    }
    elseif($_GET['msg'] == 'updated') {
        echo '<script>alert("izmenjeno")</script>';
    }
    else{
        echo '<script>alert("Doslo je do greske")</script>';
    }
}

if (!isset($_SESSION['login'])){
    echo "Nemate pristup ovoj stranici !";
}
else{
    require 'konekcija.php';
    ?>
<html>
<head>
   <title>ADMIN</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="style-admin.css">
</head>
<body>
  <div class="admin-header">
      <a href="ponuda.php"><div class="nav-admin">Upravljaj ponudom</div></a>
      <a href="price.php"><div class="nav-admin right">Upravljaj pričama</div></a>
  </div>
   <!------------------------SELECT------------------------------>

    <?php 
    $result = mysqli_query($conn,"SELECT * FROM rezervacije");
      echo "<table border='1' class='rez-tabela'>
      <tr>
        <th>ID</th>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Broj Telefona</th>
        <th>Broj osoba</th>
        <th>ID lokacije</th>
      </tr>";
    while($row = mysqli_fetch_array($result))
    {
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['ime'] . "</td>";
      echo "<td>" . $row['prezime'] . "</td>";
      echo "<td>" . $row['broj_telefona'] . "</td>";
      echo "<td>" . $row['broj_osoba'] . "</td>";
      echo "<td>" . $row['id_lokacije'] . "</td>";

      
      echo "</tr>";
    }
    echo "</table>";
    ?>

    <hr>
  
       <!--------------------------------------UPDATE-------------------------------->

    <div class="rez-sadrzaj">
    <div class="izmjeni-rez">
       <form method="POST" action="rezervacije/izmjeniRez.php">

        <h2>Izmjeni rezervacije</h2>
        <h6>Izaberi rezervisanog kog želiš da izmjeniš</h6>
        <select class="form-control"  name="id" id="id">
          <?php 
                $update = mysqli_query($conn,"SELECT * FROM rezervacije");
                while($row = mysqli_fetch_array($update))
                {
                echo "<option value='". $row['id'] ."'>".$row['id'].' '.$row['ime'].' '.$row['prezime']."</option>";
                }
          ?>
        </select>
        <div class="form-group">
                <label for="">Ime:</label>
                <input autocomplete="off" type="text" class="form-control" name="ime" id="">
        </div>
        <div class="form-group">
                <label for="">Prezime:</label>
                <input autocomplete="off" type="text" class="form-control" name="prezime" id="">
        </div>
        <div class="form-group">
                <label for="">Broj Osoba:</label>
                <input autocomplete="off" type="text" class="form-control" name="broj_osoba" id="">
        </div>
        <div class="form-group">
                <label for="">Broj telefona:</label>
                <input autocomplete="off" type="text" class="form-control" name="broj_telefona" id="">
        </div>
        <div class="form-group">
                <label>Izaberi lokaciju</label>
                <select class="form-control"  name="id_lokacije" id="id">
          <?php 
                $update = mysqli_query($conn,"SELECT * FROM lokacija");
                while($row = mysqli_fetch_array($update))
                {
                echo "<option value='". $row['id'] ."'>".$row['id'].' '.$row['naslov'].' '.$row['cena']."</option>";
                }
          ?>
        </select>
        </div>
        
          
        <button type="submit" name="izmeni-rez" class="btn btn-warning">Izmeni</button>
    </div>

    </form>

    <!----------------------------DELETE-------------------------------->
    <div class="obrisi-rez">
    <form method="post" action="rezervacije/obrisi.php">
    <div class="delete">
        <h2>Obriši rezervaciju</h2>
        <h6>Izaberi rezervaciju koju želiš da obrišeš</h6>
        <select class="form-control"  name="id" id="id">
          <!--<option value="0">Izaberi</option>-->
          <?php 
                $result = mysqli_query($conn,"SELECT * FROM rezervacije");
                while($row = mysqli_fetch_array($result))
                {
                echo "<option value='".$row['id']."'>".$row['id']." ". $row['ime']." ".$row['prezime']."</option>";
                }
          ?>
        </select>

        </select>
        <button type="submit" name="deleteSubmit" class="btn btn-danger rez-dugme">Izbriši</button>
    </div>
  </form>
</div>
</div>
<form action="login/odjava.php" method="post">
        <input type="submit" name="odjava" value="Odjavi se" class="btn btn-danger odjava">
    </form>
</body>
</html>
<?php
}
?>