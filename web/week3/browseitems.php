<!DOCTYPE html>
<html lang="en">

<?php session_start(); 
$_SESSION["test"] = "working";?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WDD341 Browse Items</title>
    <meta name="description" content="Trevor Williams Browse Items for WDD 341">
    <link rel="stylesheet" type="text/css" href="/css/style.css?version=3">
</head>

<body>
    <nav>
        <?php include 'nav.php'; ?>
    </nav>

    <main>
        <h1>Browse Items</h1>

        <a href="viewcart.php">View Cart</a>

        <form action="shopping-model.php" method="post">
            <img src="/img/items/charcoalPencils.jpg" alt="charcoal pencils">
            <div>Charcoal Pencils $3</div>
            <label for="quantity">Quantity: </label>
            <input type="float" name="quantity" id="quantity" required><br><br>

            
            <input type="submit" value="Add Item">
            <input type="hidden" name="action" value="addItem">
            <input type="hidden" name="itemPrice" value="3">
            <input type="hidden" name="itemName" value="charcoalPencils"><br><br>
        </form>

        
    </main>

    <footer>
    </footer>
</body>

</html>




On the browse items page, the user sees a list of items they can add to their cart and
purchase. Again, the kind of items and the formatting of this page is up to you.

You should provide a button or link to add an item to the cart. Doing so should store
that item in some way to the session, and then keep the user on the browse page.