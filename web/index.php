<!DOCTYPE html>
<html lang="en">
<?php
//create session 
session_start();
$_SESSION["test"] = "working";
?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WDD341 Introduction</title>
    <meta name="description" content="Trevor Williams Introduction for WDD 341">
    <link rel="stylesheet" type="text/css" href="css/style.css?version=2">
</head>

<body>
    <nav>
        <?php include 'nav.php'; ?>
    </nav>

    <main>
        <h1>Introduction</h1>
        <div class="hover"><img id="imgHover" src="img/me.jpg" alt="Trevor Williams with his crying son">
            <div class="hoverBackground">
                <div class="hoverText">Don't worry he is okay.</div>
            </div>
        </div>

        <p>My name is Trevor Williams. I live in Southern California with my wife and newborn son of 3 months.</p>
        <p>I am very passionate about learning game developement and not trying to make the
            biggest game ever. But I want to change the way we feel about the interaction and connection we have with
            games.
        </p>
        <p>My current venture is gesture controlled vr games. I struggle with this one as there is no force feedback
            without a controller but new doors open for interaction with our hands free for interpretation. I can't wait to see what I can learn to do and make
            something new and exciting.</p>
    </main>

    <footer>
    </footer>
</body>

</html>
<script src="js/fun.js"></script>