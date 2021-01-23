<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WDD341 Checkout</title>
    <meta name="description" content="Trevor Williams Checkout for WDD 341">
    <link rel="stylesheet" type="text/css" href="css/style.css?version=2">
</head>

<body>
    <nav>
        <?php include 'nav.php'; ?>
    </nav>

    <main>
        <h1>Checkout</h1>
        
        <form action="/phpmotors/accounts/index.php" method="post" class="account-form">
                <h3>Please sign up for your account</h3>
                <label>First Name</label>
                <input required name="clientFirstname" id="clientFirstname" type="text" placeholder="First Name" <?php if(isset($clientFirstname)){echo "value='$clientFirstname'";}  ?>>
                <label>Last Name</label>
                <input required name="clientLastname" id="clientLastname" type="text" placeholder="Last Name" <?php if(isset($clientLastname)){echo "value='$clientLastname'";}  ?>>
                <label>Email Address</label>
                <input required name="clientEmail" id="clientEmail" type="email" placeholder="email@domain.com" <?php if(isset($clientEmail)){echo "value='$clientEmail'";}  ?>>
                <h5>All fields required.</h5>
                <input type="submit" value="Complete Purchase" class="checkout-button">
                <!--Add the action key-value pair-->
                <input type="hidden" name="action" value="checkout">
        
                <a id="viewcartLink" href="viewcart.php">View Cart</a>
    </main>

    <footer>
    </footer>
</body>

</html>


The checkout page should ask the user for the different components of their 
address. (No credit card or other purchase information is collected, only an address.)

It should have the option to complete the purchase or return to the cart.