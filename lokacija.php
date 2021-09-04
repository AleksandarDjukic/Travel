<?php
require 'admin/konekcija.php';
require 'template/head.php';

if (isset($_GET['msg'])) {
	if($_GET['msg'] == 'success'){
		echo '<script>alert("Uspješna rezervacija !")</script>';
	}
	else{
		echo '<script>alert("Niste prihvatili uslove agencije !")</script>';
	}
}

if (empty($_GET['page'])) {
	$ponuda = false;
}
else{

	$id = $_GET['page'];
	$id = intval($id);
	$sql = 'SELECT * FROM lokacija WHERE id = '.$id;
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
 

?>
<body>
	<nav>
		<label class="logo">Travel</label>
		<ul>
			<li><a href="index.php">Pocetna</a></li>
			<li><a href="ponuda.php" class="aktivno">Ponuda</a></li>
			<li><a href="price.php">Priče sa putovanja</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
		<label id="icon">
			<i class="fa fa-bars"></i>
		</label>
	</nav>


<section id="sve" >
	<div class="container-fluid text-center">    
	  <div class="row content">

	    <div class="col-sm-8 "> 
	    
	    	<div class="detalji">
			<h2 class="l-naslov"><?php echo htmlspecialchars($row["naslov"]);?></h2>
			
			<div class="opis">
				<p><?php echo htmlspecialchars($row["opis"]);?></p>
			</div>
			<div class="galerija">
				<img src="<?php echo htmlspecialchars($row['slika1']); ?>" class="l-slika">
				<img src="<?php echo htmlspecialchars($row['slika2']); ?>" class="l-slika">
			
			</div>
		</div>

	    </div>


	    <div class="col-sm-4 sidenav">
	    	<div class="side">
		        <p>Država: <?php echo htmlspecialchars($row["drzava"]);?></p>
		        <hr>
				<p>Grad: <?php echo htmlspecialchars($row["grad"]);?></p>
				<hr>
				<p>Cena: <?php echo htmlspecialchars($row["cena"]);?> € </p>
				<hr>
				<p>Jezik: <?php echo htmlspecialchars($row["jezik"]);?></p>
				<hr>
				<p>Smeštaj: <?php echo htmlspecialchars($row["smjestaj"]);?></p>
				<hr>
				<p>3 obroka: <?php echo htmlspecialchars($row["obroci"]);?></p>
				<hr>
				<p>Valuta: <?php echo htmlspecialchars($row["valuta"]);?></p>
				<hr>
				<p>Vremenska zona: <?php echo htmlspecialchars($row["v_zona"]);?></p>
				<hr>

				<p>Polazak: 
					<?php 
						$pol = $row["polazak"];
						$pol = substr($pol,0,10); 
						echo htmlspecialchars($pol);
					?>
				</p>
				<hr>
				<p>Povratak: 
					<?php 
						$pol = $row["povratak"];
						$pol = substr($pol,0,10); 
						echo htmlspecialchars($pol);
					?>
					</p>
				<button id="rez" class="side-dugme">Rezerviši</button>

			</div>
	    </div>
	  </div>
	</div>
	<?php
		require 'template/footer.php'
	?>
</section>

<?php require 'template/modal.php'; ?>

<script type="text/javascript" src="javascript/modal.js"></script>
</body>
</html>

<?php
 }
}
}
?>






