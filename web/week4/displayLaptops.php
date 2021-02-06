<?php
//laptops controller
require_once 'laptop-model.php';
require_once 'dbConnect.php';

$db = get_db();
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WDD341 week 4</title>
    <meta name="description" content="Trevor Williams week 4 for WDD 341">
    <link rel="stylesheet" type="text/css" href="/css/style.css?version=2">
</head>

<body>
	<main class="sidesSpacer">
		<p class="redBanner">Week 4 Prove Assignment</p>
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