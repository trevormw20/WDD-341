<?php

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

switch ($action) {

    case 'addItem':
        $itemName = filter_input(INPUT_POST, 'itemName', FILTER_SANITIZE_STRING);
        $quantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_NUMBER_INT);
        $itemPrice = filter_input(INPUT_POST, 'itemPrice', FILTER_SANITIZE_NUMBER_INT);

        $itemAdded = addItem($itemName, $quantity, $itemPrice);

        if ($itemAdded) {
            $message = '<p class="center">Item added to your shopping cart.</p>';
            exit;
        } else {
            $message = '<p class="center">The reivew could not be added at this time. Please try agian later.</p>';
            exit;
        }
        var_dump($_SESSION[$itemName]);
        break;

    case 'removeItem':

        break;

    case 'reduceQuantity':

        break;

    case 'increaseQuantity':
        break;

    default:
        $pageTitle = 'Profile';
        include '../accounts/index.php';
        exit;
        break;
}

function addItem($itemName, $quantity, $itemPrice)
{
    $_SESSION["item"] = $itemName;
    $_SESSION["item"]["quantity"] = $quantity;
    $_SESSION["item"]["itemPrice"] = $itemPrice;
    $_SESSION["item"]["totalCost"] = $quantity * $itemPrice;
}

function removeItem($itemName)
{
    unset($_SESSION[$itemName]);
}

function reduceQuantity($itemName)
{
    $_SESSION["item"]["quantity"] -= 1;
    $_SESSION["item"]["totalCost"] = $_SESSION["item"]["quantity"] * $_SESSION["item"]["itemPrice"];
}
function increaseQuantity($itemName)
{
    $_SESSION["item"]["quantity"] += 1;
    $_SESSION["item"]["totalCost"] = $_SESSION["item"]["quantity"] * $_SESSION["item"]["itemPrice"];
}
