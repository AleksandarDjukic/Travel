<?php
if (isset($_POST['posalji']) ){

	$ime = $_POST['ime'];
	$prezime = $_POST['prezime'];
	$email = $_POST['email'];
	$pitanje = $_POST['pitanje'];

	$msg = $ime.' '.$prezime. $pitanje;
	$subj = 'Pitanje';
	$mojmail = 'janohe5601@sc2hub.com';
	mail($mojmail,$subj,$msg);

}


?>