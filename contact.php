<?php 
require 'template/head.php';   
?>
<nav>
	<label class="logo">Travel</label>
	<ul>
		<li><a href="index.php">Pocetna</a></li>
		<li><a href="ponuda.php">Ponuda</a></li>
		<li><a href="price.php">Priče sa putovanja</a></li>
		<li><a href="contact.php" class="aktivno">Contact</a></li>
	</ul>
	<label id="icon">
		<i class="fa fa-bars"></i>
	</label>
</nav>
<div id="sve">
	<div class="c-banner">
		<h1 class="c-naslov">Online podrška</h1>
		<h1 class="c-malinaslov">Naš tim za podršku je 24/7 dostupan.</h1>
	</div>
	<div class="kontakt">
		<div class="proba">
			<div class="ikonica">
				<i class="fa fa-envelope"></i>
			</div>
			<div class="eit">
				<p>support@travel.com <br>
					pitanja@travel.com
				</p>
			</div>
		</div>
		<div class="proba">
			<div class="ikonica">
				<i class="fa fa-phone"></i>
			</div>	
			<div class="eit">
				<p>021 111 2222 <br>
					+381 66 123 44 55
				</p>
			</div>
		</div>
	</div>

	<div class="container">
	<div class="k-sadrzaj row">
	<form class="forma col-md-6" action="mail.php" method="POST" >
		<div class="input-t">
			<input class="i-tekst" type="text" name="ime" placeholder="Ime">
			<input class="i-tekst" type="text" name="prezime" placeholder="Prezime">
		</div>
		<input class="email" type="text" name="email" placeholder="E-mail">
		<textarea class="ta-kontakt" name="pitanje" placeholder="Postavi pitanje.."></textarea>
		<div class="input-d">
			<input class="submit" type="submit" name="posalji" value="Pošalji">
		</div>
	</form>
	<div class="dodatni-tekst col-md-6">
		<div class="desno">
			<div class="desno-naslov">
				<h3><b>Popuni<br> formu</b></h3>
			</div>
			<h4>Unesi podatke i pitanje</h4>
			<div class="desno-tekst">
			<p> Ako se niste dovoljno informisali možete nam direktno postaviti pitanje.U najkraćem mogućem roku dobićete odgovor na e-mail.</p></div>
		</div>
	</div>
	</div>
</div>
<div class="tamno">
		<h1 class="a-naslov">Priča o nama</h1>
		<h1 class="a-malinaslov">Zašto smo najbolji izbor ?</h1>
	</div>
	<div class="about">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Pellentesque in placerat nisi, quis suscipit felis. Nulla facilisi. Curabitur suscipit, nibh vitae convallis hendrerit, libero est ornare massa, vel ultrices orci nulla sed purus. Ut sit amet justo finibus, gravida augue in, tincidunt nunc. Proin porta consectetur arcu eu sagittis. Nullam finibus luctus accumsan. Pellentesque nisl sem, feugiat quis augue a, eleifend euismod dolor. Duis maximus nibh felis, lacinia sagittis nunc malesuada a. Integer viverra vitae turpis id semper. Nullam in condimentum ligula. Etiam condimentum finibus dignissim. Nunc laoreet eros eu venenatis hendrerit. Aliquam felis ipsum, porttitor in lorem id, tristique blandit tortor. Fusce aliquam euismod tortor, ut accumsan dolor accumsan a. Donec ac enim eu magna tempor bibendum non ut ipsum. Duis mauris neque, aliquam quis sollicitudin ac, semper porttitor ligula. Sed quis arcu id nibh venenatis blandit. Quisque orci lectus, ullamcorper rutrum facilisis sit amet, posuere molestie leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dignissim odio vel ex mattis, ut fermentum magna sodales. Suspendisse dictum efficitur nisl, vitae vehicula eros accumsan vel. Ut vehicula, nibh sit amet mattis auctor, mi eros sagittis lacus, sit amet porttitor orci orci nec est. Sed ultricies ex nisl, id consequat lacus semper sit amet. Fusce commodo augue magna, id scelerisque libero tempus sed. Praesent risus dui, finibus id sem ut, placerat laoreet sapien. Donec non nisl neque. Praesent mollis tincidunt orci eget rhoncus.</p>
	</div>
	<div class="partneri ">
		<img src="img/about/lasta.jpg" class="partneri-slika">
		<img src="img/about/airsrbija.jpg" class="partneri-slika">
		<img src="img/about/ta.png" class="partneri-slika">
		<img src="img/about/fe.jpg" class="partneri-slika">
		<img src="img/about/unicef.jpeg" class="partneri-slika">
	</div>

<?php 
require 'template/footer.php';   
?>
</div>
</body>
</html>