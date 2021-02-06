<?php
//laptops controller
require_once 'laptop-model.php';
require_once 'dbConnect.php';

$db = get_db();
?>

<body>
	<main class="sidesSpacer">
		<p class="redBanner">Hello Laptops</p>
		<?php //if (isset($laptopDisplay)) {

		$laptops = laptopsData($db);
		$laptopDisplay = laptopsDisplay($laptops);
		echo $laptopDisplay;


		//echo $laptops[0]['laptopmodel'];

		echo '<pre>';
		print_r($laptops[0]);
		echo '</pre>';


		?>

	</main>
</body>