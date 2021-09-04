<div class="bg-modal">
	<div class="modal-sadrzaj">
		<div class="zatvori" id="iks">+</div>
		<form class="modal-forma" method="POST" action="rezervacija.php">
			<input autocomplete="off" class="m-ime" type="text" placeholder="Ime" name="ime"><br>
			<input autocomplete="off" class="m-prezime" type="text" placeholder="Prezime" name="prezime">
			<input autocomplete="off" class="m-prezime" type="text" placeholder="Broj telefona" name="telefon">
			<div class="uslovi">
				<p class="t-uslovi">Prihvatam <a href="$">uslove</a> agencije Travel.</p>
				<input class="c-uslovi" type="checkbox" name="uslovi">
			</div>
			<div class="broj">
				<p class="b-tekst">Broj osoba: </p>
				<select name="broj" class="b-select">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>
			</div>
			<input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
			<input class="rez" type="submit" name="modal" value="Rezerviši">
		</form>
		<div class="modal-desno">
			<div class="m-opis">
			<p><?php echo $row["naslov"];?></p>
			<p>Grad: <?php echo $row["grad"];?></p>
			<p>Cena: <?php echo $row["cena"];?>€</p>
			<p>Polazak: 
			<?php
				$start = $row["polazak"];
				$start = substr($start,0,10); 
				echo $start;?>
			</p>
			<p> Povratak

				<?php
				$back = $row["povratak"];
				$back = substr($back,0,10); 
				echo $start;?>
			</p>
			</div>
		</div>
	</div>
</div>