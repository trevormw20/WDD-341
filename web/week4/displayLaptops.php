<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WDD341 week 4</title>
	<meta name="description" content="Trevor Williams week 4 for WDD 341">
	<link rel="stylesheet" type="text/css" href="/css/style.css?version=3">
</head>

<body>
	<div class="sidesSpacer">
		<?php
		if (isset($nav)) {
			echo $nav;
		}
		?>
		<h1 class="redBanner">Week 4 Prove Assignment</h1>
		<main>

			<div class="filterForm">
				<h3>Select Filters</h3>
				<hr>
				<form action="index.php" method="post" id="filterForm">
					<pre>Maker</pre>
					<input type="radio" name="maker" value="ASUS">
					<label for="Acer"> Asus</label><br>

					<input type="radio" name="maker" value="MSI">
					<label for="MSI"> MSI</label><br>

					<input type="radio" name="maker" value="Gigabyte">
					<label for="Gigabyte"> Gigabyte</label><br><br>


					<pre>Ram</pre>
					<input type="radio" name="ram" value="8">
					<label for="8"> 8gb</label><br>

					<input type="radio" name="ram" value="16">
					<label for="16"> 16gb</label><br>

					<input type="radio" name="ram" value="32">
					<label for="32"> 32gb</label><br><br>


					<pre>Cpu</pre>
					<input type="radio" name="cpu" value="Intel5">
					<label for="Intel5"> Intel i5</label><br>

					<input type="radio" name="cpu" value="Intel7">
					<label for="Intel7"> Intel i7</label><br>

					<input type="radio" name="cpu" value="Intel9">
					<label for="Intel9"> Intel i9</label><br>

					<input type="radio" name="cpu" value="RYZEN5">
					<label for="Ryzen5"> Ryzen 5</label><br>

					<input type="radio" name="cpu" value="RYZEN7">
					<label for="Ryzen7"> Ryzen 7</label><br>

					<input type="radio" name="cpu" value="RYZEN9">
					<label for="Ryzen9"> Ryzen 9</label><br><br>


					<pre>Gpu</pre>
					<input type="radio" name="gpu" value="3060">
					<label for="3060"> RTX 3060</label><br>

					<input type="radio" name="gpu" value="3070">
					<label for="3070"> RTX 3070</label><br>

					<input type="radio" name="gpu" value="3080">
					<label for="3080"> RTX 3080</label><br><br>


					<pre>Storage</pre>
					<input type="radio" name="storage" value="512">
					<label for="512"> 512 GB</label><br>

					<input type="radio" name="storage" value="1000">
					<label for="10000"> 1 TB</label><br>

					<input type="radio" name="storage" value="2000">
					<label for="2000"> 2 TB</label><br><br>


					<pre>Screen size</pre>
					<input type="radio" name="screen" value="13">
					<label for="13"> 13"</label><br>

					<input type="radio" name="screen" value="14">
					<label for="14"> 14"</label><br>

					<input type="radio" name="screen" value="15">
					<label for="15"> 15"</label><br>

					<input type="radio" name="screen" value="17">
					<label for="17"> 17"</label><br><br>


					<input type="hidden" name="action" value="filter">
					<input type="submit" value="Submit"><br><br>
					<input type="button" onclick="resetForm()" value="Reset filters">
				</form>
			</div>

			<script>
				function resetForm() {
					document.getElementById("filterForm").reset();
				}
			</script>
			<p class="laptopsDisplay">
				<?php echo $laptopDisplay;
				//echo $laptops[0]['laptopmodel'];
				//echo '<pre>';
				//print_r($laptops);
				//echo '</pre>';
				?>
			</p>

		</main>
	</div>

</body>