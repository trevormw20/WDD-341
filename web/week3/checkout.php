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
        <?php include '/nav.php'; ?>
    </nav>

    <main>
        <h1>Checkout</h1>
        
        <form action="/phpmotors/accounts/index.php" method="post" class="account-form">
                <h3>Please sign up for your account</h3>
                <label>First Name</label>
                <input required name="firstname" id="firstname" type="text" placeholder="First Name">
                <label>Last Name</label>
                <input required name="lastname" id="lastname" type="text" placeholder="Last Name">
                <label>Street</label>
                <input required name="street" id="street" type="text" placeholder="123 Number Dr.">
                <input required name="city" id="city" type="text" placeholder="snowville">
                <input required name="state" id="state" type="text" placeholder="UT">
                <input required name="zipcode" id="zipcode" type="number" placeholder="123456">
                
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
