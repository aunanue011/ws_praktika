<?php
$dbzerbitzaria = "localhost";
$dberabiltzailea = "root";
$dbpass = "";
$dbizena = "WSPraktika";


$konexioa = new mysqli($dbzerbitzaria, $dberabiltzailea, $dbpass, $dbizena);

// konexioa konprobatu

if (!$konexioa) {
	die("Konexioa ezin izan da ezarri.: " . mysqli_connect_error());
}
?>