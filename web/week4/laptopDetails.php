<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WDD341 week 4</title>
    <meta name="description" content="Trevor Williams week 4 for WDD 341">
    <link rel="stylesheet" type="text/css" href="/css/style.css?version=4">
</head>

<body>
    <div class="sidesSpacer">
        <?php
            if (isset($nav)) {
                echo $nav;
            }
        ?>
        <h1 class="greenBanner">Laptop Details</h1>

        <br>
        <?php
            if (isset($message)) {
                echo $message;
            }
        ?>

        <br><br>

        <p class="laptopsDisplay">
            <?php echo $laptopDetails; ?>
            <br>
        <p>


    </div>

</body>