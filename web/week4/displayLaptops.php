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

			<form action="index.php" method="post" class="filter-form">

				Filter: <select name="chapter" id="chapter">
					<option value="" selected="selected">Please select a filter</option>
					<option value="laptopmaker" >Laptop Maker</option>
					<option value="laptopmodel" >Laptop Model</option>
					<option value="laptopgpu" >Laptop GPU</option>
					<option value="laptopram" >Laptop Ram</option>
					<option value="laptopstorage" >Laptop Storage</option>
					<option value="laptopscreen" >Laptop Screen Size</option>
				</select>
				<br><br>
				<input type="hidden" name="action" value="filter">
				<input type="submit" value="filter">
			</form>

			<?php
			
			echo $laptopDisplay;


			//echo $laptops[0]['laptopmodel'];

			echo '<pre>';
			print_r($laptops[0]);
			echo '</pre>';


			?>

		</main>
	</div>

</body>