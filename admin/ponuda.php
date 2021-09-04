<?php
session_start();


if (!isset($_SESSION['login'])){
    echo "Nemate pristup ovoj stranici !";
}
else{
    require 'konekcija.php';
    if (isset($_GET['msg'])) {
        if ($_GET['msg'] == 'prijava') {
            echo '<script>alert("Uspješno prijavljen");</script>';
        }
        elseif ($_GET['msg'] == 'success') {
            echo '<script>alert("Uspješno izvršeno");</script>';
        }
        else{
            echo '<script>alert("Došlo je do greške");</script>';
        }
    }
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
        <a href="rezervisani.php"><div class="nav-admin">Upravljaj rezervacijama</div></a>
        <a href="price.php"><div class="nav-admin right">Upravljaj pričama</div></a>
    </div>

   <!----------------------------------------------------------SELECT-------------------------------------------------------->
   <div class="sticky">
    <?php 
    $result = mysqli_query($conn,"SELECT * FROM lokacija");
      echo "<table border='1' class='tabela'>
      <tr>
        <th>ID</th>
        <th>Naslov</th>
        <th>Drzava</th>
        <th>Grad</th>
        <th>Cena</th>
        <th>Opis</th>
        <th>Jezik</th>
        <th>Smjestaj</th>
        <th>Obroci</th>
        <th>Valuta</th>
        <th>V. Zona</th>
        <th>Polazak</th>
        <th>Povratak</th>
        
      </tr>";
    while($row = mysqli_fetch_array($result))
    {
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['naslov'] . "</td>";
      echo "<td>" . $row['drzava'] . "</td>";
      echo "<td>" . $row['grad'] . "</td>";
      echo "<td>" . $row['cena'] . "</td>";
        $opis = $row["opis"];
        $opis = substr($opis,0,35); 
      echo "<td>" . $opis. "</td>";
      echo "<td>" . $row['jezik'] . "</td>";
      echo "<td>" . $row['smjestaj'] . "</td>";
      echo "<td>" . $row['obroci'] . "</td>";
      echo "<td>" . $row['valuta'] . "</td>";
      echo "<td>" . $row['v_zona'] . "</td>";
        $polazak = $row["polazak"];
        $polazak = substr($polazak,0,10);
      echo "<td>" . $polazak . "</td>";
        $povratak = $row["povratak"];
        $povratak = substr($povratak,0,10);
      echo "<td>" . $povratak . "</td>";
      
      echo "</tr>";
    }
    echo "</table>";
    ?>
  </div>
    <div class="tabovi">
  <button class="tab d-tab" id="dodaj">Dodaj</button>
  <button class="tab i-tab" id="izmjeni">Izmjeni</button>
  <button class="tab o-tab" id="obrisi">Obrisi</button>
</div>
    <hr>

  <div class="col-lg-4 l-dodaj" style="margin: 0 auto;margin-top: 50px">
       <form method="POST" action="ponuda/dodaj.php">
           <div class="form-group">
                <h2>Dodaj novu lokaciju u ponudu</h2>
                <label for="">Naslov:</label>
                <input autocomplete="off" type="text" class="form-control" name="naslov" id="">
           </div>
           <div class="form-group">
               <label for="">Država</label>
               <input autocomplete="off" type="text" class="form-control" name="drzava" id="">
           </div>
           <div class="form-group">
               <label for="">Grad</label>
               <input autocomplete="off" type="text" class="form-control" name="grad" id="">
           </div>
           <div class="form-group">
               <label for="">Cena</label>
               <input autocomplete="off" type="text" class="form-control" name="cena" id="">
           </div>
           <div class="form-group">
               <label for="">Opis</label><br>
               <textarea name="opis" class="form-control" style="width:100%; height: 150px;"></textarea>
           </div>
           <div class="form-group">
               <label for="">Jezik</label>
               <input autocomplete="off" type="text" class="form-control" name="jezik" id="">
           </div>
           <div class="form-group">
               <label for="">Smjestaj</label>
               <input autocomplete="off" type="text" class="form-control" name="smjestaj" id="">
           </div>
           <div class="form-group">
               <label for="">Obroci</label>
               <input autocomplete="off" type="text" class="form-control" name="obroci" id="">
           </div>
           <div class="form-group">
               <label for="">Valuta</label>
               <input autocomplete="off" type="text" class="form-control" name="valuta" id="">
           </div>
           <div class="form-group">
               <label for="">Vremenska zona</label>
               <input autocomplete="off" type="text" class="form-control" name="v_zona" id="">
           </div>
           <div class="form-group">
               <label for="polazak">Datum polazka</label>
               <input  type="date" name="polazak" >
           </div>
           <div class="form-group">
               <label for="povratak">Datum povratka</label>
               <input type="date" name="povratak">
           </div>
           <div class="form-group">
               <label for="">Slika (Naslovna)</label>
               <input autocomplete="off" type="text" class="form-control" name="slika1" id="">
           </div>
           <div class="form-group">
               <label for="">Slika 2</label>
               <input autocomplete="off" type="text" class="form-control" name="slika2" id="">
           </div>

           <button type="submit" name="dodaj" class="btn btn-primary">Dodaj</button>
       </form>
       </div>
       <!--------------------------------------UPDATE-------------------------------->

    <div class="col-lg-4 l-izmjeni" style="margin: 0 auto;margin-top: 50px">
       <form method="POST" action="ponuda/izmeni.php">

        <h2>Izmeni podatke o lokaciji</h2>
        <h6>Izaberi lokaciju koje želiš da izmjeniš</h6>
        <select class="form-control"  name="id" id="id">
          <?php 
                $update = mysqli_query($conn,"SELECT * FROM lokacija");
                while($row = mysqli_fetch_array($update))
                {
                echo "<option value='". $row['id'] ."'>".$row['id'].' '.$row['naslov']."</option>";
                }
          ?>
        </select>
        <div class="form-group">
                <label for="">Naslov:</label>
                <input autocomplete="off" type="text" class="form-control" name="naslov" id="">
           </div>
           <div class="form-group">
               <label for="">Država</label>
               <input autocomplete="off" type="text" class="form-control" name="drzava" id="">
           </div>
           <div class="form-group">
               <label for="">Grad</label>
               <input autocomplete="off" type="text" class="form-control" name="grad" id="">
           </div>
           <div class="form-group">
               <label for="">Cena</label>
               <input autocomplete="off" type="text" class="form-control" name="cena" id="">
           </div>
           <div class="form-group">
               <label for="">Opis</label><br>
               <textarea name="opis" class="form-control" style="width:100%; height: 150px;"></textarea>
           </div>
           <div class="form-group">
               <label for="">Jezik</label>
               <input autocomplete="off" type="text" class="form-control" name="jezik" id="">
           </div>
           <div class="form-group">
               <label for="">Smjestaj</label>
               <input autocomplete="off" type="text" class="form-control" name="smjestaj" id="">
           </div>
           <div class="form-group">
               <label for="">Obroci</label>
               <input autocomplete="off" type="text" class="form-control" name="obroci" id="">
           </div>
           <div class="form-group">
               <label for="">Valuta</label>
               <input autocomplete="off" type="text" class="form-control" name="valuta" id="">
           </div>
           <div class="form-group">
               <label for="">Vremenska zona</label>
               <input autocomplete="off" type="text" class="form-control" name="v_zona" id="">
           </div>
           <div class="form-group">
               <label for="polazak">Datum polazka</label>
               <input type="date" name="polazak" >
           </div>
           <div class="form-group">
               <label for="povratak">Datum povratka</label>
               <input type="date" name="povratak">
           </div>
           <div class="form-group">
               <label for="">Slika (Naslovna)</label>
               <input autocomplete="off" type="text" class="form-control" name="slika1" id="">
           </div>
           <div class="form-group">
               <label for="">Slika 2</label>
               <input autocomplete="off" type="text" class="form-control" name="slika2" id="">
           </div>
        
        <button type="submit" name="izmeni" class="btn btn-warning">Izmeni</button>
    </div>

    </form>
  </div>


    <!----------------------------DELETE-------------------------------->
    <div class="col-lg-4 l-obrisi" style="margin: 0 auto;margin-top: 50px">
    <form method="post" action="ponuda/obrisi.php">
    <div class="delete">
        <h2>Obriši lokaciju iz ponude</h2>
        <h6>Izaberi lokaciju koju želiš da obrišeš</h6>
        <select class="form-control"  name="id" id="id">

          <?php 
                $result = mysqli_query($conn,"SELECT * FROM lokacija");
                while($row = mysqli_fetch_array($result))
                {
                echo "<option value='".$row['id']."'>".$row['id']." ". $row['naslov']." ".$row["cena"] ."€</option>";
                }
          ?>
        </select>

        </select>
        <button type="submit" name="deleteSubmit" class="btn btn-danger rez-dugme">Izbriši</button>
    </div>
  </form>
</div>
<script type="text/javascript" src="ponuda/admin.js"></script>
</body>
</html>


    <form action="login/odjava.php" method="post">
        <input type="submit" name="odjava" value="Odjavi se" class="btn btn-danger odjava">
    </form>

<?php
}


?>
