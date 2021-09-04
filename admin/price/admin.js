document.getElementById('dugme-obrisi').addEventListener('click', 
	function(){
		document.querySelector('.p-izmjeni').style.display = 'none';
		document.querySelector('.p-obrisi').style.display = 'flex';
	})
document.getElementById('dugme-izmjeni').addEventListener('click', 
	function(){
		document.querySelector('.p-izmjeni').style.display = 'flex';
		document.querySelector('.p-obrisi').style.display = 'none';
	})


