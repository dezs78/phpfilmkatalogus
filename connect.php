<?php
	
	$cim = $_GET['cim'];
	$kategoria = $_GET['kategoria'];
	$rendezo = $_GET['rendezo'];
	$foszereplo = $_GET['foszereplo'];
	$tartalom = $_GET['tartalom'];
	$ev = $_GET['ev'];
	$hossz = $_GET['hossz'];
	
	$db = new mysqli('localhost', 'root', '', 'filmkatalog');
	
	$feltotles = "INSERT INTO film_katalog VALUES (NULL, '$cim', '$kategoria', '$rendezo', '$foszereplo', '$tartalom', '$ev', '$hossz')";
	
	$db->query($feltotles);
	
	$db->close();
	

?>