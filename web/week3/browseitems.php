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
        <?php include '/nav.php'; ?>
    </nav>

    <main>
        <h1>Browse Items</h1>

        <a href="viewcart.php">View Cart</a>

        <form class="saleItems" method="post">
            <img class="pencils" src="/img/items/charcoalPencils.jpg" alt="charcoal pencils">
            <div>Charcoal Pencils $3</div>
            <label for="quantity">Quantity: </label>
            <input type="float" name="quantity" id="quantity" required><br><br>

            <input type="submit" value="Add Item">
            <input type="hidden" name="itemPrice" value="3">
            <input type="hidden" name="itemName" value="charcoalPencils">
            <input type="hidden" name="action" value="addItem">
            <br><br>
        </form>

        <form class="saleItems" method="post">
            <img class="pencils" src="/img/items/bookSet.jpg" alt="Book set">
            <div>Book set $15</div>
            <label for="quantity">Quantity: </label>
            <input type="float" name="quantity" id="quantity" required><br><br>

            <input type="submit" value="Add Item">
            <input type="hidden" name="itemPrice" value="15">
            <input type="hidden" name="itemName" value="bookSet">
            <input type="hidden" name="action" value="addItem">
            <br><br>
        </form>

        <form class="saleItems" method="post">
            <img class="pencils" src="/img/items/coloredPencils.jpg" alt="colored pencils">
            <div>Colored Pencils $10</div>
            <label for="quantity">Quantity: </label>
            <input type="float" name="quantity" id="quantity" required><br><br>

            <input type="submit" value="Add Item">
            <input type="hidden" name="itemPrice" value="10">
            <input type="hidden" name="itemName" value="coloredPencils">
            <input type="hidden" name="action" value="addItem">
            <br><br>
        </form>

        <form class="saleItems" method="post">
            <img class="pencils" src="/img/items/markers.jpg" alt="markers">
            <div>Markers $5</div>
            <label for="quantity">Quantity: </label>
            <input type="float" name="quantity" id="quantity" required><br><br>

            <input type="submit" value="Add Item">
            <input type="hidden" name="itemPrice" value="5">
            <input type="hidden" name="itemName" value="markers">
            <input type="hidden" name="action" value="addItem"><br><br>
        </form>

        <form class="saleItems" method="post">
            <img class="pencils" src="/img/items/pencilSet.jpg" alt="pencil set">
            <div>Pencil Set $7</div>
            <label for="quantity">Quantity: </label>
            <input type="float" name="quantity" id="quantity" required><br><br>

            <input type="submit" value="Add Item">
            <input type="hidden" name="itemPrice" value="7">
            <input type="hidden" name="itemName" value="pencilSet">
            <input type="hidden" name="action" value="addItem"><br><br>
        </form>

        <form class="saleItems" method="post">
            <img class="pencils" src="/img/items/pencilBook.jpg" alt="pencil with book">
            <div>Pencil with book $6</div>
            <label for="quantity">Quantity: </label>
            <input type="float" name="quantity" id="quantity" required><br><br>

            <input type="submit" value="Add Item">
            <input type="hidden" name="itemPrice" value="6">
            <input type="hidden" name="itemName" value="pencilBook">
            <input type="hidden" name="action" value="addItem"><br><br>
        </form>

        <form class="saleItems" method="post">
            <img class="pencils" src="/img/items/mechanicalPencil.jpg" alt="mechanical pencil">
            <div>Mechanical Pencil $3</div>
            <label for="quantity">Quantity: </label>
            <input type="float" name="quantity" id="quantity" required><br><br>

            <input type="submit" value="Add Item">
            <input type="hidden" name="itemPrice" value="3">
            <input type="hidden" name="itemName" value="mechanicalPencil">
            <input type="hidden" name="action" value="addItem"><br><br>
        </form>

        <form class="saleItems" method="post">
            <img class="pencils" src="/img/items/pastels.jpg" alt="pastels">
            <div>Pastels $8</div>
            <label for="quantity">Quantity: </label>
            <input type="float" name="quantity" id="quantity" required><br><br>

            <input type="submit" value="Add Item">
            <input type="hidden" name="itemPrice" value="8">
            <input type="hidden" name="itemName" value="pastels">
            <input type="hidden" name="action" value="addItem"><br><br>
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