<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WDD341 week 4</title>
	<meta name="description" content="Trevor Williams week 4 for WDD 341">
	<link rel="stylesheet" type="text/css" href="/css/style.css?version=2">
</head>

<body>
	<div class="sidesSpacer">
		<h1 class="redBanner">Week 4 Prove Assignment</h1>
		<main>

			<h3>Select Filters</h1><hr>
			<form action="index.php" method="post" class="filter-form">
				<pre>Maker</pre>
				<input type="radio"  name="maker" value="ASUS">
				<label for="Acer"> Asus</label><br>

				<input type="radio"  name="maker" value="MSI">
				<label for="MSI"> MSI</label><br>

				<input type="radio"  name="maker" value="ACER">
				<label for="Acer"> Acer</label><br><br>

				<pre>Ram</pre>
				<input type="radio"  name="ram" value="8">
				<label for="8"> 8gb</label><br><br>

				<input type="radio"  name="ram" value="16">
				<label for="16"> 16gb</label><br>

				<input type="radio"  name="ram" value="32">
				<label for="32"> 32gb</label><br>

				

				<input type="hidden" name="action" value="filter">
				<input type="submit" value="Submit">
			</form>
			<?php

			echo $laptopDisplay;


			//echo $laptops[0]['laptopmodel'];

			echo '<pre>';
			print_r($laptops);
			echo '</pre>';


			?>

		</main>
	</div>

</body>