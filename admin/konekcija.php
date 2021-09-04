<?php
$server     = "localhost";
$username   = "id17341591_aleksandar";
$password   = "Hxf#6B0@@gfU}&7A";
$database   = "id17341591_travel";
// Kreiranje konekcije
$conn = new mysqli($server, $username, $password,$database);
//postavljanje collation-a
mysqli_set_charset($conn,'utf8');
// Provjera konekcije connection
if ($conn->connect_error) {
   die("Konekcija nije uspjela: " . $conn->connect_error);
}
