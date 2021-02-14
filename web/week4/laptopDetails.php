<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WDD341 week 4</title>
    <meta name="description" content="Trevor Williams week 4 for WDD 341">
    <link rel="stylesheet" type="text/css" href="/css/style.css?version=3">
</head>

<body>
    <div class="sidesSpacer">
        <h1 class="redBanner">Week 6 Prove Assignment</h1>

        <p class="laptopsDisplay">
        <h1>test 1</h1>
        <?php print_r($laptops); ?>
        <h1>test 2</h1>
        <?php print_r($laptops[0]); ?>
        <h1>test 3</h1>
        <?php print_r($laptops[0]['laptopMaker']); ?>
        <h1>test 4</h1>
        <?php print_r($laptops['laptopMaker']); ?>
        <h1>test 5</h1>
        <?php print_r($laptops[3]['laptopMaker']); ?>

        <h1>test 6</h1>
        <?php echo $laptopDetails; ?>

        <br>

        <form action="index.php" method="post" id="addpref">
        <textarea name="likeText" id="likeText">
        <textarea name="dislikeText" id="dislikeText">

        <input type="submit" name="submit" value="Add Preference" id="formButton">
        <input type="hidden" name="action" value="addpref">";
        <input type="hidden" name="laptopId" value=><br><br>
		</p>

		</main>
	</div>

</body>