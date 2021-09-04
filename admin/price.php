<?php
session_start();


if (!isset($_SESSION['login'])){
    echo "Nemate pristup ovoj stranici !";
}
else{
    require 'konekcija.php';
    if (isset($_GET['msg'])) {
        if ($_GET['msg'] == 'updated') {
            echo '<script>alert("Uspješno izmenjeno");</script>';
        }
        elseif ($_GET['msg'] == 'deleted') {
            echo '<script>alert("Uspješno izbrisano");</script>';
        }
        else{
            echo '<script>alert("Došlo je do greške");</script>';
        }
    }
    ?>
<html>
<head>
   <title>ADMIN</title>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="style-admin.css">
</head>
<body>
    <div class="admin-header">
        <a href="rezervisani.php"><div class="nav-admin">Upravljaj rezervacijama</div></a>
        <a href="ponuda.php"><div class="nav-admin right">Upravljaj ponudom</div></a>
    </div>

   <!----------------------------------------------------------SELECT-------------------------------------------------------->
   <div class="sticky">
    <?php 
    $result = mysqli_query($conn,"SELECT * FROM price");
      echo "<table border='1' class='tabela'>
      <tr>
        <th>ID</th>
        <th>Naslov</th>
        <th>Autor</th>
        <th>Sadrzaj</th>
        <th>Slika</th>
      </tr>";
    while($row = mysqli_fetch_array($result))
    {
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['naslov'] . "</td>";
      echo "<td>" . $row['autor'] . "</td>";
        $sadrzaj = $row["sadrzaj"];
        $sadrzaj = substr($sadrzaj,0,60);
      echo "<td>" . $sadrzaj."..." . "</td>"; 
      echo "<td><img src=". $row['slika'] . " class="."slika"."></td>";
      echo "</tr>";
    }
    echo "</table>";
    ?>
  </div>
    <div class="tabovi">
      <button class="tab p-i-tab" id="dugme-izmjeni">Izmjeni</button>
      <button class="tab p-o-tab" id="dugme-obrisi">Obrisi</button>
  </div>
  <hr>
  <!--------------------------------------UPDATE-------------------------------->
    <div class="col-lg-4 p-izmjeni" style="margin: 0 auto;margin-top: 50px">
       <form method="POST" action="izmeni.php">

        <h2>Izmeni priču</h2>
        <h6>Izaberi priču koju želiš da izmjeniš</h6>
        <select class="form-control"  name="id" id="id">
          <?php 
                $update = mysqli_query($conn,"SELECT * FROM price");
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
               <label for="">Autor</label>
               <input autocomplete="off" type="text" class="form-control" name="autor" id="">
           </div>
           <div class="form-group">
               <label for="">Sadrzaj</label>
               <input autocomplete="off" type="text" class="form-control" name="sadrzaj" id="">
           </div>
           <div class="form-group">
               <label for="">Slika</label>
               <input autocomplete="off" type="text" class="form-control" name="slika" id="">
           </div>  
        <button type="submit" name="izmeni" class="btn btn-warning">Izmeni</button>
    </div>
    </form>
  </div>

    <!----------------------------DELETE-------------------------------->
    <div class="col-lg-4 p-obrisi" style="margin: 0 auto;margin-top: 50px">
    <form method="post" action="price/obrisi.php">
    <div class="delete">
        <h2>Obriši priču sa putovanja</h2>
        <h6>Izaberi priču koju želiš da obrišeš</h6>
        <select class="form-control"  name="id" id="id">
          <!--<option value="0">Izaberi</option>-->
          <?php 
                $result = mysqli_query($conn,"SELECT * FROM price");
                while($row = mysqli_fetch_array($result))
                {
                echo "<option value='".$row['id']."'>".$row['id']." ". $row['naslov']."</option>";
                }
          ?>
        </select>

        </select>
        <button type="submit" name="deleteSubmit" class="btn btn-danger rez-dugme">Izbriši</button>
    </div>
  </form>
</div>
<form action="login/odjava.php" method="post">
        <input type="submit" name="odjava" value="Odjavi se" class="btn btn-danger odjava">
    </form>
<script type="text/javascript" src="price/admin.js"></script>
</body>
</html>
<?php
}


?>