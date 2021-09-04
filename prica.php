<?php
require 'admin/konekcija.php';
require 'template/head.php';


if (empty($_GET['prica'])) {
	$prica = false;
	echo "aaa";
}
else{

	$id = $_GET['prica'];
	$id = intval($id);
	$sql = 'SELECT * FROM price WHERE id = '.$id;
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
 

?>
<body>
	<nav>
		<label class="logo">Travel</label>
		<ul>
			<li><a href="index.php">Pocetna</a></li>
			<li><a href="ponuda.php">Ponuda</a></li>
			<li><a href="price.php">Priče sa putovanja</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
		<label id="icon">
			<i class="fa fa-bars"></i>
		</label>
	</nav>


<section id="sve" >
	
	<div class="container">
		
	</div>
	<div class="price">
		<h2>Price sa putovanja</h2>

		<div class="prica">
			<h3>Autor: <?php echo htmlspecialchars($row['autor']);?></h3>

			<div class="prica-naslov">
				<h4 class="n-centar"><?php echo htmlspecialchars($row['naslov']);?></h4>
			</div>
			<img src="<?php echo htmlspecialchars($row['slika']);?>" class="prica-slika">
			<p class="prica-text">
				<?php echo htmlspecialchars($row["sadrzaj"]);?>
			</p>
			</div>

		</div>
		
	</div>






	
	<?php
		require 'template/footer.php'
	?>
</section>

</body>
</html>

<?php
 }
}
}
?>






