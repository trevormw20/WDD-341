<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WDD341 View Cart</title>
    <meta name="description" content="Trevor Williams View Cart for WDD 341">
    <link rel="stylesheet" type="text/css" href="css/style.css?version=2">
</head>

<body>
    <nav>
        <?php include '/nav.php'; ?>
    </nav>

    <main>
        <h1>Shopping Cart</h1>
    
        <p><?php echo $_SESSION["charcoalPencils"];?></p>

        <?php unset($_SESSION['item']); ?>

        <a id="browsePageLink" href="browseitems.php">Browse More items</a>
        
        <a id="checkoutLink" href="checkout.php">Checkout</a>
    </main>

    <footer>
    </footer>
</body>

</html>

Your browse page should contain a link to view the cart. On the view cart page, 
the user can see all the items that are in their cart. Provide a way to remove 
individual items from the cart.

The view cart page should have a link to return to the browse page for more 
shopping and a link to continue to the checkout page.