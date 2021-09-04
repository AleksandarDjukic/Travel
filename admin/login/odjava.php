<?php
if (isset($_POST['odjava'])) {
	session_start();
	session_destroy();
	header('Location: ../index.php?msg=odjava');
}




?>