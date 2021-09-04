<?php 
	if (isset($_GET['submit'])) {
		$pretraga = $_GET['pretraga'];
	}
?>

<?php 
	require 'admin/konekcija.php';
	require 'template/head.php';
?>
<body>
	<nav>
		<label class="logo">Travel</label>
		<ul>
			<li><a href="index.php">Pocetna</a></li>
			<li><a href="ponuda.php" class="aktivno">Ponuda</a></li>
			<li><a href="price.php">Priče sa putovanja</a></li>
			<li><a href="contact.php">Kontakt</a></li>
		</ul>
		<label id="icon">
			<i class="fa fa-bars"></i>
		</label>
	</nav>
<div id="sve" >
	<form class="f-pretraga" method="GET" action="pretraga.php">
		<input class="pretraga" type="search" name="pretraga" value="<?php echo $pretraga; ?>">
		<button class="dugmePretraga" type="submit" name="submit"><i class="fa fa-search" style="padding-right: 5px;"></i><b>Pretraga</b></button>
	</form>
	<div class="container-fluid text-center">    
	  <div class="row content">
	    <div class="col-sm-2 sidenav">
	    </div>
	    <div class="col-sm-8 text-left"> 
	    	<?php 
	    	$sql = "SELECT * FROM lokacija WHERE naslov LIKE '%$pretraga%'";
    		$result = mysqli_query($conn,$sql);
		    while($row = mysqli_fetch_array($result))
		    {
		    ?>
	    	<div class="ponuda">
	    		<?php echo '<a href='.'http://localhost/projekat/lokacija.php?page='.htmlspecialchars($row['id']).'>';?>
	    		<h1 class="ponuda-naslov"><?php echo htmlspecialchars($row['naslov'])?></h1>
				<img src="<?php echo htmlspecialchars($row['slika1']); ?>" class="ponuda-slika">
	      		<div class="ponuda-text">
	      			<?php echo htmlspecialchars($row['opis'])?>
	      		</div>
	      		<div class="cena">
	      			<?php echo htmlspecialchars($row['cena']).'€'?>
	      		</div>
	      		</a>
	      	</div>
	      	 <?php }?>
	    </div>
	    <div class="col-sm-2 sidenav">
	    </div>
	  </div>
	</div>



	<?php
	require 'template/footer.php';

	?>

</div>
</body>
</html>