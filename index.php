<!DOCTYPE>
<html lang=hu>
<head>
	<meta charset="utf8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title>Filmkatalogus</title>
</head>
<body>
	<div class="contanier pt-10">
	<form action="connect.php" method="get">
		<table class="table table-bordered table-primary">
			<thead class="thead-dark">
				<tr>
					<th>
						Filmcím
					</th>
					<th>
						Kategoria
					</th>
					<th>
						Rendező
					</th>
					<th>
						Főszereplő
					</th>
					<th>
						Tartalom
					</th>
					<th>
						Megjelenés éve
					</th>
					<th>
						Film hossza
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<input name="cim" size="13" placeholder="Filmcím"/> 
					</td>
					<td>
						<input name="kategoria" size="13" placeholder="Kategoria"/>
					</td>
					<td>
						<input name="rendezo" size="13" placeholder="Rendező"/>
					</td>
					<td>
						<input name="foszereplo" size="13" placeholder="Főszereplő"/>
					</td>
				
		
					<td>
						<textarea name="tartalom" size="200" placeholder="Tartalom"></textarea>
					</td>
					<td>
						<input name="ev" size="13" placeholder="Megjelenés éve"/>
					</td>
					<td>
						<input name="hossz" size="13" placeholder="Film hossza"/>
					</td>
				</tr>
					
				<tr>
					<td>
						<button type="send" class="btn btn-primary">Feltöltés</button>
					</td>
				</tr>
								
			</tbody>
		</table>	
		</form>
	</div>
	
<?php
	
	$db = mysqli_connect('localhost', 'root', '', 'filmkatalog');
	
	if(mysqli_connect_errno()) {
    echo "Nem sikerült a kapcsolodás";
    exit;
	}
	
	$lekerdezes = "SELECT * FROM film_katalog";
	
	$talalat = $db->query($lekerdezes);
	$result = $talalat->fetch_all(MYSQLI_ASSOC);
	
	foreach($result as $record){
		$cim = $record['cim'];
		$kategoria = $record['kategoria'];
		$rendezo = $record['rendezo'];
		$foszereplo = $record['foszereplo'];
		$tartalom = $record['tartalom'];
		$ev = $record['ev'];
		$hossz = $record['hossz'];
	}
	
?>


<div class="contanier">
		<table class="table table-bordered table-info">
			<thead class="thead-light">
				<tr>
					<th class="text-info">
						Filmcím
					</th>
					<th class="text-info">
						Kategoria
					</th>
					<th class="text-info">
						Rendező
					</th>
					<th class="text-info">
						Főszereplő
					</th>
					<th class="text-info">
						Tartalom
					</th>
					<th class="text-info">
						Megjelenés éve
					</th>
					<th class="text-info">
						Film hossza
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<input name="cim" size="13" value="<?php echo $cim ?>"/> 
					</td>
					<td>
						<input name="kategoria" size="13" value="<?php echo $kategoria ?>"/>
					</td>
					<td>
						<input name="rendezo" size="13" value="<?php echo $rendezo ?>"/>
					</td>
					<td>
						<input name="foszereplo" size="13" value="<?php echo $foszereplo ?>"/>
					</td>
					<td>
						<textarea name="tartalom" size="200" ><?php echo $tartalom ?></textarea>
					</td>
					<td>
						<input name="ev" size="13" value="<?php echo $ev ?>"/>
					</td>
					<td>
						<input name="hossz" size="13" value="<?php echo $hossz ?>"/>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	

</body>
</html>