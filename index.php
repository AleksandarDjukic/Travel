<?php 

if(!require_once('admin/konekcija.php'))
   {
       die("Učitavanje filea za konekciju nije uspjelo");
   }

require 'template/head.php';   
?>

<body>

	<nav>
		<label class="logo">Travel</label>
		<ul>
			<li><a class="aktivno" href="$">Pocetna</a></li>
			<li><a href="ponuda.php">Ponuda</a></li>
			<li><a href="price.php">Priče sa putovanja</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
		<label id="icon">
			<i class="fa fa-bars"></i>
		</label>
	</nav>
<section id="sve">
	<?php require 'template/slajder.php'?>
	<?php
		$result = mysqli_query($conn,"SELECT * FROM lokacija LIMIT 3");
	?>
	<div class="container">
		<div class="ist">
		<h2 class="istaknuto">Istaknuto iz ponude</h2>
		<div class="row text-center">
			<?php while($row = mysqli_fetch_array($result)){?>

		      <div class="col-sm-4">
		      	<a href="lokacija.php?page=<?php echo htmlspecialchars($row['id']); ?>" class="i-link">
		        <div class="thumbnail">
		          <img src="<?php echo htmlspecialchars($row['slika1']);?>"  class="i-slika">
		          <p class="istaknuto-tekst"><?php echo htmlspecialchars($row['naslov']);?></p>
		          <p class="istaknuto-tekst"><?php echo htmlspecialchars($row['cena']).'€';?></p>
		          <button class="btn" data-toggle="modal" data-target="#myModal">Pogledaj</button>
		        </div>
		        </a>
		      </div>

	      	<?php }?>
	  	</div>
	</div>
	<div class="price">
		<h2>Price sa putovanja</h2>
		<?php
		$result = mysqli_query($conn,"SELECT * FROM price LIMIT 2");
		?>
		<div class="prica">
			<?php while($row = mysqli_fetch_array($result)) {?>
			<div class="prica-naslov">
				<h4 class="n-centar"><?php echo htmlspecialchars($row['naslov']);?></h4>
			</div>
			<img src="<?php echo htmlspecialchars($row['slika']);?>" class="prica-slika">
			<p class="prica-text">
				<?php 
				$sadrzaj = $row["sadrzaj"];
				$sadrzaj = substr($sadrzaj,0,350); 
				echo $sadrzaj.'...';?>	
			</p>
			<div class="nastavi">
				<?php echo '<a href='.'prica.php?prica='.htmlspecialchars($row['id']).'>';?>
			Nastavi sa čitanjem</a>
			</div>
		<?php }?>
		</div>
		
	</div>

	<a href="price.php">
		<div class="sve-price">
			Pogledaj sve priče
		</div>
	</a>
	<a href="napisi.php">
		<div class="sve-price">
			Napiši svoju priču
		</div>
	</a>


</div>

	<?php require 'template/footer.php';?>

</section>
</body>
</html>