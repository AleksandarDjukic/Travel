document.getElementById('izmjeni').addEventListener('click', 
	function(){
		document.querySelector('.l-dodaj').style.display = 'none';
		document.querySelector('.l-obrisi').style.display = 'none';
		document.querySelector('.l-izmjeni').style.display = 'flex';
		document.querySelector('.i-tab').style.backgroundColor = "#A9A9A9"; 
		document.querySelector('.o-tab').style.backgroundColor = "white"; 
		document.querySelector('.d-tab').style.backgroundColor = "white"; 
	})
document.getElementById('dodaj').addEventListener('click', 
	function(){
		document.querySelector('.l-dodaj').style.display = 'flex';
		document.querySelector('.l-obrisi').style.display = 'none';
		document.querySelector('.l-izmjeni').style.display = 'none';
		document.querySelector('.i-tab').style.backgroundColor = "white"; 
		document.querySelector('.o-tab').style.backgroundColor = "white"; 
		document.querySelector('.d-tab').style.backgroundColor = "#A9A9A9";
	})
document.getElementById('obrisi').addEventListener('click', 
	function(){
		document.querySelector('.l-dodaj').style.display = 'none';
		document.querySelector('.l-obrisi').style.display = 'flex';
		document.querySelector('.l-izmjeni').style.display = 'none';
		document.querySelector('.i-tab').style.backgroundColor = "white"; 
		document.querySelector('.o-tab').style.backgroundColor = "#A9A9A9"; 
		document.querySelector('.d-tab').style.backgroundColor = "white";
	})

